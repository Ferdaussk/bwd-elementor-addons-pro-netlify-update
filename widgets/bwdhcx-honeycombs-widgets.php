<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdhcx_honeycombs_widgets extends Widget_Base {

    public function get_name() {
		return 'bwdhcx-honeycombs';
	}

	public function get_title() {
		return esc_html__( 'Honeycombs', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle honeycombs';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() {

        $this->start_controls_section(
            'bwdhcx_section_honeycombs_item',
            [
                'label' => __('Layout', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdhcx_honeycomb_style',
            [
                'label'   => __('HoneyComb Style', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default' => __('Default', BWDEB_ROOT_AUTHOR_PRO),
                    'radius'  => __('Radius', BWDEB_ROOT_AUTHOR_PRO),
                    'radius2' => __('Large Radius', BWDEB_ROOT_AUTHOR_PRO),
                    'zigzag'  => __('Zigzag', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

		$repeater = new \Elementor\Repeater();

		$repeater->start_controls_tabs(
            'tabs_content',
        );

        $repeater->start_controls_tab(
            'tab_content_front',
            [
                'label' => __('Front', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $repeater->add_control(
			'honeycombs_item_image',
			[
				'label' => esc_html__( 'Item Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

        $repeater->add_control(
            'honeycombs_item_icon',
            [
                'label'       => __('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $repeater->add_control(
            'honeycombs_title',
            [
                'label'       => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => __('Title Item', BWDEB_ROOT_AUTHOR_PRO),
                'default'     => __('Title Item', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon_color',
            [
                'label'     => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb {{CURRENT_ITEM}}.bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $repeater->add_control(
            'title_color_item',
            [
                'label'     => esc_html__('Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $repeater->add_control(
            'background_item',
            [
                'label'       => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::COLOR,
                'selectors'   => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs  .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-icon-hex-lg' => 'background-color: {{VALUE}}',
                ],
                'render_type' => 'template',
            ]
        );

        $repeater->add_control(
            'honeycombs_bg_img',
            [
                'label'       => __('Background Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::MEDIA,
                'dynamic'     => [
                    'active' => true,
                ],
                'label_block' => true,
                'selectors'   => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-icon-hex-lg' => 'background: url({{URL}}) no-repeat;
                        background-size: cover; background-clip: text; -webkit-background-clip: text;  color: transparent;
                        background-position: center center;
                        background-repeat: no-repeat;
                        filter: none;',
                ],
            ]
        );

        $repeater->end_controls_tab();

        $repeater->start_controls_tab(
            'tab_content_back',
            [
                'label' => __('Back', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $repeater->add_control(
            'honeycombs_item_back_icon',
            [
                'label'       => __('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $repeater->add_control(
			'honeycombs_item_back_image',
			[
				'label' => esc_html__( 'Item Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

        $repeater->add_control(
            'honeycombs_content',
            [
                'label'       => __('Content', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::WYSIWYG,
                'default'     => __("Default description. Lorem Ipsum is simply dummy text of the printing and typesetting industry.   ", BWDEB_ROOT_AUTHOR_PRO),
                'placeholder' => __('Type your description here', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon_back_color',
            [
                'label'     => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-inner .bwdhcx-wrapper .bwdimx-image-marqueetd' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb {{CURRENT_ITEM}}.bwdhcx-inner .bwdhcx-wrapper .bwdimx-image-marqueetd svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $repeater->add_control(
            'title_color_item_back',
            [
                'label'     => esc_html__('Content Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}} .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $repeater->add_control(
            'background_item_back',
            [
                'label'       => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::COLOR,
                'selectors'   => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb{{CURRENT_ITEM}}:hover .bwdhcx-icon-hex-lg' => 'background-color: {{VALUE}} !important',
                ],
                'render_type' => 'template',
            ]
        );

        $repeater->add_control(
            'honeycombs_bg_img_back',
            [
                'label'       => __('Background Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::MEDIA,
                'dynamic'     => [
                    'active' => true,
                ],
                'label_block' => true,
                'selectors'   => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-comb{{CURRENT_ITEM}}:hover .bwdhcx-icon-hex-lg' => 'background: url({{URL}}) no-repeat center center;
                        background-size: cover; background-clip: text; -webkit-background-clip: text;  color: transparent;
                        background-position: center;
                        filter: none;',
                ],
            ]
        );


        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();

		$repeater->add_control(
            'honeycombs_link',
            [
                'label'       => __('Link', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::URL,
                'dynamic'     => [
                    'active' => true,
                ],
                'label_block' => true,
                'placeholder' => __('https://your-link.com', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

		$this->add_control(
            'honeycombs_list',
            [
                //'label'       => __('Items', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                //'separator'   => 'before',
                'default'     => [
                    [
                        'honeycombs_title'     => esc_html__('Comb 1', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_content'   => esc_html__('#1 Click edit button to change this text. Lorem agaca ipsum.', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_item_icon' => [
                            'value'   => 'far fa-moon',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_back_icon' => [
                            'value'   => 'far fa-moon',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                        'honeycombs_item_back_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                    ],
                    [
                        'honeycombs_title'     => esc_html__('Comb 2', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_content'   => esc_html__('#2 Click edit button to change this text. Lorem agaca ipsum. ', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_item_icon' => [
                            'value'   => 'far fa-smile',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_back_icon' => [
                            'value'   => 'far fa-smile',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                        'honeycombs_item_back_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                    ],
                    [
                        'honeycombs_title'     => esc_html__('Comb 3', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_content'   => esc_html__('#3 Click edit button to change this text. Lorem agaca ipsum. ', BWDEB_ROOT_AUTHOR_PRO),
                        'honeycombs_item_icon' => [
                            'value'   => 'far fa-heart',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_back_icon' => [
                            'value'   => 'far fa-heart',
                            'library' => 'fa-regular'
                        ],
                        'honeycombs_item_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                        'honeycombs_item_back_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
                    ],

                ],
            ]
        );
		
		$this->add_control(
            'icon_display',
            [
                'label'        => esc_html__('Front Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
                'separator'    => 'before'
            ]
        );

		$this->add_control(
            'icon_back_display',
            [
                'label'        => esc_html__('Back Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

		$this->add_control(
            'image_display',
            [
                'label'        => esc_html__('Front Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
		$this->add_control(
            'image_back_display',
            [
                'label'        => esc_html__('Back Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        $this->add_control(
            'title_display',
            [
                'label'        => esc_html__('Show Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'description_display',
            [
                'label'        => esc_html__('Show Description', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_responsive_control(
            'items_width',
            [
                'label'      => esc_html__('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', ''],
                'range'      => [
                    'px' => [
                        'min'  => 100,
                        'max'  => 600,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 250,
                ],
                'render_type' => 'template',
            ]
        );

        $this->add_control(
            'items_spacing',
            [
                'label'      => esc_html__('Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', ''],
                'range'      => [
                    'px' => [
                        'min'  => -50,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => -20,
                ],
            ]
        );


        $this->end_controls_section();

        //Style
        // content items
        $this->start_controls_section(
            'section_style_items',
            [
                'label' => __('Item', BWDEB_ROOT_AUTHOR_PRO),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('tabs_items_style');

        $this->start_controls_tab(
            'tab_items_front',
            [
                'label' => __('Front', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'        => 'items_background',
                'selector'    => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-icon-hex-lg',
                'render_type' => 'template'
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'items_css_filters',
                'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-icon-hex-lg',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_items_back',
            [
                'label' => __('Back', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'        => 'items_background_back',
                'selector'    => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb:hover .bwdhcx-comb-inner-wrapper .bwdhcx-icon-hex-lg',
                'render_type' => 'template'
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'items_css_filters_back',
                'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb:hover .bwdhcx-icon-hex-lg',
            ]
        );


        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
        // end content items

        // icon
        $this->start_controls_section(
            'section_style_icon',
            [
                'label'     => __('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'tab'       => Controls_Manager::TAB_STYLE,
                // 'condition' => [
                //     'icon_display' => 'yes',
                // ],
            ]
        );

        $this->start_controls_tabs(
			'icon_style_tabs'
		);

		$this->start_controls_tab(
			'icon_style_front_tab',
			[
				'label' => esc_html__( 'Front', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_control(
            'icon_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label'      => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', ''],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon'     => 'font-size: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon svg' => 'width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon'     => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-icon svg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

		$this->start_controls_tab(
			'icon_style_Back_tab',
			[
				'label' => esc_html__( 'Back', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_control(
            'icon_color_back',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_size_back',
            [
                'label'      => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', ''],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon'     => 'font-size: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon svg' => 'width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding_back',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon'     => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-icon svg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        // icon

        // title
        $this->start_controls_section(
            'section_style_title',
            [
                'label'     => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'title_display' => 'yes',
                ],
            ]
        );


        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'label'    => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-title',
            ]
        );


        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        // end title


        // description
        $this->start_controls_section(
            'section_style_description',
            [
                'label'     => __('Description', BWDEB_ROOT_AUTHOR_PRO),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'description_display' => 'yes',
                ],
            ]
        );


        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'label'    => __('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-content',
            ]
        );


        $this->add_responsive_control(
            'description_padding',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        // end description

        // image
        $this->start_controls_section(
            'section_style_image',
            [
                'label'     => __('Image', BWDEB_ROOT_AUTHOR_PRO),
                'tab'       => Controls_Manager::TAB_STYLE,
                // 'condition' => [
                //     'image_display' => 'yes',
                //     'image_back_display' => 'yes',
                // ],
            ]
        );

        $this->start_controls_tabs(
			'image_style_tabs'
		);

		$this->start_controls_tab(
			'image_style_front_tab',
			[
				'label' => esc_html__( 'Front', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
        $this->add_responsive_control(
			'image_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-single-img' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'image_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-single-img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'image_border',
				'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-single-img',
			]
		);

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label'      => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-single-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_padding',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

		$this->start_controls_tab(
			'image_style_Back_tab',
			[
				'label' => esc_html__( 'Back', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_control(
			'image_back_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-singleback-img' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
			'image_back_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-singleback-img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'image_border_back',
				'selector' => '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-singleback-img',
			]
		);

        $this->add_responsive_control(
            'image_border_radius_back',
            [
                'label'      => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-singleback-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_back_padding',
            [
                'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .bwdhcx-honeycombs-area .bwdhcx-honeycombs .bwdhcx-honeycombs-inner-wrapper .bwdhcx-comb .bwdhcx-inner .bwdhcx-wrapper .bwdhcx-honeycombs-back-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        // image


    }

	protected function render() {

        $settings = $this->get_settings_for_display();


        $frontSideDisplay = '';
        if ($settings['title_display'] == 'yes' || $settings['icon_display'] == 'yes' || $settings['image_display'] == 'yes') {
            $frontSideDisplay = 'yes';
        }

       // $titleTag                   = $settings['title_tag'];
        $honeycomb_style            = 'honeycomb-style-' . $settings['bwdhcx_honeycomb_style'];
        $honeycomb_des_visibility   = ($settings['description_display'] == 'yes') ? ' ' : 'honeycomb-des-visibility-hide';
        $honeycomb_title_visibility = ($frontSideDisplay == 'yes') ? ' ' : 'honeycomb-title-visibility-hide';
        $elementor_vp_lg            = get_option('elementor_viewport_lg');
        $elementor_vp_md            = get_option('elementor_viewport_md');
        $viewport_lg                = !empty($elementor_vp_lg) ? $elementor_vp_lg - 1 : 1023;
        $viewport_md                = !empty($elementor_vp_md) ? $elementor_vp_md - 1 : 767;

        $items_width = isset($settings['items_width']['size']) ? $settings['items_width']['size'] : 250;
        $items_width_tablet = isset($settings['items_width_tablet']['size']) ? $settings['items_width_tablet']['size'] : 250;
        $items_width_mobile = isset($settings['items_width_mobile']['size']) ? $settings['items_width_mobile']['size'] : 250;

        $this->add_render_attribute(
            [
                'honeycombs' => [
                    'data-settings' => [
                        wp_json_encode(array_filter([
                            "id"           => $this->get_id(),
                            "width"        => $items_width,
                            "width_tablet" => $items_width_tablet,
                            "width_mobile" => $items_width_mobile,
                            "viewport_lg"  => $viewport_lg,
                            "viewport_md"  => $viewport_md,
                            "margin"       => $settings['items_spacing']['size'],
                        ])),
                    ],
                ],
            ]
        );

        $this->add_render_attribute('honeycombs', 'class', 'bwdhcx-honeycombs');
        $this->add_render_attribute('honeycombs', 'class', $honeycomb_style);
        $this->add_render_attribute('honeycombs', 'class', $honeycomb_des_visibility . ' ' . $honeycomb_title_visibility);


        ?>


        <div class="bwdhcx-honeycombs-area">

            <div <?php echo $this->get_render_attribute_string('honeycombs'); ?>>

                <?php foreach ($settings['honeycombs_list'] as $index => $item) : ?>

					<?php

					if (!empty($item['honeycombs_link']['url'])) {

						$this->add_render_attribute('bwdhcx-comb-link', 'href', $item['honeycombs_link']['url'], true);

						if ($item['honeycombs_link']['is_external']) {
							$this->add_render_attribute('bwdhcx-comb-link', 'target', '_blank', true);
						} else {
							$this->add_render_attribute('bwdhcx-comb-link', 'target', '_self', true);
						}

						if ($item['honeycombs_link']['nofollow']) {
							$this->add_render_attribute('bwdhcx-comb-link', 'rel', 'nofollow', true);
						}
					} else {
						$this->add_render_attribute('bwdhcx-comb-link', 'href', 'javascript:void(0);', true);
						$this->add_render_attribute('bwdhcx-comb-link', 'target', '_self', true);
					}
                    $this->add_render_attribute('bwdhcx-comb-link', 'class', 'bwdhcx-comb elementor-repeater-item-' . esc_attr($item['_id']), true);

                    ?>

                    <a <?php echo $this->get_render_attribute_string('bwdhcx-comb-link'); ?>>
                        <div class="bwdhcx-front-content">
                            <!-- icon -->
                            <?php if ($settings['icon_display'] == 'yes') : ?>
                                <?php if (!empty($item['honeycombs_item_icon']['value'])) : ?>
                                    <div class="bwdhcx-honeycombs-icon"><?php \Elementor\Icons_Manager::render_icon( $item['honeycombs_item_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <!-- image -->
                            <?php if ($settings['image_display'] == 'yes') : ?>
                               <div class="bwdhcx-honeycombs-img">
                                    <img class="bwdhcx-honeycombs-single-img" src="<?php echo esc_url( $item['honeycombs_item_image']['url'] ); ?>">
                               </div>
                            <?php endif; ?>
                            <!-- title -->
                            <?php if ($settings['title_display'] == 'yes') : ?>
                                <div class="bwdhcx-title">
                                    <?php echo $item['honeycombs_title']; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="bwdhcx-back-content">
                             <!-- icon -->
                             <?php if ($settings['icon_back_display'] == 'yes') : ?>
                                <?php if (!empty($item['honeycombs_item_back_icon']['value'])) : ?>
                                    <div class="bwdhcx-honeycombs-back-icon"><?php \Elementor\Icons_Manager::render_icon( $item['honeycombs_item_back_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <!-- image -->
                            <?php if ($settings['image_back_display'] == 'yes') : ?>
                               <div class="bwdhcx-honeycombs-back-img">
                                    <img class="bwdhcx-honeycombs-singleback-img" src="<?php echo esc_url( $item['honeycombs_item_back_image']['url'] ); ?>">
                               </div>
                            <?php endif; ?>
                            <!-- description -->
                            <?php if ($settings['description_display'] == 'yes') : ?>
                                <div class="bwdhcx-content">
                                    <?php echo $item['honeycombs_content']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>

                <?php endforeach; ?>

            </div>


        </div>


        <?php
    }

}