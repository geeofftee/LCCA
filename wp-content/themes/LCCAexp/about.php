
<?php
/*
Template Name: About
*/


get_header(); ?>

    <section class="row about">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="section-name"><?php the_title(); ?></h1>  
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
    </section>
