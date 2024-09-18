<div class="bwdbp_overlay_content bwdbp_n_bg">
    <div class="bwdbp_inner_overlay">

        <!-- Post Meta -->
        <?php if( $bwdbp_styles !== 'style6' ){
            include 'post-meta.php'; ?>
            <!-- Post Title -->
            <?php if($bwdbp_yes_value === $bwdbp_title_swtcher){ ?>
            <<?php echo $bwdbp_title_tags ?> class="bwdbp_blog_title">
                <a  class="bwdbp_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
            </<?php echo $bwdbp_title_tags; ?>>
        <?php } }

        // Post Descrition
        if($bwdbp_yes_value === $bwdbp_description_swtcher){?>
            <div class="bwdbp_blog_description">
                <div class="bwdbp_desce"><?php echo wp_trim_words(get_the_content(), $bwdbp_post_description_words, $bwdbp_blog_word_trim_indi); ?></div>
            </div><?php
        }
        // Post Button
        if($bwdbp_yes_value === $settings['bwdbp_button_show_switcher']){?>
            <div class="bwdbp_blog_bttn">
                <a class="bwdbp_button" href="<?php the_permalink(); ?>" <?php if($bwdbp_yes_value === $settings['bwdbp_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbp_button_types){ ?><i class="bwdbp_icons <?php echo $settings['bwdbp_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbp_button_types){/* */ if('left' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_left <?php echo $settings['bwdbp_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbp_blog_button_title']);  if('right' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_right <?php echo $settings['bwdbp_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
            </div>
        <?php } ?>

    </div>
</div>