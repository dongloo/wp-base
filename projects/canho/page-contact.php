<?php
/* Template Name: Trang liên hệ */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="py-8">
            <div class="container">
                <div class="w-full flex flex-col gap-12">
                    <div class="news-main flex flex-col gap-8">
                        <div class="flex flex-col gap-8">
                            <div class="flex flex-col gap-4">
                                <h1 class="text-heading-sm lg:text-heading-base font-bold">
                                    <?php the_title(); ?>
                                </h1>
                            </div>                                
                        </div>
                        <article class="news-detail-content pb-4 text-editor-content-detail">
                            <?php the_content(); ?>
                        </article>
                        <div class="flex flex-col gap-4">
                            <div class="flex justify-end">
                                <?php echo kk_star_ratings(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; wp_reset_postdata();?>
<?php endif; ?>

<?php get_footer() ?>