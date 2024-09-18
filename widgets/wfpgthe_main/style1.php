<div class="woofpt-card-area-1">
    <div class="container-fluid">
        <div class="row <?php echo esc_attr($woofpt_align); ?> woofpt_gap_r">
        <?php
        $woofpt_all_products = new WP_Query( $woofpt_args );
		if($woofpt_all_products->have_posts()):
			while ( $woofpt_all_products->have_posts() ) : $woofpt_all_products->the_post();
				global $product; ?>
				<div class="col-lg-4 col-md-4 col-sm-6 column_number woofpt_gap_c">
					<div class="woofpt-card">
					<?php $woofpt_sale_nots = $product->get_sale_price() == true?'<div class="woofpt_sale_notice">'.esc_html__($woofpt_sale_dis_text).'</div>':''; echo $woofpt_sale_dis == 'yes'?$woofpt_sale_nots:'';
						if(has_post_thumbnail()){ ?>
						<div class="woofpt-imgbx">
							<?php echo '<a href="'.get_permalink().'">' . $product->get_image().'</a>'; ?>
						</div>
						<?php } else{echo '<div class="woofpt-img_text woofpt_for_one">'.esc_html__('No Feature Image', 'creative-products').'</div>';} ?>
						<div class="woofpt-contentbx <?php echo esc_attr($woofpt_cont_align); ?>">
							<?php if('yes' === $settings['woofpt_title']){ ?>
							<div class="woofpt-card-heading"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
							<?php } ?>
							<?php if('yes' === $settings['woofpt_description']){ ?>
							<div class="woofpt-card-decs <?php echo esc_attr($woofpt_cont_align); ?>">
								<?php echo wp_trim_words($product->get_short_description(), $woofpt_description_words, $woofpt_word_trim_indi); ?>
							</div>
							<?php } ?>
							<div class="woofpt-price-rating <?php echo esc_attr($woofpt_cont_align); ?>">
								<?php if('yes' === $settings['woofpt_price']){ ?>
								<div class="woofpt-price-box">
									<?php 
									if ( $product->is_type( 'variable' ) ) {
										$variations = $product->get_available_variations();
										$variation_prices = array();
										foreach ( $variations as $variation ) {
												$variation_price = $variation['display_price'];
												if ( $variation_price && ! in_array( $variation_price, $variation_prices ) ) {
														$variation_prices[] = $variation_price;
												}
										}
										if ( count( $variation_prices ) > 1 ) {
										$min_price = min( $variation_prices );
										$max_price = max( $variation_prices );
										echo '<div class="woofpt-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>';
										} else {
												if ( ! empty( $variation_prices ) ) {
														echo wc_price( floatval( $variation_prices[0] ) );
												} else {
														$variation_stock_status = $product->get_stock_status();
														if ( 'outofstock' === $variation_stock_status ) {
																echo esc_html__('Price not available');
														} elseif ( ! empty( $variation_prices ) ) {
																echo wc_price( floatval( $variation_prices[0] ) ); // Convert the value to float before passing it to wc_price()
														}
												}
										}
								} else {
									$regular_price = $product->get_regular_price();
									$sale_price = $product->get_sale_price();
									$woofpt_regular_price = '<div class="woofpt-old-price">'.wc_price($regular_price).' </div><div class="woofpt-dis-price"> '.wc_price($sale_price).'</div>';
									$woofpt_dis_price = '<div class="woofpt-dis-price"> '.wc_price($regular_price).'</div>';
									if ( 'outofstock' === $product->get_stock_status() ) {
											echo esc_html__('Price not available');
									} else {
									$woofpt_sale_check = ($sale_price)?$woofpt_regular_price:$woofpt_dis_price;
									$woofpt_regu_check = ($regular_price)?$woofpt_sale_check:'';
									echo $woofpt_regu_check; 
									}
								}
									?>
								</div>
								<?php }
								include(__DIR__.'/../wfpgcommon/star_rating.php'); ?>
							</div>
							<div class="woofpt-category-tag <?php echo esc_attr($woofpt_cont_align); ?>">
								<?php if('yes' === $settings['woofpt_cat']){ ?>
								<div class="woofpt-pro-cate">
									<?php echo wc_get_product_category_list(get_the_id()); ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['woofpt_tag']){ ?>
								<div class="woofpt-pro-tag">
									<?php echo wc_get_product_tag_list(get_the_id()); ?>
								</div>
								<?php } ?>
							</div>
							<div class="woofpt-totalsale-pubdate <?php echo esc_attr($woofpt_cont_align); ?>">
								<?php if('yes' === $settings['woofpt_sell']){ ?>
								<div class="woofpt-total-sale">
									<?php echo esc_html__($woofpt_sell_label) .'<span>' . $product->get_total_sales().'</span>'; ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['woofpt_date']){ ?>
								<div class="woofpt-pub-date">
									<?php echo date( 'j M Y', strtotime( $product->get_date_created() )); ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['woofpt_type']){ ?>
								<div class="woofpt-product-type">
									<?php echo esc_html__($woofpt_type_label) .'<span>' . $product->get_type().'</span>'; ?>
								</div>
								<?php } ?>
							</div>
							<div class="woofpt-button-box <?php echo esc_attr($woofpt_cont_align); ?>">
								<?php if('yes' === $settings['woofpt_btn']){ ?>
								<div class="woofpt-card-button">
									<a href="<?php if('default' === $woofpt_choose_link){ echo the_permalink(); } elseif('coustom_link' === $woofpt_choose_link){ echo esc_url($settings['woofpt_main_button_link']['url']); } ?>"><?php echo esc_html__($woofpt_main_button); ?></a>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['woofpt_cart_btn']){ ?>
								<div class="woofpt-addtocard-btn">
									<?php echo '<a href="' . $product->add_to_cart_url() . '">'. esc_html__($woofpt_cart_button) .'</a>'; ?>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php
			endwhile;
			include(__DIR__.'/../wfpgcommon/pagination.php');
		else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; endif;
        wp_reset_query();
        ?>
		</div>
	</div>
</div>