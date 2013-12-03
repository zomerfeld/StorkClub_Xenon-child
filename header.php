<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'web2feel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container_12">

<div class="topmenu">
		<a href="/"> <img class="logo" src="http://newstorkclub.com/wp-content/uploads/2013/10/Site_logo_color1.png" alt="logo"> </a>
		<a href="https://www.facebook.com/pages/Stork-Club/167951546029" alt="facebook" target="_blank"><i class="icon-facebook-sign"></i> </a>
		<a href="https://twitter.com/TheStorkClub" alt="twitter" target="_blank"><i class="icon-twitter-sign"></i></a>
		<a href="http://www.youtube.com/results?search_query=stork+club+oakland&oq=stork+club+oakland&gs_l=youtube.3..0.561.2419.0.2516.18.11.0.6.6.0.134.919.8j3.11.0...0.0...1ac.1.11.youtube.uVWWkGvAwBo" alt="youtube" target="_blank"><i class="icon-youtube-sign"></i></a>
	<p> 2330 TELEGRAPH AVE., OAKLAND, CA 94612 </p>
	<i class="icon-beer"></i>
	<p>12PM - SHOWTIME!</p>
<!--	<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?> -->

</div>

<div id="main" class="site-main cf">
<?php get_sidebar(); ?>