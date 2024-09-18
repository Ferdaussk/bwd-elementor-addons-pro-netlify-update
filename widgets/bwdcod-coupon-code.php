<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCODCouponCode extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbcod-coupon-code';
	}

	public function get_title() {
		return esc_html__( 'Coupon Code', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'coupon-code bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'coupon', 'code', 'coupon code' ];
	}

	public function get_script_depends() {
		return [ 'bwdcod-coupon-code-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdcod_coupon_code_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcod_coupon_code_style',
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

		$this->add_control(
			'bwdcod_coupon_discount_show',
			[
				'label' => esc_html__( 'Show Discount', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdcod_coupon_section',
			[
				'label' => esc_html__( 'Coupon Code', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcod_coupon_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'EARLY BIRD OFFER', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style12'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_desg', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Mei mucius gloriatur reprimique mollis*. Ad sonet perfecto antiopam mei, denique molestie ne has.', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style3', 'style5', 'style6', 'style8', 'style10'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_discount', [
				'label' => esc_html__( 'Discount', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( '10% OFF', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style2'],
				],
			]
		);

		$this->add_control(
			'bwdcod_coupon_date',
			[
				'label' => esc_html__( 'Coupon Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default' => esc_html__( '2022-09-20 12:00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style5', 'style6', 'style9', 'style15'],
				],
			]

		);
		$this->add_control(
			'bwdcod_coupon_code', [
				'label' => esc_html__( 'Coupon Code', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'X26-1GT-OL7', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcod_coupon_btn', [
				'label' => esc_html__( 'Coupon Btn', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'COPY CODE', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcod_coupon_modal_btn', [
				'label' => esc_html__( 'Coupon Modal Btn', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Click To Coupon and get code!', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7','style11', 'style12','style13',  'style14', 'style15', 'style16'],
				],
			]
		);
        $this->end_controls_section();

		// Style-section

		$this->start_controls_section(
			'bwdcod_coupon_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_title_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code-title',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style12'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-title' => 'Color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style12'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_desg_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-description',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style3', 'style5', 'style6', 'style8', 'style10'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_desg_color',
			[
				'label' => esc_html__( 'Des Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-description' => 'Color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style3', 'style5', 'style6', 'style8', 'style10'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_discount_bg_color',
			[
				'label' => esc_html__( 'Discount Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-discount,
					{{WRAPPER}} .bwdcd-coupon-code-4-area .bwdcd-coupon-discount::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style2', 'style3', 'style5', 'style6', 'style7','style8', 'style9', 'style10', 'style12','style13', 'style14'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_discount_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-discount .bwdcd-coupon-offer,
				{{WRAPPER}} .bwdcd-coupon-offer',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style2'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_discount_color',
			[
				'label' => esc_html__( 'Discount Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-discount .bwdcd-coupon-offer,
					{{WRAPPER}} .bwdcd-coupon-offer' => 'Color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style2'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_date_bg_color',
			[
				'label' => esc_html__( 'Date Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-date' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style8', 'style9', 'style10', 'style11', 'style12','style13', 'style14', 'style15', 'style16'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_date_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-date',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_date_color',
			[
				'label' => esc_html__( 'Date Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-date' => 'Color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style5', 'style6', 'style9', 'style15'],
				],
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdcod_coupon_code_style_section',
			[
				'label' => esc_html__( 'Coupon Code Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdcod_coupon_code_color',
			[
				'label' => esc_html__( 'Code Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code' => 'Color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdcod_coupon_code_bg_color',
			[
				'label' => esc_html__( 'Code Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style2', 'style3', 'style5', 'style11', 'style12', 'style13', 'style14', 'style16',],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcod_coupon_code_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style15',],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_code_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code',
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdcod_coupon_btn_style_section',
			[
				'label' => esc_html__( 'Coupon Btn Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'bwdcod_coupon_btn_style_tabs'
		);

		$this->start_controls_tab(
			'bwdcod_coupon_btn_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcod_coupon_btn_color',
			[
				'label' => esc_html__( 'Btn Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_btn_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code-btn',
			]
		);

		$this->add_control(
			'bwdcod_coupon_btn_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn' => 'background-color: {{VALUE}}',
				],
				
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcod_coupon_btn_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code-btn',
			]
		);

        $this->add_responsive_control(
			'bwdcod_coupon_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdcod_coupon_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdcod_coupon_btn_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'bwdcod_coupon_btn_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdcod_coupon_btn_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-btn:hover' => 'background-color: {{VALUE}}',
				],
				
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();


		$this->start_controls_section(
			'bwdcod_coupon_modal_btn_style_section',
			[
				'label' => esc_html__( 'Coupon Modal Btn', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style11', 'style12','style13', 'style14', 'style15', 'style16'],
				],
			]
		);
		$this->start_controls_tabs(
			'bwdcod_coupon_modal_btn_style_tabs'
		);

		$this->start_controls_tab(
			'bwdcod_coupon_modal_btn_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdcod_coupon_modal_btn_color',
			[
				'label' => esc_html__( 'Btn Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcod_coupon_modal_btn_typography',
				'selector' => '{{WRAPPER}} .bwdcd-coupon-modal-btn',
			]
		);

		$this->add_control(
			'bwdcod_coupon_modal_btn_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => [ 'style10'],
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcod_coupon_modal_background',
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcd-coupon-modal-btn',
				'condition' => [
					'bwdcod_coupon_code_style!' => [ 'style8', 'style9'],
				],
			]
		);

        $this->add_responsive_control(
			'bwdcod_coupon_modal_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdcod_coupon_modal_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdcod_coupon_modal_btn_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'bwdcod_coupon_modal_btn_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdcod_coupon_modal_btn_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-modal-btn:hover' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => [ 'style10'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcod_coupon_modal_hover_background',
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcd-coupon-modal-btn:hover',
				'condition' => [
					'bwdcod_coupon_code_style!' => [ 'style8', 'style9'],
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();


		$this->start_controls_section(
			'bwdcod_coupon_box_style_section',
			[
				'label' => esc_html__( 'Coupon Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdcod_coupon_box_width',
			[
				'label' => esc_html__( 'Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-item,
					{{WRAPPER}} .bwdcd-coupon-code-5-area .bwdcd-coupon-code-wrapper,
					{{WRAPPER}} .bwdcd-coupon-modal .bwdcd-coupon-code-content' => 'max-inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcod_coupon_box_height',
			[
				'label' => esc_html__( 'Box Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-item,
					{{WRAPPER}} .bwdcd-coupon-code-5-area .bwdcd-coupon-code-wrapper,
					{{WRAPPER}} .bwdcd-coupon-modal .bwdcd-coupon-code-content' => 'min-block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcod_coupon_box_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-item,
					{{WRAPPER}} .bwdcd-coupon-code-3-area .bwdcd-coupon-code-item::before,
					{{WRAPPER}} .bwdcd-coupon-modal .bwdcd-coupon-code-content,
					{{WRAPPER}} .bwdcd-coupon-code-10-area .bwdcd-coupon-modal .bwdcd-coupon-code-content::after,
					{{WRAPPER}} .bwdcd-coupon-code-16-area .bwdcd-coupon-code-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style1', 'style6', 'style7', 'style11', 'style12' ],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcod_coupon_box_background',
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code-item',
				'condition' => [
					'bwdcod_coupon_code_style!' => ['style2', 'style3', 'style4', 'style5', 'style8', 'style9', 'style10', 'style13', 'style14', 'style15', 'style16'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcod_coupon_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcd-coupon-code-item',
			]
		);
		$this->add_responsive_control(
			'bwdcod_coupon_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdcod_coupon_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-coupon-code-item,
					{{WRAPPER}} .bwdcd-coupon-code-16-area .bwdcd-coupon-code-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		$bwdcod_coupon_title = $settings['bwdcod_coupon_title'];
		$bwdcod_coupon_desg = $settings['bwdcod_coupon_desg'];
		$bwdcod_coupon_discount = $settings['bwdcod_coupon_discount'];
		$bwdcod_discount_show = $settings['bwdcod_coupon_discount_show'];
		$bwdcod_coupon_date = $settings['bwdcod_coupon_date'];
		$bwdcod_coupon_code = $settings['bwdcod_coupon_code'];
		$bwdcod_coupon_btn = $settings['bwdcod_coupon_btn'];
		$bwdcod_coupon_modal_btn = $settings['bwdcod_coupon_modal_btn'];
		
		if ('style1' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-1-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-content-wrapper">
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
							<div class="bwdcd-coupon-content">
								<div class="bwdcd-coupon-code-title">
									<?php echo esc_html ( $bwdcod_coupon_title); ?>
								</div>
								<div class="bwdcd-coupon-description">
									<?php echo esc_html ( $bwdcod_coupon_desg); ?>
								</div>
								<div class="bwdcd-coupon-date">
									<?php echo esc_html ( $bwdcod_coupon_date); ?>
								</div>
							</div>
						</div>
						<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
							<div class="bwdcd-coupon-code-btn">
								<?php echo esc_html ( $bwdcod_coupon_btn); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style2' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-2-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								<div class="bwdcd-coupon-code-btn" id="coupon-btn" >
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
						</div>
						
					</div>
				</div>
			<?php
		}elseif ('style3' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-3-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style4' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-4-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
<div class="bwdcd-coupon-code" id="coupon-btn"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style5' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-5-area">
					<div class="bwdcd-coupon-code-wrapper">
						<div class="bwdcd-coupon-code-item">
							<div class="bwdcd-coupon-code-content">
								<div class="bwdcd-coupon-code-title">
									<?php echo esc_html ( $bwdcod_coupon_title); ?>
								</div>
								<?php if( $bwdcod_discount_show === 'yes' ) {?>
									<div class="bwdcd-coupon-discount">
										<div class="bwdcd-coupon-offer">
											<?php echo esc_html ( $bwdcod_coupon_discount); ?>
										</div>
									</div>
								<?php } ?>
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
								
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style6' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-6-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="bwdcd-coupon-btn-area">
							<div class="bwdcd-coupon-code-btn" id="coupon-btn" >
								<?php echo esc_html ( $bwdcod_coupon_btn); ?>
							</div>
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style7' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-7-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							
						</div>
						<div class="bwdcd-coupon-btn-area">
							<div class="bwdcd-coupon-code-btn" id="coupon-btn">
								<?php echo esc_html ( $bwdcod_coupon_btn); ?>
							</div>
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style8' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-8-area">
					<div class="bwdcd-coupon-code-item">
						<div  class="bwdcd-coupon-modal-btn">
						<?php echo esc_html ( $bwdcod_coupon_modal_btn); ?>
						</div>
						<div class="bwdcd-coupon-modal">
							<div class="bwdcd-coupon-code-content">
								<div class="bwdcd-coupon-close">
									X
								</div>
								<div class="bwdcd-coupon-icon">
									<i class="fa fa-smile"></i>
								</div>
								<div class="bwdcd-coupon-code-title">
									<?php echo esc_html ( $bwdcod_coupon_title); ?>
								</div>
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
								<div class="bwdcd-coupon-date">
									<?php echo esc_html ( $bwdcod_coupon_date); ?>
								</div>
								<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
									<div class="bwdcd-coupon-code-btn">
										<?php echo esc_html ( $bwdcod_coupon_btn); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style9' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-9-area">
					<div class="bwdcd-coupon-code-item">
						<div  class="bwdcd-coupon-modal-btn">
						<?php echo esc_html ( $bwdcod_coupon_modal_btn); ?>
						</div>
						<div class="bwdcd-coupon-modal">
							<div class="bwdcd-coupon-code-content">
								<div class="bwdcd-coupon-close">
									X
								</div>
								<div class="bwdcd-coupon-code-title">
									<?php echo esc_html ( $bwdcod_coupon_title); ?>
								</div>
								<div class="bwdcd-coupon-description">
									<?php echo esc_html ( $bwdcod_coupon_desg); ?>
								</div>
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
								<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
									<div class="bwdcd-coupon-code-btn">
										<?php echo esc_html ( $bwdcod_coupon_btn); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style10' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-10-area">
					<div class="bwdcd-coupon-code-item">
						<div  class="bwdcd-coupon-modal-btn">
						<?php echo esc_html ( $bwdcod_coupon_modal_btn); ?>
						</div>
						<div class="bwdcd-coupon-modal">
							<div class="bwdcd-coupon-code-content">
								<div class="bwdcd-coupon-close">
									X
								</div>
								<div class="bwdcd-coupon-icon">
									<i class="far fa-frown"></i>
								</div>
								<div class="bwdcd-coupon-code-title">
									<?php echo esc_html ( $bwdcod_coupon_title); ?>
								</div>
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
								<div class="bwdcd-coupon-date">
									<?php echo esc_html ( $bwdcod_coupon_date); ?>
								</div>
								<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style11' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-11-area">
					<div class="bwdcd-coupon-code-item">
						<?php if( $bwdcod_discount_show === 'yes' ) {?>
							<div class="bwdcd-coupon-discount">
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
							</div>
						<?php } ?>
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code" id="coupon-btn"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style12' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-12-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-wrapper">
							<div class="bwdcd-coupon-code-content">
								<?php if( $bwdcod_discount_show === 'yes' ) {?>
									<div class="bwdcd-coupon-discount">
										<div class="bwdcd-coupon-offer">
											<?php echo esc_html ( $bwdcod_coupon_discount); ?>
										</div>
									</div>
								<?php } ?>
								<div class="bwdcd-coupon-description">
									<?php echo esc_html ( $bwdcod_coupon_desg); ?>
								</div>
								<div class="bwdcd-coupon-date">
									<?php echo esc_html ( $bwdcod_coupon_date); ?>
								</div>
								<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
									<div class="bwdcd-coupon-code-btn">
										<?php echo esc_html ( $bwdcod_coupon_btn); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style13' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-13-area">
					<div class="bwdcd-coupon-code-item">
						<?php if( $bwdcod_discount_show === 'yes' ) {?>
							<div class="bwdcd-coupon-discount">
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
							</div>
						<?php } ?>
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code" id="coupon-btn"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style14' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-14-area">
					<div class="bwdcd-coupon-code-item">
						<?php if( $bwdcod_discount_show === 'yes' ) {?>
							<div class="bwdcd-coupon-discount">
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
							</div>
						<?php } ?>
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style15' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-15-area">
					<div class="bwdcd-coupon-code-item">
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<?php if( $bwdcod_discount_show === 'yes' ) {?>
								<div class="bwdcd-coupon-discount">
									<div class="bwdcd-coupon-offer">
										<?php echo esc_html ( $bwdcod_coupon_discount); ?>
									</div>
								</div>
							<?php } ?>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style16' === $settings['bwdcod_coupon_code_style']) {
			?>
				<div class="bwdcd-coupon-code-16-area">
					<div class="bwdcd-coupon-code-item">
						<?php if( $bwdcod_discount_show === 'yes' ) {?>
							<div class="bwdcd-coupon-discount">
								<div class="bwdcd-coupon-offer">
									<?php echo esc_html ( $bwdcod_coupon_discount); ?>
								</div>
							</div>
						<?php } ?>
						<div class="bwdcd-coupon-code-content">
							<div class="bwdcd-coupon-code-title">
								<?php echo esc_html ( $bwdcod_coupon_title); ?>
							</div>
							<div class="bwdcd-coupon-description">
								<?php echo esc_html ( $bwdcod_coupon_desg); ?>
							</div>
							<div class="bwdcd-coupon-date">
								<?php echo esc_html ( $bwdcod_coupon_date); ?>
							</div>
							<div class="bwdcd-coupon-btn-area">
<div class="bwdcd-coupon-code"><?php echo esc_html ( $bwdcod_coupon_code); ?></div>
								<div class="bwdcd-coupon-code-btn">
									<?php echo esc_html ( $bwdcod_coupon_btn); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}

    }
}