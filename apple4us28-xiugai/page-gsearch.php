<?php
/*
Template Name: Google Search
*/
?>
<?php get_header(); ?>

<div id="entry-wide"><!--begin entry & Google Search Results Template Page -->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--begin each post-->
<div id="post-<?php the_ID(); ?>" class="entrytitle">
<h1 class="page-name"><?php the_title(); ?></h1>
<div class="entry-content">
<div class="entry-body">

<!-- Google Search Result Snippet Begins -->
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 500;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

<!-- Google Search Result Snippet Ends -->

</div>
<?php edit_post_link(__('Edit Page'), '<p style="clear:both;">', '</p>'); ?>
</div>
</div><!--end each post-->

	<?php endwhile; else: ?>

		<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.');?></h2>

 		<?php endif; ?>

</div>
</div><!--end entry-->
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>
