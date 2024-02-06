<?php

/**
 * Footer default template.
 *
 * @see Options -> Footer.
 *
 * @package WordPress
 * @subpackage eom
 */
?>

			<footer class="footer">
				<div class="container">
                    <div class="footer__wrapper">
                        <a href="/" class="footer__logo">
                            <img src="<?php echo THEME_URI ?>/static/img/footer-logo.svg" alt="">
                        </a>
                        <div class="footer__inner">
                            <nav class="footer__nav">
                                <div class="footer__heading">
                                    Economics of Mutuality Alliance Members
                                </div>
                                <ul class="menu" id="footer-menu-1">
                                    <li class="menu-item">
                                        <a href="#">
                                            Economics of Mutuality Foundation
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Human Flourishing Foundation
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Mutual Value Investments
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Mutual Value Labs
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="footer__nav">
                                <div class="footer__heading">
                                    resources
                                </div>
                                <ul class="menu" id="footer-menu-2">
                                    <li class="menu-item">
                                        <a href="#">
                                            Latest News and Content
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Oxford Book 
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Oxford Forum
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Knowledge Archive
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="footer__links">
                                <div class="footer__heading">
                                    Connect
                                </div>
                                <div class="footer__links_inner">
                                    <a href="mailto:eom@gmail.com">
                                        Email
                                    </a>
                                    <a href="https://www.linkedin.com/">
                                        Linkedin
                                    </a>
                                </div>
                            </div>
                            <form class="subscribe">
                                <div class="footer__heading">
                                    newsletter
                                </div>
                                <fieldset>
                                    <div class="input__wrapper">
                                        <input name="email" type="email" placeholder="Enter your email">
                                        <button class="subscribe__button">→</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="footer__legal">
                        <div class="footer__legal_wrapper">
                            <div class="footer__legal_links">
                                <a class="legal__link" href="#">Legal</a>
                                <a class="legal__link" href="#">privacy Policy</a>
                                <a class="legal__link" href="#">Accessibility</a>
                            </div>
                            <div class="footer__year">
                                © Economics of Mutuality Alliance 2024
                            </div>
                        </div>
                    </div>
                </div>
			</footer>
			<?php wp_footer() ?>
		</div><!-- .wrapper -->
        <div class="lines"></div>
	</body>
</html>
