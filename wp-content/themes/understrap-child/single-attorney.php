<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'attorney' ); ?>

					
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<div class="wrapper bg-light py-5 border-top border-black-50">

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8 offset-md-2">

				<div class="text-center">

					<h2 class="text-secondary font-small-bold">OUR ATTORNEYS</h2>

					<h2 class="mb-3"><strong>More of Our Team</strong></h2>

				</div>

				<div class="row py-5">

						<?php get_template_part( 'template-parts/attorneys-single' ); ?>

				</div>

			</div>

		</div>

		<div class="pb-5 row text-center">
			
			<div class="col">
			
				<a href="/attorneys" class="btn btn-outline-primary"><i class="fa fa-angle-double-left"></i> FULL LIST</a>
			
			</div>
		
		</div>

	</div>
</div><!-- end wrapper -->

<?php get_footer(); ?>
