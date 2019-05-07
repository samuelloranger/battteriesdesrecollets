<!-- Importation du header -->
<?php get_header(); ?>

<main id="articles" style="max-width: <?php echo $arrWidths[1]; ?>%">
    <?php the_post(); ?>
    <div class="en-tete-page">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>
</main>

<!-- Importation du footer -->
<?php get_footer(); ?>
