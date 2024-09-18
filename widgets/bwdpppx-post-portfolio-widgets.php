<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdpppx_postPortfolio_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdpppx-post-prestige-portfolio', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Post Prestige Portfolio', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-posts-masonry bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_post_category' ];
	}

	protected function register_controls() {

		/*
			Layout ---------------------------------------------------------
		*/ 

		$this->start_controls_section(
			'bwdpppx_layout_settings_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdpppx_masonry_layout',
			[
				'label' => esc_html__('Layout', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'grid', // Set a default layout
				'options' => [
					'grid' => esc_html__('Grid', BWDEB_ROOT_AUTHOR_PRO),
					'masonry' => esc_html__('Masonry', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_responsive_control(
			'bwdpppx_show_column',
			[
				'label' => esc_html__( 'Columns', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'1' => esc_html__( '1', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( '2', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( '3', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( '4', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( '5', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( '6', BWDEB_ROOT_AUTHOR_PRO ),
					'7' => esc_html__( '7', BWDEB_ROOT_AUTHOR_PRO ),
					'8' => esc_html__( '8', BWDEB_ROOT_AUTHOR_PRO ),
					'9' => esc_html__( '9', BWDEB_ROOT_AUTHOR_PRO ),
					'10' => esc_html__( '10', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-main-container' => 'grid-template-columns: repeat({{VALUE}},1fr)!important;',
					'{{WRAPPER}} .bwdpppx-masonry-container' => 'columns: {{VALUE}}!important;',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpppx_item_ratios',
			[
				'label' => esc_html__( 'Image Ratio', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0.66,
				],
				'range' => [
					'px' => [
						'min' => 0.1,
						'max' => 10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-main-container .bwdpppx-post-thumbnail-link' => 'padding-bottom: calc( {{SIZE}} * 100% )',
				],
				'condition' => [
					'bwdpppx_masonry_layout' => 'grid',
				],
			]
		);

		$this->add_control(
			'bwdpppx_show_title',
			[
				'label' => esc_html__( 'Title?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'bwdpppx_title_tag',
			[
				'label' => esc_html__( 'Title HTML Tag', 'elementor-pro' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'div' => 'div',
					'span' => 'span',
					'p' => 'p',
				],
				'default' => 'div',
				'condition' => [
					'bwdpppx_show_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdpppx_show_filter',
			[
				'label' => esc_html__( 'Filter Menu?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'bwdpppx_show_load_btn',
			[
				'label' => esc_html__( 'Load More Button?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->end_controls_section();

		/*
			Query Settings ---------------------------------------------------------
		*/ 
		$this->start_controls_section(
			'bwdpppx_query_settings_section',
			[
				'label' => esc_html__( 'Query Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdpppx_query_posts_per_page',
			[
				'label' => esc_html__( 'Posts Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 6,
			]
		);

		// Add a new tab control
		$this->start_controls_tabs('bwdpppx_query_tabs');

		// Add the Include tab
		$this->start_controls_tab(
			'bwdpppx_query_include_tab',
			[
				'label' => esc_html__('Include', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
	
		// Add the Include SELECT2 control
		$this->add_control(
			'bwdpppx_query_include',
			[
				'label' => esc_html__('Include Posts by ID', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'description' => esc_html__('Select specific posts to include.', BWDEB_ROOT_AUTHOR_PRO),
				'multiple' => true, // Allow multiple selections
				'label_block' => true,
				'options' => $this->get_post_options(), // Define options in a separate method
			]
		);
	
		$this->end_controls_tab();
	
		// Add the Exclude tab
		$this->start_controls_tab(
			'bwdpppx_query_exclude_tab',
			[
				'label' => esc_html__('Exclude', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
	
		// Add the Exclude SELECT2 control
		$this->add_control(
			'bwdpppx_query_exclude',
			[
				'label' => esc_html__('Exclude Posts by ID', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'description' => esc_html__('Select specific posts to exclude.', BWDEB_ROOT_AUTHOR_PRO),
				'multiple' => true, // Allow multiple selections
				'label_block' => true,
				'options' => $this->get_post_options(), // Define options in a separate method
			]
		);
	
		$this->end_controls_tab();
	
		$this->end_controls_tabs();

		// Add the "Post Order By" control
		$this->add_control(
			'bwdpppx_query_order_by',
			[
				'label' => esc_html__('Post Order By', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'date', // Set a default value
				'options' => [
					'date' => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
					'title' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'menu_order' => esc_html__('Menu Order', BWDEB_ROOT_AUTHOR_PRO),
					'modified' => esc_html__('Last Modified', BWDEB_ROOT_AUTHOR_PRO),
					'comment_count' => esc_html__('Comment Count', BWDEB_ROOT_AUTHOR_PRO),
					'rand' => esc_html__('Random', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'bwdpppx_query_order',
			[
				'label' => esc_html__('Post Order', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'desc', // Set a default value (DESC)
				'options' => [
					'asc' => esc_html__('ASC', BWDEB_ROOT_AUTHOR_PRO),
					'desc' => esc_html__('DESC', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->end_controls_section();


		/*
			filter Settings ---------------------------------------------------------
		*/ 
		$this->start_controls_section(
			'bwdpppx_filter_settings_section',
			[
				'label' => esc_html__( 'Filter Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdpppx_show_filter' => 'yes'
				],
			]
		);

		// Add the Include SELECT2 control for categories
		$this->add_control(
			'bwdpppx_category_exclude',
			[
				'label' => esc_html__('Exclude Categories', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'description' => esc_html__('Select specific categories to exclude.', BWDEB_ROOT_AUTHOR_PRO),
				'multiple' => true, // Allow multiple selections
				'label_block' => true,
				'options' => $this->get_category_options(), // Define options in a separate method
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__text_align',
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
					'{{WRAPPER}} .category-filter-menu' => 'justify-content: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpppx_filter_item__section',
			[
				'label' => esc_html__( 'Items', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdpppx_filter_item_column_gap',
			[
				'label' => esc_html__( 'Column Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => [
					'unit' => 'px',
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-main-container' => 'grid-column-gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpppx-masonry-container' => 'column-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpppx_filter_item_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => [
					'unit' => 'px',
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-main-container' => 'grid-row-gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpppx-masonry-item' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpppx_filter_image__section',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpppx_filter_image_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdpppx-post-thumbnail, {{WRAPPER}} .bwdpppx-post-thumbnails',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpppx_filter_image_border',
				'selector' => '{{WRAPPER}} .bwdpppx-post-thumbnail, {{WRAPPER}} .bwdpppx-post-thumbnails',
			]
		);

		$this->add_control(
			'bwdpppx_filter_image__bg_br',
			[
				'label' => esc_html__( 'Background Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-thumbnail, {{WRAPPER}} .bwdpppx-post-thumbnails, {{WRAPPER}} .bwdpppx-post-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_image__br',
			[
				'label' => esc_html__( 'Image Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-thumbnail img, {{WRAPPER}} .bwdpppx-post-thumbnails img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_image_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-thumbnail img, {{WRAPPER}} .bwdpppx-post-thumbnails img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpppx_filter_image_box_shadow',
				'selector' => '{{WRAPPER}} .bwdpppx-post-thumbnail, {{WRAPPER}} .bwdpppx-post-thumbnails',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpppx_filter_title__section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdpppx_show_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_title__align',
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
					'{{WRAPPER}} .bwdpppx__title' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpppx_filter_title__typography',
				'selector' => '{{WRAPPER}} .bwdpppx__title',
			]
		);

		$this->add_control(
			'bwdpppx_filter_title__color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpppx__title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpppx_filter_title__background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdpppx-post-title',
			]
		);

		$this->add_control(
			'bwdpppx_filter_title__padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_title__margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-post-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpppx_filter_menu__section',
			[
				'label' => esc_html__( 'Filter Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdpppx_show_filter' => 'yes',
				],
			]
		);

		$this->start_controls_tabs(
			'bwdpppx_filter_menu__style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdpppx_filter_menu__style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpppx_filter_menu___typography',
				'selector' => '{{WRAPPER}} .category-filter-item',
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .category-filter-item' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .category-filter-item',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__border',
				'selector' => '{{WRAPPER}} .category-filter-item',
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .category-filter-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .category-filter-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		
		$this->add_responsive_control(
			'bwdpppx_filter_menu__self_gap',
			[
				'label' => esc_html__( 'Self spacing', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .category-filter-menu' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpppx_filter_menu__bottom_gap',
			[
				'label' => esc_html__( 'Bottom spacing', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .category-filter-menu' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		
		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdpppx_filter_menu__style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__color_h',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .category-filter-item:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__background_h',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .category-filter-item:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__border_h',
				'selector' => '{{WRAPPER}} .category-filter-item:hover',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdpppx_filter_menu__style_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdpppx_filter_menu__color_a',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .category-filter-item.active' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__background_a',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .category-filter-item.active',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpppx_filter_menu__border_a',
				'selector' => '{{WRAPPER}} .category-filter-item.active',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpppx_filter_load__section',
			[
				'label' => esc_html__( 'Load More Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdpppx_show_load_btn' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__text_align',
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
					'{{WRAPPER}} .bwdpppx-load-more-container' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpppx_filter_load__typography',
				'selector' => '{{WRAPPER}} .bwdpppx-load-more-button',
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdpppx_filter_load__color_h',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__color_bg',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffc107',
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button' => 'background-color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__color_bg_h',
			[
				'label' => esc_html__( 'Background Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button:hover' => 'background-color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpppx_filter_load__border',
				'selector' => '{{WRAPPER}} .bwdpppx-load-more-button',
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpppx_filter_load__margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpppx-load-more-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	// Define a method to get category options for the SELECT2 controls
	private function get_category_options() {
		$category_options = [];

		// Get all categories
		$categories = get_categories();

		foreach ($categories as $category) {
			$category_options[$category->term_id] = $category->name;
		}

		return $category_options;
	}

	// Define a method to get post options for the SELECT2 controls
	private function get_post_options() {
		$post_options = [];

		$query_args = [
			'post_type' => 'post', // You can change this to a custom post type if needed
			'posts_per_page' => -1, // Get all posts
		];

		$posts = new \WP_Query($query_args);

		if ($posts->have_posts()) {
			while ($posts->have_posts()) {
				$posts->the_post();
				$post_options[get_the_ID()] = get_the_title();
			}
		}

		wp_reset_postdata();

		return $post_options;
	}

	protected function render(){
        $settings = $this->get_settings_for_display();

		$postPerPage = $settings['bwdpppx_query_posts_per_page'];
		$includePosts = $settings['bwdpppx_query_include'];
		$excludePosts = $settings['bwdpppx_query_exclude'];
		$orderBy = $settings['bwdpppx_query_order_by'];
		$postOrder = $settings['bwdpppx_query_order'];
		$showTitle = $settings['bwdpppx_show_title'];
		$htmlTag = $settings['bwdpppx_title_tag'];


	
		$query_args = array(
			'post_type' => 'post', // You can change this to a custom post type if needed
			'posts_per_page' => -1,
			'orderby' => $orderBy, // Use the selected order by value
			'order' => $postOrder, // Set the post order based on the selected value
		);
        

		// Include specific posts if IDs are provided
		if (!empty($includePosts)) {
			$query_args['post__in'] = $includePosts;
		}
		// Exclude specific posts if IDs are provided

		if (!empty($excludePosts)) {
			$query_args['post__not_in'] = $excludePosts;
		}

		$posts = new \WP_Query($query_args);

		/* 
			//
			filter 
			//
		*/
		?>
		<div class="bwdpppx-post-for-container">
		<?php
		if( $settings['bwdpppx_show_filter'] == 'yes' ) {

			$excluded_category_ids = $settings['bwdpppx_category_exclude']; // Get the excluded category IDs from the widget settings

			$categories = get_categories([
				'exclude' => $excluded_category_ids, // Exclude the selected categories
			]);
			$category_filter_html = '<ul class="category-filter-menu">';
			$category_filter_html .= '<li class="category-filter-item active load-btn-active" data-filter="all">All</li>';
			foreach ($categories as $category) {
				$category_filter_html .= '<li class="category-filter-item load-btn" data-filter="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</li>';
			}
			$category_filter_html .= '</ul>';
			echo $category_filter_html;
		}

		/* 
			//
			layout 
			//
		*/
		if($settings['bwdpppx_masonry_layout'] == 'grid'){?>
			<div class="bwdpppx-post-main-section">
				<div class="bwdpppx-post-main-container"> <!-- Add the parent class here, outside the loop -->
					<?php
					if ($posts->have_posts()) {
						while ($posts->have_posts()) {
							$posts->the_post();

							$post_categories = wp_get_post_categories(get_the_ID());
							$category_classes = array_map(function ($category_id) {
								$category = get_category($category_id);
								return $category ? $category->slug : '';
							}, $post_categories);

							$category_class = implode(' ', $category_classes);

							?>
							<div class="bwdpppx-post-item" data-category="<?php echo esc_attr($category_class); ?>">
								<a href="<?php the_permalink(); ?>" class="bwdpppx-post-thumbnail-link">
									<?php if (has_post_thumbnail()): ?>
										<div class="bwdpppx-post-thumbnail">
											<?php the_post_thumbnail(); ?>
										</div>
									<?php endif; ?>
		
									<div class="bwdpppx-post-title">
										<?php if($showTitle == 'yes'){ ?>
										<<?php \Elementor\Utils::print_validated_html_tag( $htmlTag ); ?> class="bwdpppx__title">
											<?php the_title(); ?>
										</<?php \Elementor\Utils::print_validated_html_tag( $htmlTag ); ?>>
										<?php } ?>
									</div>
								</a>
							</div>
							<?php
						}
					}
					?>
				</div>

				<?php if($settings['bwdpppx_show_load_btn'] == 'yes' ){ ?>
					<!-- Add the "Load More" button here -->
					<div class="bwdpppx-load-more-container">
							<button class="bwdpppx-load-more-button">Load More</button>
					</div>
				<?php } ?>
				
			</div><?php
		}elseif($settings['bwdpppx_masonry_layout'] == 'masonry') {?>
			<div class="bwdpppx-post-main-section">
				<div class="bwdpppx-masonry-container"> <!-- Add the parent class here, outside the loop -->
					<?php
					if ($posts->have_posts()) {
						while ($posts->have_posts()) {
							$posts->the_post();
							$post_categories = wp_get_post_categories(get_the_ID());
								$category_classes = array_map(function ($category_id) {
									$category = get_category($category_id);
									return $category ? $category->slug : '';
								}, $post_categories);

								$category_class = implode(' ', $category_classes);
							?>
							<div class="bwdpppx-masonry-item bwdpppx-post-item" data-category="<?php echo esc_attr($category_class); ?>">
								<a href="<?php the_permalink(); ?>" class="bwdpppx-post-thumbnail-links">
									<?php if (has_post_thumbnail()): ?>
										<div class="bwdpppx-post-thumbnails">
											<?php the_post_thumbnail(); ?>
										</div>
									<?php endif; ?>
		
									<div class="bwdpppx-post-title">
										<?php if($showTitle == 'yes'){ ?>
											<<?php \Elementor\Utils::print_validated_html_tag( $htmlTag ); ?> class="bwdpppx__title">
												<?php the_title(); ?>
											</<?php \Elementor\Utils::print_validated_html_tag( $htmlTag ); ?>>
										<?php } ?>
									</div>
								</a>
							</div>
							<?php
						}
					}
					?>
				</div>
				<?php if($settings['bwdpppx_show_load_btn'] == 'yes' ){ ?>
					<!-- Add the "Load More" button here -->
					<div class="bwdpppx-load-more-container">
							<button class="bwdpppx-load-more-button">Load More</button>
					</div>
				<?php } ?>
			</div>
			<?php
		}
		?></div><?php

        wp_reset_postdata();

		?>
	
		<script>
			var postPerPage = "<?php echo $postPerPage; ?>";
		</script>
	
		<?php
    
    }

}
