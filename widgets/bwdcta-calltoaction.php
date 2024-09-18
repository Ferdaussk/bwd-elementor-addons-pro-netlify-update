<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCTACallToAction extends \Elementor\Widget_Base {


	public function get_name() {
		return 'CallToAction';
	}

	public function get_title() {
		return esc_html__( 'Call To Action', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-cta bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'call to action', 'call', 'call to'. 'contact', 'form' ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'bwdcta_call_to_action_section',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_style',
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
				],
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_content',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_main_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( "Let’s try our service now", BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( "Do you want’to get promo code regularly?", BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your sub title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_title',
			[
				'label' => esc_html__( 'Sale Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'FLASH SALE', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type sale title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style6', 'style7', 'style8', 'style10' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_title',
			[
				'label' => esc_html__( 'Discount', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50% OFF', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type discount here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Auto-layout for flexbox grid columns also the working the width of one column and have .', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text1_switch',
			[
				'label' => esc_html__( 'Button One', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text1',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Start Now', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_btn_text1_switch' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn1_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_btn_text1_switch' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text2_switch',
			[
				'label' => esc_html__( 'Button Two', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text2',
			[
				'label' => esc_html__( 'Button Two Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Start Now', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
					'bwdcta_call_to_action_btn_text2_switch' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn2_link',
			[
				'label' => esc_html__( 'Button Two Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => '',
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
					'bwdcta_call_to_action_btn_text2_switch' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_style_tab',
		    [
		        'label' => esc_html__('Title',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_title_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_sub_title_tab',
		    [
		        'label' => esc_html__('Sub Title',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_sub_title_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_p',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_description_tab',
		    [
		        'label' => esc_html__('Description',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_disce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_disce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_description_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_disce',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_sale_tab',
		    [
		        'label' => esc_html__('Sale',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style6', 'style7', 'style8', 'style10' ],
				],
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_title_content .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_title_content .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_sale_typography',
				'selector' => '{{WRAPPER}} .bwd_title_content .bwd_cta_title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_discount_tab',
		    [
		        'label' => esc_html__('Discount',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11' ],
				],
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_persent' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_persent' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_discount_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_persent',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_btn_one_tab',
		    [
		        'label' => esc_html__('Button',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_btn_one_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_one_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_spacing',
			[
				'label' => esc_html__( 'Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_one_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_hover_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_btn_two_tab',
		    [
		        'label' => esc_html__('Button Two',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_btn_two_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_two_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_two_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_hover_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_shape',
		    [
		        'label' => esc_html__('Shape Image',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_shape_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_box_tab',
		    [
		        'label' => esc_html__('Wrapper Box',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_box_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_margin',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_box_style_hover_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$main_title = $settings['bwdcta_call_to_action_main_title'];
		$sub_title = $settings['bwdcta_call_to_action_sub_title'];
		$sale_title = $settings['bwdcta_call_to_action_sale_title'];
		$discount_title = $settings['bwdcta_call_to_action_discount_title'];
		$description = $settings['bwdcta_call_to_action_description'];
		$btn1_text = $settings['bwdcta_call_to_action_btn_text1'];
		$btn2_text = $settings['bwdcta_call_to_action_btn_text2'];

		if ( ! empty( $settings['bwdcta_call_to_action_btn1_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcta_call_to_action_btn1_link', $settings['bwdcta_call_to_action_btn1_link'] );
		}
		if ( ! empty( $settings['bwdcta_call_to_action_btn2_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcta_call_to_action_btn2_link', $settings['bwdcta_call_to_action_btn2_link'] );
		}

		if ('style1' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_2 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="bwd_wraper_2">
                            <div class="bwd_shape1">
                                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img1.png'?>" alt="">
                            </div>
                            <div class="bwd_shape2">
                                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img3.png'?>" alt="">
                            </div>
                            <div class="bwd_shape3">
                                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img.png'?>" alt="">
                            </div>
                            <div class="bwd_shape4">
                                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img.png'?>" alt="">
                            </div>
                            <div class="bwd_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style2' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_3 bwd-call-to-action-wrapper">
            <div class="bwd_bg_3 bwd-call-to-action-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="bwd_wraper_3">
                                <div class="bwd_shape1_3">
                                    <div class="bwd_shape1_div">
                                        <div class="bwd_shape2_div">
                                            <div class="bwd_shape3_div"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bwd_shape2_3">
                                    <div class="bwd_shape1_div">
                                        <div class="bwd_shape2_div">
                                            <div class="bwd_shape3_div"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bwd_shape3_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img10.png'?>" alt="">
                                </div>
                                <div class="bwd_shape4_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img5.png'?>" alt="">
                                </div>
                                <div class="bwd_shape5_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img9.png'?>" alt="">
                                </div>
                                <div class="bwd_shape6_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img7.png'?>" alt="">
                                </div>
                                <div class="bwd_shape7_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img2.png'?>" alt="">
                                </div>
                                <div class="bwd_shape8_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img8.png'?>" alt="">
                                </div>
                                <div class="bwd_shape9_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img6.png'?>" alt="">
                                </div>
                                <div class="bwd_shape10_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img3.png'?>" alt="">
                                </div>
                                <div class="bwd_shape11_3">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img4.png'?>" alt="">
                                </div>
                                <div class="bwd_content">
                                    <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                    <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                    <div class="bwd_cta_button">
                                        <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php	
		} elseif ('style3' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_4 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_4">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
									<?php
									if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url']); ?>"><?php echo esc_html( $btn1_text ); ?></a>
									<?php
									}
									?>
									<?php
									if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
									<?php
									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_4/img2.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style4' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_5 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_5">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php
									if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
									<?php
									}
									?>
									<?php
									if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
									<?php
									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_5/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?>F</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php	
		} elseif ('style5' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_6 bwd-call-to-action-wrapper">
            <div class="bwd_shap_1">
                <img src="/assets/img/designs_6/img3.png" alt="">
            </div>
            <div class="bwd_shap_2">
                <img src="/assets/img/designs_6/img3.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_6">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_6/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php	
		} elseif ('style6' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_7 bwd-call-to-action-wrapper">
            <div class="bwd_shape_1">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img1.png'?>" alt="">
            </div>
            <div class="bwd_shape_2">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img2.png'?>" alt="">
            </div>
            <div class="bwd_shape_3">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img5.png'?>" alt="">
            </div>
            <div class="bwd_shape_4">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img5.png'?>" alt="">
            </div>
            <div class="bwd_shape_5">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img3.png'?>" alt="">
            </div>
            <div class="bwd_shape_6">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_7/img3.png'?>" alt="">
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="bwd_wraper_7">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
									<?php } ?>
									<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php	
		} elseif ('style7' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_8 bwd-call-to-action-wrapper" style="background: url(<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_8/img1.png'?>); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="bwd_shape_1">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_8/img2.png'?>" alt="">
            </div>
            <div class="bwd_shape_2">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_8/img3.png'?>" alt="">
            </div>
            <div class="bwd_shape_3">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_8/img4.png'?>" alt="">
            </div>
            <div class="bwd_shape_4">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_8/img3.png'?>" alt="">
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="bwd_wraper_8">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text); ?></a>
								<?php } ?>	
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style8' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_9 bwd-call-to-action-wrapper" style="background: url(<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_9/img1.png'?>); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="bwd_wraper_9">
                            <div class="bwd_content">
                                <div class="bwd_cta_title"><?php echo esc_html__( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html__( $description ); ?> </div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html__( $btn1_text ); ?></a>
								<?php } ?>	
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>	
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html__( $btn2_text ); ?></a>
								<?php } ?>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style9' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_10 bwd-call-to-action-wrapper">
             <div class="bwd_shap_1">
                <img src="/assets/img/designs_10/img2.png" alt="">
             </div>
             <div class="bwd_shap_2">
                <img src="/assets/img/designs_10/img3.png" alt="">
             </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_10">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_10/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style10' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_11 bwd-call-to-action-wrapper">
            <div class="bwd_shape_1">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img3.png'?>" alt="">
            </div>
            <div class="bwd_shape_2">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img2.png'?>" alt="">
            </div>
            <div class="bwd_shape_3">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img5.png'?>" alt="">
            </div>
            <div class="bwd_shape_4">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img5.png'?>" alt="">
            </div>
            <div class="bwd_shape_5">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img4.png'?>" alt="">
            </div>
            <div class="bwd_shape_6">
                <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_11/img4.png'?>" alt="">
            </div>
           <div class="container-fluid">
               <div class="row align-items-center">
                   <div class="col-xxl-12 col-xl-12">
                       <div class="bwd_wraper_11">
                           <div class="bwd_cta_img">
                               <div class="bwd_cta_title"><?php echo esc_html( $discount_title ); ?></div>
                           </div>
                           <div class="bwd_content">
                               <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                               <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                               <div class="bwd_cta_button">
                                   <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
		<?php	
		} elseif ('style11' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_12 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_12">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>	
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
								<?php } ?>	
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>	
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_12/img3.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style12' === $settings['bwdcta_call_to_action_style']) {
		?>
		<div class="bwd_calltoaction_13 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_13">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>	
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
								<?php } ?>
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>	
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_13/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style13' === $settings['bwdcta_call_to_action_style']) {
		?>
		<div class="bwd_calltoaction_14 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_14">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_14/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style14' === $settings['bwdcta_call_to_action_style']) {
		?>
		<div class="bwd_calltoaction_15 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_15">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>	
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
								<?php } ?>
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_15/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style15' === $settings['bwdcta_call_to_action_style']) {
		?>
		<div class="bwd_calltoaction_16 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_16">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
								<?php } ?>
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>	
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_16/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style16' === $settings['bwdcta_call_to_action_style']) {
		?>
		<div class="bwd_calltoaction_17 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="bwd_wraper_17">
                            <div class="bwd_content">
                                <div class="bwd_cta_p"><?php echo esc_html( $sub_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                <div class="bwd_cta_button">
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text1_switch'] ) {?>
                                    <a class="bwd_cta_btn" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn1_link']['url'] ); ?>"><?php echo esc_html( $btn1_text ); ?></a>
								<?php } ?>
								<?php if( 'yes' === $settings['bwdcta_call_to_action_btn_text2_switch'] ) {?>
                                    <a class="bwd_cta_btn2" href="<?php echo esc_url( $settings['bwdcta_call_to_action_btn2_link']['url'] ); ?>"><?php echo esc_html( $btn2_text ); ?></a>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="bwd_cta_img">
                            <img src="<?php echo plugin_dir_url(__FILE__) .'../assets/public/img/designs_17/img1.png'?>" alt="">
                            <div class="bwd_title_content">
                                <div class="bwd_cta_persent"><?php echo esc_html( $discount_title ); ?></div>
                                <div class="bwd_cta_title"><?php echo esc_html( $sale_title ); ?></div>
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