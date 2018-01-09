<?php

/* 
 Template Name: Need more pictures
 */

get_header(); ?>


<div class="homePage onlyPress retailerPageOnly">
    <div class="container-fluid sliderSection nopadding">
        <div class="sliderContent">
             <?php $image = get_field('banner_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />      
        </div>        
    </div>

     <div class="retailerZone">
            <ul>
                <?php if(have_rows('retailer_info','options')): while(have_rows('retailer_info','options')): the_row(); ?>
                    <li><a href="<?php echo get_sub_field('link','options'); ?>"><img src="<?php echo get_sub_field('image','options'); ?>" /> <span><?php echo get_sub_field('text','options'); ?></span></a></li>
                <?php endwhile; endif; ?>    
            </ul>
     </div>

    <div class="container-fluid productContainer nopadding retailerSection">
        <div class="col-sm-12 col-md-12 containInMiddle nopadding">
            <div class="col-sm-12 margin65pxTB">
                <h2 class="text-center"><?php the_title(); ?></h2>    
            </div>
        </div>

        <div class="container-fluid  nopadding">
            <div class="col-md-12 feedsParent nopadding">

            <?php 

                $images = get_field('picture_gallery');

                if( $images ): ?>
                        <?php foreach( $images as $image ): ?>

                            <div class="feedContent nopadding">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
                                
                            </div>
                        <?php endforeach; ?>
                <?php endif; ?>
                
            </div>        
        </div>

    </div>
</div>

                
         
<?php get_footer(); ?>

