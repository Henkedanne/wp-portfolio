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
        <header class="page-header">

            <div class="page-header__back">
                <a href="<?php echo home_url(); ?>">Go back</a>
            </div>
            <nav class="page-header__nav" role="navigation">
                <?php wp_nav_menu( array('theme_location' => 'primary_menu')); ?>
            </nav> <!-- .header__nav ends! -->
        </header>    
