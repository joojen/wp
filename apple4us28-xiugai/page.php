<?php get_header(); ?>

<div id="entry-wide"><!--begin entry & Single Page-->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--Begin each post-->
<div class="entrytitle"><!-- Begin entrytitle Class -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- Begin AUTO ID and AUTO Class-->

<h1 class="page-name"><?php the_title(); ?></h1>
<div class="entry-content">
<div class="entry-body">
<?php the_content(__('(more...)','apple4us')); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
&nbsp;<?php if(function_exists('the_views')) { the_views(); } ?> 
<?php edit_post_link(__('Edit Page','apple4us'), '<p style="clear:both;">', '</p>'); ?>
</div>

<div class="entry-footer"></div>
</div><!-- End AUTO ID and AUTO Class-->
</div><!-- End entrytitle Class -->
<!--End each post-->


	<?php endwhile; else: ?>

		<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.','apple4us');?></h2>

 		<?php endif; ?>

</div>
</div><!--end entry-->
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>
