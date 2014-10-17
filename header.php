<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package minimagazine
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<div id="main-nav">
			<div class="brand five columns">
				
				<?php
				if(get_theme_mod('codeinwp_logo')):
					echo '<a href="'.esc_url( home_url( '/' ) ).'">';
					if(get_theme_mod('codeinwp_logo_text')):
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_theme_mod('codeinwp_logo_text').'">';
					else:
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_bloginfo('name').'">';
					endif;
					echo '</a>';
				else:
					echo '<div class="main-title">';
						
						echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
						echo '<h2 class="site-description"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'description', 'display' ) ).'" rel="home">'.get_bloginfo( 'description' ).'</a></h2>';
					echo '</div>';
				endif;
                	
				?>
				
			</div>

			<nav class="menu eleven columns main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false)); ?>
			</nav>

		</div><!-- main-nav -->

	</div><!-- container -->