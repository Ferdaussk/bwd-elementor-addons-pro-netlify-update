<div class="thepsttmln-timeline-six thepsttmln-5 thepsttmln-common thepsttmln-scroll-show thepsttmln-pb-cmn-pseudo">
    <div class="thepsttmln-timeline-item-container">
    <?php
    $wp_query = new \WP_Query( $thepsttmln_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="thepsttmln-timeline-item">
            <div class="thepsttmln-timeline-item-inner thepsttmln-content-box thepsttmln-shape-one thepsttmln-timeline-box-bgc-cmmn">
                <div class="thepsttmln-timeline-header">
                <?php 
                    $wooiap_title_link_check = ('yes' === $thepsttmln_title_link)?'<a href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
                    $wooiap_title_check = '<div class="thepsttmln-timeline-title" style="text-align:'.$settings['thepsttmln_title_alignment'].'"> ' . $wooiap_title_link_check . ' </div>';
                    $wooiap_title_show = ('yes' === $thepsttmln_title)?$wooiap_title_check:''; echo $wooiap_title_show;
                    
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
                </div>
                <div class="thepsttmln-timeline-content thepsttmln-timeline-for-content">
                    <div class="thepsttmln-timeline-img">
                        <?php 
                    // Image
                    $thepsttmln_image_a_tag = '<a class="thepsttmln_thumbnail" href="'.get_the_permalink().'">';
                    echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?$thepsttmln_image_a_tag:'';
                    $this->thepsttmln_post_thumbnail_here();
                    echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?'</a>':'';
                        ?>
                    </div>
                    <?php include(__DIR__.'/texo.php'); ?>
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