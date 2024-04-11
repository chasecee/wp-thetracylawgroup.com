<?php

/**
 * Template Name: Services Page Template
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
				<div class="container py-md-5 pb-5">

					<div class="row">

						<div class="col-md-3">
							<div id="list-example" class="list-group list-group-flush sidelist position-sticky">
								<?php if (have_rows('content_block')) : while (have_rows('content_block')) : the_row();
										$title_side = get_sub_field('title');
										$title_side_nospaces = preg_replace('/\s*/', '', $title_side);
										$title_side_noslashes = str_replace('/', '-', $title_side_nospaces);
										$title_side_clean = strtolower($title_side_noslashes);
								?>

										<a class="list-group-item  list-group-item-action" href="#<?php echo $title_side_clean; ?>">
											<?php echo $title_side; ?>
										</a>

								<?php endwhile;
								else : endif; ?>
							</div>
						</div>

						<div class="col-md-9">

							<?php
							if ('' !== get_post()->post_content) { ?>
								<div class="mb-4">
									<?php the_content(); ?>
								</div>
							<?php } ?>


							<?php if (have_rows('content_block')) : while (have_rows('content_block')) : the_row();
									$title = get_sub_field('title');
									$title_nospaces = preg_replace('/\s*/', '', $title);
									$title_noslashes = str_replace('/', '-', $title_nospaces);
									// convert the string to all lowercase
									$title_clean = strtolower($title_noslashes);
							?>
									<div class="mb-4">
										<div class="">
											<h3 class="" id="<?php echo $title_clean; ?>"><strong><?php the_sub_field('title'); ?></strong></h3>
										</div>
										<div class="pb-2">
											<?php echo get_sub_field('text'); ?>
										</div>

									</div>
							<?php endwhile;
							else : endif; ?>
							<div class="py-md-5"></div>
							<div class="py-md-5"></div>
							<div class="py-md-5"></div>
							<div class="py-md-5"></div>
						</div>


					</div>
				</div>

			<?php endwhile; // end of the loop. 
			?>

		</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>