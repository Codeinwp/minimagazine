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

		<div id="main-nav">
			<div class="brand five columns">
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
				<?php
				$optionsdb = get_option("theme_options_optionsdb");
                if(isset($optionsdb['logo']) && $optionsdb['logo'] != '') :
                    if(isset($optionsdb['logo_text']) && $optionsdb['logo_text'] != '')
                        echo '<img src="'.$optionsdb['logo'].'" alt="'.$optionsdb['logo_text'].'">';
                    else	
                        echo '<img src="'.$optionsdb['logo'].'" alt="'.get_bloginfo('name').'">';
                else:
					echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="Logo"/>';
                endif;
                	
				?>
				</a>
			</div>

			<nav class="menu eleven columns main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false)); ?>
			</nav>

		</div><!-- main-nav -->

	</div><!-- container -->