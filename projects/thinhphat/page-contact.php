<?php
/* Template Name: Trang liên hệ */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>
    <?php $zalo = get_field('zalo', 'option'); ?>
    <?php $zaloLink = get_field('zalo-link', 'option'); ?>
    <section class="contact-page pb-8">
        <div class="container">
            <?php if ( $contactMapCode = get_field( 'contact-map-code', 'options' ) ) : ?>
                <div class="contact-map mb-8">
                    <div class="rounded overflow-hidden ratio-thumb">
                        <?php echo $contactMapCode; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="contact-page-grid flex flex-col lg:grid gap-8 items-start pb-6">
                <div class="contact-page-left">
                    <?php if ( have_rows( 'contact-left-col', 'options' ) ) : ?>
                        <?php while ( have_rows( 'contact-left-col', 'options' ) ) :
                            the_row(); ?>
                            <?php if ( $contactFormTitle = get_sub_field( 'contact-form-title', 'options' ) ) : ?>
                                <div class="text-lg lg:text-heading-sm font-bold mb-4 lg:mb-6"><?php echo esc_html( $contactFormTitle ); ?></div>
                            <?php endif; ?>
                            <?php if ( $contactFormDes = get_sub_field( 'contact-form-des', 'options' ) ) : ?>
                                <p class="mb-6"><?php echo $contactFormDes; ?></p>
                            <?php endif; ?>                        
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php $contactFormCode = get_field('contact-form-code', 'option'); ?>
                    <?php echo do_shortcode("$contactFormCode"); ?>                         
                </div>
                <div class="contact-page-right hidden lg:block">
                    <div class="text-lg lg:text-heading-sm font-bold mb-4 lg:mb-6">
                    <?php if ( have_rows( 'contact-right-col', 'options' ) ) : ?>
                        <?php while ( have_rows( 'contact-right-col', 'options' ) ) :
                            the_row(); ?>
                                   <?php if ( $contactInfoTitle = get_sub_field( 'contact-info-title', 'options' ) ) : ?>
                                        <?php echo esc_html( $contactInfoTitle ); ?>
                                    <?php endif; ?>  
                        <?php endwhile; ?>
                    <?php endif; ?>   
                    </div>
                    <div class="flex flex-col gap-2">
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
    </section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>