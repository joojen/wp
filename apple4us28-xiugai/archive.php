<?php get_header(); ?>
<div id="entry"><!--begin entry & Archives page-->
<div id="entry-content">
	  <?php if (have_posts()) : ?>
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','apple4us'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','apple4us'); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php _e('Posts Tagged','apple4us'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','apple4us'); ?> <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','apple4us'); ?> <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','apple4us'); ?> <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive','apple4us'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives','apple4us'); ?></h2>
 	  <?php } ?>

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

<!--begin of pageNavi-->
<div class="content-nav">
<?php if (function_exists('wp_pagenavi')) : ?>
	<?php wp_pagenavi(); ?>
<?php else : ?>

		<div class="alignLeft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignRight"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		<div style="clear:both"></div>

<?php endif; ?>	
</div><!--End of pageNavi-->
 		<?php endif; ?>

</div>
</div><!--end entry-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
