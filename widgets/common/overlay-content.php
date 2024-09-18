<div class="bwdbpl_overlay_content bwdbpl_n_bg">
    <div class="bwdbpl_inner_overlay">

        <!-- Post Meta -->
        <?php if( $bwdbpl_styles !== 'style6' ){
            include 'post-meta.php'; ?>
            <!-- Post Title -->
            <?php if($bwdbpl_yes_value === $bwdbpl_title_swtcher){ ?>
            <<?php echo $bwdbpl_title_tags ?> class="bwdbpl_blog_title">
                <a  class="bwdbpl_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
            </<?php echo $bwdbpl_title_tags; ?>>
        <?php } }

        // Post Descrition
        if($bwdbpl_yes_value === $bwdbpl_description_swtcher){?>
            <div class="bwdbpl_blog_description">
                <div class="bwdbpl_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpl_post_description_words, $bwdbpl_blog_word_trim_indi); ?></div>
            </div><?php
        }
        // Post Button
        if($bwdbpl_yes_value === $settings['bwdbpl_button_show_switcher']){?>
            <div class="bwdbpl_blog_bttn">
                <a class="bwdbpl_button" href="<?php the_permalink(); ?>" <?php if($bwdbpl_yes_value === $settings['bwdbpl_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpl_button_types){ ?><i class="bwdbpl_icons <?php echo $settings['bwdbpl_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbpl_button_types){/* */ if('left' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_left <?php echo $settings['bwdbpl_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbpl_blog_button_title']);  if('right' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_right <?php echo $settings['bwdbpl_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
            </div>
        <?php } ?>

    </div>
</div>