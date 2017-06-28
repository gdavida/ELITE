<?php
/**
 * Template part for displaying home why go with elite
 *
 *
 * @package ELITE
 */

 get_header(); ?>

<div class="section our-staff">
	<div class="row">
		<?php
			$our_staff_i = 1;
			$our_staff_args = array(
			'post_type' => 'our_staff',
			'posts_per_page' => -1,
			'order' => 'DESC',
			);
			$our_staff_query = new WP_Query($our_staff_args);
			if ( $our_staff_query->have_posts() ) :
			while ( $our_staff_query->have_posts() ) : $our_staff_query->the_post();
		?>

		<div class="each-our-staff">
			<a href="#">
				<img class="" src="http://elite.dev/wp-content/uploads/2017/06/ariel-test.jpg" </a>
			<div class="text-wrapper">
				<h3><?php the_field('staff_name'); ?></h3>
				<p><em><?php the_field('job_title'); ?></em></p>
			</div>

		</a>
		</div>

		<?php
		endwhile;
		endif; wp_reset_postdata(); ?>
	</div>
</div>

<?php
get_sidebar();
get_footer();
?>
