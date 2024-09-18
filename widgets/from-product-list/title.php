<div class="crtplst_product_title">
    <?php
    $title = get_the_title();
    $words = explode(' ', $title);
    if ($crtplst_title_length && count($words) > $crtplst_title_length) {
        $title = implode(' ', array_slice($words, 0, $crtplst_title_length));
    }
    $title_output = '<' . esc_attr($crtplst_title_tag) . ' class="crtplst_title">' . esc_html($title) . '</' . esc_attr($crtplst_title_tag) . '>';
    echo $crtplst_title_link ? '<a href="' . get_permalink() . '">' . $title_output . '</a>' : $title_output;
    ?>
</div>