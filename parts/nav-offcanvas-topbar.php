<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<a href="<?php echo home_url(); ?>" class="main-logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/header-logo.jpg">
		</a>
	</div>
	<div class="header-contact">
		<a href="mailto:traffic@backlinelogistics.co.uk" class="header-email">traffic@backlinelogistics.co.uk</a>
		<a href="tel:01525382299" class="header-number"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="30px" height="30px" viewBox="0 0 485.213 485.212" style="enable-background:new 0 0 485.213 485.212;"
	 xml:space="preserve"><g><path fill="#fff" d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606
		c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429
		c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657
		c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363
		c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972
		c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806
		c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z"/></g></svg><span class="tel-number">0152 5382299</span></a>
	</div>
	<div class="top-bar-right show-for-large">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right float-right hide-for-large">
		<ul class="menu menu-toggle">
			<li>
				<a data-toggle="off-canvas" id="hamburger">
			  	<span></span>
			  	<span></span>
			  	<span></span>
				</a>
			</li>
		</ul>
	</div>
</div>