<?php if ('yes' === $settings['crtp_review']) : ?>
    <div class="crpt-rating-box">
        <?php
        $comment_count = $product->get_review_count();
        $average_rating = $product->get_average_rating();
        
        echo '<div class="crtp-star-rating text-center">';
        for ($i = 1; $i <= 5; $i++) {
            $star_class = ($i <= $average_rating) ? 'fas fa-star' : 'far fa-star';
            if ($i - 0.5 == $average_rating) {
                $star_class = 'fas fa-star-half-alt';
            }
            echo '<span class="crpt-star-icons ' . $star_class . '" aria-hidden="true"></span>';
        }
        echo '</div>';
        if('yes' === $review_count){
            if ($comment_count > 0) {
                echo '<div class="make_a_star">(' . $comment_count . ')</div>';
            }
        }
        ?>
    </div>
<?php endif; ?>
