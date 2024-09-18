<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDPTPricingTable extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbpt-price';
	}

	public function get_title() {
		return esc_html__( 'BWD Pricing Table', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-price-table bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'pricing table', 'price', 'table' ];
	}

	public function get_script_depends() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdpt_pricing_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdpt_pricing_table_style',
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
				],
			]
		);
		$this->end_controls_section();
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'bwdpt_pricing_choose_plan',
		    [
		        'label' => esc_html__('Choose Plan',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdpt_pricing_table_style' => 'style30',
				],
		   
		    ]
		);
	   $this->end_controls_section();
	   $this->start_controls_section(
	       'bwdpt_pricing_head',
		    [
		        'label' => esc_html__('Header',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		// Basic Plan Head

        $this->add_control(
			'bwdpt_pricing_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Basic', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'title' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
            'bwdpt_pricing_title_tag',
            [
                'label' => __( 'Title HTML Tag', 'bloglentor' ),
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
                'default' => 'h3',
            ]
        );
		$this->add_control(
			'bwdpt_pricing_description_show_hide',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'default'  => 'no',
				'label_on' => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
        $this->add_control(
			'bwdpt_pricing_description',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nun.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'title' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing',
			 [
				 'label' => esc_html__('Pricing',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_unit',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your price here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdpt_currency_symbol',
			[
				'label' => __( 'Currency Symbol', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__('$', BWDEB_ROOT_AUTHOR_PRO)
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount',
			[
				'label' => esc_html__( 'Discount', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'default'  => 'no',
				'label_on' => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount_unit',
			[
				'label' => esc_html__( 'Discount Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$25', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your price here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
        $this->add_control(
			'bwdpt_pricing_duration',
			[
				'label' => esc_html__( 'Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Month', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your duration here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
            'bwdpt_pricing_table_period_separator',
            [
                'label' => esc_html__('Period Separator', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::TEXT,
                'dynamic' => ['active' => true],
                'label_block' => false,
                'default' => esc_html__('/', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_ribon',
			 [
				 'label' => esc_html__('Ribon',BWDEB_ROOT_AUTHOR_PRO),
				 'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			
			 ]
		 );
		 $this->add_control(
            'bwdpt_pricing_table_featured_ribon',
            [
                'label' => esc_html__('Show Ribon', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'bwdpt_pricing_table_featured_ribon_styles',
            [
                'label' => esc_html__('Ribbon Style', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::SELECT,
                'default' => 'ribbon-1',
                'options' => [
                    'ribbon-1' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
                    'ribbon-2' => esc_html__('Angle', BWDEB_ROOT_AUTHOR_PRO),
                    'ribbon-3' => esc_html__('Circle', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdpt_pricing_table_featured_ribon' => 'yes',
                ],
				'prefix_class' => 'ptm-pricing-table-',
            ]
        );
		$this->add_control(
			'bwdpt_ribbon_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' 	=> Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'New', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribbon_size',
			[
				'label' => esc_html__( 'Circle Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .ptm-ribon-title' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-3' ],
				],
			]
		);
		$this->add_responsive_control(
			'top_distance',
			[
				'label' => esc_html__( 'Distance from Top', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 90,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
				],
			]
		);
		$this->add_responsive_control(
			'ribbon_ribon-2_right_distance',
			[
				'label' => esc_html__( 'Distance From Right', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
					'bwdpt_ribbon_position' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'ribbon_ribon-2_left_distance',
			[
				'label' => esc_html__( 'Distance From Left', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
					'bwdpt_ribbon_position' => 'left',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_top_distance',
			[
				'label' => esc_html__( 'Distance from Top', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-3', 'ribbon-4' ],
				],
			]
		);

		$this->add_responsive_control(
			'bwdpt_ribbon_distance_right',
			[
				'label' => esc_html__( 'Distance from Right', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition'=> [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-3', 'ribbon-4' ],
					'bwdpt_ribbon_position' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribbon_distance_left',
			[
				'label' => esc_html__( 'Distance from Left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1','ribbon-3', 'ribbon-4' ],
					'bwdpt_ribbon_position' => 'left',
				],
			]
		);
		$this->add_control(
			'bwdpt_ribbon_position',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'toggle'  => true,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-h-align-right',
					],
				],
				'default' => 'right',
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-2', 'ribbon-3', 'ribbon-4' ],
				],
				'prefix_class' => 'ptm-ribon-position-',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_body',
		    [
		        'label' => esc_html__('Features',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
	

		// Basic Pricing Table Repeater

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdpt_basic_pricing_table_body_text', [
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_active',
			[
				'label' => esc_html__( 'Exclude', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_exclude',
			[
				'label' => esc_html__( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'' => [
						'min' => 0,
						'max' => 1,
						'step' => 0.1,
					]
				],
				'default' => [
					'unit' => '',
					'size' => 0.2,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-feature-wrapper' => 'opacity: {{SIZE}};',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_active' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_line',
			[
				'label'=> esc_html__( 'Bottom Line', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_border_style',
			[
				'label' => esc_html__( 'Bottom Line Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'double' => esc_html__( 'Double', BWDEB_ROOT_AUTHOR_PRO ),
					'dotted' => esc_html__( 'Dotted', BWDEB_ROOT_AUTHOR_PRO ),
					'dashed' => esc_html__( 'Dashed', BWDEB_ROOT_AUTHOR_PRO ),
					'groove' => esc_html__( 'Groove', BWDEB_ROOT_AUTHOR_PRO ),
					'ridge' => esc_html__( 'Ridge', BWDEB_ROOT_AUTHOR_PRO ),
					'inset' => esc_html__( 'Inset', BWDEB_ROOT_AUTHOR_PRO ),
					'outset' => esc_html__( 'Outset', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-feature-wrapper.bottom-line' => 'border-bottom-style: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_border_color',
			[
				'label' => esc_html__( 'Bottom Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-feature-wrapper.bottom-line' => 'border-bottom-color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
					'bwdpt_pricing_table_feature_bottom_border_style!' => '',

				],
			]
		);
		
		$repeater->add_responsive_control(
			'bwdpt_pricing_table_feature_bottom_border_width',
			[
				'label' => esc_html__( 'Bottom Line Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 2,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-feature-wrapper.bottom-line' => 'border-bottom-width: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
					'bwdpt_pricing_table_feature_bottom_border_style!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_show_icon',
			[
				'label' => esc_html__( 'Show Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_feature_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'solid',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_basic_pricing_table_body_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-basic-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdpt_pricing_box_pricing_features_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-basic-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdpt_pricing_box_pricing_features_icon_gap',
			[
				'label' => esc_html__( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features .ptm-basic-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_item_bg_color',
			[
				'label' => esc_html__( 'Item BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdpt_basic_pricing_table_features',
			[
				'label' => esc_html__( 'Basic Features', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'WEBSITES', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'GB SSD', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'DOMAIN NAME', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'EMAIL', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'CPU & RAM', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdpt_basic_pricing_table_body_text }}}',
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_align',
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
				'selectors'    => [
                    '{{WRAPPER}} .ptm-pricing-features' => 'text-align: {{VALUE}};',
                ],
			]
		);
        $this->end_controls_section();
	    $this->start_controls_section(
	       'bwdpt_pricing_button',
		    [
		        'label' => esc_html__('Button',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );
        $this->add_control(
            'bwdpt_pricing_table_btn_text',
            [
                'label'       => esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
					'active' => true
				],
                'default'     => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $this->add_control(
            'bwdpt_pricing_table_btn_link',
            [
                'label'         => esc_html__('Button Link', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => Controls_Manager::URL,
                'dynamic'   => [
					'active' => true
				],
				'default' => [
					'url' => '#',
				],
                'label_block'   => true,
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_additional_info_section',
			 [
				 'label' => esc_html__('Additional Info',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_box_additional_info_show_hide',
			[
				'label'                 => esc_html__( 'Additional Info', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => Controls_Manager::SWITCHER,
				'default'               => 'no',
				'label_on'              => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'             => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value'          => 'yes',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_additional_info',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nun.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_head_style',
			 [
				 'label' => esc_html__('Header',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_header_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_header_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .ptm-header-bg, {{WRAPPER}} .ptm-header-bgb::before, {{WRAPPER}} .ptm-header-bga::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_header_typography',
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_header_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_header_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_align',
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
				'selectors' => [
					'{{WRAPPER}} .ptm-title' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .ptm-title-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_header_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_header_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-header-description' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_header_description_typography',
				'selector' => '{{WRAPPER}} .ptm-header-description',
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_description_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-header-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_description_align',
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
				'selectors' => [
					'{{WRAPPER}} .ptm-header-description' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_style',
			 [
				 'label' => esc_html__('Pricing',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_color',
			[
				'label' => esc_html__( 'Pricing Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-main-price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_typography',
				'selector' => '{{WRAPPER}} .ptm-main-price',
			]
		);
		$this->add_control(
			'bwdpt_pricing_symbol_color',
			[
				'label' => esc_html__( 'Symbol Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-main-currency' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_symbol_typography',
				'selector' => '{{WRAPPER}} .ptm-main-currency',
			]
		);
		$this->add_control(
			'bwdpt_pricing_duration_color',
			[
				'label' => esc_html__( 'Duration Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-price-duration' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_duration!' => '',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_duration_typography',
				'selector' => '{{WRAPPER}} .ptm-price-duration',
				'condition' => [
					'bwdpt_pricing_duration!' => '',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_separator_color',
			[
				'label' => esc_html__( 'Separator Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_separator_size',
			[
				'label' => esc_html__( 'Separator Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_separator_spacing',
			[
				'label' => esc_html__( 'Separator Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'margin-inline: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount_color',
			[
				'label' => esc_html__( 'Discount Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-discount-price' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_discount_typography',
				'selector' => '{{WRAPPER}} .ptm-discount-price',
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_size',
			[
				'label' => esc_html__( 'Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_round_bg_color',
			[
				'label' => esc_html__( 'Round Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_ribon_style',
			 [
				 'label' => esc_html__('Ribon',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_ribon_typography',
				'selector' => '{{WRAPPER}} .ptm-ribon-title',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_ribon_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_ribon_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .ptm-ribon-title::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribon_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_features_style',
			 [
				 'label' => esc_html__('Features',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_features_typography',
				'selector' => '{{WRAPPER}} .ptm-feature-wrapper .ptm-feature-text',
			]
		);
		$this->add_control(
			'bwdpt_pricing_features_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .ptm-pricing-features svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_features_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper .ptm-feature-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_basic_pricing_table_features_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .ptm-feature-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features i ' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .ptm-pricing-features svg ' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_icon_text_gap',
			[
				'label' => esc_html__( 'Text Gap Form Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper ' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdpt_basic_pricing_table_features_icon_heading',
			[
				'label' => esc_html__( 'Icon Border', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_basic_pricing_table_features_icon_border',
				'selector' => '{{WRAPPER}} .ptm-feature-wrapper .ptm-pricing-features',
			]
		);
		$this->add_control(
			'bwdpt_basic_pricing_table_features_item_heading',
			[
				'label' => esc_html__( 'Item Border', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_basic_pricing_table_features_item_border',
				'selector' => '{{WRAPPER}} .ptm-feature-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper .ptm-pricing-features' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_icon_padding',
			[
				'label' => esc_html__( 'Icon Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper .ptm-pricing-features' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_padding',
			[
				'label' => esc_html__( 'Item Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-feature-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_button_style',
			 [
				 'label' => esc_html__('Button',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->start_controls_tabs(
			'bwdpt_pricing_box_pricing_button_style_tabs'
		);
		$this->start_controls_tab(
			'bwdpt_pricing_box_pricing_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_typography',
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' =>[ 'image' ],
				'selector' => '{{WRAPPER}} .ptm-pricing-signup-btn, {{WRAPPER}} .ptm-pricing-signup-btnb::before, {{WRAPPER}} .ptm-pricing-signup-btna::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style!' => 'style14',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_position_bottom',
			[
				'label' => esc_html__( 'Btn position form top', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'bottom: -{{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => 'style14',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_position_left',
			[
				'label' => esc_html__( 'Btn position form left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => 'style14',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdpt_pricing_box_pricing_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_typography',
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .ptm-pricing-signupb:hover::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_additional_info_style',
			 [
				 'label' => esc_html__('Additional Info',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				 'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_additional_info_typography',
				'selector' => '{{WRAPPER}} .ptm-addition-info',
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_additional_info_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_additional_info_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_additional_info_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_style',
			 [
				 'label' => esc_html__('Box',BWDEB_ROOT_AUTHOR_PRO),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_pricing_box_style_normal_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptm-box-bg, {{WRAPPER}} .ptm-box-bgb::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptm-box-shadow',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-box-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$ptm_title = $settings['bwdpt_pricing_title'];
		$style_num = $settings['bwdpt_pricing_table_style'];
		$ptm_ribbon_title = $settings['bwdpt_ribbon_title'];
		$ptm_header_des = $settings['bwdpt_pricing_description_show_hide'];
		$ptm_currency_symbol = $settings['bwdpt_currency_symbol'];
		$ptm_price_unit = $settings['bwdpt_pricing_unit'];
		$ptm_discount_price_unit = $settings['bwdpt_pricing_discount_unit'];
		$ptm_price_separator = $settings['bwdpt_pricing_table_period_separator'];
		$ptm_price_duration = $settings['bwdpt_pricing_duration'];
		$bwdpt_pricing_btn_text = $settings['bwdpt_pricing_table_btn_text'];
		$bwdpt_pricing_btn_link = $settings['bwdpt_pricing_table_btn_link']['url'];
		$addition_info = $settings['bwdpt_pricing_box_additional_info'];
		$header_des = $settings['bwdpt_pricing_description'];
		$addition_info_show = $settings['bwdpt_pricing_box_additional_info_show_hide'];
		$dicount_price = $settings['bwdpt_pricing_discount'];

		if ( ! empty( $settings['bwdpt_pricing_table_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdpt_pricing_table_btn_link', $settings['bwdpt_pricing_table_btn_link'] );
		}

		if ('style1' === $style_num) { ?>
		<!-- pricing-one-start -->
		<div class="ptm-grid-container">
			<div class="ptm-pricing-card ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-title-wrapper">
					<div class="ptm-title ptm-header-bg"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
					<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
					<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					<span class="ptm-price-separator"> <?php echo esc_html($ptm_price_separator); ?> </span>
					<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
				</div>
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
				<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signupb ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>  
		</div>
		<!-- pricing-one-end -->
		<?php
		} elseif ('style2' === $style_num) { ?>
		<div class="ptm-grid-container ptm-box-shadow">
			<div class="ptm-pricingTable">
				<div class="ptm-pricingTable-header ptm-header-bg">
					<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						</div>
						<span class="ptm-discount-price"><?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"> <?php echo esc_html($ptm_price_separator); ?></span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?></span>
					</div>
				</div>
				<div class="ptm-pricing-content ptm-box-bg">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
    	</div>
		<?php
		} elseif ('style3' === $style_num) { ?>
		 <div class="ptm-grid-container-three">
			<div class="ptm-pricing-three-card ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<div class="ptm-price-inner">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"><?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						</div>
						<div class="ptm-price-sec-bundle">
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<div class="ptm-pricing-signup">
						<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
						<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					</div>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>   
    	</div>
		<?php
		} elseif ('style4' === $style_num) { ?>
		 <div class="ptm-grid-container-four">
			<div class="ptm-pricing-card ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-pricing-card-header ptm-header-bg">
					<div class="ptm-price">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					  <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style5' === $style_num) { ?>
		<div class="ptm-grid-container-five">
			<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
			<div class="ptm-pricing-card ptm-box-bg ptm-box-shadow">
				<div class="ptm-pricing-card-header">
					<div class="ptm-price">
						<div class="ptm-amount">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							</div>
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
						<div class="ptm-circle"><span class="ptm-span-circle"></span></div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style6' === $style_num) { ?> 
		<div class="ptm-grid-container">
			<div class="ptm-pricing ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-title ptm-header-bg"><?php echo esc_html($ptm_title); ?></div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				 </div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<div class="ptm-btn-area">
						<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
						<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					</div>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style7' === $style_num) { ?> 
		<div class="ptm-grid-container-eight">
			<div class="ptm-pricing-table-eight ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<div class="ptm-inner-price">
						<div class="ptm-inner-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
						</div>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
					<div class="ptm-circle"><span class="ptm-span-circle"></span></div>
					<div class="ptm-circle-2"><div class="ptm-span-circle-2"></div></div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-pricing-signup">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style8' === $style_num) { ?>
		<div class="ptm-grid-container-nine ptm-box-shadow">
			<div class="ptm-pricing-table-nine ptm-header-bg">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-pricing-header">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				 </div>
				<div class="ptm-pricing-card-content ptm-box-bg">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<div class="ptm-pricing-signup">
						<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
						<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					</div>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style9' === $style_num) { ?>
		 <div class="ptm-grid-container ptm-grid-container-nine">
			<div class="ptm-price-table ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
					<div class="ptm-btn-area">
						<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
						<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					</div>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style10' === $style_num) { ?>
		<div class="ptm-grid-container-twelve">
			<div class="ptm-price-table ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area ptm-pricing-signup-btn">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style11' === $style_num) { ?>
		<div class="ptm-grid-container-thirteen">
			<div class="ptm-price-table ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-title ptm-header-bg"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>	
		<?php
		} elseif ('style12' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-fourteen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area ptm-pricing-signup-btn ptm-pricing-signup-btnb">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style13' === $style_num) { ?>
		<div class="ptm-grid-container-fifteen">
			<div class="ptm-price-table-fifteen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-price-value">
						<div class="ptm-price-wrap-price">
							<div class="ptm-price-sec-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							</div>
							<div class="ptm-price-bundle">
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							</div>
						</div>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<?php
					if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style14' === $style_num) { ?>
		<div class="ptm-grid-container ptm-grid-container-fourteen">
			<div class="ptm-price-table-sixteen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title ptm-ribon-title-14"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header ptm-header-bg ptm-header-bgb ptm-header-bga">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-aim-14"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style15' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-seventeen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-title ptm-header-bg ptm-header-bgb ptm-header-bga"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				<div class="ptm-btn-area ptm-pricing-signup-btn ptm-pricing-signup-btnb ptm-pricing-signup-btna">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style16' === $style_num) { ?>
		<div class="ptm-grid-container-eighteen">
			<div class="ptm-price-table-eighteen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header">
					<div class="ptm-title ptm-header-bgb"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style17' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-nineteen ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title ptm-ribon-title-17"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header ptm-header-bg ptm-header-bgb ptm-header-bga">
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style18' === $style_num) { ?>
		 <div class="ptm-grid-container-twenty">
			<div class="ptm-price-table-twenty ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-price-header ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						</div>
						<div class="ptm-price-sec-bundle">
							<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area ptm-pricing-signup-btn">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-aipd-18"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style19' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-twenty-one ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title-item">
					<div class="ptm-top-title ptm-header-bg">
						<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
						<div class="ptm-price-header">
							<div class="ptm-price-value">
								<div class="ptm-price-bundle">
									<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
									<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
									<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
									<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
								</div>
								<div class="ptm-price-sec-bundle">
									<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
								</div>
							</div>
						</div>
						<?php if($ptm_header_des === 'yes') { ?>
						<div class="ptm-header-description ptm-pdp-19"><?php echo esc_html($header_des); ?></div><?php } ?>
					</div>
				</div>
				<div class="ptm-pricing-card-content ptm-box-bg">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>	
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style20' === $style_num) { ?>
		<div class="ptm-grid-container-two">
			<div class="ptm-price-table-twenty-two ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				</div>
				<div class="ptm-pricing-card-content ptm-box-bg">
					<?php
					if( $settings['bwdpt_basic_pricing_table_features'] ) {
						foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
						 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
						</div>
						<?php }
						}?>
					<div class="ptm-price-header">
						<div class="ptm-price-value">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
					<div class="ptm-btn-area">
						<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
						<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					</div>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style21' === $style_num) { ?>
		 <div class="ptm-grid-container ptm-grid-container-twenty-three">
			<div class="ptm-price-table-twenty-three ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title ptm-ribon-title-21"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title-item">
					<div class="ptm-top-title ptm-header-bg ptm-header-bgb ptm-header-bga">
						<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					</div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				</div>
				<div class="ptm-price-header">
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style22' === $style_num) { ?>
		<div class="ptm-grid-container-twenty-four">
			<div class="ptm-price-table-twenty-four ptm-box-bgb ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-header">
					<div class="ptm-price-value">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						</div>
						<div class="ptm-price-sec-bundle">
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-api-22"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style23' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-twenty-five ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-header">
					<div class="ptm-price-value">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
							<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						</div>
						<div class="ptm-price-sec-bundle">
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style24' === $style_num) { ?>
		<div class="ptm-grid-container-twenty-six">
			<div class="ptm-price-table-twenty-six ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title ptm-header-bg ptm-header-bgb">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-value">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-aip-24"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style25' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-twenty-seven ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title">
					<div class="ptm-title ptm-header-bg ptm-header-bgb ptm-header-bga"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-value">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-aip-25"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style26' === $style_num) { ?>
		<div class="ptm-grid-container-twenty-eight">
			<div class="ptm-price-table-twenty-eight ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price-value">
						<div class="ptm-price">
							<div class="ptm-price-bundle">
								<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
								<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
								<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
							</div>
							<div class="ptm-price-sec-bundle">
								<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
								<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style27' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-twenty-nine ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-value">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info ptm-aip-27"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		} elseif ('style28' === $style_num) { ?>
		<div class="ptm-grid-container-thirty">
			<div class="ptm-price-table-thirty ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title ptm-ribon-title-28"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-title ptm-header-bg">
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-value">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>	
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
				<div class="ptm-btn-area  ptm-pricing-signup-btn ptm-pricing-signup-btna ptm-pricing-signup-btnb">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style29' === $style_num) { ?>
		<div class="ptm-grid-container">
			<div class="ptm-price-table-thirty-one ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-top-hadder">
					<div class="ptm-title ptm-header-bg"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price-value">
					<div class="ptm-price-bundle">
						<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
						<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo 'ptm-cut-off';} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						<span class="ptm-discount-price"><?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"><?php echo esc_html($ptm_price_separator); ?> </span>
					</div>
					<div class="ptm-price-sec-bundle">
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
					</div>
				</div>
				<div class="ptm-pricing-card-content">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="ptm-feature-wrapper <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo 'exclude'; } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo ' bottom-line';} ?>">
							<span class="ptm-pricing-features"><?php if($item['bwdpt_pricing_show_icon'] === 'yes') { ?><?php \Elementor\Icons_Manager::render_icon( $item['bwdpt_pricing_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?><?php } ?></span><span class="ptm-feature-text"><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
						</div>
					</div>
					<?php }
					}?>
				</div>
				<div class="ptm-btn-area">
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				</div>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>
		</div>
		<?php
		}
	}
}


