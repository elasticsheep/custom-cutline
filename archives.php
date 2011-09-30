<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		
	<div id="content_box">

		<div id="content" class="pages">
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Browse the Archives...</h2>
				<div class="entry">
					<h3 class="top">by month:</h3>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h3>by Category:</h3>
					<ul>
						<?php wp_list_categories('title_li=0'); ?>
					</ul>
				</div>
				<div class="clear rule"></div>
			</div>
		
		</div>	
		
		<?php get_sidebar(); ?>
			
	</div>
		
<?php get_footer(); ?>