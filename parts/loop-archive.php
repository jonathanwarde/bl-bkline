<article class="news-post">
	<h2><?php the_title();?></h2>
	<p class="byline">
	<?php the_time('F Y') ?>  <?php the_category() ?>
	</p>
	<div class="row">
		<div class="medium-3 columns">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('280x230'); ?></a>
		</div>
		<div class="medium-9 columns">
			<?php the_excerpt() ?>
		</div>
	</div>
</article>