<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDSSService extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameServiceShowcase', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Service Showcase', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle services';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdss_service_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdss_service_showcase_style',
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
		$this->add_responsive_control(
			'bwdss_column_layout',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( '1 Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( '2 Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column3'  => esc_html__( '3 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column4' => esc_html__( '4 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( '5 Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( '6 Column', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'bwdss-grid%s-'
			]
		);
		$this->add_responsive_control(
			'bwdss_service_showcase_column_gap',
			[
				'label' => esc_html__( 'Column Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdss_gapc' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdss_gapr' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_showcase_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'bwdss_column_section',
			[
				'label' => esc_html__( 'Service Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
       
        

		$repeater = new \Elementor\Repeater();
		 
		// Service Box Start
		
		$repeater->start_controls_tabs(
			'bwdss_service_service_box_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdss_service_service_box_background_content_tab',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdss_service_icon', [
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdss_service_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdss_service_cont', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
		$repeater->add_control(
			'bwdss_service_showcase_box_link',
			[
				'label' => esc_html__( 'Box Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdss_service_service_box_background_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdss_service_service_box_icon-heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon ' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon svg' => 'fill: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-6 .bwd-service-box.purple:after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-3 .bwd-service-box:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue::after' => 'border-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_icon_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon::before',
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-service-icon' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_sevice_icon_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon',
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_primary_background_color',
			[
				'label' => esc_html__( 'Primary Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'primary_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bgb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bga::after',
				
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_secondary_background_color',
			[
				'label' => esc_html__( 'Secondary Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'secondary_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon.bwd-secondary-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon.bwd-secondary-bga::after' ,
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_outline_border_color',
			[
				'label' => esc_html__( 'Outline Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon.bwd-icon-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon .bwd-icon-border,  {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon.bwd-icon-borderb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon.bwd-icon-bordera::after' => 'border-color: {{VALUE}}',
					' {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.bwd-icon-border::before ' => 'background-color: {{VALUE}}'
				],
				'description' => 'This color will be used for outline border of icon.',
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_background_color_separator',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_font_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon ' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_round-size',
			[
				'label' => esc_html__( 'Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Service Icon End Here
		$repeater->add_control(
			'bwdss_service_service_box_title-heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdss_service_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .title' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdss_service_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .title',
			]
		);
		$repeater->add_control(
			'bwdss_service_text_shadow_popover_toggle',
			[
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
			]
		);
		$repeater->start_popover();
		$repeater->add_control(
			'bwdss_service_text_shadow', 
			[
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{SELECTOR}} {{CURRENT_ITEM}} .title' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
				'condition' => [
					'bwdss_service_text_shadow_popover_toggle' => 'yes',
				],
			]	
		);	
		$repeater->end_popover();
		$repeater->add_control(
			'bwdss_service_service_box_des-heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_border_color',
			[
				'label' => esc_html__( 'Content Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content::before' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content' => 'background-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdss_service_cont_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc',
			]
		);
		$repeater->add_control(
			'bwdss_service_shape_color_heading',
			[
				'label' => esc_html__( 'Shape Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);
		$repeater->add_control(
			'bwdss_service_shape_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.shape-color::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.shape-color::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-content.shape-color::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-content.shape-color::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon.shape-color::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-top-title.shape-color::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-top-title.shape-color::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-top-title.shape-color, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-iteam.shape-color::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.shape-border-color::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon.shape-border-colorb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.shape-border-color::after' => 'border-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_service_box_style',
			[
				'label' => esc_html__( 'Box', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);
		
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_service_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_control(
			'bwdss_service_box_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdss_service_box_background_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon i:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue .bwd-service-icon i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-6 .bwd-service-box.purple:after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-3 .bwd-service-box:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue::after' => 'border-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_title_color_hover',
			[
				'label' => esc_html__( 'Title Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .title:hover' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_color_hover',
			[
				'label' => esc_html__( 'Description Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc:hover' => 'color: {{VALUE}}'
				],
			]
		);
		// Service Description End Here
		$repeater->add_control(
			'bwdss_service_service_box_hover_style',
			[
				'label' => esc_html__( 'Box Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_box_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_service_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_control(
			'bwdss_service_box_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Icon Box End
		// Icon Start
		$this->add_control(
			'bwdss_service_item',
			[
				'label' => esc_html__( 'Service', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdss_service_title' => esc_html__( 'Title #1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdss_service_title' => esc_html__( 'Title #2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdss_service_title' => esc_html__( 'Title #3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', BWDEB_ROOT_AUTHOR_PRO ),
					]
				],
				'title_field' => '{{{ bwdss_service_title }}}',
			]
		);
		$this->add_control(
			'bwdss_service_service_icon_option_align',
			[
				'label' => esc_html__( 'Icon Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'center' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'bwdss-icon-align-',
				'condition' => [
					'bwdss_service_showcase_style!' => ['style1', 'style3', 'style4', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style17', 'style19', 'style20', 'style22', 'style24', 'style26', 'style28', 'style29', 'style30', 'style31'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_service_icon_choose_align',
			[
				'label' => esc_html__( 'Icon Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwd-service-box .bwd-icon-align' => 'text-align: {{VALUE}}!important;',
				],
				'condition' => [
					'bwdss_service_showcase_style!' => ['style2', 'style5', 'style6', 'style7', 'style8', 'style10', 'style11', 'style15', 'style16', 'style18', 'style21', 'style23', 'style25', 'style27'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_service_text_align',
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
					'{{WRAPPER}} .bwd-service-box .bwd-content-align' => 'text-align: {{VALUE}}!important;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdss_service_style_section',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-service-style-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdss_service_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em','rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_section_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-service-style-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdss_service_section_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdss_column_gap = $settings['bwdss_service_showcase_column_gap'];
		$bwdss_column_num = $settings['bwdss_column_layout'];
		if ( ! empty( $settings['bwdss_service_showcase_box_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdss_service_showcase_box_link', $settings['bwdss_service_showcase_box_link'] );
		}
		if ('style1' === $settings['bwdss_service_showcase_style']) { 
		?>
		<div class="bwd-service-style-1 bwd-service-style-wrapper">
			<div class="container-fluid">
				<div class="row bwdss_gapr">
					<?php
						if( $settings['bwdss_service_item'] ) {
							foreach( $settings['bwdss_service_item'] as $item ) {
								?>
						<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
							echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color red">
									<div class="bwd-icon-align">
										<div class="bwd-service-icon">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
									</div>
									<div class="bwd-content-align">
										<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
										<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
									</div>
								</a>
							</div>		
						</div>
						<?php
							}
						}
						?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style2' === $settings['bwdss_service_showcase_style']) { 
		?>
		<div class="bwd-service-style-2 bwd-service-style-wrapper">
			<div class="container-fluid">
				<div class="row bwdss_gapr">
					<?php
						if( $settings['bwdss_service_item'] ) {
							foreach( $settings['bwdss_service_item'] as $item ) {
								?>
						<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
							echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color red">
									<div class="bwd-icon-align">
										<div class="bwd-service-icon bwd-icon-borderb bwd-service-icon-bg">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
									</div>
									<div class="bwd-content-align">
										<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
										<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
									</div>
								</a>
							</div>		
						</div>
						<?php
							}
						}
						?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style3' === $settings['bwdss_service_showcase_style']) { 
		?>
		<div class="bwd-service-style-3 bwd-service-style-wrapper">
			<div class="container-fluid">
				<div class="row bwdss_gapr">
					<?php
						if( $settings['bwdss_service_item'] ) {
							foreach( $settings['bwdss_service_item'] as $item ) {
							?>
						<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
							echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-border-color red">
									<div class="bwd-icon-align">
										<div class="bwd-service-icon">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
									</div>
									<div class="bwd-service-content">
										<div class="bwd-content-align">
											<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
											<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
										</div>
									</div>
								</a>
							</div>		
						</div>
						<?php
							}
						}
						?>
				</div>
			</div>
		</div>
		<?php				 										
		} elseif ('style4' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-4 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-border-color red">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style5' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-5 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-service-icon bwd-service-icon-bg">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="bwd-content">
													<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
													<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
												</div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style6' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-6 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg bwd-service-icon-bga">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style7' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-7 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color red">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg bwd-service-icon-bgb">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content shape-color">
												<div class="bwd-content">
													<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
													<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
												</div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php 
		} elseif ('style8' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-8 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-content-align">
											<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
											<div class="bwd-service-content">
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bgb bwd-secondary-bg bwd-service-icon-bga">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php 
		} elseif ('style9' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-9 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bgb bwd-service-icon-bga">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style10' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-10 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-secondary-bg bwd-service-icon-bgb">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style11' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-11 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon shape-color">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content shape-color">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style12' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-12 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style13' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-13 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg shape-color">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style14' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-14 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style15' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-15 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-top-title shape-color"></div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
										<div class="bwd-service-icon bwd-service-icon-bg">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style16' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-16 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box bwd-icon-border">
										<div class="bwd-service-icon bwd-service-icon-bg bwd-icon-border bwd-icon-borderb bwd-icon-bordera">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style17' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-17 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-content">
											<div class="bwd-icon-align">
												<div class="bwd-service-icon">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</div>
											</div>
											<div class="bwd-content-align">
												<div class="bwd-service-content">
													<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
													<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
												</div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style18' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-18 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-service-icon bwd-icon-border shape-color">
											<span class="bwd-icon-border"><?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style19' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-19 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-secondary-bg bwd-secondary-bga bwd-service-icon-bgb">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style20' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-20 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style21' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-21 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-top-title shape-color"></div>
										<div class="bwd-service-icon bwd-secondary-bg bwd-service-icon-bgb">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style22' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-22 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style23' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-23 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-iteam shape-color">
										<div class="bwd-service-box">
											<div class="bwd-content-align">
												<div class="bwd-service-content">
													<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
													<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
												</div>
											</div>
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style24' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-24 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style25' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-25 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-service-icon bwd-icon-bordera bwd-icon-borderb bwd-service-icon-bg">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style26' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-26 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style27' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-27 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-service-icon bwd-service-icon-bgb">
											<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style28' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-28 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style29' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-29 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row bwdss_gapr">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number bwdss_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
							</div>
							<?php
								}
							}
							?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style30' === $settings['bwdss_service_showcase_style']) { 
			?>
			<div class="bwd-service-style-30 bwd-service-style-wrapper">
				<div class="container-fluid">
					<div class="row">
						<?php
							if( $settings['bwdss_service_item'] ) {
								foreach( $settings['bwdss_service_item'] as $item ) {
								?>
							<div class="column_number col-xl-4 col-lg-4 col-md-4 col-sm-6"><?php
								echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
									<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box shape-color">
										<div class="bwd-icon-align">
											<div class="bwd-service-icon bwd-service-icon-bg">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdss_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</div>
										</div>
										<div class="bwd-content-align">
											<div class="bwd-service-content">
												<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
												<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
											</div>
										</div>
									</a>
								</div>		
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
		
		