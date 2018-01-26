<?php
if( have_rows('driver_type') ):?>
<section class="main-content apply-buttons">
	<h2>Tell Us What You Can drive</h2>
	<div class="row medium-width-row">
 <?php  while ( have_rows('driver_type') ) : the_row();?>
    <div class="medium-4 columns">
		<div class="big-white-button">
			<h3><?php the_sub_field('driver_type_title');?></h3>
			<?php if(get_sub_field('driver_type_link')):?>
			<a href="<?php the_sub_field('driver_type_link');?>">Register and apply &rsaquo;</a>
			<a href="<?php the_sub_field('driver_type_link');?>" class="cover-link"></a>
			<?php else:?>
			<a href="#" style="min-height: 26px;"></a>
			<?php endif;?>
		</div>
	</div>
<?php endwhile; ?>
	</div>
</section>
<?php endif;?>