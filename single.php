<?php get_header(); ?>
	
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <h1 class="green-bar-centered"><?php the_title();?></h1>
		    <div class="row">
		    <main id="main" class="large-8 medium-8 columns" role="main">
			<?php the_post_thumbnail('full');?>
			<div style="margin-top:2rem"></div>
			<?php the_content(); ?>

			</main> <!-- end #main -->
			<?php endwhile; endif; ?>
				<?php get_sidebar();?>
			</div>
		</div> <!-- end #inner-content -->

		</section><!--end page header-->

<?php get_footer(); ?>