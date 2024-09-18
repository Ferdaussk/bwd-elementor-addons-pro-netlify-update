<div class="bwdbp_blog_image">
    <a class="bwdbp_imgnot" href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()){
            the_post_thumbnail('large'); 
        } else{ 
            echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'creative-blog-post') . '</h2>';
        }?>
    </a>
    <?php if( $bwdbp_styles == 'style4' ){?>
        <div class="bwdbp_overlay_icon">
            <a href="<?php the_permalink(); ?>"><i class="bwdbp_icons fas fa-plus"></i></a>
        </div>
        <?php include 'post-date.php';
    }
    if( $bwdbp_styles == 'style8' || $bwdbp_styles == 'style11' || $bwdbp_styles == 'style13' || $bwdbp_styles == 'style17' ){
        include 'post-date.php';
    }
    if( $bwdbp_styles == 'style14' || $bwdbp_styles == 'style19' ){
        include 'post-button.php';
    }
    if( $bwdbp_styles == 'style16' ){
        include 'post-meta.php';
    }?>
</div>