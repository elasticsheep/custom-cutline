<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		
	<div id="content_box">

		<div id="content" class="pages archives">
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Browse the Archives...</h2>
				<div class="entry">
					<ul>
						<?php custom_get_archives(); ?>
					</ul>
				</div>
				<div class="clear rule"></div>
			</div>
		
		</div>	
		
		<?php get_sidebar("archives"); /* Use the sidebar-archives template */ ?>
			
	</div>
		
<?php get_footer(); ?>