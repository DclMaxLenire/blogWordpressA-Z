<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/bootstrap.min.css" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<header>
<body <?php body_class(); ?>>
    <div class="header row justify-content-center">
            <div class="menu col-12 col-lg-2"> 
                <!-- Le menu start -->
            <?php wp_nav_menu(); ?>
                <!-- Le menu end -->
        </div>
    </div>
</header>