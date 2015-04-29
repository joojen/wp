<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<title><?php if ( function_exists('wp_tag_cloud') ) : if (single_tag_title(' ', false)) { echo 'Tag: ' ; } endif; ?><?php wp_title(' '); ?><?php if (wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if(is_home()){?><meta name="Description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<meta name="keywords" content="WordPress" />
<?php } ?>

<?php if((is_single() || is_page() || is_category() || is_tag() || is_author() || is_date() || is_archive() || is_search() || is_404() || is_paged() || is_attachment()  )){ ?>
<meta name="Description" content="<?php if ( function_exists('wp_tag_cloud') ) : if (single_tag_title(' ', false)) { echo 'Tag: ' ; } endif; ?><?php wp_title(' '); ?><?php if (wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<meta name="keywords" content="<?php if (function_exists('wp_tag_cloud')) : ?><?php if (is_single()) { $metatags = get_the_tags($post->ID); foreach ($metatags as $tagpost) { $mymetatag = apply_filters('the_tags',$tagpost->name); $keyword = ($mymetatag); echo $keyword.","; } } ?><?php endif; ?> WordPress,<?php bloginfo('name'); ?>" />
<?php } ?>

<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="robots" content="all" />
<meta name="theme" content="Apple Theme from dupola.com" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php echo get_option('home'); ?>/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" /><!-- change this for your own feed url -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (is_single() and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) ) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script_quicktags.js"></script>
<?php } ?>

<?php wp_head(); ?>
</head>

<body class="layout">

<div id="container">
<div id="container-inner">

<!--begin header-->
<div id="header">
<div id="header-content">


<div id="header-name"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name') ?></a><span><?php bloginfo('description'); ?></span></div>


<div class="headermenu">
		<ul>
	<li <?php if (is_home()) { echo 'class="current_page_item"'; } ?>><a href="<?php echo get_option('home'); ?>"><?php _e('Home','apple4us');?></a></li>
	<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
		</ul>
</div>
<!--begin header menu end header menu-->

</div>
</div><!--end header-->

<!-- Begin header navigation-->
<div id="headernavi">
        <div class="headernavi-content">
		<ul>
<li><a href="<?php echo get_settings('home'); ?>/" title="Back to Homepage."><?php _e('Home','apple4us');?></a></li>
<?php wp_list_categories('orderby=ID&depth=1&hierarchical=1&title_li='); ?>
<?php wp_register('<li>','</li>'); ?>
		</ul>
		</div>
</div>
<!-- End header navigation-->

<div id="content"><!--begin content-->
<div class="content-bg-top"></div>
<div id="content-inner">