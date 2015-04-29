<?php get_header(); ?>

<!-- content ................................. -->
<div id="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
  <?php wp_link_pages(); ?>
  <?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
  <?php if ($sub_pages <> "" ){?>
  <p>Sub Pages Found</p>
  <ul>
    <?php echo $sub_pages; ?>
  </ul>
  <?php }?>

<?php endwhile; ?>

<?php endif; ?>
 
<?php comments_template(); ?>
</div> <!-- /content -->
<?php get_sidebar();?>
<?php get_footer(); ?>