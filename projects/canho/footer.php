            </div>

            <!-- end body-content -->

            <div class="header-search-desktop-popup">

                <div class="container">

                    <div class="header-search-desktop-outer">

                        <div class="header-search-desktop">

                            <form class="header-search-desktop-form" action="<?php bloginfo('url'); ?>/" method="GET" role="search" id="searchForm">

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

                                <input class="header-search-desktop-input rounded" id="searchFormInput" type="text" placeholder="Bạn cần tìm gì?" autocomplete="off" name="s" tabindex="1" />

                                <!-- Hidden input for post type (multiple) -->

                                <input type="hidden" name="post_type[]" value="du-an" />

                                <input type="hidden" name="post_type[]" value="dang-duoc-quan-tam" />                            

                                <input type="hidden" name="post_type[]" value="san-pham" />                            

                                <input type="hidden" name="post_type[]" value="video" />                            

                                <input type="hidden" name="post_type[]" value="post" />                            

                            </form>

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



			<footer>

                <div class="footer-top py-8">

                    <div class="container">

                    <?php if ( have_rows( 'footer_col_4', 'options' ) ) : ?>

                        <?php while ( have_rows( 'footer_col_4', 'options' ) ) :

                            the_row(); ?>

                            <div class="flex flex-col gap-4">

                                <div class="text-sm lg:text-base text-center">

                                    <span class="uppercase font-bold text-dark">

                                    <?php if ( $footer_col_4_title = get_sub_field( 'footer_col_4_title', 'options' ) ) : ?>

                                        <?php echo esc_html( $footer_col_4_title ); ?>

                                    <?php endif; ?>

                                    </span>

                                </div>

                                <div class="owl-footer-form">

                                    <?php if ( $footer_col_4_content = get_sub_field( 'footer_col_4_content', 'options' ) ) : ?>

                                        <?php echo do_shortcode($footer_col_4_content); ?>

                                    <?php endif; ?>

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>    

                    </div>                             

                </div>

                <div class="container py-8 md:py-14">       

                    <div class="footer-widgets">

                        <?php if ( have_rows( 'footer_col_1', 'options' ) ) : ?>

                            <?php while ( have_rows( 'footer_col_1', 'options' ) ) :

                                the_row(); ?>               

                                <div class="footer-widget-item flex flex-col gap-4">

                                    <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">

                                        <span class="uppercase font-bold text-white">

                                        <?php if ( $footer_col_1_title = get_sub_field( 'footer_col_1_title', 'options' ) ) : ?>

                                            <?php echo esc_html( $footer_col_1_title ); ?>

                                        <?php endif; ?>

                                        </span>

                                    </div>

                                    <div class="footer-widget-content footer-widget-open">

                                    <?php if ( $footer_col_1_content = get_sub_field( 'footer_col_1_content', 'options' ) ) : ?>

                                        <?php echo $footer_col_1_content; ?>

                                    <?php endif; ?>

                                        <div class="flex py-2 md:py-3 gap-3 items-start">

                                        <img

                                            loading="lazy"

                                            class="icon-box mt-1"

                                            src="<?php echo site_url(); ?>/wp-content/themes/canho/assets/app/images/icons/location-white.svg"

                                            alt=""

                                        />

                                        <p class="mb-0 text-sm line-height-lg text-white-70 flex flex-col">

                                            <span>Địa chỉ văn phòng:</span>

                                            <?php if ( $footer_col_1_add_1 = get_sub_field( 'footer_col_1_add_1', 'options' ) ) : ?>

                                                <a

                                                href="<?php if ( $footer_col_1_add_1_link = get_sub_field( 'footer_col_1_add_1_link', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_add_1_link ); ?><?php endif; ?>"

                                                class="text-white-70"

                                                target="_blank"

                                                >

                                                <?php echo esc_html( $footer_col_1_add_1 ); ?>

                                                </a>

                                            <?php endif; ?>

                                            <?php if ( $footer_col_2_add_2 = get_sub_field( 'footer_col_2_add_2', 'options' ) ) : ?>

                                                <a

                                                href="<?php if ( $footer_col_1_add_2_link = get_sub_field( 'footer_col_1_add_2_link', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_add_2_link ); ?><?php endif; ?>"

                                                class="text-white-70"

                                                target="_blank"

                                                >

                                                <?php echo esc_html( $footer_col_2_add_2 ); ?>

                                                </a>

                                            <?php endif; ?>

                                        </p>

                                        </div>

                                        <div class="flex py-2 md:py-3 gap-3 items-start">

                                        <img

                                            loading="lazy"

                                            class="icon-box mt-1"

                                            src="<?php echo site_url(); ?>/wp-content/themes/canho/assets/app/images/icons/call-white.svg"

                                            alt=""

                                        />

                                        <p class="mb-0 text-sm line-height-lg text-white-70 flex flex-col">

                                            <span>Hotline:</span>

                                            <a href="tel:<?php if ( $footer_col_1_hotline = get_sub_field( 'footer_col_1_hotline', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_hotline ); ?><?php endif; ?>" class="text-danger text-lg font-medium"><?php if ( $footer_col_1_hotline = get_sub_field( 'footer_col_1_hotline', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_hotline ); ?><?php endif; ?></a>

                                        </p>

                                        </div>

                                        <div class="flex py-2 md:py-3 gap-3 items-start">

                                        <img

                                            loading="lazy"

                                            class="icon-box mt-1"

                                            src="<?php echo site_url(); ?>/wp-content/themes/canho/assets/app/images/icons/sms-white.svg"

                                            alt=""

                                        />

                                        <p class="mb-0 text-sm line-height-lg text-white-70 flex flex-col">

                                            <span>Email:</span>

                                            <a href="mailto:<?php if ( $footer_col_1_email = get_sub_field( 'footer_col_1_email', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_email ); ?><?php endif; ?>" class="text-white-70"

                                            ><?php if ( $footer_col_1_email = get_sub_field( 'footer_col_1_email', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_email ); ?><?php endif; ?></a

                                            >

                                        </p>

                                        </div>

                                        <div class="flex py-2 md:py-3 gap-3 items-start">

                                        <img

                                            loading="lazy"

                                            class="icon-box mt-1"

                                            src="<?php echo site_url(); ?>/wp-content/themes/canho/assets/app/images/icons/global-white.svg"

                                            alt=""

                                        />

                                        <p class="mb-0 text-sm line-height-lg text-white-70 flex flex-col">

                                            <span>Website:</span>

                                            <a href="https://<?php if ( $footer_col_1_website = get_sub_field( 'footer_col_1_website', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_website ); ?><?php endif; ?>" class="text-white-70"

                                            ><?php if ( $footer_col_1_website = get_sub_field( 'footer_col_1_website', 'options' ) ) : ?><?php echo esc_html( $footer_col_1_website ); ?><?php endif; ?></a

                                            >

                                        </p>

                                        </div>                    

                                    </div>

                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php if ( have_rows( 'footer_col_2', 'options' ) ) : ?>

                            <?php while ( have_rows( 'footer_col_2', 'options' ) ) :

                                the_row(); ?>

                                <div class="footer-widget-item flex flex-col gap-4">

                                    <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">

                                        <span class="uppercase font-bold text-white">

                                        <?php if ( $footer_col_2_title = get_sub_field( 'footer_col_2_title', 'options' ) ) : ?>

                                            <?php echo esc_html( $footer_col_2_title ); ?>

                                        <?php endif; ?>

                                        </span>

                                    </div>

                                    <div class="footer-widget-content footer-widget-open">

                                    <?php

                                            if(function_exists('wp_nav_menu')){

                                                wp_nav_menu(

                                                    array( 'theme_location' => 'footer-menu-1','container' => 'ul','menu_class' => 'list-unstyled mb-0 footer-menu')

                                                ) ;

                                            }

                                        ?>

                                    </div>

                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>        

                        <?php if ( have_rows( 'footer_col_3', 'options' ) ) : ?>

                            <?php while ( have_rows( 'footer_col_3', 'options' ) ) :

                                the_row(); ?>

                                <div class="footer-widget-item flex flex-col gap-4 col-start-1 col-end-2 md:col-start-1 md:col-end-3 lg:col-start-1 lg:col-end-2 xl:col-start-3 xl:col-end-4"> 

                                    <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">

                                        <span class="uppercase font-bold text-white">

                                        <?php if ( $footer_col_3_title = get_sub_field( 'footer_col_3_title', 'options' ) ) : ?>

                                            <?php echo esc_html( $footer_col_3_title ); ?>

                                        <?php endif; ?>

                                        </span>

                                    </div>

                                    <div class="footer-widget-content footer-widget-open">

                                        <div class="footer-map">

                                            <div class="ratio-thumb ratio-16x9 rounded overflow-hidden lazy-load-map" data-src="<?php echo get_sub_field( 'footer_col_3_content', 'options' ); ?>"></div>

                                        </div>

                                    </div>

                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>                                                           
                        <img src="<?php echo get_theme_file_uri('/assets/app/images/footer-bg.png') ?>" class="footer-widgets-bg" loading="lazy" alt="Ảnh nền footer">
                    </div>

                </div>

                <div class="container">

                    <div class="footer-bottom py-6 mb-11">

                        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

                            <?php if ( have_rows( 'social_items', 'options' ) ) : ?>

                                <div class="social-icon flex items-center gap-4">

                                <?php while ( have_rows( 'social_items', 'options' ) ) :

                                    the_row(); ?>

                                    <a href="<?php if ( $link = get_sub_field( 'social_item_link', 'options' ) ) : ?><?php echo esc_html( $link ); ?><?php endif; ?>" target="_blank" class="flex items-center justify-center">

                                        <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_sub_field( 'social_item_icon', 'options' ) ); ?>" alt="Mạng xã hội">

                                    </a>

                                <?php endwhile; ?>

                                </div>

                            <?php endif; ?>                            

                            <p class="mb-0 text-white-70 text-center md:text-right">Copyright © 2023 Canhovinhomes.</p>

                        </div>

                    </div>

                </div>

			</footer>

            <?php get_template_part('template-parts/footer-cta-btn', null, null); ?>

		</div>

        <!-- end main-container -->



		<div class="theme-overlay"></div>







        <!-- end body-content -->

        <div class="fixed-btns">

            <button type="button" title="Lên đầu trang" class="cd-top border-0 cursor-pointer">

                <svg width="24" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M20 9L12.5 16.5L5 9" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>

                </svg>

            </button>

            <div class="owl-download-cta tai-bang-gia-btn cursor-pointer">

                <div class="fixed-btn-icon">

                    <svg enable-background="new 0 0 24 24" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m12 16c-.205 0-.401-.084-.542-.232l-5.25-5.5c-.455-.476-.117-1.268.542-1.268h2.75v-5.75c0-.689.561-1.25 1.25-1.25h2.5c.689 0 1.25.561 1.25 1.25v5.75h2.75c.659 0 .997.792.542 1.268l-5.25 5.5c-.141.148-.337.232-.542.232z"/><path d="m22.25 22h-20.5c-.965 0-1.75-.785-1.75-1.75v-.5c0-.965.785-1.75 1.75-1.75h20.5c.965 0 1.75.785 1.75 1.75v.5c0 .965-.785 1.75-1.75 1.75z"/></svg>

                </div>

                <div class="fixed-btn-text">Tải bảng giá</div>

            </div>

        </div>



        <input type="hidden" id="owl-admin-api-url" value="<?php echo admin_url('admin-ajax.php');?>">

        <input type="hidden" id="owl-home-page-url" value="<?php bloginfo('url'); ?>">





        <?php if ( have_rows( 'footer-custom-code', 'options' ) ) : ?>

            <?php while ( have_rows( 'footer-custom-code', 'options' ) ) :

                the_row(); ?>

                

                <?php if ( $customFooterCss = get_sub_field( 'custom-footer-css', 'options' ) ) : ?>

                    <style type="text/css">

                        <?php echo $customFooterCss; ?>

                    </style>

                <?php endif; ?>



                <?php if ( $customFooterJs = get_sub_field( 'custom-footer-js', 'options' ) ) : ?>

                    <?php //echo $customFooterJs; ?>

                <?php endif; ?>



            <?php endwhile; ?>

        <?php endif; ?>





        <?php wp_footer(); ?>

        <script>

            console.log('%cOwlogi', 'color: #EB4B3B; font-size: 54px; font-weight: bold; font-family: sans-serif;');

            console.log('%cThiết kế website chuyên nghiệp, thân thiện người dùng vận hành đa nền tảng.', 'color: #333; font-size: 24px; font-family: sans-serif;');

            console.log('%chttps://owlogi.com', 'color: #333; font-size: 24px; font-family: sans-serif;');

        </script>

        <script>

            // Function to initialize the Google Map

            function initializeGoogleMap(element) {

                const iframe = document.createElement("iframe");

                iframe.src = element.dataset.src;

                element.appendChild(iframe);

            }



            // Lazy load the map when the user scrolls to the map container

            var mapContainers = document.querySelectorAll('.lazy-load-map');

            var mapLoaded = [];



            function lazyLoadMaps() {

                mapContainers.forEach(function (mapContainer, index) {

                    if (isElementInViewport(mapContainer) && !mapLoaded[index]) {

                        mapLoaded[index] = true;

                        initializeGoogleMap(mapContainer);

                    }

                });

            }



            // Attach the lazyLoadMaps function to the scroll event

            window.addEventListener('scroll', lazyLoadMaps);



            // Initial check in case the maps are already visible on page load

            lazyLoadMaps();



        </script>        
        <!-- CÁC CODE TÙY CHỈNH BẮT ĐẦU -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-MGHWDRH"></script> -->
        <script>
        function delayLoadScript() {
            setTimeout(function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.id = 'NhanThongTinKhachHang';
            script.src = 'https://khachhang.info/delivery/minify.aspx?business_id=5237091';
            script.charset = 'UTF-8';
            script.crossOrigin = '*';
            document.getElementsByTagName('head')[0].appendChild(script);
            }, 5000); // 3000 milliseconds = 3 seconds
        }

        // Gọi hàm delayLoadScript sau khi trang web đã load
        //window.onload = delayLoadScript;
        </script>

        <!-- CÁC CODE TÙY CHỈNH KẾT THÚC -->
	</body>

</html>



