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
							<?php dynamic_sidebar('footer-sidebar-1') ?>	
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