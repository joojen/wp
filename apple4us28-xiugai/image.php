<?php get_header(); ?>

<div id="entry-wide"><!--begin entry & Images Page-->
<div id="entry-content">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
<!--Begin each post-->
<div class="entrytitle"><!-- Begin entrytitle Class -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- Begin AUTO ID and AUTO Class-->

<div class="entry-name-date"><?php the_time('d') ?><div class="entry-name-month"><?php the_time('M') ?></div></div>
<div class="entry-header">
<h1 class="entry-name"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>
<div class="entry-meta">
<?php the_author_posts_link(); ?> <?php _e('on','apple4us'); ?> <?php the_time('Y-n-j') ?> <?php the_time('H:i') ?>,&nbsp;<?php if(function_exists('the_views')) { the_views(); } ?>&nbsp;<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?><?php edit_post_link(__('Edit','apple4us'), ' &nbsp;'); ?><br/>
<?php _e('Filed under:','apple4us'); ?><?php the_category(', ') ?>&nbsp;&nbsp;<?php if (function_exists('the_tags')) the_tags('Tags：' , ' , ' , '.'); ?>
</div>

<div class="entry-content">
<div class="entry-body">
<!--Begin Attachments-->
<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
<!--End Attachments-->
<?php the_content(__('(more...)','apple4us')); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<!--Begin Attachments Navigation-->
<div class="medianavi">
<div class="medialeft"><?php previous_image_link('&laquo; %link','apple4us') ?></div>
<div class="mediaright"><?php next_image_link('%link &raquo;','apple4us') ?></div>
</div><!--Begin Attachments Navigation-->

</div>


</div>

<div class="entry-footer"></div>
</div><!-- End AUTO ID and AUTO Class-->
</div><!-- End entrytitle Class -->
<!--End each post-->

<!-- <?php trackback_rdf(); ?> -->

<div class="content-nav">
<!--Start of pageNavi-->
<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
<div style="algin:center"> <a href="<?php echo get_option('home'); ?>">
<?php _e('Home','apple4us');?></a></div>
		<div style="clear:both"></div>
</div><!--End of pageNavi-->

			<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.','apple4us');?></h2>

            <center><?php include (TEMPLATEPATH . '/searchform.php'); ?></center>



			<?php endif; ?>
</div>
</div><!--end entry-->
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>