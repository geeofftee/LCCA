
<?php
/*
Template Name: Members
*/


get_header(); ?>

<section class="row members">
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <h1 class="section-name"><?php the_title();?></h1>
      <?php the_content(); ?>  
      <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?> 
    
    <div class="row logos">
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.goclio.com/">
                <img src="<?php bloginfo('template_url');?>/images/clio.png" alt="Clio Logo" id="clio">
            </a>
        </div>
        <div class="four left logos mobile-four mobile">
            <a target="_blank" href="http://www.dialawg.com/">
                <img src="<?php bloginfo('template_url');?>/images/sendengine.png" alt="Sendengine Logo" id="se">
            </a>
        </div>
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.directlaw.ca/">
                <img src="<?php bloginfo('template_url');?>/images/directlaw.png" alt="Directlaw Logo" id="dl">
            </a>
        </div>
    </div>
    <div class="row logos">
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.realpractice.com/">
                <img src="<?php bloginfo('template_url');?>/images/realpractice.png" alt="Realpractice Logo" id="rp">
            </a>
        </div>
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.rocketmatter.com/">
                <img src="<?php bloginfo('template_url');?>/images/rocketmatter.png" alt="Rocketmattter Logo" id="rm">
            </a>
        </div>
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.netdocuments.com/">
                <img src="<?php bloginfo('template_url');?>/images/netdocuments.png" alt="Netdocuments Logo" id="netdocs">
            </a>
        </div>
    </div>
    <div class="row logos">
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.onit.com/">
                <img src="<?php bloginfo('template_url');?>/images/onit.png" alt="Onit Logo" id="onit">
            </a>
        </div>
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.nextpoint.com/">
                <img src="<?php bloginfo('template_url');?>/images/nextpoint.png" alt="Nextpoint Logo" id="np">
            </a>
        </div>
        <div class="four left logos mobile-four">
            <a target="_blank" href="http://www.totalattorneys.com/">
                <img src="<?php bloginfo('template_url');?>/images/totalattorneys.png" alt="TotalAttorney Logo" id="ta">
            </a>
        </div>
    </div>
    
    <div class="row logos">
        <div class="twelve left logos mobile-four">
            <a target="_blank" href="http://calendarrules.com/">
               <img src="<?php bloginfo('template_url');?>/images/calendarrules.png" alt="Calendarrules Logo" id="cr">
            </a>
        </div>
    </div>
  </div>
  
 </section>

 <?php get_footer(); ?>
		