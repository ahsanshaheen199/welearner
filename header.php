<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Welearner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'welearner' ); ?></a>
	<?php
		if( is_page_template('template-home.php') ) {
			$welearner_header_class = ' position-absolute';
		} else {
			$welearner_header_class = '';
		}
	?>
	<header id="masthead" class="site-header w-100<?php echo esc_attr($welearner_header_class); ?>">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-3 col-4">
					<div class="logo">
						<?php 
							if( has_custom_logo() ) {
								the_custom_logo();
							} else {
								echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'.esc_html(get_bloginfo( 'name' )).'</a></h1>';
							}
						?>
					</div>
				</div>
				<div class="col-lg-9 col-sm-9 col-8 d-flex align-items-center justify-content-end">
					<div class="main-menu text-right">
						<?php 
							if( has_nav_menu('primary') ) {
								wp_nav_menu([
									'theme_location'	=> 'primary',
									'container'			=> ''
								]);
							}
						?>
					</div>
					<a href="#" class="header-btn">Get Stared</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
