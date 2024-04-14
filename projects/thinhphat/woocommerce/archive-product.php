<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<?php
	if(is_product_category()){
		$term_id = get_queried_object()->term_id;
		$post_id = 'product_cat_'.$term_id;
		$cat_url = get_category_link($term_id);
		$catImage = get_field('cat-image', $post_id);
		$shortDes = get_field('short-des', $post_id);
	}
?>

<section class="collection-top">
	<div class="container">
		<div class="collection-top-inner pb-6">
			<?php if(is_product_category()):?>	
				<?php if($catImage):?>	
				<div>
					<?php echo wp_get_attachment_image($catImage, 'large', false, array('class' => 'w-full rounded-lg', 'alt' => 'Ảnh bìa danh mục') )?>
				</div>
				<?php endif; ?>	
			<?php endif; ?>	
			<div class="flex flex-col gap-5 pt-6">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="text-heading-sm font-bold"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>	
				<?php if(is_product_category()):?>			
					<?php if($shortDes):?>			
					<div class="text-editor-content-detail line-height-md">
						<?php echo $shortDes; ?>
					</div>
					<?php endif; ?>		
				<?php endif; ?>		
			</div>
		</div>
	</div>
</section>
<?php if(is_product_category()):?>	
	<section class="brands-grid">
		<div class="container pr-0 sm:pr-6">
			<div class="collection-brands-grid py-6">
				<?php if ( have_rows( 'menuBrandFilter', 'options' ) ) : ?>
				<ul class="brands-grid-items list-unstyled pb-1 pr-6 sm:pr-0 sm:pb-0 mb-0 grid grid-cols-7 sm:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-4 overflow-auto">
					<?php while ( have_rows( 'menuBrandFilter', 'options' ) ) :
					the_row(); 
						$menuBrandFilterLink = get_sub_field( 'menuBrandFilterLink', 'options' );
					?>
					<li class="brands-grid-item-outer bg-gradient-light  rounded block overflow-hidden w-full">
						<a href="<?php echo $cat_url; ?><?php echo esc_html( $menuBrandFilterLink ); ?>" class="brands-grid-item">
							<div class="item-thumb">
								<img loading="lazy" src="<?php echo esc_url( get_sub_field( 'menuBrandFilterImage', 'options' ) ); ?>" alt="Thương hiệu đồng hồ" />
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>			
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
	<section class="collection-filter">
		<div class="container collection-filter-container">
			<div class="collection-filter-inner">
				<div class="collection-filter-header flex md:hidden items-center justify-between gap-6 py-3 px-6">
					<span class="text-lg font-bold">BỘ LỌC</span>
					<button type="button" class="collection-filter-close flex items-center justify-center border-0 cursor-pointer bg-white">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 13.0967L13 1.09668" stroke="#262626" stroke-width="1.5" stroke-linecap="round"></path>
							<path d="M13 13.0967L1 1.09668" stroke="#262626" stroke-width="1.5" stroke-linecap="round"></path>
						</svg>
					</button>
				</div>
				<div class="collection-filter-body flex flex-col gap-5 py-6">
				<?php echo do_shortcode('[yith_wcan_filters slug="default-preset-2"]'); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>	
