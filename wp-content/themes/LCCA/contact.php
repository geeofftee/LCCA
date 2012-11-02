
<?php
/*
Template Name: Contact
*/


get_header(); ?>
<section class="row contact">
  <div class="nine mobile-four column centered contact-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="section-name mobile-four"><?php the_title(); ?></h1> 
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?> 
  </div>
</section>
<?php get_footer(); ?>