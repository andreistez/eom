<?php

/**
 * Single post content.
 *
 * @package WordPress
 * @subpackage eom
 */

// If this is NOT single post page - do nothing.
if( ! is_singular( 'post' ) ) return;

$post_id = get_the_ID();
?>

<article class="post-single post-<?php echo esc_attr( $post_id ) ?>">
	<div class="container">
		<div class="post-single-content">
			<h1 class="h1"><?php the_title() ?></h1>

			<?php
			if( has_post_thumbnail() )
				echo get_the_post_thumbnail( $post_id, 'large' );

			the_content();
			?>
		</div>
	</div>
</article><!-- .post-single -->

