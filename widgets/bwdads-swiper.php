

<?php if( $settings['bwdads_arrow_switcher'] === 'yes' ) { 
        if( $settings['bwdads_nav_type'] === 'icon' ){ ?>
        <div class="bwdads-swiper-button-prev">
            <span class="bwdads-swiper-prev"><i class="<?php echo esc_html( $settings['bwdads_nav_prev_arrow']['value'] ); ?>"></i></span>
        </div>
        <div class="bwdads-swiper-button-next">
            <span class="bwdads-swiper-next"><i class="<?php echo esc_html( $settings['bwdads_nav_next_arrow']['value'] ); ?>"></i></span>
        </div>
        <?php }
        elseif( $settings['bwdads_nav_type'] === 'text' ){ ?>
        <div class="bwdads-swiper-button-prev">
            <span class="bwdads-swiper-prev"><?php echo esc_html( $settings['bwdads_nav_prev_text'] ); ?></span>
        </div>
        <div class="bwdads-swiper-button-next">
            <span class="bwdads-swiper-next"><?php echo esc_html( $settings['bwdads_nav_next_text'] ); ?></span>
        </div>
<?php } } ?>

                <?php if( $settings['bwdads_slide_pagination'] === 'yes' ) { ?>
                <div class="bwdads-swiper-pagination"></div>
                <?php } ?>

                <?php if( $settings['bwdads_scroll_bar'] === 'yes' ) { ?>
                <div class="bwdads-swiper-scrollbar"></div>
                <?php } ?>