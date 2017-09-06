<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <div class="main-grid">
        <header class="header">
                <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                
                <nav class="header__nav" role="navigation">
                    <?php wp_nav_menu( array('theme_location' => 'primary_menu')); ?>
                </nav> <!-- .header__nav ends! -->
        </header>    
