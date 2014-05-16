<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script type="text/javascript" src="//use.typekit.net/ygk8fop.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="app" ng-controller="MainCtrl">
<?php get_template_part('images/svg/svg-defs.svg'); ?>
<header id="navigation">
<a href="<?php echo home_url( '/' ); ?>" class="logo--symbol">
Site Title
</a>
</nav>



</header>
<nav class="nav-row">
<?php 

$menu =  array( 
	'theme_location' 	=> 'primary', 
	'container' 		=> false,
	'echo'            	=> false,
	'items_wrap'		=> '%3$s',
); 
echo strip_tags(wp_nav_menu( $menu ), '<a>' );
?>
</nav>
