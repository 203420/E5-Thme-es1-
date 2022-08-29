<?php
/**
 * Functions.
 *
 * En este documento se agregan aspectos importantes para el tema, como soporte de distintas opciones, o agregar estilos y scripts.
 * 
 * This document allows the theme to support diferent options, also allows to add styles and scripts to the theme. 
 *
 */
?>

<?php

//Esta función permite añadir opciones para el tema - This function allows to add theme features
function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_support');


//Esta función permite añadir estilos - This function allows to add styles
function load_stylesheets(){
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Esta función permite añadir scripts - This function allows to add scripts
function loadjs(){
    wp_register_script('scripts', get_template_directory_uri() . '/scripts.js', '', 1, true);
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )

);

?>