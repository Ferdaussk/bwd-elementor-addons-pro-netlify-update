<div class="woocpt_product_price">
    <?php
    if ($product->is_type('variable')) {
        $variations = $product->get_available_variations();
        $prices = array();

        foreach ($variations as $variation) {
            $variation_price = $variation['display_price']; 
            $prices[] = $variation_price; 
        }

        if (!empty($prices)) {
            $min_price = wc_price(min($prices));
            $max_price = wc_price(max($prices));
            echo $min_price . ' - ' . $max_price;
        } else {
            echo ''; // You can display a message indicating that there are no variations available
        }
    } else {
        $regular_price = wc_get_price_to_display($product, array('price' => $product->get_regular_price()));
        $sale_price = wc_get_price_to_display($product, array('price' => $product->get_sale_price()));

        $woocpt_regular_price = '<div class="woocpt-regular-price woocpt-sale-price"><del>' . wc_price($regular_price) . '</del></div><div class="woocpt-current-price"> ' . wc_price($sale_price) . '</div>';
        $woocpt_dis_price = '<div class="woocpt-regular-price"> ' . wc_price($regular_price) . '</div>';
        $woocpt_sale_check = ($product->is_on_sale()) ? $woocpt_regular_price : $woocpt_dis_price;
        $woocpt_regu_check = ($regular_price) ? $woocpt_sale_check : '';
        echo $woocpt_regu_check;
    }
    ?>
</div>
