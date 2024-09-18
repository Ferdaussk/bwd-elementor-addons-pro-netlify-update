<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDASAwesomeStep extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbasawesomestep';
	}

	public function get_title() {
		return esc_html__( 'Awesome Step', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-steps bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'step', 'arrow', 'awesome step', 'bwd' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdas_step_choose_style',
		    [
		        'label' => esc_html__('Choose Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdas_awesome_step_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'description' => esc_html__( 'If you use more than 5 items in a section should be used content section width full for better experience.', BWDEB_ROOT_AUTHOR_PRO ),
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
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdas_step_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdas_step_content_number', [
				'label' => esc_html__( 'Step Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper .bwd-step-num' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_number_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-num' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_content_number_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-numb::before',
			]
		);
        $repeater->add_control(
			'bwdas_step_content_number_background_important_note',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Note: Number bg color will be applicable for style (8, 12, 15, 16, 18, 20, 22, 25). Rest of the number background will be changed by shape bg color control.', BWDEB_ROOT_AUTHOR_PRO ),
				'content_classes' => 'bwd-number-bg',
			]
		);
		$repeater->add_control(
			'bwdas_step_content_title', [
				'label' => esc_html__( 'Step Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
                'separator' => 'before',
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
       
        $repeater->add_control(
			'bwdas_step_content_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper .bwd-step-main-title' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-main-title ' => 'color: {{VALUE}} ',
				],
			]
		);
        $repeater->add_responsive_control(
			'bwdas_step_content_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-main-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdas_step_content_description', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
                'separator' => 'before',
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-content .bwd-description' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-content .bwd-description' => 'color: {{VALUE}}',
				],
			]
		);
         $repeater->add_responsive_control(
			'bwdas_step_content_description_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-content .bwd-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'separator' => 'before',
				'default' => [
					'value' => 'fas fa-cogs',
					'library' => 'solid',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_icon_number_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numb::before',
			]
		);
        $repeater->add_control(
			'bwdas_step_icon_number_background_important_note',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Note: Icon bg color will be applicable in which bg color has available. Where get gradient color choose gradient option.', BWDEB_ROOT_AUTHOR_PRO ),
				'content_classes' => 'bwd-icon-bg',
			]
		);
        $repeater->add_control(
			'bwdas_step_content_shape_background_title',
			[
				'label' => esc_html__( 'Shape Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_content_shape_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper .bwd-step-num-gbl, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-gbla::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-gblb::before',
			]
		);
         $repeater->add_control(
			'bwdas_step_content_shape_background_important_note',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Note: Where get gradient color choose gradient option.', BWDEB_ROOT_AUTHOR_PRO ),
				'content_classes' => 'bwd-number-bg',
			]
		);
         $repeater->add_control(
			'bwdas_step_content_shape_shadow',
			[
				'label' => esc_html__( 'Shape Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'description' => esc_html__( 'To Change shadow color or remove shadow, alpha value should be transparent(This control work only in style 6, 19, 22, 27, 31)', BWDEB_ROOT_AUTHOR_PRO ),
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-shape-shadow::before' => 'background-color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_box_background_title',
			[
				'label' => esc_html__( 'Box Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_content_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-box, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-boxb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-boxa::after',
			]
		);
        $repeater->add_control(
			'bwdas_step_icon_number_border_color',
			[
				'label' => esc_html__( 'All Visible Border Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__( 'Some styles have borders it will be applicable only for those.', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-num, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numa::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortrans::before' => 'border-top-color: {{VALUE}}; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: transparent;',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortrans' => 'border-top-color: transparent; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortransparent' => 'border-top-color: {{VALUE}}; border-left-color: transparent; border-right-color: {{VALUE}}; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-borritrans' => 'border-top-color: {{VALUE}}; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numa::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numback::before' => 'background-color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_arrow_show_hide',
			[
				'label' => esc_html__( 'Forward Backward Option', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'If arrow has available',
				'label_on' => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'default' => 'no',
			]
		);
        $repeater->add_control(
			'bwdas_step_arrow_on_off',
			[
				'label' => esc_html__( 'Show Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'If arrow has available',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdas_step_content_repeater_list',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					
					[
						'bwdas_step_content_number' => esc_html__( '1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_title' => esc_html__( 'Title #1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
					[
						'bwdas_step_content_number' => esc_html__( '2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_title' => esc_html__( 'Title #2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
					[
						'bwdas_step_content_number' => esc_html__( '3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_title' => esc_html__( 'Title #3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
				],
				'title_field' => '{{{ bwdas_step_content_title }}}',
                
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'bwdas_step_style',
		    [
		        'label' => esc_html__('Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_number_typography',
                'label' => esc_html__('Number Typography',BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwd-step-num',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_title_typography',
                'label' => esc_html__('Title Typography',BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwd-step-main-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_description_typography',
                'label' => esc_html__('Description Typography',BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwd-step-content .bwd-description',
			]
		);
        $this->add_responsive_control(
			'bwdas_step_content_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-step-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdas_step_content_item_box_padding',
			[
				'label' => esc_html__( 'Box Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-bg-box, {{WRAPPER}} .bwd-step-bg-boxb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->start_controls_tabs(
			'bwdas_step_style_tabs'
		);
        $this->start_controls_tab(
			'bwdas_step_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_style_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdas_step_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdas_step_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_responsive_control(
			'bwdas_step_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-style' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdas_step_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-style' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_tab();
        $this->start_controls_tab(
			'bwdas_step_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_style_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdas_step_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdas_step_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        
    }

    protected function render() {

        $settings = $this->get_settings_for_display();


        if ('style1' === $settings['bwdas_awesome_step_style']) { 
        ?>
         <div class="bwd-step-style bwd-step-style-1">
            <div class="container-fluid">
                <div class="row">
                    <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
                        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>

                        <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                            <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                                <div class="bwd-step-wrapper">
                                    <div class="bwd-step-item bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                        <div class="bwd-step-icon bwd-step-icon-bortransparent bwd-step-icon-numb"><span class="bwdib-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></span></div>
                                        <div class="bwd-step-content bwd-step-icon-bortrans bwd-step-icon-numa <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>">
                                            <div class="bwd-step-number bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                            <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                            <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style2' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-2">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-num-gbla bwd-step-bg-box">
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-icon bwd-step-icon-bg"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num bwd-step-num-gbl"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style3' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-3">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gbl <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style4' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-4">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item">
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-number bwd-step-num-gbl">
                                         <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content bwd-step-bg-box bwd-step-arrowb bwd-step-icon-num">
                                        <div class="show-arrow bwd-step-num-gbl <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>"></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style5' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-5">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-arrowb">
                                <div class="show-arrow <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>"></div>
                                <div class="bwd-step-item bwd-step-bg-boxb bwd-step-num-gbla <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style6' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-6">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-bg-box bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>">
                                <div class="bwd-step-item6">
                                    <div class="bwd-step-number bwd-step-num-gbla bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style7' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-7">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-num-gbla">
                                    <div class="bwd-step-content bwd-step-bg-box">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gbl">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style8' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-8">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-icon-borritrans bwd-step-icon-numback bwd-step-bg-box">
                                    <div class="bwd-step-number-eight bwd-step-num-bg">
                                        <div class="bwd-step-title-eight bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style9' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-9">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-bg-box">
                                    <div class="bwd-step-number">
                                        <div class="bwd-title bwd-step-num bwd-step-num-gbl bwd-step-num-gblb bwd-step-num-gbla"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style10' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-10">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                 <div class="show-arrow <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>"></div>
                                <div class="bwd-step-item bwd-step-bg-box bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gbla bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style11' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-11">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-eleven bwd-step-bg-boxb bwd-step-num-gbla <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>">
                                    <div class="bwd-step-icon bwd-step-icon-bg"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-number-eleven">
                                        <div class="bwd-step-title-eleven bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style12' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-12">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-num-gbla bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                <div class="bwd-step-item bwd-step-bg-boxb bwd-step-bg-boxa <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-icon bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-number">
                                        <div class="bwd-title bwd-step-num-bg bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style13' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-13">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-thirteen bwd-step-bg-boxb">
                                    <div class="bwd-step-number-thirteen bwd-step-num-gblb">
                                        <div class="bwd-step-title-thirteen bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style14' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-14">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-bg-box bwd-step-bg-boxb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-number bwd-step-number-fourteen bwd-step-num-gbl bwd-step-num-gbla bwd-step-num-gblb">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon bwd-step-icon-fourteen bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style15' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-15">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-fifteen bwd-step-bg-boxb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-number-fifteen bwd-step-num-bg">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon bwd-step-icon-bg"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style16' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-16">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-number bwd-step-num-gbl bwd-step-num-gblb">
                                        <div class="bwd-step-num-bg bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style17' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-17">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-num-gbla bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                <div class="bwd-step-item bwd-step-bg-box">
                                    <div class="bwd-step-number">
                                        <div class="bwd-step-num bwd-step-num-gbl <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon bwd-step-icon-bg"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style18' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-18">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-num-gblb bwd-step-num-gbla bwd-step-icon-num <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                 <div class="show-arrow bwd-step-num-gbl <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>"></div>
                                <div class="bwd-step-item bwd-step-bg-box">
                                    <div class="bwd-step-number-eighteen bwd-step-num-bg">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style19' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-19">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-shape-shadow">
                                <div class="bwd-step-item-nineteen">
                                    <div class="bwd-step-number bwd-step-num-gbl bwd-step-num-gblb bwd-step-num-gbla">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content bwd-step-bg-box">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style20' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-20">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-twenty">
                                    <div class="bwd-step-number bwd-step-num-bg">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content bwd-step-bg-box bwd-step-num-gblb">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style21' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-21">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-icon bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-number bwd-step-num bwd-step-num-gbl"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style22' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-22">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-bg-box">
                                    <div class="bwd-step-number bwd-step-num-bg">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon bwd-step-icon-ttwo bwd-step-num-gbl bwd-shape-shadow"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style23' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-23">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-tthree <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="show-arrow <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>"></div>
                                    <div class="bwd-step-content bwd-step-bg-box">
                                        <div class="bwd-step-number bwd-step-num-gbl">
                                            <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                        </div>
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style24' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-24">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-num-gbla bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-shape bwd-step-num-gbla bwd-step-num-gblb bwd-step-icon-num"></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-icon bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num bwd-step-num-gbl bwd-step-num-gblb bwd-step-num-gbla"><?php echo esc_html($item['bwdas_step_content_number']); ?>
                                    <div class="show-arrow bwd-step-num-gbl <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>"></div>
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
        } elseif ('style25' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-25">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-item-tfive bwd-step-bg-box bwd-step-num-gblb bwd-step-icon-borritrans bwd-step-icon-numback <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?><?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>">
                                    <div class="bwd-step-number bwd-step-num-gblb bwd-step-num-gbla bwd-step-num-bg">
                                    <div class="show-arrow bwd-step-num-gbl <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>"></div>
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
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
        } elseif ('style26' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-26">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-num-gbla">
                                    <div class="bwd-step-content bwd-step-bg-box">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gbl">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        } elseif ('style27' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-27">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-shaddow bwd-shape-shadow"></div>
                                <div class="bwd-step-item bwd-step-bg-box bwd-step-num-gblb bwd-step-num-gbla">
                                    <div class="bwd-step-number bwd-step-num-gbl bwd-step-num-gblb bwd-step-num-gbla">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style28' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-28">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                    <div class="bwd-step-number bwd-step-num-gbl bwd-step-num-gbla">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    </div>
                                    <div class="bwd-step-content bwd-step-content-teight bwd-step-bg-box">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style29' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-29">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item bwd-step-num-gblb bwd-step-bg-box">
                                    <div class="bwd-step-number bwd-step-num bwd-step-num-gbl"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                    <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                    <div class="bwd-step-content">
                                        <div class="bwd-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style30' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-30">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper bwd-step-num-gbla bwd-step-bg-box <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">
                                <div class="bwd-step-shape bwd-step-icon-bortrans bwd-step-icon-numback <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo ' bwdas_arrow_show';} ?>"></div>
                                <div class="bwd-step-item bwd-step-bg-box">
                                    <div class="bwd-step-content">
                                        <div class="bwd-step-icon bwd-step-icon-numb"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div>
                                            <div class="bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
                                            <div class="bwd-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        </div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
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
        } elseif ('style31' === $settings['bwdas_awesome_step_style']) {
        ?>
        <div class="bwd-step-style bwd-step-style-31">
            <div class="container-fluid">
                <div class="row">
                <?php   
                    if( $settings['bwdas_step_content_repeater_list'] ) {
				        foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
                    <div class="unlimited-step col-lg-3 col-md-4 col-sm-6">
                        <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
                            <div class="bwd-step-wrapper">
                                <div class="bwd-step-item-tone bwd-shape-shadow">
                                    <div class="bwd-step-content bwd-step-bg-box">
                                        <div class="bwd-step-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </div>
                                        <div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
                                        <div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
                                    </div>
                                    <div class="bwd-step-number bwd-step-num-gbl bwd-step-num-gblb bwd-step-num-gbla">
                                        <div class="bwd-step-title bwd-step-num"><?php echo esc_html($item['bwdas_step_content_number']); ?></div>
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
        }
        
    }
}