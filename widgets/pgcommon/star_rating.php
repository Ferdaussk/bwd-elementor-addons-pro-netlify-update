
							<?php if('yes' === $settings['crtp_review']){ ?>
							<div class="crpt-rating-box">
								<?php $comment_id = $product->get_review_count();
								$crtp_star_number = $settings['crtp_review_star_number'];
								$star_number = $crtp_star_number - 1;
								$crtp_star_icon  = '<div class="crtp-star-rating text-center">';
								if(!$comment_id){
									$crtp_star_icon .= str_repeat( '<div class="crpt-star-icons far fa-star" aria-hidden="true"></div>', $crtp_star_number);
								}else{
									$crtp_star_icon .= str_repeat( '<div class="crpt-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="crpt-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$crtp_star_icon .= '</div>';
								echo $crtp_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>'; ?>
                            </div>
							<?php }