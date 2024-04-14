<?php
require get_template_directory() . '/core/init.php';
require get_template_directory() . '/inc/init.php';

add_action( 'wp_enqueue_scripts', 'wpshare247_register_scripts' );
function wpshare247_register_scripts() {
	$assetsVersion = '1.1';
    //Library
    wp_enqueue_style( 'vendors-slick-css', get_theme_file_uri('/assets/vendors/slick-1.8.1/slick.min.css' ), false, $assetsVersion );
	if(!is_front_page()){
		if(is_single() || is_page()){
			wp_enqueue_style( 'vendors-fancybox-css', get_theme_file_uri('/assets/vendors/fancybox/fancybox.css' ), false, $assetsVersion );
		}
	}
	
    //Current project
    //wp_enqueue_style( 'final-min-css', get_theme_file_uri('/assets/app/css/final.min.css' ), false, $assetsVersion );

	//Library
	//wp_enqueue_script( 'vendors-jquery-js', get_theme_file_uri( '/assets/vendors/jquery-3.7.1.min.js' ) , array(), $assetsVersion, true );
	wp_enqueue_script( 'vendors-slick-js', get_theme_file_uri( '/assets/vendors/slick-1.8.1/slick.min.js' ) , array(), $assetsVersion, true );
	if(!is_front_page()){
		if(is_single() || is_page()){
			wp_enqueue_script( 'vendors-fancybox-js', get_theme_file_uri( '/assets/vendors/fancybox/fancybox.umd.js' ) , array(), $assetsVersion, true );
		}
	}
	//Current project
	wp_enqueue_script( 'base-main-js', get_theme_file_uri( '/assets/app/js/main.min.js' ) , array(), $assetsVersion, true );
}

//remove jquery-migrate
function remove_jquery_migrate_script() {
    wp_deregister_script('jquery-migrate');
}
//add_action('wp_enqueue_scripts', 'remove_jquery_migrate_script');

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
	<link rel="preload" href="<?php echo get_theme_file_uri('/assets/app/css/final.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/app/css/final.min.css') ?>"></noscript>
	<?php
}
add_action('wp_head', 'add_preload_file_css',1);


function add_preload_font_WordPress() {
	?>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Regular.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Medium.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-SemiBold.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<link rel='preload' href='<?php echo get_theme_file_uri('/assets/app/fonts/Inter-Bold.ttf') ?>' as='font' type='font/ttf' crossorigin>
	<?php
}
add_action('wp_head', 'add_preload_font_WordPress',2);
	

function preload_logo_wptangtoc() {
	$logo = get_field('logo', 'option');
	?>
	<link rel="preload" href="<?php echo $logo; ?>" as="image" type="image/png">
	<?php
}
add_action('wp_head', 'preload_logo_wptangtoc',9);

//preload ảnh đầu tiên
function preload_first_image() {
	if(is_front_page()){
		$get_first_post_args = array(
			'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'noi-bat', // Tên của taxonomy
					'field'    => 'slug',
					'terms'    => 'tin-noi-bat', // Giá trị của taxonomy
				),
			),
	
			'posts_per_page' => 1, // Số bài viết bạn muốn hiển thị
			'fields' => 'ids',
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'no_found_rows' => true
		);
		$get_first_post = new WP_Query($get_first_post_args);
		if ($get_first_post->have_posts()) {
			while ($get_first_post->have_posts()) {
				$get_first_post->the_post();
				$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
				$post_thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'single-post-thumb' );
			}
			wp_reset_postdata(); // Đặt lại dữ liệu bài viết
		}
		if ( $post_thumbnail_url ) {
			echo '<link rel="preload" as="image" href="' . $post_thumbnail_url . '">';
		}
	}
}
add_action('wp_head', 'preload_first_image');

function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.min.js' ) ) return $url;
	if ( strpos( $url, 'lazyload.min.js' ) ) return $url;
	return "$url' defer ";
}
if ( ! is_admin() ) {
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}


