<?php
// [blog_posts]
function shortcode_latest_from_blog($atts, $content = null, $tag = '' ) {

	extract(shortcode_atts(array(
		"_id" => 'row-'.rand(),
		'style' => '',
		'class' => '',
		'visibility' => '',

		// Layout
		"columns" => '4',
		"columns__sm" => '1',
		"columns__md" => '',
		'col_spacing' => '',
		"type" => 'slider', // slider, row, masonery, grid
		'width' => '',
		'grid' => '1',
		'grid_height' => '600px',
		'grid_height__md' => '500px',
		'grid_height__sm' => '400px',
		'slider_nav_style' => 'reveal',
		'slider_nav_position' => '',
		'slider_nav_color' => '',
		'slider_bullets' => 'false',
	 	'slider_arrows' => 'true',
		'auto_slide' => 'false',
		'infinitive' => 'true',
		'depth' => '',
   		'depth_hover' => '',

		// posts
		'posts' => '8',
		'ids' => false, // Custom IDs
		'cat' => '',
		'category' => '', // Added for Flatsome v2 fallback
		'excerpt' => 'visible',
		'excerpt_length' => 15,
		'offset' => '',
		'orderby' => 'date',
		'order' => 'DESC',

		// Read more
		'readmore' => '',
		'readmore_color' => '',
		'readmore_style' => 'outline',
		'readmore_size' => 'small',

		// div meta
		'post_icon' => 'true',
		'comments' => 'true',
		'show_date' => 'badge', // badge, text
		'badge_style' => '',
		'show_category' => 'false',

		//Title
		'title_size' => 'large',
		'title_style' => '',

		// Box styles
		'animate' => '',
		'text_pos' => 'bottom',
	  	'text_padding' => '',
	  	'text_bg' => '',
	  	'text_size' => '',
	 	'text_color' => '',
	 	'text_hover' => '',
	 	'text_align' => 'center',
	 	'image_size' => 'medium',
	 	'image_width' => '',
	 	'image_radius' => '',
	 	'image_height' => '56%',
	    'image_hover' => '',
	    'image_hover_alt' => '',
	    'image_overlay' => '',
	    'image_depth' => '',
	    'image_depth_hover' => '',

	), $atts));

	// Stop if visibility is hidden
  	if($visibility == 'hidden') return;

	ob_start();

	$classes_box = array();
	$classes_image = array();
	$classes_text = array();

	// Fix overlay color
    if($style == 'text-overlay'){
      $image_hover = 'zoom';
    }
    $style = str_replace('text-', '', $style);

	// Fix grids
	if($type == 'grid'){
	  if(!$text_pos) $text_pos = 'center';
	  $columns = 0;
	  $current_grid = 0;
	  $grid = flatsome_get_grid($grid);
	  $grid_total = count($grid);
	  flatsome_get_grid_height($grid_height, $_id);
	}

	// Fix overlay
	if($style == 'overlay' && !$image_overlay) $image_overlay = 'rgba(0,0,0,.25)';

	// Set box style
	if($style) $classes_box[] = 'box-'.$style;
	if($style == 'overlay') $classes_box[] = 'dark';
	if($style == 'shade') $classes_box[] = 'dark';
	if($style == 'badge') $classes_box[] = 'hover-dark';
	if($text_pos) $classes_box[] = 'box-text-'.$text_pos;

	if($image_hover)  $classes_image[] = 'image-'.$image_hover;
	if($image_hover_alt)  $classes_image[] = 'image-'.$image_hover_alt;
	if($image_height) $classes_image[] = 'image-cover';

	// Text classes
	if($text_hover) $classes_text[] = 'show-on-hover hover-'.$text_hover;
	if($text_align) $classes_text[] = 'text-'.$text_align;
	if($text_size) $classes_text[] = 'is-'.$text_size;
	if($text_color == 'dark') $classes_text[] = 'dark';

	$css_args_img = array(
	  array( 'attribute' => 'border-radius', 'value' => $image_radius, 'unit' => '%' ),
	  array( 'attribute' => 'width', 'value' => $image_width, 'unit' => '%' ),
	);

	$css_image_height = array(
      array( 'attribute' => 'padding-top', 'value' => $image_height),
  	);

	$css_args = array(
      array( 'attribute' => 'background-color', 'value' => $text_bg ),
      array( 'attribute' => 'padding', 'value' => $text_padding ),
  	);

    // Add Animations
	if($animate) {$animate = 'data-animate="'.$animate.'"';}

	$classes_text = implode(' ', $classes_text);
	$classes_image = implode(' ', $classes_image);
	$classes_box = implode(' ', $classes_box);

	// Repeater styles
	$repeater['id'] = $_id;
	$repeater['tag'] = $tag;
	$repeater['type'] = $type;
	$repeater['class'] = $class;
	$repeater['visibility'] = $visibility;
	$repeater['style'] = $style;
	$repeater['slider_style'] = $slider_nav_style;
	$repeater['slider_nav_position'] = $slider_nav_position;
	$repeater['slider_nav_color'] = $slider_nav_color;
	$repeater['slider_bullets'] = $slider_bullets;
    $repeater['auto_slide'] = $auto_slide;
	$repeater['infinitive'] = $infinitive;
	$repeater['row_spacing'] = $col_spacing;
	$repeater['row_width'] = $width;
	$repeater['columns'] = $columns;
	$repeater['columns__md'] = $columns__md;
	$repeater['columns__sm'] = $columns__sm;
	$repeater['depth'] = $depth;
	$repeater['depth_hover'] = $depth_hover;

	$args = array(
		'post_status' => 'publish',
		'post_type' => 'post',
		'offset' => $offset,
		'cat' => $cat,
		'posts_per_page' => $posts,
		'ignore_sticky_posts' => true,
		'orderby'             => $orderby,
		'order'               => $order,
	);

	// Added for Flatsome v2 fallback
	if ( get_theme_mod('flatsome_fallback', 0) && $category ) {
		$args['category_name'] = $category;
	}

	// If custom ids
	if ( !empty( $ids ) ) {
		$ids = explode( ',', $ids );
		$ids = array_map( 'trim', $ids );

		$args = array(
			'post__in' => $ids,
            'post_type' => array(
                'post',
                'featured_item', // Include for its tag archive listing.
            ),
			'numberposts' => -1,
			'orderby' => 'post__in',
			'posts_per_page' => 9999,
			'ignore_sticky_posts' => true,
		);

		// Include for search archive listing.
		if ( is_search() ) {
			$args['post_type'][] = 'page';
		}
	}

	$recentPosts = new WP_Query( $args );

	// Get repeater HTML.
	get_flatsome_repeater_start($repeater);
?>
<div class="owl-flatsome-post vh_shortcode">
<?php
	while ( $recentPosts->have_posts() ) : $recentPosts->the_post();

		$col_class    = array( 'post-item' );
		$show_excerpt = $excerpt;

		if(get_post_format() == 'video') $col_class[] = 'has-post-icon';

		if($type == 'grid'){
		if($grid_total > $current_grid) $current_grid++;
		$current = $current_grid-1;

		$col_class[] = 'grid-col';
		if($grid[$current]['height']) $col_class[] = 'grid-col-'.$grid[$current]['height'];

		if($grid[$current]['span']) $col_class[] = 'large-'.$grid[$current]['span'];
		if($grid[$current]['md']) $col_class[] = 'medium-'.$grid[$current]['md'];

		// Set image size
		if($grid[$current]['size']) $image_size = $grid[$current]['size'];

		// Hide excerpt for small sizes
		if($grid[$current]['size'] == 'thumbnail') $show_excerpt = 'false';
	}
?>
		<div class="<?php echo implode(' ', $col_class); ?>" <?php echo $animate;?>>
		<?php get_template_part('template-parts/grid-post', null, array('post_type' => 'post')); ?>
		</div>
<?php endwhile;
wp_reset_query();
?>
</div>

<?php

// Get repeater end.
get_flatsome_repeater_end($atts);

$content = ob_get_contents();
ob_end_clean();
return $content;
}

add_shortcode("blog_posts", "shortcode_latest_from_blog");
