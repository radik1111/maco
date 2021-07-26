<!DOCTYPE html>
<html>
    <head>
        <title>Bulldog.Studio</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        
        <?php wp_head(); ?>
        <?php do_action('wpredirect'); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <a href="/" class="logo">
                    <?php 
                        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                    ?>
                    <img src="<?php echo $custom_logo__url[0]; ?>" alt="">
                </a>
                <div class="burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <?php wp_nav_menu( [
                        'theme_location'  => 'header',
                        'container'       => '',
	                    'menu_class'      => 'nav',
	                    'menu_id'         => 'nav-header',
	                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ] ); ?>
                <div class="right">
                    <a href="/?eng=1" id="eng">ENG</a>
                    <a href="tel:<?php the_field( 'tel_number_head', 'option' ); ?>" class="tel"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt=""><?php the_field( 'tel_number_head', 'option' ); ?></a>
                </div>
                <div class="overlay"></div>
                <div class="clearfix"></div>
            </header>
        </div>