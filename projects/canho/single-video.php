<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); setpostview(get_the_id()); ?>
    <?php
        $thuoc_du_an = get_post_meta(get_the_ID(), 'thuoc_du_an_video', true);
        $ten_du_an = get_the_title($thuoc_du_an);
        $logo_du_an = get_post_meta($thuoc_du_an, 'logo_du_an', true);
        $link_du_an = get_the_permalink($thuoc_du_an);
        
        $link_youtube_video_chinh = get_post_meta(get_the_ID(), 'link_youtube_video_chinh', true);
        if (strpos($link_youtube_video_chinh, "watch?v=") !== false) {
            $link_video_split = explode("watch?v=", $link_youtube_video_chinh);
        } else {
            $link_video_split = explode("shorts/", $link_youtube_video_chinh);
        }
        $id_video = $link_video_split[1];
        $hq_thumb = 'https://i3.ytimg.com/vi/' . $id_video . '/hqdefault.jpg';
        // $hd_thumb = 'https://i3.ytimg.com/vi/' . $id_video . '/maxresdefault.jpg';
    ?> 
    <section class="video-player py-0 md:py-8">
        <div class="container">
            <div class="ratio-thumb ratio-16x9 rounded-lg overflow-hidden">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $id_video; ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="ratio-media"></iframe>
            </div>
        </div>
    </section>
    <section class="py-8">
        <div class="container">
            <div class="flex flex-col lg:flex-row gap-8 items-start">
                <div class="w-full flex-1 flex flex-col gap-12">
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
                                Video liên quan
                            </h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <?php while ($related_query->have_posts()) : $related_query->the_post(); setup_postdata($post);?>
                                <?php get_template_part('template-parts/grid-post', null, array('post_type' => 'video')); ?>
                            <?php endwhile; wp_reset_postdata(); ?>
                            </div>                            
                        </div>
                    </div>
                    <?php endif; ?>                              
                </div>
                <div class="sidebar-area video-sidebar-area flex flex-col gap-3 lg:gap-6 order-first lg:order-none">
                    <?php if($thuoc_du_an) :?>
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
                    <?php endif; ?>
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
                            <a href="https://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>&amp;media=<?php echo $hq_thumb; ?>&amp;description=<?php echo get_the_title(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="" aria-label="Pin on Pinterest">
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