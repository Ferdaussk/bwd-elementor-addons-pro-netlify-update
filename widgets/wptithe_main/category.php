<?php
if('yes' === $settings['woocpt_cat_show']){
    $categories = get_the_terms( $product->get_id(), 'product_cat' );
    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
        echo '<div class="woocpt-prodCatx">';
        foreach ( $categories as $category ) {
            echo '<a class="woocpt-cat" href="' . get_term_link( $category->term_id, 'product_cat' ) . '">' . $category->name . '</a>';
        }
        echo '</div>';
    }
}
?>