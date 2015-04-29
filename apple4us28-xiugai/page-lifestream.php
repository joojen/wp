<?php
/*
Template Name: LifeStream Page
*/
?>
<?php get_header(); ?>


<div id="entry-wide"><!--begin entry-->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--begin each post-->
<div id="post-<?php the_ID(); ?>" class="entrytitle">
<div class="entry-content">

<div class="lifestream-body">
<!-- Notice:This template is for page,Powered by Google,you can learn more here: http://www.google.com/uds/solutions/wizards/dynamicfeed.html 

Here is a demo:http://dupola.com/ing

Change the infos below to yours.

Step 1: Create a Page
Step 2: select this template "LifeStream" for the page.
Step 3: Publish and visit it.
-->
<style type="text/css">
@import url("<?php bloginfo('template_url'); ?>/css/lifestream.css");
</style>

<div id="item1"><span style="color:#000000;font-size:14px;margin:10px;padding:4px;">Loading...</span></div>
<div id="item2"><span style="color:#000000;font-size:14px;margin:10px;padding:4px;">Loading...</span></div>
<br/>
<div id="item3"><span style="color:#000000;font-size:14px;margin:10px;padding:4px;">Loading...</span></div>
<div id="item4"><span style="color:#000000;font-size:14px;margin:10px;padding:4px;">Loading...</span></div>
 
<!-- Begin For Google Ajax Api Main Codes -->
<script src="http://www.google.com/jsapi?key=notsupplied-wizard"
    type="text/javascript"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
    type="text/javascript"></script>
<!-- End For Google Ajax Api Main Codes-->


<!-- Begin for Item1-->
  <script type="text/javascript">
    function LoadDynamicFeedControl() {
      var feeds = [
	{title: '放羊博客',
	 url: 'http://feed.keege.com'
	},
	{title: '在路上-《放羊心事》',
	 url: 'http://feedproxy.google.com/zhoujun'
	},
	];
      var options = {
        stacked : true,
        horizontal : false,
        title : "Blogs",
        numResults : 3
	  }

	  new GFdynamicFeedControl(feeds, 'item1', options);
    }
    // Load the feeds API and set the onload callback.
    google.load('feeds', '1');
    google.setOnLoadCallback(LoadDynamicFeedControl);
  </script>
<!-- End For Item1 -->

<!-- Begin For Item2-->
  <script type="text/javascript">
    function LoadDynamicFeedControl() {
      var feeds = [
	{title: 'joojen@twitter',
	 url: 'http://twitter.com/statuses/user_timeline/13663242.rss'
	},
	{title: 'joojen@FriendFeed',
	 url: 'http://friendfeed.com/joojen?format=atom'
	}];
      var options = {
        stacked : true,
        horizontal : false,
        title : "Twitters",
        numResults : 3
      }

      new GFdynamicFeedControl(feeds, 'item2', options);
    }
    // Load the feeds API and set the onload callback.
    google.load('feeds', '1');
    google.setOnLoadCallback(LoadDynamicFeedControl);
  </script>
<!-- End For Item2-->

<!-- Begin For Item3-->
  <script type="text/javascript">
    function LoadDynamicFeedControl() {
      var feeds = [
	{title: 'joojen@Google reader',
	 url: 'http://www.google.com/reader/public/atom/user/00021855284226996393/state/com.google/broadcast'
	},
	{title: 'joojen@del.icio.us',
	 url: 'http://del.icio.us/rss/joojen/toshare'
	},
	{title: 'joojen@FriendFeed',
	 url: 'http://friendfeed.com/joojen?format=atom'
	}];
      var options = {
        stacked : true,
        horizontal : false,
        title : "Reading...",
		numResults : 3
      }

      new GFdynamicFeedControl(feeds, 'item3', options);
    }
    // Load the feeds API and set the onload callback.
    google.load('feeds', '1');
    google.setOnLoadCallback(LoadDynamicFeedControl);
  </script>
<!-- End For Item3-->

<!-- Begin For Item4-->
  <script type="text/javascript">
    function LoadDynamicFeedControl() {
      var feeds = [
	{title: 'joojen@douban.com',
	 url: 'http://www.douban.com/feed/people/joojen/interests'
	},
	{title: 'joojen@flickr.com',
	 url: 'http://api.flickr.com/services/feeds/photos_public.gne?id=12707368@N07&lang=zh-hk&format=rss_200'
	},
	{title: 'joojen@last.fm',
	 url: 'http://ws.audioscrobbler.com/1.0/user/joojen/topartists.xml?type=overall'
	}];
      var options = {
        stacked : true,
        horizontal : false,
        title : "Sutffs",
		numResults : 3
      }

      new GFdynamicFeedControl(feeds, 'item4', options);
    }
    // Load the feeds API and set the onload callback.
    google.load('feeds', '1');
    google.setOnLoadCallback(LoadDynamicFeedControl);
  </script>
<!-- End For Item4-->


</div>
</div>

<div class="entry-footer"></div>
</div><!--end each post-->

	<?php endwhile; else: ?>

		<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.','apple4us');?></h2>

 		<?php endif; ?>

</div>
</div><!--end entry-->
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>