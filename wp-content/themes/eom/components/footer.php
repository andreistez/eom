<?php

/**
 * Footer default template.
 *
 * @see Options -> Footer.
 *
 * @package WordPress
 * @subpackage eom
 */

$logo			= get_field( 'logo_footer', 'option' );
$col_title_1	= get_field( 'first_column_title', 'option' );
$col_title_2	= get_field( 'second_column_title', 'option' );
$col_title_3	= get_field( 'third_column_title', 'option' );
$col_title_4	= get_field( 'fourth_column_title', 'option' );
?>

			<footer class="footer" id="footer">
				<div class="container">
                    <div class="footer__wrapper">
						<?php
						if( $logo ){
							?>
							<a href="<?php echo home_url( '/' ) ?>" class="footer__logo">
                                <div class="logo__inner">
                                    <?php get_template_part( 'components/logo/gears-and-text', null, ['text' => 'Economics<br/>of mutuality<br/>alliance'] ) ?>
                                </div>
							</a>
							<?php
						}
						?>

                        <div class="footer__inner">
                            <nav class="footer__nav">
								<?php
								if( $col_title_1 ) echo '<div class="footer__heading">', esc_html( $col_title_1 ), '</div>';

	                            wp_nav_menu( [
		                            'theme_location'	=> 'footer_menu_1',
		                            'container'			=> false,
									'menu_id'			=> 'footer-menu-1'
	                            ] );
	                            ?>
                            </nav>

                            <nav class="footer__nav">
	                            <?php
	                            if( $col_title_2 ) echo '<div class="footer__heading">', esc_html( $col_title_2 ), '</div>';

	                            wp_nav_menu( [
		                            'theme_location'	=> 'footer_menu_2',
		                            'container'			=> false,
		                            'menu_id'			=> 'footer-menu-2'
	                            ] );
	                            ?>
                            </nav>

                            <div class="footer__links">
	                            <?php
	                            if( $col_title_3 ) echo '<div class="footer__heading">', esc_html( $col_title_3 ), '</div>';

	                            wp_nav_menu( [
		                            'theme_location'	=> 'footer_menu_3',
		                            'container'			=> false,
		                            'menu_class'		=> 'footer__links_inner'
	                            ] );
	                            ?>
                            </div>

                            <div class="subscribe">
                                <?php
                                if( $col_title_4 ) echo '<div class="footer__heading">', esc_html( $col_title_4 ), '</div>';

								echo do_shortcode( '[contact-form-7 id="d1561b2" title="Subscribe"]' );
								?>
                            </div>
                        </div>
                    </div>

                    <div class="footer__legal">
                        <div class="footer__legal_wrapper">
	                        <?php
	                        wp_nav_menu( [
		                        'theme_location'	=> 'footer_menu_bottom',
		                        'container'			=> false,
		                        'menu_class'		=> 'footer__legal_links'
	                        ] );
	                        ?>
                            <div class="footer__year">© Economics of Mutuality Alliance <?php echo date( 'Y' ) ?></div>
                        </div>
                    </div>
                </div>
			</footer>
        </div>
			<?php wp_footer() ?>
		</div><!-- .wrapper -->
        <div class="lines"></div>
	</body>
</html>
