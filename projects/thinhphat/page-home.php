<?php
/* Template Name: Trang chủ*/
?>
<?php get_header(); ?>
<div class="container dong-woocommerce_before_shop_loop">
	<?php do_action( 'woocommerce_before_shop_loop' ); ?>
</div>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>

    <section class="bg-white main-front py-6">
        <div class="container">
            <div class="flex flex-col gap-6">
                <?php if ( have_rows( 'home-banner-main-repeater', 'options' ) ) : ?>                    
                    <?php 
                        $bannerCount = 0;
                        $bannerHTML = '';
                        while ( have_rows( 'home-banner-main-repeater', 'options' ) ) :
                        the_row(); 
                        $homeBannerMain = get_sub_field( 'home-banner-main', 'options' );
                        $homeBannerMainMobile = get_sub_field( 'home-banner-main-mobile', 'options' );
                        $homeBannerMainUrl = get_sub_field( 'home-banner-main-url', 'options' );
                        $homeBannerMainFrom = get_sub_field( 'home-banner-main-from', 'options' );
                        $homeBannerMainTo = get_sub_field( 'home-banner-main-to', 'options' );
                        $today = new DateTime();
                        $start_date = new DateTime($homeBannerMainFrom);
                        $end_date = new DateTime($homeBannerMainTo);
                        $desktop_image_data = wp_get_attachment_image_src($homeBannerMain, 'large');
                        $mobile_image_data = wp_get_attachment_image_src($homeBannerMainMobile, 'large');
                        
                    ?>
                        <?php if ($today >= $start_date && $today <= $end_date) :
                        $bannerCount++;    
                        ?>
                            <?php if($homeBannerMain){
                                $bannerHTML =  $bannerHTML . '<div class="banner-home-main-item">
                                <a href="' . esc_html( $homeBannerMainUrl ) . '">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="' . $mobile_image_data[0] . '">
                                    <source media="(min-width: 768px)" srcset="' . $desktop_image_data[0] . '">
                                    ' . wp_get_attachment_image( $homeBannerMain, 'large', false, array( 'class' => 'w-full rounded-lg banner-home-main-item-img', 'alt' => 'Home banner', 'data-no-lazy' => 'true','loading' => '' ) ) . '
                                </picture>
                                </a>
                                </div>';
                            } ?>
                                
                                
                        <?php endif; ?>

                    <?php 
                        endwhile; 
                    ?>
                    <?php if($bannerCount > 1) :?>
                        <div class="banner-home-main-repeater relative">
                            <div class="banner-home-main-items">
                                <?php echo $bannerHTML; ?>                   
                            </div>
                            <div class="cust-nav cust-nav-tall">
                                <button type="button" class="cust-nav-item cust-nav-prev" title="Trước">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_112_2725)">
                                        <path d="M20 27.06C19.8721 27.06 19.7482 27.0144 19.6469 26.9131L10.9536 18.2198C9.73549 17.0017 9.73549 14.9983 10.9536 13.7802L19.6469 5.08691C19.8383 4.89551 20.1617 4.89551 20.3531 5.08691C20.5445 5.27832 20.5445 5.60174 20.3531 5.79314L11.6598 14.4865C10.8245 15.3217 10.8245 16.6783 11.6598 17.5136L20.3531 26.2069C20.5426 26.3964 20.5445 26.7152 20.3589 26.9072C20.2427 27.0129 20.1111 27.06 20 27.06Z"  stroke="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_112_2725">
                                        <rect width="32" height="32" rx="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="button" class="cust-nav-item cust-nav-next" title="Sau">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_112_2727)">
                                        <path d="M12 27.06C12.1279 27.06 12.2518 27.0144 12.3531 26.9131L21.0465 18.2198C22.2645 17.0017 22.2645 14.9983 21.0465 13.7802L12.3531 5.08691C12.1617 4.89551 11.8383 4.89551 11.6469 5.08691C11.4555 5.27832 11.4555 5.60174 11.6469 5.79314L20.3402 14.4865C21.1755 15.3217 21.1755 16.6783 20.3402 17.5136L11.6469 26.2069C11.4574 26.3964 11.4555 26.7152 11.6411 26.9072C11.7573 27.0129 11.8889 27.06 12 27.06Z"  stroke="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_112_2727">
                                        <rect width="32" height="32" rx="16" transform="matrix(-1 0 0 1 32 0)" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>                        
                        </div>
                    <?php else :?>
                        <?php echo $bannerHTML; ?>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if ( have_rows( 'home-cat-list-group', 'options' ) ) : ?>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <?php while ( have_rows( 'home-cat-list-group', 'options' ) ) :
                        the_row(); ?>
                        <?php if ( have_rows( 'home-cat-list', 'options' ) ) : ?>
                            <?php while ( have_rows( 'home-cat-list', 'options' ) ) :
                                the_row(); ?>
                                <?php
                                $homeCatItem = get_sub_field( 'home-cat-item', 'options' );
                                if ( $homeCatItem ) : ?>
                                    <?php 
                                        $category = get_term_by( 'slug', $homeCatItem, 'product_cat' );
                                        $catName = $category->name;
                                        $thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                                        $term_img = wp_get_attachment_url(  $thumb_id );
                                    ?>
                                    <div class="flex flex-col flex-1 gap-4 items-center">
                                        <a title="<?php echo esc_html( $category->name ); ?>" href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="hero-circle bg-gradient-light  rounded-full overflow-hidden">
                                            <div class="rounded-full overflow-hidden hero-circle-thumb ratio-thumb ratio-1x1">
                                                <img loading="lazy" src="<?php echo esc_html($term_img) ?>" alt="<?php echo esc_html( $category->name ); ?>" class="ratio-media">
                                            </div>
                                        </a>
                                        <h3 class="mb-0 font-normal text-sm md:text-base">
                                            <a title="<?php echo esc_html( $category->name ); ?>" href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="text-sm md:text-base text-center font-medium text-title hover:text-link">
                                                <?php echo esc_html( $category->name ); ?>
                                            </a>
                                        </h3>
                                    </div>                           
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/brand','30-years', $args = array('is-home' => true)); ?>

    <section class="brands-grid bg-gray py-4 md:py-6">
        <div class="container">
            <div class="rounded-lg flex flex-col gap-6 px-6 py-8 bg-white">
                <div class="section-heading flex flex-col items-center pb-0 gap-6">
                    <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                        Thương hiệu hàng đầu
                    </h2>
                </div>               
                <ul class="brands-grid-items list-unstyled mb-0 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-4">
                    <?php $get_terms_args = array(
                        'taxonomy' => 'thuong-hieu',
                        'hide_empty' => false,
                        'orderby' => 'term_order',
                        'order' => 'ASC',
                    ); ?>
                    <?php $terms = get_terms( $get_terms_args ); ?>
                    <?php if ( $terms ) : ?>
                        <?php foreach ( $terms as $term ) : ?>
                            <li class="brands-grid-item-outer bg-gradient-light  rounded block overflow-hidden w-full">
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="brands-grid-item">
                                    <img loading="lazy" src="<?php echo the_field( 'brand-image', $term ); ?>" alt="<?php echo esc_html( $term->name ); ?>" width="auto" heigh="24">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <?php if ( have_rows( 'home-banner', 'options' ) ) : ?>
        <?php while ( have_rows( 'home-banner', 'options' ) ) :
            the_row(); ?>
            <?php if(get_sub_field( 'home-banner-2', 'options' )) : 
                $banner2 = get_sub_field( 'home-banner-2', 'options' );
                $banner2Mobile = get_sub_field( 'home-banner-2-mobile', 'options' );
                $banner2Data = wp_get_attachment_image_src($banner2, 'large');
                $banner2MobileData = wp_get_attachment_image_src($banner2Mobile, 'large');
            ?>
            <section class="bg-gray py-4 md:py-6">
                <div class="container">
                    <a href="<?php if ( $homeBanner2Url = get_sub_field( 'home-banner-2-url', 'options' ) ) : ?><?php echo esc_html( $homeBanner2Url ); ?><?php endif; ?>">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $banner2MobileData[0]; ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $banner2Data[0]; ?>">
                            <?php echo wp_get_attachment_image($banner2, 'large', false, array( 'class' => 'w-full rounded-lg h-auto', 'alt' => 'Banner 2', 'loading' => 'lazy' ) ); ?>
                        </picture>
                    </a>
                </div>
            </section>
            <?php endif; ?> 
        <?php endwhile; ?>
    <?php endif; ?>    

    <?php if ( have_rows( 'home-best-seller-group', 'options' ) ) : ?>
	<?php while ( have_rows( 'home-best-seller-group', 'options' ) ) :
		the_row(); ?>
            <section class="bg-gray py-4 md:py-6 home-tabs-product" data-product-tab-type="best-seller">
                <div class="container">
                    <div class="rounded-lg flex flex-col gap-6 p-6 bg-white">
                        <div class="section-heading flex flex-col items-center pb-0 gap-6">
                            <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                            <?php if ( $homeBestSellerTitle = get_sub_field( 'home-best-seller-title', 'options' ) ) : ?>
                                <?php echo esc_html( $homeBestSellerTitle ); ?>
                            <?php endif; ?>
                            </h2>
                            <?php if ( have_rows( 'home-best-seller-list', 'options' ) ) : ?>
                                <div class="tab-heading-outer bg-white relative w-full flex justify-center">
                                    <div class="tab-heading overflow-auto w-full block relative z-10 text-center whitespace-nowrap">
                                        <?php
                                        $bestSellerTabsCount = 0;
                                        while ( have_rows( 'home-best-seller-list', 'options' ) ) : the_row();
                                        $bestSellerTabsCount ++;
                                        ?>
                                            <?php
                                                $homeBestSellerCatItem = get_sub_field( 'home-best-seller-cat-item', 'options' );
                                                $category = get_term_by( 'slug', $homeBestSellerCatItem, 'product_cat' );
                                                $targetAttr = 'best-seller-tab-' . $bestSellerTabsCount;
                                                $activeClass = '';
                                                $dataInitialized = 'false';
                                                if($bestSellerTabsCount == 1){
                                                    $dataInitialized = 'true';
                                                    $activeClass = 'active';    
                                                }
                                            ?>
                                            <div data-initialized="<?php echo $dataInitialized; ?>" class="tab-heading-item inline-block <?php echo $activeClass; ?>" data-target="#<?php echo $targetAttr; ?>" data-url="<?php echo esc_url( get_term_link( $category ) ); ?>?orderby=popularity">
                                                <span class="tab-heading-item-title cursor-pointer block whitespace-nowrap py-3 font-medium text-center text-sm lg:text-base">
                                                    <?php echo esc_html( $category->name ); ?>
                                                </span>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ( have_rows( 'home-best-seller-list', 'options' ) ) : ?>
                            <div class="tab-content">
                                <?php
                                $bestSellerTabsCount = 0;
                                while ( have_rows( 'home-best-seller-list', 'options' ) ) : the_row();
                                $bestSellerTabsCount ++;
                                ?>
                                    
                                        <?php
                                            $homeBestSellerCatItem = get_sub_field( 'home-best-seller-cat-item', 'options' );
                                            $category = get_term_by( 'slug', $homeBestSellerCatItem, 'product_cat' );
                                            $targetAttr = 'best-seller-tab-' . $bestSellerTabsCount;
                                            $activeClass = '';
                                            if($bestSellerTabsCount == 1){
                                                $activeClass = 'active';    
                                            }
                                        ?>
                                        <div class="tab-content-item <?php echo $activeClass; ?>" id="<?php echo $targetAttr; ?>">
                                            <?php if($bestSellerTabsCount < 2) :?>
                                            <div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
                                                <?php $args = array(
                                                    'post_type' => 'product',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' =>8,
                                                    'orderby' => 'popularity',
                                                    'order' => 'desc',
                                                    'product_cat' => $homeBestSellerCatItem,
                                                    ); ?>
                                                    <?php $getposts = new WP_query( $args);?>
                                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                    <?php global $product; ?>
                                                    <div class="product-grid-item w-full">
                                                        <div class="relative">
                                                            <div class="product-grid-item-thumb relative z-10">
                                                                <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-1x1 rounded overflow-hidden" data-title="<?php echo esc_html(the_title())?>">
                                                                    <?php owlGetThumb(get_the_ID(),'large','ratio-media', false,  get_the_title(), true); ?>
                                                                </a>
                                                            </div>
                                                            <div class="product-grid-item-labels absolute z-20 flex flex-col gap-1 items-start">
                                                                <?php if($product->sale_price) { ?>
                                                                <div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sale">
                                                                    <?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
                                                                        echo sprintf( __('%s', 'woocommerce' ),'-'. $percentage . '%' ); ?>
                                                                </div>
                                                                <?php } ?>
                                                                <?php
                                                                    $owlNewLabelTime = intval(get_field( 'owl-new-label-time', 'options' ));
                                                                    $newness_days = $owlNewLabelTime; // Number of days the badge is shown
                                                                    $created = strtotime($product->get_date_created());
                                                                    if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
                                                                        echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-new">' . esc_html__('Mới', 'woocommerce') . '</div>';
                                                                    }
                                                                ?>       
                                                                <?php 
                                                                if (!$product->is_in_stock()) {
                                                                    echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sold-out">Hết hàng</div>';
                                                                }
                                                                ?>                                                     
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="gap-2 py-5 flex flex-col w-full items-center">
                                                            <?php $brandName = array_shift( wc_get_product_terms( $product->id, 'thuong-hieu', array( 'fields' => 'names' ) ) ); ?>
                                                            <span class="block text-center uppercase text-xs text-secondary"><?php echo $brandName; ?></span>
                                                            <div class="flex flex-col gap-3 items-center">
                                                                <h3 class="mb-0 font-normal text-sm">
                                                                    <a href="<?php the_permalink(); ?>" class="text-center text-sm text-title hover:text-link text-truncate-2" title="<?php the_title(); ?>">
                                                                        <?php the_title(); ?>
                                                                    </a>
                                                                </h3>
                                                                <div class="product-grid-item-prices flex flex-wrap items-center justify-center gap-y-1 gap-x-2">
                                                                    <?php echo $product->get_price_html(); ?>
                                                                </div>
                                                            </div>
                                                            <?php	
                                                                $grid_item_review_count = $product->get_review_count();
                                                                $grid_item_average      = $product->get_average_rating();
                                                                $grid_item_averageCeiled = ceil($grid_item_average);
                                                                if($grid_item_averageCeiled > 0):
                                                            ?>
                                                            <svg class="rating-svg" data-count="<?php echo $grid_item_averageCeiled; ?>" width="87" height="15" viewBox="0 0 87 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13.3313 5.38906C13.2765 5.21679 13.171 5.06508 13.0285 4.95382C12.886 4.84257 12.7132 4.77697 12.5328 4.76562L9.28438 4.54141L8.08125 1.50625C8.01556 1.33913 7.90121 1.19557 7.75301 1.09417C7.6048 0.99277 7.42958 0.938191 7.25 0.9375C7.07043 0.938191 6.89521 0.99277 6.747 1.09417C6.5988 1.19557 6.48445 1.33913 6.41876 1.50625L5.19375 4.55781L1.96719 4.76562C1.787 4.77771 1.61458 4.84358 1.47223 4.95473C1.32989 5.06588 1.22417 5.21718 1.16875 5.38906C1.11185 5.56358 1.10852 5.75115 1.15921 5.92758C1.20989 6.104 1.31227 6.2612 1.45313 6.37891L3.93594 8.47891L3.19766 11.3828C3.14658 11.5793 3.15577 11.7865 3.22404 11.9777C3.29231 12.1688 3.4165 12.335 3.58047 12.4547C3.73963 12.5689 3.92925 12.6331 4.12507 12.6389C4.32089 12.6448 4.514 12.592 4.67969 12.4875L7.24454 10.8633H7.25547L10.0172 12.6078C10.1589 12.6999 10.324 12.7492 10.493 12.75C10.6309 12.7489 10.7668 12.7162 10.8901 12.6544C11.0135 12.5926 11.121 12.5034 11.2044 12.3935C11.2879 12.2836 11.345 12.1561 11.3715 12.0207C11.3979 11.8853 11.393 11.7457 11.357 11.6125L10.575 8.43516L13.0469 6.37891C13.1877 6.2612 13.2901 6.104 13.3408 5.92758C13.3915 5.75115 13.3882 5.56358 13.3313 5.38906Z" fill="#D9D9D9"/>
                                                                <path d="M31.3313 5.38906C31.2765 5.21679 31.171 5.06508 31.0285 4.95382C30.886 4.84257 30.7132 4.77697 30.5328 4.76562L27.2844 4.54141L26.0813 1.50625C26.0156 1.33913 25.9012 1.19557 25.753 1.09417C25.6048 0.99277 25.4296 0.938191 25.25 0.9375C25.0704 0.938191 24.8952 0.99277 24.747 1.09417C24.5988 1.19557 24.4845 1.33913 24.4188 1.50625L23.1938 4.55781L19.9672 4.76562C19.787 4.77771 19.6146 4.84358 19.4722 4.95473C19.3299 5.06588 19.2242 5.21718 19.1688 5.38906C19.1118 5.56358 19.1085 5.75115 19.1592 5.92758C19.2099 6.104 19.3123 6.2612 19.4531 6.37891L21.9359 8.47891L21.1977 11.3828C21.1466 11.5793 21.1558 11.7865 21.224 11.9777C21.2923 12.1688 21.4165 12.335 21.5805 12.4547C21.7396 12.5689 21.9293 12.6331 22.1251 12.6389C22.3209 12.6448 22.514 12.592 22.6797 12.4875L25.2445 10.8633H25.2555L28.0172 12.6078C28.1589 12.6999 28.324 12.7492 28.493 12.75C28.6309 12.7489 28.7668 12.7162 28.8901 12.6544C29.0135 12.5926 29.121 12.5034 29.2044 12.3935C29.2879 12.2836 29.345 12.1561 29.3715 12.0207C29.3979 11.8853 29.393 11.7457 29.357 11.6125L28.575 8.43516L31.0469 6.37891C31.1877 6.2612 31.2901 6.104 31.3408 5.92758C31.3915 5.75115 31.3882 5.56358 31.3313 5.38906Z" fill="#D9D9D9"/>
                                                                <path d="M49.3312 5.38906C49.2765 5.21679 49.171 5.06508 49.0285 4.95382C48.886 4.84257 48.7132 4.77697 48.5328 4.76562L45.2844 4.54141L44.0812 1.50625C44.0156 1.33913 43.9012 1.19557 43.753 1.09417C43.6048 0.99277 43.4296 0.938191 43.25 0.9375C43.0704 0.938191 42.8952 0.99277 42.747 1.09417C42.5988 1.19557 42.4844 1.33913 42.4187 1.50625L41.1937 4.55781L37.9672 4.76562C37.787 4.77771 37.6146 4.84358 37.4722 4.95473C37.3299 5.06588 37.2242 5.21718 37.1687 5.38906C37.1118 5.56358 37.1085 5.75115 37.1592 5.92758C37.2099 6.104 37.3123 6.2612 37.4531 6.37891L39.9359 8.47891L39.1977 11.3828C39.1466 11.5793 39.1558 11.7865 39.224 11.9777C39.2923 12.1688 39.4165 12.335 39.5805 12.4547C39.7396 12.5689 39.9292 12.6331 40.1251 12.6389C40.3209 12.6448 40.514 12.592 40.6797 12.4875L43.2445 10.8633H43.2555L46.0172 12.6078C46.1589 12.6999 46.324 12.7492 46.493 12.75C46.6309 12.7489 46.7668 12.7162 46.8901 12.6544C47.0134 12.5926 47.121 12.5034 47.2044 12.3935C47.2879 12.2836 47.345 12.1561 47.3715 12.0207C47.3979 11.8853 47.393 11.7457 47.357 11.6125L46.575 8.43516L49.0469 6.37891C49.1877 6.2612 49.2901 6.104 49.3408 5.92758C49.3915 5.75115 49.3882 5.56358 49.3312 5.38906Z" fill="#D9D9D9"/>
                                                                <path d="M67.3312 5.38906C67.2765 5.21679 67.171 5.06508 67.0285 4.95382C66.886 4.84257 66.7132 4.77697 66.5328 4.76562L63.2844 4.54141L62.0812 1.50625C62.0156 1.33913 61.9012 1.19557 61.753 1.09417C61.6048 0.99277 61.4296 0.938191 61.25 0.9375C61.0704 0.938191 60.8952 0.99277 60.747 1.09417C60.5988 1.19557 60.4844 1.33913 60.4187 1.50625L59.1937 4.55781L55.9672 4.76562C55.787 4.77771 55.6146 4.84358 55.4722 4.95473C55.3299 5.06588 55.2242 5.21718 55.1687 5.38906C55.1118 5.56358 55.1085 5.75115 55.1592 5.92758C55.2099 6.104 55.3123 6.2612 55.4531 6.37891L57.9359 8.47891L57.1977 11.3828C57.1466 11.5793 57.1558 11.7865 57.224 11.9777C57.2923 12.1688 57.4165 12.335 57.5805 12.4547C57.7396 12.5689 57.9292 12.6331 58.1251 12.6389C58.3209 12.6448 58.514 12.592 58.6797 12.4875L61.2445 10.8633H61.2555L64.0172 12.6078C64.1589 12.6999 64.324 12.7492 64.493 12.75C64.6309 12.7489 64.7668 12.7162 64.8901 12.6544C65.0134 12.5926 65.121 12.5034 65.2044 12.3935C65.2879 12.2836 65.345 12.1561 65.3715 12.0207C65.3979 11.8853 65.393 11.7457 65.357 11.6125L64.575 8.43516L67.0469 6.37891C67.1877 6.2612 67.2901 6.104 67.3408 5.92758C67.3915 5.75115 67.3882 5.56358 67.3312 5.38906Z" fill="#D9D9D9"/>
                                                                <path d="M85.3312 5.38906C85.2765 5.21679 85.171 5.06508 85.0285 4.95382C84.886 4.84257 84.7132 4.77697 84.5328 4.76562L81.2844 4.54141L80.0812 1.50625C80.0156 1.33913 79.9012 1.19557 79.753 1.09417C79.6048 0.99277 79.4296 0.938191 79.25 0.9375C79.0704 0.938191 78.8952 0.99277 78.747 1.09417C78.5988 1.19557 78.4844 1.33913 78.4187 1.50625L77.1937 4.55781L73.9672 4.76562C73.787 4.77771 73.6146 4.84358 73.4722 4.95473C73.3299 5.06588 73.2242 5.21718 73.1687 5.38906C73.1118 5.56358 73.1085 5.75115 73.1592 5.92758C73.2099 6.104 73.3123 6.2612 73.4531 6.37891L75.9359 8.47891L75.1977 11.3828C75.1466 11.5793 75.1558 11.7865 75.224 11.9777C75.2923 12.1688 75.4165 12.335 75.5805 12.4547C75.7396 12.5689 75.9292 12.6331 76.1251 12.6389C76.3209 12.6448 76.514 12.592 76.6797 12.4875L79.2445 10.8633H79.2555L82.0172 12.6078C82.1589 12.6999 82.324 12.7492 82.493 12.75C82.6309 12.7489 82.7668 12.7162 82.8901 12.6544C83.0134 12.5926 83.121 12.5034 83.2044 12.3935C83.2879 12.2836 83.345 12.1561 83.3715 12.0207C83.3979 11.8853 83.393 11.7457 83.357 11.6125L82.575 8.43516L85.0469 6.37891C85.1877 6.2612 85.2901 6.104 85.3408 5.92758C85.3915 5.75115 85.3882 5.56358 85.3312 5.38906Z" fill="#D9D9D9"/>
                                                            </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endwhile;  wp_reset_postdata(); ?>                                            
                                                
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="flex justify-center">
                                <a href="#" class="section-more-link underline-element flex gap-2 items-center justify-center py-2 text-sm text-title hover:text-title">
                                    <span>Xem thêm đồng hồ bán chạy</span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>    

    <?php if ( have_rows( 'home-sale-group', 'options' ) ) : ?>
        <?php while ( have_rows( 'home-sale-group', 'options' ) ) :
            the_row(); ?>
            <section class="bg-gray py-4 md:py-6 home-tabs-product">
                <div class="container">
                    <div class="rounded-lg flex flex-col gap-6 p-6 bg-white">
                        <div class="section-heading flex flex-col items-center pb-0 gap-6">
                            <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                            <?php if ( $homeSaleTitle = get_sub_field( 'home-sale-title', 'options' ) ) : ?>
                                <?php echo esc_html( $homeSaleTitle ); ?>
                            <?php endif; ?>
                            </h2>
                            <div class="line w-full"></div>
                        </div>
                        <div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
                            <?php
                                $args = array( 
                                    'post_type' => 'product',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 8, 
                                    'meta_query'     => array(
                                        'relation' => 'OR',
                                        array(
                                            'key'           => '_sale_price',
                                            'value'         => 0,
                                            'compare'       => '>',
                                            'type'          => 'numeric'
                                        )
                                    )
                                );
                            ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php global $product; ?>
                                <div class="product-grid-item w-full">
                                    <div class="relative">
                                        <div class="product-grid-item-thumb relative z-10">
                                            <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-1x1 rounded overflow-hidden" data-title="<?php echo esc_html(the_title())?>">
                                                <?php owlGetThumb(get_the_ID(),'large','ratio-media', false,  get_the_title(), true); ?>
                                            </a>
                                        </div>
                                        <div class="product-grid-item-labels absolute z-20 flex flex-col gap-1 items-start">
                                            <?php if($product->sale_price) { ?>
                                            <div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sale">
                                                <?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
                                                    echo sprintf( __('%s', 'woocommerce' ),'-'. $percentage . '%' ); ?>
                                            </div>
                                            <?php } ?>
                                            <?php
                                                $owlNewLabelTime = intval(get_field( 'owl-new-label-time', 'options' ));
                                                $newness_days = $owlNewLabelTime; // Number of days the badge is shown
                                                $created = strtotime($product->get_date_created());
                                                if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
                                                    echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-new">' . esc_html__('Mới', 'woocommerce') . '</div>';
                                                }
                                            ?>       
                                            <?php 
                                            if (!$product->is_in_stock()) {
                                                echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sold-out">Hết hàng</div>';
                                            }
                                            ?>                                                     
                                            
                                        </div>
                                    </div>
                                    <div class="gap-2 py-5 flex flex-col w-full items-center">
                                        <?php $brandName = array_shift( wc_get_product_terms( $product->id, 'thuong-hieu', array( 'fields' => 'names' ) ) ); ?>
                                        <span class="block text-center uppercase text-xs text-secondary"><?php echo $brandName; ?></span>
                                        <div class="flex flex-col gap-3 items-center">
                                            <h3 class="mb-0 font-normal text-sm">
                                                <a href="<?php the_permalink(); ?>" class="text-center text-sm text-title hover:text-link text-truncate-2" title="<?php the_title(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <div class="product-grid-item-prices flex flex-wrap items-center justify-center gap-y-1 gap-x-2">
                                                <?php echo $product->get_price_html(); ?>
                                            </div>
                                        </div>
                                        <?php	
                                            $related_review_count = $product->get_review_count();
                                            $related_average      = $product->get_average_rating();
                                            $related_averageCeiled = ceil($related_average);
                                            if($related_averageCeiled > 0):
                                        ?>
                                        <svg class="rating-svg" data-count="<?php echo $related_averageCeiled; ?>" width="87" height="15" viewBox="0 0 87 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3313 5.38906C13.2765 5.21679 13.171 5.06508 13.0285 4.95382C12.886 4.84257 12.7132 4.77697 12.5328 4.76562L9.28438 4.54141L8.08125 1.50625C8.01556 1.33913 7.90121 1.19557 7.75301 1.09417C7.6048 0.99277 7.42958 0.938191 7.25 0.9375C7.07043 0.938191 6.89521 0.99277 6.747 1.09417C6.5988 1.19557 6.48445 1.33913 6.41876 1.50625L5.19375 4.55781L1.96719 4.76562C1.787 4.77771 1.61458 4.84358 1.47223 4.95473C1.32989 5.06588 1.22417 5.21718 1.16875 5.38906C1.11185 5.56358 1.10852 5.75115 1.15921 5.92758C1.20989 6.104 1.31227 6.2612 1.45313 6.37891L3.93594 8.47891L3.19766 11.3828C3.14658 11.5793 3.15577 11.7865 3.22404 11.9777C3.29231 12.1688 3.4165 12.335 3.58047 12.4547C3.73963 12.5689 3.92925 12.6331 4.12507 12.6389C4.32089 12.6448 4.514 12.592 4.67969 12.4875L7.24454 10.8633H7.25547L10.0172 12.6078C10.1589 12.6999 10.324 12.7492 10.493 12.75C10.6309 12.7489 10.7668 12.7162 10.8901 12.6544C11.0135 12.5926 11.121 12.5034 11.2044 12.3935C11.2879 12.2836 11.345 12.1561 11.3715 12.0207C11.3979 11.8853 11.393 11.7457 11.357 11.6125L10.575 8.43516L13.0469 6.37891C13.1877 6.2612 13.2901 6.104 13.3408 5.92758C13.3915 5.75115 13.3882 5.56358 13.3313 5.38906Z" fill="#D9D9D9"/>
                                            <path d="M31.3313 5.38906C31.2765 5.21679 31.171 5.06508 31.0285 4.95382C30.886 4.84257 30.7132 4.77697 30.5328 4.76562L27.2844 4.54141L26.0813 1.50625C26.0156 1.33913 25.9012 1.19557 25.753 1.09417C25.6048 0.99277 25.4296 0.938191 25.25 0.9375C25.0704 0.938191 24.8952 0.99277 24.747 1.09417C24.5988 1.19557 24.4845 1.33913 24.4188 1.50625L23.1938 4.55781L19.9672 4.76562C19.787 4.77771 19.6146 4.84358 19.4722 4.95473C19.3299 5.06588 19.2242 5.21718 19.1688 5.38906C19.1118 5.56358 19.1085 5.75115 19.1592 5.92758C19.2099 6.104 19.3123 6.2612 19.4531 6.37891L21.9359 8.47891L21.1977 11.3828C21.1466 11.5793 21.1558 11.7865 21.224 11.9777C21.2923 12.1688 21.4165 12.335 21.5805 12.4547C21.7396 12.5689 21.9293 12.6331 22.1251 12.6389C22.3209 12.6448 22.514 12.592 22.6797 12.4875L25.2445 10.8633H25.2555L28.0172 12.6078C28.1589 12.6999 28.324 12.7492 28.493 12.75C28.6309 12.7489 28.7668 12.7162 28.8901 12.6544C29.0135 12.5926 29.121 12.5034 29.2044 12.3935C29.2879 12.2836 29.345 12.1561 29.3715 12.0207C29.3979 11.8853 29.393 11.7457 29.357 11.6125L28.575 8.43516L31.0469 6.37891C31.1877 6.2612 31.2901 6.104 31.3408 5.92758C31.3915 5.75115 31.3882 5.56358 31.3313 5.38906Z" fill="#D9D9D9"/>
                                            <path d="M49.3312 5.38906C49.2765 5.21679 49.171 5.06508 49.0285 4.95382C48.886 4.84257 48.7132 4.77697 48.5328 4.76562L45.2844 4.54141L44.0812 1.50625C44.0156 1.33913 43.9012 1.19557 43.753 1.09417C43.6048 0.99277 43.4296 0.938191 43.25 0.9375C43.0704 0.938191 42.8952 0.99277 42.747 1.09417C42.5988 1.19557 42.4844 1.33913 42.4187 1.50625L41.1937 4.55781L37.9672 4.76562C37.787 4.77771 37.6146 4.84358 37.4722 4.95473C37.3299 5.06588 37.2242 5.21718 37.1687 5.38906C37.1118 5.56358 37.1085 5.75115 37.1592 5.92758C37.2099 6.104 37.3123 6.2612 37.4531 6.37891L39.9359 8.47891L39.1977 11.3828C39.1466 11.5793 39.1558 11.7865 39.224 11.9777C39.2923 12.1688 39.4165 12.335 39.5805 12.4547C39.7396 12.5689 39.9292 12.6331 40.1251 12.6389C40.3209 12.6448 40.514 12.592 40.6797 12.4875L43.2445 10.8633H43.2555L46.0172 12.6078C46.1589 12.6999 46.324 12.7492 46.493 12.75C46.6309 12.7489 46.7668 12.7162 46.8901 12.6544C47.0134 12.5926 47.121 12.5034 47.2044 12.3935C47.2879 12.2836 47.345 12.1561 47.3715 12.0207C47.3979 11.8853 47.393 11.7457 47.357 11.6125L46.575 8.43516L49.0469 6.37891C49.1877 6.2612 49.2901 6.104 49.3408 5.92758C49.3915 5.75115 49.3882 5.56358 49.3312 5.38906Z" fill="#D9D9D9"/>
                                            <path d="M67.3312 5.38906C67.2765 5.21679 67.171 5.06508 67.0285 4.95382C66.886 4.84257 66.7132 4.77697 66.5328 4.76562L63.2844 4.54141L62.0812 1.50625C62.0156 1.33913 61.9012 1.19557 61.753 1.09417C61.6048 0.99277 61.4296 0.938191 61.25 0.9375C61.0704 0.938191 60.8952 0.99277 60.747 1.09417C60.5988 1.19557 60.4844 1.33913 60.4187 1.50625L59.1937 4.55781L55.9672 4.76562C55.787 4.77771 55.6146 4.84358 55.4722 4.95473C55.3299 5.06588 55.2242 5.21718 55.1687 5.38906C55.1118 5.56358 55.1085 5.75115 55.1592 5.92758C55.2099 6.104 55.3123 6.2612 55.4531 6.37891L57.9359 8.47891L57.1977 11.3828C57.1466 11.5793 57.1558 11.7865 57.224 11.9777C57.2923 12.1688 57.4165 12.335 57.5805 12.4547C57.7396 12.5689 57.9292 12.6331 58.1251 12.6389C58.3209 12.6448 58.514 12.592 58.6797 12.4875L61.2445 10.8633H61.2555L64.0172 12.6078C64.1589 12.6999 64.324 12.7492 64.493 12.75C64.6309 12.7489 64.7668 12.7162 64.8901 12.6544C65.0134 12.5926 65.121 12.5034 65.2044 12.3935C65.2879 12.2836 65.345 12.1561 65.3715 12.0207C65.3979 11.8853 65.393 11.7457 65.357 11.6125L64.575 8.43516L67.0469 6.37891C67.1877 6.2612 67.2901 6.104 67.3408 5.92758C67.3915 5.75115 67.3882 5.56358 67.3312 5.38906Z" fill="#D9D9D9"/>
                                            <path d="M85.3312 5.38906C85.2765 5.21679 85.171 5.06508 85.0285 4.95382C84.886 4.84257 84.7132 4.77697 84.5328 4.76562L81.2844 4.54141L80.0812 1.50625C80.0156 1.33913 79.9012 1.19557 79.753 1.09417C79.6048 0.99277 79.4296 0.938191 79.25 0.9375C79.0704 0.938191 78.8952 0.99277 78.747 1.09417C78.5988 1.19557 78.4844 1.33913 78.4187 1.50625L77.1937 4.55781L73.9672 4.76562C73.787 4.77771 73.6146 4.84358 73.4722 4.95473C73.3299 5.06588 73.2242 5.21718 73.1687 5.38906C73.1118 5.56358 73.1085 5.75115 73.1592 5.92758C73.2099 6.104 73.3123 6.2612 73.4531 6.37891L75.9359 8.47891L75.1977 11.3828C75.1466 11.5793 75.1558 11.7865 75.224 11.9777C75.2923 12.1688 75.4165 12.335 75.5805 12.4547C75.7396 12.5689 75.9292 12.6331 76.1251 12.6389C76.3209 12.6448 76.514 12.592 76.6797 12.4875L79.2445 10.8633H79.2555L82.0172 12.6078C82.1589 12.6999 82.324 12.7492 82.493 12.75C82.6309 12.7489 82.7668 12.7162 82.8901 12.6544C83.0134 12.5926 83.121 12.5034 83.2044 12.3935C83.2879 12.2836 83.345 12.1561 83.3715 12.0207C83.3979 11.8853 83.393 11.7457 83.357 11.6125L82.575 8.43516L85.0469 6.37891C85.1877 6.2612 85.2901 6.104 85.3408 5.92758C85.3915 5.75115 85.3882 5.56358 85.3312 5.38906Z" fill="#D9D9D9"/>
                                        </svg>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile;  wp_reset_postdata(); ?>
                        </div>                    
                        <div class="flex justify-center">
                            <a href="<?php echo wc_get_page_permalink( 'shop' ) ?>?orderby=on_sale" class="section-more-link underline-element flex gap-2 items-center justify-center py-2 text-sm text-title hover:text-title">
                                <span>Xem thêm sản phẩm khuyến mãi</span>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'home-banner', 'options' ) ) : ?>
        <?php while ( have_rows( 'home-banner', 'options' ) ) :
            the_row(); ?>
            <?php if(get_sub_field( 'home-banner-3', 'options' )) : 
                $banner3 = get_sub_field( 'home-banner-3', 'options' );
                $banner3Mobile = get_sub_field( 'home-banner-3-mobile', 'options' );
                $banner3Data = wp_get_attachment_image_src($banner3, 'large');
                $banner3MobileData = wp_get_attachment_image_src($banner3Mobile, 'large');                
            ?>
            <section class="bg-gray py-4 md:py-6">
                <div class="container">
                    <a href="<?php if ( $homeBanner3Url = get_sub_field( 'home-banner-3-url', 'options' ) ) : ?><?php echo esc_html( $homeBanner3Url ); ?><?php endif; ?>">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $banner3MobileData[0]; ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $banner3Data[0]; ?>">
                            <?php echo wp_get_attachment_image($banner3, 'large', false, array( 'class' => 'w-full rounded-lg h-auto', 'alt' => 'Banner 3', 'loading' => 'lazy' ) ); ?>
                        </picture>                        
                    </a>
                </div>
            </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'home-new-product-group', 'options' ) ) : ?>
	<?php while ( have_rows( 'home-new-product-group', 'options' ) ) :
		the_row(); ?>
            <section class="bg-gray py-4 md:py-6 home-tabs-product" data-product-tab-type="new">
                <div class="container">
                    <div class="rounded-lg flex flex-col gap-6 p-6 bg-white">
                        <div class="section-heading flex flex-col items-center pb-0 gap-6">
                            <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                            <?php if ( $homeNewProductTitle = get_sub_field( 'home-new-product-title', 'options' ) ) : ?>
                                <?php echo esc_html( $homeNewProductTitle ); ?>
                            <?php endif; ?>
                            </h2>
                            <?php if ( have_rows( 'home-new-product-list', 'options' ) ) : ?>
                                <div class="tab-heading-outer bg-white relative w-full flex justify-center">
                                    <div class="tab-heading overflow-auto w-full block relative z-10 text-center whitespace-nowrap">
                                        <?php
                                        $newProductTabsCount = 0;
                                        while ( have_rows( 'home-new-product-list', 'options' ) ) : the_row();
                                        $newProductTabsCount ++;
                                        ?>
                                            <?php
                                                $homeNewProductCatItem = get_sub_field( 'home-new-product-cat-item', 'options' );
                                                $category = get_term_by( 'slug', $homeNewProductCatItem, 'product_cat' );
                                                $targetAttr = 'new-product-tab-' . $newProductTabsCount;
                                                $activeClass = '';
                                                $dataInitialized = 'false';
                                                if($newProductTabsCount == 1){
                                                    $dataInitialized = 'true';
                                                    $activeClass = 'active';    
                                                }
                                            ?>
                                            <div data-initialized="<?php echo $dataInitialized; ?>" class="tab-heading-item inline-block <?php echo $activeClass; ?>" data-target="#<?php echo $targetAttr; ?>" data-url="<?php echo esc_url( get_term_link( $category ) ); ?>">
                                                <span class="tab-heading-item-title cursor-pointer block whitespace-nowrap py-3 font-medium text-center text-sm lg:text-base">
                                                    <?php echo esc_html( $category->name ); ?>
                                                </span>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ( have_rows( 'home-new-product-list', 'options' ) ) : ?>
                            <div class="tab-content">
                                <?php
                                $newProductTabsCount = 0;
                                while ( have_rows( 'home-new-product-list', 'options' ) ) : the_row();
                                $newProductTabsCount ++;
                                ?>
                                    <?php
                                        $homeNewProductCatItem = get_sub_field( 'home-new-product-cat-item', 'options' );
                                        $category = get_term_by( 'slug', $homeNewProductCatItem, 'product_cat' );
                                        $targetAttr = 'new-product-tab-' . $newProductTabsCount;
                                        $activeClass = '';
                                        if($newProductTabsCount == 1){
                                            $activeClass = 'active';    
                                        }
                                    ?>
                                    <div class="tab-content-item <?php echo $activeClass; ?>" id="<?php echo $targetAttr; ?>">
                                        <?php if($newProductTabsCount < 2) :?>
                                        <div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
                                            <?php
                                                $args = array(
                                                    'post_type' => 'product',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' =>8,
                                                    'product_cat' => $homeNewProductCatItem
                                                );
                                            ?>
                                                <?php $getposts = new WP_query( $args);?>
                                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                <?php global $product; ?>
                                                <div class="product-grid-item w-full">
                                                    <div class="relative">
                                                        <div class="product-grid-item-thumb relative z-10">
                                                            <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-1x1 rounded overflow-hidden" data-title="<?php echo esc_html(the_title())?>">
                                                                <?php owlGetThumb(get_the_ID(),'large','ratio-media', false,  get_the_title(), true); ?>
                                                            </a>
                                                        </div>
                                                        <div class="product-grid-item-labels absolute z-20 flex flex-col gap-1 items-start">
                                                            <?php if($product->sale_price) { ?>
                                                            <div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sale">
                                                                <?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
                                                                    echo sprintf( __('%s', 'woocommerce' ),'-'. $percentage . '%' ); ?>
                                                            </div>
                                                            <?php } ?>
                                                            <?php
                                                                $owlNewLabelTime = intval(get_field( 'owl-new-label-time', 'options' ));
                                                                $newness_days = $owlNewLabelTime; // Number of days the badge is shown
                                                                $created = strtotime($product->get_date_created());
                                                                if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
                                                                    echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-new">' . esc_html__('Mới', 'woocommerce') . '</div>';
                                                                }
                                                            ?>       
                                                            <?php 
                                                            if (!$product->is_in_stock()) {
                                                                echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sold-out">Hết hàng</div>';
                                                            }
                                                            ?>                                                     
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="gap-2 py-5 flex flex-col w-full items-center">
                                                        <?php $brandName = array_shift( wc_get_product_terms( $product->id, 'thuong-hieu', array( 'fields' => 'names' ) ) ); ?>
                                                        <span class="block text-center uppercase text-xs text-secondary"><?php echo $brandName; ?></span>
                                                        <div class="flex flex-col gap-3 items-center">
                                                            <h3 class="mb-0 font-normal text-sm">
                                                                <a href="<?php the_permalink(); ?>" class="text-center text-sm text-title hover:text-link text-truncate-2" title="<?php the_title(); ?>">
                                                                    <?php the_title(); ?>
                                                                </a>
                                                            </h3>
                                                            <div class="product-grid-item-prices flex flex-wrap items-center justify-center gap-y-1 gap-x-2">
                                                                <?php echo $product->get_price_html(); ?>
                                                            </div>
                                                        </div>
                                                        <?php	
                                                            $related_review_count = $product->get_review_count();
                                                            $related_average      = $product->get_average_rating();
                                                            $related_averageCeiled = ceil($related_average);
                                                            if($related_averageCeiled > 0):
                                                        ?>
                                                        <svg class="rating-svg" data-count="<?php echo $related_averageCeiled; ?>" width="87" height="15" viewBox="0 0 87 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3313 5.38906C13.2765 5.21679 13.171 5.06508 13.0285 4.95382C12.886 4.84257 12.7132 4.77697 12.5328 4.76562L9.28438 4.54141L8.08125 1.50625C8.01556 1.33913 7.90121 1.19557 7.75301 1.09417C7.6048 0.99277 7.42958 0.938191 7.25 0.9375C7.07043 0.938191 6.89521 0.99277 6.747 1.09417C6.5988 1.19557 6.48445 1.33913 6.41876 1.50625L5.19375 4.55781L1.96719 4.76562C1.787 4.77771 1.61458 4.84358 1.47223 4.95473C1.32989 5.06588 1.22417 5.21718 1.16875 5.38906C1.11185 5.56358 1.10852 5.75115 1.15921 5.92758C1.20989 6.104 1.31227 6.2612 1.45313 6.37891L3.93594 8.47891L3.19766 11.3828C3.14658 11.5793 3.15577 11.7865 3.22404 11.9777C3.29231 12.1688 3.4165 12.335 3.58047 12.4547C3.73963 12.5689 3.92925 12.6331 4.12507 12.6389C4.32089 12.6448 4.514 12.592 4.67969 12.4875L7.24454 10.8633H7.25547L10.0172 12.6078C10.1589 12.6999 10.324 12.7492 10.493 12.75C10.6309 12.7489 10.7668 12.7162 10.8901 12.6544C11.0135 12.5926 11.121 12.5034 11.2044 12.3935C11.2879 12.2836 11.345 12.1561 11.3715 12.0207C11.3979 11.8853 11.393 11.7457 11.357 11.6125L10.575 8.43516L13.0469 6.37891C13.1877 6.2612 13.2901 6.104 13.3408 5.92758C13.3915 5.75115 13.3882 5.56358 13.3313 5.38906Z" fill="#D9D9D9"/>
                                                            <path d="M31.3313 5.38906C31.2765 5.21679 31.171 5.06508 31.0285 4.95382C30.886 4.84257 30.7132 4.77697 30.5328 4.76562L27.2844 4.54141L26.0813 1.50625C26.0156 1.33913 25.9012 1.19557 25.753 1.09417C25.6048 0.99277 25.4296 0.938191 25.25 0.9375C25.0704 0.938191 24.8952 0.99277 24.747 1.09417C24.5988 1.19557 24.4845 1.33913 24.4188 1.50625L23.1938 4.55781L19.9672 4.76562C19.787 4.77771 19.6146 4.84358 19.4722 4.95473C19.3299 5.06588 19.2242 5.21718 19.1688 5.38906C19.1118 5.56358 19.1085 5.75115 19.1592 5.92758C19.2099 6.104 19.3123 6.2612 19.4531 6.37891L21.9359 8.47891L21.1977 11.3828C21.1466 11.5793 21.1558 11.7865 21.224 11.9777C21.2923 12.1688 21.4165 12.335 21.5805 12.4547C21.7396 12.5689 21.9293 12.6331 22.1251 12.6389C22.3209 12.6448 22.514 12.592 22.6797 12.4875L25.2445 10.8633H25.2555L28.0172 12.6078C28.1589 12.6999 28.324 12.7492 28.493 12.75C28.6309 12.7489 28.7668 12.7162 28.8901 12.6544C29.0135 12.5926 29.121 12.5034 29.2044 12.3935C29.2879 12.2836 29.345 12.1561 29.3715 12.0207C29.3979 11.8853 29.393 11.7457 29.357 11.6125L28.575 8.43516L31.0469 6.37891C31.1877 6.2612 31.2901 6.104 31.3408 5.92758C31.3915 5.75115 31.3882 5.56358 31.3313 5.38906Z" fill="#D9D9D9"/>
                                                            <path d="M49.3312 5.38906C49.2765 5.21679 49.171 5.06508 49.0285 4.95382C48.886 4.84257 48.7132 4.77697 48.5328 4.76562L45.2844 4.54141L44.0812 1.50625C44.0156 1.33913 43.9012 1.19557 43.753 1.09417C43.6048 0.99277 43.4296 0.938191 43.25 0.9375C43.0704 0.938191 42.8952 0.99277 42.747 1.09417C42.5988 1.19557 42.4844 1.33913 42.4187 1.50625L41.1937 4.55781L37.9672 4.76562C37.787 4.77771 37.6146 4.84358 37.4722 4.95473C37.3299 5.06588 37.2242 5.21718 37.1687 5.38906C37.1118 5.56358 37.1085 5.75115 37.1592 5.92758C37.2099 6.104 37.3123 6.2612 37.4531 6.37891L39.9359 8.47891L39.1977 11.3828C39.1466 11.5793 39.1558 11.7865 39.224 11.9777C39.2923 12.1688 39.4165 12.335 39.5805 12.4547C39.7396 12.5689 39.9292 12.6331 40.1251 12.6389C40.3209 12.6448 40.514 12.592 40.6797 12.4875L43.2445 10.8633H43.2555L46.0172 12.6078C46.1589 12.6999 46.324 12.7492 46.493 12.75C46.6309 12.7489 46.7668 12.7162 46.8901 12.6544C47.0134 12.5926 47.121 12.5034 47.2044 12.3935C47.2879 12.2836 47.345 12.1561 47.3715 12.0207C47.3979 11.8853 47.393 11.7457 47.357 11.6125L46.575 8.43516L49.0469 6.37891C49.1877 6.2612 49.2901 6.104 49.3408 5.92758C49.3915 5.75115 49.3882 5.56358 49.3312 5.38906Z" fill="#D9D9D9"/>
                                                            <path d="M67.3312 5.38906C67.2765 5.21679 67.171 5.06508 67.0285 4.95382C66.886 4.84257 66.7132 4.77697 66.5328 4.76562L63.2844 4.54141L62.0812 1.50625C62.0156 1.33913 61.9012 1.19557 61.753 1.09417C61.6048 0.99277 61.4296 0.938191 61.25 0.9375C61.0704 0.938191 60.8952 0.99277 60.747 1.09417C60.5988 1.19557 60.4844 1.33913 60.4187 1.50625L59.1937 4.55781L55.9672 4.76562C55.787 4.77771 55.6146 4.84358 55.4722 4.95473C55.3299 5.06588 55.2242 5.21718 55.1687 5.38906C55.1118 5.56358 55.1085 5.75115 55.1592 5.92758C55.2099 6.104 55.3123 6.2612 55.4531 6.37891L57.9359 8.47891L57.1977 11.3828C57.1466 11.5793 57.1558 11.7865 57.224 11.9777C57.2923 12.1688 57.4165 12.335 57.5805 12.4547C57.7396 12.5689 57.9292 12.6331 58.1251 12.6389C58.3209 12.6448 58.514 12.592 58.6797 12.4875L61.2445 10.8633H61.2555L64.0172 12.6078C64.1589 12.6999 64.324 12.7492 64.493 12.75C64.6309 12.7489 64.7668 12.7162 64.8901 12.6544C65.0134 12.5926 65.121 12.5034 65.2044 12.3935C65.2879 12.2836 65.345 12.1561 65.3715 12.0207C65.3979 11.8853 65.393 11.7457 65.357 11.6125L64.575 8.43516L67.0469 6.37891C67.1877 6.2612 67.2901 6.104 67.3408 5.92758C67.3915 5.75115 67.3882 5.56358 67.3312 5.38906Z" fill="#D9D9D9"/>
                                                            <path d="M85.3312 5.38906C85.2765 5.21679 85.171 5.06508 85.0285 4.95382C84.886 4.84257 84.7132 4.77697 84.5328 4.76562L81.2844 4.54141L80.0812 1.50625C80.0156 1.33913 79.9012 1.19557 79.753 1.09417C79.6048 0.99277 79.4296 0.938191 79.25 0.9375C79.0704 0.938191 78.8952 0.99277 78.747 1.09417C78.5988 1.19557 78.4844 1.33913 78.4187 1.50625L77.1937 4.55781L73.9672 4.76562C73.787 4.77771 73.6146 4.84358 73.4722 4.95473C73.3299 5.06588 73.2242 5.21718 73.1687 5.38906C73.1118 5.56358 73.1085 5.75115 73.1592 5.92758C73.2099 6.104 73.3123 6.2612 73.4531 6.37891L75.9359 8.47891L75.1977 11.3828C75.1466 11.5793 75.1558 11.7865 75.224 11.9777C75.2923 12.1688 75.4165 12.335 75.5805 12.4547C75.7396 12.5689 75.9292 12.6331 76.1251 12.6389C76.3209 12.6448 76.514 12.592 76.6797 12.4875L79.2445 10.8633H79.2555L82.0172 12.6078C82.1589 12.6999 82.324 12.7492 82.493 12.75C82.6309 12.7489 82.7668 12.7162 82.8901 12.6544C83.0134 12.5926 83.121 12.5034 83.2044 12.3935C83.2879 12.2836 83.345 12.1561 83.3715 12.0207C83.3979 11.8853 83.393 11.7457 83.357 11.6125L82.575 8.43516L85.0469 6.37891C85.1877 6.2612 85.2901 6.104 85.3408 5.92758C85.3915 5.75115 85.3882 5.56358 85.3312 5.38906Z" fill="#D9D9D9"/>
                                                        </svg>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endwhile;  wp_reset_postdata(); ?>                                            
                                            
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="flex justify-center">
                                <a href="#" class="section-more-link underline-element flex gap-2 items-center justify-center py-2 text-sm text-title hover:text-title">
                                    <span>Xem thêm <span class="home-tabs-product-current-tab lowercase"></span></span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'why-tp-group', 'options' ) ) : ?>
        <?php while ( have_rows( 'why-tp-group', 'options' ) ) :
            the_row(); ?>
            <section class="bg-gray py-4 md:py-6">
                <div class="container">
                    <div class="rounded-lg flex flex-col gap-6 py-6 bg-white">
                        <div class="px-6">
                            <div class="section-heading flex flex-col items-center pb-0 gap-6">
                                <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                                <?php if ( $whyTpTitle = get_sub_field( 'why-tp-title', 'options' ) ) : ?>
                                    <?php echo esc_html( $whyTpTitle ); ?>
                                <?php endif; ?>
                                </h2>
                                <div class="line w-full"></div>
                            </div>
                        </div>
                        <?php if ( have_rows( 'why-tp-list', 'options' ) ) : ?>
                            <div class="why-us-list px-6 pb-6 gap-4 md:gap-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                            <?php while ( have_rows( 'why-tp-list', 'options' ) ) :
                                the_row(); ?>
                                <div class="why-us-item bg-white rounded overflow-hidden p-4 flex gap-4 items-center">                                    
                                    <?php
                                    $whyTpDes = get_sub_field( 'why-tp-des', 'options' );
                                    $whyTpIcon = get_sub_field( 'why-tp-icon', 'options' );
                                    if ( $whyTpIcon ) : ?>
                                        <img loading="lazy" class="icon-box icon-box-lg md:icon-box-xl" src="<?php echo esc_url( $whyTpIcon['url'] ); ?>" alt="<?php echo esc_html( $whyTpDes ); ?>">
                                    <?php endif; ?>
                                    <div class="flex flex-col gap-2 justify-center">
                                        <div class="text-sm font-bold">
                                            <?php echo esc_html( $whyTpDes ); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>                        
                            
                        
        
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>   

    <?php if ( have_rows( 'feedback-group', 'options' ) ) : ?>
	<?php while ( have_rows( 'feedback-group', 'options' ) ) :
		the_row(); ?>
        <section class="bg-gray py-4 md:py-6">
            <div class="container">
                <div class="rounded-lg flex flex-col gap-6 py-6 bg-white">
                    <div class="px-6">
                        <div class="section-heading flex flex-col items-center pb-0 gap-6">
                            <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                            <?php if ( $feedbackTitle = get_sub_field( 'feedback-title', 'options' ) ) : ?>
                                <?php echo esc_html( $feedbackTitle ); ?>
                            <?php endif; ?>
                            </h2>
                            <div class="line w-full"></div>
                        </div>
                    </div>
                    <?php if ( have_rows( 'feedback-list', 'options' ) ) : ?>
                    <div class="testimonial py-2 px-6 relative">
                        <div class="testimonial-items relative z-10">                        
                        <?php while ( have_rows( 'feedback-list', 'options' ) ) :
                            the_row(); ?>
                            <div class="testimonial-item grid items-center md:items-start grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                                <div class="testimonial-thumb rounded bg-gradient-light p-2 lg:col-start-1 lg:col-end-2">
                                    <div class="w-full ratio-thumb ratio-1x1 rounded overflow-hidden">
                                        <?php
                                            $thumbID = get_sub_field( 'feedback-item-image', 'options' );
                                            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                            echo owlGetImage( $thumbID, $size, 'ratio-media' , false, 'Khách hàng nói gì', false)
                                        ?>

                                    
                                    </div>
                                </div>
                                <div class="testimonial-content flex flex-col justify-center md:col-start-2 md:col-end-5 gap-6 lg:gap-8 items-center md:items-start pr-0 md:pr-10 xl:pr-18">
                                    <svg width="199" height="33" viewBox="0 0 199 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.2401 12.6938C30.1136 12.2956 29.8696 11.9449 29.5402 11.6877C29.2108 11.4305 28.8114 11.2788 28.3944 11.2526L20.8849 10.7343L18.1036 3.71786C17.9518 3.33152 17.6874 2.99967 17.3448 2.76525C17.0022 2.53084 16.5971 2.40467 16.182 2.40308C15.7669 2.40467 15.3618 2.53084 15.0192 2.76525C14.6766 2.99967 14.4123 3.33152 14.2604 3.71786L11.4286 10.7722L3.96966 11.2526C3.5531 11.2805 3.15451 11.4328 2.82545 11.6898C2.49639 11.9467 2.252 12.2965 2.1239 12.6938C1.99234 13.0973 1.98466 13.5309 2.10183 13.9387C2.219 14.3466 2.45566 14.71 2.78129 14.9821L8.52085 19.8367L6.81415 26.5497C6.69607 27.0038 6.71732 27.483 6.87514 27.9248C7.03296 28.3667 7.32005 28.751 7.6991 29.0275C8.06703 29.2916 8.50538 29.4399 8.95806 29.4534C9.41074 29.4669 9.85716 29.345 10.2402 29.1034L16.1694 25.3487H16.1947L22.579 29.3815C22.9065 29.5943 23.2883 29.7084 23.6788 29.7102C23.9977 29.7077 24.3118 29.6321 24.5969 29.4893C24.882 29.3464 25.1306 29.14 25.3235 28.8861C25.5164 28.6321 25.6485 28.3373 25.7097 28.0244C25.7708 27.7114 25.7594 27.3885 25.6763 27.0806L23.8685 19.7355L29.5827 14.9821C29.9084 14.71 30.145 14.3466 30.2622 13.9387C30.3794 13.5309 30.3717 13.0973 30.2401 12.6938Z" fill="#FFC20E"/>
                                        <path d="M71.851 12.6938C71.7244 12.2956 71.4805 11.9449 71.1511 11.6877C70.8217 11.4305 70.4223 11.2788 70.0053 11.2526L62.4958 10.7343L59.7145 3.71786C59.5626 3.33152 59.2983 2.99967 58.9557 2.76525C58.6131 2.53084 58.208 2.40467 57.7929 2.40308C57.3778 2.40467 56.9727 2.53084 56.6301 2.76525C56.2875 2.99967 56.0232 3.33152 55.8713 3.71786L53.0394 10.7722L45.5805 11.2526C45.164 11.2805 44.7654 11.4328 44.4363 11.6898C44.1073 11.9467 43.8629 12.2965 43.7348 12.6938C43.6032 13.0973 43.5955 13.5309 43.7127 13.9387C43.8299 14.3466 44.0665 14.71 44.3922 14.9821L50.1317 19.8367L48.425 26.5497C48.307 27.0038 48.3282 27.483 48.486 27.9248C48.6438 28.3667 48.9309 28.751 49.31 29.0275C49.6779 29.2916 50.1163 29.4399 50.5689 29.4534C51.0216 29.4669 51.468 29.345 51.8511 29.1034L57.7803 25.3487H57.8055L64.1899 29.3815C64.5173 29.5943 64.8992 29.7084 65.2897 29.7102C65.6086 29.7077 65.9227 29.6321 66.2078 29.4893C66.4929 29.3464 66.7415 29.14 66.9344 28.8861C67.1273 28.6321 67.2594 28.3373 67.3206 28.0244C67.3817 27.7114 67.3703 27.3885 67.2872 27.0806L65.4794 19.7355L71.1936 14.9821C71.5193 14.71 71.7559 14.3466 71.8731 13.9387C71.9903 13.5309 71.9826 13.0973 71.851 12.6938Z" fill="#FFC20E"/>
                                        <path d="M113.462 12.6938C113.335 12.2956 113.091 11.9449 112.762 11.6877C112.433 11.4305 112.033 11.2788 111.616 11.2526L104.107 10.7343L101.325 3.71786C101.174 3.33152 100.909 2.99967 100.567 2.76525C100.224 2.53084 99.8189 2.40467 99.4038 2.40308C98.9887 2.40467 98.5836 2.53084 98.241 2.76525C97.8984 2.99967 97.634 3.33152 97.4822 3.71786L94.6503 10.7722L87.1914 11.2526C86.7749 11.2805 86.3763 11.4328 86.0472 11.6898C85.7182 11.9467 85.4738 12.2965 85.3457 12.6938C85.2141 13.0973 85.2064 13.5309 85.3236 13.9387C85.4408 14.3466 85.6774 14.71 86.003 14.9821L91.7426 19.8367L90.0359 26.5497C89.9178 27.0038 89.9391 27.483 90.0969 27.9248C90.2547 28.3667 90.5418 28.751 90.9209 29.0275C91.2888 29.2916 91.7271 29.4399 92.1798 29.4534C92.6325 29.4669 93.0789 29.345 93.4619 29.1034L99.3911 25.3487H99.4164L105.801 29.3815C106.128 29.5943 106.51 29.7084 106.901 29.7102C107.219 29.7077 107.534 29.6321 107.819 29.4893C108.104 29.3464 108.352 29.14 108.545 28.8861C108.738 28.6321 108.87 28.3373 108.931 28.0244C108.993 27.7114 108.981 27.3885 108.898 27.0806L107.09 19.7355L112.804 14.9821C113.13 14.71 113.367 14.3466 113.484 13.9387C113.601 13.5309 113.593 13.0973 113.462 12.6938Z" fill="#FFC20E"/>
                                        <path d="M155.073 12.6938C154.946 12.2956 154.702 11.9449 154.373 11.6877C154.043 11.4305 153.644 11.2788 153.227 11.2526L145.718 10.7343L142.936 3.71786C142.784 3.33152 142.52 2.99967 142.177 2.76525C141.835 2.53084 141.43 2.40467 141.015 2.40308C140.6 2.40467 140.194 2.53084 139.852 2.76525C139.509 2.99967 139.245 3.33152 139.093 3.71786L136.261 10.7722L128.802 11.2526C128.386 11.2805 127.987 11.4328 127.658 11.6898C127.329 11.9467 127.085 12.2965 126.957 12.6938C126.825 13.0973 126.817 13.5309 126.934 13.9387C127.052 14.3466 127.288 14.71 127.614 14.9821L133.353 19.8367L131.647 26.5497C131.529 27.0038 131.55 27.483 131.708 27.9248C131.866 28.3667 132.153 28.751 132.532 29.0275C132.9 29.2916 133.338 29.4399 133.791 29.4534C134.243 29.4669 134.69 29.345 135.073 29.1034L141.002 25.3487H141.027L147.412 29.3815C147.739 29.5943 148.121 29.7084 148.511 29.7102C148.83 29.7077 149.144 29.6321 149.43 29.4893C149.715 29.3464 149.963 29.14 150.156 28.8861C150.349 28.6321 150.481 28.3373 150.542 28.0244C150.603 27.7114 150.592 27.3885 150.509 27.0806L148.701 19.7355L154.415 14.9821C154.741 14.71 154.978 14.3466 155.095 13.9387C155.212 13.5309 155.204 13.0973 155.073 12.6938Z" fill="#FFC20E"/>
                                        <path d="M196.684 12.6938C196.557 12.2956 196.313 11.9449 195.984 11.6877C195.654 11.4305 195.255 11.2788 194.838 11.2526L187.328 10.7343L184.547 3.71786C184.395 3.33152 184.131 2.99967 183.788 2.76525C183.446 2.53084 183.041 2.40467 182.625 2.40308C182.21 2.40467 181.805 2.53084 181.463 2.76525C181.12 2.99967 180.856 3.33152 180.704 3.71786L177.872 10.7722L170.413 11.2526C169.997 11.2805 169.598 11.4328 169.269 11.6898C168.94 11.9467 168.695 12.2965 168.567 12.6938C168.436 13.0973 168.428 13.5309 168.545 13.9387C168.662 14.3466 168.899 14.71 169.225 14.9821L174.964 19.8367L173.258 26.5497C173.14 27.0038 173.161 27.483 173.319 27.9248C173.476 28.3667 173.764 28.751 174.143 29.0275C174.511 29.2916 174.949 29.4399 175.402 29.4534C175.854 29.4669 176.301 29.345 176.684 29.1034L182.613 25.3487H182.638L189.022 29.3815C189.35 29.5943 189.732 29.7084 190.122 29.7102C190.441 29.7077 190.755 29.6321 191.04 29.4893C191.326 29.3464 191.574 29.14 191.767 28.8861C191.96 28.6321 192.092 28.3373 192.153 28.0244C192.214 27.7114 192.203 27.3885 192.12 27.0806L190.312 19.7355L196.026 14.9821C196.352 14.71 196.589 14.3466 196.706 13.9387C196.823 13.5309 196.815 13.0973 196.684 12.6938Z" fill="#FFC20E"/>
                                    </svg>
                                    <div class="flex flex-col gap-4">
                                        <p class="text-center md:text-left mb-0 text-lg lg:text-heading-sm font-medium">
                                            <?php if ( $feedbackItemTitle = get_sub_field( 'feedback-item-title', 'options' ) ) : ?>
                                                “<?php echo $feedbackItemTitle; ?>”
                                            <?php endif; ?>
                                        </p>
                                        <?php if ( $feedbackItemDes = get_sub_field( 'feedback-item-des', 'options' ) ) : ?>
                                            <p class="text-center md:text-left mb-0 text-sm lg:text-base">
                                                <?php echo $feedbackItemDes; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-col gap-4">
                                        <p class="text-sm lg:text-base text-center md:text-left mb-0 font-medium">
                                            <?php if ( $feedbackItemUserDesName = get_sub_field( 'feedback-item-user-des-name', 'options' ) ) : ?>
                                                <?php echo esc_html( $feedbackItemUserDesName ); ?>
                                            <?php endif; ?>
                                        </p>
                                        <p class="text-sm lg:text-base text-center md:text-left mb-0 text-secondary">
                                        <?php if ( $feedbackItemUserDes = get_sub_field( 'feedback-item-user-des', 'options' ) ) : ?>
                                            <?php echo esc_html( $feedbackItemUserDes ); ?>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                        <?php endwhile; ?>
                        </div>
                        <div class="cust-nav cust-nav-tall">
                            <button type="button" class="cust-nav-item cust-nav-prev" title="Trước">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_112_2725)">
                                    <path d="M20 27.06C19.8721 27.06 19.7482 27.0144 19.6469 26.9131L10.9536 18.2198C9.73549 17.0017 9.73549 14.9983 10.9536 13.7802L19.6469 5.08691C19.8383 4.89551 20.1617 4.89551 20.3531 5.08691C20.5445 5.27832 20.5445 5.60174 20.3531 5.79314L11.6598 14.4865C10.8245 15.3217 10.8245 16.6783 11.6598 17.5136L20.3531 26.2069C20.5426 26.3964 20.5445 26.7152 20.3589 26.9072C20.2427 27.0129 20.1111 27.06 20 27.06Z"  stroke="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_112_2725">
                                    <rect width="32" height="32" rx="16" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <button type="button" class="cust-nav-item cust-nav-next" title="Sau">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_112_2727)">
                                    <path d="M12 27.06C12.1279 27.06 12.2518 27.0144 12.3531 26.9131L21.0465 18.2198C22.2645 17.0017 22.2645 14.9983 21.0465 13.7802L12.3531 5.08691C12.1617 4.89551 11.8383 4.89551 11.6469 5.08691C11.4555 5.27832 11.4555 5.60174 11.6469 5.79314L20.3402 14.4865C21.1755 15.3217 21.1755 16.6783 20.3402 17.5136L11.6469 26.2069C11.4574 26.3964 11.4555 26.7152 11.6411 26.9072C11.7573 27.0129 11.8889 27.06 12 27.06Z"  stroke="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_112_2727">
                                    <rect width="32" height="32" rx="16" transform="matrix(-1 0 0 1 32 0)" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>                        
                    <?php endif; ?>
                </div>
            </div>
        </section>		
        <?php endwhile; ?>
    <?php endif; ?>    

    <?php if ( have_rows( 'news-group', 'options' ) ) : ?>
        <?php while ( have_rows( 'news-group', 'options' ) ) :
            the_row(); ?>
            <section class="bg-gray py-4 md:py-6">
                <div class="container pb-6">
                    <div class="rounded-lg flex flex-col gap-6 p-6 bg-white">
                        <div class="section-heading flex flex-col items-center pb-0 gap-6">
                            <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                            <?php if ( $newsGroupTitle = get_sub_field( 'news-group-title', 'options' ) ) : ?><?php echo esc_html( $newsGroupTitle ); ?><?php endif; ?>
                            </h2>
                            <div class="line w-full"></div>
                        </div>
                        <?php
                        $newsGroupCatSlug = get_sub_field( 'news-group-cat', 'options' ); ?>
                        <?php if ( $newsGroupCatSlug ) : ?>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=post&cat='. $newsGroupCatSlug); ?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-4x3 overflow-hidden rounded">
                                            <?php owlGetThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>
                                        </a>
                                        <h3 class="block p-4 w-full mb-0 font-normal text-sm">
                                            <a href="<?php the_permalink(); ?>" class="text-center text-truncate-2 text-sm text-title hover:text-link w-full block">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                                
                            </div>                            
                            <div class="flex justify-center">
                                <?php 
                                    $idObj = get_category_by_slug($newsGroupCatSlug);
                                    $id = $idObj->term_id;
                                ?>
                                <a href="<?php echo get_category_link($id)?>" class="section-more-link underline-element flex gap-2 items-center justify-center py-2 text-sm text-title hover:text-title">
                                    <span>Xem thêm tin tức</span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>                        
        
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>



<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>