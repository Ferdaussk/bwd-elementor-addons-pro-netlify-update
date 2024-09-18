<div class="thepsttmln_pagination_item" style="justify-content:<?php echo esc_attr__($thepsttmln_pagination_align); ?>">
        <?php
$total_pages = $wp_query->max_num_pages;
if ($total_pages > 1) {
    $current_page = max(1, get_query_var('paged'));
    if ('none' === $thepsttmln_the_pagination_type) {
        echo paginate_links(array(
            'show_all' => false,
        ));
    } elseif ('number-and-text' === $thepsttmln_the_pagination_type) {
        echo paginate_links(array(
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => $settings['thepsttmln_blog_prev_format'],
            'next_text' => $settings['thepsttmln_blog_next_format'],
        ));
    } elseif ('number' === $thepsttmln_the_pagination_type) {
        echo paginate_links(array(
            'current' => $current_page,
            'total' => $total_pages,
            'prev_next' => false,
        ));
    }
}
?> </div>