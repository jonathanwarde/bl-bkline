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
		<div class="medium-12 columns">
			<?php the_content(); ?>
		</div>
	</div>
<?php

// check if the repeater field has rows of data
if( have_rows('team') ):?>

<section class="team">
	<h2 style="background:#52BD48">The Backline Team</h2>
	<div class="row medium-width-row">

 	<?php
 	// loop through the rows of data
    while ( have_rows('team') ) :the_row();
    $attachment_id = get_sub_field('team_img');
	$size = "400x400";
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	//$url = $image[0];
	//width = $image[1];
	// height = $image[2];
	
	?>

        <div class="team-member-outer small-6 medium-6 large-4 columns">
        <div class="team-member">
		<img src="<?php echo $image[0];?>" alt="">
        <h3 class="team-role"><?php the_sub_field('team_name');?></h3>
        <p><?php the_sub_field('team_role');?></p>
        <p class="social-link"><a href="<?php the_sub_field('team_email');?>"><span class="email"></span><?php the_sub_field('team_email');?></a></p>
    	</div>
    	</div>

    <?php

    endwhile;?>

    </div>
</section>

<?php
else :

    // no rows found

endif;

?>

<section class="locations">
<h2>Our Office Locations</h2>
<div class="row">
	<div class="medium-6 columns">
		<div id="backline-map"></div>
		<h4>Exeter Office</h4>
	</div>
	<div class="medium-6 columns">
		<div id="backline-map2"></div>
		<h4>Leighton Buzzard</h4>
	</div>
</div>
</section>

</section>