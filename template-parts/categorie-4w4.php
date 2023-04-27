<?php /**
 * template part gabarit categorie-cours permet d'afficher un article block
 * qui s'intègre dans la liste des cours qu'accède avec category/cours
 */
$titre = get_the_title();
// retirer le premier 0 du titre d'article de catégorie 4w4
if (substr($titre, 0, 1) == '0') {
    $titre = substr($titre, 3);
} 

?>

<article class="blocflex__article">

    <figure class="blocflex__figure"> 
        
        <?php

            $id_premiere_image = 0;

            if (has_post_thumbnail() ) {
                if ( $id_premiere_image == 0) {
                    
                    $id_premiere_image = get_the_ID();

                }

                the_post_thumbnail("thumbnail"); 
                
            }
            else {
                
                echo get_the_post_thumbnail($id_premiere_image, "thumbnail");

            }
        
        ?>
    </figure> 

    <?php // echo get_the_ID(); ?>

    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
  
</article>

<?php 

    // the_excerpt() // le résumé du post
    // the_content() // affiche le contenu complet du post

?>