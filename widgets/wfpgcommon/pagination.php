
		<div class="woofpt_pagination_item <?php echo esc_attr($woofpt_pagination_align); ?>">
			<?php
			$total_pages = $woofpt_all_products->max_num_pages;
			if ($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				if('none' === $woofpt_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('woofpt-number-and-text' === $woofpt_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => $woofpt_blog_prev_format,
						'next_text' => $woofpt_blog_next_format,
					));
				} elseif('number' === $woofpt_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_next' => false,
					));
				}
			}
			?> </div>