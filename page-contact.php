<?php
/*
Template Name: Contact
*/
?>
<?php
get_header(); ?>

    <h1 class="contact__titre"><?php echo the_title(); ?></h1>
	<div class="contact__conteneur conteneur">

	    <iframe class="contact__carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2754.6385321410207!2d-72.57958308450928!3d46.3368701828098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc7cf49e9c1d7ab%3A0x4fb6e120f62200e!2sBatteries+Des+R%C3%A9collets+Inc.!5e0!3m2!1sfr!2sca!4v1556584161199!5m2!1sfr!2sca"frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="contact__informations">
            <div class="contact__informations__adresse">
                <h2>Nous joindre</h2>
                <h3>Adresse</h3>
                <p>2475 boul. Des Récollets, Trois-Rivières</p>
                <p>Québec, G8Z 4G1</p>

                <h3>Téléphone</h3>
                <p>(819) 840-3377</p>

                <h3>Courriel</h3>
                <p>batxnb@live.ca </p>
            </div>

            <div class="contact__informations__heuresOuvertures">
                <h2 class="contact__informations__heuresOuvertures__titre">Heures d'ouvertures</h2>
                <div class="contact__informations__heuresOuvertures__tableau"><?php echo do_shortcode('[mbhi_hours location="Batteries des Récollets"]'); ?></div>
            </div>
        </div>
	</div>

    <div class="contact__equipe conteneur">
        <h2 class="contact__equipe__titre">Notre équipe</h2>

        <div class="contact__equipe__membres">
	        <?php
	        $posts = get_posts(array(
		        'posts per page' => -1,
		        'post_type' => 'equipe',
		        'post_status' => 'the_title',
		        'orderby' => 'meta_value_num',
		        'order' => 'ASC',
	        ));

	        if ($posts):
		        foreach($posts as $post):
			        if(get_the_title() != "Brouillon auto") { ?>

                        <div class="contact__equipe__membres__membre">
					        <?php $image = get_field('photo'); ?>

                            <img class="contact__equipe__membres__membre__image" src="<?php echo $image['url']; ?>" alt="Image du produit: <?= get_field("nom");?>"/>

                            <div class="contact__equipe__membres__membre__informations">
                                <h3 class="contact__equipe__membres__membre__informations__nom"><?= get_field("nom"); ?></h3>
                                <h4 class="contact__equipe__membres__membre__informations__fonction"><?= get_field("fonction"); ?></h4>
                            </div>
                        </div>

			        <?php } endforeach; ?>
	        <?php endif; ?>
        </div>
    </div>
<?php get_footer();