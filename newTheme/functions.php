<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function mi_bootstrap_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mi_bootstrap_theme_enqueue_styles');

function mi_bootstrap_theme_setup() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'mi-bootstrap-theme'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery'));
    add_post_type_support('post', 'excerpt');
    // Añadir soporte para logo personalizado con recorte
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'mi_bootstrap_theme_setup');
?>
