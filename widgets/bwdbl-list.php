<?php
namespace BWDElementorBundlePro\Widgets;


use \Elementor\Widget_Base;
use \Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class bwdblBundleList extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdbl_list';
	}

	public function get_title() {
		return esc_html__( 'Creative List', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle creative-list';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdbl_list_content_section',
			[
				'label' => esc_html__( 'List Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbl_bundle_list_style',
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
				],
			]
		);

	
		$repeater = new \Elementor\Repeater();

	
		// Item Style Start Here

		
		$repeater->add_control(
			'bwdbl_list_item_style_heading',
			[
				'label' => esc_html__( 'Item Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdbl_list_item_style_heading_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$repeater->start_controls_tabs(
			'bwdbl_list_item_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdbl_list_item_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbl_list_style_item_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item',
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbl_list_style_item_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selectors' => [ 
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-style-25 .bwd-list-content'  
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbl_list_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdbl_list_style_item_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_padding_hover',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_margin_hover',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbl_list_style_item_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover',
			]
		);
		$repeater->add_control(
			'bwdbl_list_style_item_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbl_list_style_item_background_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbl_list_box_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-item:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_control(
			'bwdbl_list_icon_number_bg_color_style_heading_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$repeater->start_controls_tabs(
			'bwdbl_list_icon_number_bg_color_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdbl_list_icon_number_bg_color_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdbl_list_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Shape BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-icon'  => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_number_bg_color',
			[
				'label' => esc_html__( 'Number Shape BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number'  => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number::after '  => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdbl_list_icon_number_bg_color_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdbl_list_icon_bg_color_hover',
			[
				'label' => esc_html__( 'Icon Shape BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-icon:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_number_bg_color_hover',
			[
				'label' => esc_html__( 'Number Shape BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number:hover'  => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_control(
			'bwdbl_list_item_style_heading_end_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		// Item Style End Here
		// Number Start Here

		$repeater->add_control(
			'bwdbl_list_number',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '01',
				'placeholder' => esc_html__( 'Type your number here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		); 

		$repeater->add_control(
			'bwdbl_list_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-date' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_number_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-date:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbl_list_number_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-number, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-date',
			]
		);
		$repeater->add_control(
			'bwdbl_list_number_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		// Number End Here
		// Icon Start Here

		$repeater->add_control(
			'bwdbl_list_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-badge, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-title:nth-child(1)' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-icon:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-badge:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-title:nth-child(1):hover' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->add_responsive_control(
			'bwdbl_list_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-badge' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_icon_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		// Icon End Here
		// Title Start Here

		$repeater->add_control(
			'bwdbl_list_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdbl_list_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-month, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-title:nth-child(2)' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-title:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-name:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-month:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-title:nth-child(2):hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbl_list_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-list-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-month',
			]
		);
		$repeater->add_control(
			'bwdbl_list_text_shadow_popover_toggle',
			[
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
			]
		);
		$repeater->start_popover();
		$repeater->add_control(
			'bwdbl_list_text_shadow', 
			[
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{SELECTOR}} {{CURRENT_ITEM}} .bwd-list-title' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
				'condition' => [
					'bwdbl_list_text_shadow_popover_toggle' => 'yes',
				],
			]	
		);	
		$repeater->end_popover();
		$repeater->add_control(
			'bwdbl_list_title_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		// Title End Here
		// Description Start Here
		$repeater->add_control(
			'bwdbl_list_description_switcher',
			[
				'label' => esc_html__( 'Show Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdbl_list_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdbl_list_description_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdbl_list_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdbl_list_description_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-description' => 'color: {{VALUE}}',
				],
				
			]
		);
		$repeater->add_control(
			'bwdbl_list_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdbl_list_description_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-description:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbl_list_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-description',
				'condition' => [
					'bwdbl_list_description_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'bwdbl_bundle_list',
			[
				'label' => esc_html__( 'Bundle List', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdbl_list_title' => esc_html__( 'Title #1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbl_list_description' => esc_html__( 'Item content. Click the edit button to change this text.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbl_list_title' => esc_html__( 'Title #2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbl_list_description' => esc_html__( 'Item content. Click the edit button to change this text.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbl_list_title' => esc_html__( 'Title #3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbl_list_description' => esc_html__( 'Item content. Click the edit button to change this text.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbl_list_title' => esc_html__( 'Title #4', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbl_list_description' => esc_html__( 'Item content. Click the edit button to change this text.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdbl_list_title' => esc_html__( 'Title #5', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbl_list_description' => esc_html__( 'Item content. Click the edit button to change this text.', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdbl_list_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbl_list_style_section',
			[
				'label' => esc_html__( 'List Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbl_list_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-main-wrapper-bg',
			]
		);
		$this->add_control(
			'bwdbl_list_style_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-main-wrapper-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdbl_list_style_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-main-wrapper-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbl_list_style_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-main-wrapper-bg',
			]
		);
		$this->add_control(
			'bwdbl_list_style_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-main-wrapper-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}	

	protected function render() {

		$settings = $this->get_settings_for_display();

		if ('style1' === $settings['bwdbl_bundle_list_style']) { 
			?>
		<div class="bwd-list-style-1 bwd-main-wrapper-bg">
			 <div class="container">
        		<div class="row">
					<div class="col-xl-12">
							<div class="bwd-list-content">
								<?php
								if( $settings['bwdbl_bundle_list'] ) {
									foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
									<?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<div class="bwd-list-item">
										<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div> 
										<div class="bwd-list-icon">
											<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
										</div> 
										<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
										<?php
										if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
											<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
										<?php } ?>
									</div>
								</div>
								<?php
									}
								}
								?>                                         
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			} elseif ('style2' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-2 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
							 	<div class="bwd-list-content">
								<?php
									if( $settings['bwdbl_bundle_list'] ) {
										foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
										<?php
										echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<div class="bwd-list-item">
												<div class="bwd-list-icon">
													<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
												</div>
												<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
												<?php
												if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
												<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
												<?php } ?>
											</div>
										</div>
									<?php
										}
									}
									?>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<?php
			} elseif ('style3' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-3 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div> 
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style4' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-4 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div> 
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div> 
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style5' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-5 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div> 
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style6' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-6 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div> 
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style7' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-7 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style8' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-8 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style9' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-9 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-items">
									<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item"> 
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style10' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-10 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-inner">
														<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
														<div class="bwd-list-title"> <?php echo esc_html($item['bwdbl_list_title']); ?></div>
													</div>
													<?php
														if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style11' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-11 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<i class="bwd-left-icon <?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style12' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-12 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style13' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-13 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style14' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-14 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div >
													<div class="bwd-content">
														<div class="bwd-main-content"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
														<?php
														if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
															<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
														<?php } ?>
													</div>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style15' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-15 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style16' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-16 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item"> 
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div> 
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style17' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-17 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div >
													<div class="bwd-content">
														<div class="bwd-main-content"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
														<?php
														if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
															<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
														<?php } ?>
													</div>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style18' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-19 bwd-main-wrapper-bg">
					 <div class="container">
						<div class="row">
							<div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div> 
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</diV>
					</div>
				</div>
				<?php
			} elseif ('style19' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-20 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<?php
									if( $settings['bwdbl_bundle_list'] ) {
										foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
										<?php
										echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<div class="bwd-list-content">
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div> 
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php
										}
									}
									?>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style20' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-21 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-title">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style21' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-22 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div >
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style22' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-23 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div >
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style23' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-24 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<?php
									if( $settings['bwdbl_bundle_list'] ) {
										foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
										<?php
										echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<div class="bwd-list-content">
												<div class="bwd-list-item">
													<div class="bwd-list-number">
														<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_number']); ?></div > 
													</div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
												</div>
											</div>
										</div>
									<?php
										}
									}
									?>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style24' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-25 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<label class="bwd-task" >
													<input type="checkbox">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-sttf-tides">
														<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
														<?php
														if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
															<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
														<?php } ?>
													</div>
												</label>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style25' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-26 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style26' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-27 bwd-main-wrapper-bg">
					 <div class="conatainer">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-item">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-content">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-name"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
													<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
													<div class="bwd-badge"><i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i></div>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style27' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-28 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-item">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-content">
													<div class="bwd-time">
														<div class="bwd-month"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<div class="bwd-date"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													</div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style28' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-29 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">
								<div class="bwd-list-content">
									<?php
										if( $settings['bwdbl_bundle_list'] ) {
											foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
											<?php
											echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<div class="bwd-list-item">
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										<?php
											}
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style29' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-30 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">

								<?php
									if( $settings['bwdbl_bundle_list'] ) {
										foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
										<?php
										echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<div class="bwd-list-content">
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number">
														<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													</div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php
										}
									}
									?>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ('style30' === $settings['bwdbl_bundle_list_style']) { 
				?>
				 <div class="bwd-list-style-31 bwd-main-wrapper-bg">
					 <div class="container">
						 <div class="row">
							 <div class="col-xl-12">

								<?php
									if( $settings['bwdbl_bundle_list'] ) {
										foreach( $settings['bwdbl_bundle_list'] as $item ) { ?>
										<?php
										echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<div class="bwd-list-content">
												<div class="bwd-list-item">
													<div class="bwd-list-icon">
														<i class="<?php echo esc_attr($item['bwdbl_list_icon']['value']); ?>"></i>
													</div>
													<div class="bwd-list-number"><?php echo esc_html($item['bwdbl_list_number']); ?></div>
													<div class="bwd-list-title"><?php echo esc_html($item['bwdbl_list_title']); ?></div>
													<?php
													if ( 'yes' === $item['bwdbl_list_description_switcher'] ) { ?>
														<div class="bwd-description"><?php echo esc_html($item['bwdbl_list_description']); ?></div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php
										}
									}
									?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
	}

}
