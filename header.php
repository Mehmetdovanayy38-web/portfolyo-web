<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <div class="logo">
                <i class="fa-solid fa-code" style="color: var(--primary);"></i>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo('name'); ?></span></a>
            </div>
            <nav class="nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-list',
                    'container'      => false,
                    'fallback_cb'    => false, // Do not fallback to wp_page_menu
                ) );
                ?>
            </nav>
            <a href="#" class="btn btn-primary btn-sm">Özgeçmiş</a>
        </div>
    </header>
