<?php get_header(); ?>

	<div id="content_box">
	
		<div id="content" class="pages">
			<h2>Easy, tiger. This is a 404 page.</h2>
			<div class="entry">
				<p>You are <em>totally</em> in the wrong place. Do not pass GO; do not collect $200. This is an error page. You might have stumbled here by accident or the post you are looking for is no longer here.</p>
				<p>Please, try one of the following:</p>
				<ul>
					<li>Hit the "back" button on your browser.</li>
					<li>Head on over to the <a href="<?php bloginfo('url'); ?>">front page</a>.</li>
					<li>Try searching using the form in the sidebar.</li>
					<li>Click on a link in the sidebar.</li>
					<li>Use the navigation menu at the top of the page.</li>
				</ul>
			</div>
		</div>

		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>