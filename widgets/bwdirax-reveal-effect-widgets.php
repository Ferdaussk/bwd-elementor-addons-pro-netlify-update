<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdirax_scrollimagereveal_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdirax-image-reveal-animation', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Image Reveal Animation', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-import-export bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		$this->start_controls_section(
			'bwdirax_all_style',
			[
				'label' => esc_html__( 'Animations Type', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdirax_style_selection',
			[
				'label' => esc_html__( 'Select Animation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Image Reveal', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Sal Animation', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Hover Animation', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		// start scroll image reveal----------------------------------------------------------
        $this->start_controls_section(
			'bwdirax_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'bwdirax_style_selection' => 'style1'
				],
			]
		);

		$this->add_control(
			'bwdirax_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
				],
				'dynamic' => [
					'active' => true
				],
			]
		);

		//all masking image
		$this->add_control(
			'bwducx_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'mask_1'  => esc_html__( 'mask 1', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_2'  => esc_html__( 'mask 2', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_3'  => esc_html__( 'mask 3', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_4'  => esc_html__( 'mask 4', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_5'  => esc_html__( 'mask 5', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_6'  => esc_html__( 'mask 6', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_7'  => esc_html__( 'mask 7', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_8'  => esc_html__( 'mask 8', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_9'  => esc_html__( 'mask 9', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_10'  => esc_html__( 'mask 10', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_11'  => esc_html__( 'mask 11', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_12'  => esc_html__( 'mask 12', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_13'  => esc_html__( 'mask 13', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_14'  => esc_html__( 'mask 14', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_15'  => esc_html__( 'mask 15', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_16'  => esc_html__( 'mask 16', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_17'  => esc_html__( 'mask 17', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_18'  => esc_html__( 'mask 18', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_19'  => esc_html__( 'mask 19', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_20'  => esc_html__( 'mask 20', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_21'  => esc_html__( 'mask 21', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_22'  => esc_html__( 'mask 22', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_23'  => esc_html__( 'mask 23', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_24'  => esc_html__( 'mask 24', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_25'  => esc_html__( 'mask 25', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_26'  => esc_html__( 'mask 26', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_27'  => esc_html__( 'mask 27', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_28'  => esc_html__( 'mask 28', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_29'  => esc_html__( 'mask 29', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_30'  => esc_html__( 'mask 30', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_31'  => esc_html__( 'mask 31', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_32'  => esc_html__( 'mask 32', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_33'  => esc_html__( 'mask 33', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_34'  => esc_html__( 'mask 34', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_35'  => esc_html__( 'mask 35', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_36'  => esc_html__( 'mask 36', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_37'  => esc_html__( 'mask 37', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_38'  => esc_html__( 'mask 38', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_39'  => esc_html__( 'mask 39', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

        $this->add_control(
			'bwdirax_direction_animation',
			[
				'label'     => esc_html__('Animation Direction', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'default' => 'rightx',
				'options'   => [
					'rightx' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
					'leftx' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
					'topx' => esc_html__('Top', BWDEB_ROOT_AUTHOR_PRO),
					'bottomx' => esc_html__('Bottom', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

        $this->add_control(
			'bwdirax_animation',
			[
				'label'       => esc_html__('Animation Speed(s)', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => \Elementor\Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 2,
                'selectors' => [
					'{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_reveal' => 'transition: ease-in-out all {{SIZE}}s!important;',
				],
			]
		);

        $this->add_control(
			'bwdirax_animation_delay',
			[
				'label'       => esc_html__('Animation Delay(ms)', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => \Elementor\Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100000,
				'step'        => 1,
				'default'     => 250,
                'selectors' => [
					'{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_reveal' => 'transition-delay: {{SIZE}}ms!important;',
				],
			]
		);

		$this->add_control(
            'bwdirax_make_linkable',
            [
                'label' => __( 'Make Image Linkable', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'no',
            ]
        );

        $this->add_control(
            'bwdirax_link',
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
                    'bwdirax_make_linkable' => 'yes',
                ],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdirax_content_style_section',
			[
				'label' => esc_html__( 'Style Section', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdirax_style_selection' => 'style1'
				],
			]
		);

		$this->add_responsive_control(
			'bwdirax_reveal_width',
			[
				'label' => esc_html__( 'Image Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .uc_image_reveal_box' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdirax_reveal_height',
			[
				'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .uc_image_reveal_box' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdirax_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .uc_image_reveal_box .uc_overlay',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdirax_border',
				'selector' => '{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_image_reveal_box .bwdirax-img',
			]
		);
		$this->add_control(
			'bwdirax_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_image_reveal_box a .bwdirax-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdirax_box_shadow',
				'selector' => '{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_image_reveal_box .bwdirax-img',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'bwdirax__css_filters',
				'selector' => '{{WRAPPER}} #bwdirax_uc_image_reveal_on_scroll .uc_image_reveal_box .bwdirax-img',
			]
		);

		$this->end_controls_section();
		// end scroll image reveal-----------------------------------------------

		// start image sal reveal----------------------------------------------------
        $this->start_controls_section(
            'bwdsalx_content_section',
            [
                'label' => __( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'bwdirax_style_selection' => 'style2'
				],
            ]
        );

		$this->add_control(
			'bwdsalx_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        //all masking image
		$this->add_control(
			'bwdsalx_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'mask_1'  => esc_html__( 'mask 1', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_2'  => esc_html__( 'mask 2', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_3'  => esc_html__( 'mask 3', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_4'  => esc_html__( 'mask 4', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_5'  => esc_html__( 'mask 5', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_6'  => esc_html__( 'mask 6', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_7'  => esc_html__( 'mask 7', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_8'  => esc_html__( 'mask 8', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_9'  => esc_html__( 'mask 9', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_10'  => esc_html__( 'mask 10', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_11'  => esc_html__( 'mask 11', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_12'  => esc_html__( 'mask 12', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_13'  => esc_html__( 'mask 13', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_14'  => esc_html__( 'mask 14', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_15'  => esc_html__( 'mask 15', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_16'  => esc_html__( 'mask 16', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_17'  => esc_html__( 'mask 17', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_18'  => esc_html__( 'mask 18', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_19'  => esc_html__( 'mask 19', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_20'  => esc_html__( 'mask 20', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_21'  => esc_html__( 'mask 21', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_22'  => esc_html__( 'mask 22', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_23'  => esc_html__( 'mask 23', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_24'  => esc_html__( 'mask 24', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_25'  => esc_html__( 'mask 25', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_26'  => esc_html__( 'mask 26', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_27'  => esc_html__( 'mask 27', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_28'  => esc_html__( 'mask 28', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_29'  => esc_html__( 'mask 29', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_30'  => esc_html__( 'mask 30', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_31'  => esc_html__( 'mask 31', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_32'  => esc_html__( 'mask 32', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_33'  => esc_html__( 'mask 33', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_34'  => esc_html__( 'mask 34', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_35'  => esc_html__( 'mask 35', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_36'  => esc_html__( 'mask 36', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_37'  => esc_html__( 'mask 37', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_38'  => esc_html__( 'mask 38', BWDEB_ROOT_AUTHOR_PRO ),
					'mask_39'  => esc_html__( 'mask 39', BWDEB_ROOT_AUTHOR_PRO ),
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
                    'bwdsalx_maskink_image' => ''
                ],
			]
		);

        $this->add_control(
			'image_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Random Widget' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
                'condition' => [
                    'title_switch!' => '',
					'bwdsalx_maskink_image' => ''
                ],
			]
		);

        //text alignment
        $this->add_responsive_control(
            'bwdsalx-text-align',
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
                    '{{WRAPPER}} .bwdsalx-image' => 'text-align: {{VALUE}}',
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
            'bwdsalx_text_horizontal_align',
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
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title.inner' => 'justify-content: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
                    'title_switch' => 'inner',
                ],
            ]
        );
        //vertical-alignment
        $this->add_responsive_control(
            'bwdsalx_text_vertical_align',
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
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title.inner' => 'align-items: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
                    'title_switch' => 'inner',
                ],
            ]
        );
        //image alignment
        $this->add_responsive_control(
            'bwdsalx-image-align',
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
                    '{{WRAPPER}} .bwdsalx-random-image-container' => 'text-align: {{VALUE}}',
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsalx_content_image_section',
            [
                'label' => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdirax_style_selection' => 'style2'
				],
            ]
        );
        $this->add_responsive_control(
			'bwdsalx_image_width',
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 500,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'bwdsalx_image_height_options',
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
			'bwdsalx_image_height',
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
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image.fixed-height' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
                'condition' => [
                    'bwdsalx_image_height_options' => 'fixed-height',
                ],
			]
		);
        $this->add_responsive_control(
			'bwdsalx_image_ratio',
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
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image.ratio-height .bwdsalx-random-image' => 'aspect-ratio: {{VALUE}}!important;',
				],
                'condition' => [
                    'bwdsalx_image_height_options' => 'ratio-height',
                ],
			]
		);
        $this->add_responsive_control(
			'bwdsalx_image_fit',
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
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image .bwdsalx-random-image' => 'object-fit: {{VALUE}}!important; object-position: center center!important;',
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
            'bwdsalx_image_style_tabs'
        );

        $this->start_controls_tab(
            'bwdsalx_image_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdsalx_image_border',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image .bwdsalx-random-image',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdsalx_image_radius',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image .bwdsalx-random-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdsalx_image_box_shadow',
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image .bwdsalx-random-image',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'bwdsalx_image_filters',
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image .bwdsalx-random-image',
			]
		);

        $this->add_control(
			'bwdsalx_image_overlay_heading',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsalx_image_overlay',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image::before',
			]
		);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdsalx_image_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdsalx_image_border_hover',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image:hover .bwdsalx-random-image',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdsalx_image_radius_hover',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image:hover .bwdsalx-random-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bwdsalx_image_box_shadow_hover',
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image:hover .bwdsalx-random-image',
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'bwdsalx_image_filters_hover',
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image:hover .bwdsalx-random-image',
			]
		);

        $this->add_control(
			'bwdsalx_image_overlay_heading_hover',
			[
				'label' => esc_html__( 'Image Overlay Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsalx_image_overlay_hover',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-image:hover::before',
			]
		);

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsalx_content_title_section',
            [
                'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdirax_style_selection' => 'style2'
				],
            ]
        );

        $this->start_controls_tabs(
            'bwdsalx_title_style_tabs'
        );

        $this->start_controls_tab(
            'bwdsalx_title_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
			'bwdsalx_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsalx_title_bg',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsalx_title_typography',
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title',
			]
		);

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdsalx_title_border',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdsalx_title_radius',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //title padding
        $this->add_responsive_control(
            'bwdsalx_title_padding',
            [
                'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //title margin
        $this->add_responsive_control(
            'bwdsalx_title_margin',
            [
                'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'bwdsalx_title_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
			'bwdsalx_title_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsalx_title_bg_hover',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title:hover',
			]
		);

        //border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bwdsalx_title_border_hover',
                'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'selector' => '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title:hover',
            ]
        );

        //Border Radius
        $this->add_responsive_control(
            'bwdsalx_title_radius_hover',
            [
                'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsalx-random-image-container .bwdsalx-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

		//image_animation
		$this->start_controls_section(
            'bwdsalx_image_animation_section',
            [
                'label' => __( 'Image Animation Controll', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'bwdirax_style_selection' => 'style2'
				],
            ]
        );
		$this->add_control(
			'bwdsalx_image_animation_type',
			[
				'label' => esc_html__( 'Animation Type', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'fade',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'fade' => esc_html__( 'Fade', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-up' => esc_html__( 'Slide Up', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-down' => esc_html__( 'Slide Down', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-left' => esc_html__( 'Slide Left', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-right' => esc_html__( 'Slide Right', BWDEB_ROOT_AUTHOR_PRO ),
					'zoom-in' => esc_html__( 'Zoom In', BWDEB_ROOT_AUTHOR_PRO ),
					'zoom-out' => esc_html__( 'Zoom Out', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-up' => esc_html__( 'Flip Up', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-down' => esc_html__( 'Flip Down', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-left' => esc_html__( 'Flip Left', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-right' => esc_html__( 'Flip Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_image_animation_duration',
			[
				'label' => esc_html__( 'Animation Duration(s)', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Duration Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '300',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'200' => esc_html__( '0.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'250' => esc_html__( '0.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'300' => esc_html__( '0.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'350' => esc_html__( '0.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'400' => esc_html__( '0.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'450' => esc_html__( '0.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'500' => esc_html__( '0.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'550' => esc_html__( '0.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'600' => esc_html__( '0.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'650' => esc_html__( '0.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'700' => esc_html__( '0.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'750' => esc_html__( '0.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'800' => esc_html__( '0.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'850' => esc_html__( '0.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'900' => esc_html__( '0.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'950' => esc_html__( '0.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'1000' => esc_html__( '1s', BWDEB_ROOT_AUTHOR_PRO ),
					'1050' => esc_html__( '1.05s', BWDEB_ROOT_AUTHOR_PRO ),
					'1100' => esc_html__( '1.1s', BWDEB_ROOT_AUTHOR_PRO ),
					'1150' => esc_html__( '1.15s', BWDEB_ROOT_AUTHOR_PRO ),
					'1200' => esc_html__( '1.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'1250' => esc_html__( '1.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'1300' => esc_html__( '1.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'1350' => esc_html__( '1.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'1400' => esc_html__( '1.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'1450' => esc_html__( '1.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'1500' => esc_html__( '1.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'1550' => esc_html__( '1.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'1600' => esc_html__( '1.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'1650' => esc_html__( '1.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'1700' => esc_html__( '1.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'1750' => esc_html__( '1.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'1800' => esc_html__( '1.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'1850' => esc_html__( '1.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'1900' => esc_html__( '1.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'1950' => esc_html__( '1.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'2000' => esc_html__( '2s', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_image_animation_delay',
			[
				'label' => esc_html__( 'Animation Delay(s)', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Delay Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'50' => esc_html__( '0.05s', BWDEB_ROOT_AUTHOR_PRO ),
					'100' => esc_html__( '0.1s', BWDEB_ROOT_AUTHOR_PRO ),
					'150' => esc_html__( '0.15s', BWDEB_ROOT_AUTHOR_PRO ),
					'200' => esc_html__( '0.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'250' => esc_html__( '0.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'300' => esc_html__( '0.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'350' => esc_html__( '0.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'400' => esc_html__( '0.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'450' => esc_html__( '0.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'500' => esc_html__( '0.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'550' => esc_html__( '0.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'600' => esc_html__( '0.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'650' => esc_html__( '0.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'700' => esc_html__( '0.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'750' => esc_html__( '0.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'800' => esc_html__( '0.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'850' => esc_html__( '0.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'900' => esc_html__( '0.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'950' => esc_html__( '0.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'1000' => esc_html__( '1s', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_image_animation_timing',
			[
				'label' => esc_html__( 'Animation Timing Function', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Function Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'ease-out-back',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'linear' => esc_html__( 'linear', BWDEB_ROOT_AUTHOR_PRO ),
					'ease' => esc_html__( 'ease', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in' => esc_html__( 'ease-in', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out' => esc_html__( 'ease-out', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out' => esc_html__( 'ease-in-out', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-cubic' => esc_html__( 'ease-in-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-cubic' => esc_html__( 'ease-out-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-cubic' => esc_html__( 'ease-in-out-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-circ' => esc_html__( 'ease-in-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-circ' => esc_html__( 'ease-out-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-circ' => esc_html__( 'ease-in-out-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-expo' => esc_html__( 'ease-in-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-expo' => esc_html__( 'ease-out-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-expo' => esc_html__( 'ease-in-out-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quad' => esc_html__( 'ease-in-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quad' => esc_html__( 'ease-out-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quad' => esc_html__( 'ease-in-out-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quart' => esc_html__( 'ease-in-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quart' => esc_html__( 'ease-out-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quart' => esc_html__( 'ease-in-out-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quint' => esc_html__( 'ease-in-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quint' => esc_html__( 'ease-out-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quint' => esc_html__( 'ease-in-out-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-sine' => esc_html__( 'ease-in-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-sine' => esc_html__( 'ease-out-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-sine' => esc_html__( 'ease-in-out-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-back' => esc_html__( 'ease-in-back', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-back' => esc_html__( 'ease-out-back', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-back' => esc_html__( 'ease-in-out-back', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
        $this->end_controls_section();

		//text_animation
		$this->start_controls_section(
            'bwdsalx_text_animation_section',
            [
                'label' => __( 'Text Animation Controll', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'bwdirax_style_selection' => 'style2',
					'title_switch!' => '',
				],
            ]
        );
		$this->add_control(
			'bwdsalx_text_animation_type',
			[
				'label' => esc_html__( 'Animation Type', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'fade',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'fade' => esc_html__( 'Fade', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-up' => esc_html__( 'Slide Up', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-down' => esc_html__( 'Slide Down', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-left' => esc_html__( 'Slide Left', BWDEB_ROOT_AUTHOR_PRO ),
					'slide-right' => esc_html__( 'Slide Right', BWDEB_ROOT_AUTHOR_PRO ),
					'zoom-in' => esc_html__( 'Zoom In', BWDEB_ROOT_AUTHOR_PRO ),
					'zoom-out' => esc_html__( 'Zoom Out', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-up' => esc_html__( 'Flip Up', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-down' => esc_html__( 'Flip Down', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-left' => esc_html__( 'Flip Left', BWDEB_ROOT_AUTHOR_PRO ),
					'flip-right' => esc_html__( 'Flip Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_text_animation_duration',
			[
				'label' => esc_html__( 'Animation Duration(s)', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Duration Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '300',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'200' => esc_html__( '0.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'250' => esc_html__( '0.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'300' => esc_html__( '0.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'350' => esc_html__( '0.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'400' => esc_html__( '0.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'450' => esc_html__( '0.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'500' => esc_html__( '0.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'550' => esc_html__( '0.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'600' => esc_html__( '0.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'650' => esc_html__( '0.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'700' => esc_html__( '0.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'750' => esc_html__( '0.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'800' => esc_html__( '0.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'850' => esc_html__( '0.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'900' => esc_html__( '0.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'950' => esc_html__( '0.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'1000' => esc_html__( '1s', BWDEB_ROOT_AUTHOR_PRO ),
					'1050' => esc_html__( '1.05s', BWDEB_ROOT_AUTHOR_PRO ),
					'1100' => esc_html__( '1.1s', BWDEB_ROOT_AUTHOR_PRO ),
					'1150' => esc_html__( '1.15s', BWDEB_ROOT_AUTHOR_PRO ),
					'1200' => esc_html__( '1.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'1250' => esc_html__( '1.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'1300' => esc_html__( '1.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'1350' => esc_html__( '1.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'1400' => esc_html__( '1.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'1450' => esc_html__( '1.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'1500' => esc_html__( '1.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'1550' => esc_html__( '1.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'1600' => esc_html__( '1.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'1650' => esc_html__( '1.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'1700' => esc_html__( '1.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'1750' => esc_html__( '1.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'1800' => esc_html__( '1.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'1850' => esc_html__( '1.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'1900' => esc_html__( '1.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'1950' => esc_html__( '1.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'2000' => esc_html__( '2s', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_text_animation_delay',
			[
				'label' => esc_html__( 'Animation Delay(s)', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Delay Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'50' => esc_html__( '0.05s', BWDEB_ROOT_AUTHOR_PRO ),
					'100' => esc_html__( '0.1s', BWDEB_ROOT_AUTHOR_PRO ),
					'150' => esc_html__( '0.15s', BWDEB_ROOT_AUTHOR_PRO ),
					'200' => esc_html__( '0.2s', BWDEB_ROOT_AUTHOR_PRO ),
					'250' => esc_html__( '0.25s', BWDEB_ROOT_AUTHOR_PRO ),
					'300' => esc_html__( '0.3s', BWDEB_ROOT_AUTHOR_PRO ),
					'350' => esc_html__( '0.35s', BWDEB_ROOT_AUTHOR_PRO ),
					'400' => esc_html__( '0.4s', BWDEB_ROOT_AUTHOR_PRO ),
					'450' => esc_html__( '0.45s', BWDEB_ROOT_AUTHOR_PRO ),
					'500' => esc_html__( '0.5s', BWDEB_ROOT_AUTHOR_PRO ),
					'550' => esc_html__( '0.55s', BWDEB_ROOT_AUTHOR_PRO ),
					'600' => esc_html__( '0.6s', BWDEB_ROOT_AUTHOR_PRO ),
					'650' => esc_html__( '0.65s', BWDEB_ROOT_AUTHOR_PRO ),
					'700' => esc_html__( '0.7s', BWDEB_ROOT_AUTHOR_PRO ),
					'750' => esc_html__( '0.75s', BWDEB_ROOT_AUTHOR_PRO ),
					'800' => esc_html__( '0.8s', BWDEB_ROOT_AUTHOR_PRO ),
					'850' => esc_html__( '0.85s', BWDEB_ROOT_AUTHOR_PRO ),
					'900' => esc_html__( '0.9s', BWDEB_ROOT_AUTHOR_PRO ),
					'950' => esc_html__( '0.95s', BWDEB_ROOT_AUTHOR_PRO ),
					'1000' => esc_html__( '1s', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdsalx_text_animation_timing',
			[
				'label' => esc_html__( 'Animation Timing Function', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => esc_html__('Only This Animation Function Supported', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'ease-out-back',
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'linear' => esc_html__( 'linear', BWDEB_ROOT_AUTHOR_PRO ),
					'ease' => esc_html__( 'ease', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in' => esc_html__( 'ease-in', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out' => esc_html__( 'ease-out', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out' => esc_html__( 'ease-in-out', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-cubic' => esc_html__( 'ease-in-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-cubic' => esc_html__( 'ease-out-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-cubic' => esc_html__( 'ease-in-out-cubic', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-circ' => esc_html__( 'ease-in-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-circ' => esc_html__( 'ease-out-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-circ' => esc_html__( 'ease-in-out-circ', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-expo' => esc_html__( 'ease-in-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-expo' => esc_html__( 'ease-out-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-expo' => esc_html__( 'ease-in-out-expo', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quad' => esc_html__( 'ease-in-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quad' => esc_html__( 'ease-out-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quad' => esc_html__( 'ease-in-out-quad', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quart' => esc_html__( 'ease-in-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quart' => esc_html__( 'ease-out-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quart' => esc_html__( 'ease-in-out-quart', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-quint' => esc_html__( 'ease-in-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-quint' => esc_html__( 'ease-out-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-quint' => esc_html__( 'ease-in-out-quint', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-sine' => esc_html__( 'ease-in-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-sine' => esc_html__( 'ease-out-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-sine' => esc_html__( 'ease-in-out-sine', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-back' => esc_html__( 'ease-in-back', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-out-back' => esc_html__( 'ease-out-back', BWDEB_ROOT_AUTHOR_PRO ),
					'ease-in-out-back' => esc_html__( 'ease-in-out-back', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
        $this->end_controls_section();
		// end image sal reveal-------------------------------------------------------


		// start image hover effect----------------------
		$this->start_controls_section(
			'_section_image_content',
			[
				'label' => __('Image Content', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'bwdirax_style_selection' => 'style3'
				],
			]
		);

		$this->add_control(
			'hover_effect',
			[
				'label' => esc_html__( 'Hover Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'ha-effect-apollo',
				'options' => [
					'ha-effect-apollo'  => __('Apollo', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-bubba'  => __('Bubba', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-chico'  => __('Chico', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-dexter'  => __('Dexter', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-duke'  => __('Duke', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-goliath'  => __('Goliath', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-honey'  => __('Honey', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-jazz'  => __('Jazz', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-layla'  => __('Layla', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-lexi'  => __('Lexi', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-lily'  => __('Lily', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-marley'  => __('Marley', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-milo'  => __('Milo', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-ming'  => __('Ming', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-moses'  => __('Moses', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-oscar'  => __('Oscar', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-romeo'  => __('Romeo', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-roxy'  => __('Roxy', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-ruby'  => __('Ruby', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-sadie'  => __('Sadie', BWDEB_ROOT_AUTHOR_PRO),
					'ha-effect-sarah'  => __('Sarah', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'hover_image',
			[
				'label' => __('Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
				],
				'dynamic' => [
					'active' => true
				],
			]
		);

		$this->add_control(
			'hover_image_alt_tag',
			[
				'label' => __('Image ALT Tag', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Image hover effect image', BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __('Type here image alt tag value', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => ['active' => true,],
			]
		);

		$this->add_control(
			'hover_title',
			[
				'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'description' => bwdirax_ha_get_allowed_html_desc( 'intermediate' ),
				'rows' => 3,
				'default' => __('<span>Elementor</span> Addon', BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __('Type your title here', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => ['active' => true],
			]
		);

		$this->add_control(
			'title_tag',
			[
				'label' => __( 'Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				// 'separator' => 'before',
				'options' => [
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'div' => 'div',
					'span' => 'span',
					'p' => 'p',
				],
				'default' => 'h2',
			]
		);

		$this->add_control(
			'hover_description',
			[
				'label' => __('Description', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __('Best Elementor Addons', BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __('Type your description here', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'hover_effect!' => 'ha-effect-honey',
				],
				'dynamic' => ['active' => true],
			]
		);

		$this->add_control(
			'hover_link',
			[
				'label' => __('Link URL', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __('https://your-link.com', BWDEB_ROOT_AUTHOR_PRO),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'dynamic' => ['active' => true],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'_section_common_style',
			[
				'label' => __('Common', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdirax_style_selection' => 'style3'
				],
			]
		);

		$this->add_control(
			'hover_container_height_width_control',
			[
				'label' => __('Container Max Width?', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => __('No', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_responsive_control(
			'hover_width',
			[
				'label' => __('Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1200,
						'step' => 5,
					],
				],
				'devices' => ['desktop', 'tablet', 'mobile'],
				'desktop_default' => [
					'size' => 480,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 480,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 300,
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper' => 'width: {{SIZE}}{{UNIT}}; height: calc({{SIZE}}{{UNIT}}/1.34);',
				],
				'condition' => [
					'hover_container_height_width_control' => 'yes'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig',
			]
		);

		$this->add_control(
			'hover_border_radius',
			[
				'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typo',
				'label' => __('Title Typography', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-title',
				'fields_options' => [
					'typography' => ['default' => 'yes'],
					'font_family' => [
						'default' => 'Roboto',
					],
				],
			]
		);


		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typo',
				'label' => __('Description Typography', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-desc',
				'fields_options' => [
					'typography' => ['default' => 'yes'],
					'font_family' => [
						'default' => 'Roboto',
					],
				],
			]
		);

		$this->start_controls_tabs('_tabs_style');

		$this->start_controls_tab(
			'_tab_normal',
			[
				'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __('Title Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-title' => 'color: {{VALUE}}; border-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-title::before' => '--ha-ihe-title-before-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-title::after' => '--ha-ihe-title-after-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .bwdirax-ha-ihe-caption::before' => '--bwdirax-ha-ihe-fig-before-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .bwdirax-ha-ihe-caption::after' => '--bwdirax-ha-ihe-fig-after-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => __('Description Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig .ha-ihe-desc' => 'color: {{VALUE}}; --ha-ihe-desc-border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_hover',
			[
				'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$this->add_control(
			'title_hover_color',
			[
				'label' => __('Title Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .ha-ihe-title' => 'color: {{VALUE}}; border-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .ha-ihe-title::before' => '--ha-ihe-title-before-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .ha-ihe-title::after' => '-ha-ihe-title-after-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .bwdirax-ha-ihe-caption::before' => '--bwdirax-ha-ihe-fig-before-color: {{VALUE}};',
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .bwdirax-ha-ihe-caption::after' => '--bwdirax-ha-ihe-fig-after-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'description_hover_color',
			[
				'label' => __('Description Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover .ha-ihe-desc' => 'color: {{VALUE}}; --ha-ihe-desc-border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'_section_overlay_style',
			[
				'label' => __('Background Overlay', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdirax_style_selection' => 'style3'
				],
			]
		);

		$this->start_controls_tabs('_tabs_overlay_style');
		$this->start_controls_tab(
			'_tab_overlay_normal',
			[
				'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'     => 'hover_overlay_normal',
				'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
				'show_label' => true,
				'types' => ['classic', 'gradient'],
				'exclude' => [
					'classic' => 'image'
				],
				'selector' => '{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig, {{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig.ha-effect-sadie .bwdirax-ha-ihe-caption::before',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_overlay_hover',
			[
				'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);


		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'     => 'hover_overlay_hover',
				'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
				'show_label' => true,
				'types' => ['classic', 'gradient'],
				'exclude' => [
					'classic' => 'image'
				],
				'selector' => '{{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig:hover, {{WRAPPER}} .bwdirax-ha-ihe-wrapper .bwdirax-ha-ihe-fig.ha-effect-sadie:hover .bwdirax-ha-ihe-caption::before',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
		// end image hover effect------------------------

    }

	protected function render(){
        $settings = $this->get_settings_for_display();
		$bwdirax_style_selection = $settings['bwdirax_style_selection'];
        $direction = $settings['bwdirax_direction_animation'];

		$make_linkable = $settings['make_linkable'];
		$bwdirax_make_linkable = $settings['bwdirax_make_linkable'];
        $title_switch = $settings['title_switch'];
		// end image hover effect------------------------


		if( 'style1' === $bwdirax_style_selection ) {?>
			<div class="uc_image_reveal" id="bwdirax_uc_image_reveal_on_scroll">
					<div class="uc_image_reveal_box bwduc-image <?php echo esc_attr($settings['bwducx_maskink_image']); ?>">

				<?php	if ( $bwdirax_make_linkable && ! empty( $settings['bwdirax_link']['url'] ) ) {?>
					<a href="<?php echo esc_url( $settings['bwdirax_link']['url'] ); ?>" <?php echo esc_attr(($settings['bwdirax_link']['is_external']) ? 'target="_blank"' : '') ?> >
				<?php } ?>

					<img src="<?php echo esc_url( $settings['bwdirax_image']['url'] ); ?>" class="bwdirax-img" alt="image">

					<?php	if ( $bwdirax_make_linkable && ! empty( $settings['bwdirax_link']['url'] ) ) {?>
						</a>
					<?php } ?>

					<div class="uc_overlay iv-jello <?php echo $direction ?>"></div>
					</div>
			</div>
		<?php
		}elseif( 'style2' === $bwdirax_style_selection ){

			echo '<div class="bwdsalx-random-image-container">';
                if ( $make_linkable && ! empty( $settings['link']['url'] ) ) {
                    echo '<a href="' . esc_url( $settings['link']['url'] ) . '" '. esc_attr(($settings['link']['is_external']) ? 'target="_blank"' : '') .'>';
                }


                    echo '<div class="bwdsalx-imagex">';


                        if( $title_switch == 'before' ){
                            echo '<div data-sal="'.esc_attr($settings['bwdsalx_text_animation_type']).'" data-sal-delay="'.esc_attr($settings['bwdsalx_text_animation_delay']).'" data-sal-duration="'.esc_attr($settings['bwdsalx_text_animation_duration']).'" data-sal-easing="'.esc_attr($settings['bwdsalx_text_animation_timing']).'" class="bwdsalx-title">' . esc_html( $settings['image_title'] ) . '</div>';
                        }

						echo '<div data-sal="'.esc_attr($settings['bwdsalx_image_animation_type']).'" data-sal-delay="'.esc_attr($settings['bwdsalx_image_animation_delay']).'" data-sal-duration="'.esc_attr($settings['bwdsalx_image_animation_duration']).'" data-sal-easing="'.esc_attr($settings['bwdsalx_image_animation_timing']).'" class="bwdsalx-image '.esc_attr($settings['bwdsalx_image_height_options']).' '.esc_attr($settings['bwdsalx_maskink_image']).'">';

                            echo '<img class="bwdsalx-random-image" src="' . esc_url($settings['bwdsalx_image']['url']) . '" />';

						echo '</div>';

                        if( $title_switch == 'after' || $title_switch == 'inner' ){
                            echo '<div data-sal="'.esc_attr($settings['bwdsalx_text_animation_type']).'" data-sal-delay="'.esc_attr($settings['bwdsalx_text_animation_delay']).'" data-sal-duration="'.esc_attr($settings['bwdsalx_text_animation_duration']).'" data-sal-easing="'.esc_attr($settings['bwdsalx_text_animation_timing']).'" class="bwdsalx-title ' . esc_attr($title_switch) .'">' . esc_html( $settings['image_title'] ) . '</div>';
                        }


                    echo '</div>';


                if ( $make_linkable && ! empty( $settings['link']['url'] ) ) {
                    echo '</a>';
                }
            echo '</div>';

		}elseif( 'style3' === $bwdirax_style_selection ){ ?>
			<div class="bwdirax-ha-ihe-wrapper grid">
				<figure class="bwdirax-ha-ihe-fig <?php echo esc_attr($settings['hover_effect']); ?>">
					<img class="bwdirax-ha-ihe-img" src="<?php echo esc_url($settings['hover_image']['url']); ?>" alt="<?php echo esc_attr($settings['hover_image_alt_tag']); ?>" />
					<figcaption class="bwdirax-ha-ihe-caption">
						<?php if ($settings['hover_effect'] == 'ha-effect-lily') : ?>
							<div>
							<?php endif; ?>
							<?php
							printf( '<%1$s class="ha-ihe-title">%2$s</%1$s>',
								bwdirax_ha_escape_tags( $settings['title_tag'], 'h2' ),
								bwdirax_ha_kses_intermediate($settings['hover_title'])
							);
							?>
							<?php if ($settings['hover_effect'] != 'ha-effect-honey') : ?>
								<div class="ha-ihe-desc"><?php echo bwdirax_ha_kses_intermediate($settings['hover_description']); ?></div>
							<?php endif; ?>
							<?php if ($settings['hover_effect'] == 'ha-effect-lily') : ?>
							</div>
						<?php endif; ?>
						<?php if ($settings['hover_link']['url'] != '') : ?>

							<a href="<?php echo esc_url(isset($settings['hover_link']['url']) ? $settings['hover_link']['url'] : ''); ?>" <?php echo esc_attr(($settings['hover_link']['is_external']) ? 'target="_blank"' : ''); ?>>></a>

						<?php endif; ?>
					</figcaption>
				</figure>
			</div>
			<?php 
		}
    }

}