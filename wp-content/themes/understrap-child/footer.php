<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper footer-cta-wrapper bg-gray py-5 border-top border-black-50">

	<div class="container text-center">

		<h3 class=" my-4">
			<a href="<?php the_field( 'footer_call_to_action_link','option'); ?>" title="Contact Us" class="text-primary">
				<?php the_field('footer_call_to_action','option'); ?>
			</a>
		</h3>
	
	</div><!-- container end -->

</div><!-- wrapper end -->
<div class="pt-md-5 pt-1 bg-navy-blue">

	<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

</div>
<div class="wrapper bg-navy-blue" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row justify-content-between">

			<div class="col-md-auto">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-white text-smaller-smaller">

						<p><?php the_field('copyright_text','option'); ?></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->
			<div class="col-md-auto">

				<footer class="site-footer" id="colophon">

					<div class="site-info-right text-white text-right text-smaller-smaller">

						<p style="text-align: right;">

							<a href="/disclaimer">Disclaimer</a>&nbsp;&nbsp;•&nbsp;&nbsp;
							<a href="/contact">Contact Us</a>&nbsp;&nbsp;•&nbsp;&nbsp;
							<a href="/privacy-policy/">Privacy</a>&nbsp;&nbsp;•&nbsp;&nbsp; 
							Site By: <a href="https://chasechristensen.com/" target="_blank" rel="noopener">Cee Web</a>
						
						</p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

