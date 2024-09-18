<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdcspx_ContentSwitchPlus_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdcspx-content-switch-plus', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Content Switcher Plus', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-import-export bwdeb-elementor-bundle bwdcspx-ContentSwitchPlus-icon';
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
        
		/*-----------------------------------------------------------------------------------*/
        /*	CONTENT TAB
        /*-----------------------------------------------------------------------------------*/
        
        /**
         * Content Tab: Primary
         */
		$this->start_controls_section(
			'section_primary',
			[
				'label' => esc_html__( 'Primary', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        $this->add_control(
            'primary_label',
            [
                'label'                 => __( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::TEXT,
                'dynamic'	            => [ 'active' => true ],
                'default'               => __( 'Annual', BWDEB_ROOT_AUTHOR_PRO ),
                'ai' => [
					'active' => false,
				],
            ]
        );
        
        $this->add_control(
            'primary_content_type',
            [
                'label'                 => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'options'               => [
                    'image'         => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                    'content'       => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                    'template'      => __( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
                    'shortcode'      => __( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default'               => 'content',
            ]
        );

        $this->add_control(
			'bwdcspx_primary_shortcode_content',
			[
				'label' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__( '[shortcode-here]', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'primary_content_type' => [ 'shortcode' ]
				]
			]
		);
        
		//content type save template

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'primary_templates',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
			        'primary_content_type' => 'template',
		        ],
			]
		);
        
        $this->add_control(
            'primary_content',
            [
                'label'                 => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::WYSIWYG,
                'default'               => __( 'Primary Content', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'             => [
                    'primary_content_type'      => 'content',
                ],
            ]
        );
        
        $this->add_control(
            'primary_image',
            [
                'label'                 => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::MEDIA,
                'default'               => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'             => [
                    'primary_content_type'      => 'image',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );
        
        $this->end_controls_section();
        
        /**
         * Content Tab: Secondary
         */
		$this->start_controls_section(
			'section_secondary',
			[
				'label' => esc_html__( 'Secondary', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        $this->add_control(
            'secondary_label',
            [
                'label'                 => __( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::TEXT,
                'dynamic'	            => [ 'active' => true ],
                'default'               => __( 'Lifetime', BWDEB_ROOT_AUTHOR_PRO ),
                'ai' => [
					'active' => false,
				],
            ]
        );
        
        $this->add_control(
            'secondary_content_type',
            [
                'label'                 => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'options'               => [
                    'image'         => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                    'content'       => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                    'template'      => __( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
                    'shortcode'      => __( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default'               => 'content',
            ]
        );

        $this->add_control(
			'bwdcspx_secondary_shortcode_content',
			[
				'label' => esc_html__( 'Shortcode', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__( '[shortcode-here]', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'secondary_content_type' => [ 'shortcode' ]
				]
			]
		);
        
		//content type save template

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'secondary_templates',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
			        'secondary_content_type' => 'template',
		        ],
			]
		);
        
        $this->add_control(
            'secondary_content',
            [
                'label'                 => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::WYSIWYG,
                'default'               => __( 'Secondary Content', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'             => [
                    'secondary_content_type'      => 'content',
                ],
            ]
        );
        
        $this->add_control(
            'secondary_image',
            [
                'label'                 => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::MEDIA,
                'default'               => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'             => [
                    'secondary_content_type'      => 'image',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );
        
        $this->end_controls_section();
        
        /**
         * Style Tab: Overlay
         */
        $this->start_controls_section(
            'section_toggle_switch_style',
            [
                'label'             => __( 'Switch', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'toggle_switch_alignment',
            [
                'label'                 => __( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::CHOOSE,
                'default'               => 'center',
                'options'               => [
                    'left'          => [
                        'title'     => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-left',
                    ],
                    'center'        => [
                        'title'     => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-center',
                    ],
                    'right'         => [
                        'title'     => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-right',
                    ],
                ],
                'prefix_class'          => 'bwdcspx-toggle-',
                'frontend_available'    => true,
            ]
        );
        
        $this->add_control(
            'switch_style',
            [
                'label'                 => __( 'Switch Style', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'options'               => [
                    'round'         => __( 'Round', BWDEB_ROOT_AUTHOR_PRO ),
                    'rectangle'     => __( 'Rectangle', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default'               => 'round',
            ]
        );
        
        $this->add_responsive_control(
            'toggle_switch_size',
            [
                'label'                 => __( 'Switch Size', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [
                    'size' => 26,
                    'unit' => 'px',
                ],
                'size_units'            => [ 'px' ],
                'range'                 => [
                    'px'   => [
                        'min' => 15,
                        'max' => 60,
                    ],
                ],
                'tablet_default'        => [
                    'unit' => 'px',
                ],
                'mobile_default'        => [
                    'unit' => 'px',
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-container' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'toggle_switch_spacing',
            [
                'label'                 => __( 'Headings Spacing', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [
                    'size' => 15,
                    'unit' => 'px',
                ],
                'size_units'            => [ 'px', '%' ],
                'range'                 => [
                    'px'   => [
                        'max' => 80,
                    ],
                ],
                'tablet_default'        => [
                    'unit' => 'px',
                ],
                'mobile_default'        => [
                    'unit' => 'px',
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-inner' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'toggle_switch_gap',
            [
                'label'                 => __( 'Margin Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::SLIDER,
                'default'               => [
                    'size' => 20,
                    'unit' => 'px',
                ],
                'size_units'            => [ 'px', '%' ],
                'range'                 => [
                    'px'   => [
                        'max' => 80,
                    ],
                ],
                'tablet_default'        => [
                    'unit' => 'px',
                ],
                'mobile_default'        => [
                    'unit' => 'px',
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-wrap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->start_controls_tabs( 'tabs_switch' );
        
        $this->start_controls_tab(
            'tab_switch_primary',
            [
                'label'             => __( 'Primary', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'              => 'toggle_switch_primary_background',
                'types'             => [ 'classic', 'gradient' ],
                'selector'          => '{{WRAPPER}} .bwdcspx-toggle-slider',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'                  => 'toggle_switch_primary_border',
                'label'                 => __( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'placeholder'           => '1px',
                'default'               => '1px',
                'selector'              => '{{WRAPPER}} .bwdcspx-toggle-switch-container',
            ]
        );
        
        $this->add_control(
            'toggle_switch_primary_border_radius',
            [
                'label'                 => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'tab_switch_secondary',
            [
                'label'             => __( 'Secondary', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'              => 'toggle_switch_secondary_background',
                'types'             => [ 'classic', 'gradient' ],
                'selector'          => '{{WRAPPER}} .bwdcspx-toggle-switch-on .bwdcspx-toggle-slider',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'                  => 'toggle_switch_secondary_border',
                'label'                 => __( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
                'placeholder'           => '1px',
                'default'               => '1px',
                'selector'              => '{{WRAPPER}} .bwdcspx-toggle-switch-container.bwdcspx-toggle-switch-on',
            ]
        );
        
        $this->add_control(
            'toggle_switch_secondary_border_radius',
            [
                'label'                 => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-container.bwdcspx-toggle-switch-on' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_tab();
        
        $this->end_controls_tabs();
        
        $this->add_control(
            'switch_controller_heading',
            [
                'label'                 => __( 'Controller', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::HEADING,
                'separator'             => 'before',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'              => 'toggle_controller_background',
                'types'             => [ 'classic', 'gradient' ],
                'selector'          => '{{WRAPPER}} .bwdcspx-toggle-slider::before',
            ]
        );
        
        $this->add_control(
            'toggle_controller_border_radius',
            [
                'label'                 => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-slider::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        
        /**
         * Style Tab: Label
         */
        $this->start_controls_section(
            'section_label_style',
            [
                'label'             => __( 'Label', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'label_horizontal_position',
            [
                'label'                 => __( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::CHOOSE,
                'label_block'           => false,
                'default'               => 'middle',
                'options'               => [
                    'top'          => [
                        'title'    => __( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'     => 'eicon-v-align-top',
                    ],
                    'middle'       => [
                        'title'    => __( 'Middle', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'     => 'eicon-v-align-middle',
                    ],
                    'bottom'       => [
                        'title'    => __( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'     => 'eicon-v-align-bottom',
                    ],
                ],
                'selectors_dictionary'  => [
                    'top'      => 'flex-start',
                    'middle'   => 'center',
                    'bottom'   => 'flex-end',
                ],
                'selectors'             => [
                    '{{WRAPPER}} .bwdcspx-toggle-switch-inner' => 'align-items: {{VALUE}}',
                ],
            ]
        );
        
        $this->start_controls_tabs( 'tabs_label_style' );
        
        $this->start_controls_tab(
            'tab_label_primary',
            [
                'label'             => __( 'Primary', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        
        $this->add_control(
            'label_text_color_primary',
            [
                'label'             => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '',
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-primary-toggle-label' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'label_active_text_color_primary',
            [
                'label'             => __( 'Active Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '',
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-primary-toggle-label.active' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'label_typography_primary',
				'selector' => '{{WRAPPER}} .bwdcspx-primary-toggle-label',
                'separator'         => 'before',
			]
		);
        
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'tab_label_secondary',
            [
                'label'             => __( 'Secondary', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        
        $this->add_control(
            'label_text_color_secondary',
            [
                'label'             => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '',
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-secondary-toggle-label' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'label_active_text_color_secondary',
            [
                'label'             => __( 'Active Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '',
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-secondary-toggle-label.active' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'label_typography_secondary',
				'selector' => '{{WRAPPER}} .bwdcspx-secondary-toggle-label',
                'separator'         => 'before',
			]
		);
        
        $this->end_controls_tab();
        
        $this->end_controls_tabs();
        
        $this->end_controls_section();
        
        /**
         * Style Tab: Content
         */
        $this->start_controls_section(
            'section_content_style',
            [
                'label'             => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'content_alignment',
            [
                'label'                 => __( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                  => \Elementor\Controls_Manager::CHOOSE,
                'default'               => 'center',
                'options'               => [
                    'left'          => [
                        'title'     => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-left',
                    ],
                    'center'        => [
                        'title'     => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-center',
                    ],
                    'right'         => [
                        'title'     => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'      => 'eicon-h-align-right',
                    ],
                ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-toggle-content-wrap' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'content_text_color',
            [
                'label'             => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '',
                'selectors'         => [
                    '{{WRAPPER}} .bwdcspx-toggle-content-wrap' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .bwdcspx-toggle-content-wrap',
			]
		);
        
        $this->end_controls_section();
        
    }

	protected function render() {
        $settings = $this->get_settings_for_display();

        $this->add_render_attribute( 'toggle-container', 'class', 'bwdcspx-toggle-container' );
        
        $this->add_render_attribute( 'toggle-container', 'id', 'bwdcspx-toggle-container-' . esc_attr( $this->get_id() ) );
        $this->add_render_attribute( 'toggle-switch-wrap', 'class', 'bwdcspx-toggle-switch-wrap' );
        
        $this->add_render_attribute( 'toggle-switch-container', 'class', 'bwdcspx-toggle-switch-container' );
        
        $this->add_render_attribute( 'toggle-switch-container', 'class', 'bwdcspx-toggle-switch-' . $settings['switch_style'] );
        
        $this->add_render_attribute( 'toggle-content-wrap', 'class', 'bwdcspx-toggle-content-wrap primary' );
        ?>
        <div <?php echo $this->get_render_attribute_string( 'toggle-container' ); ?>>
            <div <?php echo $this->get_render_attribute_string( 'toggle-switch-wrap' ); ?>>
                <div class="bwdcspx-toggle-switch-inner">

                    <div class="bwdcspx-primary-toggle-label">
                        <?php echo esc_attr( $settings['primary_label'] ); ?>
                    </div>
                    <div <?php echo $this->get_render_attribute_string( 'toggle-switch-container' ); ?>>
                        <label class="bwdcspx-toggle-switch">
                            <input type="checkbox">
                            <span class="bwdcspx-toggle-slider"></span>
                        </label>
                    </div>

                    <div class="bwdcspx-secondary-toggle-label">
                        <?php echo esc_attr( $settings['secondary_label'] ); ?>
                    </div>

                </div>
            </div>
            <div <?php echo $this->get_render_attribute_string( 'toggle-content-wrap' ); ?>>
                <div class="bwdcspx-toggle-primary-wrap">
                    <?php
                    if ( $settings['primary_content_type'] == 'content' ) {
                        echo $this->parse_text_editor( $settings['primary_content'] );
                    } elseif ( $settings['primary_content_type'] == 'image' ) {
                        $this->add_render_attribute( 'primary-image', 'src', $settings['primary_image']['url'] );
                        $this->add_render_attribute( 'primary-image', 'alt', Control_Media::get_image_alt( $settings['primary_image'] ) );
                        $this->add_render_attribute( 'primary-image', 'title', Control_Media::get_image_title( $settings['primary_image'] ) );
                        
                        printf( '<img %s />', $this->get_render_attribute_string( 'primary-image' ) );
                    } elseif ( $settings['primary_content_type'] == 'template' ) {
						if ( !empty( $settings[ 'primary_templates' ] ) ) {
							echo bwdcspx__my_plugin()->frontend->get_builder_content_for_display( $settings['primary_templates'] );
						}
                    } elseif ( $settings['primary_content_type'] == 'shortcode' ) {
                        echo do_shortcode( $settings['bwdcspx_primary_shortcode_content'] );
                    }
                    ?>
                </div>
                <div class="bwdcspx-toggle-secondary-wrap">
                    <?php
                    if ( $settings['secondary_content_type'] == 'content' ) {
                        echo $this->parse_text_editor( $settings['secondary_content'] );
                    } elseif ( $settings['secondary_content_type'] == 'image' ) {
                        $this->add_render_attribute( 'secondary-image', 'src', $settings['secondary_image']['url'] );
                        $this->add_render_attribute( 'secondary-image', 'alt', Control_Media::get_image_alt( $settings['secondary_image'] ) );
                        $this->add_render_attribute( 'secondary-image', 'title', Control_Media::get_image_title( $settings['secondary_image'] ) );
                        
                        printf( '<img %s />', $this->get_render_attribute_string( 'secondary-image' ) );
                    } elseif ( $settings['secondary_content_type'] == 'template' ) {
						if ( !empty( $settings[ 'secondary_templates' ] ) ) {
							echo bwdcspx__my_plugin()->frontend->get_builder_content_for_display( $settings['secondary_templates'] );
						}
                    }elseif ( $settings['secondary_content_type'] == 'shortcode' ) {
                        echo do_shortcode( $settings['bwdcspx_secondary_shortcode_content'] );
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }

}