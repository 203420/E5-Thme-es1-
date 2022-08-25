<?php
/**
 * Header.
 *
 * Esta es la plantilla de header que se mostrara en las distintas paginas del tema, para el funcionamiento correcto 
 * se recomienda agregar un menú (Top Menu) con las paginas creadas al personalizar el tema, asi como un logo personalizado.
 * 
 * This is the header template that will be displayed in the theme pages, it is recommended to create a menu (Top Menu) with
 * the created pages and a custom logo. 
 *
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
<body <?php body_class();?>>

<header>
    <div class="header-img">
        <?php
            if (function_exists ('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }else{
                $logo = wp_get_attachment_image_src('./img/logo.png', 100, 200);
            }
        ?>
        <img src="<?php echo $logo[0] ?>" alt="logo">
    </div>
    <div class="header-info">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'nav-bar',
            )
        );?>
    </div>
</header>