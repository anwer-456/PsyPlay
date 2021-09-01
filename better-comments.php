<?php
function better_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'twenties' ); ?></span> <?php comment_author_link(); ?></div>
	<?php
		break;
		default :
		// Proceed with normal comments. 
		?>
			<div id="comment-<?php comment_ID(); ?> " class="comment-cont">
			<div class="comment-avatar">
				<?php echo get_avatar( $comment, 45 ); ?>
			</div><!-- .comment-author -->
			<div class="scontent">
				<div class="comment-meta">
					<div class="comment-author"><p class="author-name"><?php comment_author_link(); ?></p>
					<p class="comment-date">
					<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( _x( '%1$s', '1: date', 'twenties' ), get_comment_date() )
					); ?> <?php esc_html_e( 'at', 'twenties' ); ?> <?php comment_time(); ?>
					</p><!-- .comment-date -->
					</div>
				</div><!-- .comment-meta -->
				
				<div class="comment-content entry clr">
				  <?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><i class="fa fa-warning"></i> <?php esc_html_e( 'Your comment is awaiting moderation.', 'twenties' ); ?></p>
				<?php endif; ?>
					<?php comment_text(); ?>
				</div><!-- .comment-content -->
				<div class="reply comment-reply-link">
					<?php comment_reply_link( array_merge( $args, array(
						'reply_text' => esc_html__( 'Reply', 'twenties' ),
						'depth'      => $depth,
						'max_depth'	 => $args['max_depth'] )
					) ); ?>
				</div><!-- .reply -->
			</div><!-- .comment-details -->
			<div class="clearfix"></div>
		</div><!-- #comment-## -->

	<?php
		break;
	endswitch; // End comment_type check.
}