//Cho js xuống footer
//add_action( 'wp_enqueue_scripts', 'gia_tuan_script',100 );
function gia_tuan_script() {
    wp_enqueue_script( 'to-top', get_stylesheet_directory_uri() . '/js/gia-tuan.js', array( 'jquery' ), '1.0', true );
}
//cho jquery-core-js, jquery-migrate-js xuống dưới footer




function remove_stylesheets() {
    wp_dequeue_style('popup-maker-site');
    //wp_dequeue_style('Tên_được_đặt_trong_enqueue_function');
    // Thêm các tên khác nếu cần
}
add_action('wp_enqueue_scripts', 'remove_stylesheets', 100);


function custom_use_print_block_library( $html, $handle ) {
	$handles = array( 'wp-block-library', 'wc-blocks-style', 'woocommerce-general', 'ion.range-slider' );
	if ( in_array( $handle, $handles ) ) {
	  $html = str_replace( 'media=\'all\'', 'media=\'print\' onload="this.onload=null;this.media=\'all\'"', $html );
	}
	return $html;
  }
//add_filter( 'style_loader_tag', 'custom_use_print_block_library', 10, 2 );

//Xoa Gutenberg Block Library CSS khỏi WordPress
function vietrick_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'vietrick_remove_wp_block_library_css', 100 );

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
	register_nav_menu('footer-menu-1', __('Menu chân trang'));
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


function owlGetPostThumb($id, $size, $imgClass, $useSinglePageTitle, $customAlt, $lazy) {
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
			echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'alt' => substr($alt, 0, 35), 'loading' => $lazy ) );
		}else{
			echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'alt' => substr($customAlt, 0, 35), 'loading' => $lazy ) );
		}
	}else{
		echo get_the_post_thumbnail( $id, $size, array('class' => $imgClass, 'alt' => substr($alt, 0, 35), 'loading' => $lazy ) );
	}
}


