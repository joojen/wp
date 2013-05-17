<?php 
/** 
* Template Name: Tag cloud
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
					 <?php wp_tag_cloud( 'smallest=11&largest=45&number=0&orderby=count'); ?> 
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