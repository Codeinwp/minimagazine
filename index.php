<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cwp
 */

get_header();

$optionsdb = get_option("theme_options_optionsdb");
	if((isset($optionsdb['slide_image1']) && $optionsdb['slide_image1'] != '') || (isset($optionsdb['slider_title2']) && $optionsdb['slider_title2'] == '') || (isset($optionsdb['slide_image3']) && $optionsdb['slide_image3'] != '')):
?>
	<section id="sliderOuter">
		<div id="slideshow">
		
			<!-- slide no#1 -->
			<?php if(isset($optionsdb['slide_image1']) && $optionsdb['slide_image1'] != ''): ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(isset($optionsdb['slider_title1']) && $optionsdb['slider_title1'] != '')
							echo '<h1>'.$optionsdb['slider_title1'].'</h1>';
					
						if(isset($optionsdb['slider_text1']) && $optionsdb['slider_text1'] != '')
							echo '<p>'.$optionsdb['slider_text1'].'</p>';
						 
						if(isset($optionsdb['slider_button1']) && $optionsdb['slider_button1'] != '')
							echo '<div class="button"><a href="'.$optionsdb['slider_button_link_1'].'">'.$optionsdb['slider_button1'].'</a></div>';
		
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
					echo '<img src="'.$optionsdb['slide_image1'].'" alt="'.get_bloginfo('name').'">';
				?>	
			</div><!-- end .slide -->
			<?php endif; ?>
	
			<!-- slide no#2 -->
			<?php if(isset($optionsdb['slide_image2']) && $optionsdb['slide_image2'] != '') : ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(isset($optionsdb['slider_title2']) && $optionsdb['slider_title2'] != '')
							echo '<h1>'.$optionsdb['slider_title2'].'</h1>';
						
						if(isset($optionsdb['slider_text2']) && $optionsdb['slider_text2'] != '')
							echo '<p>'.$optionsdb['slider_text2'].'</p>';
				
						if(isset($optionsdb['slider_button2']) && $optionsdb['slider_button2'] != '')
							echo '<div class="button"><a href="'.$optionsdb['slider_button_link_2'].'">'.$optionsdb['slider_button2'].'</a></div>';
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
					echo '<img src="'.$optionsdb['slide_image2'].'" alt="'.get_bloginfo('name').'">';
				?>
			</div><!-- end .slide -->
			<?php endif; ?>
			
			<!-- slide no#3 -->
			<?php if(isset($optionsdb['slide_image3']) && $optionsdb['slide_image3'] != '') : ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(isset($optionsdb['slider_title3']) && $optionsdb['slider_title3'] != '')
							echo '<h1>'.$optionsdb['slider_title3'].'</h1>';
						 
						if(isset($optionsdb['slider_text3']) && $optionsdb['slider_text3'] != '')
							echo '<p>'.$optionsdb['slider_text3'].'</p>';
						
						if(isset($optionsdb['slider_button3']) && $optionsdb['slider_button3'] != '')
							echo '<div class="button"><a href="'.$optionsdb['slider_button_link_3'].'">'.$optionsdb['slider_button3'].'</a></div>';
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
						echo '<img src="'.$optionsdb['slide_image3'].'" alt="'.get_bloginfo('name').'">';
				?>
			</div><!-- end .slide -->
			<?php endif; ?>
		</div>
		<div class="sliderNav">
			<div class="next"></div>
			<div class="prev"></div>
		</div>
	</section><!-- slider -->
	<?php endif; ?>
	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<section id="postsListing">
				<header>
					<h3><?php _e('Posts Listings','cwp'); ?></h3>
				</header>

				<ul class="recentPosts">
					<?php 
					while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() );
					endwhile; 
					?>

				</ul><!-- .recentPosts -->
			</section><!-- end #postsListing -->

		<section id="postsNav">
			<?php previous_posts_link('<i class="icon-long-arrow-left"></i>'.__( 'NEWER POSTS', 'cwp' )); ?>
			<?php next_posts_link( __( 'OLDER POSTS', 'cwp' ).'<i class="icon-long-arrow-right"></i>'); ?>
		</section><!-- end postsNav -->

		</section><!-- end #mainContent -->

		<?php get_sidebar(); ?>
		
	</section><!-- end #mainContentWrapper -->
			
<?php get_footer(); ?>