<div class="wppgpc-card-area-style11 wppgpc-slider-common <?php echo esc_attr($settings['wppgpc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['wppgpc-product-custom-id'] ); ?>">
    <?php require 'wppgpc-variable.php' ; ?>
        <div class="wppgpc-owl wppgpc-owl-carousel wppgpc-owl-theme">
        <?php
        $wppgpc_all_products = new WP_Query( $wppgpc_args ); if($wppgpc_all_products->have_posts()):
        while ( $wppgpc_all_products->have_posts() ) : $wppgpc_all_products->the_post();
            global $product; ?>
            <div class="wppgpc-item">
                <div class="wppgpc-card">
                    <div class="wppgpc-fornt-card">
                        <div class="wppgpc-sale-featured-badge <?php echo esc_attr( $wppgpc_featured_sale_order ) ? 'wppgpc-featured-sale-order' : ''; ?>">
							<?php
							// Feature Badge
							if ('yes' === $wppgpc_show_featured_badge && $product->is_featured()) {
								echo '<p class="wppgpc-featured-badge">' . esc_html($wppgpc_badge_featured_text) . '</p>';
							}
							// Sale Badge
							if ('yes' === $wppgpc_show_sale_badge && $product->is_on_sale()) {
								
								$badge_content = ('percent' === $wppgpc_sale_badge_type) ? 
								esc_html($wppgpc_sale_badge_before_percent_text) .' ' . round(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100) . '% ' . esc_html($wppgpc_sale_badge_after_percent_text) :
									esc_html($wppgpc_sale_badge_text);
									echo '<p class="wppgpc-sale-badge">' . $badge_content . '</p>';
									
							} ?>
						</div>
						<?php
							//Stock Badge
							if ('yes' === $wppgpc_show_stock_out_badge) {
								echo !$product->is_in_stock() ? '<p class="wppgpc-stock-badge">' . esc_html($wppgpc_badge_stock_out_text) . '</p>' : '<p class="wppgpc-stock-count">' . ($product->get_stock_quantity() > 0 ? esc_html__($wppgpc_badge_stock_in_number_text) . ' : ' . $product->get_stock_quantity() : esc_html__($wppgpc_badge_stock_in_text)) . '</p>';
							}?>
                        <?php if(has_post_thumbnail()){ ?>
                        <div class="wppgpc-imgbx">
                            <?php echo '<a href="'.get_permalink().'">' . $product->get_image().'</a>'; ?>
                        </div>
                        <?php } else{echo '<div class="wppgpc-img_text">'.esc_html__('No Feature Image', 'wppgpc-product-td').'</div>';} ?>
                    </div>
                    <div class="wppgpc-back-card">
                        <?php if(has_post_thumbnail()){ ?>
                        <div class="wppgpc-imgbx2">
                            <?php echo '<a href="'.get_permalink().'">' . $product->get_image().'</a>'; ?>
                        </div>
                        <?php } else{echo '<div class="wppgpc-img_text">'.esc_html__('No Feature Image', 'wppgpc-product-td').'</div>';} ?>
                        <?php if('yes' === $settings['wppgpc_cart_btn']){ ?>
                        <div class="wppgpc-card-icon">
                           <a href="<?php echo esc_url($product->add_to_cart_url()); ?>">
                                <?php \Elementor\Icons_Manager::render_icon($settings['wppgpc_cart_button_icon'], ['aria-hidden' => 'true']); ?>
                           </a>
                        </div>
                        <?php } ?>
                        <div class="wppgpc-contentbx">
                            <?php if('yes' === $settings['wppgpc_title']){ ?>
                            <div class="wppgpc-card-heading <?php echo esc_attr($wppgpc_cont_align); ?>"><a class="wppgpc-product-title" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
                            <?php } ?>
                            <?php if('yes' === $settings['wppgpc_description']){ ?>
                            <div class="wppgpc-card-decs <?php echo esc_attr($wppgpc_cont_align); ?>">
                                <?php echo wp_trim_words($product->get_short_description(), $wppgpc_description_words, $wppgpc_word_trim_indi); ?>
                            </div>
                            <?php } ?>
                            <div class="wppgpc-price-rating <?php echo esc_attr($wppgpc_cont_align); ?>">
                                <?php if('yes' === $settings['wppgpc_price']){ ?>
                                <div class="wppgpc-price-box">
                                   <?php
										if ($product->is_type('variable')) {
											$variations = $product->get_available_variations();
											$prices = array();

											foreach ($variations as $variation) {
												$variation_price = $variation['display_price']; 
												$prices[] = $variation_price; 
											}

											$min_price = wc_price(min($prices));
											$max_price = wc_price(max($prices));
											echo $min_price . ' - ' . $max_price;
										} else {
											$regular_price = wc_get_price_to_display($product, array('price' => $product->get_regular_price()));
											$sale_price = wc_get_price_to_display($product, array('price' => $product->get_sale_price()));

											$wppgpc_regular_price = '<div class="wppgpc-regular-price wppgpc-sale-price"><del>' . wc_price($regular_price) . '</del></div><div class="wppgpc-current-price"> ' . wc_price($sale_price) . '</div>';
											$wppgpc_dis_price = '<div class="wppgpc-regular-price"> ' . wc_price($regular_price) . '</div>';
											$wppgpc_sale_check = ($product->is_on_sale()) ? $wppgpc_regular_price : $wppgpc_dis_price;
											$wppgpc_regu_check = ($regular_price) ? $wppgpc_sale_check : '';
											echo $wppgpc_regu_check;
										}
										?>
                                </div>
                                <?php } 
                                include(__DIR__.'/star_rating.php'); ?>
                            </div>
                            <?php include(__DIR__.'/taxo_all.php'); ?>
                            <div class="wppgpc-button-box <?php echo esc_attr($wppgpc_cont_align); ?>">
                                <?php if('yes' === $settings['wppgpc_btn']){ ?>
                                <div class="wppgpc-card-button">
                                    <a href="<?php if('default' === $wppgpc_choose_link){ echo the_permalink(); } elseif('coustom_link' === $wppgpc_choose_link){ echo esc_url($settings['wppgpc_main_button_link']['url']); } ?>"><?php echo esc_html__($wppgpc_main_button); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; endif; wp_reset_query();
        ?>
        </div>
    </div>