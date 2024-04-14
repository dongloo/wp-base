<!DOCTYPE html>
<html lang="vi">
<?php $assetsVersion = '1.1'; ?>
<?php global $woocommerce; ?>


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <script type="text/javascript">
                    <?php echo $customHeaderJs; ?>
                </script>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
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
                                <div class="header-search cursor-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="6" stroke="black" stroke-width="1.2" />
                                        <path d="M20 20L17 17" stroke="black" stroke-width="1.2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <a href="<?php bloginfo('url'); ?>" class="site-logo flex items-center">
                                <?php $logo = get_field('logo', 'option'); ?>
                                <img src="<?php echo $logo; ?>" style="height: 60px;" alt="Đồng hồ Thịnh Phát" />
                            </a>
                            <div class="header-center flex-1">
                                <div class="container">
                                    <div class="header-search-desktop-outer">
                                        <div class="header-search-desktop">

                                            <form class="header-search-desktop-form" action="<?php bloginfo('url'); ?>/" method="GET" role="search" id="searchForm">
                                                <input class="header-search-desktop-input rounded search-ajax" type="text" placeholder="Tìm kiếm" autocomplete="off" name="s"/>
                                                <input type="hidden" class="search-field" placeholder="Tìm kiếm" value="product" name="post_type">      

                                                <button class="header-search-desktop-btn" type="submit" title="Tìm kiếm">
                                                    <div class="svg-loader">
                                                        <svg class="svg-container" height="100" width="100" viewBox="0 0 100 100">
                                                            <circle class="loader-svg bg" cx="50" cy="50" r="45"></circle>
                                                            <circle class="loader-svg animate" cx="50" cy="50" r="45"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="svg-normal">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="11.7666" cy="11.7664" r="8.98856" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M18.0183 18.4849L21.5423 21.9997" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </form>
                                            <div class="header-search-overlay" id="searchResult">
                                                <div class="header-search-result rounded bg-white p-4 gap-4 flex flex-col"></div>
                                            </div>
                                        </div>
                                        <button type="button" class="modal-close modal-close-js border-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0597 12L19.2847 5.78435C19.4043 5.63862 19.4654 5.45363 19.4562 5.26534C19.4469 5.07705 19.368 4.89893 19.2347 4.76563C19.1014 4.63233 18.9232 4.55338 18.7349 4.54413C18.5467 4.53488 18.3617 4.596 18.2159 4.7156L12.0003 10.9406L5.78469 4.7156C5.63897 4.596 5.45397 4.53488 5.26568 4.54413C5.07739 4.55338 4.89927 4.63233 4.76597 4.76563C4.63267 4.89893 4.55372 5.07705 4.54447 5.26534C4.53522 5.45363 4.59634 5.63862 4.71594 5.78435L10.9409 12L4.71594 18.2156C4.5751 18.3578 4.49609 18.5498 4.49609 18.75C4.49609 18.9501 4.5751 19.1422 4.71594 19.2843C4.85929 19.423 5.0509 19.5004 5.25031 19.5004C5.44972 19.5004 5.64133 19.423 5.78469 19.2843L12.0003 13.0593L18.2159 19.2843C18.3593 19.423 18.5509 19.5004 18.7503 19.5004C18.9497 19.5004 19.1413 19.423 19.2847 19.2843C19.4255 19.1422 19.5045 18.9501 19.5045 18.75C19.5045 18.5498 19.4255 18.3578 19.2847 18.2156L13.0597 12Z"
                                                    fill="white"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="header-right flex items-center justify-end gap-4 lg:gap-8">
                            <?php 
                                $headerHotline = get_field( 'header-hotline', 'options' );
                                $mapLink = get_field( 'map-link', 'options' );
                            ?>
                                <a href="tel:<?php echo esc_html( $headerHotline ); ?>" class="header-hotline flex items-center gap-3 hover-opacity hover-opacity-75">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.2934 24.4398C29.2934 24.9198 29.1867 25.4132 28.96 25.8932C28.7334 26.3732 28.44 26.8265 28.0534 27.2532C27.4 27.9732 26.68 28.4932 25.8667 28.8265C25.0667 29.1598 24.2 29.3332 23.2667 29.3332C21.9067 29.3332 20.4534 29.0132 18.92 28.3598C17.3867 27.7065 15.8534 26.8265 14.3334 25.7198C12.8 24.5998 11.3467 23.3598 9.96002 21.9865C8.58669 20.5998 7.34669 19.1465 6.24002 17.6265C5.14669 16.1065 4.26669 14.5865 3.62669 13.0798C2.98669 11.5598 2.66669 10.1065 2.66669 8.71984C2.66669 7.81317 2.82669 6.9465 3.14669 6.1465C3.46669 5.33317 3.97335 4.5865 4.68002 3.91984C5.53335 3.07984 6.46669 2.6665 7.45335 2.6665C7.82669 2.6665 8.20002 2.7465 8.53335 2.9065C8.88002 3.0665 9.18669 3.3065 9.42669 3.65317L12.52 8.01317C12.76 8.3465 12.9334 8.65317 13.0534 8.9465C13.1734 9.2265 13.24 9.5065 13.24 9.75984C13.24 10.0798 13.1467 10.3998 12.96 10.7065C12.7867 11.0132 12.5334 11.3332 12.2134 11.6532L11.2 12.7065C11.0534 12.8532 10.9867 13.0265 10.9867 13.2398C10.9867 13.3465 11 13.4398 11.0267 13.5465C11.0667 13.6532 11.1067 13.7332 11.1334 13.8132C11.3734 14.2532 11.7867 14.8265 12.3734 15.5198C12.9734 16.2132 13.6134 16.9198 14.3067 17.6265C15.0267 18.3332 15.72 18.9865 16.4267 19.5865C17.12 20.1732 17.6934 20.5732 18.1467 20.8132C18.2134 20.8398 18.2934 20.8798 18.3867 20.9198C18.4934 20.9598 18.6 20.9732 18.72 20.9732C18.9467 20.9732 19.12 20.8932 19.2667 20.7465L20.28 19.7465C20.6134 19.4132 20.9334 19.1598 21.24 18.9998C21.5467 18.8132 21.8534 18.7198 22.1867 18.7198C22.44 18.7198 22.7067 18.7732 23 18.8932C23.2934 19.0132 23.6 19.1865 23.9334 19.4132L28.3467 22.5465C28.6934 22.7865 28.9334 23.0665 29.08 23.3998C29.2134 23.7332 29.2934 24.0665 29.2934 24.4398Z"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                        />
                                        <path
                                            d="M24.6667 11.9997C24.6667 11.1997 24.04 9.97301 23.1067 8.97301C22.2533 8.05301 21.12 7.33301 20 7.33301"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M29.3333 11.9998C29.3333 6.83984 25.16 2.6665 20 2.6665" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="header-hotline-content">
                                        <div class="header-hotline-text text-title text-xs mb-1"><?php if ( $headerHotlineText = get_field( 'header-hotline-text', 'options' ) ) : ?><?php echo esc_html( $headerHotlineText ); ?><?php endif; ?></div>
                                        <div class="header-hotline-number text-title text-sm font-bold"><?php echo esc_html( $headerHotline ); ?></div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_html( $mapLink ); ?>" title="Link bản đồ" class="header-local-link hover-opacity hover-opacity-75" target="_blank">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 17.9064C18.2975 17.9064 20.16 16.0439 20.16 13.7464C20.16 11.4489 18.2975 9.58643 16 9.58643C13.7025 9.58643 11.84 11.4489 11.84 13.7464C11.84 16.0439 13.7025 17.9064 16 17.9064Z"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            d="M4.82667 11.3198C7.45333 -0.226826 24.56 -0.213493 27.1733 11.3332C28.7067 18.1065 24.4933 23.8398 20.8 27.3865C18.12 29.9732 13.88 29.9732 11.1867 27.3865C7.50667 23.8398 3.29333 18.0932 4.82667 11.3198Z"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                        />
                                    </svg>
                                </a>
                                <a class="header-cart cart-contents inline-flex hover-opacity hover-opacity-75 relative" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66669 2.6665H4.98669C6.42669 2.6665 7.56002 3.9065 7.44002 5.33317L6.33335 18.6132C6.14669 20.7865 7.86668 22.6532 10.0533 22.6532H24.2534C26.1734 22.6532 27.8534 21.0798 28 19.1732L28.72 9.17318C28.88 6.95984 27.2 5.15983 24.9733 5.15983H7.76003"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M21.6667 29.3333C22.5871 29.3333 23.3333 28.5871 23.3333 27.6667C23.3333 26.7462 22.5871 26 21.6667 26C20.7462 26 20 26.7462 20 27.6667C20 28.5871 20.7462 29.3333 21.6667 29.3333Z"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M11 29.3333C11.9205 29.3333 12.6666 28.5871 12.6666 27.6667C12.6666 26.7462 11.9205 26 11 26C10.0795 26 9.33331 26.7462 9.33331 27.6667C9.33331 28.5871 10.0795 29.3333 11 29.3333Z"
                                            stroke="#262626"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M12 10.6665H28" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="header-cart-count">
                                        <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
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
                                    <?php $zalo = get_field('zalo', 'option'); ?>
                                    <?php $zaloLink = get_field('zalo-link', 'option'); ?>
                                    <div class="nav-mobile-footer">
                                        <div class="nav-mobile-info">
                                            <div class="nav-mobile-info-title uppercase font-bold text-sm">
                                            <?php if ( have_rows( 'contact-right-col', 'options' ) ) : ?>
                                                <?php while ( have_rows( 'contact-right-col', 'options' ) ) :
                                                    the_row(); ?>
                                                        <?php if ( $contactInfoTitle = get_sub_field( 'contact-info-title', 'options' ) ) : ?>
                                                                <?php echo esc_html( $contactInfoTitle ); ?>
                                                            <?php endif; ?>  
                                                <?php endwhile; ?>
                                            <?php endif; ?>   
                                            </div>
                                            <div class="nav-mobile-info-content px-6 py-4">
                                                <?php if ( $taxInfo = get_field( 'tax-info', 'options' ) ) : ?>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/icons/bank.svg" alt="" />
                                                    <p class="mb-0 text-sm block line-height-lg">
                                                        Mã số thuế: 
                                                            <?php echo $taxInfo; ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ( $address = get_field( 'address', 'options' ) ) : ?>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/icons/location.svg" alt="" />
                                                    <p class="mb-0 text-sm line-height-lg">
                                                        <a href="<?php if ( $mapLink = get_field( 'map-link', 'options' ) ) : ?><?php echo esc_html( $mapLink ); ?><?php endif; ?>" class="text-link" target="_blank">
                                                            <?php echo esc_html( $address ); ?>
                                                        </a>
                                                    </p>
                                                </div>
                                                <?php endif; ?>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/icons/call.svg" alt="" />
                                                    <p class="mb-0 text-sm line-height-lg">Hotline: <?php if ( $hotline1 = get_field( 'hotline-1', 'options' ) ) : ?><a href="tel:<?php echo esc_html( $hotline1 ); ?>" class="text-link"><?php echo esc_html( $hotline1 ); ?></a><?php endif; ?><?php if ( $hotline2 = get_field( 'hotline-2', 'options' ) ) : ?> / <a href="tel:<?php echo esc_html( $hotline2 ); ?>" class="text-link"><?php echo esc_html( $hotline2 ); ?></a><?php endif; ?></p>
                                                </div>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/brand/zalo.svg" alt="" />
                                                    <p class="mb-0 text-sm line-height-lg">Zalo: <a href="<?php echo $zaloLink; ?>" class="text-link" target="_blank"><?php echo $zalo; ?></a></p>
                                                </div>
                                                <?php if ( $timeToWork = get_field( 'time-to-work', 'options' ) ) : ?>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/icons/clock.svg" alt="" />
                                                    <p class="mb-0 text-sm line-height-lg">
                                                        <?php echo esc_html( $timeToWork ); ?>
                                                    </p>
                                                </div>
                                                <?php endif; ?>
                                                <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
                                                <div class="flex py-2 gap-3 items-center">
                                                    <img loading="lazy" class="icon-box" src="<?php bloginfo('template_directory') ?>/assets/app/images/icons/sms.svg" alt="" />
                                                    <p class="mb-0 text-sm line-height-lg">Email: <a href="mailto:<?php echo esc_html( $email ); ?>" class="text-link"><?php echo esc_html( $email ); ?></a></p>
                                                </div>
                                                <?php endif; ?>                                  
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="body-content" id="site-content">
            <?php if(!is_home() && get_page_template_slug() != 'page-home.php') { ?>
                <section class="breadcrumb-outer py-4">
                    <div class="container">
                        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<nav aria-label="breadcrumb"><ol class="breadcrumb list-unstyled">','</ol></nav>');} ?>
                    </div>
                </section>
            <?php } ?>