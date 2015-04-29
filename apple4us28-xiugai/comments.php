<?php	// Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
{
	die ('Please do not load this page directly. Thanks!');
}
if (!empty($post->post_password))
{
	// if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password)
	{
		// and it doesn't match the cookie
		?>
<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?></p>
		<?php
		return;
	}
}
?>

<!-- You can edit start here Twitter Theme 2.8 -->

<div id="commentblock" class="commentblock">

<h3 id="comments" class="comments"><?php comments_number(__('No Comments Now!','apple4us'), __('1 Comment so far','apple4us'), __('% Comments so far','apple4us')); ?></h3>

<!--comments-guide-box start-->
<ul class="comments-guide-box">
		<?php if ('open' == $post-> comment_status){ ?><li class="cgbox-comment"><a href="#respond"><?php _e('Leave a response','apple4us'); ?></a></li><?php } ?>
		<li class="cgbox-feed"><?php comments_rss_link(__('Feed for this Entry','apple4us'), '<li class="cgbox-feed">', '</li>'); ?></li>
		<?php if ('open' == $post->ping_status){ ?><li class="cgbox-trackback"><a href="<?php trackback_url(); ?> " rel="trackback"><?php _e('Trackback Address','apple4us'); ?></a></li><?php } ?>
</ul><!--comments-guide-box end-->

<?php if ( have_comments() ) : ?>
	<div class="comments-nav">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist" id="commentlist"><!--begin comments list-->
<?php wp_list_comments('type=comment&callback=apple4us_comment'); ?>
</ol><!--end for comment list-->

	<div class="comments-nav">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

<!--begin trackback and pingback list-->

<div id="trackbacks-list">
<h3 class="trackpingstitle"><?php _e('Trackbacks/Pingbacks','apple4us'); ?></h3>
<div class="trackbacks-content">
<div class="trackback-content">
<?php wp_list_comments(array ('type' => 'pings','callback' => 'apple4us_pings')); ?>
</div>
</div>
</div>
<!--end trackback and pingback list-->

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

<h4 id="nocomment"><?php _e('Be the first to comment on this entry.','apple4us'); ?></h4>

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div id="comments-guidelines-info">
		<p><?php _e('Sorry, comments are closed for this item.','apple4us'); ?></p>
	</div>

	<?php endif; ?>
<?php endif; ?>

<div id="loading" style="display:none;"><?php _e('Posting your comment&hellip;','apple4us'); ?></div>
<div id="errors" style="display:none;"></div>

<?php if ('open' == $post->comment_status) : ?>

<div class="comments-form" id="respond">

<h3 id="respond" name="respond" class="comments-form-header"><?php _e ('Leave a comment','apple4us'); ?></h3>

<div class="cancel-comment-reply">
	<?php cancel_comment_reply_link(); ?>
</div>

<div class="comments-form-content">
		<?php if (get_option('comment_registration') && !$user_ID ) : ?>
		<p id="comments-blocked"><?php _e('You must be','apple4us'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logged in','apple4us'); ?></a> <?php _e('to post a comment.','apple4us'); ?></p></div>
</div><!--end for comments-form-content-->
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<?php else : ?>

<div id="commentform" class="comment-form">
<input id="author" name="author" class="comment-input" value="<?php echo $comment_author; ?>" /> <?php _e('Name','apple4us'); ?><strong><?php _e('(required)','apple4us'); ?></strong></div>

<div id="commentform" class="comment-form">
<input id="email" name="email" class="comment-input" value="<?php echo $comment_author_email; ?>" /> <?php _e('Mail ','apple4us'); ?><strong><?php _e('(required)','apple4us'); ?>,<?php _e('(will not be published)','apple4us'); ?></strong></div>

<div id="commentform" class="comment-form">
<input id="url" name="url" class="comment-input" value="<?php echo $comment_author_url; ?>" /> <?php _e('Website','apple4us'); ?><?php _e('(recommended)','apple4us'); ?></div>

<?php endif; ?>


<div class="comment-form">
<div id="quicktags"><script type="text/javascript">displayQuicktags('comment');</script></div>
<textarea id="comment" name="comment" rows="6" cols="50"></textarea>
</div>

<p>
<input type="submit" id="submit" name="submit" value="<?php _e('Submit Comment','apple4us'); ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<!-- Begin Subscribe to comments-->
<div id="subscription_checkbox">
<?php if (function_exists('show_subscription_checkbox')) { ?>
			<?php show_subscription_checkbox(); ?>
		<?php } ?>
</div>
<!-- End Subscribe to comments-->

<div id="comments-guidelines">
<?php if ($user_ID) : ?>
<p><?php _e('Logged in as','apple4us'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="<?php _e('Logged in as','apple4us'); ?> <?php echo $user_identity; ?>"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account','apple4us'); ?>"><?php _e('Logout &raquo;','apple4us'); ?></a></p>
<?php else : ?>
<div id="comments-guidelines-info">
<p><?php _e('Fields in','apple4us'); ?> <strong style="color:#000;"><?php _e('bold','apple4us');?></strong> <?php _e('are required. Email addresses are','apple4us'); ?> <strong><?php _e('never','apple4us'); ?></strong> <?php _e('published or distributed.','apple4us'); ?></p>
<p><?php _e('Some HTML code is allowed:','apple4us'); ?><br /><code><?php echo allowed_tags(); ?></code><br />
<?php _e('URLs must be fully qualified','apple4us'); ?> (<?php _e('eg:','apple4us'); ?> <strong><?php echo get_option('home'); ?>)</strong>,<?php _e('and all tags must be properly closed.','apple4us'); ?></p>
<p><?php _e('Line breaks and paragraphs are automatically converted.','apple4us'); ?></p>
<p><?php _e('Please keep comments relevant. Off-topic, offensive or inappropriate comments','apple4us'); ?> <em><?php _e('may','apple4us'); ?></em> <?php _e('be edited or removed.','apple4us'); ?></p>
</div> <!--end for comments-guidelines-info-->
<?php endif; ?>
</div><!--end for comments-guidelines-->

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>

</div></div>	