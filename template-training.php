<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }

/*

Template Name: Training

*/

get_header(); 

	$feat_image_small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '960x540')[0];
			$feat_image_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '1280x720')[0];
			echo '<style>
			.header-right
			{
				background:url('. $feat_image_small .') bottom right no-repeat;
				background-size:cover;
	        }
	        @media only screen and (min-width:768px){
				.header-right
				{
					background:url('. $feat_image_large .') no-repeat;
					/*background-position:150% 100%;*/
					background-size:cover;
					background-position:100% 100%;
					/*animation: backgroundSlideIn 2s cubic-bezier(0.39, 0.575, 0.565, 1) forwards;*/
					
				}
				
	        }
	        </style>';

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="page-header">
	<div class="header-left">
		<div class="header-content">
			<h1><?php the_title();?></h1>
			<?php the_field('sub_heading');?>
		</div>
	<div class="slashed-shape"></div>
	</div><!--end header-left
 --><div class="header-right">

	</div><!--end header-right-->
</section>

<div id="inner-content">
    <div class="row">
	    <main id="main" class="large-8 medium-8 columns" role="main">
		    	<?php the_content(); ?>
		    	<?php get_template_part('parts/loop', 'training');?>
		</main> <!-- end #main -->
		<?php get_sidebar();?>
	</div>
<?php endwhile; endif; ?>

</div> <!-- end #inner-content -->
<?php get_footer(); ?>