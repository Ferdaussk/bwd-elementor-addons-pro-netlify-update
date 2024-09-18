
		<div class="crtp_pagination_item <?php echo esc_attr($crtp_pagination_align); ?>">
			<?php
			$total_pages = $crtp_all_products->max_num_pages;
			if ($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				if('none' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('crtp-number-and-text' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => $crtp_blog_prev_format,
						'next_text' => $crtp_blog_next_format,
					));
				} elseif('number' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_next' => false,
					));
				}
			}
			?> </div>