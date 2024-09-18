

<?php if('yes' === $settings['woocpt_cart_btn']): ?>
    <div class="woocpt_cart_bttn">
        <a href="<?php echo esc_url(('cart' === $woocpt_the_cart_type || 'icon' === $woocpt_the_cart_type) ? $product->add_to_cart_url() : get_permalink()); ?>" class="woocpt-cartbtn">
            <?php 
            echo ('cart' === $woocpt_the_cart_type) ? esc_html__($woocpt_cart_button) : 
                (('buy' === $woocpt_the_cart_type) ? esc_html__($woocpt_details_btn_text) : '');

            if ('icon' === $woocpt_the_cart_type) {
                \Elementor\Icons_Manager::render_icon($settings['woocpt_cart_button_icon'], ['aria-hidden' => 'true']);
            } 
            ?>
        </a>
    </div>
<?php endif; ?>
