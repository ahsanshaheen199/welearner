<?php
/**
 * Footer
 */

 add_action('welearner_footer','welearner_footer_func');

 function welearner_footer_func() { ?>
    <footer data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/footer-bg.png')); ?>" id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<div class="row">
					<?php if( is_active_sidebar('footer-sidebar-1') ): ?>
					<div class="col-lg-4 col-sm-6">
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
					<?php endif; ?>

					<?php if( is_active_sidebar('footer-sidebar-2') ): ?>
						<div class="col-lg-2 col-sm-6">
							<?php dynamic_sidebar('footer-sidebar-2') ?>
						</div>
					<?php endif; ?>

					<?php if( is_active_sidebar('footer-sidebar-3') ): ?>
						<div class="col-lg-2 col-sm-6">
							<?php dynamic_sidebar('footer-sidebar-3') ?>
						</div>
					<?php endif; ?>

					<?php if( is_active_sidebar('footer-sidebar-4') ): ?>
						<div class="col-lg-2 col-sm-6">
							<?php dynamic_sidebar('footer-sidebar-4') ?>
						</div>
					<?php endif; ?>

					<?php if( is_active_sidebar('footer-sidebar-5') ): ?>
						<div class="col-lg-2 col-sm-6">
							<?php dynamic_sidebar('footer-sidebar-5') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
 <?php }