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
    <?php if( have_rows('our_staff') ):
      ?>
      <?php			 	// loop through the rows of data

    while ( have_rows('our_staff') ) : the_row(); ?>

		<div class="each-our-staff">
      <div class="title">
        <h2><?php echo get_sub_field('name' ) ?></h2>
      </div>
      <div class="text-wrapper">
        <p><em><?php echo get_sub_field('job_title'); ?></em></p>
        <p><?php echo get_sub_field('staff_bio'); ?></p>
      </div>
		</div>

      <?php
        endwhile;
        else :
          // no rows found
        endif; ?>
<?php
get_sidebar();
get_footer();
?>
