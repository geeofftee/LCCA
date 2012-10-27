<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<div class="row banner">
    <div class="nine column centered banner-width">
        <div class="two left mobile-four mobile-hide cloud-computer">
            <img src="<?php bloginfo('template_directory'); ?>/images/computer.png" alt="Cloud Computer">
        </div>
        <div class="ten columns left mobile-four" style="margin-top: -0.5625em;">
            <h1>We are the <span class="grey">Legal Cloud Computing Association</span>
    (LCCA), a consortium of leading cloud 
    computing providers.</h1>
        </div>
        <div class="clear"></div>
    </div>
 </div>

<section class="row latest-news content clear">
    <h1 class="section-name mobile-four">Latest News</h1>

    <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article class="six column left mobile-four">
            <p class="date"><?php the_date('F j, Y');?></p>
            <a href="<?php the_permalink();?>">
                <h1 class="blue"><?php the_title();?></h1>
            </a>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>
        </article>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section>
<div class="twelve see-more-button content">
  <a href="#" class="button">See All News</a> 
</div>


<?php get_footer(); ?>