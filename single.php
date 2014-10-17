<?php
/**
 * The Template for displaying all single posts.
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
			echo '<section id="headerOuter" class="tmp">';
		endif;
	?>
		<header>
			<div class="headerOuterContent container">
				<div class="headerContent">
					<div class="postDetails twelve columns">
						<h1><?php the_title(); ?></h1>
						<div class="postMeta">
							<div class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><i class="icon-user"></i><?php echo ' '.get_the_author(); ?></a></div>
							<div class="noReactions"><a href="<?php comments_link(); ?>"><i class="icon-comment"></i><?php comments_number( __('No reactions','minimagazine'), __('One Reaction','minimagazine'), '%'.__('Reactions','minimagazine') ); ?></a></div>
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
			<article <?php post_class("singlePost"); ?>>
				<?php 
					if ( has_post_thumbnail($post->ID) ) {
						echo get_the_post_thumbnail($post->ID); 
					}
					the_content();
					wp_link_pages();
				?>
				
			</article><!-- end .singlePost -->

			<div class="postDetailsSingle">
				<div class="postLabels">
					<?php the_category(', '); ?>
				</div><!-- end .postLabels -->
				<div class="postTags">
					<?php the_tags(); ?>
				</div><!-- end .postTags -->
			</div><!-- end .postDetails -->

			<section id="postAuthor">
				<header><h2><?php _e('About the Author','minimagazine'); ?></h2></header>
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
			
			<?php minimagazine_related_posts(); ?>

			<section id="commentsSection">
				<header><h2><?php comments_number( __('No comments','minimagazine'), __('One comment','cp'), '%'.__('Comments','minimagazine') ); ?></h2></header>
				<?php comments_template(); ?>
				

				
			</section><!-- end #commentsSection -->
		</section><!-- end #mainContent -->
		<?php get_sidebar(); ?>
	</section><!-- end #mainContentWrapper -->
	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>