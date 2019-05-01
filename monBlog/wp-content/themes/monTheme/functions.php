<?php

// Création du menu //
function bpc_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'bpc_custom_new_menu' );


  function notux_widgets_init() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'Menu de navigation', '' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'Afficher les categories et autre widgets', '' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_init' );


?>