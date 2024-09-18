<?php
if($bwdbpl_yes_value === $settings['bwdbpl_button_show_switcher']){?>
    <div class="bwdbpl_blog_bttn">
        <a class="bwdbpl_button" href="<?php the_permalink(); ?>" <?php if($bwdbpl_yes_value === $settings['bwdbpl_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpl_button_types){ ?><i class="bwdbpl_icons <?php echo $settings['bwdbpl_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbpl_button_types){/* */ if('left' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_left <?php echo $settings['bwdbpl_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbpl_blog_button_title']);  if('right' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_right <?php echo $settings['bwdbpl_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
    </div>
<?php } ?>