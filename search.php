<?php get_header(); ?>
<h1 class="green-bar-centered">Search Results</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
	<main id="main" class="large-8 medium-8 columns" role="main">
		<h2><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h2>
		<?php get_template_part( 'parts/loop', 'archive' ); ?>
	</main> <!-- end #main -->
	<?php get_sidebar();?>
</div>
<?php endwhile;else:?>
<div class="row">
	<main id="main" class="large-8 medium-8 columns" role="main">
		<h2><?php _e( 'No Results found for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h2>
		<p>Please try seraching again, or email us at <a href="mailto:traffic@backlinelogistics.co.uk">traffic@backlinelogistics.co.uk</a></p>
		<?php get_search_form(); ?>
	</main> <!-- end #main -->
	<?php get_sidebar();?>
</div>
<?php endif; ?>
<?php get_footer(); ?>