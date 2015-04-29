<?php

// Begin Widget Settings
if ( function_exists('register_sidebar') )
	register_sidebar(array(
'name' => 'Sidebar 1', 
'before_widget' => '<ol>', // Removes <li>
'after_widget' => '</ol>', // Removes </li>
'before_title' => '<h2>', // Replaces <h2>
'after_title' => '</h2>', // Replaces </h2>
));						
if ( function_exists('register_sidebar') )
	register_sidebar(array(
'name' => 'Sidebar 2',
'before_widget' => '<ol>', // Removes <li>
'after_widget' => '</ol>', // Removes </li>
'before_title' => '<h2>', // Replaces <h2>
'after_title' => '</h2>', // Replaces </h2>
));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
'name' => 'Sidebar 3',
'before_widget' => '<ol>', // Removes <li>
'after_widget' => '</ol>', // Removes </li>
'before_title' => '<h2>', // Replaces <h2>
'after_title' => '</h2>', // Replaces </h2>
));
// End for Widget Settings.

// Begin languages settings
if (!function_exists ('load_theme_textdomain'))
  include (ABSPATH.WPINC.'/l10n.php');
load_theme_textdomain ('apple4us');
// End for languages settings.


// Begin remove the CSS of WP-Pagenavi plugin,
// you can find the CSS in layout.css file,find /* Hack for WP-PageNavi */
remove_action('wp_head', 'pagenavi_css');
// End remove function of WP-Pagenavi

// remove the checkbox of Subscribe to comments,
// the codes of the checkbox in the comments.php, find <!-- Begin Subscribe to comments-->
// the CSS in the comments.css, find /* Begin Hack for subscribe-to-comments */
remove_action('comment_form', 'show_subscription_checkbox');
// End remove the function of Subscribe to comments


// Begin Comments list 
function apple4us_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li class="feedback-content" <?php comment_class(); ?> id="comment-<?php comment_ID() ?>"><!-- Begin each comment-->
     <div id="div-comment-<?php comment_ID(); ?>">

			<?php
			$isByAuthor = false;
			if($comment->user_id != 0)
			{
				$isByAuthor = true;
			}
			if ('comment-entry-alt' == $oddcomment && $isByAuthor == true)
			{
				$oddcomment = 'comment-entry-owner';
			}
			if ('comment-entry-alt' != $oddcomment && $isByAuthor == true)
			{
				$oddcomment = 'comment-entry-owner';
			}
			elseif ('comment-entry-alt' == $oddcomment && $isByAuthor == false)
			{
				$oddcomment = 'comment-content';
			}
			else
			{
				$oddcomment = 'comment-content';
			}
			?>

<div class="feedback-gravatar">
<?php if (function_exists('get_avatar')) : ?>
<?php echo get_avatar(get_comment_author_email(),'40'); ?>
<?php else : ?>
<?php 
if ( !empty( $comment->comment_author_email ) ) {
        $md5 = md5( $comment->comment_author_email );
        $default = urlencode(get_bloginfo('template_directory') . '/images/gravatar.png');
        echo "<img src='http://www.gravatar.com/avatar.php?gravatar_id=$md5&amp;size=30&amp;default=$default' alt='<?php _e('Gravatar Icon','apple4us'); ?>' width='40' />";
}
?>
<?php endif; ?>
</div>

      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.','apple4us') ?></em>
         <br />
      <?php endif; ?>

<div class="<?php _e($oddcomment); ?>">
<?php comment_text();?>

<div class="comment-reply">
         <?php comment_reply_link(array_merge( $args, array('add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>

<div id="eachcontent" class="feedback-footer">
<span class="feedback-title"></a>&nbsp;<?php comment_author_link() ?></span> @ <?php comment_date(); ?>,<?php comment_time(); ?>(<a href="#comment-<?php comment_ID() ?>" title="<?php _e('Permalink to this comment','apple4us'); ?>">#</a>)<?php edit_comment_link('edit','',''); ?></div>

     </div>
<?php
        };
// End Comments list 


// Begin Custom Trackbacks List
function apple4us_pings($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
<li id="comment-<?php comment_ID( ); ?>" class="trackback"><?php comment_author_link(); ?></li>

<?};
// End Custom Trackbacks List

// Begin to custom default Gravatar image file
add_filter( 'avatar_defaults', 'Apple4Us_addgravatar' );
function Apple4Us_addgravatar( $avatar_defaults ) {
$myavatar = get_bloginfo('template_directory') . '/images/gravatar.png';
$avatar_defaults[$myavatar] = (Apple4Us);
return $avatar_defaults;
};
// End to custom default Gravatar image file
//
?>