<?php
/**
 * The template for displaying posts in the Video post format.
 *
 * @package cwp
 */
?>

<li class="recentPost">
						
						<div class="postContent">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="postMeta"><?php _e('Posted on','cwp'); ?> <span class="postDate"><?php echo get_the_date('d F Y '); ?></span><!-- end .postDate --><?php _e('by','cwp'); ?> <span class="postAuthor"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></span><!-- end .postAuthor --></div><!-- end .postMeta -->
							<div class="postExcrept">
								<p><?php the_content(); ?></p>
							</div><!-- end .postExcrept -->
							<div class="postDetails">
								<div class="postLabels">
									<?php the_tags(); ?>
								</div><!-- end .postLabels -->

								<div class="postLink">
									<a href="<?php the_permalink(); ?>" class="readmore"><i class="icon-mail-forward"></i><?php _e('Read More','cwp'); ?></a>
								</div><!-- end .postLink -->
							</div><!-- end .postDetails -->
						</div><!-- end .postContent -->
					</li><!-- .recentPost -->
