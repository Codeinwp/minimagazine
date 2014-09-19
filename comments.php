<?php

/**
 * The template for displaying Comments.
 * @package minimagazine
 */



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() )

	return;

?>



	<div id="comments" class="comments-area">



	<?php if ( have_comments() ) : ?>

				<section class="comments">
					<?php
						wp_list_comments('callback=cwp_comment');
					?>
				</section><!-- end .comments -->


		<div class="navigation">

			<?php 

			  paginate_comments_links( array('prev_text' => 'prev', 'next_text' => 'next')); 

			?>

		</div>



	<?php endif; // have_comments() ?>



	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?

		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

	?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'minimagazine' ); ?></p>

	<?php
		else:
			$comments_args = array(

				// change the title of send button 

				'label_submit'=>'Add comment',

				'comment_notes_before' => '',

				// remove "Text or HTML to be displayed after the set of comment fields"

				'comment_notes_after' => '',
				
				'title_reply' => '<header><h2>'.__('Leave a Reply','minimagazine').'</h2></header>',

				// redefine your own textarea (the comment body)

				'comment_field' => '<div class="inputBlock"><label for="comment">Comment:*</label><textarea id="comment" name="comment"></textarea></div>',

				'fields' => array(
				
				'author' => '<div class="inputBlock">' . '<label for="author">' . __( 'Name*', 'minimagazine' ) . '</label><input  id="author" name="author" type="text" placeholder="Your Name" /> ' . '</div> ',
								
				'email' => '<div class="inputBlock">'.'<label for="email">' . __( 'Email*', 'minimagazine' ) . '</label><input id="email" name="email" type="text" placeholder="Your Email" />' . '</div> ',
				
			
				'url' => '<div class="inputBlock">'.'<label for="url"><span>' . __( 'Website', 'minimagazine' ) . '</label><input id="url" name="url" type="text" placeholder="Your Website" />'. '</div>',

			),

		);
	?>
		<section id="commentForm">
		
		<?php
		comment_form($comments_args);
		?>
		</section>
	<?php
		endif;
	?>

</div><!-- #comments -->

