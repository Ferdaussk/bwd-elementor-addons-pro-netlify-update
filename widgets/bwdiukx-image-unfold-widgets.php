<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function bwdiukx_is_elementor_version($operator = '<', $version = '2.6.0') {
	return defined('ELEMENTOR_VERSION') && version_compare(ELEMENTOR_VERSION, $version, $operator);
}
function bwdiukx_get_allowed_html_tags($level = 'basic') {
	$allowed_html = [
		'b'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'i'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'u'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		's'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'br'     => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'em'     => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'del'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'ins'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'sub'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'sup'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'code'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'mark'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'small'  => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'strike' => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'abbr'   => [
			'title' => [],
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'span'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'strong' => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
	];

	if ( 'intermediate' === $level || 'all' === $level ) {
		$tags = [
			'a'       => [
				'href'  => [],
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'q'       => [
				'cite'  => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'img'     => [
				'src'    => [],
				'alt'    => [],
				'height' => [],
				'width'  => [],
				'class'  => [],
				'id'     => [],
				'style'  => [],
			],
			'dfn'     => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
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
			'acronym' => [
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
		];

		$allowed_html = array_merge($allowed_html, $tags);
	}

	return $allowed_html;
}
function bwdiukx_render_icon($settings = [], $old_icon_id = 'icon', $new_icon_id = 'selected_icon', $attributes = []) {
	// Check if its already migrated
	$migrated = isset($settings['__fa4_migrated'][$new_icon_id]);
	// Check if its a new widget without previously selected icon using the old Icon control
	$is_new = empty($settings[$old_icon_id]);

	$attributes['aria-hidden'] = 'true';

	if (bwdiukx_is_elementor_version('>=', '2.6.0') && ($is_new || $migrated)) {
		\Elementor\Icons_Manager::render_icon($settings[$new_icon_id], $attributes);
	} else {
		if (empty($attributes['class'])) {
			$attributes['class'] = $settings[$old_icon_id];
		} else {
			if (is_array($attributes['class'])) {
				$attributes['class'][] = $settings[$old_icon_id];
			} else {
				$attributes['class'] .= ' ' . $settings[$old_icon_id];
			}
		}
		printf('<i %s></i>', \Elementor\Utils::render_html_attributes($attributes));
	}
}
function bwdiukx_kses_intermediate($string = '') {
	return wp_kses($string, bwdiukx_get_allowed_html_tags('intermediate'));
}
function bwdiukx_kses_basic($string = '') {
	return wp_kses($string, bwdiukx_get_allowed_html_tags('basic'));
}
function bwdiukx_get_allowed_html_desc($level = 'basic') {
	if (!in_array($level, ['basic', 'intermediate'])) {
		$level = 'basic';
	}

	$tags_str = '<' . implode('>,<', array_keys(bwdiukx_get_allowed_html_tags($level))) . '>';
	return sprintf(__('This input field has support for the following HTML tags: %1$s', BWDEB_ROOT_AUTHOR_PRO), '<code>' . esc_html($tags_str) . '</code>');
}

class Probwdiukx_ImageUnfold_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdiukx-kit-unfold-image', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Image Unfold Kit', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdiukx-ImageUnfold-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		/**
		 * Register content related controls
		*/
		$this->content_common();

		/**
		 * Register styles related controls
		*/
		$this->style_common();
		$this->style_title();
		$this->style_content();
		$this->style_button();
		$this->style_actions();

	}

	protected function content_common() {
        $this->start_controls_section(
            'bwdiukx_section_content',
            [
                'label' => __('Content', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'bwdiukx_background_image',
            [
                'label' => __('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_label',
            [
                'label'   => __('Label', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __('Choose Label', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_title',
            [
                'label'   => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
                'label_block' => true,
                'default' => __('Image Title', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_description',
            [
                'label' => __('Description', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'description' => bwdiukx_get_allowed_html_desc( 'intermediate' ),
                'default' => __('Image Unfold content.', BWDEB_ROOT_AUTHOR_PRO),
                'placeholder' => __('Type your description here', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_enable_button',
            [
                'label'        => __('Enable Button', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default'      => 'no',
                'separator'    => 'before'
            ]
        );

        $repeater->add_control(
            'bwdiukx_button_label',
            [
                'label'   => __('Button Label', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => __('Read More', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'bwdiukx_enable_button' => 'yes',
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_button_url',
            [
                'label'   => __('Button URL', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::URL,
                'condition' => [
                    'bwdiukx_enable_button' => 'yes',
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'bwdiukx_enable_popup',
            [
                'label'        => __('Enable Popup', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default'      => 'no',
                'separator'    => 'before'
            ]
        );

        $repeater->add_control(
			'bwdiukx_popup_icon',
			[
				'label' => esc_html__( 'Popup Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
                'condition' => [
                    'bwdiukx_enable_popup' => 'yes',
                ],
			]
		);

        $repeater->add_control(
            'bwdiukx_enable_link',
            [
                'label'        => __('Enable Link', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default'      => 'no',
                'separator'    => 'before'
            ]
        );

        $repeater->add_control(
            'bwdiukx_link_url',
            [
                'label'   => __('Link URL', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => \Elementor\Controls_Manager::URL,
                'condition' => [
                    'bwdiukx_enable_link' => 'yes',
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
			'bwdiukx_link_icon',
			[
				'label' => esc_html__( 'Link Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
                'condition' => [
                    'bwdiukx_enable_link' => 'yes',
                ],
			]
		);

        $repeater->add_control(
            'active',
            [
                'label'        => __('Active', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'description'  => __('Active on Load', BWDEB_ROOT_AUTHOR_PRO),
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default'      => 'no',
                'separator'    => 'before'
            ]
        );

        $this->add_control(
            'bwdiukx_accordion_items',
            [
                'label'         => __('Items', 'bwdiukx-unfold-image'),
                'type'          => \Elementor\Controls_Manager::REPEATER,
                'fields'        => $repeater->get_controls(),
                'prevent_empty' => true,
                'default'       => [
                    [
                        'bwdiukx_label'         => __('Choose Label', 'bwdiukx-unfold-image'),
                        'bwdiukx_title'         => __('Image Title 1', 'bwdiukx-unfold-image'),
                        'bwdiukx_description'         => __('Image Unfold content.', 'bwdiukx-unfold-image'),
                        'bwdiukx_enable_button'  => 'yes',
                        'active'        => 'yes',
                    ],
                    [
                        'bwdiukx_label'         => __('Choose Label', 'bwdiukx-unfold-image'),
                        'bwdiukx_title'         => __('Image Title 2', 'bwdiukx-unfold-image'),
                        'bwdiukx_description'         => __('Image Unfold content.', 'bwdiukx-unfold-image'),
                        'bwdiukx_enable_button'  => 'yes',
                    ],
                    [
                        'bwdiukx_label'         => __('Choose Label', 'bwdiukx-unfold-image'),
                        'bwdiukx_title'         => __('Image Title 3', 'bwdiukx-unfold-image'),
                        'bwdiukx_description'         => __('Image Unfold content.', 'bwdiukx-unfold-image'),
                        'bwdiukx_enable_button'  => 'yes',
                    ],
                    [
                        'bwdiukx_label'         => __('Choose Label', 'bwdiukx-unfold-image'),
                        'bwdiukx_title'         => __('Image Title 4', 'bwdiukx-unfold-image'),
                        'bwdiukx_description'         => __('Image Unfold content.', 'bwdiukx-unfold-image'),
                        'bwdiukx_enable_button'  => 'yes',
                    ],
                ],
                'title_field'   => '{{{ bwdiukx_title }}}',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_items_style',
            [
                'label'         => esc_html__('Style', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'horizontal'    => esc_html__('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
                    'vertical'      => esc_html__('Vertical', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'       => 'horizontal',
                'prefix_class'  => 'bwdiukx-image-accordion%s-',
            ]
        );

        $this->add_control(
            'bwdiukx_active_behavior',
            [
                'label'         => esc_html__('Active Behavior', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'click' => esc_html__('Click', BWDEB_ROOT_AUTHOR_PRO),
                    'hover' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'       => 'click',
                'prefix_class'  => 'bwdiukx-image-accordion-',
            ]
        );

        $this->add_control(
            'bwdiukx_active_behavior_notice',
            [
                'raw' => '<strong>' . esc_html__('Please note!', BWDEB_ROOT_AUTHOR_PRO) . '</strong> ' . esc_html__('Active on load won\'t be working with this active behavior.', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::RAW_HTML,
                'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
                'render_type' => 'ui',
                'condition' => [
                    'bwdiukx_active_behavior' => 'hover',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_content_text_align',
            [
                'label' => __('Text Align', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_content_h_align',
            [
                'label' => __('Horizontal Align', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-overlay' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'content_v_align',
            [
                'label' => __('Vertical Align', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Top', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => __('Bottom', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-overlay' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_content_animation',
            [
                'label'        => __('Enable Content Animation?', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'    => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->end_controls_section();
    }

	protected function style_common() {
        
        $this->start_controls_section(
            'bwdiukx_section_common',
            [
                'label' => __('Common', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_common_height',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
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
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-gallery-wrap' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_common_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_common_padding',
            [
                'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-gallery-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdiukx_common_border',
                'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdiukx-ia-gallery-wrap',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_common_border_radius',
            [
                'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-gallery-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdiukx_common_box_shadow',
                'label' => __('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdiukx-ia-gallery-wrap',
            ]
        );

        $this->add_control(
            'bwdiukx_common_background_color',
            [
                'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-gallery-wrap' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'bwdiukx_common_image_control_heading',
			[
				'label' => __( 'Image Controls', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_responsive_control(
            'bwdiukx_image_gutter',
            [
                'label' => __('Gutter', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 16,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}}.bwdiukx-image-accordion-horizontal .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}}.bwdiukx-image-accordion-tablet-horizontal .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}}.bwdiukx-image-accordion-mobile-horizontal .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',

                    '{{WRAPPER}}.bwdiukx-image-accordion-vertical .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}}.bwdiukx-image-accordion-tablet-vertical .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}}.bwdiukx-image-accordion-mobile-vertical .bwdiukx-ia-item' => '--bwdiukx-ia-gutter-margin: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_image_radius',
            [
                'label' => __('Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-gallery-wrap .bwdiukx-ia-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
			'bwdiukx_bwdiukx_common_overlay_color_heading',
			[
				'label' => __( 'Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $this->start_controls_tabs('common_color');

        $this->start_controls_tab(
            'bwdiukx_common_normal',
            [
                'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdiukx_common_overlay_color',
				'label' => __( 'Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdiukx-ia-item .bwdiukx-overlay',
			]
		);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdiukx_common_hover',
            [
                'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdiukx_common_overlay_color_hover',
				'label' => __( 'Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdiukx-ia-item:hover .bwdiukx-overlay',
			]
		);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdiukx_common_active',
            [
                'label' => __('Active', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );


        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdiukx_common_overlay_color_active',
				'label' => __( 'Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdiukx-ia-item.active .bwdiukx-overlay',
			]
		);

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function style_title() {
        $this->start_controls_section(
            'bwdiukx_section_style_title',
            [
                'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_title_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-icon-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_title_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-icon-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdiukx_title_typography',
                'label' => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'fields_options' => [
                    'typography' => [
                        'default' => 'yes'
                    ],
                    'font_family' => [
                        'default' => 'Nunito',
                    ],
                    'font_weight' => [
                        'default' => 'bold', // 100, 200, 300, 400, 500, 600, 700, 800, 900, normal, bold
                    ],
                ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-icon-title',
            ]
        );

        $this->end_controls_section();
    }

    protected function style_content() {

        $this->start_controls_section(
            'bwdiukx_section_style_content',
            [
                'label' => __('Content', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_content_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_content_padding',
            [
                'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default' => [
                    'top' => '15',
                    'right' => '15',
                    'bottom' => '15',
                    'left' => '15',
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_label_heading',
            [
                'label' => __('Label', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_label_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdiukx_label_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-label' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdiukx_label_typography',
                'label' => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'fields_options' => [
                    'typography' => [
                        'default' => 'yes'
                    ],
                    'font_family' => [
                        'default' => 'Nunito',
                    ],
                    'font_weight' => [
                        'default' => '400', // 100, 200, 300, 400, 500, 600, 700, 800, 900, normal, bold
                    ],
                ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-label',
            ]
        );

        $this->add_control(
            'bwdiukx_description_heading',
            [
                'label' => __('Description', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_description_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'bwdiukx_description_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-description' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdiukx_description_typography',
                'label' => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'fields_options' => [
                    'typography' => [
                        'default' => 'yes'
                    ],
                    'font_family' => [
                        'default' => 'Nunito',
                    ],
                    'font_weight' => [
                        'default' => '500', // 100, 200, 300, 400, 500, 600, 700, 800, 900, normal, bold
                    ],
                ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-container .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-description',
            ]
        );

        $this->end_controls_section();
    }

    protected function style_button() {
        $this->start_controls_section(
            'bwdiukx_section_style_button',
            [
                'label' => __('Button', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_button_padding',
            [
                'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default' => [
                    'top' => '8',
                    'right' => '15',
                    'bottom' => '8',
                    'left' => '15',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bwdiukx_button_typography',
                'label' => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'fields_options' => [
                    'typography' => [
                        'default' => 'yes'
                    ],
                    'font_family' => [
                        'default' => 'Nunito',
                    ],
                    'font_weight' => [
                        'default' => '400', // 100, 200, 300, 400, 500, 600, 700, 800, 900, normal, bold
                    ],
                ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdiukx_button_border',
                'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_button_border_radius',
            [
                'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('bwdiukx_bwdiukx_button_color_tab');

        $this->start_controls_tab(
            'button_normal',
            [
                'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_control(
            'bwdiukx_button_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bwdiukx_button_background',
                'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'exclude' => [ 'image' ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdiukx_button_hover',
            [
                'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_control(
            'bwdiukx_button_color_hover',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bwdiukx_button_background_hover',
                'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'exclude' => [ 'image' ],
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button:hover',
            ]
        );

        $this->add_control(
            'bwdiukx_button_border_color_hover',
            [
                'label' => __('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdiukx_button_border_border!' => ''
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-content-button:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function style_actions() {
        $this->start_controls_section(
            'bwdiukx_section_style_actions',
            [
                'label' => __('Actions', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_action_margin',
            [
                'label' => __('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '10',
                    'left' => '',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_action_icon_size',
            [
                'label' => __('Icon Size', 'bwdiukx-unfold-image'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup i, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup svg, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link svg' => 'width: {{SIZE}}{{UNIT}}!important; height: {{SIZE}}{{UNIT}}!important;',
                ],
            ]
        );

        $this->add_control(
			'bwdiukx_action_icon_box_size',
			[
				'label' => esc_html__( 'Icon Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
                    'size' => 50,
                ],
				'selectors' => [
					'{{WRAPPER}} .bwdiukx-ia-actions .bwdiukx-ia-link, .bwdiukx-ia-actions .bwdiukx-ia-popup' => 'width: {{SIZE}}{{UNIT}};height:{{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
            'bwdiukx_action_icon_space_between',
            [
                'label' => __('Space Between', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup+.bwdiukx-ia-link' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdiukx_action_icon_border',
                'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions span',
            ]
        );

        $this->add_responsive_control(
            'bwdiukx_action_icon_border_radius',
            [
                'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default' => [
                    'top' => '100',
                    'right' => '100',
                    'bottom' => '100',
                    'left' => '100',
                    'unit' => '%',
                    'isLinked' => true,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('bwdiukx_action_icon_color_tab');

        $this->start_controls_tab(
            'bwdiukx_action_icon_normal',
            [
                'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_control(
            'bwdiukx_action_bwdiukx_popup_icon_color',
            [
                'label' => __('Popup Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup i, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup svg' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_popup_icon_background_color',
            [
                'label' => __('Popup Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_popup_icon_border_color',
            [
                'label' => __('Popup Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdiukx_action_icon_border_border!' => ''
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_color',
            [
                'label' => __('Link Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link i, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link svg' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_background_color',
            [
                'label' => __('Link Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_border_color',
            [
                'label' => __('Link Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdiukx_action_icon_border_border!' => ''
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdiukx_action_icon_hover',
            [
                'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),

            ]
        );

        $this->add_control(
            'bwdiukx_action_bwdiukx_popup_icon_color_hover',
            [
                'label' => __('Popup Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup:hover i, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup:hover svg' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup:hover svg' => 'fill: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'action_bwdiukx_popup_icon_background_color_hover',
            [
                'label' => __('Popup Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_popup_icon_border_color_hover',
            [
                'label' => __('Popup Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdiukx_action_icon_border_border!' => ''
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-popup:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_color_hover',
            [
                'label' => __('Link Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link:hover i, {{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link:hover svg' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link:hover svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_background_color_hover',
            [
                'label' => __('Link Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'action_bwdiukx_link_icon_border_color_hover',
            [
                'label' => __('Link Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdiukx_action_icon_border_border!' => ''
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdiukx-ia-content-wrapper .bwdiukx-ia-actions .bwdiukx-ia-link:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        $animation_class = ( ($settings['bwdiukx_content_animation'] == 'yes')? 'bwdiukx_fadeInUp': 'bwdiukx_noAnimation' );
?>
        <div class="bwdiukx-image-accordion-wrapper">
            <div class="bwdiukx-ia-container">
                <div class="bwdiukx-ia-gallery-wrap">
                    <?php foreach ($settings['bwdiukx_accordion_items'] as $inx => $item) : ?>
                        <div style="background-image: url('<?php echo esc_url($item['bwdiukx_background_image']['url']); ?>');" class="bwdiukx-ia-item <?php echo esc_attr(($item['active'] == 'yes') ? 'active' : ''); ?>">
                            <div class="bwdiukx-overlay">
                                <div class="bwdiukx-ia-content-wrapper <?php echo esc_attr($animation_class); ?>">
                                    <?php if ($item['bwdiukx_enable_popup'] == 'yes' || $item['bwdiukx_enable_link'] == 'yes') : ?>
                                        <div class="bwdiukx-ia-actions">
                                            <?php if ($item['bwdiukx_enable_popup'] == 'yes') : ?>
                                                <span class="bwdiukx-ia-popup">
                                                    <a href="<?php echo esc_url($item['bwdiukx_background_image']['url']); ?>" data-elementor-open-lightbox="yes">
                                                      
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdiukx_popup_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </a>
                                                </span>
                                            <?php endif; ?>
                                            <?php if ($item['bwdiukx_enable_link'] == 'yes') : ?>
                                                <span class="bwdiukx-ia-link">
                                                    <a href="<?php echo esc_url($item['bwdiukx_link_url']['url']); ?>" <?php echo esc_attr($item['bwdiukx_link_url']['is_external'] ? 'target=_blank' : ''); ?> <?php echo esc_attr($item['bwdiukx_link_url']['nofollow'] ? 'rel=nofollow' : ''); ?>>
                                                        <?php \Elementor\Icons_Manager::render_icon( $item['bwdiukx_link_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                    </a>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($item['label'])) : ?>
                                        <span class="bwdiukx-ia-content-label"><?php echo esc_html($item['bwdiukx_label']); ?></span>
                                    <?php endif; ?>
                                    <div class="bwdiukx-ia-content-icon-title">
                                        <span class="bwdiukx-ia-content-title"><?php echo esc_html($item['bwdiukx_title']); ?></span>
                                    </div>
                                    <?php if (!empty($item['bwdiukx_description'])) :
                                        printf('<div class="bwdiukx-ia-content-description">%s</div>', bwdiukx_kses_intermediate( $item['bwdiukx_description'] ));
                                    endif; ?>
                                    <?php if ($item['bwdiukx_enable_button'] == 'yes') : ?>
                                        <a class="bwdiukx-ia-content-button" href="<?php echo esc_attr($item['bwdiukx_button_url']['url']); ?>" <?php echo esc_attr($item['bwdiukx_button_url']['is_external'] ? 'target=_blank' : ''); ?> <?php echo esc_attr($item['bwdiukx_button_url']['nofollow'] ? 'rel=nofollow' : ''); ?>>
                                            <?php echo esc_html($item['bwdiukx_button_label']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<?php
    }

}