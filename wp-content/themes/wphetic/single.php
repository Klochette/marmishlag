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
    /*
    * Template Name: article
    * Template Post Type: page, post
    */
?>

<?php
    // init var for template
    $categories =  get_the_category(get_the_ID());
    $ingredients = explode("," ,get_post_meta( get_the_ID(), 'ingredients', true ));
    $prix = get_post_meta(get_the_ID(), 'prix');
    $temps_de_preparation = get_post_meta( get_the_ID(), 'temps_de_preparation');
    $nb_personne = get_post_meta( get_the_ID(), 'nb_personne');

?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php 
        while (have_posts()) : the_post(); 
    ?>
		<div class="header">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="infos_container">
            <div class="first">
                <div class="details d-f">
                    <?php if(isset($prix)) : ?>
                        <p><strong>Temps </strong><br /> <?= $temps_de_preparation[0] ?> min</p>
                    <?php endif ?>
                    <?php if(isset($prix)) : ?>
                        <p><strong>Prix </strong><br /> <?= $prix[0] ?>€</p>
                    <?php endif ?>
                    <?php if(isset($nb_personne)) : ?>
                        <p><strong>Nb pers </strong><br /> <?= $nb_personne[0] ?></p>
                    <?php endif ?>
                </div>
                <div>
                    <p><strong>Ingrédients :</strong></p>
                    <?php if(isset($prix)) : ?>
                        <ul>
                            <?php foreach ($ingredients as $ingredient) : ?>
                                <li><?= $ingredient ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
            <div class="second">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }
                ?>
            </div>
        </div>
            <div>
               
            </div>
           
            <div class="d-f">
                <?php foreach($categories as $categorie) : ?>
                        <p class='item'> <?= $categorie->name ?></p>
                <?php endforeach ?>
            </div>
            <p><small><?php the_date(); ?></small></p>
		</div>
	<?php 
        endwhile;
        endif; 
    ?>
<?php get_footer(); ?>