<?php
/**
 * Template part for displaying home why go with elite
 *
 *
 * @package ELITE
 */

 get_header(); ?>

<div class="section container">
	<div class="row">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
			<?php
				$images = get_field('partner_image');

				if( $images ): ?>
						<?php foreach( $images as $image ): ?>
							<div class="each-partner">
								<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
			<?php endforeach; ?>
			<?php endif; ?>
</div>

<?php
get_sidebar();
get_footer();
?>
