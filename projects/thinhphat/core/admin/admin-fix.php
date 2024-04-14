<?php

    require_once dirname( __FILE__ ) . '/disable-updates.php';

    add_filter('show_admin_bar', '__return_false');

    function remove_admin_bar_links() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');          /** Remove the WordPress logo **/
        $wp_admin_bar->remove_menu('about');            /** Remove the about WordPress link **/
        $wp_admin_bar->remove_menu('wporg');            /** Remove the WordPress.org link **/
        $wp_admin_bar->remove_menu('documentation');    /** Remove the WordPress documentation link **/
        $wp_admin_bar->remove_menu('support-forums');   /** Remove the support forums link **/
        $wp_admin_bar->remove_menu('feedback');         /** Remove the feedback link **/
        //$wp_admin_bar->remove_menu('site-name');      /** Remove the site name menu **/
        //$wp_admin_bar->remove_menu('view-site');      /** Remove the view site link **/
        $wp_admin_bar->remove_menu('wpseo-menu');       /** Remove the view site link **/
        $wp_admin_bar->remove_menu('updates');          /** Remove the updates link **/
        $wp_admin_bar->remove_menu('comments');         /** Remove the comments link **/
        $wp_admin_bar->remove_menu('new-content');      /** Remove the content link **/
        $wp_admin_bar->remove_menu('wpforms-menu');    


        
        //$wp_admin_bar->remove_menu('my-account');     /** Remove the user details tab **/
    }
    add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );




    add_action('admin_init', 'rw_remove_dashboard_widgets');
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
    add_action('admin_init', 'disable_all_plugin_notices');




	add_action( 'admin_menu', 'my_remove_menus', 12 );
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
                // print('<pre>');
                // print_r($menu);
                // print('<pre>');
        
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
	    <p>Mọi yêu cầu, hỗ trợ quý khách hàng có thể liên hệ:</p>
	    <p><strong>Điện thoại</strong>: 0333.886.993</p> 
	    <p><strong>Email</strong>: minhkidong@gmail.com</p> 
	    <p>Cảm ơn quý khách đã tin tưởng và sử dụng sản phẩm của Dong Loo.</p>
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
        return 'Đồng hồ Thịnh Phát';
    }
    add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );







    /**
     * @snippet  Duplicate posts and pages without plugins
     * @author   Misha Rudrastyh
     * @url      https://rudrastyh.com/wordpress/duplicate-post.html
     */

    // Add the duplicate link to action list for post_row_actions
    // for "post" and custom post types
    add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
    // for "page" post type
    add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);


    function rd_duplicate_post_link($actions, $post)
    {

        if (!current_user_can('edit_posts')) {
            return $actions;
        }

        $url = wp_nonce_url(
            add_query_arg(
                array(
                    'action' => 'rd_duplicate_post_as_draft',
                    'post' => $post->ID,
                ),
                'admin.php'
            ),
            basename(__FILE__),
            'duplicate_nonce'
        );

        $actions['duplicate'] = '<a href="' . $url . '" title="Nhân bản" rel="permalink">Nhân bản</a>';

        return $actions;
    }

    /*
    * Function creates post duplicate as a draft and redirects then to the edit post screen
    */
    add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');

    function rd_duplicate_post_as_draft()
    {

        // check if post ID has been provided and action
        if (empty($_GET['post'])) {
            wp_die('No post to duplicate has been provided!');
        }

        // Nonce verification
        if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__))) {
            return;
        }

        // Get the original post id
        $post_id = absint($_GET['post']);

        // And all the original post data then
        $post = get_post($post_id);

        /*
        * if you don't want current user to be the new post author,
        * then change next couple of lines to this: $new_post_author = $post->post_author;
        */
        $current_user = wp_get_current_user();
        $new_post_author = $current_user->ID;

        // if post data exists (I am sure it is, but just in a case), create the post duplicate
        if ($post) {

            // new post data array
            $args = array(
                'comment_status' => $post->comment_status,
                'ping_status' => $post->ping_status,
                'post_author' => $new_post_author,
                'post_content' => $post->post_content,
                'post_excerpt' => $post->post_excerpt,
                'post_name' => $post->post_name,
                'post_parent' => $post->post_parent,
                'post_password' => $post->post_password,
                'post_status' => 'draft',
                'post_title' => $post->post_title,
                'post_type' => $post->post_type,
                'to_ping' => $post->to_ping,
                'menu_order' => $post->menu_order
            );

            // insert the post by wp_insert_post() function
            $new_post_id = wp_insert_post($args);

            /*
            * get all current post terms ad set them to the new post draft
            */
            $taxonomies = get_object_taxonomies(get_post_type($post)); // returns array of taxonomy names for post type, ex array("category", "post_tag");
            if ($taxonomies) {
                foreach ($taxonomies as $taxonomy) {
                    $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
                    wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
                }
            }

            // duplicate all post meta
            $post_meta = get_post_meta($post_id);
            if ($post_meta) {

                foreach ($post_meta as $meta_key => $meta_values) {

                    if ('_wp_old_slug' == $meta_key) { // do nothing for this meta key
                        continue;
                    }

                    foreach ($meta_values as $meta_value) {
                        add_post_meta($new_post_id, $meta_key, $meta_value);
                    }
                }
            }

            // finally, redirect to the edit post screen for the new draft
            // wp_safe_redirect(
            // 	add_query_arg(
            // 		array(
            // 			'action' => 'edit',
            // 			'post' => $new_post_id
            // 		),
            // 		admin_url( 'post.php' )
            // 	)
            // );
            // exit;
            // or we can redirect to all posts with a message
            wp_safe_redirect(
                add_query_arg(
                    array(
                        'post_type' => ('post' !== get_post_type($post) ? get_post_type($post) : false),
                        'saved' => 'post_duplication_created' // just a custom slug here
                    ),
                    admin_url('edit.php')
                )
            );
            exit;

        } else {
            wp_die('Post creation failed, could not find original post.');
        }

    }

    /*
    * In case we decided to add admin notices
    */
    add_action('admin_notices', 'rudr_duplication_admin_notice');

    function rudr_duplication_admin_notice()
    {

        // Get the current screen
        $screen = get_current_screen();

        if ('edit' !== $screen->base) {
            return;
        }

        //Checks if settings updated
        if (isset($_GET['saved']) && 'post_duplication_created' == $_GET['saved']) {

            echo '<div class="notice notice-success is-dismissible"><p>Post copy created.</p></div>';

        }
    }



    //THÊM CHỨC NĂNG CHỈNH SỬA NHANH ẢNH ĐẠI DIỆN
    add_action('after_setup_theme', function () {
        add_theme_support('post-thumbnails');
    });
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
                <div class="owl-admin-custom-post-thumb"><img data-id="-1" src="../wp-content/themes/thinhphat/core/admin/images/woocommerce-placeholder.png" /></div>
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
                    Ảnh đại diện<br>
                    - Kích thước ảnh tiêu chuẩn (780x445px), chiều rộng không quá 780px<br>
                    - Dung lượng ảnh khuyến khích dưới 100kb<br>
                    - Khuyến khích dùng ảnh jpg để tối ưu dung lượng ảnh
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
        if(get_post_type() === 'page' or get_post_type() === 'post') {
            if(get_post_type() === 'page'){
                $contentType = 'nội dung trang';
            }else{
                $contentType = 'nội dung bài viết';
            }
            
            $help_text = '<p>- Kích thước ảnh tiêu chuẩn (780x445px), chiều rộng không quá 780px<br>
            - Dung lượng ảnh khuyến khích dưới 100kb<br>
            - Khuyến khích dùng ảnh jpg để tối ưu dung lượng ảnh<br>
            ----<br>
            <span style="color: red">- Chiều rộng ảnh trong ' . $contentType . ' khuyến khích không dài quá 780px</span></p>';
        }
        else if(get_post_type() === 'product'){
            $help_text = '<p>- Kích thước ảnh sản phẩm tiêu chuẩn (750x750px), chiều rộng không quá 750px<br>
            - Dung lượng ảnh sản phẩm khuyến khích dưới 100kb<br>
            - Khuyến khích dùng ảnh jpg để tối ưu dung lượng ảnh<br>
            <span style="color: red">- Áp dụng tương tự đối với "Album hình ảnh sản phẩm" bên dưới</span><br>
            ----<br>
            <span style="color: red">- Chiều rộng ảnh trong "Mô tả sản phẩm" khuyến khích không dài quá 780px</span></p>';
        }
        else{
            $help_text = '';
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
                // Set image Title to sanitized title
                'post_excerpt' => $my_image_title,
                // Set image Caption (Excerpt)
                'post_content' => $my_image_title, // Set image Description (Content)
            );

            // Set the image Alt-Text
            update_post_meta($post_ID, '_wp_attachment_image_alt', $my_image_title);

            // Set the image meta (e.g. Title, Excerpt, Content)
            wp_update_post($my_image_meta);

        }
    }




?>