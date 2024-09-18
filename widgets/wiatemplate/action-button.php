

<?php if('yes' === $settings['woociap_cart_btn']): ?>
    <div class="woociap_cart_bttn">
        <a href="<?php echo esc_url(('cart' === $woociap_the_cart_type || 'icon' === $woociap_the_cart_type) ? $product->add_to_cart_url() : get_permalink()); ?>" class="woociap-cartBtn">
            <?php 
            echo ('cart' === $woociap_the_cart_type) ? esc_html__($woociap_cart_button) : 
                (('buy' === $woociap_the_cart_type) ? esc_html__($woociap_details_btn_text) : '');

            if ('icon' === $woociap_the_cart_type) {
                \Elementor\Icons_Manager::render_icon($settings['woociap_cart_button_icon'], ['aria-hidden' => 'true']);
            } 
            ?>
        </a>
    </div>
<?php endif; ?>
