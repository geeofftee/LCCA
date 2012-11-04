<?php
/*
Template Name: All posts
*/
get_header(); ?>
<div class="row">
  <section class="latest-news content clear ten centered column mobile-four">
      <h1 class="section-name mobile-four">LCCA News</h1>

      <?php if ( have_posts() ) : ?>
          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <article>
              <a href="<?php the_permalink();?>">
                  <h2 class="news-title"><?php the_title();?></h2>
              </a>
              <p class="date small"><?php the_date('F j, Y');?></p>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
          </article>
          <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
  </section>
</div>


<?php get_footer(); ?>