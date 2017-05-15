<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
*	Template Name: Full Width Page
*/

get_header(); ?>

<div id="page-wrap" class="container-fluid">
	<div class="row-fluid">
		<div class="span8 offset2">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
				<?php the_content() ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>