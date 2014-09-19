<?php
/**
 * The template for displaying posts in the Link post format.
 *
 * @package minimagazine
 */
?>
					<li class="recentPost">
						<div class="clearfix"></div>
						<div class="postContent" style="float: none; margin-top: 10px;">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="postMeta"><?php _e('Posted on','minimagazine'); ?> <span class="postDate"><?php echo get_the_date('d F Y '); ?></span><!-- end .postDate --><?php _e('by','minimagazine'); ?> <span class="postAuthor"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></span><!-- end .postAuthor --></div><!-- end .postMeta -->
							<div class="postDetails" style="height: 3px; margin-top: 3rem;"></div><!-- end .postDetails -->
						</div><!-- end .postContent -->
					</li><!-- .recentPost -->
