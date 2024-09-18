<div class="thepsttmln-timeline-twenty-seven TL thepsttmln-21 thepsttmln-common thepsttmln-progress thepsttmln-pb-bg-cmn-pseudo">
    <div class="thepsttmln-progress-helper-twenty-seven tl-pb-helper-common"></div>
    <div class="thepsttmln-progress-line tl-pb-line-common thepsttmln-pb-cmn"></div>
    <div class="thepsttmln-timeline-item-container">
            <?php
    $wp_query = new \WP_Query( $thepsttmln_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div class="thepsttmln-timeline-item">
                    <div class="thepsttmln-timeline-item-inner thepsttmln-shape-one">
                        <div class="thepsttmln-timeline-item-content thepsttmln-content-box thepsttmln-shape-one thepsttmln-timeline-box-bgc-cmmn">
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
                            // Image
                            $thepsttmln_image_a_tag = '<a class="thepsttmln_thumbnail" href="'.get_the_permalink().'">';
                            echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?$thepsttmln_image_a_tag:'';
                            $this->thepsttmln_post_thumbnail_here();
                            echo ($thepsttmln_yes_value === $thepsttmln_image_link_show)?'</a>':'';
                            ?>
                            <div class="thepsttmln-timeline-for-content">
                            <?php include(__DIR__.'/texo.php'); ?>
                            </div>
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