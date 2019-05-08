<?php /*Template name: Album photo*/

$lienRacine = "" . get_site_url() . "/wp-content/themes/batteries/";
$nomCategorie = "";
$compteurItemsCat = 0;

get_header(); ?>

<!-- Author: Samuel Loranger -->
</div>

<div id="contenu" class="">
    <div class="conteneur">
        <h1 class="albumPhoto__titre">Album photos</h1>
        <div class="albumPhoto__conteneur">
            <?php echo do_shortcode('[rl_gallery id="118"]'); ?>
        </div>
    </div>

<!-- Importation du footer -->
<?php get_footer(); ?>
