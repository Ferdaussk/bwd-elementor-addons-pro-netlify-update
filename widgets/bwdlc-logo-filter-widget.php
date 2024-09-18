<?php

namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoFilter extends Widget_Base {


	public function get_name() {
		return esc_html__('Bwd_logo_Filter', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Logo Filter', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle logo-filter';
	}
	
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'filter ', 'logo filter',BWDEB_ROOT_AUTHOR_PRO,'filter'];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_filter_content_basic_settings',
			[
				'label' => esc_html__( 'Presets', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_style_selection',
			[
				'label' => esc_html__( 'Designs', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '17',
				'options' => [
					'17' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'19' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
				]
			]
		);
		$this->add_control(
			'bwdlc_filter_filter_responsive_device',
			[
				'label' => esc_html__( 'Columns', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

		// desktop device column
		$this->add_control(
			'bwdlc_filter_filter_desktop',
			[
				'label' => esc_html__( 'Desktop', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_filter_filter_tablet',
			[
				'label' => esc_html__( 'Tablet', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_filter_filter_mobile',
			[
				'label' => esc_html__( 'Mobile', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'12'  => esc_html__( 'Column 1', BWDEB_ROOT_AUTHOR_PRO ),
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);


		$this->end_popover();
		
		$this->add_control(
			'bwdlc_logo_filter_all_enable_filter',
			[
				'label' => __( 'Show Filter Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		// filter content section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section',
			[
				'label' => esc_html__( 'Filter Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdlc_logo_filter_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item',
			[
				'label' => esc_html__( 'All Item', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_filter_item_name',
			[
				'label' => esc_html__( 'Item Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bwdlc_logo_filter_item_id',
			[
				'label' => esc_html__( 'Item ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdlc_filter_btn_menu',
			[
				'label' => esc_html__( 'Logo Filter Items', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Marketing', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item1', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Delivery Partner
						', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item2', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Financial ', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item3', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Corporate
						', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item4', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
				'title_field' => '{{{ bwdlc_logo_filter_item_name }}}',
			]
		);
		$this->end_controls_section();

		// filter img section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section_image',
			[
				'label' => esc_html__( 'Filterable Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdlc_logo_filter_img_id',
			[
				'label' => esc_html__( 'Item ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('Copy from Filterable Item', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// logo img
		$image_repeater->add_control(
			'bwdlc_filter_logo_img',
			[
				'label' => esc_html__( 'Choose Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		// brand name
		$image_repeater->add_control(
			'bwdlc_logo_filter_brand_name',
			[
				'label' => esc_html__( 'Tooltip Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$image_repeater->add_control(
			'bwdlc_logo_filter_logo_url',
			[
				'label' => esc_html__( 'Brand Url', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		// logo size
		$image_repeater->add_responsive_control(
			'bwdlc_filter_logo_height',
			[
				'label' => esc_html__( 'Logo Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-brand-box-part .bwdlc-logo-img a img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//tooltip-style
		$image_repeater->add_control(
			'bwdlc-tooltip-filter-switch',
			[
				'label' => esc_html__( 'Tooltip Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
				],
			]
		);
		$image_repeater->add_control(
			'bwdlc-tooltip_filter_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_control(
			'bwdlc-tooltip_filter_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_filter_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip_filter-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltip_filter_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltipbox_filter_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'min-width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltip_filter_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_filter_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);


		$this->add_control(
			'bwdlc_logo_logo_img',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item2', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item4', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item5', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item3', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item6', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item7', BWDEB_ROOT_AUTHOR_PRO),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
			]
		);


		$this->add_control(
			'bwdlc-filter-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_filterhover_animations',
			[
				'label'     => esc_html__('Hover Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
					'bounceInUp' => esc_html__('bounceInUp', BWDEB_ROOT_AUTHOR_PRO),
					'bounceInDown' => esc_html__('bounceInDown', BWDEB_ROOT_AUTHOR_PRO),
					'bounceInLeft' => esc_html__('bounceInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'bounceInRight' => esc_html__('bounceInRight', BWDEB_ROOT_AUTHOR_PRO),
					'backInUp' => esc_html__('backInUp', BWDEB_ROOT_AUTHOR_PRO),
					'backInDown' => esc_html__('backInDown', BWDEB_ROOT_AUTHOR_PRO),
					'backInLeft' => esc_html__('backInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'backInRight' => esc_html__('backInRight', BWDEB_ROOT_AUTHOR_PRO),
					'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
					'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
					'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
					'fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
					'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInUp' => esc_html__('fadeInUp', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInDown' => esc_html__('fadeInDown', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInUpBig' => esc_html__('fadeInUpBig', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInLeft' => esc_html__('fadeInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInRight' => esc_html__('fadeInRight', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInRightBig' => esc_html__('fadeInRightBig', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInBottomRight' => esc_html__('fadeInBottomRight', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInBottomLeft' => esc_html__('fadeInBottomLeft', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInTopRight' => esc_html__('fadeInTopRight', BWDEB_ROOT_AUTHOR_PRO),
					'fadeInTopLeft' => esc_html__('fadeInTopLeft', BWDEB_ROOT_AUTHOR_PRO),
					'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
					'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
					'rotateInUpRight' => esc_html__('rotateInUpRight', BWDEB_ROOT_AUTHOR_PRO),
					'rotateInUpLeft' => esc_html__('rotateInUpLeft', BWDEB_ROOT_AUTHOR_PRO),
					'rotateInDownRight' => esc_html__('rotateInDownRight', BWDEB_ROOT_AUTHOR_PRO),
					'rotateInDownLeft' => esc_html__('rotateInDownLeft', BWDEB_ROOT_AUTHOR_PRO),
					'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
					'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
					'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
					'zoomInUp' => esc_html__('zoomInUp', BWDEB_ROOT_AUTHOR_PRO),
					'zoomInRight' => esc_html__('zoomInRight', BWDEB_ROOT_AUTHOR_PRO),
					'zoomInLeft' => esc_html__('zoomInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'zoomInDown' => esc_html__('zoomInDown', BWDEB_ROOT_AUTHOR_PRO),
					'slideInUp' => esc_html__('SlideInUp', BWDEB_ROOT_AUTHOR_PRO),
					'slideInRight' => esc_html__('slideInRight', BWDEB_ROOT_AUTHOR_PRO),
					'slideInLeft' => esc_html__('slideInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'slideInDown' => esc_html__('slideInDown', BWDEB_ROOT_AUTHOR_PRO),
					'flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
					'rollIn' => esc_html__('rollIn', BWDEB_ROOT_AUTHOR_PRO),
					'pulse' => esc_html__('Pulse', BWDEB_ROOT_AUTHOR_PRO),
					'rubberBand' => esc_html__('RubberBand', BWDEB_ROOT_AUTHOR_PRO),
					'shakeX' => esc_html__('ShakeX', BWDEB_ROOT_AUTHOR_PRO),
					'shakeY' => esc_html__('ShakeY', BWDEB_ROOT_AUTHOR_PRO),
					'headShake' => esc_html__('HeadShake', BWDEB_ROOT_AUTHOR_PRO),
					'swing' => esc_html__('Swing', BWDEB_ROOT_AUTHOR_PRO),
					'tada' => esc_html__('Tada', BWDEB_ROOT_AUTHOR_PRO),
					'wobble' => esc_html__('Wobble', BWDEB_ROOT_AUTHOR_PRO),
					'jello' => esc_html__('Jello', BWDEB_ROOT_AUTHOR_PRO),
					'heartBeat' => esc_html__('HeartBeat', BWDEB_ROOT_AUTHOR_PRO),
					'jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
					'lightSpeedInLeft' => esc_html__('lightSpeedInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'lightSpeedInRight' => esc_html__('lightSpeedInRight', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part:hover img' => 'animation: {{VALUE}};',
				],
				'default' => 'fadeInUp',
			]
		);

		//hover_animation_speed
		$this->add_control(
			'bwdlc_filterhover_animation_speed',
			[
				'label' => __('Animation Speed (ms)', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['ms'],
				'range' => [
					'ms' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 'ms',
					'size' => 1250,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part img' => 'animation-duration: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_section();


		// style controls section
		$this->start_controls_section(
			'bwdlc_logo_item_style_section',
			[
				'label' => esc_html__( 'Logo Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdlc_logo_filter_all_item_title_style_tabs'
		);

		// normal style  tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_right_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_active_background',
			[
				'label' => esc_html__( 'Active Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		// margin
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// padding
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// border redoius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		// hover tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_hover_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_active_right_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_hover_active_background',
			[
				'label' => esc_html__( 'Active Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_hover_border_radius',
            [
                'label' => esc_html__('Hover Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		$this->add_control(
			'bwdlc_logo_filter_all_items_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdlc_logo_filter_all_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu' => 'justify-content: {{VALUE}} !important',
				],

			]
		);
		$this->end_controls_section();

		// filter logo style
		$this->start_controls_section(
			'bwdlc_logo_info_style_section',
			[
				'label' => esc_html__( 'Filter Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//filter logo alignment========================
		$this->add_control(
			'bwdlc_logo_filter_logo_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		// logo height
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_height',
			[
				'label' => esc_html__( 'Logo Box Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 170,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part ' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo x gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_x_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo y gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_y_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-bottom: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		// background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		// border -radius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_info_u_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_info_u_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_filter_style_selection'];
		$filter_btn_menu = $settings['bwdlc_filter_btn_menu'];
		$filter_img_menu = $settings['bwdlc_logo_logo_img'];
		$desktop = $settings['bwdlc_filter_filter_desktop'];
		$tablet = $settings['bwdlc_filter_filter_tablet'];
		$mobile = $settings['bwdlc_filter_filter_mobile'];
		//$brand_name = 'bwdlc_logo_filter_brand_name';

		// filter rendering============================
		?>
		<div class="bwdlc-brand-logo-common bwdlc-filter-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?>">
			<div class="row">

				<div class="col-xl-12">
					<div class="bwdlc-brand-menu d-flex">
						<?php
							if($filter_btn_menu){
								?>
								<div class="bwdlc-brand-menu-btn active" data-filter="*">
									<?php echo esc_html($settings['bwdlc_logo_filter_all_item'] )?>
								</div>
								<?php
								foreach($filter_btn_menu as $item){
									?>
									<div class="bwdlc-brand-menu-btn elementor-repeater-item-<?php echo esc_attr($item['_id'] ) ?>" data-filter="<?php echo esc_attr($item['bwdlc_logo_filter_item_id'] )?>">
										<?php
										echo esc_html($item['bwdlc_logo_filter_item_name'] );
										?>
									</div>
									<?php
								}
							}
						?>
					</div>
				</div>
			</div>

			<div class="row bwdlc-grid">
				<?php
					if($filter_img_menu){
						foreach($filter_img_menu as $img_item){
							?>
							<div class="active elementor-repeater-item-<?php echo esc_attr($img_item['_id'] ) ?> col-lg-<?php echo esc_attr($desktop )?>
							col-md-<?php echo esc_attr($tablet )?>
							col-<?php echo esc_attr($mobile )?>
							 bwdlc-grid-item <?php echo esc_attr($img_item['bwdlc_logo_filter_img_id'] ) ?>">
								<div class="bwdlc-brand-box-part">
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($img_item['bwdlc_logo_filter_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($img_item['bwdlc_filter_logo_img']['url'] );?>" alt="Brand Logo">
										</a>
									</div>

									<?php if (!empty($img_item['bwdlc_logo_filter_brand_name'])) : ?>
										<div class="bwdlc-tooltip-try"><?php echo esc_html( $img_item['bwdlc_logo_filter_brand_name'] );?></div>
									<?php endif; ?>
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



