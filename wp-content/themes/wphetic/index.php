<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<div>
		<?php while (have_posts()) : ?>
			<?php the_post(); ?>
			<div>
                <h2><?php the_title(); ?></h2>
                <p><small><?php the_terms(get_the_ID(), 'style'); ?></small></p>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Decouvrir plus...</a>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
<?php get_footer(); ?>