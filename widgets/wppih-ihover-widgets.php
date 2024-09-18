<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class wppih_iHover_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'wppih-iHover-Effect', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'IHover Effect', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-animation bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdthebest_general_category'];
	}


	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'wppih_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'wppih_select_style_selection',
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
				],
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'wppih_iHover_section',
			[
				'label' => esc_html__( 'iHover Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//media
		$this->add_control(
			'wppih_iHover_image',
			[
				'label'   => __('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);

		//all masking image
		$this->add_control(
			'wppih_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'mask_none',
				'options' => [
					'mask_none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'mask_1'  => esc_html__( 'mask 1', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_2'  => esc_html__( 'mask 2', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_3'  => esc_html__( 'mask 3', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_4'  => esc_html__( 'mask 4', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_5'  => esc_html__( 'mask 5', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_6'  => esc_html__( 'mask 6', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_7'  => esc_html__( 'mask 7', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_8'  => esc_html__( 'mask 8', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_9'  => esc_html__( 'mask 9', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_10'  => esc_html__( 'mask 10', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_11'  => esc_html__( 'mask 11', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_12'  => esc_html__( 'mask 12', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_13'  => esc_html__( 'mask 13', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_14'  => esc_html__( 'mask 14', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_15'  => esc_html__( 'mask 15', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_16'  => esc_html__( 'mask 16', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_17'  => esc_html__( 'mask 17', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_18'  => esc_html__( 'mask 18', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_19'  => esc_html__( 'mask 19', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_20'  => esc_html__( 'mask 20', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_21'  => esc_html__( 'mask 21', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_22'  => esc_html__( 'mask 22', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_23'  => esc_html__( 'mask 23', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_24'  => esc_html__( 'mask 24', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_25'  => esc_html__( 'mask 25', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_26'  => esc_html__( 'mask 26', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_27'  => esc_html__( 'mask 27', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_28'  => esc_html__( 'mask 28', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_29'  => esc_html__( 'mask 29', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_30'  => esc_html__( 'mask 30', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_31'  => esc_html__( 'mask 31', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_32'  => esc_html__( 'mask 32', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_33'  => esc_html__( 'mask 33', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_34'  => esc_html__( 'mask 34', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_35'  => esc_html__( 'mask 35', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_36'  => esc_html__( 'mask 36', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_37'  => esc_html__( 'mask 37', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_38'  => esc_html__( 'mask 38', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_39'  => esc_html__( 'mask 39', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		//image-link
		$this->add_control(
			'wppih_iHover_link',
			[
				'label' => esc_html__( 'Item Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'wppih_all_item_alignment',
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
					'{{WRAPPER}} .wppih_item-align' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//TITLE-SWITCHER
		$this->add_control(
			'wppih_iHover_title_switcher',
			[
				'label' => esc_html__( 'Title?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		//alt-text
		$this->add_control(
			'wppih_iHover_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Unique Options' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'wppih_iHover_title_switcher' => 'yes'
				],
			]
		);

		//desc-SWITCHER
		$this->add_control(
			'wppih_iHover_disce_switcher',
			[
				'label' => esc_html__( 'Description?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'wppih_iHover_desc',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Unlimited Design', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppih_iHover_disce_switcher' => 'yes'
				],
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'wppih_iHover_style_section',
			[
				'label' => esc_html__( 'iHover Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//image-width
        $this->add_responsive_control(
			'wppih_iHover_width',
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
					'{{WRAPPER}} .wppih_ihover-wrap' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//image-heigt
        $this->add_responsive_control(
			'wppih_iHover_height',
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
					'{{WRAPPER}} .wppih_ihover-wrap' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//bg-color
		$this->add_control(
			'wppih_overlay_background',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-img::before, {{WRAPPER}} .wppih_extra-wrap' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style6', 'style7', 'style9', 'style10', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27']
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppih_gradient_overlay',
				'types' => ['gradient'],
				'selector' => '{{WRAPPER}} .wppih_ihover-img::before, {{WRAPPER}} .wppih_extra-wrap',
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style6', 'style7', 'style9', 'style10', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27']
				],
			]
		);

		$this->add_control(
			'wppih_image_opacity',
			[
				'label'       => esc_html__('Overlay Opacity', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => 0.7,
				'selectors'   => [
					'{{WRAPPER}} .wppih_ihover-wrap:hover .wppih_ihover-img::before' => 'opacity: {{SIZE}}',
				],
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style9', 'style10', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27']
				],
			]
		);

		//style for 13
		//image-heigt
        $this->add_responsive_control(
			'wppih_iHover_border-width',
			[
				'label' => esc_html__( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .wppih_ihover-img::after' => 'border-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//style for 13
		//border-color
		$this->add_control(
			'wppih_border_bottom_right-color',
			[
				'label' => esc_html__( 'First Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-img::after' => 'border-right-color: {{VALUE}}; border-bottom-color: {{VALUE}}',
				],
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12','style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27'],
				],
			]
		);
		//style for 13
		//border-color
		$this->add_control(
			'wppih_border_top_left-color',
			[
				'label' => esc_html__( 'Second Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-img::after' => 'border-top-color: {{VALUE}}; border-left-color: {{VALUE}}',
				],
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12','style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27'],
				],
			]
		);
		

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppih_iHover_image_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_ihover-img img',
				'condition' => [
					'wppih_select_style_selection!' => ['style5', 'style13'],
				],
			]
		);

		//style for 5
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppih_iHover_wrap_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_extra-wrap',
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13','style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27'],
				],
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppih_iHover_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-img img, {{WRAPPER}} .wppih_ihover-img::before, {{WRAPPER}} .wppih_ihover-img::after, {{WRAPPER}} .wppih-ihover-info, {{WRAPPER}} .wppih_ihover-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppih_box_shadow_iHover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_ihover-img img',
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

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppih_iHover_image_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_ihover-wrap:hover img',
				'condition' => [
					'wppih_select_style_selection!' => ['style5', 'style13'],
				],
			]
		);

		//border for style 5
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppih_iHover_wrap_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_extra-wrap:hover',
				'condition' => [
					'wppih_select_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13','style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27'],
				],
				
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppih_iHover_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-img img, {{WRAPPER}} .wppih_ihover-img::before, {{WRAPPER}} .wppih_ihover-img::after, {{WRAPPER}} .wppih-ihover-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppih_box_shadow_iHover_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_ihover-wrap:hover img',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();





		$this->start_controls_section(
			'wppih_title_desce_style_section',
			[
				'label' => esc_html__( 'iHover Title & description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//bg-color
		$this->add_control(
			'wppih_text_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih-ihover-info, {{WRAPPER}} .wppih_extra-content' => 'background: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppih_gradient_bg',
				'types' => ['gradient'],
				'selector' => '{{WRAPPER}} .wppih-ihover-info, {{WRAPPER}} .wppih_extra-content',
			]
		);

		//image-heigt
        $this->add_responsive_control(
			'wppih_iHover_text_gap',
			[
				'label' => esc_html__( 'Text Vertical gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .wppih_ihover-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'wppih_text_item_alignment',
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
					'{{WRAPPER}} .wppih_ihover-content' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppih_iHover_tetx_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppih_extra-content, {{WRAPPER}} .wppih-ihover-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'wppih_text_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppih-ihover-info, {{WRAPPER}} .wppih_extra-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		//Title Style
		$this->add_control(
			'wppih_title_style',
			[
				'label' => esc_html__( 'Title Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//color
		$this->add_control(
			'wppih_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-title' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppih_title_typography',
				'selector' => '{{WRAPPER}} .wppih_ihover-title',
			]
		);
		//text-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'wppih_title_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppih_ihover-title',
			]
		);

		//Description Style
		$this->add_control(
			'wppih_desce_style',
			[
				'label' => esc_html__( 'Description Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//color
		$this->add_control(
			'wppih_desc_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppih_ihover-desc' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppih_desc_typography',
				'selector' => '{{WRAPPER}} .wppih_ihover-desc',
			]
		);


		$this->end_controls_section();

	}


	protected function render(){
		$settings = $this->get_settings_for_display();

		$wppih_style_selection = $settings['wppih_select_style_selection'];
		$wppih_title_switcher = $settings['wppih_iHover_title_switcher'];
		$wppih_disce_switcher = $settings['wppih_iHover_disce_switcher'];


		if( 'style1' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_1 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
					<div class="wppih_ihover-wrap">
						<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
							<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
						</div>
						<div class="wppih_ihover-content wppih_extra-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){
							?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
					</div>
				</a>
       		 </div>
			<?php
		} elseif( 'style2' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_1 wppih_ihover_2 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
					<div class="wppih_ihover-wrap">
						<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
							<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
						</div>
						<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
						</div>
					</div>
				</a>
        	</div>
			<?php
		} elseif( 'style3' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_3 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
					<div class="wppih_ihover-wrap">
						<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
							<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
						</div>
						<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style4' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_4 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
					<div class="wppih_ihover-wrap">
						<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
							<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
						</div>
						<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style5' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_5 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap wppih_extra-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style6' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_6 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style7' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_6 wppih_ihover_7 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style8' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_8 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style9' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_9 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
                </div>
				</a>
			</div>
			<?php
		} elseif( 'style10' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_9 wppih_ihover_10 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
    		</div>
			<?php
		} elseif( 'style11' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_11 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style12' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_12 wppih_item-align">
            	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style13' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_13 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style14' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_14 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap" style="background-image: url( <?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?> );">
				<div class="wppih_ihover-content wppih_extra-content">
						<?php if( $wppih_title_switcher == 'yes' ){ ?>
							<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
						<?php };
						if( $wppih_disce_switcher == 'yes' ){?>
							<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
						<?php }?>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style15' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style16' === $wppih_style_selection ) { ?>
			 <div class="wppih_ihover_15 wppih_ihover_16 wppih_item-align">
			 	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				 <div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style17' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_17 wppih_item-align">
            	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style18' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_18 wppih_item-align">
            	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style19' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_19 wppih_item-align">
            	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style20' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_20 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style21' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_21 wppih_item-align">
            	<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style22' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_22 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style23' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_23 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
					<div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
						<img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
					</div>
					<div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
					</div>
				</div>
				</a>
			</div>
			<?php
		} elseif( 'style24' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_24 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style25' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_15 wppih_ihover_25 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style26' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_26 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		} elseif( 'style27' === $wppih_style_selection ) { ?>
			<div class="wppih_ihover_27 wppih_item-align">
				<a href="<?php echo esc_url( $settings['wppih_iHover_link']['url'] ); ?>">
				<div class="wppih_ihover-wrap">
                    <div class="wppih_ihover-img <?php echo esc_attr( $settings['wppih_maskink_image'] ); ?>">
                        <img src="<?php echo esc_url( $settings['wppih_iHover_image']['url'] ); ?>" alt="image">
                    </div>
                    <div class="wppih-ihover-info">
						<div class="wppih_ihover-content">
							<?php if( $wppih_title_switcher == 'yes' ){ ?>
								<div class="wppih_ihover-title"><?php echo esc_html( $settings['wppih_iHover_title'] ); ?></div>
							<?php };
							if( $wppih_disce_switcher == 'yes' ){?>
								<div class="wppih_ihover-desc"><?php echo esc_html( $settings['wppih_iHover_desc'] ); ?></div>
							<?php }?>
						</div>
                    </div>
                </div>
				</a>
        	</div>
			<?php
		}

	}
}
