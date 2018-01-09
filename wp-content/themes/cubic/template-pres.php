<?php

/* 
 Template Name: Pres
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
        <div class="col-sm-6 col-md-6 containInMiddle nopadding">
            <div class="col-sm-12 margin65pxTB">
                <h2 class="text-center"><?php echo get_field('page_sb_title'); ?></h2>
                <p><a href="" class="">&nbsp;</a></p>
            </div>

            <?php  if( have_rows('retailers_details') ): while( have_rows('retailers_details') ): the_row(); ?>
                <div class="retailerDetail">
                    <div class="contentbox">                    
                        <p><?php echo get_sub_field('name'); ?><br />
                            <a href="tel:<?php echo get_sub_field('telephone'); ?>"> <?php echo 'Tel.'.get_sub_field('telephone'); ?></a><br>
                            <a href="mailto:<?php echo get_sub_field('email'); ?>"><?php echo get_sub_field('email'); ?></a>
                        </p>                    
                    </div>
                </div>
            <?php endwhile; endif; ?> 

        </div>

        <div class="col-md-6 col-sm-6 rightSideSection nopadding">
            <div class="col-sm-12 text-center margin65pxTB">
                <h2><?php echo get_field('pressrelease_title'); ?></h2>    
                <p><a href="<?php echo get_field('pressrelease_see_all_link'); ?>" class="readMoreBtn"><?php echo get_field('pressrelease_see_all_text'); ?></a></p>
            </div>

            <div class="retailerDetail">


                <?php  $args = array( 
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'orderby'=> 'title', 
                            'order' => 'ASC'

                        );
                        $posts = new WP_Query( $args );
                        if ( $posts->have_posts() ) :  while( $posts->have_posts() ) : $posts->the_post(); ?>
                            <div class="contentbox">
                                <div class="col-sm-4 displayNoneMin768px">
                                
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" />
                                </div>  
                                <div class="col-sm-8">
                                    <h4><?php the_title(); ?></h4>
                                    <p>                        
                                        <?php the_content(); ?>
                                    </p>
                                    <p><a href="<?php the_permalink(); ?>" class="readMoreBtn"><?php echo _e('Read more'); ?></a></p>
                                </div>
                                <div class="col-sm-4 displayBlockMin768px">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" />
                                </div>                    
                            </div>
                        <?php wp_reset_postdata(); endwhile; endif; ?> 
            </div>

        </div>
    </div>



    <div class="container-fluid">
        <div class="container">
            <div class="row margin65pxTB">
                <div class="col-sm-12">
                    <h2 class="text-center"><?php echo get_field('catalog_title'); ?></h2>
                    <?php $file = get_field('catalog_take_a_look_link'); ?>
                    <p class="text-center"><a href="<?php echo $file['url']; ?>" class="readMoreBtn" download><?php echo get_field('catalog_take_a_look'); ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  nopadding">
        <div class="col-md-12 feedsParent nopadding">
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed1.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed2.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed3.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed4.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed5.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed6.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>

            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed7.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed8.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed9.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
            <div class="feedContent nopadding">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feed10.png" class="img-responsive" />
                <div class="overlayContent">
                    <div class="contentBox">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt="img" /></p>
                        <p>451 likes</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>


    <div class="container-fluid">
        <div class="container">
            <div class="row margin65pxTB">
                <div class="col-sm-12">
                    <h2 class="text-center"><?php echo get_field('more_pictures_title'); ?></h2>
                    <p class="text-center"><a href="<?php echo get_field('more_pictures_take_a_look_link'); ?>" class="readMoreBtn"><?php echo get_field('more_pictures_take_a_look'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

                
         
<?php get_footer(); ?>

