<?php
/*
Template Name: Boop
*/
get_header(); ?>

<section class="banner">
    <div class="row">
        <img src="<?php bloginfo('template_directory'); ?>/images/computer.png" alt="Cloud Computer">
        <h1 class="nine">We are the <span class="highlighted">Legal Cloud Computing Association</span>
(LCCA), a consortium of leading cloud 
computing providers.</h1>
    </div>
</section>
<div class="row">
    <section class="latest-news content clear eleven column    centered">
        <h1 class="section-name mobile-four">Latest News</h1>

        <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <a href="<?php the_permalink();?>">
                    <h1 class="blue"><?php the_title();?></h1>
                </a>
                <p class="date small"><?php the_date('F j, Y');?></p>
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
</div>


