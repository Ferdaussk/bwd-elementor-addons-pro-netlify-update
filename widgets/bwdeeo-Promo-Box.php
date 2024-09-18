<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdeeo_promobox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdeeo_promo_box', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Promo Box', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-price-tag bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdeeo_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'bwdeeo_style_selection',
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
				],
			]
		);
		$this->end_controls_section();



		//tab-content
		$this->start_controls_section(
			'bwdeeo_promobox_content_section',
			[
				'label' => esc_html__( 'Promo Box Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'bwdeeo_style_tabs'
		);

		//title tab------------------------
		$this->start_controls_tab(
			'style_title_tab',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bwdeeo_title_tab', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'BIG SALE' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		//sub title tab------------------------
		$this->start_controls_tab(
			'bwdeeo_style_sub_title_tab',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdeeo_sub_title_tab', [
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Limit offer' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		//event tab------------------------
		$this->start_controls_tab(
			'bwdeeo_style_event_tab',
			[
				'label' => esc_html__( 'Event', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdeeo_event_tab', [
				'label' => esc_html__( 'Event', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50% off' , BWDEB_ROOT_AUTHOR_PRO ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		//link-url
		$this->add_control(
			'bwdeeo_promobox_url',
			[
				'label' => esc_html__( 'Promo Box URL', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'URL Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_alignment',
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
					'{{WRAPPER}}.elementor-widget-bwdeeo_promo_box' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_section();



		//tab-content custom shape
		$this->start_controls_section(
			'bwdeeo_promobox_custom_shape',
			[
				'label' => esc_html__( 'Promo Box Custom Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//switcher Event Image----------------------------------
		$this->add_control(
			'bwdeeo_custom_shape_switcher',
			[
				'label' => esc_html__( 'Custom Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'bwdeeo_custom_shape_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdeeo_custom_shape_switcher' => 'yes',
				],
			]
		);

		$this->end_controls_section();



		//tab-style==================================
		$this->start_controls_section(
			'bwdeeo_promobox_style_section',
			[
				'label' => esc_html__( 'Promo Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'bwdeeo_promobox_style_tabs'
		);

		//tab-title-------------------------------------------
		$this->start_controls_tab(
			'style_pbtitle_tab',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdeeo_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_title' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_title_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdeeo_title',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_title_alignment',
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
					'{{WRAPPER}} .bwdeeo_title' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		//tab-sub-title-------------------------------------------
		$this->start_controls_tab(
			'bwdeeo_style_pbsub_title_tab',
			[
				'label' => esc_html__( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes'
				],
			]
		);

		$this->add_control(
			'bwdeeo_sub_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_offer' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_subtitle_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_offer',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_sub_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdeeo_offer',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_subtitle_alignment',
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
					'{{WRAPPER}} .bwdeeo_offer' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();
		
		//tab-event-------------------------------------------
		$this->start_controls_tab(
			'bwdeeo_style_pbevent_tab',
			[
				'label' => esc_html__( 'Event', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes'
				],
			]
		);

		//color
		$this->add_control(
			'bwdeeo_event_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_persent' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_event_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_persent',
			]
		);

		//text-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_event_text_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdeeo_persent',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_event_alignment',
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
					'{{WRAPPER}} .bwdeeo_persent' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();


		//tab-style
		$this->start_controls_section(
			'bwdeeo_promobox_image_style_section',
			[
				'label' => esc_html__( 'Promo Box Image & Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//title-image-heading
		$this->add_control(
			'bwdeeo_title_image_options',
			[
				'label' => esc_html__( 'Main Title & Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_image_Size',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 400,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_shape_1' => 'max-width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		//switcher Sub Title & Image----------------------------------
		$this->add_control(
			'bwdeeo_sub_image_switcher',
			[
				'label' => esc_html__( 'Sub Title & Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_sub_image_Size',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetY_top',
			[
				'label' => esc_html__( 'Image Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style6', 'style13', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style29', 'style30'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_right',
			[
				'label' => esc_html__( 'Image Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style5', 'style6', 'style7', 'style8', 'style10', 'style11', 'style12', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style29', 'style30', 'style31'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-bottom
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_bottom',
			[
				'label' => esc_html__( 'Image Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style7', 'style8', 'style10', 'style11', 'style12', 'style14', 'style23', 'style25', 'style27', 'style28', 'style31'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_left',
			[
				'label' => esc_html__( 'Image Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style13', 'style14', 'style26', 'style27', 'style28'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//switcher Event Image----------------------------------
		$this->add_control(
			'bwdeeo_event_image_switcher',
			[
				'label' => esc_html__( 'Event Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_event_image_Size',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetY_top',
			[
				'label' => esc_html__( 'Image Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style7', 'style8', 'style14', 'style23', 'style25', 'style27', 'style28', 'style31'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_right',
			[
				'label' => esc_html__( 'Image Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style7', 'style11', 'style13', 'style14', 'style15', 'style20', 'style23', 'style24', 'style27', 'style30', 'style31'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-bottom
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_bottom',
			[
				'label' => esc_html__( 'Image Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style6', 'style10', 'style11', 'style12', 'style13', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style29', 'style30'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_left',
			[
				'label' => esc_html__( 'Image Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style3', 'style6', 'style8', 'style10', 'style12', 'style16', 'style17', 'style18', 'style19', 'style21', 'style22', 'style25', 'style26', 'style28', 'style29'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		$this->end_controls_section();



		//extra shape---------------------------------
		$this->start_controls_section(
			'bwdeeo_promobox_shape_section',
			[
				'label' => esc_html__( 'Promo Box Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//switcher first shape----------------------------------
		$this->add_control(
			'bwdeeo_first_shape_switcher',
			[
				'label' => esc_html__( 'Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//first-shape-width
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_Size',
			[
				'label' => esc_html__( 'Shape Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetY_top',
			[
				'label' => esc_html__( 'Shape Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_first_shape' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style2', 'style3', 'style4', 'style13'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_right',
			[
				'label' => esc_html__( 'Shape Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_first_shape' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style3', 'style5', 'style6', 'style13'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-Y-bottom
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_bottom',
			[
				'label' => esc_html__( 'Shape Offset Y', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_first_shape' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style5', 'style6', 'style7', 'style8', 'style14', 'style15'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_left',
			[
				'label' => esc_html__( 'Shape Offset X', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_first_shape' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style2', 'style4', 'style7', 'style8', 'style14', 'style15'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);


		$this->end_controls_section();



		//custom shape---------------------------------
		$this->start_controls_section(
			'bwdeeo_promobox_custom_shape_section',
			[
				'label' => esc_html__( 'Promo Box custom Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdeeo_custom_shape_switcher' => 'yes',
				],
			]
		);

		//custom-shape-width
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_width_Size',
			[
				'label' => esc_html__( 'Shape Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-height
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_height_Size',
			[
				'label' => esc_html__( 'Shape Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-top
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_position_top',
			[
				'label' => esc_html__( 'Position Top', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-right
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_right',
			[
				'label' => esc_html__( 'Position Right', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-bottom
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_bottom',
			[
				'label' => esc_html__( 'Position Bottom', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-left
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_left',
			[
				'label' => esc_html__( 'Position Left', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
  
	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		if ( ! empty( $settings['bwdeeo_promobox_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdeeo_promobox_url', $settings['bwdeeo_promobox_url'] );
		}

		$bwdeeo_style_selection = $settings['bwdeeo_style_selection'];
		$bwdeeo_promobox_title = $settings['bwdeeo_title_tab'];
		$bwdeeo_promobox_sub_title = $settings['bwdeeo_sub_title_tab'];
		$bwdeeo_promobox_event = $settings['bwdeeo_event_tab'];
		$bwdeeo_eventImage_switcher = $settings['bwdeeo_event_image_switcher'];
		$bwdeeo_subImage_switcher = $settings['bwdeeo_sub_image_switcher'];
		$bwdeeo_first_shape_switcher = $settings['bwdeeo_first_shape_switcher'];
		$bwdeeo_custom_shape_switcher = $settings['bwdeeo_custom_shape_switcher'];


		if( 'style1' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_1 bwdeeo_inline_block">
				<a href="<?php echo esc_url( $settings['bwdeeo_promobox_url']['url'] ); ?>">
					<div class="bwdeeo_wraper_1">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_1/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_1/shape3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_1/img2.png', __FILE__);?>">
								<div class="bwdeeo_content_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style2' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_2 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_2">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_2/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
							<img src="<?php echo plugins_url('../assets/public/image/design_2/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_2/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_5 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_2/img5.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style3' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_3 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_3">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_3/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_3/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_3/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugin_dir_url( __FILE__ ).'../assets/public/image/design_3/img3.png' ?>" alt="">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
   			</div>
			<?php
		} elseif( 'style4' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_4 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_4">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_4/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_sub_persent bwdeeo_all_event_image">
								<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_4/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_4/img3.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style5' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_5 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_5">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_5/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_sub_offer bwdeeo_all_sub_image">
								<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_5/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_5/img3.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style6' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_6 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_6">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_6/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_6/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_6/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_6/img3.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style7' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_7 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_7">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_7/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_sub_persent bwdeeo_all_event_image">
								<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_7/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_7/img3.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style8' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_8 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_8">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_8/shape-1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_10/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent">
										<?php echo esc_html( $bwdeeo_promobox_event ); ?>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_8/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style9' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_8 bwdeeo_creative-design_9 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_8">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_9/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_10/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent">
										<?php echo esc_html( $bwdeeo_promobox_event ); ?>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_9/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style10' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_10 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_10">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_10/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_10/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_10/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style11' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_11 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_11">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_11/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_sub_offer bwdeeo_all_sub_image">
								<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_11/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style12' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_12 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_12">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_12/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_12/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_12/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_12/img4.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style13' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_13 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_13">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_13/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_13/shape4.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_13/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_13/img3.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style14' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_14 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_14">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_14/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_14/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_14/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_14/img4.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		} elseif( 'style15' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_15 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_15">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_15/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_15/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_14/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_first_shape">
								<img src="<?php echo plugins_url('../assets/public/image/design_15/img4.png', __FILE__);?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style16' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_16 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_16">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_16/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_16/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_14/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer">
										<?php echo esc_html( $bwdeeo_promobox_sub_title ); ?>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style17' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_17 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_17">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_17/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_17/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_17/shape3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style18' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_18 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_18">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_18/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_18/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_18/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style19' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_19 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_19">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_19/shape1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_19/shape2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>  
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_19/shape3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>         
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style20' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_20 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_20">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_20/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_20/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_20/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style21' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_21 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_21">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public//image/design_21/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_21/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_21/img4.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style22' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_22 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_22">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_22/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_22/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_5 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_22/img5.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style23' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_23 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_23">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_23/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_23/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_23/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style24' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_24 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_24">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_24/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_24/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_4 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_24/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style25' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_25 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_25">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_25/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_25/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_25/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style26' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_26 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_26">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_26/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_26/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_26/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style27' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_27 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_27">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_27/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_27/img5.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_27/img5.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style28' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_28 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_28">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_28/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_28/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_28/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style29' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_29 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_29">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_29/imgx.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_29/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_29/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style30' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_30 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_30">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_30/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_30/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_30/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style31' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_31 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_31">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo plugins_url('../assets/public/image/design_31/img1.png', __FILE__);?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_31/img2.png', __FILE__);?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
								<img src="<?php echo plugins_url('../assets/public/image/design_31/img3.png', __FILE__);?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		}

	}
}
