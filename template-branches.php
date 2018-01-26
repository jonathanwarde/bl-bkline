<?php
if(!is_user_logged_in() && get_field('holding_page_redirect', 'option') == 1)
        {
            get_template_part('parts/content', 'holdingpage');
            die();
        }
/*
Template Name: Branches
*/
get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="inner-content">
<h1 class="green-bar-centered"><?php the_title();?></h1>
<?php the_content(); ?>
</div> <!-- end #inner-content -->
</section><!--end page header-->
<?php
if( have_rows('branches') ):?>
<section class="branches">
	<div class="row">
		<div class="medium-12 columns">
			<ul class="slick-branches">
		 	<?php
		    while ( have_rows('branches') ) : the_row();?>
		    <li>
		    	<div class="medium-6 columns">
		    			<?php the_sub_field('branch_address');?>
		    		</div><!--end branch half-->
		    	<?php if(have_rows('staff')):?>
					<div class="medium-6 columns">
		    	<?php while(have_rows('staff')):the_row();?>
						<article class="staff">
							<h6><?php the_sub_field('staff_name');?></h6>
							<div class="branch-deets"><?php the_sub_field('branch_details');?></div>
							<?php
							$image = get_sub_field('staff_pic');
							$size = 'staff';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</article>
		    	<?php endwhile;?>
              		</div><!--end branch half-->
		        <?php endif;?>
		    		
		    </li>
		    <?php
		    endwhile;?>
		    </ul>
		</div>
	</div>
</section>
<?php else :

    // no rows found

endif;
endwhile; endif; ?>
<?php get_footer(); ?>