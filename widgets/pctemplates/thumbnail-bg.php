<?php
if($bwdbpc_styles == 'style35') {?>
    <div class="bwdbpc-blogextra-img">
<?php    
}
$bwdbpc_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
list($bwdbpc_thumbnail_url) = $bwdbpc_thumbnail;
if(has_post_thumbnail()){?>
    <div class="bwdbpc_blog_image bwdbpc_image_overly_b bwdbpc_image_overly_a" style="background-image: url(<?php echo $bwdbpc_thumbnail_url; ?>);">
        <?php 
        $allowed_styles = array('style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41');
        if( !in_array($bwdbpc_styles, $allowed_styles) ){
            if( $bwdbpc_styles == 'style3' ){ include 'post-bottom-part.php'; include 'overlay-content.php'; }
        }
        if( in_array($bwdbpc_styles, $allowed_styles) ){?> <a class="blog_img-link" href="<?php echo get_permalink(); ?>"></a> <?php } 
        if( $bwdbpc_styles == 'style27' || $bwdbpc_styles == 'style30' || $bwdbpc_styles == 'style31' ){ include 'post-date.php'; }
        if( $bwdbpc_styles == 'style36' || $bwdbpc_styles == 'style37' || $bwdbpc_styles == 'style38' ){
            include 'post-bottom-part.php';
        } ?>
    </div>
<?php } else { echo '<div class="bwdbpc_text_no bwdbpc_blog_image bwdbpc_image_overly_b bwdbpc_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'creative-blog-post');
} 
if($bwdbpc_styles == 'style35') {?>
    </div>
<?php } ?>


    