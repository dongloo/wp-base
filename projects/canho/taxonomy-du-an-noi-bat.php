<?php get_header(); ?>

<?php

$logo = get_field('logo', 'option');

$current_archive = get_queried_object();

$archive_url = get_term_link($current_archive);



$count = $GLOBALS['wp_query']->found_posts;







?>

    <section class="project-page-header py-6 relative overflow-hidden">

        <div class="container py-4 relative z-30">

            <div class="py-6 sm:py-10 md:py-14 lg:py-18">

                <h1 class="text-heading-sm md:text-heading-base mb-0 font-semibold relative text-white flex items-center gap-3">

                    <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M1 23.5L8 0.5H13.5L6 23.5H1Z" stroke="white"/>

                    </svg>                                

                    <span>Các dự án Vinhomes nổi bật</span>

                </h1>

            </div>

        </div>

        <img src="<?php bloginfo('template_directory') ?>/assets/app/images/project-page-header-bg-1.jpg" alt="Các dự án Vinhomes nổi bật" class="absolute z-10 project-page-header-img">

    </section>

    <?php

        $meta_key = 'vi_tri_du_an';

        $unique_custom_field_values = array();

        $args_vi_tri = array(

            'post_type' => 'du-an',
            'post_status' => 'publish',
            'posts_per_page' => -1, // Retrieve all posts
            'meta_query'     => array(
                array(

                    'key'     => 'du-an-noi-bat',
                    'value' => '1',
                    'compare' => 'LIKE',
                )
            ),
            'order'          => 'ASC',
            'fields'         => 'ids'

        );

        $cache_key = 'vi_tri_du_an_noi_bat_cache_key';

        $vitri_posts = get_transient($cache_key);

        if (false === $vitri_posts) {

            $custom_query = new WP_Query($args_vi_tri);

            $vitri_posts = $custom_query->posts;

            set_transient($cache_key, $vitri_posts, 60*60*48);

        }

    ?>
    <?php foreach ($vitri_posts as $post) :

        setup_postdata($post);

        $custom_field_value = get_post_meta($post, $meta_key, true);  
    ?>

                <?php
                    if (!empty($custom_field_value) && !in_array($custom_field_value, $unique_custom_field_values)) {

                        $unique_custom_field_values[] = $custom_field_value;

                    }
                ?>
                <?php  //echo '<h2>' . get_the_title() . '</h2>'; ?>
                
    <?php endforeach; wp_reset_postdata(); ?>

        

         

    <?php if (!empty($unique_custom_field_values)) : ?>

    <section class="page-filter pt-8 bg-gray">

        <div class="container">

            <div class="flex flex-col gap-8">

                <div class="flex flex-col gap-6">

                    <div class="filter-group">

                        <div class="filter-group-title mb-3 text-base font-medium">Vị trí</div>

                        <form id="meta-filter-form" action="<?php echo esc_url($archive_url)?>" method="get">

                            <div class="filter-group-items grid grid-cols-2 md:grid-cols-4 gap-3">

                                <button class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((!isset($_GET["vi-tri-du-an"]))):?>active<?php endif; ?>">

                                    <input type="radio" name="" value="" <?php if((!isset($_GET["vi-tri-du-an"]))):?>checked<?php endif; ?> class="reset-url-param" data-param="vi-tri-du-an">

                                    <div class="px-4 py-3 rounded-lg overflow-hidden bg-white flex flex-col gap-2 items-center">

                                        <span class="text-center text-sm text-truncate-1 text-dark">Tất cả</span>

                                    </div>

                                </button>

             

                                <?php foreach ($unique_custom_field_values as $value) : ?>

                                    <button class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((isset($_GET["vi-tri-du-an"]) && $value == $_GET["vi-tri-du-an"])):?>active<?php endif; ?>">

                                        <input type="radio" name="vi-tri-du-an" value="<?php echo $value; ?>" <?php if((isset($_GET["vi-tri-du-an"]) && $value == $_GET["vi-tri-du-an"])):?>checked<?php endif; ?>>

                                        <div class="px-4 py-3 rounded-lg overflow-hidden bg-white flex flex-col gap-2 items-center">

                                            <span class="text-center text-sm text-truncate-1 text-dark"><?php echo $value; ?></span>

                                        </div>

                                    </button>

                                <?php endforeach; ?>

                            </div>

                            <input type="submit" value="Áp dụng" class="hidden">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php endif; ?>

    <section class="py-8 bg-gray">

        <div class="container">

            <div class="flex flex-col gap-6">

                <div class="font-medium"><?php echo $count; ?> dự án</div>

                <?php if (have_posts()) : ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xl:gap-8">

                        <?php while (have_posts()) : the_post(); ?>

                            <?php

                                $vi_tri = get_post_meta(get_the_ID(), 'vi_tri_du_an', true);

                                $logo_du_an = get_post_meta(get_the_ID(), 'logo_du_an', true);

                            ?>

                            <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 p-3 bg-white rounded-xl project-item-box">

                                <div class="ratio-thumb ratio-3x2 rounded-lg">

                                    <?php owlGetPostThumb(get_the_ID(),'large','ratio-media', false, get_the_title(), true); ?>

                                </div>

                                <div class="flex justify-between items-center gap-4">

                                    <div class="flex flex-col gap-1 flex-1">

                                        <h3 class="text-dark hover:text-dark-secondary text-base lg:text-lg font-semibold text-truncate-1 flex-1"><?php the_title(); ?></h3>

                                        <p class="mb-0 text-dark-secondary text-sm"><?php echo $vi_tri; ?></p>

                                    </div>

                                    <?php owlGetAttImage($logo_du_an, 'thumb', 'list-project-logo', false, 'Logo dự án ' . get_the_title(), true); ?>

                                </div>

                            </a>

                        <?php endwhile; wp_reset_postdata();?>

                    </div>

                <?php endif; ?>

                <?php if(paginate_links()!='') {?>

                    <div class="flex justify-center mt-4">

                        <div class="bg-white custom-page-nav px-4 rounded-lg">                      

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

                        </div>

                    </div>

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

    </section>

<?php get_footer() ?>