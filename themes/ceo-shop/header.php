<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <div class="site-wrapper">
        <header>
            <div class="site-logo">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo sklepu">
            </div>
            <nav class="menu-wrapper">
                <ul>
                    <li>O nas</li>
                    <li>Promocje</li>
                    <li>Kontakt</li>
                </ul>
            </nav>
        </header>
    