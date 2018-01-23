<section class="page-header">
	<div class="header-left">
	<?php if(is_front_page()):?>
		<div class="header-content">
			<?php get_template_part('parts/content', 'svg-main-logo');?>
			<?php the_content(); ?>
		</div>
	<?php else:?>
		<h1><?php the_title();?></h1>
		<?php the_content(); ?>
	<?php endif;?>
	<div class="slashed-shape"></div>
	</div><!--end header-left
 --><div class="header-right">

	</div><!--end header-right-->
</section>
<?php if(is_front_page()):?>

<div class="sticky-anchor"></div>
<section class="big-buttons secondary-bg stickydiv">
<div class="row">
<div class="big-button driver-button small-6 columns">
	<div class="row">
	<?php if( have_rows('drivers_link') ): while ( have_rows('drivers_link') ) : the_row();?>
   		<h2 class="medium-12 columns"><?php the_sub_field('driver_link_title');?></h2>
		<p class="medium-12 columns small hide-for-small"><?php the_sub_field('driver_link_text');?></p>
		<span class="arrow"></span>
	<?php endwhile; endif;?>
	</div>
	<a href="http://backlinetransport.co.uk/drivers/"></a>
</div><!--end big-button-->
<div class="big-button client-button small-6 columns primary-bg">
	<div class="row">
	<?php if( have_rows('clients_link') ): while ( have_rows('clients_link') ) : the_row();?>
   		<h2 class="medium-12 columns"><?php the_sub_field('client_link_title');?></h2>
		<p class="medium-12 columns small hide-for-small"><?php the_sub_field('client_link_text');?></p>
		<span class="arrow"></span>
	<?php endwhile; endif;?>
	</div>
	<a href="/clients"></a>
	<div class="slashed-shape2"></div>
</div><!--end big-button-->
</div>
<a href="/drivers" class="overlay-link overlay-link-left"></a>
<a href="/clients" class="overlay-link overlay-link-right"></a>
</section>

<section class="main-content">
	<div class="row">
		<div class="big-button-2 medium-9 large-8 small-centered columns">
			<div class="row">
			<?php if( have_rows('training_link') ): while ( have_rows('training_link') ) : the_row();?>
		   		<h2 class="small-6 columns"><?php the_sub_field('training_link_title');?></h2>
				<p class="small-6 columns small"><?php the_sub_field('training_link_text');?></p>
			<?php endwhile; endif;?>
			</div>
			<a href="/clients"></a>
		</div>
	</div><!--end row-->
	<?php get_template_part('parts/content', 'slick-logos');?>
</section>

<?php else:?>
	<div class="row">
		<div class="medium-8 columns">
		<?php the_content(); ?>
		</div>
	</div>
<?php endif;?>
