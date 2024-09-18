<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDMVMaskingVideoWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MaskingVideo', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Masking Video', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle masking-video';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}


	protected function register_controls() {
		// video popup layout control section start
	   $this->start_controls_section(
		   'bwdmv_masking_video_presets_section',
		   [
			   'label' => esc_html__( 'Video Presets', 'bwdmv-masking-video' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   //source 
	   $this->add_control(
		   'bwdmv_masking_video_source',
		   [
			   'label' => esc_html__( 'Source', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SELECT,
			   'default' => 'youtube',
			   'options' => [
				   'youtube'  => esc_html__( 'YouTube', 'bwdmv-masking-video' ),
				   'vimeo'  => esc_html__( 'Vimeo', 'bwdmv-masking-video' ),
				   'self_hosted'  => esc_html__( 'Self Hosted', 'bwdmv-masking-video' )
			   ],
		   ]
	   );
	   //youtube link
	   $this->add_control(
		   'bwdmv_masking_video_youtube_video_link',
		   [
			   'label' => esc_html__( 'Link', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::TEXT,
			   'default' => esc_html__( 'https://www.youtube.com/watch?v=XHOmBV4js_E','bwdmv-masking-video' ),
			   'label_block' => true,
			   'dynamic' => [
				   'active' => true,
			   ],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'youtube',
			   ]
		   ]
	   );
	   //vimeo link
	   $this->add_control(
		   'bwdmv_masking_video_vimeo_video_link',
		   [
			   'label' => esc_html__( 'Link', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::TEXT,
			   'default' => esc_html__( 'https://player.vimeo.com/video/740016989', 'bwdmv-masking-video' ),
			   'label_block' => true,
			   'dynamic' => [
				   'active' => true,
			   ],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'vimeo',
			   ]
		   ]
	   );
	   //self hosted video 
	   $this->add_control(
		   'bwdmv_masking_video_self_hosted',
		   [
			   'label' => esc_html__( 'Choose Video', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::MEDIA,
			   'media_types' => ['video'],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'self_hosted',
			   ]
		   ]
	   );
	   $this->end_controls_section();
	   //video option section
	   $this->start_controls_section(
		   'bwdmv_masking_video_option_section',
		   [
			   'label' => esc_html__( 'Video Options', 'bwdmv-masking-video' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   //autoplay
	   $this->add_control(
		   'bwdmv_masking_video_autoplay',
		   [
			   'label' => esc_html__( 'Autoplay', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'No', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
			   'default' => 'no',
			   'condition' => [
				'bwdmv_masking_video_mute' => [ 'yes' ],
			],
		   ]
	   );
	   //mute
	   $this->add_control(
		   'bwdmv_masking_video_mute',
		   [
			   'label' => esc_html__( 'Mute', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'No', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
			   'default' => 'no',
		   ]
	   );
	   //loop
	   $this->add_control(
		   'bwdmv_masking_video_loop',
		   [
			   'label' => esc_html__( 'Loop', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'No', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
			   'default' => 'no',
		   ]
	   );
	   //Player Controls
	   $this->add_control(
		   'bwdmv_masking_video_player_controls',
		   [
			   'label' => esc_html__( 'Player Controls', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Show', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'Hide', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
			   'default' => 'yes',
		   ]
	   );
	   //privacy mode
	   $this->add_control(
			'bwdmv_masking_video_privacy',
			[
				'label' => esc_html__( 'Privacy mode', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdmv-masking-video' ),
				'label_off' => esc_html__( 'No', 'bwdmv-masking-video' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdmv_masking_video_source' => 'youtube',
				]
			]
		);
	   	//overlay 
	   $this->add_control(
		   'bwdmv_masking_video_overlay',
		   [
			   'label' => esc_html__( 'Overlay', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'yes', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'no', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
		   ]
	   );
	   	//lightbox 
	   $this->add_control(
		   'bwdmv_masking_video_lightbox',
		   [
			   'label' => esc_html__( 'Lightbox', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'yes', 'bwdmv-masking-video' ),
			   'label_off' => esc_html__( 'no', 'bwdmv-masking-video' ),
			   'return_value' => 'yes',
			   'condition' => [
				'bwdmv_masking_video_overlay' => [ 'yes' ],
			],
		   ]
	   );
	   //self hosted video poster
	   $this->add_control(
		'bwdmv_masking_self_video_poster',
		[
			'label' => esc_html__( 'Poster', 'bwdmv-masking-video' ),
			'type' => \Elementor\Controls_Manager::MEDIA,
			'condition' => [
				'bwdmv_masking_video_source' => 'self_hosted',
			],
		]
	);
	   //video position
	   $this->add_responsive_control(
			'bwdmv_masking_video_position',
			[
				'label' => esc_html__( 'Video Position', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'c_c',
				'options' => [
					'c_c'  => esc_html__( 'Center Center', 'bwdmv-masking-video' ),
					'c_l'  => esc_html__( 'Center Left', 'bwdmv-masking-video' ),
					'c_r'  => esc_html__( 'Center Right', 'bwdmv-masking-video' ),
					't_c'  => esc_html__( 'Top Center', 'bwdmv-masking-video' ),
					't_l'  => esc_html__( 'Top Left', 'bwdmv-masking-video' ),
					't_r'  => esc_html__( 'Top Right', 'bwdmv-masking-video' ),
					'b_c'  => esc_html__( 'Bottom Center', 'bwdmv-masking-video' ),
					'b_l'  => esc_html__( 'Bottom Left', 'bwdmv-masking-video' ),
					'b_r'  => esc_html__( 'Bottom Right', 'bwdmv-masking-video' ),
					'custom'  => esc_html__( 'Custom', 'bwdmv-masking-video' ),
				],
				'separator' => 'before',
				'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-position: {{value}}; 
					-webkit-mask-position: {{value}};',
                ]
			]
		);
	   //video scale
	   $this->add_control(
		'bwdmv_masking_video_scale',
		[
			'label' => esc_html__( 'Video Scale', 'bwdmv-masking-video' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'size_units' => [ 'px'],
			'range' => [
				'px' => [
					'min' => 0.1,
					'max' => 5,
					'step' => 0.1,
				],
			],

			'selectors' => [
				'{{WRAPPER}} .bwdmv-video-mask-wrapper .bwdmv-mask-video iframe,
				{{WRAPPER}} .bwdmv-video-mask-wrapper .bwdmv-mask-video video' => 'transform: scale({{SIZE}});',
			],
		]
	);
	   $this->end_controls_section();
	   // clipping mask section
	   $this->start_controls_section(
		   'bwdmv_clipping_mask_section',
		   [
			   'label' => esc_html__( 'Clipping Mask', 'bwdmv-masking-video' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   	//mask styles
	   $this->add_control(
		   'bwdmv_masking_choose_mask_style',
		   [
			   'label' => esc_html__( 'Choose Mask', 'bwdmv-masking-video' ),
			   'type' => \Elementor\Controls_Manager::SELECT,
			   'default' => '1',
			   'options' => [
				   '1'  => esc_html__( 'Style 1', 'bwdmv-masking-video' ),
				   '2'  => esc_html__( 'Style 2', 'bwdmv-masking-video' ),
				   '3'  => esc_html__( 'Style 3', 'bwdmv-masking-video' ),
				   '4'  => esc_html__( 'Style 4', 'bwdmv-masking-video' ),
				   '5'  => esc_html__( 'Style 5', 'bwdmv-masking-video' ),
				   '6'  => esc_html__( 'Style 6', 'bwdmv-masking-video' ),
				   '7'  => esc_html__( 'Style 7', 'bwdmv-masking-video' ),
				   '8'  => esc_html__( 'Style 8', 'bwdmv-masking-video' ),
				   '9'  => esc_html__( 'Style 9', 'bwdmv-masking-video' ),
				   '10'  => esc_html__( 'Style 10', 'bwdmv-masking-video' ),
				   '11'  => esc_html__( 'Style 11', 'bwdmv-masking-video' ),
				   '12'  => esc_html__( 'Style 12', 'bwdmv-masking-video' ),
				   '13'  => esc_html__( 'Style 13', 'bwdmv-masking-video' ),
				   '14'  => esc_html__( 'Style 14', 'bwdmv-masking-video' ),
				   '15'  => esc_html__( 'Style 15', 'bwdmv-masking-video' ),
				   '16'  => esc_html__( 'Style 16', 'bwdmv-masking-video' ),
				   '17'  => esc_html__( 'Style 17', 'bwdmv-masking-video' ),
				   '18'  => esc_html__( 'Style 18', 'bwdmv-masking-video' ),
				   '19'  => esc_html__( 'Style 19', 'bwdmv-masking-video' ),
				   '20'  => esc_html__( 'Style 20', 'bwdmv-masking-video' ),
				   '21'  => esc_html__( 'Style 21', 'bwdmv-masking-video' ),
				   '22'  => esc_html__( 'Style 22', 'bwdmv-masking-video' ),
				   '23'  => esc_html__( 'Style 23', 'bwdmv-masking-video' ),
				   '24'  => esc_html__( 'Style 24', 'bwdmv-masking-video' ),
				   '25'  => esc_html__( 'Style 25', 'bwdmv-masking-video' ),
				   '26'  => esc_html__( 'Style 26', 'bwdmv-masking-video' ),
				   '27'  => esc_html__( 'Style 27', 'bwdmv-masking-video' ),
				   '28'  => esc_html__( 'Style 28', 'bwdmv-masking-video' ),
				   '29'  => esc_html__( 'Style 29', 'bwdmv-masking-video' ),
				   '30'  => esc_html__( 'Style 30', 'bwdmv-masking-video' ),
				   '31'  => esc_html__( 'Style 31', 'bwdmv-masking-video' ),
				   '32'  => esc_html__( 'Style 32', 'bwdmv-masking-video' ),
				   '33'  => esc_html__( 'Style 33', 'bwdmv-masking-video' ),
				   '34'  => esc_html__( 'Style 34', 'bwdmv-masking-video' ),
				   '35'  => esc_html__( 'Style 35', 'bwdmv-masking-video' ),
				   '36'  => esc_html__( 'Style 36', 'bwdmv-masking-video' ),
				   '37'  => esc_html__( 'Style 37', 'bwdmv-masking-video' ),
				   '38'  => esc_html__( 'Style 38', 'bwdmv-masking-video' ),
				   '39'  => esc_html__( 'Style 39', 'bwdmv-masking-video' ),
			   ],
		   ]
	   );
	   	//mask position
	   $this->add_responsive_control(
			'bwdmv_masking_mask_position',
			[
				'label' => esc_html__( 'Mask Position', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'center center'  => esc_html__( 'Center Center', 'bwdmv-masking-video' ),
					'center left'  => esc_html__( 'Center Left', 'bwdmv-masking-video' ),
					'center right'  => esc_html__( 'Center Right', 'bwdmv-masking-video' ),
					'top center'  => esc_html__( 'Top Center', 'bwdmv-masking-video' ),
					'top left'  => esc_html__( 'Top Left', 'bwdmv-masking-video' ),
					'top right'  => esc_html__( 'Top Right', 'bwdmv-masking-video' ),
					'bottom center'  => esc_html__( 'Bottom Center', 'bwdmv-masking-video' ),
					'bottom left'  => esc_html__( 'Bottom Left', 'bwdmv-masking-video' ),
					'bottom right'  => esc_html__( 'Bottom Right', 'bwdmv-masking-video' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-position: {{value}}; -webkit-mask-position: {{value}};',
				]
			]
		);
		//mask repeat
	   $this->add_responsive_control(
			'bwdmv_masking_mask_repeat',
			[
				'label' => esc_html__( 'Mask Repeat', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'no-repeat',
				'options' => [
					'no-repeat'  => esc_html__( 'No Repeat', 'bwdmv-masking-video' ),
					'repeat'  => esc_html__( 'Repeat', 'bwdmv-masking-video' ),
					'repeat-x'  => esc_html__( 'Repeat X', 'bwdmv-masking-video' ),
					'repeat-y'  => esc_html__( 'Repeat Y', 'bwdmv-masking-video' ),
				],
				'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-repeat: {{value}}; -webkit-mask-repeat: {{value}};',
                ]
			]
		);
		//mask size
	   $this->add_responsive_control(
			'bwdmv_masking_mask_size',
			[
				'label' => esc_html__( 'Mask Size', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '90%',
				'options' => [
					'90%'  => esc_html__( 'Default', 'bwdmv-masking-video' ),
					'cover'  => esc_html__( 'Cover', 'bwdmv-masking-video' ),
					'contain'  => esc_html__( 'Contain', 'bwdmv-masking-video' ),
					'custom'  => esc_html__( 'Custom', 'bwdmv-masking-video' ),
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-size: {{value}}; -webkit-mask-size: {{value}};',
                ]
			]
		);
		// Mask Custom Size 
        $this->add_responsive_control(
            'bwdmv_masking_mask_size_custom',
            [
                'label' => esc_html__( 'Custom Size', 'bwdmv-masking-video' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 150,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-size: {{SIZE}}{{UNIT}}; -webkit-mask-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'bwdmv_masking_mask_size' => 'custom' ]
            ]
        );
	   $this->end_controls_section();
	   //style video section
	   $this->start_controls_section(
		   'bwdmv_masking_video_style_section',
		   [
			   'label' => esc_html__( 'Video', 'bwdmv-masking-video' ),
			   'tab' => Controls_Manager::TAB_STYLE,
		   ]
	   );
	   //margin
	   $this->add_control(
			'bwdmv_masking_video_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
	   $this->add_control(
			'bwdmv_masking_video_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// width
		$this->add_control(
			'bwdmv_masking_video_width',
			[
				'label' => esc_html__( 'Width', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'vw'],
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
					'vw' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator'=>'before',
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// height
		$this->add_control(
			'bwdmv_masking_video_height',
			[
				'label' => esc_html__( 'Height', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'vh'],
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
					'vh' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator'=>'after',
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//background color
		$this->add_control(
			'bwdmv_masking_video_bg_color_one',
			[
				'label' => esc_html__( 'Background Color', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmv_masking_video_bg',
				'label' => esc_html__( 'Background', 'bwdmv-masking-video' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-mask-video',
			]
		);
	   $this->end_controls_section();
	   // style masking section
	   $this->start_controls_section(
			'bwdmv_masking_clipping_mask_style_section',
			[
				'label' => esc_html__( 'Clipping Mask', 'bwdmv-masking-video' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//margin
	   $this->add_control(
			'bwdmv_masking_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
	   $this->add_control(
			'bwdmv_masking_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		// style Overlay section
	   $this->start_controls_section(
			'bwdmv_masking_video_overlay_style_section',
			[
				'label' => esc_html__( 'Overlay', 'bwdmv-masking-video' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'bwdmv_masking_overlay_tabs'
		);
		$this->start_controls_tab(
			'bwdmv_masking_video_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdmv-masking-video' ),
			]
		);
		// overlay normal bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'overlay_normal_background', 'bwdmv-masking-video' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-video-mask-wrapper::before'
			]
		);
		// overlay normal opacity
		$this->add_control(
			'bwdmv_masking_overlay_opacity',
			[
				'label' => esc_html__( 'Opacity', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper::before' => 'opacity: {{SIZE}}%;',
				],
			]
		);
		// overlay transition 
		$this->add_control(
			'bwdmv_masking_overlay_transition',
			[
				'label' => esc_html__( 'Transition Duration', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step'=>0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper::before' => 'transition: {{SIZE}}s;',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdmv_masking_video_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdmv-masking-video' ),
			]
		);
		// overlay hover bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'overlay_hover_background',
				'label' => esc_html__( 'Background', 'bwdmv-masking-video' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-video-mask-wrapper:hover::before'
			]
		);
		// overlay hover opacity
		$this->add_control(
			'bwdmv_masking_overlay_hover_opacity',
			[
				'label' => esc_html__( 'Opacity', 'bwdmv-masking-video' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper:hover::before' => 'opacity: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
   }

   protected function render() {
	   $settings = $this->get_settings_for_display();
	   $source = $settings['bwdmv_masking_video_source'];
	   $chosen_style= $settings['bwdmv_masking_choose_mask_style'];
	   $youtube_link = $settings['bwdmv_masking_video_youtube_video_link'];
	   $vimeo_link = $settings['bwdmv_masking_video_vimeo_video_link'];
	   $self_hosted = $settings['bwdmv_masking_video_self_hosted'];
	   $autoplay = $settings['bwdmv_masking_video_autoplay'];
	   $mute = $settings['bwdmv_masking_video_mute'];
	   $loop = $settings['bwdmv_masking_video_loop'];
	   $players_control = $settings['bwdmv_masking_video_player_controls'];
	   $privacy = $settings['bwdmv_masking_video_privacy'];
	   $overlay = $settings['bwdmv_masking_video_overlay'];
	   $lightbox=  $settings['bwdmv_masking_video_lightbox'];
	   $poster = $settings['bwdmv_masking_self_video_poster'];

	   if('yes' === $overlay){
		$v_wrapper_class = 'bwdmv-video-mask-wrapper bwdmv-overlay-active '; 
	   }else{
		$v_wrapper_class = 'bwdmv-video-mask-wrapper '; 
	   }

	   // style render
	   if(!empty($chosen_style)){
		   ?>
		<div class="<?php echo esc_attr($v_wrapper_class);?> bwdmv-mask-<?php echo esc_attr($chosen_style);?>"
			data-youtube-url="<?php echo esc_attr($youtube_link);?>" 
			data-vimeo-url="<?php if(!empty($vimeo_link)){echo esc_attr($vimeo_link);}?>"
			data-self-url="<?php if(!empty($self_hosted)){echo esc_attr($self_hosted['url']);}?>"
			data-mute="<?php if(!empty($mute)){echo esc_attr($mute);}?>"
			data-loop="<?php if(!empty($loop)){echo esc_attr($loop);}?>"
			data-control="<?php if(!empty($players_control)){echo esc_attr($players_control);}?>"
			data-autoplay="<?php if(!empty($autoplay)){echo esc_attr($autoplay);}?>"
			data-privacy="<?php if(!empty($privacy)){echo esc_attr($privacy);}?>"
			data-lightbox="<?php if(!empty($lightbox)){echo esc_attr($lightbox);}?>"
			data-poster="<?php if(!empty($poster['url'])){echo esc_attr($poster['url']);}?>">
			<div class="bwdmv-mask-video">

			</div>
		</div>
		   <?php
	   }
   }



}
