<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <div class="site-wrapper">
        <header class="site-header">
            <div class="container header-container">

                <div class="header-left">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="Logo sklepu" class="site-logo">
                    </a>
                    <nav class="menu-wrapper">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'left_main_menu'
                        )); ?>
                    </nav>
                </div>

                <div class="header-right">
                    <nav class="menu-wrapper">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'right_main_menu'
                        )); ?>
                    </nav>
                </div>

            </div>
        </header>
    