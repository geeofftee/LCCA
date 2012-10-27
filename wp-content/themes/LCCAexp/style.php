
<?php
/*
Template Name: Styles 
*/


get_header(); ?>

    <section class="row style">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>  
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
    </section>
