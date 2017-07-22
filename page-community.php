<?php
/**
 * Template part for displaying home why go with elite
 *
 *
 * @package ELITE
 */

 get_header(); ?>

<section class="community inside-container">
  <?php if( have_rows('community_organizations') ):
    ?>
    <?php			 	// loop through the rows of data

  while ( have_rows('community_organizations') ) : the_row(); ?>

		<div class="each-community" style="">
    <div class="image-wrapper">
      <img style="" class="" src="<?php echo get_sub_field('org_photo') ?>">
    </div>
      <div class="text-wrapper">
  			<h2>
          <a href="<?php echo get_sub_field('org_website' ) ?>" target="_blank">
          <?php echo get_sub_field('org_name' ) ?>
          </a>
        </h2>
  			<p><?php echo get_sub_field('org_description' ) ?></p>
      </div>
		</div>

      <?php
        endwhile;
        else :
          // no rows found
        endif; ?>
</section><!-- /.home.hero -->

<?php
get_sidebar();
get_footer();
?>
