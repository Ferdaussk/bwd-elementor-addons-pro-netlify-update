<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function ha_escape_tags($tag, $default = 'span', $extra = []) {

	$supports = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div', 'span', 'p'];

	$supports = array_merge($supports, $extra);

	if (!in_array($tag, $supports, true)) {
		return $default;
	}

	return $tag;
}

class Probwdhtsx_TimelineSlider_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdhtsx-horizontal-slider-timeline', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Horizontal Timeline Slider', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdhtsx-TimelineSlider-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

		// content
		$this->__timeline_content_controls();
		$this->__settings_content_controls();

		// style
		$this->__timeline_style_controls();
		$this->__arrow_style_controls();
		$this->__content_style_controls();

	}

	/**
     * Register widget content controls
     */
	protected function __timeline_content_controls() {

		$this->start_controls_section(
			'_section_timeline',
			[
				'label' => __( 'Timeline', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'event_date',
			[
				'label' => __( 'Event Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Event Date', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'event_icon',
			[
				'label' => __('Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::ICONS,
				'label_block' => false,
				'skin' => 'inline',
				'separator' => 'after',
				'default' => [
					'value' => 'fas fa-calendar-alt',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'image',
			[
				'label' => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic' => [
					'active' => true,
				]
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail',
				'default' => 'medium',
				'exclude' => [
					'custom'
				]
			]
		);

		$repeater->add_control(
			'event_title',
			[
				'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Event Title', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'event_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '',
				],
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'event_subtitle',
			[
				'label' => __( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Event Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'event_description',
			[
				'label' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				// 'type' => \Elementor\Controls_Manager::TEXTAREA,
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'placeholder' => __( 'Event Description', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => __( 'Best Elementor Addons Plugin.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'custom_look',
			[
				'label' => __( 'Custom Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => __( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$repeater->add_control(
			'custom_event_icon_color',
			[
				'label' => __( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdhtsx-horizontal-timeline-icon-box .bwdhtsx-horizontal-timeline-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdhtsx-horizontal-timeline-icon-box .bwdhtsx-horizontal-timeline-icon svg' => 'color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'custom_event_icon_background_color',
			[
				'label' => __( 'Icon Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdhtsx-horizontal-timeline-icon-box .bwdhtsx-horizontal-timeline-icon' => 'background-color: {{VALUE}}'
				],
			]
		);


		$repeater->add_control(
			'custom_title_color',
			[
				'label' => __( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content .bwdhtsx-horizontal-timeline-title' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content .bwdhtsx-horizontal-timeline-title a' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'custom_link_hover_color',
			[
				'label' => __( 'Title Color Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content .bwdhtsx-horizontal-timeline-title a:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'custom_content_background_color',
			[
				'label' => __( 'Content Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-arrow:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-inner' => 'background-color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'custom_content_color',
			[
				'label' => __( 'Content Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'custom_look' => 'yes'
				],
				'selectors' => [
					// '{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content .bwdhtsx-horizontal-timeline-subtitle' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdhtsx-horizontal-timeline-block .bwdhtsx-horizontal-timeline-content .bwdhtsx-horizontal-timeline-description' => 'color: {{VALUE}}'
				],
			]
		);

		$this->add_control(
			'timeline',
			[
				'show_label' => false,
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ event_title }}}',
				'default' => [
					[
						'event_date' => 'Jan 01, 2021',
						'event_title' => __( 'Build beautiful websites', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'event_date' => 'Jan 02, 2021',
						'event_title' => __( 'Cross Domain Copy Paste', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'event_date' => 'Jan 03, 2021',
						'event_title' => __( 'CSS Transform', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'event_date' => 'Jan 04, 2021',
						'event_title' => __( 'Fast and Lightweight', BWDEB_ROOT_AUTHOR_PRO ),
					]
				],
			]
		);

		$this->end_controls_section();
	}
	protected function __settings_content_controls() {

		$this->start_controls_section(
			'_section_settings',
			[
				'label' => __( 'Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
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
			'content_alignment',
			[
				'label' => __( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors_dictionary' => [
					'left' => 'align-items: flex-start',
					'center' => 'align-items: center',
					'right' => 'align-items: flex-end',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-inner'  => '{{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'desc_content_alignment',
			[
				'label' => esc_html__( 'Desc Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => 'left',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-description' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'content_arrow',
			[
				'label' => __( 'Hide Content Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => __( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'animation_speed',
			[
				'label' => __( 'Animation Speed', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 100,
				'step' => 10,
				'max' => 10000,
				'default' => 800,
				'description' => __( 'Slide speed in milliseconds', BWDEB_ROOT_AUTHOR_PRO ),
				'frontend_available' => true,
				'render_type' => 'ui',
			]
		);

		$this->add_control(
			'autoplay_speed',
			[
				'label' => __( 'Autoplay Speed', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 100,
				'step' => 100,
				'max' => 10000,
				'default' => 3000,
				'description' => __( 'Autoplay speed in milliseconds', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'autoplay' => 'yes'
				],
				'frontend_available' => true,
				'render_type' => 'ui',
			]
		);

		$this->add_control(
			'loop',
			[
				'label' => __( 'Infinite Loop?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => __( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'frontend_available' => true,
				'render_type' => 'ui',
			]
		);

		$this->add_responsive_control(
			'slides_to_show',
			[
				'label' => __( 'Slides To Show', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					1 => __( '1 Slide', BWDEB_ROOT_AUTHOR_PRO ),
					2 => __( '2 Slides', BWDEB_ROOT_AUTHOR_PRO ),
					3 => __( '3 Slides', BWDEB_ROOT_AUTHOR_PRO ),
					4 => __( '4 Slides', BWDEB_ROOT_AUTHOR_PRO ),
					5 => __( '5 Slides', BWDEB_ROOT_AUTHOR_PRO ),
					6 => __( '6 Slides', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'desktop_default' => 3,
				'tablet_default' => 3,
				'mobile_default' => 2,
				'frontend_available' => true,
				'style_transfer' => true,
				'render_type' => 'ui',
			]
		);

		$this->add_control(
			'arrow_prev_icon',
			[
				'label' => __( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type' => \Elementor\Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fas fa-chevron-left',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'arrow_next_icon',
			[
				'label' => __( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type' => \Elementor\Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fas fa-chevron-right',
					'library' => 'fa-solid',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
     * Register widget style controls
     */
	protected function __timeline_style_controls() {

		$this->start_controls_section(
			'_section_style_timeline',
			[
				'label' => __( 'Timeline', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'line_heading',
			[
				'label' => __( 'Line', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_responsive_control(
			'line_spacing',
			[
				'label' => __( 'Thickness', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-tree' => 'height: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_control(
			'line_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-tree' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'date_heading',
			[
				'label' => __( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'date_spacing',
			[
				'label' => __( 'Left Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-date' => 'padding-left: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'date_typography',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-date',
			]
		);

		$this->add_control(
			'date_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-date' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_heading',
			[
				'label' => __( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'icon_background_size',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 80,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 2,
						'max' => 35,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon' => 'font-size: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'icon_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'icon_border',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon',
			]
		);

		$this->add_control(
			'event_icon_background_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'event_icon_color',
			[
				'label' => __( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-icon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}
	protected function __arrow_style_controls() {

		$this->start_controls_section(
			'_section_style_arrows',
			[
				'label' => __( 'Arrows', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'  => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'arrow_vertical_alignment',
			[
				'label' => __( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => -500,
						'max' => 1000,
					],
					'%' => [
						'min' => -30,
						'max' => 130,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'arrow_horizontal_align',
			[
				'label' => __( 'Horizontal Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => -500,
						'max' => 1000,
					],
					'%' => [
						'min' => -30,
						'max' => 130,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev' => 'left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdhtsx-slick-next' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'arrow_size',
			[
				'label' => __( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'arrow_border',
				'selector' => '{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next',
			]
		);

		$this->add_responsive_control(
			'arrow_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
				],
			]
		);

		$this->start_controls_tabs( '_tabs_arrow' );

		$this->start_controls_tab(
			'_tab_arrow_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'arrow_color',
			[
				'label' => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next' => 'color: {{VALUE}}!important;',
				],
			]
		);

		$this->add_control(
			'arrow_bg_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev, {{WRAPPER}} .bwdhtsx-slick-next' => 'background-color: {{VALUE}}!important;',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_arrow_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'arrow_hover_color',
			[
				'label' => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev:hover, {{WRAPPER}} .bwdhtsx-slick-next:hover' => 'color: {{VALUE}}!important;',
				],
			]
		);

		$this->add_control(
			'arrow_hover_bg_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev:hover, {{WRAPPER}} .bwdhtsx-slick-next:hover' => 'background-color: {{VALUE}}!important;',
				],
			]
		);

		$this->add_control(
			'arrow_hover_border_color',
			[
				'label' => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'arrow_border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-slick-prev:hover, {{WRAPPER}} .bwdhtsx-slick-next:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}
	protected function __content_style_controls() {

		$this->start_controls_section(
			'_section_content_style',
			[
				'label' => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'content_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// $this->add_responsive_control(
		//     'content_height',
		//     [
		//         'label' => __( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
		//         'type' => \Elementor\Controls_Manager::SLIDER,
		// 		'size_units' => ['px'],
		// 		'range' => [
		// 			'px' => [
		// 				'min' => 10,
		// 				'max' => 3000,
		// 			],
		// 		],
		//         'selectors' => [
		//             '{{WRAPPER}} .bwdhtsx-horizontal-timeline-content' => 'height: {{SIZE}}{{UNIT}};'
		//         ],
		//     ]
		// );

		$this->add_responsive_control(
			'content_padding',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-inner' => 'padding: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'content_space',
			[
				'label' => __( 'Space between contents', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-block' => 'padding: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'content_border',
				'label' => __( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-content, {{WRAPPER}} .bwdhtsx-horizontal-timeline-arrow',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'content_box_shadow',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-content, {{WRAPPER}} .bwdhtsx-horizontal-timeline-arrow',
			]
		);

		$this->add_control(
			'content_background_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-content' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-arrow::before' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-inner' => 'background-color: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'image_heading',
			[
				'label' => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'image_width',
			[
				'label' => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 3000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-image img' => 'width: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'image_height',
			[
				'label' => __( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 3000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-image img' => 'height: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'image_spacing',
			[
				'label' => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-image' => 'margin-bottom: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'image_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'image_box_shadow',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-image img',
			]
		);

		$this->add_control(
			'title_heading',
			[
				'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'title_spacing',
			[
				'label' => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-title' => 'margin-bottom: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-title' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-title a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'title_color_hover',
			[
				'label' => __( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-title a:hover' => 'color: {{VALUE}}',
				],
			]
		);


		$this->add_control(
			'subtitle_heading',
			[
				'label' => __( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'subtitle_spacing',
			[
				'label' => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-subtitle' => 'margin-bottom: {{SIZE}}{{UNIT}};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-subtitle',
			]
		);

		$this->add_control(
			'subtitle_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-subtitle' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'description_heading',
			[
				'label' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .bwdhtsx-horizontal-timeline-description',
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhtsx-horizontal-timeline-description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( empty( $settings['timeline'] ) ) {
			return;
		}
		

		$this->add_render_attribute( 'wrapper', 'class', 'bwdhtsx-horizontal-timeline-wrapper' );
		$this->add_render_attribute( 'wrapper', 'class', 'bwdhtsx-carousel' );
		?>
		<div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>

			<?php foreach ( $settings['timeline'] as $timeline ) : ?>
				<div class="bwdhtsx-horizontal-timeline-block elementor-repeater-item-<?php echo $timeline['_id']; ?>">
					<div class="bwdhtsx-horizontal-timeline-icon-box">

						<span class="bwdhtsx-horizontal-timeline-date"><?php echo esc_html( $timeline['event_date'] ); ?></span>

						<div class="bwdhtsx-horizontal-timeline-top-inner">
							<?php if ( $timeline['event_icon'] ) : ?>
								<div class="bwdhtsx-horizontal-timeline-icon">
									<?php \Elementor\Icons_Manager::render_icon( $timeline['event_icon'], ['aria-hidden' => 'true'] ); ?>
								</div>
							<?php endif; ?>
							<div class="bwdhtsx-horizontal-timeline-tree"></div>
						</div>
					</div>

					<div class="bwdhtsx-horizontal-timeline-content">

						<?php if ( $settings['content_arrow'] != 'yes' ) : ?>
							<div class="bwdhtsx-horizontal-timeline-arrow"></div>
						<?php endif; ?>

						<div class="bwdhtsx-horizontal-timeline-inner">
							<?php if ( ! empty( $timeline['image']['url'] ) ) : ?>
								
								<div class="bwdhtsx-horizontal-timeline-image">
									<?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $timeline, 'thumbnail', 'image' ); ?>
								</div>
							<?php endif; ?>

							<?php

								if ( ! empty( $timeline['event_link']['url'] ) ) {
									$this->add_link_attributes( 'event_link', $timeline['event_link'] );
									if ( $timeline['event_title'] ) {
										printf( '<%2$s class="bwdhtsx-horizontal-timeline-title"><a %1$s>%3$s</a></%2$s>',
											$this->get_render_attribute_string( 'event_link' ),
											ha_escape_tags( $settings['title_tag'], 'h2' ),
											esc_html( $timeline['event_title'] )
										);
									}
									$this->remove_render_attribute( 'event_link');
								}else{
								
									if ( $timeline['event_title'] ) {
										printf( '<%1$s class="bwdhtsx-horizontal-timeline-title">%2$s</%1$s>',
											ha_escape_tags( $settings['title_tag'], 'h2' ),
											esc_html( $timeline['event_title'] )
										);
									}
							}
							
							?>

							<?php if ( !empty( $timeline['event_subtitle'] ) ) : ?>
								<span class="bwdhtsx-horizontal-timeline-subtitle"><?php echo esc_html( $timeline['event_subtitle'] ); ?></span>
							<?php endif; ?>

							<?php
							if ($timeline['event_description']) {
								printf('<div class="bwdhtsx-horizontal-timeline-description">%s</div>', $this->parse_text_editor($timeline['event_description']));
							}
							?>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>

		<?php if ( ! empty( $settings['arrow_prev_icon']['value'] ) ) : ?>
			<button type="button" class="bwdhtsx-slick-prev"><?php \Elementor\Icons_Manager::render_icon( $settings['arrow_prev_icon'], ['aria-hidden' => 'true'] ); ?></button>
		<?php endif; ?>

		<?php if ( ! empty( $settings['arrow_next_icon']['value'] ) ) : ?>
			<button type="button" class="bwdhtsx-slick-next"><?php \Elementor\Icons_Manager::render_icon( $settings['arrow_next_icon'], ['aria-hidden' => 'true'] ); ?></button>
		<?php endif; ?>

		<?php
	}

}