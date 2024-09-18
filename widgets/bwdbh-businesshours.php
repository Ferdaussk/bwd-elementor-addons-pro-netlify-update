<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdbhBusinessHours extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdbh-business-hours', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Business Hours', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-business-hours bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdbh_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdbh_style_selection',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
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

		//image
		$this->add_control(
			'bwdbh_image_item',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				
			]
		);

		//image for style30
		$this->add_control(
			'bwdbh_image_item_30',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style31']
				],
				
			]
		);

		//image for style24
		$this->add_control(
			'bwdbh_image_item_24',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdbh_style_alignment',
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
					'{{WRAPPER}} .bwdbh_timing-box' => 'text-align: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				'toggle' => true,
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbh_title_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdbh_style_selection!' => ['style9', 'style8', 'style12', 'style19', 'style20', 'style28', 'style30','style21']
				],
			]
		);

		//title
		$this->add_control(
			'bwdbh_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Working Hours', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Title Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style8']
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//sub title
		$this->add_control(
			'bwdbh_subtitle_more_options',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style17', 'style18', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);
		$this->add_control(
			'bwdbh_sub_title',
			[
				'show_label' => false,
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'lorem Ipsul', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style17', 'style18', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbh_description_section',
			[
				'label' => esc_html__( 'Footer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);
		//description
		$this->add_control(
			'bwdbh_sort_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Book your table for lunch or dinner.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Description Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7','style8', 'style9', 'style10', 'style13', 'style14', 'style15', 'style16']
				],
				'dynamic' => [
					'active' => true,
				],
				'separator' => 'before',
			]
		);

		//number
		$this->add_control(
			'bwdbh_phone_number',
			[
				'label' => esc_html__( 'Phone', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+1 646 980 4741', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Description Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7','style8', 'style9', 'style10', 'style13', 'style14', 'style15', 'style16']
				],
				'dynamic' => [
					'active' => true,
				],
				'separator' => 'before',
			]
		);

		//button title
		$this->add_control(
			'bwdbh_button_title',
			[
				'label' => esc_html__( 'Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Book Now', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Title Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7','style8', 'style9', 'style10', 'style13', 'style14', 'style15', 'style16']
				],
				'dynamic' => [
					'active' => true,
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'bwdbh_button_title_link',
			[
				'label' => esc_html__( 'Button URL', 'bwdal-animated-link' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Link URL Here', 'bwdal-animated-link' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbh_week_box',
			[
				'label' => esc_html__( 'Day & Time List', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		//switcher start

		//highlight tabs------------------------------------------
		$repeater->start_controls_tabs(
			'style_tabs'
		);

		//highlight-normal-style------------------------------------------
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);


		//color
		$repeater->add_control(
			'bwdbh_highlight_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_day-time' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'bwdbh_highlightbgbg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_single-item' => 'background: {{VALUE}}!important',
				],
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_highlight_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_day-time',
				'separator' => 'before',
			]
		);

		$repeater->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$repeater->add_control(
			'bwdbh_highlight_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_single-item:hover .bwdbh_day-time' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'bwdbh_highlightbgbg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_single-item:hover' => 'background: {{VALUE}}!important',
				],
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_highlight_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdbh_day-time:hover',
				'separator' => 'before',
			]
		);

		$repeater->end_controls_tab();

		$repeater->end_controls_tabs();


		//switcher end

		$repeater->add_control(
			'bwdbh_week_name', [
				'label' => esc_html__( 'Day', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Saturday' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdbh_time_name', [
				'label' => esc_html__( 'Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '10AM - 6PM' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdbh_week_list',
			[
				'label' => esc_html__( 'Day & Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdbh_week_name' => esc_html__( 'Monday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Tuesday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Wednesday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Thursday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Friday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Saturday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10AM - 10PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Sunday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( 'Closed', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style8', 'style12', 'style14', 'style15', 'style22', 'style23', 'style29', 'style30']
				],
				'title_field' => '{{{ bwdbh_week_name }}}',
			]
		);


		//for style14
		$repeater->add_control(
			'bwdbh_open_time', [
				'label' => esc_html__( 'Open Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '9am' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdbh_close_time', [
				'label' => esc_html__( 'Close Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '9pm' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdbh_week-open-close_time',
			[
				'label' => esc_html__( 'Day & Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdbh_week_name' => esc_html__( 'Sunday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Monday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Tuesday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Wednesday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Thursday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Friday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '9am', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( '9pm', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'Saturday', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_open_time' => esc_html__( '', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_close_time' => esc_html__( 'Closed', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style16', 'style17', 'style18' , 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				'title_field' => '{{{ bwdbh_week_name }}}',
			]
		);

		//for style 8
		$this->add_control(
			'bwdbh_small_week_list',
			[
				'label' => esc_html__( 'Day & Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdbh_week_name' => esc_html__( 'MONDAY - FRIDAY', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10:00AM - 07:00PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'SATURDAY', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( '10:00AM - 07:00PM', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbh_week_name' => esc_html__( 'SUNDAY', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbh_time_name' => esc_html__( 'Closed', BWDEB_ROOT_AUTHOR_PRO ),
					]
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10','style11', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style24', 'style25', 'style26', 'style27', 'style28', 'style31']
				],
				'title_field' => '{{{ bwdbh_week_name }}}',
			]
		);

		$this->end_controls_section();

		//tab-style-content-box start
		$this->start_controls_section(
			'bwdbh_content_style',
			[
				'label' => esc_html__( 'Content Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbh_style_selection!' => ['style4', 'style5', 'style7', 'style8', 'style23', 'style25', 'style26', 'style28', 'style29', 'style30']
				],
			]
		);

		//before background-color for style2 start
		$this->add_control(
			'bwdbh_image_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_timing-box::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style4', 'style6', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style26', 'style27', 'style31']
				],
			]
		);

		//image_opacity
		$this->add_responsive_control(
			'bwdbh_image_opacity',
			[
				'label' => esc_html__( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0.10,
						'max' => 1,
						'step' => 0.1,
					],
				],
				'default' => [
					'size' => 0.8,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_timing-box::before' => 'opacity: {{SIZE}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style4', 'style6', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style26', 'style27', 'style31']
				],
			]
		);
		//for style2 end

		//Border Color for style10 start
		$this->add_responsive_control(
			'bwdbh_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_timing-box' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style27', 'style31']
				],
			]
		);
		//for style10 end

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbh_timing-box_gradient_bg',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbh_timing-box',
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style3', 'style4', 'style6', 'style7', 'style24', 'style26']
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdbh_content_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_timing-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style4', 'style6', 'style11', 'style17', 'style18', 'style26', 'style27']
				],
				'separator' => 'before',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbh_after_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_timing-box::after',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style27', 'style31']
				],
			]
		);

		//border for style27
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_timing-box',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style22', 'style23', 'style24', 'style25', 'style26', 'style31']
				],
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbh_content_borderradious',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_timing-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style3', 'style4', 'style6', 'style9', 'style11', 'style17', 'style18', 'style24', 'style26', 'style27']
				],
				'separator' => 'before',
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbh_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_timing-box',
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style4', 'style10']
				],
			]
		);

		//padding for style15 need this controls
		$this->add_responsive_control(
			'bwdbh_ul_all_item_padding',
			[
				'label' => esc_html__( 'Inner Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_all-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		//tab-style-content-box end

		//tab-style-title
		$this->start_controls_section(
			'bwdbh_title_style',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbh_style_selection!' => ['style8', 'style9', 'style12', 'style19', 'style20', 'style21', 'style28', 'style30']
				],
			]
		);

		//color
		$this->add_control(
			'bwdbh_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style23']
				],
			]
		);

		//Background Color before
		$this->add_control(
			'bwdbh_title_before_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style10', 'style11', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);

		//gradient_bg for style5
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbh_title_gradient_bg',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbh_main-title::after, {{WRAPPER}} .bwdbh_main-title',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style7', 'style8', 'style13', 'style14', 'style15', 'style16', 'style22', 'style24', 'style26']
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_title_typography',
				'selector' => '{{WRAPPER}} .bwdbh_main-title',
				'separator' => 'before',
			]
		);

		//alignment for style4
		$this->add_responsive_control(
			'bwdbh_single_title_alignment',
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
					'{{WRAPPER}} .bwdbh_main-title' => 'text-align: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style13', 'style14', 'style15', 'style16']
				],
				'toggle' => true,
				'separator' => 'before',
			]
		);

		//padding for style4
		$this->add_responsive_control(
			'bwdbh_single_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style7', 'style8', 'style13', 'style14', 'style15', 'style23', 'style26']
				],
				'separator' => 'before',
			]
		);

		//border for style8
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbh_title_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_main-title',
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style7', 'style13', 'style14', 'style15', 'style26']
				],
				'separator' => 'before',
			]
		);

		//Border Radius for style8
		$this->add_responsive_control(
			'bwdbh_title_border_radious',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'vmax' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style2', 'style7', 'style13', 'style14', 'style15', 'style18', 'style26', 'style27']
				],
			]
		);

		//title-bottom-gap-margin
		$this->add_responsive_control(
			'bwdbh__title_item_gap',
			[
				'label' => esc_html__( 'Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style7', 'style10', 'style13', 'style14', 'style15', 'style22', 'style26', 'style29', 'style21', 'style31']
				],
			]
		);

		//content-box-bottom-gap-margin
		$this->add_responsive_control(
			'bwdbh_title_sub_gap',
			[
				'label' => esc_html__( 'Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_content-box' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style10', 'style11', 'style16', 'style17', 'style18', 'style23', 'style24', 'style25', 'style26', 'style27', 'style31']
				],
			]
		);

		//sub-title-------------------------------------
		$this->add_control(
			'bwdbh_subtitle_style_more_options',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style17', 'style18', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);

		//color
		$this->add_control(
			'bwdbh_sub_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_sub-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style17', 'style18', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
				'separator' => 'before',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_sub_title_typography',
				'selector' => '{{WRAPPER}} .bwdbh_sub-title',
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style17', 'style18', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);

		//Sub title Background for style16
		$this->add_control(
			'bwdbh_sub_title_background',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_sub-title' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4' ,'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style17', 'style18', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);


		//color for style22
		$this->add_control(
			'bwdbh_main_title_after_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_main-title::after' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
				'separator' => 'before',
			]
		);

		//typography for style22
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_main_title_after_typography',
				'selector' => '{{WRAPPER}} .bwdbh_main-title::after',
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style23', 'style24', 'style25', 'style26', 'style27', 'style29', 'style31']
				],
			]
		);

		$this->end_controls_section();

		//tab-style-description
		$this->start_controls_section(
			'bwdbh_description_style',
			[
				'label' => esc_html__( 'Footer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);

		//color
		$this->add_control(
			'bwdbh_Description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_disce-text' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_Description_typography',
				'selector' => '{{WRAPPER}} .bwdbh_disce-text',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'bwdbh_phone-number_heading',
			[
				'label' => esc_html__( 'Phone Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//color
		$this->add_control(
			'bwdbh_phone_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_phone_number' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_phone_number_typography',
				'selector' => '{{WRAPPER}} .bwdbh_phone_number',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'bwdbh_button_heading',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//button tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabs'
		);

		//normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdbh_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_bttn_text' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		//Background Color
		$this->add_control(
			'bwdbh_BG_button',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_bttn_text' => 'background-color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbh_button_typography',
				'selector' => '{{WRAPPER}} .bwdbh_bttn_text',
				'separator' => 'before',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbh_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_bttn_text',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbh_button_border_radious',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_bttn_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		//hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdbh_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_bttn_text:hover' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		//Background Color
		$this->add_control(
			'bwdbh_BG_button_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_bttn_text:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();




		//tab-style day & time
		$this->start_controls_section(
			'bwdbh_day-time_style',
			[
				'label' => esc_html__( 'Day & Time', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//Border bottom before Color for style15 start
		$this->add_control(
			'bwdbh_li_item_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item::before' => 'border-bottom-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);

		//line right Color for style20 start
		$this->add_control(
			'bwdbh_li_item_line_color',
			[
				'label' => esc_html__( 'Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_business-day' => 'border-right-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);

		//Border bottom Color for style11 start
		$this->add_control(
			'bwdbh_border_bottom_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item' => 'border-bottom-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style20', 'style24', 'style25', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);
		//for style10 end



		//day&time tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabss'
		);

		//normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tabb',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdbh_d&t_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_day-time' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg for style10
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbh_even_gradient_bg',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbh_single-item',
				'condition' => [
					'bwdbh_style_selection!' => ['style30']
				],
			]
		);

		$this->end_controls_tab();

		//hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tabb',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdbh_d%t_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item:hover .bwdbh_day-time' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg for style10
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbh_even_gradient_bg_hover',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbh_single-item:hover',
				'condition' => [
					'bwdbh_style_selection!' => ['style30']
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();


		//for style28
		$this->add_control(
			'bwdbh_shape_day&time_background',
			[
				'label' => esc_html__( 'Shape Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2','style3','style4','style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15','style16', 'style18', 'style20', 'style22', 'style23', 'style24', 'style25', 'style27', 'style29', 'style30', 'style31']
				],
			]
		);

		//single-item margin
		$this->add_responsive_control(
			'bwdbh_item_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style11', 'style12', 'style17', 'style19', 'style27']
				],
			]
		);

		//padding for style4
		$this->add_responsive_control(
			'bwdbh_single_item_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style3', 'style16']
				],
				'separator' => 'before',
			]
		);


		//for style16
		$this->add_control(
			'bwdbh_line_color',
			[
				'label' => esc_html__( 'Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbh_all-item' => 'border-right-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9','style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
			]
		);

		//padding for style16
		$this->add_responsive_control(
			'bwdbh_week-date_item_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_week-date_item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9','style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31']
				],
				'separator' => 'before',
			]
		);

		//border for style8
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbh_single_item_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_single-item',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style9', 'style10', 'style11','style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style21', 'style22', 'style23', 'style26', 'style27', 'style28']
				],
				'separator' => 'before',
			]
		);

		//Border Radius for style8
		$this->add_responsive_control(
			'bwdbh_single_items_border_radious',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'vmax' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbh_single-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style9','style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style21', 'style22', 'style26', 'style27', 'style28']
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbh_item_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbh_single-item',
				'separator' => 'before',
				'condition' => [
					'bwdbh_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style8', 'style9','style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style22', 'style23', 'style27']
				],
			]
		);

		$this->end_controls_section();

		//day time alignment start
		$this->start_controls_section(
			'bwdbh_day-time_alignment',
			[
				'label' => esc_html__( 'Day & Time Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdbh_business-day_alignment',
			[
				'label' => esc_html__( 'Day Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdbh_business-day' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'separator' => 'before',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdbh_business-time_alignment',
			[
				'label' => esc_html__( 'Time Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdbh_business-time' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'separator' => 'before',
			]
		);

		$this->end_controls_section();




	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		
		if ( ! empty( $settings['bwdbh_button_title_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdbh_button_title_link', $settings['bwdbh_button_title_link'] );
		}


		$bwdbh_title = $settings['bwdbh_title'];
		$bwdbh_sort_description = $settings['bwdbh_sort_description'];
		$bwdbh_phone_number = $settings['bwdbh_phone_number'];
		$bwdbh_button_title = $settings['bwdbh_button_title'];
		$bwdbh_sub_title = $settings['bwdbh_sub_title'];
		$bwdbh_style_selection = $settings['bwdbh_style_selection'];

		
		

		if( 'style1' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_1">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
						<div class="bwdbh_timing-box">
							<div class="bwdbh_main-title"><?php echo esc_html( $bwdbh_title ); ?></div>
							<div class="bwdbh_week_time">
								<ul>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} elseif( 'style2' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_2 bwdbh_business_our_1">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
						<div class="bwdbh_timing-box" style="background-image: url('<?php echo esc_url($settings['bwdbh_image_item']['url']); ?>')">
							<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
							<div class="bwdbh_week_time">
								<ul>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
        	</div>
			<?php
		} elseif( 'style3' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_3 bwdbh_business_our_2 bwdbh_business_our_1">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
						<div class="bwdbh_timing-box" style="background-image: url('<?php echo esc_url($settings['bwdbh_image_item']['url']); ?>')">
							<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
							<div class="bwdbh_week_time">
								<ul>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>

											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
        	</div>
			<?php
		} elseif( 'style4' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_4">
				<div class="row g-0 justify-content-center">
						<div class="col-12 g-0 ">
							<div class="bwdbh_timing-box">
								<ul>
									<li class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></li>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php
		} elseif( 'style5' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_5">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <ul>
                                <li class="bwdbh_content-box">
									<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                                </li>
                                <?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
								<?php
									}
									}
								?>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style6' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_6 bwdbh_business_our_4">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <ul>
                                <li class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></li>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style7' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_7 bwdbh_business_our_6 bwdbh_business_our_4">
				<div class="row g-0 justify-content-center">
					<div class="col-12 g-0">
						<div class="bwdbh_timing-box">
                            <ul>
                                <li class="bwdbh_single-item bwdbh_first_child">
                                    <span class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></span>
                                </li>
								<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
								<?php
									}
									}
								?>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style8' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_8">
				<div class="container g-0">
					<div class="row g-0">
						<div class="col-12">
							<div class="bwdbh_timing-box">
								<ul>
									<?php
									if ( $settings['bwdbh_small_week_list'] ) {
										foreach (  $settings['bwdbh_small_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} elseif( 'style9' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_9">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
		} elseif( 'style10' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_10">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
			<?php
		} elseif( 'style11' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_11">
				<div class="row g-0">
					<div class="col-12">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <div class="bwdbh_all-item">
                                <ul>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
                                </ul>
                                <div class="bwdbh_sub-content">
                                    <div class="bwdbh_disce-text"><?php echo esc_html($bwdbh_sort_description); ?></div>
                                    <div class="bwdbh_phone_number"><?php echo esc_html($bwdbh_phone_number); ?></div>
                                    <div class="bwdbh_bttn_area">
                                        <a class="bwdbh_bttn_text" href="<?php echo $settings['bwdbh_button_title_link']['url'] ?>"><?php echo esc_html($bwdbh_button_title); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<?php
		} elseif( 'style12' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_12">
				<div class="row g-0 align-items-center">
					<div class="col-lg-8 g-0">
						<div class="bwdbh_content-image">
							<img src="<?php echo esc_url($settings['bwdbh_image_item']['url']); ?>" alt="">
						</div>
					</div>
					<div class="col-lg-4 g-0">
						<div class="bwdbh_timing-box">
							<ul>
									<?php
									if ( $settings['bwdbh_small_week_list'] ) {
										foreach (  $settings['bwdbh_small_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
							</ul>
						</div>
					</div>
				</div>
        	</div>
			<?php
		} elseif( 'style13' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_13">
				<div class="row g-0">
				<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
								<div class="bwdbh_sub-title"><?php echo esc_html($bwdbh_sub_title); ?></div>
                            </div>
								<ul class="bwdbh_all-item">
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
                                </ul>
                        </div>
                    </div>
                </div>
			</div>
			<?php
		} elseif( 'style14' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_14">
				<div class="row g-0">
					<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
								<div class="bwdbh_sub-title"><?php echo esc_html($bwdbh_sub_title); ?></div>
                            </div>
								<ul class="bwdbh_all-item">

									<?php
									if ( $settings['bwdbh_week-open-close_time'] ) {
										foreach (  $settings['bwdbh_week-open-close_time'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<div class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</div>
											<div class="bwdbh_business-time">
												<span class="bwdbh_opening bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_open_time'] ); ?>
												</span>
												<span class="bwdbh_closing bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_close_time'] ); ?>
												</span>
											</div>
										</li>
									</div>
									<?php
										}
										}
									?>
                                </ul>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style15' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_15">
				<div class="row g-0">
					<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
								<div class="bwdbh_sub-title"><?php echo esc_html($bwdbh_sub_title); ?></div>
                            </div>
								<ul class="bwdbh_all-item">
									<?php
									if ( $settings['bwdbh_week-open-close_time'] ) {
										foreach (  $settings['bwdbh_week-open-close_time'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<div class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</div>
											<div class="bwdbh_business-time">
												<span class="bwdbh_opening bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_open_time'] ); ?>
												</span>
												<span class="bwdbh_closing bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_close_time'] ); ?>
												</span>
											</div>
										</li>
									</div>
									<?php
										}
										}
									?>
                                </ul>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style16' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_16">
				<div class="row g-0">
					<div class="col-12 g-0">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
                                <div class="bwdbh_text-content">
                                    <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                                    <div class="bwdbh_sub-title"><?php echo esc_html($bwdbh_sub_title); ?></div>
                                </div>
                                <div class="bwd_week-date_item">
                                    <ul class="bwdbh_all-item">
										<?php
										if ( $settings['bwdbh_week_list'] ) {
											foreach (  $settings['bwdbh_week_list'] as $item ) {
										?>
										<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<li class="bwdbh_single-item">
												<div class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
												</div>
											</li>
										</div>
										<?php
										}
										}
									?>
                                    </ul>
                                    <ul class="bwdbh_all-item">
										<?php
										if ( $settings['bwdbh_week_list'] ) {
											foreach (  $settings['bwdbh_week_list'] as $item ) {
										?>
										<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<li class="bwdbh_single-item">
												<div class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
													<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
												</div>
											</li>
										</div>
										<?php
										}
										}
										?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<?php
		} elseif( 'style17' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_17">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
							</div>
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
        	</div>
			<?php
		} elseif( 'style18' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_18">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
							</div>
							<ul class="bwdbh_all-item">
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
					</div>
				</div>
			<?php
		} elseif( 'style19' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_19">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
        	</div>
			<?php
		} elseif( 'style20' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_20">
            	<div class="container-fluid PLeft_Right">
					<div class="row g-0">
						<div class="col-12">
							<div class="bwdbh_timing-box">
								<ul>
									<?php
									if ( $settings['bwdbh_week_list'] ) {
										foreach (  $settings['bwdbh_week_list'] as $item ) {
									?>
									<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<li class="bwdbh_single-item">
											<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
											</span>
											<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
												<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
											</span>
										</li>
									</div>
									<?php
										}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
            	</div>
        	</div>
			<?php
		} elseif( 'style21' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_21">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
		} elseif( 'style22' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_22">
            	<div class="row g-0">
                    <div class="col-lg-12">
                        <div class="bwdbh_content-box">
                            <div data-content="<?php echo esc_html($bwdbh_sub_title); ?>" class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_small_week_list'] ) {
									foreach (  $settings['bwdbh_small_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style23' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_23">
				<div class="row g-0">
                    <div class="col-lg-12 column_mb-50">
                        <div class="bwdbh_content-box">
                            <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_small_week_list'] ) {
									foreach (  $settings['bwdbh_small_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo $item['bwdbh_week_name']; ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo $item['bwdbh_time_name']; ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style24' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_24">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box" style="background-image: url('<?php echo esc_url($settings['bwdbh_image_item_24']['url']); ?>')">
                            <div class="bwdbh_content-box">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<li class="bwdbh_single-item">
									<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
										<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
									</span>
									<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
										<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
									</span>
								</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style25' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_25">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style26' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_26">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <ul>
								<li class="bwdbh_single-item bwdbh_first_child">
									<div class="bwdbh_content-box">
										<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
									</div>
								</li>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style27' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_27">
				<div class="row g-0">
					<div class="col-12">
						<div class="bwdbh_timing-box">
							<div class="bwdbh_content-box">
								<div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
							</div>
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
		} elseif( 'style28' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_28">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
							<ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style29' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_29">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content-box">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <ul>
								<?php
								if ( $settings['bwdbh_small_week_list'] ) {
									foreach (  $settings['bwdbh_small_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style30' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_30">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <ul>
								<?php
								if ( $settings['bwdbh_small_week_list'] ) {
									foreach (  $settings['bwdbh_small_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item" style="background-image: url('<?php echo esc_url($settings['bwdbh_image_item_30']['url']); ?>')">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		} elseif( 'style31' === $bwdbh_style_selection ) { ?>
			<div class="bwdbh_business_our_31">
				<div class="row g-0">
                    <div class="col-12">
                        <div class="bwdbh_timing-box">
                            <div class="bwdbh_content">
                                <div class="bwdbh_main-title"><?php echo esc_html($bwdbh_title); ?></div>
                            </div>
                            <ul>
								<?php
								if ( $settings['bwdbh_week_list'] ) {
									foreach (  $settings['bwdbh_week_list'] as $item ) {
								?>
								<?php echo '<div class="bwdbh_mb0 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<li class="bwdbh_single-item">
										<span class="bwdbh_business-day bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_week_name'] ); ?>
										</span>
										<span class="bwdbh_business-time bwdbh_day-time bwdbh_closed_day">
											<?php echo esc_html( $item['bwdbh_time_name'] ); ?>
										</span>
									</li>
								</div>
								<?php
									}
									}
								?>
							</ul>
                        </div>
                    </div>
                </div>
        	</div>
			<?php
		}

	}
}
