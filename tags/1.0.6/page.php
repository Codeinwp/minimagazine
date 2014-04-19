<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cwp
 */

get_header(); 
?>

	<?php while ( have_posts() ) : the_post(); ?>
	<?php 
		if(get_theme_mod('header_image')):
			echo '<section id="headerOuter" style="background:url('.get_theme_mod('header_image').');">';
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
							<div class="noReactions"><a href="#"><i class="icon-comment"></i><?php comments_number( __('No reactions','cwp'), __('One Reaction','cwp'), '%' .__('Reactions','cwp') ); ?></a></div>
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

			<section id="postAuthor">
				<header><h2><?php _e('About the Author','cwp'); ?></h2></header>
				<div class="authorInfo">
					<div class="avatar">
						<?php echo get_avatar(get_the_author_meta('ID'),120); ?>
					</div><!-- end .avatar -->
					<div class="details">
						<h2 class="name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></h2>
						<p class="description"><?php the_author_meta('description'); ?></p>
						<h3 class="address"><?php echo the_author_meta('user_url'); ?></h3><!-- end .address -->
					</div><!-- end .details -->
				</div>
			</section><!-- end .postAuthor -->
			
			<?php cwp_related_posts(); ?>

			<section id="commentsSection">
				<header><h2><?php comments_number( __('No comments','cwp'), __('One comment','cwp'), '%'.__(' Comments','cwp') ); ?></h2></header>
				<?php comments_template(); ?>
				

				
			</section><!-- end #commentsSection -->
		</section><!-- end #mainContent -->
		<?php get_sidebar(); ?>
	</section><!-- end #mainContentWrapper -->
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>