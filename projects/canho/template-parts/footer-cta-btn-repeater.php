<?php if ( have_rows( 'social_btns', 'options' ) ) : ?>
    <div class="footer-cta-btns-area">

        <div class="container">

            <div class="footer-cta-btns-outer">

                <div class="footer-cta-btns">

                    <?php while ( have_rows( 'social_btns', 'options' ) ) :

                        the_row(); 
                        $social_btn_link = get_sub_field( 'social_btn_link', 'options' );
                        $social_btn_icon = get_sub_field( 'social_btn_icon', 'options' );
                        $social_btn_text = get_sub_field( 'social_btn_text', 'options' );
                        $is_social_btn_popup = get_sub_field( 'is_social_btn_popup', 'options' );
                        $social_btn_class = get_sub_field( 'social_btn_class', 'options' );
                    ?>

                    <a href="<?php if ($is_social_btn_popup == 1) : ?>#<?php else : ?><?php echo $social_btn_link; ?><?php endif; ?>" class="footer-cta-btn text-white <?php if ($is_social_btn_popup == 1) : ?><?php echo $social_btn_class; ?><?php endif; ?>" <?php if ($is_social_btn_popup != 1) : ?>target="_blank"<?php endif; ?>>

                        <img loading="lazy" class="icon-box footer-cta-btn-icon" src="<?php echo esc_url( $social_btn_icon ); ?>" alt="Mạng xã hội">

                        <span class="footer-cta-btn-text"><?php echo esc_html( $social_btn_text ); ?></span>

                    </a>

                    <?php endwhile; ?>

                </div>

            </div>

        </div>

    </div>

<?php endif; ?>