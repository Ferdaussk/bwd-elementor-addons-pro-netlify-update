
		<div class="crtplst_pagination_item <?php echo esc_attr($crtplst_pagination_align); ?>">
			<?php
			$total_pages = $crtplst_all_products->max_num_pages;
			if ($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				if('none' === $crtplst_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('crtplst-number-and-text' === $crtplst_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => $crtplst_blog_prev_format,
						'next_text' => $crtplst_blog_next_format,
					));
				} elseif('number' === $crtplst_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_next' => false,
					));
				}
			}
			?> </div>