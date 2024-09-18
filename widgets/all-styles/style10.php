<div class="woocptmln-timeline-sixteen woocptmln-10 woocptmln-common">
    <div class="woocptmln-timeline-wrapper">
        <div class="woocptmln-progress-line woocptmln-pb-cmn"></div>
        <div class="woocptmln-timeline-item-container">
            <?php
    $woocptmln_all_products = new WP_Query( $woocptmln_args ); 
    if($woocptmln_all_products->have_posts()):
        while ( $woocptmln_all_products->have_posts() ) : $woocptmln_all_products->the_post();
            global $product;
                ?>
                <div class="woocptmln-timeline-item">
                    <div class="woocptmln-timeline-item-inner woocptmln-shape-one">
                    <div class="woocptmln-timeline-header woocptmln-shape-two woocptmln-content-box woocptmln-timeline-box-bgc-cmmn">
                        <div class="woocptmln-timeline-icon">
                            <i class="woocptmln-icon <?php echo $item['woocptmln_TL_icon']['value'];?>"></i>
                        </div>
                        <div class="woocptmln-timeline-time-wrapper">
                        <?php 
                            $woocptmln_date_wrap = '<div class="woocptmln-timeline-date woocptmln-shape-one woocptmln-extra-meta">'.date( 'j M Y', strtotime( $product->get_date_created() )).'</div>';
                            $woocptmln_extra_date = ('yes' === $woocptmln_date)?$woocptmln_date_wrap:'';
                            echo $woocptmln_extra_date;
                        ?>
                        </div>
                    </div>
                    <div class="woocptmln-timeline-content">
                    <?php 
                        $wooiap_title_link_check = ('yes' === $woocptmln_title_link)?'<a href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
                        $wooiap_title_check = '<div class="woocptmln-timeline-title" style="text-align:'.$settings['woocptmln_title_alignment'].'"> ' . $wooiap_title_link_check . ' </div>';
                        $wooiap_title_show = ('yes' === $woocptmln_title)?$wooiap_title_check:''; echo $wooiap_title_show;
                        echo ('yes' === $woocptmln_wrapper)?'<a href="'.get_the_permalink().'">'.$product->get_image().'</a>':$product->get_image();
                        ?>
                        <div class="woocptmln-timeline-for-content">
                        <?php
                        // ======================= Texo
                        // Cat
                        $woocptmln_url = plugin_dir_url( '../../category/sk');
                        $woocptmln_div = '<div class="woocptmln-prodCat"><a href="'.esc_url($woocptmln_url.$woocptmln_cat_showing_column).'">'.$woocptmln_cat_showing_column;
                        $woocptmln_cat_switch = ('yes' === $woocptmln_cat)?$woocptmln_div:'';
                        $woocptmln_cat_a_close = ('yes' === $woocptmln_cat)?'</a></div>':'';
                        echo $woocptmln_cat_switch. $woocptmln_cat_a_close;
                        // Price
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
                    echo '<div class="wppgpc-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>';
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
                    $woocptmln_regular_price = '<del class="woocptmln-regularPrice woocptmln-price">'.wc_price($regular_price).' </del><div class="woocptmln-salePrice woocptmln-price"> '.wc_price($sale_price).'</div>';
                    $woocptmln_dis_price = '<div class="woocptmln-salePrice woocptmln-price"> '.wc_price($regular_price).'</div>';
                    if ( 'outofstock' === $product->get_stock_status() ) {
                        echo esc_html__('Price not available');
                    } else {
                        $woocptmln_sale_check = ($sale_price)?$woocptmln_regular_price:$woocptmln_dis_price;
                        $woocptmln_regu_check = ($regular_price)?$woocptmln_sale_check:'';
                        $woocptmln_price_wraper = '<div class="woocptmln-prodprice">'.$woocptmln_regu_check.'</div>';
                        $woocptmln_price_wrap_check = ('yes' === $woocptmln_price)?$woocptmln_price_wraper:'';
                        echo $woocptmln_price_wrap_check;
                    }
                }
                        // Rating
                        if('yes' === $settings['woocptmln_review']){
                        echo '<div class="woocptmln-prodRatingWrap">';
                            $comment_id = $product->get_review_count();
                            $woocptmln_star_number = $settings['woocptmln_review_star_number'];
                            $star_number = $woocptmln_star_number - 1;
                            $woocptmln_star_icon  = '<div class="woocptmln-star-rating">';
                            if(!$comment_id){
                                $woocptmln_star_icon .= str_repeat( '<div class="woocptmln-star-icons far fa-star" aria-hidden="true"></div>', $woocptmln_star_number);
                            }else{
                                $woocptmln_star_icon .= str_repeat( '<div class="woocptmln-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woocptmln-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                            }
                            $woocptmln_star_icon .= '</div>';
                            echo $woocptmln_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>';
                        echo '</div>';
                        }
                        $woocptmln_sale_wrap = '<div class="woocptmln-prodSaleCount woocptmln-extra-meta">'.esc_html__($woocptmln_sale_label) .'<span>' . $product->get_total_sales().'</span></div>';
                        $woocptmln_extra_sale  = ('yes' === $woocptmln_sale)?$woocptmln_sale_wrap:'';
                        echo $woocptmln_extra_sale;
                        $woocptmln_type_wrap = '<div class="woocptmln-prodType woocptmln-extra-meta">'.esc_html__($woocptmln_type_label) .'<span>' . $product->get_type().'</span></div>';
                        $woocptmln_extra_type  = ('yes' === $woocptmln_type)?$woocptmln_type_wrap:'';
                        echo $woocptmln_extra_type;
                        // =======================
                        // Description
                        $woocptmln_description = wp_trim_words($product->get_short_description(), $woocptmln_description_words, $woocptmln_word_trim_indi);
                        $woocptmln_description_wrap = '<div class="woocptmln-desc"><p class="woocptmln-timeline-desc">'.$woocptmln_description.'</p></div>';
                        $woocptmln_description_show = ('yes' === $woocptmln_description_swtcher)?$woocptmln_description_wrap:'';
                        echo $woocptmln_description_show;
                        // Cart
                        $woocptmln_cart_text = '<a href="'.$product->add_to_cart_url().'" class="woocptmln-cartBtn">'.esc_html__($woocptmln_cart_button).'</a>';
                    $woocptmln_cart_button_icon = ($settings['woocptmln_cart_type'] == 'icon')?$settings['woocptmln_cart_button_icon']['value']:'';
                        $woocptmln_cart_icon = '<a href="'.$product->add_to_cart_url().'" class="woocptmln-sscartbtndd"><i class="woocptmln-cartBtn '.esc_attr($woocptmln_cart_button_icon).'"></i></a>';
                        $woocptmln_cart_T_I = ('text' === $woocptmln_cart_type)?$woocptmln_cart_text:$woocptmln_cart_icon;
                        $woocptmln_cart_wrap_html = '<div class="woocptmln-atcart-btn">'.$woocptmln_cart_T_I.'</div>';
                        $woocptmln_cart_wrap = ('yes' === $woocptmln_cart_btn)?$woocptmln_cart_T_I:'';
                        echo $woocptmln_cart_wrap;
                    ?>
                    </div>
                    </div>
                    </div>
                </div>
                <?php
        endwhile;
        include(__DIR__.'/../wptimcommon/pagination.php');
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; 
    endif;
        wp_reset_query();
        ?>
        </div>
    </div>
</div>