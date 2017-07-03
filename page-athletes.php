<?php
/**
 * Template part for displaying home why go with elite
 *
 *
 * @package ELITE
 */

 get_header(); ?>


 <div class="section athletes">
 	<div class="row">
 		<?php
 			$featured_client_i = 1;
 			$featured_client_args = array(
 			'post_type' => 'featured_client',
 			'posts_per_page' => -1,
 			'order' => 'DESC',
 			);
 			$featured_client_query = new WP_Query($featured_client_args);
 			if ( $featured_client_query->have_posts() ) :
 			while ( $featured_client_query->have_posts() ) : $featured_client_query->the_post();
 		?>

 		<div class="each-athlete">
 			<a href="#">
 				<img class="" src="<?php the_field('athlete_image'); ?>"
			</a>
 			<div class="text-wrapper">
 				<h3><?php the_field('athlete_name'); ?></h3>
 				<p><?php the_field('subtitle_1'); ?> - <?php the_field('subtitle_2'); ?></p>
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
