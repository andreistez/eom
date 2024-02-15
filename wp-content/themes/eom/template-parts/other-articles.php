<?php

/**
 * Other Articles section.
 *
 * @package WordPress
 * @subpackage eom
 */

$link		= get_field( 'single_post_other_link', 'option' );
$exclude	= $args['exclude'] ?? '';
$posts		= get_posts( [
	'post_type'		=> 'post',
	'post_status'	=> 'publish',
	'numberposts'	=> 4,
	'post__not_in'	=> is_array( $exclude ) ? $exclude : [$exclude]
] );

if( empty( $posts ) ) return;
?>

<div class="post-single-latest">
	<h2><?php _e( 'Other Articles', 'eom' ) ?></h2>

	<div class="latest__inner">
		<?php
		foreach( $posts as $p )
			get_template_part( 'components/cards/post', null, ['id' => $p->ID] );
		?>
	</div>

	<?php
	if( $link ){
		$url	= $link['url'];
		$title	= $link['title'];
		$target	= $link['target'] ? ' target="_blank"' : '';
		?>
		<div class="link__arrow_wrapper center">
			<a href="<?php echo esc_url( $url ) ?>" class="link__arrow"<?php echo $target ?>>
				<?php echo esc_html( $title ) ?> <span>→</span>
			</a>
		</div>
		<?php
	}
	?>
</div>

