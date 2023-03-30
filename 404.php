<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre class="nompagepre">404.php</pre>
        <div class="erreur">
            <h1>Erreur 404</h1>
            <p>Page introuvable, vous pouvez tenter une recherche</p>
            <?= get_search_form(); ?>
            <p>Nos choix de cours</p>
            <p>Les notes de cours</p>
        </div>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>