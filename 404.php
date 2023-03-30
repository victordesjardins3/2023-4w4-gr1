<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main" id="404__erreur">
        <pre class="nompagepre">404.php</pre>
        <div class="erreur">
            <h1>Erreur 404</h1>
            <p>Page introuvable, vous pouvez tenter une recherche</p>
            <?= get_search_form(); ?>
            <p>Nos choix de cours</p>

            <?php 
    
                $menu= "4w4";
                wp_nav_menu(array(
                "menu"=>"$menu",
                "container"=>"nav",
                
            )) ?>

            <p>Les notes de cours</p>

            <?php 
    
                $menu= "4w4";
                wp_nav_menu(array(
                "menu"=>"$menu",
                "container"=>"nav",
              
            )) ?>
        </div>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>