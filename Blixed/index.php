<?php get_header(); ?><!-- content ................................. --><div id="content"><?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	<?php $custom_fields = get_post_custom(); //custom fields ?>	<?php if (isset($custom_fields["BX_post_type"]) && $custom_fields["BX_post_type"][0] == "mini") { ?>	<hr class="low" />	<div class="minientry">		<p>		<?php echo BX_remove_p($post->post_content); ?>		<?php comments_popup_link('(0)', '(1)', '(%)', 'commentlink', ''); ?>		<a href="<?php the_permalink(); ?>" class="permalink" title="Permalink"><?php the_time('M j, \'y') ?><!--, <?php the_time('h:ia')  ?>--></a>		<!--<em class="author"><?php the_author() ?></em>-->   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>   		</p>	</div>	<hr class="low" />	<?php } else { ?>	<div class="entry">		<h2><a href="<?php the_permalink() ?>" title="Permalink"><?php the_title(); ?></a></h2>		<?php ($post->post_excerpt != "")? the_excerpt() : the_content(); ?>		<p class="info"><?php if ($post->post_excerpt != "") { ?><a href="<?php the_permalink() ?>" class="more">Continue Reading</a><?php } ?>   		<?php comments_popup_link('抢沙发', '1 条评论', '% 条评论', 'commentlink', ''); ?>   		<em class="date"><?php the_time('Y.m.d') ?><!-- at <?php the_time('h:ia')  ?>--></em>   		<em class="author"><?php the_author(); ?></em>   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>   		</p>	</div><!--<?php trackback_rdf(); ?>-->	<?php } ?><?php endwhile; ?>	<p><!-- this is ugly --><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  	</p><?php else : ?>	<h2>Not Found</h2>	<p>Sorry, but you are looking for something that isn't here.</p><?php endif; ?></div> <!-- /content --><?php get_sidebar(); ?><?php get_footer(); ?>