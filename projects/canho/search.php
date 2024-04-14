<?php get_header(); ?>
    <?php 
        $search_query = get_search_query();
    ?>
    <?php if(!empty($search_query)) :?>
        <?php if (have_posts()) :
            $result_count = $wp_query->found_posts;
        ?>
            <section class="page-filter pt-12 bg-gradient-secondary-top">
                <div class="container">
                    <div class="flex flex-col gap-8">
                        <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative">Có <?php echo $result_count; ?> kết quả tìm kiếm cho từ khóa: <?php echo $search_query; ?></h1>                 
                        <div class="dot-line-bg mt-4"></div>
                    </div>
                </div>
            </section>
            <section class="py-12">
                <div class="container">
                    <div class="grid grid-cols-1 gap-6 xl:gap-8">
                        <div class="flex flex-col gap-12">
                            <?php

                                $all_posts = array();

                                while (have_posts()) {
                                    the_post();
                    
                                    // Get the post type
                                    $post_type = get_post_type();
                    
                                    $all_posts[$post_type][] = $post; 

                                }
                                wp_reset_postdata();
                            ?>
                            <?php foreach ($all_posts  as $post_type => $posts) : ?>
                                <div class="flex flex-col gap-6 pb-6 border-0 border-b border-solid border-gray-light">
                                    <h2 class="text-base lg:text-lg mb-0 font-semibold"><?php echo esc_html(get_post_type_object($post_type)->label); ?></h2>
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
                                    <?php else : ?>
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
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>  
            <section class="page-filter py-12">
                <div class="container">
                    <div class="flex flex-col gap-8">
                        <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative">Không có kết quả phù hợp với từ khóa: <?php echo $search_query; ?></h1>                 
                    </div>
                </div>
            </section>                       
        <?php endif; ?>
    <?php else: ?>
        <section class="page-filter py-12">
            <div class="container">
                <div class="flex flex-col gap-8">
                    <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative">Không có kết quả phù hợp với từ khóa: <?php echo $search_query; ?></h1>                 
                    <div class="dot-line-bg mt-4"></div>
                </div>
            </div>
        </section> 
    <?php endif; ?>
<?php get_footer() ?>