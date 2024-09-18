<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;

class SPOFFERpro_Spacial_Day extends Widget_Base {

	public function get_name() {
		return esc_html__( 'SpecialDayOffer', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Special Day Offer', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-product-upsell';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

    protected function register_controls() {

        $this->start_controls_section(
            'spoffer_add_banner_content',
            [
                'label' => __( 'Banner', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

		$this->add_control(
			'spoffer_banner_content_pos',
			[
				'label' => __( 'Content Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'center',
				'options' => [
					'top'   => __( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'center' => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => __( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'left'   => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right'  => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'spoffer_banner_hover_effects',
			[
				'label' => __( 'Hover Effects', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => __('Default', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-apollo'  => __('Apollo', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-bubba'  => __('Bubba', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-chico'  => __('Chico', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-dexter'  => __('Dexter', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-duke'  => __('Duke', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-goliath'  => __('Goliath', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-honey'  => __('Honey', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-jazz'  => __('Jazz', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-layla'  => __('Layla', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-lexi'  => __('Lexi', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-lily'  => __('Lily', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-marley'  => __('Marley', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-milo'  => __('Milo', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-ming'  => __('Ming', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-moses'  => __('Moses', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-oscar'  => __('Oscar', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-romeo'  => __('Romeo', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-roxy'  => __('Roxy', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-ruby'  => __('Ruby', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-sadie'  => __('Sadie', BWDEB_ROOT_AUTHOR_PRO),
					'spoffer-effect-sarah'  => __('Sarah', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'spoffer_banner_image',
			[
				'label' => __( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'spoffer_banner_image_size',
				'default' => 'large',
				'separator' => 'none',
			]
		);

		$this->add_control(
			'spoffer_banner_offer',
			[
				'label' => __( 'Offer Amount', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => __('25%',BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __( '25%', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'spoffer_banner_offer_tag_line',
			[
				'label' => __( 'Offer Tag Line', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => __('Off',BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __( 'Off', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'spoffer_banner_content_type',
			[
				'label' => __( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'static',
				'options' => [
					'static'   => __( 'Static', BWDEB_ROOT_AUTHOR_PRO ),
					'category' => __( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
					'product' => __( 'Product', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'spoffer_banner_title',
			[
				'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => __('Here Is Title',BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'spoffer_banner_content_type' => 'static',
				],
			]
		);

		$this->add_control(
			'spoffer_banner_sub_title',
			[
				'label' => __( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'spoffer_banner_content_type' => 'static',
				],
			]
		);

		$this->add_control(
			'spoffer_banner_description',
			[
				'label' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'spoffer_banner_content_type' => 'static',
				],
			]
		);

		$this->add_control(
			'spoffer_banner_link',
			[
				'label' => __( 'Banner Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'condition' => [
					'spoffer_banner_content_type' => 'static',
				],
			]
		);

		//========================Category=========================//
		function spoffer_get_cat_terms_array( $tax = array( 'product_cat' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax );
		
			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
		
			$args = array(
				'taxonomy'     => $tax,
				'hide_empty'   => 0,
				'hierarchical' => 0,
			);
		
			$all_spoffer_terms = get_terms( $args );
		
			if ( empty( $all_spoffer_terms ) || is_wp_error( $all_spoffer_terms ) ) {
				return array(); // Return an empty array if no terms or an error occurred
			}
		
			foreach ( $all_spoffer_terms as $term ) {
				$terms[ $term->slug ] = $term->name; // Use the term slug as key and term name as value
			}
		
			return $terms;
		}
		
		$this->add_control(
			'spoffer_the_cat_showing',
			[
				'label' => esc_html__( 'Category Select', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'condition' => [
					'spoffer_banner_content_type' => 'category',
				],
				'default' => '',
				'options' => spoffer_get_cat_terms_array( array( 'product_cat' ) ),
				'multiple' => false,
				'separator' => 'before',
				'search' => true, // Enable search capability
			]
		);
		
		function spoffer_get_product_terms_array( $post_type = 'product', $return_key = 'ID' ) {
			$products = array();
			$args = array(
				'post_type'      => $post_type,
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			);
		
			$product_query = new \WP_Query( $args );
		
			if ( $product_query->have_posts() ) {
				while ( $product_query->have_posts() ) {
					$product_query->the_post();
					$products[ get_the_ID() ] = get_the_title();
				}
				wp_reset_postdata();
			}
		
			return $products;
		}
		
		$this->add_control(
			'spoffer_the_product_showing',
			[
				'label' => esc_html__( 'Product Select', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'condition' => [
					'spoffer_banner_content_type' => 'product',
				],
				'default' => '',
				'options' => spoffer_get_product_terms_array(),
				'multiple' => false,
			]
		);
		//======================Category===========================//

		$this->add_control(
			'spoffer_banner_button_txt',
			[
				'label' => __( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => __('Shop Now',BWDEB_ROOT_AUTHOR_PRO),
				'placeholder' => __( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'spoffer_banner_badge_toggle',
			[
				'label' => __( 'Banner Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
			]
		);

            $this->start_popover();

                $this->add_control(
                    'spoffer_banner_badge_image',
                    [
                        'label' => __( 'Badge Image', BWDEB_ROOT_AUTHOR_PRO ),
                        'type' => Controls_Manager::MEDIA,
                    ]
                );

                $this->add_responsive_control(
                    'badge_width',
                    [
                        'label' => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 1000,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'condition'=>[
                            'spoffer_banner_badge_image[url]!'=>'',
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .spoffer-banner .wlbanner-badgeimage' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );

                $this->add_responsive_control(
                    'badge_x_position',
                    [
                        'label' => __( 'Horizontal Position', BWDEB_ROOT_AUTHOR_PRO ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'default' => [
                            'size' => 25,
                            'unit' => '%',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -1000,
                                'max' => 1000,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'condition'=>[
                            'spoffer_banner_badge_image[url]!'=>'',
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .spoffer-banner .wlbanner-badgeimage' => 'left: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );

                $this->add_responsive_control(
                    'badge_y_position',
                    [
                        'label' => __( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'default' => [
                            'size' => 0,
                            'unit' => '%',
                        ],
                        'range' => [
                             'px' => [
                                'min' => -1000,
                                'max' => 1000,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'condition'=>[
                            'spoffer_banner_badge_image[url]!'=>'',
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .spoffer-banner .wlbanner-badgeimage' => 'top: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );

            $this->end_popover();
            
        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'spoffer_add_banner_style_section',
            [
                'label' => __( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_responsive_control(
                'spoffer_add_banner_section_align',
                [
                    'label' => __( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::CHOOSE,
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
                        'justify' => [
                            'title' => __( 'Justified', BWDEB_ROOT_AUTHOR_PRO ),
                            'icon' => 'eicon-text-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .spoffer-banner .banner-content' => 'text-align: {{VALUE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'spoffer_add_banner_section_margin',
                [
                    'label' => __( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .spoffer-banner .banner-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'spoffer_add_banner_section_padding',
                [
                    'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .spoffer-banner .banner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'spoffer_title_content_name_overlay',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient', 'video' ],
					'selector' => '{{WRAPPER}} .spoffer-banner .banner-thumb a::before,{{WRAPPER}} .spoffer-banner .banner-thumb a::after',
				]
			);
            
        $this->end_controls_section();

        // Style Title tab section
        $this->start_controls_section(
            'spoffer_banner_title_style_section',
            [
                'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		// ==========
        $this->start_controls_tabs(
			'spoffer_title_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_title_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h2',
			]
		);
		
		$this->add_control(
			'spoffer_title_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_title_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h2',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_title_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h2',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_title_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_title_hover_typography',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h2',
			]
		);
		
		$this->add_control(
			'spoffer_title_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_title_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h2',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_title_hover_border',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h2',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_title_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

        // Style Sub Title tab section
        $this->start_controls_section(
            'spoffer_banner_sub_title_style_section',
            [
                'label' => __( 'Sub Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'spoffer_banner_sub_title!'=>'',
                ]
            ]
        );

		// ==========
        $this->start_controls_tabs(
			'spoffer_sub_title_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_sub_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_sub_title_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h6',
			]
		);
		
		$this->add_control(
			'spoffer_sub_title_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h6' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_sub_title_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h6',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_sub_title_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h6',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h6' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_sub_title_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_sub_title_hover_typography',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h6',
			]
		);
		
		$this->add_control(
			'spoffer_sub_title_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h6' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_sub_title_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h6',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_sub_title_hover_border',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h6',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_sub_title_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h6' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

        // Style Description tab section
        $this->start_controls_section(
            'spoffer_banner_description_style_section',
            [
                'label' => __( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

		// ==========
        $this->start_controls_tabs(
			'spoffer_desc_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_desc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_desc_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content p',
			]
		);
		
		$this->add_control(
			'spoffer_desc_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_desc_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content p',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_desc_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content p',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content p' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_desc_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_desc_hover_typography',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content p',
			]
		);
		
		$this->add_control(
			'spoffer_desc_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_desc_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content p',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_desc_hover_border',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content p',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_desc_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content p' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

        // Style Offer tab section
        $this->start_controls_section(
            'spoffer_banner_offer_style_section',
            [
                'label' => __( 'Offer Amount', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'spoffer_banner_offer!'=>'',
                ]
            ]
        );

		// ==========
        $this->start_controls_tabs(
			'spoffer_offer_amount_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_offer_amount_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_offer_amount_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5',
			]
		);
		
		$this->add_control(
			'spoffer_offer_amount_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_offer_amount_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_offer_amount_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_offer_amount_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_offer_amount_hover_typography',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5',
			]
		);
		
		$this->add_control(
			'spoffer_offer_amount_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_offer_amount_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_offer_amount_hover_border',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_offer_amount_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

        // Style Offer Tag section
        $this->start_controls_section(
            'spoffer_banner_offer_tag_style_section',
            [
                'label' => __( 'Offer Tag Line', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'spoffer_banner_offer!'=>'',
                ]
            ]
        );

		// ==========
        $this->start_controls_tabs(
			'spoffer_tag_line_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_tag_line_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_tag_line_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5 span',
			]
		);
		
		$this->add_control(
			'spoffer_tag_line_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5 span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_tag_line_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5 span',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_tag_line_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content h5 span',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content h5 span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_tag_line_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_tag_line_hover_typography',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span',
			]
		);
		
		$this->add_control(
			'spoffer_tag_line_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_tag_line_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_tag_line_hover_border',
				'selector' => '{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}:hover .spoffer-banner .banner-content h5 span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

        // Style Button tab section
        $this->start_controls_section(
            'spoffer_banner_button_style_section',
            [
                'label' => __( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'spoffer_banner_button_txt!'=>'',
                ]
            ]
        );

		// ==========
        $this->start_controls_tabs(
			'spoffer_tag_line_style_tabs'
		);
		
		// Normal tab
		$this->start_controls_tab(
			'spoffer_tag_line_style_normal_tab',
			[
				'label' => esc_html__( 'Normal',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_tag_line_name_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a',
			]
		);
		
		$this->add_control(
			'spoffer_tag_line_content_name_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_tag_line_content_name_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_tag_line_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		// Hover tab
		$this->start_controls_tab(
			'spoffer_tag_line_tstm_style_hover_tab',
			[
				'label' => esc_html__( 'Hover',  BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'spoffer_tag_line_hover_typography',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a:hover',
			]
		);
		
		$this->add_control(
			'spoffer_tag_line_content_hover_color',
			[
				'label' => esc_html__( 'Color',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'spoffer_tag_line_content_name_hover_bgcolor',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a:hover',
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'spoffer_tag_line_hover_border',
				'selector' => '{{WRAPPER}} .spoffer-banner .banner-content a:hover',
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_padding',
			[
				'label' => esc_html__( 'Padding',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_margin',
			[
				'label' => esc_html__( 'Margin',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'spoffer_tag_line_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .spoffer-banner .banner-content a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// ============
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {
        $settings   = $this->get_settings_for_display();
		if($settings['spoffer_banner_content_type']=='category'||$settings['spoffer_banner_content_type']=='product'){
			if ( !in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
				?><a href="https://WordPress.org/plugins/WooCommerce/"><div class="spoffer_wooc_not_acivate_notice"><h2><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO); ?></h2></div></a><?php
			endif;
		}
        $this->add_render_attribute( 'spoffer_banner', 'class', 'spoffer-banner spoffer-banner-content-pos-'.$settings['spoffer_banner_content_pos'] );
        if ( ! empty( $settings['spoffer_banner_link']['url'] ) ) {
            $this->add_render_attribute( 'url', 'href', esc_url($settings['spoffer_banner_link']['url']) );
            if ( $settings['spoffer_banner_link']['is_external'] ) {
                $this->add_render_attribute( 'url', 'target', '_blank' );
            }
            if ( ! empty( $settings['spoffer_banner_link']['nofollow'] ) ) {
                $this->add_render_attribute( 'url', 'rel', 'nofollow' );
            }
        }
        ?>
            <div <?php echo $this->get_render_attribute_string( 'spoffer_banner' ); echo $settings['spoffer_banner_hover_effects']; ?>>
                <div class="banner-thumb">
                    <a <?php echo $this->get_render_attribute_string( 'url' ); ?>>
						<div></div>
                        <?php
                            echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'spoffer_banner_image_size', 'spoffer_banner_image' );
                        ?>
                    </a>
                </div>
                <?php
                    if( !empty($settings['spoffer_banner_badge_image']['url']) ){
                        echo '<div class="wlbanner-badgeimage"><img src="' . esc_url($settings['spoffer_banner_badge_image']['url']) . '"></div>';
                    }
                ?>
                <div class="banner-content">
                    <?php
					if($settings['spoffer_banner_content_type']=='static'){
						echo '<h2>'.esc_html__($settings['spoffer_banner_title'],BWDEB_ROOT_AUTHOR_PRO).'</h2>';
						if( !empty( $settings['spoffer_banner_sub_title'] ) ){
							echo '<h6>'.esc_html__($settings['spoffer_banner_sub_title'],BWDEB_ROOT_AUTHOR_PRO).'</h6>';
						}
						if( !empty( $settings['spoffer_banner_offer'] ) ){
							echo '<h5>'.esc_html__($settings['spoffer_banner_offer'],BWDEB_ROOT_AUTHOR_PRO).'<span>'.esc_html__($settings['spoffer_banner_offer_tag_line'],BWDEB_ROOT_AUTHOR_PRO).'</span></h5>';
						}
						if( !empty( $settings['spoffer_banner_description'] ) ){
							echo '<p>'.esc_html__($settings['spoffer_banner_description'],BWDEB_ROOT_AUTHOR_PRO).'</p>';
						}
						if( !empty( $settings['spoffer_banner_button_txt'] ) ){
							echo '<a '.$this->get_render_attribute_string( 'url' ).'>'.esc_html__($settings['spoffer_banner_button_txt'],BWDEB_ROOT_AUTHOR_PRO).'</a>';
						}
					}elseif($settings['spoffer_banner_content_type']=='category'){
						$selected_category_slug = $settings['spoffer_the_cat_showing'];
						if ( !empty( $selected_category_slug ) ) {
							$selected_category = get_term_by( 'slug', $selected_category_slug, 'product_cat' );
							if ( $selected_category && ! is_wp_error( $selected_category ) ) {
								$category_name = esc_html( $selected_category->name );
								$category_link = get_term_link( $selected_category );
								$category_description = wp_kses_post( $selected_category->description );

								echo '<h2>' . $category_name . '</h2>';
								echo '<p>' . $category_description . '</p>';
								echo '<a href="' . esc_url( $category_link ) . '">'.esc_html__($settings['spoffer_banner_button_txt'],BWDEB_ROOT_AUTHOR_PRO).'</a>';
							} else {
								echo esc_html__( 'No category selected', BWDEB_ROOT_AUTHOR_PRO );
							}
						} else {
							echo esc_html__( 'No category selected', BWDEB_ROOT_AUTHOR_PRO );
						}
					}elseif($settings['spoffer_banner_content_type']=='product'){
						$selected_product_id = $settings['spoffer_the_product_showing'];
						if ( !empty( $selected_product_id ) ) {
							$selected_product = get_post( $selected_product_id );
							if ( $selected_product ) {
								$product_title = esc_html( $selected_product->post_title );
								$product_link = get_permalink( $selected_product_id );
								$product_description = wp_kses_post( $selected_product->post_excerpt  );
								echo '<h2>' . $product_title . '</h2>';
								echo '<p>' . $product_description . '</p>';
								echo '<a href="' . esc_url( $product_link ) . '">'.esc_html__($settings['spoffer_banner_button_txt'],BWDEB_ROOT_AUTHOR_PRO).'</a>';
							} else {
								echo esc_html__( 'No product selected', BWDEB_ROOT_AUTHOR_PRO );
							}
						} else {
							echo esc_html__( 'No product selected', BWDEB_ROOT_AUTHOR_PRO );
						}
					}
                    ?>
                </div>
            </div>
        <?php
    }

}