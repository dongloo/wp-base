<?php
require get_template_directory() . '/core/init.php';


add_action( 'wp_enqueue_scripts', 'wpshare247_register_scripts' );
function wpshare247_register_scripts() {
	$assetsVersion = '1.1';
    //Library
    wp_enqueue_style( 'vendors-slick-css', get_theme_file_uri('/assets/vendors/slick-1.8.1/slick.css' ), false, $assetsVersion );
	if(is_singular( 'product' )){
		wp_enqueue_style( 'vendors-fancybox-css', get_theme_file_uri('/assets/vendors/fancybox/fancybox.css' ), false, $assetsVersion );
	}

    //Current project
    wp_enqueue_style( 'thinh-phat-watch-css', get_theme_file_uri('/assets/app/css/thinhphatwatch.css' ), false, $assetsVersion );

	//Library
	wp_enqueue_script( 'vendors-cookie-js', get_theme_file_uri( '/assets/vendors/cookie/jquery.cookie.js' ) , array(), $assetsVersion, true );
	wp_enqueue_script( 'vendors-slick-js', get_theme_file_uri( '/assets/vendors/slick-1.8.1/slick.min.js' ) , array(), $assetsVersion, true );
	if(is_singular( 'product' )){
		wp_enqueue_script( 'vendors-fancybox-js', get_theme_file_uri( '/assets/vendors/fancybox/fancybox.umd.js' ) , array(), $assetsVersion, true );
	}
	//Current project
	wp_enqueue_script( 'base-main-js', get_theme_file_uri( '/assets/app/js/main.js' ) , array(), $assetsVersion, true );
}


add_action('init', 'wptangtoc_remove_query_strings_css');
function wptangtoc_remove_query_strings_css() {
	if(!is_admin()) {
		add_filter('style_loader_src', 'wptangtoc_remove_query_strings_wp_css', 15);
	}
}
function wptangtoc_remove_query_strings_wp_css($src) {
$output = preg_split("/(&ver|\?ver)/", $src);
return $output[0];
}

function add_preload_file_css() {
	?>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/css/thinhphatwatch.css') ?>' as='style'>
	<?php
}
add_action('wp_head', 'add_preload_file_css',1);

function add_preload_font_WordPress() {
	?>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Light.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Regular.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Medium.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-SemiBold.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Bold.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Black.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<?php
}
//add_action('wp_head', 'add_preload_font_WordPress',2);
	


function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.min.js' ) ) return $url;
	if ( strpos( $url, 'lazyload.min.js' ) ) return $url;
	return "$url' defer ";
}
if ( ! is_admin() ) {
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}


function custom_use_print_block_library( $html, $handle ) {
	$handles = array( 'wp-block-library', 'wc-blocks-style', 'woocommerce-general', 'ion.range-slider' );
	if ( in_array( $handle, $handles ) ) {
	  $html = str_replace( 'media=\'all\'', 'media=\'print\' onload="this.onload=null;this.media=\'all\'"', $html );
	}
	return $html;
  }
add_filter( 'style_loader_tag', 'custom_use_print_block_library', 10, 2 );



//Tuỳ chọn giao diện
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' => 'Tuỳ chọn giao diện',
			// Title hiển thị khi truy cập vào Options page
			'menu_title' => 'Tuỳ chọn giao diện',
			// Tên menu hiển thị ở khu vực admin
			'menu_slug' => 'theme-settings',
			// Url hiển thị trên đường dẫn của options page
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);
}
//Khai báo menu
function register_my_menu()
{
	register_nav_menu('top-menu', __('Menu chính'));
	register_nav_menu('footer-menu-1', __('Menu chân trang cột 2'));
	register_nav_menu('footer-menu-2', __('Menu chân trang cột 3'));
}
add_action('init', 'register_my_menu');

//Chuyển trình soạn thảo văn bản về dạng classic
add_filter('use_block_editor_for_post', '__return_false');






