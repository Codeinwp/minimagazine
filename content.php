<?php
/**
 * @package minimagazine
 */
?>

					<li <?php post_class('recentPost'); ?>>
					
						<?php 
							$minimagazine_feat_image = '';
							$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
							if ( $feat_image[0] == NULL )  {
								$minimagazine_feat_image = get_template_directory_uri() . "/images/default.jpg";
							} else {
								$minimagazine_feat_image = $feat_image[0];
							}
							
							if( !empty($minimagazine_feat_image) ) {
								
								?>
								
								<div class="thumbnail minimagazine-content-image">
							
									<img src="<?php echo esc_url($minimagazine_feat_image); ?>" />
								
									<div class="overlay"></div>
								
								</div><!-- end .thumbnail -->
								
								<?php
								
							}
						?>
						
						<div class="postContent">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="postMeta"><?php _e('Posted on','minimagazine'); ?> <span class="postDate"><?php echo get_the_date('d F Y '); ?></span><!-- end .postDate --><?php _e('by','cwp'); ?> <span class="postAuthor"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></span><!-- end .postAuthor --></div><!-- end .postMeta -->
							<div class="postExcrept">
								<p><?php the_excerpt(); ?></p>
							</div><!-- end .postExcrept -->
							<div class="postDetails">
								<div class="postLabels">
									<?php the_category(', '); ?>
								</div><!-- end .postLabels -->

								<div class="postLink">
									<a href="<?php the_permalink(); ?>" class="readmore"><i class="icon-mail-forward"></i><?php _e('Read More','minimagazine'); ?></a>
								</div><!-- end .postLink -->
							</div><!-- end .postDetails -->
						</div><!-- end .postContent -->
					</li><!-- .recentPost -->
