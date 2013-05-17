<?php
/**
 * Template Name: Hot
*/

global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
            
            <?php $theme->hook('content_before'); ?>
        
            <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * Find the post formatting for the pages in the post-page.php file
                     */
                    get_template_part('post', 'page');
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
            ?>
            
            <div class="sitemap">
            
                <div>                   <h2>热门评论</h2>                                        <ul class="sitemap-list">                       <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title,post_date FROM $wpdb->posts where post_type <> 'page' ORDER BY comment_count DESC LIMIT 0 , 20");                 foreach ($result as $topten) {                 $postid = $topten->ID;                 $title = $topten->post_title;                $post_date = $topten->post_date;                $commentcount = $topten->comment_count;                 if ($commentcount != 0) { ?>                   <li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>                 <?php } } ?>                    </ul>								
                    <h2>本月排行</h2>
                    
                    <ul class="sitemap-list">
                        <?php get_timespan_most_viewed('post', 15, 30, true, true, 0) ?>
                    </ul>
                    <h2>年度排行</h2>                                        <ul class="sitemap-list">                        <?php get_timespan_most_viewed('post', 20, 365, true, true, 0) ?>                    </ul>										<h2>总排行</h2>                                        <ul class="sitemap-list">                        <?php get_most_viewed("post", 30); ?>                    </ul>
                </div>
            </div>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>