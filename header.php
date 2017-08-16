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
        <header>
                <span id="logo"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>   </span>
                
                <nav class="nav-wrapper" role="navigation">
                    
                <?php wp_nav_menu( array('theme_location' => 'primary_menu')); ?>
                
                
                    
                </nav> <!-- .nav-wrapper ends! -->
        </header>    
