<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwbihpimghotspot extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbihp-imghotspot';
	}

	public function get_title() {
		return esc_html__( 'Image Hotspot', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-image-hotspot bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'image', 'hotspot', 'bwd', 'marker' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwdihp_hotspot_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdihp_hotspot_bg_image',
			[
				'label' => esc_html__( 'Background Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdihp_hotspot_section',
			[
				'label' => esc_html__( 'Hotspot', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->start_controls_tabs(
            'bwdihp_hotspot_style_tabs'
        );

        $repeater->start_controls_tab(
            'bwdihp_hotspot_content_tab',
            [
                'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
		$repeater->add_control(
			'bwdihp_hotspot_content_type',
			[
				'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					'blank' => esc_html__( 'Blank', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_content_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-plus',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdihp_hotspot_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_title',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Hot', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdihp_hotspot_content_type' => 'text',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdihp_hotspot_position_tab',
            [
                'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
		$repeater->add_responsive_control(
			'bwdihp_hotspot_left_position',
			[
				'label' => esc_html__( 'Left Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-hotspot-content' => 'left: {{SIZE}}%!important;',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_top_position',
			[
				'label' => esc_html__( 'Top Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-hotspot-content' => 'top: {{SIZE}}%!important;',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdihp_hotspot_tooltip_tab',
            [
                'label' => esc_html__( 'Tooltip', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
		$repeater->add_control(
			'bwdihp_hotspot_show_tooltip',
			[
				'label' => esc_html__( 'Show Tooltip', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_open',
			[
				'label' => esc_html__( 'Always Tooltip Show?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_pulse_effect',
			[
				'label' => esc_html__( 'Pulse Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_arrow_show',
			[
				'label' => esc_html__( 'Show Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_tooltip_arrow_width',
			[
				'label' => esc_html__( 'Arrow Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content.yes::before' => 'width: {{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_tooltip_arrow_show' => 'yes',
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_tooltip_arrow_height',
			[
				'label' => esc_html__( 'Arrow Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content.yes::before' => 'height: {{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_tooltip_arrow_show' => 'yes',
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		
		$repeater->add_control(
			'bwdihp_hotspot_tooltip_position',
			[
				'label' => esc_html__( 'Tooltip Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'top',
				'options' => [
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);

		// Tooltip Video Start Here

		$repeater->add_control(
			'bwdihp_tooltip_video_show',
			[
				'label' => esc_html__( 'Show Video', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_control(
		   'bwdihp_tooltip_video_source',
		   [
			   'label' => esc_html__( 'Source', BWDEB_ROOT_AUTHOR_PRO ),
			   'type' => Controls_Manager::SELECT,
			   'default' => 'youtube',
			   'options' => [
				   'youtube'  => esc_html__( 'YouTube', BWDEB_ROOT_AUTHOR_PRO ),
				   'self_hosted'  => esc_html__( 'Self Hosted', BWDEB_ROOT_AUTHOR_PRO )
			   ],
			   'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_video_show' => 'yes',
				],
		   ]
	   );
		$repeater->add_control(
		   'bwdihp_youtube_link',
		   [
			   'label' => esc_html__( 'Videos ID Only', BWDEB_ROOT_AUTHOR_PRO ),
			   'type' => Controls_Manager::TEXT,
			   'placeholder' => esc_html__( 'H6n3iNh4XLI', BWDEB_ROOT_AUTHOR_PRO ),
			   'description' => '<span class="pro-feature">ID:- H6n3iNh4XLI <a href="https://prnt.sc/4VRQcRmETq0k" target="_blank">See Here...</a></span>',
			   'dynamic' => [
				   'active' => true,
			   ],
			   'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_video_show' => 'yes',
				   	'bwdihp_tooltip_video_source' => 'youtube',
			   ]
		   ]
	   );
	   //self hosted video 
	   $repeater->add_control(
		   'bwdihp_video_self_hosted',
		   [
			   'label' => esc_html__( 'Choose Video', BWDEB_ROOT_AUTHOR_PRO ),
			   'type' => Controls_Manager::MEDIA,
			   'media_types' => ['video'],
			   'condition' => [
				   'bwdihp_tooltip_video_source' => 'self_hosted',
				   'bwdihp_hotspot_show_tooltip' => 'yes',
				   'bwdihp_tooltip_video_show' => 'yes',
			   ]
		   ]
	   );
		$repeater->add_control(
			'bwdihp_tooltip_image_show',
			[
				'label' => esc_html__( 'Show Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_image',
			[
				'label' => esc_html__( 'Tooltip Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_image_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_image_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_image_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_content_show',
			[
				'label' => esc_html__( 'Hide Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_content',
			[
				'label' => esc_html__( 'Tooltip Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Tooltip Content', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_content_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn_show',
			[
				'label' => esc_html__( 'Hide Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn',
			[
				'label' => esc_html__( 'Tooltip Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Buy Now', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_content_align',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'text-align: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'bwdihp_hotspot_style_tab',
            [
                'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

		// Hotspot Style Start

		$repeater->add_control(
			'bwdihp_hotspot_heading',
			[
				'label' => esc_html__( 'Hotspot', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-hotspot-content' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_size',
			[
				'label' => esc_html__( 'Hotspot Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-hotspot-content' => 'width: {{SIZE}}px; height: {{SIZE}}px;',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdihp_hotspot_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-hotspot-content',
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdihp-tooltip-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// Hotspot Style End
		// Hotspot Icon Style Start

		$repeater->add_control(
			'bwdihp_hotspot_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'bwdihp_hotspot_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .your-class' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_content_type' => 'icon',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-hotspot-content .bwdihp-tooltip-content' => 'font-size: {{VALUE}};',
				],
				'condition' => [
					'bwdihp_hotspot_content_type' => 'icon',
				],
			]
		);

		// Hotspot Icon Style End
		// Hotspot Text Style Start

		$repeater->add_control(
			'bwdihp_hotspot_text_heading',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdihp_hotspot_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_hotspot_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-hotspot-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_content_type' => 'text',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdihp_hotspot_text_typography',
				'selector' => '{{WRAPPER}} .bwdihp-hotspot-text',
				'condition' => [
					'bwdihp_hotspot_content_type' => 'text',
				],
			]
		);

		// Hotspot Text Style End
		// Tooltip Content Style Start

		$repeater->add_control(
			'bwdihp_tooltip_content_box_heading',
			[
				'label' => esc_html__( 'Tooltip Box', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_hotspot_tooltip_width',
			[
				'label' => esc_html__( 'Tooltip Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'width: {{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_spacing_top',
			[
				'label' => esc_html__( 'Tooltip Box Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'margin-top: -{{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_hotspot_tooltip_position' => 'top',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_spacing_left',
			[
				'label' => esc_html__( 'Tooltip Box Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'margin-left: -{{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_hotspot_tooltip_position' => 'left',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_spacing_bottom',
			[
				'label' => esc_html__( 'Tooltip Box Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'margin-top: {{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_hotspot_tooltip_position' => 'bottom',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_spacing_right',
			[
				'label' => esc_html__( 'Tooltip Box Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'margin-right: -{{SIZE}}px;',
				],
				'condition' => [
					'bwdihp_hotspot_tooltip_position' => 'right',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdihp_tooltip_box_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdihp_tooltip_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-content',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);

		// Tooltip Box Style End
		// Tooltip Image Style Start

		$repeater->add_control(
			'bwdihp_tooltip_image_heading',
			[
				'label' => esc_html__( 'Tooltip Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_content_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_image_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-img' => 'width: {{SIZE}}%;',
				],
			]
		);
		
		$repeater->add_responsive_control(
			'bwdihp_tooltip_image_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
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
			]
		);
		// Tooltip Text Style start

		$repeater->add_control(
			'bwdihp_tooltip_text_heading',
			[
				'label' => esc_html__( 'Tooltip Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_content_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdihp_tooltip_text_typography',
				'selector' => '{{WRAPPER}} .bwdihp-tooltip-text',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_content_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_text_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_content_show' => 'yes',
				],
			]
		);
		// Tooltip Button Style start

		$repeater->add_control(
			'bwdihp_tooltip_btn_heading',
			[
				'label' => esc_html__( 'Tooltip Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdihp_tooltip_btn_typography',
				'selector' => '{{WRAPPER}} .bwdihp-tooltip-btn',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'bwdihp_tooltip_btn_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdihp_tooltip_btn_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdihp_tooltip_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdihp_tooltip_btn_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdihp_tooltip_btn_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdihp-tooltip-btn',
				'condition' => [
					'bwdihp_hotspot_show_tooltip' => 'yes',
					'bwdihp_tooltip_btn_show' => 'yes',
				],
			]
		);

		// Tooltip Button Style End

        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
        $this->add_control(
			'bwdihp_hotspot_list',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdihp_hotspot_title' => esc_html__( 'Hot', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdihp_hotspot_title }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdihp_hotspot_style_section',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdihp_hotspot_image_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bwdihp-hotspot-wrapper .bwdihp-img' => 'width: {{SIZE}}%;',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdihp_hotspot_image_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
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
				'prefix_class' => 'bwdihp-hotspot-img-align-',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdihp_hotspot_image_border',
				'selector' => '{{WRAPPER}} .bwdihp-hotspot-wrapper .bwdihp-img',
			]
		);
		$this->add_control(
			'bwdihp_hotspot_image_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdihp-hotspot-wrapper .bwdihp-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdihp_hotspot_image_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdihp-hotspot-wrapper .bwdihp-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdihp_hotspot_image_box_shadow',
				'selector' => '{{WRAPPER}} .bwdihp-hotspot-wrapper .bwdihp-img',
			]
		);
		$this->end_controls_section();
		

	}

	protected function render() {
    $settings = $this->get_settings_for_display();
    $bg_img = $settings['bwdihp_hotspot_bg_image']['url'];
		if ( ! empty( $settings['bwdihp_tooltip_image_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdihp_tooltip_image_link', $settings['bwdihp_tooltip_image_link'] );
		}
		if ( ! empty( $settings['bwdihp_tooltip_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdihp_tooltip_btn_link', $settings['bwdihp_tooltip_btn_link'] );
		}
    ?>
    <div class="bwdihp-hotspot-wrapper">
        <div class="bwdihp-img">
            <img src="<?= esc_attr($bg_img); ?>" alt="">
        </div>
		<?php   
		if( $settings['bwdihp_hotspot_list'] ) : 
			foreach( $settings['bwdihp_hotspot_list'] as $item ) : ?>
				<div class="bwdihp-hotspot-content elementor-repeater-item-<?= esc_attr( $item['_id'] ); ?> <?= esc_attr($item['bwdihp_hotspot_tooltip_position']); ?> <?= esc_attr($item['bwdihp_hotspot_pulse_effect']); ?>">
					<div class="bwdihp-tooltip-content-wrap">
						<?php if($item['bwdihp_hotspot_content_type'] === 'icon') : ?>
						<span class="bwdihp-hotspot-icon"><?php \Elementor\Icons_Manager::render_icon( $item['bwdihp_hotspot_content_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
						<?php elseif($item['bwdihp_hotspot_content_type'] === 'text') : ?>
							<span class="bwdihp-hotspot-text"><?= esc_html( $item['bwdihp_hotspot_title'] ); ?></span>
						<?php elseif($item['bwdihp_hotspot_content_type'] === 'blank') : ?>
							<div class="bwdihp-hotspot-blank"></div>
						<?php endif; ?>
						<?php if($item['bwdihp_hotspot_show_tooltip'] === 'yes') : ?>
						<div class="bwdihp-tooltip-content <?= esc_attr($item['bwdihp_tooltip_arrow_show']); ?> <?php if($item['bwdihp_tooltip_open'] === 'yes') { echo 'open-tooltip'; } ?>">
							<?php 
							if($item['bwdihp_tooltip_video_source'] == 'youtube'):
								echo '<iframe src="https://www.youtube.com/embed/'.esc_attr($item['bwdihp_youtube_link']).'" width="560" height="315" frameborder="0" allowfullscreen></iframe>';
							elseif($item['bwdihp_tooltip_video_source'] == 'self_hosted'):
								echo '<video src="'.esc_attr($item['bwdihp_video_self_hosted']['url']).'" controls="true"></video>';
							endif;
							?>
							<?php if($item['bwdihp_tooltip_image_show'] === 'yes') : ?>
							<a href="<?= esc_url($item['bwdihp_tooltip_image_link']['url']); ?>" class="bwdihp-tooltip-img <?= esc_attr($item['bwdihp_tooltip_image_align']); ?>"><img src="<?= esc_attr($item['bwdihp_tooltip_image'] ['url']); ?>" alt=""></a>	
							<?php endif; ?>
							<?php if($item['bwdihp_tooltip_content_show'] === 'yes') : ?>
							<span class="bwdihp-tooltip-text"><?= esc_html( $item['bwdihp_tooltip_content'] ); ?></span>
							<?php endif; ?>
							<?php if($item['bwdihp_tooltip_btn_show'] === 'yes') : ?>
							<a href="<?= esc_url($item['bwdihp_tooltip_btn_link']['url']); ?>" class="bwdihp-tooltip-btn"><?= esc_html($item['bwdihp_tooltip_btn']); ?></a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
    </div>

    <?php
   
    }

}

