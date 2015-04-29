<?php get_header(); ?>

<div id="entry"><!--begin entry & Search Results Page-->
<div id="entry-content">

<?php if (have_posts()) : ?>
<h2 class="pagetitle">Search For "<?php echo wp_specialchars($s, 1); ?>"</h2>		

			<?php while (have_posts()) : the_post(); ?>

<!--Begin each post-->
<div class="entrytitle"><!-- Begin entrytitle Class -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- Begin AUTO ID and AUTO Class-->

<div class="entry-name-date"><?php the_time('d') ?><div class="entry-name-month"><?php the_time('M') ?></div></div>
<div class="entry-header">
<h1 class="entry-name"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>
<div class="entry-meta">
<?php the_author_posts_link(); ?> <?php _e('on','apple4us'); ?> <?php the_time('Y-n-j') ?> <?php the_time('H:i') ?>,&nbsp;<?php if(function_exists('the_views')) { the_views(); } ?>&nbsp;<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?><?php edit_post_link(__('Edit','apple4us'), ' &nbsp;'); ?>
</div>

<div class="entry-content">
<div class="entry-body">
<?php the_excerpt(__('(more...)','apple4us')); ?>
</div>
<div class="entry-info">
<?php _e('Filed under:','apple4us'); ?><?php the_category(', ') ?>&nbsp;&nbsp;<?php if (function_exists('the_tags')) { ?>
<?php _e('Tags:','apple4us'); ?> <?php the_tags('', ', ', '.'); ?><?php } ?>  
</div>
</div>

<div class="entry-footer"></div>
</div><!-- End AUTO ID and AUTO Class-->
</div><!-- End entrytitle Class -->
<!--End each post-->

<!-- <?php trackback_rdf(); ?> -->

<?php endwhile; ?>

<div class="content-nav">
<!--begin pageNavi-->
<?php if (function_exists('wp_pagenavi')) : ?>
	<?php wp_pagenavi(); ?>
<?php else : ?>

		<div class="alignLeft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignRight"><?php previous_posts_link('Next Entries &raquo;') ?></div>

<?php endif; ?>	
</div><!--end pageNavi-->
 
	<?php else : ?>


<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.','apple4us');?></h2>
<center><?php include (TEMPLATEPATH . '/searchform.php'); ?></center>

<?php endif; ?>

</div>
</div><!--end entry-->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>