<?php
/**
 * Template Name: Hot
*/
 ?>  

<?php get_header(); ?>
<?php while ( have_posts() ): the_post(); ?>

<div class="main group <?php echo wpb_option('general-sidebar','sidebar-right'); ?>">

	<div class="content-part">
		<div class="pad">
			<article id="entry-<?php the_ID(); ?>" <?php post_class('entry group'); ?>>
				
				<?php get_template_part('partials/page-image'); ?>
				<?php get_template_part('partials/page-title'); ?>
				
				<div class="text">
				<div>                   <h2>热门评论</h2>                                        <ul class="sitemap-list">                       <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title,post_date FROM $wpdb->posts where post_type <> 'page' ORDER BY comment_count DESC LIMIT 0 , 20");                 foreach ($result as $topten) {                 $postid = $topten->ID;                 $title = $topten->post_title;                $post_date = $topten->post_date;                $commentcount = $topten->comment_count;                 if ($commentcount != 0) { ?>                   <li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>                 <?php } } ?>                    </ul>								
                    <h2>本月排行</h2>
                    
                    <ul class="sitemap-list">
                        <?php get_timespan_most_viewed('post', 15, 30, true, true, 0) ?>
                    </ul>
                    <h2>年度排行</h2>                                        <ul class="sitemap-list">                        <?php get_timespan_most_viewed('post', 20, 365, true, true, 0) ?>                    </ul>										<h2>总排行</h2>                                        <ul class="sitemap-list">                        <?php get_most_viewed("post", 30); ?>                    </ul>
                </div>
					<div class="clear"></div>
				</div>			
			</article>
			
			<?php comments_template(); ?>
			
		</div><!--/.pad-->
	</div><!--/.content-part-->
	
	<div class="sidebar">	
		<?php get_sidebar(); ?>
	</div><!--/.sidebar-->

</div><!--/.main-->

<?php endwhile; ?>
<?php get_footer(); ?>