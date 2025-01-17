<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDModalPopupWidget extends Widget_Base {

	public function get_name() {
		return esc_html__('bwdmp_Modal_Popup', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Popup', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-lightbox-expand';
	}
	
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'modal', 'Modal','bwd-modal-popup','popup','modal-popup'];
	}
	public function select_elementor_page( $type ) {
		$args  = [
			'bwdmp_tax_query'      => [
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
		$this->start_controls_section(
			'bwdmp_modal_popup_basic_settings',
			[
				'label' => esc_html__( 'Presets', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//popup type
		$this->add_control(
			'bwdmp_modal_popup_type_selection',
			[
				'label' => esc_html__( 'Popup Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'modal_popup',
				'options' => [
					'modal_popup' => esc_html__( 'Modal Popup', BWDEB_ROOT_AUTHOR_PRO ),
					'corner_box' => esc_html__( 'Corner box', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// popup direction
		$this->add_control(
			'bwdmp_modal_popup_direction',
			[
				'label' => esc_html__( 'Open Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'top_left',
				'options' => [
					'top_left' => esc_html__( 'Top Left', BWDEB_ROOT_AUTHOR_PRO ),
					'top_center' => esc_html__( 'Top Center', BWDEB_ROOT_AUTHOR_PRO ),
					'top_right' => esc_html__( 'Top Right', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'center' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom_left' => esc_html__( 'Bottom Left', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom_center' => esc_html__( 'Bottom Center', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom_right' => esc_html__( 'Bottom Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdmp_modal_popup_type_selection' => 'modal_popup',
				],
			]
		);

		//corner box direction
		$this->add_control(
			'bwdmp_modal_popup_corner_box_direction',
			[
				'label' => esc_html__( 'Open Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'corner_top_left',
				'options' => [
					'corner_top_left' => esc_html__( 'Top Left', BWDEB_ROOT_AUTHOR_PRO ),
					'corner_top_right' => esc_html__( 'Top Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdmp_modal_popup_type_selection' => 'corner_box',
				]
			]
		);
		//modal height
		$this->add_responsive_control(
			'bwdmp_modal_popup_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 800,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//modal width
		$this->add_responsive_control(
			'bwdmp_modal_popup_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal' => 'width: {{SIZE}}{{UNIT}};',
				]
			]
		);
		$this->end_controls_section();
		//modal content section 
		$this->start_controls_section(
			'bwdmp_modal_popup_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//content type
		$this->add_control(
			'bwdmp_modal_popup_content_type',
			[
				'label' => esc_html__( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'content',
				'options' => [
					'template' => esc_html__( 'Template', BWDEB_ROOT_AUTHOR_PRO ),
					'content' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				]
			]
		);
	
		$saved_primary_sections = ['0' => __( 'Choose Section', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_primary_sections = $saved_primary_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdmp_saved_section',
			[
				'label'     => __( 'Sections', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_primary_sections,
				'default'   => '0',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'template',
				],
			]
		);

		//saved template end
		//header switcher
		$this->add_control(
			'bwdmp_modal_popup_header_switch',
			[
				'label' => esc_html__( 'Show Header ?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header title
		$this->add_control(
			'bwdmp_modal_popup_header_title',
			[
				'label' => esc_html__( 'Header Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Modal Popup Header', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' =>true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		// modal body====================
		//img switcher
		$this->add_control(
			'bwdmp_modal_popup_img_switch',
			[
				'label' => esc_html__( 'Show Image ?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//img
		$this->add_control(
			'bwdmp_modal_popup_img',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content title
		$this->add_control(
			'bwdmp_modal_popup_content_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Awesome For Modal Box', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' =>true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content description
		$this->add_control(
			'bwdmp_modal_popup_content_desc',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 8,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates itaque praesentium facilis ', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
				]
			]
		);
		//content button switcher
		$this->add_control(
			'bwdmp_modal_popup_content_button',
			[
				'label' => esc_html__( 'Show Button ?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				],
				'separator' =>'before'
			]
		);
		//content button text
		$this->add_control(
			'bwdmp_modal_popup_content_button_text',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Read More', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//button link
		$this->add_control(
			'bwdmp_modal_popup_content_button_link',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//popup shower button type
		$this->add_control(
			'bwdmp_modal_popup_button_type',
			[
				'label' => esc_html__( 'Popup Shower Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom_button',
				'options' => [
					'custom_button' => esc_html__( 'Call To Action', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'hidden' => esc_html__( 'Hidden', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'label_block' =>true,
				'separator' =>'before'
			]
		);
		//shower button text
		$this->add_control(
			'bwdmp_modal_popup_button_text',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//shower icon type
		$this->add_control(
			'bwdmp_modal_popup_icon',
			[
				'label' => esc_html__( 'Popup Shower Icon Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'styled_icon',
				'options' => [
					'styled_icon' => esc_html__( 'Styled Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'custom' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'label_block' =>true,
				'separator' =>'before',
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon'
				]
			]
		);
		$this->add_control(
			'bwdmp_modal_popup_custom_icon_control',
			[
				'label' => esc_html__( 'Choose Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-bars',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
					'bwdmp_modal_popup_icon' => 'custom'
				]
			]
		);
		//shower styled icon size
		$this->add_control(
			'bwdmp_modal_popup_icon_size',
			[
				'label' => esc_html__( 'Icon Box Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
				]
			]
		);
		//shower styled icon padding
		$this->add_control(
			'bwdmp_modal_popup_icon_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px','em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
				]
			]
		);
		//shower styled border radius 
		$this->add_control(
			'bwdmp_modal_popup_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px','em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
				]
			]
		);

		//shower custom icon size
		$this->add_control(
			'bwdmp_modal_popup_custom_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
					'bwdmp_modal_popup_icon' => 'custom'
				]
			]
		);
		//shower custom icon color
		$this->add_control(
			'bwdmp_modal_popup_custom_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'icon',
					'bwdmp_modal_popup_icon' => 'custom'
				]
			]
		);

		$this->end_controls_section();
		//display options section
		$this->start_controls_section(
			'bwdmp_modal_display_options_section',
			[
				'label' => esc_html__( 'Display Options', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// on page load switcher
		$this->add_control(
			'bwdmp_modal_page_load_trigger',
			[
				'label' => esc_html__( 'On Page Load', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Disable', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes'
			]
		);
		// on scroll
		$this->add_control(
			'bwdmp_modal_scroll_trigger',
			[
				'label' => esc_html__( 'On Scroll', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Disable', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes'
			]
		);
		//scroll offset if on scroll enable
		$this->add_control(
			'bwdmp_modal_scroll_offset',
			[
				'label' => esc_html__( 'Scroll Offset (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 2000,
				'step' => 1,
				'default' =>200,
				'condition' => [
					'bwdmp_modal_scroll_trigger' => 'yes'
				],
			]
		);
		// on exit inlet
		$this->add_control(
			'bwdmp_modal_exit_inlet_trigger',
			[
				'label' => esc_html__( 'On Exit Inlet', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Disable', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes'
			]
		);
		// After Inactivity
		$this->add_control(
			'bwdmp_modal_after_inactivity_trigger',
			[
				'label' => esc_html__( 'After Inactivity', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Disable', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes'
			]
		);
		// Inactivity Timeout (ms)
		$this->add_control(
			'bwdmp_modal_after_inactivity_timeout',
			[
				'label' => esc_html__( 'Inactivity Timeout (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 100,
				'max' => 50000,
				'step' => 1,
				'default' => 5000,
				'condition' => [
					'bwdmp_modal_after_inactivity_trigger' => 'yes'
				],
			]
		);

		$this->end_controls_section();
		// style tab start
		// modal popup section
		$this->start_controls_section(
			'bwdmp_modal_popup_box_style',
			[
				'label' => esc_html__( 'Popup Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//box content alignment
		$this->add_control(
			'bwdmp_modal_popup_box_content_align',
			[
				'label' => esc_html__( 'Justify Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Start', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-justify-start-v',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-justify-center-v',
					],
					'space-between' => [
						'title' => esc_html__( 'Space-Between', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-justify-space-between-v',
					],
					'flex-end' => [
						'title' => esc_html__( 'End', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-justify-end-v',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//box padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		// box bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmp_modal_popup_box_bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		// box border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdmp_modal_popup_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//box border-radius
		$this->add_responsive_control(
			'bwdmp_modal_popup_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//box box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => '_bwdmp_modal_popup_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal',
			]
		);
		$this->end_controls_section();
		// header section
		$this->start_controls_section(
			'bwdmp_modal_popup_header_style',
			[
				'label' => esc_html__( 'Popup Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_header_switch' => 'yes'
				]
			]
		);
		//header text typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdmp_modal_popup_header_typo',
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-header-modal-title',
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header text alignment
		$this->add_responsive_control(
			'bwdmp_modal_popup_header_title_alignment',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-header-modal-title' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header text color
		$this->add_control(
			'bwdmp_modal_popup_header_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-header-modal-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdmp_modal_popup_header_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-header',
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header bg color
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmp_modal_popup_header_title_bg_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-header',
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header margin
		$this->add_responsive_control(
			'bwdmp_modal_popup_header_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//header padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_header_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_header_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		//popup body 
		$this->start_controls_section(
			'bwdmp_modal_popup_body',
			[
				'label' => esc_html__( 'Popup Body', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		// content direction
		$this->add_control(
			'bwdmp_modal_popup_body_content_dir',
			[
				'label' => esc_html__( 'Content Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'column'  => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'row'  => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-body' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//body  bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmp_modal_popup_body_bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-body',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//body padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_body_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		// img section
		$this->start_controls_section(
			'bwdmp_modal_popup_img_style',
			[
				'label' => esc_html__( 'Popup Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		// img align
		$this->add_control(
			'bwdmp_modal_popup_img_align',
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
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_body_content_dir' => 'column'
				]
			]
		);
		//img height
		$this->add_responsive_control(
			'bwdmp_modal_popup_img_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px','%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 800,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img img' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//img width
		$this->add_responsive_control(
			'bwdmp_modal_popup_img_width',
			[
				'label' => esc_html__( 'Image Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px','%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 800,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//img padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_img_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//img border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdmp_modal_popup_img_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img',
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//img border-radius
		$this->add_responsive_control(
			'bwdmp_modal_popup_img_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdmp_modal_popup_img_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-img',
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		// content section
		$this->start_controls_section(
			'bwdmp_modal_popup_content_styles',
			[
				'label' => esc_html__( 'Popup Content Box', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content box bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmp_modal_popup_content_box_bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-content',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content box width
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_box_width',
			[
				'label' => esc_html__( 'Content Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px','%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 800,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-content' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content box padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_box_padding',
			[
				'label' => esc_html__( 'Content Box Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content box margin
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_box_margin',
			[
				'label' => esc_html__( 'Content Box Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_img_switch' => 'yes',
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		// title section
		$this->start_controls_section(
			'bwdmp_modal_popup_content_title_style',
			[
				'label' => esc_html__( 'Popup Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content title typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdmp_modal_popup_content_title_typo',
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-heading-title',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content title alignment
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_title_alignment',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-heading-title' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content title margin
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-heading-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content title color
		$this->add_control(
			'bwdmp_modal_popup_content_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-heading-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		// desc section
		$this->start_controls_section(
			'bwdmp_modal_popup_content_desc_style',
			[
				'label' => esc_html__( 'Popup Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content desc typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdmp_modal_popup_content_desc_typo',
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-desc',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content desc alignment
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_desc_alignment',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-desc' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content desc margin
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_desc_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		//content desc color
		$this->add_control(
			'bwdmp_modal_popup_content_desc_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-modal-desc' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content'
				]
			]
		);
		$this->end_controls_section();
		//content button section
		$this->start_controls_section(
			'bwdmp_modal_popup_content_Button',
			[
				'label' => esc_html__( 'Popup Content Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button font size
		$this->add_control(
			'bwdmp_modal_popup_content_button_font_size',
			[
				'label' => esc_html__( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 50,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button alignment
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_button_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-content-btn-wrapper' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button color
		$this->add_control(
			'bwdmp_modal_popup_content_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button bg color
		$this->add_control(
			'bwdmp_modal_popup_content_button_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdmp_modal_popup_content_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button margin
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-content-btn-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content border radius
		$this->add_responsive_control(
			'bwdmp_modal_popup_content_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		//content button box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdmp_modal_popup_content_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-modal-wrapper .bwdmp-read-more-btn',
				'condition' => [
					'bwdmp_modal_popup_content_type' => 'content',
					'bwdmp_modal_popup_content_button' => 'yes'
				]
			]
		);
		$this->end_controls_section();
		// popup shower button styles
		$this->start_controls_section(
			'bwdmp_modal_popup_shower_Button',
			[
				'label' => esc_html__( 'Popup Shower Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button font size
		$this->add_control(
			'bwdmp_modal_popup_shower_button_font_size',
			[
				'label' => esc_html__( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 50,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button alignment
		$this->add_responsive_control(
			'bwdmp_modal_popup_shower_button_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type!' => 'hidden'
				]
			]
		);
		//shower button shower button border color
		$this->add_control(
			'bwdmp_modal_popup_shower_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button bg color
		$this->add_control(
			'bwdmp_modal_popup_shower_button_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdmp_modal_popup_shower_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn',
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button padding
		$this->add_responsive_control(
			'bwdmp_modal_popup_shower_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower border radius
		$this->add_responsive_control(
			'bwdmp_modal_popup_shower_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		//shower button box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdmp_modal_popup_shower_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdmp-popup-btn-wrapper .bwdmp-popup-btn',
				'condition' => [
					'bwdmp_modal_popup_button_type' => 'custom_button'
				]
			]
		);
		$this->end_controls_section();
    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_type = $settings['bwdmp_modal_popup_type_selection'];
		$content_type = $settings['bwdmp_modal_popup_content_type'];


		$load_t = $settings['bwdmp_modal_page_load_trigger'];
		$inlet_t = $settings['bwdmp_modal_exit_inlet_trigger'];

		if( 'content' === $content_type){
			if('yes' === $settings['bwdmp_modal_popup_header_switch']){
				$header_active =' bwdmp-active-header';
			}
			if('yes' === $settings['bwdmp_modal_popup_img_switch']){
				$img_active =' bwdmp-active-img';
			}
			if('yes' === $settings['bwdmp_modal_popup_content_button']){
				$btn_active =' active-modal-btn';
			}
		}
		
		if('modal_popup' === $chosen_type){
			$popup_dir = $settings['bwdmp_modal_popup_direction'];
		}else if( 'corner_box' === $chosen_type){
			$corner_box = $chosen_type;
			$popup_dir = $settings['bwdmp_modal_popup_corner_box_direction'];
		}

		if('yes' ===  $settings['bwdmp_modal_scroll_trigger']){
			$scroll_offset = $settings['bwdmp_modal_scroll_offset'];
		}
		if('yes' ===  $settings['bwdmp_modal_after_inactivity_trigger']){
			$inactivity_timeout = $settings['bwdmp_modal_after_inactivity_timeout'];
		}

		//popup shower button
		?>		
	<div class="bwdmp-modalxo bwdmp-slider-common">
		<div class="bwdmp-popup-btn-wrapper">
				<?php  
				if('custom_button' === $settings['bwdmp_modal_popup_button_type']){
					?>
						<div class="bwdmp-popup-btn bwdmp-popup-swr-btn">
							<?php echo esc_html($settings['bwdmp_modal_popup_button_text'] );  ?>
						</div>
					<?php 
				}else if('icon' === $settings['bwdmp_modal_popup_button_type']){

					if('styled_icon' === $settings['bwdmp_modal_popup_icon']){
						?>
							<div class="bwdmp-popup-icon bwdmp-popup-swr-btn">
								<span></span>
								<span></span>
								<span></span>
							</div>
						<?php 
					}else if('custom' === $settings['bwdmp_modal_popup_icon']){
						?>
							<div class="bwdmp-popup-icon bwdmp-popup-swr-btn bwdmp-popup-swr-custom">
								<i class="<?php echo esc_attr__($settings['bwdmp_modal_popup_custom_icon_control']['value'] )?>"></i>
							</div>
						<?php 
					}
				}else{
					$shower_btn_wrap = ' bwdmp-shower-wrap';
				}
				?>
		</div>
		
		<!-- modal box -->
        <div class="bwdmp-modal-wrapper"
			data-popup-dir ="<?php echo esc_attr( $popup_dir) ?>"
			data-load="<?php echo esc_attr( $load_t) ?>"
			data-inlet="<?php echo esc_attr( $inlet_t) ?>"
			data-scroll-offset="<?php if(!empty($scroll_offset)){ echo esc_attr( $scroll_offset) ; } ?>"
			data-inactivity ="<?php if(!empty($inactivity_timeout)){ echo esc_attr( $inactivity_timeout) ; } ?>"
			>
            <div class="bwdmp-modal <?php if(!empty($corner_box)){ echo esc_attr($corner_box );};?>">
			<?php
				if('template' ===  $content_type  ){
					echo bwdeb_save_plugin()->frontend->get_builder_content_for_display( $settings['bwdmp_saved_section'] );?>
					<div class="bwdmp-modal-close-btn"><i class="fas fa-times"></i></div>

				<?php } else if('content' ===  $content_type ){
					?>
					<div class="bwdmp-modal-header<?php if(!empty($header_active)){echo esc_attr($header_active );}?>">
						<div class="bwdmp-header-modal-title">
							<?php echo esc_html($settings['bwdmp_modal_popup_header_title'] );?>
						</div>
					</div>
					<div class="bwdmp-modal-body">
						<div class="bwdmp-modal-img <?php if(!empty($img_active)){echo esc_attr($img_active );}?>">
							<img src="<?php echo esc_url($settings['bwdmp_modal_popup_img']['url'] ); ?>" alt="Modal img">
						</div>
						<div class="bwdmp-modal-content">
							<div class="bwdmp-modal-heading-title">
								<?php echo esc_html($settings['bwdmp_modal_popup_content_title'] ) ?>
							</div>
							<p class="bwdmp-modal-desc">
								<?php echo esc_html($settings['bwdmp_modal_popup_content_desc'] ) ?>
							</p>
							<div class="bwdmp-content-btn-wrapper <?php if(!empty($btn_active)){echo esc_attr($btn_active );}?>">
								<a href="<?php echo esc_url($settings['bwdmp_modal_popup_content_button_link']['url'] ); ?>" class="bwdmp-read-more-btn"> 
									<?php echo esc_html($settings['bwdmp_modal_popup_content_button_text'] ); ?>
								</a>
							</div>
						</div>
					</div>
					<div class="bwdmp-modal-close-btn"><i class="fas fa-times"></i></div>
					<?php
				}
			?>
            </div>
			<div class="bwdmp-overlay"></div>
        </div>
	</div>
		<?php
	}
}




