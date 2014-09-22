<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package minimagazine
 */

get_header(); ?>

	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<section id="postsListing">
				<header>
					<h3><?php printf( __( 'Search Results for: %s', 'minimagazine' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
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