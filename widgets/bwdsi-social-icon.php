<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDSIsocialicon extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdsi-social-icon';
	}

	public function get_title() {
		return esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-social-icons bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'icon', 'arrow', 'social icon' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdsi_social_icon_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdsi_social_icon_style',
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
				],
			]
		);
		$this->add_control(
			'bwdsi_alignment_style',
			[
				'label' => esc_html__( 'Position', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'bwdsi_default',
				'options' => [
					'bwdsi_default'  => esc_html__( 'Default', 'plugin-name' ),
					'bwdsi_floating' => esc_html__( 'Floating', 'plugin-name' ),
				],
				'condition' => [
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_social_fixed_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'default' => 'left:0',
				'options' => [
					'left:0' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-left',
					],

					'right:0' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdsi_Horizontal_width',
			[
				'label' => esc_html__( 'Horizontal', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'selectors' => [
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-left' => 'left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-right' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdsi_verticaly_width',
			[
				'label' => esc_html__( 'Vertical', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-left' => 'top: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-right' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
        $this->start_controls_section(
			'bwdsi_social_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdsi_icon_alignment_44',
			[
				'label' => esc_html__( 'Distence Form Top', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'bwdsi_social_icon_style' => [ 'style44' ],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_alignment_left_44',
			[
				'label' => esc_html__( 'Distence Form left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'bwdsi_social_icon_style' => [ 'style44' ],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_social_icon_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition' => [
					'bwdsi_social_icon_style!' => [ 'style44' ],
				],
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .bwd-social-alignment' => 'justify-content: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdsi_social_icon_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon',
			[
				'label' => esc_html__( 'Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				// 'default' => [
				// 	'value' => 'fas fa-circle',
				// 	'library' => 'fa-solid',
				// ],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->start_controls_tabs(
			'style_tabs'
		);
		
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon .bwdsi-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwd-text' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_icon_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color .bwd-shadow' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-circle-icon' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon .bwdsi-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-text' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-circle-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'bwdsi_icon_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_normal_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover .bwd-extra-item' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwdsi-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsi_icon_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwdsi-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color .bwd-before-icons,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:after',							
			]
		);
		$repeater->add_control(
			'bwdsi_social_hover_colors',
			[
				'label' => esc_html__( 'Background only for 40 number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				// 'condition' => [
				// 	'bwdsi_social_icon_style!' => ['style40'],
				// ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:after' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'bwdsi_icon_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_border_hover_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'bwdsi_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdsi_social_icon_title' => esc_html__( 'Twitter', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-x-twitter',
							'library' => 'solid',
						],
					],
					[	'bwdsi_social_icon_title' => esc_html__( 'Facebook', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Instagram', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Pinterest', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-pinterest-p',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Linkedin', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-linkedin-in',
							'library' => 'solid',
						],
					],
				],


				'title_field' => '{{{ bwdsi_social_icon_title }}}',
			]
		);
        $this->end_controls_section();

		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', 'bwdin-info-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdsi_social_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-social-icon-box',
			]
		);
		$this->add_control(
			'bwdsi_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_background_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} .bwd-social-icon-box',
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_margin',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-social-icon-box' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_width',
			[
				'label' => esc_html__( 'Icon Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();


        
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		

		if( 'bwdsi_floating' === $settings['bwdsi_alignment_style']){
			$floating = 'bwd-fixed-align';
		}


		if( 'left:0' === $settings['bwdsi_social_fixed_align']){
			$floatLeft = 'bwd-horizontal-align-left';
		}else if( 'right:0' === $settings['bwdsi_social_fixed_align']){
			$floatLeft = 'bwd-horizontal-align-right';
		}



		if ( ! empty( $settings['bwdsi_social_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdsi_social_icon_link', $settings['bwdsi_social_icon_link'] );
		}


		if ('style1' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-1 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
        }elseif('style2' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-2 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style3' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-3 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style4' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-4 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style5' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-5 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style6' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-6 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style7' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-7 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style8' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-8 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style9' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-9 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?> bwd-icon-item"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style10' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-10 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style11' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-11 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style12' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-12 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style13' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-13 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style14' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-14 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style15' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-15 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style16' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-16 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style17' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-17 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style18' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-18 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style19' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-19 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style20' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-20 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style21' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-21 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style22' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-22 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style23' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-23 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style24' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-24 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style25' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-25 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href=" <?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style26' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-26 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style27' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-27 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style28' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-28 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style29' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-29 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i><div class="bwd-extra-item"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></div></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style30' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-30 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style31' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-31 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style32' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-32 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style33' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-33 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style34' === $settings['bwdsi_social_icon_style']) { 
		?>
		<div class="bwd-social-icon-34 bwd-social-alignment">
			<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
				<?php
				if ( $settings['bwdsi_social_icon_list'] ) {
					foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
						<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>">
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></div>
					</a>
					<?php
					}	
				}	
				?>
			</div>
		</div>
		<?php
		}elseif('style35' === $settings['bwdsi_social_icon_style']) { 
		?>
		<div class="bwd-social-icon-35 bwd-social-alignment">
			<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
				<?php
				if ( $settings['bwdsi_social_icon_list'] ) {
					foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
						<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>">
						<div class="bwd-shadow bwdsi-icons-color"></div>
						<div class="bwd-shadow bwdsi-icons-color"></div>
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"></div>
						<div class="bwd-shadow"></div>
						<i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
					</a>
					<?php
					}	
				}	
				?>
			</div>
		</div>
		<?php
		}elseif('style36' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-36 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
							<i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
						</a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style37' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-37 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
							<i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
						</a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style38' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-38 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style39' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-39 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
							if ( $settings['bwdsi_social_icon_list'] ) {
								foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
								<div class="bwd-circle-items">
									<div class="bwd-icons">
										<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i>
										</a>
									</div>
									<div class="bwdsi-title"><?php echo esc_html($item['bwdsi_social_icon_title']);?></div>
								</div>
								<?php
								}	
							}	
						?>
				</div>
			</div>
		<?php
		}elseif('style40' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-40 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
		}elseif('style41' === $settings['bwdsi_social_icon_style']) { 
			?>
				<div class="bwd-social-icon-41 bwd-social-alignment">
					<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
						<?php
						if ( $settings['bwdsi_social_icon_list'] ) {
							foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
								<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
							<?php
							}	
						}	
						?>
					</div>
				</div>
			<?php
			}elseif('style42' === $settings['bwdsi_social_icon_style']) { 
		?>
		<div class="bwd-social-icon-42 bwd-social-alignment">
			<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
				<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<div class="bwd-icon <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>">
							<div class="bwd-tooltip"><?php echo esc_html($item['bwdsi_social_icon_title']);?></div>
							<a class="bwdsi-icons-color" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i></a>
							</div>
						<?php
						}	
					}	
					?>
			</div>
		</div>
		<?php
		}elseif('style43' === $settings['bwdsi_social_icon_style']) { 
		?>
		<div class="bwd-social-icon-43 bwd-social-alignment">
			<?php
				if ( $settings['bwdsi_social_icon_list'] ) {
					foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
						<div class="bwd-social-icon-box">
							<div class="bwd-social-icon-font-part bwd-item-font">
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?> bwd-before-icons"></i></a>
							</div>
							<div class="bwd-social-icon-back-part bwd-item-back">
							<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?> bwd-before-icons"></i></a>
							</div>
						</div>
					<?php
					}	
				}	
			?>
		</div>
		<?php
		}elseif('style44' === $settings['bwdsi_social_icon_style']) { 
		?>
		<div class="bwd-social-icon-44">
			<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
				<div class="bwd-social-icon-part">
					<?php
						if ( $settings['bwdsi_social_icon_list'] ) {
							foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
								<div class="bwd-icons">
								<a class="bwdsi-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo $item['bwdsi_social_icon']['value'];?>"></i><div class="bwdsi-title"><?php echo esc_html($item['bwdsi_social_icon_title']);?></div></a>
								</div>
							<?php
							}	
						}	
						?>
				</div>
			</div>
		</div>
		<?php
		}
    }
}