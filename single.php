<?php get_header(); ?>

	<div id="content_box">
		
		<div id="content" class="posts">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><?php the_title(); ?></h2>
				<h4><?php the_time('F jS, Y') ?><!-- by <?php the_author() ?> --> &middot; <a href="<?php the_permalink() ?>#comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a> &middot; <?php if (!is_attachment()) { the_category(', '); } ?> <?php edit_post_link('Edit', ' &middot;', ''); ?></h4>
				<div class="entry">
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				</div>
				<?php if (!is_attachment()) { ?><p class="tagged"><strong>Tags:</strong> <?php the_tags('','&middot;',''); ?></p><?php } ?>
				<div class="clear"></div>
			</div>
			
			<?php comments_template('', true); ?>
			
		<?php endwhile; else: ?>
		
			<h2 class="page_header">Uh oh.</h2>
			<div class="entry">
				<p>Sorry, no posts matched your criteria. Wanna search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		
		</div>
		
		<?php get_sidebar(); ?>
			
	</div>

<?php get_footer(); ?>