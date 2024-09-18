<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BwdmflxHelper {

	const EAEL_ALLOWED_HTML_TAGS = [
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

	public static function bwdmflx_validate_html_tag( $tag ){
	    return in_array( strtolower( $tag ), self::EAEL_ALLOWED_HTML_TAGS ) ? $tag : 'div';
    }
	public static function bwdmflx__wp_kses( $text ) {
		return wp_kses( $text, self::bwdmflx___allowed_tags(), array_merge( wp_allowed_protocols(), [ 'data' ] ) );
	}

	public static function bwdmflx___allowed_tags() {
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

class Probwdmflx_ModernFeatureList_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdmflx-modern-feature-list', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Modern Feature List', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdmflx-ModernFeatureList-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		$this->start_controls_section(
            'bwdmflx_section_feature_list_content_settings',
            [
                'label' => esc_html__( 'Content Settings', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
            'bwdmflx_feature_list_icon_type',
            [
                'label'       => esc_html__( 'Icon Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::CHOOSE,
                'options'     => [
                    'icon'  => [
                        'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'fa fa-star',
                    ],
                    'image' => [
                        'title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-image-bold',
                    ],
                ],
                'default'     => 'icon',
                'label_block' => false,
            ]
        );

		$repeater->add_control(
            'bwdmflx_feature_list_icon_new',
            [
                'label'            => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                'type'             => \Elementor\Controls_Manager::ICONS,
                'fa4compatibility' => 'bwdmflx_feature_list_icon',
                'condition'        => [
                    'bwdmflx_feature_list_icon_type' => 'icon',
                ],
            ]
        );

		 // start icon color option
		 $repeater->add_control(
            'bwdmflx_feature_list_icon_is_individual_style',
            [
                'label'            => esc_html__( 'Icon Style', BWDEB_ROOT_AUTHOR_PRO ),
                'type'             => \Elementor\Controls_Manager::SWITCHER,
                'label_on'         => __( 'ON', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off'        => __( 'OFF', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value'     => 'on',
                'default'          => '',
                'fa4compatibility' => 'bwdmflx_feature_list_icon',
                'condition'        => [
                    'bwdmflx_feature_list_icon_type' => 'icon',
                ],
            ]
        );
        $repeater->add_control(
            'bwdmflx_feature_list_icon_individual_color',
            [
                'label'            => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'             => \Elementor\Controls_Manager::COLOR,
                'default'          => '#fff',
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}} .bwdmflx-feature-list-icon i" => 'color: {{VALUE}};',
                    "{{WRAPPER}} {{CURRENT_ITEM}} .bwdmflx-feature-list-icon svg" => 'color: {{VALUE}} !important; fill: {{VALUE}} !important;',
                ],
                'fa4compatibility' => 'bwdmflx_feature_list_icon',
                'condition'        => [
                    'bwdmflx_feature_list_icon_is_individual_style' => 'on',
                ],
            ]
        );
        $repeater->add_control(
            'bwdmflx_feature_list_icon_individual_bg_color',
            [
                'label'            => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
                'type'             => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}} .bwdmflx-feature-list-icon" => 'background-color: {{VALUE}}',
                ],
                'fa4compatibility' => 'bwdmflx_feature_list_icon',
                'condition'        => [
                    'bwdmflx_feature_list_icon_is_individual_style' => 'on',
                ],
            ]
        );
        $repeater->add_control(
            'bwdmflx_feature_list_icon_individual_box_bg_color',
            [
                'label'            => esc_html__( 'Icon Box Background', BWDEB_ROOT_AUTHOR_PRO ),
                'type'             => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}} .bwdmflx-feature-list-icon-inner" => 'background-color: {{VALUE}}',
                ],
                'fa4compatibility' => 'bwdmflx_feature_list_icon',
                'condition'        => [
                    'bwdmflx_feature_list_icon_is_individual_style' => 'on',
                ],
            ]
        );
        // end icon color option

		$repeater->add_control(
            'bwdmflx_feature_list_img',
            [
                'label'     => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'bwdmflx_feature_list_icon_type' => 'image',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $repeater->add_control(
            'bwdmflx_feature_list_title',
            [
                'label'   => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'dynamic' => ['active' => true],
                'ai' => [
					'active' => false,
				],
            ]
        );

		$repeater->add_control(
            'bwdmflx_feature_list_content',
            [
                'label'   => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, neque qui velit. Magni dolorum quidem ipsam eligendi, totam, facilis laudantium cum accusamus ullam voluptatibus commodi numquam, error, est. Ea, consequatur.', BWDEB_ROOT_AUTHOR_PRO ),
                'dynamic' => ['active' => true],
            ]
        );

        $repeater->add_control(
            'bwdmflx_feature_list_link',
            [
                'label'       => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::URL,
                'dynamic'     => ['active' => true],
                'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
                'separator'   => 'before',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list',
            [
                'label'       => esc_html__( 'Feature Item', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'seperator'   => 'before',
                'default'     => [
                    [
                        'bwdmflx_feature_list_icon_new' => [
                            'value'   => 'fas fa-check',
                            'library' => 'fa-solid',
                        ],
                        'bwdmflx_feature_list_title'    => esc_html__( 'Feature Item 1', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdmflx_feature_list_content'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'bwdmflx_feature_list_icon_new' => [
                            'value'   => 'fas fa-times',
                            'library' => 'fa-solid',
                        ],
                        'bwdmflx_feature_list_title'    => esc_html__( 'Feature Item 2', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdmflx_feature_list_content'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'bwdmflx_feature_list_icon_new' => [
                            'value'   => 'fas fa-anchor',
                            'library' => 'fa-solid',
                        ],
                        'bwdmflx_feature_list_title'    => esc_html__( 'Feature Item 3', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdmflx_feature_list_content'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                ],
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ elementor.helpers.renderIcon( this, bwdmflx_feature_list_icon_new, {}, "i", "panel" ) || \'<i class="{{ bwdmflx_feature_list_icon_new.value }}" aria-hidden="true"></i>\' }}} {{ bwdmflx_feature_list_title }}',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_title_size',
            [
                'label'     => esc_html__( 'Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'h1'   => 'H1',
                    'h2'   => 'H2',
                    'h3'   => 'H3',
                    'h4'   => 'H4',
                    'h5'   => 'H5',
                    'h6'   => 'H6',
                    'div'  => 'div',
                    'span' => 'span',
                    'p'    => 'p',
                ],
                'default'   => 'h3',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_icon_shape',
            [
                'label'       => esc_html__( 'Icon Shape', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'circle',
                'label_block' => false,
                'options'     => [
                    'circle'  => esc_html__( 'Circle', BWDEB_ROOT_AUTHOR_PRO ),
                    'square'  => esc_html__( 'Square', BWDEB_ROOT_AUTHOR_PRO ),
                    'rhombus' => esc_html__( 'Rhombus', BWDEB_ROOT_AUTHOR_PRO ),
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_icon_shape_view',
            [
                'label'       => esc_html__( 'Shape View', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'stacked',
                'label_block' => false,
                'options'     => [
                    'framed'  => esc_html__( 'Framed', BWDEB_ROOT_AUTHOR_PRO ),
                    'stacked' => esc_html__( 'Stacked', BWDEB_ROOT_AUTHOR_PRO ),
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_position',
            [
                'label'           => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'            => \Elementor\Controls_Manager::CHOOSE,
                'options'         => [
                    'left'  => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'top'   => [
                        'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'default'         => 'left',
                'devices'         => ['desktop', 'tablet', 'mobile'],
                'desktop_default' => 'left',
                'tablet_default'  => 'left',
                'mobile_default'  => 'left',
                'toggle'          => false,
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_right_indicator_position',
            [
                'label'      => __( 'Arrow Indicator Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 500,
                        'step' => 5,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
					'unit' => 'px',
					'size' => 35,
				],
                'selectors'  => [
                    '{{WRAPPER}} .bwdmflx-feature-list-items.connector-type-modern .bwdmflx-feature-list-item:after' => 'top: {{SIZE}}{{UNIT}} !important;',
                ],
                'condition'  => [
                    'bwdmflx_feature_list_icon_position' => 'top',
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_connector',
            [
                'label'        => esc_html__( 'Show Connector', BWDEB_ROOT_AUTHOR_PRO ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'default'      => 'no',
                'label_on'     => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off'    => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
            ]
        );

        $this->end_controls_section();

		
        $this->start_controls_section(
            'bwdmflx_section_feature_list_style',
            [
                'label' => esc_html__( 'List', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_space_between',
            [
                'label'     => esc_html__( 'Space Between', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 15,
                ],
                'range'     => [
                    'px' => [
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-item:not(:last-child)'                              => 'margin-bottom: calc({{SIZE}}{{UNIT}}/2)',
//                     '{{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-item:not(:first-child)'                             => 'padding-top: calc({{SIZE}}{{UNIT}}/2)',
                    '{{WRAPPER}} .bwdmflx-feature-list-items.connector-type-modern .bwdmflx-feature-list-item:not(:last-child):before' => 'height: calc(100% + {{SIZE}}{{UNIT}})',
                    'body.rtl {{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-item:after'                                => 'left: calc(-{{SIZE}}{{UNIT}}/2)',
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_connector_type',
            [
                'label'       => esc_html__( 'Connector Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'connector-type-classic',
                'label_block' => false,
                'options'     => [
                    'connector-type-classic' => esc_html__( 'Classic', BWDEB_ROOT_AUTHOR_PRO ),
                    'connector-type-modern'  => esc_html__( 'Modern', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition'   => [
                    'bwdmflx_feature_list_connector'      => 'yes',
                    'bwdmflx_feature_list_icon_position!' => 'top',
                ],
                'separator'   => 'before',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_connector_styles',
            [
                'label'       => esc_html__( 'Connector Styles', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'solid',
                'label_block' => false,
                'options'     => [
                    'solid'  => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
                    'dashed' => esc_html__( 'Dashed', BWDEB_ROOT_AUTHOR_PRO ),
                    'dotted' => esc_html__( 'Dotted', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition'   => [
                    'bwdmflx_feature_list_connector' => 'yes',
                ],
                'selectors'   => [
                    '{{WRAPPER}} .connector-type-classic .connector'                                                                                      => 'border-style: {{VALUE}};',
                    '{{WRAPPER}} .connector-type-modern .bwdmflx-feature-list-item:before, {{WRAPPER}} .connector-type-modern .bwdmflx-feature-list-item:after' => 'border-style: {{VALUE}};',
                ],
            ]
        );

		$this->add_control(
			'bwdmflx_feature_list_connector_color',
			[
				'label' => esc_html__( 'Connector Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default'   => '#37368e',
				'selectors' => [
                    '{{WRAPPER}} .connector-type-classic .connector'                                                                                      => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .connector-type-modern .bwdmflx-feature-list-item:before, {{WRAPPER}} .connector-type-modern .bwdmflx-feature-list-item:after' => 'border-color: {{VALUE}};',
                ],
				'condition' => [
                    'bwdmflx_feature_list_connector' => 'yes',
                ],
			]
		);

        $this->add_control(
            'bwdmflx_feature_list_connector_width',
            [
                'label'     => esc_html__( 'Connector Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'unit' => 'px',
					'size' => 1,
                ],
                'range'     => [
                    'px' => [
                        'min' => 1,
                        'max' => 5,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .connector-type-classic .connector'                                                                                                                                      => 'border-width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-items.connector-type-modern .bwdmflx-feature-list-item:before, {{WRAPPER}} .bwdmflx-feature-list-items.connector-type-modern .bwdmflx-feature-list-item:after' => 'border-width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .-icon-position-left .connector-type-modern .bwdmflx-feature-list-item:before, {{WRAPPER}} .-icon-position-left .connector-type-modern .bwdmflx-feature-list-item:after'       => 'border-width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .-icon-position-right .connector-type-modern .bwdmflx-feature-list-item:before, {{WRAPPER}} .-icon-position-right .connector-type-modern .bwdmflx-feature-list-item:after'     => 'border-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdmflx_feature_list_connector' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

		$this->start_controls_section(
            'bwdmflx_section_feature_list_style_icon',
            [
                'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'bwdmflx_feature_list_icon_background',
                'types'    => ['classic', 'gradient'],
                'exclude'  => [
                    'image',
                ],
                'color'    => [
                    'default' => '#3858f4',
                ],
                'selector' => '{{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon-inner',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_secondary_color',
            [
                'label'     => esc_html__( 'Secondary Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-items.framed .bwdmflx-feature-list-icon' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'bwdmflx_feature_list_icon_shape_view' => 'framed',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_icon_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-icon' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-items .bwdmflx-feature-list-icon svg' => 'fill: {{VALUE}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_circle_size',
            [
                'label'     => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 70,
                ],
                'range'     => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon'        => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-items.connector-type-classic .connector' => 'right: calc(100% - {{SIZE}}{{UNIT}});',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_size',
            [
                'label'     => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 21,
                ],
                'range'     => [
                    'px' => [
                        'min' => 6,
                        'max' => 150,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon'     => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-img'                                  => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default'    => [
                    'top'      => 15,
                    'right'    => 15,
                    'bottom'   => 15,
                    'left'     => 15,
                    'isLinked' => true,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_icon_border_width',
            [
                'label'     => esc_html__( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 1,
                ],
                'range'     => [
                    'px' => [
                        'min' => 1,
                        'max' => 50,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon-inner' => 'padding: {{SIZE}}{{UNIT}};',

                ],
                'condition' => [
                    'bwdmflx_feature_list_icon_shape_view' => 'framed',
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_icon_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon-inner'                         => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .bwdmflx-feature-list-icon-box .bwdmflx-feature-list-icon-inner .bwdmflx-feature-list-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
                    'bwdmflx_feature_list_icon_shape_view' => 'framed',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_icon_space',
            [
                'label'           => esc_html__( 'Spacing', BWDEB_ROOT_AUTHOR_PRO ),
                'type'            => \Elementor\Controls_Manager::SLIDER,
                'range'           => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'devices'         => ['desktop', 'tablet', 'mobile'],
                'desktop_default' => [
                    'size' => 30,
                    'unit' => 'px',
                ],
                'tablet_default'  => [
                    'size' => 20,
                    'unit' => 'px',
                ],
                'mobile_default'  => [
                    'size' => 10,
                    'unit' => 'px',
                ],
                'selectors'       => [
                    '{{WRAPPER}} .-icon-position-left .bwdmflx-feature-list-content-box, {{WRAPPER}} .-icon-position-right .bwdmflx-feature-list-content-box, {{WRAPPER}} .-icon-position-top .bwdmflx-feature-list-content-box' => 'margin: {{SIZE}}{{UNIT}};',
                    '(mobile){{WRAPPER}} .-mobile-icon-position-left .bwdmflx-feature-list-content-box'                                                                                                                    => 'margin: 0 0 0 {{SIZE}}{{UNIT}} !important;',
                    '(mobile){{WRAPPER}} .-mobile-icon-position-right .bwdmflx-feature-list-content-box'                                                                                                                   => 'margin: 0 {{SIZE}}{{UNIT}} 0 0 !important;',
                ],
            ]
        );

        $this->end_controls_section();

		$this->start_controls_section(
            'bwdmflx_section_feature_list_style_content',
            [
                'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_text_align',
            [
                'label'     => __( 'Alignment', 'elementor' ),
                'type'      => \Elementor\Controls_Manager::CHOOSE,
                'options'   => [
                    'left'    => [
                        'title' => __( 'Left', 'elementor' ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'  => [
                        'title' => __( 'Center', 'elementor' ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'   => [
                        'title' => __( 'Right', 'elementor' ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => __( 'Justified', 'elementor' ),
                        'icon'  => 'eicon-text-align-justify',
                    ],
                ],
                'condition' => [
                    'bwdmflx_feature_list_icon_position' => 'top',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-item' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdmflx_feature_list_heading_title',
            [
                'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'type'  => \Elementor\Controls_Manager::HEADING,
            ]
        );

        $this->add_responsive_control(
            'bwdmflx_feature_list_title_bottom_space',
            [
                'label'     => esc_html__( 'Title Bottom Space', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 10,
                ],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmflx-feature-list-item .bwdmflx-feature-list-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
            'bwdmflx_feature_list_title_color',
            [
                'label'                 => esc_html__( 'Color', 'bwdrpmx-price-menu' ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'   => '#414247',
                'selectors'             => [
                    '{{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-title, {{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-title > a, {{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-title:visited' => 'color: {{VALUE}};',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdmflx_feature_list_title_typography',
				'selector' => '{{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-title, {{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-title a',
			]
		);

        $this->add_control(
            'bwdmflx_feature_list_description',
            [
                'label'     => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

		$this->add_control(
            'bwdmflx_feature_list_description_color',
            [
                'label'                 => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-content' => 'color: {{VALUE}}',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdmflx_feature_list_description_typography',
				'selector' => '{{WRAPPER}} .bwdmflx-feature-list-content-box .bwdmflx-feature-list-content',
				'fields_options' => [
                    'font_size' => ['default' => ['unit' => 'px', 'size' => 14]],
                ],
			]
		);

        $this->end_controls_section();


	}

	protected function render() {
        $settings = $this->get_settings_for_display();
        $css_id = 'bwdmflx-feature-list-' . esc_attr( $this->get_id() );
        $this->add_render_attribute( 'bwdmflx_feature_list', [
            'id'    => $css_id,
            'class' => [
                'bwdmflx-feature-list-items',
                $settings['bwdmflx_feature_list_icon_shape'],
                $settings['bwdmflx_feature_list_icon_shape_view'],
                $settings['bwdmflx_feature_list_connector_type'],
            ],
        ] );
        // connector class change by connector type
        if ( $settings['bwdmflx_feature_list_icon_position'] == 'top' && $settings['bwdmflx_feature_list_connector'] == 'yes' ) {
            $this->add_render_attribute( 'bwdmflx_feature_list', 'class', 'connector-type-modern' );
        }

        $this->add_render_attribute( 'bwdmflx_feature_list_item', 'class', 'bwdmflx-feature-list-item' );

        // $padding = $settings['bwdmflx_feature_list_icon_padding']['size'];
        $circle_size = intval( $settings['bwdmflx_feature_list_icon_circle_size']['size'] );
        $font = $settings['bwdmflx_feature_list_icon_size']['size'];

        if ( isset( $settings['bwdmflx_feature_list_icon_border_width']['right'] ) && isset( $settings['bwdmflx_feature_list_icon_border_width']['left'] ) ) {
            $border = $settings['bwdmflx_feature_list_icon_border_width']['right'] + $settings['bwdmflx_feature_list_icon_border_width']['left'];
        }

        if ( !empty($settings['bwdmflx_feature_list_icon_shape']) && $settings['bwdmflx_feature_list_icon_shape'] == 'rhombus' ) {
            $margin = 30;
            $connector_width = intval( $circle_size + $margin + ( !empty( $settings['bwdmflx_feature_list_connector_width']['size'] ) ? $settings['bwdmflx_feature_list_connector_width']['size'] : 0 ) );
        } else {
            $connector_width = intval( $circle_size + ( !empty( $settings['bwdmflx_feature_list_connector_width']['size'] ) ? $settings['bwdmflx_feature_list_connector_width']['size'] : 0 ) );
        }

        // connector
        if ( !empty($settings['bwdmflx_feature_list_icon_position']) && $settings['bwdmflx_feature_list_icon_position'] == 'right' ) {
            $connector = 'left: calc(100% - ' . $connector_width . 'px); right: 0;';
        } else {
            $connector = 'right: calc(100% - ' . $connector_width . 'px); left: 0;';
        }
        // mobile
        if ( !empty($settings['bwdmflx_feature_list_icon_position_tablet']) && $settings['bwdmflx_feature_list_icon_position_tablet'] == 'right' ) {
            $connector_tablet = 'left: calc(100% - ' . $connector_width . 'px); right: 0;';
        } else {
            $connector_tablet = 'right: calc(100% - ' . $connector_width . 'px); left: 0;';
        }
        // mobile
        if ( !empty($settings['bwdmflx_feature_list_icon_position_mobile']) && $settings['bwdmflx_feature_list_icon_position_mobile'] == 'right' ) {
            $connector_mobile = 'left: calc(100% - ' . $connector_width . 'px); right: 0;';
        } else {
            $connector_mobile = 'right: calc(100% - ' . $connector_width . 'px); left: 0;';
        }
        // icon position for all mode
        $bwdmflx_feature_list_icon_position_setting = ( !empty($settings['bwdmflx_feature_list_icon_position']) && $settings['bwdmflx_feature_list_icon_position'] ) ? $settings['bwdmflx_feature_list_icon_position'] : 'left';
        $bwdmflx_feature_list_icon_position_tablet_setting = ( !empty($settings['bwdmflx_feature_list_icon_position_tablet']) && $settings['bwdmflx_feature_list_icon_position_tablet'] ) ? $settings['bwdmflx_feature_list_icon_position_tablet'] : 'left';
        $bwdmflx_feature_list_icon_position_mobile_setting = ( !empty($settings['bwdmflx_feature_list_icon_position_mobile']) && $settings['bwdmflx_feature_list_icon_position_mobile'] ) ? $settings['bwdmflx_feature_list_icon_position_mobile'] : 'left';
        $this->add_render_attribute(
            'bwdmflx_feature_list_wrapper',
            [
                'class' => [
                    '-icon-position-' . $bwdmflx_feature_list_icon_position_setting,
                    '-tablet-icon-position-' . $bwdmflx_feature_list_icon_position_tablet_setting,
                    '-mobile-icon-position-' . $bwdmflx_feature_list_icon_position_mobile_setting,
                ],
            ]
        );

        ?>
		<div <?php echo $this->get_render_attribute_string( 'bwdmflx_feature_list_wrapper' ); ?>>
			<ul <?php echo $this->get_render_attribute_string( 'bwdmflx_feature_list' ); ?>>
			<?php
			$individual_icon_color_css = '';
        foreach ( $settings['bwdmflx_feature_list'] as $index => $item ):

            $this->add_render_attribute( 'bwdmflx_feature_list_icon' . $index, 'class', 'bwdmflx-feature-list-icon fl-icon-'.$index );
            $this->add_render_attribute( 'bwdmflx_feature_list_title' . $index, 'class', 'bwdmflx-feature-list-title' );
            $this->add_render_attribute( 'bwdmflx_feature_list_content' . $index, 'class', 'bwdmflx-feature-list-content' );
            // icon color
            $icon_color =  ( $item['bwdmflx_feature_list_icon_is_individual_style'] == 'on' && isset($item['bwdmflx_feature_list_icon_individual_color']) ) ? esc_attr( $item['bwdmflx_feature_list_icon_individual_color'] ) : '' ;
            $icon_bg = (  ( $item['bwdmflx_feature_list_icon_is_individual_style'] == 'on' ) ? ' style="background-color:' . esc_attr( $item['bwdmflx_feature_list_icon_individual_bg_color'] ) . '"' : '' );
            $icon_box_bg = (  ( $item['bwdmflx_feature_list_icon_is_individual_style'] == 'on' ) ? ' style="background-color:' . esc_attr( $item['bwdmflx_feature_list_icon_individual_box_bg_color'] ) . '"' : '' );

            $feat_title_tag = BwdmflxHelper::bwdmflx_validate_html_tag($settings['bwdmflx_feature_list_title_size']);

            if ( $item['bwdmflx_feature_list_link']['url'] ) {
                $this->add_link_attributes( 'bwdmflx_feature_list_title_anchor' . $index, $item['bwdmflx_feature_list_link'] );
            }

            $feature_icon_tag = 'span';

            $feature_has_icon = ( !empty( $item['bwdmflx_feature_list_icon'] ) || !empty( $item['bwdmflx_feature_list_icon_new'] ) );

            if ( $item['bwdmflx_feature_list_link']['url'] ) {
                $this->add_link_attributes( 'bwdmflx_feature_list_link' . $index, $item['bwdmflx_feature_list_link'] );

                $feature_icon_tag = 'a';
            }
            ?>
                <li class="bwdmflx-feature-list-item <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>">
                    <?php if ( 'yes' == $settings['bwdmflx_feature_list_connector'] ): ?>
                        <span class="connector" style="<?php echo $connector; ?>"></span>
                        <span class="connector connector-tablet" style="<?php echo $connector_tablet; ?>"></span>
                        <span class="connector connector-mobile" style="<?php echo $connector_mobile; ?>"></span>
                    <?php endif;?>

						<div class="bwdmflx-feature-list-icon-box">
							<div class="bwdmflx-feature-list-icon-inner">

								<<?php echo $feature_icon_tag . ' ' . $this->get_render_attribute_string( 'bwdmflx_feature_list_icon' . $index) . $this->get_render_attribute_string( 'bwdmflx_feature_list_link' . $index); ?>>

		<?php
            if ( $item['bwdmflx_feature_list_icon_type'] == 'icon' && $feature_has_icon ) {

            if ( empty( $item['bwdmflx_feature_list_icon'] ) || isset( $item['__fa4_migrated']['bwdmflx_feature_list_icon_new'] ) ) {
                //Icons_Manager::render_icon( $item['bwdmflx_feature_list_icon_new'], [ 'aria-hidden' => 'true' ] );
				\Elementor\Icons_Manager::render_icon( $item['bwdmflx_feature_list_icon_new'], [ 'aria-hidden' => 'true' ] ); 
            } else {
                echo '<i class="' . esc_attr( $item['bwdmflx_feature_list_icon'] ) . '" aria-hidden="true"></i>';
            }
        }


            if ( $item['bwdmflx_feature_list_icon_type'] == 'image' ) {
            $this->add_render_attribute( 'feature_list_image' . $index, [
                'src'   => esc_url( $item['bwdmflx_feature_list_img']['url'] ),
                'class' => 'bwdmflx-feature-list-img',
                'alt'   => esc_attr( get_post_meta( $item['bwdmflx_feature_list_img']['id'], '_wp_attachment_image_alt', true ) ),
            ] );

            echo '<img ' . $this->get_render_attribute_string( 'feature_list_image' . $index) . '>';

        }?>
								</<?php echo $feature_icon_tag; ?>>
							</div>
						</div>
						<div class="bwdmflx-feature-list-content-box">
							<<?php echo implode( ' ', [
            $feat_title_tag,
            $this->get_render_attribute_string( 'bwdmflx_feature_list_title' . $index),
        ] ); ?>
							><?php echo !empty( $item['bwdmflx_feature_list_link']['url'] ) ? "<a {$this->get_render_attribute_string( 'bwdmflx_feature_list_title_anchor' . $index)}>" : ''; ?><?php echo BwdmflxHelper::bwdmflx__wp_kses($item['bwdmflx_feature_list_title']); ?><?php echo !empty( $item['bwdmflx_feature_list_link']['url'] ) ? "</a>" : ''; ?></<?php echo $feat_title_tag; ?>
						>
						<p <?php echo $this->get_render_attribute_string( 'bwdmflx_feature_list_content' . $index); ?>><?php echo BwdmflxHelper::bwdmflx__wp_kses($item['bwdmflx_feature_list_content']); ?></p>
						</div>

					</li>
				<?php
				endforeach;?>
			</ul>
		</div>
		<?php
    }

}