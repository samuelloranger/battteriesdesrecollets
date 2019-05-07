<?php $lienRacine = "" . get_site_url() . "/wp-content/themes/batteries/"; ?>
</div> <!-- fermeture de la boîte #contenu -->

<footer class="footer" role="contentinfo">
    <div class="footer__contenu conteneur">
        <img class="footer__contenu__logo" src="<?php echo $lienRacine; ?>images/logo.svg">

        <?php
        //Ajoute la sidebar droite si besoin
        if(is_active_sidebar("footer_gauche")) { ?>
            <aside id="footer_gauche" class="footer__contenu__widget footer__widgetGauche">
                <?php get_sidebar("footer_gauche") ?>
            </aside>
        <?php } ?>

        <?php
        //Ajoute la sidebar droite si besoin
        if(is_active_sidebar("footer_droite")) { ?>
            <aside id="footer_droite" class="footer__contenu__widget footer__widgetDroit">
                <?php get_sidebar("footer_droite") ?>
            </aside>
        <?php } ?>

    </div>

    <div class="footer__credits">
        <small>Site par <a href="https://www.linkedin.com/in/samuel-loranger-b23205174/">Samuel Loranger</a> | Batteries des Récollets &copy; Tous droits réservés</small>
    </div>

</footer>

<?php wp_footer(); ?>

<!--<script type="text/javascript" src="--><?php //echo $lienRacine; ?><!--node_modules/jquery/src/jquery.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="--><?php //echo $lienRacine; ?><!--js/menu.js"></script>-->
<script type="text/javascript" src="<?php echo $lienRacine; ?>js/menu.min.js"></script>
</body>
</html>
