<!--begin sidebar right-->
<div id="sb3">
			<?php
			//  <!--begin Admin bar-->
			global $user_identity,$user_level;
			get_currentuserinfo();
			if ($user_identity) { ?>
			<ol>
			<h3><?php _e('Quick Admin','apple4us'); ?></h3>
			<div class="sb3bar">
				<ul class="admin-bar">
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/" title="<?php _e('View the blog\'s summary','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_dashboard.png" alt="<?php _e('Dashboard','apple4us'); ?>" title="<?php _e('View the blog\'s summary','apple4us'); ?>" /><?php _e('Admin','apple4us'); ?></a></li>
					<?php if ($user_level >= 1) { ?>
					<?php // Get comments awaiting moderation
					$numcomments = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'");
					?>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/post-new.php" title="<?php _e('Create a new post','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_new.png" alt="<?php _e('New Entry','apple4us'); ?>" title="<?php _e('Create a new post','apple4us'); ?>" /><?php _e('Post','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/edit.php" title="<?php _e('Edit your posts','apple4us'); ?>" /><?php _e('Edit','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/page-new.php" title="<?php _e('Create a new page','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_page_new.png" alt="<?php _e('New Page','apple4us'); ?>" title="<?php _e('Create a new page','apple4us'); ?>" /><?php _e('Page','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/edit-pages.php" title="<?php _e('Edit your pages','apple4us'); ?>" /><?php _e('Edit','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/widgets.php" title="<?php _e('Administer the Widgets','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_manage.png" alt="<?php _e('Manage Entries','apple4us'); ?>" title="<?php _e('Administer the Widgets','apple4us'); ?>" /><?php _e('Widgets','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/link-manager.php" title="<?php _e('Administer the links','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_link_manage.png" alt="<?php _e('Links','apple4us'); ?>" title="<?php _e('Administer the links','apple4us'); ?>" /><?php _e('Links','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/link-add.php" title="<?php _e('Add new links','apple4us'); ?>" /><?php _e('Add','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/upload.php" title="<?php _e('Administer the Media','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_uploads_manage.png" alt="<?php _e('Media','apple4us'); ?>" title="<?php _e('Administer the Media','apple4us'); ?>" /><?php _e('Media','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/media-new.php" title="<?php _e('Upload new media files','apple4us'); ?>" /><?php _e('Add','apple4us'); ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php if ($user_level >= 1) { ?>
			<div class="sb3bar">
				<ul class="admin-bar">
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/moderation.php" title="<?php _e('Administer the comments','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_comments.png" alt="<?php _e('Comments','apple4us'); ?>" title="<?php _e('Administer the comments','apple4us'); ?>" /><?php _e('Comments','apple4us'); ?> <?php if ( $numcomments ) : ?> (<strong><?php echo number_format($numcomments); ?></strong>)<?php endif; ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/themes.php" title="<?php _e('Change the blog\'s look and feel','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_presentation.png" alt="<?php _e('Design','apple4us'); ?>" title="<?php _e('Change the blog\'s look and feel','apple4us'); ?>" /><?php _e('Design','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/plugins.php" title="<?php _e('Administer the plugins','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_plugins.png" alt="<?php _e('Plugins','apple4us'); ?>" title="<?php _e('Administer the plugins','apple4us'); ?>" /><?php _e('Plugins','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="<?php _e('Install new plugins','apple4us'); ?>"><?php _e('Add','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/options-general.php" title="<?php _e('Change the blog\'s options','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_options.png" alt="<?php _e('Options','apple4us'); ?>" title="<?php _e('Change the blog\'s options','apple4us'); ?>" /><?php _e('Options','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/users.php" title="<?php _e('Administer the users','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_users.png" alt="<?php _e('Users','apple4us'); ?>" title="<?php _e('Administer the users','apple4us'); ?>" /><?php _e('Users','apple4us'); ?></a>/<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="<?php _e('Manage your profile','apple4us'); ?>"><?php _e('You','apple4us'); ?></a></li>
					<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_logout.png" alt="<?php _e('Logout','apple4us'); ?>" title="<?php _e('Logout of Wordpress','apple4us'); ?>" /><?php _e('Logout','apple4us'); ?></a></li>	</ul>
			</div>
			<br style="clear:left;" />
			<?php } ?>
			</ol>
			<?php } ?><!--End Admin bar-->
<ol>
<h3></h3>
		<ul>
			订阅本博客：<a href="http://feed.keege.com"  target="_blank"><img src="http://www.keege.com/logo/feed.png"></a>

<a href="http://fusion.google.com/add?feedurl=http://feed.keege.com"  target="_blank"><img border="0"  src="http://www.keege.com/logo/feed_google.gif" alt="订阅到google" /></a><br />

<a href="http://www.xianguo.com/subscribe.php?url=http://feed.keege.com" target="_blank"><img border="0" src="http://www.keege.com/logo/feed_xianguo.gif" alt="订阅到鲜果" /></a>

<a href="http://www.zhuaxia.com/add_channel.php?url=http://feed.keege.com"  target="_blank"><img border="0" src="http://www.keege.com/logo/feed_zhuaxia.gif" alt="订阅到抓虾"  /></a><br />

<a href="http://reader.yodao.com/#url=http://feed.keege.com" target="_blank"><img border="0" src="http://www.keege.com/logo/feed_youdao.gif" alt="订阅到有道"  /></a>

<a href="http://mail.qq.com/cgi-bin/reader_switch?rssswitch=1&feedurl=http://feed.keege.com" target="_blank"><img border="0" src="http://www.keege.com/logo/feed_qqmail.gif" alt="订阅到QQ邮箱"  /></a><br />

<form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=keege', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="keege" name="uri"/><input type="hidden" name="loc" value="zh_CN"/><input type="submit" value="E-mail订阅" /></form>

		</ul>
</ol> 	
<!-- Begin Search -->
<ol>
<h3><?php _e('Search');?></h3>
<ul>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</ul>
</ol> 
<!-- End Search -->

<!--begin recent comments
You can download this plugin here:http://blog.jodies.de/archiv/2004/11/13/recent-comments/
-->
<?php if (function_exists('get_recent_comments')) { ?>
<ol><h2><?php _e('Recent Comments'); ?></h2>
<ul class="commentsbar">
<?php get_recent_comments(); ?>
</ul>
</ol>
<?php } ?>   
<!--end recent comments-->

<!--Begin Recent Posts-->
<ol><h3><?php _e('Recent Posts','apple4us'); ?></h3>
<ul>
<?php
$myposts = get_posts('numberposts=6&offset=0');
foreach($myposts as $post) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();
?></a></li>
<?php endforeach; ?>
</ul>
</ol><!--End Recent Posts-->

<ol>
<h3>累计排行</h3>
	<ul>
		<?php get_most_viewed("post", 15); ?>
	</ul>
</ol> 

<!--Begin Widgets Check-->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 3') ) : else : ?>

<!--Begin Recent Posts-->
<ol><h3><?php _e('Recent Posts','apple4us'); ?></h3>
<ul>
<?php
$myposts = get_posts('numberposts=6&offset=0');
foreach($myposts as $post) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();
?></a></li>
<?php endforeach; ?>
</ul>
</ol><!--End Recent Posts-->

<?php if((is_home() )){ ?>

<!--Begin blogroll-->
<ol>
<?php wp_list_bookmarks('title_li=&category_before=&category_after=&category_orderby=id&category_order=ASC'); ?>
</ol><!--End blogroll-->

<?php } ?>  


<!--Begin MyBlogLog Widget
Change the Blog ID and links,text to your own
<ol>
<h3><a href="http://www.mybloglog.com/buzz/community/dupola/" target="_blank"><?php _e('Recent Readers'); ?></a></h3>
<div id="douban" class="douban">
<script type="text/javascript" src="http://pub.mybloglog.com/comm2.php?mblID=2007030510431101&amp;c_width=180&amp;c_sn_opt=n&amp;c_rows=4&amp;c_img_size=f&amp;c_heading_text=&amp;c_color_heading_bg=FFFFFF&amp;c_color_heading=ffffff&amp;c_color_link_bg=FFFFFF&amp;c_color_link=FFFFFF&amp;c_color_bottom_bg=FFFFFF"></script>
MyBlogLog:<a href="http://www.mybloglog.com/buzz/community/dupola/" target="_blank">View</a>,<a href="http://www.mybloglog.com/buzz/join_conf.php?ref_id=2007030510431101&h_chk=a37ac776d33828f3a19b275c9361245b&ref_method=s&ref_er=www.mybloglog.com/buzz/community/dupola/?&copt=066ce199516ed977d92177d1f2f22e6f" target="_blank">Join</a>
</div>
</ol>
End MyBlogLog Widget -->

<!--Begin Meta-->
<?php if((is_home() )){ ?>
<ol>
<h3><?php _e('Meta','apple4us'); ?></h3>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
</ul>
</ol>
<?php } ?>  
<!--End Meta-->


<?php endif; ?><!--End Widgets Check-->
</div><!--End sidebar right-->