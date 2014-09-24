<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package minimagazine
 */

 $codeinwp_fb = get_theme_mod('codeinwp_fb');
 $codeinwp_tw = get_theme_mod('codeinwp_tw');
 $codeinwp_rss = get_theme_mod('codeinwp_rss');
 
 if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="sidebar" class="five columns">
		<div class="socialIcons">
				<?php 	
						
						if(!empty($codeinwp_fb))		
							echo "<a title='Like us!' href='".$codeinwp_fb."' class='soc-icon soc-icon-facebook'><i class='icon-facebook'></i></a>";	
							
						if(!empty($codeinwp_tw))		
							echo "<a title='Follow us!' href='".$codeinwp_tw."' class='soc-icon soc-icon-twitter'><i class='icon-twitter'></i></a>";	
						
						if(!empty($codeinwp_rss))		
							echo "<a title='Subscribe!' href='".$codeinwp_rss."' class='soc-icon soc-icon-rss'><i class='icon-rss'></i></a>";	
				?>	
		</div><!-- end .socialIcons -->

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php else: ?>
	<!-- default sidebar -->
		<aside id="sidebar" class="five columns">

			<div class="searchBar">
				<?php get_search_form(); ?>
			</div><!-- end .searchBar -->

			<div class="socialIcons">
				<?php 	
						if(!empty($codeinwp_fb))		
							echo "<a title='Like us!' href='".$codeinwp_fb."' class='soc-icon soc-icon-facebook'><i class='icon-facebook'></i></a>";	
							
						if(!empty($codeinwp_tw))		
							echo "<a title='Follow us!' href='".$codeinwp_tw."' class='soc-icon soc-icon-twitter'><i class='icon-twitter'></i></a>";	
						
						if(!empty($codeinwp_rss))		
							echo "<a title='Subscribe!' href='".$codeinwp_rss."' class='soc-icon soc-icon-rss'><i class='icon-rss'></i></a>";	

				?>	
			</div><!-- end .socialIcons -->

			<div class="recentPosts">
				<header>
					<h3><?php _e('Recent Posts','minimagazine'); ?></h3>
				</header>
				<ul>
				<?php 
					$args = array(
							'numberposts' => 4,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'suppress_filters' => true );

					$recent_posts = wp_get_recent_posts($args);
									
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .$recent["post_title"].'</a></li> ';
					}
				?>
				</ul>
			</div><!-- end .recentPosts -->

			<div class="latestComments">
				<header>
					<h3><?php _e('Latest Comments','minimagazine'); ?></h3>
				</header>
				<ul>
				<?php
					$args = array(
							'status' => 'approve',
							'number' => 4
							);
					$comments = get_comments($args);
					foreach($comments as $comment) :
						echo '<li><a href="'.get_permalink($comment->comment_post_ID).'" title="">'.get_the_title($comment->comment_post_ID).'</a></li>';
					endforeach;
				?>
				</ul>
			</div><!-- end .latestComments -->
		</aside><!-- end #sidebar -->
<?php endif; ?>