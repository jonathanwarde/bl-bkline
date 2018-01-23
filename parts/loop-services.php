<section class="page-header">
	<div class="header-left">
	<?php if(is_front_page()):?>
		<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white-800px.jpg" alt="Backline Transport logo">
	<?php elseif(is_page('drivers')):?>
		<h1><?php the_title();?></h1>
	<?php else:?>
		<h1><?php the_title();?></h1>
	<?php endif;?>
	<div class="slashed-shape"></div>
	<div class="slashed-shape-mobile"></div>
	</div><!--end header-left
 --><div class="header-right">

	</div><!--end header-right-->
</section>

<section class="main-content">
	<div class="row medium-width-row">
		<div class="medium-12 columns strong-title">
			<?php the_content(); ?>
		</div>
	</div>
<?php

// check if the repeater field has rows of data
if( have_rows('service_boxes') ):?>

	<div class="row medium-width-row">

 	<?php
 	// loop through the rows of data
    while ( have_rows('service_boxes') ) :the_row();
    $attachment_id = get_sub_field('service_box_img');
	$size = "400x400";
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	//$url = $image[0];
	//width = $image[1];
	// height = $image[2];
	
	?>

        <div class="service-box-outer small-6 medium-6 large-4 columns">
        <div class="service-box">
		<img src="<?php echo $image[0];?>" alt="">
        <h2 class="service-title"><?php the_sub_field('service_box_title');?></h2>
    	</div>
    	</div>

    <?php

    endwhile;?>

    </div>

<?php
else :

    // no rows found

endif;

?>


</section>
