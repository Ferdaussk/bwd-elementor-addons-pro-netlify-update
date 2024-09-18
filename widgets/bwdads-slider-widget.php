<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdadsswiperslider_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdads-swiperslider', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Advanced Effective Slider', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'bwdads_slider_contents',
			[
				'label' => esc_html__( 'Slider Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$bwdads_slides1 = new \Elementor\Repeater();

		//content-animation
		$bwdads_slides1->add_control(
            'bwdads_contanimation_popover',
            [
                'label' => __('Slide Content Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//content amination
			$bwdads_slides1->add_control(
				'bwdads_content_animations',
				[
					'label'     => esc_html__('Animation Type', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInUp' => esc_html__('bounceInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInDown' => esc_html__('bounceInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInLeft' => esc_html__('bounceInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInRight' => esc_html__('bounceInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInUp' => esc_html__('backInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInDown' => esc_html__('backInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInLeft' => esc_html__('backInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInRight' => esc_html__('backInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInUp' => esc_html__('fadeInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInDown' => esc_html__('fadeInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInUpBig' => esc_html__('fadeInUpBig', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInLeft' => esc_html__('fadeInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInRight' => esc_html__('fadeInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInRightBig' => esc_html__('fadeInRightBig', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInBottomRight' => esc_html__('fadeInBottomRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInBottomLeft' => esc_html__('fadeInBottomLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInTopRight' => esc_html__('fadeInTopRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInTopLeft' => esc_html__('fadeInTopLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInUpRight' => esc_html__('rotateInUpRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInUpLeft' => esc_html__('rotateInUpLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInDownRight' => esc_html__('rotateInDownRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInDownLeft' => esc_html__('rotateInDownLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInUp' => esc_html__('zoomInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInRight' => esc_html__('zoomInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInLeft' => esc_html__('zoomInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInDown' => esc_html__('zoomInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInUp' => esc_html__('SlideInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInRight' => esc_html__('slideInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInLeft' => esc_html__('slideInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInDown' => esc_html__('slideInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rollIn' => esc_html__('rollIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__pulse' => esc_html__('Pulse', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rubberBand' => esc_html__('RubberBand', BWDEB_ROOT_AUTHOR_PRO),
						'animate__shakeX' => esc_html__('ShakeX', BWDEB_ROOT_AUTHOR_PRO),
						'animate__shakeY' => esc_html__('ShakeY', BWDEB_ROOT_AUTHOR_PRO),
						'animate__headShake' => esc_html__('HeadShake', BWDEB_ROOT_AUTHOR_PRO),
						'animate__swing' => esc_html__('Swing', BWDEB_ROOT_AUTHOR_PRO),
						'animate__tada' => esc_html__('Tada', BWDEB_ROOT_AUTHOR_PRO),
						'animate__wobble' => esc_html__('Wobble', BWDEB_ROOT_AUTHOR_PRO),
						'animate__jello' => esc_html__('Jello', BWDEB_ROOT_AUTHOR_PRO),
						'animate__heartBeat' => esc_html__('HeartBeat', BWDEB_ROOT_AUTHOR_PRO),
						'animate__jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
						'animate__lightSpeedInLeft' => esc_html__('lightSpeedInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__lightSpeedInRight' => esc_html__('lightSpeedInRight', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default' => 'animate__fadeInUp',
				]
			);

			//content_animation_speed
			$bwdads_slides1->add_control(
				'bwdads_content_animation_speed',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdads-slide-content' => 'animation-duration: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$bwdads_slides1->end_popover();

		//image-animation
		$bwdads_slides1->add_control(
            'bwdads_imganimation_popover',
            [
                'label' => __('Slide Image Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdads_slider1_img_switcher' => 'yes',
				],
            ]
        );
		$bwdads_slides1->start_popover();

			//image amination
			$bwdads_slides1->add_control(
				'bwdads_img_animations',
				[
					'label'     => esc_html__('Animation Type', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInUp' => esc_html__('bounceInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInDown' => esc_html__('bounceInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInLeft' => esc_html__('bounceInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__bounceInRight' => esc_html__('bounceInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInUp' => esc_html__('backInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInDown' => esc_html__('backInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInLeft' => esc_html__('backInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__backInRight' => esc_html__('backInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInUp' => esc_html__('fadeInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInDown' => esc_html__('fadeInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInUpBig' => esc_html__('fadeInUpBig', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInLeft' => esc_html__('fadeInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInRight' => esc_html__('fadeInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInRightBig' => esc_html__('fadeInRightBig', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInBottomRight' => esc_html__('fadeInBottomRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInBottomLeft' => esc_html__('fadeInBottomLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInTopRight' => esc_html__('fadeInTopRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__fadeInTopLeft' => esc_html__('fadeInTopLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInUpRight' => esc_html__('rotateInUpRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInUpLeft' => esc_html__('rotateInUpLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInDownRight' => esc_html__('rotateInDownRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rotateInDownLeft' => esc_html__('rotateInDownLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInUp' => esc_html__('zoomInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInRight' => esc_html__('zoomInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInLeft' => esc_html__('zoomInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__zoomInDown' => esc_html__('zoomInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInUp' => esc_html__('SlideInUp', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInRight' => esc_html__('slideInRight', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInLeft' => esc_html__('slideInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__slideInDown' => esc_html__('slideInDown', BWDEB_ROOT_AUTHOR_PRO),
						'animate__flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rollIn' => esc_html__('rollIn', BWDEB_ROOT_AUTHOR_PRO),
						'animate__pulse' => esc_html__('Pulse', BWDEB_ROOT_AUTHOR_PRO),
						'animate__rubberBand' => esc_html__('RubberBand', BWDEB_ROOT_AUTHOR_PRO),
						'animate__shakeX' => esc_html__('ShakeX', BWDEB_ROOT_AUTHOR_PRO),
						'animate__shakeY' => esc_html__('ShakeY', BWDEB_ROOT_AUTHOR_PRO),
						'animate__headShake' => esc_html__('HeadShake', BWDEB_ROOT_AUTHOR_PRO),
						'animate__swing' => esc_html__('Swing', BWDEB_ROOT_AUTHOR_PRO),
						'animate__tada' => esc_html__('Tada', BWDEB_ROOT_AUTHOR_PRO),
						'animate__wobble' => esc_html__('Wobble', BWDEB_ROOT_AUTHOR_PRO),
						'animate__jello' => esc_html__('Jello', BWDEB_ROOT_AUTHOR_PRO),
						'animate__heartBeat' => esc_html__('HeartBeat', BWDEB_ROOT_AUTHOR_PRO),
						'animate__jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
						'animate__lightSpeedInLeft' => esc_html__('lightSpeedInLeft', BWDEB_ROOT_AUTHOR_PRO),
						'animate__lightSpeedInRight' => esc_html__('lightSpeedInRight', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'animate__slideInRight',
				]
			);

			//image_animation_speed
			$bwdads_slides1->add_control(
				'bwdads_img_animation_speed',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdads-slide-img' => 'animation-duration: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$bwdads_slides1->end_popover();

		//common
		$bwdads_slides1->add_control(
            'bwdads_common_popover',
            [
                'label' => __('Common', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//horizontal-alignment
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_horizontal_align',
				[
					'label' => esc_html__( 'Horizontal Alignment', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'start' => [
							'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => ' eicon-h-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => 'eicon-h-align-center',
						],
						'end' => [
							'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => 'eicon-h-align-right',
						],
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_content-wrap' => 'justify-content: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//vertical-alignment
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_vertical_align',
				[
					'label' => esc_html__( 'Vertical Alignment', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'start' => [
							'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => 'eicon-v-align-top',
						],
						'center' => [
							'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => 'eicon-v-align-middle',
						],
						'end' => [
							'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
							'icon' => ' eicon-v-align-bottom',
						],
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_content-wrap' => 'align-items: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//content-box-width
			$bwdads_slides1->add_responsive_control(
				'bwdads_box-width',
				[
					'label' => esc_html__( 'Content Box Width (%)', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ '%', 'px' ],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => '%',
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-content' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//image-box-width
			$bwdads_slides1->add_responsive_control(
				'bwdads_imgbox-width',
				[
					'label' => esc_html__( 'Image Box Width (%)', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ '%', 'px' ],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => '%',
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-slider-image' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdads_slider1_img_switcher' => 'yes',
					],
				]
			);
			
			//text alignment
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_text_align',
				[
					'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content' => 'text-align: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//image alignment
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_img_align',
				[
					'label' => esc_html__( 'Image Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-slider-image' => 'text-align: {{VALUE}}',
					],
					'condition' => [
						'bwdads_slider1_img_switcher' => 'yes',
					],
					'toggle' => true,
				]
			);

		$bwdads_slides1->end_popover();

		//row_column_direction
		$bwdads_slides1->add_responsive_control(
			'bwdads_row_column_direction',
			[
				'label' => esc_html__( 'Row/Column Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'row'  => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO ),
					'column'  => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse'  => esc_html__( 'Row Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'column-reverse'  => esc_html__( 'Column Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors'   => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_content-wrap' => 'flex-direction: {{value}}',
                ],
				'condition' => [
					'bwdads_slider1_img_switcher' => 'yes',
				],
			]
		);


		//tabs------------------------------------------
		$bwdads_slides1->start_controls_tabs(
			'style_tabs',
		);

		//highlight-background-style------------------------------------------
		$bwdads_slides1->start_controls_tab(
			'style_background_tab',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdads_slides1->add_control(
			'bwdads_slide1_bgtype',
			[
				'label' => esc_html__( 'Image/Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'image',
				'options' => [
					'image' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
					'color' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//slider-background
		$bwdads_slides1->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_slide1_image',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic'],
				'exclude' => [ 'color'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd_single_slider',
				'condition' => [
					'bwdads_slide1_bgtype' => 'image',
				],
			]
		);

		$bwdads_slides1->add_control(
			'bwdads_slide1_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_single_slider' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdads_slide1_bgtype' => 'color',
				],
			]
		);

		//bg-image-overlay
		$bwdads_slides1->add_control(
			'bwdads_slider1_bg_overlay',
			[
				'label' => esc_html__( 'Background Overlay?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$bwdads_slides1->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_slide1_image_ovrly',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => [ 'image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd_single_slider::before',
				'condition' => [
					'bwdads_slider1_bg_overlay' => 'yes',
				],
			]
		);

		//image-width
		$bwdads_slides1->add_responsive_control(
			'bwdads_slide1_image_ovrly_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_single_slider::before' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdads_slider1_bg_overlay' => 'yes',
				],
			]
		);

		//image-height
		$bwdads_slides1->add_responsive_control(
			'bwdads_slide1_image_ovrly_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_single_slider::before' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdads_slider1_bg_overlay' => 'yes',
				],
			]
		);

		$bwdads_slides1->end_controls_tab();

		//highlight-content-style------------------------------------------
		$bwdads_slides1->start_controls_tab(
			'style_content_tab',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//title
		$bwdads_slides1->add_control(
			'bwdads_slide1_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				// 'default' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//sub-title
		$bwdads_slides1->add_control(
			'bwdads_slide1_sub_title', 
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				//'default' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//Description
		$bwdads_slides1->add_control(
			'bwdads_slide1_desce',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				//'default' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//slide-button-1
		$bwdads_slides1->add_control(
			'bwdads_slide1_button1_text', 
			[
				'label' => esc_html__( 'First Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				//'default' => esc_html__( 'our service' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//button2 link
		$bwdads_slides1->add_control(
			'bwdads_slide1_button1_link',
			[
				'label' => esc_html__( 'First Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'show_external' => true,
				'default' => [
                    'url' => 'https://bestwpdeveloper.com/',
                    'is_external' => true,
                    'nofollow' => true,
                ],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
                    'bwdads_slide1_button1_text!' => '',
                ],
			]
		);

		//slide-button-2
		$bwdads_slides1->add_control(
			'bwdads_slide1_button2_text', 
			[
				'label' => esc_html__( 'Second Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'our contact' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//button2 link
		$bwdads_slides1->add_control(
			'bwdads_slide1_button2_link',
			[
				'label' => esc_html__( 'Second Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'show_external' => true,
				'default' => [
                    'url' => 'https://bestwpdeveloper.com/contact-us',
                    'is_external' => true,
                    'nofollow' => true,
                ],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
                    'bwdads_slide1_button2_text!' => '',
                ],
			]
		);

		//image-switcher
		$bwdads_slides1->add_control(
			'bwdads_slider1_img_switcher',
			[
				'label' => esc_html__( 'Image?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);

		$bwdads_slides1->add_control(
			'bwdads_slidder1_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdads_slider1_img_switcher' => 'yes',
				],
			]
		);

		$bwdads_slides1->end_controls_tab();

		//highlight-style-style------------------------------------------
		$bwdads_slides1->start_controls_tab(
			'style_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//content-box-popover
		$bwdads_slides1->add_control(
			'bwdads_contentbox_popover',
			[
				'label' => __('Content Box', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
				'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
			]
		);
		$bwdads_slides1->start_popover();

			//gradient_bg 
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdads_content_background',
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content',
				]
			);

			//border
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdads_slide1_content_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content',
				]
			);

			//Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_content_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_content_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_slide1_content_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdads_slide1_content_shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwd_main-content',
				]
			);

		$bwdads_slides1->end_popover();

		//title-popover
		$bwdads_slides1->add_control(
            'bwdads_title_popover',
            [
                'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//title-color
			$bwdads_slides1->add_control(
				'bwdads_title_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title' => 'color: {{VALUE}}',
					],
				]
			);
			//title-hover-color
			$bwdads_slides1->add_control(
				'bwdads_title_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//title-background
			$bwdads_slides1->add_control(
				'bwdads_title_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title' => 'background: {{VALUE}}',
					],
				]
			);

			//padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_title_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_title_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_title_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//text-shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Text_Shadow::get_type(),
				[
					'name' => 'bwdads_title_shadow',
					'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_main-title',
				]
			);

			
		
		$bwdads_slides1->end_popover();

		//sub-title-popover
		$bwdads_slides1->add_control(
            'bwdads_subtitle_popover',
            [
                'label' => __('Sub Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//title-color
			$bwdads_slides1->add_control(
				'bwdads_subtitle_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title' => 'color: {{VALUE}}',
					],
				]
			);
			//title-hover-color
			$bwdads_slides1->add_control(
				'bwdads_subtitle_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//title-background
			$bwdads_slides1->add_control(
				'bwdads_subtitle_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title' => 'background: {{VALUE}}',
					],
				]
			);

			//padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_subtitle_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_subtitle_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_subtitle_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//text-shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Text_Shadow::get_type(),
				[
					'name' => 'bwdads_subtitle_shadow',
					'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-title',
				]
			);

			
		
		$bwdads_slides1->end_popover();

		//desc-popover
		$bwdads_slides1->add_control(
            'bwdads_desc_popover',
            [
                'label' => __('Description', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//title-color
			$bwdads_slides1->add_control(
				'bwdads_desc_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc' => 'color: {{VALUE}}',
					],
				]
			);
			//title-hover-color
			$bwdads_slides1->add_control(
				'bwdads_desc_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//title-background
			$bwdads_slides1->add_control(
				'bwdads_desc_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc' => 'background: {{VALUE}}',
					],
				]
			);

			//padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_desc_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_desc_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_desc_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//text-shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Text_Shadow::get_type(),
				[
					'name' => 'bwdads_desc_shadow',
					'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_sub-desc',
				]
			);

			
		
		$bwdads_slides1->end_popover();

		//button-1-popover
		$bwdads_slides1->add_control(
            'bwdads_button1_popover',
            [
                'label' => __('First Button', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//first-button-color
			$bwdads_slides1->add_control(
				'bwdads_FB_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1' => 'color: {{VALUE}}',
					],
				]
			);

			//first-button-hover-color
			$bwdads_slides1->add_control(
				'bwdads_FB_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//first-button-background
			$bwdads_slides1->add_control(
				'bwdads_FB_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1' => 'background: {{VALUE}}',
					],
				]
			);

			//first-button-hover-background
			$bwdads_slides1->add_control(
				'bwdads_FB_bg_hover',
				[
					'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1:hover' => 'background: {{VALUE}}',
					],
				]
			);

			//first-button-padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_FB_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//first-button-margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_FB_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdads_FB_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1',
				]
			);

			//first-button-Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_FB_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//first-button-box-shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdads_FB_shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button1',
				]
			);

		$bwdads_slides1->end_popover();

		//button-2-popover
		$bwdads_slides1->add_control(
            'bwdads_button2_popover',
            [
                'label' => __('Second Button', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//second-button-color
			$bwdads_slides1->add_control(
				'bwdads_SB_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2' => 'color: {{VALUE}}',
					],
				]
			);

			//second-button-hover-color
			$bwdads_slides1->add_control(
				'bwdads_SB_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//second-button-background
			$bwdads_slides1->add_control(
				'bwdads_SB_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2' => 'background: {{VALUE}}',
					],
				]
			);

			//second-button-hover-background
			$bwdads_slides1->add_control(
				'bwdads_SB_bg_hover',
				[
					'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2:hover' => 'background: {{VALUE}}',
					],
				]
			);

			//second-button-padding
			$bwdads_slides1->add_responsive_control(
				'bwdads_SB_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			//second-button-margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_SB_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdads_SB_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2',
				]
			);

			//second-button-Border Radius
			$bwdads_slides1->add_responsive_control(
				'bwdads_SB_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//second-button-box-shadow
			$bwdads_slides1->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdads_SB_shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd_link_btn.bwd-button2',
				]
			);

		$bwdads_slides1->end_popover();

		//image-popover
		$bwdads_slides1->add_control(
            'bwdads_img_popover',
            [
                'label' => __('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdads_slides1->start_popover();

			//image-width
			$bwdads_slides1->add_responsive_control(
				'bwdads_img_width',
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
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-img-wrap' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//image-height
			$bwdads_slides1->add_responsive_control(
				'bwdads_img_height',
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
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-img-wrap' => 'block-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//margin
			$bwdads_slides1->add_responsive_control(
				'bwdads_img_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-img-wrap' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
					],
				]
			);

		$bwdads_slides1->end_popover();


		$bwdads_slides1->end_controls_tab();
		$bwdads_slides1->end_controls_tabs();

		//slider-repeater
		$this->add_control(
			'bwdads_slide1_repet',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdads_slides1->get_controls(),
				'default' => [
					[
						'bwdads_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdads_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdads_content_animations' => 'animate__fadeInUp',
						'bwdads_img_animations'   => 'animate__slideInRight',
						'bwdads_slidder1_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/bwd-vector.png',
                        ],
					],
					[
						'bwdads_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdads_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdads_content_animations' => 'animate__fadeInUp',
						'bwdads_img_animations'   => 'animate__slideInRight',
						'bwdads_slidder1_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/bwd-vector.png',
                        ],
					],
					[
						'bwdads_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdads_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdads_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdads_content_animations' => 'animate__fadeInUp',
						'bwdads_img_animations'   => 'animate__slideInRight',
						'bwdads_slidder1_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/bwd-vector.png',
                        ],
					],
				],
			]
		);

		$this->add_control(
            'slides_control_separator',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );

		$this->add_responsive_control(
			'bwdads_slider_main_height',
			[
				'label' => esc_html__( 'Slider Height', BWDEB_ROOT_AUTHOR_PRO ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-wrapper' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();




        $this->start_controls_section(
			'bwdads_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Slide Effect
		$this->add_control(
			'bwdads_slider_effects',
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
			'bwdads_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdads_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'bwdads_coverflow_rotate',
				[
					'label' => esc_html__( 'Coverflow Rotate', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 1000,
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
				'bwdads_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 1000,
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
				'bwdads_coverflow_modifier',
				[
					'label' => esc_html__( 'Coverflow Modifier', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 1000,
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
				'bwdads_coverflow_shadow_switcher',
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
					'name' => 'bwdads_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdads-swiper-slide-shadow-left, {{WRAPPER}} .bwdads-swiper-slide-shadow-right',
					'condition' => [
						'bwdads_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'bwdads_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdads_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'bwdads_cube_shadow_switcher',
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
					'name' => 'bwdads_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdads-swiper-cube-shadow:before',
					'condition' => [
						'bwdads_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'bwdads_cube_slide_shadow_switcher',
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
					'name' => 'bwdads_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdads-swiper-slide-shadow-left, {{WRAPPER}} .bwdads-swiper-slide-shadow-right',
					'condition' => [
						'bwdads_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'bwdads_cube_shadow_offset',
				[
					'label' => esc_html__( 'Cube Shadow Offset', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 1000,
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
				'bwdads_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .bwdads-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'bwdads_slide_speed',
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
			'bwdads_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'frontend_available' => true,
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'bwdads_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', BWDEB_ROOT_AUTHOR_PRO),
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
				'bwdads_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'bwdads_slide_tablet_view',
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
				'bwdads_tablet_space',
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
				'bwdads_slide_mobile_view',
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
				'bwdads_mobile_space',
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
            'bwdads_slider_direction',
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
            'bwdads_loop_switcher',
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
            'bwdads_autoslide_switcher',
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
			'bwdads_slider_autoplay_speed',
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
                    'bwdads_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'bwdads_mousewheel',
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
            'bwdads_scroll_bar',
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
            'bwdads_scroll_visibility',
            [
                'label' => __('Scroll Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', BWDEB_ROOT_AUTHOR_PRO),
                    'true' => __('Automatic hide', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdads_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'bwdads_slide_pagination',
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

        //bwdads_pagination_type
        $this->add_control(
            'bwdads_pagination_type',
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
                    'bwdads_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'bwdads_arrow_switcher',
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
            'bwdads_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                    'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdads_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'bwdads_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdads_nav_type' => 'icon',
                    'bwdads_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'bwdads_nav_prev_arrow',
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
				'bwdads_nav_next_arrow',
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
			'bwdads_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdads_nav_type' => 'text',
                    'bwdads_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'bwdads_nav_prev_text',
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
				'bwdads_nav_next_text',
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
			'bwdads_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdads_arrow_switcher' => 'yes',
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
                'bwdads_arrow_color',
                [
                    'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdads_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdads_arrow_size',
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdads_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdads_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev',
                    'condition' => [
						'bwdads_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdads_arrow_width',
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdads_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'block-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdads_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdads_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdads_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'bwdads_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdads_slider_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdads_arrow_popover_style',
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
					'bwdads_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdads_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdads_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdads_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdads_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdads_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
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
				'bwdads_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdads_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdads_arrow_size_hover',
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdads_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdads_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover',
                    'condition' => [
						'bwdads_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdads_arrow_width_hover',
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdads_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover' => 'block-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdads_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdads_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdads_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdads-swiper-button-next .bwdads-swiper-next:hover, {{WRAPPER}} .bwdads-swiper-button-prev .bwdads-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdads_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdads_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-next .bwdads-swiper-next, {{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdads_arrow_popover_style_hover',
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
					'bwdads_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdads_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdads_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-prev .bwdads-swiper-prev' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdads_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdads_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-next .bwdads-swiper-next' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdads_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdads-slider-common:hover .bwdads-swiper-button-next .bwdads-swiper-next' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'bwdads_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdads_pagination_type' => 'bullets',
					'bwdads_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'bwdads_dots_popover_style',
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
				'bwdads_dots_bottom_position_vertical',
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
						'{{WRAPPER}} .bwdads-swiper-pagination' => 'inset-block-end: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdads_slider_direction' => 'horizontal',
                    ],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdads_dots_left_position_horizontal',
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
						'{{WRAPPER}} .bwdads-swiper-pagination' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdads_slider_direction' => 'horizontal',
                    ],
				]
			);

            //vertical
            //top
			$this->add_responsive_control(
				'bwdads_dots_top_position_vertical',
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
						'{{WRAPPER}} .bwdads-swiper-pagination' => 'inset-block-start: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdads_slider_direction' => 'vertical',
                    ],
				]
			);

			//right
			$this->add_responsive_control(
				'bwdads_dots_right_position_horizontal',
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
						'{{WRAPPER}} .bwdads-swiper-pagination' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdads_slider_direction' => 'vertical',
                    ],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'bwdads_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination .bwdads-swiper-pagination-bullet:not(:last-child)' => 'margin-inline-end: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdads_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'bwdads_dots_gap_vartical',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination .bwdads-swiper-pagination-bullet:not(:last-child)' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdads_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdads_dots_alignment',
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
					'{{WRAPPER}} .bwdads-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'bwdads_slider_direction' => 'horizontal',
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
			'bwdads_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet .bwdads-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdads_pagination_type' => 'bullets',
					'bwdads_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdads_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination .bwdads-swiper-pagination-bullet',
				'condition' => [
					'bwdads_pagination_type' => 'bullets',
					'bwdads_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdads_dots_width',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdads_dots_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdads_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdads_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdads_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet',
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
			'bwdads_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet-active .bwdads-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdads_pagination_type' => 'bullets',
					'bwdads_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdads_dots_width_active',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdads_dots_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdads_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdads_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdads_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet.bwdads-swiper-pagination-bullet-active',
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
			'bwdads_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet .bwdads-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdads_pagination_type' => 'bullets',
					'bwdads_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdads_dots_width_hover',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdads_dots_height_hover',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdads_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdads_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdads_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdads_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdads_pagination_type' => 'progressbar',
					'bwdads_slide_pagination' => 'yes',
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
			'bwdads_progressbar_height',
			[
				'label' => esc_html__( 'height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-progressbar' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdads_slider_direction' => 'horizontal',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdads_progressbar_width',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-progressbar' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdads_slider_direction' => 'vertical',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_progressbar_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-progressbar',
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
				'name' => 'bwdads_progressbar_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-progressbar .bwdads-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdads_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdads_pagination_type' => 'fraction',
					'bwdads_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'bwdads_fraction_popover_style',
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
				'bwdads_fraction_bottom_position',
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
						'{{WRAPPER}} .bwdads-swiper-pagination-fraction' => 'inset-block-end: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdads_fraction_left_position',
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
						'{{WRAPPER}} .bwdads-swiper-pagination-fraction' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'bwdads_fraction_width',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction span' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'bwdads_fraction_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction span' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'bwdads_fraction_gap',
			[
				'label' => esc_html__( 'Fraction Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdads_fraction_alignment',
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
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'bwdads_fraction_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'bwdads_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction span.bwdads-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdads_fraction_typography',
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_fraction_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdads_faction_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdads_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdads-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdads_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdads-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdads_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdads_scroll_bar' => 'yes',
                ],
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdads_scrollbar_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdads-swiper-scrollbar-drag',
			]
		);

		$this->end_controls_section();




	}

	protected function render() {
		$settings = $this->get_settings_for_display();?>

		<div class="bwd_sliderDesign_1 bwdads-slider-common bwd-slider-widget-wrapper"> 
			<div class="bwdads-swiper bwdads-mySwiper">
				<div class="bwdads-swiper-wrapper">
					<?php if ( $settings['bwdads_slide1_repet'] ) { 
						foreach (  $settings['bwdads_slide1_repet'] as $slide1 ) {
						$animation_class = (isset($slide1['bwdads_content_animations']) && ($slide1['bwdads_content_animations'] != 'none')) ? $slide1['bwdads_content_animations'] : '';
						$animation_classimg = (isset($slide1['bwdads_img_animations']) && ($slide1['bwdads_img_animations'] != 'none')) ? $slide1['bwdads_img_animations'] : ''; ?>
					<div class="bwdads-swiper-slide bwd_single_slider elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
						<div class="bwd_content-wrap elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
							<div class="bwd_main-content bwdads-slide-content elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?> <?php echo esc_attr($animation_class); ?>">
							<?php if (!empty($slide1['bwdads_slide1_title'])) : ?>
								<div class="bwd_main-title"><?php echo esc_html( $slide1['bwdads_slide1_title'] );?></div>
							<?php endif; ?>
							<?php if (!empty($slide1['bwdads_slide1_sub_title'])) : ?>							
								<div class="bwd_sub-title"><?php echo esc_html( $slide1['bwdads_slide1_sub_title'] ); ?></div>
							<?php endif; ?>
							<?php if (!empty($slide1['bwdads_slide1_desce'])) : ?>
								<div class="bwd_sub-desc"><?php echo esc_html( $slide1['bwdads_slide1_desce'] ); ?></div>
							<?php endif; ?>
								<div class="bwd_slide_button">
								<?php if (!empty($slide1['bwdads_slide1_button1_text'])) : ?>
									<a class="bwd_link_btn bwd-button1" href="<?php echo esc_url(isset($slide1['bwdads_slide1_button1_link']['url']) ? $slide1['bwdads_slide1_button1_link']['url'] : ''); ?>" <?php echo esc_attr(($slide1['bwdads_slide1_button1_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($slide1['bwdads_slide1_button1_text']); ?></a>
								<?php endif; ?>
								<?php if (!empty($slide1['bwdads_slide1_button2_text'])) : ?>
									<a class="bwd_link_btn bwd-button2" href="<?php echo esc_url(isset($slide1['bwdads_slide1_button2_link']['url']) ? $slide1['bwdads_slide1_button2_link']['url'] : ''); ?>" <?php echo esc_attr(($slide1['bwdads_slide1_button2_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($slide1['bwdads_slide1_button2_text']); ?></a>
								<?php endif; ?>
								</div>
							</div>
							<?php if(!empty($slide1['bwdads_slider1_img_switcher'] == 'yes')) : ?>
							<div class="bwd-slider-image elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
								<div class="bwd-img-wrap">
									<img class="bwdads-slide-img <?php echo esc_attr($animation_classimg); ?>" src="<?php echo esc_url( $slide1['bwdads_slidder1_image']['url'] ); ?>">
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php } } ?>
				</div> 
				<?php require 'bwdads-swiper.php';?> 
			</div>
		</div> <?php
	}
}
