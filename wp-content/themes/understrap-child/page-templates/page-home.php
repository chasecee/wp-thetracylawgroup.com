<?php

/**
 * Template Name: Home Page Template
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


				<div class="wrapper p-0 slider-wrapper" style=" background: #6d7f94; "><?php echo get_new_royalslider(1); ?> </div>


				<div class="container">
					<div class="row pt-5 pb-4">
						<?php if (have_rows('practice_areas')) : while (have_rows('practice_areas')) : the_row();  ?>
								<div class="col-sm-4 pt-4">
									<div class="icon-large text-secondary mb-3 bigicon"> <?php the_sub_field('icon'); ?></div>
									<h5><?php echo  get_sub_field('title'); ?></h5>

									<p class="text-black-50 "><?php the_sub_field('description'); ?></p>
									<a class="btn btn-sm btn-outline-secondary" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>">
										Read More
									</a>
									<!-- <div class="d-sm-none pb-4"></div> -->
								</div>
						<?php endwhile;
						endif; ?>
					</div><!-- end row -->
					<hr />
					<div class="row py-5">
						<div class="col-md-6">
							<?php $about_us_image = get_field('about_us_image');
							$about_us_imagesize = 'medium';
							if ($about_us_image) {
								echo wp_get_attachment_image($about_us_image, $about_us_imagesize);
							} ?>
						</div>
						<div class="col d-md-none py-4"></div>
						<div class="col-md-6">
							<!-- 							<h2 class="text-secondary font-small-bold">ABOUT US</h2> -->
							<h3 class="mb-3"><?php the_field('about_us_title'); ?></h3>
							<p class="text-black-50 mb-3"><?php the_field('about_us_description'); ?></p>
							<a href="/contact" title="Contact Us" class="btn btn-secondary">Contact Us</a>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
				<div class="wrapper bg-light py-5 border-top border-black-50">
					<div class="container">
						<div class="text-center">
							<h2 class="text-secondary font-small-bold">THE TEAM</h2>
							<h2 class="mb-3"><strong>Meet Our Attorneys</strong></h2>
						</div>

						<div class="row py-5">
							<div class="col-md-10 offset-md-1">
								<div class="row">
									<?php get_template_part('template-parts/attorneys-home'); ?>
								</div>
							</div>
						</div>

					</div>
					<div class="pb-5 row text-center">
						<div class="col">
							<a href="/attorneys" class="btn btn-outline-primary d-none d-md-inline-block">Read More</a>
						</div>
					</div>
				</div>
	</div><!-- end wrapper -->

	<?php $testimonials_background_image = get_field('testimonials_background_image'); ?>

	<div class="wrapper testimonial-wrapper py-0" style="background-image:url(<?php echo $testimonials_background_image['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 p-0">
					<div class="overlay-outer py-5">
						<div class="my-auto p-rel z-2">
							<div class="row m-0">
								<div class="col-sm-6 offset-sm-3 text-white py-5">
									<div class="py-5">
										<?php the_field('testimonial_section_text'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end testimonial-wrapper -->

	<!-- <div class="wrapper py-5" >
					<div class="container">
						<div class="text-center">
							<h2 class="text-secondary font-small-bold ">WHAT'S NEW</h2>
							<h3 class="mb-3"><strong>Our Latest News, Events &amp Updates</strong></h3>
						</div>
						<div class="py-5">
							<p class="lead text-center text-secondary m-0"><i class="fa fa-instagram"></i></p>
							<p class="lead text-center">Follow <a href="instagram.com" class="font-bold" title="Tracy Law Group on Instagram">@tracylawgroup</a> on Instagram</p>
							<iframe class="iframe_lazy" src="about:blank" data-src="//lightwidget.com/widgets/2dc1950f76e35375878e6b13eb1b4b88.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0px; overflow: hidden; height: 183px;"></iframe>
						</div>

					</div>
				</div>end news-wrapper -->
<?php endwhile; // end of the loop. 
?>

</main><!-- #main -->

<!-- Do the right sidebar check -->
<?php get_template_part('global-templates/right-sidebar-check'); ?>


</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>