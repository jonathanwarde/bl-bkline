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

<?php get_template_part('parts/content', 'selling-blocks');?>

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
			<h5>Job Board</h5>
			<a href="" class="pale-green">Find Your Job &rsaquo;</a>
			<a href="" class="cover-link"></a>
		</div>
		<div class="big-button-3 small-6 columns">
			<h5>Training</h5>
			<a href="">Start Learning &rsaquo;</a>
			<a href="" class="cover-link"></a>
		</div>
	</div>
</div>