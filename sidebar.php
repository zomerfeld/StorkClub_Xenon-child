<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>
<div id="secondary" class="widget-area grid_3 equal_height" role="complementary">

		<header id="masthead" class="site-header" role="banner">
		</header><!-- #masthead .site-header -->
		
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>	<?php endif; // end sidebar widget area ?>
		
		<?php get_template_part( 'sponsors' ); ?>
		<?php //get_search_form(); ?>

<!-- <?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?> -->
		
		
				
</div><!-- #secondary .widget-area -->
