<div id="sidebar">
	<ul class="sidebar_list">
		<li class="widget">
			<div class="banner">
					<a href="<?php bloginfo('url'); ?>/shop">
						<img src="<?php bloginfo('template_url'); ?>/images/shop_sidebar.jpg" width="230px" height="126px"></img>
					</a>
			</div>
		</li>
		<li class="widget">
			<h2>Search It!</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</li>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
		<li class="widget">
			<h2>Recent Entries</h2>
			<ul>
				<?php query_posts('showposts=10'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a><span class="recent_date"><?php the_time('n.j') ?></span></li>
				<?php endwhile; endif; ?>
				<li><a href="<?php bloginfo('url'); ?>/archives" title="Visit the archives!">Visit the archives for more!</a></li>
			</ul>
		</li>
		<?php if (function_exists('get_flickrrss')) { ?>
		<li class="widget">
			<h2><span class="flickr_blue">Flick</span><span class="flickr_pink">r</span></h2>
			<ul class="flickr_stream">
				<?php get_flickrrss(); ?>
			</ul>
		</li>
		<?php } ?>
		<?php get_links_list('id'); ?>
		<?php endif; ?>
	</ul>
</div>