<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
<div id="sidebar2" class="sidebar large-4 medium-4 columns" role="complementary">
		<?php dynamic_sidebar( 'sidebar2' ); ?>
</div>
<?php else : ?>
<div id="sidebar2" class="sidebar large-4 medium-4 columns" role="complementary">
	<?php searchform();?>
</div>
<?php endif; ?>