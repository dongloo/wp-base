<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); setpostview(get_the_id()); ?>

    <?php

        $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_san_pham', true);

        $ten_du_an = get_the_title($thuoc_du_an);

        $logo_du_an = get_post_meta($thuoc_du_an, 'logo_du_an', true);

        $link_du_an = get_the_permalink($thuoc_du_an);



        

        $loai_san_pham = get_post_meta(get_the_ID(), 'loai_san_pham', true);

        $loai_san_pham_cut = '';

        if($loai_san_pham == 'Sản phẩm cho thuê'){

            $loai_san_pham_cut = 'Cho thuê';

        }else{

            $loai_san_pham_cut = 'Chuyển nhượng';

        }



        $dia_diem = get_post_meta(get_the_ID(), 'dia_diem', true); 

    ?> 



    <section class="product-detail-top pt-8">

        <div class="container">

            <div class="flex flex-col gap-8">

                <div class="flex flex-col gap-3 items-start">

                    <span class="badge badge-outline-gray"><?php echo $loai_san_pham_cut; ?></span>

                    <h1 class="text-heading-sm lg:text-heading-base font-bold"><?php the_title(); ?></h1>

                </div>

                <?php

                    $thumb_array = array();

                    if (has_post_thumbnail( get_the_ID()) ){

                        $thumbnail_id = get_post_thumbnail_id(get_the_ID());

                        $thumb_array[] = $thumbnail_id;

                    }

                    if ( have_rows( 'anh_album_san_pham_repeater', get_the_ID() ) ){

                        while ( have_rows( 'anh_album_san_pham_repeater', get_the_ID() ) ) {

                            the_row();

                            $album_src =  get_sub_field( 'anh_album_san_pham', get_the_ID() );

                            $thumb_array[] = $album_src;

                        }

                    } 

                ?>

                <?php if(count($thumb_array) > 0) :

                    $album_grid_class = '';

                ?>

                    <?php 

                    if(count($thumb_array) < 3) {

                        if(count($thumb_array) == 1) {

                            $album_grid_class = 'grid-cols-1';

                        }else{

                            $album_grid_class = 'grid-cols-2';

                        }

                    }else{

                        if(count($thumb_array) >= 5) {

                            $album_grid_class = 'grid-cols-4';

                        }else{

                            $album_grid_class = 'grid-cols-3';

                        }

                    }

                    ?>



                    <div class="product-gallery-area relative">

                        <div class="product-gallery-items grid relative <?php echo $album_grid_class; ?>">

                            <?php

                            foreach ($thumb_array as $index => $thumb_item) :

                                $current_index = $index + 1;

                                if(count($thumb_array) > 2) {                                  

                                    if($current_index == 1){

                                        $album_item_size = 'product-gallery-item-thumb-lg';

                                    }else{

                                        $album_item_size = 'product-gallery-item-thumb-sm';

                                    }

                                }else{

                                    $album_item_size = 'product-gallery-item-thumb-lg';

                              

                                }

                                $thumb_item_src_href = wp_get_attachment_image_url( $thumb_item, 'large');

                            ?>

                                <a data-index="<?php echo $current_index; ?>-<?php echo count($thumb_array); ?>" href="<?php echo esc_url($thumb_item_src_href); ?>" class="product-gallery-item" data-fancybox="product-gallery" data-caption="<?php echo get_the_title(); ?>">

                                    <div class="product-gallery-item-thumb <?php echo $album_item_size; ?> relative rounded-lg overflow-hidden">

                                        <?php owlGetAttImage($thumb_item,'large','rounded w-full h-auto', false, "Ảnh album dự án", false); ?>

                                    </div>

                                </a>

                            <?php endforeach; ?>

                        </div>

                        <div class="product-gallery-count absolute rounded-lg">

                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <mask id="mask0_64_822" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="14" height="15">

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33398 1.83337H14.636V15.136H1.33398V1.83337Z" fill="white"/>

                                </mask>

                                <g mask="url(#mask0_64_822)">

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.10132 2.83331C3.42065 2.83331 2.33398 3.98598 2.33398 5.76931V11.2C2.33398 12.984 3.42065 14.136 5.10132 14.136H10.8653C12.5487 14.136 13.636 12.984 13.636 11.2V5.76931C13.6373 4.86065 13.36 4.10198 12.8347 3.57598C12.3493 3.08998 11.67 2.83331 10.8687 2.83331H5.10132ZM10.8653 15.136H5.10132C2.84798 15.136 1.33398 13.554 1.33398 11.2V5.76931C1.33398 3.41531 2.84798 1.83331 5.10132 1.83331H10.8687C11.9407 1.83331 12.8653 2.19131 13.542 2.86931C14.2493 3.57731 14.6373 4.60731 14.636 5.76998V11.2C14.636 13.554 13.1207 15.136 10.8653 15.136Z" fill="white"/>

                                </g>

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.90383 5.62632C5.50116 5.62632 5.17383 5.95366 5.17383 6.35699C5.17383 6.75966 5.50116 7.08699 5.90449 7.08699C6.30716 7.08699 6.63516 6.75966 6.63516 6.35766C6.63449 5.95432 6.30649 5.62699 5.90383 5.62632ZM5.90449 8.08698C4.94983 8.08698 4.17383 7.31098 4.17383 6.35698C4.17383 5.40231 4.94983 4.62631 5.90449 4.62631C6.85849 4.62698 7.63449 5.40298 7.63516 6.35631V6.35698C7.63516 7.31098 6.85916 8.08698 5.90449 8.08698Z" fill="white"/>

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49929 13.9075C2.41662 13.9075 2.33262 13.8869 2.25529 13.8435C2.01396 13.7082 1.92929 13.4035 2.06396 13.1629C2.10396 13.0909 3.06062 11.3995 4.11329 10.5329C4.94796 9.8462 5.84662 10.2235 6.57062 10.5282C6.99662 10.7075 7.39929 10.8769 7.78596 10.8769C8.14062 10.8769 8.58529 10.2502 8.97862 9.69754C9.52462 8.92687 10.1446 8.05487 11.0526 8.05487C12.4993 8.05487 13.748 9.34554 14.4193 10.0389L14.4966 10.1189C14.6886 10.3169 14.684 10.6335 14.486 10.8262C14.2893 11.0189 13.9726 11.0142 13.7793 10.8155L13.7006 10.7342C13.1326 10.1469 12.0753 9.05487 11.0526 9.05487C10.6606 9.05487 10.2006 9.70354 9.79329 10.2762C9.23462 11.0629 8.65662 11.8769 7.78596 11.8769C7.19729 11.8769 6.65796 11.6502 6.18262 11.4495C5.42662 11.1309 5.08396 11.0289 4.74862 11.3049C3.83929 12.0542 2.94462 13.6369 2.93596 13.6522C2.84462 13.8155 2.67462 13.9075 2.49929 13.9075Z" fill="white"/>

                            </svg>

                            <span class="text-white"><?php echo count($thumb_array); ?></span>                               

                        </div>

                    </div>                    

                <?php endif; ?>

            </div>

        </div>

    </section>

    <section class="py-8">

        <div class="container">

            <div class="flex flex-col lg:flex-row gap-8 items-start">

                <div class="w-full flex-1 flex flex-col gap-12">

                    <div class="news-main flex flex-col gap-8" data-id="<?php echo get_the_ID(); ?>">

                        <?php if ( have_rows( 'thong_so_san_pham', get_the_ID() ) ) : ?>

                            <div class="">

                                <div class="flex flex-col gap-6">                            

                                    <h2 class="mb-0 text-heading-sm font-semibold">

                                        Thông tin sản phẩm

                                    </h2>

                                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">

                                    <?php

                                        while ( have_rows( 'thong_so_san_pham', get_the_ID() ) ) :

                                        the_row();

                                        

                                    ?>

                                        <?php

                                            $tieu_de_thong_so = get_sub_field( 'tieu_de_thong_so', get_the_ID() );

                                            $noi_dung_thong_so = get_sub_field( 'noi_dung_thong_so', get_the_ID() );

                                        ?>

                                        <div class="flex flex-col gap-1">

                                            <p class="mb-0 text-lg font-medium"><?php echo esc_html( $tieu_de_thong_so ); ?></p>

                                            <p class="mb-0 text-dark-secondary"><?php echo esc_html( $noi_dung_thong_so ); ?></p>

                                        </div>

                                    <?php

                                        endwhile;

                                    ?>

                                    </div>

                                </div>

                            </div>                                      

                        <?php endif; ?>

                        <div class="pt-6 border-0 border-t border-solid border-gray">

                            <div class="flex flex-col gap-6">

                                <h2 class="mb-0 text-heading-sm font-semibold">

                                    Thông tin thêm

                                </h2>

                                <article class="news-detail-content text-editor-content-detail">

                                    <?php the_content(); ?>

                                </article>

                            </div>

                        </div>

                        <?php if ( $video_san_pham = get_post_meta(get_the_ID(), 'video_san_pham', true ) ) :?>

                            <?php //echo esc_url( $video_san_pham ); ?>

                            <div class="pt-6 border-0 border-t border-solid border-gray">

                                <div class="flex flex-col gap-6">

                                    <h2 class="mb-0 text-heading-sm font-semibold">

                                        Video sản phẩm

                                    </h2>

                                    <div class="">

                                        <div class="video-youtube" data-url="<?php echo esc_url( $video_san_pham ); ?>">

                                            <div class="youtube-thumb cursor-pointer">

                                                <div class="ratio-thumb ratio-16x9 rounded-lg overflow-hidden">

                                                    <img loading="lazy" src="" alt="" class="ratio-media z-10">

                                                    <svg class="z-20 absolute" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <path d="M4.34873 19.2609C4.59776 15.427 7.68015 12.4224 11.5174 12.2323C17.074 11.957 25.016 11.625 31 11.625C36.984 11.625 44.926 11.957 50.4826 12.2323C54.3199 12.4224 57.4022 15.427 57.6513 19.2609C57.8899 22.934 58.125 27.4537 58.125 31C58.125 34.5463 57.8899 39.066 57.6513 42.7391C57.4022 46.573 54.3199 49.5776 50.4826 49.7677C44.926 50.043 36.984 50.375 31 50.375C25.016 50.375 17.074 50.043 11.5174 49.7677C7.68015 49.5776 4.59776 46.573 4.34873 42.7391C4.11014 39.066 3.875 34.5463 3.875 31C3.875 27.4537 4.11014 22.934 4.34873 19.2609Z" fill="#FC0D1B"/>

                                                        <path d="M25.1875 23.25V38.75L40.6875 31L25.1875 23.25Z" fill="white"/>

                                                    </svg>                                                                        

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>                        

                        <?php if($dia_diem) :?>

                        <div class="pt-6 border-0 border-t border-solid border-gray">

                            <div class="flex flex-col gap-6">

                                <h2 class="mb-0 text-heading-sm font-semibold">

                                    Địa điểm

                                </h2>

                                <div class="lazy-load-map ratio-thumb google-map-iframe ratio-2x1 rounded-lg overflow-hidden border border-solid border-gray" data-src="<?php echo $dia_diem; ?>"></div>

                            </div>

                        </div>

                        <?php endif; ?>                             

                        <div class="flex flex-col gap-4">

                            <?php

                                $page_id = get_the_ID();

                                $page_tags = wp_get_post_tags($page_id);

                            ?>

                            <?php if (!empty($page_tags)) : ?>                            

                            <div class="pt-4 border-0 border-t border-solid border-gray">

                                <div class="read-more-area relative block w-full overflow-hidden" data-max-height="120" style="max-height: 120px;">

                                    <div class="read-more-area-content relative z-10">

                                        <p class="mb-1">Thẻ:</p>

                                        <div class="article-tags">

                                            <?php foreach ($page_tags as $tag) : ?>

                                            <a href="<?php echo get_tag_link($tag->term_id); ?>" rel="tag" class="text-dark-secondary hover:text-dark"><?php echo $tag->name; ?></a>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                    <div class="read-more-area-actions absolute z-20 w-full" style="display: none;">

                                        <button type="button" class="read-more-area-btn inline-flex items-center justify-center py-1 gap-2 border-0 cursor-pointer bg-white">

                                            <span class="text-sm text-dark">

                                                <span class="read-more-area-more">Xem thêm thẻ</span>

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



                    <?php

                        $current_post_type = get_post_type();



                        $related_args = array(

                            'post_type'      => $current_post_type,

                            'posts_per_page' => 2,

                            'orderby'        => 'rand',

                            'post__not_in'   => array(get_the_ID()), // Exclude the current post from the results

                        );

                        

                        $related_query = new WP_Query($related_args);

                    ?>                

                    <?php if ($related_query->have_posts()) : ?>

                    <div class="news-related pt-6 border-0 border-t border-solid border-gray">

                        <div class="flex flex-col gap-6">

                            <h2 class="mb-0 text-heading-sm font-semibold">

                                Sản phẩm liên quan

                            </h2>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <?php while ($related_query->have_posts()) : $related_query->the_post(); setup_postdata($post);?>

                                <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'san-pham')); ?>

                            <?php endwhile; wp_reset_postdata(); ?>

                            </div>                            

                        </div>

                    </div>

                    <?php endif; ?>

                </div>

                <div class="sidebar-area product-sidebar-area flex flex-col gap-3 lg:gap-6 order-first lg:order-none">

                    <aside>

                        <div class="text-lg lg:text-heading-sm font-semibold mb-2 lg:mb-3">

                            Dự án

                        </div>

                        <a href="<?php echo $link_du_an; ?>" class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden w-full block">

                            <div class="px-4 py-2 lg:py-3 rounded-lg overflow-hidden bg-white flex flex-col gap-1 lg:gap-2 items-center">

                                <?php owlGetAttImage($logo_du_an, 'thumb', 'filter-group-item-img', false, 'Logo dự án ' . $ten_du_an, true); ?>

                                <span class="text-center text-sm text-truncate-1 text-dark-secondary"><?php echo $ten_du_an; ?></span>

                            </div>

                        </a>                                                        

                    </aside>

                    <aside data-id="<?php echo get_the_ID(); ?>">

                        <div class="flex flex-col gap-6 lg:gap-8 border border-solid border-gray-light py-4 lg:py-8 px-4 lg:px-6 rounded-lg">

                            <?php if ( have_rows( 'gia_sp', get_the_ID() ) ) : ?>

                                <div class="flex flex-col gap-4 lg:gap-6 items-center">

                                <?php

                                    while ( have_rows( 'gia_sp', get_the_ID() ) ) :

                                    the_row();

                                    

                                ?>

                                    <div class="flex flex-col gap-2 items-center">

                                        <?php

                                            $ghi_chu_loai_gia = get_sub_field( 'ghi_chu_loai_gia', get_the_ID() );

                                            $chi_tiet_gia = get_sub_field( 'chi_tiet_gia', get_the_ID() );

                                            $ghi_chu_gia = get_sub_field( 'ghi_chu_gia', get_the_ID() );

                                        ?>

                                        <div class="text-center text-sm"><?php echo esc_html( $ghi_chu_loai_gia ); ?></div>

                                        <div class="text-center">

                                            <span class="detail-product-price text-danger font-semibold"><?php echo esc_html( $chi_tiet_gia ); ?></span> <?php if($ghi_chu_gia) :?><span>(<?php echo esc_html( $ghi_chu_gia ); ?>)</span><?php endif; ?>

                                        </div>

                                    </div>

                                <?php

                                    endwhile;

                                ?>

                                </div>

                            <?php endif; ?>

                            <div class="flex flex-col gap-4 lg:gap-6 items-center">

                                <?php if ( $call_btn_txt = get_field( 'call_btn_txt', 'options' ) ) : ?>

                                    <a href="tel:<?php if ( $call_btn_tel = get_field( 'call_btn_tel', 'options' ) ) : ?><?php echo esc_html( $call_btn_tel ); ?><?php endif; ?>" class="theme-btn btn-block btn-secondary">

                                        <span class="btn-text"><?php echo esc_html( $call_btn_txt ); ?></span>

                                    </a>

                                <?php endif; ?>

                                <?php if ( have_rows( 'detail_product_fields', 'options' ) ) : ?>

                                    <?php while ( have_rows( 'detail_product_fields', 'options' ) ) :

                                        the_row();
                                            $cta_btn_class = get_sub_field( 'cta_btn_class', 'options' );
                                        ?>

                                        <div class="theme-btn btn-block btn-outline-secondary product-detail-sidebar-btn <?php echo $cta_btn_class; ?>">

                                            <span class="btn-text">

                                                <?php if ( $cta_btn_text = get_sub_field( 'cta_btn_text', 'options' ) ) : ?><?php echo esc_html( $cta_btn_text ); ?><?php endif; ?>

                                            </span>

                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>                                

                            </div>

                            <?php if ( have_rows( 'supporters', 'options' ) ) : ?>

                                <div class="flex flex-col gap-2 items-center">

                                    <?php if ( $support_title = get_field( 'support_title', 'options' ) ) : ?>

                                        <div class="text-center text-sm text-dark-secondary"><?php echo esc_html( $support_title ); ?></div>

                                    <?php endif; ?>                                    

                                    <div class="supporter-list flex items-center">

                                    <?php while ( have_rows( 'supporters', 'options' ) ) :

                                        the_row(); ?>

                                        <div class="supporter-item relative">

                                            <div class="ratio-thumb ratio-1x1 rounded-full">

                                                <img src="<?php echo esc_url( get_sub_field( 'banner_sidebar', 'options' ) ); ?>" alt="Nhân viên tư vấn" class="ratio-media">

                                            </div>

                                        </div>                                        

                                    <?php endwhile; ?>

                                    </div>

                                </div>                                

                            <?php endif; ?>

                        </div>                             

                    </aside>

                    <aside>

                        <div class="text-lg lg:text-heading-sm font-semibold mb-2 lg:mb-3">

                            Chia sẻ

                        </div>

                        <div class="social-icons share-icons relative flex items-center gap-4">

                            <a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="" aria-label="Share on Facebook">

                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_91_297)"/>

                                    <path d="M21.2137 20.2816L21.8356 16.3301H17.9452V13.767C17.9452 12.6857 18.4877 11.6311 20.2302 11.6311H22V8.26699C22 8.26699 20.3945 8 18.8603 8C15.6548 8 13.5617 9.89294 13.5617 13.3184V16.3301H10V20.2816H13.5617V29.8345C14.2767 29.944 15.0082 30 15.7534 30C16.4986 30 17.2302 29.944 17.9452 29.8345V20.2816H21.2137Z" fill="white"/>

                                    <defs>

                                    <linearGradient id="paint0_linear_91_297" x1="16" y1="2" x2="16" y2="29.917" gradientUnits="userSpaceOnUse">

                                    <stop stop-color="#18ACFE"/>

                                    <stop offset="1" stop-color="#0163E0"/>

                                    </linearGradient>

                                    </defs>

                                </svg>                                            

                            </a>

                            <a href="https://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>&amp;media=<?php echo get_the_post_thumbnail_url(); ?>&amp;description=<?php echo get_the_title(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="" aria-label="Pin on Pinterest">

                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <circle cx="16" cy="16" r="14" fill="white"/>

                                    <path d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 21.6801 5.38269 26.5702 10.2435 28.7655C10.25 28.6141 10.2573 28.4752 10.2636 28.3561C10.2722 28.1938 10.2788 28.0682 10.2788 27.9976C10.2788 27.5769 10.5649 25.4904 10.5649 25.4904L12.3149 18.3053C12.0457 17.8678 11.8438 16.9423 11.8438 16.2356C11.8438 12.9711 13.6611 12.2644 14.7716 12.2644C16.1851 12.2644 16.5048 13.7957 16.5048 14.9231C16.5048 15.5194 16.1955 16.4528 15.8772 17.4134C15.5398 18.4314 15.1923 19.4799 15.1923 20.1899C15.1923 21.5697 16.5553 22.2596 17.4976 22.2596C19.988 22.2596 22.2764 19.1298 22.2764 16C22.2764 12.8702 20.8125 9.08412 16.0168 9.08412C11.2212 9.08412 9.06731 12.7356 9.06731 15.5288C9.06731 17.4134 9.77404 18.7933 10.1274 19.0288C10.2284 19.1186 10.4 19.3957 10.2788 19.786C10.1577 20.1764 9.9367 21.0481 9.84135 21.4351C9.83013 21.5248 9.72356 21.6774 9.38702 21.5697C8.96635 21.4351 6.29087 19.7524 6.29087 15.5288C6.29087 11.3053 9.60577 6.39182 16.0168 6.39182C22.4279 6.39182 25.7091 10.6995 25.7091 16C25.7091 21.3005 21.4183 24.6827 18.1538 24.6827C15.5423 24.6827 14.5192 23.516 14.3341 22.9327L13.3413 26.7187C13.1069 27.3468 12.6696 28.4757 12.1304 29.4583C13.3594 29.8111 14.6576 30 16 30Z" fill="#BB0F23"/>

                                </svg>                                           

                            </a>

                            <a href="mailto:enteryour@addresshere.com?subject=<?php echo get_the_title(); ?>&amp;body=Check%20this%20out:%20<?php echo get_the_permalink(); ?>" rel="nofollow" class="" aria-label="Email to a Friend">

                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 23.732 8.26801 30 16 30Z" fill="#FF5A54"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.9587 17.0846C29.4325 23.9505 23.954 29.4302 17.0886 29.9582L8.49041 21.3599C8.27166 21.1794 8.13184 20.9063 8.13184 20.6016V11.5235L10.5804 12.9395L8.38389 10.743C8.56391 10.542 8.82577 10.415 9.11545 10.415H22.8847C23.1744 10.415 23.4363 10.5417 23.6163 10.7423L29.9587 17.0846Z" fill="#DB3A3C"/>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8684 11.5226L16.2055 15.9548C16.0844 16.027 15.9289 16.0332 15.7996 15.9578L8.13184 11.5235V20.6016C8.13184 21.1434 8.57371 21.5849 9.11545 21.5849H22.8847C23.4264 21.5849 23.8684 21.1434 23.8684 20.6016V11.5226ZM9.11545 10.415H22.8847C23.1744 10.415 23.4363 10.5417 23.6163 10.7423L16.0009 15.1477L8.38384 10.743C8.56391 10.542 8.82577 10.415 9.11545 10.415Z" fill="white"/>

                                </svg>                                      

                            </a>

                        </div>                              

                    </aside>

                </div>

            </div>

        </div>

    </section>







    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>