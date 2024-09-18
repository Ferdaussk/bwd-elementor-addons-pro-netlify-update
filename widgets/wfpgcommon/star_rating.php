
							<?php if('yes' === $settings['woofpt_review']){ ?>
							<div class="woofpt-rating-box">
								<?php $comment_id = $product->get_review_count();
								$woofpt_star_number = $settings['woofpt_review_star_number'];
								$star_number = $woofpt_star_number - 1;
								$woofpt_star_icon  = '<div class="woofpt-star-rating text-center">';
								if(!$comment_id){
									$woofpt_star_icon .= str_repeat( '<div class="woofpt-star-icons far fa-star" aria-hidden="true"></div>', $woofpt_star_number);
								}else{
									$woofpt_star_icon .= str_repeat( '<div class="woofpt-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woofpt-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$woofpt_star_icon .= '</div>';
								echo $woofpt_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>'; ?>
                            </div>
							<?php }