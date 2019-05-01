<?php get_header(); ?>
<section class="row justify-content-center">
<div class="article col-12 col-lg-8 m-auto pl-3">
<!-- Récupère les articles start -->
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
<!-- Récupère les articles end -->
<!-- Les sidebare start -->
<div class="col-lg-3 m-auto">
<?php
if( is_active_sidebar( 'zone-widgets-1' ) ):
dynamic_sidebar( 'zone-widgets-1' );
endif;
?>
<?php get_sidebar(); ?>
</div>
<!-- Les sidebare end -->
</section>
</div> 
<!-- Fonction pour les commentaires start -->
<div class="commentaires">
<?php comments_template(); ?>
</div>
<!-- Fonction pour les commentaires end -->
<?php get_footer(); ?>