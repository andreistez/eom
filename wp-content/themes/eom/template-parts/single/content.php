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
	<section class="news-link-hero">
		<div class="container">
			<h1 class="h1"><?php the_title() ?></h1>

			<?php
			if( has_post_thumbnail() )
				echo get_the_post_thumbnail( $post_id, 'large' );
			?>
		</div>
	</section>
</article><!-- .post-single -->

