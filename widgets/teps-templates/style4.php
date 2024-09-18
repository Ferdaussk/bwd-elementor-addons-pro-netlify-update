<?php
/**
 * 
 * @===============//////////////////=================== Template Design 
 * 
 */

echo '<div class="teps-postslider-4 teps-slider-widget-wrapper">';
    echo '<div class="teps-swiper teps-mySwiper">';
        echo '<div class="teps-swiper-wrapper">';
        $wp_query = new \WP_Query( $teps_args );
        if($wp_query->have_posts()):
            while($wp_query->have_posts()) : $wp_query->the_post(); $teps_the_thumbnail_check = has_post_thumbnail()?get_the_post_thumbnail_url():plugin_dir_url(__DIR__) . '../assets/public/bwd-placeholder.jpg';
            echo '<div class="teps-swiper-slide">';
                echo '<div class="teps-postslider-wrap">';
                    echo '<div class="teps-postslider-feature-image" style="background-image: url('.$teps_the_thumbnail_check.');">';
                        echo '<div class="d-flex width-100 height-100 align-items-end justify-content-center teps-postslider-box-alignment">';
                            echo '<div class="teps-slide-content width-100 '.esc_attr($animation_class).'">';
                                echo '<div class="teps-postslider-content-info d-flex align-items-center">';
                                    if($teps_yes_value === $settings['teps_button_show_switcher']){
                                    echo '<div class="teps-postslider-button">';
                                    echo '<a class="teps-postslider-button-link" href="'.get_the_permalink().'"'; $teps_new_w = ($teps_yes_value === $settings['teps_button_open_switcher'])?'target="_blank"':''; echo $teps_new_w.'>';
                                    if('icon' === $teps_button_types){ echo '<i class="teps_icons '.$settings['teps_blog_button_icon']['value'].'"></i>'; } elseif('text_icon' === $teps_button_types){
                                        /* */ if('left' === $teps_button_icon_align){ echo '<i class="teps_icons teps_icons_left '.$settings['teps_button_indicator_icon']['value'].'"></i>'; } 
                                        echo esc_html__($settings['teps_blog_button_title']);  
                                    if('right' === $teps_button_icon_align){ echo '<i class="teps_icons teps_icons_right '.$settings['teps_button_indicator_icon']['value'].'"></i>'; } }
                                    echo '</a></div>';
                                    }
                                    echo '<div class="teps-postslider-extra">';
                                        echo '<div class="teps-postslider-meta d-flex flex-wrap-wrap">';
                                            if($teps_yes_value === $teps_author_swtcher){
                                                echo '<div class="teps-postslider-author teps-postslider-commn-meta">';
                                                $teps_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
                                                $teps_author_indicator_check = ('icon' === $teps_author_indicator) ? \Elementor\Icons_Manager::render_icon( $settings['teps_author_icon'], [ 'aria-hidden' => 'true', 'class' => 'teps_icons' ] ) : $teps_gravater;
                                                echo $teps_author_indicator_check.'<span class="teps-postslider-meta-icon">'.get_the_author_meta( 'nickname' ).'</span>';
                                                echo '</div>';
                                            }
                                            include( __DIR__ . '/texo-here/texo.php' );
                                        echo '</div>';
                                        if($teps_yes_value === $teps_title_swtcher):
                                            echo '<div class="teps-postslider-title">';
                                            $teps_a_tag = '<a href="'.get_the_permalink().'" class="teps-title-link">';
                                            $teps_title_link_switcher = ($teps_yes_value === $teps_title_link_show)?$teps_a_tag:'';
                                            echo $teps_title_link_switcher.'<'.$teps_title_tags.' class="teps-postslider-title-link">'. get_the_title();
                                            echo '</'.$teps_title_tags.'></a></div>';
                                        endif; 
                                    echo '</div>';
                                    echo '<div class="teps-postslider-extra">';
                                        $teps_description = wp_trim_words(get_the_content(), $teps_post_description_words, $teps_blog_word_trim_indi);
                                        $teps_description_switcher = ($teps_yes_value === $teps_description_swtcher)?$teps_description:'';
                                        echo '<div class="teps-postslider-desce">'.$teps_description_switcher.'</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo $teps_image_link_show?'<a href="'.get_the_permalink().'" class="teps-feature-image-link"></a>':'<span class="teps-feature-image-link"></span>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            endwhile;
        endif;
        echo '</div>';
    echo '</div>';
    require 'teps-swiper.php';
echo '</div>';
			