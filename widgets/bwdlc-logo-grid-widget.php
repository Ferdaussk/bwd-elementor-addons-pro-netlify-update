<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoGrid extends Widget_Base {

	public function get_name() {
		return esc_html__('Logo_Grid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Logo Grid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-gallery-grid';
	}
	
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo grid','bwdlc-logo-carousel','grid','brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_grid_basic_settings',
			[
				'label' => esc_html__( 'Presets', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_grid_style_selection',
			[
				'label' => esc_html__( 'Designs', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '9',
				'options' => [
					'9' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'10' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'11' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'12' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'13' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'14' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'16' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdlc_logo_grid_responsive_device',
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
			'bwdlc_logo_grid_desktop',
			[
				'label' => esc_html__( 'Desktop', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_logo_grid_tablet',
			[
				'label' => esc_html__( 'Tablet', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_logo_grid_mobile',
			[
				'label' => esc_html__( 'Mobile', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'2'  => esc_html__( 'Column 6', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Column 4', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
					'6'  => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
					'12'  => esc_html__( 'Column 1', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_popover();

        $this->end_controls_section();
		
		// logo grid
		$this->start_controls_section(
			'bwdlc_logo_grid_items',
			[
				'label' => esc_html__( 'Logo Grid', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//repeater (slide items)
		$repeater = new \Elementor\repeater();

		$repeater->add_control(
			'bwdlc_logo_grid_logo',
			[
				'label' => esc_html__( 'Choose Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_name',
			[
				'label' => esc_html__( 'Tooltip Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_logo_url',
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
		// logo height
		$repeater->add_responsive_control(
			'bwdlc_grid_logo_height',
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
		$repeater->add_control(
			'bwdlc-tooltip-grid-switch',
			[
				'label' => esc_html__( 'Tooltip Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_gird_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_gird_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_gird_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip_gird-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_gird_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltipbox_gird_width',
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
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_gird_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_gird_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_grid_list',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),

					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
			]
		);



		$this->add_control(
			'bwdlc-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_gridhover_animations',
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
			'bwdlc_gridhover_animation_speed',
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


		//grid logo styles
		$this->start_controls_section(
			'bwdlc_logo_grid_logo_Styles_section',
			[
				'label' => esc_html__( 'Grid Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// logo box height
		$this->add_responsive_control(
			'bwdlc_grid_logo_box_height',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// logo box width
		$this->add_responsive_control(
			'bwdlc_grid_logo_size',
			[
				'label' => esc_html__( 'Logo Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-logo-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// alignment
		$this->add_control(
			'bwdlc_logo_grid_logo_items_align',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid-logo-wrapper' => 'justify-content: {{VALUE}} !important',
				],
			]
		);

		//vertically gap
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_vertically_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-bottom: {{SIZE}}{{UNIT}}!important;',
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper' => 'margin-bottom: -{{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		//horizontally gap
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_horizontally_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-right: {{SIZE}}{{UNIT}}!important;',
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper' => 'margin-right: -{{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		//background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
				'condition' => [
					'bwdlc_logo_grid_style_selection!' => ['11', '12'],
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_background_before',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part::before',
				'condition' => [
					'bwdlc_logo_grid_style_selection!' => ['9', '10', '13', '14', '15', '16'],
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


		//border-radius
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_border-radius',
			[
				'label' => esc_html__( 'Border-Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_grid_style_selection'];
		$logo_grid_repeater = $settings['bwdlc_logo_grid_list'];
		$desktop_col = $settings['bwdlc_logo_grid_desktop'];
		$tablet_col = $settings['bwdlc_logo_grid_tablet'];
		$mobile_col = $settings['bwdlc_logo_grid_mobile'];


		?>
		<div class="bwdlc-grid-cmn bwdlc-brand-logo-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?>">
			<div class="bwdlc-grid-logo-wrapper">
			<?php
				if( $logo_grid_repeater){
					foreach ($logo_grid_repeater as $logo_grid) {
					?>
				<div class="bwdlc-drop col-lg-<?php echo esc_attr( $desktop_col); ?> col-<?php echo esc_attr( $mobile_col); ?> col-md-<?php echo esc_attr( $tablet_col); echo ' elementor-repeater-item-' . esc_attr( $logo_grid['_id'] ) ?>">
					<div class="bwdlc-brand-box-part">
						<div class="bwdlc-logo-img">
							<a href="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo_url']['url'] )?>">
								<img src="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo']['url'] );?>" alt="Brand Logo">
							</a>
						</div>

						<?php if (!empty($logo_grid['bwdlc_logo_grid_name'])) : ?>
							<div class="bwdlc-tooltip-try"><?php echo esc_html($logo_grid['bwdlc_logo_grid_name']);?></div>
						<?php endif; ?>
					</div>
				</div>
				<?php 
				}
			}?>
			</div>
		</div>
		<?php

	}
}




