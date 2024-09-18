
	<?php if('yes' === $settings['wppgpc_review']){ ?>
	<div class="wppgpc-rating-box">
		<?php $comment_id = $product->get_review_count();
		$wppgpc_star_number = $settings['wppgpc_review_star_number'];
		$star_number = $wppgpc_star_number - 1;
		$wppgpc_star_icon  = '<div class="wppgpc-star-rating text-center">';
		if(!$comment_id){
			$wppgpc_star_icon .= str_repeat( '<div class="wppgpc-star-icons far fa-star" aria-hidden="true"></div>', $wppgpc_star_number);
		}else{
			$wppgpc_star_icon .= str_repeat( '<div class="wppgpc-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="wppgpc-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
		}
		$wppgpc_star_icon .= '</div>';
		echo $wppgpc_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>'; ?>
	</div>
	<?php }