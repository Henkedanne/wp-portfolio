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
            <div class="header__logo-wrapper">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>   
                <nav class="header__nav" role="navigation">
                    <?php wp_nav_menu( array('theme_location' => 'primary_menu')); ?>
                </nav> <!-- .header__nav ends! -->
        </header>    
