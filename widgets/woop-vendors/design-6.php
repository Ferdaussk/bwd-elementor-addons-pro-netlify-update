<?php 


// Custom Menu Type.
if($settings['bwdwpvx_product_source'] == 'custom') {
    $bwdwpvx_symbol = ''; 
    foreach ($settings['bwdwpvx_lists'] as $items => $item) {
        $bwdwpvx_show_highlight        = !empty($item['bwdwpvx_show_highlight']) ? $item['bwdwpvx_show_highlight'] : '';
        $bwdwpvx_title                 = !empty($item['bwdwpvx_title']) ? $item['bwdwpvx_title'] : '';
        $bwdwpvx_list_content          = !empty($item['bwdwpvx_list_content']) ? $item['bwdwpvx_list_content'] : '';
        $bwdwpvx_image                 = !empty($item['bwdwpvx_image']) ? $item['bwdwpvx_image']['url'] : '';
        $bwdwpvx_label                 = !empty($item['bwdwpvx_label']) ? $item['bwdwpvx_label'] : '';
        $bwdwpvx_sale_price            = !empty($item['bwdwpvx_sale_price']) ? $item['bwdwpvx_sale_price'] : '';
        $bwdwpvx_regular_price         = !empty($item['bwdwpvx_regular_price']) ? $item['bwdwpvx_regular_price'] : '';
        $bwdwpvx_link                  = !empty($item['bwdwpvx_link']) ? $item['bwdwpvx_link']['url'] : '';
        $bwdwpvx_show_customer_rating  = !empty($item['bwdwpvx_show_customer_rating']) ? $item['bwdwpvx_show_customer_rating'] : '';
        $bwdwpvx_show_btn              = !empty($item['bwdwpvx_show_btn']) ? $item['bwdwpvx_show_btn'] : '';
        $bwdwpvx_show_label            = !empty($item['bwdwpvx_show_label']) ? $item['bwdwpvx_show_label'] : '';
        $bwdwpvx_customer_rating       = !empty($item['bwdwpvx_customer_rating']) ? $item['bwdwpvx_customer_rating'] : '';
        $bwdwpvx_target                = $item['bwdwpvx_link']['is_external'] ? ' target=_blank' : '';
        $bwdwpvx_rel                   = $item['bwdwpvx_link']['nofollow'] ? ' rel=nofollow' : '';
        $bwdwpvx_currency_position     = $settings['bwdwpvx_currency_position'];
        $bwdwpvx_currency_symbol       = $settings['bwdwpvx_currency_symbol'];
        $bwdwpvx_currency_text_symbol  = $settings['bwdwpvx_currency_text_symbol']; ?>
        <div class="bwdwpvx-design-6">
            <!-- Label -->
            <?php
            //If Show Label is enabled.
            if ($item['bwdwpvx_show_label'] == 'yes') { ?>
                <div class="bwdwpvx-label"><?php echo esc_attr($bwdwpvx_label); ?></div>
            <?php } 
            //If Product Highlight enabled.
            if ($bwdwpvx_show_highlight == 'yes') {
                $highlightclass = 'bwdwpvx-highlight';
            } else { 
                $highlightclass = '';
            }?>
            <div class="bwdwpvx-item-container <?php echo esc_attr($highlightclass); ?>">
            <?php
                //If Show Image is enabled.
                if ($item['bwdwpvx_show_custom_image'] == 'yes') { ?>
                    <div class="bwdwpvx-image"><img src="<?php echo esc_url($bwdwpvx_image); ?>"></div>
                <?php } 
                //If Show Icon is enabled.
                if ($item['bwdwpvx_show_custom_icon'] == 'yes') { ?>
                    <div class="bwdwpvx-icon"><?php \Elementor\Icons_Manager::render_icon($item['bwdwpvx_icon'], ['aria-hidden' => 'true']); ?></div>
                <?php } ?>
                <div class="bwdwpvx-content">
                    <div class="bwdwpvx-text-center">
                        <!-- Title & Price -->
                        <div class="bwdwpvx-title-price-wrapper">
                            <!-- Title -->
                            <div class="bwdwpvx-title-wrapper">
                                <h2 class="bwdwpvx-title"><?php echo esc_attr($bwdwpvx_title); ?></h2>
                            </div>
                            <!-- Separator -->
                            <div class="bwdwpvx-separator"></div>
                            <!-- Currency Symbol -->
                            <?php
                            if ('bwdwpvx_custom' !== $settings['bwdwpvx_currency_symbol']) {
                                $bwdwpvx_symbol = bwdwpvx_get_currency_symbol($bwdwpvx_currency_symbol);
                            } else {
                                $bwdwpvx_symbol = $settings['bwdwpvx_currency_text_symbol'];
                            } ?>
                            <!-- Price -->
                            <?php
                            //Position of Currency Symbol.
                            if ($bwdwpvx_currency_position == 'before') {
                                $currencyclass = 'beforecurrency';
                            } else { 
                                $currencyclass = 'aftercurrency';
                            }?>
                            <div class="bwdwpvx-price-wrapper">
                                <div class="bwdwpvx-sale-price">
                                    <?php
                                    //Sale Price.
                                    if(!empty($bwdwpvx_sale_price)) { ?>
                                        <span class="bwdwpvx-currency-symbol <?php echo esc_attr($currencyclass); ?>"><?php echo esc_attr($bwdwpvx_symbol); ?></span>
                                        <div class="bwdwpvx-price"><?php echo esc_attr($bwdwpvx_sale_price); ?></div> 
                                    <?php } ?>
                                </div>
                                <?php if($bwdwpvx_sale_price !== '') {
                                    $line_through = 'bwdwpvx-line';
                                } else {
                                    $line_through = '';
                                } ?>
                                <div class="bwdwpvx-regular-price <?php echo esc_attr($line_through); ?>">
                                    <?php
                                    //Regular Price.
                                    if(!empty ($bwdwpvx_regular_price)) { ?>
                                    <span class="bwdwpvx-currency-symbol <?php echo esc_attr($currencyclass); ?>"><?php echo esc_attr($bwdwpvx_symbol); ?></span>
                                    <div class="bwdwpvx-price"><?php echo esc_attr($bwdwpvx_regular_price); ?></div> 
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="bwdwpvx-description">
                            <p><?php echo esc_attr($bwdwpvx_list_content); ?></p>
                        </div>
                        <!-- Rate & Button -->
                        <div class="bwdwpvx-rate-btn-wrapper">
                            <!-- Rating -->
                            <?php
                            //if show rating enabled. 
                            if ($item['bwdwpvx_show_customer_rating'] == 'yes') { ?>
                                <div class="bwdwpvx-rating">
                                    <?php
                                    for($i=1; $i<= $bwdwpvx_customer_rating; $i++) { ?>
                                        <i class='fa fa-star star-fill'></i>
                                        <?php 
                                    } 
                                    for($i=5; $i > $bwdwpvx_customer_rating; $i--) { ?>
                                        <i class='fa fa-star-o star'></i> 
                                        <?php
                                    } ?>
                                </div>
                            <?php } 
                            //show Button enabled.
                            if ($item['bwdwpvx_show_btn'] == 'yes') { ?>
                                <div class="bwdwpvx-button-wrapper">
                                    <div class="bwdwpvx-button">
                                        <a class="bwdwpvx-button-text" href="<?php echo esc_url($bwdwpvx_link); ?>" <?php echo esc_attr($bwdwpvx_target); echo esc_attr($bwdwpvx_rel); ?>><?php echo esc_attr($item['bwdwpvx_button']); ?></a>                        
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    }
}

//WooCommerce Menu Type.
if($settings['bwdwpvx_product_source'] == 'woocommerce') { 
    global $product; ?>
    <div class="bwdwpvx-design-6">
        <!-- Label -->
        <?php
        //if show sale label enabled.
        if ($settings['bwdwpvx_show_label'] == 'yes') { ?>
            <div class="bwdwpvx-ribbon">
                <?php
                if ($product->is_on_sale()){ ?>
                    <span class="bwdwpvx-label"><?php echo esc_attr($settings['bwdwpvx_sale_label']); ?></span>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="bwdwpvx-item-container bwdwpvx-woocommerce">
            <?php
            //If Show Image enabled.
            if ($settings['bwdwpvx_show_image'] == 'yes') { ?>
                <div class="bwdwpvx-layout-img"><?php
                    if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink(); ?>" class="bwdwpvx-img" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail($settings['bwdwpvx_product_image_size_size']); ?></a>
                        <?php 
                    } ?>
                </div>
            <?php } ?>
            <div class="bwdwpvx-content">
                <div class="bwdwpvx-text-center">
                    <!-- Title, Price & Separator -->
                    <div class="bwdwpvx-title-price-wrapper">
                        <!-- Title -->
                        <?php
                        //If Show Title enabled.
                        if ($settings['bwdwpvx_show_title'] == 'yes') { ?>
                            <div class="bwdwpvx-title-wrapper">
                                <h2 class="bwdwpvx-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        <?php } ?>
                        <!-- Separator -->
                        <div class="bwdwpvx-separator"></div>
                        <!-- Prices -->
                        <div class="bwdwpvx-price-wrapper"> 
                            <?php
                            //If Product is simple and show price enabled.
                            if ($product->is_type('simple') && $product->is_on_sale()) {
                                if ($product->get_sale_price()) {
                                    //If Product is simple and show sale price enabled.
                                    if ($product->get_sale_price() && $settings['bwdwpvx_show_sale_price'] == 'yes') {?>
                                        <b class="bwdwpvx-sale-price"><span><?php echo esc_html(get_woocommerce_currency_symbol());?></span><?php echo esc_attr($product->get_sale_price()); ?></b>
                                        <?php
                                    }
                                    if($settings['bwdwpvx_show_regular_price'] == 'yes') {
                                        $line_through = 'bwdwpvx-line';
                                    } else {
                                        $line_through = '';
                                    }
                                    //If Product is simple and show regular price enabled.
                                    if ($product->get_sale_price() && $settings['bwdwpvx_show_regular_price'] == 'yes') {?>
                                        <div class="bwdwpvx-regular-price <?php echo esc_attr($line_through); ?>"><span><?php echo esc_html(get_woocommerce_currency_symbol());?></span><?php echo esc_attr($product->get_regular_price());?></div>
                                        <?php
                                    }
                                }
                                //If Product is simple and has only regular price enabled.
                                else { ?>
                                    <span><?php echo esc_html(get_woocommerce_currency_symbol()); ?></span><?php echo esc_attr($product->get_regular_price()); ?>
                            <?php }
                            } else { 
                            //If Product is with Variation and show price enabled.
                            if ($settings['bwdwpvx_show_regular_price'] == 'yes') {?>
                                <div class="bwdwpvx-regular-price">
                                    <?php echo wp_kses_post($product->get_price_html()); ?> 
                                </div>
                            <?php } 
                            } ?>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="bwdwpvx-description">
                        <p>
                            <?php
                            //If Show Description full.
                            if ($settings['bwdwpvx_show_description'] == 'full') {
                                $content = $product->get_description();
                            }
                            //If Show Description full.
                            elseif ($settings['bwdwpvx_show_description'] == 'short') {
                                $content = $product->get_short_description();
                            } else {
                                $content = '';
                            }
                            echo esc_attr($content);
                            ?>
                        </p>
                    </div>
                    <!-- Rate & Button -->
                    <div class="bwdwpvx-rate-btn-wrapper">
                        <!-- Rating -->
                        <?php
                        //If Show Rating enabled.
                        if ($settings['bwdwpvx_show_rating'] == 'yes') {
                            $average = $product->get_average_rating();
                            echo wp_kses_post('<div class="bwdwpvx-star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong></span></div>');
                        }
                        //If Show Add-to-cart button enabled.
                        if ($settings['bwdwpvx_show_cart_button'] == 'yes') { ?>
                            <div class="bwdwpvx-button-wrapper">
                                <div class="bwdwpvx-button"><?php 
                                    //Text for Add-to-cart in Product variation.
                                    if ($settings['bwdwpvx_show_custom_button'] == 'yes') {
                                        if ($product->is_type('simple')) {
                                            $add_to_cart = $settings['bwdwpvx_simple_button_text'];
                                        } elseif ($product->is_type('variable')) {
                                            $add_to_cart = $settings['bwdwpvx_variable_button_text'];
                                        } elseif ($product->is_type('grouped')) {
                                            $add_to_cart = $settings['bwdwpvx_grouped_button_text'];
                                        } elseif ($product->is_type('external')) {
                                            $add_to_cart = $settings['bwdwpvx_external_button_text'];
                                        }
                                    } else {
                                        $add_to_cart = $product->add_to_cart_text();
                                    }   
                                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                    sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="bwdwpvx-button-text %s">%s</a>',
                                    esc_url($product->add_to_cart_url()),
                                    esc_attr($product->get_id()),
                                    esc_attr($product->get_sku()),
                                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                                    esc_html($add_to_cart)
                                    ),
                                    $product );
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
} ?>