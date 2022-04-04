<?php 
    /*
    * Template Name: article
    * Template Post Type: page, post
    */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php 
        while (have_posts()) : the_post(); 
    ?>
		<div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <p><small><?php the_date(); ?></small></p>
		</div>
	<?php 
        endwhile;
        endif; 
    ?>
<?php get_footer(); ?>