<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdsypx_ShowcaseProfile_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdsypx-showcase-your-profile', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Showcase Your Profile', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdsypx-ShowcaseProfile-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdsypx_profile_card_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdsypx_profile_card_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
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
				],
			]
		);
        $this->add_responsive_control(
			'bwdsypx_profile_card_align',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
                'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item,
                    {{WRAPPER}} .bwdsypx-profile-card-content-area,
                    {{WRAPPER}} .bwdsypx-profile-card-top-content,
                    {{WRAPPER}} .bwdsypx-profile-content-item,
                    {{WRAPPER}} .bwdsypx-profile-content-area' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_username',
			[
				'label' => esc_html__( 'Show Username', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_location',
			[
				'label' => esc_html__( 'Show Location', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_button',
			[
				'label' => esc_html__( 'Show Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdsypx_profile_show_social',
			[
				'label' => esc_html__( 'Show Social', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdsypx_profile-card_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

        // Content
        $repeater->add_control(
			'bwdsypx_profile_card_image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_card_title', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_card_username', [
				'label' => esc_html__( 'Username', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '@JohnDoe', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_location_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-map-marker-alt',
					'library' => 'fa-solid',
				],
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_location_title', [
				'label' => esc_html__( 'Location Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '6845 Fieldcrest Road Riverhead, NY 37906', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_one_number', [
				'label' => esc_html__( 'Status One Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '235', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_one_name', [
				'label' => esc_html__( 'Status One Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Posts', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_two_number', [
				'label' => esc_html__( 'Status Two Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '452', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_two_name', [
				'label' => esc_html__( 'Status Two Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Followers', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_three_number', [
				'label' => esc_html__( 'Status Three Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '798', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_three_name', [
				'label' => esc_html__( 'Status Three Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Following', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_four_number', [
				'label' => esc_html__( 'Status Four Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '85', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_stat_four_name', [
				'label' => esc_html__( 'Status 4 Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Works', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $repeater->add_control(
			'bwdsypx_profile_btn_text',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Follow', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_btn_link',
			[
				'label' => esc_html__( 'Btn Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
                'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
			'bwdsypx_social_one_switcher',
			[
				'label' => esc_html__( 'Social Icon One', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $repeater->start_controls_tabs(
            'bwdsypx_social_one_style_tabs',
            [
                'condition' => [
                       'bwdsypx_social_one_switcher' => 'yes',
                   ],
            ]
        );
        $repeater->start_controls_tab(
            'bwdsypx_social_one_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_one_switcher' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'bwdsypx_social_one',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'bwdsypx_social_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_social_one_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsypx_social_one_switcher' => 'yes',
				],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_one_style_tab',
            [
                'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_one_switcher' => 'yes',
				],
            ]
        );
        $repeater->add_control(
			'bwdsypx_profile_social_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_icon-round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx-profile-social-icon-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_one_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_one_switcher' => 'yes',
				],
            ]
        );
         $repeater->add_control(
			'bwdsypx_profile_social_hover_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_hover_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_icon_hover_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx-profile-social-icon_hover-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_icon_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-one:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
		$repeater->add_control(
			'bwdsypx_social_two_switcher',
			[
				'label' => esc_html__( 'Social Icon Two', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
                'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $repeater->start_controls_tabs(
            'bwdsypx_social_two_style_tabs',
            [
                'condition' => [
                       'bwdsypx_social_two_switcher' => 'yes',
                   ],
            ]
        );
        $repeater->start_controls_tab(
            'bwdsypx_social_two_content_tab',
            [
                'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_two_switcher' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'bwdsypx_social_two',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-x-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'bwdsypx_social_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_social_two_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsypx_social_two_switcher' => 'yes',
				],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_two_style_tab',
            [
                'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_two_switcher' => 'yes',
				],
            ]
        );
        $repeater->add_control(
			'bwdsypx_profile_social_two_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_two_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_two_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx-profile-social-two-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_two_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_two_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_two_switcher' => 'yes',
				],
            ]
        );
         $repeater->add_control(
			'bwdsypx_profile_social_two_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_two_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_two_hover_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_social_two_hover-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_two_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-two:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
		$repeater->add_control(
			'bwdsypx_social_three_switcher',
			[
				'label' => esc_html__( 'Social Icon Three', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
                'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $repeater->start_controls_tabs(
            'bwdsypx_social_three_style_tabs',
            [
                'condition' => [
                       'bwdsypx_social_three_switcher' => 'yes',
                   ],
            ]
        );
        $repeater->start_controls_tab(
            'bwdsypx_social_three_content_tab',
            [
                'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_three_switcher' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'bwdsypx_social_three',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'bwdsypx_social_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_social_three_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsypx_social_three_switcher' => 'yes',
				],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_three_style_tab',
            [
                'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_three_switcher' => 'yes',
				],
            ]
        );
        $repeater->add_control(
			'bwdsypx_profile_social_three_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_three_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_three_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_social_three_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_three_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_three_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_three_switcher' => 'yes',
				],
            ]
        );
         $repeater->add_control(
			'bwdsypx_profile_social_three_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_three_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_three_hover_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_social_three_hover-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_three_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-three:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
		$repeater->add_control(
			'bwdsypx_social_four_switcher',
			[
				'label' => esc_html__( 'Social Icon Four', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
                'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $repeater->start_controls_tabs(
            'bwdsypx_social_four_style_tabs',
            [
                'condition' => [
                       'bwdsypx_social_four_switcher' => 'yes',
                   ],
            ]
        );
        $repeater->start_controls_tab(
            'bwdsypx_social_four_content_tab',
            [
                'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_four_switcher' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'bwdsypx_social_four',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'bwdsypx_social_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_social_four_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsypx_social_four_switcher' => 'yes',
				],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_four_style_tab',
            [
                'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_four_switcher' => 'yes',
				],
            ]
        );
        $repeater->add_control(
			'bwdsypx_profile_social_four_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_four_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_four_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_social_four_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_four_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdsypx_social_four_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'bwdsypx_social_four_switcher' => 'yes',
				],
            ]
        );
         $repeater->add_control(
			'bwdsypx_profile_social_four_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_four_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsypx_profile_social_four_hover_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_social_four_hover-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdsypx_profile_social_four_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link .bwdsypx-social-four:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
         $repeater->add_responsive_control(
			'bwdsypx_profile_social_top_gap',
			[
				'label' => esc_html__( 'Icon Gap Form Top', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_social_item_gap',
			[
				'label' => esc_html__( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdsypx_profile_icon_align',
			[
				'label' => esc_html__( 'Icon Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
                'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
        $this->add_control(
			'bwdsypx_profile_card_repeater_list',
			[
				'label' => esc_html__( 'Content', 'bwdas_awesome_step' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					
					[
						'bwdsypx_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdsypx_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
                    [
						'bwdsypx_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdsypx_profile_card_title }}}',
			]
		);
        $this->end_controls_section();


//  slider settings start -----------------------------------------------------------------------------------------------------------------------------------------------
//  slider settings start -----------------------------------------------------------------------------------------------------------------------------------------------
		
		$this->start_controls_section(
			'bwdsypx_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_responsive_control(
			'bwdsypx_slider_padding',
			[
				'label' => esc_html__( 'Slider Custom Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdsypx_slider_main_height',
			[
				'label' => esc_html__( 'Slider Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//Slide Effect
		$this->add_control(
			'bwdsypx_slider_effects',
			[
				'label' => esc_html__( 'Slide Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'false'  => esc_html__( 'Slide', BWDEB_ROOT_AUTHOR_PRO ),
					'fade'  => esc_html__( 'Fade', BWDEB_ROOT_AUTHOR_PRO ),
					'coverflow'  => esc_html__( 'Cover Flow', BWDEB_ROOT_AUTHOR_PRO ),
					'cube'  => esc_html__( 'Cube', BWDEB_ROOT_AUTHOR_PRO ),
					'flip'  => esc_html__( 'Flip', BWDEB_ROOT_AUTHOR_PRO ),
					'cards'  => esc_html__( 'Cards', BWDEB_ROOT_AUTHOR_PRO ),
					'creative'  => esc_html__( 'Creative', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'frontend_available' => true,
			]
		);

		//slide speed
		$this->add_control(
			'bwdsypx_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
				'default' => 1500,
				'dynamic' => [
					'active' => true,
				],
				'frontend_available' => true,
			]
		);

		//popover-Coverflow-coverflow
		$this->add_control(
			'bwdsypx_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdsypx_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'bwdsypx_coverflow_rotate',
				[
					'label' => esc_html__( 'Coverflow Rotate', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Depth
			$this->add_control(
				'bwdsypx_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 100,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Modifier
			$this->add_control(
				'bwdsypx_coverflow_modifier',
				[
					'label' => esc_html__( 'Coverflow Modifier', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 1,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow shadow switcher
			$this->add_control(
				'bwdsypx_coverflow_shadow_switcher',
				[
					'label' => esc_html__( 'Coverflow Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);

			//Coverflow shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsypx_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-slide-shadow-left, {{WRAPPER}} .bwdsypx-swiper-slide-shadow-right',
					'condition' => [
						'bwdsypx_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'bwdsypx_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdsypx_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'bwdsypx_cube_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsypx_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-cube-shadow:before',
					'condition' => [
						'bwdsypx_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'bwdsypx_cube_slide_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Slide Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsypx_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-slide-shadow-left, {{WRAPPER}} .bwdsypx-swiper-slide-shadow-right',
					'condition' => [
						'bwdsypx_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'bwdsypx_cube_shadow_offset',
				[
					'label' => esc_html__( 'Cube Shadow Offset', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Cube Shadow Blur
			$this->add_control(
				'bwdsypx_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .bwdsypx-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//popover-responsive-device
		$this->add_control(
			'bwdsypx_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'frontend_available' => true,
				'default' => 'yes',
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'bwdsypx_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdsypx_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 15,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'bwdsypx_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( 768px - 1024px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdsypx_tablet_space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//mobile
			$this->add_control(
				'bwdsypx_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( maximum - 767px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdsypx_mobile_space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

		$this->end_popover();

        //Slider Direction
		$this->add_control(
            'bwdsypx_slider_direction',
            [
                'label' => __('Slider Direction', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'horizontal',
                'options' => [
                    'horizontal'  => __('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
                    'vertical' => __('Vertical', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'frontend_available' => true,
            ]
        );

        //Infinite Loop
        $this->add_control(
            'bwdsypx_loop_switcher',
            [
                'label' => esc_html__( 'Infinite Loop?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //autoplay
        $this->add_control(
            'bwdsypx_autoslide_switcher',
            [
                'label' => esc_html__( 'Autoplay?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //autoplay speed
		$this->add_control(
			'bwdsypx_slider_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speed (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
                'default' => 5000,
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'bwdsypx_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'bwdsypx_mousewheel',
            [
                'label' => esc_html__( 'Mousewheel?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //scrollbar
		$this->add_control(
            'bwdsypx_scroll_bar',
            [
                'label' => __('Scroll Bar?', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
            ]
        );

		//scrollbar show-hide
        $this->add_control(
            'bwdsypx_scroll_visibility',
            [
                'label' => __('Scroll Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', BWDEB_ROOT_AUTHOR_PRO),
                    'true' => __('Automatic hide', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdsypx_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'bwdsypx_slide_pagination',
            [
                'label' => esc_html__( 'Pagination?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //bwdsypx_pagination_type
        $this->add_control(
            'bwdsypx_pagination_type',
            [
                'label' => esc_html__( 'Pagination Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bullets',
                'options' => [
                    'bullets'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
					'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
                    'progressbar'  => esc_html__( 'Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
                    'fraction'  => esc_html__( 'Fraction', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdsypx_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'bwdsypx_arrow_switcher',
            [
                'label' => esc_html__( 'Arrow Navigation?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //arrow type
        $this->add_control(
            'bwdsypx_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                    'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdsypx_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'bwdsypx_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdsypx_nav_type' => 'icon',
                    'bwdsypx_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'bwdsypx_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdsypx_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
				]
			);

        $this->end_popover();


        //popover Navigation text
        $this->add_control(
			'bwdsypx_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdsypx_nav_type' => 'text',
                    'bwdsypx_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'bwdsypx_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

            //next text
			$this->add_control(
				'bwdsypx_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

        $this->end_popover();


        $this->end_controls_section();

		$this->start_controls_section(
			'bwdsypx_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsypx_arrow_switcher' => 'yes',
                ],
			]
		);

        //norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

            //arrow-color
            $this->add_control(
                'bwdsypx_arrow_color',
                [
                    'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsypx_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdsypx_arrow_size',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdsypx_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsypx_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev',
                    'condition' => [
						'bwdsypx_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdsypx_arrow_width',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdsypx_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsypx_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdsypx_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdsypx_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'bwdsypx_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdsypx_slider_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdsypx_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdsypx_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsypx_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdsypx_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdsypx_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsypx_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdsypx_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdsypx_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsypx_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdsypx_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdsypx_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsypx_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover',
                    'condition' => [
						'bwdsypx_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdsypx_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdsypx_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsypx_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdsypx_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdsypx_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsypx-swiper-button-next .bwdsypx-swiper-next:hover, {{WRAPPER}} .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdsypx_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdsypx_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-next .bwdsypx-swiper-next, {{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdsypx_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdsypx_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsypx_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdsypx_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-prev .bwdsypx-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdsypx_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsypx_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-next .bwdsypx-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdsypx_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdsypx-profile-card-common-area:hover .bwdsypx-swiper-button-next .bwdsypx-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'bwdsypx_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsypx_pagination_type' => ['bullets', 'numbers'],
					'bwdsypx_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'bwdsypx_dots_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

            //horizontal
			//bottom
			$this->add_responsive_control(
				'bwdsypx_dots_bottom_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsypx_slider_direction' => 'horizontal',
                    ],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdsypx_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsypx_slider_direction' => 'horizontal',
                    ],
				]
			);

            //vertical
            //top
			$this->add_responsive_control(
				'bwdsypx_dots_top_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination' => 'top: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsypx_slider_direction' => 'vertical',
                    ],
				]
			);

			//right
			$this->add_responsive_control(
				'bwdsypx_dots_right_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination' => 'right: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsypx_slider_direction' => 'vertical',
                    ],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'bwdsypx_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination .bwdsypx-swiper-pagination-bullet:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdsypx_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'bwdsypx_dots_gap_vartical',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination .bwdsypx-swiper-pagination-bullet:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdsypx_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdsypx_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'bwdsypx_slider_direction' => 'horizontal',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdsypx_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet .bwdsypx-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsypx_pagination_type' => 'bullets',
					'bwdsypx_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination .bwdsypx-swiper-pagination-bullet',
				'condition' => [
					'bwdsypx_pagination_type' => 'bullets',
					'bwdsypx_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsypx_dots_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsypx_dots_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsypx_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdsypx_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet-active .bwdsypx-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsypx_pagination_type' => 'bullets',
					'bwdsypx_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsypx_dots_width_active',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsypx_dots_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsypx_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet.bwdsypx-swiper-pagination-bullet-active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdsypx_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet .bwdsypx-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsypx_pagination_type' => 'bullets',
					'bwdsypx_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsypx_dots_width_hover',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsypx_dots_height_hover',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsypx_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsypx_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsypx_pagination_type' => 'progressbar',
					'bwdsypx_slide_pagination' => 'yes',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_progressbar',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_progressbar',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//Height
		$this->add_responsive_control(
			'bwdsypx_progressbar_height',
			[
				'label' => esc_html__( 'height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsypx_slider_direction' => 'horizontal',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsypx_progressbar_width',
			[
				'label' => esc_html__( 'width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-progressbar' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsypx_slider_direction' => 'vertical',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_progressbar_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-progressbar',
			]
		);

		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_progressbar',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_progressbar_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-progressbar .bwdsypx-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsypx_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsypx_pagination_type' => 'fraction',
					'bwdsypx_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'bwdsypx_fraction_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//bottom
			$this->add_responsive_control(
				'bwdsypx_fraction_bottom_position',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdsypx_fraction_left_position',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'bwdsypx_fraction_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'bwdsypx_fraction_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'bwdsypx_fraction_gap',
			[
				'label' => esc_html__( 'Fraction Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdsypx_fraction_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'bwdsypx_fraction_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'bwdsypx_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span.bwdsypx-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_fraction_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_fraction_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_faction_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsypx_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdsypx_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsypx_scroll_bar' => 'yes',
                ],
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsypx_scrollbar_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsypx-swiper-scrollbar-drag',
			]
		);

		$this->end_controls_section();
//  slider settings end -----------------------------------------------------------------------------------------------------------------------------------------------
//  slider settings end -----------------------------------------------------------------------------------------------------------------------------------------------
















        // Style tab

		$this->start_controls_section(
			'bwdsypx_profile_img_style',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdsypx_profile_img_bg_color',
			[
				'label' => esc_html__( 'Img Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item::before,
                    {{WRAPPER}} .bwdsypx-profile-card-img::before' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style15','style16','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_profile_img_box_shadow',
				'label' => esc_html__( 'Img Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-img',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style20','style21',],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_img_border',
				'label' => esc_html__( 'Img Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-img,
                {{WRAPPER}} .bwdsypx-profile-wrapper-img',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style5','style6','style9','style11','style12','style14','style15','style17','style18','style19','style21',],
				],
			]
		);
        $this->add_responsive_control (
			'bwdsypx_profile_img_width',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-img,
                    {{WRAPPER}} .bwdsypx-profile-wrapper-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'bwdsypx_profile_title_style',
			[
				'label' => esc_html__( 'Name Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdsypx_profile_title_box_bg_color',
			[
				'label' => esc_html__( 'Title Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-name-info,
                    {{WRAPPER}} .bwdsypx-profile-card-name-info:before,
                    {{WRAPPER}} .bwdsypx-profile-content-item,
                    {{WRAPPER}} .bwdsypx-profile-status-area,
                    {{WRAPPER}} .bwdsypx-profile-content-area' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style2','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style16','style17','style19','style20',],
				],
			]
		);
        $this->add_control(
			'bwdsypx_profile_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-name' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_title_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-name',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdsypx_profile_username_style',
			[
				'label' => esc_html__( 'Username Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdsypx_profile_username_color',
			[
				'label' => esc_html__( 'Username Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-username' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_username_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-username',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdsypx_profile_locatione_style',
			[
				'label' => esc_html__( 'Location Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdsypx_profile_location_title_color',
			[
				'label' => esc_html__( 'Location Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-adress' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_location_title_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-adress',
			]
		);
        $this->add_control(
			'bwdsypx_profile_location_icon_color',
			[
				'label' => esc_html__( 'Location Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-adress-title i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdsypx-profile-adress-title svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $this->add_responsive_control(
			'bwdsypx_profile_location_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-adress-title i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdsypx-profile-adress-title svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdsypx_profile_status_style',
			[
				'label' => esc_html__( 'Status Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdsypx_profile_status_bg_color',
			[
				'label' => esc_html__( 'Status Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-state-area,
                    {{WRAPPER}} .bwdsypx-profile-card-status' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style13','style14','style15','style16','style17','style18','style19','style20','style21',],
				],
			]
		);
        $this->add_control(
			'bwdsypx_profile_status_color',
			[
				'label' => esc_html__( 'Status Number Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-stat' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_status_number_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-stat',
			]
		);
        $this->add_control(
			'bwdsypx_profile_status_name_color',
			[
				'label' => esc_html__( 'Status Name Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-label' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_status_name_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-label',
			]
		);
        $this->end_controls_section();

        // button
        $this->start_controls_section(
			'bwdsypx_profile_button_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'bwdsypx_profile_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsypx_profile_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsypx_profile_card_button_typography',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-btn',
			]
		);

        $this->add_control(
			'bwdsypx_profile_card_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdsypx_profile_card_button_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn' => 'background-color: {{VALUE}}',
				],
				
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx-profile-btn-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-btn',
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style10','style11','style13','style14','style16','style17','style18','style19','style21'],
				],
			]
		);

        $this->add_responsive_control(
			'bwdsypx_profile_card_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdsypx_profile_card_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

        $this->start_controls_tab(
			'bwdsypx_profile_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'bwdsypx_profile_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdsypx_profile_button_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-btn:hover,
                    {{WRAPPER}} .bwdsypx-profile-btn:hover:before,
                    {{WRAPPER}} .bwdsypx-profile-btn:hover:after' => 'background-color: {{VALUE}}',
				],
				
			]
		);


		$this->end_controls_tab();

		$this->end_controls_tabs();
        
        $this->end_controls_section();





		// social button
		$this->start_controls_section(
			'bwdsypx_profile_socialx_button_section',
			[
				'label' => esc_html__( 'Social Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdsypx_profile_socialx_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsypx_profile_socialx_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsypx_profile_socialx__color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link a i' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdsypx_profile_socialx__bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link a' => 'background: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_socialx__border',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link a',
			]
		);

		$this->end_controls_tab();



		$this->start_controls_tab(
			'bwdsypx_profile_socialx_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsypx_profile_socialx_h_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link a:hover i' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdsypx_profile_socialx_h_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-share-link a:hover' => 'background: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_socialx_h_border',
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-share-link a:hover',
			]
		);

		$this->end_controls_tab();


		$this->end_controls_tabs();

        $this->end_controls_section();


        $this->start_controls_section(
			'bwdsypx_profile_box_section',
			[
				'label' => esc_html__( 'Profile Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsypx_profile_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-item',
			]
		);
        $this->add_control(
			'bwdsypx_profile_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item,
                    {{WRAPPER}} .bwdsypx-profile-card-10-area .bwdsypx-profile-content-item,
                    {{WRAPPER}} .bwdsypx-profile-card-14-area .bwdsypx-profile-content-item,
                    {{WRAPPER}} .bwdsypx-profile-card-20-area .bwdsypx-profile-front-card .bwdsypx-profile-content-area' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'bwdsypx_profile_box_top_bg_color',
			[
				'label' => esc_html__( 'Top Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item:before,
                    {{WRAPPER}} .bwdsypx-profile-card-9-area .bwdsypx-profile-card-top-content,
                    {{WRAPPER}} .bwdsypx-profile-card-9-area .bwdsypx-profile-card-name-info' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdsypx_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style8','style10','style11','style12','style14','style15','style16','style17','style18','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsypx_profile_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsypx-profile-card-item',
			]
		);
        $this->add_responsive_control(
			'bwdsypx_profile_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdsypx_profile_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsypx-profile-card-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        

        
    }

	protected function render() {

        $settings = $this->get_settings_for_display();

        $bwdsypx_title_show = $settings['bwdsypx_profile_show_title'];
        $bwdsypx_username_show = $settings['bwdsypx_profile_show_username'];
        $bwdsypx_location_show = $settings['bwdsypx_profile_show_location'];
        $bwdsypx_status_show = $settings['bwdsypx_profile_show_status'];
        $bwdsypx_button_show = $settings['bwdsypx_profile_show_button'];
        $bwdsypx_social_show = $settings['bwdsypx_profile_show_social'];
        //$bwdsypx_column_gap = $settings['bwdsypx_profile_card_column_gap'];



		if ('style1' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-1-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
								<div class="bwdsypx-custom-item">
									<div class="bwdsypx-profile-card-item">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
			</div>
		<?php
		} elseif ('style2' === $settings['bwdsypx_profile_card_style']) {?>
				<div class="bwdsypx-profile-card-2-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                <div class="bwdsypx-custom-item">
                                    <div class="bwdsypx-profile-card-item">
                                        <div class="bwdsypx-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdsypx-profile-card-name-info">
                                            <?php if( $bwdsypx_title_show === 'yes' ) {?>
                                            <div class="bwdsypx-profile-card-name">
                                                <?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdsypx_username_show === 'yes' ) {?>
                                            <div class="bwdsypx-profile-card-username">
                                                <?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdsypx-profile-card-bio">
                                            <?php if( $bwdsypx_location_show === 'yes' ) {?>
                                            <div class="bwdsypx-profile-card-adress">
                                                <div class="bwdsypx-profile-adress-title">
                                                    <?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdsypx_status_show === 'yes' ) {?>
                                        <div class="bwdsypx-profile-card-status">
                                            <div class="bwdsypx-profile-state-area">
                                                <div class="bwdsypx-profile-stat">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdsypx-profile-label">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdsypx-profile-state-area">
                                                <div class="bwdsypx-profile-stat">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdsypx-profile-label">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdsypx-profile-state-area">
                                                <div class="bwdsypx-profile-stat">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdsypx-profile-label">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdsypx-profile-state-area">
                                                <div class="bwdsypx-profile-stat">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdsypx-profile-label">
                                                    <?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdsypx_button_show === 'yes' ) {?>
                                        <div class="bwdsypx-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
                                        </div><?php } ?>
                                        <div class="bwdsypx-profile-card-share-link">
                                            <?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                            <?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                            <?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                            <?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                        </div>
                                    </div>
                                </div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style3' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-3-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                <div class="bwdsypx-custom-item">
                                    <div class="bwdsypx-profile-card-item">
                                        <div class="bwdsypx-profile-card-top-content">
                                            <div class="bwdsypx-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdsypx-profile-card-name-info">
                                                <?php if( $bwdsypx_title_show === 'yes' ) {?>
                                                <div class="bwdsypx-profile-card-name">
                                                    <?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdsypx_username_show === 'yes' ) {?>
                                                <div class="bwdsypx-profile-card-username">
                                                    <?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdsypx-profile-wrapper-img">
                                                <img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="bwdsypx-profile-card-content-area">
                                            <div class="bwdsypx-profile-card-bio">
                                                <?php if( $bwdsypx_location_show === 'yes' ) {?>
                                                <div class="bwdsypx-profile-card-adress">
                                                    <div class="bwdsypx-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdsypx_status_show === 'yes' ) {?>
                                            <div class="bwdsypx-profile-card-status">
                                                <div class="bwdsypx-profile-state-area">
                                                    <div class="bwdsypx-profile-stat">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdsypx-profile-label">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdsypx-profile-state-area">
                                                    <div class="bwdsypx-profile-stat">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdsypx-profile-label">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdsypx-profile-state-area">
                                                    <div class="bwdsypx-profile-stat">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdsypx-profile-label">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdsypx-profile-state-area">
                                                    <div class="bwdsypx-profile-stat">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdsypx-profile-label">
                                                        <?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <div class="bwdsypx-profile-card-share-link">
                                                <?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                                <?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                                <?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                                <?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
                                            </div>
                                            <?php if( $bwdsypx_button_show === 'yes' ) {?>
                                            <div class="bwdsypx-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                        </div>
                                    </div>
                                </div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style4' === $settings['bwdsypx_profile_card_style']) {?>
					<div class="bwdsypx-profile-card-4-area bwdsypx-profile-card-common-area ">
								<div class="bwdsypx-swiper bwdsypx-mySwiper">
									<div class="bwdsypx-swiper-wrapper">
										<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
										foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

											<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
											<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-card-top-content">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-card-content-area">
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>
						<?php } } ?>
					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style5' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-5-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-card-content-area">
										<div class="bwdsypx-profile-content-item">
											<div class="bwdsypx-profile-card-name-info">
												<?php if( $bwdsypx_title_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-name">
													<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
												</div><?php } ?>
												<?php if( $bwdsypx_username_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-username">
													<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
												</div><?php } ?>
											</div>
											<div class="bwdsypx-profile-card-bio">
												<?php if( $bwdsypx_location_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-adress">
													<div class="bwdsypx-profile-adress-title">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</div>
													<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
												</div><?php } ?>
											</div>
											<?php if( $bwdsypx_status_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-status">
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
														</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
													</div>
												</div>
											</div><?php } ?>
											<div class="bwdsypx-profile-card-share-link">
												<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											</div>
											<?php if( $bwdsypx_button_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-btn">
												<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
											</div><?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style6' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-6-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>
							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-top-content">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-content-item">
											<div class="bwdsypx-profile-card-bio">
												<?php if( $bwdsypx_location_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-adress">
													<div class="bwdsypx-profile-adress-title">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</div>
													<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
												</div><?php } ?>
											</div>
											<?php if( $bwdsypx_status_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-status">
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
														</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
													</div>
												</div>
											</div><?php } ?>
											<?php if( $bwdsypx_button_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-btn">
												<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-card-name-info">
										<?php if( $bwdsypx_title_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-name">
											<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
										</div><?php } ?>
										<?php if( $bwdsypx_username_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-username">
											<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style7' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-7-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style8' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-8-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-top-card"></div>
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style9' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-9-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-top-content">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
									<div class="bwdsypx-profile-card-share-link">
										<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style10' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-10-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-content-area">
											<div class="bwdsypx-profile-card-name-info">
												<?php if( $bwdsypx_title_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-name">
													<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
												</div><?php } ?>
												<?php if( $bwdsypx_username_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-username">
													<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
												</div><?php } ?>
											</div>
											<div class="bwdsypx-profile-card-bio">
												<?php if( $bwdsypx_location_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-adress">
													<div class="bwdsypx-profile-adress-title">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</div>
													<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
												</div><?php } ?>
											</div>
											<?php if( $bwdsypx_status_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-status">
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
														</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
													</div>
												</div>
											</div><?php } ?>
											<?php if( $bwdsypx_button_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-btn">
												<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-card-share-link">
										<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style11' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-11-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-img">
											<div class="bwdsypx-profile-circle-1"></div>
											<div class="bwdsypx-profile-circle-2"></div>
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-share-link">
												<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
									<?php if( $bwdsypx_status_show === 'yes' ) {?>
									<div class="bwdsypx-profile-card-status">
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
												</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
											</div>
										</div>
									</div><?php } ?>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style12' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-12-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style13' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-13-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-card-name-info">
										<?php if( $bwdsypx_title_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-name">
											<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
										</div><?php } ?>
										<?php if( $bwdsypx_username_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-username">
											<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
										</div><?php } ?>
									</div>
									<div class="bwdsypx-profile-card-bio">
										<?php if( $bwdsypx_location_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-adress">
											<div class="bwdsypx-profile-adress-title">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
											<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
										</div><?php } ?>
									</div>
									<?php if( $bwdsypx_status_show === 'yes' ) {?>
									<div class="bwdsypx-profile-card-status">
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
												</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
											</div>
										</div>
										<div class="bwdsypx-profile-state-area">
											<div class="bwdsypx-profile-stat">
												<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
											</div>
											<div class="bwdsypx-profile-label">
												<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
											</div>
										</div>
									</div><?php } ?>
									<div class="bwdsypx-profile-card-share-link">
										<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
									<?php if( $bwdsypx_button_show === 'yes' ) {?>
									<div class="bwdsypx-profile-card-btn">
										<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
									</div><?php } ?>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style14' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-14-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style15' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-15-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-status-area">
											<?php if( $bwdsypx_status_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-status">
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
														</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
													</div>
												</div>
												<div class="bwdsypx-profile-state-area">
													<div class="bwdsypx-profile-stat">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
													</div>
													<div class="bwdsypx-profile-label">
														<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
													</div>
												</div>
											</div><?php } ?>
											<?php if( $bwdsypx_button_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-btn">
												<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-share-link">
												<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style16' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-16-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-card-share-link">
										<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
									<div class="bwdsypx-profile-card-name-info">
										<?php if( $bwdsypx_title_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-name">
											<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
										</div><?php } ?>
										<?php if( $bwdsypx_username_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-username">
											<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
										</div><?php } ?>
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
									</div>
									<?php if( $bwdsypx_button_show === 'yes' ) {?>
									<div class="bwdsypx-profile-card-btn">
										<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
									</div><?php } ?>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style17' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-17-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-top-content">
										<div class="bwdsypx-profile-card-img">
											<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
										</div>
										<div class="bwdsypx-profile-content-item">
											<div class="bwdsypx-profile-card-name-info">
												<?php if( $bwdsypx_title_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-name">
													<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
												</div><?php } ?>
												<?php if( $bwdsypx_username_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-username">
													<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
												</div><?php } ?>
											</div>
											<div class="bwdsypx-profile-card-bio">
												<?php if( $bwdsypx_location_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-adress">
													<div class="bwdsypx-profile-adress-title">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</div>
													<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
												</div><?php } ?>
											</div>
										</div>
										<div class="bwdsypx-profile-card-add"><i class="fa fa-plus"></i></div>
									</div>
									<div class="bwdsypx-profile-bottom-content">
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
									</div>
									<div class="bwdsypx-profile-card-back">
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style18' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-18-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style19' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-19-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
									</div>
									<div class="bwdsypx-profile-content-item">
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<div class="bwdsypx-profile-card-share-link">
											<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										</div>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style20' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-20-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-wrapper">
									<div class="bwdsypx-profile-card-item">
										<div class="bwdsypx-profile-front-card">
											<div class="bwdsypx-profile-card-top-content">
												<div class="bwdsypx-profile-card-img">
													<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
												</div>
												<div class="bwdsypx-profile-wrapper-img">
													<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
												</div>
											</div>
											<div class="bwdsypx-profile-content-area">
												<div class="bwdsypx-profile-card-name-info">
													<?php if( $bwdsypx_title_show === 'yes' ) {?>
													<div class="bwdsypx-profile-card-name">
														<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
													</div><?php } ?>
													<?php if( $bwdsypx_username_show === 'yes' ) {?>
													<div class="bwdsypx-profile-card-username">
														<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
													</div><?php } ?>
												</div>
												<div class="bwdsypx-profile-card-bio">
													<?php if( $bwdsypx_location_show === 'yes' ) {?>
													<div class="bwdsypx-profile-card-adress">
														<div class="bwdsypx-profile-adress-title">
															<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
														</div>
														<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
													</div><?php } ?>
												</div>
												<?php if( $bwdsypx_status_show === 'yes' ) {?>
												<div class="bwdsypx-profile-card-status">
													<div class="bwdsypx-profile-state-area">
														<div class="bwdsypx-profile-stat">
															<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
															</div>
														<div class="bwdsypx-profile-label">
															<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
														</div>
													</div>
													<div class="bwdsypx-profile-state-area">
														<div class="bwdsypx-profile-stat">
															<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
														</div>
														<div class="bwdsypx-profile-label">
															<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
														</div>
													</div>
													<div class="bwdsypx-profile-state-area">
														<div class="bwdsypx-profile-stat">
															<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
														</div>
														<div class="bwdsypx-profile-label">
															<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
														</div>
													</div>
													<div class="bwdsypx-profile-state-area">
														<div class="bwdsypx-profile-stat">
															<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
														</div>
														<div class="bwdsypx-profile-label">
															<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
														</div>
													</div>
												</div><?php } ?>
											</div>   
										</div>   
										<div class="bwdsypx-profile-back-card">
											<div class="bwdsypx-profile-card-share-link">
												<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											</div>
											<?php if( $bwdsypx_button_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-btn">
												<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
											</div><?php } ?>
										</div>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		} elseif ('style21' === $settings['bwdsypx_profile_card_style']) {?>
			<div class="bwdsypx-profile-card-21-area bwdsypx-profile-card-common-area ">
				<div class="bwdsypx-swiper bwdsypx-mySwiper">
					<div class="bwdsypx-swiper-wrapper">
						<?php if( $settings['bwdsypx_profile_card_repeater_list'] ) {
						foreach( $settings['bwdsypx_profile_card_repeater_list'] as $item ) { ?>

							<div class="bwdsypx-swiper-slide elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdsypx-custom-item">
								<div class="bwdsypx-profile-card-item">
									<div class="bwdsypx-profile-card-img">
										<img src="<?php echo esc_url($item['bwdsypx_profile_card_image']['url']); ?>" alt="">
									</div>
									<div class="bwdsypx-profile-content-area">
										<div class="bwdsypx-profile-card-name-info">
											<?php if( $bwdsypx_title_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-name">
												<?php echo esc_html($item['bwdsypx_profile_card_title']); ?>
											</div><?php } ?>
											<?php if( $bwdsypx_username_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-username">
												<?php echo esc_html($item['bwdsypx_profile_card_username']); ?>
											</div><?php } ?>
										</div>
										<div class="bwdsypx-profile-card-bio">
											<?php if( $bwdsypx_location_show === 'yes' ) {?>
											<div class="bwdsypx-profile-card-adress">
												<div class="bwdsypx-profile-adress-title">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>.3
												</div>
												<?php echo esc_html($item['bwdsypx_profile_location_title']); ?> 
											</div><?php } ?>
										</div>
										<?php if( $bwdsypx_status_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-status">
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_number']); ?>
													</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_one_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_two_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_three_name']); ?>
												</div>
											</div>
											<div class="bwdsypx-profile-state-area">
												<div class="bwdsypx-profile-stat">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_number']); ?>
												</div>
												<div class="bwdsypx-profile-label">
													<?php echo esc_html($item['bwdsypx_profile_stat_four_name']); ?>
												</div>
											</div>
										</div><?php } ?>
										<?php if( $bwdsypx_button_show === 'yes' ) {?>
										<div class="bwdsypx-profile-card-btn">
											<a href="<?php echo esc_url($item['bwdsypx_profile_btn_link']['url']); ?>" class="bwdsypx-profile-btn"><?php echo esc_html($item['bwdsypx_profile_btn_text']); ?></a>
										</div><?php } ?>
									</div>
									<div class="bwdsypx-profile-card-share-link">
										<?php if('yes' === $item['bwdsypx_social_one_switcher']){ ?><a class="bwdsypx-social-one" href="<?php echo esc_url($item['bwdsypx_social_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_two_switcher']){ ?><a class="bwdsypx-social-two" href="<?php echo esc_url($item['bwdsypx_social_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_three_switcher']){ ?><a class="bwdsypx-social-three" href="<?php echo esc_url($item['bwdsypx_social_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
										<?php if('yes' === $item['bwdsypx_social_four_switcher']){ ?><a class="bwdsypx-social-four" href="<?php echo esc_url($item['bwdsypx_social_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['bwdsypx_social_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
									</div>
								</div>
							</div>
							</div>

						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdsypx-swiper.php';?> 
		    </div>
		<?php
		}
    }

}