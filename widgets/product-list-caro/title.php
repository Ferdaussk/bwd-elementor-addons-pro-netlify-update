<div class="bwdcrtplst_product_title">
    <?php
    $title = get_the_title();
    $words = explode(' ', $title);
    if ($bwdcrtplst_title_length && count($words) > $bwdcrtplst_title_length) {
        $title = implode(' ', array_slice($words, 0, $bwdcrtplst_title_length));
    }
    $title_output = '<' . esc_attr($bwdcrtplst_title_tag) . ' class="bwdcrtplst_title">' . esc_html($title) . '</' . esc_attr($bwdcrtplst_title_tag) . '>';
    echo $bwdcrtplst_title_link ? '<a href="' . get_permalink() . '">' . $title_output . '</a>' : $title_output;
    ?>
</div>