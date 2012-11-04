<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
	<article class="row single-article">
		<div class="ten column centered mobile-four">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="news-title single-news-title"><?php the_title(); ?></h1> 
            <p class="date small"><?php the_date('F j, Y');?></p> 
            <div class="mobile-four">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
	  </div>
  </article>
<?php get_footer(); ?>