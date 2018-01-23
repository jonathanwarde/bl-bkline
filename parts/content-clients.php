<?php

// check if the repeater field has rows of data
if( have_rows('clients') ):?>

	<section class="clients">
	<h2 class="strong-title">
		working in partnership <br>with britains best
	</h2>
	<div class="row medium-width-row">

 	<?php
 	// loop through the rows of data
    while ( have_rows('clients') ) :the_row();
    $attachment_id = get_sub_field('clients_logo');
	$size = "clients";
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	//$url = $image[0];
	//width = $image[1];
	// height = $image[2];
	
	?>


        <a href="<?php the_sub_field('clients_url');?>" class="client">
		<img src="<?php echo $image[0];?>" alt="">
    	</a>


    <?php

    endwhile;?>

    </div>
	</section>

<?php
else :

    // no rows found

endif;

?>


</section>
