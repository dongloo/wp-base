<?php get_header(); ?>
<section class="default-page pb-8">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="default-page-inner">
                <div class="news-main flex flex-col gap-8">
                    <div class="flex flex-col gap-6">
                        <?php if (has_post_thumbnail( get_the_ID()) ): ?>
                        <div class="news-detail-thumb">
                            <div class="ratio-thumb ratio-16x9 rounded overflow-hidden">
                                <?php
                                    owlGetThumb(get_the_ID(),'large','ratio-media', true, '', false);
                                ?>
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
                            </div>
                        </div>
                    </div>
                    <article class="text-editor-content-detail news-detail-content pb-6">
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer() ?>