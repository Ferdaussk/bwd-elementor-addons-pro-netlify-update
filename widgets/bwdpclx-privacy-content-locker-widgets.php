<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


class MyClass {
    public static function user_roles() {
        
		global $wp_roles;

        $all = $wp_roles->roles;
        $all_roles = array();

        if (!empty($all)) {
            foreach ($all as $key => $value) {
                $all_roles[$key] = $all[$key]['name'];
            }
        }

        return $all_roles;
		
    }
}

// Call the static method on the class
// $roles = MyClass::user_roles();


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdpclx_privacy_content_locker_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdpclx-PrivacyContentLocker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Private Content Locker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-lock-user bwdeb-elementor-bundle';
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
			'bwdpclx_protected_content',
			[
				'label' => esc_html__( 'Protected Content', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_type',
			[
				'label'   => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'content'  => __( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
					'template' => __( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'content',
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_field',
			[
				'label'       => esc_html__( 'Protected Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'default'     => esc_html__( 'This is the content that you want to be protected by either role or password.', BWDEB_ROOT_AUTHOR_PRO ),
				'condition'   => [
					'bwdpclx_protected_content_type' => 'content',
				],
			]
		);

	

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdpclx_protected_content_template',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
					'bwdpclx_protected_content_type' => 'template',
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'bwdpclx_protected_content_protection',
			[
				'label' => esc_html__( 'Protection Type', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_protection_type',
			[
				'label'       => esc_html__( 'Protection Type', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type'        => \Elementor\Controls_Manager::SELECT,
				'options'     => [
					'role'     => esc_html__( 'User role', BWDEB_ROOT_AUTHOR_PRO ),
					'password' => esc_html__( 'Password protected', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'     => 'role',
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_role',
			[
				'label'       => __( 'Select Roles', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple'    => true,
				'options'     => MyClass::user_roles(),
				'condition'   => [
					'bwdpclx_protected_content_protection_type' => 'role',
				],
			]
		);

		$this->add_control(
			'bwdpclx_show_fallback_message',
			[
				'label'        => __( 'Show Preview of Error Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => 'no',
				'label_on'     => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'description'  => 'You can force show message in order to style them properly.',
				'condition'    => [
					'bwdpclx_protected_content_protection_type' => 'role',
				],
			]
		);

		$this->add_control(
			'protection_password',
			[
				'label'      => esc_html__( 'Set Password', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'password',
				'condition'  => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_control(
			'protection_password_placeholder',
			[
				'label'     => esc_html__( 'Input Placehlder', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::TEXT,
				'dynamic'   => [ 'active' => true ],
				'default'   => 'Enter Password',
				'condition' => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_control(
			'protection_password_submit_btn_txt',
			[
				'label'     => esc_html__( 'Submit Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::TEXT,
				'dynamic'   => [ 'active' => true ],
				'default'   => 'Submit',
				'condition' => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_control(
			'bwdpclx_show_content',
			[
				'label'        => __( 'Show Content', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => 'no',
				'label_on'     => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'description'  => 'You can force show content in order to style them properly.',
				'condition'    => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_control(
			'bwdpclx_remember_cookie',
			[
				'label'        => __( 'Remember Cookie', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => 'no',
				'label_on'     => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition'    => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_control(
			'bwdpclx_remember_cookie_expire_time',
			[
				'label'       => __( 'Expire Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::NUMBER,
				'default'     => 60,
				"min"         => 10,
				'description' => __( 'Cookie expiration time (Minutes)', BWDEB_ROOT_AUTHOR_PRO ),
				'condition'   => [
					'bwdpclx_remember_cookie' => 'yes',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdpclx_protected_content_message',
			[
				'label' => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_message_type',
			[
				'label'       => esc_html__( 'Message Type', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type'        => \Elementor\Controls_Manager::SELECT,
				'description' => esc_html__( 'Set a message or a saved template when the content is protected.', BWDEB_ROOT_AUTHOR_PRO ),
				'options'     => [
					'none'     => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'text'     => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
					'template' => esc_html__( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'     => 'text',
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_message_text',
			[
				'label'     => esc_html__( 'Public Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::WYSIWYG,
				'default'   => esc_html__( 'You do not have permission to see this content.', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'   => [
					'active' => true,
				],
				'condition' => [
					'bwdpclx_protected_content_message_type' => 'text',
				],
			]
		);

		$saved_sections = ['0' => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO )];
		$saved_sections = $saved_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdpclx_protected_content_message_template',
			[
				'label'     => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_sections,
				'default'   => '0',
				'condition'   => [
					'bwdpclx_protected_content_message_type' => 'template',
				],
			]
		);





		$this->add_control(
			'password_incorrect_heading',
			[
				'label'     => __( 'Incorrect Password', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'password_incorrect_message',
			[
				'label'   => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Password does not match.', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpclx_protected_content_style',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-protected-content .protected-content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpclx_protected_content_typography',
				'selector' => '{{WRAPPER}} .bwdpclx-protected-content .protected-content',
			]
		);

		// $this->add_group_control(
		// 	\Elementor\Group_Control_Typography::get_type(),
		// 	[
		// 		'name'     => 'bwdpclx_protected_content_typography',
		// 		'scheme'   => Typography::TYPOGRAPHY_2,
		// 		'selector' => '{{WRAPPER}} .bwdpclx-protected-content .protected-content',
		// 	]
		// );

		$this->add_responsive_control(
			'bwdpclx_protected_content_alignment',
			[
				'label'       => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options'     => [
					'left'   => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'     => 'left',
				'selectors'   => [
					'{{WRAPPER}} .bwdpclx-protected-content .protected-content' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-protected-content .protected-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdpclx_protected_content_message_style',
			[
				'label' => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'bwdpclx_protected_content_general_message',
			[
				'label' => __( 'Permission Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_message_text_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-protected-content-message' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdpclx_protected_content_message_type' => 'text',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpclx_protected_content_message_text_typography',
				'selector' => '{{WRAPPER}} .bwdpclx-protected-content-message .bwdpclx-protected-content-message-text, {{WRAPPER}} .bwdpclx-protected-content-message .bwdpclx-protected-content-message-text p',
				'condition' => [
					'bwdpclx_protected_content_message_type' => 'text',
				],
				
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_message_text_alignment',
			[
				'label'       => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options'     => [
					'left'   => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'     => 'left',
				'selectors'   => [
					'{{WRAPPER}} .bwdpclx-protected-content-message' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_message_text_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-protected-content-message' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'bwdpclx_protected_content_message_type' => 'text',
				],
			]
		);

        $this->add_control(
			'bwdpclx_protected_content_error_message',
			[
				'label' => __( 'Error Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'bwdpclx_protected_content_error_message_text_color',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .protected-content-error-msg' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'bwdpclx_protected_content_message_type' => 'text',
                ],
                'separator' => 'before',
            ]
        );


		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpclx_protected_content_error_message_text_typography',
				'selector' => '{{WRAPPER}} .protected-content-error-msg',
				'condition' => [
					'bwdpclx_protected_content_message_type' => 'text',
				],
				
			]
		);

        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name' => 'bwdpclx_protected_content_error_message_text_typography',
        //         'scheme' => Typography::TYPOGRAPHY_2,
        //         'selector' => '{{WRAPPER}} .protected-content-error-msg',
        //         'condition' => [
        //             'bwdpclx_protected_content_message_type' => 'text',
        //         ],
        //     ]
        // );

        $this->add_responsive_control(
            'bwdpclx_protected_content_error_message_text_alignment',
            [
                'label' => esc_html__('Text Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'label_block' => true,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .protected-content-error-msg' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bwdpclx_protected_content_error_message_text_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .protected-content-error-msg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'bwdpclx_protected_content_message_type' => 'text',
                ],
            ]
        );

		$this->end_controls_section();

		// password field style
		$this->start_controls_section(
			'bwdpclx_protected_content_password_field_style',
			[
				'label'     => esc_html__( 'Password Field', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],

			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_input_width',
			[
				'label'     => esc_html__( 'Input Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'width: {{SIZE}}px;',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_input_alignment',
			[
				'label'       => esc_html__( 'Input Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'options'     => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center'     => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'flex-end'   => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'     => 'left',
				'selectors'   => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields > form' => 'justify-content: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_password_input_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_password_input_margin',
			[
				'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_input_border_radius',
			[
				'label'     => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'border-radius: {{SIZE}}px;',
				],
			]
		);

		$this->start_controls_tabs( 'bwdpclx_protected_content_password_input_style_tab' );

		$this->start_controls_tab( 'bwdpclx_protected_content_password_input_normal_style', [
			'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
		] );

		$this->add_control(
			'bwdpclx_protected_content_password_input_color',
			[
				'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'bwdpclx_protected_content_password_input_Placeholder_color',
			[
				'label'     => esc_html__( 'Placeholder Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password::placeholder' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_password_input_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_password_input_border',
				'label'    => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-password',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_password_input_shadow',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-password',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab( 'bwdpclx_protected_content_password_input_hover_style', [
			'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
		] );

		$this->add_control(
			'bwdpclx_protected_content_password_input_hover_color',
			[
				'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_password_input_hover_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields input.bwdpclx-password:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_password_input_hover_border',
				'label'    => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-password:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_password_input_hover_shadow',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-password:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		//submit button style
		$this->start_controls_section(
			'bwdpclx_protected_content_submit_button',
			[
				'label'     => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdpclx_protected_content_protection_type' => 'password',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_submit_button_typography',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit',
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_submit_padding',
			[
				'label'      => esc_html__( 'Button Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdpclx_protected_content_submit_margin',
			[
				'label'      => esc_html__( 'Button Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_submit_button_border_radius',
			[
				'label'     => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit' => 'border-radius: {{SIZE}}px;',
				],
			]
		);

		$this->start_controls_tabs( 'bwdpclx_protected_content_submit_button_control_tabs' );

		$this->start_controls_tab( 'bwdpclx_protected_content_submit_button_normal_tab', [
			'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
		] );

		$this->add_control(
			'bwdpclx_protected_content_submit_button_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_submit_button_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_submit_button_border',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_submit_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab( 'bwdpclx_protected_content_submit_button_hover', [
			'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
		] );

		$this->add_control(
			'bwdpclx_protected_content_submit_button_hover_text_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdpclx_protected_content_submit_button_hover_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit:hover' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_submit_button_hover_border',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'bwdpclx_protected_content_submit_button_hover_box_shadow',
				'selector' => '{{WRAPPER}} .bwdpclx-password-protected-content-fields .bwdpclx-submit:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	/**
	 * Check current user role exists inside of the roles array
	 *
	 * @return boolean
	 */
	protected function current_user_privileges() {
		if ( !is_user_logged_in() ) {
			return false;
		}

		$user_role = wp_get_current_user()->roles ;
		return !empty( array_intersect( $user_role,(array)$this->get_settings( 'bwdpclx_protected_content_role' ) ));
	}

	protected function bwdpclx_render_message( $settings ) {
		ob_start(); ?>
        <div class="bwdpclx-protected-content-message">
			<?php
			if ( 'none' == $settings[ 'bwdpclx_protected_content_message_type' ] ) {
				//nothing happen
			} elseif ( 'text' == $settings[ 'bwdpclx_protected_content_message_type' ] ) { ?>
				<?php if ( !empty( $settings[ 'bwdpclx_protected_content_message_type' ] ) ) : ?>
                    <div class="bwdpclx-protected-content-message-text"><?php echo $settings[ 'bwdpclx_protected_content_message_text' ]; ?></div>
				<?php endif; ?>
			<?php } else {
				if ( !empty( $settings[ 'bwdpclx_protected_content_message_template' ] ) ) {
					//echo Plugin::$instance->frontend->get_builder_content( $settings[ 'bwdpclx_protected_content_message_template' ], true );
					echo bwdpclx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdpclx_protected_content_message_template'] );
				}
			}
			?>
        </div>
		<?php echo ob_get_clean();
	}

	protected function bwdpclx_render_content( $settings ) {
		$editor_content = $this->get_settings_for_display( 'bwdpclx_protected_content_field' );
		$editor_content = $this->parse_text_editor( $editor_content );
		ob_start();
		?>
        <div id="bwdpclx-protected-content-render-<?php echo $this->get_id(); ?>" class="protected-content">
			<?php
			if ( 'content' === $settings[ 'bwdpclx_protected_content_type' ] ) {
				if ( !empty( $editor_content ) ) {
					printf( "<p>%s</p>", $editor_content );
				}
			} elseif ( 'template' === $settings[ 'bwdpclx_protected_content_type' ] ) {
				if ( !empty( $settings[ 'bwdpclx_protected_content_template' ] ) ) {
					//echo Plugin::$instance->frontend->get_builder_content( $settings[ 'bwdpclx_protected_content_template' ], true );
					echo bwdpclx__my_plugin()->frontend->get_builder_content_for_display( $settings['bwdpclx_protected_content_template'] );
				}
			}
			?>
        </div>
		<?php
		return ob_get_clean();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( 'role' == $settings[ 'bwdpclx_protected_content_protection_type' ] ) :
			?>
            <div class="bwdpclx-protected-content"> <?php

				if ( $this->current_user_privileges() ) {
					echo $this->bwdpclx_render_content( $settings );
				} else {
					$this->bwdpclx_render_message( $settings );
				}

				if ( 'yes' == $settings[ 'bwdpclx_show_fallback_message' ] ) {
					$this->bwdpclx_render_message( $settings );
				}
				?>
            </div>
		<?php else : ?>
			<?php
			if ( !empty( $settings[ 'protection_password' ] ) ) {
				$unlocked = false;
				if ( isset( $_POST[ 'protection_password_' . $this->get_id() ] )
				     && ( $settings[ 'protection_password' ] === $_POST[ 'protection_password_' . $this->get_id() ] )
				     && ( wp_verify_nonce( $_POST[ 'bwdpclx_protected_content_nonce_' . $this->get_id() ], 'bwdpclx_protected_nonce' ) ) ) {
					$unlocked = true;
					$this->bwdpclx_remember_cookie();
				}

				if ( isset( $_COOKIE[ 'protection_password_' . $this->get_id() ] ) || $unlocked ) {
					echo '<div class="bwdpclx-protected-content">'
					     . $this->bwdpclx_render_content( $settings ) .
					     '</div>';
					$this->bwdpclx_protected_content_scroll();
				} else {
					if ( 'yes' !== $settings[ 'bwdpclx_show_content' ] ) {
						$this->bwdpclx_render_message( $settings );
						$this->get_block_pass_protected_form( $this->get_id(), $settings );

						return false;
					}
				}
			}
			?>
		<?php endif; ?>
		<?php
	}

	/**
	 * get_block_pass_protected_form
	 * @param $widget_id
	 * @param $settings
	 */
	public function get_block_pass_protected_form( $widget_id, $settings ) {
		?>
        <div class="bwdpclx-password-protected-content-fields">
            <form id ="bwdpclx_protected_content_form_<?php echo $widget_id; ?>" name="bwdpclx_protected_content_form_<?php echo $widget_id; ?>" method="post">
                <input type="password" name="protection_password_<?php echo $widget_id; ?>" class="bwdpclx-password"
                       placeholder="<?php echo $settings[ 'protection_password_placeholder' ]; ?>">
                <input type="hidden" name="bwdpclx_protected_content_nonce_<?php echo $widget_id; ?>"
                       value="<?php echo esc_attr( wp_create_nonce( 'bwdpclx_protected_nonce' ) ); ?>">
                <input type="submit" value="<?php echo $settings[ 'protection_password_submit_btn_txt' ]; ?>"
                       class="bwdpclx-submit">
				<?php

				if ( 'template' === $settings[ 'bwdpclx_protected_content_type' ] ) {
					echo sprintf( '<input name="bwdpclx_protected_content_id" value="%s" type="hidden">', $widget_id );
				}

				if ( isset( $_POST[ 'protection_password_' . $widget_id ] ) && ( $settings[ 'protection_password' ] !== $_POST[ 'protection_password_' . $widget_id ] ) ) {
					echo sprintf(
						__( '<p class="protected-content-error-msg">%s</p>', BWDEB_ROOT_AUTHOR_PRO ),
						$settings[ 'password_incorrect_message' ]
					);
				}
				?>
            </form>
        </div>
		<?php
	}


	/**
	 * bwdpclx_remember_cookie
	 */
	public function bwdpclx_remember_cookie() {
		if ( !isset( $_POST[ 'protection_password_' . $this->get_id() ] )){
			return false;
		}
		$remember_cookie = $this->get_settings( 'bwdpclx_remember_cookie' );
		if ( $remember_cookie == 'yes' ) {
			$expire_time = (int)$this->get_settings( 'bwdpclx_remember_cookie_expire_time' ) * 60 * 1000;
			echo "<script>
                var expires = new Date();
                var expires_time = expires.getTime() + parseInt(" . $expire_time . ");
                expires.setTime(expires_time);
                document.cookie = 'protection_password_{$this->get_id()}=true;expires=' + expires.toUTCString();
            </script>";
		}
	}

	public function bwdpclx_protected_content_scroll(){
		if ( isset( $_POST[ 'protection_password_' . $this->get_id() ] )){
			$form_id = "bwdpclx-protected-content-render-".$this->get_id();
			?>
            <script>
				jQuery(document).ready(function($) {
					var id = "#<?php echo $form_id; ?>";
					$('html, body').animate({
						scrollTop: $(id).offset().top
					}, 2000);
				});
            </script>
			<?php
		}
	}

}