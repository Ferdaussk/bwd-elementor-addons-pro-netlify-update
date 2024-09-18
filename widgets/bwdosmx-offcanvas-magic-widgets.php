<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BWDEB_MHelper {
	// Get all WordPress registered widgets
    public static function get_registered_sidebars()
    {
        global $wp_registered_sidebars;
        $options = [];

        if (!$wp_registered_sidebars) {
            $options[''] = __('No sidebars were found', BWDEB_ROOT_AUTHOR_PRO);
        } else {
            $options['---'] = __('Choose Sidebar', BWDEB_ROOT_AUTHOR_PRO);

            foreach ($wp_registered_sidebars as $sidebar_id => $sidebar) {
                $options[$sidebar_id] = $sidebar['name'];
            }
        }
        return $options;
    }
}

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdosmx_OffcanvasMagic_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdosmx-offcanvas-slide-magic', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Offcanvas Slide Magic', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-sidebar bwdeb-elementor-bundle';
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

    protected function register_controls(){

		$this->start_controls_section(
			'bwdosmx_offcanvas_content_section',
			[
				'label' => esc_html__( 'Offcanvas Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_header_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Offcanvas title', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
                    'active' => true,
                ],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_content_type',
			[
				'label' => esc_html__( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'custom' => esc_html__( 'Custom Content', BWDEB_ROOT_AUTHOR_PRO ),
					'sv-template' => esc_html__( 'Save Template', BWDEB_ROOT_AUTHOR_PRO ),
					'sidebar' => esc_html__( 'Sidebar', BWDEB_ROOT_AUTHOR_PRO ),
					'shortcode' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdosmx_offcanvas_custom_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title 1', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
                    'active' => true,
                ],
			]
		);

		$repeater->add_control(
			'bwdosmx_offcanvas_custom_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Offcanvas description goes here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_control(
            'bwdosmx_offcanvas_repeater_list',
            [
                'label'       => esc_html__( 'Offcanvas Custom Content', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'seperator'   => 'before',
                'default'     => [
                    [
                        'bwdosmx_offcanvas_custom_title'    => esc_html__( 'Title 1', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdosmx_offcanvas_custom_description'    => esc_html__( 'Offcanvas description goes here', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'bwdosmx_offcanvas_custom_title'    => esc_html__( 'Title 2', BWDEB_ROOT_AUTHOR_PRO ),
                        'bwdosmx_offcanvas_custom_description'    => esc_html__( 'Offcanvas description goes here', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                ],
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ bwdosmx_offcanvas_custom_title }}}',
				'condition' => [
                    'bwdosmx_offcanvas_content_type' => 'custom',
                ],
            ]
        );



		//content type save template

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdosmx_offcanvas_content_type_sv_template',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition' => [
                    'bwdosmx_offcanvas_content_type' => 'sv-template',
                ],
			]
		);


		// Get all WordPress registered widgets
		$registered_sidebars = BWDEB_MHelper::get_registered_sidebars();
        
        $this->add_control(
            'bwdosmx_sidebar',
            [
                'label' => __('Choose Sidebar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => array_shift($registered_sidebars),
                'options' => $registered_sidebars,
                'condition' => [
                    'bwdosmx_offcanvas_content_type' => 'sidebar',
                ],
            ]
        );


		$this->add_control(
			'bwdosmx_offcanvas_shortcode_content_fixed',
			[
				'label' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__( '[shortcode-here]', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdosmx_offcanvas_content_type' => [ 'shortcode' ]
				]
			]
		);


		//Offcanvas Visible Content-----------------------------------------------
		$this->add_control(
			'bwdosmx_offcanvas_frontend_heading',
			[
				'label' => esc_html__( 'Offcanvas Visible Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_front_content_type',
			[
				'label' => esc_html__( 'Visible Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'button',
				'options' => [
					'button' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
					'svv-template' => esc_html__( 'Save Template', BWDEB_ROOT_AUTHOR_PRO ),
					'shortcode' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdosmx_offcanvas_frontend_content',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition' => [
					'bwdosmx_offcanvas_front_content_type' => 'svv-template',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_shortcode_content',
			[
				'label' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__( '[shortcode-here]', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdosmx_offcanvas_front_content_type' => 'shortcode',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdosmx_offcanvas_toggle_button_section',
			[
				'label' => esc_html__( 'Toggle & Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_text',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdosmx_offcanvas_front_content_type' => 'button',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_icon_switch',
			[
				'label' => esc_html__( 'Need Button Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdosmx_offcanvas_front_content_type' => 'button',
				],
			]
		);
		$this->add_control(
			'bwdosmx_toggle_button_icon',
			[
				'label' => esc_html__( 'Toggle Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-xmark',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdosmx_offcanvas_toggle_button_icon_switch' => 'yes',
					'bwdosmx_offcanvas_front_content_type' => 'button',
				],
			]
		);
		$this->add_control(
			'bwdosmx_toggle_button_icon_position',
			[
				'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'row',
				'options' => [
					'column' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column-reverse' => esc_html__( 'Column Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'row' => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse' => esc_html__( 'Row Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-toggle-wrap a' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'bwdosmx_offcanvas_toggle_button_icon_switch' => 'yes',
					'bwdosmx_offcanvas_front_content_type' => 'button',
				],
			]
		);
		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_icon',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-toggle-wrap a' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdosmx_offcanvas_toggle_button_icon_switch' => 'yes',
					'bwdosmx_offcanvas_front_content_type' => 'button',
				],
			]
		);
		$this->add_responsive_control(
			'bwdosmx_offcanvas_toggle_button_icon_alignment',
			[
				'label'       => esc_html__( 'Alignment', 'bwdpclx-imreeff' ),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options'     => [
					'left'   => [
						'title' => esc_html__( 'Left', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => esc_html__( 'Right', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'     => 'left',
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-offcanvas-toggle-wrap' => 'text-align: {{VALUE}};',
				],
			]
		);

		// Get close button
		$this->add_control(
			'bwdosmx_colse_button_heading',
			[
				'label' => esc_html__( 'Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdosmx_colse_button_switch',
			[
				'label' => esc_html__( 'Need Close Button?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdosmx_colse_button_icon',
			[
				'label' => esc_html__( 'Close Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-xmark',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdosmx_colse_button_switch' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdosmx_offcanvas_settings_section',
			[
				'label' => esc_html__( 'Offcanvas Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_settings_directions',
			[
				'label' => esc_html__( 'Magic Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'popup' => esc_html__( 'Popup', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_settings_fixed_transition',
			[
				'label'       => esc_html__('Offcanvas Transition', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => 1,
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'transition: all {{SIZE}}s ease-in-out',
				],
			]
		);
		$this->add_control(
			'bwdosmx_offcanvas_settings_fixed_transition_delay',
			[
				'label'       => esc_html__('Offcanvas Delay', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'transition-delay: {{SIZE}}s',
				],
			]
		);

		//overlay switcher----------------------------------------
		$this->add_control(
			'bwdosmx_overlay_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdosmx_offcanvas_settings_overlay_switch',
			[
				'label' => esc_html__( 'Need Overlay?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdosmx_offcanvas_settings_overlay_directions',
			[
				'label' => esc_html__( 'Overlay Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'popup' => esc_html__( 'Popup', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdosmx_offcanvas_settings_overlay_switch' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_settings_overlay_transition',
			[
				'label'       => esc_html__('Overlay Transition', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => 0.6,
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-overlay' => 'transition: all {{SIZE}}s ease-in-out',
				],
				'condition' => [
					'bwdosmx_offcanvas_settings_overlay_switch' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdosmx_offcanvas_settings_overlay_transition_delay',
			[
				'label'       => esc_html__('Overlay Transition Delay', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-overlay' => 'transition-delay: {{SIZE}}s',
				],
				'condition' => [
					'bwdosmx_offcanvas_settings_overlay_switch' => 'yes',
				],
			]
		);

		$this->end_controls_section();


		// tab style--------------------------------------------------------------------

		$this->start_controls_section(
			'bwdosmx_offcanvas_bar_section',
			[
				'label' => esc_html__( 'Offcanvas Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_bar_width',
			[
				'label' => esc_html__( 'Offcanvas Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 350,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_bar_height',
			[
				'label' => esc_html__( 'Offcanvas Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_bar_background_type',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-ofcanvas-fixed',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_bar_border',
				'selector' => '{{WRAPPER}} .bwdosmx-ofcanvas-fixed',
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_bar_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdosmx_offcanvas_bar_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_bar_box_shadow',
				'selector' => '{{WRAPPER}} .bwdosmx-ofcanvas-fixed',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdosmx_offcanvas_bar_content_section',
			[
				'label' => esc_html__( 'Offcanvas Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_content_alignment',
			[
				'label'       => esc_html__( 'Alignment', 'bwdpclx-imreeff' ),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options'     => [
					'left'   => [
						'title' => esc_html__( 'Left', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => esc_html__( 'Right', 'bwdpclx-imreeff' ),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'     => 'left',
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-fixed' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdosmx_box_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdosmx_box_heading',
			[
				'label' => esc_html__( 'Box', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_responsive_control(
			'bwdosmx_box_spacing',
			[
				'label' => esc_html__( 'Box Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-custom-widget:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_box_background',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-offcanvas-custom-widget',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_box__border',
				'selector' => '{{WRAPPER}} .bwdosmx-offcanvas-custom-widget',
			]
		);

		$this->add_control(
			'bwdosmx_box_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-custom-widget' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdosmx_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-custom-widget' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_box_box_shadow',
				'selector' => '{{WRAPPER}} .bwdosmx-offcanvas-custom-widget',
			]
		);

		$this->add_control(
			'bwdosmx_box_title_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdosmx_box_title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdosmx_box_title_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-widget-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdosmx_box_title_text_typography',
				'selector' => '{{WRAPPER}} .bwdosmx-offcanvas-widget-title',
			]
		);
		$this->add_control(
			'bwdosmx_box_title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-widget-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdosmx_box_description_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'bwdosmx_box_description_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdosmx_box_description_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-widget-description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdosmx_box_description_text_typography',
				'selector' => '{{WRAPPER}} .bwdosmx-offcanvas-widget-description',
			]
		);
		$this->add_control(
			'bwdosmx_box_description_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-offcanvas-widget-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdosmx_offcanvas_bar_title_section',
			[
				'label' => esc_html__( 'Offcanvas Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdosmx_offcanvas_header_title!' => '',
				],
			]
		);

		$this->add_control(
			'bwdosmx_box_header_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-header-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdosmx_box_header_text_typography',
				'selector' => '{{WRAPPER}} .bwdosmx-ofcanvas-header-title',
			]
		);

		$this->add_control(
			'bwdosmx_box_header_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-header-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		//toggle button
		$this->start_controls_section(
			'bwdosmx_offcanvas_toggle_button__section',
			[
				'label' => esc_html__( 'Offcanvas Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->start_controls_tabs(
			'bwdosmx_offcanvas_toggle_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdosmx_offcanvas_toggle_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);



		$this->add_control(
			'bwdosmx_box_toggle_btn_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button span i' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 18,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button span i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdosmx_box_toggle_btn_icon_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_typography',
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_background',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_border',
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button',
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_toggle_button_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdosmx_offcanvas_toggle_button_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdosmx_offcanvas_toggle_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdosmx_offcanvas_toggle_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button:hover span i' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_text_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_background_hover',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_border_hover',
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button:hover',
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_toggle_button_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-visible-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_toggle_button_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdosmx-visible-button:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		//closes button
		$this->start_controls_section(
			'bwdosmx_offcanvas_closes_button__section',
			[
				'label' => esc_html__( 'Offcanvas Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdosmx_colse_button_switch' => 'yes',
				],
			]
		);


		$this->start_controls_tabs(
			'bwdosmx_offcanvas_closes_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdosmx_offcanvas_closes_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 18,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_icon_box_size',
			[
				'label' => esc_html__( 'Icon Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn' => 'width: {{SIZE}}{{UNIT}}!important; height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_background',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_border',
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn',
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-close-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdosmx_offcanvas_closes_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_text_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_background_hover',
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_border_hover',
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn:hover',
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_closes_button_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-close-bttn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdosmx_offcanvas_closes_button_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdosmx-close-bttn:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdosmx_offcanvas_overlay__section',
			[
				'label' => esc_html__( 'Offcanvas Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdosmx_offcanvas_settings_overlay_switch' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_overlay_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-overlay' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdosmx_offcanvas_overlay_opacity',
			[
				'label'       => esc_html__('Opacity', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => .1,
				'max'         => 1,
				'step'        => .1,
				'default'     => .7,
				'selectors'   => [
					'{{WRAPPER}} .bwdosmx-ofcanvas-overlay' => 'opacity: {{SIZE}}',
				],
			]
		);

		$this->end_controls_section();

	}

	    /**
     * Render custom template or saved template output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render_custom_content() {
        $settings = $this->get_settings_for_display();

        if ( $settings['bwdosmx_offcanvas_repeater_list']) {
            foreach ($settings['bwdosmx_offcanvas_repeater_list'] as  $item) {
                ?>
                <div class="bwdosmx-offcanvas-custom-widget elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                    <?php if( ! empty( $item['bwdosmx_offcanvas_custom_title'] ) ) { ?>
                    	<div class="bwdosmx-offcanvas-widget-title"><?php echo esc_html( $item['bwdosmx_offcanvas_custom_title'] ); ?></div>
                    <?php } ?>

                    <div class="bwdosmx-offcanvas-widget-description">
                        <?php echo $item['bwdosmx_offcanvas_custom_description']; ?>
                    </div>
                </div>
                <?php
			}
        }

    }

	   /**
     * Render sidebars for output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render_sidebar() {
        $settings = $this->get_settings_for_display();
        $sidebar = $settings['bwdosmx_sidebar'];

        if (empty($sidebar)) {
            return;
        }

        dynamic_sidebar($sidebar);
    }

	protected function render(){
        $settings = $this->get_settings_for_display();

		?>

		
		<div class="bwdosmx-offcanvas-body">

			<!-- toggle button -->
			<div class="bwdosmx-offcanvas-content-wrap">

				<?php 
					if( 'button' == $settings['bwdosmx_offcanvas_front_content_type'] ){?>
						<div class="bwdosmx-offcanvas-toggle-wrap">
							<a class="bwdosmx-visible-button" href="#"><?php echo esc_html($settings['bwdosmx_offcanvas_toggle_button_text']);?>
							<?php if( 'yes' == $settings['bwdosmx_offcanvas_toggle_button_icon_switch'] ){ ?>
								<span><?php \Elementor\Icons_Manager::render_icon( $settings['bwdosmx_toggle_button_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							<?php } ?>
							</a>
						</div>
						<?php
					} elseif( 'svv-template' == $settings['bwdosmx_offcanvas_front_content_type'] ){?>
						<div class="bwdosmx-offcanvas-toggle-wrap">
							<a href="#">
								<?php
								if ( !empty( $settings[ 'bwdosmx_offcanvas_frontend_content' ] ) ) {
									echo bwdosmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdosmx_offcanvas_frontend_content'] );
								}
								?>
							</a>
						</div>
						<?php
					} elseif( 'shortcode' == $settings['bwdosmx_offcanvas_front_content_type'] ){?>
						<div class="bwdosmx-offcanvas-toggle-wrap">
							<a href="#">
								<?php echo do_shortcode( $settings['bwdosmx_offcanvas_shortcode_content'] ); ?>
							</a>
						</div>
						<?php
					}
				?>

			</div>
			<!-- toggle button -->
			
			<div class="bwdosmx-ofcanvas-container">
				<?php if( 'yes' == $settings['bwdosmx_offcanvas_settings_overlay_switch'] ) { ?>
					<div class="bwdosmx-ofcanvas-overlay <?php echo esc_html($settings['bwdosmx_offcanvas_settings_overlay_directions']);?>"></div>
				<?php } ?>
				<div class="bwdosmx-ofcanvas-fixed <?php echo esc_html($settings['bwdosmx_offcanvas_settings_directions']);?>">
				<!-- close button -->
					<?php if( 'yes' == $settings['bwdosmx_colse_button_switch'] ) { ?>
						<div class="bwdosmx-ofcanvas-close-button">
							<span class="bwdosmx-close-bttn">
								<?php \Elementor\Icons_Manager::render_icon( $settings['bwdosmx_colse_button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
							</span>
						</div>
					<?php } ?>
				<!-- close button -->
				<!-- header title -->
					<?php if( ! empty($settings['bwdosmx_offcanvas_header_title']) ){ ?>
						<div class="bwdosmx-ofcanvas-header-area">
							<div class="bwdosmx-ofcanvas-header-title"><?php echo esc_html($settings['bwdosmx_offcanvas_header_title']); ?></div>
						</div>
					<?php } ?>
				<!-- header title -->
					<?php if( 'custom' == $settings['bwdosmx_offcanvas_content_type'] ){
						$this->render_custom_content();
					} elseif( 'sv-template' == $settings['bwdosmx_offcanvas_content_type'] ){
						if ( !empty( $settings[ 'bwdosmx_offcanvas_content_type_sv_template' ] ) ) {
							echo bwdosmx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdosmx_offcanvas_content_type_sv_template'] );
						}
					} elseif( 'sidebar' == $settings['bwdosmx_offcanvas_content_type'] ){
						$this->render_sidebar();
					}elseif( 'shortcode' == $settings['bwdosmx_offcanvas_content_type'] ){
						echo do_shortcode( $settings['bwdosmx_offcanvas_shortcode_content_fixed'] );
					}?>
				</div>
			</div>
		</div>
<?php

	}

}