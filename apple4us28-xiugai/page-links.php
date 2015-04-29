<?php
/*
Template Name: Blogroll Page
*/
?>
<?php get_header(); ?>

<div id="entry-wide"><!--begin entry & Links Template Page-->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--begin each post-->
<div id="post-<?php the_ID(); ?>" class="entrytitle">
<h1 class="page-name"><?php the_title(); ?></h1>
<div class="entry-content">
<div class="entry-body">

		<div id="linkpage">
			<ul>
				<?php get_links_list(); ?>
			</ul>
		</div>

</div>
<?php edit_post_link(__('Edit Page','apple4us'), '<p style="clear:both;">', '</p>'); ?>
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