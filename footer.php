<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ELITE
 */

?>

	</div><!-- #content -->


</div><!-- #page -->
	<div class="contact-us primary-red-bg" id="contact-us">
		<div class="contact-info">
			<div class="text-wrapper">
				<h2>Contact Us</h2>
				<p><strong>Scottsdale Office</strong><br>
					2390 W. Ray Road<br>
					Suite 3<br>
					Chandler, AZ 85224
				</p>
				<p><strong>Nashville Office</strong><br>
					1720 West End Ave<br>
					Suite #330<br>
					Nashville, TN 37203
				</p>
			</div>
			<div class="social-media-wrapper">
				<h2>Follow Us</h2>
				<div class="icon-wrapper">
					<a href="http://www.instagram.com" target="_blank">
						<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					</a>
					<a href="http://www.facebook.com" target="_blank">
						<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					</a>
					<a href="mailto:gdavida@gmail.com" target="_blank">
						<i class="fa fa-envelope-open fa-2x" aria-hidden="true"></i>
					</a>
					<a href="tel:+01-562-867-5309">
						<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="contact-form white-text">
			<?php gravity_form( 1, false, false, false, '', false ); ?>
		</div>
	</div>
	<footer id="colophon" class="site-footer container-wrapper" role="contentinfo">
		<div id="bottom-menu" class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/nav-logo.png"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'footer-menu' ) ); ?>
		</div><!--
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'elite' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'elite' ), 'elite', '<a href="https://automattic.com/" rel="designer">DC Gaffney</a>' ); ?>
		</div> --><!-- .site-info -->
	</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
