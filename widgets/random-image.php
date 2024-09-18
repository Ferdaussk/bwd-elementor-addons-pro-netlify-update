<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDrmx_random_image_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdrmx-random-image', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Random Image', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-image bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'gallery',
            [
                'label' => __( 'Image Gallery', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );

        //all masking image
		$this->add_control(
			'bwdrmx_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'mask_rndm_img_1'  => esc_html__( 'mask 1', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_2'  => esc_html__( 'mask 2', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_3'  => esc_html__( 'mask 3', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_4'  => esc_html__( 'mask 4', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_5'  => esc_html__( 'mask 5', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_6'  => esc_html__( 'mask 6', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_7'  => esc_html__( 'mask 7', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_8'  => esc_html__( 'mask 8', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_9'  => esc_html__( 'mask 9', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_10'  => esc_html__( 'mask 10', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_11'  => esc_html__( 'mask 11', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_12'  => esc_html__( 'mask 12', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_13'  => esc_html__( 'mask 13', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_14'  => esc_html__( 'mask 14', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_15'  => esc_html__( 'mask 15', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_16'  => esc_html__( 'mask 16', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_17'  => esc_html__( 'mask 17', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_18'  => esc_html__( 'mask 18', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_19'  => esc_html__( 'mask 19', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_20'  => esc_html__( 'mask 20', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_21'  => esc_html__( 'mask 21', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_22'  => esc_html__( 'mask 22', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_23'  => esc_html__( 'mask 23', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_24'  => esc_html__( 'mask 24', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_25'  => esc_html__( 'mask 25', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_26'  => esc_html__( 'mask 26', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_27'  => esc_html__( 'mask 27', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_28'  => esc_html__( 'mask 28', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_29'  => esc_html__( 'mask 29', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_30'  => esc_html__( 'mask 30', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_31'  => esc_html__( 'mask 31', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_32'  => esc_html__( 'mask 32', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_33'  => esc_html__( 'mask 33', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_34'  => esc_html__( 'mask 34', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_35'  => esc_html__( 'mask 35', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_36'  => esc_html__( 'mask 36', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_37'  => esc_html__( 'mask 37', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_38'  => esc_html__( 'mask 38', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_rndm_img_39'  => esc_html__( 'mask 39', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

        $this->add_control(
            'make_linkable',
            [
                'label' => __( 'Make Image Linkable', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'no',
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://bestwpdeveloper.com/',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'condition' => [
                    'make_linkable' => 'yes',
                ],
            ]
        );

        $this->add_control(
			'title_switch',
			[
				'label' => esc_html__( 'Title?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'inner' => esc_html__( 'Inner', BWDEB_ROOT_AUTHOR_PRO ),
					'before' => esc_html__( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
					'after' => esc_html__( 'After', BWDEB_ROOT_AUTHOR_PRO ),
				],
                'condition' => [
                    'bwdrmx_maskink_image' => ''
                ],
			]
		);

        $this->add_control(
			'image_title', 
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Random Image Widget' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
                'condition' => [
                    'title_switch!' => '',
                ],
			]
		);

        //text alignment
        $this->add_responsive_control(
            'bwdrmx-text-align',
            [
                'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-image' => 'text-align: {{VALUE}}',
                ],
                'default' => 'center',
                'toggle' => true,
                'condition' => [
                    'title_switch!' => '',
                ],
            ]
        );

        //horizontal-alignment
        $this->add_responsive_control(
            'bwdrmx_text_horizontal_align',
            [
                'label' => esc_html__( 'Horizontal Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'start' => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => ' eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'end' => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title.inner' => 'justify-content: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
                    'title_switch' => 'inner',
                ],
            ]
        );

        //vertical-alignment
        $this->add_responsive_control(
            'bwdrmx_text_vertical_align',
            [
                'label' => esc_html__( 'Vertical Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'start' => [
                        'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'end' => [
                        'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon' => ' eicon-v-align-bottom',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title.inner' => 'align-items: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
                    'title_switch' => 'inner',
                ],
            ]
        );

        //image alignment
        $this->add_responsive_control(
            'bwdrmx-image-align',
            [
                'label' => esc_html__( 'Image Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container' => 'text-align: {{VALUE}}',
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdrmx_content_image_section',
            [
                'label' => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'bwdrmx_image_width',
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
					'size' => 500,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'bwdrmx_image_height_options',
			[
				'label' => esc_html__( 'Dimensions', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'auto-height',
				'options' => [
					'auto-height' => esc_html__( 'Auto Height', BWDEB_ROOT_AUTHOR_PRO ),
					'fixed-height' => esc_html__( 'Fixed Height', BWDEB_ROOT_AUTHOR_PRO ),
					'ratio-height' => esc_html__( 'Aspect Ratio', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
        $this->add_responsive_control(
			'bwdrmx_image_height',
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
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image.fixed-height' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
                'condition' => [
                    'bwdrmx_image_height_options' => 'fixed-height',
                ],
			]
		);

        $this->add_responsive_control(
			'bwdrmx_image_ratio',
			[
				'label' => esc_html__( 'Image Ratio', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1 / 1',
				'options' => [
					'1 / 1' => esc_html__( '1 / 1', BWDEB_ROOT_AUTHOR_PRO ),
					'1 / 2' => esc_html__( '1 / 2', BWDEB_ROOT_AUTHOR_PRO ),
					'1 / 2' => esc_html__( '1 / 2', BWDEB_ROOT_AUTHOR_PRO ),
					'2 / 1' => esc_html__( '2 / 1', BWDEB_ROOT_AUTHOR_PRO ),
					'3 / 4' => esc_html__( '3 / 4', BWDEB_ROOT_AUTHOR_PRO ),
					'4 / 3' => esc_html__( '4 / 3', BWDEB_ROOT_AUTHOR_PRO ),
					'16 / 9' => esc_html__( '16 / 9', BWDEB_ROOT_AUTHOR_PRO ),
					'9 / 16' => esc_html__( '9 / 16', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image.ratio-height .bwdrmx-random-image' => 'aspect-ratio: {{VALUE}}!important;',
				],
                'condition' => [
                    'bwdrmx_image_height_options' => 'ratio-height',
                ],
			]
		);

        $this->add_responsive_control(
			'bwdrmx_image_fit',
			[
				'label' => esc_html__( 'Image Fit', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'cover' => esc_html__( 'Cover', BWDEB_ROOT_AUTHOR_PRO ),
					'contain' => esc_html__( 'Contain', BWDEB_ROOT_AUTHOR_PRO ),
					'fill' => esc_html__( 'Fill', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image .bwdrmx-random-image' => 'object-fit: {{VALUE}}!important; object-position: center center!important;',
				],
			]
		);

        $this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->start_controls_tabs(
            'bwdrmx_image_style_tabs'
        );
        
        $this->start_controls_tab(
            'bwdrmx_image_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdrmx_image_border',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image .bwdrmx-random-image',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdrmx_image_radius',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image .bwdrmx-random-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdrmx_image_box_shadow',
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image .bwdrmx-random-image',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'bwdrmx_image_filters',
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image .bwdrmx-random-image',
			]
		);

        $this->add_control(
			'bwdrmx_image_overlay_heading',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdrmx_image_overlay',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image::before',
			]
		);
        
        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdrmx_image_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdrmx_image_border_hover',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image:hover .bwdrmx-random-image',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdrmx_image_radius_hover',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image:hover .bwdrmx-random-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdrmx_image_box_shadow_hover',
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image:hover .bwdrmx-random-image',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'bwdrmx_image_filters_hover',
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image:hover .bwdrmx-random-image',
			]
		);

        $this->add_control(
			'bwdrmx_image_overlay_heading_hover',
			[
				'label' => esc_html__( 'Image Overlay Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdrmx_image_overlay_hover',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-image:hover::before',
			]
		);

        $this->end_controls_tab();
        
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdrmx_content_title_section',
            [
                'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'bwdrmx_title_style_tabs'
        );
        
        $this->start_controls_tab(
            'bwdrmx_title_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
			'bwdrmx_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdrmx_title_bg',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdrmx_title_typography',
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title',
			]
		);

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdrmx_title_border',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdrmx_title_radius',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //title padding
        $this->add_responsive_control(
            'bwdrmx_title_padding',
            [
                'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //title margin
        $this->add_responsive_control(
            'bwdrmx_title_margin',
            [
                'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdrmx_title_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
			'bwdrmx_title_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdrmx_title_bg_hover',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title:hover',
			]
		);

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdrmx_title_border_hover',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title:hover',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdrmx_title_radius_hover',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdrmx-random-image-container .bwdrmx-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();
        
        $this->end_controls_tabs();

        $this->end_controls_section();

       

    }

	protected function render() {

        $settings = $this->get_settings_for_display();

        $gallery = $settings['gallery'];
        $make_linkable = $settings['make_linkable'];
        $title_switch = $settings['title_switch'];

        if ( ! empty( $gallery ) ) {
            $random_image = $gallery[ array_rand( $gallery ) ];
//             $image_url = wp_get_attachment_image_url( $random_image['id'] );

            echo '<div class="bwdrmx-random-image-container">';
                if ( $make_linkable && ! empty( $settings['link']['url'] ) ) {
                    echo '<a class="bwdrmx-image-link" href="' . esc_url( $settings['link']['url'] ) . '" '. esc_attr(($settings['link']['is_external']) ? 'target="_blank"' : '') .'>';
                }

                
                    echo '<div class="bwdrmx-image '.esc_attr($settings['bwdrmx_image_height_options']).' '.esc_attr($settings['bwdrmx_maskink_image']).'">';


                        if( $title_switch == 'before' ){
                            echo '<div class="bwdrmx-title">' . esc_html( $settings['image_title'] ) . '</div>';
                        }

                            echo '<img class="bwdrmx-random-image" src="' . esc_url( $random_image['url'] ) . '" />';

                        if( $title_switch == 'after' || $title_switch == 'inner' ){
                            echo '<div class="bwdrmx-title '. esc_attr($title_switch) .'">' . esc_html( $settings['image_title'] ) . '</div>';
                        }


                    echo '</div>';

                    
                if ( $make_linkable && ! empty( $settings['link']['url'] ) ) {
                    echo '</a>';
                }
            echo '</div>';
        }

        elseif ( empty( $gallery ) ) {
            echo '<div class="bwdrmx-msg"> Select Multiple Images From Image Gallery Controll</div>';
        }

    }

}