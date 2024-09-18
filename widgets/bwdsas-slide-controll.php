

<?php if( $settings['bwdsas_arrow_switcher'] === 'yes' ) { 
        if( $settings['bwdsas_nav_type'] === 'icon' ){ ?>
        <div class="bwdsas-swiper-button-prev">
            <span class="bwdsas-swiper-prev"><i class="<?php echo esc_html( $settings['bwdsas_nav_prev_arrow']['value'] ); ?>"></i></span>
        </div>
        <div class="bwdsas-swiper-button-next">
            <span class="bwdsas-swiper-next"><i class="<?php echo esc_html( $settings['bwdsas_nav_next_arrow']['value'] ); ?>"></i></span>
        </div>
        <?php }
        elseif( $settings['bwdsas_nav_type'] === 'text' ){ ?>
        <div class="bwdsas-swiper-button-prev">
            <span class="bwdsas-swiper-prev"><?php echo esc_html( $settings['bwdsas_nav_prev_text'] ); ?></span>
        </div>
        <div class="bwdsas-swiper-button-next">
            <span class="bwdsas-swiper-next"><?php echo esc_html( $settings['bwdsas_nav_next_text'] ); ?></span>
        </div>
<?php } } ?>

                <?php if( $settings['bwdsas_slide_pagination'] === 'yes' ) { ?>
                <div class="bwdsas-swiper-pagination"></div>
                <?php } ?>

                <?php if( $settings['bwdsas_scroll_bar'] === 'yes' ) { ?>
                <div class="bwdsas-swiper-scrollbar"></div>
                <?php } ?>