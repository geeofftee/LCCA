<?php
/*
Template Name: Latest News
*/


get_header(); ?>

<section class="row latest-news content clear">
    <div class="nine column centered latest-news-wrapper">
		<h1 class="section-name mobile-four">Latest News</h1>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="row single-article">
                <a href="<?php the_permalink();?>">
                    <h1><?php the_title();?></h1>
                </a>
                <p class="date"><?php the_date('F j, Y');?></p> 
                <?php the_excerpt(); ?>
                <?php //comments_template( '', true ); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</section>

<?php global $post; // required
$args = array(); // exclude category 9
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);?>
<h1><?php the_title(); ?></h1>
<?php the_content();
endforeach;
?>


<?php get_footer(); ?>
