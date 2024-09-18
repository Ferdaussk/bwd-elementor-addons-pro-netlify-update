<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDPCProfileCard extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbpc-profile-card';
	}

	public function get_title() {
		return esc_html__( 'Profile Card', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'profile-card bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'profile', 'card', 'profile card' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdpc_profile_card_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdpc_profile_card_style',
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
			'bwdpc_profile_card_column_option',
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
				'prefix_class' => 'bwdpc-grid%s-'
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_card_column_gap',
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
					'{{WRAPPER}} .bwdpc_gapc' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc_gapr' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control (
			'bwdpc_profile_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
                'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-wrapper' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_card_align',
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
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-content-area,
                    {{WRAPPER}} .bwdpc-profile-card-top-content,
                    {{WRAPPER}} .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-content-area' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
        $this->add_control(
			'bwdpc_profile_show_title',
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
			'bwdpc_profile_show_username',
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
			'bwdpc_profile_show_location',
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
			'bwdpc_profile_show_status',
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
			'bwdpc_profile_show_button',
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
			'bwdpc_profile_show_social',
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
			'bwdpc_profile-card_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

        // Content
        $repeater->add_control(
			'bwdpc_profile_card_image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
        $repeater->add_control(
			'bwdpc_profile_card_title', [
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
			'bwdpc_profile_card_username', [
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
			'bwdpc_profile_location_icon',
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
			'bwdpc_profile_location_title', [
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
			'bwdpc_profile_stat_one_number', [
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
			'bwdpc_profile_stat_one_name', [
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
			'bwdpc_profile_stat_two_number', [
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
			'bwdpc_profile_stat_two_name', [
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
			'bwdpc_profile_stat_three_number', [
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
			'bwdpc_profile_stat_three_name', [
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
			'bwdpc_profile_stat_four_number', [
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
			'bwdpc_profile_stat_four_name', [
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
			'bwdpc_profile_btn_text',
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
			'bwdpc_profile_btn_link',
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
        
        $this->add_control(
			'bwdpc_profile_card_repeater_list',
			[
				'label' => esc_html__( 'Content', 'bwdas_awesome_step' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					
					[
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
                    [
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdpc_profile_card_title }}}',
			]
		);
        
        // Icon
        $repeater_icon = new \Elementor\Repeater();

		$repeater_icon->add_control(
			'bwdpc_profile_icon_title', [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Icon' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater_icon->add_control(
			'bwdpc_profile_box_icon',
			[
				'label' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon svg:hover' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon' => 'background-color: {{VALUE}}',
				],
				// 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style8','style11','style20'],
				// ],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_hover_bg_color',
			[
				'label' => esc_html__( 'Background Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover,
                    {{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover::before' => 'background-color: {{VALUE}}',
				],
				// 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style8','style11'],
				// ],
			]
		);
		$repeater_icon->add_control(
			'bwdpc_profile_icon_link',
			[
				'label' => esc_html__( 'Icon Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 
				BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
        $this->add_control(
			'bwdpc_profile_box_social_list',
			[
				'label' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_icon->get_controls(),
				
				'default' => [
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-x-twitter',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-dribbble',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdpc_profile_icon_title }}}',
			]
		);

        $this->end_controls_section();

        // Style tab

		$this->start_controls_section(
			'bwdpc_profile_img_style',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_img_bg_color',
			[
				'label' => esc_html__( 'Img Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item::before,
                    {{WRAPPER}} .bwdpc-profile-card-img::before' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style15','style16','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpc_profile_img_box_shadow',
				'label' => esc_html__( 'Img Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-img',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style20','style21',],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_img_border',
				'label' => esc_html__( 'Img Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-img,
                {{WRAPPER}} .bwdpc-profile-wrapper-img',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style5','style6','style9','style11','style12','style14','style15','style17','style18','style19','style21',],
				],
			]
		);
        $this->add_responsive_control (
			'bwdpc_profile_img_width',
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
					'{{WRAPPER}} .bwdpc-profile-card-img,
                    {{WRAPPER}} .bwdpc-profile-wrapper-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_title_style',
			[
				'label' => esc_html__( 'Name Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_title_box_bg_color',
			[
				'label' => esc_html__( 'Title Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-name-info,
                    {{WRAPPER}} .bwdpc-profile-card-name-info:before,
                    {{WRAPPER}} .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-status-area,
                    {{WRAPPER}} .bwdpc-profile-content-area' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style16','style17','style19','style20',],
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-name' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_title_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-name',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_username_style',
			[
				'label' => esc_html__( 'Username Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_username_color',
			[
				'label' => esc_html__( 'Username Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-username' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_username_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-username',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_locatione_style',
			[
				'label' => esc_html__( 'Location Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_location_title_color',
			[
				'label' => esc_html__( 'Location Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-adress' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_location_title_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-adress',
			]
		);
        $this->add_control(
			'bwdpc_profile_location_icon_color',
			[
				'label' => esc_html__( 'Location Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-adress-title i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdpc-profile-adress-title svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_location_icon_size',
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
					'{{WRAPPER}} .bwdpc-profile-adress-title i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc-profile-adress-title svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_status_style',
			[
				'label' => esc_html__( 'Status Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_status_bg_color',
			[
				'label' => esc_html__( 'Status Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-state-area,
                    {{WRAPPER}} .bwdpc-profile-card-status' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style13','style14','style15','style16','style17','style18','style19','style20','style21',],
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_status_color',
			[
				'label' => esc_html__( 'Status Number Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-stat' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_status_number_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-stat',
			]
		);
        $this->add_control(
			'bwdpc_profile_status_name_color',
			[
				'label' => esc_html__( 'Status Name Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-label' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_status_name_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-label',
			]
		);
        $this->end_controls_section();

        // Social Icon
        $this->start_controls_section(
			'bwdpc_profile_social_icon_section',
			[
				'label' => esc_html__( 'Social Icon Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'bwdpc_profile_social_icon_style_tabs'
		);

		$this->start_controls_tab(
			'bwdpc_profile_social_icon_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_size',
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
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc-profile-card-share-link svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdpc_profile_social_icon-round_size',
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
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc-profile-social-icon-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-share-link a',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

        $this->start_controls_tab(
			'bwdpc_profile_social_icon_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_social_icon_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-share-link a:hover',
                // 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style2','style3','style4','style5','style6','style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				// ],
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

        // button
        $this->start_controls_section(
			'bwdpc_profile_button_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'bwdpc_profile_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdpc_profile_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_card_button_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-btn',
			]
		);

        $this->add_control(
			'bwdpc_profile_card_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdpc_profile_card_button_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'background-color: {{VALUE}}',
				],
				
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc-profile-btn-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-btn',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style10','style11','style13','style14','style16','style17','style18','style19','style21'],
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_card_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_card_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

        $this->start_controls_tab(
			'bwdpc_profile_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'bwdpc_profile_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdpc_profile_button_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn:hover,
                    {{WRAPPER}} .bwdpc-profile-btn:hover:before,
                    {{WRAPPER}} .bwdpc-profile-btn:hover:after' => 'background-color: {{VALUE}}',
				],
				
			]
		);


		$this->end_controls_tab();
        
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_box_section',
			[
				'label' => esc_html__( 'Profile Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpc_profile_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-item',
			]
		);
        $this->add_control(
			'bwdpc_profile_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-10-area .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-card-14-area .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-card-20-area .bwdpc-profile-front-card .bwdpc-profile-content-area' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_box_top_bg_color',
			[
				'label' => esc_html__( 'Top Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item:before,
                    {{WRAPPER}} .bwdpc-profile-card-9-area .bwdpc-profile-card-top-content,
                    {{WRAPPER}} .bwdpc-profile-card-9-area .bwdpc-profile-card-name-info' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style8','style10','style11','style12','style14','style15','style16','style17','style18','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-item',
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        

        
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $bwdpc_title_show = $settings['bwdpc_profile_show_title'];
        $bwdpc_username_show = $settings['bwdpc_profile_show_username'];
        $bwdpc_location_show = $settings['bwdpc_profile_show_location'];
        $bwdpc_status_show = $settings['bwdpc_profile_show_status'];
        $bwdpc_button_show = $settings['bwdpc_profile_show_button'];
        $bwdpc_social_show = $settings['bwdpc_profile_show_social'];
        $bwdpc_column_gap = $settings['bwdpc_profile_card_column_gap'];

        

        if ('style1' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-1-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-bio">
                                            <?php if( $bwdpc_location_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-adress">
                                                <div class="bwdpc-profile-adress-title">
                                                    <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
												?>
												<a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
												href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
												<?php 
													}
                                            } ?>
                                        </div><?php } ?>
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
        }elseif ('style2' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-2-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-bio">
                                            <?php if( $bwdpc_location_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-adress">
                                                <div class="bwdpc-profile-adress-title">
                                                    <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
												?>
												<a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
												href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
												<?php 
													}
                                            } ?>
                                        </div><?php } ?>
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
        }elseif ('style3' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-3-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-top-content">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-wrapper-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-card-content-area">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                    if( $settings['bwdpc_profile_box_social_list'] ) {
                                                    foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                    ?>
                                                    <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                    href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                    <?php 
                                                        }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
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
        }elseif ('style4' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-4-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-top-content">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-card-content-area">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                    if( $settings['bwdpc_profile_box_social_list'] ) {
                                                    foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                    ?>
                                                    <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                    href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                    <?php 
                                                        }
                                                } ?>
                                            </div><?php } ?>
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
        }elseif ('style5' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-5-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-content-area">
                                            <div class="bwdpc-profile-content-item">
                                                <div class="bwdpc-profile-card-name-info">
                                                    <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-name">
                                                        <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                    </div><?php } ?>
                                                    <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-username">
                                                        <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                    </div><?php } ?>
                                                </div>
                                                <div class="bwdpc-profile-card-bio">
                                                    <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-adress">
                                                        <div class="bwdpc-profile-adress-title">
                                                            <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                        </div>
                                                        <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                    </div><?php } ?>
                                                </div>
                                                <?php if( $bwdpc_status_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-status">
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                            </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                        </div>
                                                    </div>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_social_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-share-link">
                                                    <?php
                                                        if( $settings['bwdpc_profile_box_social_list'] ) {
                                                        foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                        ?>
                                                        <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                        href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                        <?php 
                                                            }
                                                    } ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_button_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-btn">
                                                    <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                                </div><?php } ?>
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
                </div>
            <?php
        }elseif ('style6' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-6-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-top-content">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-content-item">
                                                <div class="bwdpc-profile-card-bio">
                                                    <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-adress">
                                                        <div class="bwdpc-profile-adress-title">
                                                            <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                        </div>
                                                        <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                    </div><?php } ?>
                                                </div>
                                                <?php if( $bwdpc_status_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-status">
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                            </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                        </div>
                                                    </div>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_button_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-btn">
                                                    <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                    if( $settings['bwdpc_profile_box_social_list'] ) {
                                                    foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                    ?>
                                                    <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                    href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                    <?php 
                                                        }
                                                } ?>
                                            </div><?php } ?>
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
        }elseif ('style7' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-7-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
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
        }elseif ('style8' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-8-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-top-card"></div>
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
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
        }elseif ('style9' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-9-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-top-content">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                            if( $settings['bwdpc_profile_box_social_list'] ) {
                                            foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                            ?>
                                            <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                            href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php 
                                                }
                                            } ?>
                                        </div><?php } ?>
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
        }elseif ('style10' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-10-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-content-area">
                                                <div class="bwdpc-profile-card-name-info">
                                                    <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-name">
                                                        <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                    </div><?php } ?>
                                                    <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-username">
                                                        <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                    </div><?php } ?>
                                                </div>
                                                <div class="bwdpc-profile-card-bio">
                                                    <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-adress">
                                                        <div class="bwdpc-profile-adress-title">
                                                            <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                        </div>
                                                        <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                    </div><?php } ?>
                                                </div>
                                                <?php if( $bwdpc_status_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-status">
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                            </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                        </div>
                                                    </div>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_button_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-btn">
                                                    <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                            if( $settings['bwdpc_profile_box_social_list'] ) {
                                            foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                            ?>
                                            <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                            href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php 
                                                }
                                            } ?>
                                        </div><?php } ?>
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
        }elseif ('style11' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-11-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-img">
                                                <div class="bwdpc-profile-circle-1"></div>
                                                <div class="bwdpc-profile-circle-2"></div>
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
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
        }elseif ('style12' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-12-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
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
        }elseif ('style13' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-13-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-bio">
                                            <?php if( $bwdpc_location_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-adress">
                                                <div class="bwdpc-profile-adress-title">
                                                    <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                            if( $settings['bwdpc_profile_box_social_list'] ) {
                                            foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                            ?>
                                            <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                            href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php 
                                                }
                                            } ?>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
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
        }elseif ('style14' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-14-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
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
        }elseif ('style15' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-15-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-status-area">
                                                <?php if( $bwdpc_status_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-status">
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                            </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwdpc-profile-state-area">
                                                        <div class="bwdpc-profile-stat">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                        </div>
                                                        <div class="bwdpc-profile-label">
                                                            <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                        </div>
                                                    </div>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_button_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-btn">
                                                    <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                        
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
        }elseif ('style16' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-16-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                            if( $settings['bwdpc_profile_box_social_list'] ) {
                                            foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                            ?>
                                            <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                            href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php 
                                                }
                                            } ?>
                                        </div><?php } ?>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
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
        }elseif ('style17' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-17-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-top-content">
                                            <div class="bwdpc-profile-card-img">
                                                <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                            </div>
                                            <div class="bwdpc-profile-content-item">
                                                <div class="bwdpc-profile-card-name-info">
                                                    <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-name">
                                                        <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                    </div><?php } ?>
                                                    <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-username">
                                                        <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                    </div><?php } ?>
                                                </div>
                                                <div class="bwdpc-profile-card-bio">
                                                    <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-adress">
                                                        <div class="bwdpc-profile-adress-title">
                                                            <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                        </div>
                                                        <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                    </div><?php } ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-card-add"><i class="fa fa-plus"></i></div>
                                        </div>
                                        <div class="bwdpc-profile-bottom-content">
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-back">
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
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
        }elseif ('style18' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-18-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
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
        }elseif ('style19' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-19-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                        </div>
                                        <div class="bwdpc-profile-content-item">
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_social_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-share-link">
                                                <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                ?>
                                                <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                <?php 
                                                    }
                                                } ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
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
        }elseif ('style20' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-20-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-wrapper">
                                        <div class="bwdpc-profile-card-item">
                                            <div class="bwdpc-profile-front-card">
                                                <div class="bwdpc-profile-card-top-content">
                                                    <div class="bwdpc-profile-card-img">
                                                        <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                                    </div>
                                                    <div class="bwdpc-profile-wrapper-img">
                                                        <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-content-area">
                                                    <div class="bwdpc-profile-card-name-info">
                                                        <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                        <div class="bwdpc-profile-card-name">
                                                            <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                        </div><?php } ?>
                                                        <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                        <div class="bwdpc-profile-card-username">
                                                            <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                        </div><?php } ?>
                                                    </div>
                                                    <div class="bwdpc-profile-card-bio">
                                                        <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                        <div class="bwdpc-profile-card-adress">
                                                            <div class="bwdpc-profile-adress-title">
                                                                <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                            </div>
                                                            <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                        </div><?php } ?>
                                                    </div>
                                                    <?php if( $bwdpc_status_show === 'yes' ) {?>
                                                    <div class="bwdpc-profile-card-status">
                                                        <div class="bwdpc-profile-state-area">
                                                            <div class="bwdpc-profile-stat">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                                </div>
                                                            <div class="bwdpc-profile-label">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="bwdpc-profile-state-area">
                                                            <div class="bwdpc-profile-stat">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                            </div>
                                                            <div class="bwdpc-profile-label">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="bwdpc-profile-state-area">
                                                            <div class="bwdpc-profile-stat">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                            </div>
                                                            <div class="bwdpc-profile-label">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="bwdpc-profile-state-area">
                                                            <div class="bwdpc-profile-stat">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                            </div>
                                                            <div class="bwdpc-profile-label">
                                                                <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                            </div>
                                                        </div>
                                                    </div><?php } ?>
                                                </div>   
                                            </div>   
                                            <div class="bwdpc-profile-back-card">
                                                <?php if( $bwdpc_social_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-share-link">
                                                    <?php
                                                    if( $settings['bwdpc_profile_box_social_list'] ) {
                                                    foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                                    ?>
                                                    <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                                    href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                                    <?php 
                                                        }
                                                    } ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_button_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-btn">
                                                    <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                                </div><?php } ?>
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
                </div>
            <?php
        }elseif ('style21' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-21-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-content-area">
                                            <div class="bwdpc-profile-card-name-info">
                                                <?php if( $bwdpc_title_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-name">
                                                    <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                                </div><?php } ?>
                                                <?php if( $bwdpc_username_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-username">
                                                    <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                                </div><?php } ?>
                                            </div>
                                            <div class="bwdpc-profile-card-bio">
                                                <?php if( $bwdpc_location_show === 'yes' ) {?>
                                                <div class="bwdpc-profile-card-adress">
                                                    <div class="bwdpc-profile-adress-title">
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdpc_profile_location_icon'], [ 'aria-hidden' => 'true' ] ); ?>.3
                                                    </div>
                                                    <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                                </div><?php } ?>
                                            </div>
                                            <?php if( $bwdpc_status_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-status">
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                        </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                    </div>
                                                </div>
                                                <div class="bwdpc-profile-state-area">
                                                    <div class="bwdpc-profile-stat">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                    </div>
                                                    <div class="bwdpc-profile-label">
                                                        <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                    </div>
                                                </div>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_button_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-btn">
                                                <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                            if( $settings['bwdpc_profile_box_social_list'] ) {
                                            foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
                                            ?>
                                            <a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
                                            href="<?php echo  esc_url( $icon_item['bwdpc_profile_icon_link']['url'] );?>"><?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php 
                                                }
                                            } ?>
                                        </div><?php } ?>
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