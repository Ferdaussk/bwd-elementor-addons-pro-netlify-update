
		<div class="bwdcrtplst_pagination_item <?php echo esc_attr($bwdcrtplst_pagination_align); ?>">
			<?php
			$total_pages = $bwdcrtplst_all_products->max_num_pages;
			if ($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				if('none' === $bwdcrtplst_the_pagination_type){
					echo paginate_links(array(
						'show_all' => false,
					));
				} elseif('bwdcrtplst-number-and-text' === $bwdcrtplst_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => $bwdcrtplst_blog_prev_format,
						'next_text' => $bwdcrtplst_blog_next_format,
					));
				} elseif('number' === $bwdcrtplst_the_pagination_type){
					echo paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_next' => false,
					));
				}
			}
			?> </div>