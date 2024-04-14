<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<section class="main-product py-4 md:py-6">
		<div class="main-product-grid block lg:grid">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>

			<div class="product-main-content">
				<div class="flex flex-col gap-4 product-main-content-inner">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					//do_action( 'woocommerce_single_product_summary' );
					?>
					<div class="flex flex-col gap-4">
						<div class="flex flex-col items-start gap-3">
							<?php
							// Get the product's assigned category
							$brands = get_the_terms( get_the_ID(), 'thuong-hieu' ); // Adjust the taxonomy name if needed

							if ( ! empty( $brands ) ) {
								$brand = array_shift( $brands );
								$brandImage = get_field( 'brand-image', $brand );
								if ( $brandImage ) {
									echo '<a href="' . esc_url( get_term_link( $brand ) ) . '" class="inline-flex">';
									echo '<img loading="lazy" src="' . esc_url( $brandImage ) . '" alt="' . $brand->name . '" class="product-detail-brand-image">';
									echo '</a>';
								}
								
							}
							?>
							<h1 class="product-title text-lg md:text-heading-sm font-medium"><?php echo $product->name; ?></h1>
						</div>
						<?php
							if ( wc_review_ratings_enabled() ) :
							//$rating_count = $product->get_rating_count();
							$review_count = $product->get_review_count();
							$average      = $product->get_average_rating();
							$averageCeiled = ceil($average);
						?>
						<div class="flex items-center gap-3">
							<svg class="rating-svg" data-count="<?php echo $averageCeiled; ?>" width="79" height="14" viewBox="0 0 79 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.0808 5.32656C13.0261 5.15429 12.9205 5.00258 12.778 4.89133C12.6356 4.78007 12.4628 4.71447 12.2824 4.70313L9.03394 4.47891L7.83081 1.44375C7.76512 1.27663 7.65077 1.13307 7.50256 1.03167C7.35436 0.93027 7.17913 0.875691 6.99956 0.875V0.875C6.81999 0.875691 6.64476 0.93027 6.49656 1.03167C6.34836 1.13307 6.23401 1.27663 6.16831 1.44375L4.94331 4.49531L1.71675 4.70313C1.53656 4.71521 1.36414 4.78108 1.22179 4.89223C1.07945 5.00338 0.973728 5.15468 0.918312 5.32656C0.861404 5.50108 0.85808 5.68865 0.908766 5.86508C0.959452 6.0415 1.06183 6.1987 1.20269 6.31641L3.6855 8.41641L2.94722 11.3203C2.89614 11.5168 2.90533 11.724 2.9736 11.9152C3.04187 12.1063 3.16606 12.2725 3.33003 12.3922C3.48919 12.5064 3.67881 12.5706 3.87463 12.5764C4.07045 12.5823 4.26356 12.5295 4.42925 12.425L6.99409 10.8008H7.00503L9.76675 12.5453C9.90842 12.6374 10.0736 12.6867 10.2425 12.6875C10.3805 12.6864 10.5163 12.6537 10.6397 12.5919C10.763 12.5301 10.8705 12.4409 10.954 12.331C11.0374 12.2211 11.0946 12.0936 11.121 11.9582C11.1475 11.8228 11.1426 11.6832 11.1066 11.55L10.3246 8.37266L12.7964 6.31641C12.9373 6.1987 13.0397 6.0415 13.0904 5.86508C13.141 5.68865 13.1377 5.50108 13.0808 5.32656Z" fill="#D9D9D9"/>
								<path d="M29.2859 5.32656C29.2311 5.15429 29.1256 5.00258 28.9831 4.89133C28.8406 4.78007 28.6679 4.71447 28.4875 4.70313L25.239 4.47891L24.0359 1.44375C23.9702 1.27663 23.8558 1.13307 23.7076 1.03167C23.5594 0.93027 23.3842 0.875691 23.2046 0.875V0.875C23.0251 0.875691 22.8498 0.93027 22.7016 1.03167C22.5534 1.13307 22.4391 1.27663 22.3734 1.44375L21.1484 4.49531L17.9218 4.70313C17.7416 4.71521 17.5692 4.78108 17.4269 4.89223C17.2845 5.00338 17.1788 5.15468 17.1234 5.32656C17.0665 5.50108 17.0632 5.68865 17.1138 5.86508C17.1645 6.0415 17.2669 6.1987 17.4078 6.31641L19.8906 8.41641L19.1523 11.3203C19.1012 11.5168 19.1104 11.724 19.1787 11.9152C19.2469 12.1063 19.3711 12.2725 19.5351 12.3922C19.6943 12.5064 19.8839 12.5706 20.0797 12.5764C20.2755 12.5823 20.4686 12.5295 20.6343 12.425L23.1992 10.8008H23.2101L25.9718 12.5453C26.1135 12.6374 26.2787 12.6867 26.4476 12.6875C26.5856 12.6864 26.7214 12.6537 26.8448 12.5919C26.9681 12.5301 27.0756 12.4409 27.1591 12.331C27.2425 12.2211 27.2997 12.0936 27.3261 11.9582C27.3526 11.8228 27.3476 11.6832 27.3117 11.55L26.5296 8.37266L29.0015 6.31641C29.1424 6.1987 29.2448 6.0415 29.2954 5.86508C29.3461 5.68865 29.3428 5.50108 29.2859 5.32656Z" fill="#D9D9D9"/>
								<path d="M45.489 5.32656C45.4343 5.15429 45.3287 5.00258 45.1862 4.89133C45.0438 4.78007 44.871 4.71447 44.6906 4.70313L41.4421 4.47891L40.239 1.44375C40.1733 1.27663 40.059 1.13307 39.9108 1.03167C39.7626 0.93027 39.5873 0.875691 39.4078 0.875V0.875C39.2282 0.875691 39.053 0.93027 38.9048 1.03167C38.7566 1.13307 38.6422 1.27663 38.5765 1.44375L37.3515 4.49531L34.125 4.70313C33.9448 4.71521 33.7723 4.78108 33.63 4.89223C33.4876 5.00338 33.3819 5.15468 33.3265 5.32656C33.2696 5.50108 33.2663 5.68865 33.317 5.86508C33.3677 6.0415 33.47 6.1987 33.6109 6.31641L36.0937 8.41641L35.3554 11.3203C35.3043 11.5168 35.3135 11.724 35.3818 11.9152C35.4501 12.1063 35.5743 12.2725 35.7382 12.3922C35.8974 12.5064 36.087 12.5706 36.2828 12.5764C36.4787 12.5823 36.6718 12.5295 36.8375 12.425L39.4023 10.8008H39.4132L42.175 12.5453C42.3166 12.6374 42.4818 12.6867 42.6507 12.6875C42.7887 12.6864 42.9245 12.6537 43.0479 12.5919C43.1712 12.5301 43.2787 12.4409 43.3622 12.331C43.4456 12.2211 43.5028 12.0936 43.5292 11.9582C43.5557 11.8228 43.5508 11.6832 43.5148 11.55L42.7328 8.37266L45.2046 6.31641C45.3455 6.1987 45.4479 6.0415 45.4986 5.86508C45.5492 5.68865 45.5459 5.50108 45.489 5.32656Z" fill="#D9D9D9"/>
								<path d="M61.6941 5.32656C61.6393 5.15429 61.5338 5.00258 61.3913 4.89133C61.2488 4.78007 61.0761 4.71447 60.8957 4.70313L57.6472 4.47891L56.4441 1.44375C56.3784 1.27663 56.264 1.13307 56.1158 1.03167C55.9676 0.93027 55.7924 0.875691 55.6128 0.875V0.875C55.4333 0.875691 55.258 0.93027 55.1098 1.03167C54.9616 1.13307 54.8473 1.27663 54.7816 1.44375L53.5566 4.49531L50.33 4.70313C50.1498 4.71521 49.9774 4.78108 49.8351 4.89223C49.6927 5.00338 49.587 5.15468 49.5316 5.32656C49.4747 5.50108 49.4714 5.68865 49.522 5.86508C49.5727 6.0415 49.6751 6.1987 49.816 6.31641L52.2988 8.41641L51.5605 11.3203C51.5094 11.5168 51.5186 11.724 51.5869 11.9152C51.6552 12.1063 51.7793 12.2725 51.9433 12.3922C52.1025 12.5064 52.2921 12.5706 52.4879 12.5764C52.6837 12.5823 52.8768 12.5295 53.0425 12.425L55.6074 10.8008H55.6183L58.38 12.5453C58.5217 12.6374 58.6869 12.6867 58.8558 12.6875C58.9938 12.6864 59.1296 12.6537 59.253 12.5919C59.3763 12.5301 59.4838 12.4409 59.5673 12.331C59.6507 12.2211 59.7079 12.0936 59.7343 11.9582C59.7608 11.8228 59.7558 11.6832 59.7199 11.55L58.9378 8.37266L61.4097 6.31641C61.5506 6.1987 61.653 6.0415 61.7036 5.86508C61.7543 5.68865 61.751 5.50108 61.6941 5.32656Z" fill="#D9D9D9"/>
								<path d="M77.8972 5.32656C77.8425 5.15429 77.7369 5.00258 77.5944 4.89133C77.452 4.78007 77.2792 4.71447 77.0988 4.70313L73.8503 4.47891L72.6472 1.44375C72.5815 1.27663 72.4672 1.13307 72.319 1.03167C72.1708 0.93027 71.9955 0.875691 71.816 0.875V0.875C71.6364 0.875691 71.4612 0.93027 71.313 1.03167C71.1648 1.13307 71.0504 1.27663 70.9847 1.44375L69.7597 4.49531L66.5332 4.70313C66.353 4.71521 66.1805 4.78108 66.0382 4.89223C65.8959 5.00338 65.7901 5.15468 65.7347 5.32656C65.6778 5.50108 65.6745 5.68865 65.7252 5.86508C65.7759 6.0415 65.8782 6.1987 66.0191 6.31641L68.5019 8.41641L67.7636 11.3203C67.7125 11.5168 67.7217 11.724 67.79 11.9152C67.8583 12.1063 67.9825 12.2725 68.1464 12.3922C68.3056 12.5064 68.4952 12.5706 68.691 12.5764C68.8869 12.5823 69.08 12.5295 69.2457 12.425L71.8105 10.8008H71.8214L74.5832 12.5453C74.7248 12.6374 74.89 12.6867 75.0589 12.6875C75.1969 12.6864 75.3327 12.6537 75.4561 12.5919C75.5794 12.5301 75.6869 12.4409 75.7704 12.331C75.8538 12.2211 75.911 12.0936 75.9374 11.9582C75.9639 11.8228 75.959 11.6832 75.923 11.55L75.141 8.37266L77.6128 6.31641C77.7537 6.1987 77.8561 6.0415 77.9068 5.86508C77.9575 5.68865 77.9541 5.50108 77.8972 5.32656Z" fill="#D9D9D9"/>
							</svg>
							<a href="#reviews-outer" class="product-detail-review-link text-sm text-title hover:text-link" rel="nofollow"><?php echo $review_count; ?> đánh giá</a>
						</div>
						<?php endif; ?>
						<div class="flex items-center gap-2 flex-wrap">
						<?php if($product->sale_price) { ?>
							<div class="text-center text-white text-sm md:text-base rounded px-2 py-1 label-sale">
								<?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
									echo sprintf( __('%s', 'woocommerce' ),'-'. $percentage . '%' ); ?>
							</div>
							<?php } ?>
							<?php
								$owlNewLabelTime = intval(get_field( 'owl-new-label-time', 'options' ));
								$newness_days = $owlNewLabelTime; // Number of days the badge is shown
								$created = strtotime($product->get_date_created());
								if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
									echo '<div class="text-center text-white text-sm md:text-base rounded px-2 py-1 label-new">' . esc_html__('Mới', 'woocommerce') . '</div>';
								}
							?>       
							<?php 
							if (!$product->is_in_stock()) {
								echo '<div class="text-center text-white text-sm md:text-base rounded px-2 py-1 label-sold-out">Hết hàng</div>';
							}else{
								echo '<div class="text-center text-title text-sm md:text-base rounded px-2 py-1 label-available">Sẵn hàng</div>';
							}
							?>
						</div>
						<div class="product-grid-item-prices flex flex-col md:flex-row items-start:items-center gap-1 md:gap-4 pt-2 md:pt-0">
							<?php echo $product->get_price_html(); ?>
						</div>
					</div>
					<?php echo woocommerce_template_single_add_to_cart();?>
					<div>
						<p class="mb-3 font-medium">
							Để lại thông tin để được tư vấn
						</p>
						<div class="support-form-grid w-full">
							<?php echo do_shortcode('[wpforms id="665"]')?>
						</div>
					</div>									
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/brand','30-years', $args = null); ?>     
	<section class="py-4 md:py-6">
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
		?>

		<div class="product-content-grid grid gap-6 items-start">
			<div class="product-content-left flex-1 rounded-lg px-6 pt-3 pb-6">
				<div class="tab-heading-outer bg-white relative w-full flex justify-center">
					<div class="tab-heading overflow-auto w-full block relative z-10 text-center whitespace-nowrap">
						<div class="tab-heading-item inline-block active" data-target="#product-content-tab-des">
							<span class="tab-heading-item-title cursor-pointer block whitespace-nowrap py-3 font-medium text-center text-sm sm:text-base md:text-lg lg:text-heading-sm">
								Mô tả sản phẩm
							</span>
						</div>
						<div class="tab-heading-item inline-block" data-target="#product-content-tab-guarantee">
							<span class="tab-heading-item-title cursor-pointer block whitespace-nowrap py-3 font-medium text-center text-sm sm:text-base md:text-lg lg:text-heading-sm">
								Chế độ bảo hành
							</span>
						</div>
					</div>
				</div>
				<div class="tab-content py-6">
					<div class="tab-content-item active" id="product-content-tab-des">
						<div class="flex flex-col gap-8">
							<?php if ( have_rows( 'review-video-list' ) ) : ?>
							<div class="product-video-reviews flex flex-col gap-6">
								<div class="flex item-centers justify-between gap-6">
									<div class="text-base font-bold md:text-lg md:font-medium">Video review sản phẩm</div>
									<div class="flex items-center gap-3">
										<span>
											<span class="product-video-current">...</span>/<span class="product-video-total">...</span>
										</span>
										<div class="flex items-center gap-1">
											<button type="button" class="product-video-nav product-video-prev border-0 cursor-pointer bg-white" title="Video trước">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15 19.5L7.5 12L15 4.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</button>
											<button type="button" class="product-video-nav product-video-next border-0 cursor-pointer bg-white" title="Video sau">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9 19.5L16.5 12L9 4.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</button>
										</div>
									</div>
								</div>
								<div class="product-video-review-items">
									<div class="product-video-review-items-slider">
									<?php while ( have_rows( 'review-video-list' ) ) :
									the_row(); ?>
										<div class="product-video-review-item">
										<?php $reviewVideoUrl = get_sub_field( 'review-video-url' ); ?>
											<div class="video-youtube" data-url="<?php echo esc_url( $reviewVideoUrl ); ?>">
												<div class="youtube-thumb cursor-pointer">
													<div class="ratio-thumb ratio-16x9 rounded-lg overflow-hidden">
														<img loading="lazy" src="" alt="" class="ratio-media z-10">
														<svg class="z-20 absolute" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M4.34873 19.2609C4.59776 15.427 7.68015 12.4224 11.5174 12.2323C17.074 11.957 25.016 11.625 31 11.625C36.984 11.625 44.926 11.957 50.4826 12.2323C54.3199 12.4224 57.4022 15.427 57.6513 19.2609C57.8899 22.934 58.125 27.4537 58.125 31C58.125 34.5463 57.8899 39.066 57.6513 42.7391C57.4022 46.573 54.3199 49.5776 50.4826 49.7677C44.926 50.043 36.984 50.375 31 50.375C25.016 50.375 17.074 50.043 11.5174 49.7677C7.68015 49.5776 4.59776 46.573 4.34873 42.7391C4.11014 39.066 3.875 34.5463 3.875 31C3.875 27.4537 4.11014 22.934 4.34873 19.2609Z" fill="#FC0D1B"/>
															<path d="M25.1875 23.25V38.75L40.6875 31L25.1875 23.25Z" fill="white"/>
														</svg>                                                                        
													</div>
												</div>
											</div>
										</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="product-content-des flex flex-col gap-6">
								<h1 class="text-base font-bold md:text-lg md:font-medium">Thông tin sản phẩm</h1>
								<div class="read-more-area relative block w-full overflow-hidden" data-max-height="680" style="max-height: 680px;">
									<div class="read-more-area-content product-content-des-detail relative z-10 text-editor-content-detail">
										<?php the_content(); ?>
									</div>
									<div class="read-more-area-actions text-center absolute z-20 w-full" style="display: none;">
										<button type="button" class="read-more-area-btn inline-flex items-center justify-center py-1 gap-2 bg-white cursor-pointer border-0">
											<span class="text-sm text-link">
												<span class="read-more-area-more">Xem thêm</span>
												<span class="read-more-area-less">Thu gọn</span>
											</span>
											<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20 9L12.5 16.5L5 9" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content-item" id="product-content-tab-guarantee">
						<?php if ( $guaranteeInfo = get_field( 'guarantee-info', 'options' ) ) : ?>
							<?php echo $guaranteeInfo; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="product-content-right rounded-lg p-6 sticky">
				<div class="flex flex-col gap-4">
					<div class="text-lg md:text-heading-sm font-bold md:font-medium">
						Thông tin chi tiết
					</div>
					<ul class="parameter-items list-unstyled mb-0">
						<?php
							// Get the product's assigned category
							$brands = get_the_terms( get_the_ID(), 'thuong-hieu' ); // Adjust the taxonomy name if needed

							if ( ! empty( $brands ) ) :
							$brand = array_shift( $brands );
						?>
							<li>
								<div class="parameter-item flex items-center gap-4 py-3">
									<span class="text-secondary parameter-title">Thương hiệu</span>
									<span class="text-title parameter-value flex-1 break-all"><?php echo $brand->name; ?></span>
								</div>
							</li>
						<?php endif; ?>

						<li>
							<div class="parameter-item flex items-center gap-4 py-3">
								<span class="text-secondary parameter-title">Mã sản phẩm</span>
								<span class="text-title parameter-value flex-1 break-all"><?php echo $product->get_sku(); ?></span>
							</div>
						</li>
						<?php
						if ( $product && is_a( $product, 'WC_Product' ) ) {
							$attributes = $product->get_attributes();
							
							if ( ! empty( $attributes ) ) {
								echo '<li>';
								
								foreach ( $attributes as $attribute ) {
									if ( $attribute->get_variation() ) {
										continue;
									}
									
									$attribute_name = $attribute->get_name();
									$attribute_label = wc_attribute_label( $attribute_name );
									$attribute_value = $product->get_attribute( $attribute_name );
									
									if ( $attribute_value ) {
										echo '<div class="parameter-item flex items-center gap-4 py-3">';
										echo '<span class="text-secondary parameter-title">' . esc_html( $attribute_label ) . ': </span>';
										echo '<span class="text-title parameter-value flex-1 break-all">' . wp_kses_post( $attribute_value ) . '</span>';
										echo '</div>';
									}
								}
								
								echo '</li>';
							}
						}
						?>
						<?php if ( $beDayMatSo = get_field( 'be-day-mat-so' ) ) : ?>
							<li>
								<div class="parameter-item flex items-center gap-4 py-3">
									<span class="text-secondary parameter-title">Bề dày mặt số</span>
									<span class="text-title parameter-value flex-1 break-all">
										<?php echo esc_html( $beDayMatSo ); ?>
									</span>
								</div>
							</li>							
						<?php endif; ?>
						<?php if ( $baoHanhQuocTe = get_field( 'bao-hanh-quoc-te' ) ) : ?>
						<li>
							<div class="parameter-item flex items-center gap-4 py-3">
								<span class="text-secondary parameter-title">Bảo hành quốc tế</span>
								<span class="text-title parameter-value flex-1 break-all">
									<?php echo esc_html( $baoHanhQuocTe ); ?>
								</span>
							</div>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</section> 
	<section class="py-4 md:py-6" id="reviews-outer">
		<div class="flex flex-col gap-6">
			<div class="section-heading flex flex-col items-center pb-0 gap-6">
				<h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
					Đánh giá - Bình luận
				</h2>
				<div class="line w-full"></div>
			</div>
			<?php if(comments_open()) : ?>
				<?php comments_template();?>
			<?php endif; ?>

			
		</div>
	</section>       

	<?php
	global $product, $woocommerce_loop;

	if ( empty( $product ) || ! $product->exists() ) {
		return;
	}

	$related = $product->get_related( $posts_per_page );

	if ( sizeof( $related ) === 0 ) return;

	$args = apply_filters( 'woocommerce_related_products_args', array(
		'post_type'            => 'product',
		'ignore_sticky_posts'  => 1,
		'no_found_rows'        => 1,
		'posts_per_page'       => 4,
		'orderby'              => $orderby,
		'post__in'             => $related,
		'post__not_in'         => array( $product->id )
	) );

	$products = new WP_Query( $args );

	$woocommerce_loop['columns'] = $columns;

	if ( $products->have_posts() ) : ?>

	<section class="py-4 md:py-6 related-products">
		<div class="flex flex-col gap-6">
			<div class="section-heading flex flex-col items-center pb-0 gap-6">
				<h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
					Sản phẩm liên quan
				</h2>
				<div class="line w-full"></div>
			</div>
			<div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				<?php global $product ?>
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

				<?php endwhile; // end of the loop. ?>

			</div>
		</div>
	</section> 

	<?php endif;

	wp_reset_postdata();
	?>		
	
	<section class="py-4 md:py-6 recent-viewed-products">
		<div class="flex flex-col gap-6">
			<div class="section-heading flex flex-col items-center pb-0 gap-6">
				<h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
					Sản phẩm đã xem
				</h2>
				<div class="line w-full"></div>
			</div>
			<?php if(isset($_SESSION["viewed"]) && $_SESSION["viewed"]) :
				$data = $_SESSION["viewed"];
				$args = array(
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 4,
					'post__in'	=> $data
				);
			?>
				<div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php $getposts = new WP_query( $args);?>
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
								$viewed_review_count = $product->get_review_count();
								$viewed_average      = $product->get_average_rating();
								$viewed_averageCeiled = ceil($viewed_average);
								if($viewed_averageCeiled > 0):
							?>
							<svg class="rating-svg" data-count="<?php echo $viewed_averageCeiled; ?>" width="87" height="15" viewBox="0 0 87 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.3313 5.38906C13.2765 5.21679 13.171 5.06508 13.0285 4.95382C12.886 4.84257 12.7132 4.77697 12.5328 4.76562L9.28438 4.54141L8.08125 1.50625C8.01556 1.33913 7.90121 1.19557 7.75301 1.09417C7.6048 0.99277 7.42958 0.938191 7.25 0.9375C7.07043 0.938191 6.89521 0.99277 6.747 1.09417C6.5988 1.19557 6.48445 1.33913 6.41876 1.50625L5.19375 4.55781L1.96719 4.76562C1.787 4.77771 1.61458 4.84358 1.47223 4.95473C1.32989 5.06588 1.22417 5.21718 1.16875 5.38906C1.11185 5.56358 1.10852 5.75115 1.15921 5.92758C1.20989 6.104 1.31227 6.2612 1.45313 6.37891L3.93594 8.47891L3.19766 11.3828C3.14658 11.5793 3.15577 11.7865 3.22404 11.9777C3.29231 12.1688 3.4165 12.335 3.58047 12.4547C3.73963 12.5689 3.92925 12.6331 4.12507 12.6389C4.32089 12.6448 4.514 12.592 4.67969 12.4875L7.24454 10.8633H7.25547L10.0172 12.6078C10.1589 12.6999 10.324 12.7492 10.493 12.75C10.6309 12.7489 10.7668 12.7162 10.8901 12.6544C11.0135 12.5926 11.121 12.5034 11.2044 12.3935C11.2879 12.2836 11.345 12.1561 11.3715 12.0207C11.3979 11.8853 11.393 11.7457 11.357 11.6125L10.575 8.43516L13.0469 6.37891C13.1877 6.2612 13.2901 6.104 13.3408 5.92758C13.3915 5.75115 13.3882 5.56358 13.3313 5.38906Z" fill="#D9D9D9"/>
								<path d="M31.3313 5.38906C31.2765 5.21679 31.171 5.06508 31.0285 4.95382C30.886 4.84257 30.7132 4.77697 30.5328 4.76562L27.2844 4.54141L26.0813 1.50625C26.0156 1.33913 25.9012 1.19557 25.753 1.09417C25.6048 0.99277 25.4296 0.938191 25.25 0.9375C25.0704 0.938191 24.8952 0.99277 24.747 1.09417C24.5988 1.19557 24.4845 1.33913 24.4188 1.50625L23.1938 4.55781L19.9672 4.76562C19.787 4.77771 19.6146 4.84358 19.4722 4.95473C19.3299 5.06588 19.2242 5.21718 19.1688 5.38906C19.1118 5.56358 19.1085 5.75115 19.1592 5.92758C19.2099 6.104 19.3123 6.2612 19.4531 6.37891L21.9359 8.47891L21.1977 11.3828C21.1466 11.5793 21.1558 11.7865 21.224 11.9777C21.2923 12.1688 21.4165 12.335 21.5805 12.4547C21.7396 12.5689 21.9293 12.6331 22.1251 12.6389C22.3209 12.6448 22.514 12.592 22.6797 12.4875L25.2445 10.8633H25.2555L28.0172 12.6078C28.1589 12.6999 28.324 12.7492 28.493 12.75C28.6309 12.7489 28.7668 12.7162 28.8901 12.6544C29.0135 12.5926 29.121 12.5034 29.2044 12.3935C29.2879 12.2836 29.345 12.1561 29.3715 12.0207C29.3979 11.8853 29.393 11.7457 29.357 11.6125L28.575 8.43516L31.0469 6.37891C31.1877 6.2612 31.2901 6.104 31.3408 5.92758C31.3915 5.75115 31.3882 5.56358 31.3313 5.38906Z" fill="#D9D9D9"/>
								<path d="M49.3312 5.38906C49.2765 5.21679 49.171 5.06508 49.0285 4.95382C48.886 4.84257 48.7132 4.77697 48.5328 4.76562L45.2844 4.54141L44.0812 1.50625C44.0156 1.33913 43.9012 1.19557 43.753 1.09417C43.6048 0.99277 43.4296 0.938191 43.25 0.9375C43.0704 0.938191 42.8952 0.99277 42.747 1.09417C42.5988 1.19557 42.4844 1.33913 42.4187 1.50625L41.1937 4.55781L37.9672 4.76562C37.787 4.77771 37.6146 4.84358 37.4722 4.95473C37.3299 5.06588 37.2242 5.21718 37.1687 5.38906C37.1118 5.56358 37.1085 5.75115 37.1592 5.92758C37.2099 6.104 37.3123 6.2612 37.4531 6.37891L39.9359 8.47891L39.1977 11.3828C39.1466 11.5793 39.1558 11.7865 39.224 11.9777C39.2923 12.1688 39.4165 12.335 39.5805 12.4547C39.7396 12.5689 39.9292 12.6331 40.1251 12.6389C40.3209 12.6448 40.514 12.592 40.6797 12.4875L43.2445 10.8633H43.2555L46.0172 12.6078C46.1589 12.6999 46.324 12.7492 46.493 12.75C46.6309 12.7489 46.7668 12.7162 46.8901 12.6544C47.0134 12.5926 47.121 12.5034 47.2044 12.3935C47.2879 12.2836 47.345 12.1561 47.3715 12.0207C47.3979 11.8853 47.393 11.7457 47.357 11.6125L46.575 8.43516L49.0469 6.37891C49.1877 6.2612 49.2901 6.104 49.3408 5.92758C49.3915 5.75115 49.3882 5.56358 49.3312 5.38906Z" fill="#D9D9D9"/>
								<path d="M67.3312 5.38906C67.2765 5.21679 67.171 5.06508 67.0285 4.95382C66.886 4.84257 66.7132 4.77697 66.5328 4.76562L63.2844 4.54141L62.0812 1.50625C62.0156 1.33913 61.9012 1.19557 61.753 1.09417C61.6048 0.99277 61.4296 0.938191 61.25 0.9375C61.0704 0.938191 60.8952 0.99277 60.747 1.09417C60.5988 1.19557 60.4844 1.33913 60.4187 1.50625L59.1937 4.55781L55.9672 4.76562C55.787 4.77771 55.6146 4.84358 55.4722 4.95473C55.3299 5.06588 55.2242 5.21718 55.1687 5.38906C55.1118 5.56358 55.1085 5.75115 55.1592 5.92758C55.2099 6.104 55.3123 6.2612 55.4531 6.37891L57.9359 8.47891L57.1977 11.3828C57.1466 11.5793 57.1558 11.7865 57.224 11.9777C57.2923 12.1688 57.4165 12.335 57.5805 12.4547C57.7396 12.5689 57.9292 12.6331 58.1251 12.6389C58.3209 12.6448 58.514 12.592 58.6797 12.4875L61.2445 10.8633H61.2555L64.0172 12.6078C64.1589 12.6999 64.324 12.7492 64.493 12.75C64.6309 12.7489 64.7668 12.7162 64.8901 12.6544C65.0134 12.5926 65.121 12.5034 65.2044 12.3935C65.2879 12.2836 65.345 12.1561 65.3715 12.0207C65.3979 11.8853 65.393 11.7457 65.357 11.6125L64.575 8.43516L67.0469 6.37891C67.1877 6.2612 67.2901 6.104 67.3408 5.92758C67.3915 5.75115 67.3882 5.56358 67.3312 5.38906Z" fill="#D9D9D9"/>
								<path d="M85.3312 5.38906C85.2765 5.21679 85.171 5.06508 85.0285 4.95382C84.886 4.84257 84.7132 4.77697 84.5328 4.76562L81.2844 4.54141L80.0812 1.50625C80.0156 1.33913 79.9012 1.19557 79.753 1.09417C79.6048 0.99277 79.4296 0.938191 79.25 0.9375C79.0704 0.938191 78.8952 0.99277 78.747 1.09417C78.5988 1.19557 78.4844 1.33913 78.4187 1.50625L77.1937 4.55781L73.9672 4.76562C73.787 4.77771 73.6146 4.84358 73.4722 4.95473C73.3299 5.06588 73.2242 5.21718 73.1687 5.38906C73.1118 5.56358 73.1085 5.75115 73.1592 5.92758C73.2099 6.104 73.3123 6.2612 73.4531 6.37891L75.9359 8.47891L75.1977 11.3828C75.1466 11.5793 75.1558 11.7865 75.224 11.9777C75.2923 12.1688 75.4165 12.335 75.5805 12.4547C75.7396 12.5689 75.9292 12.6331 76.1251 12.6389C76.3209 12.6448 76.514 12.592 76.6797 12.4875L79.2445 10.8633H79.2555L82.0172 12.6078C82.1589 12.6999 82.324 12.7492 82.493 12.75C82.6309 12.7489 82.7668 12.7162 82.8901 12.6544C83.0134 12.5926 83.121 12.5034 83.2044 12.3935C83.2879 12.2836 83.345 12.1561 83.3715 12.0207C83.3979 11.8853 83.393 11.7457 83.357 11.6125L82.575 8.43516L85.0469 6.37891C85.1877 6.2612 85.2901 6.104 85.3408 5.92758C85.3915 5.75115 85.3882 5.56358 85.3312 5.38906Z" fill="#D9D9D9"/>
							</svg>
							<?php endif; ?>
						</div>
					</div>	
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			<?php else: ?>
				<p class="text-center">Không có sản phẩm nào đã xem!</p>
			<?php endif; ?>
			</div>
		</div>
	</section> 
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>
