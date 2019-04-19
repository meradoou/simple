<?php

/**
 * Les fichiers CSS
 * 
 * @return void
 */
function simple_stylesheets()
{
    wp_enqueue_style('simple', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'simple_stylesheets');

/**
 * Ne pas afficher la barre d'administration
 * 
 * @return false
 */
function simple_adminbar()
{
    return false;
}
add_filter('show_admin_bar', 'simple_adminbar');

/**
 * Définir les fonctionnalités themes
 * 
 * @return void
 */
function simple_setup_theme()
{
    register_nav_menu('primary', 'Primary');
}

add_action('after_setup_theme', 'simple_setup_theme');
