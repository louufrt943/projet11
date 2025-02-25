<?php
// Sécurité : Empêche un accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Activation du menu dans WordPress
function theme_setup() {
    register_nav_menu('menu-principal', 'Menu Principal');
}
add_action('after_setup_theme', 'theme_setup');
?>

<?php
function enqueue_theme_scripts() {
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
?>