function owlGetAttImage($id, $size, $imgClass, $useSinglePageTitle, $customAlt, $lazy) {
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
			echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'alt' => substr($alt, 0, 35), 'loading' => $lazy ) );
		}else{
			echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'alt' => substr($customAlt, 0, 35), 'loading' => $lazy ) );
		}
	}else{
		echo wp_get_attachment_image( $id, $size, false, array( 'class' => $imgClass, 'alt' => substr($alt, 0, 35), 'loading' => $lazy ) );
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


// add_action( 'phpmailer_init', function( $phpmailer ) {
//     if ( !is_object( $phpmailer ) )
// 	$smtp_host = get_field( 'smtp_host', 'options' );
// 	$smtp_port = get_field( 'smtp_port', 'options' );
// 	$smtp_secure = get_field( 'smtp_secure', 'options' );
// 	$smtp_email = get_field( 'smtp_email', 'options' );
// 	$smtp_password = get_field( 'smtp_password', 'options' );
// 	$smtp_from_name = get_field( 'smtp_from_name', 'options' );
//     $phpmailer = (object) $phpmailer;
//     $phpmailer->Mailer     = 'smtp';
//     $phpmailer->Host       = $smtp_host;
//     $phpmailer->SMTPAuth   = 1;
//     $phpmailer->Port       = (int)$smtp_port;
//     $phpmailer->Username   = $smtp_email;
//     $phpmailer->Password   = $smtp_password;
//     $phpmailer->SMTPSecure = $smtp_secure;
//     $phpmailer->From       = $smtp_email;
//     $phpmailer->FromName   = $smtp_from_name;
// });


//MENU
//$current_object_id = 0
if ( !class_exists('Owl_Custom_Menu') ) {
    class Owl_Custom_Menu extends Walker {
        var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
        var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
        function start_lvl(&$output, $depth=0, $args = null) {
			$output .= '<div class="sub-menu-mobile"><div class="menu-mb-title"><span class="icon-dropdown"><i class="menu-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none"><path d="M6.75 3.86328L12.375 9.48828L6.75 15.1133" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/></svg></i></span><span class="item-text submenu-header-title">MENU</span></div><ul class="site-nav-dropdown">';
        }
        function end_lvl(&$output, $depth=0, $args = null) {
			$output .= '</ul>';
        }
        function start_el(&$output, $item, $depth=0, $args = null, $current_object_id = 0) {			
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$activeClass = in_array( 'current-menu-item', $classes ) ? 'current-menu-item' : '';
			$menuHidePc = get_field('menuHideText', $item);
			$isMegaMenuGrid = get_field('is_mega_menu', $item);
			$is_grid_view_all_link = get_field('is_grid_view_all_link', $item);
			$has_menu_label = get_field('has_menu_label', $item);
			$menu_label = get_field('menu_label', $item);

			$menu_item_post = get_field('menu_item_post', $item);

			$mega_menu_item_type = get_field('mega_menu_item_type', $item);

			$menuHidePcClass = '';
			if($menuHidePc == 1){
				$menuHidePcClass = 'hide_pc';
			}
			$isMegaMenuClass = '';
			if($isMegaMenuGrid == 1 && $depth == 0){
				$isMegaMenuClass = 'is-mega-menu';
			}
			$fontSmallClass = '';
			$isMegaMenuGridClass = '';
			if($isMegaMenuGrid == 1 && $depth == 0){
				$isMegaMenuGridClass = 'is-mega-menu-grid';
			}

			$mega_menu_item_type_class = '';
			if($mega_menu_item_type == 'Dự án'){
				$mega_menu_item_type_class = 'projects-mega-menu';
			}
			

			$is_grid_view_all_link_class = '';
			if($is_grid_view_all_link == 1){
				$is_grid_view_all_link_class = 'is-all-link-item';
			}

			$menu_label_html = '';
			if($has_menu_label == 1 && $menu_label != '' && $depth == 0){
				$menu_label_html = '<span class="menu-item-label menu-item-label-hot">' . $menu_label . '</span>';
			}


			$menuShowImageClass = '';
			if($menu_item_post){
				$menuShowImageClass = 'has-item-thumb';
			}

			$post_id = '';
			$post_type = '';
			$post_img = '';

			if($menu_item_post){
				$post_id = $menu_item_post->ID;
				$post_type = get_post_type($post_id);		
				$image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'medium');
				$thumb_url = $image_thumb[0];
				$post_img = '<img src=' . $thumb_url . ' alt=' . $item->title . ' class="ratio-media" loading="lazy"/>';
			}

			$menuImageHtml = '';
			if($menu_item_post){
				$menuImageHtml = '<div class="item-thumb"><div class="ratio-thumb ratio-3x2 rounded-lg">' . $post_img . '</div></div>';
			}

		
			$dropDownClass = '';
			$dropDownIcon = '';
			if($isMegaMenuGrid == 1 && $depth == 0 || in_array( 'menu-item-has-children', $classes )){
				$dropDownClass = 'menu-dropdown';
				$dropDownIcon = '<span class="icon-dropdown"><i class="menu-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none"><path d="M6.75 3.86328L12.375 9.48828L6.75 15.1133" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/></svg></i></span>';
			}


			$itemHtml = '';
			$project_name = '';
			$project_logo = '';
			$project_location = '';
			if( $menu_item_post){
				if($post_type == 'du-an'){
					$project_logo = get_field('logo_du_an', $post_id);
					$project_location = get_field('vi_tri_du_an', $post_id);
					$itemHtml = $menuImageHtml . 
					'<span class="flex-1 item-text w-full">
						<div class="flex justify-between items-center gap-4">
							<div class="flex flex-col gap-1 flex-1">
								<h3 class="text-dark hover:text-dark-secondary text-sm xl:text-base font-semibold text-truncate-1 flex-1" title="' . $item->title . '">' . $item->title . '</h3>
								<p class="mb-0 text-dark-secondary text-sm">' . $project_location . '</p>
							</div>
							<img width="72" height="36" src="' . $project_logo . '" class="list-project-logo hidden xl:block" alt="' . $item->title . '" decoding="async" loading="lazy">
						</div>
					</span>'; // . $dropDownIcon;
				}else{
					$thuoc_du_an = get_post_meta($post_id, 'thuoc_du_an_landing', true);
                    $project_name = get_the_title($thuoc_du_an);
					$itemHtml = $menuImageHtml . 
					'<span class="flex-1 item-text">
						<div class="flex flex-1 flex-col gap-1 xl:gap-2 h-full">
							<h3 class="flex-1 text-sm font-semibold text-truncate-2 xl:text-truncate-3">' . $item->title . '</h3>
							<p class="mb-0 text-sm text-dark-secondary text-truncate-1">' . $project_name . '</p>
						</div>
					</span>'; // . $dropDownIcon;
				}
			}
			else{
				$itemHtml = '<span class="flex-1 item-text">' . $item->title . ' ' . $menu_label_html . '</span>' . $dropDownIcon;
			}


			$menuLevelClass = (int)$depth + 1;
			$output .= '<li data-title="' . $item->title . '" class="menu-lv-' . $menuLevelClass . ' item '. $activeClass.' ' . $dropDownClass . ' ' . $menuHidePcClass .' ' . $isMegaMenuClass .' ' . $isMegaMenuGridClass .' ' . $is_grid_view_all_link_class . ' ' . $mega_menu_item_type_class . '">';
			$output .= '<a data-id="' . $post_id . '" data-post-type="' . $post_type . '" class="' . $menuShowImageClass . '" href="' . $item->url . '">' . $itemHtml . '</a>';
        }
		function end_el(&$output, $item, $depth = 0, $args = null) {
			// Close the menu item HTML
			$output .= '</li>';
		}
    }
}


