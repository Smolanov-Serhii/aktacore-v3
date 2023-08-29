<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aktacore-v3
 */

?>

	<footer class="footer">
		<div class="footer__top">
            <div class="footer__container main-container">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri() . '/img/logo-footer.svg' ?>" alt="Footer logo">
                </div>
                <nav class="footer__nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'main-menu',
                        )
                    );
                    ?>
                </nav>
                <div class="footer__socials">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/telegram.svg' ?>">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/twetter.svg' ?>">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/facebook.svg' ?>">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/instagramm.svg' ?>">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="footer__container main-container">
                <div class="copyright">
                    Copyright 2009 - <?php echo date('Y') ?> All rights reserved
                </div>
            </div>
        </div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
