<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class thecpgcatproduct_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'thecpg-catproduct', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Product Category Grid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-product-categories bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	protected function get_include_product_categories_options() {
		$categories = get_terms( array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => false,
		) );

		$options = array();
		foreach ( $categories as $category ) {
			$options[ $category->term_id ] = $category->name;
		}

		return $options;
	}
	protected function get_exclude_product_categories_options() {
		$categories = get_terms( array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => false,
		) );

		$options = array();
		foreach ( $categories as $category ) {
			$options[ $category->term_id ] = $category->name;
		}

		return $options;
	}
	protected function register_controls(){
		
		//tab-content
		$this->start_controls_section(
			'thecpg_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'thecpg_select_style_selection',
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
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_box_column',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( '1', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( '2', BWDEB_ROOT_AUTHOR_PRO ),
					'column3' => esc_html__( '3', BWDEB_ROOT_AUTHOR_PRO ),
					'column4' => esc_html__( '4', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( '5', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( '6', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'thecpg-grid%s-'
			]
		);
		$this->add_responsive_control(
			'thecpg_col_alignment',
			[
				'label' => esc_html__( 'Column Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'start',
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
					'{{WRAPPER}} .row.thecpg-column-alignment' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thecpg_products_column_gap',
			[
				'label' => esc_html__( 'Column Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .row .thecpg_the_gap_col' => 'padding-inline-start: {{SIZE}}{{UNIT}}; padding-inline-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_blog_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
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
					'{{WRAPPER}} .row .column_number' => 'margin-block-end: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_settings',
			[
				'label' => esc_html__( 'Category Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thecpg_image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thecpg_image_link',
			[
				'label' => esc_html__( 'Hide Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_image' => 'yes',
				],
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'thecpg_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thecpg_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'thecpg_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thecpg_button_text',
			[
				'label' => esc_html__( 'Value', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'SHOP NOW', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_button' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// 
		$this->add_control(
			'thecpg_review',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thecpg_review_number',
			[
				'label' => esc_html__( 'Review Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_query_content_section',
			[
				'label' => esc_html__( 'Category Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			"thecpg_categories_per_page", 
			[
            "label" => esc_html__("Per Page", "cat-product-grid"),
            "type" => Controls_Manager::NUMBER,
            "default" => 4,
        ]);
		$this->add_control(
			'thecpg_empty_cat',
			array(
				'label'        => esc_html__( 'Show Empty Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => 'Yes',
				'label_off'    => 'No',
				'return_value' => 'yes',
			)
		);
		$this->add_control(
			'product_include_categories',
			[
				'label'       => esc_html__( 'Include Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->get_include_product_categories_options(),
			]
		);
		$this->add_control(
			'product_exclude_categories',
			[
				'label'       => esc_html__( 'Exclude Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->get_exclude_product_categories_options(),
			]
		);
		$this->add_control(
			'thecpg_the_cat_filter',
			[
				'label'             => esc_html__( 'Category Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'all'       	=> __( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'top_label'     => __( 'Parent', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'         	=> 'all',
			]
		);
		$this->add_control(
			'thecpg_the_order_by',
			[
				'label'             => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'name'        	=> __( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
					'slug'        	=> __( 'Slug', BWDEB_ROOT_AUTHOR_PRO ),
					'id'          	=> __( 'ID', BWDEB_ROOT_AUTHOR_PRO ),
					'count'       	=> __( 'Taxonomy Count', BWDEB_ROOT_AUTHOR_PRO ),
					'description' 	=> __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'         	=> 'name',
			]
		);
		$this->add_control(
			'thecpg_blog_order',
			[
				'label' => esc_html__( 'Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', BWDEB_ROOT_AUTHOR_PRO ),
					'ASC' => esc_html__( 'Ascending', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_content_style',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thecpg_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .thecpg_extra-content, {{WRAPPER}} .thecpg_catacory-content' => 'text-align: {{VALUE}}; align-items: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'thecpg_box_content_bg_color',
			[
				'label' => esc_html__( 'Content BG', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catacory-content, {{WRAPPER}} .thecpg_catagory_image_overlay_one' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thecpg_content_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catacory-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catacory-content' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_image_style',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_image' => 'yes'
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_the_post_image_width_size',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
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
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-img img' => 'inline-size: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_the_post_image_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
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
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-img img' => 'block-size: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'thecpg_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-img a:before, {{WRAPPER}} .thecpg_catagory_image_overlay' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thecpg_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_title_style',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_title' => 'yes'
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thecpg_title_style_post'
		);
		$this->start_controls_tab(
			'thecpg_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_title_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-title',
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_title_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-title:hover',
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thecpg_titlee_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'thecpg_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_title' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_review_style',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_review' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'thecpg_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'thecpg_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'thecpg_review_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-wrap .category-average-rating' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thecpg_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-wrap .category-average-rating, {{WRAPPER}} .thecpg_catagory-wrap .category-average-rating i, {{WRAPPER}} .thecpg_catagory-wrap .category-average-rating svg' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thecpg_taxonomy_review_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_review_count' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_responsive_control(
			'thecpg_review_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-wrap .category-average-rating:hover' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thecpg_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-wrap .category-average-rating:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_description_style',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_description' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'thecpg_description_style_post'
		);
		$this->start_controls_tab(
			'thecpg_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_description_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-disce',
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_description_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-disce:hover',
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thecpg_desc_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'thecpg_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_button_style',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_button' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'thecpg_button_style_post'
		);
		$this->start_controls_tab(
			'thecpg_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_button_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton',
			]
		);
		$this->add_control(
			'thecpg_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thecpg_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_button_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover',
			]
		);
		$this->add_control(
			'thecpg_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thecpg_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'thecpg_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_carousel_box_style',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'thecpg_box_style_post'
		);
		$this->start_controls_tab(
			'thecpg_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thecpg_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thecpg_catagory_6 .thecpg_cat_n_bg:before, {{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_box_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thecpg_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_box_shadow',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_border_type',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thecpg_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thecpg_catagory_7 .thecpg_cat_h_bg:before, {{WRAPPER}} .thecpg_cat_box_common:hover, {{WRAPPER}} .thecpg_box_bg:hover, {{WRAPPER}} .thecpg_box_hover_bg:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thecpg_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'thecpg_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}

	public function thecpg_get_category_average_rating($category_id) {
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $category_id,
				),
			),
		);
		$query = new \WP_Query($args);

		$total_rating = 0;
		$total_reviews = 0;

		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				global $product;
				$rating_count = $product->get_rating_count();
				$average_rating = $product->get_average_rating();

				if ($rating_count > 0) {
					$total_rating += $average_rating * $rating_count;
					$total_reviews += $rating_count;
				}
			}
			wp_reset_postdata();
		}

		if ($total_reviews > 0) {
			$average_rating = $total_rating / $total_reviews;
		} else {
			$average_rating = 0;
		}

		return round($average_rating, 2);
	}

	public function thecpg_get_category_total_reviews($category_id) {
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $category_id,
				),
			),
		);

		$query = new \WP_Query($args);

		$total_reviews = 0;

		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				global $product;
				$total_reviews += $product->get_review_count();
			}
			wp_reset_postdata();
		}

		return $total_reviews;
	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		$thecpg_cat_image = $settings['thecpg_image'];
		$thecpg_cat_image_link = $settings['thecpg_image_link'];
		$thecpg_cat_title = $settings['thecpg_title'];
		$thecpg_cat_description = $settings['thecpg_description'];
		$thecpg_cat_button = $settings['thecpg_button'];
		$thecpg_button_text = $settings['thecpg_button_text'];

		$thecpg_the_cat_filter = $settings['thecpg_the_cat_filter'];
		$thecpg_orderby = $settings['thecpg_the_order_by'];
		$thecpg_order_only = $settings['thecpg_blog_order'];
		$thecpg_empty_cat = $settings['thecpg_empty_cat'];

		$thecpg_categories_per_page = $settings['thecpg_categories_per_page'];
		$thecpg_exclude_text = $settings['product_exclude_categories'];
		$thecpg_include_text = $settings['product_include_categories'];

            $product_args = [
                "taxonomy" => "product_cat",
				'number' => $thecpg_categories_per_page,
                "orderby" => $thecpg_orderby,
                "hide_empty" => ( 'yes' === $thecpg_empty_cat ) ? false : true,
                "order" => $thecpg_order_only,
				'exclude' => $thecpg_exclude_text,
				'include' => $thecpg_include_text,
            ];
            $product_parent_args = [
                "taxonomy" => "product_cat",
				'number' => $thecpg_categories_per_page,
                "orderby" => $thecpg_orderby,
                "hide_empty" => ( 'yes' === $thecpg_empty_cat ) ? false : true,
                "order" => $thecpg_order_only,
				'exclude' => $thecpg_exclude_text,
				'include' => $thecpg_include_text,
				"parent" => 0,
            ];
			$product_cat_args = ( 'top_label' === $thecpg_the_cat_filter ) ? $product_parent_args : $product_args;
            $categories = get_terms($product_cat_args);

		$thecpg_style_selection = $settings['thecpg_select_style_selection'];
		
		if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
			if ($thecpg_style_selection) {?>
				<div class="thecpg_catagory_<?php echo $thecpg_style_selection ?> thecpg-slider-common">
					<div class="bwd-container-fluid">
						<div class="bwd-row thecpg-column-alignment">
							<?php if ($categories == true) {
								foreach ($categories as $category) {
									$category_id = $category->term_id;
									$average_rating = $this->thecpg_get_category_average_rating($category_id);
									?>
									<div class="thecpg-item thecpg_cat_box_common bwd-col-lg-4 bwd-col-md-4 bwd-col-sm-6 column_number thecpg_the_gap_col">
										<div class="thecpg_catagory-wrap">
											<?php if ('yes' === $thecpg_cat_image) { ?>
												<div class="thecpg_catagory-img thecpg_cat_h_bg thecpg_cat_n_bg">
													<?php
													$thumbnail_id = get_term_meta($category->term_id, "thumbnail_id", true);
													$image = wp_get_attachment_url($thumbnail_id); ?>
													<?php if ('yes' === $thecpg_cat_image_link) { ?>
														<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
													<?php } ?>
													<?php if ($thumbnail_id == true) { ?>
														<img src="<?php echo esc_url($image); ?>">
													<?php } else {
														echo '<h1 class="text-center text-warning">' . esc_html__('Add Category Image') . '</h1>';
													} ?>
													<?php if ($thecpg_style_selection === 'style5') { ?>
														<div class="thecpg_extra-content thecpg_catagory_image_overlay">
															<?php if ('yes' === $thecpg_cat_title) { ?>
																<div class="thecpg_catagory-title"><?php echo esc_attr($category->name); ?> (<?php echo esc_attr($category->count); ?>)</div>
															<?php } ?>
														</div>
													<?php } ?>
													<?php if ($thecpg_style_selection === 'style4') { ?>
														<div class="thecpg_extra-content thecpg_catagory_image_overlay">
															<?php if ('yes' === $thecpg_cat_description) { ?>
																<div class="thecpg_catagory-disce"><?php echo esc_attr($category->description); ?></div>
															<?php } ?>
														</div>
													<?php } ?>
													<?php if ('yes' === $thecpg_cat_image_link) { ?></a><?php } ?>
												</div>
											<?php } ?>
											<div class="thecpg_catacory-content">
												<?php if ('yes' === $thecpg_cat_title) { ?>
													<?php if ($thecpg_style_selection !== '5') { ?>
														<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
															<div class="thecpg_catagory-title"><?php echo esc_attr($category->name); ?> (<?php echo esc_attr($category->count); ?>)</div>
														</a>
													<?php } ?>
												<?php } ?>
												<?php if ('yes' === $settings['thecpg_review']) { ?>
													<div class="category-average-rating">
														<?php
														$total_reviews = $this->thecpg_get_category_total_reviews($category_id);
		
														if ($average_rating > 0) {
															for ($i = 1; $i <= 5; $i++) {
																if ($i <= $average_rating) {
																	echo '<i class="fas fa-star"></i>';
																} elseif ($i - 0.5 == $average_rating) {
																	echo '<i class="fas fa-star-half-alt"></i>';
																} else {
																	echo '<i class="far fa-star"></i>';
																}
															}
															if ('yes' === $settings['thecpg_review_number']) {
																echo ' <span class="thecpg_review_count">(' . $total_reviews . ')</span>';
															}
														}
														?>
													</div>
												<?php } ?>
												<?php if ('yes' === $thecpg_cat_description) { ?>
													<?php if ($thecpg_style_selection !== 'style4') { ?>
														<div class="thecpg_catagory-disce"><?php echo esc_attr($category->description); ?></div>
													<?php } ?>
												<?php } ?>
												<?php if ('yes' === $thecpg_cat_button) { ?>
													<div class="thecpg_catagory-bttn"><a class="thecpg_Cbutton" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html__($thecpg_button_text); ?></a></div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php }
							} else {
								echo '<div class="thecpg_none_product">' . esc_html__('You don\'t have any products. Please add your products.', 'thecpg-catproduct-td') . '</div>';
							} ?>
						</div>
					</div>
				</div>
			<?php } 
		} else { ?>
			<div class="text-center"><?php echo '<b>' . esc_html__('Product Category') . '</b>' . esc_html__(' requires WooCommerce to be activated.'); ?></div><?php 
			}
	}
}
