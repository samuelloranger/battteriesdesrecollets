<?php
/*
Template Name: Recherche
*/
?>
<?php
get_header(); ?>

	<!-- Author: Samuel Loranger -->
	</div>

    <h1 class="recherche__titre">Résultats de recherche</h1>
	<div id="contenu"  class="conteneur">

        <div class="recherche__informations">
            <?php if (have_posts() == false){ ?>
                <h2>Aucun résultat de recherche pour: <?php echo get_search_query(); ?></h2>
            <? } else{ ?>
                <h2>Résultats de recherche pour: <?php echo get_search_query(); ?></h2>
            <?php }?>

            <?php get_search_form(); ?>
        </div>

        <div class="recherche__resultats">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

            <?php $image = get_field('image_produit'); ?>
			<?php if($image != null){?>

            <a href="<?php echo get_permalink();?>" class="recherche__produit">
                <div class="recherche__produit__image">
                    <img src="<?php echo $image['url']; ?>" alt="Image du produit: <?= get_field("nom_produit");?>" />
                </div>
                <div class="recherche__produit__informations">
                    <h3 class="recherche__produit__informations__titre"><?= get_field("nom_produit"); ?></h3>
                </div>
            </a>
			<?php }?>
		<?php endwhile; ?>
        </div>


	</div><!-- .wrap -->

<?php get_footer();