<?php $footerCol1Text = get_field('footer-col-1-text', 'option'); ?>
<?php $footerCol2Text = get_field('footer-col-2-text', 'option'); ?>
<?php $footerCol3Text = get_field('footer-col-3-text', 'option'); ?>
<?php $footerCol4Text = get_field('footer-col-4-text', 'option'); ?>
<?php $footerFacebook = get_field('footer-facebook', 'option'); ?>

<?php $zalo = get_field('zalo', 'option'); ?>
<?php $zaloLink = get_field('zalo-link', 'option'); ?>
<?php $footerTel = get_field('footer-tel', 'option'); ?>
<?php $chatIdPage = get_field('chat-id-page', 'option'); ?>



            </div>
            <!-- end body-content -->

            <div class="owl-modal owl-modal-center" id="add-to-cart-modal">
                <div class="owl-modal-content owl-modal-content-sm">
                    <div class="owl-modal-header">
                        <button type="button" class="modal-close modal-close-js" title="Đóng popup">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.0597 12L19.2847 5.78435C19.4043 5.63862 19.4654 5.45363 19.4562 5.26534C19.4469 5.07705 19.368 4.89893 19.2347 4.76563C19.1014 4.63233 18.9232 4.55338 18.7349 4.54413C18.5467 4.53488 18.3617 4.596 18.2159 4.7156L12.0003 10.9406L5.78469 4.7156C5.63897 4.596 5.45397 4.53488 5.26568 4.54413C5.07739 4.55338 4.89927 4.63233 4.76597 4.76563C4.63267 4.89893 4.55372 5.07705 4.54447 5.26534C4.53522 5.45363 4.59634 5.63862 4.71594 5.78435L10.9409 12L4.71594 18.2156C4.5751 18.3578 4.49609 18.5498 4.49609 18.75C4.49609 18.9501 4.5751 19.1422 4.71594 19.2843C4.85929 19.423 5.0509 19.5004 5.25031 19.5004C5.44972 19.5004 5.64133 19.423 5.78469 19.2843L12.0003 13.0593L18.2159 19.2843C18.3593 19.423 18.5509 19.5004 18.7503 19.5004C18.9497 19.5004 19.1413 19.423 19.2847 19.2843C19.4255 19.1422 19.5045 18.9501 19.5045 18.75C19.5045 18.5498 19.4255 18.3578 19.2847 18.2156L13.0597 12Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="owl-modal-body">
                        <div class="add-to-cart-modal-grid grid gap-6 items-center">
                            <div class="add-to-cart-modal-thumb">
                                <div class="ratio-thumb ratio-1x1 rounded overflow-hidden add-to-cart-modal-img"></div>
                            </div>
                            <div class="flex flex-col gap-6 flex-1">
                                <div class="flex flex-col gap-4">
                                    <p class="text-base md:text-lg font-medium text-truncate-3 add-to-cart-modal-name"></p>
                                    <div class="flex items-center gap-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.745 9.41566 20.7162 6.93859 18.8888 5.11118C17.0614 3.28378 14.5843 2.25496 12 2.25ZM16.6406 10.2938L11.1469 15.5438C11.0049 15.6774 10.8169 15.7512 10.6219 15.75C10.5266 15.7514 10.4319 15.7338 10.3434 15.6984C10.2549 15.663 10.1743 15.6105 10.1063 15.5438L7.35938 12.9188C7.28319 12.8523 7.22123 12.7711 7.17722 12.6801C7.13321 12.589 7.10806 12.49 7.10328 12.389C7.0985 12.2881 7.11419 12.1871 7.14941 12.0924C7.18463 11.9976 7.23865 11.9109 7.30822 11.8375C7.3778 11.7642 7.46149 11.7056 7.55426 11.6654C7.64703 11.6252 7.74698 11.6042 7.84809 11.6036C7.94919 11.603 8.04938 11.6229 8.14261 11.662C8.23585 11.7011 8.32021 11.7587 8.39063 11.8312L10.6219 13.9594L15.6094 9.20625C15.7552 9.07902 15.9446 9.01309 16.1379 9.02223C16.3312 9.03138 16.5135 9.1149 16.6467 9.25533C16.7798 9.39576 16.8536 9.58222 16.8524 9.77575C16.8513 9.96928 16.7754 10.1549 16.6406 10.2938Z" fill="#17C964"/>
                                        </svg>
                                        <span class="text-base md:text-lg text-success flex-1">Thêm vào giỏ hàng thành công</span>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row items-center flex-wrap gap-4">
                                    <button type="button" class="theme-btn px-3 btn-outline w-full md:w-auto modal-close-js" title="Đóng popup">
                                        <span class="btn-text text-sm md:text-base">Tiếp tục mua hàng</span>
                                    </button>
                                    <?php global $woocommerce; ?>
                                    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="theme-btn px-3 btn-primary flex-1 w-full md:w-auto">
                                        <span class="btn-text text-sm md:text-base">Giỏ hàng</span>
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.9297 5.92993L20.9997 11.9999L14.9297 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4 12H20.83" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-modal owl-modal-center" id="newsletter-modal">
                <div class="owl-modal-content">
                    <div class="owl-modal-header">
                        <button type="button" class="modal-close modal-close-js" title="Đóng popup">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.0597 12L19.2847 5.78435C19.4043 5.63862 19.4654 5.45363 19.4562 5.26534C19.4469 5.07705 19.368 4.89893 19.2347 4.76563C19.1014 4.63233 18.9232 4.55338 18.7349 4.54413C18.5467 4.53488 18.3617 4.596 18.2159 4.7156L12.0003 10.9406L5.78469 4.7156C5.63897 4.596 5.45397 4.53488 5.26568 4.54413C5.07739 4.55338 4.89927 4.63233 4.76597 4.76563C4.63267 4.89893 4.55372 5.07705 4.54447 5.26534C4.53522 5.45363 4.59634 5.63862 4.71594 5.78435L10.9409 12L4.71594 18.2156C4.5751 18.3578 4.49609 18.5498 4.49609 18.75C4.49609 18.9501 4.5751 19.1422 4.71594 19.2843C4.85929 19.423 5.0509 19.5004 5.25031 19.5004C5.44972 19.5004 5.64133 19.423 5.78469 19.2843L12.0003 13.0593L18.2159 19.2843C18.3593 19.423 18.5509 19.5004 18.7503 19.5004C18.9497 19.5004 19.1413 19.423 19.2847 19.2843C19.4255 19.1422 19.5045 18.9501 19.5045 18.75C19.5045 18.5498 19.4255 18.3578 19.2847 18.2156L13.0597 12Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="owl-modal-body">
                        <div class="flex flex-col gap-4 md:gap-0 md:grid grid-cols-5 items-center">
                            <div class="w-full md:w-auto block md:col-start-1 md:col-end-3 bg-gray rounded">
                                <div class="newsletter-popup-thumb w-full block">
                                    <div class="ratio-thumb rounded">
                                        <?php echo wp_get_attachment_image(get_field( 'newsletter-modal-image', 'options' ), 'large', false, array('class' => 'ratio-media', 'loading' => 'lazy', 'alt' => 'Đăng ký nhận thông tin
                                        khuyến mãi') )?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex-1 md:col-start-3 md:col-end-6 flex-1 md:pl-8 md:pr-4 flex flex-col justify-center">
                                <div class="newsletter-popup-content flex flex-col gap-4 lg:gap-6 xl:gap-8">
                                    <div class="newsletter-popup-heading flex flex-col gap-4 xl:gap-5">
                                        <?php if ( $newsletterModalTitle = get_field( 'newsletter-modal-title', 'options' ) ) : ?>
                                            <p class="mb-0 text-lg md:text-heading-sm xl:text-heading-base font-bold">
                                            <?php echo esc_html( $newsletterModalTitle ); ?>
                                        </p>
                                        <?php endif; ?>
                                        <?php if ( $newsletterModalDes = get_field( 'newsletter-modal-des', 'options' ) ) : ?>
                                            <p class="mb-0 text-sm md:text-base xl:text-lg">
                                                <?php echo $newsletterModalDes; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <?php $newsletterModalCode = get_field('newsletter-modal-code', 'option'); ?>
                                    <?php echo do_shortcode("$newsletterModalCode"); ?>
                                    <?php if ( $newsletterModalNote = get_field( 'newsletter-modal-note', 'options' ) ) : ?>
                                        <p class="mb-0 text-secondary text-xs md:text-sm xl:text-base">
                                        <?php echo $newsletterModalNote; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<footer>
                <div class="footer-top py-4 md:py-11">
                    <div class="container">
                        <div class="footer-widgets">
                            <div class="footer-widget-item flex flex-col gap-4">
                                <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">
                                    <span class="uppercase font-bold">
                                        <?php echo $footerCol1Text; ?>
                                    </span>
                                    <div class="block md:hidden footer-widget-toggle icon-toggle icon-toggle-minus cursor-pointer"></div>
                                </div>
                                <div class="footer-widget-content footer-widget-open">
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
                            <div class="footer-widget-item flex flex-col gap-4">
                                <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">
                                    <span class="uppercase font-bold">
                                        <?php echo $footerCol2Text; ?>
                                    </span>
                                    <div class="block md:hidden footer-widget-toggle icon-toggle icon-toggle-plus cursor-pointer"></div>
                                </div>
                                <div class="footer-widget-content">
                                <?php
                                        if(function_exists('wp_nav_menu')){
                                            wp_nav_menu(
                                                array( 'theme_location' => 'footer-menu-1','container' => 'ul','menu_class' => 'list-unstyled mb-0 footer-menu')
                                            ) ;
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="footer-widget-item flex flex-col gap-4">
                                <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">
                                    <span class="uppercase font-bold">
                                        <?php echo $footerCol3Text; ?>
                                    </span>
                                    <div class="block md:hidden footer-widget-toggle icon-toggle icon-toggle-plus cursor-pointer"></div>
                                </div>
                                <div class="footer-widget-content">
                                    <?php
                                        if(function_exists('wp_nav_menu')){
                                            wp_nav_menu(
                                                array( 'theme_location' => 'footer-menu-2','container' => 'ul','menu_class' => 'list-unstyled mb-0 footer-menu')
                                            ) ;
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="footer-widget-item flex flex-col gap-4">
                                <div class="text-sm lg:text-base footer-widget-title flex items-center gap-3 justify-between">
                                    <span class="uppercase font-bold">
                                        <?php echo $footerCol4Text; ?>
                                    </span>
                                    <div class="block md:hidden footer-widget-toggle icon-toggle icon-toggle-minus cursor-pointer"></div>
                                </div>
                                <div class="footer-widget-content footer-widget-open">
                                    <div class="flex flex-col gap-4 w-full pb-6 md:pb-0">
                                        <div class="footer-facebook-plugin w-full block relative overflow-hidden rounded" id="footer-facebook-plugin"></div>
                                        <?php if ( have_rows( 'social', 'options' ) ) : ?>
                                            <div class="social-icon flex items-center gap-4">
                                            <?php while ( have_rows( 'social', 'options' ) ) :
                                                the_row(); ?>
                                                <a href="<?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?><?php echo esc_html( $link ); ?><?php endif; ?>" target="_blank" class="flex items-center justify-center">
                                                    <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_sub_field( 'icon', 'options' ) ); ?>" alt="Mạng xã hội">
                                                </a>
                                            <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom bg-gray py-4 md:py-2">
                    <div class="container">
                        <div class="footer-bottom-inner flex flex-col md:flex-row justify-between items-center gap-3 md:gap-6">
                            <div class="text-center md:text-left copyright text-sm lg:text-base">
                                <?php $copyright = get_field('copyright', 'option'); ?><?php echo $copyright; ?>
                            </div>
                            <a href="#" target="_blank" class="copyright-image">
                               <img loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/app/images/bo-cong-thuong.png" alt="Đã đăng ký với bộ công thương">
                            </a>

                        </div>
                    </div>
                </div>
			</footer>
		</div>
        <!-- end main-container -->

		<div class="theme-overlay"></div>

        <div class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel:<?php echo $footerTel; ?>" class="pps-btn-img" title="Gọi điện thoại">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5527 16.3685L16.464 13.2794C15.8488 12.6667 14.83 12.6853 14.1934 13.3222L12.6373 14.8779C12.539 14.8238 12.4372 14.7672 12.3302 14.7071C11.3476 14.1626 10.0027 13.4164 8.58739 12.0001C7.16793 10.5808 6.42097 9.23378 5.87483 8.2505C5.81719 8.14632 5.76198 8.04589 5.70745 7.9505L6.75182 6.90769L7.26527 6.39361C7.90289 5.75581 7.92047 4.7373 7.30669 4.12278L4.21801 1.03341C3.60423 0.419748 2.58498 0.438364 1.94736 1.07616L1.07686 1.95165L1.10065 1.97527C0.808757 2.34771 0.564845 2.77727 0.383333 3.24051C0.216014 3.68144 0.111841 4.10221 0.0642082 4.52384C-0.343633 7.90494 1.20143 10.995 5.39453 15.1882C11.1907 20.9839 15.8616 20.5461 16.0631 20.5247C16.502 20.4722 16.9226 20.3674 17.35 20.2014C17.8092 20.022 18.2385 19.7784 18.6107 19.4872L18.6297 19.5041L19.5116 18.6405C20.1479 18.0028 20.1662 16.984 19.5527 16.3685Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php if ( have_rows( 'contact-cta-group', 'options' ) ) : ?>
            <?php while ( have_rows( 'contact-cta-group', 'options' ) ) :
                the_row(); 
                $contactCtaTitle = get_sub_field( 'contact-cta-title', 'options' );
                $contactCtaZalo = get_sub_field( 'contact-cta-zalo', 'options' );
                $contactCtaMessenger = get_sub_field( 'contact-cta-messenger', 'options' );
                $contactCtaInstagram = get_sub_field( 'contact-cta-instagram', 'options' );
                $contactCtaTiktok = get_sub_field( 'contact-cta-tiktok', 'options' );
   
                ?>
                <div class="chaty active" id="owl-chaty">
                    <div class="chaty-widget right-position">
                        <div class="chaty-channels">
                            <div class="chaty-channel-list">
                                <div class="chaty-channel Link-channel">
                                    <a href="<?php echo esc_html( $contactCtaZalo ); ?>" target="_blank" rel="nofollow noopener" aria-label="Zalo" class="chaty-tooltip pos-left" data-hover="Zalo">
                                        <span class="chaty-icon channel-icon-Link">
                                            <span class="chaty-svg">
                                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.55 0.0625H17.4C21.3 0.0625 23.6 0.61336 25.6 1.71508C27.65 2.8168 29.25 4.36923 30.3 6.42244C31.4 8.47565 31.95 10.7292 31.95 14.6353V17.4897C31.95 21.3958 31.4 23.6994 30.3 25.7026C29.2 27.7558 27.65 29.3583 25.6 30.4099C23.55 31.5116 21.3 32.0625 17.4 32.0625H14.55C10.65 32.0625 8.35 31.5116 6.35 30.4099C4.3 29.3082 2.7 27.7558 1.65 25.7026C0.550002 23.6494 0 21.3958 0 17.4897V14.6353C0 10.7292 0.550002 8.42557 1.65 6.42244C2.75 4.36923 4.3 2.76673 6.35 1.71508C8.35 0.61336 10.65 0.0625 14.55 0.0625Z" fill="#0068FF"></path>
                                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd" d="M32 17.0391V17.4898C32 21.3959 31.45 23.6995 30.35 25.7026C29.25 27.7558 27.7 29.3583 25.65 30.41C23.6 31.5117 21.35 32.0625 17.45 32.0625H14.6C11.4 32.0625 9.29998 31.6619 7.49998 30.9608L4.59998 27.9561L32 17.0391Z" fill="url(#paint0_linear_328_9291)"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.84999 28.1062C6.29999 28.2564 8.14999 27.8558 9.44999 27.2048C14.8 30.1594 22.9 30.2596 28.25 27.355C28.9 27.0045 29.45 26.4536 29.8 25.8026C30.85 23.7995 31.45 21.546 31.45 17.74V14.9356C31.45 11.0796 31 8.77601 29.95 6.82295C28.9 4.81982 27.35 3.2674 25.35 2.21575C23.35 1.16411 21 0.66333 17.15 0.66333H14.35C11.3 0.66333 9.24999 1.01388 7.54999 1.71497C7.29999 1.81513 7.09999 1.96536 6.89999 2.1156C1.69999 7.1735 1.29999 18.0906 5.69999 23.9998C5.69999 23.9998 5.69999 23.9998 5.69999 24.0499C6.39999 25.0514 5.69999 26.8042 4.69999 27.8558C4.54999 27.956 4.59999 28.0561 4.84999 28.1062Z" fill="white"></path>
                                                    <path d="M13.15 10.9294H6.90002V12.2816H11.25L6.95001 17.5898C6.80001 17.7902 6.70001 17.9905 6.70001 18.3911V18.7416H12.6C12.9 18.7416 13.15 18.4913 13.15 18.1908V17.4897H8.60001L12.65 12.4318C12.7 12.3817 12.8 12.2315 12.85 12.1814V12.1313C13.1 11.7808 13.15 11.4803 13.15 11.1298V10.9294Z" fill="#0068FF"></path>
                                                    <path d="M21.1 18.6916H22V10.9294H20.65V18.2909C20.65 18.4913 20.85 18.6916 21.1 18.6916Z" fill="#0068FF"></path>
                                                    <path d="M16.5 12.6321C14.8 12.6321 13.45 13.9842 13.45 15.6869C13.45 17.3895 14.8 18.7416 16.5 18.7416C18.2 18.7416 19.55 17.3895 19.55 15.6869C19.6 14.0343 18.2 12.6321 16.5 12.6321ZM16.5 17.4897C15.5 17.4897 14.7 16.6884 14.7 15.6869C14.7 14.6853 15.5 13.884 16.5 13.884C17.5 13.884 18.3 14.6853 18.3 15.6869C18.3 16.6884 17.5 17.4897 16.5 17.4897Z" fill="#0068FF"></path>
                                                    <path d="M25.95 12.582C24.25 12.582 22.85 13.9842 22.85 15.6869C22.85 17.3895 24.25 18.7917 25.95 18.7917C27.65 18.7917 29.05 17.3895 29.05 15.6869C29.05 13.9842 27.65 12.582 25.95 12.582ZM25.95 17.4897C24.95 17.4897 24.15 16.6884 24.15 15.6869C24.15 14.6853 24.95 13.8841 25.95 13.8841C26.95 13.8841 27.75 14.6853 27.75 15.6869C27.75 16.6884 26.95 17.4897 25.95 17.4897Z" fill="#0068FF"></path>
                                                    <path d="M18.85 18.6917H19.55V12.8325H18.3V18.1909C18.3 18.4914 18.55 18.6917 18.85 18.6917Z" fill="#0068FF"></path>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_328_9291" x1="4.56858" y1="24.561" x2="31.988" y2="24.561" gradientUnits="userSpaceOnUse">
                                                    <stop></stop>
                                                    <stop offset="0.9379" stop-opacity="0.062076"></stop>
                                                    <stop offset="1" stop-opacity="0"></stop>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="chaty-channel Facebook_Messenger-channel">
                                    <a href="<?php echo esc_html( $contactCtaMessenger ); ?>" target="_blank" rel="nofollow noopener" aria-label="Facebook_Messenger" class="chaty-tooltip pos-left"  data-hover="Facebook Messenger">
                                        <span class="chaty-icon channel-icon-Facebook_Messenger">
                                            <span class="chaty-svg">
                                                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#1E88E5"></circle>
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M0 9.63934C0 4.29861 4.68939 0 10.4209 0C16.1524 0 20.8418 4.29861 20.8418 9.63934C20.8418 14.98 16.1524 19.2787 10.4209 19.2787C9.37878 19.2787 8.33673 19.1484 7.42487 18.8879L3.90784 20.8418V17.1945C1.56311 15.3708 0 12.6353 0 9.63934ZM8.85779 10.1604L11.463 13.0261L17.1945 6.90384L12.1143 9.76959L9.37885 6.90384L3.64734 13.0261L8.85779 10.1604Z"
                                                        transform="translate(9.01854 10.3146)"
                                                        fill="white"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="chaty-channel Instagram-channel">
                                    <a href="<?php echo esc_html( $contactCtaInstagram ); ?>" target="_blank" rel="nofollow noopener" aria-label="Instagram" class="chaty-tooltip pos-left" data-hover="Instagram">
                                        <span class="chaty-icon channel-icon-Instagram">
                                            <span class="chaty-svg">
                                                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient id="linear-gradient" x1="0.892" y1="0.192" x2="0.128" y2="0.85" gradientUnits="objectBoundingBox">
                                                            <stop offset="0" stop-color="#4a64d5"></stop>
                                                            <stop offset="0.322" stop-color="#9737bd"></stop>
                                                            <stop offset="0.636" stop-color="#f15540"></stop>
                                                            <stop offset="1" stop-color="#fecc69"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="url(#linear-gradient)"></circle>
                                                    <path
                                                        id="Path_1923"
                                                        data-name="Path 1923"
                                                        d="M13.177,0H5.022A5.028,5.028,0,0,0,0,5.022v8.155A5.028,5.028,0,0,0,5.022,18.2h8.155A5.028,5.028,0,0,0,18.2,13.177V5.022A5.028,5.028,0,0,0,13.177,0Zm3.408,13.177a3.412,3.412,0,0,1-3.408,3.408H5.022a3.411,3.411,0,0,1-3.408-3.408V5.022A3.412,3.412,0,0,1,5.022,1.615h8.155a3.412,3.412,0,0,1,3.408,3.408v8.155Z"
                                                        transform="translate(10 10.4)"
                                                        fill="#fff"
                                                    ></path>
                                                    <path
                                                        id="Path_1924"
                                                        data-name="Path 1924"
                                                        d="M45.658,40.97a4.689,4.689,0,1,0,4.69,4.69A4.695,4.695,0,0,0,45.658,40.97Zm0,7.764a3.075,3.075,0,1,1,3.075-3.075A3.078,3.078,0,0,1,45.658,48.734Z"
                                                        transform="translate(-26.558 -26.159)"
                                                        fill="#fff"
                                                    ></path>
                                                </svg>
                                                <path id="Path_1925" data-name="Path 1925" d="M120.105,28.251a1.183,1.183,0,1,0,.838.347A1.189,1.189,0,0,0,120.105,28.251Z" transform="translate(-96.119 -14.809)" fill="#fff"></path>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="chaty-channel TikTok-channel">
                                    <a href="<?php echo esc_html( $contactCtaTiktok ); ?>" target="_blank" rel="nofollow noopener" aria-label="TikTok" class="chaty-tooltip pos-left" data-hover="TikTok">
                                        <span class="chaty-icon channel-icon-TikTok">
                                            <span class="chaty-svg">
                                                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#000100"></circle>
                                                    <path
                                                        stroke="null"
                                                        d="m29.11825,14.02763c-1.25151,0 -2.40924,-0.41538 -3.33648,-1.11484c-1.06393,-0.80129 -1.83038,-1.98045 -2.10105,-3.33648c-0.067,-0.33498 -0.10183,-0.6807 -0.10451,-1.03712l-3.58035,0l0,9.78165l-0.00268,5.35445c0,1.43375 -0.9326,2.64775 -2.227,3.07385c-0.37519,0.12595 -0.77986,0.18223 -1.20328,0.16079c-0.53598,-0.02948 -1.04248,-0.19296 -1.47931,-0.45558c-0.93529,-0.55742 -1.56775,-1.57042 -1.58382,-2.72814c-0.0268,-1.81162 1.43643,-3.28824 3.24537,-3.28824c0.35643,0 0.69945,0.05896 1.02104,0.16348l0,-3.63396c-0.33767,-0.04824 -0.68338,-0.07503 -1.03176,-0.07503c-1.98045,0 -3.83227,0.82273 -5.15613,2.30739c-1.00228,1.1202 -1.60259,2.54859 -1.6937,4.04933c-0.12328,1.96973 0.59762,3.84299 1.99653,5.22314c0.20635,0.20367 0.42074,0.39127 0.64586,0.56546c1.19792,0.92189 2.66383,1.42303 4.20745,1.42303c0.34839,0 0.69409,-0.02679 1.03176,-0.07772c1.44179,-0.21171 2.77102,-0.87365 3.82154,-1.91077c1.28904,-1.27564 2.00189,-2.96666 2.00994,-4.76755l-0.01877,-7.99952c0.61638,0.47434 1.28904,0.86829 2.00994,1.17112c1.12288,0.47434 2.31544,0.71554 3.54016,0.71554l0,-3.56428c0,0 -0.01072,0 -0.01072,0l-0.00001,0zm0,0"
                                                        fill="#fff"
                                                        fill-rule="nonzero"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="chaty-i-trigger">
                                <div class="chaty-channel chaty-cta-main chaty-tooltip has-on-hover pos-left active">
                                    <span class="on-hover-text"><?php echo esc_html( $contactCtaTitle ); ?></span>
                                    <div class="chaty-cta-button">
                                        <button type="button" class="open-chaty">
                                            <span class="chaty-svg">
                                                <svg
                                                    version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    x="0px"
                                                    y="0px"
                                                    viewBox="-496.9 507.1 54 54"
                                                    style="enable-background-color:new -496.9 507.1 54 54;"
                                                    xml:space="preserve"
                                                >
                                                    <g><circle cx="-469.9" cy="534.1" r="27" fill="#FF6060"></circle></g>
                                                    <path
                                                        class="chaty-sts1"
                                                        d="M-472.6,522.1h5.3c3,0,6,1.2,8.1,3.4c2.1,2.1,3.4,5.1,3.4,8.1c0,6-4.6,11-10.6,11.5v4.4c0,0.4-0.2,0.7-0.5,0.9   c-0.2,0-0.2,0-0.4,0c-0.2,0-0.5-0.2-0.7-0.4l-4.6-5c-3,0-6-1.2-8.1-3.4s-3.4-5.1-3.4-8.1C-484.1,527.2-478.9,522.1-472.6,522.1z   M-462.9,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-464.6,534.6-463.9,535.3-462.9,535.3z   M-469.9,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-471.7,534.6-471,535.3-469.9,535.3z   M-477,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-478.8,534.6-478.1,535.3-477,535.3z"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <span class="sr-only">Mở</span>
                                        </button>
                                        <button type="button" class="open-chaty-channel"></button>
                                    </div>
                                </div>
                                <div class="chaty-channel chaty-cta-close chaty-tooltip pos-left" data-hover="Đóng">
                                    <div class="chaty-cta-button">
                                        <button type="button">
                                            <span class="chaty-svg">
                                                <svg viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="26" cy="26" rx="26" ry="26" fill="#FF6060"></ellipse>
                                                    <rect width="27.1433" height="3.89857" rx="1.94928" transform="translate(18.35 15.6599) scale(0.998038 1.00196) rotate(45)" fill="white"></rect>
                                                    <rect width="27.1433" height="3.89857" rx="1.94928" transform="translate(37.5056 18.422) scale(0.998038 1.00196) rotate(135)" fill="white"></rect>
                                                </svg>
                                            </span>
                                            <span class="sr-only">Đóng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
                
            <?php endwhile; ?>
        <?php endif; ?>
       
        <?php $newsletterModalTime = get_field( 'newsletter-modal-time', 'options' ) ?>
        <input type="hidden" id="newsletter-modal-time" value="<?php echo $newsletterModalTime; ?>">
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
                    <script type="text/javascript">
                        <?php echo $customFooterJs; ?>
                    </script>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


        <template id="template-menu-brand">
        <?php if ( have_rows( 'menuBrandFilter', 'options' ) ) : ?>
		<div class="sub-menu-mobile">
			<div class="menu-mb-title">
				<span class="icon-dropdown">
					<i class="menu-icon" aria-hidden="true"></i>
				</span>
				<span class="item-text">Thương hiệu</span>
			</div>
			<ul class="site-nav-dropdown">
                <?php while ( have_rows( 'menuBrandFilter', 'options' ) ) :
                the_row(); 
                    $menuBrandFilterLink = get_sub_field( 'menuBrandFilterLink', 'options' );
                ?>
				<li class="menu-lv-2">
					<a href="#shop-page-link<?php echo esc_html( $menuBrandFilterLink ); ?>" class="has-item-thumb">
						<div class="item-thumb">
							<img loading="lazy" src="<?php echo esc_url( get_sub_field( 'menuBrandFilterImage', 'options' ) ); ?>" alt="Thương hiệu đồng hồ" width="auto" heigh="24" />
						</div>
					</a>
				</li>
                <?php endwhile; ?>
			</ul>
		</div>
        <?php endif; ?>
        </template>

        <template id="template-menu-cat">
        <?php if ( have_rows( 'menuCat', 'options' ) ) : ?>
            <?php while ( have_rows( 'menuCat', 'options' ) ) :
                the_row(); ?>
                <div class="sub-menu-mobile">
                    <div class="menu-mb-title">
                        <span class="icon-dropdown">
                            <i class="menu-icon" aria-hidden="true"></i>
                        </span>
                        <span class="item-text menu-cat-title">#menu-cat-title</span>
                    </div>
                    <ul class="site-nav-dropdown">
                        <li class="menu-lv-2 hide_pc">
                            <a href="#menu-cat-link">
                                <span class="item-text">Xem tất cả <span class="lowercase">#menu-cat-title</span></span>
                            </a>
                        </li>
                        <li class="menu-lv-2 menu-dropdown menu-cat-col-1">
                            <a href="#">
                                <span class="item-text">Thương hiệu</span>
                                <span class="icon-dropdown">
                                    <i class="menu-icon" aria-hidden="true"></i>
                                </span>
                            </a>
                            <cat-first-col>
                        </li>
                        <?php if ( have_rows( 'menuCatCols', 'options' ) ) : ?>
                            <?php while ( have_rows( 'menuCatCols', 'options' ) ) :
                            the_row();
                            $menuCatColTitle = get_sub_field( 'menuCatColTitle', 'options' );
                            ?>
                                <li class="menu-lv-2 menu-dropdown">
                                    <a href="#">
                                        <span class="item-text"><?php echo esc_html( $menuCatColTitle ); ?></span>
                                        <span class="icon-dropdown">
                                            <i class="menu-icon" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <div class="sub-menu-mobile">
                                        <div class="menu-mb-title">
                                            <span class="icon-dropdown">
                                                <i class="menu-icon" aria-hidden="true"></i>
                                            </span>
                                            <span class="item-text"><?php echo esc_html( $menuCatColTitle ); ?></span>
                                        </div>
                                        <ul class="site-nav-dropdown">
                                            <?php if ( have_rows( 'menuCatColFilter', 'options' ) ) : ?>
                                                <?php while ( have_rows( 'menuCatColFilter', 'options' ) ) :
                                                    the_row(); 
                                                    $menuCatColFilterLink = get_sub_field( 'menuCatColFilterLink', 'options' );
                                                    $menuCatColFilterTitle = get_sub_field( 'menuCatColFilterTitle', 'options' );
                                                    ?>
                                                    <li class="menu-lv-3">
                                                        <a href="#menu-cat-link<?php echo esc_html($menuCatColFilterLink); ?>">
                                                            <span class="item-text"><?php echo esc_html( $menuCatColFilterTitle ); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>                                            
                                        </ul>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>                                   
                    </ul>
                </div>     
            <?php endwhile; ?>
        <?php endif; ?>
        </template>


        <?php if($chatIdPage): ?>
        <script type="text/javascript">
            setTimeout(function() {
                <?php echo strval($chatIdPage); ?>
            }, 2000); // Sau 2 giây     
 
            
        </script>
        <?php endif; ?>
        <script type="text/javascript">
            setTimeout(function() {   
                var element = document.getElementById("footer-facebook-plugin");
                element.innerHTML = '<iframe title="Facebook Thịnh Phát" loading="lazy" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $footerFacebook; ?>&tabs&width=327&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=585028375359473" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>';
            }, 2000);    
        </script>

        <?php wp_footer(); ?>

	</body>
</html>

