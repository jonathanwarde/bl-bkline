<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }
?>
<?php
/*
Template Name: Services
*/
?>

<?php get_header();

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

	<?php get_template_part( 'parts/loop', 'services' ); ?>
	
<?php endwhile; endif; ?>
<?php get_template_part('parts/content', 'clients');?>
<?php get_footer(); ?>
