<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package minimagazine
 */

get_header(); 
?>

	<?php while ( have_posts() ) : the_post(); ?>
	<?php 
		if(get_theme_mod('minimagazine_header_image')):
			echo '<section id="headerOuter" style="background:url('.get_theme_mod('minimagazine_header_image').');">';
		else:
			echo '<section id="headerOuter">';
		endif;
	?>
		<header>
			<div class="headerOuterContent container">
				<div class="headerContent">
					<div class="postDetails twelve columns">
						<h1><?php the_title(); ?></h1>
						<div class="postMeta">
							<div class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><i class="icon-user"></i><?php echo ' '.get_the_author(); ?></a></div>
							<div class="noReactions"><a href="<?php comments_link(); ?>"><i class="icon-comment"></i><?php comments_number( __('No reactions','minimagazine'), __('One Reaction','minimagazine'), '%' .__('Reactions','minimagazine') ); ?></a></div>
						</div><!-- end .postMeta -->
					</div><!-- end .postDetails -->
					<div class="clearfix"></div>
				</div><!-- end .headerContent -->
				<div class="overlay"></div>
			</div><!-- end .container -->
		</header>
	</section><!-- end headerOuter -->
	
	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<article class="singlePost">
				<?php 
					the_content(); 
					wp_link_pages();
				?>
				
			</article><!-- end .singlePost -->

			<section id="commentsSection">
				<header><h2><?php comments_number( __('No comments','minimagazine'), __('One comment','minimagazine'), '%'.__(' Comments','minimagazine') ); ?></h2></header>
				<?php comments_template(); ?>
				

				
			</section><!-- end #commentsSection -->
		</section><!-- end #mainContent -->
		<?php get_sidebar(); ?>
	</section><!-- end #mainContentWrapper -->
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
