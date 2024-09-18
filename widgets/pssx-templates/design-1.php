<!-- Start Essential Pricing Plan Switcher Design 1. -->

<div class="bwdpssx-main-wrapper">
	<div class="bwdpssx-design-1">
		<!-- Check Switcher Enable Or Disable. -->
		<?php if( $settings['bwdpssx_plan_switcher'] == 'yes' ) { ?>
			<div class="bwdpssx-plan-switcher">
				<label for="bwdpssx_input_switch" class="bwdpssx-switcher-text"><?php echo esc_html( $settings['bwdpssx_plan_switcher1'] ); ?></label>
				<label class="bwdpssx-switch" >
					<input type="checkbox" name="bwdpssx_input_switch" id="bwdpssx_input_switch">
					<span class="bwdpssx-slider bwdpssx-round"></span>
				</label>
				<label for="bwdpssx_input_switch" class="bwdpssx-switcher-text"><?php echo esc_html( $settings['bwdpssx_plan_switcher2'] ); ?></label>
			</div> 
		<?php } ?>
		<div class="bwdpssx-plan-features-wrapper">
			<!-- Add Grid Class. -->
			<?php
				if( $settings['bwdpssx_grid_columns'] != "" ){
					$grid_class = "elementor-grid-".$settings['bwdpssx_grid_columns']."";
				}
			?>
			<ul class="bwdpssx-plan-list elementor-grid <?php echo esc_html( $grid_class );?>">
				<?php
				$bwdpssx_plan = 0;  
				for ($i = 1; $i <= $settings['bwdpssx_plan_count']; $i++) { ?>
					<li class="bwdpssx-plan-item bwdpssx-plan-<?php echo esc_attr($bwdpssx_plan) ?>">
						<!-- Check Switcher Enable Or Disable. -->
						<?php
						if( $settings['bwdpssx_plan_switcher'] == 'yes' ) {
							$value_length = 2;
						} else {
							$value_length = 1;
						}
						for ($k = 1; $k <= $value_length; $k++) {
							if( $settings['bwdpssx_'.$k.'_plan_label_'.$i.''] != "" ) {
								$highlight_plan = 'bwdpssx-highlight-plan';
							} else {
								$highlight_plan = '';
							}
							?>
							<div class="bwdpssx-plan bwdpssx-plan-item-<?php echo esc_html( $k );?> <?php echo esc_html( $highlight_plan );?>">
								<div class="bwdpssx-title-price-wrapper">
									<!-- Check Title Is Not Blank. -->
									<?php if ( $settings['bwdpssx_'.$k.'_plan_title_'.$i.''] != "" ) { ?>
										<div class="bwdpssx-heading-wrapper"> 
											<?php $bwdpssx_title_tag = $settings['bwdpssx_'.$k.'_plan_title_tag_'.$i.'']; ?>
											<<?php echo esc_attr($bwdpssx_title_tag); ?> class="bwdpssx-plan-heading"><?php echo esc_html( $settings['bwdpssx_'.$k.'_plan_title_'.$i.''] ); ?></<?php echo esc_attr($bwdpssx_title_tag); ?>>
										</div>
									<?php }
									// Label Position.
									if ($settings['bwdpssx_label_position'] == 'ltr') {
										$bwdpssx_label_position = 'bwdpssx-label-left';
									} else {
										$bwdpssx_label_position = 'bwdpssx-label-right';
									}
									// Label.
									if ( $settings['bwdpssx_'.$k.'_plan_label_'.$i.''] != "" ) { ?>
										<div class="bwdpssx-plan-label <?php echo $settings['bwdpssx_label_design']. ' ' . esc_attr($bwdpssx_label_position); ?>"><?php echo esc_html( $settings['bwdpssx_'.$k.'_plan_label_'.$i.''] ); ?></div>
									<?php }
									// Check Prices Are Not Blank.
									if ($settings['bwdpssx_price_line_through'] == 'yes') {
										$bwdpssx_price_line = 'bwdpssx-price-line';
									} else {
										$bwdpssx_price_line = '';
									}
									if ( 'bwdpssx_custom' !== $settings['bwdpssx_currency_symbol'] ) {
										$bwdpssx_symbol = bwdpssx_get_currency_symbol($settings['bwdpssx_currency_symbol']);
									} else {
										$bwdpssx_symbol = $settings['bwdpssx_currency_text_symbol'];
									}
									if ( ( $settings['bwdpssx_'.$k.'_plan_price_'.$i.''] != "" ) || ( $settings['bwdpssx_'.$k.'_plan_sale_price_'.$i.''] != "" ) ) { ?>
										<div class="bwdpssx-prices-wrapper">
											<!-- Check Sale Price Is Not Blank. -->
											<?php if ( $settings['bwdpssx_'.$k.'_plan_sale_price_'.$i.''] != "" ) { ?>
												<div class="bwdpssx-sale-price">
													<span class="bwdpssx-currency-symbol"><?php echo esc_html($bwdpssx_symbol); ?></span>
													<p><?php echo esc_html( $settings['bwdpssx_'.$k.'_plan_sale_price_'.$i.'']. ' ' ); ?></p>
												</div>
											<?php }
											// Check Normal Price Is Not Blank.
											if ( $settings['bwdpssx_'.$k.'_plan_price_'.$i.''] != "" ) { ?>
												<div class="bwdpssx-normal-price <?php echo esc_attr($bwdpssx_price_line); ?>">
													<span>/</span>
													<p><?php echo esc_html( $settings['bwdpssx_'.$k.'_plan_price_'.$i.''] ); ?></p>
												</div>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
								<div class="bwdpssx-content">
									<!-- Check Description Is Not Blank. -->
									<?php if( $settings['bwdpssx_'.$k.'_plan_description_'.$i.''] != "" ) { ?>
										<div class="bwdpssx-description-wrapper">
											<p class="bwdpssx-plan-description"><?php echo esc_html( $settings['bwdpssx_'.$k.'_plan_description_'.$i.''] ); ?></p>
										</div>
									<?php }
									// Check Plan Button Text Is Not Blank.
									if( $settings['bwdpssx_'.$k.'_button_text_'.$i.''] != "" && $settings['bwdpssx_btn_position'] == "above_feature" ) { ?>
										<div class="bwdpssx-btn-wrapper">
											<?php
												$button_link = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['url'];
												$target = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['is_external'] ? ' target="_blank"' : '';
												$rel = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['nofollow'] ? ' rel="nofollow"' : ''; ?>
											<a href="<?php echo esc_url($button_link); ?>" class="bwdpssx-plan-btn" <?php echo esc_attr($target); echo esc_attr($rel);?>><?php echo esc_html( $settings['bwdpssx_'.$k.'_button_text_'.$i.''] ); ?></a>
										</div>
									<?php } 
									// Check Feature Title Is Not Blank.
									if( $settings['bwdpssx_'.$k.'_feature_title_'.$i.''] != "" ) { ?>
										<div class="bwdpssx-features-title-wrapper">
											<?php $bwdpssx_feature_title_tag = $settings['bwdpssx_'.$k.'_feature_title_tag_'.$i.'']; ?>
											<<?php echo esc_attr($bwdpssx_feature_title_tag); ?> class="bwdpssx-plan-features-title"><?php echo esc_html( $settings['bwdpssx_'.$k.'_feature_title_'.$i.''] ); ?></<?php echo esc_attr($bwdpssx_feature_title_tag); ?>>
										</div>
									<?php }
									// Check Feature List Is Array Or Object.
									if( is_array($settings['bwdpssx_'.$k.'_feature_list_'.$i.'']) || is_object($settings['bwdpssx_'.$k.'_feature_list_'.$i.'']) ) { ?>
										<div class="bwdpssx-features-wrapper">
											<ul class="bwdpssx-features-list">
												<?php
												foreach($settings['bwdpssx_'.$k.'_feature_list_'.$i.''] as $list) {   
													// Check Feature Icon Is Include Or Exclude.
													if( $list['bwdpssx_feature_icon_include_exclude'] == "yes" ) {
														$icon_class = 'bwdpssx-icon-include';
													} else {
														$icon_class = 'bwdpssx-icon-exclude';
													}
													// Check Feature Icon Is Array And Feature Text Is Not Blank.
													if( is_array($list['bwdpssx_feature_icon']) || $list['bwdpssx_feature_text'] != "" ) { ?>
														<li class="bwdpssx-features-item">
															<!-- Check Feature Icon Is Array. -->
															<?php if( is_array($list['bwdpssx_feature_icon']) ) { ?>
																	<?php \Elementor\Icons_Manager::render_icon($list['bwdpssx_feature_icon'], ['aria-hidden' => 'true', 'class' => 'bwdpssx_feature_icon '.esc_html($icon_class).'']);?>
															<?php }
															// Check Feature Text Is Not Blank.
															if( $list['bwdpssx_feature_text'] != "" ) { ?>
																<span class="bwdpssx-feature-text <?php echo esc_attr($icon_class); ?>"><?php echo esc_html( $list['bwdpssx_feature_text'] ); ?></span>
															<?php } ?>
														</li>
													<?php } ?>
													<?php
												} ?>
											</ul>
										</div>
									<?php }
									// Check Plan Button Text Is Not Blank.
									if( $settings['bwdpssx_'.$k.'_button_text_'.$i.''] != "" && $settings['bwdpssx_btn_position'] == "under_feature" ) { ?>
										<div class="bwdpssx-btn-wrapper">
											<?php
												$button_link = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['url'];
												$target = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['is_external'] ? ' target="_blank"' : '';
												$rel = $settings['bwdpssx_'.$k.'_plan_link_'.$i.'']['nofollow'] ? ' rel="nofollow"' : ''; ?>
											<a href="<?php echo esc_url($button_link); ?>" class="bwdpssx-plan-btn" <?php echo esc_attr($target); echo esc_attr($rel);?>><?php echo esc_html( $settings['bwdpssx_'.$k.'_button_text_'.$i.''] ); ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php
						} ?>
					</li>
					<?php
					$bwdpssx_plan++;
				} ?>
			</ul>
		</div>
	</div>
</div>
<!-- End Essential Pricing Plan Switcher Design 1. -->