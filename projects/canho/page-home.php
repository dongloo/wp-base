<?php

/* Template Name: Trang chủ*/

?>

<?php get_header(); ?>



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); $deviceType = detectDevice(); ?>

    <section class="home-top py-10">

        <div class="container">

            <div class="home-top-grid grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 md:gap-8">

                <div class="home-top-featured order-first md:order-none md:col-start-2 md:col-end-4 xl:col-start-2 xl:col-end-5">

                    <!-- Get post News Query -->

                    <?php

                        $get_post_args = array(

                            'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                            'post_status' => 'publish',

                            //'showposts' => '10',

                            'tax_query' => array(

                                array(

                                    'taxonomy' => 'noi-bat', // Tên của taxonomy

                                    'field'    => 'slug',

                                    'terms'    => 'tin-noi-bat', // Giá trị của taxonomy

                                ),

                            ),

                            'posts_per_page' => 1, // Số bài viết bạn muốn hiển thị

                            //'offset' => 1,

                            'fields' => 'ids',

                            'update_post_meta_cache' => false,

                            'update_post_term_cache' => false,

                            'no_found_rows' => true

                        );

                        $get_post = new WP_Query($get_post_args);

                    ?>

                    

                    <?php if($get_post->have_posts()) : ?>

                        <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                        <div class="flex flex-col gap-4">

                            <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-3x2 xl:ratio-16x9 rounded">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'single-post-thumb', array('class' => 'ratio-media', 'alt' => substr(get_the_title(), 0, 35), 'data-no-lazy' => 'true', 'loading' => '' ) ); ?>
                            </a>

                            <h3 class="col-start-2 col-end-4">

                                <a href="<?php the_permalink(); ?>" class="text-dark hover:text-dark-secondary text-lg md:text-heading-sm font-semibold text-truncate-4 md:text-truncate-2"><?php the_title(); ?></span></a>

                            </h3>

                            <div class="hidden md:block">

                                <p class="mb-0 text-sm text-truncate-4"><?php echo get_the_excerpt(); ?></p>

                            </div>

                        </div>

                        <?php endwhile; wp_reset_postdata(); ?>

                    <?php endif; ?>

                    <!-- Get post News Query -->

                </div>
                <div class="home-top-blog flex flex-col md:gap-6 order-none md:order-first">

                    <!-- Get post News Query -->

                    <?php

                        $get_post_args = array(

                            'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                            'post_status' => 'publish',

                            //'showposts' => '10',

                            'tax_query' => array(

                                array(

                                    'taxonomy' => 'noi-bat', // Tên của taxonomy

                                    'field'    => 'slug',

                                    'terms'    => 'tin-noi-bat', // Giá trị của taxonomy

                                ),

                            ),

                            'posts_per_page' => 3, // Số bài viết bạn muốn hiển thị

                            'offset' => 1,

                            'fields' => 'ids',

                            'update_post_meta_cache' => false,

                            'update_post_term_cache' => false,

                            'no_found_rows' => true

                        );

                        $get_post = new WP_Query($get_post_args);

                    ?>

                    <?php if($get_post->have_posts()) : ?>

                        <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                            <a href="<?php the_permalink(); ?>" class="grid grid-cols-2 md:flex flex-col gap-6 md:gap-3 text-dark hover:text-dark-secondary items-start" title="<?php the_title(); ?>">

                                <div class="ratio-thumb ratio-3x2 md:ratio-16x9 rounded">
                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'medium', array('class' => 'ratio-media', 'alt' => substr(get_the_title(), 0, 35), 'data-no-lazy' => 'true', 'loading' => '' ) ); ?>

                                </div>

                                <h3 class="md:col-start-3 md:col-end-6 text-base md:text-sm font-semibold text-truncate-4 md:text-truncate-2"><?php the_title(); ?></h3>

                            </a>                        

                        <?php endwhile; wp_reset_postdata(); ?>

                    <?php endif; ?>

                    <!-- Get post News Query -->

                </div>

                <?php 

                    if($deviceType == "Desktop"):

                ?>

                    <?php $banner_top_home_page = get_field('banner_top_home_page', 'option'); ?>

                    <?php $banner_top_home_page_url = get_field('banner_top_home_page_url', 'option'); ?>

                    <?php $banner_top_home_page_title = get_field( 'banner_top_home_page_title', 'options' ); ?>

                    <?php if ($banner_top_home_page) : ?>

                        <a data-id="<?php echo $banner_top_home_page; ?>" href="<?php echo esc_url( $banner_top_home_page_url ); ?>" class="home-top-image hidden xl:block rounded-lg overflow-hidden" target="_blank" title="<?php echo $banner_top_home_page_title; ?>">

                            <?php echo wp_get_attachment_image( $banner_top_home_page, 'full', false, array( 'class' => 'rounded w-full h-auto', 'alt' => "Căn hộ Vinhomes", 'data-no-lazy' => 'true', 'loading' => '' ) ); ?>

                        </a>

                    <?php endif; ?>

                <?php endif; ?>

            </div>

        </div>

    </section>

    <section class="py-12 bg-secondary-20 overflow-hidden">

        <div class="container">

            <div class="flex mb-6 items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Dự án</h2>  

                <a href="<?php echo get_post_type_archive_link( 'du-an' ); ?>" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

        </div>

        <div class="container">

            <div class="projects-slider-outer">

                <div class="projects-slider">

                    <!-- Get post News Query -->

                    <?php

                        $get_post_args = array(

                            'post_type' => 'du-an', // Loại bài viết mà bạn muốn hiển thị

                            'post_status' => 'publish',

                            //'showposts' => '10',

                            'tax_query' => array(

                                array(

                                    'taxonomy' => 'du-an-noi-bat', // Tên của taxonomy

                                    'field'    => 'slug',

                                    'terms'    => 'du-an-noi-bat', // Giá trị của taxonomy

                                ),

                            ),

                            'posts_per_page' => 6, // Số bài viết bạn muốn hiển thị

                            //'offset' => 1,

                            'fields' => 'ids',

                            'no_found_rows' => true

                        );

                        $cache_key = 'du_an_noi_bat';

                        $posts = get_transient($cache_key);

                        if (false === $posts) {

                            $get_post = new WP_Query($get_post_args);

                            $posts = $get_post->posts;

                            set_transient($cache_key, $posts, 60*60*24);

                        }

                    ?>

                    <?php foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>


                    <?php 

                        if($deviceType == "Mobile"):

                    ?>
                        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'du-an','lazy_image' => 'true')); ?>
                    <?php else : ?>
                        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'du-an','lazy_image' => 'false')); ?>
                    <?php endif; ?>



                    <?php endforeach; wp_reset_postdata(); ?>

                    <!-- Get post News Query -->                    

                </div>

                <div class="cust-nav cust-nav-small">

                    <button type="button" class="cust-nav-item cust-nav-prev border-0 cursor-pointer" title="Trước">

                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <g clip-path="url(#clip0_112_2725)">

                            <path d="M20 27.06C19.8721 27.06 19.7482 27.0144 19.6469 26.9131L10.9536 18.2198C9.73549 17.0017 9.73549 14.9983 10.9536 13.7802L19.6469 5.08691C19.8383 4.89551 20.1617 4.89551 20.3531 5.08691C20.5445 5.27832 20.5445 5.60174 20.3531 5.79314L11.6598 14.4865C10.8245 15.3217 10.8245 16.6783 11.6598 17.5136L20.3531 26.2069C20.5426 26.3964 20.5445 26.7152 20.3589 26.9072C20.2427 27.0129 20.1111 27.06 20 27.06Z" stroke="white"></path>

                            </g>

                            <defs>

                            <clipPath id="clip0_112_2725">

                            <rect width="32" height="32" rx="16" fill="white"></rect>

                            </clipPath>

                            </defs>

                        </svg>

                    </button>

                    <button type="button" class="cust-nav-item cust-nav-next border-0 cursor-pointer" title="Sau">

                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <g clip-path="url(#clip0_112_2727)">

                            <path d="M12 27.06C12.1279 27.06 12.2518 27.0144 12.3531 26.9131L21.0465 18.2198C22.2645 17.0017 22.2645 14.9983 21.0465 13.7802L12.3531 5.08691C12.1617 4.89551 11.8383 4.89551 11.6469 5.08691C11.4555 5.27832 11.4555 5.60174 11.6469 5.79314L20.3402 14.4865C21.1755 15.3217 21.1755 16.6783 20.3402 17.5136L11.6469 26.2069C11.4574 26.3964 11.4555 26.7152 11.6411 26.9072C11.7573 27.0129 11.8889 27.06 12 27.06Z" stroke="white"></path>

                            </g>

                            <defs>

                            <clipPath id="clip0_112_2727">

                            <rect width="32" height="32" rx="16" transform="matrix(-1 0 0 1 32 0)" fill="white"></rect>

                            </clipPath>

                            </defs>

                        </svg>

                    </button>

                </div>                        

            </div>



        </div>



    </section>

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Đang được quan tâm</h2>

                <a href="<?php echo get_post_type_archive_link( 'dang-duoc-quan-tam' ); ?>" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 home-landing-card-items">

                <!-- Get post News Query -->

                <?php
                    $get_post_args = array(

                        'post_type' => 'dang-duoc-quan-tam', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'dang-duoc-quan-tam-noi-bat', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'dang-duoc-quan-tam-noi-bat', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 6, // Số bài viết bạn muốn hiển thị

                        //'offset' => 1,

                        'fields' => 'ids',

                        'no_found_rows' => true

                    );

                    $cache_key = 'dang_duoc_quan_tam';

                    $posts = get_transient($cache_key);

                    if (false === $posts) {

                        $get_post = new WP_Query($get_post_args);

                        $posts = $get_post->posts;

                        set_transient($cache_key, $posts, 60*60*24);

                    }

                ?>

                
                
                <?php $count_ddqt = 0; foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>

                    <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'dang-duoc-quan-tam')); ?>
                    <?php
                        $count_ddqt++;
                        if($deviceType == "Mobile" && $count_ddqt === 4){
                            break;
                        }
                    ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <!-- Get post News Query -->                

            </div>

        </div>

    </section>                       

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Sản phẩm</h2>

                <a href="<?php echo get_post_type_archive_link( 'san-pham' ); ?>" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php
                    $get_post_args = array(

                        'post_type' => 'san-pham', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'san-pham-noi-bat', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'san-pham-noi-bat', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 6, // Số bài viết bạn muốn hiển thị

                        //'offset' => 1,

                        'fields' => 'ids',

                        'no_found_rows' => true

                    );

                    $cache_key = 'san_pham';

                    $posts = get_transient($cache_key);

                    if (false === $posts) {

                        $get_post = new WP_Query($get_post_args);

                        $posts = $get_post->posts;

                        set_transient($cache_key, $posts, 60*60*24);

                    }

                ?>

                

                <?php $count_sp = 0; foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>

                <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'san-pham')); ?>
                    <?php
                        $count_sp++;
                        if($deviceType == "Mobile" && $count_sp === 4){
                            break;
                        }
                    ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <!-- Get post News Query -->                  

            </div>

        </div>

    </section>

    <section class="py-12 bg-gray">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Video</h2>

                <a href="<?php echo get_post_type_archive_link( 'video' ); ?>" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php
                    $get_post_args = array(

                        'post_type' => 'video', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'video-noi-bat', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'video-noi-bat', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 6, // Số bài viết bạn muốn hiển thị

                        //'offset' => 1,

                        'fields' => 'ids',

                        'no_found_rows' => true

                    );

                    $cache_key = 'home_list_video';

                    $posts = get_transient($cache_key);

                    if (false === $posts) {

                        $get_post = new WP_Query($get_post_args);

                        $posts = $get_post->posts;

                        set_transient($cache_key, $posts, 60*60*24);

                    }

                ?>

                

                <?php $count_video = 0; foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>

                    <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'video')); ?>
                    <?php
                        $count_video++;
                        if($deviceType == "Mobile" && $count_video === 4){
                            break;
                        }
                    ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <!-- Get post News Query -->

            </div>

        </div>

    </section>            

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Tin chuyển nhượng</h2>

                <a href="<?php echo bloginfo('url'); ?>/tin-tuc/chuyen-nhuong" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php

                    $get_post_args = array(

                        'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'tin-tuc', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'chuyen-nhuong', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 4, // Số bài viết bạn muốn hiển thị

                        'fields' => 'ids',

                        'update_post_meta_cache' => false,

                        'update_post_term_cache' => false,

                        'no_found_rows' => true

                    );

                    $get_post = new WP_Query($get_post_args);

                ?>

                

                <?php if($get_post->have_posts()) : ?>

                    <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                        <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary">

                            <div class="ratio-thumb ratio-3x2 rounded">

                                <?php owlGetPostThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>

                            </div>

                            <h3 class="text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

                        </a>                      

                    <?php endwhile; wp_reset_postdata(); ?>

                <?php endif; ?>

                <!-- Get post News Query -->

            </div>

        </div>

    </section>

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Tin cho thuê</h2>

                <a href="<?php echo bloginfo('url'); ?>/tin-tuc/cho-thue" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php

                    $get_post_args = array(

                        'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'tin-tuc', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'cho-thue', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 4, // Số bài viết bạn muốn hiển thị

                        'fields' => 'ids',

                        'update_post_meta_cache' => false,

                        'update_post_term_cache' => false,

                        'no_found_rows' => true

                    );

                    $get_post = new WP_Query($get_post_args);

                ?>

                

                <?php if($get_post->have_posts()) : ?>

                    <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                        <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary">

                            <div class="ratio-thumb ratio-3x2 rounded">

                                <?php owlGetPostThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>

                            </div>

                            <h3 class="text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

                        </a>                      

                    <?php endwhile; wp_reset_postdata(); ?>

                <?php endif; ?>

                <!-- Get post News Query -->

            </div>

        </div>

    </section>

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Tin tức chung</h2>

                <a href="<?php echo bloginfo('url'); ?>/tin-tuc/tin-tuc-chung" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>Xem thêm</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php

                    $get_post_args = array(

                        'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        //'showposts' => '10',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'tin-tuc', // Tên của taxonomy

                                'field'    => 'slug',

                                'terms'    => 'tin-tuc-chung', // Giá trị của taxonomy

                            ),

                        ),

                        'posts_per_page' => 4, // Số bài viết bạn muốn hiển thị

                        'fields' => 'ids',

                        'update_post_meta_cache' => false,

                        'update_post_term_cache' => false,

                        'no_found_rows' => true

                    );

                    $get_post = new WP_Query($get_post_args);

                ?>

                

                <?php if($get_post->have_posts()) : ?>

                    <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                        <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary">

                            <div class="ratio-thumb ratio-3x2 rounded">

                                <?php owlGetPostThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>

                            </div>

                            <h3 class="text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

                        </a>                      

                    <?php endwhile; wp_reset_postdata(); ?>

                <?php endif; ?>

                <!-- Get post News Query -->

            </div>

        </div>

    </section>            

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Other languages</h2>

                <a href="<?php echo bloginfo('url'); ?>/ngon-ngu/english-news" class="section-more-link underline-element inline-flex gap-2 items-center justify-center py-1 text-sm text-dark hover:text-dark-secondary">

                    <span>View more</span>

                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.0625H20.75" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M14 5.3125L20.75 12.0625L14 18.8125" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </a>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 xl:gap-8">

                <!-- Get post News Query -->

                <?php

                    $get_post_args = array(

                        'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                        'post_status' => 'publish',

                        'posts_per_page' => 4, // Số bài viết bạn muốn hiển thị

                        'meta_query'     => array(

                            'relation' => 'AND',

                            array(

                                'key'     => 'loai_ngon_ngu', // Replace 'your_meta_key' with your actual meta key

                                'value'   => '2139', // Replace 'AB' with the value you want to exclude

                                'compare' => '!=', // Use '!=' to exclude posts with the specified value

                            ),

                        ),

                        'fields' => 'ids',

                        'update_post_meta_cache' => false,

                        'update_post_term_cache' => false,

                        'no_found_rows' => true

                    );

                    $cache_key = 'home_list_language';

                    $posts = get_transient($cache_key);

                    if (false === $posts) {

                        $get_post = new WP_Query($get_post_args);

                        $posts = $get_post->posts;

                        set_transient($cache_key, $posts, 60*60*24);

                    }

                ?>

                

                <?php foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>

                    <?php

                        $loai_ngon_ngu = get_post_meta(get_the_ID(), 'loai_ngon_ngu', true);

                        $ten_ngon_ngu = get_term($loai_ngon_ngu)

                    ?>

                    <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary">

                        <div class="ratio-thumb ratio-3x2 rounded">

                            <?php owlGetPostThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>

                        </div>

                        <h3 class="text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

                        <p class="mb-0 text-sm text-dark-secondary text-truncate-1">

                            <?php echo $ten_ngon_ngu->name; ?>

                        </p>

                    </a>

                <?php endforeach; wp_reset_postdata(); ?>

                <!-- Get post News Query -->    

            </div>

        </div>

    </section>

    <section class="py-12">

        <div class="container">

            <div class="mb-6 flex items-center justify-between gap-4">

                <h2 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative flex-1">Tin tức xem nhiều</h2>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 xl:gap-8">

                <div class="flex flex-col md:col-start-1 md:col-end-4">

                    <!-- Get post News Query -->

                    <?php
                        $get_post_args = array(

                            'post_type' => 'post', // Loại bài viết mà bạn muốn hiển thị

                            'post_status' => 'publish',

                            'posts_per_page' => 8, // Số bài viết bạn muốn hiển thị

                            'meta_key' => 'views',

                            'orderby' => 'meta_value_num',

                            'fields' => 'ids',

                            'update_post_meta_cache' => false,

                            'update_post_term_cache' => false,

                            'no_found_rows' => true

                        );

                        $cache_key = 'home_list_most_viewed';

                        $posts = get_transient($cache_key);

                        if (false === $posts) {

                            $get_post = new WP_Query($get_post_args);

                            $posts = $get_post->posts;

                            set_transient($cache_key, $posts, 60*60*24);

                        }

                    ?>

                    

                    <?php $count_most_view = 0; foreach ($posts as $post_id) : $post = get_post($post_id); setup_postdata($post); ?>

                        <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'post')); ?>
                        <?php
                            $count_most_view++;
                            if($deviceType == "Mobile" && $count_most_view === 4){
                                break;
                            }
                        ?>
                    <?php endforeach; wp_reset_postdata(); ?>

                    <!-- Get post News Query -->

                </div>

                <?php get_template_part('template-parts/banner-sidebar', null, null); ?>

            </div>

        </div>

    </section>

    <div class="container">

        <div class="flex justify-end py-6">

            <?php echo kk_star_ratings(); ?>

        </div>

    </div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>