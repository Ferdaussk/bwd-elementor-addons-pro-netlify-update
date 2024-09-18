
							<?php if('yes' === $settings['crtplst_review']){ ?>
							<div class="crtplst_blog_comment">
								<div class="crtplst-rating-box">
									<?php $comment_id = $product->get_review_count();
									$crtplst_star_number = $settings['crtplst_review_star_number'];
									$star_number = $crtplst_star_number - 1;
									$crtplst_star_icon  = '<div class="crtplst-star-rating text-center">';
									if(!$comment_id){
										$crtplst_star_icon .= str_repeat( '<div class="crtplst-star-icons far fa-star" aria-hidden="true"></div>', $crtplst_star_number);
									}else{
										$crtplst_star_icon .= str_repeat( '<div class="crtplst-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="crtplst-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
									}
									$crtplst_star_icon .= '</div>';
									echo $crtplst_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>'; ?>
								</div>
                            </div>
							<?php }