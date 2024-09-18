<div class="bwdbp_pagination_item">
    <?php $total_pages = $wp_query->max_num_pages;
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        if('none' === $bwdbp_the_pagination_type){
            echo paginate_links(array(
                'show_all' => false,
            ));
        } elseif('number-and-text' === $bwdbp_the_pagination_type){
            echo paginate_links(array(
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text'    => __($bwdbp_blog_prev_format),
                'next_text'    => __($bwdbp_blog_next_format),
            ));
        } elseif('number' === $bwdbp_the_pagination_type){
            echo paginate_links(array(
                'current' => $current_page,
                'total' => $total_pages,
                'prev_next'          => false,
            ));
        }
    }?> 
</div> 