<?php
/**
 * Template permettant d'afficher le zone aside
 */
?>

<aside class="site__aside">
    <h3>Menu secondaire</h3>

    <?php 
    
        $menu= "4w4";
        if(in_category('cours')){
            $menu= "cours";
        }
        // $menu peut prendre les valeurs : "4w4" ou "cours"
        wp_nav_menu(array(
        "menu"=>"$menu",
        "container"=>"nav",
        
    )) ?>
</aside>