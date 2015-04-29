<?php if((is_home() || is_category() || is_paged() || is_date() || is_archive() )){ ?>
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
<?php } ?>

<?php if((is_single() || is_page() || is_preview() || is_search() || is_404() || is_attachment()  )){ ?>
<?php include (TEMPLATEPATH . '/sidebar3.php'); ?>
<?php } ?>