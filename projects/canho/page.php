<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="py-8">
            <div class="container">
                <div class="page-no-sidebar">
                    <div class="w-full flex flex-col gap-12">
                        <div class="news-main flex flex-col gap-8">
                            <div class="flex flex-col gap-8">
                                <div class="flex flex-col gap-4">
                                    <h1 class="text-heading-sm lg:text-heading-base font-bold">
                                        <?php the_title(); ?>
                                    </h1>
                                    <div class="flex items-center gap-6 flex-wrap">
                                        <div class="flex items-center gap-2">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 2.75V5.75" stroke="rgba(38, 38, 38, 0.60)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M16 2.75V5.75" stroke="rgba(38, 38, 38, 0.60)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3.5 9.84009H20.5" stroke="rgba(38, 38, 38, 0.60)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M21 9.25V17.75C21 20.75 19.5 22.75 16 22.75H8C4.5 22.75 3 20.75 3 17.75V9.25C3 6.25 4.5 4.25 8 4.25H16C19.5 4.25 21 6.25 21 9.25Z"
                                                    stroke="rgba(38, 38, 38, 0.60)"
                                                    stroke-width="1.5"
                                                    stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path d="M15.6937 14.45H15.7027" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15.6937 17.45H15.7027" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.9945 14.45H12.0035" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.9945 17.45H12.0035" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.29529 14.45H8.30427" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.29529 17.45H8.30427" stroke="rgba(38, 38, 38, 0.60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <time class="entry-date published" datetime="<?php echo get_the_date('d/m/Y'); ?>"><?php echo get_the_date('d/m/Y'); ?></time>
                                        </div>
                                    </div>
                                </div>
                                <?php if (has_post_thumbnail( get_the_ID()) ): ?>
                                <div class="news-detail-thumb">
                                    <div class="ratio-thumb ratio-16x9 rounded overflow-hidden">
                                        <?php
                                            owlGetPostThumb(get_the_ID(),'single-post-thumb','ratio-media', true, '', false);
                                        ?>
                                    </div>
                                </div>
                                <?php endif; ?>                                   
                            </div>
                            <article class="news-detail-content pb-4 text-editor-content-detail">
                                <?php the_content(); ?>
                            </article>
                            <div class="flex flex-col gap-4">
                                <?php
                                $page_id = get_the_ID();
                                $page_tags = wp_get_post_tags($page_id);
                                ?>
                                <?php if (!empty($page_tags)) : ?>
                                <div class="pt-4 border-0 border-t border-solid border-gray">
                                    <div class="read-more-area relative block w-full overflow-hidden" data-max-height="120" style="max-height: 120px;">
                                        <div class="read-more-area-content relative z-10">
                                            <p class="mb-1">Tags:</p>
                                            <div class="article-tags">
                                                <?php foreach ($page_tags as $tag) : ?>
                                                <a href="<?php echo get_tag_link($tag->term_id); ?>" rel="tag" class="text-dark-secondary hover:text-dark"><?php echo $tag->name; ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="read-more-area-actions absolute z-20 w-full text-right" style="display: none;">
                                            <button type="button" class="read-more-area-btn inline-flex items-center justify-end py-1 gap-2 border-0 cursor-pointer bg-white">
                                                <span class="text-sm text-dark">
                                                    <span class="read-more-area-more">Xem thêm tag</span>
                                                    <span class="read-more-area-less">Thu gọn</span>
                                                </span>
                                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 9L12.5 16.5L5 9" stroke="#000000E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="flex justify-end">
                                    <?php echo kk_star_ratings(); ?>
                                </div>
                            </div>

                        </div>
                        <?php if (comments_open()) :?>
                        <div class="news-comments pt-6 border-0 border-t border-solid border-gray">
                            <div class="">
                                <h2 class="mb-6 text-heading-sm font-semibold">
                                    Bình luận
                                </h2>
                            </div>
                            <?php get_template_part('template-parts/fb-comment', null, null); ?>
                            
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>