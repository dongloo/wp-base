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
                <form class="flex flex-col gap-6" id="meta-filter-form" action="<?php echo esc_url($archive_url)?>" method="get">
                    <div class="filter-group">
                        <div class="filter-group-title mb-3 text-base font-medium">Loại sản phẩm</div>               
                        <div class="filter-group-items grid grid-cols-2 md:grid-cols-3 gap-3">
                            <label class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((!isset($_GET["loai-san-pham"]))):?>active<?php endif; ?>">
                                <input type="radio" name="" value="" <?php if((!isset($_GET["loai-san-pham"]))):?>checked<?php endif; ?> class="reset-url-param" data-param="loai-san-pham">
                                <span class="px-4 py-3 rounded-lg overflow-hidden bg-white text-sm text-center block">Tất cả sản phẩm</span>
                            </label>
                            <label class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((isset($_GET["loai-san-pham"]) && "Sản phẩm chuyển nhượng" == $_GET["loai-san-pham"])):?>active<?php endif; ?>">
                                <input type="radio" name="loai-san-pham" value="Sản phẩm chuyển nhượng" <?php if((isset($_GET["loai-san-pham"]) && "Sản phẩm chuyển nhượng" == $_GET["loai-san-pham"])):?>checked<?php endif; ?>>
                                <span class="px-4 py-3 rounded-lg overflow-hidden bg-white text-sm text-center block">Chuyển nhượng</span>
                            </label>
                            <label class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((isset($_GET["loai-san-pham"]) && "Sản phẩm cho thuê" == $_GET["loai-san-pham"])):?>active<?php endif; ?>">
                                <input type="radio" name="loai-san-pham" value="Sản phẩm cho thuê" <?php if((isset($_GET["loai-san-pham"]) && "Sản phẩm cho thuê" == $_GET["loai-san-pham"])):?>checked<?php endif; ?>>                                
                                <span class="px-4 py-3 rounded-lg overflow-hidden bg-white text-sm text-center block">Cho thuê</span>
                            </label>
                        </div>
                    </div>                      
                    <div class="filter-group">
                        <?php get_template_part('template-parts/filter-projects', null, array('meta' => 'thuoc-du-an-san-pham')); ?>
                    </div>
                    <input type="submit" value="Áp dụng" class="hidden">
                </form>
                <div class="dot-line-bg mt-4"></div>
            </div>
        </div>
    </section>
    <section class="py-8">
        <div class="container">
            <div class="flex flex-col gap-6">
                <div class="font-medium"><?php echo $count; ?> sản phẩm</div>
                <?php if (have_posts()) : ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 xl:gap-8">
                        <?php while (have_posts()) : the_post(); ?>
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
                                    <?php owlGetPostThumb(get_the_ID(),'large','ratio-media', false, get_the_title(), true); ?>
                                </div>
                                <div class="p-4 flex flex-col gap-4 flex-1">
                                    <div class="flex flex-col gap-2 flex-1 items-start">
                                        <span class="badge badge-outline-gray"><?php echo $loai_san_pham_cut; ?></span>
                                        <h3 class="text-base font-semibold text-truncate-2"><?php the_title(); ?></h3>
                                        <p class="mb-0 text-sm text-dark-secondary text-truncate-1"><?php echo $ten_du_an; ?></p>
                                    </div>
                                    <div class="text-danger text-base font-semibold product-item-prices">
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
                                                    <span><?php echo esc_html( $chi_tiet_gia ); ?></span>
                                                <?php endif; ?>
                                            <?php
                                                $dot_count++;
                                                endwhile;
                                            ?>
                                        <?php endif; ?>
                                    </div>
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