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
    <?php if( have_rows('athletes') ):
      ?>
      <?php			 	// loop through the rows of data

    while ( have_rows('athletes') ) : the_row(); ?>

 		<div class="each-athlete">
 			<a href="#">
 				<img class="" src="<?php echo get_sub_field('image'); ?>"
			</a>
 			<div class="text-wrapper">
 				<h3><?php echo get_sub_field('first_name'); ?> <?php echo get_sub_field('last_name'); ?></h3>
 				<p><?php echo get_sub_field('team'); ?> - <?php echo get_sub_field('position'); ?></p>
 			</div>

 		</a>
 		</div>

            <?php
              endwhile;
              else :
                // no rows found
              endif; ?>

 	</div>
 </div>
<?php
get_sidebar();
get_footer();
?>
