<?php

/**
 * Members - ACF Flexible Content section.
 * Single member layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Members
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $member = $args['member'] ?? null ) return;

$logo_text	= $member['logo_text'];
$title		= $member['title'];
$text		= $member['text'];
$link		= $member['link'];

if( ! $logo_text && ! $title && ! $text ) return;
?>

<div class="members__item">
	<?php
	if( $logo_text ){
		?>
		<div class="members__item_logo">
			<div class="logo small">
				<div class="logo__inner">
					<?php get_template_part( 'components/logo/gears-and-text', null, ['text' => $logo_text] ) ?>
				</div>
			</div>
		</div>
		<?php
	}
	?>

	<div class="members__item_inner">
		<?php
		if( $title ) echo '<div class="members__item_title">', esc_html( $title ), '</div>';

		if( $text ) echo '<div class="members__item_text">', esc_html( $text ), '</div>';

		if( $link ){
			$link_url		= $link['url'];
			$link_title		= $link['title'];
			$link_target	= $link['target'] ? ' target="_blank"' : '';
			?>
			<a href="<?php echo esc_url( $link_url ) ?>" class="members__item_link dark"<?php echo $link_target ?>>
				<?php echo esc_html( $link_title ) ?> <span>→</span>
			</a>
			<?php
		}
		?>
	</div>
</div>

