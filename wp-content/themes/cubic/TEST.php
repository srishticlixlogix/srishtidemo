


<div class="tab-content shadow retailerSelect">

    <?php
       $j = 0;
        $custom_terms = get_terms('retailer_category');

        foreach ($custom_terms as $custom_term) {
            $args = array('post_type' => 'product',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'retailer_category',
                        'field' => 'slug',
                        'terms' => $custom_term->slug,
                    ),
                ),
            );
            $loop = new WP_Query($args);
            
          if ($loop->have_posts()) {
            if($j == 0){
              $class = 'active';
            }
            else{
              $class = '';
            }
            $j++;
        ?>
         <div role="tabpanel" class="tab-pane $class" id="$cate_name"> 
            <div class="row listing">

              <div class="col-sm-6">

                <?php  while ($loop->have_posts()) : $loop->the_post(); ?>
                          <li><?php the_title(); ?></li>
                <?php  endwhile; ?>
                
              </div>   

            </div>                                   
         </div>
         <?php 
           }
      }
    ?> 

</div>