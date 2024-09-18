<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdhsx_hero_section_widgets3 extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdhsx-hero-style3', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Hero Style 3', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-banner bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthecv_builder_herosections' ];
	}

    protected function register_controls(){

		$this->start_controls_section(
			'bwdhsx_style3_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdhsx_style3_background_img',
				'types' => [ 'classic'],
				'exclude' => [ 'color'],
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_single_slider',
			]
		);

		$this->add_control(
			'bwdhsx_style3_hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_title',
			[
				'label' => esc_html__( 'First Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get In Touch ', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//button1 link
		$this->add_control(
			'bwdhsx_style3_button_link',
			[
				'label' => esc_html__( 'First Button Link', BWDEB_ROOT_AUTHOR_PRO ),
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
			'bwdhsx_style3_button_icon',
			[
				'label' => esc_html__( 'First Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
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

		//button1 link
		$this->add_control(
			'bwdhsx_style3_2nd_button_link',
			[
				'label' => esc_html__( 'Popup Video Link', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Example: https://www.youtube.com/watch?v=2a6kvRSYBWY', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://www.youtube.com/watch?v=2a6kvRSYBWY', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'show_external' => true,
				'default' => [
                    'url' => 'https://www.youtube.com/watch?v=2a6kvRSYBWY',
                    'is_external' => true,
                    'nofollow' => true,
                ],
			]
		);
		$this->add_control(
			'bwdhsx_style3_2nd_button_icon',
			[
				'label' => esc_html__( 'Popup Video Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
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
			'bwdhsx_style3_hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdhsx_style3_sub_title',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WELCOME TO THE KAFFEN', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_main_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We Are Expart Digital Agency Solution.', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus provident optio quidem eveniet veritatis! Ipsa eaque.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_common_section',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style3_height',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_single_slider' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style3_content_width',
			[
				'label' => esc_html__( 'Content Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-content' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//horizontal-alignment
		$this->add_responsive_control(
			'bwdhsx_style3_horizontal_align',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_single_slider .bwdhs_content-wrap' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//vertical-alignment
		$this->add_responsive_control(
			'bwdhsx_style3_vertical_align',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_single_slider .bwdhs_content-wrap' => 'align-items: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style3_alignment',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-content' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_common_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_common_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_sub_title_section',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style3_sub_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style3_sub_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_sub_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style3_sub_title_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-title',
			]
		);

		$this->add_control(
			'bwdhsx_style3_sub_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_sub_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style3_sub_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_sub_title_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_title_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style3_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style3_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style3_title_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-title',
			]
		);

		$this->add_control(
			'bwdhsx_style3_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style3_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_title_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_main-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_desc_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style3_desc_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style3_desc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_desc_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-desce' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style3_desc_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-desce',
			]
		);

		$this->add_control(
			'bwdhsx_style3_desc_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_desc_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style3_desc_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_desc_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_sub-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_button_section',
			[
				'label' => esc_html__( 'First Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdhsx_style3_all_button_gap',
			[
				'label' => esc_html__( 'Button Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style3_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style3_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdhsx_style3_button_typography',
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1',
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_button_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdhsx_style3_button_more_options',
			[
				'label' => esc_html__( 'ICON', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1 i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_button_icon_size',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1 i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdhsx_style3_button_icon_gap',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style3_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_bg_color_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1::after' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_button_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_slide_button .bwdhs_link_btn.bttn_1:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_2nd_button_section',
			[
				'label' => esc_html__( 'Second Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdhsx_style3_2nd_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdhsx_style3_2nd_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_2nd_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_video_icon i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_2nd_button_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_video_icon .bwdhs_ripple_effect' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_2nd_button_icon_size',
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
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_video_icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdhsx_style3_2nd_button_size',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 1000,
				'step' => 1,
				'default' => 120,
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdhsx_style3_2nd_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdhsx_style3_2nd_button_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_video_icon:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdhsx_style3_2nd_button_bg_color_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_video_icon:hover .bwdhs_ripple_effect' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdhsx_style3_img_overlay_section',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdhsx_style3_overlay',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_single_slider::before',
			]
		);

		$this->add_control(
			'bwdhsx_style3_shape_fill',
			[
				'label' => esc_html__( 'Shape Fill Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhs_sliderDesign_3 .bwdhs_image_shape svg path' => 'fill: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

        $settings = $this->get_settings_for_display();
		$bwdhsx_bttn_box = $settings['bwdhsx_style3_2nd_button_size'];

		$bwdhsx_media_query_1 ='
		.bwdhs_sliderDesign_3 .bwdhs_ripple_effect{
			content: "";
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			height: 100%;
			background: #ff4040;
			border-radius: 50%;
			animation: ripple-1 3s linear infinite;
			animation-delay: calc(-0.5s * var(--i));
			z-index: -1;
			transition: all .4s ease-in-out;
		}
		@keyframes ripple-1 {
			0%{
				width: 0;
				height: 0;
			}
			50%{
				opacity: 1;
			}
			100%{
				width:'.$bwdhsx_bttn_box.'px;
				height: '.$bwdhsx_bttn_box.'px;
				opacity: 0;
			}
		}'

		?>
			<style>
				<?php echo $bwdhsx_media_query_1; ?>
			</style>
		<?php

		?>
		<div class="bwdhs_sliderDesign_3" >
            <div class="bwdhs_single_slider">
                <div class="bwdhs_image_shape">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
						<path fill-opacity="1" d="M0,64L30,90.7C60,117,120,171,180,160C240,149,300,75,360,80C420,85,480,171,540,186.7C600,203,660,149,720,160C780,171,840,245,900,240C960,235,1020,149,1080,106.7C1140,64,1200,64,1260,85.3C1320,107,1380,149,1410,170.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
					</svg>
                </div>
                <div class="bwdhs_content-wrap">
                    <div class="bwdhs_main-content">
                        <div class="bwdhs_sub-title"><?php echo esc_html($settings['bwdhsx_style3_sub_title'] );?></div>
                        <div class="bwdhs_main-title"><?php echo esc_html($settings['bwdhsx_style3_main_title'] );?></div>
                        <div class="bwdhs_sub-desce"><?php echo esc_html($settings['bwdhsx_style3_description'] );?></div>
                        <div class="bwdhs_slide_button">
                            <a class="bwdhs_link_btn bttn_1" href="<?php echo esc_url(isset($settings['bwdhsx_style3_button_link']['url']) ? $settings['bwdhsx_style3_button_link']['url'] : ''); ?>" <?php echo esc_attr(($settings['bwdhsx_style3_button_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($settings['bwdhsx_style3_button_title']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['bwdhsx_style3_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>

                            <a class="bwdhs_video_icon" href="<?php echo esc_url(isset($settings['bwdhsx_style3_2nd_button_link']['url']) ? $settings['bwdhsx_style3_2nd_button_link']['url'] : ''); ?>"><i class="<?php echo esc_html( $settings['bwdhsx_style3_2nd_button_icon']['value'] ); ?>">
                                <span style="--i:1;" class="bwdhs_ripple_effect"></span>
                                <span style="--i:2;" class="bwdhs_ripple_effect"></span>
                                <span style="--i:3;" class="bwdhs_ripple_effect"></span>
                                <span style="--i:4;" class="bwdhs_ripple_effect"></span>
                                <span style="--i:5;" class="bwdhs_ripple_effect"></span>
                            </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php

    }

}