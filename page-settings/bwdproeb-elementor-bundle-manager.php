<?php
namespace BWDElementorBundlePro\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;
// For Notation
use Elementor\Repeater;
// For Cursor effect
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
// For Tile Scroll
use Elementor\Group_Control_Box_Shadow;
// xd  copy
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {
	static $bwdproeb_live_copy_should_script_enqueue = false;

    private static $_instance = null;

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function get_name() {
        return 'bwdproeb-threed-text';
    }

    // For tooltip
	public function bwdproeb_tooltip_register_section($element) {
		$element->start_controls_section(
			'section_bwdproeb_tooltip_controls',
			[
				'tab'   => Controls_Manager::TAB_ADVANCED,
				'label' => esc_html__('BWD Tooltip', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
		$element->end_controls_section();
	}

	public function bwdproeb_tooltip_register_controls($widget, $args) {

		$widget->add_control(
			'bwdproeb_widget_tooltip',
			[
				'label'              => esc_html__('Use Tooltip?', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'label_on'           => esc_html__('Yes', BWDEB_ROOT_AUTHOR_PRO),
				'label_off'          => esc_html__('No', BWDEB_ROOT_AUTHOR_PRO),
				'render_type'        => 'template',
				'frontend_available' => true,
			]
		);

		$widget->start_controls_tabs('bwdproeb_widget_tooltip_tabs');

		$widget->start_controls_tab(
			'bwdproeb_widget_tooltip_settings_tab',
			[
				'label'     => esc_html__('Settings', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_text',
			[
				'label'              => esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::TEXTAREA,
				'default'            => 'This is Tooltip',
				'dynamic'            => ['active' => true],
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_placement',
			[
				'label'              => esc_html__('Placement', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SELECT,
				'default'            => '',
				'options'            => [
					'' => esc_html__('Top (Default)', BWDEB_ROOT_AUTHOR_PRO),

					'top-start' => esc_html__('Top Start', BWDEB_ROOT_AUTHOR_PRO),
					'top-end'   => esc_html__('Top End', BWDEB_ROOT_AUTHOR_PRO),

					'right'       => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
					'right-start' => esc_html__('Right Start', BWDEB_ROOT_AUTHOR_PRO),
					'right-end'   => esc_html__('Right End', BWDEB_ROOT_AUTHOR_PRO),

					'bottom'       => esc_html__('Bottom', BWDEB_ROOT_AUTHOR_PRO),
					'bottom-start' => esc_html__('Bottom Start', BWDEB_ROOT_AUTHOR_PRO),
					'bottom-end'   => esc_html__('Bottom End', BWDEB_ROOT_AUTHOR_PRO),

					'left'       => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
					'left-start' => esc_html__('Left Start', BWDEB_ROOT_AUTHOR_PRO),
					'left-end'   => esc_html__('Left End', BWDEB_ROOT_AUTHOR_PRO),

					'auto'       => esc_html__('Auto', BWDEB_ROOT_AUTHOR_PRO),
					'auto-start' => esc_html__('Auto Start', BWDEB_ROOT_AUTHOR_PRO),
					'auto-end'   => esc_html__('Auto End', BWDEB_ROOT_AUTHOR_PRO),
				],
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip'               => 'yes',
					'bwdproeb_widget_tooltip_follow_cursor' => ''
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_follow_cursor',
			[
				'label'              => esc_html__('Follow Cursor', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip'               => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_animation',
			[
				'label'              => esc_html__('Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SELECT,
				'default'            => '',
				'options'            => [
					'none'         => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					''             => esc_html__('Fade', BWDEB_ROOT_AUTHOR_PRO),
					'shift-away'   => esc_html__('Shift-Away', BWDEB_ROOT_AUTHOR_PRO),
					'shift-toward' => esc_html__('Shift-Toward', BWDEB_ROOT_AUTHOR_PRO),
					'scale'        => esc_html__('Scale', BWDEB_ROOT_AUTHOR_PRO),
					'perspective'  => esc_html__('Perspective', BWDEB_ROOT_AUTHOR_PRO),
					'fill'         => esc_html__('Fill Effect', BWDEB_ROOT_AUTHOR_PRO),
				],
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_trigger',
			[
				'label'              => esc_html__('Trigger', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SELECT,
				'options'            => [
					''       => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
					'click'  => esc_html__('Click', BWDEB_ROOT_AUTHOR_PRO),
					'manual' => esc_html__('Custom Trigger', BWDEB_ROOT_AUTHOR_PRO),

				],
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_custom_trigger',
			[
				'label'              => esc_html__('Custom Trigger', BWDEB_ROOT_AUTHOR_PRO),
				'placeholder'        => '.class-name',
				'type'               => Controls_Manager::TEXT,
				'dynamic'            => ['active' => true],
				'condition'          => [
					'bwdproeb_widget_tooltip'         => 'yes',
					'bwdproeb_widget_tooltip_trigger' => 'manual',
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_x_offset',
			[
				'label'              => esc_html__('X Offset', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SLIDER,
				'size_units'         => ['px'],
				'range'              => [
					'px' => [
						'min'  => -1000,
						'max'  => 1000,
						'step' => 1,
					],
				],
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_y_offset',
			[
				'label'              => esc_html__('Y Offset', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SLIDER,
				'size_units'         => ['px'],
				'range'              => [
					'px' => [
						'min'  => -1000,
						'max'  => 1000,
						'step' => 1,
					],
				],
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_arrow',
			[
				'label'              => esc_html__('Arrow', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'render_type'        => 'none',
				'frontend_available' => true,
				'condition'          => [
					'bwdproeb_widget_tooltip' => 'yes',
					'bwdproeb_widget_tooltip_animation!' => 'fill'
				],
			]
		);

		$widget->end_controls_tab();

		$widget->start_controls_tab(
			'bwdproeb_widget_tooltip_styles_tab',
			[
				'label'     => esc_html__('Style', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_responsive_control(
			'bwdproeb_widget_tooltip_width',
			[
				'label'       => esc_html__('Max Width', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::SLIDER,
				'size_units'  => [
					'px',
					'em',
				],
				'range'       => [
					'px' => [
						'min' => 50,
						'max' => 500,
					],
				],
				'selectors'          => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]' => 'max-width: calc({{SIZE}}{{UNIT}} - 10px) !important;',
				],
				'condition'   => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
				//					'render_type' => 'none',
				//					'frontend_available' => true,
			]
		);


		$widget->add_control(
			'bwdproeb_widget_tooltip_color',
			[
				'label'     => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'bwdproeb_widget_tooltip_background',
				'selector'  => '.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"], .tippy-box[data-theme="bwdproeb-tippy-{{ID}}"] .tippy-backdrop',
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_arrow_color',
			[
				'label'     => esc_html__('Arrow Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"] .tippy-arrow' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
				'separator' => 'after',
			]
		);

		$widget->add_responsive_control(
			'bwdproeb_widget_tooltip_padding',
			[
				'label'      => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"] .tippy-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'bwdproeb_widget_tooltip_border',
				'label'       => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]',
				'condition'   => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_responsive_control(
			'bwdproeb_widget_tooltip_border_radius',
			[
				'label'      => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_widget_tooltip_text_align',
			[
				'label'     => esc_html__('Text Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::CHOOSE,
				'default'   => 'center',
				'options'   => [
					'left'   => [
						'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
				'separator' => 'before',
			]
		);

		$widget->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'bwdproeb_widget_tooltip_box_shadow',
				'selector'  => '.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]',
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'bwdproeb_widget_tooltip_typography',
				'selector'  => '.tippy-box[data-theme="bwdproeb-tippy-{{ID}}"]',
				'condition' => [
					'bwdproeb_widget_tooltip' => 'yes',
				],
			]
		);

		$widget->end_controls_tab();

		$widget->end_controls_tabs();
	}

	public function bwdproeb_tooltip_enqueue_scripts() {
		wp_enqueue_script('bwdproeb-tooltip-scripts', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tooltip/scripts.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		wp_enqueue_script('bwdproeb-tooltip-popper', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tooltip/popper.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		wp_enqueue_script('bwdproeb-tooltip-tippy', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tooltip/tippy.all.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		wp_enqueue_style('bwdproeb-tooltip-tippyc', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tooltip/tippy.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
		wp_enqueue_style('bwdproeb-tooltip-tippyc-rtl', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tooltip/tippy.rtl.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
	}
	public function bwdproeb_tooltip_should_script_enqueue($widget) {
		if ('yes' === $widget->get_settings_for_display('bwdproeb_widget_tooltip')) {
			// $this->enqueue_scripts();
			wp_enqueue_script('ep-tooltip');
		}
	}

// 3D text
    public function bwdproeb_register_section($element) {
        $element->start_controls_section(
            'section_skbwd_threed_text_controls',
            [
                'tab'   => Controls_Manager::TAB_CONTENT,
                'label' => esc_html__('BWD 3D Text', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_register_controls($widget) {
        $widget->add_control(
            'bwdproeb_threed_text_active',
            [
                'label'              => esc_html__('3D Text', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'render_type'        => 'template',
                'frontend_available' => true,
            ]
        );

		$widget->add_control(
			'bwdproeb_threed_text_depth',
			[
				'label'     => __('Depth', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SLIDER,
				'frontend_available' => true,
				'size_units' => ['px', 'em', 'rem', '%'],
				'default' => [
					'size' => 30,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'em' => [
						'min' => 0,
						'max' => 10,
					],
					'rem' => [
						'min' => 0,
						'max' => 10,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes',
				],
				'render_type' => 'template'
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_layers',
			[
				'label' => esc_html__('Layers', 'plugin-name'),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 8,
				'frontend_available' => true,
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes'
				],
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_depth_color',
			[
				'label'     => esc_html__('Depth Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'frontend_available' => true,
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes'
				],
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_perspective',
			[
				'label'     => __('Perspective', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SLIDER,
				'frontend_available' => true,
				'size_units' => ['px'],
				'default' => [
					'size' => 500,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes',
				],
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_fade',
			[
				'label'       => esc_html__('Fade', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::SWITCHER,
				'default'     => 'yes',
				'condition'   => [
					'bwdproeb_threed_text_active' => 'yes'
				],
				'frontend_available' => true,
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_event',
			[
				'label'   => esc_html__('Event', BWDEB_ROOT_AUTHOR_PRO),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'none'    => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'pointer' => esc_html__('Pointer', BWDEB_ROOT_AUTHOR_PRO),
					'scroll'  => esc_html__('Scroll', BWDEB_ROOT_AUTHOR_PRO),
					'scrollX' => esc_html__('ScrollX', BWDEB_ROOT_AUTHOR_PRO),
					'scrollY' => esc_html__('ScrollY', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default' => 'none',
				'frontend_available' => true,
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes'
				],
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_event_rotation',
			[
				'label'     => __('Event Rotation', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 35,
				],
				'range' => [
					'px' => [
						'max' => 360,
						'min' => -360,
					],
				],
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes',
					'bwdproeb_threed_text_event!' => 'none',
				],
				'frontend_available' => true,
			]
		);

		$widget->add_control(
			'bwdproeb_threed_text_event_direction',
			[
				'label'   => esc_html__('Event Direction', BWDEB_ROOT_AUTHOR_PRO),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'default'  => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
					'reverse'  => esc_html__('Reverse', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default' => 'default',
				'frontend_available' => true,
				'condition' => [
					'bwdproeb_threed_text_active' => 'yes',
					'bwdproeb_threed_text_event!' => 'none',
				],
			]
		);
    }

    public function bwdproeb_enqueue_scripts() {
		$threeD_extn = ['main-scripts','scripts.min','ztext.min'];
		foreach($threeD_extn as $link){
			wp_enqueue_script('bwdproeb-3dtext-'.$link, plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/3d-text/'.$link.'.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		}
    }

	// For Notation ext
    public function bwdproeb_notation_register_section($element) {
        $element->start_controls_section(
            'section_bwdproeb_notation_controls',
            [
                'label' => esc_html__('BWD Notation', BWDEB_ROOT_AUTHOR_PRO),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_notation_register_controls($widget, $args) {

        $widget->add_control(
            'bwdproeb_notation_active',
            [
                'label'              => esc_html__('Notation Effects', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'render_type'        => 'template',
                'frontend_available' => true,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'bwdproeb_notation_select_type',
            [
                'label'   => esc_html__('Element Type', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SELECT,
                'default' => 'widget',
                'options' => [
                    'widget' => esc_html__('Widget', BWDEB_ROOT_AUTHOR_PRO),
                    'custom' => esc_html__('Widget > Custom Selector', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

        $repeater->add_control(
            'bwdproeb_notation_custom_selector',
            [
                'label'       => esc_html__('Custom Selector', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'description' => esc_html__('Please use ID or Class to select your element/elements. ( Example - #select-id, .select-class)', BWDEB_ROOT_AUTHOR_PRO),
                'condition'   => [
                    'bwdproeb_notation_select_type' => 'custom',
                ],
            ]
        );
        $repeater->add_control(
            'bwdproeb_notation_type',
            [
                'label'   => esc_html__('Select Style', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SELECT,
                'default' => 'underline',
                'options' => [
                    'underline'      => esc_html__('Underline', BWDEB_ROOT_AUTHOR_PRO),
                    'box'            => esc_html__('Box', BWDEB_ROOT_AUTHOR_PRO),
                    'circle'         => esc_html__('Circle', BWDEB_ROOT_AUTHOR_PRO),
                    'highlight'      => esc_html__('Highlight', BWDEB_ROOT_AUTHOR_PRO),
                    'strike-through' => esc_html__('Strike-through', BWDEB_ROOT_AUTHOR_PRO),
                    'crossed-off'    => esc_html__('Crossed-off', BWDEB_ROOT_AUTHOR_PRO),
                    'bracket'        => esc_html__('Bracket', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $repeater->add_control(
            'bwdproeb_notation_bracket_on',
            [
                'label'       => esc_html__('Bracket On', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'description' => esc_html__('Value could be a string. Each string being one of these values: left, right, top, bottom. When drawing a bracket, this configures which side(s) of the element to bracket. Default value is left,right', BWDEB_ROOT_AUTHOR_PRO),
                'default'     => 'left,right',
                'condition'   => [
                    'bwdproeb_notation_type' => 'bracket',
                ],
            ]
        );
        $repeater->add_control(
            'bwdproeb_notation_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::COLOR,
            ]
        );
        $repeater->add_control(
            'bwdproeb_notation_anim_duration',
            [
                'label'   => esc_html__('Animation Duration', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SLIDER,
                'range'   => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 5000,
                        'step' => 10,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 800,
                ],
            ]
        );

        $repeater->add_control(
            'bwdproeb_notation_stroke_width',
            [
                'label'   => esc_html__('Stroke Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SLIDER,
                'range'   => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1,
                ],
            ]
        );

        $repeater->add_control(
            'bwdproeb_notation_waypoint_offset',
            [
                'label'       => esc_html__('Waypoint Offset', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('Example: bottom-in-view, 90%', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => 'bottom-in-view',
                'separator'   => 'before'
            ]
        );

        $widget->add_control(
            'bwdproeb_notation_list',
            [
                'label'              => esc_html__('Notation Items', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::REPEATER,
                'fields'             => $repeater->get_controls(),
                'prevent_empty'      => false,
                'title_field'        => '{{{ bwdproeb_notation_select_type }}}',
                'frontend_available' => true,
                'default'            => [
                    [
                        'bwdproeb_notation_select_type' => 'widget',
                    ],
                ],
                'condition'          => [
                    'bwdproeb_notation_active' => 'yes',
                ],
                'render_type' => 'template',
            ]
        );
    }

    public function bwdproeb_notation_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-ext-notation', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/notation-scripts.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
    }

    // Confetti Effects
    public function bwdproeb_conffects_register_section($element) {
        $element->start_controls_section(
            'section_bwdproeb_confetti_controls',
            [
                'tab'   => Controls_Manager::TAB_ADVANCED,
                'label' => esc_html__('BWD Confetti Effects', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_conffects_register_controls($widget, $args) {

        $widget->add_control(
            'bwdproeb_widget_cf_confetti',
            [
                'label'              => esc_html__('Use Confetti Effects?', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'render_type'        => 'template',
                'default'            => '',
                'return_value'       => 'yes',
                'frontend_available' => true,
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_type',
            [
                'label'   => esc_html__('Confetti Type', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'basic'        => esc_html__('Basic', BWDEB_ROOT_AUTHOR_PRO),
                    'random'       => esc_html__('Random Direction', BWDEB_ROOT_AUTHOR_PRO),
                    'fireworks'    => esc_html__('Fireworks', BWDEB_ROOT_AUTHOR_PRO),
                    'snow'         => esc_html__('Snow', BWDEB_ROOT_AUTHOR_PRO),
                    'school-pride' => esc_html__('School Pride', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'            => 'snow',
                'render_type'        => 'template',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_fireworks_duration',
            [
                'label' => esc_html__('Animation End Time (ms)', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 1000,
                        'max' => 10000,
                    ],
                ],
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                    'bwdproeb_widget_cf_type'     => ['fireworks', 'snow', 'school-pride'],
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_anim_infinite',
            [
                'label'              => esc_html__('Infinite End Time', BWDEB_ROOT_AUTHOR_PRO),
                'description'        => esc_html__('The result will be shown in Preview.', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'return_value'       => 'yes',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                    'bwdproeb_widget_cf_type'     => ['snow'],
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_particle_count',
            [
                'label'       => esc_html__('Particle Count', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('The number of confetti to launch. More is always fun... but be cool, there\'s a lot of math involved. (default: 50)', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::SLIDER,
                'range'       => [
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                ],
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_start_velocity',
            [
                'label'       => esc_html__('Start Velocity', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('How fast the confetti will start going, in pixels. (default: 45)', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::SLIDER,
                'range'       => [
                    'px' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_spread',
            [
                'label'       => esc_html__('Spread', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('How far off center the confetti can go, in degrees. 45 means the confetti will launch at the defined angle plus or minus 22.5 degrees.', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::SLIDER,
                'range'       => [
                    'px' => [
                        'min' => 0,
                        'max' => 360,
                    ],
                ],
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_angle',
            [
                'label'       => esc_html__('Angle', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('The angle in which to launch the confetti, in degrees. 90 is straight up', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::SLIDER,
                'range'       => [
                    'px' => [
                        'min' => 0,
                        'max' => 360,
                    ],
                ],
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                    'bwdproeb_widget_cf_type'     => ['random', 'school-pride'],
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_colors',
            [
                'label'              => esc_html__('Colors', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::TEXTAREA,
                'description'        => 'Input your colors. example: red, #bada55, #ffffff (Colors must be not empty.)',
                'default'            => '#FF5733, #42A5F5, #9CCC65, #FF4081, #FF9800',
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_shapes',
            [
                'label'              => esc_html__('Shapes', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::TEXTAREA,
                'description'        => 'The possible values are square and circle. The default is to use both shapes in an even mix. You can even change the mix by providing a value such as (circle, circle, square) to use two third circles and one third squares.',
                'render_type'        => 'none',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_origin',
            [
                'label'     => esc_html__('Origin', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::POPOVER_TOGGLE,
                'condition' => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                ],
                'return_value' => 'yes',
                //'render_type'        => 'none',
                'frontend_available' => true,
            ]
        );

        $widget->start_popover();

        $widget->add_control(
            'bwdproeb_widget_cf_origin_x',
            [
                'label' => esc_html__('X', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => .1
                    ],
                ],
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                    'bwdproeb_widget_cf_origin'   => 'yes',
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_origin_y',
            [
                'label' => esc_html__('Y', BWDEB_ROOT_AUTHOR_PRO),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => .1
                    ],
                ],
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                    'bwdproeb_widget_cf_origin'   => 'yes',
                ],
            ]
        );

        $widget->end_popover();

        $widget->add_control(
            'bwdproeb_widget_cf_trigger_type',
            [
                'label'   => esc_html__('Trigger Action', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'load'         => esc_html__('On Load', BWDEB_ROOT_AUTHOR_PRO),
                    'onview'       => esc_html__('On View', BWDEB_ROOT_AUTHOR_PRO),
                    'click'        => esc_html__('On Click', BWDEB_ROOT_AUTHOR_PRO),
                    'mouseenter'   => esc_html__('On Hover', BWDEB_ROOT_AUTHOR_PRO),
                    'delay'        => esc_html__('Delay', BWDEB_ROOT_AUTHOR_PRO),
                    'ajax-success' => esc_html__('Ajax Success', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'            => 'load',
                'render_type'        => 'template',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes',
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_trigger_selector',
            [
                'label'       => esc_html__('Trigger Selector', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'description' => esc_html__('Place your selector. example:- #test-id, .test-class', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic'     => [
                    'active' => true,
                ],
                'render_type'        => 'template',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti'     => 'yes',
                    'bwdproeb_widget_cf_trigger_type' => ['click', 'mouseenter'],
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_trigger_delay',
            [
                'label'   => esc_html__('Delay Time (ms)', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 3000,
                ],
                'range'              => [
                    'px' => [
                        'min' => 1000,
                        'max' => 10000,
                    ],
                ],
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti'     => 'yes',
                    'bwdproeb_widget_cf_trigger_type' => 'delay',
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_widget_cf_z_index',
            [
                'label'              => esc_html__('Z-index', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::NUMBER,
                'render_type'        => 'template',
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_widget_cf_confetti' => 'yes'
                ],
            ]
        );
    }

    public function bwdproeb_conffects_enqueue_scripts() {
		$threeD_extn = ['3d-text/main-scripts','confetti.browser.min'];
		foreach($threeD_extn as $link){
			wp_enqueue_script('bwdproeb-3dtext-'.$link, plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/'.$link.'.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		}
    }

    // For cursor effect
    public function bwdproeb_cursor_effect_register_section($element) {
        $element->start_controls_section(
            'bwdproeb_cursor_effects_section',
            [
                'tab'   => Controls_Manager::TAB_ADVANCED,
                'label' => esc_html__('BWD Cursor Effects', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_cursor_effect_register_controls($section, $args) {

        $section->add_control(
            'bwdproeb_cursor_effects_show',
            [
                'label'              => __('Show Cursor Effects', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'return_value'       => 'yes',
                'prefix_class'       => 'bwdproeb-cursor-effects-',
                'frontend_available' => true,
                'render_type'        => 'template',
            ]
        );
        $section->start_controls_tabs(
            'bwdproeb_cursor_effects_tabs'
        );

        $section->start_controls_tab(
            'bwdproeb_cursor_effects_tab_layout',
            [
                'label'     => esc_html__('Layout', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'bwdproeb_cursor_effects_show' => 'yes'
                ],
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_source',
            [
                'label'              => esc_html__('Source', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SELECT,
                'default'            => 'default',
                'frontend_available' => true,
                'render_type'        => 'none',
                'options'            => [
                    'default' => esc_html__('Default', BWDEB_ROOT_AUTHOR_PRO),
                    'text'    => esc_html__('Text', BWDEB_ROOT_AUTHOR_PRO),
                    'image'   => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                    'icons'   => esc_html__('Icons', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition'          => [
                    'bwdproeb_cursor_effects_show' => 'yes'
                ],
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_image_src',
            [
                'label'              => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::MEDIA,
                'frontend_available' => true,
                'render_type'        => 'template',
                'default'            => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition'          => [
                    'bwdproeb_cursor_effects_source' => 'image'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_icons',
            [
                'label'              => esc_html__('Icons', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::ICONS,
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_cursor_effects_source' => 'icons'
                ],
                'default'            => [
                    'value'   => 'fas fa-laugh-wink',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_style',
            [
                'label'              => __('Style', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SELECT,
                'default'            => 'ep-cursor-style-1',
                'options'            => [
                    'ep-cursor-style-1' => __('Style 1', BWDEB_ROOT_AUTHOR_PRO),
                    'ep-cursor-style-2' => __('Style 2', BWDEB_ROOT_AUTHOR_PRO),
                    'ep-cursor-style-3' => __('Style 3', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_cursor_effects_show'   => 'yes',
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_text_label',
            [
                'label'              => esc_html__('Text Label', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::TEXT,
                // 'default'            => esc_html__('HELLO', BWDEB_ROOT_AUTHOR_PRO),
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_cursor_effects_source' => 'text',
                    'bwdproeb_cursor_effects_show' => 'yes'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_speed',
            [
                'label'              => __('Speed', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SLIDER,
                'size_units'         => ['px'],
                'range'              => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.001,
                    ]
                ],
                'default'            => [
                    'unit' => 'px',
                    'size' => 0.075,
                ],
                'frontend_available' => true,
                'render_type'        => 'none',
                'condition'          => [
                    'bwdproeb_cursor_effects_show'   => 'yes',
                    'bwdproeb_cursor_effects_source' => 'default'
                ]

            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_disable_default_cursor',
            [
                'label'        => __('Disable Default Cursor', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'separator'    => 'before',
                'condition'    => [
                    'bwdproeb_cursor_effects_show' => 'yes'
                ],
                'selectors'    => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes' => 'cursor: none'
                ]
            ]
        );
        $section->end_controls_tab();
        $section->start_controls_tab(
            'bwdproeb_cursor_effects_tab_style',
            [
                'label'     => esc_html__('Style', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'bwdproeb_cursor_effects_show' => 'yes'
                ],
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_primary',
            [
                'label'     => esc_html__('Primary', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_primary_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes' => '--cursor-ball-color: {{VALUE}}',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => ['default', 'icons']
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_primary_size',
            [
                'label'     => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes' => '--cursor-ball-size:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_secondary',
            [
                'label'     => esc_html__('Secondary', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_cursor_effects_secondary_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes' => '--cursor-circle-color: {{VALUE}}',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_secondary_size',
            [
                'label'     => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes' => '--cursor-circle-size:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'default'
                ]
            ]
        );
        //TEXT
        $section->add_control(
            'bwdproeb_cursor_effects_text_color',
            [
                'label'     => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'      => 'bwdproeb_cursor_effects_text_background',
                'label'     => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types'     => ['classic', 'gradient'],
                'selector'  => '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_text_padding',
            [
                'label'      => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'bwdproeb_cursor_effects_text_border',
                'label'     => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector'  => '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_text_radius',
            [
                'label'      => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'      => 'bwdproeb_cursor_effects_text_typography',
                'label'     => esc_html__('Typography', BWDEB_ROOT_AUTHOR_PRO),
                'selector'  => '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-text',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'text'
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_image_size',
            [
                'label'     => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-image' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'image'
                ]
            ]
        );
        $section->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'bwdproeb_cursor_effects_image_border',
                'label'     => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector'  => '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-image',
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'image'
                ]
            ]
        );
        $section->add_responsive_control(
            'bwdproeb_cursor_effects_image_radius',
            [
                'label'      => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
                    'bwdproeb_cursor_effects_source' => 'image'
                ]
            ]
        );

        $section->add_responsive_control(
            'bwdproeb_cursor_effects_icons_size',
            [
                'label'     => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-cursor-effects-yes .bwdproeb-cursor-icons' => 'font-size:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdproeb_cursor_effects_source' => 'icons'
                ]
            ]
        );
        $section->end_controls_tab();

        $section->end_controls_tabs();
    }

    public function bwdproeb_cursor_effect_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-ext-cursor-effect', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/cotton.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_script('bwdproeb-ext-cursor-effect2', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/3d-text/main-scripts.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_style('bwdproeb-ext-cursor-effect', plugin_dir_url( __FILE__ ) . '../assets/public/css/extensions/cursor-effects.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
    }

    // reveal-effects
    public function bwdproeb_reveal_effect_register_section($element) {
        $element->start_controls_section(
            'section_bwdproeb_reveal_controls',
            [
                'tab'   => Controls_Manager::TAB_ADVANCED,
                'label' => esc_html__('BWD Reveal Effects', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_reveal_effect_register_controls($widget, $args) {
        $widget->add_control(
            'bwdproeb_reveal_effects_enable',
            [
                'label'              => esc_html__('Use Reveal Effects?', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SWITCHER,
                'render_type'        => 'none',
                'frontend_available' => true,
                'prefix_class'       => 'bwdproeb-reveal-preload bwdproeb-reveal-effects-',
            ]
        );
        $widget->add_control(
            'bwdproeb_reveal_effects_direction',
            [
                'label'              => __('Direction', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SELECT,
                'default'            => 'lr',
                'options'            => [
                    'lr' => __('Left to Right', BWDEB_ROOT_AUTHOR_PRO),
                    'rl' => __('Right to Left', BWDEB_ROOT_AUTHOR_PRO),
                    'c'  => __('Center', BWDEB_ROOT_AUTHOR_PRO),
                    'tb' => __('Top to Bottom', BWDEB_ROOT_AUTHOR_PRO),
                    'bt' => __('Bottom to top', BWDEB_ROOT_AUTHOR_PRO)
                ],
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_reveal_effects_enable' => 'yes'
                ]
            ]
        );
        $widget->add_control(
            'bwdproeb_reveal_effects_easing',
            [
                'label'              => __('Easing', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SELECT,
                'default'            => 'easeOutQuint',
                'render_type'        => 'template',
                'options'            => [
                    'easeOutQuad'     => esc_html__('Ease Out Quad', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutCubic'    => esc_html__('Ease Out Cubic', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutQuart'    => esc_html__('Ease Out Quart', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutQuint'    => esc_html__('Ease Out Quint', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutSine'     => esc_html__('Ease Out Sine', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutExpo'     => esc_html__('Ease Out Expo', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutCirc'     => esc_html__('Ease Out Circ', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutBack'     => esc_html__('Ease Out Back', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutBounce'   => esc_html__('Ease Out Bounce', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInQuad'   => esc_html__('Ease Out In Quad', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInCubic'  => esc_html__('Ease Out In Cubic', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInQuart'  => esc_html__('Ease Out In Quart', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInQuint'  => esc_html__('Ease Out In Quint', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInSine'   => esc_html__('Ease Out In Sine', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInExpo'   => esc_html__('Ease Out In Expo', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInCirc'   => esc_html__('Ease Out In Circ', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInBack'   => esc_html__('Ease Out In Back', BWDEB_ROOT_AUTHOR_PRO),
                    'easeOutInBounce' => esc_html__('Ease Out In Bounce', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'frontend_available' => true,
                'condition'          => [
                    'bwdproeb_reveal_effects_enable' => 'yes'
                ]
            ]
        );
        $widget->add_control(
            'bwdproeb_reveal_effects_speed',
            [
                'label'              => __('Speed', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::SLIDER,
                'size_units'         => ['px'],
                'range'              => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ],

                ],
                'default'            => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_reveal_effects_enable' => 'yes'
                ]
            ]
        );
        $widget->add_control(
            'bwdproeb_reveal_effects_color',
            [
                'label'              => __('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => Controls_Manager::COLOR,
                'frontend_available' => true,
                'render_type'        => 'template',
                'condition'          => [
                    'bwdproeb_reveal_effects_enable' => 'yes'
                ]
            ]
        );
    }

    public function bwdproeb_reveal_effect_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-ext-reveal-effects', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/reveal-effects/anime.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_script('bwdproeb-ext-reveal-effect2', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/3d-text/main-scripts.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_script('bwdproeb-ext-reveal-effects3', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/reveal-effects/RevealFx.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
    }

    // For Tile Scroll
    public function bwdproeb_tile_scroll_register_section($element) {
		$element->start_controls_section(
			'bwdproeb_tile_scroll_section',
			[
				'tab'   => Controls_Manager::TAB_ADVANCED,
				'label' => esc_html__('BWD Tile Scroll', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
        $element->end_controls_section();
    }

    public function bwdproeb_tile_scroll_register_controls($section, $args) {

		$section->add_control(
			'bwdproeb_tile_scroll_show',
			[
				'label'              => esc_html__('Use Tile Scroll?', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'default'            => '',
				'return_value'       => 'yes',
				'prefix_class'       => 'bwdproeb-tile-scroll-',
				'frontend_available' => true,
				'render_type'        => 'template',
			]
		);
		$section->start_controls_tabs(
			'tabs_bwdproeb_tile_scroll'
		);
		$section->start_controls_tab(
			'tabs_bwdproeb_tile_content',
			[
				'label'     => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdproeb_tile_scroll_show' => 'yes'
				]
			]
		);
		$repeater = new Repeater();
		$repeater->add_control(
			'bwdproeb_tile_scroll_title',
			[
				'label'       => __('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::TEXT,
				'default'     => __('Item #1', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'render_type' => 'ui',
			]
		);
		$repeater->add_control(
			'bwdproeb_tile_scroll_images',
			[
				'label' => esc_html__('Images', BWDEB_ROOT_AUTHOR_PRO),
				'type'  => Controls_Manager::GALLERY,
			]
		);


		$repeater->add_control(
			'bwdproeb_tile_scroll_x_start',
			[
				'label'   => esc_html__('Start', BWDEB_ROOT_AUTHOR_PRO),
				'type'    => Controls_Manager::SLIDER,
				'range'   => [
					'px' => [
						'min'  => -500,
						'max'  => 500,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 150,
				],
			]
		);

		$repeater->add_control(
			'bwdproeb_tile_scroll_x_end',
			[
				'label' => esc_html__('End', BWDEB_ROOT_AUTHOR_PRO),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => -500,
						'max'  => 500,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => -150,
				],
			]
		);

		$section->add_control(
			'bwdproeb_tile_scroll_elements',
			[
				'label'              => __('Tile Scroll Items', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::REPEATER,
				'fields'             => $repeater->get_controls(),
				'prevent_empty'      => false,
				'title_field'        => '{{{ bwdproeb_tile_scroll_title }}}',
				'frontend_available' => true,
				'render_type'        => 'none',
				'condition'          => [
					'bwdproeb_tile_scroll_show' => 'yes'
				],
			]
		);
		$section->end_controls_tab();
		$section->start_controls_tab(
			'tabs_bwdproeb_tile_style',
			[
				'label'     => esc_html__('Style', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdproeb_tile_scroll_show' => 'yes'
				]
			]
		);
		$section->add_control(
			'bwdproeb_tile_scroll_display',
			[
				'label'              => esc_html__('Scroll Style', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SELECT,
				'default'            => 'horizontal',
				'options'            => [
					'horizontal' => esc_html__('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
					'vertical'   => esc_html__('Vertical', BWDEB_ROOT_AUTHOR_PRO),
				],
				'frontend_available' => true,
				'render_type'        => 'template',
				'condition'          => [
					'bwdproeb_tile_scroll_show' => 'yes'
				]
			]
		);
		$section->add_control(
			'bwdproeb_tile_scroll_rotate',
			[
				'label'     => esc_html__('Rotate', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'min'  => 0,
						'max'  => 360,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-tile-scroll-rotate: {{SIZE}}deg;',
				],
				'condition' => [
					'bwdproeb_tile_scroll_show'    => 'yes',
					'bwdproeb_tile_scroll_display' => 'horizontal'
				]
			]
		);
		$section->add_responsive_control(
			'bwdproeb_tile_scroll_item_width',
			[
				'label'      => esc_html__('Width Adjustment', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range'      => [
					'px' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 0.5,
					]
				],
				'selectors'  => [
					'{{WRAPPER}}' => '--bwdproeb-tile-scroll-item-width: {{SIZE}}%;',
				],
				'condition'  => [
					'bwdproeb_tile_scroll_show'    => 'yes',
					'bwdproeb_tile_scroll_display' => 'horizontal'
				]
			]
		);
		$section->add_responsive_control(
			'bwdproeb_tile_scroll_height',
			[
				'label'      => esc_html__('Height Adjustment', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['vw'],
				'default'    => [
					'unit' => 'vw',
					'size' => 52,
				],
				'selectors'  => [
					'{{WRAPPER}}' => '--bwdproeb-tile-scroll-height: {{SIZE}}vw;',
				],
				'condition'  => [
					'bwdproeb_tile_scroll_show' => 'yes',
				]
			]
		);
		$section->add_responsive_control(
			'bwdproeb_tile_scroll_gap',
			[
				'label'      => esc_html__('Grid Gap', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default'    => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors'  => [
					'{{WRAPPER}}'     => '--bwdproeb-tile-scroll-margin: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'bwdproeb_tile_scroll_show' => 'yes'
				]
			]
		);
		$section->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'bwdproeb_tile_scroll_gap',
				'label'     => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector'  => '{{WRAPPER}} .bwdproeb-tile-scroll__line-img',
				'separator' => 'before'
			]
		);
		$section->add_responsive_control(
			'bwdproeb_title_radius',
			[
				'label'      => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .bwdproeb-tile-scroll__line-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$section->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'bwdproeb_tile_scroll_shadow',
				'label'    => esc_html__('Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdproeb-tile-scroll__line-img',
			]
		);
		$section->end_controls_tab();
		$section->end_controls_tabs();
		$section->add_control(
			'bwdproeb_tile_scroll_notice',
			[
				'type'            => Controls_Manager::RAW_HTML,
				'raw'             => sprintf(__('Make sure your pictures are the right size (like 640px X 560px) and make them work well in this gallery. The gallery shows big pictures, so if your images are too big, it might make scrolling slow and the page take longer to load.', BWDEB_ROOT_AUTHOR_PRO)),
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
				'condition'       => [
					'bwdproeb_tile_scroll_show' => 'yes',
				],
				'separator'       => 'before'
			]
		);
    }

	public function bwdproeb_tile_scroll_before_render($section) {
		$settings = $section->get_settings_for_display();
		if ('yes' === $settings['bwdproeb_tile_scroll_show']) {
			wp_enqueue_style('ep-tile-scroll');
			wp_enqueue_script('ep-tile-scroll');
		}
	}

	public function bwdproeb_tile_scroll_assets_for_the_public(){
        $Tile_scr_js = ['tile-scroll','tile-scroll.min'];
        foreach($Tile_scr_js as $key): wp_enqueue_script('bwdproeb-ext-tile-scroll-'.$key, plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/tile-scroll/'.$key.'.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true); endforeach;
        $Tile_scr_css = ['tile-scroll','tile-scroll.rtl'];
        foreach($Tile_scr_css as $key): wp_enqueue_style('bwdproeb-ext-tile-scroll-'.$key, plugin_dir_url( __FILE__ ) . '../assets/public/css/extensions/tile-scroll/'.$key.'.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all'); endforeach;
    }

    // For section-sticky
    public function bwdproeb_section_sticky_register_section($element) {
        $element->start_controls_section(
            'ext_bwdproeb_sticky_section',
            [
                'label' => __('BWD Section Sticky', BWDEB_ROOT_AUTHOR_PRO),
                'tab'   => Controls_Manager::TAB_ADVANCED,
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_section_sticky_register_controls($section, $args) {

        $section->add_control(
            'bwdproeb_sticky_on',
            [
                'label'        => esc_html__('Enable Sticky', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'description'  => esc_html__('Enable this option to configure sticky settings.', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_offset',
            [
                'label'     => esc_html__('Offset', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SLIDER,
                'default'   => [
                    'size' => 0,
                ],
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_active_bg',
            [
                'label'     => esc_html__('Active Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.bwdproeb-sticky.bwdproeb-active' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_responsive_control(
            'bwdproeb_sticky_active_padding',
            [
                'label'      => esc_html__('Active Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}}.bwdproeb-sticky.bwdproeb-active' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'label'     => esc_html__('Active Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'name'      => 'bwdproeb_sticky_active_shadow',
                'selector'  => '{{WRAPPER}}.bwdproeb-sticky.bwdproeb-active',
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_animation',
            [
                'label'     => esc_html__('Animation', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::SELECT,
                'options'   => bwdeb_transition_options(),
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_bottom',
            [
                'label'       => esc_html__('Scroll Until', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('Specify the ID or class of the particular section here if you prefer not to scroll beyond that specific point. For instance, use #section1 or .section1 both ID and class are supported.', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::TEXT,
                'condition'   => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_on_scroll_up',
            [
                'label'        => esc_html__('Sticky on Scroll Up', BWDEB_ROOT_AUTHOR_PRO),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'description'  => esc_html__('Enable sticky options as you scroll upward with your mouse.', BWDEB_ROOT_AUTHOR_PRO),
                'condition'    => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_position',
            [
                'label'       => esc_html__('Position', BWDEB_ROOT_AUTHOR_PRO),
                'description' => esc_html__('The element naturally remains affixed to the top of the viewport by default. You have the flexibility to adjust its position by specifying a different option for the "position" property.', BWDEB_ROOT_AUTHOR_PRO),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'start',
                'options'     => [
                    'start' => 'Start',
                    'end'   => 'End',
                    'auto'  => 'Auto',
                ],
                'condition'   => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sticky_zindex',
            [
                'label'     => esc_html__('Z-Index', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::NUMBER,
                'min' => -1000,
                'max' => 9999,
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
                'selectors'  => [
                    '{{WRAPPER}}.bwdproeb-sticky.bwdproeb-active' => 'z-index: {{VALUE}};',
                ],
            ]
        );


        $section->add_control(
            'bwdproeb_sticky_off_media',
            [
                'label'     => __('Turn Off', BWDEB_ROOT_AUTHOR_PRO),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    '960' => [
                        'title' => __('On Tablet', BWDEB_ROOT_AUTHOR_PRO),
                        'icon'  => 'eicon-device-tablet',
                    ],
                    '768' => [
                        'title' => __('On Mobile', BWDEB_ROOT_AUTHOR_PRO),
                        'icon'  => 'eicon-device-mobile',
                    ],
                ],
                'condition' => [
                    'bwdproeb_sticky_on' => 'yes',
                ],
                'separator' => 'before',
            ]
        );
    }

	public function bwdproeb_section_sticky_all_assets_for_the_public(){
		wp_enqueue_script('bwdproeb-section-sticky', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/section-sticky.js', ['jquery'], '2', true);
	}

    public function bwdproeb_sticky_before_render($section) {
        $settings = $section->get_settings_for_display();
        if ( !empty($settings['bwdproeb_sticky_on']) == 'yes' ) {
            $sticky_option = [];
            if ( !empty($settings['bwdproeb_sticky_on_scroll_up']) ) {
                $sticky_option['show-on-up'] = 'show-on-up: true';
            }

            if ( !empty($settings['bwdproeb_sticky_offset']['size']) ) {
                $sticky_option['offset'] = 'offset: ' . $settings['bwdproeb_sticky_offset']['size'];
            }

            if ( !empty($settings['bwdproeb_sticky_animation']) ) {
                $sticky_option['animation'] = 'animation: bwdproeb-animation-' . $settings['bwdproeb_sticky_animation'] . '; top: 100';
            }

            if ( !empty($settings['bwdproeb_sticky_bottom']) ) {
                $sticky_option['bottom'] = 'bottom: ' . $settings['bwdproeb_sticky_bottom'];
            }

            if ( !empty($settings['bwdproeb_sticky_position'] ) ) {
                if ( $settings['bwdproeb_sticky_position'] == 'start' || $settings['bwdproeb_sticky_position'] == 'end'  ) {
                    $sticky_option['position'] = 'position: ' . $settings['bwdproeb_sticky_position'];
                } else {
                    $sticky_option['position'] = 'overflow-flip: true';
                }                
            }

            if ( !empty($settings['bwdproeb_sticky_off_media']) ) {
                $sticky_option['media'] = 'media: ' . $settings['bwdproeb_sticky_off_media'];
            }

            $section->add_render_attribute('_wrapper', 'data-bwdproeb-sticky', implode(";", $sticky_option));
            $section->add_render_attribute('_wrapper', 'class', 'bwdproeb-sticky');
        }
    }

    public function bwdproeb_sticky_script_render($section) {

        if ( $section->get_settings('bwdproeb_sticky_on') == 'yes' ) {
            wp_enqueue_script('ep-section-sticky');
        }

    }

    // For scroll box
    public function bwdproeb_scroll_box_register_section($element) {
        $element->start_controls_section(
            'bwdproeb_section_scroll_box',
            [
                'tab'   => Controls_Manager::TAB_STYLE,
                'label' => esc_html__( 'BWD Scroll Box', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_scroll_box_register_controls($widget, $args) {

        if ( 'section' === $widget->get_name() ) {
            $selector = '{{WRAPPER}}';
        } else {
            $selector = '{{WRAPPER}} .elementor-widget-container';
        }
        
        $widget->add_control(
            'bwdproeb_scroll_box_enable',
            [
                'label'              => esc_html__( 'Scroll Box', BWDEB_ROOT_AUTHOR_PRO ),
                'type'               => Controls_Manager::SWITCHER,
                'default'            => '',
                'return_value'       => 'yes',
                'frontend_available' => true,
                'selectors' => [
                    $selector . '::-webkit-scrollbar-thumb' => 'background-color:#babac0;border-radius:16px;',
                    $selector . '::-webkit-scrollbar-track' => '-webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3);border-radius:16px;',
                ],
            ]
        );

        $widget->add_responsive_control(
            'bwdproeb_scroll_box_max_height',
            [
                'label'      => __( 'Max Height', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range'      => [
                    'px' => [
                        'min' => 20,
                        'max' => 1000,
                        'step' => 20,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'condition' => [
                    'bwdproeb_scroll_box_enable' => 'yes',
                ],
                'selectors' => [
                    $selector => 'max-height: {{SIZE}}{{UNIT}}; overflow-y: scroll !important; oveflow-x: hidden !important;',
                ],
            ]
        );

        $widget->add_responsive_control(
            'bwdproeb_scroll_box_width',
            [
                'label'      => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range'      => [
                    'px' => [
                        'min' => 5,
                        'max' => 50,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 12,
                ],
                'condition' => [
                    'bwdproeb_scroll_box_enable' => 'yes',
                ],
                'selectors' => [
                    $selector . '::-webkit-scrollbar' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_scroll_box_border_type',
            [
                'label'     => __( 'Border Type', 'pafe' ),
                'separator' => 'before',
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    '' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
                    'solid'  => _x( 'Solid', 'Border Control', BWDEB_ROOT_AUTHOR_PRO ),
                    'double' => _x( 'Double', 'Border Control', BWDEB_ROOT_AUTHOR_PRO ),
                    'dotted' => _x( 'Dotted', 'Border Control', BWDEB_ROOT_AUTHOR_PRO ),
                    'dashed' => _x( 'Dashed', 'Border Control', BWDEB_ROOT_AUTHOR_PRO ),
                    'groove' => _x( 'Groove', 'Border Control', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'bwdproeb_scroll_box_enable' => 'yes',
                ],
                'selectors' => [
                    $selector . '::-webkit-scrollbar-track' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $widget->add_responsive_control(
            'bwdproeb_scroll_box_border_width',
            [
                'label'     => __( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::DIMENSIONS,
                'condition' => [
                    'bwdproeb_scroll_box_enable'       => 'yes',
                    'bwdproeb_scroll_box_border_type!' => '',
                ],
                'selectors' => [
                    $selector . '::-webkit-scrollbar-track' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $widget->add_control(
            'bwdproeb_scroll_box_border_color',
            [
                'label'     => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::COLOR,
                'condition' => [
                    'bwdproeb_scroll_box_enable'       => 'yes',
                    'bwdproeb_scroll_box_border_type!' => '',
                ],
                'selectors' => [
                    $selector . '::-webkit-scrollbar-track' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $widget->add_responsive_control(
            'bwdproeb_scroll_box_border_radius',
            [
                'label'      => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                    ],
                ],
                'condition' => [
                    'bwdproeb_scroll_box_enable' => 'yes',
                ],
                'selectors' => [
                    $selector . '::-webkit-scrollbar'       => 'border-radius: {{SIZE}}{{UNIT}};',
                    $selector . '::-webkit-scrollbar-thumb' => 'border-radius: {{SIZE}}{{UNIT}};',
                    $selector . '::-webkit-scrollbar-track' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $widget->start_controls_tabs(
            'tabs_thumb_style',
            [
                'condition' => [
                    'bwdproeb_scroll_box_enable' => 'yes',
                ],
            ]
        );

        $widget->start_controls_tab(
            'tab_thumb',
            [
                'label' => esc_html__( 'Thumb', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $widget->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'      => 'bwdproeb_scroll_box_thumb_color',
                'selector'  => $selector . '::-webkit-scrollbar-thumb',
            ]
        );

        $widget->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'      => 'bwdproeb_scroll_box_thumb_shadow',
                'separator' => 'after',
                'selector'  => $selector . '::-webkit-scrollbar-thumb',
            ]
        );

        $widget->end_controls_tab();

        $widget->start_controls_tab(
            'tab_track',
            [
                'label' => esc_html__( 'Track', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $widget->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'      => 'bwdproeb_scroll_box_track_color',
                'separator' => 'after',
                'selector'  => $selector . '::-webkit-scrollbar-track',
            ]
        );

        $widget->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'bwdproeb_scroll_box_track_shadow',
                'selector' => $selector . '::-webkit-scrollbar-track',
            ]
        );

        $widget->end_controls_tab();

        $widget->end_controls_tabs();
    }

    // Section Particles
	public function bwdproeb_section_particles_register_section($element) {
		$element->start_controls_section(
			'bwdproeb_section_background_particles_controls',
			[
				'tab'   => Controls_Manager::TAB_STYLE,
				'label' => esc_html__(' BWD Background Particles Effects', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$element->end_controls_section();
	}

	public function bwdproeb_section_particles_register_controls($widget, $args) {

		$widget->add_control(
			'bwdproeb_section_particles_on',
			[
				'label'              => esc_html__(' BWD Particles Effects', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'default'            => '',
				'return_value'       => 'yes',
				'prefix_class'       => 'bwdproeb-particles-',
				'separator'          => ['before'],
				'frontend_available' => true,
				'render_type'        => 'template',
			]
		);

		$widget->add_control(
			'bwdproeb_section_particles_js',
			[
				'label'              => esc_html__('Particles JSON', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::TEXTAREA,
				'condition'          => [
					'bwdproeb_section_particles_on' => 'yes',
				],
				'description'        => __('Please provide the JSON code for your particles by pasting it <a href="http://vincentgarreau.com/particles.js/#default" target="_blank">here</a>.  You can generate the code from this source.', BWDEB_ROOT_AUTHOR_PRO),
				'default'            => '',
				'dynamic'            => ['active' => true],
				'frontend_available' => true,
				'render_type'        => 'template',
			]
		);

		$widget->add_control(
			'bwdproeb_section_particles_z_index',
			[
				'label'       => esc_html__('Z-Index', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::TEXT,
				'condition'   => [
					'bwdproeb_section_particles_on' => 'yes',
				],
				'description' => __('To enable mouse activity, adjusting the z-index can be a solution.', BWDEB_ROOT_AUTHOR_PRO),
				'default'     => '',
				'dynamic'     => ['active' => true],
				'selectors'   => [
					'{{WRAPPER}} .bwdproeb-particle-container' => 'z-index: {{VALUE}};',
				],
				'render_type' => 'template',
			]
		);
	}

	public function bwdproeb_section_particles_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-bg-particles', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/bg-particles/particles.min.js', ['jquery'], BWDEB_ROOT_AUTHOR_PRO, true);
        wp_enqueue_script('bwdproeb-bg-particles1', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/bg-particles/scripts.js', ['jquery'], BWDEB_ROOT_AUTHOR_PRO, true);
        wp_enqueue_style('bwdproeb-bg-particles', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/bg-particles/helper.css', null, BWDEB_ROOT_AUTHOR_PRO, 'all');
	}

	public function bwdproeb_section_particles_should_script_enqueue($widget) {
		if ('yes' === $widget->get_settings_for_display('bwdproeb_section_particles_on')) {
			// $this->enqueue_scripts();
			wp_enqueue_script('ep-particles');
		}
	}

    // XD Copy
	public function bwdproeb_enqueue_xd_copy_scripts() {
        wp_enqueue_script('bwdproeb-xd-copy', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/bwdproeb-xd-copy.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
		wp_localize_script(
			'bwdproeb-xd-copy',
			'bwdproeb_xd_copy',
			[
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'bwdproeb_xd_copy_fetch_content' ),
				'i18n' => [
					'bwdproeb_copy'                   => __( 'Cross-Domain Copy', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdproeb_copy_all'               => __( 'Cross-Domain Page Copy', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdproeb_paste'                  => __( 'Cross-Domain Paste', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdproeb_paste_all'              => __( 'Cross-Domain Page Paste', BWDEB_ROOT_AUTHOR_PRO ),
					'container_message'         => __( '✅ Container Copied Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'section_message'           => __( '✅ Section Copied Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'column_message'            => __( '✅ Column Copied Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'widget_message'            => __( '✅ Widget Copied Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'full_page_message'         => __( '✅ Full Page Copied Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'paste_message'             => __( '✅ Pasted Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'full_page_paste_message'   => __( '✅ Full Page Pasted Successfully', BWDEB_ROOT_AUTHOR_PRO ),
					'full_page_pasting_message' => __( '⏳ Please wait while we process your data...', BWDEB_ROOT_AUTHOR_PRO ),
				]
			]
		);
	}

	public static function bwdproeb_xdcp_fetch_content_data() {

		check_ajax_referer( 'bwdproeb_xd_copy_fetch_content', 'nonce' );

		if ( ! current_user_can( 'edit_posts' ) ) {
			wp_send_json_error(
				__( 'Not a Valid User', BWDEB_ROOT_AUTHOR_PRO ),
				403
			);
		}

		$media_xdcp_data = isset( $_POST['xd_copy_data'] ) ? wp_unslash( $_POST['xd_copy_data'] ) : '';

		if ( empty( $media_xdcp_data ) ) {
			wp_send_json_error( __( 'Empty Content', BWDEB_ROOT_AUTHOR_PRO ) );
		}

		$media_xdcp_data = array( json_decode( $media_xdcp_data, true ) );
		$media_xdcp_data = self::bwdproeb_xdcp_replace_elements_ids( $media_xdcp_data );
		$media_xdcp_data = self::bwdproeb_xdcp_create_copy_content( $media_xdcp_data );

		wp_send_json_success( $media_xdcp_data );
	}

	protected static function bwdproeb_xdcp_replace_elements_ids( $media_xdcp_data ) {

		return Plugin::instance()->db->iterate_data(
			$media_xdcp_data,
			function ( $element ) {
				$element['id'] = Utils::generate_random_string();

				return $element;
			}
		);

	}

	protected static function bwdproeb_xdcp_create_copy_content( $media_xdcp_data ) {

		return Plugin::instance()->db->iterate_data(
			$media_xdcp_data,
			function ( $element_data ) {
				$elements = Plugin::instance()->elements_manager->create_element_instance( $element_data );

				if ( ! $elements ) {
					return null;
				}

				return self::bwdproeb_xdcp_process_media( $elements );
			}
		);

	}

	protected static function bwdproeb_xdcp_process_media( Controls_Stack $element, $method = 'on_import' ) {
		$get_element_instance = $element->get_data();

		if ( method_exists( $element, $method ) ) {
			$get_element_instance = $element->{$method}( $get_element_instance );
		}

		foreach ( $element->get_controls() as $get_control ) {
			$control_type = Plugin::instance()->controls_manager->get_control( $get_control['type'] );
			$control_name = $get_control['name'];

			if ( ! $control_type ) {
				return $get_element_instance;
			}

			if ( method_exists( $control_type, $method ) ) {
				$get_element_instance['settings'][ $control_name ] = $control_type->{$method}( $element->get_settings( $control_name ), $get_control );
			}
		}

		return $get_element_instance;
	}

    // custom js css
	public function bwdproeb_custom_jscss_register_controls($section, $section_id) {
            
		static $layout_sections = ['section_page_style'];
		
		if ( !in_array( $section_id, $layout_sections ) ) {
			return;
		}
		
		$section->start_controls_section(
			'bwd_addons_custom_js_section',
			[
				'tab'   => Controls_Manager::TAB_ADVANCED,
				'label' => esc_html__( 'BWD Custom JavaScript/CSS', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$section->add_control(
			'bwdproeb_custom_header_script',
			[
				'label'       => __('Header Script/CSS', BWDEB_ROOT_AUTHOR_PRO),
				'description' => __('Kindly input your personalized JavaScript script or CSS style in the designated field based on your requirements. Utilize the <script> tag for JavaScript or <style> tag for CSS appropriately.', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::CODE,
				'render_type' => 'ui',
				'separator'   => 'none',
			]
		);
		
		$section->add_control(
			'bwdproeb_custom_footer_script',
			[
				'label'       => __('Footer Script/CSS', BWDEB_ROOT_AUTHOR_PRO),
				'description' => __('Kindly input your personalized JavaScript script or CSS style in the designated field based on your requirements. Utilize the <script> tag for JavaScript or <style> tag for CSS appropriately.', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::CODE,
				'render_type' => 'ui',
				'separator'   => 'none',
			]
		);
		
		$section->end_controls_section();
		
	}
	
	public function bwdproeb_custom_jscss_header_script_render() {
		
		if ( Plugin::instance()->editor->is_edit_mode() || Plugin::instance()->preview->is_preview_mode() ) {
			return;
		}
		
		$document = Plugin::instance()->documents->get( get_the_ID() );
		
		if ( !$document ) {
			return;
		}
		
		$custom_js = $document->get_settings( 'bwdproeb_custom_header_script' );
		
		if ( empty( $custom_js ) ) {
			return;
		}
		echo $custom_js;
	}
	
	public function bwdproeb_custom_jscss_footer_script_render() {
		
		if ( Plugin::instance()->editor->is_edit_mode() || Plugin::instance()->preview->is_preview_mode() ) {
			return;
		}
		
		$document = Plugin::instance()->documents->get( get_the_ID() );
		
		if ( !$document ) {
			return;
		}
		
		$custom_js = $document->get_settings( 'bwdproeb_custom_footer_script' );
		
		if ( empty( $custom_js ) ) {
			return;
		}
		echo $custom_js;
	}

    // section_parallax
	public function bwdproeb_section_parallax_register_controls($section, $args) {

		$section->start_injection(
			[
				'type' => 'control',
				'at'   => 'after',
				'of'   => 'background_background',
			]
		);

		$section->add_control(
			'bwdproeb_section_parallax_on',
			[
				'label'        => esc_html__('BWD Parallax/Scrolling Effects', BWDEB_ROOT_AUTHOR_PRO),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'return_value' => 'yes',
				'description'  => esc_html__('Activate the option to enable parallax or scrolling background effects.', BWDEB_ROOT_AUTHOR_PRO),
				'separator'    => ['before'],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->add_control(
			'bwdproeb_section_parallax_x_value',
			[
				'label'       => esc_html__('Parallax X', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::SLIDER,
				'range'       => [
					'px' => [
						'min'  => -500,
						'max'  => 500,
						'step' => 10,
					],
				],
				'description' => esc_html__('What is the extent of parallax movement (x-axis) during scrolling?', BWDEB_ROOT_AUTHOR_PRO),
				'condition'   => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'background_background' => ['classic'],
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->add_control(
			'bwdproeb_section_parallax_value',
			[
				'label'       => esc_html__('Parallax Y', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::SLIDER,
				'range'       => [
					'px' => [
						'min'  => -500,
						'max'  => 500,
						'step' => 10,
					],
				],
				'default'     => [
					'unit' => 'px',
					'size' => -200,
				],
				'description' => esc_html__('What is the extent of parallax movement (y-axis) during scrolling?', BWDEB_ROOT_AUTHOR_PRO),
				'condition'   => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'background_background' => ['classic'],
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);


		$section->add_control(
			'bwdproeb_parallax_bg_colors',
			[
				'label'       => __('Colors', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::POPOVER_TOGGLE,
				'condition'   => [
					'bwdproeb_section_parallax_on' => 'yes',
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->start_popover();

		$section->add_control(
			'bwdproeb_parallax_bg_border_color_start',
			[
				'label'     => esc_html__('Border Color (Start)', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'bwdproeb_parallax_bg_colors' => 'yes'
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->add_control(
			'bwdproeb_parallax_bg_border_color_end',
			[
				'label'     => esc_html__('Border Color (End)', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'bwdproeb_parallax_bg_colors' => 'yes'
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->add_control(
			'bwdproeb_parallax_bg_color_start',
			[
				'label'     => esc_html__('Background Color (Start)', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'bwdproeb_parallax_bg_colors' => 'yes'
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->add_control(
			'bwdproeb_parallax_bg_color_end',
			[
				'label'     => esc_html__('Background Color (End)', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_section_parallax_on'   => 'yes',
					'bwdproeb_parallax_bg_colors' => 'yes'
				],
				'render_type'        => 'none',
				'frontend_available' => true,
			]
		);

		$section->end_popover();

		$section->end_injection();
	}

	public function bwdproeb_section_parallax_effects_before_render($section) {
		$settings = $section->get_settings_for_display();
		if ($settings['bwdproeb_section_parallax_on'] == 'yes') {
			wp_enqueue_script('ep-background-parallax');
		}
	}
	
    public function bwdproeb_section_parallax_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-scripts-scplx', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/section-parallax/scripts.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_script('bwdproeb-uikit-scplx', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/section-parallax/uikit.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
    }

    // Gradiant animated background
    public function bwdproeb_animated_gradient_background_register_section($element) {
        $element->start_controls_section(
            'bwdproeb_gra_anim_bg_section',
            [
                'tab' => Controls_Manager::TAB_STYLE,
                'label' => esc_html__('BWD Animated Gradient Background', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_animated_gradient_background_register_controls($section, $args) {

        $section->add_control(
            'bwdproeb_gra_anim_bg_show',
            [
                'label' => __('Use Animated Gradient BG', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'frontend_available' => true,
                'render_type' => 'template',
                'prefix_class' => 'element-pack-agbg-',
                'return_value' => 'yes',
                'default' => '',
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'start_color',
            [
                'label'   => __('Start Color', BWDEB_ROOT_AUTHOR_PRO),
                'default' => '#0591F9',
                'type'    => Controls_Manager::COLOR,
            ]
        );
        $repeater->add_control(
            'end_color',
            [
                'label'   => __('End Color', BWDEB_ROOT_AUTHOR_PRO),
                'default' => '#fefefe',
                'type'    => Controls_Manager::COLOR,
            ]
        );
        $section->add_control(
            'bwdproeb_gra_anim_bg_color_list',
            [
                'label'   => __('Color List', BWDEB_ROOT_AUTHOR_PRO),
                'type'    => Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'frontend_available' => true,
                'render_type' => 'none',
                'default' => [
                    [
                        'start_color'   => __('#0591F9', BWDEB_ROOT_AUTHOR_PRO),
                        'end_color'   => __('#fefefe', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'start_color'   => __('#567445', BWDEB_ROOT_AUTHOR_PRO),
                        'end_color'   => __('#1D1BE0', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
                'title_field' => '{{start_color}}',
                'condition' => [
                    'bwdproeb_gra_anim_bg_show' => 'yes'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_gra_anim_bg_blending_mode',
            [
                'label'      => __('Blend Mode', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SELECT,
                'default'    => 'hue',
                'options'    => [
                    'multiply'    => __('Multiply', BWDEB_ROOT_AUTHOR_PRO),
                    'screen'      => __('Screen', BWDEB_ROOT_AUTHOR_PRO),
                    'normal'      => __('Normal', BWDEB_ROOT_AUTHOR_PRO),
                    'overlay'     => __('Overlay', BWDEB_ROOT_AUTHOR_PRO),
                    'darken'      => __('Darken', BWDEB_ROOT_AUTHOR_PRO),
                    'lighten'     => __('Lighten', BWDEB_ROOT_AUTHOR_PRO),
                    'color-dodge' => __('Color Dodge', BWDEB_ROOT_AUTHOR_PRO),
                    'color-burn'  => __('Color Burn', BWDEB_ROOT_AUTHOR_PRO),
                    'hard-light'  => __('Hard Light', BWDEB_ROOT_AUTHOR_PRO),
                    'soft-light'  => __('Soft Light', BWDEB_ROOT_AUTHOR_PRO),
                    'difference'  => __('Difference', BWDEB_ROOT_AUTHOR_PRO),
                    'exclusion'   => __('Exclusion', BWDEB_ROOT_AUTHOR_PRO),
                    'hue'         => __('Hue', BWDEB_ROOT_AUTHOR_PRO),
                    'saturation'  => __('Saturation', BWDEB_ROOT_AUTHOR_PRO),
                    'color'       => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                    'luminosity'  => __('Luminosity', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'selectors' => [
                    '{{WRAPPER}}.element-pack-agbg-yes .bwdproeb-animated-gradient-background' => 'mix-blend-mode:{{VALUE}}'
                ],
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'background_background',
                            'operator' => '!==',
                            'value' => '',
                        ],
                        [
                            'name' => 'bwdproeb_gra_anim_bg_show',
                            'operator' => '===',
                            'value' => 'yes',
                        ],
                    ],
                ],
            ]
        );
        $section->add_control(
            'bwdproeb_gra_anim_bg_direction',
            [
                'label'      => __('Direction', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => Controls_Manager::SELECT,
                'default'    => 'diagonal',
                'separator'    => 'before',
                'frontend_available' => true,
                'render_type' => 'none',
                'options'    => [
                    'diagonal'   => __('Diagonal', BWDEB_ROOT_AUTHOR_PRO),
                    'left-right'     => __('Left Right', BWDEB_ROOT_AUTHOR_PRO),
                    'top-bottom'     => __('Top Bottom', BWDEB_ROOT_AUTHOR_PRO),
                    'radial'    => __('Radial', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'bwdproeb_gra_anim_bg_show' => 'yes'
                ]
            ]
        );
        $section->add_control(
            'bwdproeb_gra_anim_bg_transitionSpeed',
            [
                'label'         => __('Transition Speed', BWDEB_ROOT_AUTHOR_PRO),
                'type'          => Controls_Manager::SLIDER,
                'frontend_available' => true,
                'render_type' => 'none',
                'range'         => [
                    'px'        => [
                        'min'   => 100,
                        'max'   => 10000,
                        'step'  => 100,
                    ]
                ],
                'condition' => [
                    'bwdproeb_gra_anim_bg_show' => 'yes'
                ]
            ]
        );
    }

    public function bwdproeb_animated_gradient_background_should_script_enqueue($section) {
        if ('yes' === $section->get_settings_for_display('bwdproeb_gra_anim_bg_show')) {
            // $this->enqueue_scripts();
            wp_enqueue_style('bwdproeb-animated-gradient-background');
            wp_enqueue_script('bwdproeb-animated-gradient-background');
        }
    }

    public function bwdproeb_animated_gra_background_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-gra-anim-bg-asgranim', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/animated-bg/granim.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_script('bwdproeb-gra-anim-bg', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/animated-bg/sk.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true);
        wp_enqueue_style('bwdproeb-gra-anim-bg1', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/animated-bg/styles.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
    }

    // Backdrop Filter
    public function bwdproeb_backdrop_filter_register_controls($widget, $args) {

        $widget->add_control(
            'bwdproeb_control_backdrop_filter',
            [
                'label'         => __( 'BWD Backdrop Filter', BWDEB_ROOT_AUTHOR_PRO ),
                'type'          => Controls_Manager::POPOVER_TOGGLE,
                'return_value'  => 'yes',
                'separator'    => 'before',
                'prefix_class' => 'bwdproeb-backdrop-filter-',
            ]
        );

        $widget->start_popover();

        $widget->add_control(
            'bwdproeb_control_bf_blur',
            [
                'label' => _x( 'Blur', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 25,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-blur: {{SIZE}}px;'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_brightness', 
            [
                'label' => _x( 'Brightness', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                'render_type' => 'ui',
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 10,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-brightness: {{SIZE}}%;'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_contrast',
            [
                'label' => _x( 'Contrast', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-contrast: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_grayscale',
            [
                'label' => _x( 'Grayscale', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-grayscale: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_invert',
            [
                'label' => _x( 'Invert', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-invert: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_opacity',
            [
                'label' => _x( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-opacity: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_sepia',
            [
                'label' => _x( 'Sepia', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-sepia: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_saturate',
            [
                'label' => _x( 'Saturate', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-saturate: {{SIZE}};'
				],
            ]
        );

        $widget->add_control(
            'bwdproeb_control_bf_hue_rotate',
            [
                'label' => _x( 'Hue Rotate', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                    ],
                ],
                'condition' => [
                    'bwdproeb_control_backdrop_filter' => 'yes'
                ],
                'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-backdrop-filter-hue-rotate: {{SIZE}}deg;'
				],
            ]
        );

        $widget->end_popover();

        $widget->add_control(
			'bwdproeb_backdrop_filter_notice',
			[
				'type' => Controls_Manager::RAW_HTML,
				'raw' => sprintf( __( 'Enable Firefox compatibility for optimal feature functionality. Instructions provided %1s here. %2s', BWDEB_ROOT_AUTHOR_PRO ), '<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/backdrop-filter#Browser_compatibility" target="_blank">', '</a>' ),
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
			]
		);

    }

    public function bwdproeb_backdrop_filter_enqueue_scripts() {
        wp_enqueue_style('bwdproeb-backdrop-filter', plugin_dir_url( __FILE__ ) . '../assets/public/css/extensions/backdrop-filter.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
    }

    // For grid line
	public function bwdproeb_grid_line_register_controls($section){
		$section->start_controls_section(
			'bwdproeb_grid_line_section',
			[
				'tab'   => Controls_Manager::TAB_SETTINGS,
				'label' => esc_html__('BWD Grid Line', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_enable',
			[
				'label'              => esc_html__('Grid Line?', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'render_type'        => 'template',
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_line_color',
			[
				'label' => __('Line Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-grid-line-color: {{VALUE}}',
				],
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_column_color',
			[
				'label' => __('Column Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-grid-line-column-color: {{VALUE}}',
				],
			]
		);


		$section->add_responsive_control(
			'bwdproeb_grid_line_columns',
			[
				'label' => __('Columns', BWDEB_ROOT_AUTHOR_PRO),
				'type' =>  Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 12,
				'step'      => 1,
				'devices' => ['desktop', 'tablet', 'mobile'],
				'desktop_default' => 12,
				'tablet_default' => 12,
				'mobile_default' => 12,
				'render_type'        => 'none',
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => ['{{WRAPPER}}' => '--bwdproeb-grid-line-columns: {{VALUE}}']
			]
		);
		
		
		$section->add_control(
			'bwdproeb_grid_line_outline',
			[
				'label'              => esc_html__('Outline', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => Controls_Manager::SWITCHER,
				'render_type'        => 'none',
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => ['body::before' => 'outline: var(--bwdproeb-grid-line-width, 1px) solid var(--bwdproeb-grid-line-color, #eee)']
			]
		);

		$section->add_responsive_control(
			'bwdproeb_grid_line_max_width',
			[
				'label' => __('Max Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 3800,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => ['desktop', 'tablet', 'mobile'],
				'render_type'        => 'none',
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => ['{{WRAPPER}}' => '--bwdproeb-grid-line-max-width: {{SIZE}}{{UNIT}}']
			]
		);

		$section->add_responsive_control(
			'bwdproeb_grid_line_line_width',
			[
				'label' => __('Line Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 200,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 1,
				],
				'render_type'        => 'none',
				'devices' => ['desktop', 'tablet', 'mobile'],
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => ['{{WRAPPER}}' => '--bwdproeb-grid-line-width: {{SIZE}}{{UNIT}}']
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_direction',
			[
				'label' => __('Line Direction (deg)', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -360,
						'max' => 360,
						'step' => 15,
					],
				],
				'render_type'        => 'none',
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-grid-line-direction: {{SIZE}}deg;',
				],
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_z_index',
			[
				'label' => __('Z-index', BWDEB_ROOT_AUTHOR_PRO),
				'type' =>  Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 9999,
				'render_type'        => 'none',
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--bwdproeb-grid-line-z-index: {{VALUE}};',
				],
			]
		);

		$section->add_control(
			'bwdproeb_grid_line_output',
			[
				'type' =>  Controls_Manager::HIDDEN,
				'default' => '1',
				'selectors' => [
					'body' => 'position: relative;',
					'body::before' => '
									content: "";
									position: absolute;
									top: 0;
									right: 0;
									bottom: 0;
									left: 0;
									margin-right: auto;
									margin-left: auto;
									pointer-events: none;
									z-index: var(--bwdproeb-grid-line-z-index, 0);
									min-height: 100vh;

									width: calc(100% - (2 * 0px));
									max-width: var(--bwdproeb-grid-line-max-width, 100%);
									background-size: calc(100% + var(--bwdproeb-grid-line-width, 1px)) 100%;
									background-image: repeating-linear-gradient(var(--bwdproeb-grid-line-direction, 90deg), var(--bwdproeb-grid-line-column-color, transparent), var(--bwdproeb-grid-line-column-color, transparent) calc((100% / var(--bwdproeb-grid-line-columns, 12)) - var(--bwdproeb-grid-line-width, 1px)), var(--bwdproeb-grid-line-color, #eee) calc((100% / var(--bwdproeb-grid-line-columns, 12)) - var(--bwdproeb-grid-line-width, 1px)), var(--bwdproeb-grid-line-color, #eee) calc(100% / var(--bwdproeb-grid-line-columns, 12)));'
					
				],
				'condition' => [
					'bwdproeb_grid_line_enable' => 'yes'
				]
			]
		);

		$section->end_controls_section();
	}

    public function bwdproeb_grid_line_enqueue_scripts() {
        wp_enqueue_style('bwdproeb-helper-grid-line', plugin_dir_url( __FILE__ ) . '../assets/public/css/extensions/helper.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
    }

    // Cursor img parallax
    public function bwdproeb_cursor_img_parallax_register_section($element) {
        $element->start_controls_section(
            'bwdproeb_cursor_img_parallax_section',
            [
                'tab' => Controls_Manager::TAB_ADVANCED,
                'label' => esc_html__('BWD Cursor Image Parallax', 'visibility-logic-elementor'),
            ]
        );
        $element->end_controls_section();
    }

    public function bwdproeb_cursor_img_parallax_register_controls($section, $args) {

        $section->start_controls_tabs('bwdproeb_cursor_img_parallax_tabs');

        $section->start_controls_tab(
            'bwdproeb_section_image_parallax_tab',
            [
                'label' => __('Image', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_title',
            [
                'label' => __('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::TEXT,
                'default' => __('Parallax 1', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'render_type' => 'ui',
            ]
        );

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_image',
            [
                'label' => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_depth',
            [
                'label' => __('Depth', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'default' => 0.1,
                'min' => 0,
                'max' => 10,
                'step' => 0.1,
            ]
        );

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_bgp_x',
            [
                'label' => __('Image X Position', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'default' => 50,
            ]
        );

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_bgp_y',
            [
                'label' => __('Image Y Position', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'default' => 50,
            ]
        );

        $repeater->add_control(
            'bwdproeb_cursor_img_parallax_bg_size',
            [
                'label' => __('Image Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'cover',
                'options' => [
                    'auto' => __('Auto', BWDEB_ROOT_AUTHOR_PRO),
                    'cover' => __('Cover', BWDEB_ROOT_AUTHOR_PRO),
                    'contain' => __('Contain', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );


        $section->add_control(
            'bwdproeb_cursor_img_parallax_elements',
            [
                'label' => __('Parallax Items', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'title_field' => '{{{ bwdproeb_cursor_img_parallax_title }}}',
            ]
        );


        $section->add_control(
            'bwdproeb_cursor_img_parallax_mode',
            [
                'label' => esc_html__('Parallax Mode', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__('Relative', BWDEB_ROOT_AUTHOR_PRO),
                    'clip' => esc_html__('Clip', BWDEB_ROOT_AUTHOR_PRO),
                    'hover' => esc_html__('Hovar (Mobile also turn off)', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );


        $section->end_controls_tab();

        $section->start_controls_tab(
            'bwdproeb_section_color_parallax_tab',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );


        $section->add_control(
            'bwdproeb_sbgc_parallax_show',
            [
                'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'return_value' => 'yes',
            ]
        );

        $section->add_control(
            'bwdproeb_sbgc_parallax_sc',
            [
                'label' => esc_html__('Start Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'bwdproeb_sbgc_parallax_show' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sbgc_parallax_ec',
            [
                'label' => esc_html__('End Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'bwdproeb_sbgc_parallax_show' => 'yes',
                ],

            ]
        );

        $section->add_control(
            'bwdproeb_sbc_parallax_show',
            [
                'label' => __('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'return_value' => 'yes',
                'separator' => 'before',
            ]
        );

        $section->add_control(
            'bwdproeb_sbc_parallax_sc',
            [
                'label' => esc_html__('Start Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'bwdproeb_sbc_parallax_show' => 'yes',
                ],
            ]
        );

        $section->add_control(
            'bwdproeb_sbc_parallax_ec',
            [
                'label' => esc_html__('End Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'bwdproeb_sbc_parallax_show' => 'yes',
                ],

            ]
        );
        $section->end_controls_tab();
        $section->end_controls_tabs();
    }

    public function bwdproeb_cursor_img_parallax_before_render($section) {
        $parallax_elements = $section->get_settings('bwdproeb_cursor_img_parallax_elements');
        $settings = $section->get_settings();

        if ('yes' === $settings['bwdproeb_sbgc_parallax_show']) {
            $color1 = ($settings['bwdproeb_sbgc_parallax_sc']) ? $settings['bwdproeb_sbgc_parallax_sc'] : '#fff';
            $color2 = ($settings['bwdproeb_sbgc_parallax_ec']) ? $settings['bwdproeb_sbgc_parallax_ec'] : '#fff';
            $section->add_render_attribute('_wrapper', 'data-bwdproeb-parallax', 'background-color: ' . $color1 . ',' . $color2 . ';');
        }

        if ('yes' === $settings['bwdproeb_sbc_parallax_show']) {
            $color1 = ($settings['bwdproeb_sbc_parallax_sc']) ? $settings['bwdproeb_sbc_parallax_sc'] : '#fff';
            $color2 = ($settings['bwdproeb_sbc_parallax_ec']) ? $settings['bwdproeb_sbc_parallax_ec'] : '#fff';
            $section->add_render_attribute('_wrapper', 'data-bwdproeb-parallax', 'border-color: ' . $color1 . ',' . $color2 . ';');
        }

        if (!empty($parallax_elements)) {
            // $this->enqueue_scripts();
            wp_enqueue_style('bwdproeb-image-parallax');
            $id = $section->get_id();
            $section->add_render_attribute('scene', 'class', 'parallax-scene');
            $section->add_render_attribute('_wrapper', 'class', 'has-bwdproeb-parallax');

            if ('relative' === $settings['bwdproeb_cursor_img_parallax_mode']) {
                $section->add_render_attribute('scene', 'data-relative-input', 'true');
            } elseif ('clip' === $settings['bwdproeb_cursor_img_parallax_mode']) {
                $section->add_render_attribute('scene', 'data-clip-relative-input', 'true');
            } elseif ('hover' === $settings['bwdproeb_cursor_img_parallax_mode']) {
                $section->add_render_attribute('scene', 'data-hover-only', 'true');
            }
            ?>
            <div data-parallax-id="bwdproeb_scene<?php echo esc_attr($id); ?>" id="bwdproeb_scene<?php echo esc_attr($id); ?>" <?php echo $section->get_render_attribute_string('scene'); ?>>
                <?php foreach ($parallax_elements as $index => $item) : ?>
                    <?php
                    $image_src = wp_get_attachment_image_src($item['bwdproeb_cursor_img_parallax_image']['id'], 'full');
                    if ($item['bwdproeb_cursor_img_parallax_bgp_x']) {
                        $section->add_render_attribute('item', 'style', 'background-position-x: ' . $item['bwdproeb_cursor_img_parallax_bgp_x'] . '%;', true);
                    }
                    if ($item['bwdproeb_cursor_img_parallax_bgp_y']) {
                        $section->add_render_attribute('item', 'style', 'background-position-y: ' . $item['bwdproeb_cursor_img_parallax_bgp_y'] . '%;');
                    }
                    if ($item['bwdproeb_cursor_img_parallax_bg_size']) {
                        $section->add_render_attribute('item', 'style', 'background-size: ' . $item['bwdproeb_cursor_img_parallax_bg_size'] . ';');
                    }
                    if (isset($image_src[0])) {
                        $section->add_render_attribute('item', 'style', 'background-image: url(' . esc_url($image_src[0]) . ');');
                    }
                    ?>
                    <div data-depth="<?php echo esc_attr($item['bwdproeb_cursor_img_parallax_depth']); ?>" class="bwdproeb-scene-item" <?php echo $section->get_render_attribute_string('item'); ?>></div>
                <?php endforeach; ?>
            </div>
        <?php
        }
    }

    public function bwdproeb_cursor_img_parallax_enqueue_scripts() {
        wp_enqueue_script('bwdproeb-cur-img-prlx', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/img-parallax/parallax.min.js', ['jquery'], '2', true);
        wp_enqueue_style('bwdproeb-cur-img-prlx', plugin_dir_url( __FILE__ ) . '../assets/public/js/extension/img-parallax/image-parallax.css', null, '2', 'all');
    }

    protected function add_actions() {
        if(get_option('bwdeb-extn-tooltip', 'off')=='on'){
            add_action('elementor/element/common/_section_style/after_section_end', [$this, 'bwdproeb_tooltip_register_section']);
            add_action('elementor/element/common/section_bwdproeb_tooltip_controls/before_section_end', [$this, 'bwdproeb_tooltip_register_controls'], 10, 2);
            //render scripts
            add_action('elementor/frontend/widget/before_render', [$this, 'bwdproeb_tooltip_should_script_enqueue']);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_tooltip_enqueue_scripts']);
        }
		if(get_option('bwdeb-3d-text', 'off')=='on'){
			add_action('elementor/element/heading/section_title_style/before_section_start', [$this, 'bwdproeb_register_section']);
			add_action('elementor/element/heading/section_skbwd_threed_text_controls/before_section_end', [$this, 'bwdproeb_register_controls'], 10, 2);
			add_action('wp_enqueue_scripts', [$this, 'bwdproeb_enqueue_scripts']);
		}
		if(get_option('bwdeb-notation', 'off')=='on'){
			add_action('elementor/element/common/_section_style/after_section_end', [$this, 'bwdproeb_notation_register_section']);
			add_action('elementor/element/common/section_bwdproeb_notation_controls/before_section_end', [$this, 'bwdproeb_notation_register_controls'], 10, 2);
			add_action('wp_enqueue_scripts', [$this, 'bwdproeb_notation_enqueue_scripts']);
		}
		if(get_option('bwdeb-confetti-effects', 'off')=='on'){
            add_action('elementor/element/common/_section_style/after_section_end', [$this, 'bwdproeb_conffects_register_section']);
            add_action('elementor/element/common/section_bwdproeb_confetti_controls/before_section_end', [$this, 'bwdproeb_conffects_register_controls'], 10, 2);
            add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'bwdproeb_conffects_register_section']);
            add_action('elementor/element/section/section_bwdproeb_confetti_controls/before_section_end', [$this, 'bwdproeb_conffects_register_controls'], 10, 2);
            add_action('elementor/element/container/section_layout/after_section_end', [$this, 'bwdproeb_conffects_register_section']);
            add_action('elementor/element/container/section_bwdproeb_confetti_controls/before_section_end', [$this, 'bwdproeb_conffects_register_controls'], 10, 2);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_conffects_enqueue_scripts']);
        }
        if(get_option('bwdeb-cursor-effects', 'off')=='on'){
            add_action('elementor/element/common/_section_style/after_section_end', [$this, 'bwdproeb_cursor_effect_register_section']);
            add_action('elementor/element/common/bwdproeb_cursor_effects_section/before_section_end', [$this, 'bwdproeb_cursor_effect_register_controls'], 10, 2);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_cursor_effect_enqueue_scripts']);
        }
        if(get_option('bwdeb-reveal-effects', 'off')=='on'){
            add_action('elementor/element/common/_section_style/after_section_end', [$this, 'bwdproeb_reveal_effect_register_section']);
            add_action('elementor/element/common/section_bwdproeb_reveal_controls/before_section_end', [$this, 'bwdproeb_reveal_effect_register_controls'], 10, 2);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_reveal_effect_enqueue_scripts']);
        }
        if(get_option('bwdeb-tile-scroll', 'off')=='on'){
            add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'bwdproeb_tile_scroll_register_section']);
            add_action('elementor/element/section/bwdproeb_tile_scroll_section/before_section_end', [$this, 'bwdproeb_tile_scroll_register_controls'], 10, 2);
            add_action('elementor/frontend/section/before_render', [$this, 'bwdproeb_tile_scroll_before_render'], 10, 1);
            add_action('elementor/element/container/section_layout/after_section_end', [$this, 'bwdproeb_tile_scroll_register_section']);
            add_action('elementor/element/container/bwdproeb_tile_scroll_section/before_section_end', [$this, 'bwdproeb_tile_scroll_register_controls'], 10, 2);
            add_action('elementor/frontend/container/before_render', [$this, 'bwdproeb_tile_scroll_before_render'], 10, 1);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_tile_scroll_assets_for_the_public']);
        }
        if(get_option('bwdeb-section-sticky', 'off')=='on'){
            add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'bwdproeb_section_sticky_register_section']);
            add_action('elementor/element/section/ext_bwdproeb_sticky_section/before_section_end', [$this, 'bwdproeb_section_sticky_register_controls'], 10, 2);
            add_action('elementor/frontend/section/before_render', [$this, 'bwdproeb_sticky_before_render'], 10, 1);
            add_action('elementor/frontend/section/after_render', [$this, 'bwdproeb_sticky_script_render'], 10, 1);
            add_action('elementor/element/container/section_layout/after_section_end', [$this, 'bwdproeb_section_sticky_register_section']);
            add_action('elementor/element/container/ext_bwdproeb_sticky_section/before_section_end', [$this, 'bwdproeb_section_sticky_register_controls'], 10, 2);
            add_action('elementor/frontend/container/before_render', [$this, 'bwdproeb_sticky_before_render'], 10, 1);
            add_action('elementor/frontend/container/after_render', [$this, 'bwdproeb_sticky_script_render'], 10, 1);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_section_sticky_all_assets_for_the_public']);
        }
        if(get_option('bwdeb-scroll-box', 'off')=='on'){
            add_action('elementor/element/text-editor/section_style/after_section_end', [$this, 'bwdproeb_scroll_box_register_section']);
            add_action('elementor/element/text-editor/bwdproeb_section_scroll_box/before_section_end', [$this, 'bwdproeb_scroll_box_register_controls'], 10, 2);
            
            add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'bwdproeb_scroll_box_register_section']);
            add_action('elementor/element/section/bwdproeb_section_scroll_box/before_section_end', [$this, 'bwdproeb_scroll_box_register_controls'], 10, 2);
            
            add_action('elementor/element/container/section_shape_divider/after_section_end', [$this, 'bwdproeb_scroll_box_register_section']);
            add_action('elementor/element/container/bwdproeb_section_scroll_box/before_section_end', [$this, 'bwdproeb_scroll_box_register_controls'], 10, 2);
            
        }
        if(get_option('bwdeb-background-particles', 'off')=='on'){
            add_action('elementor/element/container/section_background/after_section_end', [$this, 'bwdproeb_section_particles_register_section']);
            add_action('elementor/element/container/bwdproeb_section_background_particles_controls/before_section_end', [$this, 'bwdproeb_section_particles_register_controls'], 10, 2);
            add_action('elementor/frontend/container/after_render', [$this, 'bwdproeb_section_particles_should_script_enqueue']);
            add_action('elementor/element/section/section_background/after_section_end', [$this, 'bwdproeb_section_particles_register_section']);
            add_action('elementor/element/section/bwdproeb_section_background_particles_controls/before_section_end', [$this, 'bwdproeb_section_particles_register_controls'], 10, 2);
            //render scripts
            add_action('elementor/frontend/section/after_render', [$this, 'bwdproeb_section_particles_should_script_enqueue']);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_section_particles_enqueue_scripts']);
        }
        if(get_option('bwdeb-custom-jscss', 'off')=='on'){
            add_action( 'elementor/element/after_section_end', [$this, 'bwdproeb_custom_jscss_register_controls'], 10, 2 );
            add_action( 'wp_head', [$this, 'bwdproeb_custom_jscss_header_script_render'], 999 );
            add_action( 'wp_footer', [$this, 'bwdproeb_custom_jscss_footer_script_render'], 999 );
        }
        if(get_option('bwdeb-section-parallax', 'off')=='on'){
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_section_parallax_enqueue_scripts']);
            add_action('elementor/element/section/section_background/before_section_end', [$this, 'bwdproeb_section_parallax_register_controls'], 10, 2);
            add_action('elementor/frontend/section/before_render', [$this, 'bwdproeb_section_parallax_effects_before_render'], 10, 1);
            add_action('elementor/element/container/section_background/before_section_end', [$this, 'bwdproeb_section_parallax_register_controls'], 10, 2);
            add_action('elementor/frontend/container/before_render', [$this, 'bwdproeb_section_parallax_effects_before_render'], 10, 1);
        }
        if(get_option('bwdeb-gra-anim-bg', 'off')=='on'){
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_animated_gra_background_enqueue_scripts']);
            add_action('elementor/element/section/section_background/after_section_end', [$this, 'bwdproeb_animated_gradient_background_register_section']);
            add_action('elementor/element/section/bwdproeb_gra_anim_bg_section/before_section_end', [$this, 'bwdproeb_animated_gradient_background_register_controls'], 10, 2);
            add_action('elementor/frontend/section/before_render', [$this, 'bwdproeb_animated_gradient_background_should_script_enqueue']);
            add_action('elementor/element/container/section_background/after_section_end', [$this, 'bwdproeb_animated_gradient_background_register_section']);
            add_action('elementor/element/container/bwdproeb_gra_anim_bg_section/before_section_end', [$this, 'bwdproeb_animated_gradient_background_register_controls'], 10, 2);
            add_action('elementor/frontend/container/before_render', [$this, 'bwdproeb_animated_gradient_background_should_script_enqueue']);
        }
        if(get_option('bwdeb-backdrop-filter', 'off')=='on'){
            add_action('elementor/element/column/section_style/before_section_end', [$this, 'bwdproeb_backdrop_filter_register_controls'], 10, 2);
            add_action('elementor/element/common/_section_background/before_section_end', [$this, 'bwdproeb_backdrop_filter_register_controls'], 10, 2);
            add_action('elementor/element/container/section_background/before_section_end', [$this, 'bwdproeb_backdrop_filter_register_controls'], 10, 2);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_backdrop_filter_enqueue_scripts']);
        }
        if(get_option('bwdeb-line-grid', 'off')=='on'){
            add_action('elementor/documents/register_controls', [$this, 'bwdproeb_grid_line_register_controls'], 1, 1);
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_grid_line_enqueue_scripts']);
        }
        if(get_option('bwdeb-cursor-img-parallax', 'off')=='on'){
            add_action('wp_enqueue_scripts', [$this, 'bwdproeb_cursor_img_parallax_enqueue_scripts']);
            add_action('elementor/element/container/section_layout/after_section_end', [$this, 'bwdproeb_cursor_img_parallax_register_section']);
            add_action('elementor/element/container/bwdproeb_cursor_img_parallax_section/before_section_end', [$this, 'bwdproeb_cursor_img_parallax_register_controls'], 10, 2);
            add_action('elementor/frontend/container/before_render', [$this, 'bwdproeb_cursor_img_parallax_before_render'], 10, 1);
            // Add section for settings
            add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'bwdproeb_cursor_img_parallax_register_section']);
            add_action('elementor/element/section/bwdproeb_cursor_img_parallax_section/before_section_end', [$this, 'bwdproeb_cursor_img_parallax_register_controls'], 10, 2);
            add_action('elementor/frontend/section/before_render', [$this, 'bwdproeb_cursor_img_parallax_before_render'], 10, 1);
        }
    }

    public function __construct() {
		$this->add_actions();
        if(get_option('bwdeb-xd-copy', 'off')=='on'){
            add_action( 'wp_ajax_bwdproeb_xd_copy_fetch_content', array( $this, 'bwdproeb_xdcp_fetch_content_data' ) );
            add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'bwdproeb_enqueue_xd_copy_scripts' ) );
        }
    }
}
