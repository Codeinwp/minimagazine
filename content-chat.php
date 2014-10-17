<?php
/**
 * The template for displaying posts in the Chat post format.
 *
 * @package minimagazine
 */
?>

					<li class="recentPost">
						
						<div class="postContent">
							<div class="postMeta"><?php _e('Posted on','minimagazine'); ?> <span class="postDate"><?php echo get_the_date('d F Y '); ?></span><!-- end .postDate --><?php _e('by','minimagazine'); ?> <span class="postAuthor"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></span><!-- end .postAuthor --></div><!-- end .postMeta -->
							<div class="postExcrept chat_type">
								<p><?php the_content(); ?></p>
							</div><!-- end .postExcrept -->
							<div class="postDetails" style="height: 3px; margin-top: 2rem;"></div><!-- end .postDetails -->
						</div><!-- end .postContent -->
					</li><!-- .recentPost -->
