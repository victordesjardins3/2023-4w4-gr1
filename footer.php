<footer class="site__footer">

    <div class="footer__ensemble">

    <?php the_custom_logo(); ?> 

    <section class="lienimportant">
        <h3>Liens importants</h3>
        <?php  wp_nav_menu(array( 
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete"

                                )); ?>
    </section>
    <section class="propostim">

        <h3>À propos du TIM</h3>
        <p>Infos générales</p>
        <p>Renseignements sur les profs</p>
        <p>Grille de cheminement</p>

    </section>

    <section class="reseaux">
        <h3>Réseaux sociaux</h3>
        <div class="reseauxicons">
        <p><img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32"></p>
        <p><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32"></p>
        <p><img src="https://s2.svgbox.net/social.svg?ic=twitter&color=000" width="32" height="32"></p>
        </div>                        
    </section>

    <section class="coordonnees">
        <h3>Coordonnées du collège</h3>
        <p>3800 R. Sherbrooke E, Montréal, QC</p>
        <p>H1X 2A2</p>
        <p>(514) 254-7131</p>
    </section>

    </div>

    <div class="widget">

        <section class="footer__col">
            <div class="sidebar">
                <?php dynamic_sidebar( 'footer_1' ); ?>
            </div>
        </section>

        <section class="footer__col">
            <div class="sidebar">
                <?php dynamic_sidebar( 'footer_2' ); ?>
            </div>
        </section>

        <section class="footer__col">
            <div class="sidebar">
                <?php dynamic_sidebar( 'footer_3' ); ?>
            </div>
        </section>

    </div>

</footer>
    <?php wp_footer(); ?>