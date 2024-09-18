<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdspfx_ProductFeatures_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdspfx-showcase-profea', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Showcase Product Features', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-product-description bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

        // Start General Section
        $this->start_controls_section(
            'bwdspfx_section_general',array(
                'label'         => esc_html__('General', BWDEB_ROOT_AUTHOR_PRO),
            )
        );

        $this->add_control(
            'bwdspfx_design', [
                'label'         => esc_html__('Layouts', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'design-1'  => esc_html__('Design 1', BWDEB_ROOT_AUTHOR_PRO),
                    'design-2'  => esc_html__('Design 2', BWDEB_ROOT_AUTHOR_PRO),
                    'design-3'  => esc_html__('Design 3', BWDEB_ROOT_AUTHOR_PRO),
                    'design-4'  => esc_html__('Design 4', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'       => 'design-1',
            ]
        );

        $this->add_control(
            'bwdspfx_heading', [
                'label'         => esc_html__('Heading', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'default'       => esc_html__('Wireless Bluetooth Headphones', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdspfx_heading_tag', [
                'label'         => esc_html__('Heading Tag', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'h1'        => esc_html__('H1', BWDEB_ROOT_AUTHOR_PRO),
                    'h2'        => esc_html__('H2', BWDEB_ROOT_AUTHOR_PRO),
                    'h3'        => esc_html__('H3', BWDEB_ROOT_AUTHOR_PRO),
                    'h4'        => esc_html__('H4', BWDEB_ROOT_AUTHOR_PRO),
                    'h5'        => esc_html__('H5', BWDEB_ROOT_AUTHOR_PRO),
                    'h6'        => esc_html__('H6', BWDEB_ROOT_AUTHOR_PRO),
                    'span'        => esc_html__('span', BWDEB_ROOT_AUTHOR_PRO),
                    'div'        => esc_html__('div', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'div',
            ]
        );

        $this->add_control(
            'bwdspfx_image', [
                'label'         => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                ],
            ]
        );

		$this->add_control(
			'bwdspfx_list_icon',
			[
				'label' => esc_html__( 'List Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-arrow-alt-circle-right',
					'library' => 'fa-solid',
				],
				'condition'     => [
                    'bwdspfx_design' => ['design-1', 'design-2'],
                ],
			]
		);

        $this->end_controls_section();
        // End Heading Section

        // Start Good Section
        $this->start_controls_section(
            'bwdspfx_good_control', [
                'label'         => esc_html__('Good', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'good_list_title', [
                'label'         => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'default'       => esc_html__('The Good', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
			'bwdspfx_good_list_icon', [
				'label'         => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::ICONS,
				'default'       => [
					'value'     => 'far fa-thumbs-up',
					'library'   => 'fa-regular',
				],
                'condition'     => [
                    'bwdspfx_design' => ['design-2', 'design-3'],
                ],
			]
		);

        $bwdspfx_good = new \Elementor\Repeater();

        $bwdspfx_good->add_control(
            'good_content', [
                'label'         => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'default'       => esc_html__('Lorem Ipsum is simply dummy', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'good_lists', [
                'label' => esc_html__('Good List', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $bwdspfx_good->get_controls(),
                'default' => [
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'good_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
                'title_field'   => '{{{ good_content }}}',
            ]

        );

        $this->end_controls_section();
        // End Good Section

        // Start Bad Section
        $this->start_controls_section(
            'bwdspfx_bad_control', [
                'label'         => esc_html__('Bad', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bad_list_title', [
                'label'         => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'default'       => esc_html__('The Bad', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
			'bwdspfx_bad_list_icon', [
				'label'         => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::ICONS,
				'default'       => [
					'value'     => 'far fa-thumbs-down',
					'library'   => 'fa-regular',
				],
                'condition'     => [
                    'bwdspfx_design' => ['design-2', 'design-3'],
                ],
			]
		);

        $bwdspfx_bad = new \Elementor\Repeater();

        $bwdspfx_bad->add_control(
            'bad_content', [
                'label'         => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'default'       => esc_html__('Lorem Ipsum is simply dummy', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bad_lists', [
                'label'         => esc_html__('Bad List', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::REPEATER,
                'fields'        => $bwdspfx_bad->get_controls(),
                'default'       => [
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bad_content' => esc_html__('Lorem Ipsum is simply dummy typesetting industry.', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
                'title_field'   => '{{{ bad_content }}}',
            ]
        );

        $this->end_controls_section();
        // End Bad Section

        // Start Style Section

        //Start Heading style
        $this->start_controls_section(
            'bwdspfx_heading_design',array(
                'label'         => esc_html__('Heading', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );

        $this->add_responsive_control(
            'bwdspfx_heading_align', [
                'label'         => esc_html__('Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type'          =>  \Elementor\Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
						'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center'    => [
						'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'     => [
						'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
                ],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading' => 'text-align:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design!' => 'design-1',
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name'          => 'bwdspfx_heading_typography',
                'selector'      => '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading_wrapper',
            ]
        );

        $this->add_control(
            'bwdspfx_heading_color', [
                'label'         => esc_html__('Heading Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features  .bwdspfx_heading_wrapper' => 'color:{{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_heading_background_color', [
                'label'         => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#252324',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading .bwdspfx_heading_wrapper' => 'background-color:{{VALUE}}',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-1'
                ],
            ]
        );

		$this->add_responsive_control(
			'bwdspfx_heading_border_radius', [
				'label'         => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading .bwdspfx_heading_wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'default'       => [
                    'top'       => 25,
                    'right'     => 25,
                    'bottom'    => 25,
                    'left'      => 25,
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-1'
                ],
			]
		);

		$this->add_responsive_control(
			'bwdspfx_heading_padding', [
				'label'         => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading .bwdspfx_heading_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
                'condition'     => [
                    'bwdspfx_design' => 'design-1',
                ],
			]
		);

        $this->add_responsive_control(
            'bwdspfx_heading_border_width', [
                'label'         => esc_html__('Border Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 10,
                    ]
                ],
                'default'       => ['size' => 1],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_heading_wrapper::after' => 'width:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item::before' => 'border:{{SIZE}}{{UNIT}} solid;',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-1',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_heading_border_color', [
                'label'         => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#000000',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_heading_wrapper::after' => 'background-color:{{VALUE}}',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item::before' => 'border-color:{{VALUE}}',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-1'
                ],
            ]
        );

        $this->add_responsive_control(
			'bwdspfx_heading_margin', [
				'label'         => esc_html__('Heading Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_heading .bwdspfx_heading_wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_heading_wrapper::after' => 'height:{{BOTTOM}}{{UNIT}}; bottom: -{{BOTTOM}}{{UNIT}}!important;',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item::before' => 'height:{{BOTTOM}}{{UNIT}}!important;',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item' => 'padding-top:{{BOTTOM}}{{UNIT}}!important;',
				],
                'default'       => [
                    'top'       => 0,
                    'right'     => 30,
                    'bottom'    => 30,
                    'left'      => 30,
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-1',
                ],
			]
		);

        $this->add_responsive_control(
            'bwdspfx_heading_spacing', [
                'label'         => esc_html__('Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                    ]
                ],
                'default'       => ['size' => 20],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_heading_wrapper,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_heading_wrapper,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_heading_wrapper' => 'margin-bottom:{{SIZE}}{{UNIT}}!important;',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-2','design-3','design-4'],
                ],
            ]
        );

        $this->end_controls_section();
        //End Heading style

         //Start Box style
        $this->start_controls_section(
            'bwdspfx_box_design',array(
                'label'         => esc_html__('Box', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );

        $this->add_responsive_control(
            'bwdspfx_item_box_size', [
                'label'         => esc_html__('Box Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 350,
                    ],
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 350,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 235,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 320,
					'unit' => 'px',
				],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item .bwdspfx_features_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details .bwdspfx_image_media' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'bwdspfx_design'=> 'design-1', 
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdspfx_item_box_size_design_2', [
                'label'         => esc_html__('Box Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 350,
                    ]
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 300,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 350,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 320,
					'unit' => 'px',
				],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_list_item_wrapper' => 'width:{{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'bwdspfx_design'=> 'design-2',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdspfx_item_box_size_design_3', [
                'label'         => esc_html__('Box Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 500,
                    ]
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 500,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 320,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 320,
					'unit' => 'px',
				],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_features_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list' => 'width:{{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'bwdspfx_design'=> ['design-3', 'design-4'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_item_box_background_color', [
                'label'         => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list' => 'background-color:{{VALUE}}',
                ],
                'condition'     => [
                    'bwdspfx_design'=> 'design-3',
                ],
            ]
        );

		$this->add_responsive_control(
			'bwdspfx_box_border_radius_design', [
				'label'         => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_details_item .bwdspfx_features_list, 
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_details,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_list_item_wrapper::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition'     => [
                    'bwdspfx_design'=> ['design-1','design-2','design-3'],
                ],
			]
		);

        $this->add_responsive_control(
            'bwdspfx_box_border_width', [
                'label'         => esc_html__('Border Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 10,
                    ]
                ],
                'default'       => ['size' => 1],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list' => 'width:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list' => 'border:{{SIZE}}{{UNIT}} solid;',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-4',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'          => 'bwdspfx_box_shadow',
				'selector'      => '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_details_item .bwdspfx_features_list',
			]
		);

        $this->add_responsive_control(
			'bwdspfx_item_box_padding', [
				'label'         => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_features_list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-3',
                ],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(), [
                'label'         => esc_html__('Inner Box Border', BWDEB_ROOT_AUTHOR_PRO),
				'name'          => 'bwdspfx_content_border',
				'selector'      => '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_details',
                'condition'     => [
                    'bwdspfx_design' => 'design-3',
                ],
			]
		);

        $this->end_controls_section();
        //End Box style

        //Start Item Title style
        $this->start_controls_section(
            'bwdspfx_item_title_design',array(
                'label'         => esc_html__('Item Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name'          => 'bwdspfx_item_title_typography',
                'selector'      => '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_title',
            ]
        );

		$this->add_responsive_control(
			'bwdspfx_item_title_padding', [
				'label'         => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_content_title,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_content_title .bwdspfx_content_title_wrap,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_features_list .bwdspfx_content_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
                'condition'     => [
                    'bwdspfx_design' => ['design-1', 'design-2', 'design-3'],
                ],
			]
		);

        $this->add_responsive_control(
			'bwdspfx_item_title_border_radius', [
				'label'         => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'.bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_content_title .bwdspfx_content_title_wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition'     => [
                    'bwdspfx_design' => 'design-2',
                ],
                'default'       => [
                    'top'       => 15,
                    'right'     => 15,
                    'bottom'    => 15,
                    'left'      => 15,
                ],
			]
		);

        $this->end_controls_section();
        //End Item Title style

        //Start Item Content style
        $this->start_controls_section(
            'bwdspfx_item_content_design',array(
                'label'         => esc_html__('Item Content', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );

        $this->add_responsive_control(
            'bwdspfx_content_title_align', [
                'label'         => esc_html__('Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type'          =>  \Elementor\Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
						'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center'    => [
						'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'     => [
						'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
                ],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_content_list .bwdspfx_list_items,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_content_list .bwdspfx_list_items' => 'text-align:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-3', 'design-4'],
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name'          => 'bwdspfx_item_content_typography',
                'selector'      => '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items',
            ]
        );

        $this->add_control(
            'bwdspfx_item_content_text_color', [
                'label'         => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items' => 'color:{{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'bwdspfx_odd_bg_color', [
				'label'         => esc_html__('Odd List Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#ffffff',
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_items:nth-child(odd)' => 'background-color: {{VALUE}}',
				],
                'condition'     => [
                    'bwdspfx_design' =>  'design-4',
                ],
			]
		);

        $this->add_control(
			'bwdspfx_even_bg_color', [
				'label'         => esc_html__('Even List Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#f3f3f3',
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_items:nth-child(even)' => 'background-color: {{VALUE}}',
				],
                'condition'     => [
                    'bwdspfx_design' =>  'design-4',
                ],
			]
		);

        // $this->add_responsive_control(
        //     'bwdspfx_item_content_space', [
        //         'label'         => esc_html__('Space Between List', BWDEB_ROOT_AUTHOR_PRO),
        //         'type'          => \Elementor\Controls_Manager::SLIDER,
        //         'size_units'    => ['px', '%','em'],
        //         'range'         => [
        //             'px'        => [
        //                 'min'   => 0,
        //                 'max'   => 100,
        //             ]
        //         ],
        //         'default'       => ['size' => 7],
        //         'selectors'     => [
        //             '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items' => 'padding-top:{{SIZE}}{{UNIT}}; padding-bottom:{{SIZE}}{{UNIT}}!important;',
        //         ],
        //     ]
        // );
        $this->add_control(
			'bwdspfx_item_content_space',
			[
				'label' => esc_html__( 'Space Between List', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 10,
					'right' => 10,
					'bottom' => 10,
					'left' => 10,
					'unit' => 'px',
					'isLinked' => true,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
			'bwdspfx_item_content_last-child',
			[
				'label' => esc_html__( 'Last Item Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
				'condition'     => [
                    'bwdspfx_design' =>  'design-2',
                ],
				'selectors' => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items:last-child' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
                'default' => [
					'unit' => 'px',
					'size' => 25,
				],
			]
		);

		$this->add_responsive_control(
			'bwdspfx_item_content_padding', [
				'label'         => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
                'default'       => [
                    'top'       => 20,
                    'right'     => 20,
                    'bottom'    => 20,
                    'left'      => 20,
                ],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_content_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_details_item .bwdspfx_features_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_details,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_content_list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
                'condition'     => [
                    'bwdspfx_design' =>  ['design-1','design-2'],
                ],
			]
		);

		$this->add_responsive_control(
			'bwdspfx_item_content_icon_padding', [
				'label'         => esc_html__('List Icon Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::SLIDER,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items i,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items svg' => 'margin-right: {{SIZE}}{{UNIT}}!important;',
                ],
                'default'       => ['size' => 10],
                'condition'     => [
                    'bwdspfx_design' =>  ['design-1', 'design-2'],
                ],
			]
		);

        $this->add_responsive_control(
            'bwdspfx_item_content_icon_size', [
                'label'         => esc_html__('List Icon Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 50,
                    ]
                ],
                'default'       => ['size' => 18],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items i' => 'font-size:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_content_list .bwdspfx_list_items svg' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'bwdspfx_design' =>  ['design-1', 'design-2'],
                ],
            ]
        );

        $this->add_control(
			'bwdspfx_item_content_divider_width', [
				'label'         => esc_html__('Divider Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'          => \Elementor\Controls_Manager::SLIDER,
				'size_units'    =>  'px',
				'range'         => [
					'px'        => [
						'min'   => 0,
						'max'   => 10,
						'step'  => 1,
					],
				],
				'default'       => [
					'unit'      => 'px',
					'size'      => 1,
				],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_list_items::after' => 'border-bottom-width: {{SIZE}}{{UNIT}}',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-3',
                ],
			]
		);

        $this->add_control(
			'bwdspfx_item_content_divider_color', [
				'label'         => esc_html__('Divider Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => 'rgb(0 0 0 / 10%)',
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_list_items::after' => 'border-bottom-color: {{VALUE}}',
				],
                'condition'     => [
                    'bwdspfx_design' => 'design-3',
                ],
			]
		);

        $this->end_controls_section();
        //End Item content style

        // Start Image style
        $this->start_controls_section(
            'bwdspfx_image_design_section', [
                'label'         => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'bwdspfx_image_radius', [
				'label'         => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
            'bwdspfx_item_image_size', [
                'label'         => esc_html__('Image Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 500,
                    ]
                ],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_image_media .bwdspfx-image' => 'width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_Image_background', [
                'label'         => esc_html__('Image Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details .bwdspfx_image_media .bwdspfx-image,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_image_media .bwdspfx-image,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bwdspfx_image_media .bwdspfx-image,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_image_media .bwdspfx-image' => 'background-color:{{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
			'bwdspfx_image_padding', [
				'label'         => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_image_media .bwdspfx-image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->end_controls_section();
        //End Image style

        // Start Icon style
        $this->start_controls_section(
            'bwdspfx_icon_design', [
                'label'         => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'     => [
                    'bwdspfx_design' => ['design-2', 'design-3'],
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdspfx_icon_background_size', [
                'label'         => esc_html__('Icon Background Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                    ]
                ],
                'default'       => ['size' => 70],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdspfx_icon_size', [
                'label'         => esc_html__('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::SLIDER,
                'size_units'    => ['px', '%','em'],
                'range'         => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                    ]
                ],
                'default'       => ['size' => 26],
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon i' => 'font-size:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon svg' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
			'bwdspfx_icon_border_radius', [
				'label'         => esc_html__('Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%', 'em'],
				'selectors'     => [
					'{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_list_item_wrapper .bwdspfx_features_icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition'     => [
                    'bwdspfx_design' => ['design-2', 'design-3'],
                ],
			]
		);

        $this->end_controls_section();
        //End Icon style

        // Start Color style
        $this->start_controls_section(
            'bwdspfx_features_color', [
                'label'         => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('bwdspfx_color_tab');

        //Start Good color style
        $this->start_controls_tab(
            'bwdspfx_color_good', [
                'label'         => esc_html__('Good', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdspfx_title_good_color', [
                'label'         => esc_html__('Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       =>'#FFFFFF',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.good_list .bwdspfx_content_title' => 'color:{{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_title_good_bg', [
                'label'         => esc_html__('Title Background', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#620ed1',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.good_list .bwdspfx_content_title,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .good_list_wrapper .bwdspfx_content_title::before' => 'background-color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_features_list.good_list .bwdspfx_content_title .bwdspfx_content_title_wrap,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_features_list.good_list .bwdspfx_content_title::after' => 'background-color:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_good_list_icon_color', [
                'label'         => esc_html__('List Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#620ed1',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.good_list .bwdspfx_list_items i' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.good_list .bwdspfx_list_items svg' => 'fill:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-1','design-2'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_good_icon_color', [
                'label'         => esc_html__('Icon color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#FFFFFF',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_good_icon i' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_good_icon svg' => 'fill:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-2','design-3'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_good_icon_background', [
                'label'         => esc_html__('Icon Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#620ed1',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_good_icon, 
                    {{WRAPPER}} .bwdspfx-advanced-product-features .good_list_wrapper::after' => 'background-color:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-2','design-3'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_good_box_background_color', [
                'label'         => esc_html__('Box Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item .bwdspfx_features_list.good_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_details_item .bwdspfx_features_list.good_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .good_list_wrapper .bwdspfx_details,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list.good_list' => 'background-color:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_border_good_color', [
                'label'         => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#620ed1',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list.good_list' => 'border-color:{{VALUE}}',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_item_wrapper.good_list_wrapper::before,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_item_wrapper.good_list_wrapper::after' => 'background-color:{{VALUE}}',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-4',
                ],
            ]
        );

        $this->end_controls_tab();
        //End Good color style

        //Start Bad color style
        $this->start_controls_tab(
            'bwdspfx_color_bad', [
                'label'         => esc_html__('Bad', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $this->add_control(
            'bwdspfx_title_bad_color', [
                'label'         => esc_html__('Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       =>'#FFFFFF',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.bad_list .bwdspfx_content_title' => 'color:{{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_title_bad_bg', [
                'label'         => esc_html__('Title Background', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#D4145A',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.bad_list .bwdspfx_content_title,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bad_list_wrapper .bwdspfx_content_title::before' => 'background-color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_features_list.bad_list .bwdspfx_content_title .bwdspfx_content_title_wrap, 
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_features_list.bad_list .bwdspfx_content_title::after' => 'background-color:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_bad_list_icon_color', [
                'label'         => esc_html__('List Icon Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#D4145A',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.bad_list .bwdspfx_list_items i' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_list.bad_list .bwdspfx_list_items svg' => 'fill:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-1','design-2'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_bad_icon_color', [
                'label'         => esc_html__('Icon color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#FFFFFF',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_bad_icon i' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_bad_icon svg' => 'fill:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-2','design-3'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_bad_icon_background', [
                'label'         => esc_html__('Icon Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#D4145A',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx_features_icon.bwdspfx_bad_icon, 
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bad_list_wrapper::after' => 'background-color:{{VALUE}};',
                ],
                'condition'     => [
                    'bwdspfx_design' => ['design-2','design-3'],
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_bad_box_background_color', [
                'label'         => esc_html__('Box Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-1 .bwdspfx_details_item .bwdspfx_features_list.bad_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-2 .bwdspfx_details_item .bwdspfx_features_list.bad_list,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-3 .bad_list_wrapper .bwdspfx_details,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list.bad_list' => 'background-color:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'bwdspfx_border_bad_color', [
                'label'         => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'default'       => '#D4145A',
                'selectors'     => [
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_features_list.bad_list' => 'border-color:{{VALUE}}',
                    '{{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_item_wrapper.bad_list_wrapper::before,
                    {{WRAPPER}} .bwdspfx-advanced-product-features .bwdspfx-design-4 .bwdspfx_list_item_wrapper.bad_list_wrapper::after' => 'background-color:{{VALUE}}',
                ],
                'condition'     => [
                    'bwdspfx_design' => 'design-4',
                ],
            ]
        );

        $this->end_controls_tab();
        //End Bad color style

        $this->end_controls_tabs();
        //End color style

        $this->end_controls_section();
        //End Color style
    }

	protected function render(){
        $settings = $this->get_settings_for_display();
        $bwdspfx_image = ($settings['bwdspfx_image']['url']);
        $bwdspfx_id = attachment_url_to_postid($bwdspfx_image);
        $image_alt = get_post_meta( $bwdspfx_id, '_wp_attachment_image_alt', true );

		$all_style = $settings['bwdspfx_design'];


		if( 'design-1' == $all_style ){?>
			<div class="bwdspfx-advanced-product-features">
				<div class="bwdspfx-design-1">
					<div class="bwdspfx_heading">
						<?php echo '<'. $settings['bwdspfx_heading_tag']. " class = 'bwdspfx_heading_wrapper'" .'>'?>
						<?php echo esc_html($settings['bwdspfx_heading']);?>
						<?php echo '</'. $settings['bwdspfx_heading_tag'].'>'?>
					</div>
					<div class="bwdspfx_content_container">
						<div class="bwdspfx_details">
							<div class="bwdspfx_details_item">
								<div class="bwdspfx_features_list good_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['good_list_title']); ?></div>
									<ul class="bwdspfx_content_list">
										<?php foreach($settings['good_lists'] as $bwdspfx_good){ ?>
											<li class="bwdspfx_list_items">
												
												<?php //\Elementor\Icons_Manager::render_icon( $settings['bwdspfx_list_icon'], [ 'aria-hidden' => 'true', 'class' => 'bwdspfx_list_icon' ] ); ?>
												<?php echo esc_html($bwdspfx_good['good_content']);?>
											</li>    
											<?php
										} ?>
									</ul>
								</div>
								<div class="bwdspfx_image_media">
									<img class="bwdspfx-image" src="<?php echo esc_url( $bwdspfx_image ); ?>" alt="<?php if(!empty($image_alt)) echo $image_alt; ?>" />
								</div>
								<div class="bwdspfx_features_list bad_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['bad_list_title']); ?></div>
									<ul class="bwdspfx_content_list">
										<?php foreach($settings['bad_lists'] as $bwdspfx_bad){ ?>
											<li class="bwdspfx_list_items">
												<?php //\Elementor\Icons_Manager::render_icon($settings['bwdspfx_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_list_icon']);?>
												<?php echo esc_html($bwdspfx_bad['bad_content']);?>
											</li>    
											<?php 
										} ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}elseif( 'design-2' == $all_style ){?>
			<div class="bwdspfx-advanced-product-features">
				<div class="bwdspfx-design-2">
					<div class="bwdspfx_heading">
						<?php echo '<'. $settings['bwdspfx_heading_tag']. " class = 'bwdspfx_heading_wrapper'" .'>'?>
						<?php echo esc_html($settings['bwdspfx_heading']);?>
						<?php echo '</'. $settings['bwdspfx_heading_tag'].'>'?>
					</div>
					<div class="bwdspfx_content_container">
						<div class="bwdspfx_image_media">
							<img class="bwdspfx-image" src="<?php echo esc_url( $bwdspfx_image ); ?>" alt="<?php if(!empty($image_alt)) echo $image_alt; ?>" />
						</div>
						<div class="bwdspfx_details">
							<div class="bwdspfx_details_item">
								<div class="bwdspfx_list_item_wrapper good_list_wrapper">
									<div class="bwdspfx_features_list good_list">
										<div class="bwdspfx_content_title">
											<div class="bwdspfx_content_title_wrap"><?php echo esc_html($settings['good_list_title']); ?></div>
										</div>
										<ul class="bwdspfx_content_list">
											<?php foreach($settings['good_lists'] as $bwdspfx_good){ ?>
												<li class="bwdspfx_list_items">
													<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_list_icon']);?>
													<?php echo esc_html($bwdspfx_good['good_content']);?>
												</li>
												<?php 
											} ?>
										</ul>
										<div class="bwdspfx_features_icon bwdspfx_good_icon">
											<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_good_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_good_list_icon']);?>
										</div>
									</div>
								</div>
								<div class="bwdspfx_list_item_wrapper bad_list_wrapper">
									<div class="bwdspfx_features_list bad_list">
										<div class="bwdspfx_content_title">
											<div class="bwdspfx_content_title_wrap"><?php echo esc_html($settings['bad_list_title']); ?></div>
										</div>
										<ul class="bwdspfx_content_list">
											<?php foreach($settings['bad_lists'] as $bwdspfx_bad){ ?>
												<li class="bwdspfx_list_items">
													<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_list_icon']);?>
													<?php echo esc_html($bwdspfx_bad['bad_content']);?>
												</li>    
												<?php 
											} ?>
										</ul>
										<div class="bwdspfx_features_icon bwdspfx_bad_icon">
											<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_bad_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_bad_list_icon']);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}elseif( 'design-3' == $all_style ){?>
			<div class="bwdspfx-advanced-product-features">
				<div class="bwdspfx-design-3">
						<div class="bwdspfx_heading">
							<?php echo '<'. $settings['bwdspfx_heading_tag']. " class = 'bwdspfx_heading_wrapper'" .'>'?>
							<?php echo esc_html($settings['bwdspfx_heading']);?>
							<?php echo '</'. $settings['bwdspfx_heading_tag'].'>'?>
						</div>
						<div class="bwdspfx_image_media">
							<img class="bwdspfx-image" src="<?php echo esc_url( $bwdspfx_image ); ?>" alt="<?php if(!empty($image_alt)) echo $image_alt; ?>" />
						</div>
					<div class="bwdspfx_content_container">
						<div class="bwdspfx_details_item">
							<div class="bwdspfx_list_item_wrapper good_list_wrapper">
								<div class="bwdspfx_features_list good_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['good_list_title']); ?></div>
									<div class="bwdspfx_details">
										<div class="bwdspfx_features_icon bwdspfx_good_icon">
											<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_good_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_good_list_icon']);?>
										</div>
										<ul class="bwdspfx_content_list">
											<?php foreach($settings['good_lists'] as $bwdspfx_good){ ?>
												<li class="bwdspfx_list_items">
													<?php echo esc_html($bwdspfx_good['good_content']);?>
												</li>    
												<?php 
											} ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="bwdspfx_list_item_wrapper bad_list_wrapper">
								<div class="bwdspfx_features_list bad_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['bad_list_title']); ?></div>
									<div class="bwdspfx_details">
										<div class="bwdspfx_features_icon bwdspfx_bad_icon">
											<?php \Elementor\Icons_Manager::render_icon($settings['bwdspfx_bad_list_icon'], ['aria-hidden' => 'true', 'class' => 'bwdspfx_bad_list_icon']);?>
										</div>
										<ul class="bwdspfx_content_list">
											<?php foreach($settings['bad_lists'] as $bwdspfx_bad){ ?>
												<li class="bwdspfx_list_items">
													<?php echo esc_html($bwdspfx_bad['bad_content']);?>
												</li>    
												<?php 
											} ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}elseif( 'design-4' == $all_style ){?>
			<div class="bwdspfx-advanced-product-features">
				<div class="bwdspfx-design-4">
						<div class="bwdspfx_heading">
							<?php echo '<'. $settings['bwdspfx_heading_tag']. " class = 'bwdspfx_heading_wrapper'" .'>'?>
							<?php echo esc_html($settings['bwdspfx_heading']);?>
							<?php echo '</'. $settings['bwdspfx_heading_tag'].'>'?>
						</div>
					<div class="bwdspfx_content_container">
						<div class="bwdspfx_details_item">
							<div class="bwdspfx_list_item_wrapper good_list_wrapper">
								<div class="bwdspfx_features_list good_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['good_list_title']); ?></div>
									<ul class="bwdspfx_content_list">
										<?php foreach($settings['good_lists'] as $bwdspfx_good){ ?>
											<li class="bwdspfx_list_items">
												<?php echo esc_html($bwdspfx_good['good_content']);?>
											</li>    
											<?php 
										} ?>
									</ul>
								</div>
							</div>
							<div class="bwdspfx_list_item_wrapper bad_list_wrapper">
								<div class="bwdspfx_features_list bad_list">
									<div class="bwdspfx_content_title"><?php echo esc_html($settings['bad_list_title']); ?></div>
									<ul class="bwdspfx_content_list">
										<?php foreach($settings['bad_lists'] as $bwdspfx_bad){ ?>
											<li class="bwdspfx_list_items">
												<?php echo esc_html($bwdspfx_bad['bad_content']);?>
											</li>    
											<?php 
										} ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="bwdspfx_image_media">
							<div class="bwdspfx_image_inner">
								<img class="bwdspfx-image" src="<?php echo esc_url( $bwdspfx_image ); ?>" alt="<?php if(!empty($image_alt)) echo $image_alt; ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

        
    }

}