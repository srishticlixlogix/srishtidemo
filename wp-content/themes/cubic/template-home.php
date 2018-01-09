<?php

/* 
 Template Name: Home
 */

get_header();  ?>



  <!-- Self gutter -->

  <div class="self_gutter">

  <!-- Self gutter -->



  <div class="mobile_hambergure">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>



  <section>
    <div class="home_banner_sec">

      <div class="owl-carousel owl-carousel-banner owl-theme">

        <?php if(have_rows('banner_slider')): while (have_rows('banner_slider')): the_row(); ?>

          <div class="item">

              <div class="slide" style="background: url(<?php echo get_sub_field('image'); ?>);">        

                <div class="slide_detail">
                  <h3><?php echo get_sub_field('place'); ?> |</h3>
                  <h2><?php echo get_sub_field('heading'); ?></h2>
                </div>

                <div class="slide_box">
                  <h6><?php echo get_sub_field('title'); ?></h6>
                  <h1><?php echo get_sub_field('content'); ?></h1>
                </div>                

              </div>

          </div>

        <?php endwhile; endif; ?>  


      </div>


          <div class="banner-controls">
            <div class="customPrevBtn-banner"></div>
            <div class="customNextBtn-banner"></div>
          </div>
        
    </div>
  </section>



  <aside id="smart-navigator">
    <div class="page_navigator">
      <ul>
        <?php if(have_rows('navigation')): while(have_rows('navigation')): the_row(); ?>
          <li><a href="<?php echo get_sub_field("link_section_id"); ?>"><?php echo get_sub_field('text'); ?></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </aside>



  <section>
    <div class="home_about">
      

      <div class="hmabt_blocks" id="discover">

        <div class="hmabt_blocks_con">
          <h1><?php echo get_field('discover_title'); ?></h1>
          <p><?php echo get_field('discover_content'); ?></p>
          <a href="<?php echo get_field('discover_learn_more_link'); ?>"><?php echo get_field('discover_learn_more_text'); ?></a>
        </div>

        <div class="hmabt_blocks_img">
          <img src="<?php echo get_field('discover_image'); ?>" alt="Intro Image">
          <p><?php echo get_field('discover_image_content'); ?></p>
        </div>

      </div>



      <div class="hmabt_blocks" id="expertise">        

        <div class="hmabt_blocks_con">
          <h1><?php echo get_field('expertise_title'); ?></h1>
          <p><?php echo get_field('expertise_content'); ?></p>
          <a href="<?php echo get_field('expertise_learn_more_link'); ?>"><?php echo get_field('expertise_learn_more_text'); ?></a>
        </div> 


        <div class="hmabt_blocks_img">
          <img src="<?php echo get_field('expertise_image'); ?>" alt="Intro Image">
          <p><?php echo get_field('expertise_image_content'); ?> </p>
        </div>       

      </div>



    </div>
  </section>



  <section>
    
    <div class="display_board" id="projects">


      
      <div class="display_board_one">

        <img src="<?php echo get_field('solutions_image'); ?>" alt="display_board">



        <div class="con_area_one">

          <div class="con_area_one_inner">

            <h2><?php echo get_field('solutions_title'); ?></h2>
            <p><?php echo get_field('solutions_content'); ?></p>
            <a href="<?php echo get_field('solutions_learn_more_link'); ?>"><?php echo get_field('solutions_learn_more_text'); ?></a>

          </div>

        </div>

      </div>




      <div class="display_board_one display_board_two">       



        <div class="con_area_one">

          <div class="con_area_one_inner">

            <h2><?php echo get_field('systems_title'); ?></h2>
            <p><?php echo get_field('systems_content'); ?></p>
            <a href="<?php echo get_field('systems_learn_more_link'); ?>"><?php echo get_field('systems_learn_more_text'); ?></a>
            
          </div>

        </div>


        <img src="<?php echo get_field('systems_image'); ?>" alt="display_board">

      </div>



      <div class="display_board_one display_board_three">       



        <div class="con_area_one">

          <div class="con_area_one_inner">

            <h2><?php echo get_field('specifications_title'); ?></h2>
            <p><?php echo get_field('specifications_content'); ?></p>
            <a href="<?php echo get_field('specifications_learn_more_link'); ?>"><?php echo get_field('specifications_learn_more_text'); ?></a>
            
          </div>

        </div>


        <div class="con_area_one">

          <div class="con_area_one_inner">

            <h2><?php echo get_field('conatct_title'); ?></h2>
            <p><?php echo get_field('contact_content'); ?></p>
            <a href="<?php echo get_field('contact_learn_more_link'); ?>"><?php echo get_field('contact_learn_more_text'); ?></a>
            
          </div>

        </div>

      </div>




    </div>

  </section>



  <aside>
    <div class="stay_connected_section" id="connected">
      
      <h1><?php echo get_field('connected_title'); ?></h1>
      <p><?php echo get_field('connected_content'); ?></p>

      <input type="text" name="email" placeholder="Enter Email address" class="connected_input">

      <a href="#" class="subscribe">subscribe</a>

    </div>
  </aside>



<?php get_footer(); ?>


  <!-- Self gutter -->

  </div>

  <!-- Self gutter -->