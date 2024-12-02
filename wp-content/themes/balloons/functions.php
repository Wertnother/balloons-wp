<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'icon-font', get_template_directory_uri() . '/assets/css/icon-font.css');
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Adds SVG to the list of allowed file uploads.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Fixing the MIME type for SVG files.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// the mime type was reset, let's fix it
	// and also check user rights
	if( $dosvg ){

		// allow
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// forbid
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
?>