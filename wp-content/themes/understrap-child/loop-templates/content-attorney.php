<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">

		<div class="col-md-6 col-lg-5">

			<div class="bg-light p-md-3">
				<div class="portrait_cropper">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class'  => 'w-100' ) ); } ?>
</div>
				<div class="attorney-contact bg-dark-gray mt-sm-3 p-md-4 p-3">

					<h4 class="text-white mb-4">Contact Details</h4>
					<ul>
						<li>
							<div class="icon-wrap"><i class="fa fa-phone"></i></div> 
							<a href="tel:<?php the_field('phone_number'); ?>" title="Call <?php the_title(); ?>"><?php the_field('phone_number'); ?></a>
						</li>
						<li>
							<div class="icon-wrap"><i class="fa fa-address-card-o"></i></div> 
							<a href="<?php the_field('vcard_file'); ?>" title="Download vCard">Download vCard</a>
						</li>
						<li>
							<div class="icon-wrap"><i class="fa fa-envelope-o"></i></div> 
							<a href="mailto:<?php the_field('email'); ?>" target="_blank"><?php the_field('email'); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="pt-3 p-md-0">
			<header class="entry-header">

				<h1 class="entry-title mb-3 pt-2 primary-font font-light"><?php the_title(); ?></h1>
				<h6 class="text-secondary font-small-bold"><?php the_field('title'); ?></h6>
			</header><!-- .entry-header -->

			<div class="entry-content pb-5">

				<?php the_content(); ?>
					
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>

			</div><!-- .entry-content -->
			</div><!-- p classes -->
		</div><!-- end col -->
		
	</div><!-- end row -->
</article><!-- #post-## -->
