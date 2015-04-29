<?php get_header(); ?>

<!--begin entry & 404 error Page-->
<div id="entry-wider">
<div id="entry-content">

<!--Begin each post-->
<div class="entrytitle"><!-- Begin entrytitle Class -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- Begin AUTO ID and AUTO Class-->

<div class="entry-content">
<div class="entry-body">

<h2 class="pagetitle"><?php _e('Sorry, no posts matched your criteria.','apple4us');?></h2>
<center>
<h3><?php _e('Try to search all the site below,','apple4us');?> <?php _e('or back to the','apple4us');?><a href="/"><?php _e('homepage','apple4us');?></a>.</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</center>
</div>

</div>

<div class="entry-footer"></div>
</div><!-- End AUTO ID and AUTO Class-->
</div><!-- End entrytitle Class -->
<!--End each post-->




</div>
</div><!--end entry-->

<?php get_footer(); ?>