/********************************************************************
//remove tag width & height in post
********************************************************************/
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);
function remove_width_attribute($html)
{
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	return $html;
}

function my_custom_wc_theme_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');


// Remove breadcrumbs from shop & categories
add_filter('woocommerce_before_main_content', 'remove_breadcrumbs');
function remove_breadcrumbs()
{
	remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

}


// Display 24 products per page. Goes in functions.php
// Change the Number of WooCommerce Products Displayed Per Page
add_filter( 'loop_shop_per_page', 'lw_loop_shop_per_page', 30 );

function lw_loop_shop_per_page( $products ) {
 $products = 20;
 return $products;
}


/*Woocommerce minicart*/
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
 global $woocommerce;
 ob_start();
 ?>
<a class="header-cart cart-contents inline-flex hover-opacity hover-opacity-75 relative" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
	<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path
			d="M2.66669 2.6665H4.98669C6.42669 2.6665 7.56002 3.9065 7.44002 5.33317L6.33335 18.6132C6.14669 20.7865 7.86668 22.6532 10.0533 22.6532H24.2534C26.1734 22.6532 27.8534 21.0798 28 19.1732L28.72 9.17318C28.88 6.95984 27.2 5.15983 24.9733 5.15983H7.76003"
			stroke="#262626"
			stroke-width="1.5"
			stroke-miterlimit="10"
			stroke-linecap="round"
			stroke-linejoin="round"
		/>
		<path
			d="M21.6667 29.3333C22.5871 29.3333 23.3333 28.5871 23.3333 27.6667C23.3333 26.7462 22.5871 26 21.6667 26C20.7462 26 20 26.7462 20 27.6667C20 28.5871 20.7462 29.3333 21.6667 29.3333Z"
			stroke="#262626"
			stroke-width="1.5"
			stroke-miterlimit="10"
			stroke-linecap="round"
			stroke-linejoin="round"
		/>
		<path
			d="M11 29.3333C11.9205 29.3333 12.6666 28.5871 12.6666 27.6667C12.6666 26.7462 11.9205 26 11 26C10.0795 26 9.33331 26.7462 9.33331 27.6667C9.33331 28.5871 10.0795 29.3333 11 29.3333Z"
			stroke="#262626"
			stroke-width="1.5"
			stroke-miterlimit="10"
			stroke-linecap="round"
			stroke-linejoin="round"
		/>
		<path d="M12 10.6665H28" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
	</svg>
	<div class="header-cart-count">
		<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
	</div>
</a>
 <?php
 $fragments['a.cart-contents'] = ob_get_clean();
 return $fragments;
}

