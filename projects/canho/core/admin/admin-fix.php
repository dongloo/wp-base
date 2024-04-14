<?php
    require_once dirname( __FILE__ ) . '/disable-updates.php';


    //add_filter('show_admin_bar', '__return_false');


    function remove_admin_bar_links() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');          /** Remove the WordPress logo **/
        $wp_admin_bar->remove_menu('about');            /** Remove the about WordPress link **/
        $wp_admin_bar->remove_menu('wporg');            /** Remove the WordPress.org link **/
        $wp_admin_bar->remove_menu('documentation');    /** Remove the WordPress documentation link **/
        $wp_admin_bar->remove_menu('support-forums');   /** Remove the support forums link **/
        //$wp_admin_bar->remove_menu('feedback');         /** Remove the feedback link **/
        //$wp_admin_bar->remove_menu('site-name');      /** Remove the site name menu **/
        //$wp_admin_bar->remove_menu('view-site');      /** Remove the view site link **/
        //$wp_admin_bar->remove_menu('wpseo-menu');       /** Remove the view site link **/
        $wp_admin_bar->remove_menu('updates');          /** Remove the updates link **/
        //$wp_admin_bar->remove_menu('comments');         /** Remove the comments link **/
        //$wp_admin_bar->remove_menu('new-content');      /** Remove the content link **/
        //$wp_admin_bar->remove_menu('wpforms-menu');    
        //$wp_admin_bar->remove_menu('my-account');     /** Remove the user details tab **/
    }
    add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


    //add_action('admin_init', 'rw_remove_dashboard_widgets');
    function rw_remove_dashboard_widgets() {
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'normal');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
        remove_meta_box('wpforms_reports_widget_pro', 'dashboard', 'normal');
        remove_meta_box('yith_dashboard_products_news', 'dashboard', 'normal');
        remove_meta_box('yith_dashboard_blog_news', 'dashboard', 'normal');
        remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');
        remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
        remove_meta_box('wc_admin_dashboard_setup', 'dashboard', 'normal');

    }


    function disable_all_plugin_notices() {
        remove_all_actions('admin_notices');
    }
    //add_action('admin_init', 'disable_all_plugin_notices');


	//add_action( 'admin_menu', 'my_remove_menus', 12 );
	function my_remove_menus() {
		//remove_menu_page( 'upload.php' );
		//remove_menu_page( 'edit-comments.php' );
		//remove_menu_page( 'wpforms-overview' );
		//remove_menu_page( 'themes.php' );
		//remove_menu_page( 'plugins.php' );
		//remove_menu_page( 'users.php' );
		//remove_menu_page( 'tools.php' );
		//remove_menu_page( 'options-general.php' );
		//remove_menu_page( 'wpseo_dashboard' );
        //remove_submenu_page( 'themes.php', 'nav-menus.php' )
        remove_submenu_page( 'options-general.php', 'svg-support' );
        if ( have_rows( 'advanced-menu', 'options' ) ){
            while ( have_rows( 'advanced-menu', 'options' )){
                the_row();
                global $menu;
                foreach ( $menu as $key => $value ){
                    if (
                        $value[5] == 'toplevel_page_edit?post_type=acf-field-group' && get_sub_field( 'advanced-menu-acf', 'options' ) == 1
                        || $value[5] == 'toplevel_page_wpforms-overview' && get_sub_field( 'advanced-menu-wpform', 'options' ) == 1
                        || $value[5] == 'toplevel_page_yith_plugin_panel' && get_sub_field( 'advanced-menu-yith', 'options') == 1
                        || $value[5] == 'toplevel_page_wpdiscuz' && get_sub_field( 'advanced-menu-wpdiscuz', 'options' ) == 1
                    ){
                        unset($menu[$key]);
                    }
                }
                if ( get_sub_field( 'advanced-menu-loco', 'options' ) ){
                    remove_menu_page('loco');
                }
                if ( get_sub_field( 'advanced-menu-webp', 'options' ) ){
                    remove_submenu_page( 'options-general.php', 'webp_express_settings_page' );
                }
            }
        }
		//remove_menu_page( 'wp-responsive-menu');
	}


	add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
    function my_custom_dashboard_widgets() {
        global $wp_meta_boxes;
        wp_add_dashboard_widget('custom_help_widget', 'Giới thiệu', 'custom_dashboard_help');
    }
	function custom_dashboard_help() { ?>
	    <h2>Chào mừng đến với Hệ thống Quản Trị Website</h2>
	    <p><strong>THÔNG TIN WEBSITE</strong></p>
	    <P><?php echo bloginfo( 'name' ); ?></p>
	    <p><strong>NHÀ PHÁT TRIỂN</strong></p>
	    <p>Hệ thống được phát triển bởi <a href="https://owlogi.com/" target="_blank"><strong>Owlogi</strong></a></p>
	    <p>Mọi yêu cầu, hỗ trợ quý khách hàng có thể liên hệ:</p>
	    <p><strong>Điện thoại</strong>: 0333.886.993</p> 
	    <p><strong>Email</strong>: owlogi.com@gmail.com</p> 
	    <p><strong>Cảm ơn quý khách đã tin tưởng và sử dụng sản phẩm của Owlogi.</strong></p>
	<?php }


	/** Footer **/
	function remove_footer_admin () {
	    echo '';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');


	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
	function load_custom_wp_admin_style(){
	    wp_enqueue_style( 'admin_css', get_bloginfo('template_directory'). '/core/admin/css/style-admin.css' );
	}
	function login_css() {
        wp_enqueue_style( 'login_css', get_bloginfo('template_directory'). '/core/admin/css/login.css' );
    }
    add_action('login_head', 'login_css');


    //Thay đổi giao diện đăng nhập
    function wpb_login_logo_url() {
        return '/';
    }
    add_filter( 'login_headerurl', 'wpb_login_logo_url' );
    function wpb_login_logo_url_title() {
        return 'Căn hộ Vinhomes';
    }
    add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


    //Ngăn không cho get_the_post_thumbnail load size medium_large
    function custom_medium_large_size($downsize, $id, $size) {
        if ($size === 'medium_large') {
            $new_size = array(700, 700); // Kích thước mới bạn muốn
            $downsize = image_resize_dimensions($id, $new_size[0], $new_size[1], true);
        }
        return $downsize;
    }
    //add_filter('image_downsize', 'custom_medium_large_size', 10, 3);


    //Remove 768w img url in srcset of get_the_post_thumbnail

    function remove_768w_from_srcset($sources, $size_array, $image_src, $image_meta, $attachment_id)
    {
        // Kiểm tra xem có srcset không
        if (!empty($sources) && is_array($sources)) {
            foreach ($sources as $width => $source) {
                // Tìm và loại bỏ kích thước ảnh 768w từ srcset
                if ($width == 768) {
                    unset($sources[$width]);
                }
            }
        }
    
        return $sources;
    }
    // Áp dụng filter để loại bỏ 768w từ srcset
    add_filter('wp_calculate_image_srcset', 'remove_768w_from_srcset', 10, 5);


    //TÙY BIẾN MEDIA SIZE
    add_filter('intermediate_image_sizes', function($sizes) {
        return array_diff($sizes, ['medium_large']);  // Medium Large (768 x 0)
    });
      
    add_action( 'init', 'j0e_remove_large_image_sizes' );
    function j0e_remove_large_image_sizes() {
        remove_image_size( '1536x1536' );             // 2 x Medium Large (1536 x 1536)
        remove_image_size( '2048x2048' );             // 2 x Large (2048 x 2048)
    }


    //THÊM CHỨC NĂNG CHỈNH SỬA NHANH ẢNH ĐẠI DIỆN
    add_action('after_setup_theme', function () {
        add_theme_support('post-thumbnails');
        add_image_size( 'project-thumb', 480, 480 );
        add_image_size( 'single-post-thumb', 700, 700 );
    });




    function wpb_custom_image_sizes( $size_names ) {
        $new_sizes = array(
            'project-thumb' => 'Ảnh bìa dự án',
            'single-post-thumb' => 'Ảnh trong bài viết có cột bên phải'
        );
        return array_merge( $size_names, $new_sizes );
    }
    add_filter( 'image_size_names_choose', 'wpb_custom_image_sizes' );
    

   

    // This action hook allows to add a new empty column
    add_filter('manage_post_posts_columns', 'rudr_featured_image_column');
    function rudr_featured_image_column($cols)
    {
        $cols = array_slice($cols, 0, 1, true)
            + array('featured_image' => 'Ảnh đại diện') // our new column
            + array_slice($cols, 1, NULL, true);

        return $cols;
    }

    // This hook fills our column with data
    add_action('manage_posts_custom_column', 'rudr_render_the_column', 10, 2);
    function rudr_render_the_column($column_name, $post_id)
    {
        if ('featured_image' === $column_name) {
            // if there is no featured image for this post, print the placeholder
            if (has_post_thumbnail($post_id)) {

                // I know about get_the_post_thumbnail() function but we need data-id attribute here
                $id = get_post_thumbnail_id($post_id);
                $url = esc_url(wp_get_attachment_image_url($id));
                ?>
                <div class="owl-admin-custom-post-thumb"><img data-id="<?php echo $id ?>" src="<?php echo $url ?>" /></div>
                <?php
            } else {
                // data-id should be "-1" I will explain below
                ?>
                <div class="owl-admin-custom-post-thumb"><img data-id="-1" src="../wp-content/themes/canho/core/admin/images/woocommerce-placeholder.png" /></div>
                <?php
            }
        }
    }

    add_action('admin_enqueue_scripts', 'rudr_include_myuploadscript');
    function rudr_include_myuploadscript()
    {
        if (!did_action('wp_enqueue_media')) {
            wp_enqueue_media();
        }
    }
    add_action('quick_edit_custom_box', 'rudr_featured_image_quick_edit', 10, 2);
    function rudr_featured_image_quick_edit($column_name, $post_type)
    {
        // add it only if we have featured image column
        if ('featured_image' !== $column_name) {
            return;
        }
        ?>
        <fieldset id="misha_featured_image" class="inline-edit-col-left">
            <div class="inline-edit-col">
                <span class="title">
                    - Chiều rộng ảnh không quá 1024px.
                    - Dung lượng ảnh khuyến khích dưới 200kb.
                    - Khuyến khích up ảnh jpg để tối ưu dung lượng ảnh.
                </span>
                <div>
                    <a href="#" class="button rudr-upload-img">Đặt ảnh đại diện</a>
                    <input type="hidden" name="_thumbnail_id" value="" />
                </div>
                <a href="#" class="rudr-remove-img">Xoá ảnh đại diện</a>
            </div>
        </fieldset>
        <?php
    }
    function load_admin_script()
    {
        wp_enqueue_script('admin_js', get_stylesheet_directory_uri() . '/core/admin/js/admin-js.js', false, '1.0.0');
    }
    add_action('admin_enqueue_scripts', 'load_admin_script');


    // // Disables the block editor from managing widgets in the Gutenberg plugin.
    // add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
    // // Disables the block editor from managing widgets.
    // add_filter( 'use_widgets_block_editor', '__return_false' );


    add_filter('gutenberg_use_widgets_block_editor', '__return_false');
    add_filter('use_widgets_block_editor', '__return_false');
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar'
            )
        );
    }

    function filter_featured_image_admin_text( $content, $post_id, $thumbnail_id ){
        $help_text = '';
        // if(get_post_type() === 'page'
        // or get_post_type() === 'post'
        // or get_post_type() === 'video'
        // ) {

        // }else 
        if(
            get_post_type() === 'cho-thue'
            or get_post_type() === 'chuyen-nhuong'
        ){
            $help_text = '<p>
            <span style="color: #DCA447">ẢNH ĐẠI DIỆN</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">ẢNH NỘI DUNG</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">CHUNG</span><br>
            - Dung lượng ảnh khuyến khích dưới 200kb.<br>
            - Khuyến khích up ảnh jpg để tối ưu dung lượng ảnh.
            </p>';
        }
        else if(
            get_post_type() === 'du-an'
        ){
            $help_text = '<p>
            <span style="color: #DCA447">ẢNH ĐẠI DIỆN</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">ẢNH NỘI DUNG</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">CHUNG</span><br>
            - Dung lượng ảnh khuyến khích dưới 200kb.<br>
            - Khuyến khích up ảnh jpg để tối ưu dung lượng ảnh.
            </p>';
        }
        else if(
            get_post_type() === 'san-pham'
        ){
            $help_text = '<p>
            <span style="color: #DCA447">ẢNH ĐẠI DIỆN</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">ẢNH NỘI DUNG</span><br>
            - Chiều rộng ảnh không quá 1170px.<br>
            <br>
            <span style="color: #DCA447">CHUNG</span><br>
            - Dung lượng ảnh khuyến khích dưới 200kb.<br>
            - Khuyến khích up ảnh jpg để tối ưu dung lượng ảnh.
            </p>';
        }
        else if(
            get_post_type() === 'video'
        ){
            $help_text = '<p><span style="color: #DCA447">Video không cần đặt ảnh đại diện, ảnh đại diện sẽ tự lấy theo ảnh bìa video Youtube</span></p>';
        }
        else{
            $help_text = '<p>
            <span style="color: #DCA447">ẢNH ĐẠI DIỆN</span><br>
            - Chiều rộng ảnh không quá 1024px.<br>
            <br>
            <span style="color: #DCA447">ẢNH NỘI DUNG</span><br>
            - Chiều rộng ảnh không quá 1024px.<br>
            <br>
            <span style="color: #DCA447">CHUNG</span><br>
            - Dung lượng ảnh khuyến khích dưới 200kb.<br>
            - Khuyến khích up ảnh jpg để tối ưu dung lượng ảnh.
            </p>';
        }
        return $help_text . $content;
    }
    add_filter( 'admin_post_thumbnail_html', 'filter_featured_image_admin_text', 10, 3 );


    /* Tự động thêm Title, Alt-Text, Caption & Description cho hình ảnh
    --------------------------------------------------------------------------------------*/
    add_action('add_attachment', 'ttv_set_image_meta_image_upload');
    function ttv_set_image_meta_image_upload($post_ID)
    {

        // Check if uploaded file is an image, else do nothing

        if (wp_attachment_is_image($post_ID)) {

            $my_image_title = get_post($post_ID)->post_title;

            // Sanitize the title:  capitalize first letter of every word (other letters lower case):
            $my_image_title = ucwords(strtolower($my_image_title));

            // Create an array with the image meta (Title, Caption, Description) to be updated
            // Note:  comment out the Excerpt/Caption or Content/Description lines if not needed
            $my_image_meta = array(
                'ID' => $post_ID,
                // Specify the image (ID) to be updated
                'post_title' => $my_image_title,
                // Set image Title (Tiêu đề) to sanitized title
                //'post_excerpt' => $my_image_title,
                // Set image Caption (Excerpt) (Chú thích)
                'post_content' => $my_image_title, // Set image Description (Content) (Mô tả)
            );

            // Set the image Alt-Text (Văn bản thay thế)
            update_post_meta($post_ID, '_wp_attachment_image_alt', $my_image_title);

            // Set the image meta (e.g. Title, Excerpt, Content)
            wp_update_post($my_image_meta);

        }
    }

    //Xóa Gutenberg CSS ở trình soạn thảo
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
    // Don't load Gutenberg-related stylesheets.
    add_action( 'wp_enqueue_scripts', 'vietrick_remove_block_css', 100 );
    function vietrick_remove_block_css() {
     wp_dequeue_style( 'wp-block-library' ); // WordPress core
     wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
     wp_dequeue_style( 'wc-block-style' ); // WooCommerce Block
     wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
    }





?>