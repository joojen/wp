<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div id="entry-wide"><!--begin entry & Archives Template Page-->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--begin each post-->
<div id="post-<?php the_ID(); ?>" class="entrytitle">

<h1 class="page-name"><?php the_title(); ?></h1>

<div class="entry-content">
<div class="entry-body">
<?php the_content(__('(more...)','apple4us')); ?>

				<?php if ( function_exists('wp_tag_cloud') ) : ?>
				<div id="wp-tag-cloud">
					<h3><?php _e('Tag Cloud');?></h3>
					<?php wp_tag_cloud('smallest=8&largest=20&'); ?>
				</div>
				<?php endif; ?>
				<br/><br/>


<div id="car">
<?php if (function_exists('clean_archives_reloaded') ) : ?>
<h3><?php _e('All','apple4us'); ?> <?php if (function_exists('car_total_posts')) { echo car_total_posts(); } ?>  <?php _e('posts','apple4us'); ?></h3>
<?php clean_archives_reloaded(); ?>
<div style="clear:both"></div>

<?php else : ?>


<br/><br/>

				<div style="width:45%;float:left;">
					<h3><?php _e('Categories','apple4us'); ?></h3>
					<ul class="archive-list">
						<?php wp_list_cats('sort_column=name&optiondates=0&optioncount=1&feed=(RSS)&feed_image='.get_bloginfo('template_url').'/images/postfeed.gif'); ?>
					</ul>
				</div>
				<div style="width:45%;float:right;">
					<h3><?php _e('Archives','apple4us'); ?></h3>
					<ul class="archive-list">
						<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
					</ul>
				</div>
				<br style="clear:both;" />
			
				
<?php endif; ?>
</div>

</div>	
</div>
	<?php edit_post_link(__('Edit Page','apple4us'), '<p style="clear:both;">', '</p>'); ?>
<div class="entry-footer"></div>
</div><!--end each post-->



<?php endwhile; ?>
 		<?php endif; ?>


</div>
</div><!--end entry-->
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>