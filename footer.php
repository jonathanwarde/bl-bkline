				<footer class="footer" role="contentinfo">
					<div id="inner-footer">
						<div class="row">
							<div class="medium-6 columns">
								<div class="row">
									<div class="small-6 columns">
										<?php the_field('location_1', 'option');?>
									</div>
									<div class="members-of small-6 columns">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/fta.jpg" style="width:4rem;margin-bottom: 1rem;">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/rha.jpg" style="width:4rem;margin-bottom: 1rem;">
									</div>
								</div>
							</div>
							<div class="medium-6 columns">
								<div class="row">
								<?php
								$the_query = new WP_Query( array(
							    'post_type' => 'post',
							    'posts_per_page' => '1',
							    'orderby' => array(
						        'date'          => 'DESC'
						    	),
								) );
								while ( $the_query->have_posts() ) :
								    $the_query->the_post();?>
									<div class="small-6 columns">
										<article class="bl-post-block">
											<h4>Latest News</h4>
											<?php the_post_thumbnail('400x400');?>
											<h2><?php the_title();?></h2>
											<a href="<?php the_permalink();?>" class="cover-link"></a>
										</article>
									<?php
									endwhile;?>
									</div>
									<div class="small-6 columns">
										<article class="bl-post-block">
											<h4>Outbase</h4>
											<img src="<?php echo get_template_directory_uri();?>/assets/images/outbase.jpg" alt="Find out more about our Outward delivery base">
											<p>Learn more</p>
											<a href="/onward-delivery-base" class="cover-link"></a>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div class="footer-bottom">
							<div class="row">
								<div class="large-12 medium-12 columns">
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
			    				</div>
								<!--<div class="large-12 medium-12 columns">
									<p class="source-org copyright">&copy; <?php //echo date('Y'); ?> <?php //bloginfo('name'); ?>.</p>
								</div>-->
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
				<?php if(!is_page('registration-form')):?>
				<div id="sticky-cta">
					<a href="#" class="closecta" onClick="sessionStorage.setItem('driverCTAclosed', 'CTAclosed')">x</a>
					<a href="/drivers/registration-form/" class="ctalink"></a>
				</div>
				<?php endif;?>
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<?php if(!is_page('branches')):?>
		<script type="text/javascript">
		   function sticky_relocate() {
			    var window_top = jQuery(window).scrollTop();
			    var div_top = jQuery('.sticky-anchor').offset().top;
			    var bigbuttonsHeight = jQuery('.big-buttons').height();
			    if (window_top > div_top){
			        jQuery('.stickydiv').addClass('sticky');
			        jQuery('.main-content').css('margin-top', bigbuttonsHeight);
			    }
			    else{
			        jQuery('.stickydiv').removeClass('sticky');
			        jQuery('.main-content').css('margin-top', '');
			    }
			}

			jQuery(function() {
			    jQuery(window).scroll(sticky_relocate);
			    sticky_relocate();
			});
		</script>
		<?php endif;?>
		<!--Start of Zendesk Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="https://v2.zopim.com/?5Qq5R6zvg61mpsyGLO1SqqheL3Qy6D6d";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zendesk Chat Script-->
		<?php get_template_part('parts/content', 'cookies');?>
	</body>
</html> <!-- end page -->