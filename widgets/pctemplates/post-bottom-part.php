<?php if( $bwdbpc_styles == 'style7' ) {?>
    <div class="bwdbpc_blog_bottom_first_part">
        <?php include 'post-meta.php'; ?>
    </div>
<?php } ?>
<div class="bwdbpc_blog_bottom_part bwdbpc_box_style_cmn">

<?php if( $bwdbpc_styles == 'style9' ) { ?>
    <div class="bwdbpc_author_info">
    <?php if($bwdbpc_yes_value === $bwdbpc_author_swtcher){?>
        <div class="bwdbpc_author-img">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); ?>
        </div>
    <?php } 
} 

    // Post Meta
    $meta_bf_title = array('style4', 'style5', 'style6', 'style7', 'style18', 'style19', 'style23', 'style24', 'style25', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41');
    if( !in_array( $bwdbpc_styles, $meta_bf_title ) ){
        include 'post-meta.php';
    }

if($bwdbpc_styles == 'style9'){?>
    </div>
<?php }

    if( $bwdbpc_styles == 'style5' || $bwdbpc_styles == 'style18' || $bwdbpc_styles == 'style19' || $bwdbpc_styles == 'style24' ){
        include 'post-category.php';
    }
    // Post Title
    if($bwdbpc_yes_value === $bwdbpc_title_swtcher){ ?>
        <<?php echo $bwdbpc_title_tags ?> class="bwdbpc_blog_title">
            <a  class="bwdbpc_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
        </<?php echo $bwdbpc_title_tags; ?>>
    <?php } 
   
    // Post Meta
    $meta_af_title = array('style5', 'style6', 'style24', 'style25', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41');
    if( in_array( $bwdbpc_styles, $meta_af_title ) ){
        include 'post-meta.php';
    }
    
    // Post Descrition
    if($bwdbpc_yes_value === $bwdbpc_description_swtcher){?>
        <div class="bwdbpc_blog_description">
            <div class="bwdbpc_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpc_post_description_words, $bwdbpc_blog_word_trim_indi); ?></div>
        </div><?php
    }
    if( $bwdbpc_styles == 'style14' ) {?>
        <div class="bwdbpc_author_info">
            <div class="bwdbpc_author-img"></div>
            <?php if($bwdbpc_yes_value === $bwdbpc_author_swtcher){ ?>
                <div class="bwdbpc_author-img">
                    <div class="bwdbpc_blog_user">
                    <?php if('icon' === $bwdbpc_author_indicator){ ?>
                        <i class="bwdbpc_icons <?php echo $settings['bwdbpc_author_icon']['value']; ?>"></i>
                    <?php } elseif('gravatar' === $bwdbpc_author_indicator){ ?>
                        <?php
                        echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                        } ?>
                        <?php echo get_the_author_meta( 'nickname' ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }
    if( $bwdbpc_styles == 'style18' || $bwdbpc_styles == 'style19' ){
        include 'post-meta.php';
    }
    // Post Button
    include 'post-button.php';

    if( $bwdbpc_styles == 'style4' || $bwdbpc_styles == 'style23' ){
        include 'post-meta.php';
    }?>

</div>