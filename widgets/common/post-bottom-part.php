
<div class="bwdbpl_blog_bottom_part bwdbpl_box_style_cmn">

<?php 
    // Post Meta
     if( $bwdbpl_styles !== 'style4' && $bwdbpl_styles !== 'style5' && $bwdbpl_styles !== 'style6' && $bwdbpl_styles !== 'style13' && $bwdbpl_styles !== 'style14' && $bwdbpl_styles !== 'style15' && $bwdbpl_styles !== 'style16' && $bwdbpl_styles !== 'style17' && $bwdbpl_styles !== 'style18' && $bwdbpl_styles !== 'style19' && $bwdbpl_styles !== 'style20' && $bwdbpl_styles !== 'style21' && $bwdbpl_styles !== 'style22' ){
        include 'post-meta.php';
    }

    if( $bwdbpl_styles == 'style5' ){
        include 'post-category.php';
    }
    // Post Title
    if($bwdbpl_yes_value === $bwdbpl_title_swtcher){ ?>
        <<?php echo $bwdbpl_title_tags ?> class="bwdbpl_blog_title">
            <a  class="bwdbpl_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
        </<?php echo $bwdbpl_title_tags; ?>>
    <?php } 
    if( $bwdbpl_styles == 'style5' || $bwdbpl_styles == 'style6' || $bwdbpl_styles == 'style13' || $bwdbpl_styles == 'style14' || $bwdbpl_styles == 'style15' || $bwdbpl_styles == 'style16' || $bwdbpl_styles == 'style17' || $bwdbpl_styles == 'style18' || $bwdbpl_styles == 'style19' || $bwdbpl_styles == 'style20' || $bwdbpl_styles == 'style21' || $bwdbpl_styles == 'style22' ){
        include 'post-meta.php';
    }
    
    if( $bwdbpl_styles !== 'style6' ){
        // Post Descrition
        if($bwdbpl_yes_value === $bwdbpl_description_swtcher){?>
            <div class="bwdbpl_blog_description">
                <div class="bwdbpl_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpl_post_description_words, $bwdbpl_blog_word_trim_indi); ?></div>
            </div><?php
        }
    }
    if( $bwdbpl_styles !== 'style6' ){
        // Post Button
        include 'post-button.php';
    }
    if( $bwdbpl_styles == 'style4' ){
        include 'post-meta.php';
    }?>

</div>