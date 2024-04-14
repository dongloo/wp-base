<?php get_header(); ?>
<section>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="">
                <h1 class="text-heading-sm text-title font-normal mb-8 lg:mb-10 capitalize">
                    <?php the_title(); ?>
                </h1>
                <article class=" text-base flex flex-col gap-6 lg:gap-8 mb-6 lg:mb-10">
                    <?php the_content(); ?>
                </article>
                

            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>