//Xóa bỏ nút Add to Cart trong trang shop và category
function remove_loop_button(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');







//Đổi tên một số sorting
add_filter( 'woocommerce_catalog_orderby', 'misha_rename_default_sorting_options' );
 
function misha_rename_default_sorting_options( $options ){
 
   $options[ 'popularity' ] = 'Bán chạy';
   $options[ 'rating' ] = 'Theo điểm đánh giá';
   $options[ 'price' ] = 'Giá thấp đến cao';
   $options[ 'price-desc' ] = 'Giá cao xuống thấp';

   return $options;
 
}
// WooCommerce Sales Sorting Filter

add_filter( 'woocommerce_catalog_orderby', 'misha_add_custom_sorting_options' );
function misha_add_custom_sorting_options( $options ){
	
	$options[ 'on_sale' ] = 'Sản phẩm khuyến mãi';
	
	return $options;
}

add_filter( 'woocommerce_get_catalog_ordering_args', 'misha_custom_product_sorting' );
function misha_custom_product_sorting( $args ) {
	

	// Show products in stock first
	if( isset( $_GET[ 'orderby' ] ) && 'on_sale' === $_GET[ 'orderby' ] ) {
		$args[ 'meta_key' ] = '_sale_price';
		$args[ 'orderby' ] = array( 'meta_value' => 'ASC' );
	}
	
	return $args;
}




function owlGetThumb($id, $size, $imgClass, $useSinglePageTitle, $customAlt, $lazy) {
	if($lazy == true){
		$lazy = 'lazy';
	}else{
		$lazy = '';
	}
	$thumbnail_id = get_post_thumbnail_id( $id );
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	if(! $alt){
		if($useSinglePageTitle == true){
			$alt = get_the_title();
			echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'alt' => $alt, 'loading' => $lazy ) );
		}else{
			echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'alt' => $customAlt, 'loading' => $lazy ) );
		}
	}else{
		echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'loading' => $lazy ) );
	}
}
function owlGetImage($id, $size, $imgClass, $useSinglePageTitle, $customAlt, $lazy) {
	if($lazy == true){
		$lazy = 'lazy';
	}else{
		$lazy = '';
	}	
	//$thumbnail_id = get_post_thumbnail_id( $id );
	$alt = get_post_meta($id, '_wp_attachment_image_alt', true);
	if(! $alt){
		if($useSinglePageTitle == true){
			$alt = get_the_title();
			echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'alt' => $alt, 'loading' => $lazy ) );
		}else{
			echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'alt' => $customAlt, 'loading' => $lazy ) );
		}
	}else{
		echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'loading' => $lazy ) );
	}
}

function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

add_action( 'phpmailer_init', function( $phpmailer ) {
    if ( !is_object( $phpmailer ) )
    $phpmailer = (object) $phpmailer;
	$email_di = get_field('email_di', 'option');
	$pass_email = get_field('pass_email', 'option');
	$ten_email_di = get_field('ten_email_di', 'option');
    $phpmailer->Mailer     = 'smtp';
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = 1;
    $phpmailer->Port       = 587;
    $phpmailer->Username   = $email_di;
    $phpmailer->Password   = $pass_email;
    $phpmailer->SMTPSecure = 'TLS';
    $phpmailer->From       = $email_di;
    $phpmailer->FromName   = $ten_email_di;
});


