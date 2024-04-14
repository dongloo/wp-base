<?php
function vh_post_shortcode($atts) {
    // Thiết lập các giá trị mặc định và lấy các thuộc tính từ shortcode
    $atts = shortcode_atts(array(
        'ids' => '', // Id của bài viết
        'du_an' => '',
        'loai_tin' => '', // Meta key để lọc theo loại sản phẩm
        'limit' => '', // Giới hạn số lượng bài viết, -1 là hiển thị tất cả
    ), $atts);


    ob_start(); // Bắt đầu bộ đệm đầu ra

    // Lấy danh sách các ID bài viết nếu được cung cấp trong shortcode
    

    $limit = 3;
    if(!empty($atts['limit'])){
        $limit = $atts['limit'];
    }



    // Nếu không có ID bài viết được cung cấp, lấy danh sách từ meta key "thuoc_du_an"
    if (empty($atts['ids'])) {
        if (!empty($atts['loai_tin'])) {
            $loai_tin = '';
            if($atts['loai_tin'] == 'tin-tuc-chung'){
                $loai_tin = 2151;
            }else if($atts['loai_tin'] == 'tin-chuyen-nhuong'){
                $loai_tin = 2152;
            }else{
                $loai_tin = 2157;
            }
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $limit,
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'thuoc_du_an',
                        'value' => $atts['du_an'],
                        'compare' => '=',
                    ),
                ),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tin-tuc',
                        'field' => 'term_id',
                        'terms' => $loai_tin,
                    ),
                ),
            );     
        }else{
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $limit,
                'meta_query'     => array(
                    array(
                        'key'   => 'thuoc_du_an',
                        'value' => $atts['du_an'],
                    ),
                ),
            );
        }


    } else {
        $post_ids = explode(',', $atts['ids']);
        // Nếu có ID bài viết được cung cấp, lọc theo danh sách ID đó
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post__in' => $post_ids,
        );
    }


  

    // Thực hiện truy vấn để lấy danh sách bài viết
    $posts_query = new WP_Query($args);

    // Hiển thị danh sách bài viết
    
    

    if ($posts_query->have_posts()) :
    ?>
        <div class="vh_shortcode">
        <?php while ($posts_query->have_posts()) : $posts_query->the_post(); setup_postdata($post);?>
        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'post')); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>


<?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
add_shortcode('vh_post', 'vh_post_shortcode');



