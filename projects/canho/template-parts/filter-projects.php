<?php

    $meta = $args['meta'];

    $logo = get_field('logo', 'option');

?>



<div class="filter-group-title mb-3 text-base font-medium">Dự án</div>

<div class="filter-group-slider">

    <div class="filter-group-items">

        <label class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((!isset($_GET[$meta]))):?>active<?php endif; ?>">

            <input type="radio" name="" value="" <?php if((!isset($_GET[$meta]))):?>checked<?php endif; ?> class="reset-url-param" data-param="<?php echo $meta; ?>">

            <div class="px-4 py-3 rounded-lg overflow-hidden bg-white flex flex-col gap-2 items-center">

                <img src="<?php echo $logo; ?>" alt="Tất cả dự án Vinhomes" class="filter-group-item-img"/>

                <span class="text-center text-sm text-truncate-1 text-dark-secondary">Tất cả dự án</span>

            </div>

        </label>   

        <!-- Get post News Query -->

        <?php

            

            $get_post_args_feature = array(

                'post_type'      => 'du-an', // Replace with your desired post type

                'post_status' => 'publish',

                'posts_per_page' => -1, // Set to -1 to retrieve all posts

                'meta_query'     => array(

                    array(

                        'key'     => 'du-an-noi-bat',
                        'value' => '1',
                        'compare' => 'LIKE',

                    )

                ),

                'order'          => 'ASC',

                'fields'         => 'ids'

            );

            $get_post_args = array(

                'post_type'      => 'du-an', // Replace with your desired post type

                'post_status' => 'publish',

                'posts_per_page' => -1, // Set to -1 to retrieve all posts

                'meta_query'     => array(

                    'relation' => 'OR',
                    array(
                        'key'     => 'du-an-noi-bat',
                        'compare' => 'NOT EXISTS', // Check if the key does not exist
                    ),
                    array(
                        'key'     => 'du-an-noi-bat',
                        'value'   => '1',
                        'compare' => '!=', // Compare values that are not 'true'
                    ),

                ),

                'order'          => 'ASC',

                'fields'         => 'ids'

            );

            

            $cache_key_project_feature = 'cache_key_project_feature';

            $all_posts_ids_feature = get_transient($cache_key_project_feature);



            $cache_key_project = 'cache_key_project';

            $all_posts_ids = get_transient($cache_key_project);



            if (false === $all_posts_ids_feature) {

                $get_post = new WP_Query($get_post_args_feature);

                $all_posts_ids_feature = $get_post->posts;

                set_transient($cache_key_project_feature, $all_posts_ids_feature, 60*60*48);

            }

            if (false === $all_posts_ids) {

                $get_post = new WP_Query($get_post_args);

                $all_posts_ids = $get_post->posts;

                set_transient($cache_key_project, $all_posts_ids, 60*60*48);

            }

            //$get_post = new WP_Query($get_post_args);

        ?>



        <?php if($all_posts_ids || $all_posts_ids_feature):

            if((isset($_GET[$meta]))){

                $move_to_front   = [$_GET[$meta]];

            }else{

                $move_to_front   = [];

            }

            if($all_posts_ids && $all_posts_ids_feature){

                $post_ids_merged = array_merge( $move_to_front, $all_posts_ids_feature, $all_posts_ids );

            }else{

                if($all_posts_ids){

                    $post_ids_merged = array_merge( $move_to_front, $all_posts_ids );

                }else{

                    $post_ids_merged = array_merge( $move_to_front, $all_posts_ids_feature );

                }

            }

            

            // Make sure that we remove the ID's from their original positions

            $reordered_ids   = array_unique( $post_ids_merged );

            $args = [

                'post_type'      => 'du-an',

                'post_status' => 'publish',

                'posts_per_page' => -1, 

                'post__in'       => $reordered_ids,

                'orderby'        => 'post__in',

                'order'          => 'ASC',

            ];     

            $get_post = new WP_Query($args);                           

        ?>

            <?php if($get_post->have_posts()): ?>

                

                <?php while ($get_post->have_posts()) : $get_post->the_post(); setup_postdata($post); ?>

                    <?php

                        $vi_tri = get_post_meta(get_the_ID(), 'vi_tri_du_an', true);

                        $logo_du_an = get_post_meta(get_the_ID(), 'logo_du_an', true);

                    ?>

                    <label class="filter-group-item border-0 cursor-pointer rounded-lg overflow-hidden <?php if((isset($_GET[$meta]) && get_the_ID() == $_GET[$meta])):?>active<?php endif; ?>">

                        <input type="radio" name="<?php echo $meta; ?>" value="<?php echo get_the_ID(); ?>" <?php if((isset($_GET[$meta]) && get_the_ID() == $_GET[$meta])):?>checked<?php endif; ?>>

                        <div class="px-4 py-3 rounded-lg overflow-hidden bg-white flex flex-col gap-2 items-center">

                            <?php owlGetAttImage($logo_du_an, 'thumb', 'filter-group-item-img', false, 'Logo dự án ' . get_the_title(), true); ?>

                            <span class="text-center text-sm text-truncate-1 text-dark-secondary"><?php the_title(); ?></span>

                        </div>

                    </label>                                                              

                <?php endwhile; wp_reset_postdata(); ?>

            <?php endif; ?>

        <?php endif; ?>





        <!-- Get post News Query -->

    </div>

</div>