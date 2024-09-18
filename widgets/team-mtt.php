<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class MTTMeetTheTeam extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MeetTheTeam', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Meet The Team', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle mtt-team';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_script_depends() {
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
		$this->add_responsive_control(
			'mtt_team_box_align',
			[
				'label' => esc_html__( 'Column Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'flex-start',
				'selectors' => [
					'{{WRAPPER}} .bwd-row' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_column_layout',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( '1 Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( '2 Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column3'  => esc_html__( '3 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column4' => esc_html__( '4 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( '5 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( '6 Column', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'mtt-grid%s-'
			]
		);
		$this->add_responsive_control(
			'mtt_column_gap',
			[
				'label' => esc_html__( 'Column Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mtt_gapc' => 'padding-inline-start: {{SIZE}}{{UNIT}}; padding-inline-end: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt_gapr' => 'margin-inline-start: -{{SIZE}}{{UNIT}}; margin-inline-end: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mtt-total-team-box' => 'margin-block-end: {{SIZE}}{{UNIT}};',
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

		// Content Tab

		$repeater->start_controls_tabs(
			'style_tabs'
		);
		$repeater->start_controls_tab(
			'mtt_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
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
		$repeater->add_control(
			'mtt_box_designation', [
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Web Developer' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'mtt_team_profile_image',
			[
				'label' => esc_html__( 'Choose Profile Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_switcher',
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
			'mtt_social_icon_one',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
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
			'mtt_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
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
			'mtt_social_icon_two_switcher',
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
			'mtt_social_icon_two',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
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
			'mtt_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
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
			'mtt_social_icon_three_switcher',
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
			'mtt_social_icon_three',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
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
			'mtt_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
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
			'mtt_social_icon_four_switcher',
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
			'mtt_social_icon_four',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
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
			'mtt_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
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
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'mtt_box_name_style',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title',
			]
		);
		$repeater->add_control(
			'mtt_box_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_control(
			'mtt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		$repeater->add_control(
			'mtt_box_designation_heading',
			[
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-post',
			]
		);
		$repeater->add_control(
			'mtt_box_designation_color',
			[
				'label' => esc_html__( ' Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_des_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-post' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_designation_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);

		$repeater->add_control(
			'mtt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		
		$repeater->add_control(
			'mtt_box_profile_background_color',
			[
				'label' => esc_html__( 'Profile Image Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_team_profile_background, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-26-team .mtt-team-content::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-portfolio-team .mtt-pic::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-section::before,{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-28-team:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-section' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-thumble::after,{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-29-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-portfolio:after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box:hover, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-30-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-31-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-16-box::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-20-team .mtt-pic' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-23-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-22-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-21-team .mtt-pic::before' => 'background: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Icon One Style

		$repeater->add_control(
			'mtt_social_icon_one_style_switcher',
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
			'mtt_team_social_icon_one_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_one_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_one_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-one' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_one_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-one:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_one_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);

		// Icon Two Style
		$repeater->add_control(
			'mtt_social_icon_two_style_switcher',
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
			'mtt_team_social_icon_two_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_two_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_two_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.mtt-social-icon-two' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_two_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.mtt-social-icon-two:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_two_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);

		// Icon Three Style

		$repeater->add_control(
			'mtt_social_icon_three_style_switcher',
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
			'mtt_team_social_icon_three_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_three_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_three_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-three' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_three_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-three:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_three_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);

		// Icon Four Style

		$repeater->add_control(
			'mtt_social_icon_four_style_switcher',
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
			'mtt_team_social_icon_four_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_four_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_four_background_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-four' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_four_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-four:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_four_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_team_shape, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team .mtt-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-26-team .mtt-team-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-portfolio-team .mtt-pic::after, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content .mtt-title::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content .mtt-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-portfolio::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-28-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box-content::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-29-team .mtt-team-content .mtt-inner-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-15-box:before' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mtt_team_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-six-number-bg, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-total-team-box .mtt-social, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-19-team::after, {{WRAPPER}} .mtt-team-style-19-team::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-25-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic:after, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content:before,  {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content:after',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
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
				],
				'title_field' => `{{{ mtt_box_name }}}`,
			]
		);
		$this->add_responsive_control(
			'mtt_team__the_social_icon_size',
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
					'{{WRAPPER}} .mtt-social-icon-one i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-two i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-three i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-four i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-one svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-two svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-three svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-four svg' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_team__the_social_icon_round_size',
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
					'{{WRAPPER}} .mtt-social a' => 'inline-size: {{SIZE}}{{UNIT}}!important; block-size: {{SIZE}}{{UNIT}}!important;',
				],
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
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
			]
		);
		$this->add_responsive_control(
            'mtt_team_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-total-team-box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mtt_team_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-total-team-box' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_team_the_box_border',
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
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
				'selectors' => [
					'{{WRAPPER}} .mtt-total-team-box' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'mtt_team_the_box_box_shadow',
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
			]
		);
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$column_align = $settings['mtt_team_box_align'];
		$mtt_styles_no = $settings['mtt_style_selection'];

		// Social Link
		if ( ! empty( $settings['mtt_social_icon_one_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_one_link', $settings['mtt_social_icon_one_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_two_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_two_link', $settings['mtt_social_icon_two_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_three_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_three_link', $settings['mtt_social_icon_three_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_four_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_four_link', $settings['mtt_social_icon_four_link'] );
		}

			if( $mtt_styles_no ){?>
				<div class="mtt-team-area-<?php echo $mtt_styles_no ?>">
					<div class="bwd-container-fluid">
						<div class="bwd-row mtt_gapr <?php echo $column_align; ?>">
					<?php
						if ( $settings['mtt_box'] ) {
							foreach (  $settings['mtt_box'] as $item ) {
						echo '<div class="column_number mtt_gapc bwd-col-lg-3 bwd-col-md-6 bwd-col-sm-6 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="mtt-our-team-box mtt-total-team-box">
								<?php if( $mtt_styles_no == 'style2' ){?> <div class="mtt-our-team-item"> <?php } ?>
								<div class="mtt-pic mtt_team_profile_background">
									<img src="<?php echo esc_url($item['mtt_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									<?php if( $mtt_styles_no == 'style27' ){?> <div class="bwd-img-layer"></div> <?php } ?>
									<!-- image social -->
									<?php $allowed_styles1 = array('style3', 'style4', 'style18', 'style26'); if (in_array($mtt_styles_no, $allowed_styles1)) { include 'meet-the-team/social.php'; } ?>
								</div>
								<!-- middle social -->
								<?php $allowed_styles2 = array('style6', 'style9', 'style20', 'style21', 'style25'); if (in_array($mtt_styles_no, $allowed_styles2)) { include 'meet-the-team/social.php'; } ?>
								<?php if( $mtt_styles_no == 'style11' ){?> <div class="mtt-team-our-box-content"> <?php } ?>
								<div class="mtt-team-content">
									<?php if( $mtt_styles_no == 'style21' ){?> <div class="mtt-info"> <?php } ?>
										<?php if( $mtt_styles_no == 'style16' ){ include 'meet-the-team/social.php'; }?>
										<div class="mtt-title mtt-titleee"><?php echo esc_html($item['mtt_box_name']); ?></div>
										<div class="mtt-post"><?php echo $item['mtt_box_designation']; ?></div>
										<!-- Content social -->
										<?php $allowed_styles3 = array('style2', 'style5', 'style7', 'style10', 'style14', 'style15', 'style17', 'style19', 'style24', 'style27'); if (in_array($mtt_styles_no, $allowed_styles3)) { include 'meet-the-team/social.php'; } ?>
									<?php if( $mtt_styles_no == 'style21' ){?> </div> <?php } ?>
								</div>
								<!-- bottom social -->
								<?php $allowed_styles4 = array('style1', 'style8', 'style11', 'style12', 'style13', 'style22', 'style23', 'style28', 'style29', 'style30', 'style31'); if (in_array($mtt_styles_no, $allowed_styles4)) { include 'meet-the-team/social.php'; } ?>
								<?php if( $mtt_styles_no == 'style11' ){?> </div> <?php } ?>
								<?php if( $mtt_styles_no == 'style2' ){?> </div> <?php } ?>
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
