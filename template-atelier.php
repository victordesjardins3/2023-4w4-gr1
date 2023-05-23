<?php

/**
 * Template name: Atelier
 */

?>

<?php get_header(); ?>

<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('medium'); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Formateur : <?php the_field('formateur'); ?></p>
<p>Heure : <?php the_field('heure_de_la_formation'); ?></p>
<p>Date : <?php the_field('date_de_latelier'); ?></p>
<p>Duree : <?php the_field('duree'); ?></p> 
<p>Local : <?php the_field('local'); ?></p> 
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();