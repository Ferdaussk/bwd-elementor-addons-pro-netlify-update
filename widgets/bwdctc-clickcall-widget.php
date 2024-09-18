<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdctcclickcall_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdctc-clicktocall', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Click To Contact', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-clicktocontact bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls(){
		
		//tab-content
		$this->start_controls_section(
			'bwdctc_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdctc_select_style_selection',
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

		$this->end_controls_section();




		$this->start_controls_section(
			'bwdctc_call_button_section',
			[
				'label' => esc_html__( 'Contact Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//button text title
		$this->add_control(
			'bwdctc_button_title', 
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Call Us' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);

		//show icon
		$this->add_control(
			'bwdctc_call_show_Icon',
			[
				'label' => esc_html__( 'Contact Show Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
			]
		);

		//close icon
		$this->add_control(
			'bwdctc_call_close_Icon',
			[
				'label' => esc_html__( 'Contact Close Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-xmark',
					'library' => 'fa-solid',
				],
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'bwdctc_call_content_section',
			[
				'label' => esc_html__( 'Contact Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//overlay switcher
		$this->add_control(
			'bwdctc_overlay_switcher',
			[
				'label' => esc_html__( 'Background Overlay?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


		//img-switcher
		$this->add_control(
			'bwdctc_img_switcher',
			[
				'label' => esc_html__( 'Image?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//media
		$this->add_control(
			'bwdctc_call_image',
			[
				'label'   => __('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdctc_img_switcher' => 'yes'
				],
			]
		);

		//image-link
		$this->add_control(
			'bwdctc_image_link',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_img_switcher' => 'yes'
				],
			]
		);

		//title switcher
		$this->add_control(
			'bwdctc_title_switcher',
			[
				'label' => esc_html__( 'Title?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//title
		$this->add_control(
			'bwdctc_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Diana Lunto' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_title_switcher' => 'yes'
				],
			]
		);

		//sub title switcher
		$this->add_control(
			'bwdctc_sub_title_switcher',
			[
				'label' => esc_html__( 'Sub Title?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//sub title
		$this->add_control(
			'bwdctc_sub_title', 
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Finance' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_sub_title_switcher' => 'yes'
				],
			]
		);

		//Description switcher
		$this->add_control(
			'bwdctc_desce_switcher',
			[
				'label' => esc_html__( 'Description?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdctc_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Hey there Need help? I am here for you, so just give me a call', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdctc_desce_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdctc_allow_shortcode_switcher',
			[
				'label' => esc_html__( 'Add Shortcode?', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdctc_shortcode',
			[
					'label' => esc_html__('Shortcode', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'placeholder' => esc_html__('Enter your shortcode here', BWDEB_ROOT_AUTHOR_PRO),
					'condition' => [
						'bwdctc_allow_shortcode_switcher' => 'yes'
					],
			]
		);

		$this->add_control(
			'bwdctc_contact_type',
			[
				'label' => esc_html__( 'Contact Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'tel:',
				'options' => [
					'tel:'  => esc_html__( 'Phone', BWDEB_ROOT_AUTHOR_PRO ),
					'mailto:'  => esc_html__( 'Email', BWDEB_ROOT_AUTHOR_PRO ),
					'https://wa.me/'  => esc_html__( 'Whatsapp', BWDEB_ROOT_AUTHOR_PRO ),
					''  => esc_html__( 'Skype', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//Contact Text
		$this->add_control(
			'bwdctc_contact_phone', 
			[
				'label' => esc_html__( 'Contact Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+01705107675' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//Contact link
		$this->add_control(
			'bwdctc_contact_link', 
			[
				'label' => esc_html__( 'Contact Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'description' => esc_html__('(Phone: 017xxxxxxxx), (Email: examp@gmail.com), (Whatsapp: 017xxxxxxx), (Skype: https://join.skype.com/invite/BTHm4h0xFkdJ)', BWDEB_ROOT_AUTHOR_PRO),
				'default' => esc_html__( '+01705107675' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//Description switcher
		$this->add_control(
			'bwdctc_cont_icon_switcher',
			[
				'label' => esc_html__( 'Content Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//content icon
		$this->add_control(
			'bwdctc_call_cont_Icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdctc_cont_icon_switcher' => 'yes'
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'bwdctc_call_button_style_section',
			[
				'label' => esc_html__( 'Contact Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//position-popover
		$this->add_control(
			'bwdctc_position_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();

			$this->add_responsive_control(
				'bwdctc_button_bottom',
				[
					'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-call-button-position' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_responsive_control(
				'bwdctc_button_right',
				[
					'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-call-button-position' => 'right: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();


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

		//button-text-popover
		$this->add_control(
			'bwdctc_button_text_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);
		$this->start_popover();

			//text gap
			$this->add_responsive_control(
				'bwdctc_button_text_gap',
				[
					'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-call-text' => 'margin-left: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//button tetx color
			$this->add_control(
				'bwdctc_button_text_color',
				[
					'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-call-text' => 'color: {{VALUE}}',
					],
				]
			);

			//button tetx hover color
			$this->add_control(
				'bwdctc_button_text_color_hover',
				[
					'label' => esc_html__( 'Text Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc-call-text' => 'color: {{VALUE}}',
					],
				]
			);

			//button text typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_button_text_typography',
					'selector' => '{{WRAPPER}} .bwdctc-call-text',
				]
			);

		$this->end_popover();

		//amination
		$this->add_control(
            'bwdctc_animation_style',
            [
                'label'     => esc_html__('Infinite Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'bnone' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'bounce' => esc_html__('bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
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
                    'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
                    'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
                    'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
                    'jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'   => 'bnone',
				'selectors'   => [
                    '{{WRAPPER}} .bwdctc-call-button' => 'animation-name: {{value}}',
                ],
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed',
			[
				'label'       => esc_html__('Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//button width
		$this->add_responsive_control(
			'bwdctc_button_width',
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//button height
        $this->add_responsive_control(
			'bwdctc_button_height',
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon size
        $this->add_responsive_control(
			'bwdctc_button_icon_size',
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
					'{{WRAPPER}} .bwdctc-call-button' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//show icon color
		$this->add_control(
			'bwdctc_button_color',
			[
				'label' => esc_html__( 'Show Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc_show-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//close icon color
		$this->add_control(
			'bwdctc_button_close_color',
			[
				'label' => esc_html__( 'Close Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc_close-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		//shape_before_color
		$this->add_control(
			'bwdctc_button_shape_before_color',
			[
				'label' => esc_html__( 'Shape Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button::before' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style20','style21','style22','style23','style24','style25','style28','style29','style30','style31',],
				],
			]
		);

		//shape_before_color
		$this->add_control(
			'bwdctc_button_before_background',
			[
				'label' => esc_html__( 'Animate Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		$this->end_controls_tab();

		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		//amination
		$this->add_control(
            'bwdctc_animation_style_active',
            [
                'label'     => esc_html__('Infinite Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'bnone' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'bounce' => esc_html__('bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
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
                    'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
                    'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
                    'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
                    'jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'   => 'bnone',
				'selectors'   => [
                    '{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'animation-name: {{value}}',
                ],
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed_active',
			[
				'label'       => esc_html__('Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button_active',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button_active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
			]
		);

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//amination
		$this->add_control(
			'bwdctc_animation_style_hover',
			[
				'label'     => esc_html__('Infinite Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'bnone' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'bounce' => esc_html__('bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
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
					'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
					'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
					'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
					'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
					'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
					'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
					'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
					'jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
					'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
					'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default'   => 'bnone',
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'animation-name: {{value}}',
				],
			]
		);

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed_hover',
			[
				'label'       => esc_html__('Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//show icon color
		$this->add_control(
			'bwdctc_button_color_hover',
			[
				'label' => esc_html__( 'Show Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc_show-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//close icon color
		$this->add_control(
			'bwdctc_button_close_color_hover',
			[
				'label' => esc_html__( 'Close Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc_close-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button_hover',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_overlay',
			[
				'label' => esc_html__( 'Background Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdctc_overlay_switcher' => 'yes',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_overlay',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-overlay',
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_call_content_style_section',
			[
				'label' => esc_html__( 'Contact Content Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//content box position
		$this->add_control(
			'bwdctc_content_posi_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Box Position', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();

			$this->add_responsive_control(
				'bwdctc_box_top',
				[
					'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-agent-box' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_responsive_control(
				'bwdctc_box_left',
				[
					'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-agent-box' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//alignment
		$this->add_responsive_control(
			'bwdctc_all_item_alignment',
			[
				'label' => esc_html__( 'Item Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdctc-agent-info' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//box width
		$this->add_responsive_control(
			'bwdctc_box_width',
			[
				'label' => esc_html__( 'Max Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdctc-agent-box' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_box',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_box',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_box',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);
		
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_box',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_box',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_box',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdctc_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		//highlight-Hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_box',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_box_hover',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_box_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_box_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_box_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-box:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_contact_img',
			[
				'label' => esc_html__( 'Contact Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdctc_img_switcher' => 'yes',
				],
			]
		);

		//img width
		$this->add_responsive_control(
			'bwdctc_img_width',
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_img_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-img',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_img_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_img_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-img',
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_text_content_section',
			[
				'label' => esc_html__( 'Contact Text Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//title popover
		$this->add_control(
			'bwdctc_content_title_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_title_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//title color
			$this->add_control(
				'bwdctc_box_title',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-title' => 'color: {{VALUE}}',
					],
				]
			);

			//title hover color
			$this->add_control(
				'bwdctc_box_title_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-title:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//title typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_title_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-title',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_title_gap',
				[
					'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-agent-title' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_title_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		//sub title popover
		$this->add_control(
			'bwdctc_content_subtitle_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_sub_title_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//sub title color
			$this->add_control(
				'bwdctc_box_sub_title',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-subtitle' => 'color: {{VALUE}}',
					],
				]
			);

			//sub title hover color
			$this->add_control(
				'bwdctc_box_sub_title_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-subtitle:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//sub title typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_sub_title_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-subtitle',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_subtitle_gap',
				[
					'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-agent-subtitle' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_sub_title_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		//desc popover
		$this->add_control(
			'bwdctc_content_desc_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_desce_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//desc color
			$this->add_control(
				'bwdctc_box_desc',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-desc' => 'color: {{VALUE}}',
					],
				]
			);

			//desc hover color
			$this->add_control(
				'bwdctc_box_desc_hover',
				[
					'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-desc:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//desc typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_desc_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-desc',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_desc_gap',
				[
					'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdctc-agent-desc' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_desce_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_number_section',
			[
				'label' => esc_html__( 'Contact Number', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//common heading
		$this->add_control(
			'bwdctc_common_heading',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_common',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
				'separator' => 'before',
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_comm',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_border_comm',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_border_radius_comm',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdctc_common_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//icon heading
		$this->add_control(
			'bwdctc_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon gap
		$this->add_responsive_control(
			'bwdctc_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdctc-call-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon gap
		$this->add_responsive_control(
			'bwdctc_icon_size_gap',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdctc-call-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon color
		$this->add_control(
			'bwdctc_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-icon' => 'color: {{VALUE}}',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon hover color
		$this->add_control(
			'bwdctc_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number:hover .bwdctc-call-icon' => 'color: {{VALUE}}',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//number heading
		$this->add_control(
			'bwdctc_number_heading',
			[
				'label' => esc_html__( 'Number Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//number text color
		$this->add_control(
			'bwdctc_number_color',
			[
				'label' => esc_html__( 'Number Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-num' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		//number text hover color
		$this->add_control(
			'bwdctc_numbtext_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number:hover .bwdctc-call-num' => 'color: {{VALUE}}',
				],
			]
		);

		//number text typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdctc_number_typography',
				'selector' => '{{WRAPPER}} .bwdctc-call-num',
			]
		);

		$this->end_controls_section();


	}

	protected function render(){
		$settings = $this->get_settings_for_display();

		$bwdctc_style_selection = $settings['bwdctc_select_style_selection'];

		if( $settings['bwdctc_overlay_switcher'] == 'yes' ) {
			$varOverlay = 'bwdctc-overlay-x';
		}else {
			$varOverlay = 'bwdctc-overlay-hide';
		}

		if( 'style1' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_1 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style2' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_2 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
									<?php if( $settings['bwdctc_img_switcher'] ){ ?>
										<div class="bwdctc-agent-img">
											<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
										</div>
									<?php }?>
									<?php if( $settings['bwdctc_title_switcher'] ){ ?>
										<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
										<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
									<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style3' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_3 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style4' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_4 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style5' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_5 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
						<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style6' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_6 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc-call-text"><?php echo esc_html( $settings['bwdctc_button_title'] ); ?></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style7' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_7 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style8' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_8 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style9' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_9 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style10' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_10 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style11' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_11 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style12' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_12 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style13' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_13 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style14' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_14 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style15' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_15 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style16' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_16 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style17' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_17 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style18' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_18 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style19' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_19 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style20' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_20 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style21' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_21 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style22' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_22 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style23' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_23 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style24' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_24 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style25' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_25 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style26' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_26 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style27' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_27 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style28' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_28 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style29' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_29 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style30' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_30 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style31' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_31 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_html( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title'] ); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
								<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html__($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_html( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html( $settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html( $settings['bwdctc_contact_phone'] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
}
