<?php get_header(); ?>
<section class="payment-success-page py-8">
    <div class="container">
        <h1 class="text-center text-heading-base font-bold mb-10"><?php single_cat_title(); ?></h1>
        <div class="flex flex-col gap-6">
            <?php if (have_posts()) : ?>
                <div class="news-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-8">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="w-full">
                        <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-4x3 overflow-hidden rounded">
                            <?php owlGetThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), false ); ?>
                        </a>
                        <h3 class="block p-4 w-full mb-0 font-normal text-sm">
                            <a href="<?php the_permalink(); ?>" class="text-center text-truncate-2 text-sm text-title hover:text-link w-full block">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </div>
                    <?php endwhile; ?>
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
        </div>
    </div>
</section>
<?php get_footer() ?>