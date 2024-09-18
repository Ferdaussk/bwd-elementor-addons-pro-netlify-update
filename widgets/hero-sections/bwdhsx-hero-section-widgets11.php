<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdhsx_hero_section_widgets11 extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdhsx-hero-style11', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Hero Style 11', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-banner bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthecv_builder_herosections' ];
	}

    protected function register_controls(){

		$this->start_controls_section(
			'bwdhsx_style11_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdhsx_style11_background_img',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_single_slider',
			]
		);

		$this->add_control(
			'bwdhsx_style11_hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_title',
			[
				'label' => esc_html__( 'Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'explore more', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//button1 link
		$this->add_control(
			'bwdhsx_style11_button_link',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
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
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_icon',
			[
				'label' => esc_html__( 'Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-plus',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdhsx_style11_sub_title',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Established 1985', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_main_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Creative Ways Through Design', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Because we are working on beautifying', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_common_section',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style11_height',
			[
				'label' => esc_html__( 'Section Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_single_slider' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style11_content_width',
			[
				'label' => esc_html__( 'Text Content Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-content' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_text_content_BGcolor',
			[
				'label' => esc_html__( 'Text Content Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-content' => 'background: {{VALUE}}',
				],
			]
		);

		//vertical-alignment
		$this->add_responsive_control(
			'bwdhsx_style11_vertical_align',
			[
				'label' => esc_html__( 'Vertical Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-middle',
					],
					'end' => [
						'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-v-align-bottom',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_single_slider .bwdhs_content-wrap' => 'align-items: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
		//horizontal-alignment
		$this->add_responsive_control(
			'bwdhsx_style11_Horizontal_align',
			[
				'label' => esc_html__( 'Horizontal Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_single_slider .bwdhs_content-wrap' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style11_alignment',
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
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-content' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_common_text_padding',
			[
				'label' => esc_html__( 'Text Content Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_common_image_margin',
			[
				'label' => esc_html__( 'Text Content Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_sub_title_section',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style11_sub_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style11_sub_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_sub_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style11_sub_title_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-title',
			]
		);

		$this->add_control(
			'bwdhsx_style11_sub_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_sub_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style11_sub_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_sub_title_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_title_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style11_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style11_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style11_title_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-title',
			]
		);

		$this->add_control(
			'bwdhsx_style11_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style11_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_title_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_main-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_desc_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style11_desc_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style11_desc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_desc_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-desce' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style11_desc_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-desce',
			]
		);

		$this->add_control(
			'bwdhsx_style11_desc_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_desc_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style11_desc_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_desc_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_sub-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_button_section',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style11_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style11_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style11_button_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1',
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_more_options',
			[
				'label' => esc_html__( 'ICON', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1 i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdhsx_style11_button_icon_size',
			[
				'label' => esc_html__( 'icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1 i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdhsx_style11_button_icon_gap',
			[
				'label' => esc_html__( 'icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdhsx_style11_button_border',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1',
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style11_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_bg_color_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style11_button_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdhsx_style11_button_border_hover',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover',
			]
		);
		$this->add_control(
			'bwdhsx_style11_button_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style11_img_overlay_section',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_13 .bwdhs_single_slider::before',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

        $settings = $this->get_settings_for_display();

		?>
		<div class="bwdhs_sliderDesign_13">
            <div class="bwdhs_single_slider">
                <div class="bwdhs_content-wrap">
                    <div class="bwdhs_main-content">
                        <div class="bwdhs_sub-title"><?php echo esc_html($settings['bwdhsx_style11_sub_title'] );?></div>
                        <div class="bwdhs_main-title"><?php echo esc_html($settings['bwdhsx_style11_main_title'] );?></div>
                        <div class="bwdhs_sub-desce"><?php echo esc_html($settings['bwdhsx_style11_description'] );?></div>
                        <div class="bwdhs_slide_button">
                            <a class="bwdhs_link_btn bttn_1" href="<?php echo esc_url(isset($settings['bwdhsx_style11_button_link']['url']) ? $settings['bwdhsx_style11_button_link']['url'] : ''); ?>" <?php echo esc_attr(($settings['bwdhsx_style11_button_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($settings['bwdhsx_style11_button_title']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['bwdhsx_style11_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php

    }

}