<?php
$the_query = new WP_Query( array(
	    'post_type' => 'events',
	    'posts_per_page' => '15'
	) );
	while ( $the_query->have_posts() ) :
	    $the_query->the_post();
?>
<article class="">
	<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
			<?php the_content() ?>
    <a href="<?php the_permalink() ?>" class="button">Reserve your place</a>
</article>
<?php endwhile;?>
<?php wp_reset_postdata();?>