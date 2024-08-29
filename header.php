<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() || is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo(THEME_ASSETS_URI); ?>/fontawesome/css/all.min.css" rel="stylesheet" />
  
    <!--<link rel="apple-touch-icon" sizes="180x180" href="<?php echo(THEME_ASSETS_URI); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo(THEME_ASSETS_URI); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo(THEME_ASSETS_URI); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo(THEME_ASSETS_URI); ?>/img/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">-->
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <div id="site-wrapper" class="site wide">
        <header id="masthead" class="site-header">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="<?= get_home_url(); ?>">
                                <img id="site-logo" src="<?php echo(get_template_directory_uri() . '/assets/images/chad-barbee-logo.webp'); ?>" alt="" title="" height="67" />
                            </a>
                        </div>
                        <div class="col nav">
                            <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<nav id="main-menu" class="nav-inner-wrapper site-width"><ul class="ctr">%3$s</ul></nav>', 'theme_location' => 'main-menu' ) ); ?>
                            
                        </div>
                        <div class="col">
                            <a class="button" href="/resume/chadbarbee.pdf">Download Resume</a>
                            <div class="mobile-nav-expand-wrapper">
                                <a href="#" aria-label="Mobile Menu Expander Icon" id="nav-expand">
                                    <i aria-hidden="true" class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>