// Thêm cột đường dẫn vào danh sách bài viết tùy chỉnh
function add_slug_column($columns) {
    $columns['slug'] = 'Đường dẫn';
    return $columns;
}
add_filter('manage_du-an_posts_columns', 'add_slug_column');
add_filter('manage_san-pham_posts_columns', 'add_slug_column');
// add_filter('manage_chuyen-nhuong_posts_columns', 'add_slug_column');
// add_filter('manage_cho-thue_posts_columns', 'add_slug_column');
add_filter('manage_video_posts_columns', 'add_slug_column');
add_filter('manage_dang-duoc-quan-tam_posts_columns', 'add_slug_column');


function display_slug_column($column, $post_id) {
    if ($column === 'slug') {
        echo get_post_field('post_name', $post_id);
    }
}
add_action('manage_du-an_posts_custom_column', 'display_slug_column', 10, 2);
add_action('manage_san-pham_posts_custom_column', 'display_slug_column', 10, 2);
// add_action('manage_chuyen-nhuong_posts_custom_column', 'display_slug_column', 10, 2);
// add_action('manage_cho-thue_posts_custom_column', 'display_slug_column', 10, 2);
add_action('manage_video_posts_custom_column', 'display_slug_column', 10, 2);
add_action('manage_dang-duoc-quan-tam_posts_custom_column', 'display_slug_column', 10, 2);




// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'du-an');
    register_taxonomy_for_object_type('post_tag', 'san-pham');
	register_taxonomy_for_object_type('post_tag', 'page');
	// register_taxonomy_for_object_type('post_tag', 'chuyen-nhuong');
	// register_taxonomy_for_object_type('post_tag', 'cho-thue');
	register_taxonomy_for_object_type('post_tag', 'video');
	register_taxonomy_for_object_type('post_tag', 'dang-duoc-quan-tam');
}



