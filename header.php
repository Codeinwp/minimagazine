<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package cwp
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
		<?php if(get_header_image()): ?>
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<?php endif; ?>
		<div id="main-nav">
			<div class="brand five columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if(get_theme_mod('codeinwp_logo')):
					if(get_theme_mod('codeinwp_logo_text')):
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_theme_mod('codeinwp_logo_text').'">';
					else:
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_bloginfo('name').'">';
					endif;
				else:
					echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('name').'"/>';
				endif;
                	
				?>
				</a>
			</div>

			<nav class="menu eleven columns main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false)); ?>
			</nav>

		</div><!-- main-nav -->

	</div><!-- container -->