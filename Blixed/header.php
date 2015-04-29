<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); } 
elseif (is_single() || is_page() ) { single_post_title(); } elseif (is_search() ) { bloginfo('name'); echo " 搜索结果: "; echo wp_specialchars($s); } else { wp_title('',true); } ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<? if (is_home()){
$description = "放羊心事.";
$keywords = "放羊心事, 放羊, 南京, 博客, 主题";
} elseif (is_single()){if ($post->post_excerpt) {$description  = $post->post_excerpt;
} else {$description = substr(strip_tags($post->post_content),0,220);}
$keywords = ""; $tags = wp_get_post_tags($post->ID);foreach ($tags as $tag ) {$keywords = $keywords . $tag->name . ", ";}}?>
        <meta name="keywords" content="<?=$keywords?>" />
        <meta name="description" content="<?=$description?>" />

	<?php /*comments_popup_script(520, 550);*/ ?>	<?php wp_head(); ?>
</head>

<body><div id="container">

<!-- header ................................. -->
<div id="header">
<TABLE width="765" height="140" align="center">
<TR>
	<TD width="295" align="left" valign="middle">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<span><?php bloginfo('description'); ?></span>
	</TD>
	<TD width="470" align="left" valign="middle">
		<div>
		
		</div>
	</TD>
</TR>
</TABLE>
</div> <!-- /header -->

<!-- navigation ................................. -->
<div id="navigation">

	<form action="http://www.google.com/cse" id="cse-search-box">
		<fieldset>

    <input type="hidden" name="cx" value="013355442878908498781:l6vkca_xoty" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" id="s" />
			<input type="submit" value="Go!" id="searchbutton" name="searchbutton" />
		</fieldset>
	</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>

	<ul>
		<li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
	<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order');?>
		<li><a href="http://shop36814006.taobao.com" title="淘宝网店" target="_blank">商店</a></li>
	</ul>

</div><!-- /navigation -->
<hr class="low" />