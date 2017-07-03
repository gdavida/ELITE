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
    <div class="left-column">

		<?php
			$our_staff_i = 1;
			$our_staff_args = array(
			'post_type' => 'our_staff',
			'posts_per_page' => -1,
			'order' => 'DESC',
			);
      $counter = 1;
			$our_staff_query = new WP_Query($our_staff_args);
			if ( $our_staff_query->have_posts() ) :
			while ( $our_staff_query->have_posts() && $counter === 1  ) : $our_staff_query->the_post();

    ?>
		<div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
      <div class="text-wrapper">
        <h3><?php the_field('staff_name'); ?></h3>
          <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </div>
      <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
        <p><em><?php the_field('job_title'); ?></em></p>
        <p><?php the_field('staff_bio'); ?></p>
      </div>
		</div>
		<?php $counter ++;
		endwhile;
		endif; wp_reset_postdata(); ?>
    <?php
    if ( $our_staff_query->have_posts() ) :
    while ( $our_staff_query->have_posts() && $counter === 2  ) : $our_staff_query->the_post();

  ?>
  <div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
    <div class="text-wrapper">
      <h3><?php the_field('staff_name'); ?></h3>
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </div>
    <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
      <p><em><?php the_field('job_title'); ?></em></p>
      <p><?php the_field('staff_bio'); ?></p>
    </div>
  </div>
  <?php $counter ++;
  endwhile;
  endif; wp_reset_postdata(); ?>  <?php
    if ( $our_staff_query->have_posts() ) :
    while ( $our_staff_query->have_posts() && $counter === 3  ) : $our_staff_query->the_post();

  ?>
  <div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
    <div class="text-wrapper">
      <h3><?php the_field('staff_name'); ?></h3>
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </div>
    <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
      <p><em><?php the_field('job_title'); ?></em></p>
      <p><?php the_field('staff_bio'); ?></p>
    </div>
  </div>
  <?php $counter ++;
  endwhile;
  endif; wp_reset_postdata(); ?>  <?php
    if ( $our_staff_query->have_posts() ) :
    while ( $our_staff_query->have_posts() && $counter === 4  ) : $our_staff_query->the_post();

  ?>
  <div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
    <div class="text-wrapper">
      <h3><?php the_field('staff_name'); ?></h3>
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </div>
    <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
      <p><em><?php the_field('job_title'); ?></em></p>
      <p><?php the_field('staff_bio'); ?></p>
    </div>
  </div>
  <?php $counter ++;$counter ++;
  endwhile;
  endif; wp_reset_postdata(); ?>
</div>

<div class="right-column"> <?php
  if ( $our_staff_query->have_posts() ) :
  while ( $our_staff_query->have_posts() && $counter === 6  ) : $our_staff_query->the_post();

?>
<div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
  <div class="text-wrapper">
    <h3><?php the_field('staff_name'); ?></h3>
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </div>
  <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
    <p><em><?php the_field('job_title'); ?></em></p>
    <p><?php the_field('staff_bio'); ?></p>
  </div>
</div>
<?php $counter ++;
endwhile;
endif; wp_reset_postdata(); ?> <?php
  if ( $our_staff_query->have_posts() ) :
  while ( $our_staff_query->have_posts() && $counter === 7  ) : $our_staff_query->the_post();

?>
<div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
  <div class="text-wrapper">
    <h3><?php the_field('staff_name'); ?></h3>
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </div>
  <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
    <p><em><?php the_field('job_title'); ?></em></p>
    <p><?php the_field('staff_bio'); ?></p>
  </div>
</div>
<?php $counter ++;
endwhile;
endif; wp_reset_postdata(); ?> <?php
  if ( $our_staff_query->have_posts() ) :
  while ( $our_staff_query->have_posts() && $counter === 8  ) : $our_staff_query->the_post();

?>
<div class="each-our-staff format<?php echo $counter; ?>" onclick="showStaffBio<?php echo $counter; ?>()">
  <div class="text-wrapper">
    <h3><?php the_field('staff_name'); ?></h3>
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </div>
  <div class="bio-wrapper" id="bioWrapper<?php echo $counter; ?>">
    <p><em><?php the_field('job_title'); ?></em></p>
    <p><?php the_field('staff_bio'); ?></p>
  </div>
</div>
<?php $counter ++;
endwhile;
endif; wp_reset_postdata(); ?>
</div>

	</div>
</div>

<script>

function showStaffBio1() {
var x = document.getElementById('bioWrapper1');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio2() {
var x = document.getElementById('bioWrapper2');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio3() {
var x = document.getElementById('bioWrapper3');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio4() {
var x = document.getElementById('bioWrapper4');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio5() {
var x = document.getElementById('bioWrapper5');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio6() {
var x = document.getElementById('bioWrapper6');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio7() {
var x = document.getElementById('bioWrapper7');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio8() {
var x = document.getElementById('bioWrapper8');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio9() {
var x = document.getElementById('bioWrapper9');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}
function showStaffBio10() {
var x = document.getElementById('bioWrapper10');
if (x.style.display === 'none') {
    x.style.display = 'block';
} else {
    x.style.display = 'none';
}
}

</script>
<?php
get_sidebar();
get_footer();
?>
