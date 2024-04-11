<?php

/**
 * Template Name: Contact Page Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<div class="wrapper py-0" id="page-wrapper">

	<div class="" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/page-header'); ?>

				<div class="container mt-md-5 my-3">

					<div class="bg-light p-4">

						<div class="row">

							<div class="col-md-7 pb-md-0 pb-3">

								<iframe src="about:blank" class="iframe_lazy h-100" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.7148386577614!2d-122.33955868436936!3d47.61223427918497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab4b2e96a01%3A0x37dadcdea2798869!2s1601+5th+Ave+%23610%2C+Seattle%2C+WA+98101!5e0!3m2!1sen!2sus!4v1557460129430!5m2!1sen!2sus" width="663" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>

							</div>

							<div class="col">

								<div class="attorney-contact bg-dark-gray p-4 h-100 text-white">

									<?php the_content(); ?>
								</div>

							</div>

						</div>

					</div>

				</div>

			<?php endwhile; // end of the loop. 
			?>

		</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>