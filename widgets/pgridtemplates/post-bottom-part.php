<?php if( $bwdbp_styles == 'style7' ) {?>
    <div class="bwdbp_blog_bottom_first_part">
        <?php include 'post-meta.php'; ?>
    </div>
<?php } ?>
<div class="bwdbp_blog_bottom_part bwdbp_box_style_cmn">

<?php if( $bwdbp_styles == 'style9' ) { ?>
    <div class="bwdbp_author_info">
    <?php if($bwdbp_yes_value === $bwdbp_author_swtcher){?>
        <div class="bwdbp_author-img">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); ?>
        </div>
    <?php } 
} 

    // Post Meta
     if( $bwdbp_styles !== 'style4' && $bwdbp_styles !== 'style5' && $bwdbp_styles !== 'style6' && $bwdbp_styles !== 'style7' && $bwdbp_styles !== 'style18' && $bwdbp_styles !== 'style19' ){
        include 'post-meta.php';
    }

if($bwdbp_styles == 'style9'){?>
    </div>
<?php }

    if( $bwdbp_styles == 'style5' || $bwdbp_styles == 'style18' || $bwdbp_styles == 'style19' ){
        include 'post-category.php';
    }
    // Post Title
    if($bwdbp_yes_value === $bwdbp_title_swtcher){ ?>
        <<?php echo $bwdbp_title_tags ?> class="bwdbp_blog_title">
            <a  class="bwdbp_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
        </<?php echo $bwdbp_title_tags; ?>>
    <?php } 
    if( $bwdbp_styles == 'style5' || $bwdbp_styles == 'style6' ){
        include 'post-meta.php';
    }
    
    // Post Descrition
    if($bwdbp_yes_value === $bwdbp_description_swtcher){?>
        <div class="bwdbp_blog_description">
            <div class="bwdbp_desce"><?php echo wp_trim_words(get_the_content(), $bwdbp_post_description_words, $bwdbp_blog_word_trim_indi); ?></div>
        </div><?php
    }
    if( $bwdbp_styles == 'style14' ) {?>
        <div class="bwdbp_author_info">
            <div class="bwdbp_author-img"></div>
            <?php if($bwdbp_yes_value === $bwdbp_author_swtcher){ ?>
                <div class="bwdbp_author-img">
                    <div class="bwdbp_blog_user">
                    <?php if('icon' === $bwdbp_author_indicator){ ?>
                        <i class="bwdbp_icons <?php echo $settings['bwdbp_author_icon']['value']; ?>"></i>
                    <?php } elseif('gravatar' === $bwdbp_author_indicator){ ?>
                        <?php
                        echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                        } ?>
                        <?php echo get_the_author_meta( 'nickname' ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }
    if( $bwdbp_styles == 'style18' || $bwdbp_styles == 'style19' ){
        include 'post-meta.php';
    }
    // Post Button
    include 'post-button.php';

    if( $bwdbp_styles == 'style4' ){
        include 'post-meta.php';
    }?>

</div>