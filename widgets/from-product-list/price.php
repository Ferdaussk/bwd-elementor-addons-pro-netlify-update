<div class="crtplst_product_price">
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

        $crtplst_regular_price = '<div class="crtplst-regular-price crtplst-sale-price"><del>' . wc_price($regular_price) . '</del></div><div class="crtplst-current-price"> ' . wc_price($sale_price) . '</div>';
        $crtplst_dis_price = '<div class="crtplst-regular-price"> ' . wc_price($regular_price) . '</div>';
        $crtplst_sale_check = ($product->is_on_sale()) ? $crtplst_regular_price : $crtplst_dis_price;
        $crtplst_regu_check = ($regular_price) ? $crtplst_sale_check : '';
        echo $crtplst_regu_check;
    }
    ?>
</div>
