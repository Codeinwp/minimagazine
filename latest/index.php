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
 * @package minimagazine
 */

get_header();

if(get_theme_mod('slide1_image') || get_theme_mod('slide2_image') || get_theme_mod('slide3_image')):
?>
	<section id="sliderOuter">
		<div id="slideshow">
		
			<!-- slide no#1 -->
			<?php if(get_theme_mod('slide1_image')): ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(get_theme_mod('slide1_title'))
							echo '<h1>'.get_theme_mod('slide1_title').'</h1>';
					
						if(get_theme_mod('slide1_text'))
							echo '<p>'.get_theme_mod('slide1_text').'</p>';
						 
						if(get_theme_mod('slide1_button_text') && get_theme_mod('slide1_button_link'))
							echo '<div class="button"><a href="'.get_theme_mod('slide1_button_link').'">'.get_theme_mod('slide1_button_text').'</a></div>';
		
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
					echo '<img src="'.get_theme_mod('slide1_image').'" alt="'.get_bloginfo('name').'">';
				?>	
			</div><!-- end .slide -->
			<?php endif; ?>
	
			<!-- slide no#2 -->
			<?php if(get_theme_mod('slide2_image')): ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(get_theme_mod('slide2_title'))
							echo '<h1>'.get_theme_mod('slide2_title').'</h1>';
					
						if(get_theme_mod('slide2_text'))
							echo '<p>'.get_theme_mod('slide2_text').'</p>';
						 
						if(get_theme_mod('slide2_button_text') && get_theme_mod('slide2_button_link'))
							echo '<div class="button"><a href="'.get_theme_mod('slide2_button_link').'">'.get_theme_mod('slide2_button_text').'</a></div>';
		
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
					echo '<img src="'.get_theme_mod('slide2_image').'" alt="'.get_bloginfo('name').'">';
				?>
			</div><!-- end .slide -->
			<?php endif; ?>
			
			<!-- slide no#3 -->
			<?php if(get_theme_mod('slide3_image')): ?>
			<div class="slide">
				<div class="slideContainer container">
					<?php 
						if(get_theme_mod('slide3_title'))
							echo '<h1>'.get_theme_mod('slide3_title').'</h1>';
					
						if(get_theme_mod('slide3_text'))
							echo '<p>'.get_theme_mod('slide3_text').'</p>';
						 
						if(get_theme_mod('slide3_button_text') && get_theme_mod('slide3_button_link'))
							echo '<div class="button"><a href="'.get_theme_mod('slide3_button_link').'">'.get_theme_mod('slide3_button_text').'</a></div>';
		
					?>
				</div><!-- end .slideContainer -->
				<div class="overlay"></div>
				<?php
					echo '<img src="'.get_theme_mod('slide3_image').'" alt="'.get_bloginfo('name').'">';
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
					<h3><?php _e('Posts Listings','minimagazine'); ?></h3>
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
			<?php previous_posts_link('<i class="icon-long-arrow-left"></i>'.__( 'NEWER POSTS', 'minimagazine' )); ?>
			<?php next_posts_link( __( 'OLDER POSTS', 'minimagazine' ).'<i class="icon-long-arrow-right"></i>'); ?>
		</section><!-- end postsNav -->

		</section><!-- end #mainContent -->

		<?php get_sidebar(); ?>
		
	</section><!-- end #mainContentWrapper -->
			
<?php get_footer(); ?>