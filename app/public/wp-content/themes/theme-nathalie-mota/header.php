<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>app/public/wp-content/themes/theme-nathalie-mota/images/Logo.png" alt="Logo Nathalie Mota">
        </a>
    </div>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container' => 'ul'
        ));
        ?>
    </nav>
</header>
