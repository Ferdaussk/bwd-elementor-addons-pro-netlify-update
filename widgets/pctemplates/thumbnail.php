<div class="bwdbpc_blog_image">
    <a class="bwdbpc_imgnot" href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()){
            the_post_thumbnail('large'); 
        } else{ 
            echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', BWDEB_ROOT_AUTHOR_PRO) . '</h2>';
        }?>
    </a>
    <?php if( $bwdbpc_styles == 'style4' ){?>
        <div class="bwdbpc_overlay_icon">
            <a href="<?php the_permalink(); ?>"><i class="bwdbpc_icons fas fa-plus"></i></a>
        </div>
        <?php include 'post-date.php';
    }
    if( $bwdbpc_styles == 'style8' || $bwdbpc_styles == 'style11' || $bwdbpc_styles == 'style13' || $bwdbpc_styles == 'style17' ){
        include 'post-date.php';
    }
    if( $bwdbpc_styles == 'style14' || $bwdbpc_styles == 'style19' ){
        include 'post-button.php';
    }
    if( $bwdbpc_styles == 'style16' ){
        include 'post-meta.php';
    }?>
</div>