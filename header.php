<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>


</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>


    <header class="nav-bar">
        <nav class="menu">
            <div class="logo">
                <div class="icon"><i class="fa-solid fa-square-full"></i></div>
                <div class="nom">Saloi Sbai</div>
                <div class="metier"> / Developpeuse web</div>
            </div>
            <!-- Menu burger -->
            <!-- <div class="burgerMenu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div> -->

            <div class="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container'      => 'false',
                    'menu_class'     => 'navMenu',
                ))
                ?>
            </div>

        </nav>

    </header>
    <main>