<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>




<div class="product-gallery flex flex-col gap-3 mb-8 lg:mb-0 <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<div class="product-gallery-for">
		<?php
		if ( $post_thumbnail_id ) {
			echo '<a data-owl-main-image="true" href="' . wp_get_attachment_image_src( $post_thumbnail_id, 'large', false )[0] .'" class="product-gallery-for-item" data-fancybox="product-gallery-for" data-caption="' . $product->name . '">';
			echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
			echo wp_get_attachment_image( $post_thumbnail_id, 'large', false, array( 'class' => 'ratio-media', 'loading' => '','alt' => $product->name, ) );
			echo '</div>';
			echo '</a>';			
			//$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			echo '<a href="' . wp_get_attachment_image_src( $post_thumbnail_id, 'large', false )[0] .'" class="product-gallery-for-item" data-fancybox="product-gallery-for" data-caption="' . $product->name . '">';
			echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
			//echo wp_get_attachment_image( $post_thumbnail_id, 'large', false, array( 'class' => 'ratio-media', 'alt' => $product->name, ) );
			echo '<img src="' . esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ) . '" alt="' . esc_html__( 'Awaiting product image', 'woocommerce' ) . '" class="ratio-media" />';
			echo '</div>';
			echo '</a>';				
			//$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			//$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			//$html .= '</div>';
		}


		$attachment_ids = $product->get_gallery_image_ids();

		if ( $attachment_ids && $product->get_image_id() ) {
			foreach ( $attachment_ids as $attachment_id ) {
				echo '<a href="' . wp_get_attachment_image_src( $attachment_id, 'large', false )[0] .'" class="product-gallery-for-item" data-fancybox="product-gallery-for" data-caption="' . $product->name . '">';
				echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
				echo wp_get_attachment_image( $attachment_id, 'large', false, array( 'class' => 'ratio-media', 'loading' => 'lazy', 'alt' => $product->name, ) );
				echo '</div>';
				echo '</a>';
				//echo wc_get_gallery_image_html( $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
			}
		}

		//echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		//do_action( 'woocommerce_product_thumbnails' );
		?>
	</div>
	<div class="product-gallery-nav-outer relative w-full">
		<div class="product-gallery-nav">
			<?php
			if ( $post_thumbnail_id ) {
				echo '<a href="' . wp_get_attachment_image_src( $post_thumbnail_id, 'large', false )[0] .'" class="product-gallery-nav-item" data-fancybox="product-gallery-nav" data-caption="' . $product->name . '">';
				echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
				echo wp_get_attachment_image( $post_thumbnail_id, 'large', false, array( 'class' => 'ratio-media', 'loading' => '', 'alt' => $product->name, ) );
				echo '</div>';
				echo '</a>';			
			} else {
				echo '<a href="' . wp_get_attachment_image_src( $post_thumbnail_id, 'large', false )[0] .'" class="product-gallery-nav-item" data-fancybox="product-gallery-nav" data-caption="' . $product->name . '">';
				echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
				echo '<img src="' . esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ) . '" alt="' . esc_html__( 'Awaiting product image', 'woocommerce' ) . '" class="ratio-media" />';
				echo '</div>';
				echo '</a>';
			}

			$attachment_ids = $product->get_gallery_image_ids();
			if ( $attachment_ids && $product->get_image_id() ) {
				foreach ( $attachment_ids as $attachment_id ) {
					echo '<a href="' . wp_get_attachment_image_src( $attachment_id, 'large', false )[0] .'" class="product-gallery-nav-item" data-fancybox="product-gallery-nav" data-caption="' . $product->name . '">';
					echo '<div class="ratio-thumb ratio-1x1 rounded overflow-hidden">';
					echo wp_get_attachment_image( $attachment_id, 'large', false, array( 'class' => 'ratio-media', 'loading' => 'lazy', 'alt' => $product->name, ) );
					echo '</div>';
					echo '</a>';
				}
			}
			?>
		</div>
		<div class="cust-nav cust-nav-small">
			<button type="button" class="cust-nav-item cust-nav-prev border-0 cursor-pointer" title="Trước">
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_112_2725)">
					<path d="M20 27.06C19.8721 27.06 19.7482 27.0144 19.6469 26.9131L10.9536 18.2198C9.73549 17.0017 9.73549 14.9983 10.9536 13.7802L19.6469 5.08691C19.8383 4.89551 20.1617 4.89551 20.3531 5.08691C20.5445 5.27832 20.5445 5.60174 20.3531 5.79314L11.6598 14.4865C10.8245 15.3217 10.8245 16.6783 11.6598 17.5136L20.3531 26.2069C20.5426 26.3964 20.5445 26.7152 20.3589 26.9072C20.2427 27.0129 20.1111 27.06 20 27.06Z" stroke="white"></path>
					</g>
					<defs>
					<clipPath id="clip0_112_2725">
					<rect width="32" height="32" rx="16" fill="white"></rect>
					</clipPath>
					</defs>
				</svg>
			</button>
			<button type="button" class="cust-nav-item cust-nav-next border-0 cursor-pointer" title="Sau">
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_112_2727)">
					<path d="M12 27.06C12.1279 27.06 12.2518 27.0144 12.3531 26.9131L21.0465 18.2198C22.2645 17.0017 22.2645 14.9983 21.0465 13.7802L12.3531 5.08691C12.1617 4.89551 11.8383 4.89551 11.6469 5.08691C11.4555 5.27832 11.4555 5.60174 11.6469 5.79314L20.3402 14.4865C21.1755 15.3217 21.1755 16.6783 20.3402 17.5136L11.6469 26.2069C11.4574 26.3964 11.4555 26.7152 11.6411 26.9072C11.7573 27.0129 11.8889 27.06 12 27.06Z" stroke="white"></path>
					</g>
					<defs>
					<clipPath id="clip0_112_2727">
					<rect width="32" height="32" rx="16" transform="matrix(-1 0 0 1 32 0)" fill="white"></rect>
					</clipPath>
					</defs>
				</svg>
			</button>
		</div>		
	</div>	
</div>
