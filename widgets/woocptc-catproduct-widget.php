<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class woocptcCATproduct_TILES extends Widget_Base {

	public function get_name() {
		return esc_html__( 'ProductTilesCat', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Product Tiles Cat', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'product-tiles-cat bwdeb-elementor-bundle';
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
			'woocptc_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'woocptc_select_style_selection',
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
				],
			]
		);
		$this->add_responsive_control(
			'woocptc_the_post_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocptc-main-wrapper' => 'gap: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocptc_campaign',
			[
				'label' => esc_html__( 'Campaign', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocptc_campaign_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'New Products', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_campaign' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_catproduct_settings',
			[
				'label' => esc_html__( 'Category Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocptc_image',
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
			'woocptc_image_link',
			[
				'label' => esc_html__( 'Hide Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_image' => 'yes',
				],
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocptc_title',
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
			'woocptc_title_link',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptc_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocptc_product_count',
			[
				'label' => esc_html__( 'Product Count', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocptc_count_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Products:- ', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_product_count' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocptc_button',
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
			'woocptc_button_text',
			[
				'label' => esc_html__( 'Value', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'SHOP NOW', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_button' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// 
		$this->add_control(
			'woocptc_review',
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
			'woocptc_review_number',
			[
				'label' => esc_html__( 'Review Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woocptc_review' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_query_content_section',
			[
				'label' => esc_html__( 'Category Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			"woocptc_categories_per_page", 
			[
            "label" => esc_html__("Per Page", "product-tiles-cat"),
            "type" => Controls_Manager::NUMBER,
            "default" => 4,
        ]);
		$this->add_control(
			'woocptc_empty_cat',
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
			'woocptc_include_text',
			[
				'label'       => esc_html__( 'Include Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->get_include_product_categories_options(),
			]
		);
		$this->add_control(
			'woocptc_exclude_text',
			[
				'label'       => esc_html__( 'Exclude Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->get_exclude_product_categories_options(),
			]
		);
		$this->add_control(
			'woocptc_the_cat_filter',
			[
				'label'             => __( 'Category Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'all'        => __( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'top_label'        => __( 'Parent', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'           => 'all',
			]
		);
		$this->add_control(
			'woocptc_the_order_by',
			[
				'label'             => __( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'name'        => __( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
					'slug'        => __( 'Slug', BWDEB_ROOT_AUTHOR_PRO ),
					'id'          => __( 'ID', BWDEB_ROOT_AUTHOR_PRO ),
					'count'       => __( 'Taxonomy Count', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'           => 'name',
			]
		);
		$this->add_responsive_control(
			'woocptc_blog_order',
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
			'woocptc_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocptc_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'separator' => 'after',
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
					'{{WRAPPER}} .woocptc-content-wrapper, {{WRAPPER}} .woocptc-contalign-wrapper' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'woocptc_blog_content_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-content-wrapper' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'woocptc_title' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_campaign_style_section',
			[
				'label' => esc_html__( 'Campaign', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptc_campaign' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptc_blog_campaign_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_campaign_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_campaign_typography',
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat',
			]
		);
		$this->add_control(
			'woocptc_blog_campaign_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_campaign_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_campaign_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_campaign_hover_typography',
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-cat',
			]
		);
		$this->add_control(
			'woocptc_blog_campaign_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_campaign_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptc_blog_campaign_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat',
			]
		);
		$this->add_responsive_control(
            'woocptc_blog_campaign_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_campaign_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_campaign_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper .woocptc-cat' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'woocptc_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_title_typography',
				'selector' => '{{WRAPPER}} .woocptc-title .woocptc_catagory-title',
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-title .woocptc_catagory-title' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-title .woocptc_catagory-title' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-title .woocptc_catagory-title',
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-title .woocptc_catagory-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_bottom_border_color',
			[
				'label' => esc_html__( 'Bottom Border', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-title .woocptc_catagory-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%);',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-title .woocptc_catagory-title' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woocptc_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptc_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-title .woocptc_catagory-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'woocptc_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-title .woocptc_catagory-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'woocptc_title' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptc_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptc_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_description_typography',
				'selector' => '{{WRAPPER}} .woocptc-desc p',
			]
		);
		$this->add_control(
			'woocptc_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-desc p',
			]
		);
		$this->add_control(
			'woocptc_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptc_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-desc p' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-desc p' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_product_count_style_section',
			[
				'label' => esc_html__( 'Product Count', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptc_product_count' => 'yes',
				],
			]
		);
		// Hover control start for product_count
		$this->start_controls_tabs(
			'woocptc_blog_product_count_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_product_count_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_product_count_typography',
				'selector' => '{{WRAPPER}} .woocptc-extra-meta',
			]
		);
		$this->add_control(
			'woocptc_blog_product_count_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-extra-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_product_count_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-extra-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_product_count_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_product_count_hover_typography',
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-extra-meta',
			]
		);
		$this->add_control(
			'woocptc_blog_product_count_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-extra-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_product_count_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper:hover .woocptc-extra-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptc_blog_product_count_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-extra-meta' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_product_count_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-extra-meta' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'woocptc_blog_button_options',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptc_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_button_typography',
				'selector' => '{{WRAPPER}} .woocptc-cartbtn',
			]
		);
		$this->add_control(
			'woocptc_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-cartbtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-cartbtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptc_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-cartbtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptc_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woocptc-cartbtn:hover',
			]
		);
		$this->add_control(
			'woocptc_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-cartbtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-cartbtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptc_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-cartbtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocptc_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-cartbtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-cartbtn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-cartbtn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocptc_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocptc-img-wrapper img' => 'inline-size: {{SIZE}}px',
					'{{WRAPPER}} .woocptc-img-wrapper img' => 'block-size: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woocptc_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptc_review' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'woocptc_the_post_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocptc-content-wrapper  .woocptc-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocptc_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-content-wrapper  .woocptc-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptc_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'woocptc_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woocptc_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocptc_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocptc_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptc_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptc_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woocptc_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptc-style-style9 .woocptc-img-wrapper::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'woocptc_select_style_selection' => 'style9',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocptc_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocptc-style-style1 .woocptc-content-wrapper, {{WRAPPER}} .woocptc-img-wrapper:hover::before, {{WRAPPER}} .woocptc-style-style10 .woocptc-img-wrapper:hover .woocptc-content-wrapper::before, {{WRAPPER}} .woocptc-style-style14 .woocptc-content-wrapper, {{WRAPPER}} .woocptc-style-style12 .woocptc-img-wrapper::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocptc_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptc_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocptc-img-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocptc_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptc_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptc-img-wrapper' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}

	public function woocptc_get_category_average_rating($category_id) {
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
	public function woocptc_get_category_total_reviews($category_id) {
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
		$woocptc_campaign = $settings['woocptc_campaign'];
		$woocptc_campaign_text = $settings['woocptc_campaign_text'];
		$woocptc_cat_image = $settings['woocptc_image'];
		$woocptc_cat_image_link = $settings['woocptc_image_link'];
		$woocptc_cat_title = $settings['woocptc_title'];
		$woocptc_title_link = $settings['woocptc_title_link'];
		$woocptc_cat_description = $settings['woocptc_description'];
		$woocptc_product_count = $settings['woocptc_product_count'];
		$woocptc_count_text = $settings['woocptc_count_text'];
		$woocptc_cat_button = $settings['woocptc_button'];
		$woocptc_button_text = $settings['woocptc_button_text'];

		$woocptc_the_cat_filter = $settings['woocptc_the_cat_filter'];
		$woocptc_orderby = $settings['woocptc_the_order_by'];
		$woocptc_order_only = $settings['woocptc_blog_order'];
		$woocptc_empty_cat = $settings['woocptc_empty_cat'];

		$woocptc_categories_per_page = $settings['woocptc_categories_per_page'];
		$woocptc_exclude_text = $settings['woocptc_exclude_text'];
		$woocptc_include_text = $settings['woocptc_include_text'];

		$product_args = [
			"taxonomy" => "product_cat",
			'number' => $woocptc_categories_per_page,
			"orderby" => $woocptc_orderby,
			"hide_empty" => ( 'yes' === $woocptc_empty_cat ) ? false : true,
			"order" => $woocptc_order_only,
			'exclude' => $woocptc_exclude_text,
			'include' => $woocptc_include_text,
		];
		$product_parent_args = [
			"taxonomy" => "product_cat",
			'number' => $woocptc_categories_per_page,
			"orderby" => $woocptc_orderby,
			"hide_empty" => ( 'yes' === $woocptc_empty_cat ) ? false : true,
			"order" => $woocptc_order_only,
			'exclude' => $woocptc_exclude_text,
			'include' => $woocptc_include_text,
			"parent" => 0,
		];
		$product_cat_args = ( 'top_label' === $woocptc_the_cat_filter ) ? $product_parent_args : $product_args;
		$woocptc_categories = get_terms($product_cat_args);

		// Avarage Rating 
		

		$woocptc_style_selection = $settings['woocptc_select_style_selection'];
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):

		echo '<div class="woocptc-main-wrapper woocptc-style-'.esc_attr($woocptc_style_selection).'">';
			if($woocptc_categories == true){
				foreach ($woocptc_categories as $category) {
					$category_id = $category->term_id;
					$average_rating = $this->woocptc_get_category_average_rating($category_id);
					echo '<article class="woocptc-img-wrapper">';
						echo '<div class="woocptc-content-wrapper">';
						$woocptc_link_t = '<a href="'.esc_url(get_category_link($category->term_id)).'">';
						$woocptc_title_link = ('yes' === $woocptc_title_link)?$woocptc_link_t:'';
						$woocptc_wrap = '<div class="woocptc-title">'.$woocptc_title_link.'<h2 class="woocptc_catagory-title">'.esc_attr($category->name).'</h2></a></div>';
						$woocptc_title_switcher = ('yes' === $woocptc_cat_title)?$woocptc_wrap:'';
						echo $woocptc_title_switcher;
						$woocptc_desc_wrap = '<div class="woocptc-desc"><p>'.esc_attr($category->description).'</p></div>';
						$woocptc_desc_switcher = ('yes' === $woocptc_cat_description)?$woocptc_desc_wrap:'';
						echo $woocptc_desc_switcher;
							echo '<div class="woocptc-contalign-wrapper">';
								echo '<div class="bwdts-pricart-wrapper">';
									$woocptc_count_wrap = '<span class="woocptc-extra-meta">'.esc_html__($woocptc_count_text).esc_attr($category->count).'</span>';
									$woocptc_count_switcher = ('yes' === $woocptc_product_count)?$woocptc_count_wrap:'';
									echo $woocptc_count_switcher;
									if('yes' === $woocptc_cat_button):
									echo '<div class="woocptc-atcart-btn">';
										echo '<a class="woocptc-cartbtn" href="'.esc_url(get_category_link($category->term_id)).'">'.esc_html__($woocptc_button_text).'</a>';
									echo '</div>';
									endif;
								echo '</div>';

								if ('yes' === $settings['woocptc_review']):
									echo '<div class="category-average-rating">';
										$total_reviews = $this->woocptc_get_category_total_reviews($category_id);

										if ($average_rating > 0):
											for ($i = 1; $i <= 5; $i++) {
												if ($i <= $average_rating) {
													echo '<i class="fas fa-star"></i>';
												} elseif ($i - 0.5 == $average_rating) {
													echo '<i class="fas fa-star-half-alt"></i>';
												} else {
													echo '<i class="far fa-star"></i>';
												}
											}
											if ('yes' === $settings['woocptc_review_number']) {
												echo ' <span class="woocptc_review_count">(' . $total_reviews . ')</span>';
											}
										endif;
										echo '</div>';
									endif;


							echo '</div>';
						echo '</div>';
						$woocptc_CamWrap = '<div class="woocptc-cat">'.esc_html($woocptc_campaign_text).'</div>';
						$woocptc_campaign_check = ('yes' === $woocptc_campaign)?$woocptc_CamWrap:'';
						echo $woocptc_campaign_check;
						if('yes' === $woocptc_cat_image):
						$thumbnail_id = get_term_meta($category->term_id, "thumbnail_id", true );
						$image = wp_get_attachment_url($thumbnail_id);
						if('yes' === $woocptc_cat_image_link){ 
							echo '<a href="'.esc_url(get_category_link($category->term_id)).'">'; 
						}
						if($thumbnail_id == true){ 
							echo '<img src="'.esc_url($image).'">';
							}else{
								echo '<h1 class="text-center text-warning">'.esc_html__('Add Category Image').'</h1>';
								}
						echo '</a>';
						endif;
					echo '</article>';
				} 
			} else{echo '<div class="woocptc_none_product">'.esc_html__('You don\'t have any products. Please add your products.', 'woocptc-catproduct-td').'</div>';}
		echo '</div>';
		else: ?><div class="text-center"><?php echo '<b>'.esc_html__('Product Category').'</b>'.esc_html__(' requires WooCommerce to be activated.'); ?></div><?php endif;
	}
}