//MENU
//$current_object_id = 0
if ( !class_exists('Owl_Custom_Menu') ) {
    class Owl_Custom_Menu extends Walker {
        var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
        var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

        function start_lvl(&$output, $depth=0, $args = null) {
			
			$output .= '<div class="sub-menu-mobile"><div class="menu-mb-title"><span class="icon-dropdown"><i class="menu-icon" aria-hidden="true"></i></span><span class="item-text submenu-header-title">MENU</span></div><ul class="site-nav-dropdown">';
        }

        function end_lvl(&$output, $depth=0, $args = null) {
			$output .= '</ul>';
        }

        function start_el(&$output, $item, $depth=0, $args = null, $current_object_id = 0) {			
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$activeClass = in_array( 'current-menu-item', $classes ) ? 'current-menu-item' : '';



			$menuIconField = get_field('menuIcon', $item);
			$menuHideText = get_field('menuHideText', $item);
			// $menuHidePc = get_field('menuHidePc', $item);
			$isMegaMenu = get_field('isMegaMenu', $item);
			$isMegaMenuGrid = get_field('isMegaMenuGrid', $item);
			// $menuShowImage = get_field('menuShowImage', $item);
			// $menuImage = get_field('menuImage', $item);

			$menuHidePcClass = '';
			// if($menuHidePc == 1){
			// 	$menuHidePcClass = 'hide_pc';
			// }
			$isMegaMenuClass = '';
			if($isMegaMenu == 1 && $depth == 0 || $isMegaMenuGrid == 1 && $depth == 0){
				$isMegaMenuClass = 'is-mega-menu';
			}
			$isMegaMenuGridClass = '';
			if($isMegaMenuGrid == 1 && $depth == 0){
				$isMegaMenuGridClass = 'is-mega-menu-grid';
			}
			
			$menuShowImageClass = '';
			$menuImageHtml = '';
			// if($menuShowImage == 1){
			// 	$menuShowImageClass = 'has-item-thumb';
			// 	$menuImageHtml = '<div class="item-thumb"><img loading="lazy" src="' . esc_url( $menuImage ) . '" alt="Menu image" /></div>';
			// }
			$dropDownClass = '';
			$dropDownIcon = '';
			if($isMegaMenu == 1 && $depth == 0 || $isMegaMenuGrid == 1 && $depth == 0 || in_array( 'menu-item-has-children', $classes )){
				$dropDownClass = 'menu-dropdown';
				$dropDownIcon = '<span class="icon-dropdown"><i class="menu-icon" aria-hidden="true"></i></span>';
			}
			$menuLevelClass = (int)$depth + 1;
			$output .= '<li data-title="' . $item->title . '" class="menu-lv-' . $menuLevelClass . ' item '. $activeClass.' ' . $dropDownClass . ' ' . $menuHidePcClass .' ' . $isMegaMenuClass .' ' . $isMegaMenuGridClass .'">';
			if($menuIconField){
				if($menuHideText == 1){
					$output .= '<a class="' . $menuShowImageClass . '" href="' . $item->url . '">' . $menuImageHtml . wp_get_attachment_image($menuIconField, 'thumbnail', false, array('class' => 'icon-box', 'loading' => 'lazy') ) . '<span class="flex-1 item-text block xl:hidden">' . $item->title . '</span>' . $dropDownIcon . '</a>';
				}else{
					$output .= '<a class="' . $menuShowImageClass . '" href="' . $item->url . '">' . $menuImageHtml . wp_get_attachment_image($menuIconField, 'thumbnail', false, array('class' => 'icon-box', 'loading' => 'lazy') ) . '<span class="flex-1 item-text">' . $item->title . '</span>' . $dropDownIcon . '</a>';
				}
			}else{
				$output .= '<a class="' . $menuShowImageClass . '" href="' . $item->url . '">' . $menuImageHtml . '<span class="flex-1 item-text">' . $item->title . '</span>' . $dropDownIcon . '</a>';
			}
			
        	
        }
		function end_el(&$output, $item, $depth = 0, $args = null) {
			// Close the menu item HTML
			$output .= '</li>';
		}
    }
}


//Live Search
add_action('wp_ajax_liveSearchFilter', 'liveSearchFilter');
add_action('wp_ajax_nopriv_liveSearchFilter', 'liveSearchFilter');
function liveSearchFilter() {
	if(isset($_POST['data'])){
		$data = $_POST['data']; // nhận dữ liệu từ client
		$itemToShow = 50;
		$getposts = new WP_query(); $getposts->query('post_type=product&post_status=publish&showposts='.$itemToShow.'&s='.$data);
		global $wp_query; $wp_query->in_the_loop = true;
		if ($getposts->have_posts()) :
			$count = $getposts->found_posts;
			echo '<div class="header-search-result rounded bg-white p-4 gap-4 flex flex-col"><p class="text-sm">Có <b>' . $count . '</b> sản phẩm phù hợp với kết quả tìm kiếm</p>';
			echo '<div class="header-search-result-inner gap-5 flex flex-col custom-scrollbar">';
			while ($getposts->have_posts()) : $getposts->the_post();
				global $product;
				echo '<a href="' . get_the_permalink() . '" class="flex gap-4 items-center text-title hover:text-link" title="' . get_the_title() . '">
						<div class="header-search-result-thumb"><div class="ratio-thumb rounded">' . get_the_post_thumbnail(get_the_ID(), 'thumbnail', false, array('class' => 'ratio-media', 'loading' => 'lazy') ) . '</div></div>
						<div class="flex-1">
							<p class="mb-1 text-sm text-truncate-1">' . get_the_title() . '</p>
							<div class="product-grid-item-prices flex items-center gap-2">' . $product->get_price_html() . '</div>
						</div>
					</a>';
			endwhile;wp_reset_postdata();
			echo '</div>';
			if($count > $itemToShow){
				echo '<a href="'. get_site_url() . '?s='.$data.'&post_type=product" class="text-sm text-title hover:text-link">Xem tất cả sản phẩm có từ khoá <b>'.$data.'</b></a>';
			}
			echo '</div>';
		else:
			echo '<div class="header-search-result rounded bg-white p-4 gap-4 flex flex-col">Không tìm thấy sản phẩm khớp với từ khoá tìm kiếm</div>';
		endif;
		die(); 
	}
}


