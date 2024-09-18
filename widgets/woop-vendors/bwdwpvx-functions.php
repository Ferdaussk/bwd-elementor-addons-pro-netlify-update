<?php
/**
 * Return product category array.
 * 
 * @access public
 * @since  1.0
 */

if (!function_exists('bwdwpvx_product_categories')) {
    function bwdwpvx_product_categories() {
        $terms = get_terms(
                array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                )
        );
        $options = array();
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $options[$term->term_id] = $term->name;
            }
        }
        return $options;
    }
}

/**
 * Return product tags array.
 * 
 * @access public
 * @since  1.0
 */
if (!function_exists('bwdwpvx_product_tags')) {
    function bwdwpvx_product_tags() {
        $terms = get_terms(
                array(
                    'taxonomy' => 'product_tag',
                    'hide_empty' => true,
                )
        );
        $options = array();
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $options[$term->term_id] = $term->name;
            }
        }
        return $options;
    }
}

/**
 * Return Currency Symbol.
 * 
 * @access public
 * @since  1.0
 */
if (!function_exists('bwdwpvx_get_currency_symbol')) {
    function bwdwpvx_get_currency_symbol( $bwdwpvx_symbol_name ) {
        $bwdwpvx_symbols = [
            'dollar'        => '&#36;',
            'euro'          => '&#128;',
            'franc'         => '&#8355;',
            'pound'         => '&#163;',
            'ruble'         => '&#8381;',
            'shekel'        => '&#8362;',
            'baht'          => '&#3647;',
            'yen'           => '&#165;',
            'won'           => '&#8361;',
            'guilder'       => '&fnof;',
            'peso'          => '&#8369;',
            'lira'          => '&#8356;',
            'rupee'         => '&#8360;',
            'indian_rupee'  => '&#8377;',
            'real'          => 'R$',
            'krona'         => 'kr',
        ];
        return isset( $bwdwpvx_symbols[ $bwdwpvx_symbol_name ] ) ? $bwdwpvx_symbols[ $bwdwpvx_symbol_name ] : '';
    }
}

/**
 * Product Menu Type.
 * 
 * @access public
 * @since  1.0
 */
if (!function_exists('bwdwpvx_menu_type')) {
    function bwdwpvx_menu_type() {
        $menu_types['select_type'] = "Select Type";
        $menu_types['custom']      = "Custom";
        if (class_exists( 'WooCommerce' )){
            $menu_types['woocommerce'] = "WooCommerce";
        }
        return $menu_types;
    }
}