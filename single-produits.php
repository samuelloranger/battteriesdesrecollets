<!-- Importation du header -->
<?php get_header(); ?>

<main class="ficheProduit conteneur">
    <a class="pageBouton bouton" href="<?= get_post_permalink(52);?>"><span>Retour aux produits</span></a>
    <div class="ficheProduit__conteneur">
        <?php $image = get_field("image_produit"); ?>

        <h2 class="ficheProduit__conteneur__titreMobile"><?= get_field("nom_produit"); ?></h2>
        <img class="ficheProduit__conteneur__image" src="<?= $image["url"]; ?>">
        <div class="ficheProduit__conteneur__contenu">
            <h2 class="ficheProduit__conteneur__contenu__titre"><?= get_field("nom_produit"); ?></h2>
            <p class="ficheProduit__conteneur__contenu__description"><?= get_field("description"); ?></p>

            <?php if(get_field("marque") != ""){?>
            <span class="h4">Marque: </span><span><?= get_field("marque"); ?></span><br/>
            <?php } ?>

	        <?php if(get_field("prix") != ""){?>
            <span class="h4">Prix: </span><span><?= get_field("prix"); ?></span><span>$</span><br/>
	        <?php } ?>

	        <?php if(get_field("wattage") != ""){?>
            <span class="h4">Wattage: </span><span><?= get_field("wattage"); ?></span><span>W</span><br/>
            <?php } ?>

	        <?php if(get_field("voltage") != ""){?>
            <span class="h4">Voltage: </span><span><?= get_field("voltage"); ?></span><span>V</span><br/>
            <?php } ?>
        </div>
    </div>
</main>

<!-- Importation du footer -->
<?php get_footer(); ?>