//LOAI BO ARCHIVE WORDPRESS 02
add_filter('get_the_archive_title', 'devvn_get_the_archive_title', 99);
function devvn_get_the_archive_title($title) {
	return preg_replace('/.+: /', '', $title);
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');






// ======== BẮT ĐẦU COPY TỪ THEME CŨ SANG =============
//* Kich hoat Shortcode cho tieu đe bai viet.
add_filter( 'the_title', 'do_shortcode' );
//* Kich hoat Shortcode cho plugin SEO Yoast
add_filter( 'wpseo_title', 'do_shortcode' );
add_filter( 'wpseo_metadesc', 'do_shortcode' );
// * Shortcode hien thi thoi gian hien tai.
// * shortcode: [hienthinam]
add_shortcode ('hienthinam', 'get_hienthinam');
    function get_hienthinam () 
 {
    $hienthinam= date ("Y"); // * Thay đổi định dạng tại đây
    return "$hienthinam";
 }
// * shortcode: [hienthithang]
add_shortcode ('hienthithang', 'get_hienthithang');
    function get_hienthithang () 
 {
    $hienthithang= date ("m"); // * Thay đổi định dạng tại đây
    return "$hienthithang";
 }
 // * shortcode: [hienthingay]
add_shortcode ('hienthingay', 'get_hienthingay');
	function get_hienthingay () 
{
	$hienthingay= date ("d"); // * Thay đổi định dạng tại đây
	return "$hienthingay";
}


// ======== KẾT THÚC COPY TỪ THEME CŨ SANG =============




function custom_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'custom_excerpt_more');



// FILTER
function custom_filter_posts_by_meta_value($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (isset($_GET['thuoc-du-an'])) {
        $meta_key = 'thuoc_du_an'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['thuoc-du-an']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
    if (isset($_GET['thuoc-du-an-landing'])) {
        $meta_key = 'thuoc_du_an_landing'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['thuoc-du-an-landing']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
    if (isset($_GET['thuoc-du-an-video'])) {
        $meta_key = 'thuoc_du_an_video'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['thuoc-du-an-video']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
    if (isset($_GET['thuoc-du-an-san-pham'])) {
        $meta_key = 'thuoc_du_an_san_pham'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['thuoc-du-an-san-pham']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
    if (isset($_GET['loai-san-pham'])) {
        $meta_key = 'loai_san_pham'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['loai-san-pham']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
	if (isset($_GET['loai-san-pham']) && isset($_GET['thuoc-du-an-san-pham'])) {
		$meta_query = array(
            'relation' => 'AND', // Use 'OR' if you want to match any condition
            array(
                'key' => 'loai_san_pham',
                'value' => sanitize_text_field($_GET['loai-san-pham']),
                'compare' => '='
            ),
            array(
                'key' => 'thuoc_du_an_san_pham',
                'value' => sanitize_text_field($_GET['thuoc-du-an-san-pham']),
                'compare' => '='
            )
        );

        $query->set('meta_query', $meta_query);
	}
    if (isset($_GET['vi-tri-du-an'])) {
        $meta_key = 'vi_tri_du_an'; // Replace with your meta key
        $meta_value = sanitize_text_field($_GET['vi-tri-du-an']);
        
        $meta_query = array(
            array(
                'key' => $meta_key,
                'value' => $meta_value,
                'compare' => '=',
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }

}

add_action('pre_get_posts', 'custom_filter_posts_by_meta_value', 10);



//Sắp xếp kết quả tìm kiếm theo post type
function order_search_by_posttype($orderby){
    if (!is_admin() && is_search()) :
        global $wpdb;
        $orderby =
            "
            CASE WHEN {$wpdb->prefix}posts.post_type = 'du-an' THEN '1' 
                 WHEN {$wpdb->prefix}posts.post_type = 'dang-duoc-quan-tam' THEN '2' 
                 WHEN {$wpdb->prefix}posts.post_type = 'san-pham' THEN '3' 
                 WHEN {$wpdb->prefix}posts.post_type = 'video' THEN '4' 
                 WHEN {$wpdb->prefix}posts.post_type = 'post' THEN '5' 
            ELSE {$wpdb->prefix}posts.post_type END ASC, 
            {$wpdb->prefix}posts.post_title ASC";
    endif;
    return $orderby;
}
add_filter('posts_orderby', 'order_search_by_posttype');





//Del transient_key
function delete_transient_ajax_handler() {
    if (isset($_POST['transient_key'])) {
        $transient_key = sanitize_text_field($_POST['transient_key']);

		delete_transient($transient_key);

        // Return a response if needed
        echo json_encode(
			array(
				'success' => true,
			)
		);
    }
    die();
}
add_action('wp_ajax_delete_transient', 'delete_transient_ajax_handler');
add_action('wp_ajax_nopriv_delete_transient', 'delete_transient_ajax_handler');