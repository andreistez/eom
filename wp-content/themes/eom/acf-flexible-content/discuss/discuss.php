<?php

/**
 * Discuss - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Discuss
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'discuss', THEME_URI . '/static/css/discuss/discuss.min.css', [], THEME_VERSION );

$title	= get_sub_field( 'title' );
$desc	= get_sub_field( 'desc' );

if( ! $title && ! $desc ) return;
?>

<section class="discuss">
	<div class="container">
		<div class="discuss__wrapper">
			<div class="discuss__heading">
				<?php
				if( $title ) echo '<h2 class="h2 violet">', esc_html( $title ), '</h2>';

				if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
				?>
			</div>

			<?php echo do_shortcode( '[contact-form-7 id="076c6e5" title="Discuss"]' ) ?>

			<!--<form class="form">
				<fieldset>
					<div class="form__inputs">
						<div class="form__inputs_top">
							<div class="form__inputs_wrapper">
								<input name="name" type="text" placeholder="First name">
								<input name="lastname" type="text" placeholder="Last name">
							</div>
							<input name="email" type="email" placeholder="Email">
						</div>
						<div class="form__inputs_bottom">
							<div class="form__inputs_wrapper">
								<input name="job" type="text" placeholder="Job Title">
							</div>
							<input name="organization" type="text" placeholder="Organization">
						</div>
						<textarea name="text" placeholder="Message"></textarea>
					</div>
					<div class="form__submit">
						<div class="checkbox__wrapper">
							<input name="check" id="check" type="checkbox">
							<label for="check">
                                    <span class="check__text">
                                        Permission
                                    </span>
								<span class="check__text_desktop">
                                        I give you permission to contact me.
                                    </span>
							</label>
						</div>
						<button class="form__button">
							Submit
							<div class="form__button_arrow">
								→
							</div>
						</button>
					</div>
				</fieldset>
			</form>-->
		</div>
	</div>
</section>

