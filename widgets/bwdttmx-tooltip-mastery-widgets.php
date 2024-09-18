<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BWDEB_SKHelper {
	const BWDTTMX_ALLOWED_HTML_TAGS = [
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
	public static function bwdttmx_validate_html_tag( $tag ){
	    return in_array( strtolower( $tag ), self::BWDTTMX_ALLOWED_HTML_TAGS ) ? $tag : 'div';
    }
}



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdttmx_ToolTip_Mestery_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdttmx-tooltip-mastery', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Tooltip Mastery', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-import-export bwdttmx-ToolTip-icon bwdeb-elementor-bundle';
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
  		 * Tooltip Settings
  		 */
		$this->start_controls_section(
			'bwdttmx_section_tooltip_settings',
			[
				'label' => esc_html__( 'Content Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdttmx_tooltip_type',
			[
				'label' => esc_html__( 'Content Type', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options' => [
					'icon' => [
						'title' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'fa fa-info',
					],
					'text' => [
						'title' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'fa fa-text-width',
					],
					'image' => [
						'title' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'fa fa-image',
					],
					'shortcode' => [
						'title' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'fa fa-code',
					],
					'sv-template' => [
						'title' => esc_html__( 'Template', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'far fa-save',
					],
				],
				'default' => 'icon',
			]
		);

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdttmx_main_content_template',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
					'bwdttmx_tooltip_type' => 'sv-template',
				],
			]
		);

        $this->add_control(
			'bwdttmx_tooltip_icon_content_new',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'bwdttmx_tooltip_icon_content',
				'default' => [
					'value' => 'fas fa-home',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdttmx_tooltip_type' => [ 'icon' ]
				]
			]
		);

		$this->add_responsive_control(
			'bwdttmx_tooltip_icon_size',
			[
				'label'     => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'size_units'	=> [ '%', 'px' ],
				'default'   => [
					'size' => 60,
				],
				'range'     => [
					'px' => [
						'max' => 150,
					],
					'%'	=> [
						'max'	=> 100
					]
				],
				'selectors' => [
                    '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-content i'	=> 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-content svg'	=> 'height: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',

                    '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-content .bwdttmx-tooltip-svg-trigger'	=> 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition'	=> [
					'bwdttmx_tooltip_type'	=> 'icon'
				]
			]
		);

  		$this->add_control(
			'bwdttmx_tooltip_content',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'Hover Me!', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdttmx_tooltip_type' => [ 'text' ]
				],
				'dynamic' => [ 'active' => true ]
			]
		);
		$this->add_control(
		  'bwdttmx_tooltip_content_tag',
		  	[
		   		'label'       	=> esc_html__( 'Content Tag', BWDEB_ROOT_AUTHOR_PRO),
		     	'type' 			=> \Elementor\Controls_Manager::SELECT,
		     	'default' 		=> 'span',
		     	'label_block' 	=> false,
		     	'options' 		=> [
		     		'h1'  	=> esc_html__( 'H1', BWDEB_ROOT_AUTHOR_PRO),
		     		'h2'  	=> esc_html__( 'H2', BWDEB_ROOT_AUTHOR_PRO),
		     		'h3'  	=> esc_html__( 'H3', BWDEB_ROOT_AUTHOR_PRO),
		     		'h4'  	=> esc_html__( 'H4', BWDEB_ROOT_AUTHOR_PRO),
		     		'h5'  	=> esc_html__( 'H5', BWDEB_ROOT_AUTHOR_PRO),
		     		'h6'  	=> esc_html__( 'H6', BWDEB_ROOT_AUTHOR_PRO),
		     		'div'  	=> esc_html__( 'DIV', BWDEB_ROOT_AUTHOR_PRO),
		     		'span'  => esc_html__( 'SPAN', BWDEB_ROOT_AUTHOR_PRO),
		     		'p'  	=> esc_html__( 'P', BWDEB_ROOT_AUTHOR_PRO),
		     	],
		     	'condition' => [
		     		'bwdttmx_tooltip_type' => 'text'
		     	]
		  	]
		);

        $this->add_control(
			'bwdttmx_tooltip_img_content',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdttmx_tooltip_type' => [ 'image' ]
				],
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->add_responsive_control(
			'bwdttmx_tooltip_image_width',
			[
				'label'     => esc_html__( 'Image Width', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'size_units'	=> [ '%', 'px' ],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'range'     => [
					'px' => [
						'max' => 150,
					],
					'%'	=> [
						'max'	=> 100
					]
				],
				'selectors' => [
                    '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-content img'	=> 'width: {{SIZE}}{{UNIT}}!important;',
				],
				'condition'	=> [
					'bwdttmx_tooltip_type' => [ 'image' ]
				]
			]
		);

		$this->add_responsive_control(
			'bwdttmx_tooltip_image_height',
			[
				'label'     => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'size_units'	=> [ '%', 'px' ],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'range'     => [
					'px' => [
						'max' => 150,
					],
					'%'	=> [
						'max'	=> 100
					]
				],
				'selectors' => [
                    '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-content img'	=> 'height: {{SIZE}}{{UNIT}}!important;',
				],
				'condition'	=> [
					'bwdttmx_tooltip_type' => [ 'image' ]
				]
			]
		);

		$this->add_control(
			'bwdttmx_tooltip_shortcode_content',
			[
				'label' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__( '[shortcode-here]', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdttmx_tooltip_type' => [ 'shortcode' ]
				]
			]
		);

		$this->add_responsive_control(
			'bwdttmx_tooltip_content_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'prefix_class' => 'bwdttmx-tooltip-align%s-',
			]
		);

		$this->add_control(
			'bwdttmx_tooltip_enable_link',
			[
				'label' => esc_html__( 'Enable Link', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'false',
				'return_value' => 'yes',
				'condition' => [
					'bwdttmx_tooltip_type!' => ['shortcode']
				]
			]
		);
		$this->add_control(
			'bwdttmx_tooltip_link',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::URL,
                'dynamic'   => ['active' => true],
                'label_block' => true,
				'default' => [
        			'url' => '#',
        			'is_external' => '',
     			],
     			'show_external' => true,
     			'condition' => [
     				'bwdttmx_tooltip_enable_link' => 'yes'
     			]
			]
		);
  		$this->end_controls_section();

  		/**
  		 * Tooltip Hover Content Settings
  		 */

		$this->start_controls_section(
			'bwdttmx_section_tooltip_hover_content_settings',
			[
				'label' => esc_html__( 'Tooltip Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdttmx_tooltip_content_type',
			[
				'label'   => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'content'  => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
					'template' => __( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'content',
			]
		);

  		$this->add_control(
			'bwdttmx_tooltip_hover_content',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'Tooltip content', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => [ 'active' => true ],
				'condition'   => [
					'bwdttmx_tooltip_content_type' => 'content',
				],
			]
		);

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdttmx_tooltip_content_template',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
					'bwdttmx_tooltip_content_type' => 'template',
				],
			]
		);

		$this->add_control(
		  'bwdttmx_tooltip_hover_dir',
		  	[
		   		'label'       	=> esc_html__( 'Hover Direction', BWDEB_ROOT_AUTHOR_PRO),
		     	'type' 			=> \Elementor\Controls_Manager::SELECT,
		     	'default' 		=> 'right',
		     	'label_block' 	=> false,
		     	'options' 		=> [
		     		'left'  	=> esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO),
		     		'right'  	=> esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO),
		     		'top'  		=> esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO),
		     		'bottom'  	=> esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO),
		     	],
		  	]
		);
		$this->add_control(
			'bwdttmx_tooltip_hover_speed',
			[
				'label' => esc_html__( 'Hover Speed', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => false,
				'default' => esc_html__( '300', BWDEB_ROOT_AUTHOR_PRO),
				'selectors' => [
		            '{{WRAPPER}} .bwdttmx-tooltip:hover .bwdttmx-tooltip-text.bwdttmx-tooltip-top' => 'animation-duration: {{SIZE}}ms;',
		            '{{WRAPPER}} .bwdttmx-tooltip:hover .bwdttmx-tooltip-text.bwdttmx-tooltip-left' => 'animation-duration: {{SIZE}}ms;',
		            '{{WRAPPER}} .bwdttmx-tooltip:hover .bwdttmx-tooltip-text.bwdttmx-tooltip-bottom' => 'animation-duration: {{SIZE}}ms;',
		            '{{WRAPPER}} .bwdttmx-tooltip:hover .bwdttmx-tooltip-text.bwdttmx-tooltip-right' => 'animation-duration: {{SIZE}}ms;',
		        ],
				'ai' => [
					'active' => false,
				],
			]
		);
  		$this->end_controls_section();

  		/**
		 * -------------------------------------------
		 * Tab Style Tooltip Content
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdttmx_section_tooltip_style_settings',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_max_width',
		    [
		        'label' => __( 'Content Max Width', BWDEB_ROOT_AUTHOR_PRO),
		        'type' => \Elementor\Controls_Manager::SLIDER,
		        'range' => [
		            'px' => [
		                'min' => 0,
		                'max' => 1000,
		                'step' => 1,
		            ],
		            '%' => [
		                'min' => 0,
		                'max' => 100,
		            ],
		        ],
		        'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
		        'selectors' => [
		            '{{WRAPPER}} .bwdttmx-tooltip' => 'width: {{SIZE}}{{UNIT}};',
		        ]
		    ]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_content_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
	 					'{{WRAPPER}} .bwdttmx-tooltip' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	 			],
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_content_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
	 					'{{WRAPPER}} .bwdttmx-tooltip' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	 			],
			]
		);

		$this->add_responsive_control(
			'bwdttmx_tooltip_text_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-justify',
					],
				],
                'condition' => [
                    'bwdttmx_tooltip_type' => 'text'
                ],
				'default' => 'left',
				'prefix_class' => 'bwdttmx-tooltip-text-align-',
			]
		);

		$this->start_controls_tabs( 
			'bwdttmx_tooltip_content_style_tabs' 
		);
			// Normal State Tab
			$this->start_controls_tab( 
				'bwdttmx_tooltip_content_normal',
				[ 
					'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO),
				]
			 );

				$this->add_control(
					'bwdttmx_tooltip_content_bg_color',
					[
						'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .bwdttmx-tooltip' => 'background-color: {{VALUE}};',
						],
					]
				);
				$this->add_control(
					'bwdttmx_tooltip_content_color',
					[
						'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .bwdttmx-tooltip' => 'color: {{VALUE}};',
                            '{{WRAPPER}} .bwdttmx-tooltip a' => 'color: {{VALUE}};',
                            '{{WRAPPER}} .bwdttmx-tooltip svg' => 'fill: {{VALUE}};',
						],
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'bwdttmx_tooltip_shadow',
						'selector' => '{{WRAPPER}} .bwdttmx-tooltip',
						'separator' => 'before'
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'bwdttmx_tooltip_border',
						'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO),
						'selector' => '{{WRAPPER}} .bwdttmx-tooltip',
					]
				);
			$this->end_controls_tab();

			// Hover State Tab
			$this->start_controls_tab( 'bwdttmx_tooltip_content_hover', [ 'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO) ] );
				$this->add_control(
					'bwdttmx_tooltip_content_hover_bg_color',
					[
						'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .bwdttmx-tooltip:hover' => 'background-color: {{VALUE}};',
						],
					]
				);
				$this->add_control(
					'bwdttmx_tooltip_content_hover_color',
					[
						'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '#212121',
						'selectors' => [
							'{{WRAPPER}} .bwdttmx-tooltip:hover' => 'color: {{VALUE}};',
                            '{{WRAPPER}} .bwdttmx-tooltip:hover a' => 'color: {{VALUE}};',
                            '{{WRAPPER}} .bwdttmx-tooltip:hover svg' => 'fill: {{VALUE}};',
						],
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'bwdttmx_tooltip_hover_shadow',
						'selector' => '{{WRAPPER}} .bwdttmx-tooltip:hover',
						'separator' => 'before'
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'bwdttmx_tooltip_hover_border',
						'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO),
						'selector' => '{{WRAPPER}} .bwdttmx-tooltip:hover',
					]
				);
			$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
            	'name' => 'bwdttmx_tooltip_content_typography',
				'selector' => '{{WRAPPER}} .bwdttmx-tooltip',
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_content_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
	 					'{{WRAPPER}} .bwdttmx-tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	 			],
			]
		);
		$this->end_controls_section();


		/**
		 * -------------------------------------------
		 * Tab Style Tooltip Hover Content
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdttmx_section_tooltip_hover_style_settings',
			[
				'label' => esc_html__( 'Tooltip Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_hover_width',
		    [
		        'label' => __( 'Tooltip Width', BWDEB_ROOT_AUTHOR_PRO),
		        'type' => \Elementor\Controls_Manager::SLIDER,
		        'default' => [
		        	'size' => '150'
		        ],
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
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'width: {{SIZE}}{{UNIT}};',
		        ]
		    ]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_hover_max_width',
		    [
		        'label' => __( 'Tooltip Max Width', BWDEB_ROOT_AUTHOR_PRO),
		        'type' => \Elementor\Controls_Manager::SLIDER,
		        'default' => [
		        	'size' => '150'
		        ],
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
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'max-width: {{SIZE}}{{UNIT}};',
		        ]
		    ]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_hover_content_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
	 				'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	 			],
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_hover_content_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
	 				'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	 			],
			]
		);
		$this->add_control(
			'bwdttmx_tooltip_hover_content_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#555',
				'selectors' => [
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdttmx_tooltip_hover_content_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
            	'name' => 'bwdttmx_tooltip_hover_content_typography',
				'selector' => '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text, {{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text p',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdttmx_tooltip_box_shadow',
				'selector' => '{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text',
			]
		);
		$this->add_responsive_control(
			'bwdttmx_tooltip_arrow_size',
			[
				'label' => __( 'Arrow Size', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 5,
					'unit' => 'px',
				],
				'size_units' => [ 'px' ],
				'range' => [
		            'px' => [
		                'min' => 0,
		                'max' => 100,
		                'step' => 1,
		            ]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text:after' => 'border-width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-left::after' => 'top: calc( 50% - {{SIZE}}{{UNIT}} );',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-right::after' => 'top: calc( 50% - {{SIZE}}{{UNIT}} );',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-top::after' => 'left: calc( 50% - {{SIZE}}{{UNIT}} );',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-bottom::after' => 'left: calc( 50% - {{SIZE}}{{UNIT}} );',
				],
			]
		);
		$this->add_control(
			'bwdttmx_tooltip_arrow_color',
			[
				'label' => esc_html__( 'Arrow Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#555',
				'selectors' => [
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-top:after' => 'border-top-color: {{VALUE}};',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-bottom:after' => 'border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-left:after' => 'border-left-color: {{VALUE}};',
					'{{WRAPPER}} .bwdttmx-tooltip .bwdttmx-tooltip-text.bwdttmx-tooltip-right:after' => 'border-right-color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render( ) {

		$settings = $this->get_settings_for_display();

		$icon_migrated = isset($settings['__fa4_migrated']['bwdttmx_tooltip_icon_content_new']);
		$icon_is_new = empty($settings['bwdttmx_tooltip_icon_content']);
        $this->add_link_attributes( 'bwdttmx_tooltip_link', (array) $settings['bwdttmx_tooltip_link'] );
		?>
		<div class="bwdttmx-tooltip">
			<?php if( $settings['bwdttmx_tooltip_type'] === 'text' ) : ?>
				<<?php echo esc_attr( BWDEB_SKHelper::bwdttmx_validate_html_tag($settings['bwdttmx_tooltip_content_tag']) ); ?> class="bwdttmx-tooltip-content"><?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?><a <?php $this->print_render_attribute_string( 'bwdttmx_tooltip_link' ); ?>><?php endif; ?><?php echo wp_kses_post($settings['bwdttmx_tooltip_content']); ?><?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?></a><?php endif; ?></<?php echo esc_attr( BWDEB_SKHelper::bwdttmx_validate_html_tag($settings['bwdttmx_tooltip_content_tag']) ); ?>>

				<!-- tooltip-template start -->
				<?php if( $settings['bwdttmx_tooltip_content_type'] === 'content' ){?>
					<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>"><?php echo __( $settings['bwdttmx_tooltip_hover_content'] ); ?></span>
				<?php } elseif($settings['bwdttmx_tooltip_content_type'] === 'template'){ ?>
					<?php if ( !empty( $settings[ 'bwdttmx_tooltip_content_template' ] ) ) { ?>
						<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>">
							<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_tooltip_content_template'] ); ?>
						</span>
				<?php } ?>
				<?php } ?>
				<!-- tooltip-template end -->

			<?php elseif( $settings['bwdttmx_tooltip_type'] === 'icon' ) : ?>
				<span class="bwdttmx-tooltip-content"><?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?><a <?php $this->print_render_attribute_string( 'bwdttmx_tooltip_link' ); ?>><?php endif; ?>
				<?php if ($icon_is_new || $icon_migrated) { ?>
					<?php if( isset($settings['bwdttmx_tooltip_icon_content_new']['value']['url']) ) : ?>
						<img class="bwdttmx-tooltip-svg-trigger" src="<?php echo esc_attr( $settings['bwdttmx_tooltip_icon_content_new']['value']['url'] ); ?>" alt="<?php echo esc_attr(get_post_meta($settings['bwdttmx_tooltip_icon_content_new']['value']['id'], '_wp_attachment_image_alt', true)); ?>" />
					<?php else :
						\Elementor\Icons_Manager::render_icon( $settings['bwdttmx_tooltip_icon_content_new'], [ 'aria-hidden' => 'true' ] );
					endif;
				} else {
					\Elementor\Icons_Manager::render_icon( $settings['bwdttmx_tooltip_icon_content'], [ 'aria-hidden' => 'true' ] );
				} ?>
				<?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?></a><?php endif; ?></span>

				<!-- tooltip-template start -->
				<?php if( $settings['bwdttmx_tooltip_content_type'] === 'content' ){?>
					<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>"><?php echo __( $settings['bwdttmx_tooltip_hover_content'] ); ?></span>
				<?php } elseif($settings['bwdttmx_tooltip_content_type'] === 'template'){ ?>
					<?php if ( !empty( $settings[ 'bwdttmx_tooltip_content_template' ] ) ) { ?>
						<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>">
							<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_tooltip_content_template'] ); ?>
						</span>
				<?php } ?>
				<?php } ?>
				<!-- tooltip-template end -->

			<?php elseif( $settings['bwdttmx_tooltip_type'] === 'image' ) : ?>
				<span class="bwdttmx-tooltip-content"><?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?><a <?php $this->print_render_attribute_string( 'bwdttmx_tooltip_link' ); ?>><?php endif; ?><img src="<?php echo esc_url( $settings['bwdttmx_tooltip_img_content']['url'] ); ?>" alt="<?php echo esc_attr( get_post_meta($settings['bwdttmx_tooltip_img_content']['id'], '_wp_attachment_image_alt', true) ); ?>"><?php if( $settings['bwdttmx_tooltip_enable_link'] === 'yes' ) : ?></a><?php endif; ?></span>

				<!-- tooltip-template start -->
				<?php if( $settings['bwdttmx_tooltip_content_type'] === 'content' ){?>
					<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>"><?php echo __( $settings['bwdttmx_tooltip_hover_content'] ); ?></span>
				<?php } elseif($settings['bwdttmx_tooltip_content_type'] === 'template'){ ?>
					<?php if ( !empty( $settings[ 'bwdttmx_tooltip_content_template' ] ) ) { ?>
						<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>">
							<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_tooltip_content_template'] ); ?>
						</span>
				<?php } ?>
				<?php } ?>
				<!-- tooltip-template end -->

			<?php elseif( $settings['bwdttmx_tooltip_type'] === 'shortcode' ) : ?>
				<div class="bwdttmx-tooltip-content"><?php echo do_shortcode( $settings['bwdttmx_tooltip_shortcode_content'] ); ?></div>

				<!-- tooltip-template start -->
				<?php if( $settings['bwdttmx_tooltip_content_type'] === 'content' ){?>
					<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>"><?php echo __( $settings['bwdttmx_tooltip_hover_content'] ); ?></span>
				<?php } elseif($settings['bwdttmx_tooltip_content_type'] === 'template'){ ?>
					<?php if ( !empty( $settings[ 'bwdttmx_tooltip_content_template' ] ) ) { ?>
						<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>">
							<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_tooltip_content_template'] ); ?>
						</span>
				<?php } ?>
				<?php } ?>
				<!-- tooltip-template end -->


			<?php elseif( $settings['bwdttmx_tooltip_type'] === 'sv-template' ) : ?>

					<?php if ( !empty( $settings[ 'bwdttmx_main_content_template' ] ) ) { ?>
						<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_main_content_template'] ); ?>
					<?php } ?>

					<!-- tooltip-template start -->
					<?php if( $settings['bwdttmx_tooltip_content_type'] === 'content' ){?>
						<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>"><?php echo __( $settings['bwdttmx_tooltip_hover_content'] ); ?></span>
					<?php } elseif($settings['bwdttmx_tooltip_content_type'] === 'template'){ ?>
						<?php if ( !empty( $settings[ 'bwdttmx_tooltip_content_template' ] ) ) { ?>
							<span class="bwdttmx-tooltip-text bwdttmx-tooltip-<?php echo esc_attr( $settings['bwdttmx_tooltip_hover_dir'] ) ?>">
								<?php echo bwdttmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdttmx_tooltip_content_template'] ); ?>
							</span>
					<?php } ?>
					<?php } ?>
					<!-- tooltip-template end -->


			<?php endif; ?>
		</div>
		<?php
	}

}