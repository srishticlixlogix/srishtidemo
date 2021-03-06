<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


		<div class="homePage onlyDesigners prodInnerPage">
		    <div class="container-fluid sliderSection nopadding margin20pxB">
		        <div class="sliderContent margin20pxB">
		             <?php $image = get_field('banner_image','10'); ?>
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

		    <div class="container-fluid">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h2><?php echo get_the_title(10); ?></h2>                    
		                </div>
		            </div>
		            <div class="row aboutusId displayBlockMin768px">

		                <?php $terms = get_terms( 'product_category', 'orderby=term_id&order=DESC&hide_empty=0' ); 

		                foreach ($terms as $value) {   ?>
		                  <div class="col-sm-2 text-center">
		                      <h4><a href="<?php echo get_term_link( $value ); ?>"><?php echo $value->name; ?></a></h4>                    
		                  </div>
		                <?php  } ?>
		            </div>

		            <div class="row displayNoneMin768px">
		                <div class='col-sm-12'>                     
		                    <p>
		                         <select id="selectchange" class="form-control">
			                        <?php  foreach ($terms as $value) { ?>
			                            <option value="<?php echo get_term_link( $value ); ?>"><?php echo $value->name; ?></option>
			                        <?php } ?>
		                        </select>
		                    </p>
		                </div>
		            </div>
		        </div>
		    </div>


		    <div class="container-fluid productsDetail margin65pxTB prodInnerPageContent">
		        <div class="container">
		            <div class="row productsRow">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							 <div class="col-sm-4">
			                    <div class="productStore">
			                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" />
			                        <div class="overlayContent">
			                            <div class="contentBox">                                
			                                <h3><?php the_title(); ?></h3>
			                                <?php the_content(); ?>
			                                <p class="text-center"><a href="<?php the_permalink(); ?>" class="readMoreBtn">Read More</a></p>
			                            </div>
			                        </div>
			                    </div>
			                </div>
								
						<?php 	endwhile; endif;  ?>

					</div>
        		</div>
    		</div>
	

		</div>

<?php get_footer(); ?>
<script type="text/javascript">
    
    jQuery(document).ready( function(){
        jQuery("#selectchange").val(window.location.href);
        jQuery("#selectchange").change( function(){
            //alert(jQuery(this).val());
            window.location.href = jQuery(this).val();
        });

    });
</script>