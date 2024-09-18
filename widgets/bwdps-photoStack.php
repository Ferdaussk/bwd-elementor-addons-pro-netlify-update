<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdps_photostack extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdps_photo_stack', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Photo Stack', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-photostack bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdthebest_general_category'];
	}


	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdps_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdps_style_selection',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'style13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'style14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'style15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'style16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'style17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'style18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'style19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'style20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'style21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdps_photo_stack_section',
			[
				'label' => esc_html__( 'Photo Stack', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//media
		$this->add_control(
			'bwdps_photostack_single_image',
			[
				'label'   => __('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdps_style_selection!' => ['style1','style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style14', 'style16', 'style17', 'style19', 'style20', 'style21'],
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		//media
		$repeater->add_control(
			'bwdps_photostack_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);

		//all masking image
		$repeater->add_control(
			'bwdps_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'mask_none',
				'options' => [
					'mask_none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
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

		//image-link
		$repeater->add_control(
			'bwdps_photostack_image_link',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alt-text
		$repeater->add_control(
			'bwdps_alt_text', 
			[
				'label' => esc_html__( 'ALT Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Item' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//bwdps_imgcontrol_switcher
		$repeater->add_control(
			'bwdps_imgcontrol_switcher',
			[
				'label' => esc_html__( 'Image Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);

		//image-width
        $repeater->add_responsive_control(
			'bwdps_photostack_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//image-height
        $repeater->add_responsive_control(
			'bwdps_photostack_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//z-index
		$repeater->add_responsive_control(
            'bwdps_image_z_index',
            [
                'label'     => esc_html__('Z-Index', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -1000,
                'max'       => 1000,
                'step'      => 1,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'z-index: {{VALUE}};',
                ],
                'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
            ]
        );

		//Image Object Opsition
		$repeater->add_control(
			'bwdps_image_object_opsition',
			[
				'label' => esc_html__( 'Image Object Opsition', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center',
				'options' => [
					'top'  => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'right'  => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom'  => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'center'  => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors'   => [
                    '{{WRAPPER}} img' => 'object-position: {{value}}',
                ],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//position-heading
		$repeater->add_control(
			'bwdps_photostack_image_heading',
			[
				'label' => esc_html__( 'Image Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);
		//top
		$repeater->add_responsive_control(
			'bwdps_photostack_top',
			[
				'label' => esc_html__( 'Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'top: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		$repeater->add_responsive_control(
			'bwdps_photostack_left',
			[
				'label' => esc_html__( 'Offset X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$repeater->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
            ]
		);

		//highlight-normal-style------------------------------------------
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img',
			]
		);

		//Border Radius
		$repeater->add_responsive_control(
			'bwdps_photostack_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img',
			]
		);

		$repeater->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover',
			]
		);

		 //Border Radius
		 $repeater->add_responsive_control(
			'bwdps_photostack_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover',
			]
		);

		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();

		//four-image-repeater
		$this->add_control(
			'bwdps-photostack-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style2', 'style3', 'style4', 'style6', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style17', 'style19', 'style20', 'style21'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		//three-image-repeater
		$this->add_control(
			'bwdps-photostack-three-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style1', 'style5', 'style7', 'style8', 'style11', 'style12', 'style13', 'style15', 'style16', 'style17', 'style18'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		//five-image-repeater
		$this->add_control(
			'bwdps-photostack-five-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdps_photostack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style14', 'style16', 'style18', 'style19', 'style21'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		$this->end_controls_section();



		//tab-content
		$this->start_controls_section(
			'bwdps_tab_style_section',
			[
				'label' => esc_html__( 'Photo Stack Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//Infinite Animation
		$this->add_control(
            'image_infinite_animation',
            [
                'label'     => esc_html__('Infinite Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''                    => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-bounce-sm'        => esc_html__('Bounce Small', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-bounce-md'        => esc_html__('Bounce Medium', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-bounce-lg'        => esc_html__('Bounce Large', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-fade'             => esc_html__('Fade', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-rotating'         => esc_html__('Rotating', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-rotating-inverse' => esc_html__('Rotating inverse', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-scale-sm'         => esc_html__('Scale Small', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-scale-md'         => esc_html__('Scale Medium', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdps-scale-lg'         => esc_html__('Scale Large', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'   => 'bwdps-bounce-sm',
                'separator' => 'before',
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdps_animation_speed',
			[
				'label'       => esc_html__('Infinite Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => 6,
				'selectors'   => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => '--animation_speed:{{SIZE}}s',
				],
			]
		);

		//hover amination
		$this->add_control(
            'bwdps_hover_animation_style',
            [
                'label'     => esc_html__('Hover Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'none'             => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'fly-sm'           => esc_html__('Fly Small', BWDEB_ROOT_AUTHOR_PRO),
                    'fly'              => esc_html__('Fly Medium', BWDEB_ROOT_AUTHOR_PRO),
                    'fly-lg'           => esc_html__('Fly Large', BWDEB_ROOT_AUTHOR_PRO),
                    'scale-sm'         => esc_html__('Scale Small', BWDEB_ROOT_AUTHOR_PRO),
                    'scale'            => esc_html__('Scale Medium', BWDEB_ROOT_AUTHOR_PRO),
                    'scale-lg'         => esc_html__('Scale Large', BWDEB_ROOT_AUTHOR_PRO),
                    'scale-inverse-sm' => esc_html__('Scale Inverse Small', BWDEB_ROOT_AUTHOR_PRO),
                    'scale-inverse'    => esc_html__('Scale Inverse Medium', BWDEB_ROOT_AUTHOR_PRO),
                    'scale-inverse-lg' => esc_html__('Scale Inverse Large', BWDEB_ROOT_AUTHOR_PRO),
                    'bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'   => 'scale-sm',
            ]
        );

		//extra hover amination
		$this->add_control(
            'bwdps_extra_hover_animation_style',
            [
                'label'     => esc_html__('Extra Hover Animation', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('Notice: if you use [ Extra Hover Animation ] control, please turn off [ Hover Animation ] control. Thank You', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'bnone' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'bounce' => esc_html__('bounce', BWDEB_ROOT_AUTHOR_PRO),
					'bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
                    'flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
                    'pulse' => esc_html__('Pulse', BWDEB_ROOT_AUTHOR_PRO),
                    'rubberBand' => esc_html__('RubberBand', BWDEB_ROOT_AUTHOR_PRO),
                    'shakeX' => esc_html__('ShakeX', BWDEB_ROOT_AUTHOR_PRO),
                    'shakeY' => esc_html__('ShakeY', BWDEB_ROOT_AUTHOR_PRO),
                    'headShake' => esc_html__('HeadShake', BWDEB_ROOT_AUTHOR_PRO),
                    'swing' => esc_html__('Swing', BWDEB_ROOT_AUTHOR_PRO),
                    'tada' => esc_html__('Tada', BWDEB_ROOT_AUTHOR_PRO),
                    'wobble' => esc_html__('Wobble', BWDEB_ROOT_AUTHOR_PRO),
                    'jello' => esc_html__('Jello', BWDEB_ROOT_AUTHOR_PRO),
                    'heartBeat' => esc_html__('HeartBeat', BWDEB_ROOT_AUTHOR_PRO),
                    'fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
                    'flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
                    'flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
                    'rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
                    'hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
                    'jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
                    'zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'   => 'bnone',
				'selectors'   => [
                    '{{WRAPPER}} .bwdps_photo_stack_item:hover img' => 'animation-name: {{value}}',
                ],
            ]
        );

		//hover animation_speed
		$this->add_control(
			'bwdps_hover_animation_speed',
			[
				'label'       => esc_html__('Hover Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdps_photo_stack_item img' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdps_photostack_common_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		//image-height
		$this->add_responsive_control(
			'bwdps_photostack_common_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'min-height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//overflow
		$this->add_responsive_control(
            'bwdps_photostack_overflow',
            [
                'label'     => esc_html__('Overflow', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
					'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
                    'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
                    'scroll'  => esc_html__('Scroll', BWDEB_ROOT_AUTHOR_PRO),
				],
                'default'   => 'visible',
                'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'overflow: {{VALUE}}',
				],
            ]
        );

		//alignment
		$this->add_responsive_control(
			'bwdps_photostack_alignment',
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdps_photostack_alignment' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//norlam-hover-tab-------------------------------------
		$this->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_comn',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdps_photostack_border-radius_comn',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_comn',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img',
			]
		);

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_hover_comn',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdps_photostack_border-radius_hover_comn',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_item img:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_hover_comn',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

  
	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		$bwdps_style_selection = $settings['bwdps_style_selection'];

        if ( ! empty( $settings['bwdps_photostack_image_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdps_photostack_image_link', $settings['bwdps_photostack_image_link'] );
		}
		if( 'style1' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_1 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
					<?php
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
					?>
						<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		} elseif( 'style2' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_2 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style3' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_3 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style4' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_4 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style5' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_5 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
					<?php
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
					?>
						<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		} elseif( 'style6' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_6 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style7' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_6 bwdps_photo_stack_7 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style8' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_8 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style9' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_9 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style10' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_10 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style11' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_11 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style12' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_12 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap <?php echo esc_attr( $settings['image_infinite_animation'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['bwdps_photostack_single_image']['url'] ); ?>);">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style13' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_13 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap <?php echo esc_attr( $settings['image_infinite_animation'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['bwdps_photostack_single_image']['url'] ); ?>);">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style14' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_2 bwdps_photo_stack_14 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style15' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_15 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap <?php echo esc_attr( $settings['image_infinite_animation'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['bwdps_photostack_single_image']['url'] ); ?>);">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style16' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_16 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
					<?php
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
					?>
						<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		} elseif( 'style17' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_17 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style18' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_18 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap <?php echo esc_attr( $settings['image_infinite_animation'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['bwdps_photostack_single_image']['url'] ); ?>);">
					<?php
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
					?>
						<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		} elseif( 'style19' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_19 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style20' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_19 bwdps_photo_stack_20 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-five-section'] ) {
						foreach (  $settings['bwdps-photostack-five-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		} elseif( 'style21' === $bwdps_style_selection ) { ?>
			<div class="bwdps_photo_stack_21 bwdps_photostack_alignment">
				<div class="bwdps_photo_stack_wrap">
				<?php
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_html( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		}

	}
}
