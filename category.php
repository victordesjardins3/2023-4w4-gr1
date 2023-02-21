<?php 
/**
 * category.php est le modèle par défaut pour afficher une archive d'acticles de catégorie spécifique 
 */
?>

<?php get_header(); ?>
    <main>
        <pre>category.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
                <article>
                    <h5><a href="<?php the_permalink(); ?>"><?= wp_trim_words(get_the_title(),4, " ... "); ?></a></h5>
                    
                    <hr>
                    <?= wp_trim_words(get_the_excerpt(), 10, " ... "); ?>
                </article>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>