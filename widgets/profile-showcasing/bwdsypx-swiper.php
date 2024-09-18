

<?php if( $settings['bwdsypx_arrow_switcher'] === 'yes' ) { 
        if( $settings['bwdsypx_nav_type'] === 'icon' ){ ?>
        <div class="bwdsypx-swiper-button-prev">
            <span class="bwdsypx-swiper-prev"><i class="<?php echo esc_html( $settings['bwdsypx_nav_prev_arrow']['value'] ); ?>"></i></span>
        </div>
        <div class="bwdsypx-swiper-button-next">
            <span class="bwdsypx-swiper-next"><i class="<?php echo esc_html( $settings['bwdsypx_nav_next_arrow']['value'] ); ?>"></i></span>
        </div>
        <?php }
        elseif( $settings['bwdsypx_nav_type'] === 'text' ){ ?>
        <div class="bwdsypx-swiper-button-prev">
            <span class="bwdsypx-swiper-prev"><?php echo esc_html( $settings['bwdsypx_nav_prev_text'] ); ?></span>
        </div>
        <div class="bwdsypx-swiper-button-next">
            <span class="bwdsypx-swiper-next"><?php echo esc_html( $settings['bwdsypx_nav_next_text'] ); ?></span>
        </div>
<?php } } ?>

                <?php if( $settings['bwdsypx_slide_pagination'] === 'yes' ) { ?>
                <div class="bwdsypx-swiper-pagination"></div>
                <?php } ?>

                <?php if( $settings['bwdsypx_scroll_bar'] === 'yes' ) { ?>
                <div class="bwdsypx-swiper-scrollbar"></div>
                <?php } ?>