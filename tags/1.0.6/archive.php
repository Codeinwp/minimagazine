<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cwp
 */

get_header(); ?>

	<section id="mainContentWrapper" class="container">
		<section id="mainContent" class="eleven columns">
			<section id="postsListing">
				<header>
					<h3>
						<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'cwp' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'cwp' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'cwp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'cwp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'cwp');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'cwp' );

						else :
							_e( 'Archives', 'cwp' );

						endif;
					?>
					</h3>
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
