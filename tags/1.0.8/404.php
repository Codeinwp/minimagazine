<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package minimagazine
 */

get_header(); ?>

	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<section id="postsListing">
				<header>
					<h3><?php _e( 'Oops! That page can&rsquo;t be found.', 'minimagazine' ); ?></h3>
				</header>

				<ul class="recentPosts">
					<li class="recentPost"><div class="postContent"><h2><?php _e( 'It looks like nothing was found at this location.', 'minimagazine' ); ?></h2></div></li>

				</ul><!-- .recentPosts -->
			</section><!-- end #postsListing -->

		</section><!-- end #mainContent -->

		<?php get_sidebar(); ?>
		
	</section><!-- end #mainContentWrapper -->

<?php get_footer(); ?>