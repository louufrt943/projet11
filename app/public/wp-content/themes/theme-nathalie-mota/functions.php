<?php
// Sécurité : Empêche un accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Enregistrer les styles et scripts du thème
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri()); // Charge style.css
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Space+Mono:ital,wght@0,400;1,400;1,700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

// Ajouter le menu dans WordPress (facultatif mais utile)
function theme_setup() {
    register_nav_menu('menu-principal', 'Menu Principal');
}
add_action('after_setup_theme', 'theme_setup');
