<?php
$bwdbp_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
list($bwdbp_thumbnail_url) = $bwdbp_thumbnail;
if(has_post_thumbnail()){?>
    <div class="bwdbp_blog_image bwdbp_image_overly_b bwdbp_image_overly_a" style="background-image: url(<?php echo $bwdbp_thumbnail_url; ?>);">
        <?php if( $bwdbp_styles == 'style3' ){
            include 'post-bottom-part.php';
            include 'overlay-content.php';
        } ?>
    </div>
<?php } else { echo '<div class="bwdbp_text_no bwdbp_blog_image bwdbp_image_overly_b bwdbp_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'creative-blog-post');
} ?> 

    