<?php /*Template name: Categorie*/

$lienRacine = "" . get_site_url() . "/wp-content/themes/batteries/";
$nomCategorie = "";
$compteurItemsCat = 0;

get_header(); ?>

<!-- Author: Samuel Loranger -->
</div>

<div id="contenu" class="">
    <div class="conteneur">
        <a class="pageBouton bouton" href="<?= get_post_permalink(52);?>"><span>Retour aux produits</span></a>
        <h1 class="categorie__titre"><?= get_the_title(); ?></h1>
        <?php $nomCategorie = get_the_title(); ?>

        <div class="categorie conteneur">
            <?php
            $posts = get_posts(array(
                'posts per page' => -1,
                'post_type' => 'produits',
                'post-status' => 'publish',
                'orderby' => 'the_title',
                'order' => 'ASC',
            ));

            if ($posts):
                foreach($posts as $post):

                    if(get_the_title() != "Auto Draft" && get_field("categorie") == $nomCategorie){ ?>
                        <a href="<?php echo $post -> guid;?>" class="categorie__produit">
                            <?php $image = get_field('image_produit'); ?>
                            <div class="categorie__produit__image">
                                <img src="<?php echo $image['url']; ?>" alt="Image du produit: <?= get_field("nom_produit");?>" />
                            </div>
                            <div class="categorie__produit__informations">
                                <h3 class="categorie__produit__informations__titre"><?= get_field("nom_produit");?></h3>
                                <?php if(get_field("prix") != ""){ ?>
                                <p class="categorie__produit__informations__prix">Prix: <?= get_field("prix");?>$</p>
                                <?php } ?>
                            </div>
                        </a>
                        <?php $compteurItemsCat++; ?>
                    <?php } endforeach; ?>

            <?php endif; ?>

            <?php if($compteurItemsCat == 0){ ?>
                <h2>Aucun item dans cette catégorie.</h2>
            <?php } ?>
        </div>
    </div>

<!-- Importation du footer -->
<?php get_footer(); ?>
