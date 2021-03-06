
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php bloginfo("name"); ?>
        <?php if(is_home() OR is_front_page()) : ?>
            &mdash; <?php bloginfo("description");?>
        <?php else : ?>
            &mdash; <?php wp_title("", true); ?>
        <?php endif; ?>
    </title>

    <?php $lienRacine = "" . get_site_url() . "/wp-content/themes/batteries/"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $lienRacine; ?>images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $lienRacine; ?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $lienRacine; ?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $lienRacine; ?>images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $lienRacine; ?>images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $lienRacine; ?>images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-config" content="<?php echo $lienRacine; ?>images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="<?php echo $lienRacine; ?>css/styles.css"/>
<!--    <link rel="stylesheet" href="--><?php //echo $lienRacine; ?><!--css/styles.min.css"/>-->
    <?php wp_head(); ?>

</head>
<body <?php  body_class(); ?>>


<header id="en-tete" class="header">
    <noscript class="noscript">Attention! Ce site fonctionne mieux avec Javascript... Veuillez l'activer.</noscript>

    <div class="header__conteneur conteneur">
        <a class="header__logo" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo $lienRacine; ?>images/logo.svg">
        </a>

        <?php if(has_nav_menu('principal')) : ?>
            <nav id="principal" class="header__nav">
                <?php wp_nav_menu( array('theme_location' => 'principal'));?>
            </nav>
        <?php endif; ?>


        <?php if(has_nav_menu('principal')) : ?>
            <nav id="principal" class="header__navMobile header__navMobile--ferme">
                <?php wp_nav_menu( array('theme_location' => 'principal'));?>
            </nav>
        <?php endif; ?>

        <div class="header__reseauxSociaux">
            <a class="header__reseauxSociaux__telephone" href="tel:819-840-3377">
                <span class="header__reseauxSociaux__telephone__logo"></span>
                <span class="header__reseauxSociaux__telephone__num">(819) 840-3377</span>
            </a>

            <a class="header__reseauxSociaux__facebook" href="https://www.facebook.com/pirrretremblay/">
                <span class="header__reseauxSociaux__facebook__logo"></span>
            </a>
        </div>
    </div>
</header>