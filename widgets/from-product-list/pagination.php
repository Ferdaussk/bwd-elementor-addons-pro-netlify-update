
		<div class="crtplst_pagination_item">
			<?php
				
			$total_pages = $crtplst_all_products->max_num_pages;
			if ($total_pages > 1){
				if('none' === $crtplst_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('crtplst-number-and-text' === $crtplst_the_pagination_type){
					echo paginate_links(array(
						'total' => $total_pages,
						'prev_text' => $crtplst_product_prev_format,
						'next_text' => $crtplst_product_next_format,
						'type' => 'list',
						'show_all' => false,
						'mid_size' => 1
					));
				} elseif('number' === $crtplst_the_pagination_type){
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