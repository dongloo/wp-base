<?php
/* Template Name: Giỏ hàng - Thanh toán */
?>
<?php get_header(); ?>
<section class="default-page pb-8">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
          
                <div class="flex flex-col gap-8">
         
                    <div class="flex flex-col gap-5">
                        <h1 class="text-heading-sm lg:text-heading-base font-bold text-center">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <article class="cart-checkout-account-page pb-6">
                        <?php the_content(); ?>
                    </article>
                </div>
         
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer() ?>