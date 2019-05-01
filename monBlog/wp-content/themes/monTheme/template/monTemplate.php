<?php
/*
Template Name: monTemplate
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php get_header(); ?>
<section class="row justify-content-center">
<div class="article col-12 col-lg-8">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content' );
			}

		}
?>
</div>
<div class="col-lg-3">
<?php
if( is_active_sidebar( 'zone-widgets-1' ) ):
dynamic_sidebar( 'zone-widgets-1' );
endif;
?>
<?php get_sidebar(); ?>
</div>
</section>
</div> >
<?php get_footer(); ?>