
<?php

/* 
 Template Name: Retailer Search
 */

function count_digit($number) {
return strlen((string) $number);
}

$retailer_zipcode = $_POST['retailer_zipcode'];
$number_of_digits = count_digit($retailer_zipcode); 
$value  = pow(10,$number_of_digits-1);
$min_limit = $retailer_zipcode-$value;
$max_limit = $retailer_zipcode+$value;
if(!empty($retailer_zipcode)){
    $args = array( 
        'post_type'   => 'retailerpost',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby'=> 'title', 
        'order' => 'ASC'
        );

$posts = new WP_Query( $args );
if ( $posts->have_posts() ) : 
?>
<?php while( $posts->have_posts() ) : $posts->the_post(); if( get_field('zip_code') <= $max_limit && get_field('zip_code') >= $min_limit ): ?>
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
  
<?php endif; wp_reset_postdata(); endwhile;  endif; 
}



