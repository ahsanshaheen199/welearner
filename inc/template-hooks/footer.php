<?php
/**
 * Footer
 */

 add_action('welearner_footer','welearner_footer_func');

 function welearner_footer_func() {
    $welearner_footer_section_bg_img = get_theme_mod('footer_section_bg_img','');

    if( ! empty($welearner_footer_section_bg_img) ) {
        $welearner_footer_section_bg_img_url = $welearner_footer_section_bg_img;
    } else {
		$welearner_footer_section_bg_img_url = get_theme_file_uri('assets/images/footer-bg.png');
	} 	
	?>
    <footer data-bg-image="<?php echo esc_url($welearner_footer_section_bg_img_url); ?>" id="colophon" class="site-footer">
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