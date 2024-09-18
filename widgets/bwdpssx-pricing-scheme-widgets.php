<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdpssx_PricingSwitcher_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdpssx-pricing-switcher-scheme', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Pricing Scheme Switcher', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-price-table';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		// Start General Section.
		$this->start_controls_section(
			'bwdpssx_section_general',
			[
				'label' => esc_html__( 'General', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Select Layout Design.
		$this->add_control(
			'bwdpssx_design', [
				'label'         	=> esc_html__('Layouts', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SELECT,
				'options' 			=> [
					'design-1'  	=> esc_html__('Design 1', BWDEB_ROOT_AUTHOR_PRO),
					'design-2'  	=> esc_html__('Design 2', BWDEB_ROOT_AUTHOR_PRO),
					'design-3'  	=> esc_html__('Design 3', BWDEB_ROOT_AUTHOR_PRO),
					'design-4'  	=> esc_html__('Design 4', BWDEB_ROOT_AUTHOR_PRO),
					'design-5'  	=> esc_html__('Design 5', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default'       	=> 'design-1',
			]
		);

		// Select Plan Number.
		$this->add_control(
			'bwdpssx_plan_count', [
				'label'         	=> esc_html__('Plans', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::NUMBER,
				'default'       	=> 3,
				'min'           	=> 1,
				'max'           	=> 4,
			]
		);

		// Plan Grid Number.
		$this->add_responsive_control(
			'bwdpssx_grid_columns', [
				'label'         	=> esc_html__('Grid Columns', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SELECT,
				'default'       	=> '3',
				'tablet_default' 	=> '2',
				'mobile_default' 	=> '1',
				'options' 			=> [
					'1' 			=> '1',
					'2' 			=> '2',
					'3' 			=> '3',
					'4' 			=> '4',
				],
				'prefix_class'      => 'elementor-grid%s-',
				'frontend_available'=> true,
				'selectors'         => [
					'.elementor-msie {{WRAPPER}} .elementor-product-item' => 'width: calc( 100% / {{SIZE}} )',
				]
			]
		);

		// Plan Switcher.
		$this->add_control(
			'bwdpssx_plan_switcher', [
				'label' 			=> esc_html__('Plan Switcher', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 			=> esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' 		=> esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' 		=> 'yes',
				'default' 			=> 'yes',
			]
		);

		// Switcher 1.
		$this->add_control(
			'bwdpssx_plan_switcher1', [
				'label'         	=> esc_html__('Switcher 1', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::TEXT,
				'default'       	=> esc_html__('MONTHLY', BWDEB_ROOT_AUTHOR_PRO),
				'condition'     	=> [
					'bwdpssx_plan_switcher' => 'yes',
				],
			]
		);

		// Switcher 2.
		$this->add_control(
			'bwdpssx_plan_switcher2', [
				'label'         	=> esc_html__('Switcher 2', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::TEXT,
				'default'       	=> esc_html__('YEARLY', BWDEB_ROOT_AUTHOR_PRO),
				'condition'     	=> [
					'bwdpssx_plan_switcher' => 'yes',
				],
			]
		);

		//Static Currency Symbol.
        $this->add_control(
            'bwdpssx_currency_symbol', [
                'label'             => esc_html__('Currency Symbol', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => [
                    ''              => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO ),
                    'dollar'        => '&#36; ' . _x('Dollar', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'euro'          => '&#128; ' . _x('Euro', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'baht'          => '&#3647; ' . _x('Baht', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'franc'         => '&#8355; ' . _x('Franc', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'guilder'       => '&fnof; ' . _x('Guilder', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'krona'         => 'kr ' . _x('Krona', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'lira'          => '&#8356; ' . _x('Lira', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'peseta'        => '&#8359 ' . _x('Peseta', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'peso'          => '&#8369; ' . _x('Peso', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'pound'         => '&#163; ' . _x('Pound Sterling', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'real'          => 'R$ ' . _x('Real', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'ruble'         => '&#8381; ' . _x('Ruble', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'rupee'         => '&#8360; ' . _x('Rupee', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'indian_rupee'  => '&#8377; ' . _x('Rupee (Indian)', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'shekel'        => '&#8362; ' . _x('Shekel', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'yen'           => '&#165; ' . _x('Yen/Yuan', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'won'           => '&#8361; ' . _x('Won', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdpssx_custom' => esc_html__('Custom', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'           => 'dollar',
            ]
        );

		//Static Currency Text.
        $this->add_control(
            'bwdpssx_currency_text_symbol', [
                'label'             => esc_html__('Custom Symbol', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXT,
                'condition'         => [
                    'bwdpssx_currency_symbol' => 'bwdpssx_custom',
                ],
            ]
        );

		//Button Position.
        $this->add_control(
            'bwdpssx_btn_position', [
                'label'         	=> esc_html__('Button Position', BWDEB_ROOT_AUTHOR_PRO),
                'type'          	=> \Elementor\Controls_Manager::SELECT,
                'options'       	=> [
                    'above_feature'   => esc_html__('Above Feature', BWDEB_ROOT_AUTHOR_PRO),
					'under_feature'   => esc_html__('Under Feature', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'       	=> 'under_feature',
            ]
        );

		// Column Gap.
		$this->add_responsive_control(
			'bwdpssx_plan_column_gap', [
				'label'         	=> esc_html__('Column Gap', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SLIDER,
				'default'       	=> [
					'size'      	=> 20,
				],
				'range'         	=> [
					'px'        	=> [
						'min'   	=> 0,
						'max'   	=> 100,
					],
				],
				'frontend_available' => true,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list' => 'grid-column-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Row Gap.
		$this->add_responsive_control(
			'bwdpssx_plan_row_gap', [
				'label'         	=> esc_html__('Row Gap', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SLIDER,
				'default'       	=> [
					'size'      	=> 20,
				],
				'range'         	=> [
					'px'        	=> [
						'min'   	=> 0,
						'max'   	=> 100,
					],
				],
				'frontend_available' => true,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list' => 'grid-row-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// End Heading Section.

		// Satrt Plans sections.
		$this->add_plan();
		// End Plans sections.

        //Start Custom Item Section.
		$this->start_controls_section(
			'bwdpssx_custom_item_section',
			[
				'label' => esc_html__( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Select Label Design.
		$this->add_control(
			'bwdpssx_label_design', [
				'label'         	=> esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SELECT,
				'options' 			=> [
					'bwdpssx-label-1'  	=> esc_html__('Label 1', BWDEB_ROOT_AUTHOR_PRO),
					'bwdpssx-label-2'  	=> esc_html__('Label 2', BWDEB_ROOT_AUTHOR_PRO),
					'bwdpssx-label-3'  	=> esc_html__('Label 3', BWDEB_ROOT_AUTHOR_PRO),
					'bwdpssx-label-4'  	=> esc_html__('Label 4', BWDEB_ROOT_AUTHOR_PRO),
					'bwdpssx-label-5'  	=> esc_html__('Label 5', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default' 	      	=> 'bwdpssx-label-1',
			]
		);

		// Select Label Position.
		$this->add_control(
			'bwdpssx_label_position', [
				'label'         	=> esc_html__('Select Label Position', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SELECT,
				'options' 			=> [
					'ltr'  			=> esc_html__('LTR', BWDEB_ROOT_AUTHOR_PRO),
					'rtl'  			=> esc_html__('RTL', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default' 	      	=> 'rtl',
				'condition'			=> [
					'bwdpssx_design!'	=> ['design-3'],
				],
			]
		);

		// Switcher Spacing.
		$this->add_responsive_control(
			'bwdpssx_label_spacing', [
				'label' 			=> esc_html__('Label Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px'],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 200,
						'step' 		=> 1,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 0,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpssx-plan-label' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_design!'	=> ['design-3'],
					'bwdpssx_label_design!' => ['bwdpssx-label-3'],
				],
			]
		);

		$this->end_controls_section();
        //End Grid Options Section.

		// Start Switcher Style Tab.
		$this->start_controls_section(
			'bwdpssx_switcher_style', [
				'label'         	=> esc_html__('Switcher', BWDEB_ROOT_AUTHOR_PRO),
				'tab'           	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Alignment.
		$this->add_responsive_control(
			'bwdpssx_plan_switcher_align', [
				'label'     		=> esc_html__('Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'      		=> \Elementor\Controls_Manager::CHOOSE,
				'options'   		=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center' 		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-switcher' => 'justify-content: {{VALUE}};',
				],
			]
		);

		// Switcher Spacing.
		$this->add_responsive_control(
			'bwdpssx_switcher_spacing', [
				'label' 			=> esc_html__('Switcher Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 30,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-switcher' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Switcher Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_switcher_text_typography',
				'label'         	=> esc_html__('Switcher Typography', BWDEB_ROOT_AUTHOR_PRO),
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-switcher-text',
			]
		);

		// Switcher Text Color.
		$this->add_control(
			'bwdpssx_switcher_text_color', [
				'label'         	=> esc_html__('Switcher Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-switcher-text' => 'color: {{VALUE}};',
				],
			]
		);

		// Switch Color.
		$this->add_control(
			'bwdpssx_switcher_switch_color', [
				'label'         	=> esc_html__('Switch Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'default'       	=> '#ffffff',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-slider:before' => 'background-color: {{VALUE}};',
				],
			]
		);

		// Switch Enable Background Color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_eneble_switch_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper input:checked + .bwdpssx-slider',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
				'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__(' Switch Enable Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// Switch Disable Background Color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_disable_switch_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-slider',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
				'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__(' Switch Disable Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// Icon Spacing.
		$this->add_responsive_control(
			'bwdpssx_switch_radius', [
				'label' 			=> esc_html__('Switch Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%' ],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> '%',
					'size' 			=> 50,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-slider.bwdpssx-round:before' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Icon Spacing.
		$this->add_responsive_control(
			'bwdpssx_switcher_radius', [
				'label' 			=> esc_html__('Switcher Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%' ],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 34,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-slider.bwdpssx-round' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// End Switcher Style Tab.

		// Start Plans Style Tab.
		$this->start_controls_section(
			'bwdpssx_plan_card', [
				'label'         	=> esc_html__('Plan Card', BWDEB_ROOT_AUTHOR_PRO),
				'tab'           	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Plan Color Tab.
		$this->start_controls_tabs(
			'bwdpssx_plan_color_tabs'
		);

		// Start Plan Color Normal Tab.
		$this->start_controls_tab(
			'bwdpssx_plan_color_normal_tab', [
				'label'         	=> esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Plan Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_column_background_color',
                'types'        		=> ['classic', 'gradient'],
                'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan',
				'fields_options'    => [
					'background'    => [
						'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
            ]
        );

		// Title Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_title_background_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-heading-wrapper:before,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-heading-wrapper',
                'types'         	=> ['classic', 'gradient'],
				'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__(' Title Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// Plan Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_plan_card_box_shadow',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan',
				'separator'    		=> 'before',
			]
		);

		$this->end_controls_tab();
		// End Plan Color Normal Tab.

		// Start Plan Color Hover Tab.
		$this->start_controls_tab(
			'bwdpssx_plan_hover_tab', [
				'label'         	=> esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Plan Gradient Background Hover.
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),[
				'name' 	        	=> 'bwdpssx_column_bg_hover_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan:hover',
				'types'         	=> ['classic', 'gradient'],
				'fields_options'    => [
					'background'    => [
						'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
			]
		);

		// Title Gradient Background Hover.
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),[
				'name'          	=> 'bwdpssx_title_bg_hover_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-plan:hover .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan:hover .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan:hover .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan:hover .bwdpssx-heading-wrapper:before,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan:hover .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan:hover .bwdpssx-heading-wrapper',
				'types'         	=> ['classic', 'gradient'],
				'fields_options'    => [
					'background'    => [
						'label'     => esc_html__('Title Background Color', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
			]
		);

		// Column Hover Border Color.
		$this->add_control(
			'bwdpssx_column_border_hover', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		// Plan Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_plan_card_shadow_hover',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan:hover',
				'separator'    		=> 'before',
			]
		);

		$this->end_controls_tab();
		// End Plan Color hover Tab.

		$this->end_controls_tabs();
		// End Plan Color Tab.

		// Plan Plan.
		$this->add_control(
			'bwdpssx_plan_bg', [
				'label'        		=> esc_html__('Plan', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Plan Border.
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(), [
				'name'          	=> 'bwdpssx_plan_card_border',
				'label_block'   	=> true,
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan',
			]
		);

		// Plan Border Radius.
		$this->add_responsive_control(
			'bwdpssx_plan_card_border_radius', [
				'label'         	=> esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Plan Padding.
		$this->add_responsive_control(
			'bwdpssx_plan_card_padding', [
				'label'         	=> esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-1 .bwdpssx-content,
					{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-2 .bwdpssx-content,
					{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-3 .bwdpssx-content,
					{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-4 .bwdpssx-content,
					{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-5 .bwdpssx-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Plan Title.
		$this->add_control(
			'bwdpssx_plan_title_bg', [
				'label'        		=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Title Padding.
		$this->add_responsive_control(
			'bwdpssx_title_padding', [
				'label'         	=> esc_html__('Title Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-title-price-wrapper,
					{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-design-2 .bwdpssx-heading-wrapper,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-heading-wrapper,
					{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-title-price-wrapper,
					{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-heading-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Title Background Overlay.
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' 				=> 'bwdpssx_background_overlay',
				'selector' 			=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-title-price-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-heading-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-heading-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-title-price-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-heading-wrapper:after',
				'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
				'fields_options' 	=> [
					'background' 	=> [
						'label'     => esc_html__('Title Background Overlay', BWDEB_ROOT_AUTHOR_PRO),
						
					],
				],
			]
		);

		// Title Background Overlay Opacity.
		$this->add_responsive_control(
			'bwdpssx_background_overlay_opacity',
			[
				'label' => esc_html__( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => .5,
				],
				'range' => [
					'px' => [
						'max' => 1,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}}  .bwdpssx-design-1 .bwdpssx-title-price-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-heading-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-heading-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-title-price-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-heading-wrapper:after' => 'opacity: {{SIZE}};',
				],
				'condition' => [
					'bwdpssx_background_overlay_background' => [ 'classic', 'gradient' ],
				],
			]
		);

		// Title Background Height.
		$this->add_responsive_control(
			'bwdpssx_title_bg_height', [
				'label' 			=> esc_html__('Title Background Height', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 300,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-title-price-wrapper,
					{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-heading-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_design' 	=> ['design-4', 'design-5'],
				],
			]
		);

		$this->end_controls_section();
		// End General Style Tab.

		// Start Plans Style Tab.
		$this->start_controls_section(
			'bwdpssx_plan_style', [
				'label'         	=> esc_html__('Plan', BWDEB_ROOT_AUTHOR_PRO),
				'tab'           	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Plan Title.
		$this->add_control(
			'bwdpssx_plan_title', [
				'label'        		=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Alignment.
		$this->add_responsive_control(
			'bwdpssx_title_align', [
				'label'    			=> esc_html__('Title Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-heading-wrapper' => 'text-align: {{VALUE}};',
				],
				'condition'			=> [
					'bwdpssx_design'	=> ['design-1', 'design-2', 'design-4', 'design-5'],
				],
			]
		);

		// Title Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'         	 	=> 'bwdpssx_plan_title_typography',
				'selector'     	 	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-heading',
			]
		);

		// Title Color.
		$this->add_control(
			'bwdpssx_plan_title_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-heading' => 'color: {{VALUE}};',
				],
			]
		);

		// Title Spacing.
		$this->add_responsive_control(
			'bwdpssx_title_spacing', [
				'label' 			=> esc_html__('Title Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 300,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 10,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-prices-wrapper' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_design' 	=> ['design-1', 'design-4'],
				],
			]
		);

		// Plan Price.
		$this->add_control(
			'bwdpssx_plan_price', [
				'label'        		=> esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
				'separator'    		=> 'before',
			]
		);

		// Alignment.
		$this->add_responsive_control(
			'bwdpssx_price_align', [
				'label'    			=> esc_html__('Price Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-prices-wrapper' => 'justify-content: {{VALUE}};',
				],
			]
		);

		// Price Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_price_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-normal-price, {{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-normal-price p',
			]
		);

		// Price Color.
		$this->add_control(
			'bwdpssx_plan_price_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-normal-price' => 'color: {{VALUE}};',
				],
			]
		);

		// Title Spacing.
		$this->add_responsive_control(
			'bwdpssx_price_spacing', [
				'label' 			=> esc_html__('Price Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 300,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 10,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-prices-wrapper' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_design' 	=> ['design-5'],
				],
			]
		);

		// Price Line.
		$this->add_control(
			'bwdpssx_price_line_through', [
				'label'    			=> esc_html__('Price Line Through', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 			=> esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' 		=> esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' 		=> 'yes',
				'default' 			=> 'no',
			]
		);

		// Price Color.
		$this->add_control(
			'bwdpssx_price_line_through_color', [
				'label'         	=> esc_html__('Price Line Through', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-price-line p' => 'text-decoration-color: {{VALUE}};',
				],
				'condition'			=> [
					'bwdpssx_price_line_through' 	=> 'yes',
				],
			]
		);

		// Title Spacing.
		$this->add_responsive_control(
			'bwdpssx_line_width', [
				'label' 			=> esc_html__('Price Line Through Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 10,
						'step' 		=> 1,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 1,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-price-line p' => 'text-decoration-thickness: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_price_line_through' 	=> 'yes',
				],
			]
		);

		// Plan Sale Price.
		$this->add_control(
			'bwdpssx_plan_sale_price', [
				'label'        		=> esc_html__('Sale Price', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
				'separator'    		=> 'before',
			]
		);

		// Sale Price Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_sale_price_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-sale-price, {{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-sale-price span, {{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-sale-price p',
			]
		);

		// Sale Price Color.
		$this->add_control(
			'bwdpssx_plan_sale_price_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-sale-price' => 'color: {{VALUE}};',
				],
			]
		);

		// Plan Description.
		$this->add_control(
			'bwdpssx_plan_description', [
				'label'        		=> esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
				'separator'    		=> 'before',
			]
		);

		// Description Spacing.
		$this->add_responsive_control(
			'bwdpssx_description_spacing', [
				'label' 			=> esc_html__('Description Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 300,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 10,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-description-wrapper' => 'margin-top: {{SIZE}}{{UNIT}}; margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Description Alignment.
		$this->add_responsive_control(
			'bwdpssx_description_align', [
				'label'    			=> esc_html__('Description Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-description-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		// Description Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_description_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-description',
			]
		);

		// Description Color.
		$this->add_control(
			'bwdpssx_plan_description_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-description' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
		// End Plans Style Tab.

		// Start Features Style Tab.
		$this->start_controls_section(
			'bwdpssx_features_style', [
				'label'         	=> esc_html__('Features', BWDEB_ROOT_AUTHOR_PRO),
				'tab'         		=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Features Title.
		$this->add_control(
			'bwdpssx_plan_features_title', [
				'label'        		=> esc_html__('Features Title', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Features Title Alignment.
		$this->add_responsive_control(
			'bwdpssx_feature_title_align', [
				'label'    			=> esc_html__('Features Title Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-features-title-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		// Feature Title Spacing.
		$this->add_responsive_control(
			'bwdpssx_feature_title_spacing', [
				'label' 			=> esc_html__('Title Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 10,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-features-title-wrapper' => 'margin-top: {{SIZE}}{{UNIT}}; margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Features Title Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_features_title_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-features-title',
			]
		);

		// Features Title Color.
		$this->add_control(
			'bwdpssx_plan_features_title_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-features-title' => 'color: {{VALUE}};',
				],
			]
		);

		// Features Icon.
		$this->add_control(
			'bwdpssx_plan_features_icon', [
				'label'        		=> esc_html__('Features Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
				'separator'    		=> 'before',
			]
		);

		// Icon Size.
		$this->add_responsive_control(
			'bwdpssx_plan_features_icon_size', [
				'label'         	=> esc_html__('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::SLIDER,
				'range'         	=> [
					'px'        	=> [
						'min'   	=> 0,
						'max'   	=> 100,
					],
				],
				'default'       	=> ['size'  => 15],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx_feature_icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Icon Spacing.
		$this->add_responsive_control(
			'bwdpssx_icon_spacing', [
				'label' 			=> esc_html__('Icon Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%' ],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 3,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx_feature_icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Include Color.
		$this->add_control(
			'bwdpssx_plan_features_icon_include_color', [
				'label'         	=> esc_html__('Include Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx_feature_icon.bwdpssx-icon-include' => 'color: {{VALUE}};',
				],
			]
		);

		// Exclude Color.
		$this->add_control(
			'bwdpssx_plan_features_icon_exclude_color', [
				'label'         	=> esc_html__('Exclude Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx_feature_icon.bwdpssx-icon-exclude' => 'color: {{VALUE}};',
				],
			]
		);

		// Plan Features List.
		$this->add_control(
			'bwdpssx_plan_features', [
				'label'        		=> esc_html__('Features List', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
				'separator'    		=> 'before',
			]
		);

		// Features List Alignment.
		$this->add_responsive_control(
			'bwdpssx_feature_list_align', [
				'label'    			=> esc_html__('Features List Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-features-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		// Features List Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_features_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-feature-text',
			]
		);

		// Features Include List Color.
		$this->add_control(
			'bwdpssx_features_include_color', [
				'label'         	=> esc_html__('Include List Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-feature-text.bwdpssx-icon-include' => 'color: {{VALUE}};',
				],
			]
		);

		// Features Exclude List Color.
		$this->add_control(
			'bwdpssx_features_exclude_color', [
				'label'         	=> esc_html__('Exclude List Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-feature-text.bwdpssx-icon-exclude' => 'color: {{VALUE}};',
				],
			]
		);

		// Divider Width.
		$this->add_responsive_control(
			'bwdpssx_divider_width', [
				'label' 			=> esc_html__('Divider Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> 'px',
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 10,
						'step'		=> 1,
					],
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper li.bwdpssx-features-item' => 'border-bottom-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Divider Color.
		$this->add_control(
			'bwdpssx_divider_color', [
				'label'         	=> esc_html__('Divider Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper li.bwdpssx-features-item' => 'border-color: {{VALUE}};',
				],
			]
		);

		// List Spacing.
		$this->add_responsive_control(
			'bwdpssx_list_spacing', [
				'label' 			=> esc_html__('List Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px', '%'],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
					'%' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 5,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-features-item' => 'padding-top: {{SIZE}}{{UNIT}}; padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// End Features Style Tab.

		// Start Button Style Tab.
		$this->start_controls_section(
			'bwdpssx_button_style', [
				'label'         	=> esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
				'tab'           	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Button Alignment.
		$this->add_responsive_control(
			'bwdpssx_button_align', [
				'label'    			=> esc_html__('Button Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-btn-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		// Button Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_btn_text_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn',
			]
		);

		// Button Tab.
		$this->start_controls_tabs(
			'bwdpssx_button_style_tabs'
		);

		// Start Button Normal Tab.
		$this->start_controls_tab(
			'bwdpssx_button_style_normal_tab', [
				'label'         	=> esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Button Text color.
		$this->add_control(
			'bwdpssx_button_color', [
				'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn' => 'color: {{VALUE}};',
				],
			]
		);

		// Button Background color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),[
                'name'         		=> 'bwdpssx_btn_background_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan-btn::before',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
                'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		$this->end_controls_tab();
		// End Button Normal Tab.

		// Start Button Hover Tab.
		$this->start_controls_tab(
			'bwdpssx_button_style_hover_tab', [
				'label'         	=> esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Button Hover Text Color.
		$this->add_control(
			'bwdpssx_button_color_hover', [
				'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);

		// Button Hover Background Color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),[
                'name'          	=> 'bwdpssx_btn_background_color_hover',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn:hover,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan-btn:hover:before',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
                'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// End Button Hover Border Color.
		$this->add_control(
			'bwdpssx_btn_border_color_hover', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		// End Button hover Tab.

		$this->end_controls_tabs();
		// End Button Tab.

		// Button Border.
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(), [
				'name'          	=> 'bwdpssx_btn_border',
				'label'         	=> esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn',
			]
		);

		// Button Border Radius.
		$this->add_control(
			'bwdpssx_btn_border_radius', [
				'label'         	=> esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Button Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_button_shadow',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn',
			]
		);

		// Button Padding.
		$this->add_responsive_control(
			'bwdpssx_button_padding', [
				'label'         	=> esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> [ 'px', 'em', '%' ],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Button Margin.
		$this->add_responsive_control(
			'bwdpssx_btn-margin', [
				'label'         	=> esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		// End Button Style Tab.

		// Start Label Style Tab.
		$this->start_controls_section(
			'section_label_style', [
				'label'         	=> esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'tab'         		=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Label Typography.
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'          	=> 'bwdpssx_plan_label_typography',
				'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label',
			]
		);

		// Label Color.
		$this->add_control(
			'bwdpssx_plan_label_color', [
				'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label' => 'color: {{VALUE}};',
				],
			]
		);

		// Label Background Color.
		$this->add_control(
			'bwdpssx_plan_label_bg_color', [
				'label'         	=> esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label' => 'background-color: {{VALUE}};',
				],
			]
		);

		// Plan Border Radius.
		$this->add_responsive_control(
			'bwdpssx_label_border_radius', [
				'label'         	=> esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_label_design'	=> 'bwdpssx-label-5',
				],
			]
		);

		// Label Padding.
		$this->add_responsive_control(
			'bwdpssx_label_padding', [
				'label'         	=> esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    	=> ['px', '%'],
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Label Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_label_box_shadow',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label',
			]
		);

		// Label Spacing.
		$this->add_responsive_control(
			'bwdpssx_lable_margin', [
				'label' 			=> esc_html__('Label Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px'],
				'range' 			=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 100,
						'step' 		=> 1,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 10,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-label' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition'			=> [
					'bwdpssx_design'	=> 'design-3',
				],
			]
		);

		// Alignment.
		$this->add_responsive_control(
			'bwdpssx_label_align', [
				'label'    			=> esc_html__('Title Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'     			=> \Elementor\Controls_Manager::CHOOSE,
				'options'  			=> [
					'left' 			=> [
						'title' 	=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-left',
					],
					'center'		=> [
						'title' 	=> esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-center',
					],
					'right' 		=> [
						'title' 	=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  	=> 'eicon-text-align-right',
					],
				],
				'default'   		=> 'center',
				'selectors' 		=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-label' => 'text-align: {{VALUE}};',
				],
				'condition'			=> [
					'bwdpssx_design'	=> 'design-3',
				],
			]
		);

		$this->end_controls_section();
		// End Label Style Tab.

		// Start Highlight Style Tab.
		$this->start_controls_section(
			'section_highlight_style', [
				'label'         	=> esc_html__('Highlight', BWDEB_ROOT_AUTHOR_PRO),
				'tab'         		=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Highlight Tab.
		$this->start_controls_tabs(
			'bwdpssx_highlight_style_tabs'
		);

		// Start Highlight Normal Tab.
		$this->start_controls_tab(
			'bwdpssx_highlight_style_normal_tab', [
				'label'         	=> esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Plan Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_highlight_background_color',
                'types'        		=> ['classic', 'gradient'],
                'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan',
				'fields_options'    => [
					'background'    => [
						'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
            ]
        );

		// Title Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_title_highlight_background_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-heading-wrapper:before,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-heading-wrapper',
                'types'         	=> ['classic', 'gradient'],
				'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__(' Title Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// Plan Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_highlight_box_shadow',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan',
				'separator'    		=> 'before',
			]
		);

		// Column Border Color.
		$this->add_control(
			'bwdpssx_highlight_border', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan' => 'border-color: {{VALUE}};',
				],
			]
		);

		// Button Title.
		$this->add_control(
			'bwdpssx_btn_highlight_title', [
				'label'        		=> esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Button Text color.
		$this->add_control(
			'bwdpssx_highlight_button_color', [
				'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn' => 'color: {{VALUE}};',
				],
			]
		);

		// Button Background color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),[
                'name'         		=> 'bwdpssx_highlight_btn_bg_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn::before',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
                'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// End Button Border Color.
		$this->add_control(
			'bwdpssx_btn_highlight_border', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		// End Highlight Normal Tab.

		// Start Highlight Hover Tab.
		$this->start_controls_tab(
			'bwdpssx_highlight_style_hover_tab', [
				'label'         	=> esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Plan Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_highlight_bg_hover_color',
                'types'        		=> ['classic', 'gradient'],
                'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan:hover',
				'fields_options'    => [
					'background'    => [
						'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
					],
				],
            ]
        );

		// Title Gradient Background.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(), [
                'name'          	=> 'bwdpssx_title_highlight_bg_hover_color',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-heading-wrapper,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-heading-wrapper:before,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-title-price-wrapper,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan.bwdpssx-highlight-plan:hover .bwdpssx-heading-wrapper',
                'types'         	=> ['classic', 'gradient'],
				'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__(' Title Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// Plan Box Shadow.
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          	=> 'bwdpssx_highlight_hover_box_shadow',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan:hover',
				'separator'    		=> 'before',
			]
		);

		// Column Border Color.
		$this->add_control(
			'bwdpssx_highlight_border_hover', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan.bwdpssx-highlight-plan:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		// Button Title.
		$this->add_control(
			'bwdpssx_btn_highlight_title_hover', [
				'label'        		=> esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
				'type'         		=> \Elementor\Controls_Manager::HEADING,
			]
		);

		// Button Text color.
		$this->add_control(
			'bwdpssx_highlight_button_color_hover', [
				'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);

		// Button Background color.
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),[
                'name'         		=> 'bwdpssx_highlight_btn_bg_color_hover',
				'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn:hover,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan.bwdpssx-plan-btn:hover:before',
                'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
                'fields_options'    => [
                    'background'    => [
                        'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
            ]
        );

		// End Button Hover Border Color.
		$this->add_control(
			'bwdpssx_btn_highlight_border_hover', [
				'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'separator'    		=> 'after',
				'selectors'     	=> [
					'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan.bwdpssx-highlight-plan .bwdpssx-plan-btn:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		// End Highlight hover Tab.

		$this->end_controls_tabs();
		// End Highlight Tab.

		// Title Background Overlay.
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' 				=> 'bwdpssx_bg_hl_overlay',
				'selector' 			=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-title-price-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-title-price-wrapper:after,
				{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after',
				'types'         	=> ['classic', 'gradient'],
				'exclude'           => ['image'],
				'fields_options' 	=> [
					'background' 	=> [
						'label'     => esc_html__('Title Background Overlay', BWDEB_ROOT_AUTHOR_PRO),
						
					],
				],
			]
		);

		// Title Background Overlay Opacity.
		$this->add_responsive_control(
			'bwdpssx_bg_hl_overlay_opacity',
			[
				'label' => esc_html__( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => .5,
				],
				'range' => [
					'px' => [
						'max' => 1,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}}  .bwdpssx-design-1 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-title-price-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-title-price-wrapper:after,
					{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan.bwdpssx-highlight-plan  .bwdpssx-heading-wrapper:after' => 'opacity: {{SIZE}};',
				],
				'condition' => [
					'bwdpssx_bg_hl_overlay_background' => [ 'classic', 'gradient' ],
				],
			]
		);

		$this->end_controls_section();
		// End Highlight Style Tab.

	}

	public function add_plan() {

		// Repeater For List.
		$repeater = new \Elementor\Repeater();

		// Switcher For Include | Exclude.
		$repeater->add_control(
			'bwdpssx_feature_icon_include_exclude', [
				'label' 			=> esc_html__('Feature Include | Exclude', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 			=> esc_html__('Include', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' 		=> esc_html__('Exclude', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' 		=> 'yes',
				'default' 			=> 'yes',
			]
		);

		// Feature Icon.
		$repeater->add_control(
			'bwdpssx_feature_icon', [
				'label'         	=> esc_html__('Feature Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::ICONS,
				'default'       	=> [
					'value'     	=> 'fas fa-check',
					'library'   	=> 'fa-solid',
				],
			]
		);

		// Feature Content.
		$repeater->add_control(
			'bwdpssx_feature_text', [
				'label'         	=> esc_html__('Feature Content', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::TEXTAREA,
				'default'       	=> esc_html__('Feature', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		// Start Column Content.
		for ( $i = 1; $i < 5; $i++ ) {

			// Plan Column Content.
			$this->start_controls_section(
				'bwdpssx_plan_section_' . $i, [
					'label'     	=> sprintf( esc_html__('Plan %s', BWDEB_ROOT_AUTHOR_PRO), $i ),
					'operator'  	=> '>',
					'condition' 	=> [
						'bwdpssx_plan_count' => $this->add_condition_value( $i ),
					],
				]
			);

			// Heading for 1st Value.
			$this->add_control(
				'bwdpssx_value_1_switcher_' . $i, [
					'label'        => esc_html__('Value 1', BWDEB_ROOT_AUTHOR_PRO),
					'type'         => \Elementor\Controls_Manager::HEADING,
					'description'  => esc_html__('For Switcher OFF Plan.', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// For Switcher OFF Plan for 1st Value.
			$this->add_control(
				'bwdpssx_value_1_desc_' . $i, [
					'label' 		=> esc_html__('For Switcher OFF Plan.', BWDEB_ROOT_AUTHOR_PRO),
					'type' 			=> \Elementor\Controls_Manager::HEADING,
				]
			);

			// Title for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_title_' . $i, [
					'label'     	=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// Title Tag for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_title_tag_' . $i, [
					'label'         => esc_html__('Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::SELECT,
					'options'       => [
						'h1'        => 'H1',
						'h2'        => 'H2',
						'h3'        => 'H3',
						'h4'        => 'H4',
						'h5'        => 'H5',
						'h6'        => 'H6',
						'div'       => 'div',
						'span'      => 'span',
						'p'         => 'p',
					],
					'default'       => 'h2',
				]
			);

			// Title for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_price_' . $i, [
					'label'     	=> esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('149', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// Sale Price for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_sale_price_' . $i, [
					'label'     	=> esc_html__('Sale Price', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('99', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// Label Text for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_label_' . $i, [
					'label'     	=> esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
				]
			);

			// Description for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_description_' . $i, [
					'label' 		=> esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
					'type' 			=> \Elementor\Controls_Manager::TEXTAREA,
					'default'   	=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, quas!',
				]
			);

			// Button Text for 1st Value.
			$this->add_control(
				'bwdpssx_1_button_text_' . $i, [
					'label'     	=> esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// Button Link for 1st Value.
			$this->add_control(
				'bwdpssx_1_plan_link_' . $i, [
					'label'       	=> esc_html__('Link', BWDEB_ROOT_AUTHOR_PRO),
					'type'        	=> \Elementor\Controls_Manager::URL,
					'placeholder' 	=> 'https://your-link.com',
					'default'     	=> [
						'url'         => '#',
						'is_external' => true,
						'nofollow'    => true,
					],
					'label_block' 	=> true,
				]
			);

			// Feature Title for 1st Value.
			$this->add_control(
				'bwdpssx_1_feature_title_' . $i, [
					'label'     	=> esc_html__('Feature Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Top Features', BWDEB_ROOT_AUTHOR_PRO),
				]
			);

			// Feature Title HTML Tag for 1st Value.
			$this->add_control(
				'bwdpssx_1_feature_title_tag_' . $i, [
					'label'         => esc_html__('Feature Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::SELECT,
					'options'       => [
						'h1'        => 'H1',
						'h2'        => 'H2',
						'h3'        => 'H3',
						'h4'        => 'H4',
						'h5'        => 'H5',
						'h6'        => 'H6',
						'div'       => 'div',
						'span'      => 'span',
						'p'         => 'p',
					],
					'default'       => 'h4',
				]
			);

			// Feature List for 1st Value.
			$this->add_control(
				'bwdpssx_1_feature_list_' .$i, [
					'label'         => esc_html__('Feature List', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::REPEATER,
					'fields'        => $repeater->get_controls(),
					'render_type'   => 'template',
					'default'       => [
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
							'bwdpssx_feature_icon_include_exclude' => 'no',
							'bwdpssx_feature_icon' => ['value'=> 'fas fa-times','library' => 'fa-solid'],
						],
					],
				]
			);

			// Heading Text for 2nd Value.
			$this->add_control(
				'bwdpssx_value_2_switcher_' . $i, [
					'label'        => esc_html__('Value 2', BWDEB_ROOT_AUTHOR_PRO),
					'type'         => \Elementor\Controls_Manager::HEADING,
					'separator'    => 'before',
					'condition'    => [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// For Switcher ON Plan Text for 2nd Value.
			$this->add_control(
				'bwdpssx_value_2_desc_' . $i, [
					'label' 		=> esc_html__('For Switcher ON Plan.', BWDEB_ROOT_AUTHOR_PRO),
					'type' 			=> \Elementor\Controls_Manager::HEADING,
					'condition'    	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Title for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_title_' . $i, [
					'label'     	=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Title HTML Tag for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_title_tag_' . $i, [
					'label'         => esc_html__('Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::SELECT,
					'options'       => [
						'h1'        => 'H1',
						'h2'        => 'H2',
						'h3'        => 'H3',
						'h4'        => 'H4',
						'h5'        => 'H5',
						'h6'        => 'H6',
						'div'       => 'div',
						'span'      => 'span',
						'p'         => 'p',
					],
					'default'       => 'h2',
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Price for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_price_' . $i, [
					'label'     	=> esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('199', BWDEB_ROOT_AUTHOR_PRO),
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Sale Price for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_sale_price_' . $i, [
					'label'     	=> esc_html__('Sale Price', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('149', BWDEB_ROOT_AUTHOR_PRO),
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Label Text for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_label_' . $i, [
					'label'     	=> esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Description for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_description_' . $i, [
					'label' 		=> esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
					'type' 			=> \Elementor\Controls_Manager::TEXTAREA,
					'default'   	=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, quas!',
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Button Text for 2nd Value.
			$this->add_control(
				'bwdpssx_2_button_text_' . $i, [
					'label'     	=> esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Button Link for 2nd Value.
			$this->add_control(
				'bwdpssx_2_plan_link_' . $i, [
					'label'       	=> esc_html__('Link', BWDEB_ROOT_AUTHOR_PRO),
					'type'        	=> \Elementor\Controls_Manager::URL,
					'placeholder' 	=> 'https://your-link.com',
					'default'     	=> [
						'url'         => '#',
						'is_external' => true,
						'nofollow'    => true,
					],
					'label_block' 	=> true,
					'condition'   	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Feature Title for 2nd Value.
			$this->add_control(
				'bwdpssx_2_feature_title_' . $i, [
					'label'     	=> esc_html__('Feature Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::TEXT,
					'default'   	=> esc_html__('Top Features', BWDEB_ROOT_AUTHOR_PRO),
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Feature Title HTML Tag for 2nd Value.
			$this->add_control(
				'bwdpssx_2_feature_title_tag_' . $i, [
					'label'         => esc_html__('Feature Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::SELECT,
					'options'       => [
						'h1'        => 'H1',
						'h2'        => 'H2',
						'h3'        => 'H3',
						'h4'        => 'H4',
						'h5'        => 'H5',
						'h6'        => 'H6',
						'div'       => 'div',
						'span'      => 'span',
						'p'         => 'p',
					],
					'default'       => 'h4',
					'condition' 	=> [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Feature List for 2nd Value.
			$this->add_control(
				'bwdpssx_2_feature_list_' .$i, [
					'label'         => esc_html__('Feature List', BWDEB_ROOT_AUTHOR_PRO),
					'type'          => \Elementor\Controls_Manager::REPEATER,
					'fields'        => $repeater->get_controls(),
					'render_type'   => 'template',
					'default'       => [
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
						],
						[
							'bwdpssx_feature_text' => esc_html__('Lorem ipsum dolor sit amet', BWDEB_ROOT_AUTHOR_PRO),
							'bwdpssx_feature_icon_include_exclude' => 'no',
							'bwdpssx_feature_icon' => ['value'=> 'fas fa-times','library'   => 'fa-solid'],
						],
					],
					'condition' => [
						'bwdpssx_plan_switcher' => 'yes',
					],
				]
			);

			// Switcher for Override Style.
			$this->add_control(
				'bwdpssx_override_style_' . $i, [
					'label'        => esc_html__('Override Style', BWDEB_ROOT_AUTHOR_PRO),
					'type'         => \Elementor\Controls_Manager::SWITCHER,
					'return_value' => 'yes',
					'default'      => 'no',
					'separator'    => 'before',
				]
			);

			// Plan.
			$this->add_control(
				'bwdpssx_or_plan_' . $i, [
					'label'     	=> esc_html__('Plan', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Plan Gradient Background.
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(), [
					'name'          	=> 'bwdpssx_or_bg_color' . $i,
					'types'        		=> ['classic', 'gradient'],
					'selector'      	=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan-'. ($i-1) . ' .bwdpssx-plan',
					'fields_options'    => [
						'background'    => [
							'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
						],
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Border Color.
			$this->add_control(
				'ct_or_border_color_' . $i, [
					'label'     	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::COLOR,
					'selectors' 	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-list .bwdpssx-plan-'. ($i-1) . ' .bwdpssx-plan'=> 'border-color: {{VALUE}};'
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Title.
			$this->add_control(
				'bwdpssx_or_heading_' . $i, [
					'label'     	=> esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Color for Title.
			$this->add_control(
				'ct_heading_or_color_' . $i, [
					'label'     	=> esc_html__('Title Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::COLOR,
					'selectors' 	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-heading'=> 'color: {{VALUE}};'
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Title Gradient Background.
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(), [
					'name'          	=> 'bwdpssx_title_bg_or_color_'. $i,
					'selector'     		=> '{{WRAPPER}} .bwdpssx-design-1 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-title-price-wrapper,
					{{WRAPPER}} .bwdpssx-design-2 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-heading-wrapper,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-heading-wrapper,
					{{WRAPPER}} .bwdpssx-design-3 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-heading-wrapper:before,
					{{WRAPPER}} .bwdpssx-design-4 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-title-price-wrapper,
					{{WRAPPER}} .bwdpssx-design-5 .bwdpssx-plan-'. ($i-1) .' .bwdpssx-heading-wrapper',
					'types'         	=> ['classic', 'gradient'],
					'fields_options'    => [
						'background'    => [
							'label'     => esc_html__('Title Background Color', BWDEB_ROOT_AUTHOR_PRO),
						],
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Price.
			$this->add_control(
				'bwdpssx_or_price_' . $i, [
					'label'     	=> esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Price Color.
			$this->add_control(
				'bwdpssx_or_price_color_' . $i, [
					'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-normal-price' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Price Color.
			$this->add_control(
				'bwdpssx_line_or_color'. $i, [
					'label'         	=> esc_html__('Price Line Through', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-price-line p' => 'text-decoration-color: {{VALUE}};',
					],
					'condition'			=> [
						'bwdpssx_price_line_through' 	=> 'yes',
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Sale Price Color.
			$this->add_control(
				'bwdpssx_or_sale_color_'. $i, [
					'label'         	=> esc_html__('Sale Price Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-sale-price' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Description.
			$this->add_control(
				'bwdpssx_or_desc_' . $i, [
					'label'     	=> esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Description Color.
			$this->add_control(
				'bwdpssx_or_desc_color_' . $i, [
					'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-description' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Feature Title.
			$this->add_control(
				'bwdpssx_or_feat_title_' . $i, [
					'label'     	=> esc_html__('Feature Title', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Feature Title.
			$this->add_control(
				'bwdpssx_or_feat_title_color_' . $i, [
					'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-features-title' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Feature List.
			$this->add_control(
				'bwdpssx_or_feat_list_' . $i, [
					'label'     	=> esc_html__('Feature List', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Include Icon Color.
			$this->add_control(
				'bwdpssx_or_feat_incl_icon_' . $i, [
					'label'         	=> esc_html__('Include Icon Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' i.bwdpssx-icon-include' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Include List Color.
			$this->add_control(
				'bwdpssx_or_feat_incl_list_' . $i, [
					'label'         	=> esc_html__('Include List Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-feature-text.bwdpssx-icon-include' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Exclude Icon Color.
			$this->add_control(
				'bwdpssx_or_feat_excl_icon_' . $i, [
					'label'         	=> esc_html__('Exclude Icon Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' i.bwdpssx-icon-exclude' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Exclude List Color.
			$this->add_control(
				'bwdpssx_or_feat_excl_list_' . $i, [
					'label'         	=> esc_html__('Exclude List Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-feature-text.bwdpssx-icon-exclude' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Button.
			$this->add_control(
				'bwdpssx_or_button_' . $i, [
					'label'     	=> esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Text Color.
			$this->add_control(
				'bwdpssx_or_btn_text_' . $i, [
					'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Button Gradient Background.
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(), [
					'name'          	=> 'bwdpssx_or_btn_bg_'. $i,
					'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn',
					'types'         	=> ['classic', 'gradient'],
					'fields_options'    => [
						'background'    => [
							'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
						],
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Text Color.
			$this->add_control(
				'bwdpssx_or_btn_border_' . $i, [
					'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn' => 'border-color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Button Hover Color.
			$this->add_control(
				'bwdpssx_or_btn_hover_' . $i, [
					'label'     	=> esc_html__('Button Hover Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Text Color.
			$this->add_control(
				'bwdpssx_or_btn_txt_' . $i, [
					'label'         	=> esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn:hover' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Button Gradient Background.
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(), [
					'name'          	=> 'bwdpssx_or_bg_btn_'. $i,
					'selector'     		=> '{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn:hover',
					'types'         	=> ['classic', 'gradient'],
					'fields_options'    => [
						'background'    => [
							'label'     => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
						],
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Text Color.
			$this->add_control(
				'bwdpssx_or_btn_bdr_' . $i, [
					'label'         	=> esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-btn:hover' => 'border-color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Label.
			$this->add_control(
				'bwdpssx_or_label_' . $i, [
					'label'     	=> esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
					'type'      	=> \Elementor\Controls_Manager::HEADING,
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Label Color.
			$this->add_control(
				'bwdpssx_or_label_txt_' . $i, [
					'label'         	=> esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-label' => 'color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			// Label Background Color.
			$this->add_control(
				'bwdpssx_or_label_bg_' . $i, [
					'label'         	=> esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
					'type'          	=> \Elementor\Controls_Manager::COLOR,
					'selectors'     	=> [
						'{{WRAPPER}} .bwdpssx-main-wrapper .bwdpssx-plan-'. ($i-1) .' .bwdpssx-plan-label' => 'background-color: {{VALUE}};',
					],
					'condition' 	=> [
						'bwdpssx_override_style_' . $i => 'yes',
					],
				]
			);

			$this->end_controls_section();
		}
	}

	public function add_condition_value( $j ) {
		$value = [];
		for ( $i = $j; $i < 5; $i++ ) {
			$value[] = $i;
		}
		return $value;
	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		include( __DIR__ . '/pssx-templates/'.$settings['bwdpssx_design'].'.php');
	}

}