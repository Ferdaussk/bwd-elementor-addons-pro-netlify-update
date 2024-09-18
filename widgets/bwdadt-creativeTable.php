<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Icons_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdadt_creativetable extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdadt-creative-table', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Ajax DataTable', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return ' eicon-table bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {


		//tab-content
		$this->start_controls_section(
			'bwdadt_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdadt_style_selection',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->end_controls_section();


		//Table-header
		$this->start_controls_section(
			'bwdadt_sorting_option_section',
			[
				'label' => esc_html__( 'Sorting Option', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
            'bwdadt_show_pagination',
            [
                'label' => esc_html__( 'Pagination & LengthMenu?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
            ]
        );

		$this->add_control(
            'bwdadt_show_search',
            [
                'label' => esc_html__( 'Search Option?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
            ]
        );

		$this->add_control(
            'bwdadt_show_footer_info',
            [
                'label' => esc_html__( 'Footer Info?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
            ]
        );

		$this->add_control(
            'bwdadt_show_table_responsive',
            [
                'label' => esc_html__( 'Responsive Another Way?', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Notice: when this option is [YES] then the table is responsive automatically & this option is [NO] then the table is responsive with a horizontal scroll bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
            ]
        );

		$this->add_control(
			'bwdadt_lengthMenu',
			[
				'label' => esc_html__( 'Length Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '10, 25, 50, 75, 100' , BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdadt_show_pagination!' => '' ,
				]
			]
		);

		$this->add_responsive_control(
			'bwdadt_filter_top_item_gap',
			[
				'label' => esc_html__( 'Top Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length, {{WRAPPER}} .dataTables_wrapper .dataTables_filter' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdadt_filter_Bottom_item_gap',
			[
				'label' => esc_html__( 'Bottom Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_info, {{WRAPPER}} .dataTables_wrapper .dataTables_paginate' => 'padding-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		//Table-header
		$this->start_controls_section(
			'bwdadt_header_section',
			[
				'label' => esc_html__( 'Table Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		//header-title
		$repeater->add_control(
			'bwdadt_header_title_name', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Header Title' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//bwdadt_header-colspan
		$repeater->add_control(
			'bwdadt_header-colspan',
			[
				'label' => esc_html__( 'Col Span', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'bwdadt_headers_switcher',
			[
				'label' => esc_html__( 'Header Icon & Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		//header-icon&image
		$repeater->add_control(
			'bwdadt_header_media_type',
			[
				'label' => esc_html__( 'Madia Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdadt_header_icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-font-awesome',
					],
					'bwdadt_header_image' => [
						'title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-image-bold',
					],
				],
				'condition' => [
					'bwdadt_headers_switcher' => 'yes'
				],
				'default' => 'bwdadt_header_icon',
				'toggle' => true,
			]
		);
		//header-icon
		$repeater->add_control(
			'bwdadt_header_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'condition' => [
					'bwdadt_header_media_type' => 'bwdadt_header_icon',
					'bwdadt_headers_switcher' => 'yes',
				],
			]
		);
		//header-image
		$repeater->add_control(
			'bwdadt_header_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/image/img1.png',
				],
				'condition' => [
					'bwdadt_header_media_type' => 'bwdadt_header_image',
					'bwdadt_headers_switcher' => 'yes',
				],
			]
		);

		//highlight tabs------------------------------------------
		$repeater->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$repeater->add_control(
			'bwdadt_highlight_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_tb_header_bg',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th',
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_highlight_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th',
			]
		);

		$repeater->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$repeater->add_control(
			'bwdadt_highlight_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_tb_header_bg_hover',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th:hover',
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_highlight_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_th:hover',
			]
		);

		$repeater->end_controls_tab();

		$repeater->end_controls_tabs();

		//header-repeater-control
		$this->add_control(
			'bwdadt_repet_header',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdadt_header_title_name' => esc_html__( 'Header Title', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdadt_header_title_name' => esc_html__( 'Header Title', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdadt_header_title_name' => esc_html__( 'Header Title', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdadt_header_title_name' => esc_html__( 'Header Title', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdadt_header_title_name }}}',
			]
		);

		$this->end_controls_section();

		//tab-style-header
		$this->start_controls_section(
			'bwdadt_header_tab_style_section',
			[
				'label' => esc_html__( 'Table Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//header-icon-popover
		$this->add_control(
			'bwdadt_headers_icon_popover',
			[
				'label' => esc_html__( 'Header Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();
			//color
			$this->add_control(
				'bwdadt_head_icon_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdadt_header-icon' => 'color: {{VALUE}}',
					],
				]
			);
			//gradient_bg
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdadt_head_icon_BG',
					'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => ['classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdadt_header-icon',
				]
			);
			//icon-position
			$this->add_control(
				'bwdadt_header_icon-position',
				[
					'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => 'bwdadt_image_inline_block',
					'options' => [
						'bwdadt_image_inline_block' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdadt_image_block' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					],
				]
			);
			//icon-size
			$this->add_control(
				'bwdadt_header_icon_size',
				[
					'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'default' => [
						'unit' => 'px',
						'size' => 20,
					],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_header-icon' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//image-width
			$this->add_responsive_control(
				'bwdadt_head_icon_WH',
				[
					'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
						'{{WRAPPER}} .bwdadt_header-icon' => 'width: {{SIZE}}{{UNIT}}!important; height: {{SIZE}}{{UNIT}}!important;',
					],
				]
			);
			//header-icon-margin-right
			$this->add_responsive_control(
				'bwdadt_icon_spaces',
				[
					'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_header-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdadt_header_icon-position' => 'bwdadt_image_inline_block'
					],
				]
			);
			//header-icon-margin-bottom
			$this->add_responsive_control(
				'bwdadt_icon_title_spaces',
				[
					'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_header-icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdadt_header_icon-position' => 'bwdadt_image_block'
					],
				]
			);
			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdadt_head_icon_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdadt_header-icon',
				]
			);
			//Border Radius
			$this->add_responsive_control(
				'bwdadt_head_icon_border_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_header-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_popover();

		//header-image-popover
		$this->add_control(
			'bwdadt_headers_image_popover',
			[
				'label' => esc_html__( 'Header Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();
			//header-image-width
			$this->add_control(
				'bwdadt_header_image_width',
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
					'default' => [
						'unit' => 'px',
						'size' => 35,
					],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_th_image' => 'width: {{SIZE}}{{UNIT}}!important;',
					],
				]
			);
			//header-image-height
			$this->add_control(
				'bwdadt_header_image_height',
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
						'{{WRAPPER}} .bwdadt_th_image' => 'height: {{SIZE}}{{UNIT}}!important;',
					],
				]
			);
			//image-position
			$this->add_control(
				'bwdadt_header_image-position',
				[
					'label' => esc_html__( 'Image Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => 'bwdadt_image_inline_block',
					'options' => [
						'bwdadt_image_inline_block' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdadt_image_block' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					],
				]
			);
			//header-image-margin-right
			$this->add_responsive_control(
				'bwdadt_image_spaces',
				[
					'label' => esc_html__( 'Image Gap', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_th_image' => 'margin-right: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdadt_header_image-position' => 'bwdadt_image_inline_block'
					],
				]
			);
			//header-image-margin-bottom
			$this->add_responsive_control(
				'bwdadt_header_img_bottom_gap',
				[
					'label' => esc_html__( 'Image Gap', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_th_image' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdadt_header_image-position' => 'bwdadt_image_block',
					],
				]
			);
			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdadt_header_img_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdadt_th_image',
				]
			);
			//Border Radius
			$this->add_responsive_control(
				'bwdadt_header_img_bor_radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdadt_th_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_popover();

		//highlight tabs------------------------------------------
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

		//color
		$this->add_control(
			'bwdadt_header_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt_th' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_header_gradient_bg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_th',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_header_typography',
				'selector' => '{{WRAPPER}} .bwdadt_th',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_header_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_th',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdadt_header_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_th' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdadt_header_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdadt_header_title_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdadt_th' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
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

		//color
		$this->add_control(
			'bwdadt_header_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt_th:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_header_hover_gradient_bg',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_th:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_header_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_th:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdadt_header_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_th:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		//table-header-end--------------------------------------------------------


		//table-body-start--------------------------------------------------------
		//Table-body
		$this->start_controls_section(
			'bwdadt_body_section',
			[
				'label' => esc_html__( 'Table Body', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdadt_table_content_row_type',
			[
				'label' => esc_html__( 'Row/Column', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SELECT,
				'default' => 'tr',
				'options' => [
					'tr' => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO),
					'td' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO),
				]
			]
		);

		//bwdadt_body-colspan
		$repeater->add_control(
			'bwdadt_body-colspan',
			[
				'label' => esc_html__( 'Col Span', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				//'default' => 1,
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//bwdadt_body-rowspan
		$repeater->add_control(
			'bwdadt_body-rowspan',
			[
				'label' => esc_html__( 'Row Span', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				//'default' => 1,
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//body content, icon, image, button
		$repeater->add_control(
			'bwdadt_body_media_type',
			[
				'label' => esc_html__( 'Madia Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdadt_body_text' => [
						'title' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-area',
					],
					'bwdadt_body_image' => [
						'title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-image-bold',
					],
					'bwdadt_body_icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-font-awesome',
					],
					'bwdadt_body_button' => [
						'title' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-button',
					],
				],
				'default' => 'bwdadt_body_text',
				'toggle' => true,
				'condition' 	=> [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//body-title
		// $repeater->add_control(
		// 	'bwdadt_body_text',
		// 	[
		// 		'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => esc_html__( 'Body Content' , BWDEB_ROOT_AUTHOR_PRO ),
		// 		'label_block' => true,
		// 		'separator' => 'before',
		// 		'dynamic' => [
		// 			'active' => true,
		// 		],
		// 		'condition' => [
		// 			'bwdadt_table_content_row_type' => 'td',
		// 			'bwdadt_body_media_type' => 'bwdadt_body_text',
		// 		],
		// 	]
		// );
		$repeater->add_control(
			'bwdadt_body_text',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Body Content', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_text',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdadt_body_text_url',
			[
				'label' => esc_html__( 'Text Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_text',
				],
			]
		);

		//body-image
		$repeater->add_control(
			'bwdadt_body_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/image/img1.png',
				],
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_image',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdadt_body_img_url',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
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
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_image',
				],
			]
		);

		//body-icon

		$repeater->add_control(
			'bwdadt_body_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
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
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_icon',
				],
			]
		);

		//body-button-text
		$repeater->add_control(
			'bwdadt_body_button',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Text Here' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_button',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdadt_body_button_url',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
					'bwdadt_body_media_type' => 'bwdadt_body_button',
				],
			]
		);

		//tabs---norlam---hover---------------------------------
		$repeater->start_controls_tabs(
			'style_tabs_body_trtd',
		);

		$repeater->start_controls_tab(
			'style_normal_tab_body_trtd',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//color
		$repeater->add_control(
			'bwdadt_body_title_text',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdadt-body-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//gradient_bg
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_single_tb_body_bggg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_td',
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_body_text_typography_alll',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdadt-body-text',
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		$repeater->end_controls_tab();


		$repeater->start_controls_tab(
			'style_hover_tab_body_trtd',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//color
		$repeater->add_control(
			'bwdadt_body_title_text_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdadt_td:hover .bwdadt-body-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		//gradient_bg
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_single_tb_body_bggg_hover',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdadt_td:hover',
				'condition' => [
					'bwdadt_table_content_row_type' => 'td',
				],
			]
		);

		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();


		//body-repeater-control
		$this->add_control(
			'bwdadt_repet_body',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[ 'bwdadt_table_content_row_type' => 'tr' ],
					[ 'bwdadt_table_content_row_type' => 'td' ],
					[ 'bwdadt_table_content_row_type' => 'td' ],
					[ 'bwdadt_table_content_row_type' => 'td' ],
					[ 'bwdadt_table_content_row_type' => 'td' ],
				],
				'title_field' => '{{{ bwdadt_table_content_row_type }}}',
			]
		);

		$this->end_controls_section();


		//Table Body style
		$this->start_controls_section(
			'bwdadt_body_style_section',
			[
				'label' => esc_html__( 'Table Body', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'style_tabs_body_trtd'
		);

		$this->start_controls_tab(
			'style_normal_tab_body_trtd',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdadt_body_title_text_all',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt-body-text' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_single_tb_body_bggg_all',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_td',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_body_text_typography_all',
				'selector' => '{{WRAPPER}} .bwdadt-body-text',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_td',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_td' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_all',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_table',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdadt_body_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdadt_body_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdadt_td' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'style_hover_tab_body_trtd',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdadt_body_text_hover_color_all',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt_td:hover .bwdadt-body-text' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_single_tb_body_bggg_hover_all',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_td:hover',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_body_text_typography_hover_all',
				'selector' => '{{WRAPPER}} .bwdadt-body-text:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_td:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_td:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_all_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_table:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();


		//Table Body Image
		$this->start_controls_section(
			'bwdadt_body_img_style_section',
			[
				'label' => esc_html__( 'Table Body Icon & Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdadt_body_img_heading',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//body-image-width
		$this->add_control(
			'bwdadt_body_image_width',
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
					'{{WRAPPER}} .bwdadt-body-img' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
				'separator' => 'before',
			]
		);
		//body-image-height
		$this->add_control(
			'bwdadt_body_image_height',
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
					'{{WRAPPER}} .bwdadt-body-img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
				'separator' => 'before',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_img_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt-body-img',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_img_bor_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt-body-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_img',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt-body-img',
			]
		);

		//body_icon_heading
		$this->add_control(
			'bwdadt_body_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//color
		$this->add_control(
			'bwdadt_body_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt-body-icon' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);
		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_body_icon_BG',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt-body-icon',
			]
		);
		//icon-size
		$this->add_control(
			'bwdadt_body_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdadt-body-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//image-width
		$this->add_responsive_control(
			'bwdadt_body_icon_WH',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdadt-body-icon' => 'width: {{SIZE}}{{UNIT}}!important; height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_icon_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt-body-icon',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt-body-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_icon',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt-body-icon',
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdadt_body_button_style_section',
			[
				'label' => esc_html__( 'Table Body Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//highlight tabs--------------
		$this->start_controls_tabs(
			'style_tabs_body_button',
		);

		//highlight-normal-style-------------------
		$this->start_controls_tab(
			'style_normal_tab_body_button',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdadt_body_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt_Table-button' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_body_button_BG',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_Table-button',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_body_button_typography',
				'selector' => '{{WRAPPER}} .bwdadt_Table-button',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_Table-button',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_Table-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_button',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_Table-button',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdadt_body_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_Table-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		//highlight-hover-style-------------------
		$this->start_controls_tab(
			'style_hover_tab_body_button',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdadt_body_button_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdadt_Table-button:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdadt_body_button_BG_hover',
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdadt_Table-button:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_body_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_Table-button:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdadt_body_button_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdadt_Table-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdadt_box_shadow_body_button_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdadt_Table-button:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		//pasition & length Menu------------------
		$this->start_controls_section(
			'bwdadt_pagination&lengthmenu',
			[
				'label' => esc_html__( 'Pagination & Length Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdadt_show_pagination!' => '',
				]
			]
		);

		$this->add_control(
			'bwdadt_LengthMenu_options',
			[
				'label' => esc_html__( 'Length Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'bwdadt_LengthMenustyle_tabs'
		);

		$this->start_controls_tab(
			'bwdadt_LengthMenustyle_Text_tab',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdadt_LengthMenustyle_Text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length label' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_LengthMenustyle_Text_typography',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_length label',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdadt_LengthMenustyle_number_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdadt_LengthMenustyle_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length label select' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdadt_LengthMenustyle_number_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length label select' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_LengthMenustyle_number_typography',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_length label select',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_LengthMenustyle_number_border',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_length label select',
			]
		);

		//radius
		$this->add_responsive_control(
			'bwdadt_LengthMenustyle_number_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length label select' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//padding
		$this->add_responsive_control(
			'bwdadt_LengthMenustyle_number_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_length label select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();


		$this->add_control(
			'bwdadt_pagination_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdadt_Pagination_options',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'bwdadt_Pagination_tabs'
		);

		$this->start_controls_tab(
			'bwdadt_Pagination_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdadt_Pagination_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdadt_Pagination_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_Pagination_typography',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button',
			]
		);
		$this->add_responsive_control(
			'bwdadt_Pagination_gap',
			[
				'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 20,
				// ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdadt_Pagination_box_size',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 20,
				// ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_Pagination_border',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button',
			]
		);

		//radius
		$this->add_responsive_control(
			'bwdadt_Pagination_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdadt_Pagination_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdadt_Pagination_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdadt_Pagination_bg_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_Pagination_border_hover',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button:hover',
			]
		);

		//radius
		$this->add_responsive_control(
			'bwdadt_Pagination_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdadt_Pagination_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdadt_Pagination_color_current',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button.current' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdadt_Pagination_bg_current',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button.current' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_Pagination_border_current',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button.current',
			]
		);

		//radius
		$this->add_responsive_control(
			'bwdadt_Pagination_border_radius_current',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_paginate .paginate_button.current' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdadt_show_search_style',
			[
				'label' => esc_html__( 'Searching', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdadt_show_search!' => '' ,
				]
			]
		);

		$this->add_control(
			'bwdadt_search_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_filter label, {{WRAPPER}} .dataTables_wrapper .dataTables_filter input, {{WRAPPER}} td.dataTables_empty' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdadt_search_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_filter input' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_search_typography',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_filter label, {{WRAPPER}} .dataTables_wrapper .dataTables_filter input, {{WRAPPER}} td.dataTables_empty',
			]
		);
		$this->add_responsive_control(
			'bwdadt_search_gap',
			[
				'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 20,
				// ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_filter input' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdadt_search_border',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_filter input',
			]
		);

		//radius
		$this->add_responsive_control(
			'bwdadt_search_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_filter input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdadt_search_border_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_filter input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdadt_show_footer_info_style',
			[
				'label' => esc_html__( 'Footer Info', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdadt_show_footer_info!' => '' ,
				]
			]
		);

		$this->add_control(
			'bwdadt_show_footer_info_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dataTables_wrapper .dataTables_info' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdadt_show_footer_info_typography',
				'selector' => '{{WRAPPER}} .dataTables_wrapper .dataTables_info',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		//$bwdadt_style_selection = $settings['bwdadt_style_selection'];
		$bwdadt_header_image_position = $settings['bwdadt_header_image-position'];
		$bwdadt_header_icon_position = $settings['bwdadt_header_icon-position'];

		if( $bwdadt_header_image_position === 'bwdadt_image_inline_block' ) {
			$image_position = 'bwdadt_th_image_inline_block';
		}else if( $bwdadt_header_image_position === 'bwdadt_image_block' ) {
			$image_position = 'bwdadt_th_image_block';
		}

		if( $bwdadt_header_icon_position === 'bwdadt_image_inline_block' ) {
			$icon_position = 'bwdadt_th_image_inline_block';
		}else if( $bwdadt_header_icon_position === 'bwdadt_image_block' ) {
			$icon_position = 'bwdadt_th_image_block';
		}

		if(! $settings['bwdadt_show_table_responsive'] === true) {
			$this->add_render_attribute('dataTable', 'class', 'bwdadt_show_overflow');
		}



		$this->add_render_attribute(
            [
                'datatables' => [
                    'data-settings' => [
                        wp_json_encode(array_filter([
                            "id" => $this->get_id(),
							"paging" => !empty($settings['bwdadt_show_pagination']) ,
							"search" => !empty($settings['bwdadt_show_search']) ,
							"finfo" => !empty($settings['bwdadt_show_footer_info']) ,
							"trespon" => !empty($settings['bwdadt_show_table_responsive']) ,
							"lmenu" => array_map( 'intval', explode(',', $settings['bwdadt_lengthMenu'] ) ) ,
                        ])),
                    ],
                ],
            ]
        );

		$bwdadt_style_selection = 'bwdadt_CreativeTable_' . $settings['bwdadt_style_selection'];
		$this->add_render_attribute('dataTable', 'class', $bwdadt_style_selection);
		$this->add_render_attribute('dataTable', 'class', 'bwdadt_common');



		$table_row  = [];
		$table_cell = [];

		foreach ( $settings['bwdadt_repet_body'] as $row ) {
			$row_id = uniqid();

			if ( $row['bwdadt_table_content_row_type'] == 'tr' ) {
				$table_row[] = [
					'id' => $row_id,
					'type' => $row['bwdadt_table_content_row_type'],
				];
			}

			if ( $row['bwdadt_table_content_row_type'] == 'td' ) {
				$table_row_keys = array_keys( $table_row );
				$cell_key = end($table_row_keys );

				$table_cell[] = [
					'repeater_id'        => $row['_id'],
					'row_id'             => isset($table_row[$cell_key]['id'])? $table_row[$cell_key]['id']: '',
					'colspan'            => $row['bwdadt_body-colspan'],
					'rowspan'            => $row['bwdadt_body-rowspan'],
					'bwdadt_body_text'    => $row['bwdadt_body_text'],

				'bwdadt_body_text_url'    => !empty( $row['bwdadt_body_text_url']['url'] ) ? $row['bwdadt_body_text_url'] : '',

					'bwdadt_body_icon'    => !empty( $row['bwdadt_body_icon']['value'] ) ? $row['bwdadt_body_icon'] : '',
					'bwdadt_body_image'   => array_key_exists( 'bwdadt_body_image', $row ) ? $row['bwdadt_body_image'] : '',
					'bwdadt_body_img_url' => !empty( $row['bwdadt_body_img_url']['url'] ) ? $row['bwdadt_body_img_url'] : '',
					'bwdadt_body_button'    => $row['bwdadt_body_button'],
				'bwdadt_body_button_url'  => !empty( $row['bwdadt_body_button_url']['url'] ) ? $row['bwdadt_body_button_url'] : '',
				];
			}
		}


		 ?>
			<div <?php echo $this->get_render_attribute_string('dataTable'); ?>>
				<table id="table-id" class="bwdadt_table display responsive nowrap" style="width:100%" <?php echo $this->get_render_attribute_string('datatables'); ?>>
					<thead>
						<tr>
						<?php
							if ( $settings['bwdadt_repet_header'] ) {
							foreach (  $settings['bwdadt_repet_header'] as $item ){ ?>
							<th colspan="<?php echo esc_attr( $item['bwdadt_header-colspan'] ) ?>"  class="bwdadt_th elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>">
								<?php if( $item['bwdadt_headers_switcher'] === 'yes' ){
								if( !empty($item['bwdadt_header_image']['url']) ) { ?>
									<div class="bwdadt_head_img <?php echo $image_position ?>">
										<img class="bwdadt_th_image" src="<?php echo esc_url( $item['bwdadt_header_image']['url'] ); ?>" alt="image">
									</div>
								<?php } else if( !empty( $item['bwdadt_header_icon']['value'] ) ){?>
									<div class="bwdadt-head-icon <?php echo $icon_position ?>">
										<span class="bwdadt_header-icon">
											<i class="<?php echo esc_html( $item['bwdadt_header_icon']['value'] ); ?>">
										</i>
										</span>
									</div>
								<?php }} ?>
								<div class="bwdadt_header-title" ><?php echo esc_html( $item['bwdadt_header_title_name'] ); ?></div>
							</th>
						<?php }} ?>
						</tr>
					</thead>
					<tbody>
					<?php for ( $i = 0; $i < count( $table_row ); $i++ ) { ?>
						<tr>
							<?php for ( $j = 0; $j < count( $table_cell ); $j++ ) {
							if( $table_row[$i]['id'] == $table_cell[$j]['row_id'] ) {
								$row_span_repeater_key = $this->get_repeater_setting_key( '', 'bwdadt_repet_body', $table_cell[$j]['row_id'].$i.$j );

								$this->add_render_attribute( $row_span_repeater_key, 'class', 'bwdadt_td elementor-repeater-item-' . $table_cell[$j]['repeater_id'] );

								if ( ! empty( $table_cell[$j]['colspan'] ) ) {
								$this->add_render_attribute( $row_span_repeater_key, 'colspan', $table_cell[$j]['colspan'] );}

								if ( ! empty( $table_cell[$j]['rowspan'] ) ) {
								$this->add_render_attribute( $row_span_repeater_key, 'rowspan', $table_cell[$j]['rowspan'] );}

								// link
								if ( ! empty( $table_cell[$j]['bwdadt_body_text_url']['url'] ) ) {
									$row_link_key = $this->get_repeater_setting_key( 'bwdadt_body_text_url', 'bwdadt_repet_body', $table_cell[$j]['row_id'].$i.$j );
									$this->add_link_attributes( $row_link_key, $table_cell[$j]['bwdadt_body_text_url'] );
								}
								// link
								if ( ! empty( $table_cell[$j]['bwdadt_body_img_url']['url'] ) ) {
									$row_link_keyy = $this->get_repeater_setting_key( 'bwdadt_body_img_url', 'bwdadt_repet_body', $table_cell[$j]['row_id'].$i.$j );
									$this->add_link_attributes( $row_link_keyy, $table_cell[$j]['bwdadt_body_img_url'] );
								}
								// link
								if ( ! empty( $table_cell[$j]['bwdadt_body_button_url']['url'] ) ) {
									$row_link_keyyy = $this->get_repeater_setting_key( 'bwdadt_body_button_url', 'bwdadt_repet_body', $table_cell[$j]['row_id'].$i.$j );
									$this->add_link_attributes( $row_link_keyyy, $table_cell[$j]['bwdadt_body_button_url'] );
								}
							?>

							<td <?php echo $this->get_render_attribute_string( $row_span_repeater_key ); ?>>

							<?php if( !empty($table_cell[$j]['bwdadt_body_text']) ){
								if( empty($table_cell[$j]['bwdadt_body_text_url']['url']) ){?>
									<span class="bwdadt-body-text"><?php echo $table_cell[$j]['bwdadt_body_text']; ?></span>
								<?php }else{ ?>
									<a class="bwdadt-body-text" <?php $this->print_render_attribute_string( $row_link_key ); ?>><?php echo $table_cell[$j]['bwdadt_body_text']; ?></a>
								<?php }; ?>
							<?php } elseif( !empty( $table_cell[$j]['bwdadt_body_icon']) ){?>
									<span class="bwdadt-body-icon">
										<?php Icons_Manager::render_icon( $table_cell[$j]['bwdadt_body_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</span>
							<?php } elseif( !empty( $table_cell[$j]['bwdadt_body_image'] ) ) {?>
								<?php if ( !empty($table_cell[$j]['bwdadt_body_image']['url']) ){
									$image = $table_cell[$j]['bwdadt_body_image']['url'];
								?>
									<a <?php $this->print_render_attribute_string( $row_link_keyy ); ?>>
										<img class="bwdadt-body-img" src="<?php echo esc_url( $image ); ?>" alt="image">
									</a>
								<?php }; ?>
							<?php } else if( !empty( $table_cell[$j]['bwdadt_body_button'] ) ) { ?>
								<a <?php $this->print_render_attribute_string( $row_link_keyyy ); ?> class="bwdadt_Table-button"><?php echo esc_html( $table_cell[$j]['bwdadt_body_button'] ); ?></a>
							<?php } ?>

							</td>
							<?php }} ?>

						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<?php





	}
}
