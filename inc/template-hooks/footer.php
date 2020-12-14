<?php
/**
 * Footer
 */

 add_action('welearner_footer','welearner_footer_func');

 function welearner_footer_func() { ?>
    <footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-lg-4">
						<div class="welearner-footer-widget about-company">
							<h2 class="widget-title">Welearner</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed justo nulla,</p>
							<div class="social-icons">
								<ul class="list-unstyled d-flex">
									<li><a href="#"><i class="dashicons dashicons-facebook-alt"></i></a></li>
									<li><a href="#"><i class="dashicons dashicons-twitter"></i></a></li>
									<li><a href="#"><i class="dashicons dashicons-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
	
					</div>
					<div class="col-lg-2">
	
					</div>
					<div class="col-lg-2">
	
					</div>
					<div class="col-lg-2">
	
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
 <?php }