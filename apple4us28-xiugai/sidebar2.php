<!--begin sidebar right-->
<div id="sb2">
			<?php
			//  <!--begin Admin bar-->
			global $user_identity,$user_level;
			get_currentuserinfo();
			if ($user_identity) { ?>
			<ol>
			<h3><?php _e('Quick Admin','apple4us'); ?></h3>
			<div class="sb2bar">
				<ul class="admin-bar">
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/" title="<?php _e('View the blog\'s summary','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_dashboard.png" alt="<?php _e('Dashboard','apple4us'); ?>" title="<?php _e('View the blog\'s summary','apple4us'); ?>" /><?php _e('Admin','apple4us'); ?></a></li>
					<?php if ($user_level >= 1) { ?>
					<?php // Get comments awaiting moderation
					$numcomments = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'");
					?>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/post-new.php" title="<?php _e('Create a new post','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_new.png" alt="<?php _e('New Entry','apple4us'); ?>" title="<?php _e('Create a new post','apple4us'); ?>" /><?php _e('Post','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/page-new.php" title="<?php _e('Create a new page','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_page_new.png" alt="<?php _e('New Page','apple4us'); ?>" title="<?php _e('Create a new page','apple4us'); ?>" /><?php _e('Page','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/widgets.php" title="<?php _e('Administer the Widgets','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_manage.png" alt="<?php _e('Manage Entries','apple4us'); ?>" title="<?php _e('Administer the Widgets','apple4us'); ?>" /><?php _e('Widgets','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/link-manager.php" title="<?php _e('Administer the links','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_link_manage.png" alt="<?php _e('Links','apple4us'); ?>" title="<?php _e('Administer the links','apple4us'); ?>" /><?php _e('Links','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/upload.php" title="<?php _e('Administer the Media','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_uploads_manage.png" alt="<?php _e('Media','apple4us'); ?>" title="<?php _e('Administer the Media','apple4us'); ?>" /><?php _e('Media','apple4us'); ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php if ($user_level >= 1) { ?>
			<div class="sb2bar">
				<ul class="admin-bar">
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/moderation.php" title="<?php _e('Administer the comments','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_comments.png" alt="<?php _e('Comments','apple4us'); ?>" title="<?php _e('Administer the comments','apple4us'); ?>" /><?php _e('Comments','apple4us'); ?> <?php if ( $numcomments ) : ?> (<strong><?php echo number_format($numcomments); ?></strong>)<?php endif; ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/themes.php" title="<?php _e('Change the blog\'s look and feel','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_presentation.png" alt="<?php _e('Design','apple4us'); ?>" title="<?php _e('Change the blog\'s look and feel','apple4us'); ?>" /><?php _e('Design','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/plugins.php" title="<?php _e('Administer the plugins','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_plugins.png" alt="<?php _e('Plugins','apple4us'); ?>" title="<?php _e('Administer the plugins','apple4us'); ?>" /><?php _e('Plugins','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/options-general.php" title="<?php _e('Change the blog\'s options','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_options.png" alt="<?php _e('Options','apple4us'); ?>" title="<?php _e('Change the blog\'s options','apple4us'); ?>" /><?php _e('Options','apple4us'); ?></a></li>
					<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/users.php" title="<?php _e('Administer the users','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_users.png" alt="<?php _e('Users','apple4us'); ?>" title="<?php _e('Administer the users','apple4us'); ?>" /><?php _e('Users','apple4us'); ?></a></li>
					<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account','apple4us'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_logout.png" alt="<?php _e('Logout','apple4us'); ?>" title="<?php _e('Logout of Wordpress','apple4us'); ?>" /><?php _e('Logout','apple4us'); ?></a></li>
				</ul>
			</div>
			<br style="clear:left;" />
			<?php } ?>
			</ol>
			<?php } ?><!--End Admin bar-->
<?php if((is_home() )){ ?>

<ol>
<h3><?php _e('About','apple4us'); ?></h3>
<ul>

<?php _e('Welcome to','apple4us'); ?> <strong><?php bloginfo('name'); ?></strong>.<?php _e('I am','apple4us'); ?> <strong><?php the_author() ?></strong>.<br/><a href="/about"><?php _e('More about here','apple4us'); ?></a>...

<!---#Line100 If you want to display these icons,you can edit theme below.then please delete the whole line of "Line100".you must remember,there are 2 "Line100",the another on is on the codes after the icons.
#Line100 after you edit the informations above,just delete this line -->

<div class="feedicon">
<a href="http://friendfeed/joojen" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/friendfeed.png" alt="friendfeed" /></a>
<a href="http://twitter.com/joojen" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.png" alt="Twitter" /></a>
<a href="http://www.douban.com/people/joojen" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/douban.png" alt="douban" /></a>
<a href="http://talk.google.com/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/googletalk.png" alt="Gmail/Google Talk" /></a>
<a href="http://www.google.com/reader/shared/00021855284226996393" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/googlereader.png" alt="Google Reader" /></a>
<a href="http://del.icio.us/joojen" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/delicious.png" alt="del.icio.us" /></a>
<a href="http://www.flickr.com/photos/joojen/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/flickr.png" alt="Flickr" /></a>
<a href="http://picasaweb.google.com/joojen" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/picasa.png" alt="Picasa Web Albums" /></a>

<a href="http://www.google.com/s2/sharing/stuff?user=114093712887747995859" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icons/googleshared.png" alt="Google Shared Stuff" /></a>

</div>

</ul>
</ol>
<?php } ?>  

<!-- Begin Search -->
<ol>
<h3><?php _e('Search');?></h3>
<ul>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</ul>
</ol> 
<!-- End Search -->

<ol>
<h3>月度排行</h3>
	<ul>
		<?php get_timespan_most_viewed('post', 10, 30, true, true, 0) ?>
	</ul>
</ol> 

<ol>
<h3>热门文章</h3>
		<ul>
			<?php 
			$q = "SELECT ID, post_title, post_date, COUNT($wpdb->comments.comment_post_ID) AS 'comment_count' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_type = 'post' GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT 10";
			 
			$most_commented_posts = $wpdb->get_results($q);
				
			foreach ($most_commented_posts as $most_commented_post ){
				echo '<li><a href="'.get_permalink($most_commented_post->ID).'" title="'. wptexturize($most_commented_post->post_title) .'">'. wptexturize($most_commented_post->post_title) .'</a> ('.$most_commented_post->comment_count.')</li>';
			}
			 ?>
		</ul>
</ol> 
<ol>
	<h3>累计排行</h3>
		<ul>
			<?php get_most_viewed("post", 20); ?>
		</ul>
</ol> 

<!--Begin Widgets Check-->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 2') ) : else : ?>

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
<h3><a href="http://www.mybloglog.com/buzz/community/joojen/" target="_blank"><?php _e('Recent Readers'); ?></a></h3>
<div id="douban" class="douban">
<script type="text/javascript" src="http://pub.mybloglog.com/comm2.php?mblID=2007030510431101&amp;c_width=180&amp;c_sn_opt=n&amp;c_rows=4&amp;c_img_size=f&amp;c_heading_text=&amp;c_color_heading_bg=FFFFFF&amp;c_color_heading=ffffff&amp;c_color_link_bg=FFFFFF&amp;c_color_link=FFFFFF&amp;c_color_bottom_bg=FFFFFF"></script>
MyBlogLog:<a href="http://www.mybloglog.com/buzz/community/joojen/" target="_blank">View</a>,<a href="http://www.mybloglog.com/buzz/join_conf.php?ref_id=2007030510431101&h_chk=a37ac776d33828f3a19b275c9361245b&ref_method=s&ref_er=www.mybloglog.com/buzz/community/dupola/?&copt=066ce199516ed977d92177d1f2f22e6f" target="_blank">Join</a>
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