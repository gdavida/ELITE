<?php
/**
 * Template part for displaying home why go with elite
 *
 *
 * @package ELITE
 */

?>

<section class="why-elite">
	<div class="row h1-row flex">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ui/h1-triangle.png" alt="">
			<h1 class="">Why Go With Elite</h1>
	</div>
	<div class="row inside-container">
		<div class="">
			<div class="each-why-elite flex">
				<img src="<?php the_field('why_1_image'); ?>" alt="">
				<div class="text-wrapper flex">
					<h2><?php the_field('why_1_title'); ?></h2>
					<p><?php the_field('why_1_copy'); ?></p>
				</div>
			</div><!-- /.each-why-elite -1 -->
				<div class="each-why-elite flex">
					<img src="<?php the_field('why_2_image'); ?>" alt="">
					<div class="text-wrapper flex">
						<h2><?php the_field('why_2_title'); ?></h2>
						<p><?php the_field('why_2_copy'); ?></p>
					</div>
				</div><!-- /.each-why-elite -2 -->
					<div class="each-why-elite flex">
						<img src="<?php the_field('why_3_image'); ?>" alt="">
						<div class="text-wrapper flex">
							<h2><?php the_field('why_3_title'); ?></h2>
							<p><?php the_field('why_3_copy'); ?></p>
						</div>
					</div><!-- /.each-why-elite -3 -->
		</div><!-- /.contents -->
	</div><!-- /.page-content -->
</section><!-- /.home.hero -->
