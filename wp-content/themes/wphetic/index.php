<?php
 function debug($var)
 {
     echo "<pre>";
     print_r($var);
     echo "</pre>";
     die();
 }
?>

<?php
	// init var for post
	$categories =  get_categories();
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<div class="index">
		<div class="d-f filter">
			<p>Filtres :</p>
			<ul class="d-f">
				<?php foreach($categories as $categorie) : ?>
					<li> <?= $categorie->name ?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="post_ctn">
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php
					// init var for post
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
					$categories_item =  get_the_category(get_the_ID());
				?>
					<div class="post_card">
						<div class="img" style="--bg-image: url(<?= $thumbnail[0] ?>)">
						</div>
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="d-f">
							<?php foreach($categories_item as $categorie) : ?>
								<p class='item'> <?= $categorie->name ?></p>
							<?php endforeach ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="link-action"></a>
					</div>
				<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>

