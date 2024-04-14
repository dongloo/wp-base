<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
	<div class="flex flex-col items-start py-3 gap-2">
		<span class="text-secondary font-medium">
			Số lượng: 
		</span>		
		<div class="product-quantity relative">
			<button type="button" class="product-quantity-btn absolute z-20 product-quantity-minus border-0 cursor-pointer bg-white" title="Giảm số lượng">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g>
					<path d="M3.33398 8H12.6673" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
				</svg>   
			</button>
			<button type="button" class="product-quantity-btn absolute z-20 product-quantity-plus border-0 cursor-pointer bg-white" title="Thêm số lượng">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.00065 3.33325V12.6666M3.33398 7.99992H12.6673" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>			
			<?php
			do_action( 'woocommerce_before_add_to_cart_quantity' );

			woocommerce_quantity_input(
				array(
					'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
					'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
					'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				)
			);

			do_action( 'woocommerce_after_add_to_cart_quantity' );
			?>
		</div>
	</div>
	<div class="main-product-btns flex flex-col sm:grid items-start sm:items-center gap-3 py-4">
		<button type="submit" class="single_add_to_cart_button owl-add-to-cart-btn alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> w-full sm:w-auto theme-btn btn-secondary">
			<span class="btn-text"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></span>
			<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2.5 2H4.24001C5.32001 2 6.17 2.93 6.08 4L5.25 13.96C5.11 15.59 6.39999 16.99 8.03999 16.99H18.69C20.13 16.99 21.39 15.81 21.5 14.38L22.04 6.88C22.16 5.22 20.9 3.87 19.23 3.87H6.32001" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M16.75 22C17.4404 22 18 21.4404 18 20.75C18 20.0596 17.4404 19.5 16.75 19.5C16.0596 19.5 15.5 20.0596 15.5 20.75C15.5 21.4404 16.0596 22 16.75 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M8.75 22C9.44036 22 10 21.4404 10 20.75C10 20.0596 9.44036 19.5 8.75 19.5C8.05964 19.5 7.5 20.0596 7.5 20.75C7.5 21.4404 8.05964 22 8.75 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M9.5 8H21.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>		
		</button>
		<a href="#nogo" onclick="subiz('expandWidget')" class="w-full sm:w-auto theme-btn btn-outline">
			<span class="btn-text">Tư vấn miễn phí</span>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M15.9965 11H16.0054" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M11.9945 11H12.0035" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.99451 11H8.00349" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</a>
	</div>	

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
