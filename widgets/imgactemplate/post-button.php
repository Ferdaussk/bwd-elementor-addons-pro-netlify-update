<?php
if($bpiacrdn_yes_value === $settings['bpiacrdn_button_show_switcher']){?>
    <div class="bpiacrdn-atcart-btn">
        <a class="bpiacrdn-cartBtn" href="<?php the_permalink(); ?>" <?php if($bpiacrdn_yes_value === $settings['bpiacrdn_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bpiacrdn_button_types){ ?><i class="bpiacrdn_icons <?php echo $settings['bpiacrdn_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bpiacrdn_button_types){/* */ if('left' === $bpiacrdn_button_icon_align){ ?><i class="bpiacrdn_icons bpiacrdn_icons_left <?php echo $settings['bpiacrdn_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bpiacrdn_blog_button_title']);  if('right' === $bpiacrdn_button_icon_align){ ?><i class="bpiacrdn_icons bpiacrdn_icons_right <?php echo $settings['bpiacrdn_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
    </div>
<?php } ?>