<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }
?>
<?php
/*
Template Name: Branches
*/
?>

<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="inner-content">
	
		    <h1 class="green-bar-centered"><?php the_title();?></h1>
			    	<?php the_content(); ?>
		</div> <!-- end #inner-content -->

		</section><!--end page header-->

	
<?php endwhile; endif; ?>
<?php get_footer(); ?>