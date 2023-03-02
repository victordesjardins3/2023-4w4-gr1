<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4W4</title>
    
    <?php wp_head(); ?>
</head>
<body class="site">
    <header class="site__entete">
        <section class="entete__nav">
            <?php the_custom_logo(); ?> 
            <?php  wp_nav_menu(array( 
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"

                        )); ?>
                <?= get_search_form(); ?>
        </section>
        <h1 class="site__titre"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site__description"><?= bloginfo('description'); ?></h2>
</header>
   
<aside class="site__aside">
    <h3>Menu secondaire</h3>

    <?php 
        $category = get_queried_object();
        if (isset($category)){         
            $menu = $category->slug;
        }
        else{
            $menu= "4w4";
        }
        // $menu peut prendre les valeurs : "4w4" ou "cours"
        wp_nav_menu(array(
        "menu"=>"$menu",
        "container"=>"nav",
        
    )) ?>
</aside>