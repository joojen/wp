<!--begin most view-->

  		<?php if (function_exists('get_timespan_most_viewed')) { ?>

				<li><h2>本月排行</h2>

					<ul>

						<?php get_timespan_most_viewed('post', 15, 60, true, true, 0) ?>

					</ul>

				</li> 

            <?php } ?> 

			<?php if ((is_home()) & function_exists('get_most_viewed')) { ?>

				<li><h2>热文排行</h2>

						<ul>

							<?php get_most_viewed("post", 20); ?>

						</ul>

				</li> 

			<?php } ?> 

<!--end most view-->
