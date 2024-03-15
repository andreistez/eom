<?php

/**
 * Latest - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Latest
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'latest', THEME_URI . '/static/css/latest/latest.min.css', [], THEME_VERSION );
wp_enqueue_script( 'latest', THEME_URI . '/static/js/latest/latest.min.js', ['jquery'], THEME_VERSION, true );

$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' );
$link			= get_sub_field( 'link' );
?>

<section class="latest">
	<div class="container">
		<div class="latest__wrapper">
            <div class="subtitle" style="color: <?php echo esc_attr( $title_color ) ?>">Economics of Mutuality Alliance</div>
			<?php
			if( $title )
				echo '<h2 class="h2" style="color:', esc_attr( $title_color ), '">', $title, '</h2>';
			?>

			<div class="latest__inner"><span class="loader"></span></div>

			<?php
			if( $link ){
				$link_url	= $link['url'];
				$link_title	= $link['title'];
				$target		= $link['target'] ? ' target="_blank"' : '';
				?>
				<div class="link__arrow_wrapper center">
					<a href="<?php echo esc_url( $link_url ) ?>" class="link__arrow"<?php echo $target ?>>
						<?php echo esc_html( $link_title ) ?> <span>→</span>
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

