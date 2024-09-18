<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDFGfilterable extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameFilterableGallery', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Filterable Gallery', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdfg_filterable_content_basic_settings',
			[
				'label' => esc_html__( 'Filterable Gallery Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdfg_style_selection',
			[
				'label' => esc_html__( 'Filterable Gallery Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style 6 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11 Masking', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12 Masking', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
			]
		);
		$this->add_control(
			'bwdfg_column_check',
			[
				'label' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'column_default',
				'options' => [
					'column_default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column_three' => esc_html__( 'Column Three', BWDEB_ROOT_AUTHOR_PRO ),
					'column_two' => esc_html__( 'Column Two', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_enable_filter',
			[
				'label' => __( 'Show Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_filterable_content_section',
			[
				'label' => esc_html__( 'Filterable Item', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdfg_filterable_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item',
			[
				'label' => esc_html__( 'All Item', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdfg_filterable_item_name',
			[
				'label' => esc_html__( 'Item Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdfg_filterable_item_id',
			[
				'label' => esc_html__( 'Item ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdfg_total_box',
			[
				'label' => esc_html__( 'Filterable Gallery Items', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdfg_filterable_item_name' => esc_html__( 'Filterable Gallery #1', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_filterable_item_name' => esc_html__( 'Filterable Gallery #2', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_filterable_item_name' => esc_html__( 'Filterable Gallery #3', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_filterable_item_name' => esc_html__( 'Filterable Gallery #4', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdfg_filterable_item_name }}}',
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdfg_filterable_content_section_image',
			[
				'label' => esc_html__( 'Filterable Images', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdfg_filterable_iamge_for_gallery',
			[
				'label' => esc_html__( 'Item ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('Copy from Filterable Item', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_filterable_item_image_name',
			[
				'label' => esc_html__( 'Item Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Programming', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_image_profile_image_image',
			[
				'label' => esc_html__( 'Choose Profile', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);

		$this->add_control(
			'bwdfg_total_box_image',
			[
				'label' => esc_html__( 'Filterable Gallery Boxes', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #1', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #2', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #3', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #4', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #5', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #6', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #7', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #8', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'image_field' => '{{{ bwdfg_total_box_image_pic }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_item_style_section',
			[
				'label' => esc_html__( 'Gallery Item', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwdfg_filterable_all_item_title_style_tabsxs'
		);

		$this->start_controls_tab(
			'bwdfg_filterable_all_item_title_style_normal_tabxx',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_typography',
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class div' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_div_active_background',
			[
				'label' => esc_html__( 'Active Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_div_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_item_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-my-commonsk-class div' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdfg_filterable_all_item_title_style_hover_tabaa',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_hover_typography',
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_active_right_colorss',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active :hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_right_colorss',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class div:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_div_hover_active_background',
			[
				'label' => esc_html__( 'Active Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_div_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_item_hover_border_radius',
            [
                'label' => esc_html__('Hover Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		$this->add_control(
			'bwdfg_filterable_all_items_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_info_style_section',
			[
				'label' => esc_html__( 'Gallery Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_info_u_typography',
				'selector' => '{{WRAPPER}} div.bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content a .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-box-content .bwdfg-filter-heading',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_info_u_content_quote_right_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} div.bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content a .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-box-content .bwdfg-filter-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_info_u_div_active_background',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-gallery-wrapper .bwdfg-content-box::before, {{WRAPPER}} .bwdfg-gallery-wrapper:hover:before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_info_u_div_hover4_4background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-gallery-item:before, {{WRAPPER}} .bwdfg-gallery-item:after, {{WRAPPER}} .bwdfg-gallery-thumb:after, {{WRAPPER}} .bwdfg-gallery-thumb:before, {{WRAPPER}} .bwdfg-my-commonsk-class div, {{WRAPPER}} .bwdfg-gallery-wrapper:before',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_info_u_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-thumb img, {{WRAPPER}} .bwdfg-gallery-wrapper:hover .bwdfg-content-box::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'bwdfg_filterable__the_social_icon_size',
			[
				'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} img, {{WRAPPER}} .bwdfg-single-gallery img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_info_u_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_info_u_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_style_section',
			[
				'label' => esc_html__( 'Gallery Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_gallery_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => ['gradient' ],
				'selector' => '{{WRAPPER}} .bwdfg-gallery-filtering-common',
			]
		);
		$this->add_responsive_control(
            'bwdfg_gallery_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-filtering-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdfg_gallery_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-filtering-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$the_class_one = esc_attr('active', BWDEB_ROOT_AUTHOR_PRO);
		$bwdfg_column_class = $settings['bwdfg_column_check'];
		if( $bwdfg_column_class === 'column_two') {
			$bwdfg_column = esc_attr('col-xl-6', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_column_lg = esc_attr('col-lg-6', BWDEB_ROOT_AUTHOR_PRO);
		} elseif($bwdfg_column_class === 'column_three') {
			$bwdfg_column = esc_attr('col-xl-4', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_column_lg = esc_attr('col-lg-4', BWDEB_ROOT_AUTHOR_PRO);
		} else{
			$bwdfg_column = esc_attr('col-xl-3', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_column_lg = esc_attr('col-lg-3', BWDEB_ROOT_AUTHOR_PRO);
		}

		$bwdfg_item_align_class = $settings['bwdfg_filterable_all_items_align'];
		if( $bwdfg_item_align_class === 'filter_left') {
			$bwdfg_filter_item = esc_attr('justify-content-start', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_filter_item_one = esc_attr('text-align: left;', BWDEB_ROOT_AUTHOR_PRO);
		} elseif($bwdfg_item_align_class === 'filter_center') {
			$bwdfg_filter_item = esc_attr('justify-content-center', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_filter_item_one = esc_attr('text-align: center;', BWDEB_ROOT_AUTHOR_PRO);
		} else{
			$bwdfg_filter_item = esc_attr('justify-content-end', BWDEB_ROOT_AUTHOR_PRO);
			$bwdfg_filter_item_one = esc_attr('text-align: right;', BWDEB_ROOT_AUTHOR_PRO);
		}
        if('style1' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-one bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu pb-40 bwdfg-my-commonsk-class" style="<?php echo $bwdfg_filter_item_one; ?>">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
								</div>
								<div class="bwdfg-content-box">
									<div class="bwdfg-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image">
											<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
										</a>
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
		<?php
        } elseif('style2' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-our-gallery-two bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-two pb-40 d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?>">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-two bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-single-gallery snake mb-30">
								<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								<div class="overlay"><div class="bwdfg-filter-heading">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image">
									<?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?>
									</a>
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
		<?php
        } elseif('style3' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-three bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-three d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item  <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-three bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									<div class="bwdfg-gallery-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
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
		<?php
        } elseif('style4' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-four bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-four d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-four bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gellary-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style5' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-five bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-five d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-five bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gellary-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style6' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-six bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-six d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-six bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style7' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-seven bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-seven d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-seven bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style8' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-eight bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-eight d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-eight bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style9' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-gallery-filtering-nine bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-nine  d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-nine bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style10' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-ten bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-ten d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-ten bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style11' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-eleven bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-eleven d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-eleven bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style12' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twelve bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twelve d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twelve bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></span></a>
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
		<?php
        } elseif('style13' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-thirteen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-thirteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-thirteen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-box-content">
									<div class="bwdfg-content">
										<div class="bwdfg-popup-img">
											<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
										</div>
										<div class="bwdfg-title">
											<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
										</div>
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
		<?php
        } elseif('style14' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-fourteen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-fourteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-fourteen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-box-content">
									<div class="bwdfg-popup-img">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
									</div>
									<div class="bwdfg-title">
										<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style15' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-fifteen bwdfg-gallery-filtering-common">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-fifteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-fifteen bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-box-content">
									<div class="bwdfg-popup-img">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
									</div>
									<div class="bwdfg-title">
										<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style16' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-sixteen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-sixteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-sixteen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-box-content">
									<div class="bwdfg-popup-img">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
									</div>
									<div class="bwdfg-title">
										<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style17' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-seventeen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-seventeen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-seventeen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-box-content">
									<div class="bwdfg-popup-img">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><i class="fa-solid fa-plus"></i></a>
									</div>
									<div class="bwdfg-title">
										<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style18' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-eighteen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-eighteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-eighteen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
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
		<?php
        } elseif('style19' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-nineteen bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-nineteen d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-nineteen bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
								</div>
								<div class="bwdfg-gallery-search">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style20' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style21' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-one bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-one d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-one bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									<div class="bwdfg-gallery-hover">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style22' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-two bwdfg-gallery-filtering-common">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-two d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-two bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
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
		<?php
        } elseif('style23' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-three bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-three d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-three bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
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
		<?php
        } elseif('style24' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-four bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-four d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-four bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style25' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-five bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-five d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-five bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-sub-icon">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
									</div>
									<div class="bwdfg-sub-con">
										<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
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
		<?php
        } elseif('style26' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-six bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-six d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-six bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<div class="bwdfg-gallery-item">
										<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style27' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-seven bwdfg-gallery-filtering-common">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-seven d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-seven bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper">
								<div class="bwdfg-gallery-thumb">
									<div class="bwdfg-gallery-item">
										<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style28' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-eight bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-eight d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-eight bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<div class="bwdfg-gallery-item">
										<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style29' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-twenty-nine bwdfg-gallery-filtering-common">
				<div class="container p-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-twenty-nine d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-twenty-nine bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper">
								<div class="bwdfg-gallery-thumb">
									<div class="bwdfg-gallery-item">
										<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style30' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-thirty bwdfg-gallery-filtering-common">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-thirty d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-thirty bwdfg-grid-common g-0">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper">
								<div class="bwdfg-gallery-thumb">
									<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								</div>
								<div class="bwdfg-gallery-content">
									<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        } elseif('style31' === $settings['bwdfg_style_selection']){
		?>
			<div class="bwdfg-gallery-filtering-thirty-one bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-thirty-one d-flex bwdfg-my-commonsk-class  <?php echo $bwdfg_filter_item; ?> pb-40">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo $the_class_one; ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-thirty-one bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . $bwdfg_column .' '. $bwdfg_column_lg .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<div class="bwdfg-gallery-item">
										<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
									</div>
								</div>
								<div class="bwdfg-gallery-content">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image"><span><i class="fas fa-search"></i></span></a>
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
		<?php
        }
	}
}
