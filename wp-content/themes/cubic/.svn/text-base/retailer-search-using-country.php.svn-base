
<?php

/* 
 Template Name: Retailer Search by country
 */


$retailer_country = $_POST['retailer_country'];


$args = array( 
    'post_type'   => 'retailerpost',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_value' => $retailer_country,
    'orderby'=> 'title', 
    'order' => 'ASC'

);
$posts = new WP_Query( $args );
if ( $posts->have_posts() ) : 
?>
<?php while( $posts->have_posts() ) : $posts->the_post() ?>
    <div class="retailerDetail">
        <div class="contentbox">
            <h4><?php the_title(); ?></h4>
            <p>
                <a href="tel:<?php echo get_field('phone_number'); ?>"><?php echo get_field('phone_number'); ?></a><br />
                <a href="mailto:<?php echo get_field('email_id'); ?>"><?php echo get_field('email_id'); ?></a>
            </p>
            <p class="arrowIcon"><a href="<?php the_permalink(); ?>" class="readMoreBtn" style="border:0;"></a></p>
        </div>
    </div>
  
<?php wp_reset_postdata(); endwhile;  endif; ?>

