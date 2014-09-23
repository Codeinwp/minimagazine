<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package minimagazine
 */
	
?>
	<footer>
		<section id="footerContent" class="container">
			<div class="footerLogo three columns">
				<?php			
					if(get_theme_mod('codeinwp_footerlogo')):
						if(get_theme_mod('codeinwp_footerlogo_text')):
							echo '<img src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_theme_mod('codeinwp_footerlogo_text').'">';		
						else:
							echo '<img src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_bloginfo('name').'">';
						endif;
					endif;
			
				?>
			</div><!-- end footerLogo -->

			<div class="footerMetaData eight columns">
				<div class="footerSocialIcons">
					<ul>
						<?php 
						if(get_theme_mod('codeinwp_fb')):
							echo "<li><a href='".get_theme_mod('codeinwp_fb')."' ><i class='icon-facebook-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_tw')):
							echo "<li><a href='".get_theme_mod('codeinwp_tw')."' ><i class='icon-twitter-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_rss')):
							echo "<li><a href='".get_theme_mod('codeinwp_rss')."' ><i class='icon-rss-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_linkedin')):
							echo "<li><a href='".get_theme_mod('codeinwp_linkedin')."' ><i class='icon-linkedin-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_pinterest')):
							echo "<li><a href='".get_theme_mod('codeinwp_pinterest')."' ><i class='icon-pinterest-sign'></i></a></li>";	
						endif;
						
						?>
					</ul>
				</div><!-- footerSocialIcons -->

				<div class="footerMenu">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container' => false, 'depth' => 1)); ?>
				</div><!-- end .footerMenu -->

				<?php	
					if(get_theme_mod('codeinwp_copyright')):
						echo '<span class="copyright">'.get_theme_mod('codeinwp_copyright').'</span>';	
					else:
						echo '<span class="copyright"> &copy; '.date('Y').' Minimagazine</span>';
					endif;
				?>			
				<div class="copyright">
				<a href="http://themeisle.com/themes/minimagazine/" target="_blank">Minimagazine</a><?php _e(' powered by ','minimagazine'); ?><a href="http://wordpress.org/" target="_blank"><?php _e('WordPress','minimagazine'); ?></a>
				</div>	
			</div><!-- end .footerMetaData -->


		</section><!-- end .container #footerContent -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>