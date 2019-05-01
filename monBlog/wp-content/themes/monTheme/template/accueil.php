<?php
/*
Template Name: Home
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php get_header(); ?>
<h2 class="text-center">Bienvenu sur le blog </h2>
<section class="row justify-content-center">
<div class="article col-12 col-lg-8 col-sm-12">
<img class="img rounded col-12 col-sm-12" src="<?php bloginfo('template_url'); ?>../../../uploads/2019/05/logo1.jpg">
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
<div class="col-lg-3 col-sm-12">
<?php
if( is_active_sidebar( 'zone-widgets-1' ) ):
dynamic_sidebar( 'zone-widgets-1' );
endif;
?>
<?php get_sidebar(); ?>
</div>
</section>
</div> <!– /.row –>
<?php get_footer(); ?>
