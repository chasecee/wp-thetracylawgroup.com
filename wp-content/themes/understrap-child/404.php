<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header text-center py-6">
							<div style="font-size:100px;"><i class="fa fa-question-circle"></i></div>
							<h3 class="page-title pb-3"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h3>
	<a href="https://thetracylawgroup.com" tite="Home TTLG" class="btn btn-outline-secondary">Home Page</a> 
	<a style=" margin-left: 25px; " href="https://thetracylawgroup.com/contact" tite="Contact TTLG" class="btn btn-secondary">Contact Us</a>
						</header><!-- .page-header -->

						<div class="page-content">


						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
