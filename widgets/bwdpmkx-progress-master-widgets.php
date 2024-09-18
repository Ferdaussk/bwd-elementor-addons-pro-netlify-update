<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BWDEB_Helper_AUTHOR {
    const bwdpmkx_ALLOWED_HTML_TAGS = [
		'article',
		'aside',
		'div',
		'footer',
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'header',
		'main',
		'nav',
		'p',
		'section',
		'span',
	];
    public static function bwdpmkx_validate_html_tag( $tag ){
	    return in_array( strtolower( $tag ), self::bwdpmkx_ALLOWED_HTML_TAGS ) ? $tag : 'div';
    }
    public static function bwdpmkx_wp_kses( $text ) {
		return wp_kses( $text, self::bwdpmkx_allowed_tags(), array_merge( wp_allowed_protocols(), [ 'data' ] ) );
	}
    public static function bwdpmkx_allowed_tags() {
		return [
			'a'       => [
				'href'   => [],
				'title'  => [],
				'class'  => [],
				'rel'    => [],
				'id'     => [],
				'style'  => [],
				'target' => [],
			],
			'q'       => [
				'cite'  => [],
				'class' => [],
				'id'    => [],
			],
			'img'     => [
				'src'    => [],
				'alt'    => [],
				'height' => [],
				'width'  => [],
				'class'  => [],
				'id'     => [],
				'style'  => []
			],
			'span'    => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'dfn'     => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'time'    => [
				'datetime' => [],
				'class'    => [],
				'id'       => [],
				'style'    => [],
			],
			'cite'    => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'hr'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'b'       => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'p'       => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'i'       => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'u'       => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			's'       => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'br'      => [],
			'em'      => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'code'    => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'mark'    => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'small'   => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'abbr'    => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'strong'  => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'del'     => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'ins'     => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'sub'     => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'sup'     => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'div'     => [
				'class' => [],
				'id'    => [],
				'style' => []
			],
			'strike'  => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'acronym' => [],
			'h1'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'h2'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'h3'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'h4'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'h5'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'h6'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'button'  => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'center'  => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'ul'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'ol'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'li'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'table'   => [
				'class' => [],
				'id'    => [],
				'style' => [],
				'dir'   => [],
				'align' => [],
			],
			'thead'   => [
				'class' => [],
				'id'    => [],
				'style' => [],
				'align' => [],
			],
			'tbody'   => [
				'class' => [],
				'id'    => [],
				'style' => [],
				'align' => [],
			],
			'tfoot'   => [
				'class' => [],
				'id'    => [],
				'style' => [],
				'align' => [],
			],
			'th'      => [
				'class'   => [],
				'id'      => [],
				'style'   => [],
				'align'   => [],
				'colspan' => [],
				'rowspan' => [],
			],
			'tr'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
				'align' => [],
			],
			'td'      => [
				'class'   => [],
				'id'      => [],
				'style'   => [],
				'align'   => [],
				'colspan' => [],
				'rowspan' => [],
			],
		];
	}
}



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdpmkx_ProgressKit_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdpmkx-progress-master-kit', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Progress Master Kit', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-import-export bwdpmkx-ProgressKit-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls()
    {

        /*-----------------------------------------------------------------------------------*/
        /*  CONTENT TAB
        /*-----------------------------------------------------------------------------------*/

        /**
         * Content Tab: Layout
         */

        $this->start_controls_section(
			'progress_bar_section_layout',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'progress_bar_layout',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'line',
				'options' => [
					'line' => esc_html__( 'Line', BWDEB_ROOT_AUTHOR_PRO ),
                    'line_rainbow' => __('Line Rainbow', BWDEB_ROOT_AUTHOR_PRO),
                    'circle' => __('Circle', BWDEB_ROOT_AUTHOR_PRO),
                    'circle_fill' => __('Circle Fill', BWDEB_ROOT_AUTHOR_PRO),
                    'half_circle' => __('Half Circle', BWDEB_ROOT_AUTHOR_PRO),
                    'half_circle_fill' => __('Half Circle Fill', BWDEB_ROOT_AUTHOR_PRO),
                    'box' => __('Box', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

        $this->add_control(
            'progress_bar_title',
            [
                'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => __('Progress Bar', BWDEB_ROOT_AUTHOR_PRO),
                'separator' => 'before',
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'progress_bar_title_html_tag',
            [
                'label' => __('Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'h1' => __('H1', BWDEB_ROOT_AUTHOR_PRO),
                    'h2' => __('H2', BWDEB_ROOT_AUTHOR_PRO),
                    'h3' => __('H3', BWDEB_ROOT_AUTHOR_PRO),
                    'h4' => __('H4', BWDEB_ROOT_AUTHOR_PRO),
                    'h5' => __('H5', BWDEB_ROOT_AUTHOR_PRO),
                    'h6' => __('H6', BWDEB_ROOT_AUTHOR_PRO),
                    'div' => __('div', BWDEB_ROOT_AUTHOR_PRO),
                    'span' => __('span', BWDEB_ROOT_AUTHOR_PRO),
                    'p' => __('p', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'div',
                'separator' => 'after',
            ]
        );


        $this->add_control(
            'progress_bar_title_inner_show',
            [
                'label' => esc_html__('Inner Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => '',
                'condition' => [
                    'progress_bar_layout' => ['line', 'line_rainbow'],
                ],
            ]
        );

        $this->add_control(
            'progress_bar_title_inner',
            [
                'label' => __('Inner Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => __('Progress Bar', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'progress_bar_layout' => ['line', 'line_rainbow'],
                    'progress_bar_title_inner_show' => 'yes',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'progress_bar_value_type',
            [
                'label' => esc_html__('Counter Value Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'static' => __('Static', BWDEB_ROOT_AUTHOR_PRO),
                    'dynamic' => __('Dynamic', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'separator' => 'before',
                'default' => 'static',
            ]
        );

        $this->add_control(
            'progress_bar_value',
            [
                'label' => __('Counter Value', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'condition' => [
                    'progress_bar_value_type' => 'static',
                ],
            ]
        );

        $this->add_control(
            'progress_bar_value_dynamic',
            [
                'label' => __('Counter Value', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'progress_bar_value_type' => 'dynamic',
                ],
            ]
        );

        $this->add_control(
            'progress_bar_show_count',
            [
                'label' => esc_html__('Display Count', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'progress_bar_animation_duration',
            [
                'label' => __('Animation Duration', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 1000,
                        'max' => 10000,
                        'step' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1500,
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_prefix_label',
            [
                'label' => __('Prefix Label', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'default' => __('Prefix', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'progress_bar_layout' => 'half_circle',
                ],
                'separator' => 'before',
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'progress_bar_postfix_label',
            [
                'label' => __('Postfix Label', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'default' => __('Postfix', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'progress_bar_layout' => 'half_circle',
                ],
                'separator' => 'before',
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->end_controls_section();

        /*-----------------------------------------------------------------------------------*/
        /*  STYLE TAB
        /*-----------------------------------------------------------------------------------*/

        /**
         * Style Tab: General(Line)
         */

        $this->start_controls_section(
            'progress_bar_section_style_general_line',
            [
                'label' => __('General', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'progress_bar_layout' => ['line', 'line_rainbow'],
                ],
            ]
        );

        $this->add_control(
            'progress_bar_line_alignment',
            [
                'label' => __('Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab: Background
         */
        $this->start_controls_section(
            'progress_bar_section_style_bg',
            [
                'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'progress_bar_layout' => ['line', 'line_rainbow'], // ['line', 'line_rainbow'] ( Pro Only )
                ],
            ]
        );

        $this->add_control(
            'progress_bar_line_width',
            [
                'label' => __('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line-container' => 'width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

        $this->add_control(
            'progress_bar_line_height',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 12,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line' => 'height: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'progress_bar_title_inner_show!' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'progress_bar_line_height_inner_title',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 24,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line' => 'height: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'progress_bar_title_inner_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'progress_bar_line_bg_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#eee',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line' => 'background-color: {{VALUE}}',
                ],
                'separator' => 'before',
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab: Fill
         */
        $this->start_controls_section(
            'progress_bar_section_style_fill',
            [
                'label' => __('Fill', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'progress_bar_layout' => ['line', 'line_rainbow'], // will here ['line', 'line_rainbow'] ( Pro Only )
                ],
            ]
        );

        $this->add_control(
            'progress_bar_line_fill_height',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 12,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line-fill' => 'height: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'progress_bar_title_inner_show!' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'progress_bar_line_fill_height_inner_title',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 24,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line-fill' => 'height: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'progress_bar_title_inner_show' => 'yes',
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'progress_bar_line_fill_color',
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'exclude' => [
                    'image',
                ],
                'condition' => [
                    'progress_bar_layout' => ['line'],
                ],
                'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-line-fill',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_line_fill_stripe',
            [
                'label' => __('Show Stripe', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'progress_bar_layout' => ['line'],
                ],
                'default' => 'no',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_line_fill_stripe_animate',
            [
                'label' => __('Stripe Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'normal' => __('Left To Right', BWDEB_ROOT_AUTHOR_PRO),
                    'reverse' => __('Right To Left', BWDEB_ROOT_AUTHOR_PRO),
                    'none' => __('Disabled', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'none',
                'condition' => [
                    'progress_bar_line_fill_stripe' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab: General(Circle)
         */

        $this->start_controls_section(
            'progress_bar_section_style_general_circle',
            [
                'label' => __('General', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'progress_bar_layout' => ['circle', 'half_circle', 'circle_fill', 'half_circle_fill'],
                ],
            ]
        );

        $this->add_control(
            'progress_bar_circle_alignment',
            [
                'label' => __('Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
            ]
        );

        $this->add_control(
            'progress_bar_circle_size',
            [
                'label' => __('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdpmkx-progressbar-half-circle' => 'width: {{SIZE}}{{UNIT}}; height: calc({{SIZE}} / 2 * 1{{UNIT}});',
                    '{{WRAPPER}} .bwdpmkx-progressbar-half-circle-after' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-shadow' => 'width: calc({{SIZE}}{{UNIT}} + 20px); height: calc({{SIZE}}{{UNIT}} + 20px);',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_circle_bg_color',
            [
                'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-inner' => 'background-color: {{VALUE}}',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_circle_stroke_width',
            [
                'label' => __('Stroke Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 12,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-inner' => 'border-width: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-half' => 'border-width: {{SIZE}}{{UNIT}}',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'progress_bar_circle_stroke_color',
            [
                'label' => __('Stroke Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#eee',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-inner' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'progress_bar_circle_fill_color',
            [
                'label' => __('Fill Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#dc3545',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-half' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .bwdpmkx-progressbar-circle-fill .bwdpmkx-progressbar-circle-half' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .bwdpmkx-progressbar-half-circle-fill .bwdpmkx-progressbar-circle-half' => 'background-color: {{VALUE}}',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'progress_bar_circle_box_shadow',
                'label' => __('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-circle-shadow',
                'condition' => [
                    'progress_bar_layout' => 'circle',
                ],
                'separator' => 'before',
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab: General(Box)
         */
        $this->start_controls_section('progress_bar_section_style_general_box', [
            'label' => __('General', BWDEB_ROOT_AUTHOR_PRO),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'condition' => [
                'progress_bar_layout' => 'box',
            ],
        ]);

        $this->add_control('progress_bar_box_alignment', [
            'label' => __('Alignment', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
        ]);

        $this->add_control('progress_bar_box_width', [
            'label' => __('Width', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 100,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 140,
            ],
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box' => 'width: {{SIZE}}{{UNIT}};',
            ],
            'separator' => 'before',
        ]);

        $this->add_control('progress_bar_box_height', [
            'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 100,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 200,
            ],
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box' => 'height: {{SIZE}}{{UNIT}};',
            ],
        ]);

        $this->add_control('progress_bar_box_bg_color', [
            'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#fff',
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box' => 'background-color: {{VALUE}}',
            ],
            'separator' => 'before',
        ]);

        $this->add_control('progress_bar_box_fill_color', [
            'label' => __('Fill Color', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#dc3545',
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box-fill' => 'background-color: {{VALUE}}',
            ],
            'separator' => 'before',
        ]);

        $this->add_control('progress_bar_box_stroke_width', [
            'label' => __('Stroke Width', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 1,
            ],
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box' => 'border-width: {{SIZE}}{{UNIT}}',
            ],
            'separator' => 'before',
        ]);

        $this->add_control('progress_bar_box_stroke_color', [
            'label' => __('Stroke Color', BWDEB_ROOT_AUTHOR_PRO),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#eee',
            'selectors' => [
                '{{WRAPPER}} .bwdpmkx-progressbar-box' => 'border-color: {{VALUE}}',
            ],
        ]);

        $this->end_controls_section();
    

        /**
         * Style Tab: Typography
         */
        $this->start_controls_section(
            'progress_bar_section_style_typography',
            [
                'label' => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'progress_bar_title_typography',
				'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-title',
			]
		);

        $this->add_control(
            'progress_bar_title_color',
            [
                'label' => __('Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-title' => 'color: {{VALUE}}',
                ],
                'separator' => 'after',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'progress_bar_inner_title_typography',
				'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-line-fill.bwdpmkx-has-inner-title',
			]
		);

        $this->add_control(
            'progress_bar_inner_title_color',
            [
                'label' => __('Inner Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line-fill.bwdpmkx-has-inner-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'progress_bar_inner_title_padding',
            [
                'label'      => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-line-fill.bwdpmkx-has-inner-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'progress_bar_count_typography',
				'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-count-wrap',
			]
		);

        $this->add_control(
            'progress_bar_count_color',
            [
                'label' => __('Counter Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-count-wrap' => 'color: {{VALUE}}',
                ],
                'separator' => 'after',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'progress_bar_after_typography',
				'selector' => '{{WRAPPER}} .bwdpmkx-progressbar-half-circle-after span',
                'condition' => [
                    'progress_bar_layout' => 'half_circle',
                ],
			]
		);

        $this->add_control(
            'progress_bar_after_color',
            [
                'label' => __('Prefix/Postfix Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .bwdpmkx-progressbar-half-circle-after' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'progress_bar_layout' => 'half_circle',
                ],
            ]
        );

        $this->end_controls_section();

    }

	protected function render()
    {
        $settings = $this->get_settings_for_display();
        $wrap_classes = ['bwdpmkx-progressbar'];
        $circle_wrapper = [];
	    $settings['progress_bar_title']         = BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses($settings['progress_bar_title']);
        
        $has_inner_title                        = ! empty( $settings['progress_bar_title_inner_show'] ) && ! empty( $settings['progress_bar_title_inner'] );
        $has_inner_title_class                  = $has_inner_title ? 'bwdpmkx-has-inner-title' : '';
	    $settings['progress_bar_title_inner']   = $has_inner_title ? BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses( $settings['progress_bar_title_inner'] ) : '';

        if ($settings['progress_bar_layout'] == 'line' || $settings['progress_bar_layout'] == 'line_rainbow') {
            $wrap_classes[] = 'bwdpmkx-progressbar-line';

            if ($settings['progress_bar_layout'] == 'line_rainbow') {
                $wrap_classes[] = 'bwdpmkx-progressbar-line-rainbow';
            }

            if ($settings['progress_bar_line_fill_stripe'] == 'yes') {
                $wrap_classes[] = 'bwdpmkx-progressbar-line-stripe';
            }

            if ($settings['progress_bar_line_fill_stripe_animate'] == 'normal') {
                $wrap_classes[] = 'bwdpmkx-progressbar-line-animate';
            } else if ($settings['progress_bar_line_fill_stripe_animate'] == 'reverse') {
                $wrap_classes[] = 'bwdpmkx-progressbar-line-animate-rtl';
            }

            $this->add_render_attribute('bwdpmkx-progressbar-line', [
                'class' => $wrap_classes,
                'data-layout' => 'line',
                'data-count' => $settings['progress_bar_value_type'] == 'static' ? $settings['progress_bar_value']['size'] : $settings['progress_bar_value_dynamic'],
                'data-duration' => $settings['progress_bar_animation_duration']['size'],
            ]);

            $this->add_render_attribute('bwdpmkx-progressbar-line-fill', [
                'class' => 'bwdpmkx-progressbar-line-fill ' . esc_attr( $has_inner_title_class ),
                'style' => '-webkit-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;-o-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;',
            ]);

            echo '<div class="bwdpmkx-progressbar-line-container ' . $settings['progress_bar_line_alignment'] . '">
                ' . ($settings['progress_bar_title'] ? sprintf('<%1$s class="%2$s">', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag']), 'bwdpmkx-progressbar-title') . BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses($settings['progress_bar_title']) . sprintf('</%1$s>', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag'])) : '') . '

                <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-line') . '>
                    ' . ($settings['progress_bar_show_count'] === 'yes' ? '<span class="bwdpmkx-progressbar-count-wrap"><span class="bwdpmkx-progressbar-count">0</span><span class="postfix">' . __('%', BWDEB_ROOT_AUTHOR_PRO) . '</span></span>' : '') . '
                    <span ' . $this->get_render_attribute_string('bwdpmkx-progressbar-line-fill') . '>' . BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses( $settings['progress_bar_title_inner'] ) . '</span>
                </div>
            </div>';
        }

        if ($settings['progress_bar_layout'] == 'circle' || $settings['progress_bar_layout'] == 'circle_fill') {
            $wrap_classes[] = 'bwdpmkx-progressbar-circle';

            if ($settings['progress_bar_layout'] == 'circle_fill') {
                $wrap_classes[] = 'bwdpmkx-progressbar-circle-fill';
            }

            $this->add_render_attribute(
                'bwdpmkx-progressbar-circle',
                [
                    'class' => $wrap_classes,
                    'data-layout' => $settings['progress_bar_layout'],
                    'data-count' => $settings['progress_bar_value_type'] == 'static' ? $settings['progress_bar_value']['size'] : $settings['progress_bar_value_dynamic'],
                    'data-duration' => $settings['progress_bar_animation_duration']['size'],
                ]
            );

            echo '<div class="bwdpmkx-progressbar-circle-container ' . $settings['progress_bar_circle_alignment'] . '">
                ' . ($settings['progress_bar_circle_box_shadow_box_shadow'] ? '<div class="bwdpmkx-progressbar-circle-shadow">' : '') . '

                <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-circle') . '>
                    <div class="bwdpmkx-progressbar-circle-pie">
                        <div class="bwdpmkx-progressbar-circle-half-left bwdpmkx-progressbar-circle-half"></div>
                        <div class="bwdpmkx-progressbar-circle-half-right bwdpmkx-progressbar-circle-half"></div>
                    </div>
                    <div class="bwdpmkx-progressbar-circle-inner"></div>
                    <div class="bwdpmkx-progressbar-circle-inner-content">
                        ' . ($settings['progress_bar_title'] ? sprintf('<%1$s class="%2$s">', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag']), 'bwdpmkx-progressbar-title') . $settings['progress_bar_title'] . sprintf('</%1$s>', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag'])) : '') . '
                        ' . ($settings['progress_bar_show_count'] === 'yes' ? '<span class="bwdpmkx-progressbar-count-wrap"><span class="bwdpmkx-progressbar-count">0</span><span class="postfix">' . __('%', BWDEB_ROOT_AUTHOR_PRO) . '</span></span>' : '<span class="bwdpmkx-progressbar-count-wrap" style="display: none;"><span class="bwdpmkx-progressbar-count">0</span><span class="postfix">' . __('%', BWDEB_ROOT_AUTHOR_PRO) . '</span></span>') . '
                    </div>
                </div>

                ' . ($settings['progress_bar_circle_box_shadow_box_shadow'] ? '</div>' : '') . '
            </div>';
        }

        if ( $settings['progress_bar_layout'] == 'half_circle' || $settings['progress_bar_layout'] == 'half_circle_fill' ) {
            $wrap_classes[] = 'bwdpmkx-progressbar-half-circle';

            if ($settings['progress_bar_layout'] == 'half_circle_fill') {
                $wrap_classes[] = 'bwdpmkx-progressbar-half-circle-fill';
            }

            $this->add_render_attribute(
                'bwdpmkx-progressbar-circle-half',
                [
                    'class' => 'bwdpmkx-progressbar-circle-half',
                    'style' => '-webkit-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;-o-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;',
                ]
            );

            $this->add_render_attribute(
                'bwdpmkx-progressbar-half-circle',
                [
                    'class' => $wrap_classes,
                    'data-layout' => $settings['progress_bar_layout'],
                    'data-count' => $settings['progress_bar_value_type'] == 'static' ? $settings['progress_bar_value']['size'] : $settings['progress_bar_value_dynamic'],
                    'data-duration' => $settings['progress_bar_animation_duration']['size'],
                ]
            );

            echo '<div class="bwdpmkx-progressbar-circle-container ' . $settings['progress_bar_circle_alignment'] . '">
                <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-half-circle') . '>
                    <div class="bwdpmkx-progressbar-circle">
                        <div class="bwdpmkx-progressbar-circle-pie">
                            <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-circle-half') . '></div>
                        </div>
                        <div class="bwdpmkx-progressbar-circle-inner"></div>
                    </div>
                    <div class="bwdpmkx-progressbar-circle-inner-content">
                        ' . ($settings['progress_bar_title'] ? sprintf('<%1$s class="%2$s">', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag']), 'bwdpmkx-progressbar-title') . $settings['progress_bar_title'] . sprintf('</%1$s>', BWDEB_Helper_AUTHOR::bwdpmkx_validate_html_tag($settings['progress_bar_title_html_tag'])) : '') . '
                        ' . ($settings['progress_bar_show_count'] === 'yes' ? '<span class="bwdpmkx-progressbar-count-wrap"><span class="bwdpmkx-progressbar-count">0</span><span class="postfix">' . __('%', BWDEB_ROOT_AUTHOR_PRO) . '</span></span>' : '') . '
                    </div>
                </div>
                <div class="bwdpmkx-progressbar-half-circle-after">
                    ' . ($settings['progress_bar_prefix_label'] ? sprintf('<span class="bwdpmkx-progressbar-prefix-label">%1$s</span>', BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses($settings['progress_bar_prefix_label'])) : '') . '
                    ' . ($settings['progress_bar_postfix_label'] ? sprintf('<span class="bwdpmkx-progressbar-postfix-label">%1$s</span>', BWDEB_Helper_AUTHOR::bwdpmkx_wp_kses($settings['progress_bar_postfix_label'])) : '') . '
                </div>
            </div>';
        }
        if ($settings['progress_bar_layout'] == 'box') {
            $wrap_classes[] = 'bwdpmkx-progressbar-box';

            $this->add_render_attribute('bwdpmkx-progressbar-box', [
                'class' => $wrap_classes,
                'data-layout' => $settings['progress_bar_layout'],
                'data-count' => $settings['progress_bar_value_type'] == 'static' ? $settings['progress_bar_value']['size'] : $settings['progress_bar_value_dynamic'],
                'data-duration' => $settings['progress_bar_animation_duration']['size'],
            ]);

            $this->add_render_attribute('bwdpmkx-progressbar-box-fill', [
                'class' => 'bwdpmkx-progressbar-box-fill',
                'style' => '-webkit-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;-o-transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;transition-duration:' . $settings['progress_bar_animation_duration']['size'] . 'ms;',
            ]);

            echo '<div class="bwdpmkx-progressbar-box-container ' . $settings['progress_bar_box_alignment'] . '">
                <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-box') . '>
                    <div class="bwdpmkx-progressbar-box-inner-content">
                        ' . ($settings['progress_bar_title'] ? sprintf('<%1$s class="%2$s">', $settings['progress_bar_title_html_tag'], 'bwdpmkx-progressbar-title') . $settings['progress_bar_title'] . sprintf('</%1$s>', $settings['progress_bar_title_html_tag']) : '') . '
                        ' . ($settings['progress_bar_show_count'] === 'yes' ? '<span class="bwdpmkx-progressbar-count-wrap"><span class="bwdpmkx-progressbar-count">0</span><span class="postfix">' . __('%', 'essential-addons-for-elementor') . '</span></span>' : '') . '
                    </div>
                    <div ' . $this->get_render_attribute_string('bwdpmkx-progressbar-box-fill') . '></div>
                </div>
            </div>';
        }
    }

}