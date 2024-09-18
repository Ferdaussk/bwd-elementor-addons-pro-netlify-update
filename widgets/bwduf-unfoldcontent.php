<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdufUnfoldcontent extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwduf-unfoldcontent';
	}

	public function get_title() {
		return esc_html__( 'Unfold Content', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'unfold-content bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'unfold', 'content', 'bwd', 'reveal' ];
	}

	public function get_script_depends() {
		return [ 'bwduf-unfold-content-category' ];
	}

	public function select_elementor_page( $type ) {
		$args  = [
			'bwduf_tax_query'      => [
				[
					'taxonomy' => 'elementor_library_type',
					'field'    => 'slug',
					'terms'    => $type,
				],
			],
			'post_type'      => 'elementor_library',
			'posts_per_page' => -1,
		];
		$query = new \WP_Query( $args );
		$posts = $query->posts;
		foreach ( $posts as $post ) {
			$items[ $post->ID ] = $post->post_title;
		}
		if ( empty( $items ) ) {
			$items = [];
		}
		return $items;
	}
	protected function register_controls() {
		$this->start_controls_section(
			'bwduf_unfold_content_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwduf_unfold_content_show_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwduf_unfold_content_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Unfold title', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_content_title_tag',
			[
				'label' => esc_html__( 'Title Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1' => esc_html__( 'H1', BWDEB_ROOT_AUTHOR_PRO ),
					'h2' => esc_html__( 'H2', BWDEB_ROOT_AUTHOR_PRO ),
					'h3'  => esc_html__( 'H3', BWDEB_ROOT_AUTHOR_PRO ),
					'h4' => esc_html__( 'H4', BWDEB_ROOT_AUTHOR_PRO ),
					'h5' => esc_html__( 'H5', BWDEB_ROOT_AUTHOR_PRO ),
					'h6' => esc_html__( 'H6', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_title_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwduf-unfold-title' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_content',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        
		$this->add_control(
			'bwduf_unfold_content_type',
			[
				'label'   => __( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bwduf_unfold_text_editor',
				'options' => [
					'bwduf_unfold_text_editor' => __( 'Plain / HTML Text', BWDEB_ROOT_AUTHOR_PRO ),
					'bwduf_unfold_saved_primary_section' => __( 'Saved Section', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$saved_primary_sections = ['0' => __( 'Choose Section', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_primary_sections = $saved_primary_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwduf_primary_saved_section',
			[
				'label'     => __( 'Sections', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_primary_sections,
				'default'   => '0',
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_saved_primary_section',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_content_desc',
			[
				'label' => esc_html__( 'Unfold Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_align',
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
					'justify' => [
						'title' => esc_html__( 'Justify', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_btn',
		    [
		        'label' => esc_html__('Button',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwduf_unfold_btn_text_show',
			[
				'label' => esc_html__( 'Button Text Show', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_text',
			[
				'label' => esc_html__( 'Unfold Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Show More', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_fold_btn_text',
			[
				'label' => esc_html__( 'Fold Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Show Less', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_icon_show',
			[
				'label' => esc_html__( 'Icon Show', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'bwduf_unfold_btn_icon',
			[
				'label' => esc_html__( 'Unfold Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-down',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_fold_btn_icon',
			[
				'label' => esc_html__( 'Fold Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_icon_position',
			[
				'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'After', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwduf-btn-icon i, {{WRAPPER}} .bwduf-btn-icon svg' => 'order: {{VALUE}};',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_button_size',
			[
				'label' => esc_html__( 'Button Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'medium',
				'options' => [
					'small' => esc_html__( 'Small', BWDEB_ROOT_AUTHOR_PRO ),
					'medium' => esc_html__( 'Medium', BWDEB_ROOT_AUTHOR_PRO ),
					'large' => esc_html__( 'Large', BWDEB_ROOT_AUTHOR_PRO ),
					'extra-large' => esc_html__( 'Extra Large', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'bwduf_btn-size-',
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwduf-btn-inner' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_content_fade_effect',
		    [
		        'label' => esc_html__('Fade Effect',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwduf_unfold_fade_effect',
			[
				'label' => esc_html__( 'Fade Effect Show', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_fade_effect_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'custom' ],
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
					'{{WRAPPER}} .bwdhf-overlay-color' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_fade_effect' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_content_box_style',
		    [
		        'label' => esc_html__('Box',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwduf_unfold_style_tabs'
		);

		$this->start_controls_tab(
			'bwduf_unfold_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_box_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_box_border',
				'selector' => '{{WRAPPER}} .bwduf-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_box_shadow',
				'selector' => '{{WRAPPER}} .bwduf-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwduf_unfold_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_box_hover_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_box_hover_border',
				'selector' => '{{WRAPPER}} .bwduf-wrapper:hover',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_box_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_hover_box_shadow',
				'selector' => '{{WRAPPER}} .bwduf-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_fold_section',
			[
				'label' => esc_html__( 'Fold', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_fold_height',
			[
				'label' => esc_html__( 'Fold Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_fold_transition',
			[
				'label' => esc_html__( 'Fold Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0.3,
						'max' => 10,
						'step' => 0.1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 1,
				],
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'transition: {{SIZE}}s;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_content_title_style',
		    [
		        'label' => esc_html__('Title',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_typography',
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_content_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-unfold-title .bwduf-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_text_shadow',
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_text_stroke',
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_border',
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-unfold-title .bwduf-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_content_title_box_shadow',
				'selector' => '{{WRAPPER}} .bwduf-unfold-title .bwduf-title',
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-unfold-title .bwduf-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-unfold-title .bwduf-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_show_title' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwduf_unfold_content_typography',
				'selector' => '{{WRAPPER}} .bwduf-content p',
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_content_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-content p' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_content_text_shadow',
				'selector' => '{{WRAPPER}} .bwduf-content p',
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_content_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-content',
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_content_border',
				'selector' => '{{WRAPPER}} .bwduf-content',
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_content_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_content_type' => 'bwduf_unfold_text_editor',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_button_style',
		    [
		        'label' => esc_html__('Button',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwduf_unfold_btn_text_style_tabs'
		);

		$this->start_controls_tab(
			'bwduf_unfold_btn_text_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_text_heading',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwduf_unfold_btn_typography',
				'selector' => '{{WRAPPER}} .bwduf-btn-text',
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-btn-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_btn_text_shadow',
				'selector' => '{{WRAPPER}} .bwduf-btn-text',
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_icon_heading',
			[
				'label' => esc_html__( 'Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwduf-show-hide-btn svg' => 'width: {{SIZE}}px;',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_icon_spacing',
			[
				'label' => esc_html__( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-btn-icon' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn i, {{WRAPPER}} .bwduf-show-hide-btn svg' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_btn_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_btn_border',
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_btn_box_shadow',
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwduf_unfold_btn_text_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_text_hover_heading',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwduf_unfold_btn_hover_typography',
				'selector' => '{{WRAPPER}} .bwduf-btn-text:hover',
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_hover_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-btn-text:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_btn_hover_text_shadow',
				'selector' => '{{WRAPPER}} .bwduf-btn-text:hover',
				'condition' => [
					'bwduf_unfold_btn_text_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_icon_hover_heading',
			[
				'label' => esc_html__( 'Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_hover_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwduf-show-hide-btn:hover svg' => 'width: {{SIZE}}px;',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwduf_unfold_btn_hover_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn:hover i, {{WRAPPER}} .bwduf-show-hide-btn:hover svg' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwduf_unfold_btn_icon_show' => 'yes',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_btn_hover_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwduf_unfold_btn_hover_border',
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn:hover',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_btn_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwduf-show-hide-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwduf_unfold_btn_hover_box_shadow',
				'selector' => '{{WRAPPER}} .bwduf-show-hide-btn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwduf_unfold_fade_style',
		    [
		        'label' => esc_html__('Fade Color',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwduf_unfold_fade_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdhf-overlay-color',
			]
		);
		$this->add_responsive_control(
			'bwduf_unfold_fade_padding',
			[
				'label' => esc_html__( 'padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhf-overlay-color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
    $settings = $this->get_settings_for_display();
	$content_type = $settings['bwduf_unfold_content_type'];
	$unfold_title = $settings['bwduf_unfold_content_title'];
	$unfold_content = $settings['bwduf_unfold_content_desc'];
	$show_title = $settings['bwduf_unfold_content_show_title'];
	$title_tag = $settings['bwduf_unfold_content_title_tag'];
	$unfold_btn = $settings['bwduf_unfold_btn_text'];
	$fold_btn = $settings['bwduf_unfold_fold_btn_text'];
	$fade_effect = $settings['bwduf_unfold_fade_effect'];
	$btn_text = $settings['bwduf_unfold_btn_text_show'];
	?>
     <div class="bwduf-wrapper bwduf-common">
		<?php if( $show_title === 'yes' ) : ?>
		<div class="bwduf-unfold-title"><<?= $title_tag; ?> class="bwduf-title"><?= esc_html($unfold_title); ?></<?= $title_tag; ?>></div>
		<?php endif; ?>
        <div class="bwduf-content">
		<?php if('bwduf_unfold_saved_primary_section' === $content_type ) :
			echo bwdeb_save_plugin()->frontend->get_builder_content_for_display( $settings['bwduf_primary_saved_section'] ); 
		elseif ('bwduf_unfold_text_editor' === $content_type) : ?>
            <p><?= $unfold_content; ?></p>
			<?php endif; ?>
            <div class="bwdhf-overlay-color <?= $fade_effect; ?>"></div>
        </div>
        <div class="bwduf-btn-wrapper">
            <div class="bwduf-btn-inner">
                <span class="bwduf-show-hide-btn bwduf-show-btn">
                    <span class="bwduf-btn-icon <?= $btn_text; ?>">
						<?php \Elementor\Icons_Manager::render_icon( $settings['bwduf_unfold_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						<?php if($btn_text === 'yes') : ?>
						<span class="bwduf-btn-text"><?= esc_html($unfold_btn); ?></span>
						<?php endif; ?>
					</span>
                </span>
                <span class="bwduf-show-hide-btn bwduf-hide-btn ">
                    <span class="bwduf-btn-icon <?= $btn_text; ?>">
						<?php \Elementor\Icons_Manager::render_icon( $settings['bwduf_fold_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						<?php if($btn_text === 'yes') : ?>
						<span class="bwduf-btn-text"><?= esc_html($fold_btn); ?></span>
						<?php endif; ?>
					</span>
                </span>
            </div>
        </div>
    </div>
	<?php
   
    }

}

