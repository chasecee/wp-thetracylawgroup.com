<?php
$currentID = get_the_ID();
$loop = new WP_Query( array(
    'post_type' => 'attorney',
    'posts_per_page' => -1,
    'post__not_in' => array($currentID)
  )
);
?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="col-sm-8 offset-sm-2 pb-4 pb-md-0">
        <div class="bg-gray card-attorney text-center h-100">
            <div class="img_wrap">
                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </a>
            </div>
            <div class="p-4">
                <h4 class=""><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a></h4>
                <h6 class="text-secondary font-small-bold"><?php the_field('title'); ?></h6>
                <p class="text-black-50 text-smaller mb-0"><?php the_field('short_bio'); ?></p>
				<a class="btn btn-sm btn-outline-primary d-md-none mt-3" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										Read More
								</a>
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_query(); ?>