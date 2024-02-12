<?php

/**
 * Remove auto paragraph wrap in Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Theme custom functions.
 * Please place all your custom functions declarations inside this file.
 *
 * @package WordPress
 * @subpackage eom
 */

add_filter( 'wp_check_filetype_and_ext', function( $data, $file, $filename, $mimes ){
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4 );

add_filter( 'upload_mimes', 'eom_cc_mime_types' );
function eom_cc_mime_types( $mimes ): array
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_action( 'admin_head', 'eom_fix_svg' );
function eom_fix_svg(): void
{
	echo '<style>
		.attachment-266x266, .thumbnail img {
		     width: 100% !important;
		     height: auto !important
		}
    </style>';
}

/**
 * Output formatted data for debugging & testing.
 *
 * @param $data
 * @return void
 */
function eom_prettify_data( $data ): void
{
	echo '<pre>' , print_r( $data, 1 ), '</pre>';
}

/**
 * Clean incoming value from trash.
 *
 * @param	mixed	$value	Some value to clean.
 * @return	string
 */
function eom_clean( $value ): string
{
	$value	= wp_unslash( $value );
	$value	= trim( $value );
	$value	= stripslashes( $value );
	$value	= strip_tags( $value );

	return htmlspecialchars( $value );
}

/**
 * Helps to get template part into a variable.
 *
 * @param string		$template_name	Template file name.
 * @param string|null	$part_name		Template part file name.
 * @param array			$args			Arguments to pass.
 * @return string						HTML content from template.
 */
function eom_load_template_part( string $template_name, string $part_name = null, array $args = [] ): string
{
	ob_start();
	get_template_part( $template_name, $part_name, $args );
	$tp = ob_get_contents();
	ob_end_clean();

	return $tp;
}

/**
 * Counts time to read in minutes.
 *
 * @param int $post_id
 * @param int $speed    How many words person can read during 1 minute.
 * @return int          Minutes count.
 */
function eom_get_reading_time( int $post_id, int $speed = 120 ): int
{
	if( ! $post_id ) return 0;

	$content    = get_the_content( null, false, $post_id );
	$content    = strip_tags( $content );
	$word_count = str_word_count( trim( $content ) );

	return $word_count < $speed ? 1 : ceil( $word_count / $speed );
}

