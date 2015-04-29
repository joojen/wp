<?php get_header(); ?>
<div id="entry"><!--begin entry & Author Page-->
<div id="entry-content">

<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>

<h2 class="pagetitle"><?php echo $curauth->nickname; ?> @ <?php bloginfo('name') ?>
</h2>

<div class="author_info">
<?php if (function_exists('get_avatar')) : ?>
<?php echo get_avatar($curauth->user_email, '96', $avatar); ?>
<?php else : ?>
<?php 
if ( !empty( $curauth->user_email ) ) {
        $md5 = md5( $curauth->user_email );
        $default = urlencode( 'images/gravatar.png');
        echo "<img src='http://www.gravatar.com/avatar.php?gravatar_id=$md5&amp;size=30&amp;default=$default' alt='<?php _e('Gravatar Icon','apple4us'); ?>' width='40' />";
}
?>
<?php endif; ?>

<span class="author_info_description">
<dd><?php echo $curauth->user_description; ?></dd><br/>
<dd><?php _e('Personal Site:','apple4us'); ?><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
<dd><?php _e('Contact E-Mail:','apple4us'); ?><?php echo $curauth->user_email; ?></dd>
</span>
</div><br/>
<div class="author_post_count"><?php _e('So far,','apple4us'); ?><strong><a href="<?php echo $curauth->user_url; ?>" target="_blank" title="<?php echo $curauth->nickname; ?>"><?php echo $curauth->nickname; ?></a></strong> <?php _e('has blogged','apple4us'); ?> <strong><?php the_author_posts(); ?></strong> <?php _e('posts','apple4us'); ?> <?php _e('on','apple4us'); ?> <a href="<?php echo get_option('home'); ?>/"> <?php bloginfo('name') ?></a>:</div>

<?php if (have_posts()) : ?>

<?php query_posts('showposts=50&author='.$author); while (have_posts()) : the_post(); ?>

<!--the number 30 on this line is the posts amount display per page.-->
		<!--begin each post-->
<div class="single-author-posts">
<ul id="post-<?php the_ID(); ?>">
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a>
</li>
</ul>
</div><!--end post-->
<!-- <?php trackback_rdf(); ?> -->

<?php endwhile; else: ?>


<p class="author_noposts"><?php _e('No posts by this author.','apple4us'); ?></p>

	<?php endif; ?>
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


</div>
</div><!--end entry-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
