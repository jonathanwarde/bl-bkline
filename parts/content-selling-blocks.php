<?php
if( have_rows('benefit') ):
if(is_page('drivers')){?>
<section class="selling-blocks row">
<?php }else{?>
<section class="selling-blocks medium-width-row">
<?php }?>
<?php  while ( have_rows('benefit') ) : the_row();
if(is_page('drivers')){?>
	<article class="benefit medium-6 large-3 columns">
<?php }else{?>
	<article class="benefit medium-6 large-4 columns">
<?php }?>
		<div class="selling-block">
			<h3><?php the_sub_field('benefit_title');?></h3>
			<div class="sb-panel">
			<?php the_sub_field('benefit_text');?>
			</div>
		</div>
	</article>
<?php endwhile; ?>
</section>
<?php endif;?>