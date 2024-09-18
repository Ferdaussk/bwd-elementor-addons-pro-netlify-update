<?php
namespace BWDElementorBundlePro;

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Typography;
use \Elementor\Plugin;
use \Elementor\Core\Schemes\Typography;
use \Essential_Addons_Elementor\Pro\Classes\Helper;
use http\Message\Body;
define( "BWDEB_PRO_ASFSK_EXP_DIR_FILE", plugin_dir_url( __FILE__ ) . "../../assets/public" );
define( "BWDEB_PRO_ASFSK_EXA_DIR_FILE", plugin_dir_url( __FILE__ ) . "../../assets/admin" );

class ProbwdproebElementorEx {
	private static $_instanceEx = null;
	public static function instanceEx() {
		if ( is_null( self::$_instanceEx ) ) {
			self::$_instanceEx = new self();
		}
		return self::$_instanceEx;
	}

	public function bwdproeb_all_assets_for_the_publicEx(){
		wp_enqueue_script( 'bwdcssk-jsextension', plugin_dir_url( __FILE__ ) . '../../assets/public/js/extension/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
		if (get_option('bwdeb-extn-link', 'off') == 'on') {
			wp_enqueue_script( 'bwdcssk-link1extension', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-link.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
			wp_enqueue_script( 'bwdcssk-link1extension', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-link.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
			wp_enqueue_script( 'bwdcssk-linkextension', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-link.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
			wp_enqueue_style( 'bwdcssk-4fontawesome-css', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-link.css', array(), BWDEB_THE_PRO_SOFT_VERSION, 'all' );
			wp_enqueue_style( 'bwdcssk-6code-default', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-link.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
		}
		wp_enqueue_style( 'bwdcssk-tippy-default', plugin_dir_url( __FILE__ ) . '../../assets/public/wrapper-tippy.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
	}

	public function sk_csstransform_before_render(){
		wp_enqueue_style( 'bwdcssk-css-transform', plugin_dir_url( __FILE__ ) . '../../assets/public/css/extensions/css-transform/main.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
	}

	public function sk_floating_animation_before_render(){
		wp_enqueue_script( 'entext-fghfhgfgt-nnn', plugin_dir_url( __FILE__ ) . '../../assets/public/css/extensions/floating/extension-floating-effects.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true );
		wp_enqueue_script( 'entext-anime-nnn', plugin_dir_url( __FILE__ ) . '../../assets/public/css/extensions/floating/anime.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true );
	}

	// For link
	public function sk_link_before_render( $element ) {
		$wrapper_link_settings = $element->get_settings_for_display( 'entext_link_wrapper_link' );

		if ( ! empty( $element->get_settings_for_display( 'entext_link_wrapper_link_switch' ) ) && ! empty( $wrapper_link_settings['url'] ) ) {
			$element->add_render_attribute( '_wrapper',
				'data-entext-wrapper-link',
				wp_json_encode( [
					'url'         => esc_url( $wrapper_link_settings['url'] ),
					'is_external' => esc_attr( $wrapper_link_settings['is_external'] ),
					'nofollow'    => esc_attr( $wrapper_link_settings['nofollow'] )
				] )
			);
		}
	}
	
	
	public function sk_link_register_controls( $element ) {
		$element->start_controls_section(
			'entext_link_wrapper_link_section',
			[
				'label' => __( 'Wrap Link', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_ADVANCED
			]
		);

		$element->add_control(
			'entext_link_wrapper_link_switch',
			[
				'label' => __( 'Wrap Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER
			]
		);

		$element->add_control(
			'entext_link_wrapper_link',
			[
				'label'     => __( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::URL,
				'dynamic'   => [
					'active' => true,
				],
				'condition' => [
					'entext_link_wrapper_link_switch!' => ''
				]
			]
		);

		$element->end_controls_section();
	}

	// For content protection
    public function user_roles()
    {
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

	public function register_controls( $element ) {
		$element->start_controls_section(
			'entext_sk_content_protection_section',
			[
				'label' => __( 'Protect Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_ADVANCED,
			]
		);

		$element->add_control(
			'entext_sk_content_protection',
			[
				'label'        => __( 'Enable Protection', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'no',
				'label_on'     => __( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);

		$element->add_control(
			'entext_sk_content_protection_type',
			[
				'label'       => esc_html__( 'Protection Type', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type'        => Controls_Manager::SELECT,
				'options'     => [
					'role'     => esc_html__( 'User role', BWDEB_ROOT_AUTHOR_PRO ),
					'password' => esc_html__( 'Password protected', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'     => 'role',
				'condition'   => [
					'entext_sk_content_protection' => 'yes',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_role',
			[
				'label'       => __( 'Select Roles', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple'    => true,
				'options'     => $this->user_roles(),
				'condition'   => [
					'entext_sk_content_protection'      => 'yes',
					'entext_sk_content_protection_type' => 'role',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_password',
			[
				'label'      => esc_html__( 'Set Password', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::TEXT,
				'input_type' => 'password',
				'condition'  => [
					'entext_sk_content_protection'      => 'yes',
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_password_placeholder',
			[
				'label'     => esc_html__( 'Input Placehlder', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::TEXT,
				'dynamic'   => [ 'active' => true ],
				'default'   => 'Enter Password',
				'condition' => [
					'entext_sk_content_protection'      => 'yes',
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_password_submit_btn_txt',
			[
				'label'     => esc_html__( 'Submit Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::TEXT,
				'dynamic'   => [ 'active' => true ],
				'default'   => 'Submit',
				'condition' => [
					'entext_sk_content_protection'      => 'yes',
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_content_protection_cookie',
			[
				'label'        => __( 'Remember Cookie', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'no',
				'label_on'     => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition'    => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_content_protection_cookie_expire_time',
			[
				'label'       => __( 'Expire Time', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 60,
				"min"         => 10,
				'description' => __( 'Cookie expiration time (Minutes)', BWDEB_ROOT_AUTHOR_PRO ),
				'condition'   => [
					'entext_content_protection_cookie' => 'yes',
				],
			]
		);

		$element->start_controls_tabs(
			'entext_sk_content_protection_tabs',
			[
				'condition' => [
					'entext_sk_content_protection' => 'yes',
				],
			]
		);

		$element->start_controls_tab(
			'entext_sk_content_protection_tab_message',
			[
				'label' => __( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$element->add_control(
			'entext_sk_content_protection_message_type',
			[
				'label'       => esc_html__( 'Message Type', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => false,
				'type'        => Controls_Manager::SELECT,
				'description' => esc_html__( 'Set a message or a saved template when the content is protected.', BWDEB_ROOT_AUTHOR_PRO ),
				'options'     => [
					'none'     => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'text'     => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
					'template' => esc_html__( 'Saved Templates', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'     => 'text',
			]
		);

		$element->add_control(
			'entext_sk_content_protection_message_text',
			[
				'label'     => esc_html__( 'Public Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::WYSIWYG,
				'default'   => esc_html__( 'You do not have permission to see this content.', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'   => [
					'active' => true,
				],
				'condition' => [
					'entext_sk_content_protection_message_type' => 'text',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_message_template',
			[
				'label'       => __( 'Choose Template', BWDEB_ROOT_AUTHOR_PRO ),
				// 'type'        => 'entext-select2',
				'label_block' => true,
				'source_type' => 'elementor_library',
				'condition'   => [
					'entext_sk_content_protection_message_type' => 'template',
				],
			]
		);

        $element->add_control(
            'entext_sk_content_protection_password_incorrect_heading',
            [
                'label' => __('Incorrect Password', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $element->add_control(
            'entext_sk_content_protection_password_incorrect_message',
            [
                'label' => esc_html__('Message', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Password does not match.', BWDEB_ROOT_AUTHOR_PRO),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

		$element->end_controls_tab();

		$element->start_controls_tab(
			'entext_sk_content_protection_tab_style',
			[
				'label' => __( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// # message
		$element->add_control(
			'entext_sk_content_protection_general_message',
			[
				'label' => __( 'Permission Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$element->add_control(
			'entext_sk_content_protection_message_text_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .entext-protected-content-message' => 'color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_message_type' => 'text',
				],
                'separator' => 'before',
			]
		);

		$element->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'entext_sk_content_protection_message_text_typography',
				'scheme'    => Typography::TYPOGRAPHY_2,
				'selector'  => '{{WRAPPER}} .entext-protected-content-message',
				'condition' => [
					'entext_sk_content_protection_message_type' => 'text',
				],
			]
		);

		$element->add_responsive_control(
			'entext_sk_content_protection_message_text_alignment',
			[
				'label'       => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .entext-protected-content-message' => 'text-align: {{VALUE}};',
				],
				'condition'   => [
					'entext_sk_content_protection_message_type' => 'text',
				],
			]
		);

		$element->add_responsive_control(
			'entext_sk_content_protection_message_text_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .entext-protected-content-message' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'entext_sk_content_protection_message_type' => 'text',
				],
			]
		);

        $element->add_control(
			'entext_sk_content_protection_error_message',
			[
				'label' => __( 'Error Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $element->add_control(
            'entext_sk_content_protection_error_message_text_color',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .protected-content-error-msg' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'entext_sk_content_protection_message_type' => 'text',
                ],
                'separator' => 'before',
            ]
        );

        $element->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'entext_sk_content_protection_error_message_text_typography',
                'scheme' => Typography::TYPOGRAPHY_2,
                'selector' => '{{WRAPPER}} .protected-content-error-msg',
                'condition' => [
                    'entext_sk_content_protection_message_type' => 'text',
                ],
            ]
        );

        $element->add_responsive_control(
            'entext_sk_content_protection_error_message_text_alignment',
            [
                'label' => esc_html__('Text Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::CHOOSE,
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
                'condition' => [
                    'entext_sk_content_protection_message_type' => 'text',
                ],
            ]
        );

        $element->add_responsive_control(
            'entext_sk_content_protection_error_message_text_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .protected-content-error-msg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'entext_sk_content_protection_message_type' => 'text',
                ],
                'separator' => 'after',
            ]
        );

		// password field
		$element->add_control(
			'entext_sk_content_protection_input_styles',
			[
				'label'     => __( 'Password Field', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_input_width',
			[
				'label'     => esc_html__( 'Input Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'width: {{SIZE}}px;',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
                'separator' => 'before',
			]
		);

		$element->add_responsive_control(
			'entext_sk_content_protection_input_alignment',
			[
				'label'       => esc_html__( 'Input Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .entext-password-protected-content-fields > form' => 'justify-content: {{VALUE}};',
				],
				'condition'   => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_responsive_control(
			'entext_sk_content_protection_password_input_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_responsive_control(
			'entext_sk_content_protection_password_input_margin',
			[
				'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_input_border_radius',
			[
				'label'     => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'border-radius: {{SIZE}}px;',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_password_input_color',
			[
				'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_password_input_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'entext_sk_content_protection_password_input_border',
				'label'     => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-password',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'entext_sk_content_protection_password_input_shadow',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-password',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		# password field hover
		$element->add_control(
			'entext_sk_content_protection_input_styles_hover',
			[
				'label'     => __( 'Password Field Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_protected_content_password_input_hover_color',
			[
				'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_protected_content_password_input_hover_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields input.entext-password:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'entext_sk_protected_content_password_input_hover_border',
				'label'     => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-password:hover',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'entext_sk_protected_content_password_input_hover_shadow',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-password"hover',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		# submit button
		$element->add_control(
			'entext_sk_content_protection_submit_button_styles',
			[
				'label'     => __( 'Submit Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_submit_button_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields .entext-submit' => 'color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_submit_button_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields .entext-submit' => 'background: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'entext_sk_content_protection_submit_button_border',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-submit',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'entext_sk_content_protection_submit_button_box_shadow',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-submit',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_submit_button_styles_hover',
			[
				'label'     => __( 'Submit Button Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_submit_button_hover_text_color',
			[
				'label'     => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields .entext-submit:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_control(
			'entext_sk_content_protection_submit_button_hover_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => [
					'{{WRAPPER}} .entext-password-protected-content-fields .entext-submit:hover' => 'background: {{VALUE}};',
				],
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'entext_sk_content_protection_submit_button_hover_border',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-submit:hover',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'entext_sk_content_protection_submit_button_hover_box_shadow',
				'selector'  => '{{WRAPPER}} .entext-password-protected-content-fields .entext-submit:hover',
				'condition' => [
					'entext_sk_content_protection_type' => 'password',
				],
			]
		);

		$element->end_controls_tab();

		$element->end_controls_tabs();

		$element->end_controls_section();
	}

	protected function current_user_privileges( $settings ) {
		if ( !is_user_logged_in() ) {
			return;
		}

        $user_role = wp_get_current_user()->roles ;
        return !empty( array_intersect( $user_role,(array)$settings['entext_sk_content_protection_role'] ));
	}

	protected function render_message( $settings ) {
		$html = '<div class="entext-protected-content-message">';

		if ( $settings[ 'entext_sk_content_protection_message_type' ] == 'text' ) {
			$html .= '<div class="entext-protected-content-message-text">' . $settings[ 'entext_sk_content_protection_message_text' ] . '</div>';
		} elseif ( $settings[ 'entext_sk_content_protection_message_type' ] == 'template' ) {
			if ( !empty( $settings[ 'entext_sk_content_protection_message_template' ] ) ) {
				$html .= Plugin::$instance->frontend->get_builder_content( $settings[ 'entext_sk_content_protection_message_template' ], true );
			}
		}
		$html .= '</div>';

		return $html;
	}


	public function password_protected_form( $widget_id, $settings ) {
		$html = '<div class="entext-password-protected-content-fields">
            <form method="post">
                <input type="password" name="entext_sk_content_protection_password_' . $widget_id . '" class="entext-password" placeholder="' . $settings[ 'entext_sk_content_protection_password_placeholder' ] . '">
                <input type="hidden" name="entext_content_protection_nonce_' . $widget_id . '" value="' . esc_attr( wp_create_nonce( 'entext_protected_nonce' ) ) . '" >
                <input type="submit" value="' . $settings[ 'entext_sk_content_protection_password_submit_btn_txt' ] . '" class="entext-submit">
            </form>';

		if ( isset( $_POST[ 'entext_sk_content_protection_password_' . $widget_id ] ) ) {
			if ( $settings[ 'entext_sk_content_protection_password' ] != $_POST[ 'entext_sk_content_protection_password_' . $widget_id ] ) {
				$html .= sprintf(
                    __('<p class="protected-content-error-msg">%s</p>', BWDEB_ROOT_AUTHOR_PRO),
                    $settings['entext_sk_content_protection_password_incorrect_message']
                );
			}
		}

		$html .= '</div>';

		return $html;
	}

	public function render_content( $content, $widget ) {
		$widget_id = $widget->get_id();
		$settings  = $widget->get_settings_for_display();
		$html      = '';

		if ( $settings[ 'entext_sk_content_protection' ] == 'yes' ) {
			if ( $settings[ 'entext_sk_content_protection_type' ] == 'role' ) {
				if ( $this->current_user_privileges( $settings ) === true ) {
					$html .= $content;
				} else {
					$html .= '<div class="entext-protected-content">' . $this->render_message( $settings ) . '</div>';
				}
			} elseif ( $settings[ 'entext_sk_content_protection_type' ] == 'password' ) {
				if ( empty( $settings[ 'entext_sk_content_protection_password' ] ) ) {
					$html .= $content;
				} else {
					$unlocked = false;

					if ( isset( $_POST[ 'entext_sk_content_protection_password_' . $widget_id ] ) ) {
						if ( ( $settings[ 'entext_sk_content_protection_password' ] == $_POST[ 'entext_sk_content_protection_password_' . $widget_id ] ) && wp_verify_nonce( $_POST[ 'entext_content_protection_nonce_' . $widget_id ], 'entext_protected_nonce' ) ) {
							$unlocked = true;
							$this->entext_content_protection_remember_cookie( $widget );
						}
					}

					if ( isset( $_COOKIE[ 'entext_sk_content_protection_password_' . $widget_id ] ) || $unlocked ) {
						$html .= $content;
						$html .= $this->entext_content_protection_scroll( $widget );
					} else {
						$html .= '<div class="entext-protected-content">' . $this->render_message( $settings ) . $this->password_protected_form( $widget_id, $settings ) . '</div>';
					}
				}
			}
		} else {
			$html .= $content;
		}

		return $html;
	}

	public function entext_content_protection_remember_cookie( $widget ) {
		if ( !isset( $_POST[ 'entext_sk_content_protection_password_' . $widget->get_id() ] ) ) {
			return false;
		}
		$remember_cookie = $widget->get_settings( 'entext_content_protection_cookie' );
		if ( $remember_cookie == 'yes' ) {
			$expire_time = (int)$widget->get_settings( 'entext_content_protection_cookie_expire_time' ) * 60 * 1000;
			echo "<script>
                var expires = new Date();
                var expires_time = expires.getTime() + parseInt(" . $expire_time . ");
                expires.setTime(expires_time);
                document.cookie = 'entext_sk_content_protection_password_{$widget->get_id()}=true;expires=' + expires.toUTCString();
            </script>";
		}
	}

	public function entext_content_protection_scroll( $widget ) {
		if ( isset( $_POST[ 'entext_sk_content_protection_password_' . $widget->get_id() ] ) ) {
			ob_start();
			$form_id = "elementor-element-" . $widget->get_id();
			?>
            <script>
				jQuery(document).ready(function ($) {
					var id = ".<?php echo $form_id; ?>";
					$('html, body').animate({
						scrollTop: $(id).offset().top
					}, 2000);
				});
            </script>
			<?php
			return ob_get_clean();
		}
		return false;
	}

	public function sk_csstransform_register_controls( $element ) {
		$element->start_controls_section(
			'entext_wrapper_cnt_section',
			[
				'label' => __( 'CSS Transform', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_ADVANCED
			]
		);

		$element->add_control(
			'entext_transform_fx',
			[
				'label' => __( 'Enable?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'prefix_class' => 'entext-css-transform-',
			]
		);

		$element->start_controls_tabs(
			'_tabs_entext_transform',
			[
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_controls_tab(
			'_tabs_entext_transform_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->add_control(
			'entext_transform_fx_translate_toggle',
			[
				'label' => __( 'Translate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'entext_transform_fx_translate_x',
			[
				'label' => __( 'Translate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'entext_transform_fx_translate_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-translate-x: {{SIZE}}px;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_translate_y',
			[
				'label' => __( 'Translate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'entext_transform_fx_translate_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-translate-y: {{SIZE}}px;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_rotate_toggle',
			[
				'label' => __( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_transform_fx_rotate_mode',
			[
				'label' => __( 'Mode', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'entext_transform_fx_rotate_hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_x',
			[
				'label' => __( 'Rotate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_rotate_mode' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-x: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_y',
			[
				'label' => __( 'Rotate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_rotate_mode' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-y: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_z',
			[
				'label' => __( 'Rotate (Z)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-z: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_scale_toggle',
			[
				'label' => __( 'Scale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_transform_fx_scale_mode',
			[
				'label' => __( 'Mode', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'entext_transform_fx_scale_hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_scale_x',
			[
				'label' => __( 'Scale (X)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'entext_transform_fx_scale_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-scale-x: {{SIZE}}; --entext-tfx-scale-y: {{SIZE}};'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_scale_y',
			[
				'label' => __( 'Scale Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'entext_transform_fx_scale_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_scale_mode' => 'loose',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-scale-y: {{SIZE}};'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_skew_toggle',
			[
				'label' => __( 'Skew', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'entext_transform_fx_skew_x',
			[
				'label' => __( 'Skew X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_skew_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-skew-x: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_skew_y',
			[
				'label' => __( 'Skew Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_skew_toggle' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-skew-y: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->end_controls_tab();

		$element->start_controls_tab(
            '_tabs_entext_transform_hover',
            [
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
            ]
		);

		$element->add_control(
			'entext_transform_fx_translate_toggle_hover',
			[
				'label' => __( 'Translate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'entext_transform_fx_translate_x_hover',
			[
				'label' => __( 'Translate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'entext_transform_fx_translate_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-translate-x-hover: {{SIZE}}px;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_translate_y_hover',
			[
				'label' => __( 'Translate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'entext_transform_fx_translate_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-translate-y-hover: {{SIZE}}px;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_rotate_toggle_hover',
			[
				'label' => __( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_transform_fx_rotate_mode_hover',
			[
				'label' => __( 'Mode', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'entext_transform_fx_rotate_hr_hover',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_x_hover',
			[
				'label' => __( 'Rotate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_rotate_mode_hover' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-x-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_y_hover',
			[
				'label' => __( 'Rotate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_rotate_mode_hover' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-y-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_rotate_z_hover',
			[
				'label' => __( 'Rotate (Z)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_rotate_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-rotate-z-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_scale_toggle_hover',
			[
				'label' => __( 'Scale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_transform_fx_scale_mode_hover',
			[
				'label' => __( 'Mode', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'entext_transform_fx_scale_hr_hover',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_scale_x_hover',
			[
				'label' => __( 'Scale (X)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'entext_transform_fx_scale_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-scale-x-hover: {{SIZE}}; --entext-tfx-scale-y-hover: {{SIZE}};'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_scale_y_hover',
			[
				'label' => __( 'Scale Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'entext_transform_fx_scale_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
					'entext_transform_fx_scale_mode_hover' => 'loose',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-scale-y-hover: {{SIZE}};'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_skew_toggle_hover',
			[
				'label' => __( 'Skew', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'entext_transform_fx_skew_x_hover',
			[
				'label' => __( 'Skew X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_skew_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-skew-x-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'entext_transform_fx_skew_y_hover',
			[
				'label' => __( 'Skew Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'entext_transform_fx_skew_toggle_hover' => 'yes',
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-skew-y-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_transform_fx_transition_duration',
			[
				'label' => __( 'Transition Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'before',
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 3,
						'step' => .1,
					]
				],
				'condition' => [
					'entext_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--entext-tfx-transition-duration: {{SIZE}}s;'
				],
			]
		);

		$element->end_controls_tab();

		$element->end_controls_tabs();

		$element->end_controls_section();
	}

	public function sk_floating_animation_register_controls( $element ) {
        $element->start_controls_section(
            'entext_wrapper_flanm_section',
            [
                'label' => __( 'Floating Animation', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_ADVANCED
            ]
        );

		$element->add_control(
			'entext_floating_fx',
			[
				'label' => __( 'Enable?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_translate_toggle',
			[
				'label' => __( 'Translate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'entext_floating_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_floating_fx_translate_x',
			[
				'label' => __( 'Translate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 5,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_translate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_translate_y',
			[
				'label' => __( 'Translate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 5,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_translate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_translate_duration',
			[
				'label' => __( 'Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'entext_floating_fx_translate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_translate_delay',
			[
				'label' => __( 'Delay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'entext_floating_fx_translate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_floating_fx_rotate_toggle',
			[
				'label' => __( 'Rotate', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'entext_floating_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_floating_fx_rotate_x',
			[
				'label' => __( 'Rotate X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_rotate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_rotate_y',
			[
				'label' => __( 'Rotate Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_rotate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_rotate_z',
			[
				'label' => __( 'Rotate Z', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_rotate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_rotate_duration',
			[
				'label' => __( 'Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'entext_floating_fx_rotate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_rotate_delay',
			[
				'label' => __( 'Delay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'entext_floating_fx_rotate_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();

		$element->add_control(
			'entext_floating_fx_scale_toggle',
			[
				'label' => __( 'Scale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'entext_floating_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'entext_floating_fx_scale_x',
			[
				'label' => __( 'Scale X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 1,
						'to' => 1.2,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_scale_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_scale_y',
			[
				'label' => __( 'Scale Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 1,
						'to' => 1.2,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'labels' => [
					__( 'From', BWDEB_ROOT_AUTHOR_PRO ),
					__( 'To', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'entext_floating_fx_scale_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_scale_duration',
			[
				'label' => __( 'Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'entext_floating_fx_scale_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'entext_floating_fx_scale_delay',
			[
				'label' => __( 'Delay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'entext_floating_fx_scale_toggle' => 'yes',
					'entext_floating_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();


        $element->end_controls_section();
    }

    // For extensions
    public function duplicate_action($post_type, $capability) {
        if (isset($_GET['action']) && $_GET['action'] === "duplicate_{$post_type}" && isset($_GET['post'])) {
            $post_id = intval($_GET['post']);
    
            if (!current_user_can("edit_{$post_type}", $post_id)) {
                wp_die('Permission Denied');
            }
    
            $original_post = get_post($post_id);
    
            $new_post_id = wp_insert_post([
                'post_title'   => $original_post->post_title . ' (Copy)',
                'post_content' => $original_post->post_content,
                'post_status'  => $original_post->post_status,
                'post_type'    => $original_post->post_type,
            ]);
    
            $post_meta = get_post_meta($post_id);
            foreach ($post_meta as $key => $value) {
                update_post_meta($new_post_id, $key, $value[0]);
            }
    
            wp_redirect(admin_url("post.php?action=edit&post={$new_post_id}"));
            exit;
        }
    }
    
    public function bwdeb_add_duplicate_link($post_type, $capability, $label) {
        return function ($actions, $post) use ($post_type, $capability, $label) {
            if (current_user_can("edit_{$capability}") && $post->post_type === $post_type) {
                $actions['duplicate'] = "<a href='" . admin_url("admin.php?action=duplicate_{$post_type}&post={$post->ID}") . "'>{$label}</a>";
            }
            return $actions;
        };
    }
    
    public function bwdeb_duplicate_product_action() {
        if (isset($_GET['post'])) {
            $product_id = $_GET['post'];
            $new_product_id = $this->duplicate_post($product_id);
    
            if ($new_product_id) {
                $redirect_url = add_query_arg(['message' => 'Product duplicated successfully'], admin_url('edit.php?post_type=product'));
                wp_redirect($redirect_url);
                exit;
            }
        }
    }
    
    public function bwdeb_add_duplicate_product_link($actions, $post) {
        if ($post->post_type === 'product') {
            $duplicate_url = wp_nonce_url(admin_url("admin.php?action=duplicate_product&post={$post->ID}"), basename(__FILE__), 'duplicate_nonce');
            $actions['duplicate_product'] = "<a href='" . esc_url($duplicate_url) . "'>BWD Duplicate Product</a>";
        }
        return $actions;
    }
    
    public function duplicate_post($post_id) {
        $post = get_post($post_id);
    
        if (!$post) {
            return 0;
        }
    
        $new_post_id = wp_insert_post([
            'post_title'   => $post->post_title . ' (Duplicate)',
            'post_content' => $post->post_content,
            'post_excerpt' => $post->post_excerpt,
            'post_status'  => $post->post_status,
            'post_type'    => $post->post_type,
        ]);
    
        if (is_wp_error($new_post_id)) {
            return 0;
        }
    
        if ($post->post_type === 'product') {
            $product_meta = get_post_meta($post_id);
            foreach ($product_meta as $key => $value) {
                update_post_meta($new_post_id, $key, $value[0]);
            }
        }
    
        return $new_post_id;
    }

	public function __construct() {
		if (class_exists('BWDEBElementorBundle')) {

			if (get_option('bwdeb-duplicate', 'off') == 'on' ) {
				add_action('admin_init', function () {
					$this->duplicate_action('post', 'posts');
					add_filter('post_row_actions', $this->bwdeb_add_duplicate_link('post', 'posts', 'BWD Duplicate Post'), 10, 2);
				});
	
				add_action('admin_init', function () {
					$this->duplicate_action('page', 'pages');
					add_filter('page_row_actions', $this->bwdeb_add_duplicate_link('page', 'pages', 'BWD Duplicate Page'), 10, 2);
				});
	
				add_action('admin_action_duplicate_product', [$this, 'bwdeb_duplicate_product_action']);
				add_filter('post_row_actions', [$this, 'bwdeb_add_duplicate_product_link'], 10, 2);
			}
		
			$commonHooks = [
				'elementor/element/common/_section_style/after_section_end',
				'elementor/element/column/section_advanced/after_section_end',
				'elementor/element/section/section_advanced/after_section_end',
				'elementor/element/container/section_layout/after_section_end',
			];
		
			// For Floating Animation
			if (get_option('bwdeb-flanime', 'off') == 'on') {
				foreach ($commonHooks as $hook) {
					add_action($hook, [$this, 'sk_floating_animation_register_controls']);
				}
				add_action('elementor/preview/enqueue_scripts', [$this, 'sk_floating_animation_before_render'], 1);
			}
		
			// For css transform
			if (get_option('bwdeb-csstrnsm', 'off') == 'on') {
				foreach ($commonHooks as $hook) {
					add_action($hook, [$this, 'sk_csstransform_register_controls']);
				}
				add_action('elementor/preview/enqueue_scripts', [$this, 'sk_csstransform_before_render'], 1);
			}
		
			// For link
			if (get_option('bwdeb-extn-link', 'off') == 'on') {
				foreach ($commonHooks as $hook) {
					add_action($hook, [$this, 'sk_link_register_controls']);
				}
				add_action('elementor/frontend/before_render', [$this, 'sk_link_before_render'], 1);
			}
		
			// For content protection
			if (get_option('bwdeb-extn-protctn', 'off') == 'on') {
				add_action('elementor/element/common/_section_style/after_section_end', [$this, 'register_controls'], 10);
				add_action('elementor/widget/render_content', [$this, 'render_content'], 10, 2);
			}
		
			add_action('wp_enqueue_scripts', [$this, 'bwdproeb_all_assets_for_the_publicEx']);
		}
	}

}

// Instantiate Plugin Class
ProbwdproebElementorEx::instanceEx();