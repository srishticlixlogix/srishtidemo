<?php

/* 
 Template Name: Contact
 */

get_header(); ?>


<div class="productPage contactPage">

    <div class="container-fluid retailerSection ">
        <div class="container">
            <div class="row margin80pxTB">
                <div class="col-sm-12 pageTitle">
                    <h2><?php the_title(); ?></h2>

                </div>
            </div>
        </div>
    </div>

    <div class="retailerZone">
        <ul>
            <?php if(have_rows('retailer_info','options')): while(have_rows('retailer_info','options')): the_row(); ?>
                <li><a href="<?php echo get_sub_field('link','options'); ?>"><img src="<?php echo get_sub_field('image','options'); ?>" /> <span><?php echo get_sub_field('text','options'); ?></span></a></li>
            <?php endwhile; endif; ?>    
        </ul>
    </div>


    <div class="container-fluid productContainer">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="tabsListing">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs displayNoneMobile" role="tablist">

                            <?php 
                              $terms = get_terms( 'contact_category', 'order=DESC&hide_empty=0' );
                              $i = 0;
                              foreach ($terms as $value) {  
                                if($i == 0){
                                  ?>
                                 <li role="presentation" class="active"><a href="#<?php echo $value->name; ?>" aria-controls="<?php echo $value->name; ?>" role="tab" data-toggle="tab"><?php echo $value->name; ?></a></li>
                                <?php   
                                }
                                else{ ?>
                                  <li role="presentation"><a href="#<?php echo $value->name; ?>" aria-controls="<?php echo $value->name; ?>" role="tab" data-toggle="tab"><?php echo $value->name; ?></a></li>

                              <?php   }
                                $i++;
                                  
                                }  
                            ?>    
                        </ul>

                        <p>
                            <select class="form-control displayBlockMobile" id="contactSelect">

                               <?php  foreach ($terms as $value) {   ?>
                                    <option value="#<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                               <?php } ?>
                            </select>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                      <!-- Tab panes -->
                      <div class="tab-content contactSelect">

                          <?php
                                        $j = 0;
                                        $custom_terms = get_terms('contact_category');

                                        foreach ($custom_terms as $custom_term) {
                                            $args = array('post_type' => 'contactpost',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'contact_category',
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
                                            $k = 0;
                                              while ($loop->have_posts()) : $loop->the_post(); 
                                                            $k++;
                                              endwhile; 
                                        ?>
                                         <div role="tabpanel" class="tab-pane <?php echo $class; ?>" id="<?php echo $custom_term->name; ?>"> 
                                            <div class="contactInfo">

                                              <div class="col-sm-12">
                                                <div class="count3">
                                                  <?php  while ($loop->have_posts()) : $loop->the_post(); ?>
                                                            <div class="">
                                                              <h3><?php the_title(); ?></h3>
                                                              <?php the_content(); ?>
                                                            </div>
                                                  <?php  wp_reset_postdata(); endwhile; ?>
                                                </div>
                                              </div>   

                                            </div>                                   
                                         </div>
                                         <?php 
                                           }
                                      }
                                    ?> 
                      </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid contactSection">
        <div class="container">
            <div class="row margin80pxTB">
                <div class="col-sm-10 col-sm-offset-1">

                </div>
            </div>
        </div>
    </div>


</div>


<?php get_footer(); ?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#myAffix').affix({
            offset: {
                top: 100
            }
        });
    });
</script>

