<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDIBIconbox extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwbib-icon-box';
	}

	public function get_title() {
		return esc_html__( 'Icon Box', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-info-box bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'icon box', 'icon', 'info box'. 'box' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdib_pricing_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdib_icon_box_style',
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
					'style31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdib-icon-box_column_option',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( '1', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( '2', BWDEB_ROOT_AUTHOR_PRO ),
					'column3'  => esc_html__( '3', BWDEB_ROOT_AUTHOR_PRO ),
                    'column4' => esc_html__( '4', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( '5', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( '6', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'bwdib-grid%s-'
			]
		);
		$this->add_responsive_control(
			'bwdib-icon-box_column_gap',
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
					'{{WRAPPER}} .bwdib_gapc' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdib_gapr' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdib-icon-box_row_gap',
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
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdib_icon_box_content',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->start_controls_tabs(
			'bwdib_icon_box_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_content_tab',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_link',
			[
				'label' => esc_html__( 'Box Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_style_tab',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_style',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle i' => 'color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle svg' => 'fill: {{VALUE}}; stroke: {{VALUE}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_bg_color',
			[
				'label' => esc_html__( 'Icon BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-color, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-colorb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-colora::after' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_bg_solid_color',
			[
				'label' => esc_html__( 'Shape Solid BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapeb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapea::after' => 'background-color: {{VALUE}}!important',
					' {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapebb::before' => 'border-right-color: {{VALUE}}!important; border-bottom-color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_shape_bg_color_heading',
			[
				'label' => esc_html__( 'Shape Gradient Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_shape_bg_gradient_color',
				'types' => ['gradient' ],
				'exclude' => [ 'image', 'classic' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapeb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapea::after',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_all_border_color',
			[
				'label' => esc_html__( 'All Visible Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordera::after' => 'border-color: {{VALUE}}!important; outline-color: {{VALUE}}!important;',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordertrb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordertra::after' => 'border-top-color: {{VALUE}}!important; border-right-color: {{VALUE}}!important;',
					' {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderbb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderaa::after' => 'background-color: {{VALUE}}!important;',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle svg' => 'height: {{SIZE}}{{UNIT}}; width: {{size}}{{unit}}',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_style',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-title' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdib_icon_box_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-title',
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_style',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-description' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdib_icon_box_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-description',
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_description_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-iconstyle i' => 'color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-iconstyle svg' => 'fill: {{VALUE}}; stroke: {{VALUE}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_hover_color',
			[
				'label' => esc_html__( 'Title Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-icon-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_hover_color',
			[
				'label' => esc_html__( 'Des Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-icon-description' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'bwdib_icon_box_list',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', BWDEB_ROOT_AUTHOR_PRO ),
					]
				],
				'title_field' => '{{{ bwdib_icon_box_title }}}',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_text_align',
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
					'{{WRAPPER}} .bwdib-icon-content-align' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'bwdib_icon_box_style_tab',
			[
				'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
			]
		);
		$this->start_controls_tabs(
			'bwdib_icon_box_style_tabs'
		);
		$this->start_controls_tab(
			'bwdib_icon_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper-bg, {{WRAPPER}} .bwd-icon-box-wrapper-bgb::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdib_icon_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper-bg',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper, {{WRAPPER}} .bwd-icon-content-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdib_icon_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdib_icon_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-box-wrapper-bg, {{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-box-wrapper-bgb',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper:hover, {{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-content-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section()
;    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$column_gap = $settings['bwdib-icon-box_column_gap'];
		if ( ! empty( $settings['bwdib_icon_box_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdib_icon_box_link', $settings['bwdib_icon_box_link'] );
		}

		if ('style1' === $settings['bwdib_icon_box_style']) { 
		?>
		<div class="bwd-icon-box-1">
			<div class="container-fluid">
				<div class="row bwdib_gapr bwdib-style-wrapper">
				<?php   
					if( $settings['bwdib_icon_box_list'] ) {
						foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>

						<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
							<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
								<div class="bwd-wrapper-box">
									<div class="bwd-sub-icon">
										<div class="bwd-icon-part bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
									</div>
									<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
										<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
										<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?> </div>
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
		} elseif ('style2' === $settings['bwdib_icon_box_style']) {
		?>
		<div class="bwd-icon-box-2">
			<div class="container-fluid">
				<div class="row bwdib_gapr bwdib-style-wrapper">
				<?php   
					if( $settings['bwdib_icon_box_list'] ) {
						foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>

						<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
							<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
								<div class="bwd-wrapper-box">
									<div class="bwd-box-shado">
										<div class="bwd-sub-icon">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
									</div>
									<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
										<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
										<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
									</div>
									<div class="bwd-box-footer bwd-all-shape">
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
		} elseif ('style3' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-3">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-wrapper-box">
										<div class="bwd-box-shado bwd-all-shapeb">
											<div class="bwd-sub-icon">
												<div class="bwd-icon-part bwd-icon-bg-color">
													<span class="bwd-iconstyle">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</span>
												</div>
											</div>
										</div>
											<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style4' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-4">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-wrapper-box">
										<div class="bwd-sub-icon bwd-all-shape">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shapeb"></div>
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
		} elseif ('style5' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-5">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part">
										<div class="bwd-sub-icon bwd-all-shape bwd-all-shapeb">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape"></div>
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
		} elseif ('style6' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-6">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-icon-box-wrapper-bg">
										<div class="bwd-sub-icon">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape">
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
		} elseif ('style7' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-7">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-all-shapea bwd-icon-box-wrapper-bg">
										<div class="bwd-sub-icon">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style8' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-8">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part">
										<div class="bwd-sub-icon bwd-icon-bg-color bwd-icon-bg-colora bwd-icon-bg-colorb">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shapeb">
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
		} elseif ('style9' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-9">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb">
										<div class="bwd-sub-icon bwd-all-shape">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape"></div>
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
		} elseif ('style10' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-10">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-all-shapea bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style11' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-11">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-icon-box-wrapper-bg">
										<div class="bwd-sub-icon bwd-all-shape">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape">
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
		} elseif ('style12' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-12">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg bwd-all-border">
										<div class="bwd-sub-icon bwd-icon-bg-color bwd-icon-bg-colora bwd-icon-bg-colorb">
											<div class="bwd-icon-part">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape">
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
		} elseif ('style13' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-13">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-sub-icon bwd-icon-bg-colorb">
											<div class="bwd-icon-part bwd-icon-box-wrapper-bg">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shapeb">
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
		} elseif ('style14' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-14">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part">
										<div class="bwd-sub-icon bwd-icon-bg-color">
											<div class="bwd-icon-part">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part bwd-all-shape">
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
		} elseif ('style15' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-15">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-icon-box-wrapper-bg">
									<div class="bwdib-icon-content-align">
										<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
										<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
									</div>
										<div class="bwd-service-icon">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
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
		} elseif ('style16' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-16">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part">
										<div class="bwd-first-box">
											<div class="bwd-sub-icon">
												<div class="bwd-icon-part bwd-icon-bg-color">
													<span class="bwd-iconstyle">
														<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</span>
												</div>
											</div>
										</div>
										<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
										</div>
										<div class="bwd-footer-part"></div>
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
		} elseif ('style17' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-17">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-all-border bwd-all-bordertrb bwd-all-bordertra">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style18' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-18">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bgb">
									<div class="bwdib-icon-content-align">
										<div class="bwd-icon-title bwd-all-shape"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
									</div>
										<div class="bwd-service-icon bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style19' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-19">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bgb">
										<div class="bwd-service-icon bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style20' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-20">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part">
										<div class="bwd-service-icon bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwd-service-content bwd-all-shape bwd-icon-box-wrapper-bgb bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style21' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-21">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg bwd-all-shapeb bwd-all-shapea">
										<div class="bwd-service-icon bwd-icon-bg-color bwd-icon-bg-colorb">
											<div class="bwd-icon-box bwd-icon-bg-colora bwd-icon-bg-colorb">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style22' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-22">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg bwd-all-borderb">
										<div class="bwd-service-icon bwd-all-border bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwd-service-content bwdib-icon-content-align bwd-all-border bwd-all-borderaa bwd-all-borderbb">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style23' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-23">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-service-content bwd-all-shape">
											<div class="bwd-service-icon bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
											<div class="bwd-icon-title bwdib-icon-content-align"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-description bwd-all-shapea"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style24' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-24">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-bg-colorb bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-icon-bg-colora bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style25' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-25">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb">
										<div class="bwd-service-icon bwd-icon-bg-color bwd-icon-bg-colorb">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwd-service-content bwd-icon-box-wrapper-bg bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style26' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-26">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapea bwd-icon-box-wrapper-bgb">
										<div class="bwd-service-icon">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style27' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-27">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-all-shapea bwd-all-shapebb bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style28' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-28">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-all-shape bwd-icon-bg-colorb">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style29' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-29">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-all-shapeb bwd-icon-bg-colora">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style30' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-30">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
		} elseif ('style31' === $settings['bwdib_icon_box_style']) {
			?>
			<div class="bwd-icon-box-31">
				<div class="container-fluid">
					<div class="row bwdib_gapr bwdib-style-wrapper">
					<?php   
						if( $settings['bwdib_icon_box_list'] ) {
							foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>
	
							<div class="column_number bwdib_gapc col-xl-4 col-lg-4 col-md-4 col-sm-6">
							<?php echo '<div class="elementor-repeater-item-' . esc_attr__( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
									<div class="bwd-box-part bwd-all-shapeb bwd-icon-box-wrapper-bg">
										<div class="bwd-service-icon bwd-all-shape bwd-all-shapeb">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
										<div class="bwdib-icon-content-align">
											<div class="bwd-icon-title"><?php echo esc_html__( $item['bwdib_icon_box_title'] ); ?></div>
											<div class="bwd-icon-description"><?php echo esc_html__( $item['bwdib_icon_box_description'] ); ?></div>
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
