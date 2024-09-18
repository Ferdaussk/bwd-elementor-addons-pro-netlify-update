<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdrpmx_RestPriceMenu_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdrpmx-restaurant-price-menu', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Restaurant Price Menu', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdrpmx-RestPriceMenu-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() {


		$this->start_controls_section(
			'section_price_menu',
			[
				'label' => esc_html__( 'Price Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();


		//solved
		$repeater->add_control(
			'menu_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'       => [
                    'active'    => true,
                ],
				'label_block'   => true,
			]
		);

		//solved
		$repeater->add_control(
			'menu_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic'       => [
                    'active'    => true,
                ],
                'label_block'   => true,
                'placeholder'   => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
                'default'       => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//solved
		$repeater->add_control(
			'menu_price',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$49', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'       => [
                    'active'    => true,
                ],
			]
		);

       //solved
		$repeater->add_control(
			'discount',
			[
				'label' => esc_html__( 'Discount', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        //solved
		$repeater->add_control(
			'original_price',
			[
				'label' => esc_html__( 'Original Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$69', BWDEB_ROOT_AUTHOR_PRO ),
				'condition'     => [
                    'discount' => 'yes',
                ],
				'dynamic'       => [
                    'active'    => true,
                ],
			]
		);

        //solved
		$repeater->add_control(
			'image_switch',
			[
				'label' => esc_html__( 'Show Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        //solved
		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic'       => [
                    'active'    => true,
                ],
				'condition'     => [
                    'image_switch' => 'yes',
                ],
			]
		);

        //solved
		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'dynamic'       => [
                    'active'    => true,
                ],
			]
		);

		//solved
		$this->add_control(
			'menu_items',
			[
				'label' => esc_html__( '', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'menu_title' => esc_html__( 'Menu Item #1', BWDEB_ROOT_AUTHOR_PRO ),
						'menu_price' => esc_html__( '$49', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'menu_title' => esc_html__( 'Menu Item #2', BWDEB_ROOT_AUTHOR_PRO ),
						'menu_price' => esc_html__( '$49', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'menu_title' => esc_html__( 'Menu Item #3', BWDEB_ROOT_AUTHOR_PRO ),
						'menu_price' => esc_html__( '$49', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ menu_title }}}',
			]
		);
        
       
		//solved
		$this->add_control(
			'menu_style',
			[
				'label' => esc_html__( 'Menu Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => [
					'style-eael' => esc_html__( 'EA Style', BWDEB_ROOT_AUTHOR_PRO ),
					'style-1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style-2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style-3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style-4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
        
        //solved
		$this->add_responsive_control(
			'menu_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => '',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-style-4' => 'text-align: {{VALUE}};',
				],
				'condition'             => [
                    'menu_style' => 'style-4',
                ],
			]
		);
        
        //solved
		$this->add_control(
			'title_price_connector',
			[
				'label' => esc_html__( 'Title-Price Connector', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition'             => [
                    'menu_style' => 'style-1',
                ],
			]
		);
        
        //solved
		$this->add_control(
			'title_separator',
			[
				'label' => esc_html__( 'Title Separator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
            'section_items_style',
            [
                'label'                 => esc_html__( 'Menu Items', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'items_bg_color',
            [
                'label'                 => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'items_spacing',
            [
                'label'                 => esc_html__( 'Items Spacing', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    '%' => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-item-wrap:not(:last-child)' => 'margin-bottom: calc(({{SIZE}}{{UNIT}})/2); padding-bottom: calc(({{SIZE}}{{UNIT}})/2)',
                ],
            ]
        );

		$this->add_responsive_control(
			'items_padding',
			[
				'label'                 => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'                  => 'items_border',
				'label'                 => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder'           => '1px',
				'default'               => '1px',
				'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-item',
			]
		);

		$this->add_control(
			'items_border_radius',
			[
				'label'                 => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'                  => 'pricing_table_shadow',
				'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu-item',
				'separator'             => 'before',
			]
		);
        
        $this->end_controls_section();

		$this->start_controls_section(
            'section_content_style',
            [
                'label'                 => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'             => [
                    'menu_style' => 'style-eael',
                ],
            ]
        );

		$this->add_responsive_control(
			'content_padding',
			[
				'label'                 => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition'             => [
                    'menu_style' => 'style-eael',
                ],
			]
		);
        
        $this->end_controls_section();

		$this->start_controls_section(
            'section_title_style',
            [
                'label'                 => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'                 => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name'                  => 'title_typography',
        //         'label'                 => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
        //         'global' => [
	    //             'default' => Global_Typography::TYPOGRAPHY_ACCENT
        //         ],
        //         'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-title, {{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-title a',
        //     ]
        // );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label'    => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-title, {{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-title a',
			]
		);
        
        $this->add_responsive_control(
            'title_margin',
            [
                'label'                 => esc_html__( 'Margin Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    '%' => [
                        'min'   => 0,
                        'max'   => 40,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-header' => 'margin-bottom: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        
        $this->end_controls_section();

		$this->start_controls_section(
            'section_title_separator_style',
            [
                'label'                 => esc_html__( 'Title Separator', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'             => [
                    'title_separator' => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'divider_title_border_type',
            [
                'label'                 => esc_html__( 'Border Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'default'               => 'dotted',
                'options'               => [
                    'none'      => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
                    'solid'     => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
                    'double'    => esc_html__( 'Double', BWDEB_ROOT_AUTHOR_PRO ),
                    'dotted'    => esc_html__( 'Dotted', BWDEB_ROOT_AUTHOR_PRO ),
                    'dashed'    => esc_html__( 'Dashed', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .eael-price-menu-divider' => 'border-bottom-style: {{VALUE}}',
                ],
                'condition'             => [
                    'title_separator' => 'yes',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'divider_title_border_weight',
            [
                'label'                 => esc_html__( 'Border Height', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [
                    'size'      => 1,
                ],
                'range'                 => [
                    'px' => [
                        'min'   => 1,
                        'max'   => 20,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .eael-price-menu-divider' => 'border-bottom-width: {{SIZE}}{{UNIT}}',
                ],
                'condition'             => [
                    'title_separator' => 'yes',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'divider_title_border_width',
            [
                'label'                 => esc_html__( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [
                    'size'      => 100,
                    'unit'      => '%',
                ],
                'range'                 => [
                    'px' => [
                        'min'   => 1,
                        'max'   => 20,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .eael-price-menu-divider' => 'width: {{SIZE}}{{UNIT}}',
                ],
                'condition'             => [
                    'title_separator' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'divider_title_border_color',
            [
                'label'                 => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .eael-price-menu-divider' => 'border-bottom-color: {{VALUE}}',
                ],
                'condition'             => [
                    'title_separator' => 'yes',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'divider_title_spacing',
            [
                'label'                 => esc_html__( 'Margin Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    '%' => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .eael-price-menu-divider' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();

		$this->start_controls_section(
            'section_price_style',
            [
                'label'                 => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'price_badge_heading',
            [
                'label'                 => esc_html__( 'Price Badge', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::HEADING,
                'separator'             => 'before',
                'condition'             => [
                    'menu_style' => 'style-eael',
                ],
            ]
        );

        $this->add_control(
            'badge_text_color',
            [
                'label'                 => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-style-eael .bwdrpmx-restaurant-menu-price' => 'color: {{VALUE}}',
                ],
                'condition'             => [
                    'menu_style' => 'style-eael',
                ],
            ]
        );

        $this->add_control(
            'badge_bg_color',
            [
                'label'                 => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-style-eael .bwdrpmx-restaurant-menu-price:after' => 'border-right-color: {{VALUE}}',
                ],
                'condition'             => [
                    'menu_style' => 'style-eael',
                ],
            ]
        );

        $this->add_control(
            'price_color',
            [
                'label'                 => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-discount' => 'color: {{VALUE}}',
                ],
                'condition'             => [
                    'menu_style!' => 'style-eael',
                ],
            ]
        );
        
        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name'                  => 'price_typography',
        //         'label'                 => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
        //         'global' => [
	    //             'default' => Global_Typography::TYPOGRAPHY_ACCENT
        //         ],
        //         'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-discount',
        //     ]
        // );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'price_typography',
				'label'    => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-discount',
			]
		);
        
        $this->add_control(
            'original_price_heading',
            [
                'label'                 => esc_html__( 'Original Price', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::HEADING,
                'separator'             => 'before',
            ]
        );
        
        $this->add_control(
            'original_price_strike',
            [
                'label'                 => esc_html__( 'Strikethrough', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SWITCHER,
                'default'               => 'yes',
                'label_on'              => esc_html__( 'On', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off'             => esc_html__( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value'          => 'yes',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-original' => 'text-decoration: line-through;',
                ],
            ]
        );

        $this->add_control(
            'original_price_color',
            [
                'label'                 => esc_html__( 'Original Price Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '#a3a3a3',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-original' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name'                  => 'original_price_typography',
        //         'label'                 => esc_html__( 'Original Price Typography', BWDEB_ROOT_AUTHOR_PRO ),
        //         'global' => [
	    //             'default' => Global_Typography::TYPOGRAPHY_ACCENT
        //         ],
        //         'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-original',
        //     ]
        // );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'original_price_typography',
				'label'    => esc_html__( 'Original Price Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-price-original',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
            'section_description_style',
            [
                'label'                 => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'                 => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-description' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name'                  => 'description_typography',
        //         'label'                 => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
        //         'global' => [
	    //             'default' => Global_Typography::TYPOGRAPHY_ACCENT
        //         ],
        //         'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu-description',
        //     ]
        // );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label'    => esc_html__( 'Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdrpmx-restaurant-menu-description',
			]
		);
        
        $this->add_responsive_control(
            'description_spacing',
            [
                'label'                 => esc_html__( 'Margin Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    '%' => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-description' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();

        /**
         * Style Tab: Image Section
         */
        $this->start_controls_section(
            'section_image_style',
            [
                'label'                 => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
		
        $this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name'                  => 'image_size',
				'label'                 => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'default'               => 'thumbnail',
			]
		);

        $this->add_control(
            'image_bg_color',
            [
                'label'                 => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-image img' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'image_width',
            [
                'label'                 => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    'px' => [
                        'min'   => 20,
                        'max'   => 300,
                        'step'  => 1,
                    ],
                    '%' => [
                        'min'   => 5,
                        'max'   => 50,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-image img' => 'width: {{SIZE}}{{UNIT}}!important',
                ],
            ]
        );
		
		 $this->add_responsive_control(
            'image_height',
            [
                'label'                 => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'range'                 => [
                    'px' => [
                        'min'   => 20,
                        'max'   => 300,
                        'step'  => 1,
                    ],
                    '%' => [
                        'min'   => 5,
                        'max'   => 50,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-image img' => 'height: {{SIZE}}{{UNIT}}!important',
                ],
            ]
        );

		$this->add_responsive_control(
			'image_margin',
			[
				'label'                 => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_padding',
			[
				'label'                 => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'                  => 'image_border',
				'label'                 => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder'           => '1px',
				'default'               => '1px',
				'selector'              => '{{WRAPPER}} .bwdrpmx-restaurant-menu-image img',
			]
		);

		$this->add_control(
			'image_border_radius',
			[
				'label'                 => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'image_vertical_position',
			[
				'label'                 => esc_html__( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::CHOOSE,
				'label_block'           => false,
				'options'               => [
					'top'       => [
						'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-v-align-top',
					],
					'middle'    => [
						'title' => esc_html__( 'Middle', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-v-align-middle',
					],
					'bottom'    => [
						'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-v-align-bottom',
					],
				],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu .bwdrpmx-restaurant-menu-image' => 'align-self: {{VALUE}}',
				],
				'selectors_dictionary'  => [
					'top'      => 'flex-start',
                    'middle'   => 'center',
					'bottom'   => 'flex-end',
				],
			]
		);

        $this->end_controls_section();

        /**
         * Style Tab: Items Divider Section
         */
        $this->start_controls_section(
            'section_table_title_connector_style',
            [
                'label'                 => esc_html__( 'Title-Price Connector', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'                   => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'             => [
                    'title_price_connector' => 'yes',
                    'menu_style' => 'style-1',
                ],
            ]
        );
        
        $this->add_control(
			'title_connector_vertical_align',
			[
				'label'                 => esc_html__( 'Vertical Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                  => \Elementor\Controls_Manager::CHOOSE,
				'default'               => 'middle',
				'options'               => [
					'top'          => [
						'title'    => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'     => 'eicon-v-align-top',
					],
					'middle'       => [
						'title'    => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'     => 'eicon-v-align-middle',
					],
					'bottom'       => [
						'title'    => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'     => 'eicon-v-align-bottom',
					],
				],
				'selectors'             => [
					'{{WRAPPER}} .bwdrpmx-restaurant-menu-style-1 .eael-price-title-connector'   => 'align-self: {{VALUE}};',
				],
				'selectors_dictionary'  => [
					'top'          => 'flex-start',
					'middle'       => 'center',
					'bottom'       => 'flex-end',
				],
                'condition'             => [
                    'title_price_connector' => 'yes',
                    'menu_style' => 'style-1',
                ],
			]
		);
        
        $this->add_control(
            'items_divider_style',
            [
                'label'                 => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'default'               => 'dashed',
                'options'              => [
                    'solid'     => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
                    'dashed'    => esc_html__( 'Dashed', BWDEB_ROOT_AUTHOR_PRO ),
                    'dotted'    => esc_html__( 'Dotted', BWDEB_ROOT_AUTHOR_PRO ),
                    'double'    => esc_html__( 'Double', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-style-1 .eael-price-title-connector' => 'border-bottom-style: {{VALUE}}',
                ],
                'condition'             => [
                    'title_price_connector' => 'yes',
                    'menu_style' => 'style-1',
                ],
            ]
        );

        $this->add_control(
            'items_divider_color',
            [
                'label'                 => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::COLOR,
                'default'               => '#000',
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-style-1 .eael-price-title-connector' => 'border-bottom-color: {{VALUE}}',
                ],
                'condition'             => [
                    'title_price_connector' => 'yes',
                    'menu_style' => 'style-1',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'items_divider_weight',
            [
                'label'                 => esc_html__( 'Divider Weight', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [ 'size' => '1'],
                'range'                 => [
                    'px' => [
                        'min'   => 0,
                        'max'   => 30,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdrpmx-restaurant-menu-style-1 .eael-price-title-connector' => 'border-bottom-width: {{SIZE}}{{UNIT}}; bottom: calc((-{{SIZE}}{{UNIT}})/2)',
                ],
                'condition'             => [
                    'title_price_connector' => 'yes',
                    'menu_style' => 'style-1',
                ],
            ]
        );
        
        $this->end_controls_section();


	}

	protected function render() {
        $settings = $this->get_settings_for_display();
        $i = 1;
        $this->add_render_attribute( 'price-menu', 'class', 'bwdrpmx-restaurant-menu' );
        
		if ( $settings['menu_style'] ) {
			$this->add_render_attribute( 'price-menu', 'class', 'bwdrpmx-restaurant-menu-' . $settings['menu_style'] );
		}
        ?>
        <div <?php echo $this->get_render_attribute_string( 'price-menu' ); ?>>
            <div class="bwdrpmx-restaurant-menu-items">
                <?php foreach ( $settings['menu_items'] as $index => $item ) : ?>
                    <?php
                        $title_key = $this->get_repeater_setting_key( 'menu_title', 'menu_items', $index );
                        $this->add_render_attribute( $title_key, 'class', 'bwdrpmx-restaurant-menu-title-text' );
                        $this->add_inline_editing_attributes( $title_key, 'none' );

                        $description_key = $this->get_repeater_setting_key( 'menu_description', 'menu_items', $index );
                        $this->add_render_attribute( $description_key, 'class', 'bwdrpmx-restaurant-menu-description' );
                        $this->add_inline_editing_attributes( $description_key, 'basic' );

                        $discount_price_key = $this->get_repeater_setting_key( 'menu_price', 'menu_items', $index );
                        $this->add_render_attribute( $discount_price_key, 'class', 'bwdrpmx-restaurant-menu-price-discount' );
                        $this->add_inline_editing_attributes( $discount_price_key, 'none' );

                        $original_price_key = $this->get_repeater_setting_key( 'original_price', 'menu_items', $index );
                        $this->add_render_attribute( $original_price_key, 'class', 'bwdrpmx-restaurant-menu-price-original' );
                        $this->add_inline_editing_attributes( $original_price_key, 'none' );
                    ?>
                    <div class="bwdrpmx-restaurant-menu-item-wrap">
                        <div class="bwdrpmx-restaurant-menu-item">
                            <?php if ( $item['image_switch'] == 'yes' ) { ?>
                                <div class="bwdrpmx-restaurant-menu-image">
                                    <?php
                                        if ( ! empty( $item['image']['url'] ) ) :
                                            $image = $item['image'];
                                            $image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'image_size', $settings );
                                        ?>
                                        <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true)); ?>">	
                                     <?php endif; ?>
                                </div>
                            <?php } ?>

                            <div class="bwdrpmx-restaurant-menu-content">
                                <div class="bwdrpmx-restaurant-menu-header">
                                    <?php if ( ! empty( $item['menu_title'] ) ) { ?>
                                        <h4 class="bwdrpmx-restaurant-menu-title">
                                            <?php
                                                if ( ! empty( $item['link']['url'] ) ) {
                                                    $this->add_render_attribute( 'price-menu-link' . $i, 'href', $item['link']['url'] );

                                                    if ( ! empty( $item['link']['is_external'] ) ) {
                                                        $this->add_render_attribute( 'price-menu-link' . $i, 'target', '_blank' );
                                                    }
                                                    ?>
                                                    <a <?php echo $this->get_render_attribute_string( 'price-menu-link' . $i ); ?>>
                                                        <span <?php echo $this->get_render_attribute_string( $title_key ); ?>>
                                                            <?php echo $item['menu_title']; ?>
                                                        </span>
                                                    </a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span <?php echo $this->get_render_attribute_string( $title_key ); ?>>
                                                        <?php echo $item['menu_title']; ?>
                                                    </span>
                                                    <?php
                                                }
                                            ?>
                                        </h4>
                                    <?php } ?>
                                    
                                    <?php if ( $settings['title_price_connector'] == 'yes' ) { ?>
                                        <span class="eael-price-title-connector"></span>
                                    <?php } ?>
                                    
                                    <?php if ( $settings['menu_style'] == 'style-1' ) { ?>
                                        <?php if ( ! empty( $item['menu_price'] ) ) { ?>
                                            <span class="bwdrpmx-restaurant-menu-price">
                                                <?php if ( $item['discount'] == 'yes' ) { ?>
                                                    <span <?php echo $this->get_render_attribute_string( $original_price_key ); ?>>
                                                        <?php echo esc_attr( $item['original_price'] ); ?>
                                                    </span>
                                                <?php } ?>
                                                <span <?php echo $this->get_render_attribute_string( $discount_price_key ); ?>>
                                                    <?php echo esc_attr( $item['menu_price'] ); ?>
                                                </span>
                                            </span>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                
                                <?php if ( $settings['title_separator'] == 'yes' ) { ?>
                                    <div class="eael-price-menu-divider-wrap">
                                        <div class="eael-price-menu-divider"></div>
                                    </div>
                                <?php } ?>

                                <?php
                                    if ( ! empty( $item['menu_description'] ) ) {
                                        $description_html = sprintf( '<div %1$s>%2$s</div>', $this->get_render_attribute_string( $description_key ), $item['menu_description'] );
                                        
                                        echo $description_html;
                                    }
                                ?>

                                <?php if ( $settings['menu_style'] != 'style-1' ) { ?>
                                    <?php if ( ! empty( $item['menu_price'] ) ) { ?>
                                        <span class="bwdrpmx-restaurant-menu-price">
                                            <?php if ( $item['discount'] == 'yes' ) { ?>
                                                <span <?php echo $this->get_render_attribute_string( $original_price_key ); ?>>
                                                    <?php echo esc_attr( $item['original_price'] ); ?>
                                                </span>
                                            <?php } ?>
                                            <span <?php echo $this->get_render_attribute_string( $discount_price_key ); ?>>
                                                <?php echo esc_attr( $item['menu_price'] ); ?>
                                            </span>
                                        </span>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>
        <?php
    }

}