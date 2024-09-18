<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdbkBlockquote extends \Elementor\Widget_Base {


	public function get_name() {
		return 'Blockquote';
	}

	public function get_title() {
		return esc_html__( 'Blockquote', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-blockquote bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'blockquote', 'bwd' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdbk_blockquote_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdbk_blockquote_style',
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
				],
			]
		);		
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdbk_blockquote_section',
			[
				'label' => esc_html__( 'Blockquote Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_desg', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Blockquote section can be used in different ways, to separate paragraphs of text or to create a quote. You will get tons of options for styling the block quotes and showcasing.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdbk_blockquote_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'William Salazar', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquote_left_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style6','style8','style9','style10','style13','style14','style15','style16','style17','style20','style21',],
				],
			],
		);
		$this->add_control(
			'bwdbk_blockquote_right_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-left',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style2','style5','style7','style11',],
				],
			],
		);
		$this->add_responsive_control(
			'bwdbk_blockquote_text_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-content' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquote_name_align',
			[
				'label' => esc_html__( 'Title  Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdb-blockquote-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		// blockquote style tab
		$this->start_controls_section(
			'bwdbk_blockquote_description_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_desg_color',
			[
				'label' => esc_html__( 'Description Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbk_blockquote_desg_typography',
				'selector' => '{{WRAPPER}} .bwdb-blockquote-des',
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_description_margin',
			[
				'label' => esc_html__( ' Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_description_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdbk_blockquote_title_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbk_blockquote_title_typography',
				'selector' => '{{WRAPPER}} .bwdb-blockquote-title',
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdbk_blockquote_icon_section',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquote_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a,
					{{WRAPPER}} .bwdb-blockquote-icon a::before,
					{{WRAPPER}} .bwdb-blockquote-icon a::after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style5','style7','style10','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style7','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);

		// Single Icon Position

		$this->add_control(
			'bwdbk_blockquot_icon_position_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'left: {{SIZE}}px;',
					'{{WRAPPER}} .bwdb-blockquote-icon .icon-pos-inset' => 'inset-inline-start: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'top: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		// Dual Icon Position

		// First Icon Position
		$this->add_control(
			'bwdbk_blockquot_icon_position_first_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'First Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'inset-inline-start: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'inset-inline-end: {{SIZE}}px !important;',

				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'margin-top: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'margin-top: {{SIZE}}px !important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'transform: rotate({{SIZE}}deg);',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		// Second Icon Position

		$this->add_control(
			'bwdbk_blockquot_icon_position_second_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Second Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -600,
						'max' => 600,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a' => 'inset-inline-start: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'inset-inline-end: {{SIZE}}px !important;'
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -300,
						'max' => 300,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a, {{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'margin-top: {{SIZE}}px !important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a, {{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		$this->add_responsive_control(
			'bwdbk_blockquot_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style7','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);
        $this->end_controls_section();

		// Box Style

		$this->start_controls_section(
			'bwdbk_blockquot_box_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdbk_blockquot_width',
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
					'{{WRAPPER}} .bwdb-blockquote-item' => 'max-width: {{SIZE}}{{UNIT}};  width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_height',
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
					'{{WRAPPER}} .bwdb-blockquote-item' => 'min-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquot_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-7-area,
					{{WRAPPER}} .bwdb-blockquote-15-area,
					{{WRAPPER}} .bwdb-blockquote-17-area,
					{{WRAPPER}} .bwdb-blockquote-19-area,
					{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-corner,
					{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-title' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style12','style13','style14','style16','style18','style20','style21'],
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquot_item_bg_color',
			[
				'label' => esc_html__( 'Item Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-item::before,
					{{WRAPPER}} .bwdb-blockquote-item::after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style4','style5','style7','style10','style11','style12','style15','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Item Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient'],
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item,
				{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style3','style4','style6','style8','style9','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21'],
				],
			]
			
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item,
				{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style20'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style4','style7','style11','style12','style15','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$bwdbk_blockquote_desg = $settings['bwdbk_blockquote_desg'];
		$bwdbk_blockquote_title = $settings['bwdbk_blockquote_title'];
		

		if ( ! empty( $settings['bwdbk_blockquote_left_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdbk_blockquote_left_icon_link', $settings['bwdbk_blockquote_left_icon_link'] );
		}

		if ( ! empty( $settings['bwdbk_blockquote_right_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdbk_blockquote_right_icon_link', $settings['bwdbk_blockquote_right_icon_link'] );
		}

		if ('style1' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-1-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="bwdb-icon-pos">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style2' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-2-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style3' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-3-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<a href="#" class="bwdb-first-quote">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
								</a>
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
								<a href="#" class="bwdb-second-quote">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
								</a>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style4' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-4-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-icon">
								<a href="#" class="bwdb-first-quote">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
								</a>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-icon-2">
								<a href="#" class="bwdb-second-quote">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style5' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-5-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style6' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-6-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style7' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-7-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-icon">
								<a href="#">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
								</a>
							</div>
							<div class="bwdb-blockquote-content-item">
								<div class="bwdb-blockquote-des">
									<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
								</div>
								<div class="bwdb-blockquote-title">
									<?php echo esc_html ( $bwdbk_blockquote_title); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style8' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-8-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="icon-pos-inset">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style9' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-9-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="icon-pos-inset">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style10' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-10-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style11' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-11-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="icon-pos-inset">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style12' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-12-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="bwdb-first-quote">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-icon-2">
							<a href="#" class="bwdb-second-quote">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style13' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-13-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style14' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-14-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-icon">
								<a href="#">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
								</a>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style15' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-15-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#" class="icon-pos-inset">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style16' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-16-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style17' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-17-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style18' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-18-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-icon-2">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style19' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-19-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-corner "id="bwdb_left_top"></div>
						<div class="bwdb-blockquote-corner" id="bwdb_left_bottom"></div>
						<div class="bwdb-blockquote-corner" id="bwdb_right_top"></div>
						<div class="bwdb-blockquote-corner" id="bwdb_right_bottom"></div>
						<div class="bwdb-blockquote-title">
							<?php echo esc_html ( $bwdbk_blockquote_title); ?>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<a href="#" class="bwdb-first-quote">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
								</a>
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
								<a href="#">
									<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style20' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-20-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style21' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-21-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html ( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html ( $bwdbk_blockquote_title); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}
        
    }
}