<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }
?>
<?php get_header(); ?>
	
		<div id="inner-content">
	
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <h1 class="green-bar-centered"><?php the_title();?></h1>
		    <div class="row">
		    <main id="main" class="large-8 medium-12 columns" role="main">

			    	<?php the_content(); ?>

			</main> <!-- end #main -->
			<?php
				// not working - need to look at this
				if(is_page('news')):
				get_sidebar('sidebar2');
				elseif(is_page('jobs')):
				get_sidebar('sidebar1');
				else:
				get_sidebar();
				endif;?>
			</div>
			<?php endwhile; endif; ?>
		</div> <!-- end #inner-content -->

		</section><!--end page header-->

<?php get_footer(); ?>