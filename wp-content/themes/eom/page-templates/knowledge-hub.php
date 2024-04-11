<?php

/**
 * Template name: Knowledge Hub
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

wp_enqueue_style( 'knowledge-hub', THEME_URI . '/static/css/pages/knowledge-hub.min.css', [], THEME_VERSION );

$cats = get_field( 'categories' );
?>

<main class="main">
	<section class="knowledge-hub">
		<div class="container">
            <h1><?php the_title() ?></h1>

			<div class="knowledge-hub-cats">
				<?php
				if( ! empty( $cats ) ){
					foreach( $cats as $cat ){
						$type = $cat['appearance'] ?: 'half-width';

						// If these are custom links.
						if( $cat['is_custom'] ){
							if( ! $custom_links = $cat['custom_links'] ) continue;

							$title			= $cat['title'];
							$desc			= $cat['desc'];
							$view_all_link	= $cat['view_all_link'];
							?>
							<div class="categories-wrapper <?php echo esc_attr( $type ) ?>">
								<?php
								if( $title ) echo '<h2>', esc_html( $title ), '</h2>';

								if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
								?>

								<div class="categories-inner">
									<?php
									foreach( $custom_links as $link )
										get_template_part( 'components/cards/post', 'hub-custom', ['link' => $link] );
									?>
								</div>

								<?php
								if( $view_all_link ){
									$l_title	= $view_all_link['title'];
									$l_url		= $view_all_link['url'];
									$l_target	= $view_all_link['target'] ? ' target="_blank"' : '';
									?>
									<div class="categories-link-wrapper">
										<a class="link__arrow" href="<?php echo esc_url( $l_url ) ?>"<?php echo $l_target?>>
											<?php echo esc_html( $l_title ) ?>
											<span>→</span>
										</a>
									</div>
									<?php
								}
								?>
							</div>
							<?php
						}else{
							if( ! $term = $cat['category'] ) continue;

							$term_id	= $term->term_id;
							$posts		= get_posts( [
								'post_type'		=> 'post',
								'post_status'	=> 'publish',
								'numberposts'	=> 6,
								'category_name'	=> $term->slug
							] );
							?>
							<div class="categories-wrapper <?php echo esc_attr( $type ) ?>">
								<h2><?php echo esc_html( $term->name ) ?></h2>

								<?php
								if( ! empty( $posts ) ){
									echo '<div class="categories-inner">';

									foreach( $posts as $key => $_p ){
										$type = $key > 1 ? 'no-thumb' : 'thumb';
										get_template_part( 'components/cards/post', null, [
											'id'	=> $_p->ID,
											'type'	=> $type
										] );
									}

									echo '</div>';
								}
								?>

								<div class="categories-link-wrapper">
									<a class="link__arrow" href="<?php echo get_category_link( $term_id ) ?>">
										<?php _e( 'View More', 'eom' ) ?>
										<span>→</span>
									</a>
								</div>
							</div>
							<?php
						}
					}
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

