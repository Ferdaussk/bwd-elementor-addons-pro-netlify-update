<?php
if($bwdbpc_yes_value === $settings['bwdbpc_button_show_switcher']){?>
    <div class="bwdbpc_blog_bttn">
        <a class="bwdbpc_button" href="<?php the_permalink(); ?>" <?php if($bwdbpc_yes_value === $settings['bwdbpc_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpc_button_types){ ?><i class="bwdbpc_icons <?php echo $settings['bwdbpc_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbpc_button_types){/* */ if('left' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_left <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbpc_blog_button_title']);  if('right' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_right <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
    </div>
<?php } ?>