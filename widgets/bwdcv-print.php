
<style>
        @media print {
            /* Header */`
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-name {
                font-size: <?php echo esc_attr( $settings['bwdcv_header_cv_typography']  ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-title {
                color: <?php echo esc_attr( $bwdcv_header_desg_color  ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon::before {
                color: <?php echo esc_attr( $bwdcv_header_social_icon_color  ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon {
                background: <?php echo esc_attr( $bwdcv_header_social_icon_bg_color  ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon {
                color: <?php echo esc_attr( $bwdcv_social_icon_color ); ?> !important;
                font-size: <?php echo esc_attr( $bwdcv_social_icon_size ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon {
                width: <?php echo esc_attr( $bwdcv_social_icon_round_size ); ?> !important;
                height: <?php echo esc_attr( $bwdcv_social_icon_round_size ); ?> !important;
            }
            .bwd-cv-vilder-1-area .bwd-cv-vilder-information::before {
                background-color: <?php echo esc_attr( $bwdcv_header_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-name {
                color: <?php echo esc_attr( $bwdcv_header_title_color ); ?> !important;
            }
            /* About */
            .bwd-cv-vilder-common  .bwd-cv-profile .bwd-cv-profile-title {
                background-color: <?php echo esc_attr( $bwdcv_about_title_bg_color); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_about_title_color); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis {
                color: <?php echo esc_attr( $bwdcv_about_desg_color); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_about_icon_color); ?> !important;
            }
            /* Contact */
            .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title {
                background-color: <?php echo esc_attr( $bwdcv_contact_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-sub-title{
                color: <?php echo esc_attr( $bwdcv_contact_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_contact_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item,
            .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item i::before {
                color: <?php echo esc_attr( $bwdcv_contact_item_color ); ?> !important;
            }
            /* Skill */
            .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title {
                background-color: <?php echo esc_attr( $bwdcv_skill_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_skill_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_skill_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name {
                color: <?php echo esc_attr( $bwdcv_skill_name_color ); ?> !important;
            }
             .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val {
                background: <?php echo esc_attr( $bwdcv_skill_range_up_color ); ?> !important;
            }
             .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name::before {
                background: <?php echo esc_attr( $bwdcv_skill_range_down_color ); ?> !important;
            }
             .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::after,
             .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::before {
                color: <?php echo esc_attr( $bwdcv_skill_range_value_color ); ?> !important;
            }
            /* Education */
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title{
                background-color: <?php echo esc_attr( $bwdcv_education_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_education_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_education_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-institute-name .bwd-cv-institute-title {
                color: <?php echo esc_attr( $bwdcv_institute_name_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-institute-name::before {
                background: <?php echo esc_attr( $bwdcv_institute_line_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-institute-name::after {
                background: <?php echo esc_attr( $bwdcv_institute_line_drop_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-institute-name .bwd-cv-institute-dis {
                color: <?php echo esc_attr( $bwdcv_institute_desc_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-institute-name .bwd-cv-institute-year {
                color: <?php echo esc_attr( $bwdcv_education_year_color ); ?> !important;
            }
            /* Language */
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title {
                background-color: <?php echo esc_attr( $bwdcv_language_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_language_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_language_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name {
                color: <?php echo esc_attr( $bwdcv_language_name_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val {
                background: <?php echo esc_attr( $bwdcv_language_range_up_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name::before {
                background: <?php echo esc_attr( $bwdcv_language_range_down_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val::before,
            .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val::after {
                color: <?php echo esc_attr( $bwdcv_language_range_value_color ); ?> !important;
            }
            /* Hobby */
            .bwd-cv-vilder-common  .bwd-cv-hobby .bwd-cv-hobby-title {
                background-color: <?php echo esc_attr( $bwdcv_hobby_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_hobby_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_hobby_title_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-name .bwd-cv-hobby-icon::before {
                color: <?php echo esc_attr( $bwdcv_hobby_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-title {
                color: <?php echo esc_attr( $bwdcv_hobby_name_color ); ?> !important;
            }
            /* Experience */
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title,
            .bwd-cv-vilder-common  .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title{
                background-color: <?php echo esc_attr( $bwdcv_experience_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common  .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title {
                color: <?php echo esc_attr( $bwdcv_experience_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_experience_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-name::before {
                background: <?php echo esc_attr( $bwdcv_experience_line_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-name::after {
                background: <?php echo esc_attr( $bwdcv_experience_line_drop_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-name .bwd-cv-experience-year {
                color: <?php echo esc_attr( $bwdcv_experience_year_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-name .bwd-cv-experience-sub-title {
                color: <?php echo esc_attr( $bwdcv_experience_name_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-name .bwd-cv-experience-dis {
                color: <?php echo esc_attr( $bwdcv_experience_desc_color ); ?> !important;
            }
            /* Reference */
            .bwd-cv-vilder-common  .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title{
                background-color: <?php echo esc_attr( $bwdcv_reference_title_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title{
                color: <?php echo esc_attr( $bwdcv_reference_title_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon::before {
                color: <?php echo esc_attr( $bwdcv_reference_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-details .bwd-cv-reference-information .bwd-cv-reference-name {
                color: <?php echo esc_attr( $bwdcv_reference_name_color ); ?> !important;
            }
            
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-details .bwd-cv-reference-information .bwd-cv-reference-company-name {
                color: <?php echo esc_attr( $bwdcv_reference_company_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-details .bwd-cv-reference-information .bwd-cv-reference-number .bwd-cv-reference-number-title {
                color: <?php echo esc_attr( $bwdcv_reference_number_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-details .bwd-cv-reference-information .bwd-cv-reference-relation .bwd-cv-reference-relation-title {
                color: <?php echo esc_attr( $bwdcv_reference_relation_color ); ?> !important;
            }
            /* Footer */
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta {
                background: <?php echo esc_attr( $bwdcv_footer_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta .bwd-cv-vedio {
                background: <?php echo esc_attr( $bwdcv_footer_video_bg_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta {
                color: <?php echo esc_attr( $bwdcv_footer_video_icon_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta .bwd-cv-button {
                color: <?php echo esc_attr( $bwdcv_footer_btn_color ); ?> !important;
            }
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta .bwd-cv-button {
                background: <?php echo esc_attr( $bwdcv_footer_btn_bg_color ); ?> !important;
            } 
            .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta {
                margin-top: <?php echo esc_attr( $footer_margin_top ); ?> !important;
            }

            /* Wrapper */
            .bwd-cv-vilder-common .bwd-cv-vilder-left-content {
                background: <?php echo esc_attr( $bwdcv_wrapper_left_bg_color ); ?> !important;
            } 
            .bwd-cv-vilder-common .bwd-cv-vilder-right-content {
                background: <?php echo esc_attr( $bwdcv_wrapper_right_bg_color ); ?> !important;
            }


            
        }
    </style>
