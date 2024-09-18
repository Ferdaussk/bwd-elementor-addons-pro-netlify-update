<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdis_imagestack extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdis_image_stack', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Image Stack Group', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-image-box bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdis_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'bwdis_style_selection',
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
					'style22' => esc_html__( 'Style 22', BWDEB_ROOT_AUTHOR_PRO ),
					'style23' => esc_html__( 'Style 23', BWDEB_ROOT_AUTHOR_PRO ),
					'style24' => esc_html__( 'Style 24', BWDEB_ROOT_AUTHOR_PRO ),
					'style25' => esc_html__( 'Style 25', BWDEB_ROOT_AUTHOR_PRO ),
					'style26' => esc_html__( 'Style 26', BWDEB_ROOT_AUTHOR_PRO ),
					'style27' => esc_html__( 'Style 27', BWDEB_ROOT_AUTHOR_PRO ),
					'style28' => esc_html__( 'Style 28', BWDEB_ROOT_AUTHOR_PRO ),
					'style29' => esc_html__( 'Style 29', BWDEB_ROOT_AUTHOR_PRO ),
					'style30' => esc_html__( 'Style 30', BWDEB_ROOT_AUTHOR_PRO ),
					'style31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
					'style32' => esc_html__( 'Style 32', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 33', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 34', BWDEB_ROOT_AUTHOR_PRO ),
					'style35' => esc_html__( 'Style 35', BWDEB_ROOT_AUTHOR_PRO ),
					'style36' => esc_html__( 'Style 36', BWDEB_ROOT_AUTHOR_PRO ),
					'style37' => esc_html__( 'Style 37', BWDEB_ROOT_AUTHOR_PRO ),
					'style38' => esc_html__( 'Style 38', BWDEB_ROOT_AUTHOR_PRO ),
					'style39' => esc_html__( 'Style 39', BWDEB_ROOT_AUTHOR_PRO ),
					'style40' => esc_html__( 'Style 40', BWDEB_ROOT_AUTHOR_PRO ),
					'style41' => esc_html__( 'Style 41', BWDEB_ROOT_AUTHOR_PRO ),
					'style42' => esc_html__( 'Style 42', BWDEB_ROOT_AUTHOR_PRO ),
					'style43' => esc_html__( 'Style 43', BWDEB_ROOT_AUTHOR_PRO ),
					'style44' => esc_html__( 'Style 44', BWDEB_ROOT_AUTHOR_PRO ),
					'style45' => esc_html__( 'Style 45', BWDEB_ROOT_AUTHOR_PRO ),
					'style46' => esc_html__( 'Style 46', BWDEB_ROOT_AUTHOR_PRO ),
					'style47' => esc_html__( 'Style 47', BWDEB_ROOT_AUTHOR_PRO ),
					'style48' => esc_html__( 'Style 48', BWDEB_ROOT_AUTHOR_PRO ),
					'style49' => esc_html__( 'Style 49', BWDEB_ROOT_AUTHOR_PRO ),
					'style50' => esc_html__( 'Style 50', BWDEB_ROOT_AUTHOR_PRO ),
					'style51' => esc_html__( 'Style 51', BWDEB_ROOT_AUTHOR_PRO ),
					'style52' => esc_html__( 'Style 52', BWDEB_ROOT_AUTHOR_PRO ),
					'style51' => esc_html__( 'Style 51', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();


        //image box reapeater
		$this->start_controls_section(
			'bwdis_image_stack_section',
			[
				'label' => esc_html__( 'Image Stack', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'bwdis_stack_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);

        //all masking image
		$repeater->add_control(
			'bwdis_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => esc_html__('Notice: if using [ Masking Effect ] then does not work [ ToolTip ]. Thank You', BWDEB_ROOT_AUTHOR_PRO),
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


        //extra hover amination
        $repeater->add_control(
            'bwdis_extra_hover_animation_style',
            [
                'label'     => esc_html__('Hover Animation', BWDEB_ROOT_AUTHOR_PRO),
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
                    '{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item:hover img' => 'animation-name: {{value}}',
                ],
            ]
        );

		//hover animation_speed
		$repeater->add_control(
			'bwdis_hover_animation_speed',
			[
				'label'       => esc_html__('Hover Animation speed', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item img' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

        //Image Object Opsition
		$repeater->add_control(
			'bwdis_image_object_opsition',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item img' => 'object-position: {{value}}',
                ],
			]
		);

        $repeater->add_control(
			'bwdis_image_stack_link',
			[
				'label' => esc_html__( 'Image URL', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Link URL Here', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

        $repeater->add_control(
			'bwdis_tooltip_switcher',
			[
				'label' => esc_html__( 'ToolTip', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before',
			]
		);

        $repeater->add_control(
			'bwdis_toltip_text',
            [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Tooltip Text' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Tooltip Position
		$repeater->add_control(
			'bwdis_tooltip_position',
			[
				'label' => esc_html__( 'Tooltip Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'top',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);
        $repeater->add_control(
			'bwdis_tooltip_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'color: {{VALUE}}',
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg_tooltip',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip::before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdis_tooltip_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //alignment
        $repeater->add_responsive_control(
            'bwdis_image_stack_tooltip_alignment',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'text-align: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
            ]
        );

        //tooltip-width
        $repeater->add_responsive_control(
			'bwdis_tooltip_width',
			[
				'label' => esc_html__( 'Tooltip Width', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => [
					'unit' => 'px',
					'size' => 130,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'min-width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_tooltip_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Border Radius
		$repeater->add_responsive_control(
			'bwdis_image_stack_border-radius_tooltip',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdis_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //padding
		$repeater->add_responsive_control(
			'bwdis_tooltip_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        $this->add_control(
			'bwdis_image_stack_repeater_section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdis_toltip_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdis_stack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdis_stack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdis_stack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdis_stack_image' => [
                            'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
                        ],
					],
				],
				'title_field' => '{{{ bwdis_toltip_text }}}',
			]
		);  

        $this->end_controls_section();



        //tab-style-image-stack
        $this->start_controls_section(
			'bwdis_image_stack_style',
			[
				'label' => esc_html__( 'Image Stack', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        //image-height-width
        $this->add_responsive_control(
            'bwdis_image_stack_Size',
            [
                'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
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
                'default' => [
					'unit' => 'px',
					'size' => 80,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //alignment
        $this->add_responsive_control(
            'bwdis_image_stack_alignment',
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
                    '{{WRAPPER}} .bwdis_text-align-center' => 'text-align: {{VALUE}}',
                ],
                'toggle' => true,
            ]
        );

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

        //image-height
        $this->add_control(
            'bwdis_image_stack_hight',
            [
                'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
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
                'default' => [
					'unit' => 'px',
					'size' => 170,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25' , 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style35','style36','style37','style38','style39','style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
            ]
        );

        //gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdis_img_item::before, {{WRAPPER}} .bwdis_img_item img',
				'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style32', 'style33','style34', 'style35','style36', 'style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
			]
		);

        //border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_image_stack_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img',
			]
		);

        //Border Radius
		$this->add_responsive_control(
			'bwdis_image_stack_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis_img_item img, {{WRAPPER}} .bwdis_img_item::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        //Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdis_box_shadow_image',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img',
				'separator' => 'before',
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

        //image-height
        $this->add_control(
            'bwdis_image_stack_hight_hover',
            [
                'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
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
                'default' => [
					'unit' => 'px',
					'size' => 130,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item:hover img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25' , 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style35','style36','style37','style38','style39','style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
            ]
        );

        //gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg_hover',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdis_img_item:hover::before',
				'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style27', 'style28', 'style29', 'style30', 'style32', 'style33','style34', 'style35','style36', 'style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
			]
		);

        //border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_image_stack_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img:hover',
			]
		);

        //Border Radius
		$this->add_responsive_control(
			'bwdis_image_stack_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis_img_item img, {{WRAPPER}} .bwdis_img_item::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();


	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		$bwdis_style_selection = $settings['bwdis_style_selection'];

        if ( ! empty( $settings['bwdis_image_stack_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdis_image_stack_link', $settings['bwdis_image_stack_link'] );
		}


		if( 'style1' === $bwdis_style_selection ) { ?>
			<div class="one bwdis_text-align-center">
                <div class="bwdis_image_stack_1 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                ?>
                    <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?> " href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
					<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                    </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style2' === $bwdis_style_selection ) { ?>
			<div class="two bwdis_text-align-center">
                <div class="bwdis_image_stack_2 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                ?>
                    <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
					<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                    </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style3' === $bwdis_style_selection ) { ?>
			<div class="three bwdis_text-align-center">
                <div class="bwdis_image_stack_3 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                ?>
                    <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
					<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                    </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style4' === $bwdis_style_selection ) { ?>
			<div class="four bwdis_text-align-center">
                <div class="bwdis_image_stack_4 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                ?>
                    <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
					<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                    </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style5' === $bwdis_style_selection ) { ?>
			<div class="five bwdis_text-align-center">
                <div class="bwdis_image_stack_5 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                ?>
                    <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
					<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                    </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style6' === $bwdis_style_selection ) { ?>
			<div class="six bwdis_text-align-center">
                <div class="bwdis_image_stack_6 bwdis_image_stack">
                    <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                    <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style7' === $bwdis_style_selection ) { ?>
			<div class="seven bwdis_text-align-center">
                <div class="bwdis_image_stack_7 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style8' === $bwdis_style_selection ) { ?>
			<div class="eight bwdis_text-align-center">
                <div class="bwdis_image_stack_8 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style9' === $bwdis_style_selection ) { ?>
			<div class="nine bwdis_text-align-center">
                <div class="bwdis_image_stack_9 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style10' === $bwdis_style_selection ) { ?>
			<div class="ten bwdis_text-align-center">
                <div class="bwdis_image_stack_10 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style11' === $bwdis_style_selection ) { ?>
			<div class="eleven bwdis_text-align-center">
                <div class="bwdis_image_stack_11 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style12' === $bwdis_style_selection ) { ?>
			<div class="twelve bwdis_text-align-center">
                <div class="bwdis_image_stack_12 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style13' === $bwdis_style_selection ) { ?>
			<div class="thirteen bwdis_text-align-center">
                <div class="bwdis_image_stack_13 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style14' === $bwdis_style_selection ) { ?>
			<div class="fourteen bwdis_text-align-center">
                <div class="bwdis_image_stack_14 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style15' === $bwdis_style_selection ) { ?>
			<div class="fifteen bwdis_text-align-center">
                <div class="bwdis_image_stack_15 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style16' === $bwdis_style_selection ) { ?>
			<div class="sixteen bwdis_text-align-center">
                <div class="bwdis_image_stack_16 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style17' === $bwdis_style_selection ) { ?>
			<div class="seventeen bwdis_text-align-center">
                <div class="bwdis_image_stack_17 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style18' === $bwdis_style_selection ) { ?>
			<div class="eightteen bwdis_text-align-center">
                <div class="bwdis_image_stack_18 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style19' === $bwdis_style_selection ) { ?>
			<div class="ninetteen bwdis_text-align-center">
                <div class="bwdis_image_stack_19 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style20' === $bwdis_style_selection ) { ?>
			<div class="twenty bwdis_text-align-center">
                <div class="bwdis_image_stack_20 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style21' === $bwdis_style_selection ) { ?>
			<div class="twenty_one bwdis_text-align-center">
                <div class="bwdis_image_stack_21 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style22' === $bwdis_style_selection ) { ?>
			<div class="twenty_two bwdis_text-align-center">
                <div class="bwdis_image_stack_22 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style23' === $bwdis_style_selection ) { ?>
			<div class="twenty_three bwdis_text-align-center">
                <div class="bwdis_image_stack_23 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style24' === $bwdis_style_selection ) { ?>
			<div class="twenty_four bwdis_text-align-center">
                <div class="bwdis_image_stack_24 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style25' === $bwdis_style_selection ) { ?>
			<div class="twenty_five bwdis_text-align-center">
                <div class="bwdis_image_stack_25 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style26' === $bwdis_style_selection ) { ?>
			<div class="twenty_six bwdis_text-align-center">
                <div class="bwdis_image_stack_26 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style27' === $bwdis_style_selection ) { ?>
			<div class="twenty_seven bwdis_text-align-center">
                <div class="bwdis_image_stack_27 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style28' === $bwdis_style_selection ) { ?>
			<div class="twenty_eight bwdis_text-align-center">
                <div class="bwdis_image_stack_28 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style29' === $bwdis_style_selection ) { ?>
			<div class="twenty_nine bwdis_text-align-center">
                <div class="bwdis_image_stack_29 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style30' === $bwdis_style_selection ) { ?>
			<div class="thirtee bwdis_text-align-center">
                <div class="bwdis_image_stack_30 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style31' === $bwdis_style_selection ) { ?>
			<div class="thirtee_one bwdis_text-align-center">
                <div class="bwdis_image_stack_31 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style32' === $bwdis_style_selection ) { ?>
			<div class="thirtee_two bwdis_text-align-center">
                <div class="bwdis_image_stack_32 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style33' === $bwdis_style_selection ) { ?>
			<div class="thirtee_three bwdis_text-align-center">
                <div class="bwdis_image_stack_33 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style34' === $bwdis_style_selection ) { ?>
			<div class="thirtee_four bwdis_text-align-center">
                <div class="bwdis_image_stack_34 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style35' === $bwdis_style_selection ) { ?>
			<div class="thirtee_five bwdis_text-align-center">
                <div class="bwdis_image_stack_35 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style36' === $bwdis_style_selection ) { ?>
			<div class="thirtee_six bwdis_text-align-center">
                <div class="bwdis_image_stack_36 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style37' === $bwdis_style_selection ) { ?>
			<div class="thirtee_seven bwdis_text-align-center">
                <div class="bwdis_image_stack_37 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style38' === $bwdis_style_selection ) { ?>
			<div class="thirtee_eight bwdis_text-align-center">
                <div class="bwdis_image_stack_38 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style39' === $bwdis_style_selection ) { ?>
			<div class="thirtee_nine bwdis_text-align-center">
                <div class="bwdis_image_stack_39 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style40' === $bwdis_style_selection ) { ?>
			 <div class="forty bwdis_text-align-center">
                <div class="bwdis_image_stack_40 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style41' === $bwdis_style_selection ) { ?>
			<div class="forty_one bwdis_text-align-center">
                <div class="bwdis_image_stack_41 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style42' === $bwdis_style_selection ) { ?>
			<div class="forty_two bwdis_text-align-center">
                <div class="bwdis_image_stack_42 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style43' === $bwdis_style_selection ) { ?>
			<div class="forty_three bwdis_text-align-center">
                <div class="bwdis_image_stack_43 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style44' === $bwdis_style_selection ) { ?>
			<div class="forty_four bwdis_text-align-center">
                <div class="bwdis_image_stack_44 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style45' === $bwdis_style_selection ) { ?>
			<div class="forty_five bwdis_text-align-center">
                <div class="bwdis_image_stack_45 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style46' === $bwdis_style_selection ) { ?>
			<div class="forty_six bwdis_text-align-center">
                <div class="bwdis_image_stack_46 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip"><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style47' === $bwdis_style_selection ) { ?>
			<div class="forty_seven bwdis_text-align-center">
                <div class="bwdis_image_stack_47 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip"><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style48' === $bwdis_style_selection ) { ?>
			<div class="forty_eight bwdis_text-align-center">
                <div class="bwdis_image_stack_48 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip"><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style49' === $bwdis_style_selection ) { ?>
			<div class="forty_eight bwdis_text-align-center">
                <div class="bwdis_image_stack_49 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip"><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style50' === $bwdis_style_selection ) { ?>
			<div class="fifty bwdis_text-align-center">
                <div class="bwdis_image_stack_50 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip"><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style51' === $bwdis_style_selection ) { ?>
			<div class="fifty bwdis_text-align-center">
                <div class="bwdis_image_stack_51 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		} elseif( 'style52' === $bwdis_style_selection ) { ?>
			<div class="fifty_one bwdis_text-align-center">
                <div class="bwdis_image_stack_52 bwdis_image_stack">
                <?php
                    if ( $settings['bwdis_image_stack_repeater_section'] ) {
                        foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
                    ?>
                        <a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $item['bwdis_maskink_image'] ); ?>" href="<?php echo $item['bwdis_image_stack_link']['url'] ?>">
                        <?php
                    $tooltip = $item['bwdis_tooltip_position'];
                    if( 'left' === $tooltip) {
                        $variable = 'left';
                    } else if( 'top' === $tooltip){
                        $variable = 'top';
                    } else if( 'right' === $tooltip){
                        $variable = 'right';
                    } else if( 'bottom' === $tooltip){
                        $variable = 'bottom';
                    } 
                    if( $item['bwdis_tooltip_switcher'] === 'yes' ){
                    ?>
                    <div class="bwdis_tooltip <?php echo $variable ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
                    </div>
                    <?php }?>
                        <img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
                        </a>
                    <?php } }?>
                </div>
            </div>
			<?php
		}

	}
}
