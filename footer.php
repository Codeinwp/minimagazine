<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package cwp
 */
	
?>
<?php global  $optionsdb;  ?>

	<footer>
		<section id="footerContent" class="container">
			<div class="footerLogo three columns">
				<?php							
						if(isset($optionsdb['logo_footer']) && $optionsdb['logo_footer'] != '') {								
							if(isset($optionsdb['logo_footer_text']) && $optionsdb['logo_footer_text'] != '')									
								echo '<img src="'.$optionsdb['logo_footer'].'" alt="'.$optionsdb['logo_footer_text'].'">';								
							else									
								echo '<img src="'.$optionsdb['logo_footer'].'" alt="'.bloginfo('name').'">';							
						}
						else
							echo '<img src="'.get_template_directory_uri().'/images/footer_logo.png" alt="Logo"/>';
					?>
			</div><!-- end footerLogo -->

			<div class="footerMetaData eight columns">
				<div class="footerSocialIcons">
					<ul>
						<?php 	
						if(isset($optionsdb['twitter']) && $optionsdb['twitter'] != '')		
							echo "<li><a href='".$optionsdb['twitter']."' ><i class='icon-twitter-sign'></i></a></li>";	
						
						
						if(isset($optionsdb['facebook']) && $optionsdb['facebook'] != '')		
							echo "<li><a href='".$optionsdb['facebook']."' ><i class='icon-facebook-sign'></i></a></li>";	
						
							
						if(isset($optionsdb['linkedin']) && $optionsdb['linkedin'] != '')		
							echo "<li><a href='".$optionsdb['linkedin']."' ><i class='icon-linkedin-sign'></i></a></li>";	
							
							
						if(isset($optionsdb['rss']) && $optionsdb['rss'] != '')		
							echo "<li><a href='".$optionsdb['rss']."' ><i class='icon-rss-sign'></i></a></li>";	
						
							
						if(isset($optionsdb['pinterest']) && $optionsdb['pinterest'] != '')		
							echo "<li><a href='".$optionsdb['pinterest']."' ><i class='icon-pinterest-sign'></i></a></li>";	
							
							
						?>
					
					</ul>
				</div><!-- footerSocialIcons -->

				<div class="footerMenu">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container' => false, 'depth' => 1)); ?>
				</div><!-- end .footerMenu -->

				<?php	
					if(isset($optionsdb['copyright']) && $optionsdb['copyright'] != '') 		
						echo '<span class="copyright">'.$optionsdb['copyright'].'</span>';	
					else
						echo '<span class="copyright"> &copy; 2013 Minimag WordPress Theme</span>';	
				?>			
				
			</div><!-- end .footerMetaData -->


		</section><!-- end .container #footerContent -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>