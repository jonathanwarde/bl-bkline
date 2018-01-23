<?php
	if( have_rows('client_logos') ):?>

<section class="row">
	<ul class="large-12 columns slick-logos">
<?php while ( have_rows('client_logos') ) : the_row();?>
<?php $image = wp_get_attachment_image_src(get_sub_field('client_logo'), '280x230'); ?>
<li><img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('client_logo')) ?>" /></li>
<?php endwhile; ?>
	</ul>
</section>
<?php endif;?>