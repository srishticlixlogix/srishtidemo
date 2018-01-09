<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="homePage onlyPress retailerPageOnly">
    <div class="container-fluid sliderSection nopadding margin20pxB">
        <div class="sliderContent">
             <?php $image = get_field('banner_image',141); ?>
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

	<div class="container-fluid margin40pxTB">
	<div class="container">
	<div class="row ">
	
		<?php while ( have_posts() ) : the_post(); ?>
			    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<div class="col-sm-12">				 	
					<h2 class='margintop0px'><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>

				
			</article>
		<?php endwhile; ?>
	</div>
	</div>		
	</div>	



</div>
<?php get_footer(); ?>