
<div class="crpt-card-area-<?php echo esc_attr( $crtp_products_style ); ?>">
    <div class="container-fluid">
        <div class="bwd-row crtp_gap_r">
        <?php
        $crtp_all_products = new WP_Query( $crtp_args );
		if($crtp_all_products->have_posts()):
			while ( $crtp_all_products->have_posts() ) : $crtp_all_products->the_post();
				global $product; ?>
				<div class="bwd-col-lg-4 bwd-col-md-4 bwd-col-sm-6 column_number crtp_gap_c">
					<div class="crpt-card">
						<div class="crtp-sale-featured-badge <?php echo esc_attr( $crtp_featured_sale_order ) ? 'crtp-featured-sale-order' : ''; ?>">
							<?php
							// Feature Badge
							if ('yes' === $crtp_show_featured_badge && $product->is_featured()) {
								echo '<p class="crpt-featured-badge">' . esc_html($crtp_badge_featured_text) . '</p>';
							}
							// Sale Badge
							if ('yes' === $crtp_show_sale_badge && $product->is_on_sale()) {
								
								$badge_content = ('percent' === $crtp_sale_badge_type) ? 
								esc_html($crtp_sale_badge_before_percent_text) .' ' . round(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100) . '% ' . esc_html($crtp_sale_badge_after_percent_text) :
									esc_html($crtp_sale_badge_text);
									echo '<p class="crpt-sale-badge">' . $badge_content . '</p>';
									
							} ?>
						</div>
						<?php
							//Stock Badge
							if ('yes' === $crtp_show_stock_out_badge) {
								echo !$product->is_in_stock() ? '<p class="crpt-stock-badge">' . esc_html($crtp_badge_stock_out_text) . '</p>' : '<p class="crpt-stock-count">' . ($product->get_stock_quantity() > 0 ? esc_html__($crtp_badge_stock_in_number_text) . ' : ' . $product->get_stock_quantity() : esc_html__($crtp_badge_stock_in_text)) . '</p>';
							}
						 if(has_post_thumbnail()){ ?>
						 <div class="crpt-upper-item">
							<div class="crpt-imgbx">
								<?php if ($featured_image === 'yes') {
									echo $image_link_enabled ? '<a href="' . get_permalink() . '">' . $product->get_image() . '</a>' : $product->get_image();
								} ?>
							</div>
							<div class="crpt-imgbx2">
								<?php if ($featured_image === 'yes') {
									echo $image_link_enabled ? '<a href="' . get_permalink() . '">' . $product->get_image() . '</a>' : $product->get_image();
								} ?>
							</div>
						</div>
						<?php } else{echo '<div class="crpt-img_text crpt_for_one">'.esc_html__('No Feature Image', BWDEB_ROOT_AUTHOR_PRO).'</div>';} ?>
						<div class="crpt-card-icon">
							<a href="<?php echo esc_url($product->add_to_cart_url()); ?>">
								<?php \Elementor\Icons_Manager::render_icon($settings['crtp_cart_button_icon'], ['aria-hidden' => 'true']); ?>
							</a>
						</div>
						<div class="crpt-contentbx">
							<?php if ('yes' === $settings['crtp_title'] && get_the_title()) : ?>
								<div class="crpt-card-heading">
									<?php
									$title = get_the_title();
									$words = explode(' ', $title);
									if ($crtp_title_length && count($words) > $crtp_title_length) {
										$title = implode(' ', array_slice($words, 0, $crtp_title_length));
									}
									$title_output = '<' . esc_attr($crtp_title_tag) . ' class="crpt-product-title">' . esc_html($title) . '</' . esc_attr($crtp_title_tag) . '>';
									echo $crtp_title_link ? '<a href="' . get_permalink() . '">' . $title_output . '</a>' : $title_output;
									?>
								</div>
							<?php endif; ?>
							<?php if('yes' === $settings['crtp_description']){ ?>
							<div class="crpt-card-decs">
								<?php echo wp_trim_words($product->get_short_description(), $crtp_description_words, $crtp_word_trim_indi); ?>
							</div>
							<?php } ?>
							<div class="crpt-price-rating">
								<?php if ('yes' === $settings['crtp_price']) { ?>
									<div class="crpt-price-box">
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

											$crpt_regular_price = '<div class="crpt-regular-price crpt-sale-price"><del>' . wc_price($regular_price) . '</del></div><div class="crpt-current-price"> ' . wc_price($sale_price) . '</div>';
											$crpt_dis_price = '<div class="crpt-regular-price"> ' . wc_price($regular_price) . '</div>';
											$crpt_sale_check = ($product->is_on_sale()) ? $crpt_regular_price : $crpt_dis_price;
											$crpt_regu_check = ($regular_price) ? $crpt_sale_check : '';
											echo $crpt_regu_check;
										}
										?>
									</div>
								<?php } 

								include(__DIR__.'/star_rating.php'); ?>
							</div>
							<div class="crpt-category-tag">
								<?php if('yes' === $settings['crtp_cat']){ ?>
								<div class="crpt-pro-cate">
									<?php echo wc_get_product_category_list(get_the_id()); ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_tag']){ ?>
								<div class="crpt-pro-tag">
									<?php echo wc_get_product_tag_list(get_the_id()); ?>
								</div>
								<?php } ?>
							</div>
							<div class="crpt-totalsale-pubdate">
								<?php if('yes' === $settings['crtp_sell']){ ?>
								<div class="crpt-total-sale">
									<?php echo esc_html__($crtp_sell_label) .'<span>' . $product->get_total_sales().'</span>'; ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_date']){ ?>
								<div class="crpt-pub-date">
									<?php echo date( 'j M Y', strtotime( $product->get_date_created() )); ?>
								</div>
								<?php } ?>
							</div>
							<div class="crpt-btn-ptype">
								<?php if('yes' === $settings['crtp_btn']){ ?>
								<div class="crpt-card-button">
									<a href="<?php if('default' === $crtp_choose_link){ echo the_permalink(); } elseif('coustom_link' === $crtp_choose_link){ echo esc_url($crtp_main_button_link); } ?>"><?php echo esc_html__($crtp_main_button); ?></a>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_cart_btn']){ ?>
								<div class="crpt-addtocard-btn">
									<?php echo '<a href="' . $product->add_to_cart_url() . '">'. esc_html__($crtp_cart_button) .'</a>'; ?>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php
			endwhile;
			include(__DIR__.'/pagination.php');
		else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; endif;
        wp_reset_query();
        ?>
		</div>
	</div>
</div>