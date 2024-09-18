<div class="top-header-1 top-header-common">
    <div class="thf-top-header-width">
        <div class="top-header-left">
            <?php
            if ( $settings['thf_top_bar_text_list'] ) {
                foreach ( $settings['thf_top_bar_text_list'] as $top_text_m ) { ?>
                    <a class="top-header-item <?php echo 'elementor-repeater-item-' . esc_attr( $top_text_m['_id'] ); ?>" href="<?php echo  esc_url( $top_text_m['thf_top_bar_text_link']['url'] );?>">
                    <i class="<?php echo $top_text_m['thf_top_bar_text_icon']['value']; ?>"></i>
                    <span class="thf-topbar-text"><?php echo $top_text_m['thf_top_icon_text'];?></span>
                    </a>
                <?php
                }
            } ?>
        </div>
        <?php if('yes' === $settings['thf_header_top_icon_switcher']){ ?>
        <div class="top-header-right">
            <div class="social-icons">
                <?php
                if ( $settings['thf_top_bar_social_icon_list'] ) {
                    foreach ( $settings['thf_top_bar_social_icon_list'] as $top_item ) { ?>
                        <a class="social-icon <?php echo 'elementor-repeater-item-' . esc_attr( $top_item['_id'] ); ?>" href="<?php echo  esc_url( $top_item['thf_top_bar_social_icon_link']['url'] );?>"><i class="<?php echo $top_item['thf_top_bar_social_icon']['value'];?>"></i>
                    </a>
                    <?php
                    }
                } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
