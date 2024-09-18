
		<div class="crtp_pagination_item">
			<?php
				
			$total_pages = $crtp_all_products->max_num_pages;
			if ($total_pages > 1){
				if('none' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('crtp-number-and-text' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'total' => $total_pages,
						'prev_text' => $crtp_blog_prev_format,
						'next_text' => $crtp_blog_next_format,
						'type' => 'list',
						'show_all' => false,
						'mid_size' => 1
					));
				} elseif('number' === $crtp_the_pagination_type){
					echo paginate_links(array(
						'total' => $total_pages,
						'prev_next' => false,
						'show_all' => false,
						'type' => 'list',
						'mid_size' => 1
					));
				}
			}
			?> </div>