
<?php


    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
    if(has_post_thumbnail()){
    ?>
    <div class="crtplst_product_image crtplst_image_overly_b crtplst_image_overly_a" style="background-image: url(<?php echo $image[0]; ?>);"><a class="product_img-link" href="<?php echo get_permalink(); ?>"></a>
    <?php
    } else{
        echo '<div class="crtplst_text_no crtplst_product_image crtplst_image_overly_b crtplst_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'creative-products-list');
    }