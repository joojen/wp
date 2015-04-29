<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf(( 'Page %s' ), max( $paged, $page ) );
	?></title>
	<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if IE]>
    	<script src="<?php bloginfo('template_directory'); ?>/html5.js"></script>
	<![endif]-->
	<?php 
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>

<body>
<header id="header">
	<div id="header_box">
		<hgroup>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</hgroup>
		<div id="toolbar">
			<div id="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed">RSS</a></div>
			<form id="searchform" method="get" action="http://www.baidu.com/baidu">
				
				<input name="word" size="30" placeholder="Search" type="text">
				<input name="ie" value="utf-8" type="hidden"> 
				<input name="tn" value="bds" type="hidden">
				<input name="cl" value="3" type="hidden">
				<input name="ct" value="2097152" type="hidden">
				<input name="si" value="joojen.com" type="hidden">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
</header>
<nav id="menu"><?php wp_nav_menu( array('theme_location'=>'header-menu', 'container'=>'false', 'menu_class'=>'nav')); ?></nav>
<div id="content">