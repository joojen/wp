<!--begin sidebar left-->
<div id="sb1">

<!--begin feedsub
please replace the feed url with yours.
-->
<ol>
<h3><?php _e('Subscribe','apple4us'); ?></h3>
<ul>
<div class="feedsub">
<a href="http://feed.keege.com" target="_blank" title="订阅 <?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/feed.gif" alt="订阅 <?php bloginfo('name'); ?>" /></a>
<span class="feedsub_title"><a href="http://feed.keege.com" target="_blank" title="订阅 <?php bloginfo('name'); ?>" >订阅 <abbr title="Really Simple Syndication">RSS</abbr></a></span><a href="http://feed.keege.com" target="_blank" title="订阅 <?php bloginfo('name'); ?>" ><img src="http://www.feedsky.com/feed/joojen/sc/gif"></a>
</div>
<div class="feedicon">
<a href="http://fusion.google.com/add?feedurl=http://feed.keege.com" target="_blank" title="订阅到iGoogle或Google Reader" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/google.gif" alt="订阅到iGoogle或Google Reader" /></a>
<a href="http://www.xianguo.com/subscribe.php?url=http://feed.keege.com" target="_blank" title="订阅到鲜果" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/xianguo.gif" alt="订阅到鲜果" /></a>
<a href="http://www.zhuaxia.com/add_channel.php?url=http://feed.keege.com" target="_blank" title="订阅到抓虾" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/zhuaxia.gif" alt="订阅到抓虾" /></a>
<a href="http://www.pageflakes.com/subscribe.aspx?url=http://feed.keege.com" target="_blank" title="订阅到飞鸽" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/pageflakes.gif" alt="订阅到飞鸽" /></a>
<a href="http://www.bloglines.com/sub/http://feed.keege.com" target="_blank" title="订阅到Bloglines" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/bloglines.gif" alt="订阅到Bloglines" /></a>
<a href="http://add.my.yahoo.com/rss?url=http://feed.keege.com" target="_blank" title="订阅到我的雅虎" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/yahoo.gif" alt="订阅到我的雅虎" /></a>
<a href="http://www.netvibes.com/subscribe.php?url=http://feed.keege.com" target="_blank" title="订阅到NetVibes" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/netvibes.gif" alt="订阅到NetVibes" /></a>
<a href="http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://feed.keege.com" target="_blank" title="订阅到Newsgatar" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/newsgator.gif" alt="订阅到Newsgatar" /></a>
<a href="http://www.rojo.com/add-subscription?resource=http://feed.keege.com" target="_blank" title="订阅到Rojo" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/rojo.gif" alt="订阅到Rojo" /></a>
<a href="http://reader.yodao.com/#url=http://feed.keege.com" target="_blank" title="订阅到网易有道" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/yodao.gif" alt="订阅到网易有道" /></a>
<a href="http://www.iNeZha.com/add?url=http://feed.keege.com" target="_blank" title="通过哪吒订阅到MSN，Gtalk，Skype" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/anothr.gif" alt="通过哪吒订阅到MSN，Gtalk，Skype" /></a>
<a href="http://mail.qq.com/cgi-bin/reader_switch?rssswitch=1&feedurl=http://feed.keege.com" target="_blank" title="订阅到QQ邮箱" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/rss/qqmail.gif" alt="订阅到QQ邮箱" /></a>
</div>

</ul>
</ol><!--end feedsub-->

<!--Begin Widgets Check-->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 1') ) : else : ?>

<ol>
<h3><?php _e('Pages','apple4us'); ?></h3>
<ul>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>
</ol>

<ol>
<h3><?php _e('Categories','apple4us'); ?></h3>
<ul>
<?php wp_list_cats('optioncount=1'); ?>
</ul>
</ol> 

<ol>
<h3><?php _e('Monthly Archives','apple4us'); ?></h3>
 	<ul>
	 <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
 	</ul>
</ol>

<!--begin recent comments
You can download this plugin here:http://www.viper007bond.com/wordpress-plugins/clean-archives-reloaded/
-->
<?php if((is_page() || is_home() )){ ?>
<?php if (function_exists('get_recent_comments')) { ?>
<ol><h3><?php _e('Recent Comments','apple4us'); ?></h3>
<ul>
<?php get_recent_comments(); ?>
</ul>
</ol>
<?php } ?>   
<!--end recent comments-->
<?php } ?>


<?php endif; ?><!--End Widgets Check-->
</div>
<!--end sidebar left-->