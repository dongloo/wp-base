<?php
function vh_product_shortcode($atts) {
    // Thiết lập các giá trị mặc định và lấy các thuộc tính từ shortcode
    $atts = shortcode_atts(array(
        'ids' => '', // Id của bài viết
        'max_cols' => '', // Số cột
        'du_an' => '',
        'loai_san_pham' => '', // Meta key để lọc theo loại sản phẩm
        'limit' => '', // Giới hạn số lượng bài viết, -1 là hiển thị tất cả
    ), $atts);


    ob_start(); // Bắt đầu bộ đệm đầu ra

    // Lấy danh sách các ID bài viết nếu được cung cấp trong shortcode
    

    $max_cols = 3;
    if(!empty($atts['max_cols'])){
        $max_cols = $atts['max_cols'];
    }
    $limit = 3;
    if(!empty($atts['limit'])){
        $limit = $atts['limit'];
    }



    // Nếu không có ID bài viết được cung cấp, lấy danh sách từ meta key "thuoc_du_an"
    if (empty($atts['ids'])) {
        if (!empty($atts['loai_san_pham'])) {
            $loai_sp = '';
            if($atts['loai_san_pham'] == 'cho-thue'){
                $loai_sp = 'Sản phẩm cho thuê';
            }else{
                $loai_sp = 'Sản phẩm chuyển nhượng';
            }
            $args = array(
                'post_type' => 'san-pham',
                'post_status' => 'publish',
                'posts_per_page' => $limit,
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'thuoc_du_an_san_pham',
                        'value' => $atts['du_an'],
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'loai_san_pham',
                        'value' => $loai_sp,
                        'compare' => '=',
                    ),
                ),
            );     
        }else{
            $args = array(
                'post_type' => 'san-pham',
                'post_status' => 'publish',
                'posts_per_page' => $limit,
                'meta_query'     => array(
                    array(
                        'key'   => 'thuoc_du_an_san_pham',
                        'value' => $atts['du_an'],
                    ),
                ),
            );
        }


    } else {
        $post_ids = explode(',', $atts['ids']);
        // Nếu có ID bài viết được cung cấp, lọc theo danh sách ID đó
        $args = array(
            'post_type' => 'san-pham',
            'post_status' => 'publish',
            'post__in' => $post_ids,
        );
    }


  

    // Thực hiện truy vấn để lấy danh sách bài viết
    $posts_query = new WP_Query($args);

    // Hiển thị danh sách bài viết
    
    

    if ($posts_query->have_posts()) :
    ?>
        <div class="vh_shortcode grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-<?php echo $max_cols; ?> gap-4">
        <?php while ($posts_query->have_posts()) : $posts_query->the_post(); setup_postdata($post);?>
        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'san-pham')); ?>           
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>


<?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
add_shortcode('vh_product', 'vh_product_shortcode');



