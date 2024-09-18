
<div class="bwdbpl_blog_bottom_part bwdbpl_box_style_cmn">

<?php 
    // Post Meta
     if( $bwdbpl_styles !== '4' && $bwdbpl_styles !== '5' && $bwdbpl_styles !== '6' && $bwdbpl_styles !== '13' && $bwdbpl_styles !== '14' && $bwdbpl_styles !== '15' && $bwdbpl_styles !== '16' && $bwdbpl_styles !== '17' && $bwdbpl_styles !== '18' && $bwdbpl_styles !== '19' && $bwdbpl_styles !== '20' && $bwdbpl_styles !== '21' && $bwdbpl_styles !== '22' ){
        include 'post-meta.php';
    }

    if( $bwdbpl_styles == '5' ){
        include 'post-category.php';
    }
    // Post Title
    if($bwdbpl_yes_value === $bwdbpl_title_swtcher){ ?>
        <<?php echo $bwdbpl_title_tags ?> class="bwdbpl_blog_title">
            <a  class="bwdbpl_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
        </<?php echo $bwdbpl_title_tags; ?>>
    <?php } 
    if( $bwdbpl_styles == '5' || $bwdbpl_styles == '6' || $bwdbpl_styles == '13' || $bwdbpl_styles == '14' || $bwdbpl_styles == '15' || $bwdbpl_styles == '16' || $bwdbpl_styles == '17' || $bwdbpl_styles == '18' || $bwdbpl_styles == '19' || $bwdbpl_styles == '20' || $bwdbpl_styles == '21' || $bwdbpl_styles == '22' ){
        include 'post-meta.php';
    }
    
    if( $bwdbpl_styles !== '6' ){
        // Post Descrition
        if($bwdbpl_yes_value === $bwdbpl_description_swtcher){?>
            <div class="bwdbpl_blog_description">
                <div class="bwdbpl_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpl_post_description_words, $bwdbpl_blog_word_trim_indi); ?></div>
            </div><?php
        }
    }
    if( $bwdbpl_styles !== '6' ){
        // Post Button
        include 'post-button.php';
    }
    if( $bwdbpl_styles == '4' ){
        include 'post-meta.php';
    }?>

</div>