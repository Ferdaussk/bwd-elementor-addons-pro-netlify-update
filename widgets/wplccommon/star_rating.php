
							<?php if('yes' === $settings['bwdcrtplst_review']){ ?>
							<div class="bwdcrtplst_blog_comment">
								<div class="bwdcrtplst-rating-box">
									<?php $comment_id = $product->get_review_count();
									$bwdcrtplst_star_number = $settings['bwdcrtplst_review_star_number'];
									$star_number = $bwdcrtplst_star_number - 1;
									$bwdcrtplst_star_icon  = '<div class="bwdcrtplst-star-rating text-center">';
									if(!$comment_id){
										$bwdcrtplst_star_icon .= str_repeat( '<div class="bwdcrtplst-star-icons far fa-star" aria-hidden="true"></div>', $bwdcrtplst_star_number);
									}else{
										$bwdcrtplst_star_icon .= str_repeat( '<div class="bwdcrtplst-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="bwdcrtplst-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
									}
									$bwdcrtplst_star_icon .= '</div>';
									echo $bwdcrtplst_star_icon; echo '<div  class="make_a_star">(' . $product->get_review_count(). ')</div>'; ?>
								</div>
                            </div>
							<?php }