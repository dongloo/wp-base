<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); setpostview(get_the_id()); ?>
    
    <section class="news-detail-page pb-8">
        <div class="container">
            <div class="news-detail-grid flex flex-col lg:grid gap-8">
                <div class="w-full flex-1 flex flex-col gap-8">
                    <div class="news-main flex flex-col gap-8">
                        <div class="flex flex-col gap-6">
                            <?php if (has_post_thumbnail( get_the_ID()) ): ?>
                                <div class="news-detail-thumb">
                                    <div class="ratio-thumb ratio-16x9 rounded overflow-hidden">
                                        <?php owlGetThumb(get_the_ID(),'large','ratio-media', true, '', false); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="flex flex-col gap-5">
                                <h1 class="text-heading-sm lg:text-heading-base font-bold">
                                    <?php the_title(); ?>
                                </h1>
                                <div class="flex items-center gap-6 flex-wrap">
                                    <div class="flex items-center gap-2">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2.75V5.75" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 2.75V5.75" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 9.84009H20.5" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 9.25V17.75C21 20.75 19.5 22.75 16 22.75H8C4.5 22.75 3 20.75 3 17.75V9.25C3 6.25 4.5 4.25 8 4.25H16C19.5 4.25 21 6.25 21 9.25Z" stroke="#262626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.6937 14.45H15.7027" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.6937 17.45H15.7027" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.9945 14.45H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.9945 17.45H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.29529 14.45H8.30427" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.29529 17.45H8.30427" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span><?php echo get_the_date('d/m/Y'); ?></span>
                                    </div>
                                    <div class="post-detail-cat-link flex items-center gap-2 text-title hover:text-link">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 11.75V17.75C22 21.75 21 22.75 17 22.75H7C3 22.75 2 21.75 2 17.75V7.75C2 3.75 3 2.75 7 2.75H8.5C10 2.75 10.33 3.19 10.9 3.95L12.4 5.95C12.78 6.45 13 6.75 14 6.75H17C21 6.75 22 7.75 22 11.75Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
                                        </svg>
                                        <?php the_category(', ') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article class="news-detail-content pb-6 text-editor-content-detail">
                            <?php the_content(); ?>
                        </article>
                    </div>
                    <div class="news-comments">
                        <div class="flex flex-col gap-6">
                            <div class="section-heading flex flex-col items-center pb-0 gap-6">
                                <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                                    Bình luận
                                </h2>
                                <div class="line w-full"></div>
                            </div>                            
                            <?php if (is_single ()) comments_template (); ?>
                        </div>
                    </div>
                    <div class="news-related">
                        <div class="flex flex-col gap-6">
                            <div class="section-heading flex flex-col items-center pb-0 gap-6">
                                <h2 class="mb-0 text-center text-heading-sm lg:text-heading-base font-bold">
                                    Tin tức khác
                                </h2>
                                <div class="line w-full"></div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <?php
                                    $categories = get_the_category(get_the_id());
                                    if ($categories)
                                    {
                                        $category_ids = array();
                                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                        $args=array(
                                            'category__in' 	=> $category_ids,
                                            'post__not_in' 	=> array(get_the_id()),
                                            'showposts'		=> 3,
                                        );
                                        $my_query = new wp_query($args);
                                        if( $my_query->have_posts() )
                                        {
                                            while ($my_query->have_posts())
                                            {
                                                $my_query->the_post();
                                                ?>
                                                    <div class="w-full">
                                                        <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-4x3 overflow-hidden rounded">
                                                            <?php owlGetThumb(get_the_id(),'thumbnail','ratio-media', false, get_the_title(), true); ?>
                                                        </a>
                                                        <div class="block p-4 w-full">
                                                            <a href="<?php the_permalink(); ?>" class="text-center text-truncate-2 text-sm text-title hover:text-link w-full block">
                                                                <?php the_title(); ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                <?php
                                            }
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="blog-sidebar-widget bg-white rounded">
                        <div class="blog-sidebar-widget-title text-lg font-bold p-4">
                            Chuyên mục
                        </div>                    
                        <ul class="list-unstyled">
                            <?php $args = array( 
                                'hide_empty' => 0,
                                'taxonomy' => 'category',
                                'orderby' => 'id',
                                ); 
                                $cates = get_categories( $args ); 
                                foreach ( $cates as $cate ) {  ?>
                                    <li>
                                        <a href="<?php echo get_term_link($cate->slug, 'category'); ?>" class="flex items-center gap-3 p-4 text-title hover:text-link">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 3.5L11 8.5L6 13.5" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                           
                                            <span><?php echo $cate->name ?></span>
                                        </a>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="blog-sidebar-widget bg-white blog-sidebar-new-post rounded sticky">
                        <div class="blog-sidebar-widget-title text-lg font-bold p-4">
                            Bài viết xem nhiều
                        </div>
                        <ul class="list-unstyled">
                            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="flex items-center gap-4 p-4 text-title hover:text-link">
                                        <div class="blog-sidebar-thumb">
                                            <div class="ratio-thumb ratio-1x1 overflow-hidden rounded">
                                                <?php owlGetThumb(get_the_id(),'thumbnail','ratio-media', false, get_the_title(), true); ?>
                                            </div>
                                        </div>                                  
                                        <p class="mb-0 flex-1 text-truncate-2">
                                            <?php the_title(); ?>
                                        </p>
                                    </a>                                    
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>    
<?php get_footer() ?>