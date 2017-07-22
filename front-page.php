<?php
/**
 * The homepage file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ELITE
 */

get_header(); ?>

	<div id="primary" class="content-area container-wrapper">
		<main id="main" class="site-main container" role="main">

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_template_part( 'template-parts/section', 'featured-video' ); ?>
<?php get_template_part( 'template-parts/section', 'latest-clients' ); ?>
<?php get_template_part( 'template-parts/section', 'why-elite' ); ?>
<?php get_template_part( 'template-parts/section', 'instagram' ); ?>
<?php get_template_part( 'template-parts/section', 'twitter' ); ?>

<?php

get_footer();
