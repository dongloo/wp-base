<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <meta property="fb:app_id" content="1022485919031509" /> -->
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="//www.youtube.com">
    <!-- <link rel="dns-prefetch" href="//canhovinhomes.info"> -->
    <link rel="dns-prefetch" href="//www.facebook.com">
    <link rel="dns-prefetch" href="//connect.facebook.net">
    <link rel="dns-prefetch" href="//www.gstatic.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//schema.org">
    <link rel="dns-prefetch" href="//googleapis.com/">
    <link rel="dns-prefetch" href="//i3.ytimg.com">


    <?php $favicon = get_field('favicon', 'option'); ?>

    <link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon" />



    <?php wp_head(); ?>



    <?php if ( have_rows( 'header-custom-code', 'options' ) ) : ?>

        <?php while ( have_rows( 'header-custom-code', 'options' ) ) :

            the_row();

        ?>

            <?php if ( $customHeaderCss = get_sub_field( 'custom-css', 'options' ) ) : ?>

                <style type="text/css">

                    <?php echo $customHeaderCss; ?>

                </style>

            <?php endif; ?>

            <?php if ( $customHeaderJs = get_sub_field( 'custom-js', 'options' ) ) : ?>

                <?php //echo $customHeaderJs; ?>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>


    <!-- CÁC CODE TÙY CHỈNH BẮT ĐẦU -->
    <!-- <meta name="p:domain_verify" content="d688709fa9dca4ab46ce59ce2fb9c132"/>
    <meta name="google-site-verification" content="ts4QBOp9DeWtHh2N4TDnjPFobyAK_D8DJUv80sYXelE" /> -->
    <!-- CÁC CODE TÙY CHỈNH KẾT THÚC -->
</head>
<?php
    function detectDevice() {
        if (wp_is_mobile()) {
            // Check if the device is a tablet specifically
            if (!wp_is_mobile() && preg_match('/iPad|Android|Tablet|Silk|Kindle|Opera Mini|BlackBerry|/i', $_SERVER['HTTP_USER_AGENT'])) {
                return 'Tablet';
            } else {
                return 'Mobile';
            }
        } else {
            return 'Desktop';
        }
    }
?>

<body <?php body_class(); ?>>

    <?php if(!is_front_page()) : ?>

		<?php if(is_single() || is_page()) : ?>

            <script>

              window.fbAsyncInit = function() {

                FB.init({

                  appId      : '1022485919031509',

                  xfbml      : true,

                  version    : 'v18.0'

                });

                FB.AppEvents.logPageView();

              };

            

              (function(d, s, id){

                 var js, fjs = d.getElementsByTagName(s)[0];

                 if (d.getElementById(id)) {return;}

                 js = d.createElement(s); js.id = id;

                 js.src = "https://connect.facebook.net/en_US/sdk.js";

                 fjs.parentNode.insertBefore(js, fjs);

               }(document, 'script', 'facebook-jssdk'));

            </script>

        <?php endif; ?>

    <?php endif; ?>

    <script>

    function isElementInViewport(el) {

        var rect = el.getBoundingClientRect();

        return (

            rect.top >= 0 &&

            rect.left >= 0 &&

            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&

            rect.right <= (window.innerWidth || document.documentElement.clientWidth)

        );

    }    

    </script>    
    <?php if (is_front_page()) : 
        $homepage_heading = get_field( 'homepage_heading', 'options' );
    ?>
    <h1 class='homepage-heading'><?php echo $homepage_heading; ?></h1>
    <?php endif; ?>


    <div class="main-container" id="page-wrapper">

        <header>

            <div class="header-wrapper">

                <div class="header-top">

                    <div class="container">

                        <div class="header-inner gap-4 lg:gap-9 grid items-center">

                            <div class="header-left">

                                <div class="menu-toggle cursor-pointer">

                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path d="M3 7H21" stroke="black" stroke-width="1.5" stroke-linecap="round" />

                                        <path d="M3 12H21" stroke="black" stroke-width="1.5" stroke-linecap="round" />

                                        <path d="M3 17H21" stroke="black" stroke-width="1.5" stroke-linecap="round" />

                                    </svg>

                                </div>

                            </div>

                            <a href="<?php bloginfo('url'); ?>" class="site-logo flex items-center">

                                <?php $logo = get_field('logo', 'option'); ?>

                                <img src="<?php echo $logo; ?>" data-no-lazy="true" width="76.59px" heigh="40px" alt="Căn hộ Vinhomes" />

                            </a>

                            <div class="header-center">

                                <div class="horizontal-menu">

                                    <nav class="nav-bar" role="navigation">

                                        <div class="mobile-nav-header">

                                            <div class="mobile-nav-title">MENU</div>

                                            <button type="button" class="menu-close border-0 cursor-pointer bg-white" >

                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                    <path d="M1 13.0967L13 1.09668" stroke="#262626" stroke-width="1.5" stroke-linecap="round" />

                                                    <path d="M13 13.0967L1 1.09668" stroke="#262626" stroke-width="1.5" stroke-linecap="round" />

                                                </svg>

                                            </button>

                                        </div>

                                        <div class="nav-bar-content">

                                            <?php

                                                if(function_exists('wp_nav_menu')){

                                                    wp_nav_menu(

                                                        array(

                                                            'theme_location' => 'top-menu',

                                                            'container' => 'ul',

                                                            'menu_class' => 'site-nav',

                                                            'walker' => new Owl_Custom_Menu(),

                                                        )

                                                    ) ;

                                                }

                                            ?>

                                        </div>

                                    </nav>

                                </div>

                            </div>

                            <div class="header-right flex items-center justify-end gap-4 lg:gap-8">

                                <div class="header-search cursor-pointer">

                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <circle cx="11" cy="11" r="6" stroke="black" stroke-width="1.2" />

                                        <path d="M20 20L17 17" stroke="black" stroke-width="1.2" stroke-linecap="round" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <div class="body-content" id="site-content">