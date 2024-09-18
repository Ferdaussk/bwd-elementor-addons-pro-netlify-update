<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class HelperTXSX{
	const BWDTXSX_ALLOWED_HTML_TAGS = [
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
	public static function bwdtxsx_validate_html_tag( $tag ){
	    return in_array( strtolower( $tag ), self::BWDTXSX_ALLOWED_HTML_TAGS ) ? $tag : 'div';
    }
	public static function str_to_css_id( $str ) {
		$str = strtolower( $str );

		//Make alphanumeric (removes all other characters)
		$str = preg_replace( "/[^a-z0-9_\s-]/", "", $str );

		//Clean up multiple dashes or whitespaces
		$str = preg_replace( "/[\s-]+/", " ", $str );

		//Convert whitespaces and underscore to dash
		$str = preg_replace( "/[\s_]/", "-", $str );

		return $str;
	}
	public static function bwdtxsx_wp_kses( $text ) {
        if ( empty( $text ) ) {
            return '';
        }
		return wp_kses( $text, self::bwdtxsx_allowed_tags(), array_merge( wp_allowed_protocols(), [ 'data' ] ) );
	}
	public static function bwdtxsx_allowed_tags() {
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

class Probwdtxsx_Tabi__ extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdtxsx-tabify-xpert-suite', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Tabify Xpert Suite', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-tabs';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function select_elementor_page( $type ) {
		$args  = [
			'sk_tax_query'      => [
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
        /**
         * Advance Tabs Settings
         */

        $this->start_controls_section(
			'bwdtxsx_section_adv_tabs_settings',
			[
				'label' => esc_html__( 'General Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
            'bwdtxsx_adv_tab_layout',
            [
                'label' => esc_html__('Layout', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bwdtxsx-tabs-horizontal',
                'label_block' => false,
                'options' => [
                    'bwdtxsx-tabs-horizontal' => esc_html__('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdtxsx-tabs-vertical' => esc_html__('Vertical', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_icon_show',
            [
                'label' => esc_html__('Enable Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tab_icon_position',
            [
                'label' => esc_html__('Icon Position', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bwdtxsx-tab-inline-icon',
                'label_block' => false,
                'options' => [
                    'bwdtxsx-tab-top-icon' => esc_html__('Stacked', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdtxsx-tab-inline-icon' => esc_html__('Inline', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_show' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'bwdtxsx_adv_tabs_tab_icon_alignment',
            [
                'label' => esc_html__( 'Icon Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => sprintf( __( 'Set icon position before/after the tab title.', BWDEB_ROOT_AUTHOR_PRO ) ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'default' => 'before',
                'options' => [
                    'before' => [
                        'title' => esc_html__( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'after' => [
                        'title' => esc_html__( 'After', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'condition' => [
                    'bwdtxsx_adv_tab_icon_position' => 'bwdtxsx-tab-inline-icon',
                ],
            ]
        );

        $this->add_control(
            'bwdtxsx_adv_tabs_default_active_tab',
            [
                'label' => esc_html__('Auto Active?', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => esc_html__('Activate the first tab if no tab is selected as the active tab.', BWDEB_ROOT_AUTHOR_PRO),
                'default' => 'yes',
                'return_value' => 'yes',
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdtxsx_adv_tabs_toggle_tab',
            [
                'label' => esc_html__('Toggle Tab', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => esc_html__('Enables tab to expand and collapse.', BWDEB_ROOT_AUTHOR_PRO),
                'default' => '',
                'return_value' => 'yes',
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdtxsx_adv_tabs_custom_id_offset',
            [
                'label'       => esc_html__('Custom ID offset', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('Use offset to set the custom ID target scrolling position.', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => \Elementor\Controls_Manager::NUMBER,
                'label_block' => false,
                'default'     => 0,
                'min'         => 0,
            ]
        );

        $this->end_controls_section();

        /**
         * Advance Tabs Content Settings
         */
        $this->start_controls_section(
            'bwdtxsx_section_adv_tabs_content_settings',
            [
                'label' => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $repeater = new \Elementor\Repeater();

        // $repeater->add_control(
        //     'bwdtxsx_adv_tabs_tab_show_as_default',
        //     [
        //         'label' => __('Active as Default', BWDEB_ROOT_AUTHOR_PRO),
        //         'type' => \Elementor\Controls_Manager::SWITCHER,
        //         'default' => 'inactive',
        //         'return_value' => 'active-default',
        //     ]
        // );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_icon_type',
            [
                'label' => esc_html__('Icon Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'label_block' => false,
                'options' => [
                    'none' => [
                        'title' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'fa fa-ban',
                    ],
                    'icon' => [
                        'title' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-icon-box',
                    ],
                    'image' => [
                        'title' => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-image-bold',
                    ],
                ],
                'default' => 'icon',
            ]
        );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_title_icon_new',
            [
                'label' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::ICONS,
                'fa4compatibility' => 'bwdtxsx_adv_tabs_tab_title_icon',
                'default' => [
                    'value' => 'fas fa-home',
                    'library' => 'fa-solid',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_type' => 'icon',
                ],
            ]
        );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_title_image',
            [
                'label' => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_type' => 'image',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_title',
            [
                'name' => 'bwdtxsx_adv_tabs_tab_title',
                'label' => esc_html__('Tab Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Tab Title', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => ['active' => true],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_title_html_tag',
            [
                'name' => 'bwdtxsx_adv_tabs_tab_title',
                'label' => esc_html__('Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
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
                'default' => 'span',
                'dynamic' => ['active' => true],
            ]
        );

        $repeater->add_control(
            'bwdtxsx_adv_tabs_text_type',
            [
                'label' => __('Content Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'content' => __('Content', BWDEB_ROOT_AUTHOR_PRO),
                    'template' => __('Saved Templates', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'content',
            ]
        );

        // $repeater->add_control(
        //     'bwdtxsx_primary_templates',
        //     [
        //         'label' => __('Choose Template', BWDEB_ROOT_AUTHOR_PRO),
        //         'type' => \Elementor\Controls_Manager::SELECT,
        //         'source_name' => 'post_type',
        //         'source_type' => 'elementor_library',
        //         'label_block' => true,
        //         'condition' => [
        //             'bwdtxsx_adv_tabs_text_type' => 'template',
        //         ],
        //     ]
        // );
        $saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$repeater->add_control(
			'bwdtxsx_primary_templates',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition' => [
                    'bwdtxsx_adv_tabs_text_type' => 'template',
                ],
			]
		);

        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_content',
            [
                'label' => esc_html__('Tab Content', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, neque qui velit. Magni dolorum quidem ipsam eligendi, totam, facilis laudantium cum accusamus ullam voluptatibus commodi numquam, error, est. Ea, consequatur.', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => ['active' => true],
                'condition' => [
                    'bwdtxsx_adv_tabs_text_type' => 'content',
                ],
            ]
        );
        
        $repeater->add_control(
            'bwdtxsx_adv_tabs_tab_id',
            [
                'label' => esc_html__('Custom ID', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Custom ID will be added as an anchor tag. For example, if you add ‘test’ as your custom ID, the link will become like the following: https://www.example.com/#test and it will open the respective tab directly.', BWDEB_ROOT_AUTHOR_PRO ),
                'default' => '',
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'bwdtxsx_adv_tabs_tab',
            [
                'type' => \Elementor\Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
                    ['bwdtxsx_adv_tabs_tab_title' => esc_html__('Tab Title 1', BWDEB_ROOT_AUTHOR_PRO)],
                    ['bwdtxsx_adv_tabs_tab_title' => esc_html__('Tab Title 2', BWDEB_ROOT_AUTHOR_PRO)],
                    ['bwdtxsx_adv_tabs_tab_title' => esc_html__('Tab Title 3', BWDEB_ROOT_AUTHOR_PRO)],
                ],
                'fields' => $repeater->get_controls(),
                'title_field' => '{{bwdtxsx_adv_tabs_tab_title}}',
            ]
        );
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style Advance Tabs Generel Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'bwdtxsx_section_adv_tabs_style_settings',
            [
                'label' => esc_html__('General', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs',
            ]
        );

        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_box_shadow',
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs',
            ]
        );
        $this->end_controls_section();
        /**
         * -------------------------------------------
         * Tab Style Advance Tabs Content Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'bwdtxsx_section_adv_tabs_tab_style_settings',
            [
                'label' => esc_html__('Tab Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_title_typography',
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_title_width',
            [
                'label' => __('Title Min Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs.bwdtxsx-tabs-vertical > .bwdtxsx-tabs-nav' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdtxsx_adv_tab_layout' => 'bwdtxsx-tabs-vertical',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_icon_size',
            [
                'label' => __('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 16,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li img' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_icon_gap',
            [
                'label' => __('Icon Gap', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 10,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-tab-inline-icon li .title-before-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdtxsx-tab-inline-icon li .title-after-icon' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdtxsx-tab-top-icon li i, {{WRAPPER}} .bwdtxsx-tab-top-icon li img, {{WRAPPER}} .bwdtxsx-tab-top-icon li svg' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} > .elementor-widget-container > .bwdtxsx-advance-tabs > .bwdtxsx-tabs-nav ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} > .elementor-widget-container > .bwdtxsx-advance-tabs > .bwdtxsx-tabs-nav ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('bwdtxsx_adv_tabs_header_tabs');
        // Normal State Tab
        $this->start_controls_tab('bwdtxsx_adv_tabs_header_normal', ['label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO)]);
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_color',
            [
                'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#f1f1f1',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_bgtype',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li',
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_text_color',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_icon_color',
            [
                'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li svg' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        // Hover State Tab
        $this->start_controls_tab('bwdtxsx_adv_tabs_header_hover', ['label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO)]);
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_color_hover',
            [
                'label' => esc_html__('Tab Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_bgtype_hover',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover',
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_text_color_hover',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_icon_color_hover',
            [
                'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover > i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover > svg' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_border_hover',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        // Active State Tab
        $this->start_controls_tab('bwdtxsx_adv_tabs_header_active', ['label' => esc_html__('Active', BWDEB_ROOT_AUTHOR_PRO)]);
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_color_active',
            [
                'label' => esc_html__('Tab Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#444',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_bgtype_active',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active',
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_text_color_active',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_icon_color_active',
            [
                'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active > i' => 'color: {{VALUE}};',
                    //'{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active-default > i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active > svg' => 'fill: {{VALUE}};',
                    //'{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active-default > svg' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_tab_border_active',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_tab_border_radius_active',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style Advance Tabs Content Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'bwdtxsx_section_adv_tabs_tab_content_style_settings',
            [
                'label' => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'adv_tabs_content_bg_color',
            [
                'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'adv_tabs_content_bgtype',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div',
            ]
        );
        $this->add_control(
            'adv_tabs_content_text_color',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_content_typography',
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_content_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_content_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_content_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div',
            ]
        );
        $this->add_responsive_control(
            'bwdtxsx_adv_tabs_content_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-tabs-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdtxsx_adv_tabs_content_shadow',
                'selector' => '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-content > div',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style Advance Tabs Caret Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'bwdtxsx_section_adv_tabs_tab_caret_style_settings',
            [
                'label' => esc_html__('Caret', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_caret_show',
            [
                'label' => esc_html__('Show Caret on Active Tab', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_caret_size',
            [
                'label' => esc_html__('Caret Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs .bwdtxsx-tabs-nav > ul li:after' => 'border-width: {{SIZE}}px; bottom: -{{SIZE}}px',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs.bwdtxsx-tabs-vertical > .bwdtxsx-tabs-nav > ul li:after' => 'right: -{{SIZE}}px; top: calc(50% - {{SIZE}}px) !important;',
                    '.rtl {{WRAPPER}} .bwdtxsx-advance-tabs.bwdtxsx-tabs-vertical > .bwdtxsx-tabs-nav > ul li:after' => 'right: auto; left: -{{SIZE}}px !important; top: calc(50% - {{SIZE}}px) !important;',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_tab_caret_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'bwdtxsx_adv_tabs_tab_caret_color',
            [
                'label' => esc_html__('Caret Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#444',
                'selectors' => [
                    '{{WRAPPER}} .bwdtxsx-advance-tabs:not(.bwdtxsx-tabs-vertical) > .bwdtxsx-tabs-nav > ul li:after' => 'border-top-color: {{VALUE}};',
                    '{{WRAPPER}} .bwdtxsx-advance-tabs.bwdtxsx-tabs-vertical > .bwdtxsx-tabs-nav > ul li:after' => 'border-left-color: {{VALUE}};',
                ],
                'condition' => [
                    'bwdtxsx_adv_tabs_tab_caret_show' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style: Advance Tabs Responsive Controls
         * -------------------------------------------
         */
        $this->start_controls_section(
            'bwdtxsx_ad_responsive_controls',
            [
                'label' => esc_html__('Responsive Controls', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'responsive_vertical_layout',
            [
                'label' => __('Vertical Layout', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();

        $bwdtxsx_find_default_tab = [];
        $bwdtxsx_adv_tab_id = 1;
        $bwdtxsx_adv_tab_content_id = 1;
        $tab_icon_migrated = isset($settings['__fa4_migrated']['bwdtxsx_adv_tabs_tab_title_icon_new']);
        $tab_icon_is_new = empty($settings['bwdtxsx_adv_tabs_tab_title_icon']);
        $tab_auto_active =  'yes' === $settings['bwdtxsx_adv_tabs_default_active_tab'] ? esc_attr('bwdtxsx-tab-auto-active') : '';
        $tab_tpggle = 'yes' === $settings['bwdtxsx_adv_tabs_toggle_tab'] ? esc_attr( 'bwdtxsx-tab-toggle' ) : '';


        $this->add_render_attribute(
            'bwdtxsx_tab_wrapper',
            [
                'id' => "bwdtxsx-advance-tabs-{$this->get_id()}",
                'class' => ['bwdtxsx-advance-tabs', $settings['bwdtxsx_adv_tab_layout'], $tab_auto_active, $tab_tpggle],
                'data-tabid' => $this->get_id(),
            ]
        );
        if ($settings['bwdtxsx_adv_tabs_tab_caret_show'] != 'yes') {
            $this->add_render_attribute('bwdtxsx_tab_wrapper', 'class', 'active-caret-on');
        }

        if ($settings['responsive_vertical_layout'] != 'yes') {
            $this->add_render_attribute('bwdtxsx_tab_wrapper', 'class', 'responsive-vertical-layout');
        }

        if( !empty($settings['bwdtxsx_adv_tabs_custom_id_offset']) ){
            $this->add_render_attribute('bwdtxsx_tab_wrapper', 'data-custom-id-offset', esc_attr( $settings['bwdtxsx_adv_tabs_custom_id_offset'] ) );
        }

        $this->add_render_attribute('bwdtxsx_tab_icon_position', 'class', esc_attr($settings['bwdtxsx_adv_tab_icon_position']));
        $this->add_render_attribute('bwdtxsx_tab_icon_position', 'role', 'tablist'); 
        ?>
        <div <?php echo $this->get_render_attribute_string('bwdtxsx_tab_wrapper'); ?>>
            <div class="bwdtxsx-tabs-nav" role="tablist">
                <ul <?php echo $this->get_render_attribute_string('bwdtxsx_tab_icon_position'); ?>>
                    <?php foreach ($settings['bwdtxsx_adv_tabs_tab'] as $index => $tab) :
	                    $tab_id = $tab['bwdtxsx_adv_tabs_tab_id'] ? $tab['bwdtxsx_adv_tabs_tab_id'] : HelperTXSX::str_to_css_id( $tab['bwdtxsx_adv_tabs_tab_title'] );
	                    $tab_id = $tab_id === 'safari' ? 'bwdtxsx-safari' : $tab_id;

                        $tab_count = $index + 1;
					    $tab_title_setting_key = $this->get_repeater_setting_key( 'bwdtxsx_adv_tabs_tab_title', 'bwdtxsx_adv_tabs_tab', $index );
					    

                        $this->add_render_attribute( $tab_title_setting_key, [
                            'id' => $tab_id,
                            'class' => [ 'ok', 'bwdtxsx-tab-item-trigger' ],
                            'aria-selected' => 1 === $tab_count ? 'true' : 'false',
                            'data-tab' => $tab_count,
                            'role' => 'tab',
                            'tabindex' => 1 === $tab_count ? '0' : '-1',
                            'aria-controls' => $tab_id . '-tab',
                            'aria-expanded' => 'false',
                        ] );

	                    $repeater_html_tag = ! empty( $tab['bwdtxsx_adv_tabs_tab_title_html_tag'] ) ? HelperTXSX::bwdtxsx_validate_html_tag( $tab['bwdtxsx_adv_tabs_tab_title_html_tag'] ) : 'span';
                        $repeater_tab_title = HelperTXSX::bwdtxsx_wp_kses($tab['bwdtxsx_adv_tabs_tab_title']);
                                
                        ?>
                        <li <?php $this->print_render_attribute_string( $tab_title_setting_key ); ?>>
                            <?php if( $settings['bwdtxsx_adv_tab_icon_position'] === 'bwdtxsx-tab-inline-icon' && $settings['bwdtxsx_adv_tabs_tab_icon_alignment'] === 'after' ) : ?>
                                <?php 
                                $this->add_render_attribute( $tab_title_setting_key . '_repeater_tab_title_attr', [
                                    'class' => [ 'bwdtxsx-tab-title', ' title-before-icon' ],
                                ] );

                                printf('<%1$s %2$s>%3$s</%1$s>', 
                                    $repeater_html_tag,
                                    $this->get_render_attribute_string( $tab_title_setting_key . '_repeater_tab_title_attr'), 
                                    $repeater_tab_title 
                                ); 
                                ?>
                            <?php endif; ?>

                            <?php if ($settings['bwdtxsx_adv_tabs_icon_show'] === 'yes') :
                                if ($tab['bwdtxsx_adv_tabs_icon_type'] === 'icon') : ?>
                                    <?php if ($tab_icon_is_new || $tab_icon_migrated) {
		                                \Elementor\Icons_Manager::render_icon( $tab['bwdtxsx_adv_tabs_tab_title_icon_new'] );
                                    } else {
                                        echo '<i class="' . $tab['bwdtxsx_adv_tabs_tab_title_icon'] . '"></i>';
                                    } ?>
                                <?php elseif ($tab['bwdtxsx_adv_tabs_icon_type'] === 'image') : ?>
                                    <img src="<?php echo esc_attr($tab['bwdtxsx_adv_tabs_tab_title_image']['url']); ?>" alt="<?php echo esc_attr(get_post_meta($tab['bwdtxsx_adv_tabs_tab_title_image']['id'], '_wp_attachment_image_alt', true)); ?>">
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if( $settings['bwdtxsx_adv_tab_icon_position'] === 'bwdtxsx-tab-inline-icon' && $settings['bwdtxsx_adv_tabs_tab_icon_alignment'] !== 'after' ) : ?>
                                <?php 
                                $this->add_render_attribute( $tab_title_setting_key . '_repeater_tab_title_attr', [
                                    'class' => [ 'bwdtxsx-tab-title', ' title-after-icon' ],
                                ] );

                                printf('<%1$s %2$s>%3$s</%1$s>', 
                                    $repeater_html_tag,
                                    $this->get_render_attribute_string( $tab_title_setting_key . '_repeater_tab_title_attr'), 
                                    $repeater_tab_title 
                                ); 
                                ?>
                            <?php endif; ?>

                            <?php if( $settings['bwdtxsx_adv_tab_icon_position'] !== 'bwdtxsx-tab-inline-icon' ) : ?>
                                <?php 
                                $this->add_render_attribute( $tab_title_setting_key . '_repeater_tab_title_attr', [
                                    'class' => [ 'bwdtxsx-tab-title', ' title-after-icon' ],
                                ] );

                                printf('<%1$s %2$s>%3$s</%1$s>', 
                                    $repeater_html_tag,
                                    $this->get_render_attribute_string( $tab_title_setting_key . '_repeater_tab_title_attr'), 
                                    $repeater_tab_title 
                                ); 
                                ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="bwdtxsx-tabs-content">
		        <?php foreach ($settings['bwdtxsx_adv_tabs_tab'] as $tab) :
			        // $bwdtxsx_find_default_tab[] = $tab['bwdtxsx_adv_tabs_tab_show_as_default'];
			        $tab_id = $tab['bwdtxsx_adv_tabs_tab_id'] ? $tab['bwdtxsx_adv_tabs_tab_id'] : HelperTXSX::str_to_css_id( $tab['bwdtxsx_adv_tabs_tab_title'] );
			        $tab_id = $tab_id === 'safari' ? 'bwdtxsx-safari-tab' : $tab_id . '-tab'; ?>

                    <div id="<?php echo esc_attr( $tab_id ); ?>" class="clearfix bwdtxsx-tab-content-item " data-title-link="<?php echo esc_attr( $tab_id ); ?>">
				        <?php if ('content' == $tab['bwdtxsx_adv_tabs_text_type']) : ?>
					        <?php echo do_shortcode($tab['bwdtxsx_adv_tabs_tab_content']); ?>
				        <?php elseif ('template' == $tab['bwdtxsx_adv_tabs_text_type']) : ?>

                        <?php if ( !empty( $tab[ 'bwdtxsx_primary_templates' ] ) ) { ?>
						    <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $tab['bwdtxsx_primary_templates'] ); ?>
					    <?php } ?>

				        <?php endif; ?>
                    </div>
		        <?php endforeach; ?>
            </div>
        </div><?php 
    }

}