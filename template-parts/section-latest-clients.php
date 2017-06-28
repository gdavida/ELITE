<?php
/**
 * Template part for displaying home latest clients section
 *
 *
 * @package ELITE
 */

?>

<section class="latest-clients featured-clients">
	<div class="row h1-row flex">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ui/h1-triangle.png" alt="">
			<h1 class="">The Latest Elite Clients</h1>
	</div>
	<div class="row">
		<div class="contents container">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('homepage_featured_clients') ):
				?>
				<?php			 	// loop through the rows of data

	    while ( have_rows('homepage_featured_clients') ) : the_row(); ?>

			<div class="each-featured-client">
			<a href="#">
					<?php // vars
					$image = get_sub_field('featured_image');
					$title = get_sub_field('featured_title');
					$subtitle = get_sub_field('featured_subtitle');
	        // display a sub field value ?>
					<img class="" src="<?php echo $image; ?>"
			</a>
		<div class="text-wrapper">
			<h3><?php echo $title ?></h3>
			<p><?php echo $subtitle ?></p>
		</div>
	</div>
		<?php
			endwhile;
			else :
				// no rows found
			endif;
		?>
	</div>
<!-- /.contents -->
		<div class="row button-wrapper">
			<a class="btn" href="/athletes">See All Athletes</a>
		</div>
	</div><!-- /.page-content -->
</section><!-- /.home.hero -->
