<?php get_header(); ?>

<?php

$logo = get_field('logo', 'option');



$count = $GLOBALS['wp_query']->found_posts;



$post_type = get_post_type();

$archive_url = get_post_type_archive_link($post_type);







?>

    <section class="project-page-header py-6 relative overflow-hidden">

        <div class="container py-4 relative z-30">

            <div class="py-6 sm:py-10 md:py-14 lg:py-18">

                <h1 class="text-heading-sm md:text-heading-base mb-0 font-semibold relative text-white flex items-center gap-3">

                    <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M1 23.5L8 0.5H13.5L6 23.5H1Z" stroke="white"/>

                    </svg>                                

                    <span>Các dự án Vinhomes</span>

                </h1>

            </div>

        </div>     

        <img src="<?php bloginfo('template_directory') ?>/assets/app/images/project-page-header-bg-1.jpg" alt="Các dự án Vinhomes" class="absolute z-10 project-page-header-img">

    </section>

    <?php

        $meta_key = 'vi_tri_du_an';

        $unique_custom_field_values = array();

        $args_vi_tri = array(

            'post_type' => $post_type,
            'post_status' => 'publish',
            'posts_per_page' => -1, // Retrieve all posts
            'order'          => 'ASC',
            'fields'         => 'ids'

        );

        //$custom_query = new WP_Query($args);



        $cache_key = 'vi_tri_du_an_cache_key';

        $vitri_posts = get_transient($cache_key);

        if (false === $vitri_posts) {

            $custom_query = new WP_Query($args_vi_tri);

            $vitri_posts = $custom_query->posts;

            set_transient($cache_key, $vitri_posts, 60*60*48);

        }







        //if ($custom_query->have_posts()) {

            foreach ($vitri_posts as $post){

                setup_postdata($post);

                $custom_field_value = get_post_meta($post, $meta_key, true);

                if (!empty($custom_field_value) && !in_array($custom_field_value, $unique_custom_field_values)) {

                    $unique_custom_field_values[] = $custom_field_value;

                }

            }

            wp_reset_postdata();

        //}

    ?>    

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

                            <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'du-an')); ?>

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

            </div>

        </div>

    </section>

<?php get_footer() ?>