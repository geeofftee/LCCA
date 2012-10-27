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
		<div class="nine column centered">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1> 
            <p class="date"><?php the_date('F j, Y');?></p> 
            <?php the_content(); ?>
            <?php //comments_template( '', true ); ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
	  </div>
  </article>


<?php get_footer(); ?>