

<?php if( $settings['teps_arrow_switcher'] === 'yes' ) { 
        if( $settings['teps_nav_type'] === 'icon' ){ ?>
        <div class="teps-swiper-button-prev">
            <span class="teps-swiper-prev"><i class="<?php echo esc_html( $settings['teps_nav_prev_arrow']['value'] ); ?>"></i></span>
        </div>
        <div class="teps-swiper-button-next">
            <span class="teps-swiper-next"><i class="<?php echo esc_html( $settings['teps_nav_next_arrow']['value'] ); ?>"></i></span>
        </div>
        <?php }
        elseif( $settings['teps_nav_type'] === 'text' ){ ?>
        <div class="teps-swiper-button-prev">
            <span class="teps-swiper-prev"><?php echo esc_html( $settings['teps_nav_prev_text'] ); ?></span>
        </div>
        <div class="teps-swiper-button-next">
            <span class="teps-swiper-next"><?php echo esc_html( $settings['teps_nav_next_text'] ); ?></span>
        </div>
<?php } } ?>

    <?php if( $settings['teps_slide_pagination'] === 'yes' ) { ?>
    <div class="teps-swiper-pagination"></div>
    <?php } ?>

    <?php if( $settings['teps_scroll_bar'] === 'yes' ) { ?>
    <div class="teps-swiper-scrollbar"></div>
    <?php } ?>