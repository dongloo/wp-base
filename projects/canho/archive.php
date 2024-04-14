<?php get_header(); ?>
<?php
$logo = get_field('logo', 'option');
$current_archive = get_queried_object();
$archive_url = get_term_link($current_archive);

?>


    <?php if (is_tag()) : ?>
        <?php
            $tag = get_queried_object();
            $tag_id = $tag->term_id;

            // Define an array of post types you want to include
            $post_types = array('du-an', 'dang-duoc-quan-tam', 'san-pham', 'video', 'post'); // Add more post types as needed

            $all_posts = array();

            foreach ($post_types as $post_type) {
                $args = array(
                    'post_type'      => $post_type,
                    'tag__in'        => array($tag_id),
                    'posts_per_page' => 6, // Adjust the number of posts per page as needed
                    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $all_posts[$post_type][] = $post;
                    }
                }

                wp_reset_postdata();
            }
        ?>


        <section class="page-filter pt-12 bg-gradient-secondary-top">
            <div class="container">
                <div class="flex flex-col gap-8">
                    <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative">Thẻ: <?php the_archive_title(); ?></h1>                 
                    <div class="dot-line-bg mt-4"></div>
                </div>
            </div>
        </section>
        <section class="py-12">
            <div class="container">
                <div class="grid grid-cols-1 gap-6 xl:gap-8">
                    <div class="flex flex-col gap-12">
                        <?php
                        foreach ($all_posts as $post_type => $posts) :
                            
                            // Count the number of posts for the current post type and tag
                            $count_args = array(
                                'post_type' => $post_type,
                                'tag__in'   => array($tag_id),
                                'posts_per_page' => -1,
                                //'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                            );
                            $count_query = new WP_Query($count_args);
                            $post_count = $count_query->found_posts;

                        ?>
                            <div class="flex flex-col gap-6 pb-6 border-0 border-b border-solid border-gray-light">
                                <h2 class="text-base lg:text-lg mb-0 font-semibold"><?php echo esc_html(get_post_type_object($post_type)->label); ?> <span class="badge badge-outline-gray"><?php echo $post_count; ?></span></h2>
                                <?php if($post_type == 'du-an') : ?>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xl:gap-8">
                                    <?php
                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            // Include the template part for the content
                                            get_template_part('template-parts/grid-post', null, array('post_type' => $post_type));
                                        }    
                                    ?>                                        
                                    </div>
                                <?php elseif($post_type == 'dang-duoc-quan-tam') : ?>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 home-landing-card-items">
                                    <?php
                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            // Include the template part for the content
                                            get_template_part('template-parts/grid-post', null, array('post_type' => $post_type));
                                        }    
                                    ?>                                        
                                    </div>
                                <?php elseif($post_type == 'san-pham') : ?>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 xl:gap-8">
                                    <?php
                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            // Include the template part for the content
                                            get_template_part('template-parts/grid-post', null, array('post_type' => $post_type));
                                        }    
                                    ?>                                        
                                    </div>
                                <?php elseif($post_type == 'video') : ?>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 home-landing-card-items">
                                    <?php
                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            // Include the template part for the content
                                            get_template_part('template-parts/grid-post', null, array('post_type' => $post_type));
                                        }    
                                    ?>
                                    </div>
                                <?php elseif($post_type == 'post') : ?>
                                    <div class="flex flex-col">
                                    <?php
                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            // Include the template part for the content
                                            get_template_part('template-parts/grid-post', null, array('post_type' => $post_type));
                                        }    
                                    ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
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
                        <?php
                            $archive_description = get_the_archive_description();
                            if(!empty($archive_description)):
                        ?>
                        <div class="flex flex-col gap-6 pt-6 border-0 border-t border-solid border-gray">
                            <h2 class="text-heading-sm font-semibold"><?php the_archive_title(); ?></h2>
                            <div class="flex flex-col gap-3">
                                <div class="read-more-area relative block w-full overflow-hidden" data-max-height="850" style="max-height: 850px;">
                                    <div class="read-more-area-content collection-content relative z-10 text-editor-content-detail">
                                        <?php echo $archive_description; ?>
                                    </div>
                                    <div class="read-more-area-actions text-center absolute z-20 w-full" style="display: none;">
                                        <button type="button" class="read-more-area-btn inline-flex items-center justify-center py-1 gap-2 border-0 cursor-pointer bg-white">
                                            <span class="text-sm text-link">
                                                <span class="read-more-area-more">Xem thêm</span>
                                                <span class="read-more-area-less">Thu gọn</span>
                                            </span>
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 9L12.5 16.5L5 9" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>                               
                    </div>
                </div>
            </div>
        </section>
    <?php else :?>
        <section class="page-filter pt-12 bg-gradient-secondary-top">
            <div class="container">
                <div class="flex flex-col gap-8">
                    <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative"><?php the_archive_title(); ?></h1>
                    <div class="flex flex-col gap-6">
                        <form class="filter-group" id="meta-filter-form" action="<?php echo esc_url($archive_url)?>" method="get">
                            <?php get_template_part('template-parts/filter-projects', null, array('meta' => 'thuoc-du-an')); ?>
                            <input type="submit" value="Áp dụng" class="hidden">
                        </form>
                    </div>                    
                    <div class="dot-line-bg mt-4"></div>
                </div>
            </div>
        </section>
        <section class="py-12">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 xl:gap-8">
                    <div class="md:col-start-1 md:col-end-4">
                        <div class="flex flex-col gap-12">
                            <?php if (have_posts()) : ?>
                                <div class="flex flex-col">
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'post')); ?>
                                    <?php endwhile; wp_reset_postdata();?>
                                </div>
                            <?php endif; ?>
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
                            <?php
                                $archive_description = get_the_archive_description();
                                if(!empty($archive_description)):
                            ?>
                            <div class="flex flex-col gap-6 pt-6 border-0 border-t border-solid border-gray">
                                <h2 class="text-heading-sm font-semibold"><?php the_archive_title(); ?></h2>
                                <div class="flex flex-col gap-3">
                                    <div class="read-more-area relative block w-full overflow-hidden" data-max-height="850" style="max-height: 850px;">
                                        <div class="read-more-area-content collection-content relative z-10 text-editor-content-detail">
                                            <?php echo $archive_description; ?>
                                        </div>
                                        <div class="read-more-area-actions text-center absolute z-20 w-full" style="display: none;">
                                            <button type="button" class="read-more-area-btn inline-flex items-center justify-center py-1 gap-2 border-0 cursor-pointer bg-white">
                                                <span class="text-sm text-link">
                                                    <span class="read-more-area-more">Xem thêm</span>
                                                    <span class="read-more-area-less">Thu gọn</span>
                                                </span>
                                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 9L12.5 16.5L5 9" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>                               
                        </div>
                    </div>
                    <?php get_template_part('template-parts/banner-sidebar', null, null); ?>
                </div>
            </div>
        </section>        
    <?php endif; ?>




<?php get_footer() ?>