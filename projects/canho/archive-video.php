<?php get_header(); ?>
<?php

$count = $GLOBALS['wp_query']->found_posts;

$post_type = get_post_type();
$archive_url = get_post_type_archive_link($post_type);



?>
    <section class="page-filter pt-12 bg-gradient-secondary-top">
        <div class="container">
            <div class="flex flex-col gap-8">
                <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative"><?php the_archive_title(); ?></h1>
                <div class="flex flex-col gap-6">
                    <form class="filter-group" id="meta-filter-form" action="<?php echo esc_url($archive_url)?>" method="get">
                        <?php get_template_part('template-parts/filter-projects', null, array('meta' => 'thuoc-du-an-video')); ?>
                        <input type="submit" value="Áp dụng" class="hidden">
                    </form>
                </div>
                <div class="dot-line-bg mt-4"></div>
            </div>
        </div>
    </section>
    <section class="py-8">
        <div class="container">
            <div class="flex flex-col gap-6">
                <div class="font-medium"><?php echo $count; ?> video</div>
                <?php if (have_posts()) : ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 home-landing-card-items">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'video')); ?>
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
            </div>
        </div>
    </section>
<?php get_footer() ?>