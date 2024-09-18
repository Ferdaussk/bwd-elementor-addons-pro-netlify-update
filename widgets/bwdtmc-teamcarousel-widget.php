<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTMCTeamcarousel extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdtmc-teammember-carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Team Member Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-teamcarousel';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtmc_text_content_section',
			[
				'label' => esc_html__( 'Team Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdtmc_style_selection',
			[
				'label' => esc_html__( 'Team Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'style13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'style14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'style15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'style16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'style17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'style18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'style19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'style20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'style21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
					'style22' => esc_html__( 'Style 22', BWDEB_ROOT_AUTHOR_PRO ),
					'style23' => esc_html__( 'Style 23', BWDEB_ROOT_AUTHOR_PRO ),
					'style24' => esc_html__( 'Style 24', BWDEB_ROOT_AUTHOR_PRO ),
					'style25' => esc_html__( 'Style 25', BWDEB_ROOT_AUTHOR_PRO ),
					'style26' => esc_html__( 'Style 26', BWDEB_ROOT_AUTHOR_PRO ),
					'style27' => esc_html__( 'Style 27', BWDEB_ROOT_AUTHOR_PRO ),
					'style28' => esc_html__( 'Style 28', BWDEB_ROOT_AUTHOR_PRO ),
					'style29' => esc_html__( 'Style 29', BWDEB_ROOT_AUTHOR_PRO ),
					'style30' => esc_html__( 'Style 30', BWDEB_ROOT_AUTHOR_PRO ),
					'style31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdtmc_flipflop_step_content_box_section',
			[
				'label' => esc_html__( 'Team Boxes', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();

		// Content Tab

		$repeater->start_controls_tabs(
			'style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdtmc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdtmc_box_name', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtmc_box_designation', [
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_team_profile_image',
			[
				'label' => esc_html__( 'Choose Profile Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Social Icon One', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_one',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'bwdtmc_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdtmc_social_icon_one_switcher' => 'yes',
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
			'bwdtmc_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Social Icon Two', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_two',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-x-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'bwdtmc_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdtmc_social_icon_two_switcher' => 'yes',
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
			'bwdtmc_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Social Icon Three', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_three',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'bwdtmc_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdtmc_social_icon_three_switcher' => 'yes',
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
			'bwdtmc_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Social Icon Four', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_four',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'bwdtmc_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdtmc_social_icon_four_switcher' => 'yes',
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
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdtmc_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdtmc_box_name_style',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtmc_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-title',
			]
		);
		$repeater->add_control(
			'bwdtmc_box_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-content .bwdtmc-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtmc_title_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-content .bwdtmc-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_control(
			'bwdtmc_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		$repeater->add_control(
			'bwdtmc_box_designation_heading',
			[
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtmc_box_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-post',
			]
		);
		$repeater->add_control(
			'bwdtmc_box_designation_color',
			[
				'label' => esc_html__( ' Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_bwdtmc_bwdtmc_box_profile_des_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-content .bwdtmc-post' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtmc_bwdtmc_designation_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-content .bwdtmc-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);

		$repeater->add_control(
			'bwdtmc_bwdtmc_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		
		$repeater->add_control(
			'bwdtmc_box_profile_background_color',
			[
				'label' => esc_html__( 'Profile Image Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc_team_profile_background, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-26-team .bwdtmc-team-content::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-portfolio-team .bwdtmc-pic::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-section::before,{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-28-team:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-section' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-thumble::after,{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-29-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-portfolio:after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-our-box:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-30-team, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-31-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-16-box::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-pic:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-20-team .bwdtmc-pic' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-23-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-22-team, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-21-team .bwdtmc-pic::before' => 'background: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'bwdtmc_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Icon One Style

		$repeater->add_control(
			'bwdtmc_social_icon_one_style_switcher',
			[
				'label' => esc_html__( 'Social Icon One Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtmc_team_social_icon_one_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-one i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-one svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'bwdtmc_team_social_icon_hover_one_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-one i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-one svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_one_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-one' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_one_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-one:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtmc_box_icon_one_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social .bwdtmc-social-icon-one',
				'condition' => [
					'bwdtmc_social_icon_one_style_switcher' => 'yes',
				],
			]
		);

		// Icon Two Style
		$repeater->add_control(
			'bwdtmc_social_icon_two_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Two Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtmc_team_social_icon_two_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-two i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-two svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'bwdtmc_team_social_icon_hover_two_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-two i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-two svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_two_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.bwdtmc-social-icon-two' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_two_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.bwdtmc-social-icon-two:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtmc_box_icon_two_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social .bwdtmc-social-icon-one',
				'condition' => [
					'bwdtmc_social_icon_two_style_switcher' => 'yes',
				],
			]
		);

		// Icon Three Style

		$repeater->add_control(
			'bwdtmc_social_icon_three_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Three Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtmc_team_social_icon_three_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-three i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-three svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'bwdtmc_team_social_icon_hover_three_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-three i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-three svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_three_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-three' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_three_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-three:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtmc_box_icon_three_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social .bwdtmc-social-icon-one',
				'condition' => [
					'bwdtmc_social_icon_three_style_switcher' => 'yes',
				],
			]
		);

		// Icon Four Style

		$repeater->add_control(
			'bwdtmc_social_icon_four_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Four Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtmc_team_social_icon_four_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-four i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-four svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'bwdtmc_team_social_icon_hover_four_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-four i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social-icon-four svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'bwdtmc_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_four_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-four' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_box_icon_four_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.bwdtmc-social-icon-four:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'bwdtmc_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtmc_box_icon_four_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-social .bwdtmc-social-icon-one',
				'condition' => [
					'bwdtmc_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdtmc_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc_team_shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team .bwdtmc-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-26-team .bwdtmc-team-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-portfolio-team .bwdtmc-pic::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-27-team .bwdtmc-team-content .bwdtmc-title::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-27-team .bwdtmc-team-content .bwdtmc-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-portfolio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-28-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-our-box-content::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-our-box::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-29-team .bwdtmc-team-content .bwdtmc-inner-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-15-box:before' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtmc_team_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-six-number-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-total-team-box .bwdtmc-social, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-19-team::after, {{WRAPPER}} .bwdtmc-team-style-19-team::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-25-team, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-pic:after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-27-team .bwdtmc-team-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-27-team .bwdtmc-team-content:before,  {{WRAPPER}} {{CURRENT_ITEM}} .bwdtmc-team-style-27-team .bwdtmc-team-content:after',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'bwdtmc_bwdtmc_box',
			[
				'label' => esc_html__( 'Meet The Team', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtmc_box_name' => esc_html__( 'Jhon Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtmc_box_name' => esc_html__( 'Smith Jhon', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtmc_box_name' => esc_html__( 'Robin Smith', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtmc_box_name' => esc_html__( 'Json Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdtmc_box_name }}}',
			]
		);
		$this->add_responsive_control(
			'bwdtmc_team__the_social_icon_size',
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
					'{{WRAPPER}} .bwdtmc-social-icon-one i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-two i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-three i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-four i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-one svg' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-two svg' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-three svg' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdtmc-social-icon-four svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdtmc_team__the_social_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtmc-social a' => 'width: {{SIZE}}{{UNIT}}!important; height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdtmc_team_style_section',
			[
				'label' => esc_html__( 'Team Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtmc_team_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdtmc-total-team-box',
			]
		);
		$this->add_responsive_control(
            'bwdtmc_team_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtmc-total-team-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdtmc_team_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtmc-total-team-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtmc_team_the_box_border',
				'selector' => '{{WRAPPER}} .bwdtmc-total-team-box',
			]
		);
		$this->add_responsive_control(
			'bwdtmc_team_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtmc-total-team-box' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtmc_team_the_box_box_shadow',
				'selector' => '{{WRAPPER}} .bwdtmc-total-team-box',
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdtmc_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdtmc-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdtmc_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdtmc_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdtmc_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdtmc_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdtmc_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdtmc_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdtmc_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtmc_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtmc_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtmc_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdtmc_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtmc_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtmc_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdtmc_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdtmc_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdtmc_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtmc_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdtmc_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtmc_nav_type' => 'icon',
						'bwdtmc_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdtmc_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtmc_nav_type' => 'icon',
						'bwdtmc_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdtmc_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtmc_nav_type' => 'text',
						'bwdtmc_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdtmc_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtmc_nav_type' => 'text',
						'bwdtmc_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdtmc_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdtmc_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdtmc_dots_type',
				[
					'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
						'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtmc_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdtmc_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtmc_dots10'  => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtmc_dots_switcher' => 'yes',
						'bwdtmc_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();


		// for-owl-carousel-start
		$bwdtmc_slide_margin = $settings['bwdtmc_slide_margin'];
		$bwdtmc_slide_mobile_view = $settings['bwdtmc_slide_mobile_view'];
		$bwdtmc_slide_tablet_view = $settings['bwdtmc_slide_tablet_view'];
		$bwdtmc_slide_desktop_view = $settings['bwdtmc_slide_desktop_view'];
		$bwdtmc_infinite_autoplay_switcher = $settings['bwdtmc_infinite_autoplay_switcher'];
		$bwdtmc_infinite_loop_switcher = $settings['bwdtmc_infinite_loop_switcher'];
		$bwdtmc_HoverPause_switcher = $settings['bwdtmc_HoverPause_switcher'];
		$bwdtmc_centermode_switcher = $settings['bwdtmc_centermode_switcher'];
		$bwdtmc_autoplay_timeout = $settings['bwdtmc_autoplay_timeout'];
		$bwdtmc_autoplay_speed = $settings['bwdtmc_autoplay_speed'];
		$bwdtmc_stace_padding = $settings['bwdtmc_stace_padding'];
		//nav--------------------------------------------------
		$bwdtmc_nav_switcher = $settings['bwdtmc_nav_switcher'];
		$bwdtmc_nav_type = $settings['bwdtmc_nav_type'];

		if( $bwdtmc_nav_switcher == 'yes' ) {
			if( $bwdtmc_nav_type == 'icon' ) {
				$prev = $settings['bwdtmc_nav_prev_arrow']['value'];
				$next = $settings['bwdtmc_nav_next_arrow']['value'];
			} else if( $bwdtmc_nav_type == 'text' ) {
				$prev = $settings['bwdtmc_nav_prev_text'];
				$next = $settings['bwdtmc_nav_next_text'];
			} 
		}
		$bwdtmc_dots_switcher = $settings['bwdtmc_dots_switcher'];
		$bwdtmc_dots_type = $settings['bwdtmc_dots_type'];
		// for-owl-carousel-end


		//$column_align = $settings['bwdtmc_team_box_align'];
		// Social Link
		if ( ! empty( $settings['bwdtmc_social_icon_one_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdtmc_social_icon_one_link', $settings['bwdtmc_social_icon_one_link'] );
		}
		if ( ! empty( $settings['bwdtmc_social_icon_two_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdtmc_social_icon_two_link', $settings['bwdtmc_social_icon_two_link'] );
		}
		if ( ! empty( $settings['bwdtmc_social_icon_three_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdtmc_social_icon_three_link', $settings['bwdtmc_social_icon_three_link'] );
		}
		if ( ! empty( $settings['bwdtmc_social_icon_four_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdtmc_social_icon_four_link', $settings['bwdtmc_social_icon_four_link'] );
		}
		if('style1' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
			<?php require 'bwdtmc-variable.php' ; ?>
				<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
				<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
					echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdtmc-team bwdtmc-total-team-box">
							<div class="bwdtmc-pic bwdtmc_team_profile_background bwdtmc-style-1">
							<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
							</div>
							<div class="bwdtmc-team-content">
								<div class="bwdtmc-title bwdtmc-titleee"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
								<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
							</div>
							<div class="bwdtmc-social">
								<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>

							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
			<?php
		} elseif('style2' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-our-team-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
			<?php require 'bwdtmc-variable.php' ; ?>
				<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
					echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdtmc-our-team-box bwdtmc-total-team-box">
							<div class="bwdtmc-our-team-item">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_profile_background">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
			<?php
		} elseif('style3' === $settings['bwdtmc_style_selection']){
				?>
				<div class="bwdtmc-portfolio-team-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-portfolio-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
										<div  class="bwdtmc-social">
											<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div >
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style4' === $settings['bwdtmc_style_selection']){
				?>
				<div class="bwdtmc-single-team-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
				<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-single-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									<div class="bwdtmc-social bwdtmc_team_profile_background">
										<div class="bwdtmc-ul">
											<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
				</div>
				</div>
				<?php
		} elseif('style5' === $settings['bwdtmc_style_selection']){
				?>
				<div class="bwdtmc-team-section-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-section bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
									<div class="bwdtmc-team-content bwdtmc_team_shape">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
										<div class="bwdtmc-social">
											<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
				<?php
		} elseif('style6' === $settings['bwdtmc_style_selection']){
				?>
				<div class="bwdtmc-team-iteam-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-iteam bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-social bwdtmc_team_shape">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
									<div class="bwdtmc-team-content bwdtmc_team_profile_background bwdtmc-six-number-bg">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
				<?php
		} elseif('style7' === $settings['bwdtmc_style_selection']){
				?>
				<div class="bwdtmc-team-card-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-cards bwdtmc_team_profile_background bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
										<div class="bwdtmc-social">
											<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
				<?php
		} elseif('style8' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-box-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
			<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-box-item bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
								<div class="bwdtmc-social bwdtmc_team_profile_background">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style9' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-thumble-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
			<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-thumble bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style10' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-portfolio-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
			<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-portfolio bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style11' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-our-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-our-box bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-our-box-content">
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
									<div class="bwdtmc-social">
										<div class="bwdtmc-li">
											<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style12' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-12-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-box bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style13' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-13-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-13-box bwdtmc_team_profile_background bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style14' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-14-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-14-box bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style15' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-15-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-15-box bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style16' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-16-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdtmc-team-style-16-box bwdtmc-total-team-box">
							<div class="bwdtmc-pic">
								<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
							</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one-aftr bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two-aftr bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three-aftr bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four-aftr bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style17' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-17-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-17-box bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style18' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-18-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-18-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
								<div class="bwdtmc-team-content bwdtmc_team_shape">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style19' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-19-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-19-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style20' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-20-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-20-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style21' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-21-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-21-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-info">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style22' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-22-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-22-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style23' === $settings['bwdtmc_style_selection']){
			?>
			<div class="bwdtmc-team-style-23-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
				<?php require 'bwdtmc-variable.php' ; ?>
					<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
					<?php
					if ( $settings['bwdtmc_bwdtmc_box'] ) {
						foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
						echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdtmc-team-style-23-team bwdtmc-total-team-box">
								<div class="bwdtmc-pic">
									<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
								</div>
								<div class="bwdtmc-team-content">
									<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
									<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
								</div>
								<div class="bwdtmc-social">
									<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
					</div>
			</div>
			<?php
		} elseif('style24' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-24-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-24-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
										<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style25' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-25-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-25-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style26' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-26-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-26-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
										<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style27' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-27-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-27-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
										<div class="bwd-img-layer"></div>
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
										<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style28' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-28-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-28-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
										<div class="bwd-img-layer"></div>
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style29' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-29-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-29-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
										<div class="bwd-img-layer"></div>
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-inner-content">
											<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
											<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
										</div>
									</div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style30' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-30-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-30-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		} elseif('style31' === $settings['bwdtmc_style_selection']){
			?>
				<div class="bwdtmc-team-style-31-area bwdtmc-slider-common <?php echo esc_attr($settings['bwdtmc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtmc-blogpost-custom-id'] ); ?>">
					<?php require 'bwdtmc-variable.php' ; ?>
						<div class="bwdtmc-owl bwdtmc-owl-carousel bwdtmc-owl-theme">
						<?php
						if ( $settings['bwdtmc_bwdtmc_box'] ) {
							foreach (  $settings['bwdtmc_bwdtmc_box'] as $item ) {
							echo '<div class="bwdtmc-col elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<div class="bwdtmc-team-style-31-team bwdtmc-total-team-box">
									<div class="bwdtmc-pic">
										<img src="<?php echo esc_url($item['bwdtmc_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									</div>
									<div class="bwdtmc-team-content">
										<div class="bwdtmc-title"><?php echo esc_html($item['bwdtmc_box_name']); ?></div>
										<div class="bwdtmc-post"><?php echo esc_html($item['bwdtmc_box_designation']); ?></div>
									</div>
									<div class="bwdtmc-social">
										<?php if('yes' === $item['bwdtmc_social_icon_one_switcher']){ ?><a class="bwdtmc-social-icon-one" href="<?php echo esc_url($item['bwdtmc_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_two_switcher']){ ?><a class="bwdtmc-social-icon-two" href="<?php echo esc_url($item['bwdtmc_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_three_switcher']){ ?><a class="bwdtmc-social-icon-three" href="<?php echo esc_url($item['bwdtmc_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdtmc_social_icon_four_switcher']){ ?><a class="bwdtmc-social-icon-four" href="<?php echo esc_url($item['bwdtmc_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdtmc_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
						<?php
							}
						}
						?>
						</div>
				</div>
			<?php
		}
	}
}
