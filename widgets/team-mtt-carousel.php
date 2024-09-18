<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class MTTMeetTheTeamCarousel extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MeetTheTeamCarousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Team Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-media-carousel';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Team Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mtt_style_selection',
			[
				'label' => esc_html__( 'Team Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style32',
				'options' => [
					'style32' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'mtt_flipflop_step_content_box_section',
			[
				'label' => esc_html__( 'Team Boxes', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mtt_box_name', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_title_icon_box_style_tabs_one'
		);
		$repeater->start_controls_tab(
			'mtt_title_icon_box_border_font_tab06',
			[
				'label' => esc_html__( 'Title Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'mtt_box_name_color_normal',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_bg_color_normal',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow_normal',
				'label' => esc_html__( 'Title Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography_normal',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_icon_box_border_back_tab06_title',
			[
				'label' => esc_html__( 'Hover Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_box_name_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_name_color_bg_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow_hover',
				'label' => esc_html__( 'Title Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography_hover',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		
		$repeater->add_control(
			'mtt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_box_designation', [
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'show_label' => false,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_designation_icon_box_style_tabs_one'
		);
		$repeater->start_controls_tab(
			'mtt_designation_icon_box_border_font_tab06',
			[
				'label' => esc_html__( 'Designation Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'mtt_box_normal_designation_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_designation_bg_color_designation_normal',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_normal_designation_shadow',
				'label' => esc_html__( 'Designaion Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_normal_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_designation_icon_box_border_back_tab06',
			[
				'label' => esc_html__( 'Hover Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_box_designation_color_designation_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_designation_bg_color_designation_hover',
			[
				'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_designation_shadow_designation_hover',
				'label' => esc_html__( 'Designaion Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_designation_typography_designation_hover',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'mtt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_team_profile_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_background_color',
			[
				'label' => esc_html__( 'Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_bwd_team_profile_background::before' => 'background: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_team_icon_box_style_tabs06'
		);
		$repeater->start_controls_tab(
			'mtt_team_icon_box_background_normal_tab06',
			[
				'label' => esc_html__( 'Font Icon', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		
		$repeater->add_control(
			'mtt_social_icon_font_main',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'mtt_globe_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-circle .mtt-team-layer' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'mtt_team_font_the_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'mtt_globe_icon_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon-bg' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_icon_box_back_hover_tab06',
			[
				'label' => esc_html__( 'Hover Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Hide This', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_one',
			[
				'label' => esc_html__( 'Color Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', BWDEB_ROOT_AUTHOR_PRO ),
					'custom'  => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_color_official',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'default' => '#3b5998',
				'condition' => [
					'mtt_team_icon_type_one' => 'official',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_link_official',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_one' => 'official',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_backg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_1' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Hide This', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-x-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_two',
			[
				'label' => esc_html__( 'Color Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', BWDEB_ROOT_AUTHOR_PRO ),
					'custom'  => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_color_official',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'default' => '#00acee',
				'condition' => [
					'mtt_team_icon_type_two' => 'official',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_link_official',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_two' => 'official',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_back_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_2' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_f',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Hide This', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_three',
			[
				'label' => esc_html__( 'Color Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', BWDEB_ROOT_AUTHOR_PRO ),
					'custom'  => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_color_official',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'default' => '#0077b5',
				'condition' => [
					'mtt_team_icon_type_three' => 'official',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_link_official',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_three' => 'official',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_backgr_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_3' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Hide This', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_four',
			[
				'label' => esc_html__( 'Color Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', BWDEB_ROOT_AUTHOR_PRO ),
					'custom'  => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_color_official',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'default' => 'red',
				'condition' => [
					'mtt_team_icon_type_four' => 'official',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_link_official',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_four' => 'official',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_backgro_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_4' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		$repeater->add_control(
			'mtt_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .mtt-team-style-34-team .mtt-team-content .mtt-social a, {{WRAPPER}} .mtt-team-style-33-area .mtt-team-style-33-team .mtt-team-content .mtt-social a, {{WRAPPER}} .mtt-team-style-32-area .mtt-team-style-32-team .mtt-team-content .mtt-social a' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_all_the_social_icon_size',
			[
				'label' => esc_html__( 'Social Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_one' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_two' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_three' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_four' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End


		$repeater->add_control(
			'mtt_team_hq',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_box_icon_background_color',
			[
				'label' => esc_html__( 'Carousel Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .slick-dots li.slick-active button, {{WRAPPER}} .mtt-team-style-32-area .slick-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .slick-arrow i, {{WRAPPER}} {{CURRENT_ITEM}} .slick-dots li.slick-active button' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'mtt_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Hover/Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .slick-dots li.slick-active button, {{WRAPPER}} .mtt-team-style-33-area .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_hover_background_color',
			[
				'label' => esc_html__( 'Carousel Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-32-area .slick-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .site .button:not(:hover):not(:active):not(.has-background), button:not(:hover):not(:active):not(.has-background), input[type=submit]:not(:hover):not(:active):not(.has-background), input[type=reset]:not(:hover):not(:active):not(.has-background), .wp-block-search .wp-block-search__button:not(:hover):not(:active):not(.has-background), .wp-block-button .wp-block-button__link:not(:hover):not(:active):not(.has-background), .wp-block-file a.wp-block-file__button:not(:hover):not(:active):not(.has-background)' => 'background: {{VALUE}}'
				],
			]
		);

		$this->add_control(
			'mtt_box',
			[
				'label' => esc_html__( 'Meet The Team', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mtt_box_name' => esc_html__( 'Jhon Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'mtt_box_name' => esc_html__( 'Smith Jhon', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'mtt_box_name' => esc_html__( 'Robin Smith', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'mtt_box_name' => esc_html__( 'Json Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'mtt_box_name' => esc_html__( 'Roky', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => `{{{ mtt_box_name }}}`,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mtt_team_style_section',
			[
				'label' => esc_html__( 'Team Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mtt_team_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .mtt-bwd-box-class1',
			]
		);
		$this->add_responsive_control(
            'mtt_team_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-bwd-box-class1' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mtt_team_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-bwd-box-class1' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'mtt_team_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .mtt-bwd-box-class' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$mtt_styles = $settings['mtt_style_selection'];

		
		// Social Link
		if ( ! empty( $settings['mtt_social_icon_one_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_one_link', $settings['mtt_social_icon_one_link'] );
		}
		if( $mtt_styles ){ ?>
			<div class="mtt-team-style-<?php echo $mtt_styles ?>-area mtt-bwd-box-class1">
				<div class="mtt-box-container">
					<div class="team-style-<?php echo $mtt_styles ?>-active">
						<?php
						if ( $settings['mtt_box'] ) {
							foreach (  $settings['mtt_box'] as $item ) {
						echo '<div class="mtt-team-boxs elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="mtt-team-style-<?php echo $mtt_styles ?>-team mtt-bwd-box-class">
								<div class="mtt-pic">
									<img src="<?php echo esc_url($item['mtt_team_profile_image']['url']); ?>" alt="Image">
								</div>
								<?php if($mtt_styles == 'style32'){ ?>
									<div class="mtt-team-style-icon mtt-bwd-font-icon-bg">
										<div class="mtt-icon mtt-bwd-font-icon <?php echo esc_attr( $item['mtt_social_icon_font_main']['value'] ); ?>"></div>
										<div class="mtt-team-inner">
											<div class="mtt-team-border mtt-team-border-top"></div>
											<div class="mtt-team-border mtt-team-border-right"></div>
											<div class="mtt-team-border mtt-team-border-bottom"></div>
											<div class="mtt-team-border mtt-team-border-left"></div>
										</div>
									</div>
								<?php } if($mtt_styles == 'style33'){ ?>
									<div class="mtt-team-style-layer mtt-bwd-font-icon-bg">
										<div class="mtt-team-circle">
											<div class="mtt-team-layer mtt-team-left-layer"></div>
											<div class="mtt-team-layer mtt-team-top-layer"></div>
											<div class="mtt-team-layer mtt-team-right-layer"></div>
											<div class="mtt-team-layer mtt-team-bottom-layer"></div>
											<div class="mtt-team-icon mtt-bwd-font-icon"><i class="<?php echo esc_attr( $item['mtt_social_icon_font_main']['value'] ); ?>"></i></div>
										</div>
									</div>
								<?php } ?>
								<div class="mtt-team-content">
									<div class="mtt-title mtt-bwd-team-title"><?php echo esc_html($item['mtt_box_name']); ?></div>
									<div class="mtt-post mtt-bwd-team-post"><?php echo esc_html($item['mtt_box_designation']); ?></div>
									<?php include 'meet-the-team/social.php'; ?>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		<?php
		} 
	}
}