function owl_woo_remove_hook(){
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
}
add_action( 'woocommerce_before_single_product_summary', 'owl_woo_remove_hook', 1 );

function viewedProduct(){
	session_start();
	if(!isset($_SESSION["viewed"])){
		$_SESSION["viewed"] = array();
	}
	if(is_singular('product')){
		$_SESSION["viewed"][get_the_ID()] = get_the_ID();
	}
}
add_action('wp', 'viewedProduct');


//Ajax add to cart
function add_to_cart_ajax_handler() {
    if (isset($_POST['product_id'])) {
        $product_id = sanitize_text_field($_POST['product_id']);
		$quantity = intval($_POST['quantity']);
        WC()->cart->add_to_cart($product_id, $quantity);

        // Return a response if needed
        echo json_encode(
			array(
				'success' => true,
				'cartItemsCount' => WC()->cart->get_cart_contents_count()
			)
		);
    }
    die();
}
add_action('wp_ajax_add_to_cart', 'add_to_cart_ajax_handler');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_ajax_handler');


add_filter( 'gettext', 'hocwordpress_translate_woocommerce_strings', 999 );

function hocwordpress_translate_woocommerce_strings( $translated ) {

$translated = str_ireplace( 'Bang / Hạt', 'Tỉnh / Thành phố', $translated );
$translated = str_ireplace( 'Mã bang', 'Mã tỉnh / Thành phố', $translated );


return $translated;
}


