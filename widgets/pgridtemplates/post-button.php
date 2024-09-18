<?php
if($bwdbp_yes_value === $settings['bwdbp_button_show_switcher']){?>
    <div class="bwdbp_blog_bttn">
        <a class="bwdbp_button" href="<?php the_permalink(); ?>" <?php if($bwdbp_yes_value === $settings['bwdbp_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbp_button_types){ ?><i class="bwdbp_icons <?php echo $settings['bwdbp_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbp_button_types){/* */ if('left' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_left <?php echo $settings['bwdbp_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbp_blog_button_title']);  if('right' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_right <?php echo $settings['bwdbp_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
    </div>
<?php } ?>