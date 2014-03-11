<?php
/**
 * The template for displaying posts in the Gallery post format.
 *
 * @package cwp
 */
?>

<li class="recentPost">

					<?php 

					if ( get_post_gallery() ) :
			            $gallery = get_post_gallery( get_the_ID(), false );
			            /* Loop through all the image and output them one by one */
			            foreach( $gallery['src'] AS $src ) { 
			            	$image_link = str_replace("-150x150.",".", $src );
			            	?>
			            	<div class="thumbnail" style="background-image: url(<?php echo $image_link; ?>);">
			            		<div class="overlay"></div>
			            	</div><!-- end .thumbnail -->
			            <?php } endif; ?>
							<div class="clearfix"></div>
						<div class="postContent" style="float: none; margin-top: 10px;">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="postMeta"><?php _e('Posted on','cwp'); ?> <span class="postDate"><?php echo get_the_date('d F Y '); ?></span><!-- end .postDate --><?php _e('by','cwp'); ?> <span class="postAuthor"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a></span><!-- end .postAuthor --></div><!-- end .postMeta -->
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
