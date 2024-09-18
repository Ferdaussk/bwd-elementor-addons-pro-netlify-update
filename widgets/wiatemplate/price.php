<div class="woociap-prodprice">
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
            echo 'No variations price available for this product.';
        }
    } else {
        $regular_price = wc_get_price_to_display($product, array('price' => $product->get_regular_price()));
        $sale_price = wc_get_price_to_display($product, array('price' => $product->get_sale_price()));

        $woociap_regular_price = '<div class="woociap-regular-price woociap-sale-price"><del>' . wc_price($regular_price) . '</del></div><div class="woociap-current-price"> ' . wc_price($sale_price) . '</div>';
        $woociap_dis_price = '<div class="woociap-regular-price"> ' . wc_price($regular_price) . '</div>';
        $woociap_sale_check = ($product->is_on_sale()) ? $woociap_regular_price : $woociap_dis_price;
        $woociap_regu_check = ($regular_price) ? $woociap_sale_check : '';
        echo $woociap_regu_check;
    }
    ?>
</div>
