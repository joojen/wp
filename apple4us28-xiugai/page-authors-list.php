<?php
/*
Template Name: Authors List
*/
?>
<?php get_header(); ?>
<div id="entry-wide"><!--begin entry & Authors List Template Page-->
<div id="entry-content">
<!--begin each post-->
<div id="post-<?php the_ID(); ?>" class="entrytitle">
<h1 class="page-name"><?php the_title(); ?></h1>
<div class="entry-content">
<div class="entry-body">
<div class="author-list-page">
<?php wp_list_authors('show_fullname=0&optioncount=1&exclude_admin=0&hide_empty=0&feed=RSS'); ?>
</div>
</div>
</div>

<div class="entry-footer"></div>
</div><!--end post-->
<!-- <?php trackback_rdf(); ?> -->


</div>
</div><!--end entry-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
