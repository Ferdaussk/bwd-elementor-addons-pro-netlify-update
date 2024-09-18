<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\REPEATER;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdpcb_bar_piechart_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdpcb-bar-piechart', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Bar Chart', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-bar-chart';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
        $exad_primary_color   = get_option( 'exad_primary_color_option', '#7a56ff' );

        $this->start_controls_section(
            'exad_chart_settings',
            [
                'label' => esc_html__( 'Settings', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $this->add_control(
            'exad_chart_type',
            [
                'label'             => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => Controls_Manager::SELECT,
                'default'           => 'bar',
                'options'           => [
                    'bar'           => __( 'Vertical Bar (Vertical)', BWDEB_ROOT_AUTHOR_PRO ),
                    'horizontalBar' => __( 'Horozontal Bar (Horozontal)', BWDEB_ROOT_AUTHOR_PRO ),
                ]
            ]
        );

        $this->add_control(
            'exad_chart_enable_grid_lines',
            [
                'label'   => __( 'Enable Grid Lines', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'exad_chart_enable_labelsY',
            [
                'label'   => esc_html__( 'Show Y Axes Labels', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );
        $this->add_control(
            'exad_chart_enable_labelsX',
            [
                'label'   => esc_html__( 'Show X Axes Labels', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'exad_chart_enable_legend',
            [
                'label'   => esc_html__( 'Enable Legends', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'exad_chart_enable_tooltip',
            [
                'label'   => esc_html__( 'Enable Tooltip', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'exad_chart_enable_title',
            [
                'label'   => esc_html__( 'Enable Title', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes'
            ]
        );
        $this->add_control(
			'exad_chart_chart_title',
			[
				'label'       => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'default'     => __( 'Best WP Developer', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'exad_chart_enable_title' => 'yes'
				]
			]
		);

        $this->add_responsive_control(
			'chart_height',
			[
				'label'       => __( 'Chart Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SLIDER,
				'range'       => [
					'px' => [
						'min' => 50,
						'max' => 1500,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 500,
				],
				'selectors'   => [
					'{{WRAPPER}} .bwdexad-chart-wrapper .exad-chart-widget' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
			'axis_range',
			[
				'label'       => __( 'Scale Axis Range', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 30,
				'description' => __( 'Maximum number for the scale.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'step_size',
			[
				'label'       => __( 'Step Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 5,
				'step'        => 1,
				'description' => __( 'Step size for the scale.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'animation_heading',
			[
				'label'     => __( 'Animation', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'chart_animation_duration',
			[
				'label' => __( 'Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 10000,
				'step' => 1,
				'default' => 1000,
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'animation_options',
			[
				'label'     => __( 'Easing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'linear',
				'options'   => [
					'linear'    => __( 'Linear', BWDEB_ROOT_AUTHOR_PRO ),
					'easeInCubic'   => __( 'Ease In Cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'easeInCirc' => __( 'Ease In Circ', BWDEB_ROOT_AUTHOR_PRO ),
					'easeInBounce' => __( 'Ease In Bounce', BWDEB_ROOT_AUTHOR_PRO ),
				]
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'exad_chart_heading',
            [
                'label' => esc_html__( 'Labels', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $chart_label_repeater = new Repeater();

        $chart_label_repeater->add_control(
            'exad_chart_label_name', 
            [
                'label'       => esc_html__( 'Label Name', BWDEB_ROOT_AUTHOR_PRO ),
                'default'     => 2000,
                'type'        => Controls_Manager::TEXT,
                'label_block' => true
            ]
        );

        $this->add_control(
            'exad_chart_labels',
            [
                'type'    => Controls_Manager::REPEATER,
                'fields' 	=> $chart_label_repeater->get_controls(),
                'default' => [
                    [ 'exad_chart_label_name' => '2016' ],
                    [ 'exad_chart_label_name' => '2017' ],
                    [ 'exad_chart_label_name' => '2018' ],
                    [ 'exad_chart_label_name' => '2019' ],
                    [ 'exad_chart_label_name' => '2020' ]
                ],
                'title_field' => '{{exad_chart_label_name}}'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'exad_datasets_content',
            [
                'label'     => __( 'Datasets', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
                    'exad_chart_type!' => [ 'pie' ]
                ]
            ]
        );

        $chart_repeater = new Repeater();

        $chart_repeater->add_control(
            'label', 
            [
                'label'       => __( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Dataset Label', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true
            ]
        );

        $chart_repeater->add_control(
            'data', 
            [
                'label'       => __( 'Data', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( '2; 4; 8; 16; 32', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( 'Enter data values by semicolon separated(;). Example: 2; 4; 8; 16; 32 etc', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $chart_repeater->add_control(
            'advanced_bg_color', 
            [
                'label'       => __( 'Advanced Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SWITCHER,
                'default'     => 'no'
            ]
        );

        $chart_repeater->add_control(
            'bg_color', 
            [
                'label'       => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'default'     => 'rgba(122,86,255,0.5)',
                'type'        => Controls_Manager::COLOR,
                'condition'   => [
                    'advanced_bg_color!' => 'yes'
                ]
            ]
        );


        $chart_repeater->add_control(
            'bg__hover_color', 
            [
                'label'       => __( 'Hover Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'default'     => 'rgba(122,86,255,0.5)',
                'type'        => Controls_Manager::COLOR,
                'condition'   => [
                    'advanced_bg_color!' => 'yes'
                ],
            ]
        );


        $chart_repeater->add_control(
            'exad_chart_individual_bg_colors', 
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Background Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'   => [
                    'advanced_bg_color' => 'yes'
                ]
            ]
        );

        $chart_repeater->add_control(
            'exad_chart_individual_bg__hover_colors', 
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Hover Background Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'   => [
                    'advanced_bg_color' => 'yes'
                ]
            ]
        );

        $chart_repeater->add_control(
            'advanced_border_color', 
            [
                'label'       => __( 'Advanced Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'separator'   => 'before',
                'type'        => Controls_Manager::SWITCHER,
                'default'     => 'no'
            ]
        );

        $chart_repeater->add_control(
            'border_color', 
            [
                'label'       => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'type'        => Controls_Manager::COLOR,
                'condition'   => [
                    'advanced_border_color!' => 'yes'
                ]
            ]
        );

        $chart_repeater->add_control(
            'border_hover_color', 
            [
                'label'       => __( 'Hover Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'type'        => Controls_Manager::COLOR,
                'condition'   => [
                    'advanced_border_color!' => 'yes'
                ]
            ]
        );

        $chart_repeater->add_control(
            'border_colors', 
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Border Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'   => [
                    'advanced_border_color' => 'yes'
                ]
            ]
        );

        $chart_repeater->add_control(
            'border_hovers_colors', 
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Border Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'   => [
                    'advanced_border_color' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'exad_chart_datasets',
            [
                'type'    => Controls_Manager::REPEATER,
                'fields' 	=> $chart_repeater->get_controls(),
                'default' => [
                    [
                        'label'     => __( 'Dataset Label #1', BWDEB_ROOT_AUTHOR_PRO ),
                        'data'      => __( '2; 4; 6; 8; 10', BWDEB_ROOT_AUTHOR_PRO ),
                        'bg_color'  => 'rgba(122,86,255,0.5)',
                        'bg__hover_color'  => 'rgba(122,86,255,0.9)',
                        'exad_chart_individual_bg_colors' => 'rgba(122,86,255,0.5); rgba(0,216,216,0.50); rgba(205,0,234,0.50); rgba(142,36,170,0.5); rgba(63,81,181,0.5)',
                        'exad_chart_individual_bg__hover_colors' => 'rgba(122,86,255,0.9); rgba(0,216,216,0.9); rgba(205,0,234,0.9); rgba(142,36,170,0.9); rgba(63,81,181,0.9)',
                    ],
                    [
                        'label'     => __( 'Dataset Label #2', BWDEB_ROOT_AUTHOR_PRO ),
                        'data'      => __( '4; 8; 12; 16; 20', BWDEB_ROOT_AUTHOR_PRO ),
                        'bg_color'  => 'rgba(0,216,216,0.50)',
                        'bg__hover_color'  => 'rgba(0,216,216,0.9)',
                        'exad_chart_individual_bg_colors' => 'rgba(63,81,181,0.5); rgba(142,36,170,0.5); rgba(205,0,234,0.50); rgba(0,216,216,0.50); rgba(122,86,255,0.5)',
                        'exad_chart_individual_bg__hover_colors' => 'rgba(63,81,181,0.9); rgba(142,36,170,0.9); rgba(205,0,234,0.9); rgba(0,216,216,0.9); rgba(122,86,255,0.9)',
                    ],
                    [
                        'label'     => __( 'Dataset Label #3', BWDEB_ROOT_AUTHOR_PRO ),
                        'data'      => __( '23; 18; 13; 8; 3', BWDEB_ROOT_AUTHOR_PRO ),
                        'bg_color'  => 'rgba(142,36,170,0.5)',
                        'bg__hover_color'  => 'rgba(142,36,170,0.9)',
                        'exad_chart_individual_bg_colors' => 'rgba(122,86,255,0.5); rgba(0,216,216,0.50); rgba(205,0,234,0.50); rgba(142,36,170,0.5); rgba(63,81,181,0.5)',
                        'exad_chart_individual_bg__hover_colors' => 'rgba(122,86,255,0.9); rgba(0,216,216,0.9); rgba(205,0,234,0.9); rgba(142,36,170,0.9); rgba(63,81,181,0.9)',
                    ],
                    [
                        'label'     => __( 'Dataset Label #4', BWDEB_ROOT_AUTHOR_PRO ),
                        'data'      => __( '10; 15; 20; 5; 10', BWDEB_ROOT_AUTHOR_PRO ),
                        'bg_color'  => 'rgba(205,0,234,0.50)',
                        'bg__hover_color'  => 'rgba(205,0,234,0.9)',
                        'exad_chart_individual_bg_colors' => 'rgba(63,81,181,0.5); rgba(142,36,170,0.5); rgba(205,0,234,0.50); rgba(0,216,216,0.50); rgba(122,86,255,0.5)',
                        'exad_chart_individual_bg__hover_colors' => 'rgba(63,81,181,0.9); rgba(142,36,170,0.9); rgba(205,0,234,0.9); rgba(0,216,216,0.9); rgba(122,86,255,0.9)',
                    ],
                    [
                        'label'     => __( 'Dataset Label #5', BWDEB_ROOT_AUTHOR_PRO ),
                        'data'      => __( '5; 15; 25; 10; 20', BWDEB_ROOT_AUTHOR_PRO ),
                        'bg_color'  => 'rgba(63,81,181,0.5)',
                        'bg__hover_color'  => 'rgba(63,81,181,0.9)',
                        'exad_chart_individual_bg_colors' => 'rgba(122,86,255,0.5); rgba(0,216,216,0.50); rgba(205,0,234,0.50); rgba(142,36,170,0.5); rgba(63,81,181,0.5)',
                        'exad_chart_individual_bg__hover_colors' => 'rgba(122,86,255,0.9); rgba(0,216,216,0.9); rgba(205,0,234,0.9); rgba(142,36,170,0.9); rgba(63,81,181,0.9)',
                    ]
                ],
                'title_field' => '{{{ label }}}'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'exad_data_chart_for_and_pie',
            [
                'label'     => __( 'Datasets', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
                    'exad_chart_type' => ['pie']
                ]
            ]
        );

        $this->add_control(
            'single_label',
            [
                'label'       => __( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'default'     => __( 'Polar Dataset Label', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true
            ]
        );

        $this->add_control(
            'single_datasets',
            [
                'label'       => __( 'Data', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'dynamic'     => [ 'active' => true ],
                'type'        => Controls_Manager::TEXT,
                'default'     => '5; 10; 15; 20; 30',
                'description' => __( 'Enter data values by semicolon separated(;). Example: 10; 20; 30; 40; 50 etc', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $this->add_control(
            'single_bg_colors',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Background Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'default'     => 'rgba(122,86,255,0.5); rgba(0,216,216,0.50); rgba(205,0,234,0.50); rgba(142,36,170,0.5); rgba(63,81,181,0.5)',
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $this->add_control(
            'single_border_colors',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => __( 'Border Colors', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
                'description' => __( 'Write multiple color values by semicolon separated(;). Example: #000000; #ffffff; #cccccc; etc<br><strong>N.B: it will not work for line, radar charts</strong>', BWDEB_ROOT_AUTHOR_PRO )
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
			'exad_chart_common',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'exad_chart_border_width',
            [
                'label'    => esc_html__( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'     => Controls_Manager::SLIDER,
                'default'  => [
                    'size' => 0
                ]
            ]
        );

        $this->add_control(
            'exad_chart_grid_color',
            [
                'label'     => esc_html__( 'Grid Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(0,0,0,0.05)',
                'condition' => [
                    'exad_chart_enable_grid_lines' => 'yes'
                ]
            ]
        );

        // $this->add_control(
        //     'exad_chart_tooltip_background_color',
        //     [
        //         'label'     => esc_html__( 'Tooltip Background Color', BWDEB_ROOT_AUTHOR_PRO ),
        //         'type'      => Controls_Manager::COLOR,
        //         'condition' => [
        //             'exad_chart_enable_tooltip' => 'yes'
        //         ]
        //     ]
        // );

        $this->add_responsive_control(
			'layout_padding',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'exad_chart_chart_title_style',
			[
				'label' => esc_html__( 'Title Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'exad_chart_enable_title' => 'yes'
				]
			]
		);

        $this->add_responsive_control(
            'exad_chart_chart_title_position',
            [
                'label'         => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'          => Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-left'
                    ],
                    'top'       => [
                        'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-up'
                    ],
                    'bottom'    => [
                        'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-down'
                    ],
                    'right'     => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-right'
                    ],
                ],
                'default' => 'top',
                'condition'     => [
                    'exad_chart_enable_title' => 'yes'
                ]
            ]
        );

        $this->add_control(
			'title_typography_toggle',
			[
				'label' => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->start_popover();

            $this->add_responsive_control(
                'title_font_size',
                [
                    'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'condition' => [
                        'exad_chart_enable_title' => 'yes',
                        'title_typography_toggle' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'title_font_family',
                [
                    'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::FONT,
                    'default' => '',
                    'condition' => [
                        'exad_chart_enable_title' => 'yes',
                        'title_typography_toggle' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'title_font_weight',
                [
                    'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        '' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
                        '100'    => __( '100', BWDEB_ROOT_AUTHOR_PRO ),
                        '200'    => __( '200', BWDEB_ROOT_AUTHOR_PRO ),
                        '300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
                        '400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
                        '500'    => __( '500', BWDEB_ROOT_AUTHOR_PRO ),
                        '600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
                        '700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO ),
                        '800'    => __( '800', BWDEB_ROOT_AUTHOR_PRO ),
                        '900'    => __( '900', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    'condition' => [
                        'exad_chart_enable_title' => 'yes',
                        'title_typography_toggle' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'title_font_style',
                [
                    'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        ''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
                        'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    'condition' => [
                        'exad_chart_enable_title' => 'yes',
                        'title_typography_toggle' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'title_font_color',
                [
                    'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::COLOR,
                    'condition' => [
                        'exad_chart_enable_title' => 'yes',
                        'title_typography_toggle' => 'yes',
                    ],
                ]
            );

        $this->end_popover();

        $this->add_responsive_control(
            'title_padding',
            [
                'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                    ],
                ],
                'condition' => [
                    'exad_chart_enable_title' => 'yes',
                ]
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
			'exad_chart_legend',
			[
				'label' => esc_html__( 'legend Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'     => [
                    'exad_chart_enable_legend' => 'yes'
                ],
			]
		);

        $this->add_responsive_control(
            'exad_chart_legend_align',
            [
                'label'         => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'          => Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-left'
                    ],
                    'top'       => [
                        'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-up'
                    ],
                    'bottom'    => [
                        'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-down'
                    ],
                    'right'     => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-arrow-right'
                    ],
                ],
                'default' => 'top',
                'condition'     => [
                    'exad_chart_enable_legend' => 'yes'
                ],
            ]
        );

        $this->add_control(
			'legend_box_width',
			[
				'label' => __( 'Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 70,
					],
				],
				'condition'     => [
                    'exad_chart_enable_legend' => 'yes'
                ],
			]
		);

        $this->add_control(
            'legend_typography_toggle',
            [
                'label' => __( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
                'label_on' => __( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'exad_chart_enable_legend' => 'yes'
				]
            ]
		);

		$this->start_popover();

            $this->add_responsive_control(
                'legend_font_size',
                [
                    'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 10,
                        ],
                    ],
                    'condition' => [
                        'exad_chart_enable_legend' => 'yes',
                        'legend_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'legend_font_family',
                [
                    'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::FONT,
                    'default' => '',
                    'condition' => [
                        'exad_chart_enable_legend' => 'yes',
                        'legend_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'legend_font_weight',
                [
                    'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        '' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
                        '300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
                        '400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
                        '600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
                        '700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO )
                    ],
                    'condition' => [
                        'exad_chart_enable_legend' => 'yes',
                        'legend_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'legend_font_style',
                array(
                    'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '',
                    'options' => array(
                        ''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
                        'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
                    ),
                    'condition' => [
                        'exad_chart_enable_legend' => 'yes',
                        'legend_typography_toggle' => 'yes'
                    ]
                )
            );

            $this->add_control(
                'legend_font_color',
                [
                    'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::COLOR,
                    'condition' => [
                        'exad_chart_enable_legend' => 'yes',
                        'legend_typography_toggle' => 'yes'
                    ]
                ]
            );

		$this->end_popover();

        $this->add_responsive_control(
            'legend_padding',
            [
                'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                    ],
                ],
                'condition' => [
                    'exad_chart_enable_legend' => 'yes',
                ]
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
			'exad_chart_labels_Y_axes',
			[
				'label' => esc_html__( 'Y Axes Label', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'     => [
                    'exad_chart_enable_labelsY' => 'yes'
                ],
			]
		);

        $this->add_responsive_control(
			'labels_padding_Y_axes',
			[
				'label'       => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SLIDER,
                'condition'     => [
                    'exad_chart_enable_labelsY' => 'yes'
                ],
			]
		);

        $this->add_control(
            'labels_yaxes_typography_toggle',
            [
                'label' => __( 'Y Axes Typography', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
                'label_on' => __( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'exad_chart_enable_labelsY' => 'yes'
				]
            ]
		);

		$this->start_popover();

            $this->add_control(
                'labels_yaxes_font_size',
                [
                    'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 50,
                        ],
                    ],
                    'condition' => [
                        'exad_chart_enable_labelsY' => 'yes',
                        'labels_yaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_yaxes_font_family',
                [
                    'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::FONT,
                    'default' => '',
                    'condition' => [
                        'exad_chart_enable_labelsY' => 'yes',
                        'labels_yaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_yaxes_font_weight',
                [
                    'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        '' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
                        '300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
                        '400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
                        '600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
                        '700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO )
                    ],
                    'condition' => [
                        'exad_chart_enable_labelsY' => 'yes',
                        'labels_yaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_yaxes_font_style',
                array(
                    'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '',
                    'options' => array(
                        ''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
                        'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
                    ),
                    'condition' => [
                        'exad_chart_enable_labelsY' => 'yes',
                        'labels_yaxes_typography_toggle' => 'yes'
                    ]
                )
            );

            $this->add_control(
                'labels_yaxes_font_color',
                [
                    'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::COLOR,
                    'condition' => [
                        'exad_chart_enable_labelsY' => 'yes',
                        'labels_yaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

		$this->end_popover();

        $this->end_controls_section();

        $this->start_controls_section(
			'exad_chart_labels_X_axes',
			[
				'label' => esc_html__( 'X Axes Label', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'     => [
                    'exad_chart_enable_labelsX' => 'yes'
                ],
			]
		);

        $this->add_responsive_control(
			'labels_padding_x_axes',
			[
				'label'       => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SLIDER,
                'condition'     => [
                    'exad_chart_enable_labelsX' => 'yes'
                ],
			]
		);

        $this->add_control(
            'labels_xaxes_typography_toggle',
            [
                'label' => __( 'X Axes Typography', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
                'label_on' => __( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'exad_chart_enable_labelsX' => 'yes'
				]
            ]
		);

		$this->start_popover();

            $this->add_control(
                'labels_xaxes_font_size',
                [
                    'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 50,
                        ],
                    ],
                    'condition' => [
                        'exad_chart_enable_labelsX' => 'yes',
                        'labels_Xaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_xaxes_font_family',
                [
                    'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::FONT,
                    'default' => '',
                    'condition' => [
                        'exad_chart_enable_labelsX' => 'yes',
                        'labels_xaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_xaxes_font_weight',
                [
                    'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        '' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
                        '100'    => __( '100', BWDEB_ROOT_AUTHOR_PRO ),
                        '200'    => __( '200', BWDEB_ROOT_AUTHOR_PRO ),
                        '300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
                        '400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
                        '500'    => __( '500', BWDEB_ROOT_AUTHOR_PRO ),
                        '600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
                        '700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO ),
                        '800'    => __( '800', BWDEB_ROOT_AUTHOR_PRO ),
                        '900'    => __( '900', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    'condition' => [
                        'exad_chart_enable_labelsX' => 'yes',
                        'labels_xaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'labels_xaxes_font_style',
                array(
                    'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '',
                    'options' => array(
                        ''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
                        'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                        'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
                        'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
                    ),
                    'condition' => [
                        'exad_chart_enable_labelsX' => 'yes',
                        'labels_xaxes_typography_toggle' => 'yes'
                    ]
                )
            );

            $this->add_control(
                'labels_xaxes_font_color',
                [
                    'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::COLOR,
                    'condition' => [
                        'exad_chart_enable_labelsX' => 'yes',
                        'labels_xaxes_typography_toggle' => 'yes'
                    ]
                ]
            );

		$this->end_popover();

        $this->end_controls_section();



        $this->start_controls_section(
			'_section_style_tooltip',
			[
				'label' => __( 'Tooltip', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_padding',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_border_width',
			[
				'label' => __( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 20,
					],
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_caret_size',
			[
				'label' => __( 'Caret Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_mode',
			[
				'label'   => esc_html__( 'Mode', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Select Mode', BWDEB_ROOT_AUTHOR_PRO ),
					'nearest' => __( 'Nearest', BWDEB_ROOT_AUTHOR_PRO ),
					'index' => __( 'Index', BWDEB_ROOT_AUTHOR_PRO ),
					'x' => __( 'X', BWDEB_ROOT_AUTHOR_PRO ),
					'y' => __( 'Y', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => '',
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
				]
			]
		);

		$this->add_control(
			'tooltip_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::COLOR,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::COLOR,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_title_typography_toggle',
			[
				'label' => __( 'Title Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => __( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes'
				]
			]
		);

		$this->start_popover();

		$this->add_control(
			'tooltip_title_font_size',
			[
				'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_title_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_title_font_family',
			[
				'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::FONT,
				'default' => '',
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_title_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_title_font_weight',
			[
				'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
					'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
					'300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
					'400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
					'600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
					'700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_title_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_title_font_style',
			[
				'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
					'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
					'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_title_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_title_font_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_title_typography_toggle' => 'yes'
				]
			]
		);

		$this->end_popover();

		$this->add_control(
			'tooltip_body_typography_toggle',
			[
				'label' => __( 'Body Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => __( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes'
				]
			]
		);

		$this->start_popover();

		$this->add_control(
			'tooltip_body_font_size',
			[
				'label' => __( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_body_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_body_font_family',
			[
				'label' => __( 'Font Family', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::FONT,
				'default' => '',
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_body_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_body_font_weight',
			[
				'label'   => esc_html__( 'Font Weight', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'normal' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
					'bold'   => __( 'Bold', BWDEB_ROOT_AUTHOR_PRO ),
					'300'    => __( '300', BWDEB_ROOT_AUTHOR_PRO ),
					'400'    => __( '400', BWDEB_ROOT_AUTHOR_PRO ),
					'600'    => __( '600', BWDEB_ROOT_AUTHOR_PRO ),
					'700'    => __( '700', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_body_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_body_font_style',
			[
				'label'   => esc_html__( 'Font Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					''        => __( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'normal'  => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
					'italic'  => __( 'Italic', BWDEB_ROOT_AUTHOR_PRO ),
					'oblique' => __( 'Oblique', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_body_typography_toggle' => 'yes'
				]
			]
		);

		$this->add_control(
			'tooltip_body_font_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'exad_chart_enable_tooltip' => 'yes',
					'tooltip_body_typography_toggle' => 'yes'
				]
			]
		);

		$this->end_popover();

		$this->end_controls_section();



    }

	protected function render( ) { 
        $settings          = $this->get_settings_for_display();
        $labels            = array_column( $settings['exad_chart_labels'], 'exad_chart_label_name' );
        $exad_all_datasets = $exad_chart_datasets = $exad_chart_settings_options = [];

        if ( 'pie' === $settings['exad_chart_type'] ) :
            $single_data = array_map( 'intval', explode( ';', $settings['single_datasets'] ) );

            $exad_all_datasets[] = [ 'data' => $single_data, 'backgroundColor' => explode( ';', $settings['single_bg_colors'] ) ];

            if ( $settings['single_border_colors'] ) :
                $exad_all_datasets[] = [ 'data' => $single_data, 'borderColor' => explode( ';', $settings['single_border_colors'] ) ];
            endif;
            $exad_all_datasets[] = [ 'data' => $single_data, 'borderWidth' => $settings['exad_chart_border_width']['size'] ];

        else :
            foreach ( $settings['exad_chart_datasets'] as $dataset ) :

                $exad_chart_datasets['label'] = $dataset['label'];
                $exad_chart_datasets['data']  =  array_map( 'intval', explode(';', $dataset['data'] ) );                

                if ( 'yes' === $dataset['advanced_bg_color'] && '' !== $dataset['exad_chart_individual_bg_colors'] ) :
                    $exad_chart_datasets['backgroundColor'] = explode( '; ', $dataset['exad_chart_individual_bg_colors'] );
                    $exad_chart_datasets['hoverBackgroundColor'] = explode( '; ', $dataset['exad_chart_individual_bg__hover_colors'] );
                else :
                    $exad_chart_datasets['backgroundColor'] = $dataset['bg_color'];
                    $exad_chart_datasets['hoverBackgroundColor'] = $dataset['bg__hover_color'];
                endif;

                if ( 'yes' === $dataset['advanced_border_color'] && '' !== $dataset['border_colors'] ) :
                    $exad_chart_datasets['borderColor'] = explode( ';', $dataset['border_colors'] );
                    $exad_chart_datasets['hoverBorderColor'] = explode( ';', $dataset['border_hovers_colors'] );
                else :
                    $exad_chart_datasets['borderColor'] = $dataset['border_color'];
                    $exad_chart_datasets['hoverBorderColor'] = $dataset['border_hover_color'];
                endif;

                $exad_chart_datasets['borderWidth'] = $settings['exad_chart_border_width']['size'];             
                $exad_all_datasets[] = $exad_chart_datasets;

            endforeach;
        endif;

        //tooltip
        if ( $settings['exad_chart_enable_tooltip'] ) :

            $exad_chart_settings_options['tooltips']  = [ 
                'enabled' => true,
                'backgroundColor' 	=> !empty( $settings['tooltip_background_color'] ) ? $settings['tooltip_background_color'] : 'rgba(0, 0, 0, .7)',
                'borderWidth' 		=> !empty( $settings['tooltip_border_width']['size'] ) ? $settings['tooltip_border_width']['size'] : 0,
                'borderColor' 		=> !empty( $settings['tooltip_border_color'] ) ? $settings['tooltip_border_color'] : 'rgba(0, 0, 0, 0.1)',
                'titleFontFamily' 	=> !empty( $settings['tooltip_title_font_family'] ) ? $settings['tooltip_title_font_family'] : 'auto',
                'titleFontSize'   	=> !empty( $settings['tooltip_title_font_size']['size'] ) ? $settings['tooltip_title_font_size']['size'] : 12,
                'titleFontStyle'	=> (!empty( $settings['tooltip_title_font_style'] ) ? $settings['tooltip_title_font_style'] : '') . ' ' . (!empty( $settings['tooltip_title_font_weight'] ) ? $settings['tooltip_title_font_weight'] : ''),
                'titleFontColor'  	=> !empty( $settings['tooltip_title_font_color'] ) ? $settings['tooltip_title_font_color'] : '#fff',
                'bodyFontFamily' 	=> !empty( $settings['tooltip_body_font_family'] ) ? $settings['tooltip_body_font_family'] : 'auto',
                'bodyFontSize'   	=> !empty( $settings['tooltip_body_font_size']['size'] ) ? $settings['tooltip_body_font_size']['size'] : 11,
                'bodyFontStyle'  	=> (!empty( $settings['tooltip_body_font_style'] ) ? $settings['tooltip_body_font_style'] : '') . ' ' . (!empty( $settings['tooltip_body_font_weight'] ) ? $settings['tooltip_body_font_weight'] : ''),
                'bodyFontColor'  	=> !empty( $settings['tooltip_body_font_color'] ) ? $settings['tooltip_body_font_color'] : '#f7f7f7',
                'cornerRadius'  	=> !empty( $settings['tooltip_border_radius']['size'] ) ? $settings['tooltip_border_radius']['size'] : 6,
                'xPadding'  		=> !empty( $settings['tooltip_padding']['size'] ) ? $settings['tooltip_padding']['size'] : 6,
                'yPadding'  		=> !empty( $settings['tooltip_padding']['size'] ) ? $settings['tooltip_padding']['size'] : 6,
                'caretSize'  		=> !empty( $settings['tooltip_caret_size']['size'] ) ? $settings['tooltip_caret_size']['size'] : 5,
                'mode' 				=> !empty( $settings['tooltip_mode'] ) ? $settings['tooltip_mode'] : 'nearest',
            ];
        else :
            $exad_chart_settings_options['tooltips'] = [ 'enabled' => false ];
        endif;

        //legend
        if ( $settings['exad_chart_enable_legend'] ) :

            $exad_chart_settings_options['legend']  = [ 
                'display' => true,
                'position' => $settings['exad_chart_legend_align'],
                'labels' => [
                    'boxWidth'   => !empty( $settings['legend_box_width']['size'] ) ? $settings['legend_box_width']['size'] : 45,
                    'fontFamily' => !empty( $settings['legend_font_family'] ) ? $settings['legend_font_family'] : 'auto',
                    'fontSize'   => !empty( $settings['legend_font_size']['size'] ) ? $settings['legend_font_size']['size'] : 15,
                    'fontStyle'  => (!empty( $settings['legend_font_style'] ) ? $settings['legend_font_style'] : '') . ' ' . (!empty( $settings['legend_font_weight'] ) ? $settings['legend_font_weight'] : ''),
                    'fontColor'  => !empty( $settings['legend_font_color'] ) ? $settings['legend_font_color'] : '#222',
                    'padding' => !empty( $settings['legend_padding']['size'] ) ? $settings['legend_padding']['size'] : 10,
                ],
            ];
        else :
            $exad_chart_settings_options['legend'] = [ 'display' => false ];
        endif;

        //title
        if ( $settings['exad_chart_enable_title'] ) :

            $exad_chart_settings_options['title']  = [ 
                'display' => true,
                'text' => $settings['exad_chart_chart_title'],
                'position' => $settings['exad_chart_chart_title_position'],
				'fontFamily' => !empty( $settings['title_font_family'] ) ? $settings['title_font_family'] : 'auto',
				'fontSize'   => !empty( $settings['title_font_size']['size'] ) ? $settings['title_font_size']['size'] : 22,
				'fontStyle'  => (!empty( $settings['title_font_style'] ) ? $settings['title_font_style'] : '') . ' ' . (!empty( $settings['title_font_weight'] ) ? $settings['title_font_weight'] : ''),
				'fontColor'  => !empty( $settings['title_font_color'] ) ? $settings['title_font_color'] : '#222',
                'padding' => !empty( $settings['title_padding']['size'] ) ? $settings['title_padding']['size'] : 0,
            ];
        else :
            $exad_chart_settings_options['title'] = [ 'display' => false ];
        endif;

        //layout
        $exad_chart_settings_options['layout'] = [
            'padding' => [
                'top' => $settings['layout_padding']['top'],
                'right' => $settings['layout_padding']['right'],
                'bottom' => $settings['layout_padding']['bottom'],
                'left' => $settings['layout_padding']['left']
            ]
        ];

        //animations
        $exad_chart_settings_options['animation'] = [
            'easing' => $settings['animation_options'],
			'duration' => $settings['chart_animation_duration'],
        ];




        if ( 'pie' !== $settings['exad_chart_type'] ) :
            if ( $settings['exad_chart_enable_grid_lines'] ) :
                $exad_chart_settings_options['scales'] = [
                    'yAxes' => [
                        [
                            'ticks' => [
                                'display' => ( $settings['exad_chart_enable_labelsY'] ) ? true : false,
                                'beginAtZero' => true,
                                'max'         => isset( $settings['axis_range'] ) ? $settings['axis_range'] : 30,
                                'stepSize'    => isset( $settings['step_size'] ) ? $settings['step_size'] : 1,
                                'fontFamily' => !empty( $settings['labels_yaxes_font_family'] ) ? $settings['labels_yaxes_font_family'] : 'auto',
                                'fontSize'   => !empty( $settings['labels_yaxes_font_size']['size'] ) ? $settings['labels_yaxes_font_size']['size'] : 12,
                                'fontStyle'  => (!empty( $settings['labels_yaxes_font_style'] ) ? $settings['labels_yaxes_font_style'] : '') . ' ' . (!empty( $settings['labels_yaxes_font_weight'] ) ? $settings['labels_yaxes_font_weight'] : ''),
                                'fontColor'  => !empty( $settings['labels_yaxes_font_color'] ) ? $settings['labels_yaxes_font_color'] : '#222',
                                'padding' 	 => !empty( $settings['labels_padding_Y_axes']['size'] ) ? $settings['labels_padding_Y_axes']['size'] : 10,
                        ],
                            'gridLines' => [
                                'drawBorder' => false,
                                'color' => $settings['exad_chart_grid_color']
                            ]
                        ]
                    ],
                    'xAxes' => [
                        [
                            'ticks' => [
                                'display' => ( $settings['exad_chart_enable_labelsX'] ) ? true : false,
                                'beginAtZero' => true,
                                'max'         => isset( $settings['axis_range'] ) ? $settings['axis_range'] : 30,
                                'stepSize'    => isset( $settings['step_size'] ) ? $settings['step_size'] : 1,
                                'fontFamily' => !empty( $settings['labels_xaxes_font_family'] ) ? $settings['labels_xaxes_font_family'] : 'auto',
                                'fontSize'   => !empty( $settings['labels_xaxes_font_size']['size'] ) ? $settings['labels_xaxes_font_size']['size'] : 12,
                                'fontStyle'  => (!empty( $settings['labels_xaxes_font_style'] ) ? $settings['labels_xaxes_font_style'] : '') . ' ' . (!empty( $settings['labels_xaxes_font_weight'] ) ? $settings['labels_xaxes_font_weight'] : ''),
                                'fontColor'  => !empty( $settings['labels_xaxes_font_color'] ) ? $settings['labels_xaxes_font_color'] : '#222',
                                'padding' 	 => !empty( $settings['labels_padding_X_axes']['size'] ) ? $settings['labels_padding_X_axes']['size'] : 10,
                            ],
                            'gridLines' => [
                                'drawBorder' => false,
                                'color' => $settings['exad_chart_grid_color']
                            ]
                        ]
                    ]
                ];
            else :
                $exad_chart_settings_options['scales'] = [
                    'yAxes' => [
                        [
                            'ticks' => [
                                'display' => ( $settings['exad_chart_enable_labelsY'] ) ? true : false,
                                'beginAtZero' => true,
                                'max'         => isset( $settings['axis_range'] ) ? $settings['axis_range'] : 30,
                                'stepSize'    => isset( $settings['step_size'] ) ? $settings['step_size'] : 1,
                                'fontFamily' => !empty( $settings['labels_yaxes_font_family'] ) ? $settings['labels_yaxes_font_family'] : 'auto',
                                'fontSize'   => !empty( $settings['labels_yaxes_font_size']['size'] ) ? $settings['labels_yaxes_font_size']['size'] : 12,
                                'fontStyle'  => (!empty( $settings['labels_yaxes_font_style'] ) ? $settings['labels_yaxes_font_style'] : '') . ' ' . (!empty( $settings['labels_yaxes_font_weight'] ) ? $settings['labels_yaxes_font_weight'] : ''),
                                'fontColor'  => !empty( $settings['labels_yaxes_font_color'] ) ? $settings['labels_yaxes_font_color'] : '#222',
                                'padding' 	 => !empty( $settings['labels_padding_Y_axes']['size'] ) ? $settings['labels_padding_Y_axes']['size'] : 10,
                            ],
                            'gridLines' => [
                                'display' => false
                            ]
                        ]
                    ],
                    'xAxes' => [
                        [
                            'ticks' => [
                                'display' => ( $settings['exad_chart_enable_labelsX'] ) ? true : false,
                                'beginAtZero' => true,
                                'max'         => isset( $settings['axis_range'] ) ? $settings['axis_range'] : 30,
                                'stepSize'    => isset( $settings['step_size'] ) ? $settings['step_size'] : 1,
                                'fontFamily' => !empty( $settings['labels_xaxes_font_family'] ) ? $settings['labels_xaxes_font_family'] : 'auto',
                                'fontSize'   => !empty( $settings['labels_xaxes_font_size']['size'] ) ? $settings['labels_xaxes_font_size']['size'] : 12,
                                'fontStyle'  => (!empty( $settings['labels_xaxes_font_style'] ) ? $settings['labels_xaxes_font_style'] : '') . ' ' . (!empty( $settings['labels_xaxes_font_weight'] ) ? $settings['labels_xaxes_font_weight'] : ''),
                                'fontColor'  => !empty( $settings['labels_xaxes_font_color'] ) ? $settings['labels_xaxes_font_color'] : '#222',
                                'padding' 	 => !empty( $settings['labels_padding_X_axes']['size'] ) ? $settings['labels_padding_X_axes']['size'] : 10,
                            ],
                            'gridLines' => [
                                'display' => false
                            ]
                        ]
                    ]
                ];
            endif;
        endif;

        $this->add_render_attribute( 
            'exad_chart_wrapper', 
            [ 
                'class'                => 'bwdexad-chart-wrapper',
                'data-settings'        => [
                    wp_json_encode( array_filter( [
                        'type'         => $settings['exad_chart_type'],
                        'data'         => [
                            'labels'   => $labels,
                            'datasets' => $exad_all_datasets
                        ],
                        'options'      => $exad_chart_settings_options
                    ] ) )                           
                ]
            ]
        );

        $this->add_render_attribute( 
            'exad_chart_canvas', 
            [ 
				'class' => 'exad-chart-widget',
				'id'    => 'exad-chart-' . $this->get_id()
            ]
        );
        ?>

        <div <?php echo $this->get_render_attribute_string( 'exad_chart_wrapper' ); ?>>
            <canvas <?php echo $this->get_render_attribute_string( 'exad_chart_canvas' ); ?>></canvas>
        </div>
        
    <?php
    }
}
