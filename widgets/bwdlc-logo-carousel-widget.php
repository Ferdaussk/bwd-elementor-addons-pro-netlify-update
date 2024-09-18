<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDLCLogoCarousel extends Widget_Base {

	public function get_name() {
		return esc_html__('bwdlc-Logo-Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Logo Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-logo';
	}
	
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo carousel','bwd-logo-carousel', 'brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_carousel_basic_settings',
			[
				'label' => esc_html__( 'Logo Carousel', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_carousel_style_selection',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'15' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'18' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
				],
				
			]
		);

	
		//repeater (slide items)
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_carousel_logo',
			[
				'label' => esc_html__( 'Choose Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_carousel_brand_name',
			[
				'label' => esc_html__( 'Tooltip Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'bwdlc_logo_carousel_logo_url',
			[
				'label' => esc_html__( 'Logo Url', BWDEB_ROOT_AUTHOR_PRO ),
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
			'bwdlc_carousel_logo_height',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdlc-brand-box-part .bwdlc-logo-img a img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	

		//tooltip-style
		$repeater->add_control(
			'bwdlc-tooltip-switch',
			[
				'label' => esc_html__( 'Tooltip Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltipbox_width',
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
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_carousel_list',
			[
				//'label' => esc_html__( 'Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo',BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
			]
		);

		$this->add_control(
			'bwdlc-hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//centermodd amination
		$this->add_control(
			'bwdlc_centermood_animations',
			[
				'label'     => esc_html__('CenterMood Animation', BWDEB_ROOT_AUTHOR_PRO),
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-swiper-slide-active' => 'animation:{{VALUE}};',
				],
				'default' => 'fadeInUp',
			]
		);

		//centermood_animation_speed
		$this->add_control(
			'bwdlc_centermood_animation_speed',
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-swiper-slide-active' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdlc-logo-caro-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_hover_animations',
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-brand-box-part:hover img' => 'animation: {{VALUE}};',
				],
				'default' => 'fadeInUp',
			]
		);

		//hover_animation_speed
		$this->add_control(
			'bwdlc_hover_animation_speed',
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-brand-box-part img' => 'animation-duration: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);



		$this->end_controls_section();


		//Slider Settings------------
        $this->start_controls_section(
			'bwdlc_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Slide Effect
		$this->add_control(
			'bwdlc_slider_effects',
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

		//popover-Coverflow-coverflow
		$this->add_control(
			'bwdlc_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdlc_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'bwdlc_coverflow_rotate',
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
				'bwdlc_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', BWDEB_ROOT_AUTHOR_PRO ),
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

			//Coverflow Modifier
			$this->add_control(
				'bwdlc_coverflow_modifier',
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
				'bwdlc_coverflow_shadow_switcher',
				[
					'label' => esc_html__( 'Coverflow Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => false,
					'frontend_available' => true,
				]
			);

			//Coverflow shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-slide-shadow-left, {{WRAPPER}} .bwdlc-swiper-slide-shadow-right',
					'condition' => [
						'bwdlc_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'bwdlc_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdlc_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'bwdlc_cube_shadow_switcher',
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
					'name' => 'bwdlc_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-cube-shadow:before',
					'condition' => [
						'bwdlc_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'bwdlc_cube_slide_shadow_switcher',
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
					'name' => 'bwdlc_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-slide-shadow-left, {{WRAPPER}} .bwdlc-swiper-slide-shadow-right',
					'condition' => [
						'bwdlc_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'bwdlc_cube_shadow_offset',
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
				'bwdlc_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'bwdlc_slide_speed',
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

		//popover-responsive-device
		$this->add_control(
			'bwdlc_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'frontend_available' => true,
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'bwdlc_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 5,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdlc_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 10,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'bwdlc_slide_tablet_view',
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
				'bwdlc_tablet_space',
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
				'bwdlc_slide_mobile_view',
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
				'bwdlc_mobile_space',
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
		// $this->add_control(
        //     'bwdlc_slider_direction',
        //     [
        //         'label' => __('Slider Direction', BWDEB_ROOT_AUTHOR_PRO),
        //         'type' => Controls_Manager::SELECT,
        //         'default' => 'horizontal',
        //         'options' => [
        //             'horizontal'  => __('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
        //             'vertical' => __('Vertical', BWDEB_ROOT_AUTHOR_PRO),
        //         ],
        //         'frontend_available' => true,
        //     ]
        // );

        //Infinite Loop
        $this->add_control(
            'bwdlc_loop_switcher',
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
            'bwdlc_autoslide_switcher',
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
			'bwdlc_slider_autoplay_speed',
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
                    'bwdlc_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'bwdlc_mousewheel',
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
            'bwdlc_scroll_bar',
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
            'bwdlc_scroll_visibility',
            [
                'label' => __('Scroll Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', BWDEB_ROOT_AUTHOR_PRO),
                    'true' => __('Automatic hide', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdlc_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'bwdlc_slide_pagination',
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

        //bwdlc_pagination_type
        $this->add_control(
            'bwdlc_pagination_type',
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
                    'bwdlc_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

		$this->add_control(
            'bwdlc_pagination_bullets_style',
            [
                'label' => esc_html__( 'Dots Style', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdlc_dots10'  => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdlc_pagination_type' => 'bullets',
                ],
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'bwdlc_arrow_switcher',
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
            'bwdlc_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                    'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdlc_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'bwdlc_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdlc_nav_type' => 'icon',
                    'bwdlc_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'bwdlc_nav_prev_arrow',
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
				'bwdlc_nav_next_arrow',
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
			'bwdlc_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdlc_nav_type' => 'text',
                    'bwdlc_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'bwdlc_nav_prev_text',
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
				'bwdlc_nav_next_text',
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
			'bwdlc_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_arrow_switcher' => 'yes',
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
                'bwdlc_arrow_color',
                [
                    'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdlc_arrow_size',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdlc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdlc_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
                    'condition' => [
						'bwdlc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdlc_arrow_width',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdlc_arrow_height',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdlc_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdlc_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdlc_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'bwdlc_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdlc_slider_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdlc_arrow_popover_style',
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
					'bwdlc_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_vertical',
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
							'{{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_horizontal',
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
							'{{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdlc_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_Right_position_vertical',
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
							'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdlc_arrow_right_position_horizontal',
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
							'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
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
				'bwdlc_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdlc_arrow_size_hover',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdlc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdlc_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
                    'condition' => [
						'bwdlc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdlc_arrow_width_hover',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdlc_arrow_height_hover',
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
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdlc_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdlc_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdlc_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdlc_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdlc_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdlc_arrow_popover_style_hover',
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
					'bwdlc_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_vertical_hover',
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
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdlc_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_Right_position_vertical_hover',
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
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdlc_arrow_right_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'bwdlc_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => ['bullets', 'numbers'],
					'bwdlc_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'bwdlc_dots_popover_style',
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
				'bwdlc_dots_bottom_position_vertical',
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
						'{{WRAPPER}} .bwdlc-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdlc_dots_left_position_horizontal',
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
						'{{WRAPPER}} .bwdlc-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'bwdlc_dots_gap',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdlc_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'bwdlc_dots_gap_vartical',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdlc_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdlc_dots_alignment',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'bwdlc_slider_direction' => 'horizontal',
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
			'bwdlc_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet .bwdlc-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet',
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
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
			'bwdlc_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet-active .bwdlc-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width_active',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height_active',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
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
			'bwdlc_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet .bwdlc-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width_hover',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height_hover',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdlc_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => 'progressbar',
					'bwdlc_slide_pagination' => 'yes',
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
			'bwdlc_progressbar_height',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_progressbar_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-progressbar',
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
				'name' => 'bwdlc_progressbar_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-progressbar .bwdlc-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdlc_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => 'fraction',
					'bwdlc_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'bwdlc_fraction_popover_style',
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
				'bwdlc_fraction_bottom_position',
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
						'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdlc_fraction_left_position',
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
						'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'bwdlc_fraction_width',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'bwdlc_fraction_height',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'bwdlc_fraction_gap',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdlc_fraction_alignment',
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
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'bwdlc_fraction_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'bwdlc_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span.bwdlc-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_fraction_typography',
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_fraction_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_faction_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdlc_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_scroll_bar' => 'yes',
                ],
			]
		);

		$this->add_responsive_control(
			'bwdlc_scrollbar_position',
			[
				'label' => esc_html__( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-scrollbar' => 'bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdlc_scrollbar_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-scrollbar' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_scrollbar_drag_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-scrollbar-drag',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_scrollbar_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-scrollbar',
			]
		);

		$this->end_controls_section();

		// carousel logo styles section start
		$this->start_controls_section(
			'bwdlc_logo_carousel_logo_items_styles_section',
			[
				'label' => esc_html__( 'Logo Carousel', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdlc_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdlc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// logo width
		$this->add_responsive_control(
			'bwdlc_carousel_logo_width',
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
					'{{WRAPPER}} .bwdlc-brand-box-part .bwdlc-logo-img a img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);	
		//carousel height
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_height',
			[
				'label' => esc_html__( 'Height (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
			]
		);
		// carousel logo border radius
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_item_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
			]
		);
		
		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdlc_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_bg_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
			]
		);
		// carousel logo border radius
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_item_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_box_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_carousel_style_selection'];
		$logo_repeater = $settings['bwdlc_logo_carousel_list'];

		
			?>
			<div class="bwdlc-slider-container-wrapper bwdlc-brand-logo-common bwdlc-logo-carousel-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?> <?php echo esc_attr($settings['bwdlc_pagination_bullets_style']); ?>">
				<div class="bwdlc-swiper bwdlc-mySwiper-container">
					<div class="bwdlc-swiper-wrapper">
					<?php
						if( $logo_repeater){
							foreach ($logo_repeater as $logo) {
								?>
								<div class="bwdlc-swiper-slide bwdlc-brand-box-part elementor-repeater-item-<?php echo  esc_attr( $logo['_id'] ) ?>">
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($logo['bwdlc_logo_carousel_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($logo['bwdlc_logo_carousel_logo']['url'] );?>" alt="">
										</a>
									</div>

									<?php if (!empty($logo['bwdlc_logo_carousel_brand_name'])) : ?>
										<div class="bwdlc-tooltip-try"><?php echo esc_html( $logo['bwdlc_logo_carousel_brand_name'] );?></div>
									<?php endif; ?>
								</div>
								<?php 
							}
						}
					?>
					</div>
					
				</div>
				<?php require 'bwdlc-swiper.php';?> 
			</div>	
			<?php 

	}
}

