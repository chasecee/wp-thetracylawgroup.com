<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-site-verification" content="MBgl9E2XFGoXn2r_wK8-G6Z99spPquTerAh0bCBfWFk" />
	<meta name="ahrefs-site-verification" content="acabcf2dd4ed6a214124311d7d7ce777e15d614c01d5b20503431964b182c6b7">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="canonical" href="https://thetracylawgroup.com" />
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5JV91YXNTW"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-5JV91YXNTW');
	</script>
	<script defer data-domain="thetracylawgroup.com" src="https://crcserver.com/js/script.js"></script>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#list-example" data-offset="200">

	<div class="site" id="page">
		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<nav class="navbar navbar-expand-md font-family-third">

				<?php if ('container' == $container) : ?>
					<div class="container ">
					<?php endif; ?>
					<div class="d-flex justify-content-between w-100">
						<!-- Your site title as branding in the menu -->
						<?php if (function_exists('get_field')) {
							$logo = get_field('logo', 'option');
						} ?>
						<?php if ($logo) { ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">

								<?php get_template_part('template-parts/logo');  ?>
							</a>
						<?php } else { ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a>
						<?php } ?><!-- end custom logo -->

						<button class="navbar-toggler text-primary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
							<i class="fa fa-bars"></i>
						</button>

					</div>
					<div class="d-flex w-100">

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>

					</div>
					<?php if ('container' == $container) : ?>
					</div><!-- .container -->
				<?php endif; ?>
			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->