<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motaphoto</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <header class="site-header">
        <div class="container">
            <!-- Conteneur pour le logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Conteneur pour le menu -->
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu_class' => 'menu',
                    'container' => false,
                ));
                ?>
            </nav>
        </div>
    </header>