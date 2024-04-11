<?php 
$featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
$default_image = get_field('default_page_header_image', 'option'); 
if (has_post_thumbnail( $post->ID ) ) {
    $feat_image_url = $featured_image;
} else {
    $feat_image_url = $default_image; 
}
if (get_field('custom_page_title')){
    $page_title = get_field('custom_page_title');
} else {
    $page_title = single_post_title('', false ); 
}
?>
<div class="overlay-outer py-6 bg-img-cover bg-img-center" style="background-image: url(<?php echo $feat_image_url; ?>);" >
    
    <div class="container">

        <div class="position-relative z-2">
            
            <h1 class="header-title text-white m-0">
                <?php echo $page_title; ?>
            </h1>

        </div>

    </div>

    <div class="overlay"></div>
    
</div>