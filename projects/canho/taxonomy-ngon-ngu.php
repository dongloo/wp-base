<?php get_header(); ?>
<?php
$logo = get_field('logo', 'option');
$current_archive = get_queried_object();
$archive_url = get_term_link($current_archive);

?>
    <section class="page-filter pt-12 bg-gradient-secondary-top">
        <div class="container">
            <div class="flex flex-col gap-8">
                <h1 class="text-heading-sm lg:text-heading-base mb-0 font-semibold line-red pl-4 lg:pl-5 relative"><?php the_archive_title(); ?></h1>
                <div class="flex flex-col gap-6">
                    <div class="filter-group">
                        <div class="filter-group-title mb-3 text-base font-medium">Languages</div>
                        <div class="filter-group-items grid grid-cols-2 md:grid-cols-3 gap-3">
                            <?php
                            $taxonomy = 'ngon-ngu'; // Replace with the name of your taxonomy

                            $terms = get_terms(array(
                                'taxonomy' => $taxonomy,
                                'hide_empty' => true, // Set to true to hide empty terms
                                'parent' => 0, 
                            ));
                            ?>
                        
                            <?php if (!empty($terms)) : ?>
                                <?php foreach ($terms as $term) : ?>
                                    <?php if($term->slug != 'tieng-viet') :
                                        if (is_tax('ngon-ngu', $term->slug)){
                                            $active_class = 'active';
                                        }else{
                                            $active_class = '';
                                        }
                                        $term_link = get_term_link($term, 'ngon-ngu');
                                        $nation_flag = get_term_meta($term->term_id, 'language_flag', true);                                        
                                    ?>
                                        <a href="<?php echo $term_link; ?>" class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php echo $active_class; ?>">
                                            <div class="px-4 py-3 rounded-lg overflow-hidden bg-white flex gap-3 items-center">
                                                <?php owlGetAttImage($nation_flag, 'thumb', 'filter-group-item-img', false, $term->name , true); ?>
                                                <span class="text-left text-sm text-truncate-1 text-dark-secondary flex-1"><?php echo $term->name; ?></span>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
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
                                                <span class="read-more-area-more">Show more</span>
                                                <span class="read-more-area-less">Show less</span>
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
<?php get_footer() ?>