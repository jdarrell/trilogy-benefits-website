<?php get_header(); ?>

<div id ="page-wrap" class="container-fluid">
	<div class="row-fluid">
		<div class="span5 offset1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
				<?php the_content() ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
		<div class="span5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>