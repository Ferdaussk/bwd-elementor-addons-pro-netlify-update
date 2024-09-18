<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdsasswiperslider_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdsas-anything-slide' );
	}

	public function get_title() {
		return esc_html__( 'Anything Slide', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen bwdeb-elementor-bundle';
	}
 
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function select_elementor_page( $type ) {
		$args  = [
			'sk_tax_query'      => [
				[
					'taxonomy' => 'elementor_library_type',
					'field'    => 'slug',
					'terms'    => $type,
				],
			],
			'post_type'      => 'elementor_library',
			'posts_per_page' => -1,
		];
		$query = new \WP_Query( $args );
		$posts = $query->posts;
		foreach ( $posts as $post ) {
			$items[ $post->ID ] = $post->post_title;
		}
		if ( empty( $items ) ) {
			$items = [];
		}
		return $items;
	}

	protected function register_controls(){

		$this->start_controls_section(
			'bwdsas_slider_contents',
			[
				'label' => esc_html__( 'Slider Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);



		$bwdsas_slides1 = new \Elementor\Repeater();

		$bwdsas_slides1->add_control(
			'bwdsas___content_type',
			[
				'label'   => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'default' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'saved_section' => __( 'Saved Template', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'default',
			]
		);
		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$bwdsas_slides1->add_control(
			'bwdsas_saved_section',
			[
				'label'     => __( 'Sections', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition' => [
					'bwdsas___content_type' => 'saved_section',
				],
			]
		);

		//content-animation
		$bwdsas_slides1->add_control(
            'bwdsas_contanimation_popover',
            [
                'label' => __('Slide Content Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default'
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//content amination
			$bwdsas_slides1->add_control(
				'bwdsas_content_animations',
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
			$bwdsas_slides1->add_control(
				'bwdsas_content_animation_speed',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-slide-content' => 'animation-duration: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//image-animation
		$bwdsas_slides1->add_control(
            'bwdsas_imganimation_popover',
            [
                'label' => __('Slide Image Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas_slider1_img_switcher' => 'yes',
					'bwdsas___content_type' => 'default'
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//image amination
			$bwdsas_slides1->add_control(
				'bwdsas_img_animations',
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
			$bwdsas_slides1->add_control(
				'bwdsas_img_animation_speed',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-slide-img' => 'animation-duration: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//common
		$bwdsas_slides1->add_control(
            'bwdsas_common_popover',
            [
                'label' => __('Common', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default'
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//horizontal-alignment
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_horizontal_align',
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
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_content-wrap' => 'justify-content: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//vertical-alignment
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_vertical_align',
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
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_content-wrap' => 'align-items: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//content-box-width
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_box-width',
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
							'max' => 100000,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => '%',
					],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-content' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//image-box-width
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_imgbox-width',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-slider-image' => 'width: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas_slider1_img_switcher' => 'yes',
					],
				]
			);
			
			//text alignment
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_text_align',
				[
					'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content' => 'text-align: {{VALUE}}',
					],
					'toggle' => true,
				]
			);

			//image alignment
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_img_align',
				[
					'label' => esc_html__( 'Image Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-slider-image' => 'text-align: {{VALUE}}',
					],
					'condition' => [
						'bwdsas_slider1_img_switcher' => 'yes',
					],
					'toggle' => true,
				]
			);

		$bwdsas_slides1->end_popover();

		//row_column_direction
		$bwdsas_slides1->add_responsive_control(
			'bwdsas_row_column_direction',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_content-wrap' => 'flex-direction: {{value}}',
                ],
				'condition' => [
					'bwdsas_slider1_img_switcher' => 'yes',
					'bwdsas___content_type' => 'default',
				],
			]
		);


		//tabs------------------------------------------
		$bwdsas_slides1->start_controls_tabs(
			'style_tabs',
		);

		//highlight-background-style------------------------------------------
		$bwdsas_slides1->start_controls_tab(
			'style_background_tab',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		$bwdsas_slides1->add_control(
			'bwdsas_slide1_bgtype',
			[
				'label' => esc_html__( 'Image/Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'color',
				'options' => [
					'image' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
					'color' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//slider-background
		$bwdsas_slides1->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_slide1_image',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic'],
				'exclude' => [ 'color'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_single_slider',
				'condition' => [
					'bwdsas_slide1_bgtype' => 'image',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		$bwdsas_slides1->add_control(
			'bwdsas_slide1_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_single_slider' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdsas_slide1_bgtype' => 'color',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//bg-image-overlay
		$bwdsas_slides1->add_control(
			'bwdsas_slider1_bg_overlay',
			[
				'label' => esc_html__( 'Background Overlay?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);
		$bwdsas_slides1->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_slide1_image_ovrly',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_single_slider::before',
				'condition' => [
					'bwdsas_slider1_bg_overlay' => 'yes',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//image-width
		$bwdsas_slides1->add_responsive_control(
			'bwdsas_slide1_image_ovrly_width',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_single_slider::before' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsas_slider1_bg_overlay' => 'yes',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//image-height
		$bwdsas_slides1->add_responsive_control(
			'bwdsas_slide1_image_ovrly_height',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_single_slider::before' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsas_slider1_bg_overlay' => 'yes',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		$bwdsas_slides1->end_controls_tab();

		//highlight-content-style------------------------------------------
		$bwdsas_slides1->start_controls_tab(
			'style_content_tab',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//title
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//sub-title
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_sub_title', 
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//Description
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_desce',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//slide-button-1
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_button1_text', 
			[
				'label' => esc_html__( 'First Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				//'default' => esc_html__( 'our service' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//button2 link
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_button1_link',
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
                    'bwdsas_slide1_button1_text!' => '',
					'bwdsas___content_type' => 'default',
                ],
			]
		);

		//slide-button-2
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_button2_text', 
			[
				'label' => esc_html__( 'Second Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'our contact' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//button2 link
		$bwdsas_slides1->add_control(
			'bwdsas_slide1_button2_link',
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
                    'bwdsas_slide1_button2_text!' => '',
					'bwdsas___content_type' => 'default',
                ],
			]
		);

		//image-switcher
		$bwdsas_slides1->add_control(
			'bwdsas_slider1_img_switcher',
			[
				'label' => esc_html__( 'Image?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		$bwdsas_slides1->add_control(
			'bwdsas_slidder1_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdsas_slider1_img_switcher' => 'yes',
					'bwdsas___content_type' => 'default',
				],
			]
		);

		$bwdsas_slides1->end_controls_tab();

		//highlight-style-style------------------------------------------
		$bwdsas_slides1->start_controls_tab(
			'style_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);

		//content-box-popover
		$bwdsas_slides1->add_control(
			'bwdsas_contentbox_popover',
			[
				'label' => __('Content Box', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
				'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
			]
		);
		$bwdsas_slides1->start_popover();

			//gradient_bg 
			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsas_content_background',
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//border
			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsas_slide1_content_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_content_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_content_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_slide1_content_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//Box Shadow
			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdsas_slide1_content_shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsas_main-content',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//title-popover
		$bwdsas_slides1->add_control(
            'bwdsas_title_popover',
            [
                'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//title-color
			$bwdsas_slides1->add_control(
				'bwdsas_title_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
			//title-hover-color
			$bwdsas_slides1->add_control(
				'bwdsas_title_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//title-background
			$bwdsas_slides1->add_control(
				'bwdsas_title_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_title_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_title_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_title_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//text-shadow
			// $bwdsas_slides1->add_group_control(
			// 	\Elementor\Group_Control_Text_Shadow::get_type(),
			// 	[
			// 		'name' => 'bwdsas_title_shadow',
			// 		'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
			// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title',
			// 	]
			// );

			//title-Typography
			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_title_typography',
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_main-title',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
		
		$bwdsas_slides1->end_popover();

		//sub-title-popover
		$bwdsas_slides1->add_control(
            'bwdsas_subtitle_popover',
            [
                'label' => __('Sub Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//title-color
			$bwdsas_slides1->add_control(
				'bwdsas_subtitle_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
			//title-hover-color
			$bwdsas_slides1->add_control(
				'bwdsas_subtitle_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//title-background
			$bwdsas_slides1->add_control(
				'bwdsas_subtitle_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_subtitle_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_subtitle_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_subtitle_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_subtitle_typography',
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-title',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
		
		$bwdsas_slides1->end_popover();

		//desc-popover
		$bwdsas_slides1->add_control(
            'bwdsas_desc_popover',
            [
                'label' => __('Description', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//title-color
			$bwdsas_slides1->add_control(
				'bwdsas_desc_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
			//title-hover-color
			$bwdsas_slides1->add_control(
				'bwdsas_desc_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//title-background
			$bwdsas_slides1->add_control(
				'bwdsas_desc_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_desc_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_desc_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_desc_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_subdesc_typography',
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_sub-desc',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//button-1-popover
		$bwdsas_slides1->add_control(
            'bwdsas_button1_popover',
            [
                'label' => __('First Button', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//first-button-color
			$bwdsas_slides1->add_control(
				'bwdsas_FB_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-hover-color
			$bwdsas_slides1->add_control(
				'bwdsas_FB_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-background
			$bwdsas_slides1->add_control(
				'bwdsas_FB_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-hover-background
			$bwdsas_slides1->add_control(
				'bwdsas_FB_bg_hover',
				[
					'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1:hover' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_FB_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_FB_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsas_FB_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//first-button-Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_FB_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_button1_typography',
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button1',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//button-2-popover
		$bwdsas_slides1->add_control(
            'bwdsas_button2_popover',
            [
                'label' => __('Second Button', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//second-button-color
			$bwdsas_slides1->add_control(
				'bwdsas_SB_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-hover-color
			$bwdsas_slides1->add_control(
				'bwdsas_SB_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-background
			$bwdsas_slides1->add_control(
				'bwdsas_SB_bg',
				[
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-hover-background
			$bwdsas_slides1->add_control(
				'bwdsas_SB_bg_hover',
				[
					'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2:hover' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-padding
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_SB_padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_SB_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsas_SB_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//second-button-Border Radius
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_SB_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			$bwdsas_slides1->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_button2_typography',
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas_link_btn.bwdsas-button2',
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

		$bwdsas_slides1->end_popover();

		//image-popover
		$bwdsas_slides1->add_control(
            'bwdsas_img_popover',
            [
                'label' => __('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
				'condition' => [
					'bwdsas___content_type' => 'default',
				],
            ]
        );
		$bwdsas_slides1->start_popover();

			//image-width
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_img_width',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-img-wrap' => 'width: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);
			//image-height
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_img_height',
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
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-img-wrap' => 'height: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

			//margin
			$bwdsas_slides1->add_responsive_control(
				'bwdsas_img_margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdsas-img-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'bwdsas___content_type' => 'default',
					],
				]
			);

		$bwdsas_slides1->end_popover();


		$bwdsas_slides1->end_controls_tab();
		$bwdsas_slides1->end_controls_tabs();

		//slider-repeater
		$this->add_control(
			'bwdsas_slide1_repet',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdsas_slides1->get_controls(),
				'default' => [
					[
						'bwdsas_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsas_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdsas_content_animations' => 'animate__fadeInUp',
						'bwdsas_img_animations'   => 'animate__slideInRight',
						'bwdsas_slide1_bgcolor' => '#1F2363',
					],
					[
						'bwdsas_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsas_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdsas_content_animations' => 'animate__fadeInUp',
						'bwdsas_img_animations'   => 'animate__slideInRight',
						'bwdsas_slide1_bgcolor' => '#5636D1',
					],
					[
						'bwdsas_slide1_title' => esc_html__( 'We Provide quality Services' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_sub_title' => esc_html__( 'Quality Wood Work' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_desce' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button1_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsas_slide1_button2_text' => esc_html__( 'Our service' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsas_slide1_button2_link' => ['url' => 'https://bestwpdeveloper.com/contact-us'],
						'bwdsas_content_animations' => 'animate__fadeInUp',
						'bwdsas_img_animations'   => 'animate__slideInRight',
						'bwdsas_slide1_bgcolor' => '#8D0F70',
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
			'bwdsas_slider_main_height',
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
					'{{WRAPPER}} .bwdsas-swiper-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();




        $this->start_controls_section(
			'bwdsas_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Slide Effect
		$this->add_control(
			'bwdsas_slider_effects',
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
			'bwdsas_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdsas_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'bwdsas_coverflow_rotate',
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
				'bwdsas_coverflow_depth',
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
				'bwdsas_coverflow_modifier',
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
				'bwdsas_coverflow_shadow_switcher',
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
					'name' => 'bwdsas_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsas-swiper-slide-shadow-left, {{WRAPPER}} .bwdsas-swiper-slide-shadow-right',
					'condition' => [
						'bwdsas_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'bwdsas_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdsas_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'bwdsas_cube_shadow_switcher',
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
					'name' => 'bwdsas_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsas-swiper-cube-shadow:before',
					'condition' => [
						'bwdsas_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'bwdsas_cube_slide_shadow_switcher',
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
					'name' => 'bwdsas_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsas-swiper-slide-shadow-left, {{WRAPPER}} .bwdsas-swiper-slide-shadow-right',
					'condition' => [
						'bwdsas_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'bwdsas_cube_shadow_offset',
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
				'bwdsas_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .bwdsas-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'bwdsas_slide_speed',
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
			'bwdsas_popover_responsive_device',
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
				'bwdsas_slide_desktop_view',
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
				'bwdsas_desk_Space',
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
				'bwdsas_slide_tablet_view',
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
				'bwdsas_tablet_space',
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
				'bwdsas_slide_mobile_view',
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
				'bwdsas_mobile_space',
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
            'bwdsas_slider_direction',
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
            'bwdsas_loop_switcher',
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
            'bwdsas_autoslide_switcher',
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
			'bwdsas_slider_autoplay_speed',
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
                    'bwdsas_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'bwdsas_mousewheel',
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
            'bwdsas_scroll_bar',
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
            'bwdsas_scroll_visibility',
            [
                'label' => __('Scroll Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', BWDEB_ROOT_AUTHOR_PRO),
                    'true' => __('Automatic hide', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdsas_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'bwdsas_slide_pagination',
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

        //bwdsas_pagination_type
        $this->add_control(
            'bwdsas_pagination_type',
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
                    'bwdsas_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'bwdsas_arrow_switcher',
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
            'bwdsas_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                    'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdsas_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'bwdsas_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdsas_nav_type' => 'icon',
                    'bwdsas_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'bwdsas_nav_prev_arrow',
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
				'bwdsas_nav_next_arrow',
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
			'bwdsas_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdsas_nav_type' => 'text',
                    'bwdsas_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'bwdsas_nav_prev_text',
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
				'bwdsas_nav_next_text',
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
			'bwdsas_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsas_arrow_switcher' => 'yes',
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
                'bwdsas_arrow_color',
                [
                    'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsas_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdsas_arrow_size',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdsas_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev',
                    'condition' => [
						'bwdsas_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdsas_arrow_width',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdsas_arrow_height',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsas_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdsas_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdsas_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'bwdsas_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdsas_slider_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdsas_arrow_popover_style',
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
					'bwdsas_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsas_arrow_left_position_vertical',
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
							'{{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdsas_arrow_left_position_horizontal',
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
							'{{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdsas_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsas_arrow_Right_position_vertical',
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
							'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdsas_arrow_right_position_horizontal',
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
							'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
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
				'bwdsas_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdsas_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdsas_arrow_size_hover',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdsas_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdsas_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover',
                    'condition' => [
						'bwdsas_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdsas_arrow_width_hover',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdsas_arrow_height_hover',
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
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdsas_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdsas_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdsas_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdsas-swiper-button-next .bwdsas-swiper-next:hover, {{WRAPPER}} .bwdsas-swiper-button-prev .bwdsas-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdsas_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdsas_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-next .bwdsas-swiper-next, {{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdsas_arrow_popover_style_hover',
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
					'bwdsas_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsas_arrow_left_position_vertical_hover',
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
							'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdsas_arrow_left_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-prev .bwdsas-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdsas_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdsas_arrow_Right_position_vertical_hover',
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
							'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-next .bwdsas-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdsas_arrow_right_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdsas-slider-common:hover .bwdsas-swiper-button-next .bwdsas-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'bwdsas_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsas_pagination_type' => ['bullets', 'numbers'],
					'bwdsas_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'bwdsas_dots_popover_style',
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
				'bwdsas_dots_bottom_position_vertical',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsas_slider_direction' => 'horizontal',
                    ],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdsas_dots_left_position_horizontal',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsas_slider_direction' => 'horizontal',
                    ],
				]
			);

            //vertical
            //top
			$this->add_responsive_control(
				'bwdsas_dots_top_position_vertical',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination' => 'top: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsas_slider_direction' => 'vertical',
                    ],
				]
			);

			//right
			$this->add_responsive_control(
				'bwdsas_dots_right_position_horizontal',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination' => 'right: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'bwdsas_slider_direction' => 'vertical',
                    ],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'bwdsas_dots_gap',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination .bwdsas-swiper-pagination-bullet:not(:last-child)' => 'margin-inline-end: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdsas_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'bwdsas_dots_gap_vartical',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination .bwdsas-swiper-pagination-bullet:not(:last-child)' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdsas_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdsas_dots_alignment',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'bwdsas_slider_direction' => 'horizontal',
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
			'bwdsas_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet .bwdsas-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsas_pagination_type' => 'bullets',
					'bwdsas_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsas_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination .bwdsas-swiper-pagination-bullet',
				'condition' => [
					'bwdsas_pagination_type' => 'bullets',
					'bwdsas_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsas_dots_width',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsas_dots_height',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsas_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsas_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsas_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet',
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
			'bwdsas_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet-active .bwdsas-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsas_pagination_type' => 'bullets',
					'bwdsas_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsas_dots_width_active',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsas_dots_height_active',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsas_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsas_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsas_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet.bwdsas-swiper-pagination-bullet-active',
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
			'bwdsas_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet .bwdsas-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdsas_pagination_type' => 'bullets',
					'bwdsas_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsas_dots_width_hover',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdsas_dots_height_hover',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsas_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsas_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsas_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsas_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsas_pagination_type' => 'progressbar',
					'bwdsas_slide_pagination' => 'yes',
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
			'bwdsas_progressbar_height',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsas_slider_direction' => 'horizontal',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdsas_progressbar_width',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-progressbar' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdsas_slider_direction' => 'vertical',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_progressbar_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-progressbar',
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
				'name' => 'bwdsas_progressbar_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-progressbar .bwdsas-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsas_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsas_pagination_type' => 'fraction',
					'bwdsas_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'bwdsas_fraction_popover_style',
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
				'bwdsas_fraction_bottom_position',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdsas_fraction_left_position',
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
						'{{WRAPPER}} .bwdsas-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'bwdsas_fraction_width',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'bwdsas_fraction_height',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'bwdsas_fraction_gap',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdsas_fraction_alignment',
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
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'bwdsas_fraction_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'bwdsas_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction span.bwdsas-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsas_fraction_typography',
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_fraction_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsas_faction_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdsas_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsas-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsas_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsas-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdsas_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsas_scroll_bar' => 'yes',
                ],
			]
		);
		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsas_scrollbar_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdsas-swiper-scrollbar-drag',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="bwdsas_sliderDesign_1 bwdsas-slider-common bwdsas-anyslide-widget"> 
			<div class="bwdsas-swiper bwdsas-anySwiper">
				<div class="bwdsas-swiper-wrapper">
					<?php if ( $settings['bwdsas_slide1_repet'] ) { 
						foreach (  $settings['bwdsas_slide1_repet'] as $slide1 ) {
						$animation_class = (isset($slide1['bwdsas_content_animations']) && ($slide1['bwdsas_content_animations'] != 'none')) ? $slide1['bwdsas_content_animations'] : '';
						$animation_classimg = (isset($slide1['bwdsas_img_animations']) && ($slide1['bwdsas_img_animations'] != 'none')) ? $slide1['bwdsas_img_animations'] : '';
					?>
					<div class="bwdsas-swiper-slide bwdsas_single_slider elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
					<?php if ($slide1['bwdsas___content_type'] == 'saved_section') : echo bwdeb_save_plugin()->frontend->get_builder_content_for_display( $slide1['bwdsas_saved_section'] );
					elseif ($slide1['bwdsas___content_type'] == 'default') : ?>
						<div class="bwdsas_content-wrap elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
							<div class="bwdsas_main-content bwdsas-slide-content elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?> <?php echo esc_attr($animation_class); ?>">
							<?php if (!empty($slide1['bwdsas_slide1_title'])) : ?>
								<div class="bwdsas_main-title"><?php echo esc_html( $slide1['bwdsas_slide1_title'] );?></div>
							<?php endif; ?>
							<?php if (!empty($slide1['bwdsas_slide1_sub_title'])) : ?>							
								<div class="bwdsas_sub-title"><?php echo esc_html( $slide1['bwdsas_slide1_sub_title'] ); ?></div>
							<?php endif; ?>
							<?php if (!empty($slide1['bwdsas_slide1_desce'])) : ?>
								<div class="bwdsas_sub-desc"><?php echo esc_html( $slide1['bwdsas_slide1_desce'] ); ?></div>
							<?php endif; ?>
								<div class="bwdsas_slide_button">
								<?php if (!empty($slide1['bwdsas_slide1_button1_text'])) : ?>
									<a class="bwdsas_link_btn bwdsas-button1" href="<?php echo esc_url(isset($slide1['bwdsas_slide1_button1_link']['url']) ? $slide1['bwdsas_slide1_button1_link']['url'] : ''); ?>" <?php echo esc_attr(($slide1['bwdsas_slide1_button1_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($slide1['bwdsas_slide1_button1_text']); ?></a>
								<?php endif; ?>
								<?php if (!empty($slide1['bwdsas_slide1_button2_text'])) : ?>
									<a class="bwdsas_link_btn bwdsas-button2" href="<?php echo esc_url(isset($slide1['bwdsas_slide1_button2_link']['url']) ? $slide1['bwdsas_slide1_button2_link']['url'] : ''); ?>" <?php echo esc_attr(($slide1['bwdsas_slide1_button2_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($slide1['bwdsas_slide1_button2_text']); ?></a>
								<?php endif; ?>
								</div>
							</div>
							<?php if(!empty($slide1['bwdsas_slider1_img_switcher'] == 'yes')) : ?>
							<div class="bwdsas-slider-image elementor-repeater-item-<?php echo esc_attr( $slide1['_id'] ); ?>">
								<div class="bwdsas-img-wrap">
									<img class="bwdsas-slide-img <?php echo esc_attr($animation_classimg); ?>" src="<?php echo esc_url( $slide1['bwdsas_slidder1_image']['url'] ); ?>">
								</div>
							</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					</div>
					<?php } } ?>
				</div> 
				<?php require 'bwdsas-slide-controll.php';?> 
			</div>
		</div>
		<?php
	}
}
