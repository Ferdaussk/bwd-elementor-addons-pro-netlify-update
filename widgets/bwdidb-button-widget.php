<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdidbbuttonwidgets extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdidb-info-download-button';
	}

	public function get_title() {
		return esc_html__( 'Info & Download Button', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-download bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdidb_button_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		
		$this->add_control(
			'bwdidb_button_style',
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
					'style32' => esc_html__( 'Style 32', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 33', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 34', BWDEB_ROOT_AUTHOR_PRO ),
					'style35' => esc_html__( 'Style 35', BWDEB_ROOT_AUTHOR_PRO ),
					'style36' => esc_html__( 'Style 36', BWDEB_ROOT_AUTHOR_PRO ),
					'style37' => esc_html__( 'Style 37', BWDEB_ROOT_AUTHOR_PRO ),
					'style38' => esc_html__( 'Style 38', BWDEB_ROOT_AUTHOR_PRO ),
					'style39' => esc_html__( 'Style 39', BWDEB_ROOT_AUTHOR_PRO ),
					'style40' => esc_html__( 'Style 40', BWDEB_ROOT_AUTHOR_PRO ),
					'style41' => esc_html__( 'Style 41', BWDEB_ROOT_AUTHOR_PRO ),
					'style42' => esc_html__( 'Style 42', BWDEB_ROOT_AUTHOR_PRO ),
					'style43' => esc_html__( 'Style 43', BWDEB_ROOT_AUTHOR_PRO ),
					'style44' => esc_html__( 'Style 44', BWDEB_ROOT_AUTHOR_PRO ),
					'style45' => esc_html__( 'Style 45', BWDEB_ROOT_AUTHOR_PRO ),
					'style46' => esc_html__( 'Style 46', BWDEB_ROOT_AUTHOR_PRO ),
					'style47' => esc_html__( 'Style 47', BWDEB_ROOT_AUTHOR_PRO ),
					'style48' => esc_html__( 'Style 48', BWDEB_ROOT_AUTHOR_PRO ),
					'style49' => esc_html__( 'Style 49', BWDEB_ROOT_AUTHOR_PRO ),
					'style50' => esc_html__( 'Style 50', BWDEB_ROOT_AUTHOR_PRO ),
					'style51' => esc_html__( 'Style 51', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_content',
		    [
		        'label' => esc_html__('Button Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$this->add_control(
			'bwdidb_button_hover_animations',
			[
				'label'     => esc_html__('Button Hover Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'none',
				'options'   => [
					'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
					'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
					'fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
					'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
					'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
					'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
					'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
					'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
					'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
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
					'{{WRAPPER}} .bwdidb-cover-button:hover' => 'animation-name: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_hover_animations_speed',
			[
				'label' => __('Hover Animation Speed (ms)', BWDEB_ROOT_AUTHOR_PRO),
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
					'{{WRAPPER}} .bwdidb-cover-button:hover' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdidb_button_hover_animations!' => 'none',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_hover_animations_infinite',
			[
				'label'     => esc_html__('Animation Count', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'unset',
				'options'   => [
					'unset' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
					'infinite' => esc_html__('Always', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'animation-iteration-count: {{VALUE}};',
				],
				'condition' => [
					'bwdidb_button_hover_animations!' => 'none',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_info_down_option',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Info Button', BWDEB_ROOT_AUTHOR_PRO ),
					'download' => esc_html__( 'Download Button', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdidb_button_custom_url',
			[
				'label' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
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
					'bwdidb_button_info_down_option' => '',
				]
			]
		);

		$this->add_control(
			'bwdidb_button_download_url',
			[
				'label' => esc_html__( 'Download Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.pdf', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdidb_button_info_down_option' => 'download',
				]
			]
		);

		//main-title
		$this->add_control(
			'bwdidb_button_main_title', 
			[
				'label' => esc_html__( 'Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Information' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//button-info-text
		$this->add_control(
			'bwdidb_button_info_text', 
			[
				'label' => esc_html__( 'Button Info Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'BestWPDeveloper' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdidb_button_info_text_position',
			[
				'label' => esc_html__( 'Info Text Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'column',
				'options' => [
					'column-reverse'  => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'column'  => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'row' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-btn' => 'flex-direction: {{VALUE}};',
				],
				'condition' =>[
					'bwdidb_button_info_text!' => '',
				],
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_info_text_position_gap',
			[
				'label' => esc_html__( 'Info Text Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdidb-btn' => 'gap: {{SIZE}}{{UNIT}};',
				],
                'condition' =>[
					'bwdidb_button_info_text!' => '',
				],
			]
		);

		//Button Alignment
		$this->add_responsive_control(
			'bwdidb_button_alignment',
			[
				'label' => esc_html__( 'Button Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdidb-info-wrap' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		//Button Text Alignment
		$this->add_responsive_control(
			'bwdidb_button_text_alignment',
			[
				'label' => esc_html__( 'Button Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdidb-btn' => 'align-items: {{VALUE}}',
					//'{{WRAPPER}} .bwdidb-btn' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		$this->add_control(
			'bwdidb_button_icon_option',
			[
				'label' => esc_html__( 'Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-close',
					],
					'Icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-nerd',
					],
				],
				'default' => 'Icon',
				'toggle' => true,
			]
		);

		//button icon
		$this->add_control(
			'bwdidb_button_icon',
			[
				'label' => esc_html__( 'Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-cloud-download-alt',
					'library' => 'fa-solid',
				],
				'condition' =>[
					'bwdidb_button_icon_option' => 'Icon',
				],
			]
		);

		// $this->add_control(
		// 	'bwdidb_button_icon_position',
		// 	[
		// 		'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
		// 		'type' => \Elementor\Controls_Manager::SELECT,
		// 		'default' => '',
		// 		'options' => [
		// 			''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
		// 			'icon-left'  => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
		// 			'icon-right'  => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
		// 		],
		// 		'condition' =>[
		// 			'bwdidb_button_icon_option' => 'Icon',
		// 		],
		// 	]
		// );


        $this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_title_style',
		    [
		        'label' => esc_html__('Title Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdidb_button_main_title!' => '',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_title_style_tabs'
		);

		$this->start_controls_tab(
			'button_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//title-color
		$this->add_control(
			'bwdidb_button_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'color: {{VALUE}}',
				],
			]
		);

		//title-bg-color
		$this->add_control(
			'bwdidb_button_title_color_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdidb_button_title_typography',
				'selector' => '{{WRAPPER}} .bwdidb-info-text',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_title_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-info-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//title-color
		$this->add_control(
			'bwdidb_button_title_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'color: {{VALUE}}',
				],
			]
		);

		//title-bg-color
		$this->add_control(
			'bwdidb_button_title_color_bg_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_title_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_title_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		
		$this->end_controls_section();	


		$this->start_controls_section(
			'bwdidb_button_infotext_style',
		    [
		        'label' => esc_html__('Info Text Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdidb_button_info_text!' => '',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_infotext_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_infotext_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//info-text-color
		$this->add_control(
			'bwdidb_button_infotext_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'color: {{VALUE}}',
				],
			]
		);

		//infotext-bg-color
		$this->add_control(
			'bwdidb_button_infotext_color_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdidb_button_infotext_typography',
				'selector' => '{{WRAPPER}} .bwdidb-info-extra-text',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_infotext_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-info-extra-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_infotext_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_infotext_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_infotext_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//info-text-color
		$this->add_control(
			'bwdidb_button_infotext_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'color: {{VALUE}}',
				],
			]
		);

		//infotext-bg-color
		$this->add_control(
			'bwdidb_button_infotext_color_bg_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_infotext_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_infotext_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdidb_button_icon_style',
		    [
		        'label' => esc_html__('Button Icon Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdidb_button_icon_option' => 'Icon',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_icon_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_icon_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//button-icon-color
		$this->add_control(
			'bwdidb_button-icon-color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'color: {{VALUE}}',
				],
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_icon_bg_option',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient' => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//button-icon-bg-color
		$this->add_control(
			'bwdidb_button-icon-solid-bg',
			[
				'label' => esc_html__( 'Solid Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon, {{WRAPPER}} .bwdidb-info-icon::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_icon_bg_option' => 'solid',
				],
			]
		);

		//button-icon-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-icon-bg',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-info-icon, {{WRAPPER}} .bwdidb-info-icon::before',
				'condition' => [
					'bwdidb_icon_bg_option' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-icon-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-info-icon',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-icon-border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//icon-size
		$this->add_responsive_control(
			'bwdidb_button-icon-size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon-box-width
		$this->add_responsive_control(
			'bwdidb_button-icon-box-width',
			[
				'label' => esc_html__( 'Icon Box Width', BWDEB_ROOT_AUTHOR_PRO ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon-box-height
		$this->add_responsive_control(
			'bwdidb_button-icon-box-height',
			[
				'label' => esc_html__( 'Icon Box Height', BWDEB_ROOT_AUTHOR_PRO ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button-icon-box-boxshadow',
				'selector' => '{{WRAPPER}} .bwdidb-info-icon',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_icon_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		//button-icon-color
		$this->add_control(
			'bwdidb_button-icon-color-hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon' => 'color: {{VALUE}}',
				],
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_icon_bg_option_hover',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient' => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//button-icon-bg-color
		$this->add_control(
			'bwdidb_button-icon-solid-bg-hover',
			[
				'label' => esc_html__( 'Solid Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon, {{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_icon_bg_option_hover' => 'solid',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-icon-bg-hover',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon, {{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon::before',
				'condition' => [
					'bwdidb_icon_bg_option_hover' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-icon-border-hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-icon-border-radius-hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button-icon-box-boxshadow_hover',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_content_box_style',
		    [
		        'label' => esc_html__('Button Content Box',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_content_box_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_content_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_button_bg_option',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient' => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//button-bg-color
		$this->add_control(
			'bwdidb_button-solid-bg',
			[
				'label' => esc_html__( 'Solid Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_button_bg_option' => 'solid',
				],
			]
		);

		//button-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-gradient-bg',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::before',
				'condition' => [
					'bwdidb_button_bg_option' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-box-border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-box-border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//margin
		$this->add_responsive_control(
			'bwdidb_button_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button_box_boxshadow',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_content_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		


		//Background Type option
		$this->add_control(
			'bwdidb_button_bg_option_hover',
			[
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient' => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//button-bg-color
		$this->add_control(
			'bwdidb_button-solid-bg-hover',
			[
				'label' => esc_html__( 'Solid Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_button_bg_option_hover' => 'solid',
				],
			]
		);

		//button-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-gradient-bg-hover',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::before',
				'condition' => [
					'bwdidb_button_bg_option_hover' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-box-border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-box-border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button_box_boxshadow_hover',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

       
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		if ( ! empty( $settings['bwdidb_button_custom_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdidb_button_custom_url', $settings['bwdidb_button_custom_url'] );
		}
		if ( ! empty( $settings['bwdidb_button_download_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdidb_button_download_url', $settings['bwdidb_button_download_url'] );
		}

        $style_num = $settings['bwdidb_button_style'];

        if ('style1' === $style_num) { ?>
			<div class="bwdidb-button-1">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
							<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
							<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style2' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-2 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style3' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-3 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style4' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-4 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style5' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-5 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style6' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-6 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style7' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-7 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style8' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-8 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style9' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-9 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style10' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-10 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style11' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-11 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style12' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-12 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style13' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-13 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style14' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-14 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style15' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-15 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style16' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-16 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style17' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-17 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style18' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-18 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style19' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-19 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style20' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-20 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style21' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-21 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style22' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-22 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style23' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-23 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style24' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-24 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style25' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-25 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style26' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-26 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style27' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-27 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style28' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-28 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style29' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-29 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style30' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-30 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style31' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-31 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style32' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-32 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style33' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-33 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style34' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-34 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style35' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-35 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style36' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-36 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style37' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-37 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style38' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-38 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style39' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-39 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style40' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-40 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style41' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-41 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style42' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-42 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style43' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-43 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style44' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-44 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style45' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-45 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style46' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-46 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style47' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-47 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style48' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-48 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style49' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-49 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style50' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-50 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style51' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-51 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_html($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		}
    }
}

