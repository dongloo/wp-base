<?php get_header(); ?>
<?php
$current_archive = get_queried_object();
$archive_url = get_term_link($current_archive);

$count = $GLOBALS['wp_query']->found_posts;



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
                            <?php
                                $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_video', true);
                                $ten_du_an = get_the_title($thuoc_du_an);                        
                                $link_youtube_video_chinh = get_post_meta(get_the_ID(), 'link_youtube_video_chinh', true);

                                if (strpos($link_youtube_video_chinh, "watch?v=") !== false) {
                                    $link_video_split = explode("watch?v=", $link_youtube_video_chinh);
                                } else {
                                    $link_video_split = explode("shorts", $link_youtube_video_chinh);
                                }
                                
                                $id_video = $link_video_split[1];
                                $hq_thumb = 'http://i3.ytimg.com/vi/' . $id_video . '/hqdefault.jpg';
                                $hd_thumb = 'http://i3.ytimg.com/vi/' . $id_video . '/maxresdefault.jpg';
                            ?>                        
                            <a data-video="<?php echo $link_youtube_video_chinh; ?>" href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary p-3 bg-white rounded-lg video-item-box border border-solid border-gray">
                                <div class="ratio-thumb ratio-3x2 rounded">
                                    <i class="icon-video-play"></i>
                                    <img src="<?php echo $hq_thumb; ?>" alt="<?php the_title(); ?>" class="ratio-media" loading="lazy">
                                </div>
                                <div class="flex flex-col gap-2 flex-1">
                                    <h3 class="col-start-2 col-end-4 flex-1 text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>
                                    <p class="mb-0 text-sm text-dark-secondary text-truncate-1"><?php echo $ten_du_an; ?></p>
                                </div>
                            </a>
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
    </section>
<?php get_footer() ?>