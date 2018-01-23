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


<section class="main-content">
	<div class="row">
		<div class="medium-9 large-8 small-centered columns">
			<?php the_content();?>
		</div>
	</div><!--end row-->
</section>

<?php get_template_part('parts/content', 'apply-buttons');?>

<div class="hard-gradient-bg">
	<div class="row">
		<div class="big-button-3 small-6 columns">
			<h5>Branches</h5>
			<a href="/branches" class="pale-green">Find Your Nearest Branches &rsaquo;</a>
			<a href="" class="cover-link"></a>
		</div>
		<div class="big-button-3 small-6 columns">
			<h5>Get in Touch</h5>
			<a href="/contact-us">Contact Us &rsaquo;</a>
			<a href="" class="cover-link"></a>
		</div>
	</div>
</div>


<?php

if( have_rows('testimonials') ):?>
<section class="testimonials">
	<div class="row">
		<div class="medium-12 columns">
			<h2>Testimonials</h2>
			<ul class="slick-testimonials">
		 	<?php
		    while ( have_rows('testimonials') ) : the_row();?>
		    	<li>
				<img src="<?php the_sub_field('testimonial_image');?>" alt="">
		        <blockquote>
		        <?php the_sub_field('testimonial');?>
		 		<cite><?php the_sub_field('cite');?></cite>
		        </blockquote>
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

?>