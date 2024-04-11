<?php
/**
 * Template Name: Attorneys Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper py-0" id="page-wrapper">

	<div class="" id="content" tabindex="-1">



			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/page-header' ); ?>
				

				<div class="wrapper py-md-5 pt-5 pb-0 bg-light border-bottom border-black-50">
					<div class="container">
						<div class="row py-md-5">
							<?php get_template_part( 'template-parts/attorneys-home' ); ?>
						</div>
					</div>
				</div><!-- end wrapper -->

				<div class="wrapper py-5 bg-gradient-radial">
					<div class="container">
						<div class="row py-md-5">
							<div class="col-md-6">
								<?php $top_section_image = get_field( 'top_section_image' ); ?>
								<?php if ( $top_section_image ) { ?>
									<img src="<?php echo $top_section_image['url']; ?>" alt="<?php echo $top_section_image['alt']; ?>" />
								<?php } ?>
							</div>
							<div class="col-md-6">
								<h2 class="text-secondary font-small-bold mt-md-0 mt-3">FOCUSING ON</h2>
								<h3 class="mb-3"><?php the_field('top_section_text'); ?></h3>
								<div class="text-black-50 text-smaller mb-3">	<?php the_content(); ?></div>
								<a href="/contact" class="btn btn-secondary">Contact Us</a>
							</div>
						</div><!-- end row -->
					</div>
				</div><!-- end wrapper -->

				<?php $bottom_content_image = get_field( 'bottom_content_image' ); ?>
				
				<div class="wrapper testimonial-wrapper py-0 section-colors-inverse" style="background-image:url(<?php echo $bottom_content_image['url']; ?>);">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 p-0">
								<div class="overlay-outer">
									<div class="my-auto p-rel z-2">
										<div class="row m-0 pt-md-5">
											<div class="col-md-8 offset-md-2 text-white py-5 text-smaller">
												
												<?php the_field( 'bottom_content' ); ?>
											</div>
										</div>
									</div>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end testimonial-wrapper -->
				
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
