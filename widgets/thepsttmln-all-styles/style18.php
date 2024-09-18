<div class="thepsttmln-timeline-twenty-four thepsttmln-18 thepsttmln-common">
    <div class="thepsttmln-timeline-item-container">
        <div class="thepsttmln-progress-line thepsttmln-pb-cmn"></div>
            <?php
    $wp_query = new \WP_Query( $thepsttmln_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div class="thepsttmln-closet-shape thepsttmln-box thepsttmln-timeline-item thepsttmln-timeline-box-bgc-cmmn">
                    <?php 
                // date
                $thepsttmln_post_date = get_the_date($thepsttmln_blog_date_format);
                $thepsttmln_date_title = '<span>'.$thepsttmln_post_date.'</span></div>';
                $thepsttmln_date_icon = '<i class="thepsttmln_icons far fa-calendar-alt"></i>';
                $thepsttmln_date_show_icon = ('show' == $thepsttmln_taxo_icon)?$thepsttmln_date_icon:'';
                $thepsttmln_date_wrap_div = '<div class="thepsttmln-timeline-date thepsttmln-shape-one thepsttmln-extra-meta">'.$thepsttmln_date_show_icon;
                $thepsttmln_date_switch = ($thepsttmln_yes_value === $thepsttmln_date_swtcher)? $thepsttmln_date_wrap_div:'';
                $thepsttmln_date_title_switch = ($thepsttmln_yes_value === $thepsttmln_date_swtcher)? $thepsttmln_date_title:'';
                echo $thepsttmln_date_switch.$thepsttmln_date_title_switch;
                    ?>
                    <div class="thepsttmln-timeline-item-content thepsttmln-timeline-for-content">
                    <?php 
                        // Image
                        $thepsttmln_image_a_tag = '<a class="thepsttmln_thumbnail" href="'.get_the_permalink().'">';
                        echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?$thepsttmln_image_a_tag:'';
                        $this->thepsttmln_post_thumbnail_here();
                        echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?'</a>':'';
                        ?>
                        <div class="thepsttmln-content-wrap">
                        <?php
                        // Title
                        if($thepsttmln_yes_value === $thepsttmln_title):
                            echo '<div class="thepsttmln-timeline-title">';
                            $thepsttmln_a_tag = '<a href="'.get_the_permalink().'">';
                            $thepsttmln_title_link_switcher = ($thepsttmln_yes_value === $thepsttmln_title_link)?$thepsttmln_a_tag:'';
                            echo $thepsttmln_title_link_switcher.'<'.$thepsttmln_title_tags.' class="thepsttmln-h2-title">'. get_the_title().'</'.$thepsttmln_title_tags.'></a></div>';
                        endif;
                        // ======================= Texo
                        // Cat
                        if($thepsttmln_yes_value === $thepsttmln_categories_swtcher):
                            echo '<div class="thepsttmln-prodCat">';
                            if('show_main_cat' === $thepsttmln_cat_show_status){ 
                                $categories = get_the_category();
                                if(!empty($categories)){
                                    echo '<ul class="post-categories"><li><a href="'. esc_url( plugin_dir_url( '../../category/'.'name').$categories[0]->name ) .'" class="thepsttmln-cat">'.esc_html($categories[0]->name).'</a></li></ul>';	
                                }
                            } elseif('show_multiple_cat' === $thepsttmln_cat_show_status){
                                the_category();
                            }
                            echo '</div>';
                        endif;
                        // author
                        $thepsttmln_control_icon = $settings['thepsttmln_author_icon']['value'];
                        $thepsttmln_author_icon = '<i class="thepsttmln_icons '.$thepsttmln_control_icon.'"></i>';
                        $thepsttmln_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
                        $thepsttmln_author_indicator_check = ('icon' === $thepsttmln_author_indicator) ? $thepsttmln_author_icon : '';
                        $thepsttmln_author_indicator_gravatar = ('gravatar' === $thepsttmln_author_indicator) ? $thepsttmln_gravater : '';
                        $thepsttmln_author = ($thepsttmln_yes_value === $thepsttmln_author_swtcher) ? $thepsttmln_author_indicator_check.$thepsttmln_author_indicator_gravatar.'<span>'.get_the_author_meta( 'nickname' ).'</span>' : '';
                        echo '<div class="thepsttmln-meta-wrap">';
                        echo '<div class="thepsttmln-prodSaleCount thepsttmln-extra-meta">'.$thepsttmln_author .'</div>';
                        // Tags
                        $thepsttmln_post_tags = get_the_tags();
                        $thepsttmln_main_tag = ($thepsttmln_post_tags) ? $thepsttmln_post_tags[0]->name:'';
                        $thepsttmln_tag_title = '<span>'.$thepsttmln_main_tag.'</span></div>';
                        $thepsttmln_tag_icon = '<i class="fas fa-tag"></i>';
                        $thepsttmln_tag_show_icon = ('show' == $thepsttmln_taxo_icon)?$thepsttmln_tag_icon:'';
                        $thepsttmln_wrap_div = '<div class="thepsttmln-prodType thepsttmln-extra-meta">'.$thepsttmln_tag_show_icon;
                        $thepsttmln_wrap_tag = ($thepsttmln_yes_value == $thepsttmln_tags_swtcher)?$thepsttmln_wrap_div:'';
                        $thepsttmln_wrap_close_div = ($thepsttmln_yes_value == $thepsttmln_tags_swtcher)?$thepsttmln_tag_title:'';
                        echo $thepsttmln_wrap_tag.$thepsttmln_wrap_close_div;
                        // Comment
                        $thepsttmln_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
                        $thepsttmln_comm_title = '<span>'.$thepsttmln_main_comm.'</span></div>';
                        $thepsttmln_comm_icon = '<i class="fas fa-comments"></i>';
                        $thepsttmln_comm_show_icon = ('show' == $thepsttmln_taxo_icon)?$thepsttmln_comm_icon:'';
                        $thepsttmln_wrap_comm_div = '<div class="thepsttmln-salePrice thepsttmln-price">'.$thepsttmln_comm_show_icon;
                        $thepsttmln_comm_switch = ($thepsttmln_yes_value === $thepsttmln_comments_swtcher)?$thepsttmln_wrap_comm_div:'';
                        $thepsttmln_comm_title_echo = ($thepsttmln_yes_value === $thepsttmln_comments_swtcher)?$thepsttmln_comm_title:'';
                        echo $thepsttmln_comm_switch.$thepsttmln_comm_title_echo;
                        echo '</div>';
                        // =======================
                        // Description
                        $thepsttmln_description = wp_trim_words(get_the_content(), $thepsttmln_post_description_words, $thepsttmln_blog_word_trim_indi);
                        $thepsttmln_description_switcher = ($thepsttmln_yes_value === $thepsttmln_description_swtcher)?$thepsttmln_description:'';
                        echo '<div class="thepsttmln-desc"><p class="thepsttmln-timeline-desc">'.$thepsttmln_description_switcher.'</p></div>';
                        // Button
                        $thepsttmln_cart_text = '<a href="'.get_the_permalink().'" class="thepsttmln-cartBtn">'.esc_html__($thepsttmln_cart_button).'</a>';
                        $thepsttmln_cart_icon = '<a href="'.get_the_permalink().'" class="thepsttmln-sscartbtndd"><i class="thepsttmln-cartBtn '.esc_attr($thepsttmln_cart_button_icon).'"></i></a>';
                        $thepsttmln_cart_T_I = ('text' === $thepsttmln_cart_type)?$thepsttmln_cart_text:$thepsttmln_cart_icon;
                        $thepsttmln_cart_wrap_html = '<div class="thepsttmln-atcart-btn">'.$thepsttmln_cart_T_I.'</div>';
                        echo ('yes' === $thepsttmln_cart_btn)?$thepsttmln_cart_T_I:'';
                    ?>
                    </div>
                    </div>
                </div>
                <?php
        endwhile;
        include(__DIR__.'/pagination.php');
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any posts. Please add your post.').'</div>';
    endif;
        ?>
    </div>
</div>