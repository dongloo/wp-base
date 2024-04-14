<?php

    $sidebar_deviceType = detectDevice();

    if($sidebar_deviceType != "Mobile"):

?>

<div class="flex-col gap-4 md:gap-6 hidden md:flex">

    <?php if ( have_rows( 'banner_sidebar', 'options' ) ) : ?>

        <?php while ( have_rows( 'banner_sidebar', 'options' ) ) :

            the_row(); 

            $banner_url = get_sub_field( 'banner_sidebar_url', 'options' );

            $banner_id = get_sub_field( 'banner_sidebar', 'options' );

        ?>

            <a href="<?php echo esc_url( $banner_url ); ?>" target="_blank" title="<?php echo get_sub_field( 'banner_sidebar_title', 'options' ); ?>">

                <?php owlGetAttImage($banner_id,'full','rounded w-full h-auto', false, "Sidebar banner", true); ?>

            </a>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php endif; ?>