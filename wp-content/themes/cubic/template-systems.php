<?php
/*
  Template Name: Systems
 */

get_header();
?>

  <!-- Self gutter -->

  <div class="self_gutter">

  <!-- Self gutter -->






  <section>
    <div class="home_banner_sec retail-market-banner">

      <div class="owl-carousel owl-carousel-banner owl-theme">
         <?php if(have_rows('banner')): while (have_rows('banner')): the_row(); ?>

          <div class="item">
             <div class="slide" style="background: url(<?php echo get_sub_field('image'); ?>);"> 

                  <div class="slide_detail dark_colr">
                    <h3><?php echo get_sub_field('title'); ?> </h3>
                    <h2><?php echo get_sub_field('content'); ?></h2>
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
        <li><a href="#sec1">overview</a></li>
        <li><a href="#sec2">systems</a></li>
        <li><a href="#sec3">inquire</a></li>
      </ul>
    </div>
  </aside>



  <section>
    <div class="about_company_about">
      

      <div class="abt_cmp_blks" id="sec1">

        <h6>overview</h6>

        <h1>trax h system</h1>

        <p>Trax H is a slim horizontal slot display system installed into various panel arrangements - continuous or end capped. The sleek profiles (3mm, 6mm and 8mm) of Trax H can bear numerous shelving, front arm displays, hang rails and other CUBIC accessories.</p>

      </div>     



    </div>
  </section>



  <section>
    <div class="project_solutions_section">


      <div class="project_solution system-homes" id="sec2">
        <img src="<?php echo get_template_directory_uri();?>/images/system-1.png" alt="project solution">

        <article>
          <h2>systems</h2>
          <h1>cubic+</h1>
          <h6>Building beautiful furniture made easy.Time after time.</h6>
           <p>Cube+ is a fresh and flexible alternative to traditional display structures; with endless combinations for the architect and designer to realise their customised sales and merchandising concepts. A simplistic 45 degreerotation of the durable connector locks or unlocks the display structure.</p>
          <a href="#">Learn more about cubic+</a>
        </article>
      </div>



      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-2.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-1.png" alt="icon"></span></h2>
          <h1>Flat pack</h1>
          <h6>Essential, reliable &amp; beautiful, out-of-the-box.</h6>
           <p>Aesthetic display stands are an essential component of many fashion retail environments. CUBIC Flat PackedDisplay Stands collection with the fail-safe push button mechanism are loaded with options to fill your space better than all; they are all made to be tough, neatly packed and once assembled, create beautiful interiordisplays that last.</p>
          <a href="#">Learn more about flat pack</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-3.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-2.png" alt="icon"></span></h2>
          <h1>optix</h1>
          <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h6>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
          <a href="#">Learn more about OPTIX</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-4.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-3.png" alt="icon"></span></h2>
          <h1>flex d</h1>
          <h6>Flex D, the all-rounder in single points.</h6>
           <p>With a wide range of accessories, multiple installation options and capping options, including flush rear cappingand machined stainless caps, Flex D is truly the best of its kind. Flex D has been tested and awarded the GS markby Germany’s TÜV Rheinland, validating its performance and our ability to deliver the solution to you.</p>
          <a href="#">Learn more about  flex D</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-6.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-4.png" alt="icon"></span></h2>
          <h1>flex s</h1>
          <h6>Flex S is an innovative extension to the range of CUBIC single point display systems.</h6>
          <p>Flex S enables the Strux accessory range to be installed externally onto wall fixtures, panel arrangements and even into glass panels – even more, single and double sided mounting options are available. Flex S also bridges the Strux high tension pole system to these installations, thus creating endless ways to incorporate the two systems together.</p>
          <a href="#">Learn more about  flex s</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-7.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-5.png" alt="icon"></span></h2>
          <h1>flex q</h1>
          <h6>The single one in the Q family.</h6>
          <p>Flex Q shares the accessories of Trax VQ with Linx Q in single point form. The slim and shallow holder is easy to install onto multiple surfaces and the accessories slip into the holder with ease then lock in for flexible and strong displays.</p>
          <a href="#">Learn more about flex q</a>
        </article>
      </div>

      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-9.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-6.png" alt="icon"></span></h2>
          <h1>TRAX EH</h1>
          <h6>The electrified profile of tomorrow.</h6>
          <p>Trax EH is a low voltage electrified profile designed for powering electronic devices of today and tomorrow. With multiple shelving and merchandising options, Trax EH is the horizontal display system that ticks all the boxes.</p>
          <a href="#">Learn more about trax eh</a>
        </article>
      </div>



      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-10.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-7.png" alt="icon"></span></h2>
          <h1>flex h</h1>
          <h6>The single horizontal choice.</h6>
          <p>Flex H broadens the Trax H arm and brackets range into a single point display on panels, wall displays and mid-floor fixtures. The holder is installed and capped from the rear of a 19mm panel leaving a subtle and discrete entry point for Trax H arms and displays.</p>
          <a href="#">Learn more about flex h</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-11.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-8.png" alt="icon"></span></h2>
          <h1>trax h</h1>
          <h6>Trax H, as seen in the world‘s most compelling interiors</h6>
          <p>Trax H is a slim horizontal slot display system installed into various panel arrangements - continuous or end capped. The sleek profiles (3mm, 6mm and 8mm) of Trax H can bear numerous shelving, front arm displays, hang rails and other CUBIC accessories.</p>
          <a href="#">Learn more about  trax h</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-12.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-9.png" alt="icon"></span></h2>
          <h1>trax v</h1>
          <h6>The timeless vertical.</h6>
          <p>Trax V takes creating beautiful commercial interiors using vertical slot display systems to another level. Merchandise is adorned on continuous shelvintg or on CUBIC accessories, all securely attached to the sleek end capped profiles which are installed into 16mm panels.</p>
          <a href="#">Learn more about trax v</a>
        </article>
      </div>      


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-13.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-8.png" alt="icon"></span></h2>
          <h1>trax v+</h1>
          <h6>Versatile verticals.</h6>
          <p>Trax V+ vertical slot profiles are simple to externally mount onto solid walls, wood and glass panels; with both single and double sided installation options. Accessories from the Trax V range means multiple merchandising displays are possible - from shelving to display arms, hang rails and more.</p>
          <a href="#">Learn more about   trax V+</a>
        </article>
      </div>

      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-14.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-10.png" alt="icon"></span></h2>
          <h1>trax vq</h1>
          <h6>Off the wall.</h6>
          <p>Trax VQ allows for simple single point display or multiple displays on continuous vertical profiling. The single point or strip profiles are simple to externally mount onto solid walls, wood and glass panels; with both single and double sided installation options. Slip the accessories onto the strip and with a click Trax VQ is all set.</p>
          <a href="#">Learn more about trax vq</a>
        </article>
      </div>

      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-15.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-11.png" alt="icon"></span></h2>
          <h1>linx</h1>
          <h6>The strong link.</h6>
          <p>Linx is a mid-floor display system on which 19mm panels are latched onto the sturdy frame. An assortment of CUBIC systems can be installed into these panels or Trax V accessories are attached directly onto the frame’s uprights. Linx is a strong, flexible and versatile fixture unit for any beautiful commercial.</p>
          <a href="#">Learn more about linx</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-16.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-11.png" alt="icon"></span></h2>
          <h1>linx +</h1>
          <h6>Frame in a box.</h6>
          <p>Linx+ is a mobile mid-floor display stand for merchandising goods on shelves, display arms and other Trax V4 dual accessories. The dual vertical slotted upright is delivered with the ever stable die cast base, or with multiple uprights on a sturdy solid base.</p>
          <a href="#">Learn more about linx +</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-17.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-13.png" alt="icon"></span></h2>
          <h1>linx q</h1>
          <h6>Simply beautiful.</h6>
          <p>Linx Q brings the Trax VQ range of accessories to the floor of commercial environments for the display of merchandise and customer browsing goods. This unit is simple to assemble and has the ideal aesthetics for beautiful interior displays.l interior.</p>
          <a href="#">Learn more about linx</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-18.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-14.png" alt="icon"></span></h2>
          <h1>vertix</h1>
          <h6>Some possessions were never meant to touch the ground.</h6>
          <p>Vertix allows a mix of merchandise and graphics to be suspended from the ceiling at any required height. The sleek and contemporary interchangeable snap-lock connectors match the overall aesthetics of the systems profile. A wide assortment of finishes and platforms further increase its adaptability, after-all some possessions were never meant to touch the ground.</p>
          <a href="#">Learn more about vertix</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-19.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-15.png" alt="icon"></span></h2>
          <h1>matrix</h1>
          <h6>The suspended merchandising solution. Like no other.</h6>
          <p>At the core of The Matrix Concept is the simple and secure ability to interchange visual merchandising displays. Displays are connected with multiple connectors and rollers that have the CUBIC snap lock sophistication, ensuring easy assembly and unlimited options for creative suspended displays.</p>
          <a href="#">Learn more about matrix</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-20.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-16.png" alt="icon"></span></h2>
          <h1>strux</h1>
          <h6>Branching out a mix of media and merchandise.</h6>
          <p>Strux is a heavy duty tension mounted pole system that stems the gap between floor and ceiling. The sleek concealed height adjustment mechanism makes Strux an easy but sturdy installation by one person. Strux allows for visual displays to be presented at any height and in all directions. The Strux LCD TV mount furthers the systems ability to deliver effective and innovative merchandising displays.</p>
          <a href="#">Learn more about strux</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-21.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-17.png" alt="icon"></span></h2>
          <h1>point</h1>
          <h6>To the point.</h6>
          <p>Point is the surface mounted point system that will make display surfaces functional and flexible. Plug and play with a range of accessories and platforms that inspire and elevate.</p>
          <a href="#">Learn more about point</a>
        </article>
      </div>


      <div class="project_solution system-homes">
        <img src="<?php echo get_template_directory_uri();?>/images/system-22.png" alt="project solution">

        <article>
          <h2>systems<span><img src="<?php echo get_template_directory_uri();?>/images/system-ico-18.png" alt="icon"></span></h2>
          <h1>rax c</h1>
          <h6>Elegeant on the outside.Very tough on the inside.</h6>
          <p>Rax C may just look like a great display stand, but internally it's so much more. The innovative push button mechanism makes Rax C a very long lasting essential merchandising solution.</p>
          <a href="#">Learn more about rax c</a>
        </article>
      </div>


      
      



      
    </div>
  </section>



  



  <aside>
    <div class="more_qustions dark_more_qustions" id="sec3">
      
      <h1>have more questions?</h1>      

      <a href="#" class="contact_link">contact us</a>

    </div>
  </aside>

  <?php get_footer(); ?>


  <!-- Self gutter -->

  </div>

  <!-- Self gutter -->