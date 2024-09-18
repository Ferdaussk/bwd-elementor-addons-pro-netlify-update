<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdsb_switchbackground_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdsb-switchbackground', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Background Switcher', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle background-switcher';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls(){
		$this->start_controls_section(
			'bwdsb_common_section',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdsb_select_style_selection',
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
				],
			]
		);

        $this->add_control(
			'bwdsb_mouse_event',
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

		//select
		$this->add_control(
			'bwdsb_switch_layout_style',
			[
				'label' => esc_html__( 'Layout Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex'  => esc_html__( 'flex', BWDEB_ROOT_AUTHOR_PRO ),
					'grid'  => esc_html__( 'grid', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'display: {{VALUE}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdsb_switch_layout_style_flex',
			[
				'label'         => esc_html__('Direction', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => Controls_Manager::SELECT,
				'default'       => '',
				'options'       => [
					''    => esc_html__('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
					'column'      => esc_html__('Vertical', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'flex-direction: {{VALUE}}!important;',
				],
				'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'bwdsb_switch_layout_style_grid',
			[
				'label'       => esc_html__('Grid Columns', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 2,
				'selectors'   => [
					'{{WRAPPER}} .bwdsb-style-common' => 'grid-template-columns: repeat({{SIZE}}, minmax(0, 1fr))',
				],
				'condition' => [
					'bwdsb_switch_layout_style' => 'grid',
				],
			]
		);

        //breakpoint--------------------
		$this->add_control(
			'bwdsb_switch_breakpoint',
			[
				'label'       => esc_html__('Responsive Breakpoint', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__( 'For Horizontal Layout Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
                'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);
        $this->add_control(
			'bwdsb_switch_item_width_breakpointout',
			[
				'label'       => esc_html__('Item Box Width', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__( 'When using a responsive breakpoint, you will need to provide custom item box width. ', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 300,
				'selectors'   => [
					'{{WRAPPER}} .bwdsb-style-common .content-wrappersss' => 'flex: 1 0 {{SIZE}}px!important',
				],
				'condition' => [
					'bwdsb_switch_breakpoint!' => '',
                    'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);
        $this->add_control(
			'bwdsb_switch_item_numbs',
			[
				'label'       => esc_html__('Item Numbers', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__( 'Go to the [ Switch Item Repeater ] tab and count the repeated items. Now, this count value write here, Only Number"3". Example: Now your repeated item number is #3.', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 3,
				'condition' => [
					'bwdsb_switch_breakpoint!' => '',
                    'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_call_content_section',
			[
				'label' => esc_html__( 'Switch Item Repeater', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$bwdsb_repet = new \Elementor\Repeater();

		//content amination
		$bwdsb_repet->add_control(
			'bwdsb_content_animations',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.content-wrappersss.active .content-inner-wrapper' => 'animation-name: {{VALUE}}!important;',
				],
			]
		);

		//content_animation_speed
		$bwdsb_repet->add_control(
			'bwdsb_content_animation_speed',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.content-wrappersss.active .content-inner-wrapper' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//image
		$bwdsb_repet->add_control(
			'bwdsb_switch_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);

		$bwdsb_repet->add_control(
			'bwdsb_switch_image_position',
			[
				'label' => esc_html__( 'Image Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'left top'  => esc_html__( 'Left Top', BWDEB_ROOT_AUTHOR_PRO ),
					'left center' => esc_html__( 'Left Center', BWDEB_ROOT_AUTHOR_PRO ),
					'left bottom' => esc_html__( 'Left Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'right top'  => esc_html__( 'Right Top', BWDEB_ROOT_AUTHOR_PRO ),
					'right center' => esc_html__( 'Right Center', BWDEB_ROOT_AUTHOR_PRO ),
					'right bottom' => esc_html__( 'Right Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'center top'  => esc_html__( 'Center Top', BWDEB_ROOT_AUTHOR_PRO ),
					'center center' => esc_html__( 'Center Center', BWDEB_ROOT_AUTHOR_PRO ),
					'center bottom' => esc_html__( 'Center Bottom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .section-background' => 'background-position: {{VALUE}}!important;',
				],
			]
		);

		$bwdsb_repet->add_control(
            'bwdsb_button_popover',
            [
                'label' => __('Buttons', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                'label_on' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
            ]
        );
		$bwdsb_repet->start_popover();
			//button text
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_text', 
				[
					'label' => esc_html__( 'First Button Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,	
					'label_block' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			//button link
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_link',
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
						'bwdsb_switch_btn_text!' => '',
					],
				]
			);
			//button text
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_text_next', 
				[
					'label' => esc_html__( 'Second Button Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,	
					'label_block' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			//button link
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_link_next',
				[
					'label' => esc_html__( 'Second Button Link', BWDEB_ROOT_AUTHOR_PRO ),
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
						'bwdsb_switch_btn_text_next!' => '',
					],
				]
			);
		$bwdsb_repet->end_popover();

		$bwdsb_repet->add_control(
			'bwdsb_switch_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$bwdsb_repet->add_control(
			'bwdsb_switch_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);

		//main-repeater
		$this->add_control(
			'bwdsb_switch_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdsb_repet->get_controls(),
				'default' => [
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_common_section_style',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//image-height
		$this->add_responsive_control(
			'bwdsb_commn_img_height',
			[
				'label' => esc_html__( 'Section Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'vh' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'vh' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .content-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//alignment
		$this->add_responsive_control(
			'bwdsb_commn_alignment',
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
					'{{WRAPPER}} .content-inner-wrapper' => 'text-align: {{VALUE}}',
					'{{WRAPPER}} .bwdsb-max-bttn' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_common_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_common_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type',
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
			'bwdsb_switch_comn_BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-wrappersss .content-wrapper' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdsb_switch_comn_BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsb_commn_background',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .content-wrappersss .content-wrapper',
				'condition' => [
					'bwdsb_switch_comn_BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_commn_border',
				'selector' => '{{WRAPPER}} .content-wrappersss .content-wrapper',
			]
		);

		$this->add_responsive_control(
			'bwdsb_commn_box_gap',
			[
				'label' => esc_html__( 'Box Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'gap: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_commn_padding',
			[
				'label' => esc_html__( 'Box Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .content-inner-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_common_style_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type_active',
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
			'bwdsb_switch_comn_BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-wrappersss.active .content-wrapper' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdsb_switch_comn_BG_type_active' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsb_commn_background_active',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .content-wrappersss.active .content-wrapper',
				'condition' => [
					'bwdsb_switch_comn_BG_type_active' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_commn_border_active',
				'selector' => '{{WRAPPER}} .content-wrappersss.active .content-wrapper',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_title_section_style',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_hover_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_hover_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_title_background',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_title_typo',
				'selector' => '{{WRAPPER}} .bwdsb-title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_title_border',
				'selector' => '{{WRAPPER}} .bwdsb-title',
			]
		);
		$this->add_responsive_control(
			'bwdsb_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//margin
		$this->add_responsive_control(
			'bwdsb_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_hover_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_title_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_title_background_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_title_border_hover',
				'selector' => '{{WRAPPER}} .bwdsb-title:hover',
			]
		);
		$this->add_responsive_control(
			'bwdsb_title_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsb_desce_section_style',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_desce_hover_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_desce_hover_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_desce_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_desce_background',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_desce_typo',
				'selector' => '{{WRAPPER}} .bwdsb-desc',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_desce_border',
				'selector' => '{{WRAPPER}} .bwdsb-desc',
			]
		);
		$this->add_responsive_control(
			'bwdsb_desce_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_desce_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//margin
		$this->add_responsive_control(
			'bwdsb_desce_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_desce_hover_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdsb_desce_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_desce_background_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_desce_border_hover',
				'selector' => '{{WRAPPER}} .bwdsb-desc:hover',
			]
		);
		$this->add_responsive_control(
			'bwdsb_desce_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();







		$this->start_controls_section(
			'bwdsb_button_section_style',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdsb_button_gap',
			[
				'label' => esc_html__( 'Button Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-max-bttn' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdsb_first_button_options',
			[
				'label' => esc_html__( 'First Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdsb_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_FB_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_FB_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_FB_typography',
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_FB_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_FB_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-padding
		$this->add_responsive_control(
			'bwdsb_FB_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_FB_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdsb_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_FB_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_FB_bg_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_FB_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_FB_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_FB_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();






		$this->add_control(
			'bwdsb_second_button_options',
			[
				'label' => esc_html__( 'Second Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);







		$this->start_controls_tabs(
			'bwdsb_SB_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdsb_SB_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_SB_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_SB_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_SB_typography',
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_SB_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_SB_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-padding
		$this->add_responsive_control(
			'bwdsb_SB_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_SB_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdsb_SB_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_SB_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_SB_bg_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_SB_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_SB_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_SB_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();


		$this->end_controls_section();


		
	}

    protected function render(){

        $settings = $this->get_settings_for_display();

		$bwdsb_style_selection = $settings['bwdsb_select_style_selection'];

        $breakpoint_1 = $settings['bwdsb_switch_breakpoint'];
        $item_width = $settings['bwdsb_switch_item_width_breakpointout'];
        $item_numb = $settings['bwdsb_switch_item_numbs'];


		$media_query_1 = '@media only screen and (max-width: ' . $breakpoint_1 . 'px) {
			.bwdsb-style-common { overflow-x: auto; }
            .content-wrappersss .background_img { width: calc(' . $item_width .'px * ' . $item_numb . ')!important; }
		 }';
        ?>
                <style>
                    <?php echo $media_query_1; ?>
                </style>
        <?php
        ?>

        <?php

        if( 'style1' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style1 bwdsb-style-common">
            
                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">

                    <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style2' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style2 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style3' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style3 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style4' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style4 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style5' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style5 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style6' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style6 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style7' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style7 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style8' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style8 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style9' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style9 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style10' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style10 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style11' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style11 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style12' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style12 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style13' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style11 bwdsb-style13 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        } elseif( 'style14' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style14 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? $repet_switch['bwdsb_switch_btn_link']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? $repet_switch['bwdsb_switch_btn_link_next']['url'] : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdsb-MouseEvent.php' ; ?>
            </div>
            <?php
        }

    }

}