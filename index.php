<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }
?>
<?php get_header(); ?>
	
		<div id="inner-content">
			<h1 class="green-bar-centered">Backline News</h1>
			<div class="row">
		    <main id="main" class="large-8 medium-12 columns" role="main">
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    

			    	<?php get_template_part('parts/loop', 'archive'); ?>

			
			<?php endwhile; endif; ?>
			</main> <!-- end #main -->
			<?php get_sidebar();?>
			</div>
			
		</div> <!-- end #inner-content -->

		</section><!--end page header-->

<?php get_footer(); ?>