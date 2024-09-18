<div class="woocrp_related-product_12 woocrp_related-product_13 woocrp-slider-common <?php echo esc_attr($settings['woocrp_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['woocrp-product-custom-id'] ); ?>">
<?php require 'woocrp-variable.php' ; ?>
	<div class="woocrp-owl woocrp-owl-carousel woocrp-owl-theme">
		<?php 
		foreach($wooc_product as $wooc_products){ $name_one_fsk01 = wc_get_product($wooc_products); $thumbnail 	= get_the_post_thumbnail_url( $wooc_products ); ?>
        <div class="woocrp-item">
            <div class="woocrp_relproduct-wrap">
                <div class="woocrp_relproduct-img">
                    <?php if($woocrp_image === 'yes'){ ?><img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr( $name_one_fsk01->get_name() ); ?>"/>
                    <?php } ?>
                    <?php if($woocrp_cart_btn === 'yes'){ ?>
					<div class="woocrp_relproduct-cart">
						<a class="woocrp_addcart" href="?add-to-cart=<?php esc_attr_e( $wooc_products ); ?>"><i class="<?php echo esc_attr($settings['woocrp_cart_button_icon']['value']); ?>"></i></a>
					</div>
					<?php } ?>
                    <div class="woocrp_overlay-content woocrp_background_make">
                        <a class="woocrp_anchor" href="<?php the_permalink( $wooc_products ); ?>"></a>
                        <div class="woocrp_relproduct-content">
                            <?php if($woocrp_title === 'yes'){ ?><a href="<?php the_permalink( $wooc_products ); ?>"><div class="woocrp_product-title"><?php echo $name_one_fsk01->get_name(); ?></div></a><?php } ?>
                            <?php if($woocrp_description === 'yes'){ ?><div class="woocrp_relproduct-desc"><?php echo wp_trim_words($name_one_fsk01->get_short_description(), $woocrp_description_words, $woocrp_word_trim_indi); ?></div><?php } ?>
                            <?php if($settings['woocrp_btn'] === 'yes'){ ?>
                            <div class="woocrp_relproduct-bttn">
                                <a class="woocrp_relbtn" href="<?php if($woocrp_choose_link === 'custom_link'){echo esc_url($woocrp_main_button_link);} else{the_permalink( $wooc_products );} ?>"><?php echo esc_html__($woocrp_main_button); ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="woocrp_more-contentt <?php echo esc_html__($woocrp_cont_align); ?>">
                    <div class="woocrp_relproduct-content">
                        <?php 
						include(__DIR__.'/../wrpcommon/star_rating.php');
						?>
                        <?php if($woocrp_new_price === 'yes'){ ?><div class="woocrp_product-price"><?php echo get_woocommerce_currency_symbol(); echo $name_one_fsk01->get_price(); ?></div><?php } ?>
                    </div>
                </div>
            </div>
        </div>
		<?php
		}
		?>
    </div>
</div>