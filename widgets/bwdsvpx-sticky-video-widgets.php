<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Modules\DynamicTags\Module as TagsModule;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdsvpx_Sti__ extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdsvpx-sticky-video-prime', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Sticky Video Prime', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-video-playlist';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls()
    {
        /**
         * General
         */
        $this->start_controls_section(
            'bwdsvpxsv_sticky_option_section',
            [
                'label' => __('Sticky Options', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bwdsvpxsv_is_sticky',
            [
                'label' => __('Sticky', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'label_on' => __('On', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => __('Off', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
                'selectors' => [
                    '{{WRAPPER}} div.bwdsvpxsv-sticky-player' => 'display: block',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sticky_position',
            [
                'label' => __('Position', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'top-left' => __('Top Left', BWDEB_ROOT_AUTHOR_PRO),
                    'top-right' => __('Top Right', BWDEB_ROOT_AUTHOR_PRO),
                    'bottom-left' => __('Bottom Left', BWDEB_ROOT_AUTHOR_PRO),
                    'bottom-right' => __('Bottom Right', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'bottom-right',
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
            ]
        );

        $this->add_control(
			'bwdsvpxsv_close_button_headings',
			[
				'label' => esc_html__( 'Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'bwdsvpx_close_button_switcher',
			[
				'label' => esc_html__( 'Show Button?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'bwdsvpx_close_button_position',
			[
				'label' => esc_html__( 'Button Positiom', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'close-right',
				'options' => [
					'close-left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'close-right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

        $this->add_control(
			'bwdsvpx_close_button_position_top',
			[
				'label' => esc_html__( 'offset X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
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
					'size' => -17,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_control(
			'bwdsvpx_wclose_button_position_right',
			[
				'label' => esc_html__( 'offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
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
					'size' => -18,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
                'condition' => [
                    'bwdsvpx_close_button_position' => 'close-right',
                ],
			]
		);
        $this->add_control(
			'bwdsvpx_close_button_position_right',
			[
				'label' => esc_html__( 'offset Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
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
					'size' => -18,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'left: {{SIZE}}{{UNIT}}!important;',
				],
                'condition' => [
                    'bwdsvpx_close_button_position' => 'close-left',
                ],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsvpx_section_video_settings',
            [
                'label' => esc_html__('Video', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bwdsvpx_video_source',
            [
                'label' => __('Source', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'youtube',
                'options' => [
                    'youtube' => __('YouTube', BWDEB_ROOT_AUTHOR_PRO),
                    'vimeo' => __('Vimeo', BWDEB_ROOT_AUTHOR_PRO),
                    'self_hosted' => __('Self Hosted', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_link_youtube',
            [
                'label' => __('Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'   => ['active' => true],
                'placeholder' => __('Enter your URL (YouTube)', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'default' => 'https://www.youtube.com/watch?v=MLpWrANjFbI',
                'condition' => [
                    'bwdsvpx_video_source' => 'youtube',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_link_vimeo',
            [
                'label' => __('Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'placeholder' => __('Enter your URL (Vimeo)', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'default' => 'https://vimeo.com/235215203',
                'condition' => [
                    'bwdsvpx_video_source' => 'vimeo',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_link_dailymotion',
            [
                'label' => __('Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'placeholder' => __('Enter your URL (Dailymotion)', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'condition' => [
                    'bwdsvpx_video_source' => 'dailymotion',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_link_external',
            [
                'label' => __('External URL', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_hosted_url',
            [
                'label' => __('Choose File', 'elementor'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                    'categories' => [
                        TagsModule::MEDIA_CATEGORY,
                    ],
                ],
                'media_type' => 'video',
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                    'bwdsvpxsv_link_external' => '',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_external_url',
            [
                'label' => __('Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'placeholder' => __('Enter your URL', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'show_label' => false,
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                    'bwdsvpxsv_link_external' => 'yes',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $this->add_control(
            'bwdsvpx_video_self_hosted_link',
            [
                'label' => __('Choose File', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                    'bwdsvpx_video_source_external' => '',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_start_time',
            [
                'label' => __('Start Time', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 10000,
                'step' => 1,
                'default' => '',
                'description' => 'Specify a start time (in seconds)',
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_end_time',
            [
                'label' => __('End Time', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 10000,
                'step' => 1,
                'default' => '',
                'description' => 'Specify an end time (in seconds)',
                'condition' => [
                    'bwdsvpx_video_source' => 'self_hosted',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpx_video_video_options',
            [
                'label' => __('Video Options', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'bwdsvpxsv_autopaly',
            [
                'label' => __('Autoplay', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'bwdsvpxsv_autopaly_description',
            [
                'raw' => __('Autoplay requires mute volume.', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::RAW_HTML,
                'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
                'condition' => [
                    'bwdsvpxsv_autopaly' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_mute',
            [
                'label' => __('Mute', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'return_value' => 'yes',
                'default' => '',
                'condition' => [
                    'bwdsvpxsv_autopaly!' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_loop',
            [
                'label' => __('Loop', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sh_show_bar',
            [
                'label' => __('Show Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'default' => 'yes',
                'selectors' => [
                    '{{WRAPPER}} .plyr__controls' => 'display: flex!important;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsvpx_video_image_overlay_section',
            [
                'label' => __('Image Overlay', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bwdsvpxsv_overlay_options',
            [
                'label' => __('Image Overlay', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
	                '' => __('Default', BWDEB_ROOT_AUTHOR_PRO),
	                'yes' => __('Custom', BWDEB_ROOT_AUTHOR_PRO),
	                'transparent' => __('Transparent', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => '',
            ]
        );

        $this->add_control(
            'bwdsvpxsv_overlay_image',
            [
                'label' => __('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'condition' => [
                    'bwdsvpxsv_overlay_options' => 'yes',
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Image_Size::get_type(),
            [
                'default' => 'full',
                'name' => 'bwdsvpxsv_overlay_image_size',
                'condition' => [
                    'bwdsvpxsv_overlay_options' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_overlay_play_icon',
            [
                'label' => __('Play Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_block' => false,
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'bwdsvpxsv_overlay_options' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_icon_new',
            [
                'label' => esc_html__('Choose Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::ICONS,
                'fa4compatibility' => 'bwdsvpxsv_icon',
                'condition' => [
                    'bwdsvpxsv_overlay_options' => 'yes',
                    'bwdsvpxsv_overlay_play_icon' => 'yes',
                ],
            ]
        );

        $this->add_control( 'bwdsvpxsv_icon_new_notice', [
			'type'            => \Elementor\Controls_Manager::RAW_HTML,
			'raw'             => __( 'Play icon appears on top of overlay image.', BWDEB_ROOT_AUTHOR_PRO ),
			'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
            'condition' => [
                'bwdsvpxsv_overlay_options' => 'yes',
            ],
		] );

        $this->end_controls_section();

        /**
         * Style Tab Started
         */
        $this->start_controls_section(
            'bwdsvpxsv_sticky_video_interface',
            [
                'label' => __('Sticky Video Interface', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
            ]
        );


        $this->add_responsive_control(
            'bwdsvpxsv_sticky_width',
            [
                'label' => __('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 500,
                'step' => 1,
                'default' => 300,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-player2.out' => 'width: {{VALUE}}px!important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sticky_height',
            [
                'label' => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 55,
                'max' => 280,
                'step' => 1,
                'default' => 169,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-player2.out' => 'height: {{VALUE}}px!important;',
                ],
            ]
        );

        $this->add_control(
			'bwdsvpxsv_close_button_heading',
			[
				'label' => esc_html__( 'Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_responsive_control(
            'bwdsvpxsv_close_button_box_size',
            [
                'label' => __('Box Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 500,
                'step' => 1,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'width: {{VALUE}}px!important; height: {{VALUE}}px!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'bwdsvpxsv_close_button_icon_size',
            [
                'label' => __('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 500,
                'step' => 1,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'font-size: {{VALUE}}px!important;',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sticky_close_button_color',
            [
                'label' => __('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'bwdsvpxsv_sticky_close_button_color_hover',
            [
                'label' => __('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close:hover' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'bwdsvpxsv_sticky_close_button_BGcolor',
            [
                'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'bwdsvpxsv_sticky_close_button_BGcolor_hover',
            [
                'label' => __('Background Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'bwdsvpxsv_is_sticky' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpxsv-sticky-player-close:hover' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsvpxsv_sticky_close_button_border',
				'selector' => '{{WRAPPER}} .bwdsvpxsv-sticky-player-close',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsvpxsv_sticky_close_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdsvpxsv-sticky-player-close',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsvpxsv_sh_player_section',
            [
                'label' => __('Player', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_video_width',
            [
                'label' => esc_html__('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-wrapper' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sh_video_border_type',
            [
                'label' => __('Border Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none' => __('None', BWDEB_ROOT_AUTHOR_PRO),
                    'solid' => __('Solid', BWDEB_ROOT_AUTHOR_PRO),
                    'double' => __('Double', BWDEB_ROOT_AUTHOR_PRO),
                    'dotted' => __('Dotted', BWDEB_ROOT_AUTHOR_PRO),
                    'dashed' => __('Dashed', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-wrapper' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_video_border_width',
            [
                'label' => esc_html__('Border Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-wrapper' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sh_video_border_color',
            [
                'label' => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-wrapper' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_video_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsvpx-sticky-video-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .bwdsvpxsv-overlay' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .bwdsvpx-sticky-video-player2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsvpxsv_sh_player_interface_section',
            [
                'label' => __('Interface', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'bwdsvpxsv_sh_video_interface_color',
            [
                'label' => esc_html__('Interface Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ADD8E6',
                'selectors' => [
                    '{{WRAPPER}} .plyr__control.plyr__tab-focus' => 'box-shadow: 0 0 0 5px {{VALUE}}!important',
                    '{{WRAPPER}} .plyr__control--overlaid' => 'background: {{VALUE}}!important',
                    '{{WRAPPER}} .plyr--video .plyr__control.plyr__tab-focus' => 'background: {{VALUE}}!important',
                    '{{WRAPPER}} .plyr__control--overlaid' => 'background: {{VALUE}}!important',
                    '{{WRAPPER}} .plyr--video .plyr__control:hover' => 'background: {{VALUE}}!important',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_play_button_size',
            [
                'label' => __('Play Button Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 15,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 15,
                        'max' => 55,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .plyr__control--overlaid' => 'padding: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'bwdsvpxsv_sh_player_bar_section',
            [
                'label' => __('Bar', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_player_bar_padding',
            [
                'label' => __('Bar Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 10,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .plyr--video .plyr__controls' => 'padding: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdsvpxsv_sh_bar_margin',
            [
                'label' => esc_html__('Bar Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .plyr--video .plyr__controls' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

	protected function render()
    {
        $settings = $this->get_settings_for_display();
        $iconNew = $settings['bwdsvpxsv_icon_new'];
        $sticky = $settings['bwdsvpxsv_is_sticky'];
        $autoplay = ($settings['bwdsvpxsv_autopaly'] == 'yes') ? $settings['bwdsvpxsv_autopaly'] : 'no';
        $bwdsvpxsvPlayer = '';
	    $bwdsvpxsv_overlay_visibility = $settings['bwdsvpxsv_overlay_options'];

        if ('youtube' == $settings['bwdsvpx_video_source']) {
            $bwdsvpxsvPlayer = $this->bwdsvpxsv_load_player_youtube();
        }
        if ('vimeo' == $settings['bwdsvpx_video_source']) {
            $bwdsvpxsvPlayer = $this->bwdsvpxsv_load_player_vimeo();
        }
        if ('self_hosted' == $settings['bwdsvpx_video_source']) {
            $bwdsvpxsvPlayer = $this->bwdsvpxsv_load_player_self_hosted();
        }

	    echo '<div class="bwdsvpx-sticky-video-wrapper bwdsvpxsv-overlay-visibility-' . esc_attr( $bwdsvpxsv_overlay_visibility ) . '">';
        if ('yes' === $settings['bwdsvpxsv_overlay_options']) {
            // $autoplay = 'yes';
            $icon = '';
            if ('yes' === $settings['bwdsvpxsv_overlay_play_icon']) {
                if ($iconNew['value'] != '') {
                    if (is_array($iconNew['value'])) {
                        $icon = '<img src="' . $iconNew['value']['url'] .  '" width="100">';
                    } else {
                        $icon = '<i class="' . $iconNew['value'] . '"></i>';
                    }
                } else {
                    $icon = '<i class="eicon-play"></i>';
                }
            }

            $overlay_class = 'bwdsvpxsv-overlay';
            if( 'yes' === $settings['bwdsvpxsv_overlay_options'] && empty( $settings['bwdsvpxsv_overlay_image']['url'] ) ){
                $icon = '';
                $overlay_class = 'bwdsvpxsv-overlay-ignore';
            }

            $this->add_render_attribute(
                'esvp_overlay_wrapper',
                [
                    'class' => esc_attr( $overlay_class ),
                    'style' => "background-image:url('" . $settings['bwdsvpxsv_overlay_image']['url'] . "');",
                ]
            );

            echo '<div ' . $this->get_render_attribute_string('esvp_overlay_wrapper') . '>
					<div class="bwdsvpxsv-overlay-icon">' . $icon . '</div>
				</div>';
        }

        $this->add_render_attribute(
            'esvp_overlay_wrapper2',
            [
                'class' => 'bwdsvpx-sticky-video-player2 out',
                'data-sticky' => $sticky,
                'data-position' => $settings['bwdsvpxsv_sticky_position'],
                'data-sheight' => $settings['bwdsvpxsv_sticky_height'],
                'data-swidth' => $settings['bwdsvpxsv_sticky_width'],
                'data-scroll_height' => !empty($settings['bwdsvpxsv_scroll_height_display_sticky']['size']) ? $settings['bwdsvpxsv_scroll_height_display_sticky']['size'] : '',
                'data-autoplay' => $autoplay,
                'data-overlay' => ($settings['bwdsvpxsv_overlay_options'] == 'yes') ? $settings['bwdsvpxsv_overlay_options'] : 'no',
            ]
        );

        echo '<div ' . $this->get_render_attribute_string('esvp_overlay_wrapper2') . '>
            ' . $bwdsvpxsvPlayer;

        if ($settings["bwdsvpx_close_button_switcher"] == "yes") {
            echo '<span class="bwdsvpxsv-sticky-player-close"><i class="fas fa-times"></i></span>';
        }

        echo '</div>';


		echo '</div>';
    }

    protected function bwdsvpxsv_load_player_youtube()
    {
	    $settings = $this->get_settings_for_display();
	    $id       = $this->bwdsvpxsv_get_url_id();
	    $autoplay = $settings['bwdsvpxsv_autopaly'];
	    $mute     = $autoplay == 'yes' ? 'yes' : $settings['bwdsvpxsv_mute'];
	    $loop     = $settings['bwdsvpxsv_loop'];

	    $am = '"storage": {"enabled": false, "key": "plyr"}';
	    $am .= ( $autoplay == 'yes' ? ', "autoplay":1' : ', "autoplay":0' );
	    $am .= ( $mute == 'yes' ? ', "muted":1, "volume":0' : ', "muted":0' );

        if ('yes' == $loop) {
            $lp = '"loop": {"active": true}';
        } else {
            $lp = '"loop": {"active": false}';
        }

        return '<div
			id="bwdsvpxsv-player-' . $this->get_id() . '"
			data-plyr-provider="youtube"
			data-plyr-embed-id="' . esc_attr($id) . '"
			data-plyr-config="{' . esc_attr($am) . ', ' . esc_attr($lp) . '}"
		></div>';
    }

    protected function bwdsvpxsv_load_player_vimeo()
    {
	    $settings = $this->get_settings_for_display();
	    $id       = $this->bwdsvpxsv_get_url_id();
	    $autoplay = $settings['bwdsvpxsv_autopaly'];
	    $mute     = $autoplay == 'yes' ? 'yes' : $settings['bwdsvpxsv_mute'];
	    $loop     = $settings['bwdsvpxsv_loop'];

	    $am = '"storage": {"enabled": false, "key": "plyr"}';
	    $am .= ( $autoplay == 'yes' ? ', "autoplay":1' : ', "autoplay":0' );
	    $am .= ( $mute == 'yes' ? ', "muted":1, "volume":0' : ', "muted":0' );

        if ('yes' == $loop) {
            $lp = '"loop": {"active": true}';
        } else {
            $lp = '"loop": {"active": false}';
        }

        return '<div
			id="bwdsvpxsv-player-' . $this->get_id() . '"
			data-plyr-provider="vimeo"
			data-plyr-embed-id="' . esc_attr($id) . '"
			data-plyr-config="{' . esc_attr($am) . ', ' . esc_attr($lp) . '}"
		></div>';
    }

    protected function bwdsvpxsv_load_player_self_hosted()
    {
        $settings = $this->get_settings_for_display();
        $video = ($settings['bwdsvpxsv_external_url'] != '') ? $settings['bwdsvpxsv_external_url'] : $settings['bwdsvpxsv_hosted_url']['url'];
        $controlBars = $settings['bwdsvpxsv_sh_show_bar'];
        $autoplay = $settings['bwdsvpxsv_autopaly'];
        $mute = $settings['bwdsvpxsv_mute'];
        $loop = $settings['bwdsvpxsv_loop'];
        $interfaceColor = $settings['bwdsvpxsv_sh_video_interface_color'];
        $startTime = $settings['bwdsvpxsv_start_time'];
        $endTime = $settings['bwdsvpxsv_end_time'];

        $am = '';
        $am .= ($autoplay == 'yes' ? '"autoplay":1' : '"autoplay":0');
        $am .= ($mute == 'yes' ? ', "muted":1' : ', "muted":0');

        if ('yes' == $loop) {
            $lp = '"loop": {"active": true}';
        } else {
            $lp = '"loop": {"active": false}';
        }

        return '<video class="bwdsvpxsv-player" id="bwdsvpxsv-player-' . $this->get_id() . '" playsinline controls data-plyr-config="{' . esc_attr($am) . ', ' . esc_attr($lp) . '}">
			<source src="' . esc_attr($video) . '#t=' . esc_attr($startTime) . ',' . esc_attr($endTime) . '" type="video/mp4" />
		</video>';
    }

    protected function bwdsvpxsv_get_url_id()
    {
        $settings = $this->get_settings_for_display();

	    if ( 'youtube' === $settings['bwdsvpx_video_source'] ) {
		    $url        = $settings['bwdsvpxsv_link_youtube'];
		    $link       = explode( '=', parse_url( $url, PHP_URL_QUERY ) );
		    $short_link = explode( '/', $url );
		    $id         = isset( $link[1] ) ? $link[1] : ( isset( $short_link[3] ) ? $short_link[3] : '' );
	    }
        if ('vimeo' === $settings['bwdsvpx_video_source']) {
            $url = $settings['bwdsvpxsv_link_vimeo'];
            $link = explode('/', $url);
	        $id = isset( $link[3] ) ? $link[3] : '';
        }
        if ('self_hosted' === $settings['bwdsvpx_video_source']) {
            $externalUrl = $settings['bwdsvpxsv_link_external'];
            if ('yes' == $externalUrl) {
                $id = $settings['bwdsvpxsv_external_url'];
            } else {
                $id = $settings['bwdsvpxsv_hosted_url']['url'];
            }
        }

        return $id;
    }

}