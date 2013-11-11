<?php
/**
 * Comments Template
 *
 * Lists comments and calls the comment form.  Individual comments have their own templates.  The 
 * hierarchy for these templates is $comment_type.php, comment.php.
 *
 * @package Cascade
 * @subpackage Functions
 * @version 0.1.3
 * @author Justin Tadlock
 * @author Tung Do <tung@devpress.com>
 */

/* Kill the page if trying to access this template directly. */
if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die( __( 'Please do not load this page directly. Thanks!', 'cascade' ) );

/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments-template">

	<div class="comments-wrap">

		<div id="comments">

			<?php if ( have_comments() ) : ?>

				<h3 id="comments-number" class="comments-header"><?php comments_number( __( 'No Comments', 'cascade' ), __( 'One Comment', 'cascade' ), __( '% Comments', 'cascade' ) ); ?></h3>

				<?php do_atomic( 'before_comment_list' );// cascade_before_comment_list ?>
				
				<?php if ( get_option( 'page_comments' ) ) : ?>
					<div class="comment-navigation comment-pagination">
						<span class="page-numbers"><?php printf( __( 'Page %1$s of %2$s', 'cascade' ), ( get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1 ), get_comment_pages_count() ); ?></span>
						<?php paginate_comments_links(); ?>
					</div><!-- .comment-navigation -->
				<?php endif; ?>

				<ol class="comment-list">
					<?php wp_list_comments( hybrid_list_comments_args() ); ?>
				</ol><!-- .comment-list -->

				<?php do_atomic( 'after_comment_list' ); // cascade_after_comment_list ?>
				
			<?php endif; ?>

			<?php if ( pings_open() && !comments_open() ) : ?>

				<p class="comments-closed pings-open">
					<?php printf( __( 'Comments are closed, but <a href="%1$s" title="Trackback URL for this post">trackbacks</a> and pingbacks are open.', 'cascade' ), get_trackback_url() ); ?>
				</p><!-- .comments-closed .pings-open -->

			<?php elseif ( !comments_open() ) : ?>

				<p class="comments-closed">
					<?php _e( 'Comments are closed.', 'cascade' ); ?>
				</p><!-- .comments-closed -->

			<?php endif; ?>

		</div><!-- #comments -->

		<?php comment_form( array( 'title_reply' => __( 'Post Comment', 'cascade' ) ) ); // Loads the comment form. ?>

	</div><!-- .comments-wrap -->

</div><!-- #comments-template -->