<?php
$isHome = $args['is-home'];
?>

<section class="why-us-30 <?php if($isHome == true): ?>bg-gray<?php endif; ?> py-4 md:py-6">
    <?php if($isHome == true): ?>
        <div class="container pt-4 md:pt-6">
    <?php endif; ?>
    <div class="why-us-30-box rounded-lg">
        <?php if ( $tpBrandTitle = get_field( 'tp-brand-title', 'options' ) ) : ?>
            <div class="why-us-30-title pt-5 pb-3 md:pt-8 md:pb-8 overflow-hidden text-left inline-block whitespace-nowrap w-full">
                <div class="why-us-30-title-item px-14 inline-flex items-center gap-6">
                    <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_field( 'tp-brand-icon', 'options' ) ); ?>" alt="<?php echo esc_html( $tpBrandTitle ); ?>">
                    <div class="why-us-30-title-text inline-block text-white whitespace-nowrap">
                        <?php echo esc_html( $tpBrandTitle ); ?>
                    </div>
                </div>
                <div class="why-us-30-title-item px-14 inline-flex items-center gap-6">
                    <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_field( 'tp-brand-icon', 'options' ) ); ?>" alt="<?php echo esc_html( $tpBrandTitle ); ?>">
                    <div class="why-us-30-title-text inline-block text-white whitespace-nowrap">
                        <?php echo esc_html( $tpBrandTitle ); ?>
                    </div>
                </div>
                <div class="why-us-30-title-item px-14 inline-flex items-center gap-6">
                    <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_field( 'tp-brand-icon', 'options' ) ); ?>" alt="<?php echo esc_html( $tpBrandTitle ); ?>">
                    <div class="why-us-30-title-text inline-block text-white whitespace-nowrap">
                        <?php echo esc_html( $tpBrandTitle ); ?>
                    </div>
                </div>
                <div class="why-us-30-title-item px-14 inline-flex items-center gap-6">
                    <img loading="lazy" class="icon-box" src="<?php echo esc_url( get_field( 'tp-brand-icon', 'options' ) ); ?>" alt="<?php echo esc_html( $tpBrandTitle ); ?>">
                    <div class="why-us-30-title-text inline-block text-white whitespace-nowrap">
                        <?php echo esc_html( $tpBrandTitle ); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( have_rows( 'tp-brand-list', 'options' ) ) : ?>
            <div class="why-us-30-list px-3 md:px-6 pb-3 md:pb-6 gap-3 md:gap-4 md:gap-6 grid grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
            <?php while ( have_rows( 'tp-brand-list', 'options' ) ) :
                the_row(); ?>
                <?php
                    $tpBrandItemTitle = get_sub_field( 'tp-brand-item-title', 'options' );
                    $tpBrandItemDes = get_sub_field( 'tp-brand-item-des', 'options' );
                ?>

                <div class="why-us-30-item bg-white rounded overflow-hidden p-3 md:p-4 flex flex-col md:flex-row gap-3 md:gap-4 items-start md:items-center">
                    <img loading="lazy" class="icon-box icon-box-lg md:icon-box-xl" src="<?php echo esc_url( get_sub_field( 'tp-brand-item-icon', 'options' ) ); ?>" alt="<?php echo $tpBrandItemTitle; ?>">
                    <div class="flex flex-col gap-2 justify-center">
                        <div class="text-sm font-bold">
                            <?php echo $tpBrandItemTitle; ?>
                        </div>
                        <div class="text-xs md:text-sm">
                            <?php echo $tpBrandItemDes; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if($container == true): ?>
        </div>
    <?php endif; ?>
</section>   