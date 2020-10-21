<!doctype html>
    <html> 
        <html lang="pl">
        <head>
            <meta charset="UTF-8">
            <meta name="robots" content="all" />
            <meta name="description" content="ZUKI Pattern Design">
            <meta name="keywords" content="zuki,zukitextilestudio,Zuzanna Kielbasa,pattern design,patterns,graphic design,prints">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="google-site-verification" content="pRboR4IzIZWefXas0Ho4Hh1E-B3sH2TxqyroslbZOXo" />
            <title>Zuki textile-studio</title>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" type="text/css">
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
  crossorigin="anonymous">
            <?php wp_head(); ?>
        </head>

        <body>

        <header>
            <nav>
                <div class="main-logo">
                    <a href="http://www.zukitextilestudio.pl/"><img src="http://serwer2096440.home.pl/autoinstalator/wordpress/wp-content/themes/zukitextile/img/Logo%20prostakatne-01.png" alt="Zuki-logo"></a>
                </div>
                <!-- <?php wp_nav_menu(array('theme_location'=>'primary')); ?> -->
                <div class="menu-cover unactive">
                    <div class="hamburger unactive"></div>
                </div>
            </nav>
            <div class="slideout-fade unactive"></div>
            <div class="navigation unactive">
                <div class="navigation-wrap">
                    <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
                </div>
                <div class="social_icons social_icons__mob">
                    <a href="https://www.facebook.com/ZUKITextileStudio/">
                        <img src="http://serwer2096440.home.pl/autoinstalator/wordpress/wp-content/themes/zukitextile/img/FB.png" alt="facebook" style="width:22px;height:22px;">
                    </a>
                    <a href="https://www.instagram.com/zuki.textilestudio/">
                        <img src="http://serwer2096440.home.pl/autoinstalator/wordpress/wp-content/themes/zukitextile/img/IG.png" alt="instagram" style="width:22px;height:22px;">
                    </a>
                </div>
            </div>
        </header>