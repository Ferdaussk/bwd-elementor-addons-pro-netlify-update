<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ProBWDWPCProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdwpcproductcompare', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Woo Product Compare', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdwpc-products-icon eicon-products';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	protected function bwdwpc_get_selected_products_options() {
		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => -1,
		);

		$products = get_posts($args);

		$options = array();

		foreach ($products as $product) {
			$options[$product->ID] = $product->post_title;
		}

		return $options;
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdwpc_products_content_section',
			[
				'label' => esc_html__( 'Product Compare', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdwpc_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdwpc_selected_include_products',
			[
				'label'       => esc_html__( 'Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdwpc_get_selected_products_options(),
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdwpc_compare_table_section',
			[
				'label' => esc_html__( 'Compare Table Setting', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdwpc_compare_table_title',
			[
				'label' => esc_html__( 'Table Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Compare Products' , BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Enter table title', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwpc_compare_table_title_tag',
			[
				'label' => esc_html__('Table Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__('H1', BWDEB_ROOT_AUTHOR_PRO),
					'h2' => esc_html__('H2', BWDEB_ROOT_AUTHOR_PRO),
					'h3' => esc_html__('H3', BWDEB_ROOT_AUTHOR_PRO),
					'h4' => esc_html__('H4', BWDEB_ROOT_AUTHOR_PRO),
					'h5' => esc_html__('H5', BWDEB_ROOT_AUTHOR_PRO),
					'h6' => esc_html__('H6', BWDEB_ROOT_AUTHOR_PRO),
					'div' => esc_html__('DIV', BWDEB_ROOT_AUTHOR_PRO),
					'span' => esc_html__('Span', BWDEB_ROOT_AUTHOR_PRO),
					'p' => esc_html__('P', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		$options = array();
		if (function_exists('wc_get_attribute_taxonomies')) {
			$attributes = wc_get_attribute_taxonomies();
			if ($attributes) {
				foreach ($attributes as $attribute) {
					$options[$attribute->attribute_name] = $attribute->attribute_label;
				}
			}
		}
		$repeater->add_control(
			'bwdwpc_list_type',
			[
				'label' => esc_html__('Type', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
					'image' => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
					'title' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'price' => esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
					'description' => esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
					'sku' => esc_html__('SKU', BWDEB_ROOT_AUTHOR_PRO),
					'availability' => esc_html__('Availability', BWDEB_ROOT_AUTHOR_PRO),
					'weight' => esc_html__('Weight', BWDEB_ROOT_AUTHOR_PRO),
					'dimensions' => esc_html__('Dimensions', BWDEB_ROOT_AUTHOR_PRO),
					'rating' => esc_html__('Rating', BWDEB_ROOT_AUTHOR_PRO),
					'totalsales' => esc_html__('Total Sales', BWDEB_ROOT_AUTHOR_PRO),
					'shipping_class' => esc_html__('Shipping Method', BWDEB_ROOT_AUTHOR_PRO),
					'add_to_cart' => esc_html__('Add to Cart', BWDEB_ROOT_AUTHOR_PRO),
				] + $options,
			]
		);
		$repeater->add_control(
			'bwdwpc_list_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title' , BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdwpc_compare_table_field_list',
			[
				'label' => esc_html__( 'Fields List', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdwpc_list_title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'image',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'title',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'price',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'description',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'SKU', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'sku',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Availability', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'availability',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Weight', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'weight',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Dimensions', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'dimensions',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Rating', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'rating',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Total Sales', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'totalsales',
					],
					[
						'bwdwpc_list_title' => esc_html__( 'Add to Cart', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdwpc_list_type' => 'add_to_cart',
					]
				],
				'title_field' => '{{{ bwdwpc_list_title }}}',
			]
		);
		$this->add_control(
			'bwdwpc_image_link',
			[
				'label' => esc_html__( 'Enable Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdwpc_show_icon',
			[
				'label' => esc_html__( 'Show Field Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdwpc_field_icon',
			[
				'label' => esc_html__( 'Fields Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-long-arrow-alt-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdwpc_show_icon' => 'yes',
				]
			]
		);
		$this->end_controls_section();

		/**
			*** Compare Table General------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_container_style_section',
			[
				'label' => esc_html__( 'Compare Table General', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_container_bg_type',
			[
				'label' => esc_html__( 'Background ype', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'gradient',
				'options' => [
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'gradient' => esc_html__( 'Gradient', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table' => 'background: {{VALUE}}!important;',
				],
				'condition' => [
					'bwdwpc_container_bg_type' => 'solid',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdwpc_container_background',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table',
				'condition' => [
					'bwdwpc_container_bg_type' => 'gradient',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwpc_container_border',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdwpc_container_box_shadow',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table',
			]
		);
		$this->end_controls_section();

		/**
			*** Compare Table Style------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_table_style__section',
			[
				'label' => esc_html__( 'Compare Table Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_table_style__textalign',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td .bwdwpc-rating-wrap' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwpc_table_style__width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_row_text_color',
			[
				'label' => esc_html__( 'Even Row Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product:nth-child(even) td' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_row_bg_color',
			[
				'label' => esc_html__( 'Even Row Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product:nth-child(even) td' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_odd_text_color',
			[
				'label' => esc_html__( 'Odd Row Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product:nth-child(odd) td' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_odd_bg_color',
			[
				'label' => esc_html__( 'Odd Row Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product:nth-child(odd) td' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_review_color',
			[
				'label' => esc_html__( 'Review Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr td .bwdwpc-rating-box .bwdwpc-star-rating .bwdwpc-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwpc_table_style__typography',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td, {{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td bwdwpc-star-icons',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwpc_table_style__border',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdwpc_table_style__box_shadow',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td',
			]
		);
		$this->add_control(
			'bwdwpc_table_style__padding',
			[
				'label' => esc_html__( 'padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style__extra_color',
			[
				'label' => esc_html__( 'Extra Row Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwpc_table_style_extra_1color',
			[
				'label' => esc_html__( '1st Row Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr:nth-child(1) td' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_extra_1bg_color',
			[
				'label' => esc_html__( '1st Row Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr:nth-child(1) td' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_extra_2color',
			[
				'label' => esc_html__( '2nd Row Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr:nth-child(2) td' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_extra_2bg_color',
			[
				'label' => esc_html__( '2nd Row Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr:nth-child(2) td' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->end_controls_section();

		/**
			*** Compare Table Title Style------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_table_style_title_section',
			[
				'label' => esc_html__( 'Compare Table Title Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_textalign',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => 'start',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwpc_table_style_title_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_padding',
			[
				'label' => esc_html__( 'padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwpc_table_style_title_typography',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwpc_table_style_title_border',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdwpc_table_style_title_box_shadow',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td.bwdwpc-table-title',
			]
		);

		// Title Icon ------------------------------------
		$this->add_control(
			'bwdwpc_table_style_title_icon_heading',
			[
				'label' => esc_html__( 'Title Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdwpc_show_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdwpc_show_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div .bwdwpc-title-icon svg' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div .bwdwpc-title-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdwpc_show_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_title_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div .bwdwpc-title-icon .bwdwpc-titles-icon' => 'fill: {{VALUE}};',
					'{{WRAPPER}} table.bwdwpc-product-compare-table tr.bwdwpc-product td.bwdwpc-table-title div .bwdwpc-title-icon .bwdwpc-titles-icon' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdwpc_show_icon' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		/**
			*** Compare Table Price Style------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_table_style_price_section',
			[
				'label' => esc_html__( 'Compare Table Price Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_table_style_price_reg_price',
			[
				'label' => esc_html__( 'Regular Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_control(
			'bwdwpc_table_style_price_reg_price_color',
			[
				'label' => esc_html__( 'Regular Price Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td .bwdwpc_product_price del span' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_style_price_reg_price_strike_color',
			[
				'label' => esc_html__( 'Regular Price Strike Color', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__( 'Only applicable when sales price is available.', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td .bwdwpc_product_price del' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdwpc_table_style_price_sale_price',
			[
				'label' => esc_html__( 'Sales Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwpc_table_style_price_sales_price_color',
			[
				'label' => esc_html__( 'Sales Price Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td .bwdwpc_product_price ins span, {{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table td .bwdwpc_product_price span' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->end_controls_section();

		/**
			*** Compare Table Price Style------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_table_button_style_section',
			[
				'label' => esc_html__( 'Compare Table Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_table_button_style_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table .bwdwpc_product_add_to_cart' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_button_style_hcolor',
			[
				'label' => esc_html__( 'Hover Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table .bwdwpc_product_add_to_cart:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_button_style_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table .bwdwpc_product_add_to_cart' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_table_button_style_bg_hcolor',
			[
				'label' => esc_html__( 'Hover Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table .bwdwpc_product_add_to_cart:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwpc_table_button_style_typography',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td .bwdwpc_product_add_to_cart',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwpc_table_button_style_border',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td .bwdwpc_product_add_to_cart',
			]
		);
		$this->add_control(
			'bwdwpc_table_button_style_padding',
			[
				'label' => esc_html__( 'padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tr.bwdwpc-product td .bwdwpc_product_add_to_cart' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();

		/**
			*** Heading Style------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_heading_style_section',
			[
				'label' => esc_html__( 'Heading Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwpc_heading_style_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwpc_heading_style_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title, {{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwpc_heading_style_typography',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwpc_heading_style_border',
				'selector' => '{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title',
			]
		);
		$this->add_control(
			'bwdwpc_heading_style_padding',
			[
				'label' => esc_html__( 'padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_control(
			'bwdwpc_heading_style_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap .bwdwpc-product-compare-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();

		/**
			*** Style Content Column Separately------------------------------------------
		**/
		$this->start_controls_section(
			'bwdwpc_separate_style_section',
			[
				'label' => esc_html__( 'Column Separately Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdwpc_products_zone_style' => '9',
				]
			]
		);

		// Column 1
		$this->add_control(
			'bwdwpc_separate_style_column1_pop',
			[
				'label' => esc_html__( 'Column 1', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->start_popover();
		$this->add_control(
			'bwdwpc_separate_style_column1_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2)' => 'background: {{VALUE}}',
				],
				'default' => '#E2498A',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column1_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2)' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column1_review_color',
			[
				'label' => esc_html__( 'Review Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2) .bwdwpc-rating-box .bwdwpc-star-rating span.bwdwpc-star-icons' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdwpc_separate_style_column1_button_color',
			[
				'label' => esc_html__( 'Button Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2) .bwdwpc_product_add_to_cart' => 'color: {{VALUE}}',
				],
				'default' => '#E2498A',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column1_button_hcolor',
			[
				'label' => esc_html__( 'Button Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2) .bwdwpc_product_add_to_cart:hover' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column1_button_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2) .bwdwpc_product_add_to_cart' => 'background: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column1_button_hbgcolor',
			[
				'label' => esc_html__( 'Hover Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(2) .bwdwpc_product_add_to_cart:hover' => 'background: {{VALUE}}',
				],
				'default' => '#f94a95',
			]
		);

		$this->end_popover();

		// Column 2
		$this->add_control(
			'bwdwpc_separate_style_column2_pop',
			[
				'label' => esc_html__( 'Column 2', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->start_popover();
		$this->add_control(
			'bwdwpc_separate_style_column2_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3)' => 'background: {{VALUE}}',
				],
				'default' => '#1DA1F2',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column2_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3)' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column2_review_color',
			[
				'label' => esc_html__( 'Review Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3) .bwdwpc-rating-box .bwdwpc-star-rating span.bwdwpc-star-icons' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdwpc_separate_style_column2_button_color',
			[
				'label' => esc_html__( 'Button Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3) .bwdwpc_product_add_to_cart' => 'color: {{VALUE}}',
				],
				'default' => '#1DA1F2',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column2_button_hcolor',
			[
				'label' => esc_html__( 'Button Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3) .bwdwpc_product_add_to_cart:hover' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column2_button_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3) .bwdwpc_product_add_to_cart' => 'background: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column2_button_hbgcolor',
			[
				'label' => esc_html__( 'Hover Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(3) .bwdwpc_product_add_to_cart:hover' => 'background: {{VALUE}}',
				],
				'default' => '#1ea9ff',
			]
		);

		$this->end_popover();

		// Column 3
		$this->add_control(
			'bwdwpc_separate_style_column3_pop',
			[
				'label' => esc_html__( 'Column 3', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->start_popover();
		$this->add_control(
			'bwdwpc_separate_style_column3_bgcolor',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4)' => 'background: {{VALUE}}',
				],
				'default' => '#7F6CF4',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column3_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4)' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column3_review_color',
			[
				'label' => esc_html__( 'Review Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4) .bwdwpc-rating-box .bwdwpc-star-rating span.bwdwpc-star-icons' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdwpc_separate_style_column3_button_color',
			[
				'label' => esc_html__( 'Button Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4) .bwdwpc_product_add_to_cart' => 'color: {{VALUE}}',
				],
				'default' => '#7F6CF4',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column3_button_hcolor',
			[
				'label' => esc_html__( 'Button Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4) .bwdwpc_product_add_to_cart:hover' => 'color: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column3_button_bgcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4) .bwdwpc_product_add_to_cart' => 'background: {{VALUE}}',
				],
				'default' => '#fff',
			]
		);
		$this->add_control(
			'bwdwpc_separate_style_column3_button_hbgcolor',
			[
				'label' => esc_html__( 'Hover Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwpc-product-compare-wrap table.bwdwpc-product-compare-table tbody tr.bwdwpc-product td:nth-child(4) .bwdwpc_product_add_to_cart:hover' => 'background: {{VALUE}}',
				],
				'default' => '#7F6CF4',
			]
		);

		$this->end_popover();

		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
	}
} 

