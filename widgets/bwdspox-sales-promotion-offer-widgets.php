<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdspox_SalesPromotionOffer_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdspox-promotion-sales-offer', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Sales Promotion Offer', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdspox-SalesPromotionOffer-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

	/**
     * Register widget content controls
    */
		$this->__promotions_sales_content_controls();
		$this->__header_content_controls();
		$this->__form_body_content_controls();
		$this->__linkUp_button_controls();
		$this->__footer_content_controls();
		$this->__other_content_controls();
		


	/**
     * Register widget style controls
    */
		$this->__box_style_controls();
		$this->__header_style_controls();
		$this->__button_style_controls();
		$this->__linkUp_button_style_controls();
		$this->__footer_style_controls();
		$this->__mobile_device_controls();

	}

	protected function __promotions_sales_content_controls() {

		$this->start_controls_section(
			'promotions_sales_content_section',
			[
				'label' => esc_html__( 'Sales Offer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'editor_mood',
			[
				'label'   => esc_html__( 'Editor Preview', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    =>  \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
			]
		);

		$this->add_control(
            'promotions_sales_style',
			[
                'type' => \Elementor\Controls_Manager::SELECT,
                'label_block' => 'yes',
                'default' => 'confirm-age',
                'options' => [
                    'confirm-age' => esc_html__('Sales Offer', BWDEB_ROOT_AUTHOR_PRO),
                    // 'confirm-dob' => esc_html__('Confirm Date Of Birth', BWDEB_ROOT_AUTHOR_PRO),
                    // 'confirm-by-boolean' => esc_html__('Confirm by Yes/No', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

		$this->end_controls_section();
	}

	protected function __header_content_controls() {

		$this->start_controls_section(
			'header_content_section',
			[
				'label' => esc_html__( 'Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		 $this->add_control(
			'header_img',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => ['active'   => true,],
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [ 'active' => true,],
				'default' => esc_html__( 'Get 20% Everything', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Enter Your Title', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);

        $this->add_control(
            'desc',
            [
            	'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Get 20% off your first purchase by joining our mailing list, and receive some of the best deals possible.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Enter Description', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => ['active'   => true,],
            ]
        );

		$this->add_responsive_control(
			'header_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-header, {{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button, {{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __form_body_content_controls() {

		$this->start_controls_section(
			'form_body_content_section',
			[
				'label' => esc_html__( 'Form Body', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);



		$this->add_control(
			'btn_one_heading',
			[
				'label' => esc_html__( 'Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => ['active'   => true,],
				// 'default' => esc_html__( "Close", BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fas fa-times',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
            'icon_position', [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Icon Position', BWDEB_ROOT_AUTHOR_PRO),
                'default' => 'after',
                'options' => [
                    'before' => esc_html__('Before', BWDEB_ROOT_AUTHOR_PRO),
                     'after' => esc_html__('After', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                	'button_icon[value]!' => '',
				],
            ]
        );


        $this->add_responsive_control(
			'form_body_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body' => 'align-items: {{VALUE}};justify-content: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __linkUp_button_controls() {

		$this->start_controls_section(
			'linkUp_button_content_section',
			[
				'label' => esc_html__( 'Link Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'LinkUp_button_text',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => ['active'   => true,],
				'default' => esc_html__( "Shop Now", BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		//button link
		$this->add_control(
			'LinkUp_button_link',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'show_external' => true,
				'default' => [
                    'url' => 'https://bestwpdeveloper.com/',
                    'is_external' => true,
                    'nofollow' => true,
                ],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'LinkUp_button_icon',
			[
				'label' => esc_html__( 'Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				// 'skin' => 'inline',
				'default' => [
					'value' => 'fas fa-shopping-bag',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
            'LinkUp_icon_position', [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Icon Position', BWDEB_ROOT_AUTHOR_PRO),
                'default' => 'after',
                'options' => [
                    'before' => esc_html__('Before', BWDEB_ROOT_AUTHOR_PRO),
                    'after' => esc_html__('After', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

		$this->end_controls_section();

	}

	protected function __linkUp_button_style_controls() {

		$this->start_controls_section(
			'linkUp_button_style_section',
			[
				'label' => esc_html__( 'Link Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'linkUp_button_style_style_tabs'
		);
		
		$this->start_controls_tab(
			'linkUp_button_style_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'linkUp_button_style_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'linkUp_button_style_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'linkUp_button_style__typography',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'linkUp_button_style_border',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links',
			]
		);

		$this->add_control(
			'linkUp_button_style_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-linkup-button .bwdspox-links' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'linkUp_button_style_box_shadow',
				'selector' => '{{WRAPPER}} .bwdspox-linkup-button .bwdspox-links',
			]
		);

		$this->add_control(
			'linkUp_button_style_Padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-linkup-button .bwdspox-links' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'linkUp_button_style_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'linkUp_button_icon_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'linkUp_button_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'linkUp_button_style_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'linkUp_button_style_icon_size',
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
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'linkUp_button_style_icon_gap_before',
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
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links i' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'LinkUp_icon_position' => 'before'
				],
			]
		);
		$this->add_responsive_control(
			'linkUp_button_style_icon_gap_after',
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
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links i' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'LinkUp_icon_position' => 'after'
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'linkUp_button_style_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'linkUp_button_style_text_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'linkUp_button_style_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'linkUp_button_style_background_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'linkUp_button_style_border_hover',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-linkup-button .bwdspox-links:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function __footer_content_controls() {

		$this->start_controls_section(
			'footer_content_section',
			[
				'label' => esc_html__( 'Footer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
            'footer_text',
            [
            	'label' => esc_html__( 'Footer Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'By entering this site you are agreeing to the Terms of use and Privacy Policy.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your extra info here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active'   => true,

				],
            ]
        );

		$this->add_responsive_control(
			'footer_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-footer-text' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __other_content_controls() {

		$this->start_controls_section(
			'other_opt',
			[
				'label' => esc_html__( 'Others Option', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'side_img',
			[
				'label' => esc_html__( 'Side Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => ['active'   => true,],
			]
		);

		$this->add_control(
			'side_img_pos',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'' => esc_html__( 'Default',BWDEB_ROOT_AUTHOR_PRO ),
					'top left' => esc_html__( 'Top Left',BWDEB_ROOT_AUTHOR_PRO ),
					'top center' => esc_html__( 'Top Center',BWDEB_ROOT_AUTHOR_PRO ),
					'top right' => esc_html__( 'Top Right',BWDEB_ROOT_AUTHOR_PRO ),
					'center left' => esc_html__( 'Center Left',BWDEB_ROOT_AUTHOR_PRO ),
					'center center' => esc_html__( 'Center Center',BWDEB_ROOT_AUTHOR_PRO ),
					'center right' => esc_html__( 'Center Right', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom left' => esc_html__( 'Bottom Left', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom center' => esc_html__( 'Bottom Center',BWDEB_ROOT_AUTHOR_PRO ),
					'bottom right' => esc_html__( 'Bottom Right',BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes.bwdspox-promotions-sales-side-image' => 'background-position:{{VALUE}} !important;',
				],
				'condition' => [
					'side_img[url]!' => '',
				],
			]
		);

		$this->add_control(
			'img_direction',
			[
				'label'   => esc_html__( 'Image Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::CHOOSE,
				'default' => '2',
				'options' => [
					'0'    => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-angle-left',
					],
					'2' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-angle-right',
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes' => 'order: 1;',
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes.bwdspox-promotions-sales-side-image' => 'order: {{VALUE}};',
				],
				'condition' => [
					'side_img[url]!' => '',
				],
			]
		);

		$this->add_control(
			'promotions_sales_cookies_time',
			[
				'label' => esc_html__( 'Cookies Expiry Time', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => '<p style="color: #f73333;">' .esc_html__( 'This is required. Otherwise, it will spawn on every refresh.', BWDEB_ROOT_AUTHOR_PRO ) . '</p>',
				'type' => \Elementor\Controls_Manager::NUMBER,
				'dynamic' => [
					'active' => true,
				],
				'min' => 0,
				'max' => 365,
				'default' => 10,
			]
		);

		$this->end_controls_section();
	}

	protected function __box_style_controls() {

		$this->start_controls_section(
            'box_style_section',
            [
                'label' => esc_html__('Box', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'box_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'separator' => 'before',
				'size_units' => ['px','%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 576,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'box_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px','%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper' => 'min-height: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'box_bg',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
			    'types' => [ 'classic', 'gradient' ],
			    'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper',
			]
		);

		$this->add_responsive_control(
			'box_bradiusNml',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'box_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper .bwdspox-promotions-sales-boxes' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_ShadowNml',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper',
			]
		);

		$this->add_control(
			'overlay_heading',
			[
				'label' => esc_html__( 'Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'overlay_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper:after' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'overlay_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
			    'types' => [ 'classic' ],
			    'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-wrapper',
				'exclude' => [
					'classic' => 'color' // remove image bg option
				],
			]
		);

        $this->end_controls_section();
	}

	protected function __header_style_controls() {

		$this->start_controls_section(
            'header_style_section',
            [
                'label' => esc_html__('Header', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'header_img[url]!' => '',
				],
            ]
        );

		$this->__image_style_controls();

		$this->__title_style_controls();

		$this->__desc_style_controls();

        $this->end_controls_section();
	}

	protected function __image_style_controls() {

		$this->add_control(
			'image_heading',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

       $this->add_responsive_control(
            'img_size',
            [
                'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 500,
						'step' => 1,
					],
				],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-image img' => 'max-width: {{SIZE}}{{UNIT}}',
				],
            ]
        );

        $this->add_responsive_control(
			'img_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'img_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-inner-wrapper .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

	}

	protected function __title_style_controls() {

		$this->add_control(
			'title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-title',
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'title_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);
	}

	protected function __desc_style_controls() {

		$this->add_control(
			'desc_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-description' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typo',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-description',
			]
		);

		$this->add_responsive_control(
			'desc_padding',
			[
				'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'desc_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);
	}

	protected function __confirm_text_style_controls() {

		$this->start_controls_section(
            'confirm_text_style_section',
            [
                'label' => esc_html__('Confirm Text', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
			'confirm_text_heading',
			[
				'label' => esc_html__( 'Confirm Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'confirm_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-checkbox' => 'color: {{VALUE}};',
				],

			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'confirm_text_typo',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-checkbox',
				'separator' => 'before',
			]
		);

        $this->end_controls_section();
	}

	protected function __button_style_controls() {

		$this->start_controls_section(
            'btn_one_style_section',
            [
                'label' => esc_html__('Close Button', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'close_button_position', [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Button Position', BWDEB_ROOT_AUTHOR_PRO),
                'default' => 'right',
                'options' => [
                    'left' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
                    'right' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
		$this->add_responsive_control(
			'close_button_Offset_Top',
			[
				'label' => esc_html__( 'Offset Top', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'close_button_Offset_left',
			[
				'label' => esc_html__( 'Offset Left', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'close_button_position' => 'left'
				],
			]
		);
		$this->add_responsive_control(
			'close_button_Offset_right',
			[
				'label' => esc_html__( 'Offset Right', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'close_button_position' => 'right'
				],
			]
		);

		$this->add_responsive_control(
			'close_button_Offset_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 10,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'close_button_Offset_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 10,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-wrapper.bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_one_typo',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->add_responsive_control(
			'btn_one_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'btn_one_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->start_controls_tabs( 'btn_one_tab' );

		$this->start_controls_tab(
			'btn_one_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
            'btn_one_color',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

         $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btn_one_bg',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
			    'types' => [ 'classic', 'gradient' ],
			    'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
				{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'btn_one_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->add_responsive_control(
			'btn_one_bradius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn'=> 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'btn_one_Shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'btn_one_hover',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
            'btn_one_color_hvr',
            [
                'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn'=> 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btn_one_bg_hvr',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
			    'types' => [ 'classic', 'gradient' ],
			    'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
				{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'btn_one_hvr_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' =>  '{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',
			]
		);

		$this->add_responsive_control(
			'btn_one_hvr_border_bradius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					 '{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'btn_one_hvr_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' =>  '{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn,
					{{WRAPPER}} .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-yes-btn',

			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->add_control(
			'btn_one_icon_heading',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

        $this->add_responsive_control(
            'btn_one_icon_size',
            [
                'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__('Size', BWDEB_ROOT_AUTHOR_PRO),
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 200,
						'step' => 1,
					],
				],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i' => 'font-size: {{SIZE}}{{UNIT}}',
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}}',
				],
                'condition' => [
					'button_icon[value]!' => '',
				],
            ]
        );

		$this->add_responsive_control(
            'btn_one_icon_space',
            [
                'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__('Offset', BWDEB_ROOT_AUTHOR_PRO),
				'size_units' => [ 'px','%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 10,
				// ],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i,{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'margin-left: {{SIZE}}{{UNIT}}',
				],
				'condition'    => [
				 	'icon_position' => [ 'after' ],
					'button_icon[value]!' => '',
				],
            ]
        );

		$this->add_responsive_control(
            'btn_one_icon_space_left',
            [
                'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__('Offset', BWDEB_ROOT_AUTHOR_PRO),
				'size_units' => [ 'px','%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 10,
				// ],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i,{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'margin-right: {{SIZE}}{{UNIT}}',
				],
				'condition'    => [
				 	'icon_position' => [ 'before' ],
					'button_icon[value]!' => '',
				],
            ]
        );

        $this->add_responsive_control(
			'btn_one_icon_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i,{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

        $this->start_controls_tabs(
			'btn_one_icon_tabs',
			[
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

		$this->start_controls_tab(
			'btn_one_icon_color_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

		$this->add_control(
			'btn_one_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'fill: {{VALUE}};',
				],
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'btn_one_icon_hover',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
                'condition' => [
					'button_icon[value]!' => '',
				],
			]
		);

		$this->add_control(
			'btn_one_icon_hvr_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .bwdspox-promotions-sales-confirm-age .bwdspox-promotions-sales-boxes:hover .bwdspox-promotions-sales-form-body .bwdspox-promotions-sales-confirm-a-btn svg' => 'fill: {{VALUE}};',
					'condition' => [
						'button_icon[value]!' => '',
					],
				],
			]
		);

		$this->end_controls_tab();
	    $this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function __footer_style_controls() {

		$this->start_controls_section(
            'footer_style_section',
            [
                'label' => esc_html__('Footer', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                	'footer_text!' => '',
				],
            ]
        );

		$this->add_control(
			'footer_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-footer-text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'footer_text_typo',
				'selector' => '{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-footer-text',
			]
		);

		$this->add_responsive_control(
			'footer_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-footer-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'footer_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdspox-promotions-sales-boxes .bwdspox-promotions-sales-footer-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

        $this->end_controls_section();
	}

	//breakpoint--------------------
	protected function __mobile_device_controls() {

		$this->start_controls_section(
			'bwdspox__breakpoint_section',
			[
				'label' => esc_html__( 'Breakpoint', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'side_img[url]!' => ''
				],
			]
		);

		//breakpoint--------------------
		$this->add_control(
		   'bwdspox__breakpoint',
		   [
			   'label'       => esc_html__('Hide Side Image', BWDEB_ROOT_AUTHOR_PRO),
			//    'description' => esc_html__( 'For Horizontal Layout Only', BWDEB_ROOT_AUTHOR_PRO ),
			   'type'        => Controls_Manager::NUMBER,
			   'min'         => 0,
			   'max'         => 10000,
			   'step'        => 1,
		   ]
	   );

		//breakpoint--------------------
		$this->add_control(
		   'bwdspox_wrap_breakpoint',
		   [
			   'label'       => esc_html__('Image Wrap', BWDEB_ROOT_AUTHOR_PRO),
			//    'description' => esc_html__( 'For Horizontal Layout Only', BWDEB_ROOT_AUTHOR_PRO ),
			   'type'        => Controls_Manager::NUMBER,
			   'min'         => 0,
			   'max'         => 10000,
			   'step'        => 1,
			   'condition' => [
					'bwdspox__breakpoint' => ''
				],
		   ]
	   );
		$this->add_control(
		   'bwdspox_wrap_breakpoint_image_height',
		   [
			   'label'       => esc_html__('Image Height', BWDEB_ROOT_AUTHOR_PRO),
			//    'description' => esc_html__( 'For Horizontal Layout Only', BWDEB_ROOT_AUTHOR_PRO ),
			   'type'        => Controls_Manager::NUMBER,
			   'min'         => 0,
			   'max'         => 10000,
			   'step'        => 1,
			   'default'        => 250,
			   'condition' => [
				'bwdspox__breakpoint' => '',
				'bwdspox_wrap_breakpoint!' => '',
			],
		   ]
	   );

	   $this->end_controls_section();
   }

	protected function render() {
		$settings = $this->get_settings_for_display();

		$breakpoint_1 = $settings['bwdspox__breakpoint'];
		$breakpoint_2 = $settings['bwdspox_wrap_breakpoint'];
		$image_height = $settings['bwdspox_wrap_breakpoint_image_height'];


		$media_query_1 = '@media only screen and (max-width: ' . $breakpoint_1 . 'px) {
			.bwdspox-image-none { display: none!important; }
			.bwdspox-promotions-sales-wrapper .bwdspox-promotions-sales-boxes.bwdspox-promotions-sales-equ-width-50 {
				min-width: 100%!important;
				width: 100%!important;
			}
		 }';
		$media_query_2 = '@media only screen and (max-width: ' . $breakpoint_2 . 'px) {
			.bwdspox-promotions-sales-inner-wrapper { flex-wrap: wrap!important; }
			.bwdspox-promotions-sales-wrapper .bwdspox-promotions-sales-boxes.bwdspox-promotions-sales-equ-width-50 { min-width: 100%!important; width: 100%!important;}
			.bwdspox-promotions-sales-boxes.bwdspox-promotions-sales-side-image.bwdspox-image-none.bwdspox-promotions-sales-equ-width-50 { height: ' . $image_height .'px!important; }
		 }';
        ?>
                <style>
                    <?php echo $media_query_1; ?>
                    <?php echo $media_query_2; ?>
                </style>
        <?php
        



		$right_img_class='';

		$this->add_render_attribute(
			'wrapper',
			'class',
			[
				'bwdspox-promotions-sales-wrapper',
				'bwdspox-promotions-sales-'.$settings['promotions_sales_style'],
			]
		);

		if( $settings['promotions_sales_cookies_time'] != '0' ) {
			$this->add_render_attribute( 'wrapper', 'data-promotions_sales_cookies_time', $settings['promotions_sales_cookies_time']);
		}

		if( $settings["editor_mood"] != 'yes' ) {
			$this->add_render_attribute( 'wrapper', 'data-editor_mood', 'no' );
		}

		$right_img_class = !empty($settings['side_img']['url']) ? 'bwdspox-promotions-sales-equ-width-50' : '';
		$this->add_render_attribute( 'box', 'class', ['bwdspox-promotions-sales-boxes',$right_img_class]);

		if((\Elementor\Plugin::$instance->editor->is_edit_mode()) && $settings["editor_mood"] != 'yes') {
			printf(
				"<p>%s</p>",
				esc_html__( 'Offers:- This is just a placeholder & will not be shown on the live page.', BWDEB_ROOT_AUTHOR_PRO )
			);
			return;
		}
		?>

		<div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
			<div class="bwdspox-promotions-sales-inner-wrapper">

				<div <?php echo $this->get_render_attribute_string( 'box' ); ?>>

					<div class="bwdspox-promotions-sales-header">
						<?php if(!empty($settings['warning_message'])): ?>
							<div class="bwdspox-promotions-sales-warning-msg"><?php echo $settings['warning_message'] ?></div>
						<?php endif; ?>

						<?php if( !empty($settings['header_img']['url']) ): ?>
							<?php if( !empty($settings['header_img']['id']) ): ?>
								<?php $image_url = wp_get_attachment_image_url( $settings['header_img']['id'], 'full' ); ?>
								<div class="bwdspox-promotions-sales-image"><img src="<?php echo esc_url($image_url); ?>"></div>
							<?php else: ?>
								<div class="bwdspox-promotions-sales-image"><img src="<?php echo $settings['header_img']['url']; ?>"></div>
							<?php endif; ?>
						<?php endif; ?>

						<?php if( !empty($settings['title']) ): ?>
							<div class="bwdspox-promotions-sales-title"><?php echo esc_html($settings['title']); ?></div>
						<?php endif; ?>

						<?php if( !empty($settings['desc']) ): ?>
							<div class="bwdspox-promotions-sales-description"><?php $this->print_unescaped_setting( 'desc' ); ?></div>
						<?php endif; ?>
					</div>

					<?php if( !empty($settings['LinkUp_button_text']) ):?>
						<div class="bwdspox-linkup-button">
							<a class="bwdspox-links" href="<?php echo esc_url(isset($settings['LinkUp_button_link']['url']) ? $settings['LinkUp_button_link']['url'] : ''); ?>" <?php echo esc_attr(($settings['LinkUp_button_link']['is_external']) ? 'target="_blank"' : ''); ?>>


							<?php
								if ( $settings['LinkUp_icon_position'] == 'before' && !empty($settings['LinkUp_button_icon']['value']) ) {
									\Elementor\Icons_Manager::render_icon( $settings["LinkUp_button_icon"], [ 'aria-hidden' => 'true' ] );
								}

								echo esc_html($settings['LinkUp_button_text']);

								if ( $settings['LinkUp_icon_position'] == 'after' && !empty($settings['LinkUp_button_icon']['value']) ) {
									\Elementor\Icons_Manager::render_icon( $settings["LinkUp_button_icon"], [ 'aria-hidden' => 'true' ] );
								}
							?>

							</a>
						</div>
					<?php endif; ?>
					

					<div class="bwdspox-promotions-sales-form-body">
						<?php if( !empty($settings['promotions_sales_style']) ): ?>

							<?php if($settings['promotions_sales_style']=='confirm-age'): ?>
								<button type="submit" class="bwdspox-promotions-sales-confirm-a-btn bwdspox-promotions-sales-btn-ex">
									<?php
										if ( $settings['icon_position'] == 'before' && !empty($settings['button_icon']['value']) ) {
											\Elementor\Icons_Manager::render_icon( $settings["button_icon"], [ 'aria-hidden' => 'true' ]);
										}
										echo esc_html($settings['button_text']);
										if ( $settings['icon_position'] == 'after' && !empty($settings['button_icon']['value']) ) {
											\Elementor\Icons_Manager::render_icon( $settings["button_icon"], [ 'aria-hidden' => 'true' ]);
										}
									?>
								</button>
							<?php endif; ?>

							

						<?php endif; ?>
					</div>

					<?php if( !empty($settings['footer_text']) ): ?>
						<div class="bwdspox-promotions-sales-footer-text"><?php $this->print_unescaped_setting( 'footer_text' ); ?></div>
					<?php endif; ?>
				</div>

				<?php if( !empty($settings['side_img']['url']) ): ?>
					<div class="bwdspox-promotions-sales-boxes bwdspox-promotions-sales-side-image bwdspox-image-none <?php echo $right_img_class; ?>" style="background-image:url(<?php echo $settings['side_img']['url']; ?>);background-size:cover;   background-attachment:inherit;"></div>
				<?php endif; ?>

			</div>
		</div>

		<?php
	}

}