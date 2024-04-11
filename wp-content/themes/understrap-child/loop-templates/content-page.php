<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content mt-3">
		<div class="row">
			<div class="col-sm-8">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
