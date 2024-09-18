

<?php if( $settings['bwdlc_arrow_switcher'] === 'yes' ) { 
        if( $settings['bwdlc_nav_type'] === 'icon' ){ ?>
        <div class="bwdlc-swiper-button-prev">
            <span class="bwdlc-swiper-prev"><i class="<?php echo esc_html( $settings['bwdlc_nav_prev_arrow']['value'] ); ?>"></i></span>
        </div>
        <div class="bwdlc-swiper-button-next">
            <span class="bwdlc-swiper-next"><i class="<?php echo esc_html( $settings['bwdlc_nav_next_arrow']['value'] ); ?>"></i></span>
        </div>
        <?php }
        elseif( $settings['bwdlc_nav_type'] === 'text' ){ ?>
        <div class="bwdlc-swiper-button-prev">
            <span class="bwdlc-swiper-prev"><?php echo esc_html( $settings['bwdlc_nav_prev_text'] ); ?></span>
        </div>
        <div class="bwdlc-swiper-button-next">
            <span class="bwdlc-swiper-next"><?php echo esc_html( $settings['bwdlc_nav_next_text'] ); ?></span>
        </div>
<?php } } ?>

                <?php if( $settings['bwdlc_slide_pagination'] === 'yes' ) { ?>
                <div class="bwdlc-swiper-pagination"></div>
                <?php } ?>

                <?php if( $settings['bwdlc_scroll_bar'] === 'yes' ) { ?>
                <div class="bwdlc-swiper-scrollbar"></div>
                <?php } ?>