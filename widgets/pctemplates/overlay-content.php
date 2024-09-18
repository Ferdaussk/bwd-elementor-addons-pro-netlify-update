<div class="bwdbpc_overlay_content bwdbpc_n_bg">
    <div class="bwdbpc_inner_overlay">

        <!-- Post Meta -->
        <?php if( $bwdbpc_styles !== 'style6' && $bwdbpc_styles !== 'style25' ){
            include 'post-meta.php'; ?>
            <!-- Post Title -->
            <?php if($bwdbpc_yes_value === $bwdbpc_title_swtcher){ ?>
            <<?php echo $bwdbpc_title_tags ?> class="bwdbpc_blog_title">
                <a  class="bwdbpc_title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
            </<?php echo $bwdbpc_title_tags; ?>>
        <?php } }

        // Post Descrition
        if($bwdbpc_yes_value === $bwdbpc_description_swtcher){?>
            <div class="bwdbpc_blog_description">
                <div class="bwdbpc_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpc_post_description_words, $bwdbpc_blog_word_trim_indi); ?></div>
            </div><?php
        }
        // Post Button
        if($bwdbpc_yes_value === $settings['bwdbpc_button_show_switcher']){?>
            <div class="bwdbpc_blog_bttn">
                <a class="bwdbpc_button" href="<?php the_permalink(); ?>" <?php if($bwdbpc_yes_value === $settings['bwdbpc_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpc_button_types){ ?><i class="bwdbpc_icons <?php echo $settings['bwdbpc_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbpc_button_types){/* */ if('left' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_left <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbpc_blog_button_title']);  if('right' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_right <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
            </div>
        <?php } ?>

    </div>
</div>