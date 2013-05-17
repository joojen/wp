<?php
/**
 * Template Name: Archives
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
					<h2><?php _e('The Last 20 Posts', 'themater'); ?></h2>
					  <ul class="">
                        <?php wp_get_archives('type=postbypost&limit=20&show_post_count=1'); ?>
                    </ul>
					
					  <h2><?php _e('Categories', 'themater'); ?></h2>   
                        <ul class="">
                            <?php wp_list_categories('title_li=&show_count=1'); ?>
                        </ul>
					   <h2><?php _e('Monthly Archives', 'themater'); ?></h2>	
						<ul class="">
                            <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
                        </ul>
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