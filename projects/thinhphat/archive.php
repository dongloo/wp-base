<?php get_header(); ?>
<section class="py-6">
    <div class="container">
        <h1 class="text-heading-sm text-title  font-normal mb-8 lg:mb-10">
            <?php the_archive_title(); ?>
        </h1>
        <div class="grid-cols-1 md:grid-cols-2 grid gap-8 lg:gap-10">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="">
                        <a href="<?php the_permalink(); ?>" class="" >
                            <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'') ); ?>
                        </a>
                        <div class="">
                            <a href="<?php the_permalink(); ?>" class=" mb-4 block text-base text-title"><?php the_title(); ?></a>
                            <div class=" text-truncate-2">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if(paginate_links()!='') {?>
            <div class="flex items-center justify-center gap-4">
                <?php
                global $wp_query;
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages
                    ) );
                ?>
            </div>
        <?php } ?>
    </div>
</section>
<?php get_footer() ?>