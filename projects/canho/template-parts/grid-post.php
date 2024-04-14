<?php

    $post_type = $args['post_type'];
    

?>







<?php if ('du-an' == $post_type) : ?>

    <?php

        $vi_tri = get_post_meta(get_the_ID(), 'vi_tri_du_an', true);

        $logo_du_an = get_post_meta(get_the_ID(), 'logo_du_an', true);

    ?>

    <a title="<?php echo get_the_title(); ?>" href="<?php the_permalink(); ?>" class="flex flex-col gap-3 p-3 bg-white rounded-xl project-item-box">

        <div class="ratio-thumb ratio-3x2 rounded-lg">

            <?php if($args['lazy_image']) :?>

                <?php echo get_the_post_thumbnail( get_the_ID(), 'project-thumb', array('class' => 'ratio-media', 'alt' => substr(get_the_title(), 0, 35), 'data-no-lazy' => 'true' ) ); ?>

            <?php else :?>

                <?php echo get_the_post_thumbnail( get_the_ID(), 'project-thumb', array('class' => 'ratio-media', 'alt' => substr(get_the_title(), 0, 35), 'loading' => 'lazy' ) ); ?>

            <?php endif; ?>

        </div>

        <div class="flex justify-between items-center gap-4">

            <div class="flex flex-col gap-1 flex-1">

                <h3 class="text-dark hover:text-dark-secondary text-base lg:text-lg font-semibold text-truncate-1 flex-1"><?php the_title(); ?></h3>

                <p class="mb-0 text-dark-secondary text-sm"><?php echo $vi_tri; ?></p>

            </div>

            <?php owlGetAttImage($logo_du_an, 'thumb', 'list-project-logo', false, 'Logo dự án ' . get_the_title(), true); ?>

        </div>

    </a>

<?php elseif ('video' == $post_type) : ?>

    <?php

        $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_video', true);

        $ten_du_an = get_the_title($thuoc_du_an);                        

        $link_youtube_video_chinh = get_post_meta(get_the_ID(), 'link_youtube_video_chinh', true);

        if (strpos($link_youtube_video_chinh, "watch?v=") !== false) {

            $link_video_split = explode("watch?v=", $link_youtube_video_chinh);

        } else {

            $link_video_split = explode("shorts/", $link_youtube_video_chinh);

        }

        $id_video = $link_video_split[1];

        $hq_thumb = 'https://i3.ytimg.com/vi/' . $id_video . '/hqdefault.jpg';

        //$hd_thumb = 'https://i3.ytimg.com/vi/' . $id_video . '/maxresdefault.jpg';

    ?>                        

    <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary p-3 bg-white rounded-lg video-item-box border border-solid border-gray">

        <div class="ratio-thumb ratio-3x2 rounded">

            <i class="icon-video-play"></i>

            <img src="<?php echo $hq_thumb; ?>" alt="<?php the_title(); ?>" class="ratio-media" loading="lazy">

        </div>

        <div class="flex flex-col gap-2 flex-1">

            <h3 class="col-start-2 col-end-4 flex-1 text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

            <p class="mb-0 text-sm text-dark-secondary text-truncate-1"><?php echo $ten_du_an; ?></p>

        </div>

    </a>

<?php elseif ('dang-duoc-quan-tam' == $post_type) : ?>

    <a href="<?php the_permalink(); ?>" class="flex flex-col gap-3 text-dark hover:text-dark-secondary landing-card-item">

        <div class="ratio-thumb ratio-3x2 rounded-lg">

            <?php owlGetPostThumb(get_the_ID(),'medium','ratio-media', false, get_the_title(), true); ?>

        </div>

        <?php

            $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_landing', true);

            $ten_du_an = get_the_title($thuoc_du_an);

        ?>

        <div class="flex flex-1 flex-col gap-2">

            <h3 class="flex-1 col-start-2 col-end-4 text-sm font-semibold text-truncate-3 xl:text-truncate-4"><?php the_title(); ?></h3>

            <p class="mb-0 text-sm text-dark-secondary text-truncate-1"><?php echo $ten_du_an; ?></p>

        </div>

    </a>    

<?php elseif ('san-pham' == $post_type) : ?>

    <?php

        $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_san_pham', true);

        $ten_du_an = get_the_title($thuoc_du_an);

        $loai_san_pham = get_post_meta(get_the_ID(), 'loai_san_pham', true);

        $loai_san_pham_cut = '';

        if($loai_san_pham == 'Sản phẩm cho thuê'){

            $loai_san_pham_cut = 'Cho thuê';

        }else{

            $loai_san_pham_cut = 'Chuyển nhượng';

        }

        

    ?>                        

    <a href="<?php the_permalink(); ?>" class="flex flex-col text-dark hover:text-dark-secondary border border-solid border-gray rounded-lg overflow-hidden product-card-box">

        <div class="ratio-thumb ratio-3x2">

            <?php owlGetPostThumb(get_the_ID(),'project-thumb','ratio-media', false, get_the_title(), true); ?>

        </div>

        <div class="p-4 flex flex-col gap-4 flex-1">

            <div class="flex flex-col gap-2 flex-1 items-start">

                <span class="badge badge-outline-gray"><?php echo $loai_san_pham_cut; ?></span>

                <h3 class="text-base font-semibold text-truncate-2"><?php the_title(); ?></h3>

                <p class="mb-0 text-sm text-dark-secondary text-truncate-1"><?php echo $ten_du_an; ?></p>

            </div>

            <div class="product-item-prices flex flex-wrap gap-2">

                <?php if ( have_rows( 'gia_sp', get_the_ID() ) ) : ?>

                    <?php

                        $dot_count = 0;

                        while ( have_rows( 'gia_sp', get_the_ID() ) ) :

                        the_row();

                        

                    ?>

                        <?php if ( $chi_tiet_gia = get_sub_field( 'chi_tiet_gia', get_the_ID() ) ) : ?>

                            <?php if($dot_count > 0 ): ?>

                            <span class="config-dot">·</span>

                            <?php endif; ?>
                            <div class="inline-flex flex-col">
                                <span class="text-dark-secondary text-sm"><?php echo esc_html( get_sub_field( 'ghi_chu_loai_gia', get_the_ID() ) ); ?></span>
                                <span class="text-danger text-base font-semibold"><?php echo esc_html( $chi_tiet_gia ); ?></span>
                            </div>

                        <?php endif; ?>

                    <?php

                        $dot_count++;

                        endwhile;

                    ?>

                <?php endif; ?>

            </div>

        </div>

    </a>    

<?php else : ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-7 gap-4 sm:gap-6 item-bottom-line">

        <a href="<?php the_permalink(); ?>" class="ratio-thumb ratio-16x9 rounded md:col-start-1 md:col-end-4">

            <?php owlGetPostThumb(get_the_ID(),'project-thumb','ratio-media', false, get_the_title(), true); ?>

        </a>

        <div class="md:col-start-4 md:col-end-8 flex flex-col gap-3">

            <h3 class="mb-0">

                <a href="<?php the_permalink(); ?>" class="text-base xl:text-lg font-semibold text-truncate-3 text-dark hover:text-dark-secondary">

                <?php the_title(); ?>

                </a>

            </h3>

            <p class="mb-0"><?php echo get_the_date('d/m/Y'); ?></p>

            <p class="mb-0 text-sm text-truncate-3 md:text-truncate-3"><?php echo get_the_excerpt(); ?></p>

        </div>

    </div>



<?php endif; ?>



