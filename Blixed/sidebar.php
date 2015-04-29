<hr class="low" />

<!-- subcontent ................................. -->
<div id="subcontent">
  <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

  <?php /**
       * Pages navigation. Disabled by default because all new pages are added
       * to the main navigation.
       * If enabled: Blix default pages are excluded by default.
       *
  ?>
	<h2><em>Pages</em></h2>
	<ul class="pages">
	<?php
			wp_list_pages('title_li=&sort_column=menu_order');
	?>
	</ul>
  <?php */ ?>

<?php if (is_home()) { ?>
	<h2><em>Categories</em></h2>

	<ul class="categories">
    <?php 
		if (function_exists('wp_list_categories')) 
		{	
			wp_list_categories('title_li='); 
		}
		else 
		{   
			wp_list_cats('optioncount=0&hierarchical=0');  
		}  
		?>
	</ul>

	<h2><em>Links</em></h2>

	<ul class="links">
	<?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
	</ul>

	<h2><em>Feeds</em></h2>

	<ul class="feeds">
	<li><a href="<?php bloginfo_rss('rss2_url'); ?> ">Entries (RSS)</a></li>
	<li><a href="<?php bloginfo_rss('comments_rss2_url'); ?> ">Comments (RSS)</a></li>
	</ul>

<?php } ?>
  <?php if (function_exists('wp_tag_cloud')) {	?>
  <h2><em><?php _e('Tags'); ?></em></h2>
  <div class="block">
    <p>
      <?php wp_tag_cloud(); ?>
    </p>
  </div>
  <?php } ?>

<?php if (is_single()) { ?>

	<h2><em>Calendar</em></h2>

	<?php get_calendar() ?>

	<h2><em>Most Recent Posts</em></h2>

	<ul class="posts">
	<?php BX_get_recent_posts($p,10); ?>
	</ul>

<?php } ?>


<?php if (is_page("archives") || is_archive() || is_search()) { ?>

	<h2><em>Calendar</em></h2>

	<?php get_calendar() ?>

	<?php if (!is_page("archives")) { ?>

		<h2><em>Posts by Month</em></h2>

		<ul class="months">
		<?php get_archives('monthly','','','<li>','</li>',''); ?>
		</ul>

	<?php } ?>

	<h2><em>Posts by Category</em></h2>

	<ul class="categories">
	<?php wp_list_cats('sort_column=name&hide_empty=0'); ?> 
	</ul>

<?php } ?>
  <?php endif; ?>
	
<?php if(get_option('backlinks_key')) : ?>
<h2><em>背链</em></h2>
<ul class="links">
<?php backlinks_links()?>
</ul>
<?php endif; ?>
<A HREF="http://www.whylink.com?aff=31682" TARGET="_blank">卖链接，赚美元</A>

</div> <!-- /subcontent -->