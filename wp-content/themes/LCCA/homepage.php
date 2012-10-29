<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<section class="banner">
    <div class="row">
        <div class="twelve column centered" style="text-align: centered;">
            <img class="banner-image" src="<?php bloginfo('template_directory'); ?>/images/cloud_computer.png" alt="Cloud Computer">
            <h1 class="banner-text is-hidden">
                We are the <span class="highlighted">Legal Cloud Computing Association</span>
    (LCCA), a consortium of leading cloud 
    computing providers.</h1>
        </div>
    </div>
</section>
<div class="row">
    <section class="latest-news content clear twelve column centered">
        <h1 class="section-name mobile-four">Latest News</h1>
      
        <?php   
            global $post; // required
            $args = array('posts_per_page' => 4); // exclude category 9
            $custom_posts = get_posts($args);
            foreach($custom_posts as $post) : setup_postdata($post);?>
            <article>
                <a href="<?php the_permalink();?>">
                    <h1 class="news-title"><?php the_title();?></h1>
                </a>
                <p class="date small"><?php the_date('F j, Y');?></p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more</a>
            </article>
            <?php 
            endforeach;
            ?>
            <div class="twelve see-more-button content clear">
              <a href="<?php echo get_page_link(71);?>" class="button">See All News</a> 
            </div>
        

    </section>
</div>


<?php get_footer(); ?>