<?php

/**
 * [button]
 */
function button_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text'        => '',
		'style'       => '',
		'color'       => 'primary',
		'size'        => '',
		'animate'     => '',
		'link'        => '',
		'target'      => '_self',
		'rel'         => '',
		'border'      => '',
		'expand'      => '',
		'tooltip'     => '',
		'padding'     => '',
		'radius'      => '',
		'letter_case' => '',
		'mobile_icon' => '',
		'icon'        => '',
		'icon_pos'    => '',
		'icon_reveal' => '',
		'depth'       => '',
		'depth_hover' => '',
		'class'       => '',
		'visibility'  => '',
		'id'          => '',
		'block'       => '',
	), $atts ) );

	// Old button Fallback.
	if ( strpos( $style, 'primary' ) !== false ) {
		$color = 'primary';
	} elseif ( strpos( $style, 'secondary' ) !== false ) {
		$color = 'secondary';
	} elseif ( strpos( $style, 'white' ) !== false ) {
		$color = 'outline-secondary';
	} elseif ( strpos( $style, 'success' ) !== false ) {
		$color = 'dark';
	} elseif ( strpos( $style, 'alert' ) !== false ) {
		$color = 'danger';
	}

	if ( strpos( $style, 'alt-button' ) !== false ) {
		$style = 'outline';
	}

	if($color == 'white'){
		$color = 'outline-secondary';
	}
	if($color == 'alert'){
		$color = 'danger';
	}
	if($color == 'success'){
		$color = 'dark';
	}

	$attributes = array();
	$icon_left  = $icon && $icon_pos == 'left' ? '' : '';
	$icon_right = $icon && $icon_pos !== 'left' ? '' : '';

	// Add Button Classes.
	$classes   = array();
	$classes[] = 'theme-btn btn-sm';

	if ( $color ) {
		$classes[] = 'btn-'.$color;
	}
	if ( $style ) {
		$classes[] = 'is-' . $style;
	}
	if ( $size ) {
		$classes[] = 'is-' . $size;
	}
	if ( $depth ) {
		$classes[] = 'box-shadow-' . $depth;
	}
	if ( $depth_hover ) {
		$classes[] = 'box-shadow-' . $depth_hover . '-hover';
	}
	
	$classes[] = 'uppercase';
	
	if ( $icon_reveal ) {
		$classes[] = 'reveal-icon';
	}
	if ( $expand ) {
		$classes[] = 'expand';
	}
	if ( $class ) {
		$classes[] = $class;
	}
	if ( $visibility ) {
		$classes[] = $visibility;
	}
	if ( $animate ) {
		$attributes['data-animate'] = $animate;
	}
	if ( $target == '_blank' ) {
		$attributes['rel'][] = 'noopener noreferrer';
	}
	if ( $rel ) {
		$attributes['rel'][] = $rel;
	}
	if ( $link ) {
		// Smart links.
		$link               = flatsome_smart_links( $link );
		$attributes['href'] = $link;
		if ( $target ) {
			$attributes['target'] = $target;
		}
	}
	if ( $tooltip ) {
		$classes[]           = 'has-tooltip';
		$attributes['title'] = $tooltip;
	}

	$styles = '';

	$attributes['class'] = $classes;
	$attributes          = flatsome_html_atts( $attributes );

	// Template is located in template-parts/shortcodes.
	return flatsome_template( 'shortcodes/button', get_defined_vars() );
}

add_shortcode( 'button', 'button_shortcode' );

/**
 * [facebook_login_button]
 */
function facebook_login_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text' => 'Login / Register with Facebook',
		'size' => 'medium',
	), $atts ) );
	ob_start();

	$facebook_url = add_query_arg( array( 'loginSocial' => 'facebook' ), wp_login_url() );
	?>
	<a href="<?php echo esc_url( $facebook_url ); ?>" class="button <?php echo esc_attr( $size ); ?> facebook-button" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">
		<?php echo $text; ?>
	</a>
	<?php
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode( 'facebook_login_button', 'facebook_login_shortcode' );


/**
 * Phone button
 */
function ux_phone( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'number'  => '+000 000 000',
		'tooltip' => '',
		'border'  => '2px',
	), $atts ) );

	return do_shortcode( '<div class="header-button">[button style="outline" class="circle" icon="icon-phone" color=" " icon_pos="left" text="' . $number . '" link="tel:' . $number . '" tooltip="' . $tooltip . '" border="' . $border . '"]</div>' );
}

add_shortcode( 'phone', 'ux_phone' );


/**
 * Header button
 */
function ux_header_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text'    => 'Order Now',
		'link'    => '',
		'tooltip' => '',
		'border'  => '2px',
		'target'  => '_self',

	), $atts ) );

	return do_shortcode( '<div class="header-button">[button style="outline" class="circle" color=" " text="' . $text . '" link="' . $link . '" target="' . $target . '" tooltip="' . $tooltip . '" border="' . $border . '"]</div>' );
}

add_shortcode( 'header_button', 'ux_header_button' );


function ux_video_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'video' => 'https://www.youtube.com/watch?v=f3Hh_qSkpaA',
		'size'  => '',
	), $atts ) );
	if ( $size ) {
		$size = 'style="font-size:' . $size . '%"';
	}

	return '<div class="video-button-wrapper" ' . $size . '><a href="' . $video . '" class="button open-video icon circle is-outline is-xlarge"></a></div>';
}

add_shortcode( 'video_button', 'ux_video_button' );
