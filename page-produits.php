<?php /*Template name: Categorie de produits*/

$lienRacine = "" . get_site_url() . "/wp-content/themes/batteries/";

get_header(); ?>

<!-- Author: Samuel Loranger -->
<div id="contenu" class="">
    <div class="conteneur">
        <h1 id="services" class="produits__titre">Nos produits</h1>
        <div class="produits__recherche">
	        <?php get_search_form(); ?>
        </div>

        <div class="produits">
            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-solaire/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/solar-panel.svg" alt=""/>
                <h3 class="produits__produit__titre">Solaire</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-lampes/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/lumiere.svg" alt=""/>
                <h3 class="produits__produit__titre">Lampes</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-batteries/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/batteries.svg" alt=""/>
                <h3 class="produits__produit__titre">Batteries</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-quadriporteur/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/scooter.svg" alt=""/>
                <h3 class="produits__produit__titre">Quadriporteurs</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-chargeurs/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/charging.svg" alt=""/>
                <h3 class="produits__produit__titre">Chargeurs</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-chauffe-eau/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/chauffe-eau.svg" alt=""/>
                <h3 class="produits__produit__titre">Chauffe-eau</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-pompes/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/pompes.svg" alt=""/>
                <h3 class="produits__produit__titre">Pompes</h3>
            </a>

            <a class="produits__produit" href="<?= get_site_url(); ?>/produits-accessoires/">
                <img class="produits__produit__logo" src="<?= $lienRacine; ?>images/svg/accessoires.svg" alt=""/>
                <h3 class="produits__produit__titre">Accessoires</h3>
            </a>
        </div>
    </div>

<!-- Importation du footer -->
<?php get_footer(); ?>
