<?php
if($bpaccdn_yes_value === $settings['bpaccdn_button_show_switcher']){?>
    <div class="bpaccdn-atcart-btn">
        <a class="bpaccdn-cartBtn" href="<?php the_permalink(); ?>" <?php if($bpaccdn_yes_value === $settings['bpaccdn_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bpaccdn_button_types){ ?><i class="bpaccdn_icons <?php echo $settings['bpaccdn_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bpaccdn_button_types){/* */ if('left' === $bpaccdn_button_icon_align){ ?><i class="bpaccdn_icons bpaccdn_icons_left <?php echo $settings['bpaccdn_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bpaccdn_blog_button_title']);  if('right' === $bpaccdn_button_icon_align){ ?><i class="bpaccdn_icons bpaccdn_icons_right <?php echo $settings['bpaccdn_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
    </div>
<?php } ?>