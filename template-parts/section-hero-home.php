<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ELITE
 */

?>


<section class="home hero">
	<div class="text-wrapper">
		<p class="white-text feature">
			<span>The</span>
			<img style="" src="http://elite-athlete.flywheelsites.com/wp-content/themes/elite/images/E-logo.png">
			<br>Experience
		</p>
		<p class="white-text support">
			For The ELITE Performers
		</p>
		<a class="btn" href="#contact-us">
			Contact Us
		</a>
	</div>
	<div id="homeSlideshow">
   <?php if( have_rows('hero_rotating_images') ):
      ?>
      <?php       // loop through the rows of data

    while ( have_rows('hero_rotating_images') ) : the_row(); ?>

		    <div class="each-home-feature-image">
		        <img class="featured-image" src="<?php echo get_sub_field('home_feature_image'); ?>">
						<p style=""><?php echo get_sub_field('hero_caption'); ?></p>

				</div>


  <?php
    endwhile;
    else :
      // no rows found
    endif; ?>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script type="text/javascript">

      $("#homeSlideshow > div:gt(0)").hide();

setInterval(function() {
  $('#homeSlideshow > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo('#homeSlideshow');
}, 5000);

    </script></section>

<div class="home-hero-angled-piece support-red-bg">
</div>
