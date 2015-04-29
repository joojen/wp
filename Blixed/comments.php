<!-- comments ................................. -->

<div id="comments">

<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				<?php
				return;
            }
        }
		$commentalt = '';
		$commentcount = 1;
?>

<?php if ( have_comments() ) : ?>

	<h2><?php comments_number('没有评论', '1 条评论', '% 条评论' ); if($post->comment_status == "open") { ?> <a href="#commentform" class="more">我来说两句</a><?php } ?></h2>
	
	<ol class="commentlist" id="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

<?php endif; ?>

<?php if ($post->comment_status == "open") : ?>

<div id="respond">

	<h2>我来说两句:</h2>
	<div id="cancel-comment-reply"> 
	<?php cancel_comment_reply_link() ?>
</div> 

	<?php if (get_option('comment_registration') && !$user_ID) : ?>
	<p>请<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登陆</a> 再发表评论.</p>

<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	
		<fieldset>

	<?php if ($user_ID) : ?>

		<p class="info">已登陆用户 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>| <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">退出</a>.</p>

<?php else : ?>
<div id="comment-personaldetails">
			<p><label for="author">*大名</label> <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /> <?php if ($req) echo "<em>必填</em>"; ?></p>
			<p><label for="email">*Email</label> <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /> <em><?php if ($req) echo "必填, "; ?>不公开</em></p>
			<p><label for="url">博客</label> <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /></p>
</div>
<?php endif; ?>
<?php do_action('comment_form', $post->ID); ?>
<?php include(TEMPLATEPATH . '/smiley.php'); ?>

			<p><label for="comment">评论</label> <textarea name="comment" id="comment" cols="45" rows="10" tabindex="4"></textarea></p>
			<p><input type="submit" name="submit" value="提交" class="button" tabindex="5" />
			<?php comment_id_fields(); ?></p>
			
<div class="clear"></div>
	  	</fieldset>
		
	</form>
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>

  <?php /* Check for pings */ if ($countPings > 0) { ?>
     <p class="pinglisth">The trackbacks and pingpacks:</p>
  <ul id="pinglist">
  	<?php	foreach ($pings_list as $comment) {
  		if ('pingback' == get_comment_type()) $pingtype = 'Pingback';
  		else $pingtype = 'Trackback';
  		?>
      <li id="comment-<?php echo $comment->comment_ID ?>">
      	<?php comment_author_link(); ?> - <?php echo $pingtype; ?> on <?php echo mysql2date('y/m/d H:i', $comment->comment_date); ?>
      </li>
    <?php } ?>
  </ul>
    <?php } ?>
	
</div> <!-- /comments -->