<section class="main-collection">
	<div class="container">
		<div class="collection-grid py-6 flex flex-col gap-6">
			<?php if ( have_posts() ) : ?>
				<div class="collection-top-bar grid md:flex items-center justify-between gap-x-2 gap-y-4 md:gap-x-4">
					<button type="button" class="collection-filter-open theme-btn btn-outline-light btn-sm flex md:hidden">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.33 17.0811H4.0293" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13.1406 7.3887H19.4413" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 7.33453C8.72629 6.03888 7.66813 4.98828 6.36314 4.98828C5.05816 4.98828 4 6.03888 4 7.33453C4 8.63019 5.05816 9.68079 6.36314 9.68079C7.66813 9.68079 8.72629 8.63019 8.72629 7.33453Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.9997 17.0421C19.9997 15.7464 18.9424 14.6958 17.6374 14.6958C16.3316 14.6958 15.2734 15.7464 15.2734 17.0421C15.2734 18.3377 16.3316 19.3883 17.6374 19.3883C18.9424 19.3883 19.9997 18.3377 19.9997 17.0421Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<span class="whitespace-nowrap">Bộ lọc</span>
					</button>
					<?php
						/**
						 * woocommerce_before_shop_loop hook.
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
				</div>
				<?php woocommerce_product_loop_start(); ?>
				
				<?php woocommerce_product_subcategories(); ?>
				
					<div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
					<?php while ( have_posts() ) : the_post(); ?>

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
					<?php endwhile; // end of the loop. ?>
					</div>

				<?php woocommerce_product_loop_end(); ?>
				<?php if(paginate_links()!='') {?>
					<nav aria-label="Page navigation">
						<div class="pagination list-unstyled py-4 flex flex-wrap items-center justify-center gap-3">
							<?php
	                        global $wp_query;
							$big = 999999999;
							$paginate_args = array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 3.86133L5.625 9.48633L11.25 15.1113" stroke="#8C8C8C" stroke-linecap="round" stroke-linejoin="round"></path></svg>'),
								'next_text'    => __('<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.75 3.86133L12.375 9.48633L6.75 15.1113" stroke="#8C8C8C" stroke-linecap="round" stroke-linejoin="round"></path></svg>'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							);
							$custom_links = paginate_links($paginate_args);
							$custom_links = str_replace('<a ', '<a rel="nofollow" title="Phân trang"', $custom_links);
	
							echo $custom_links;
							?>
						</div>
					</nav>
				<?php } ?>
			
			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
				<div class="collection-top-bar grid md:flex items-center justify-between gap-x-2 gap-y-4 md:gap-x-4">
					<a href="#" class="collection-filter-open theme-btn btn-outline-light btn-sm flex md:hidden">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.33 17.0811H4.0293" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13.1406 7.3887H19.4413" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 7.33453C8.72629 6.03888 7.66813 4.98828 6.36314 4.98828C5.05816 4.98828 4 6.03888 4 7.33453C4 8.63019 5.05816 9.68079 6.36314 9.68079C7.66813 9.68079 8.72629 8.63019 8.72629 7.33453Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.9997 17.0421C19.9997 15.7464 18.9424 14.6958 17.6374 14.6958C16.3316 14.6958 15.2734 15.7464 15.2734 17.0421C15.2734 18.3377 16.3316 19.3883 17.6374 19.3883C18.9424 19.3883 19.9997 18.3377 19.9997 17.0421Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<span class="whitespace-nowrap">Bộ lọc</span>
					</a>
				</div>
				<?php wc_get_template( 'loop/no-products-found.php' ); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php if(is_product_category()):?>	
	<section class="collection-bottom pt-6 py-12">
		<div class="container">
			<div class="collection-bottom-inner flex flex-col gap-6">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h2 class="text-heading-sm font-bold"><?php woocommerce_page_title(); ?></h2>
				<?php endif; ?>
				<div class="flex flex-col gap-3">
					<div class="read-more-area relative block w-full overflow-hidden" data-max-height="927" style="max-height: 927px;">
						<div class="read-more-area-content collection-content relative z-10 text-editor-content-detail">
							<?php
								/**
								 * Hook: woocommerce_archive_description.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								//do_action( 'woocommerce_archive_description' );
								the_archive_description();							
							?>
						</div>
						<div class="read-more-area-actions text-center absolute z-20 w-full" style="display: none;">
							<button type="button" class="read-more-area-btn inline-flex items-center justify-center py-1 gap-2 border-0 cursor-pointer bg-white">
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
	</section>
<?php endif; ?>
<?php get_footer( 'shop' );?>
