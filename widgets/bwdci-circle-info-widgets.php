<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdci_circle_info_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdci-circle-info', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Interactive Circle Info', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'info-circle bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		

		$this->start_controls_section(
			'bwdci_common_section',
			[
				'label' => esc_html__( 'Circle Info', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdci_select_style_selection',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_commn_alignment',
			[
				'label' => esc_html__( 'Box Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
					'{{WRAPPER}} .bwdci-style-common' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwdci_commn_main_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->add_control(
			'bwdci_mouse_event',
			[
				'label'     => esc_html__('Mouse Event Type', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'mouseenter',
				'options'   => [
					'mouseenter' => esc_html__('Mouse Enter', BWDEB_ROOT_AUTHOR_PRO),
					'mouseleave' => esc_html__('Mouse Leave', BWDEB_ROOT_AUTHOR_PRO),
					'click' => esc_html__('Click', BWDEB_ROOT_AUTHOR_PRO),
					'dblclick' => esc_html__('Double Click', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'bwdci_info_inner_animation',
			[
				'label' => esc_html__( 'Circle Box Animation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'auto-rotate' => esc_html__( 'Auto Rotate', BWDEB_ROOT_AUTHOR_PRO ),
					'info-inner-animation' => esc_html__( 'Animations', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdci_innerbox_animations',
			[
				'label'     => esc_html__('Content Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => '',
				'options'   => [
					'' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
					'bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
					'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
					'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
					'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
					'fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
					'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
					'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
					'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
					'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
					'flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner.info-inner-animation' => 'animation-name: {{VALUE}}!important;',
				],
				'condition' => ['bwdci_info_inner_animation' => 'info-inner-animation',],
			]
		);

		$this->add_control(
			'bwdci_content_animation_speed',
			[
				'label' => __('Animation Speed (s)', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['s'],
				'range' => [
					's' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 's',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdci_info_inner_animation!' => ''
				],
			]
		);

		$this->add_control(
			'bwdci_info_inner_animation_direction',
			[
				'label' => esc_html__( 'Animation Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'alternate' => esc_html__( 'Alternate', BWDEB_ROOT_AUTHOR_PRO ),
					'alternate-reverse' => esc_html__( 'Alternate Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'reverse' => esc_html__( 'Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner.auto-rotate' => 'animation-direction: {{VALUE}};',
				],
				'condition' => [ 'bwdci_info_inner_animation' => 'auto-rotate' ],
			]
		);
		$this->add_control(
			'bwdci_info_inner_animation_hover_pause',
			[
				'label' => esc_html__( 'Pause On Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'hover-puse',
				'options' => [
					'' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'hover-puse' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [ 'bwdci_info_inner_animation!' => '' ],
			]
		);


		$bwdci_repet = new \Elementor\Repeater();

		//content amination
		$bwdci_repet->add_control(
			'bwdci_content_animations',
			[
				'label'     => esc_html__('Content Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => '',
				'options'   => [
					'' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item.active' => 'animation-name: {{VALUE}}!important;',
				],
			]
		);

		//content_animation_speed
		$bwdci_repet->add_control(
			'bwdci_content_animation_speed',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item.active' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$bwdci_repet->start_controls_tabs(
			'bwdci_repeat_tabs'
		);
		
		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_button_tab',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_icon_yes_no',
			[
				'label' => esc_html__( 'Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-editor-close',
					],
					'icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-icon-box',
					],
				],
				'default' => 'icon',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-info-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_short_title', 
			[
				'label' => esc_html__( 'Short Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		
		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_content_tab',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_main_title_url',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_title!' => '',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_icon_yes_no',
			[
				'label' => esc_html__( 'Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-editor-close',
					],
					'icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-icon-box',
					],
				],
				'default' => '',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_button_main_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-info-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
				'condition' => [
					'bwdci_main_icon_yes_no' => 'icon',
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_button_main_icon_url',
			[
				'label' => esc_html__( 'Icon Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_icon_yes_no' => 'icon',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_image_yes_no',
			[
				'label' => esc_html__( 'Image?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-editor-close',
					],
					'image' => [
						'title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-image-box',
					],
				],
				'default' => '',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'bwdci_main_image_yes_no' => 'image',
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_button_main_image_url',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_image_yes_no' => 'image',
				],
			]
		);
		
		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_bg_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_info_box_popover_toggle',
			[
				'label' => esc_html__( 'Info Box', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);
			$bwdci_repet->add_control(
				'bwdci_repeat_background__BG_type',
				[
					'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => 'solid',
					'options' => [
						'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
						'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
						'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci_repeat_background__BG_type_solid',
				[
					'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'solid'
					],
				]
			);
			$bwdci_repet->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdci_repeat_background__bg_gradient',
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item',
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'gradient'
					],
				]
			);
			$bwdci_repet->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdci_repeat_background_bg_img',
					'types' => [ 'classic' ],
					'exclude' => [ 'color' ],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item',
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'img'
					],
				]
			);

		//title
		$bwdci_repet->add_control(
			'bwdci_title_popover_toggle',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdci_main_title!' => '',
				],
			]
		);
		$bwdci_repet->start_popover();

			$bwdci_repet->add_control(
				'bwdci_title_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-maintitle' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_title!' => '',
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci_title_color_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-maintitle:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_title!' => '',
					],
				]
			);

		$bwdci_repet->end_popover();

		//description
		$bwdci_repet->add_control(
			'bwdci_desce_popover_toggle',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdci_main_description!' => '',
				],
			]
		);
		$bwdci_repet->start_popover();

			$bwdci_repet->add_control(
				'bwdci__desce_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-main-desce' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_description!' => '',
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci__desce_hover_color',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-main-desce:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_description!' => '',
					],
				]
			);

		$bwdci_repet->end_popover();

		$bwdci_repet->end_controls_tab();
		$bwdci_repet->end_controls_tabs();


		//hr-----------
		// $bwdci_repet->add_control(
		// 	'bwdci_repeat_button_after_hr',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::DIVIDER,
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_heading',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);


		$bwdci_repet->start_controls_tabs(
			'bwdci_repeat_button__tabs'
		);
		
		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_button__style_tab_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient & Image', BWDEB_ROOT_AUTHOR_PRO ),
					//'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'solid'
				],
			]
		);

		$bwdci_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient',
				'types' => [ 'classic','gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'gradient'
				],
			]
		);

		// $bwdci_repet->add_group_control(
		// 	\Elementor\Group_Control_Background::get_type(),
		// 	[
		// 		'name' => 'bwdci_repeat_button_bg_img',
		// 		'types' => [ 'classic' ],
		// 		'exclude' => [ 'color' ],
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle',
		// 		'condition' => [
		// 			'bwdci_repeat_button__BG_type' => 'img'
		// 		],
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);
		
		$bwdci_repet->add_control(
			'bwdci_repeat_button_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_short_title!' => '',
				],
			]
		);

		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_content__style_tab_active',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_active',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient & Image', BWDEB_ROOT_AUTHOR_PRO ),
					//'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'solid'
				],
			]
		);

		$bwdci_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient_active',
				'types' => [ 'classic','gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'gradient'
				],
			]
		);

		// $bwdci_repet->add_group_control(
		// 	\Elementor\Group_Control_Background::get_type(),
		// 	[
		// 		'name' => 'bwdci_repeat_button_bg_img_active',
		// 		'types' => [ 'classic' ],
		// 		'exclude' => [ 'color' ],
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active',
		// 		'condition' => [
		// 			'bwdci_repeat_button__BG_type_active' => 'img'
		// 		],
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_icon_color_active',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);
		
		$bwdci_repet->add_control(
			'bwdci_repeat_button_title_color_active',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_short_title!' => '',
				],
			]
		);

		$bwdci_repet->end_controls_tab();
		$bwdci_repet->end_controls_tabs();

		


		//main-repeater
		$this->add_control(
			'bwdci_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdci_repet->get_controls(),
				'default' => [
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 1' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_short_title' => esc_html__( 'Item 1' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 2' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_short_title' => esc_html__( 'Item 2' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 3' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_short_title' => esc_html__( 'Item 3' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 4' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_short_title' => esc_html__( 'Item 4' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 5' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_short_title' => esc_html__( 'Item 5' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_all',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_all_container_size',
			[
				'label' => esc_html__( 'Container Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-wrap' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdci_common_all_content_box_size',
			[
				'label' => esc_html__( 'Content Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'rem', 'em' ],
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
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-content' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_common_main_content_direction',
			[
				'label' => esc_html__( 'Content Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column-reverse' => esc_html__( 'Column Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'row' => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse' => esc_html__( 'Row Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item.active' => 'flex-direction: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_background__BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
					'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdci_repeat_background__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_background__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_background_bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_info_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
			]
		);

		$this->add_responsive_control(
			'bwdci_info_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item, {{WRAPPER}} .bwdci-ep-circle-info-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_info_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_info_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-content',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_Inner_box',
			[
				'label' => esc_html__( 'Inner Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci_inner_box__BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
					'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdci_inner_box__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_inner_box__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_inner_box__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
				'condition' => [
					'bwdci_inner_box__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_inner_box__bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
				'condition' => [
					'bwdci_inner_box__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_inner_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_outer_box',
			[
				'label' => esc_html__( 'Outer Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_all_outer_box_size',
			[
				'label' => esc_html__( 'Outer Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'rem', 'em' ],
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
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::after' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_outer_box__BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
					'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdci_outer_box__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_outer_box__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_outer_box__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
				'condition' => [
					'bwdci_outer_box__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_outer_box__bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
				'condition' => [
					'bwdci_outer_box__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_outer_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_button',
			[
				'label' => esc_html__( 'Common Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdci_repeat_button__tabs'
		);
		
		$this->start_controls_tab(
			'bwdci_repeat_button__style_tab_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdci_repeat_button_item_direction',
			[
				'label' => esc_html__( 'Item Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column-reverse' => esc_html__( 'Column Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'row' => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse' => esc_html__( 'Row Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'flex-direction: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_item_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_box_width',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdci_repeat_button_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-icon-circle i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
			]
		);
		
		$this->add_control(
			'bwdci_repeat_button_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci_repeat_button_title_typography',
				'selector' => '{{WRAPPER}} .bwdci-title-circle',
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
					'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button_bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'img'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_repeat_button_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_repeat_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdci_repeat_content__style_tab_active',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdci_repeat_button_icon_color_active',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
			]
		);
		
		$this->add_control(
			'bwdci_repeat_button_title_color_active',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_active',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
					'img'  => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient_active',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button_bg_img_active',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'img'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_repeat_button_border_active',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_border_radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_repeat_button_box_shadow_active',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();


		$this->start_controls_section(
			'bwdci_common_title',
			[
				'label' => esc_html__( 'Common Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdci_title_color_hover',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci_title__typography',
				'selector' => '{{WRAPPER}} .bwdci-maintitle',
			]
		);

		$this->add_responsive_control(
			'bwdci_title__margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_description',
			[
				'label' => esc_html__( 'Common Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci__desce_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdci__desce_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci__desce_typography',
				'selector' => '{{WRAPPER}} .bwdci-main-desce',
			]
		);

		$this->add_responsive_control(
			'bwdci_desce__margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_image',
			[
				'label' => esc_html__( 'Common Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_image_width',
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
					'{{WRAPPER}} .bwdci-mainimage img' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdci_common_image_height',
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
					'{{WRAPPER}} .bwdci-mainimage img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_commn_img_border',
				'selector' => '{{WRAPPER}} .bwdci-mainimage img',
			]
		);
		$this->add_responsive_control(
			'bwdci_commn_img_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainimage img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_commn_img_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdci-mainimage img',
			]
		);

		$this->add_responsive_control(
			'bwdci_commn_img_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainimage img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_icon',
			[
				'label' => esc_html__( 'Common Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdci_common_icon_tabs'
		);
		
		$this->start_controls_tab(
			'bwdci_common_icon_style_tab_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_width',
			[
				'label' => esc_html__( 'Box Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-mainicon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_box_height',
			[
				'label' => esc_html__( 'Box Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-mainicon' => 'height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdci_common_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdci-mainicon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_common_icon_BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_common_icon_bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
				'condition' => [
					'bwdci_common_icon_BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_common_icon_border',
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_common_icon_box_shadow',
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdci_common_icon_style_tab_hover',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdci_common_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_hover',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient'  => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_solid_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_common_icon_BG_type_hover' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_common_icon_bg_gradient_hover',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
				'condition' => [
					'bwdci_common_icon_BG_type_hover' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_common_icon_border_hover',
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_common_icon_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

	}

    protected function render(){

        $settings = $this->get_settings_for_display();
		

		$bwdci_style_selection = $settings['bwdci_select_style_selection'];


        if( 'style1' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>
								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
									<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
								<?php endif; ?>
							</div>
						<?php } } ?>
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style2' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-1 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style3' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-2 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style4' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-2 bwdci-ep-circle-info-3 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style5' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-1 bwdci-ep-circle-info-4 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style6' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-5 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style7' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-6 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style8' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-7 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style9' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-8 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style10' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-8 bwdci-ep-circle-info-9 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style11' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-10 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style12' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-11 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style13' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-12 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style14' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-13 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style15' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-14 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
                                	<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
                                <?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php \Elementor\Icons_Manager::render_icon( $repet_circle['bwdci_button_main_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdci-MouseEvent.php' ; ?>
        	</div>
            <?php
        }

    }

}