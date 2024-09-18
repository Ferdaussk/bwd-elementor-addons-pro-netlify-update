<?php 
$bwdbpl_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
list($bwdbpl_thumbnail_url) = $bwdbpl_thumbnail;
if(has_post_thumbnail()){
    if( $bwdbpl_styles == '16' ){?>
        <div class="bwdbpl-blogextra-img">
    <?php }?>
    <div class="bwdbpl_blog_image bwdbpl_image_overly_b bwdbpl_image_overly_a" style="background-image: url(<?php echo $bwdbpl_thumbnail_url; ?>);">
    <a class="blog_img-link" href="<?php echo get_permalink(); ?>"></a><?php
    if( $bwdbpl_styles == '17' || $bwdbpl_styles == '18' || $bwdbpl_styles == '19' ){ include 'post-bottom-part.php';}
    } else{ 
           echo '<div class="bwdbpl_blog_image bwdbpl_image_overly_b bwdbpl_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'blog-post-list');
        }?>
        <?php if( $bwdbpl_styles == '4' ){?>
            <div class="bwdbpl_overlay_icon">
                <a href="<?php the_permalink(); ?>"><i class="bwdbpl_icons fas fa-plus"></i></a>
            </div>
            <?php include 'post-date.php';
        }
        if( $bwdbpl_styles == '8' || $bwdbpl_styles == '11' || $bwdbpl_styles == '12' ){
            include 'post-date.php';
        }?>
    </div>
    <?php if( $bwdbpl_styles == '16' ){?>
        </div>
    <?php }