function load_products_callback() {


	$type = $_POST['productType'];
	$slug = $_POST['slug'];

	//Sản phẩm mới
	$newArgs = array(
		'post_type' => 'product',
		'post_status' => 'publish',
		'posts_per_page' =>8,
		'product_cat' => $slug
	);
	
	//Bán chạy nhất
	$bestSellerArgs = array(
		'post_type' => 'product',
		'post_status' => 'publish',
		'posts_per_page' =>8,
		'orderby' => 'popularity',
		'order' => 'desc',
		'product_cat' => $slug
	);

	$productsArgs = $type == 'best-seller' ? $bestSellerArgs : $newArgs;
    $products = new WP_Query($productsArgs);

    if ($products->have_posts()){
		echo '<div class="product-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">';
        while ($products->have_posts()){
			$products->the_post();
            global $product;

			echo '<div class="product-grid-item w-full">
			<div class="relative">
			<div class="product-grid-item-thumb relative z-10">
			<a href="' . get_the_permalink() . '" class="ratio-thumb ratio-1x1 rounded overflow-hidden" data-title="' . get_the_title() . '">
			' . get_the_post_thumbnail(get_the_ID(), 'large', false, array('class' => 'ratio-media', 'loading' => 'lazy') ) . '
			</a>
			</div>
			<div class="product-grid-item-labels absolute z-20 flex flex-col gap-1 items-start">';
			if($product->sale_price) {
				$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
				echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sale">'  . sprintf( __('%s', 'woocommerce' ),'-'. $percentage . '%' ) . '</div>';
			};
			$owlNewLabelTime = intval(get_field( 'owl-new-label-time', 'options' ));
			$newness_days = $owlNewLabelTime; // Number of days the badge is shown
			$created = strtotime($product->get_date_created());
			if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
				echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-new">' . esc_html__('Mới', 'woocommerce') . '</div>';
			};
			if (!$product->is_in_stock()) {
				echo '<div class="product-grid-item-label text-center text-white text-xs rounded px-2 py-1 label-sold-out">Hết hàng</div>';
			}  ;                                             
			echo '</div>';
			echo '</div>';
			$brandName = array_shift( wc_get_product_terms( $product->id, 'thuong-hieu', array( 'fields' => 'names' ) ) );
			echo '<div class="gap-2 py-5 flex flex-col w-full items-center">
			<span class="block text-center uppercase text-xs text-secondary">' . $brandName . '</span>
			<div class="flex flex-col gap-3 items-center"><h3 class="mb-0 font-normal text-sm"><a href="' . get_the_permalink() . '" class="text-center text-sm text-title hover:text-link text-truncate-2" title="' . get_the_title() . '">' . get_the_title() . '</a></h3>
			<div class="product-grid-item-prices flex flex-wrap items-center justify-center gap-y-1 gap-x-2">' . $product->get_price_html() . '</div>
			</div>';

			$grid_item_review_count = $product->get_review_count();
			$grid_item_average      = $product->get_average_rating();
			$grid_item_averageCeiled = ceil($grid_item_average);
			if($grid_item_averageCeiled > 0){
				echo '<svg class="rating-svg" data-count="' . $grid_item_averageCeiled . '" width="87" height="15" viewBox="0 0 87 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3313 5.38906C13.2765 5.21679 13.171 5.06508 13.0285 4.95382C12.886 4.84257 12.7132 4.77697 12.5328 4.76562L9.28438 4.54141L8.08125 1.50625C8.01556 1.33913 7.90121 1.19557 7.75301 1.09417C7.6048 0.99277 7.42958 0.938191 7.25 0.9375C7.07043 0.938191 6.89521 0.99277 6.747 1.09417C6.5988 1.19557 6.48445 1.33913 6.41876 1.50625L5.19375 4.55781L1.96719 4.76562C1.787 4.77771 1.61458 4.84358 1.47223 4.95473C1.32989 5.06588 1.22417 5.21718 1.16875 5.38906C1.11185 5.56358 1.10852 5.75115 1.15921 5.92758C1.20989 6.104 1.31227 6.2612 1.45313 6.37891L3.93594 8.47891L3.19766 11.3828C3.14658 11.5793 3.15577 11.7865 3.22404 11.9777C3.29231 12.1688 3.4165 12.335 3.58047 12.4547C3.73963 12.5689 3.92925 12.6331 4.12507 12.6389C4.32089 12.6448 4.514 12.592 4.67969 12.4875L7.24454 10.8633H7.25547L10.0172 12.6078C10.1589 12.6999 10.324 12.7492 10.493 12.75C10.6309 12.7489 10.7668 12.7162 10.8901 12.6544C11.0135 12.5926 11.121 12.5034 11.2044 12.3935C11.2879 12.2836 11.345 12.1561 11.3715 12.0207C11.3979 11.8853 11.393 11.7457 11.357 11.6125L10.575 8.43516L13.0469 6.37891C13.1877 6.2612 13.2901 6.104 13.3408 5.92758C13.3915 5.75115 13.3882 5.56358 13.3313 5.38906Z" fill="#D9D9D9"/><path d="M31.3313 5.38906C31.2765 5.21679 31.171 5.06508 31.0285 4.95382C30.886 4.84257 30.7132 4.77697 30.5328 4.76562L27.2844 4.54141L26.0813 1.50625C26.0156 1.33913 25.9012 1.19557 25.753 1.09417C25.6048 0.99277 25.4296 0.938191 25.25 0.9375C25.0704 0.938191 24.8952 0.99277 24.747 1.09417C24.5988 1.19557 24.4845 1.33913 24.4188 1.50625L23.1938 4.55781L19.9672 4.76562C19.787 4.77771 19.6146 4.84358 19.4722 4.95473C19.3299 5.06588 19.2242 5.21718 19.1688 5.38906C19.1118 5.56358 19.1085 5.75115 19.1592 5.92758C19.2099 6.104 19.3123 6.2612 19.4531 6.37891L21.9359 8.47891L21.1977 11.3828C21.1466 11.5793 21.1558 11.7865 21.224 11.9777C21.2923 12.1688 21.4165 12.335 21.5805 12.4547C21.7396 12.5689 21.9293 12.6331 22.1251 12.6389C22.3209 12.6448 22.514 12.592 22.6797 12.4875L25.2445 10.8633H25.2555L28.0172 12.6078C28.1589 12.6999 28.324 12.7492 28.493 12.75C28.6309 12.7489 28.7668 12.7162 28.8901 12.6544C29.0135 12.5926 29.121 12.5034 29.2044 12.3935C29.2879 12.2836 29.345 12.1561 29.3715 12.0207C29.3979 11.8853 29.393 11.7457 29.357 11.6125L28.575 8.43516L31.0469 6.37891C31.1877 6.2612 31.2901 6.104 31.3408 5.92758C31.3915 5.75115 31.3882 5.56358 31.3313 5.38906Z" fill="#D9D9D9"/><path d="M49.3312 5.38906C49.2765 5.21679 49.171 5.06508 49.0285 4.95382C48.886 4.84257 48.7132 4.77697 48.5328 4.76562L45.2844 4.54141L44.0812 1.50625C44.0156 1.33913 43.9012 1.19557 43.753 1.09417C43.6048 0.99277 43.4296 0.938191 43.25 0.9375C43.0704 0.938191 42.8952 0.99277 42.747 1.09417C42.5988 1.19557 42.4844 1.33913 42.4187 1.50625L41.1937 4.55781L37.9672 4.76562C37.787 4.77771 37.6146 4.84358 37.4722 4.95473C37.3299 5.06588 37.2242 5.21718 37.1687 5.38906C37.1118 5.56358 37.1085 5.75115 37.1592 5.92758C37.2099 6.104 37.3123 6.2612 37.4531 6.37891L39.9359 8.47891L39.1977 11.3828C39.1466 11.5793 39.1558 11.7865 39.224 11.9777C39.2923 12.1688 39.4165 12.335 39.5805 12.4547C39.7396 12.5689 39.9292 12.6331 40.1251 12.6389C40.3209 12.6448 40.514 12.592 40.6797 12.4875L43.2445 10.8633H43.2555L46.0172 12.6078C46.1589 12.6999 46.324 12.7492 46.493 12.75C46.6309 12.7489 46.7668 12.7162 46.8901 12.6544C47.0134 12.5926 47.121 12.5034 47.2044 12.3935C47.2879 12.2836 47.345 12.1561 47.3715 12.0207C47.3979 11.8853 47.393 11.7457 47.357 11.6125L46.575 8.43516L49.0469 6.37891C49.1877 6.2612 49.2901 6.104 49.3408 5.92758C49.3915 5.75115 49.3882 5.56358 49.3312 5.38906Z" fill="#D9D9D9"/><path d="M67.3312 5.38906C67.2765 5.21679 67.171 5.06508 67.0285 4.95382C66.886 4.84257 66.7132 4.77697 66.5328 4.76562L63.2844 4.54141L62.0812 1.50625C62.0156 1.33913 61.9012 1.19557 61.753 1.09417C61.6048 0.99277 61.4296 0.938191 61.25 0.9375C61.0704 0.938191 60.8952 0.99277 60.747 1.09417C60.5988 1.19557 60.4844 1.33913 60.4187 1.50625L59.1937 4.55781L55.9672 4.76562C55.787 4.77771 55.6146 4.84358 55.4722 4.95473C55.3299 5.06588 55.2242 5.21718 55.1687 5.38906C55.1118 5.56358 55.1085 5.75115 55.1592 5.92758C55.2099 6.104 55.3123 6.2612 55.4531 6.37891L57.9359 8.47891L57.1977 11.3828C57.1466 11.5793 57.1558 11.7865 57.224 11.9777C57.2923 12.1688 57.4165 12.335 57.5805 12.4547C57.7396 12.5689 57.9292 12.6331 58.1251 12.6389C58.3209 12.6448 58.514 12.592 58.6797 12.4875L61.2445 10.8633H61.2555L64.0172 12.6078C64.1589 12.6999 64.324 12.7492 64.493 12.75C64.6309 12.7489 64.7668 12.7162 64.8901 12.6544C65.0134 12.5926 65.121 12.5034 65.2044 12.3935C65.2879 12.2836 65.345 12.1561 65.3715 12.0207C65.3979 11.8853 65.393 11.7457 65.357 11.6125L64.575 8.43516L67.0469 6.37891C67.1877 6.2612 67.2901 6.104 67.3408 5.92758C67.3915 5.75115 67.3882 5.56358 67.3312 5.38906Z" fill="#D9D9D9"/><path d="M85.3312 5.38906C85.2765 5.21679 85.171 5.06508 85.0285 4.95382C84.886 4.84257 84.7132 4.77697 84.5328 4.76562L81.2844 4.54141L80.0812 1.50625C80.0156 1.33913 79.9012 1.19557 79.753 1.09417C79.6048 0.99277 79.4296 0.938191 79.25 0.9375C79.0704 0.938191 78.8952 0.99277 78.747 1.09417C78.5988 1.19557 78.4844 1.33913 78.4187 1.50625L77.1937 4.55781L73.9672 4.76562C73.787 4.77771 73.6146 4.84358 73.4722 4.95473C73.3299 5.06588 73.2242 5.21718 73.1687 5.38906C73.1118 5.56358 73.1085 5.75115 73.1592 5.92758C73.2099 6.104 73.3123 6.2612 73.4531 6.37891L75.9359 8.47891L75.1977 11.3828C75.1466 11.5793 75.1558 11.7865 75.224 11.9777C75.2923 12.1688 75.4165 12.335 75.5805 12.4547C75.7396 12.5689 75.9292 12.6331 76.1251 12.6389C76.3209 12.6448 76.514 12.592 76.6797 12.4875L79.2445 10.8633H79.2555L82.0172 12.6078C82.1589 12.6999 82.324 12.7492 82.493 12.75C82.6309 12.7489 82.7668 12.7162 82.8901 12.6544C83.0134 12.5926 83.121 12.5034 83.2044 12.3935C83.2879 12.2836 83.345 12.1561 83.3715 12.0207C83.3979 11.8853 83.393 11.7457 83.357 11.6125L82.575 8.43516L85.0469 6.37891C85.1877 6.2612 85.2901 6.104 85.3408 5.92758C85.3915 5.75115 85.3882 5.56358 85.3312 5.38906Z" fill="#D9D9D9"/></svg>';
			};
			echo '</div>';
			echo '</div>';
		};
		echo '</div>';
	}else{
		echo '<p>';
        echo 'Không có sản phẩm nào';
		echo '</p>';
	};

    wp_die();
}
add_action('wp_ajax_load_products', 'load_products_callback');
add_action('wp_ajax_nopriv_load_products', 'load_products_callback');

//Bỏ bắt buộc trường Email ở trang đặt hàng trên website WordPress
add_filter( 'woocommerce_billing_fields', 'filter_billing_fields', 20, 1 );
function filter_billing_fields( $billing_fields ) {
    // Only on checkout page
    if( ! is_checkout() ) return $billing_fields;

    //$billing_fields['billing_phone']['required'] = false;
    $billing_fields['billing_email']['required'] = false;
    return $billing_fields;
}



remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
