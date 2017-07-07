<?php
/**
 * Template part for displaying home latest clients section
 *
 *
 * @package ELITE
 */

?>

<section class="twitter">
	<div class="twitter-angled-piece support-red-bg">
		<h3 class="white-text"><i class="fa fa-twitter" aria-hidden="true"></i> Follow us @ELITEathleteM</h3>
	</div>
	<div class="row twitter-feed  primary-gray-bg">
		<div class="flex inside-container">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- /.twitter-feed -->
	</div><!-- /.page-content -->
</section><!-- /.home.hero -->
