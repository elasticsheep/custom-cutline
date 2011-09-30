<?php // Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
if ( post_password_required() ) { ?>
	<p class="center"><?php _e("This post is password protected. Enter the password to view comments."); ?></p>
<?php
	return;
}
// You can start editing below ?>
<div id="comments">
<h3 class="comments_headers"><?php comments_number('No Comments', 'One Comment', '% Comments' );?> so far &darr;</h3>
<?php if ( have_comments() ) { ?>
	<ul class="commentlist" id="comment_list">
	<?php wp_list_comments('callback=commentlist'); ?>
	</ul>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
<?php } else { // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) { // If comments are open, but there are no comments. ?>
		<p class="unstyled"><?php _e("There are no comments yet...Kick things off by filling out the form below."); ?></p>
	<?php } else { // comments are closed ?>
		<p class="unstyled"><?php _e("Like gas stations in rural Texas after 10 pm, comments are closed."); ?></p>
	<?php }
}
?>

	<!-- Comment Form -->
	<?php if ('open' == $post-> comment_status) : ?>
	
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
			<p class="unstyled">You must <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">log in</a> to post a comment.</p>
	
		<?php else : ?>
		<div id="respond">
			<h3 class="comments_headers"><?php comment_form_title('Leave a Comment', 'Leave a Reply to %s'); ?></h3>
			<div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form">
			
			<?php if ( $user_ID ) { ?>	
				<p class="unstyled">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>	
			<?php } ?>
			<?php if ( !$user_ID ) { ?>
				<p><input class="text_input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /><label for="author"><strong>Name</strong></label></p>
				<p><input class="text_input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /><label for="email"><strong>Mail</strong></label></p>
				<p><input class="text_input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /><label for="url"><strong>Website</strong></label></p>
			<?php } ?>
				<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->	
				<p><textarea class="text_input text_area" name="comment" id="comment" rows="7" tabindex="4"></textarea></p>
				<?php if (function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); } ?>
				<p>
					<?php comment_id_fields(); ?>
					<input name="submit" class="form_submit" type="submit" id="submit" src="<?php bloginfo('template_url') ?>/images/submit_comment.gif" tabindex="5" value="Submit" />
				</p>		
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		</div>
		<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div> <!-- Close #comments container -->
<div class="clear flat"></div>