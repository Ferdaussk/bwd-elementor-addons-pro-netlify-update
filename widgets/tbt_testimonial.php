<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class TBTTheBestTestimonials extends Widget_Base {

	public function get_name() {
		return esc_html__('bwdtbtTestimonials', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Testimonials', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-testimonial';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'tbt_content_selection',
			[
				'label' => esc_html__( 'Testimonial Contents', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'tbt_style_selection',
			[
				'label' => esc_html__( 'Testimonial Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-testimonials' ),
					'style2'  => esc_html__( 'Style 2', 'bwd-testimonials' ),
					'style3' => esc_html__( 'Style 3', 'bwd-testimonials' ),
					'style4' => esc_html__( 'Style 4', 'bwd-testimonials' ),
					'style5' => esc_html__( 'Style 5', 'bwd-testimonials' ),
					'style6' => esc_html__( 'Style 6', 'bwd-testimonials' ),
					'style7' => esc_html__( 'Style 7', 'bwd-testimonials' ),
					'style8' => esc_html__( 'Style 8', 'bwd-testimonials' ),
					'style9' => esc_html__( 'Style 9', 'bwd-testimonials' ),
					'style10' => esc_html__( 'Style 10', 'bwd-testimonials' ),
					'style11' => esc_html__( 'Style 11', 'bwd-testimonials' ),
					'style12' => esc_html__( 'Style 12', 'bwd-testimonials' ),
					'style13' => esc_html__( 'Style 13', 'bwd-testimonials' ),
					'style14' => esc_html__( 'Style 14', 'bwd-testimonials' ),
					'style15' => esc_html__( 'Style 15', 'bwd-testimonials' ),
					'style16' => esc_html__( 'Style 16', 'bwd-testimonials' ),
					'style17' => esc_html__( 'Style 17', 'bwd-testimonials' ),
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'tbt_testimonial_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'tbt_testimonial_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .tbt-slide-area-box-shadow',
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'tbt_image_profile_image',
			[
				'label' => esc_html__( 'Choose Profile', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'tbt_team_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_name',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('JHON DOE', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-title',
			]
		);
		$repeater->add_control(
			'tbt_content_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tbt-testimonial-one {{CURRENT_ITEM}} .tbt-client-title' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_name_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-client-title' => 'color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_designation_switcher',
			[
				'label' => esc_html__( 'Show Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'tbt_content_designation', [
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Developer' , BWDEB_ROOT_AUTHOR_PRO ),
				'show_label' => false,
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_TEXTAREA_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} span',
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_designation_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} span' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_designation_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover span' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_description', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, laborum laudantium. Eligendi repellat quis...' , BWDEB_ROOT_AUTHOR_PRO ),
				'show_label' => false,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_WYSIWYG_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-comment',
			]
		);
		$repeater->add_control(
			'tbt_content_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-comment' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'tbt_content_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-client-comment' => 'color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_star_rating_number', [
				'label' => esc_html__( 'Star Rating', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'default' => 4,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'tbt_content_star_rating_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-rating' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_content_star_rating_number_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-rating-wrapper .tbt_testimonials_star_rating' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_k',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_right_icon_switcher',
			[
				'label' => esc_html__( 'Right Icon Type (If Has)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater->add_control(
			'tbt_content_icon_right',
			[
				'label' => esc_html__( 'Icon Right', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-right',
					'library' => 'solid',
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-bottom-q' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-quote' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_right_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-bottom-q' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-quote' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_testimonial_the_box_right_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-bottom-q' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-quote' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_f',
			[
				'type' => Controls_Manager::DIVIDER, 
			]
		);

		$repeater->add_control(
			'tbt_content_left_icon_switcher',
			[
				'label' => esc_html__( 'Left Icon Type (If Has)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater->add_control(
			'tbt_content_icon_left',
			[
				'label' => esc_html__( 'Icon Left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-left',
					'library' => 'solid',
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_left_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-left-icon-tbt' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_left_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-left-icon-tbt' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_testimonial_the_box_left_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-left-icon-tbt' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_testimonials_sk_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_publish_date_switcher',
			[
				'label' => esc_html__( 'Publish Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$repeater->add_control(
			'tbt_testimonials_due_date',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_due_date_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-date',
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-date' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-date:hover' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .slick-list.draggable' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_box_bg_hover_color',
			[
				'label' => esc_html__( 'Hover Box Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .slick-list.draggable' => 'background-color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_bg_color',
			[
				'label' => esc_html__( 'Content Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_bg_hover_color',
			[
				'label' => esc_html__( 'Hover Content Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-testi-desc' => 'background-color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_i',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_extra_shape_switcher',
			[
				'label' => esc_html__( 'Extra Shape (If Has)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'tbt_content_extra_shape_color',
			[
				'label' => esc_html__( 'Extra Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-img-shape::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc .tbt-quote' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .slick-list.draggable' => 'background: {{VALUE}}',
				],
				'condition' => [
					'tbt_content_extra_shape_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'tbt_total_box',
			[
				'label' => esc_html__( 'Testimonial Boxes', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #1', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #2', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #3', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #4', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => `{{{ tbt_total_box_title }}}`,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'tbt_testimonial_style_section',
			[
				'label' => esc_html__( 'Testimonial Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'tbt_testimonial_section_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .tbt-background-box',
			]
		);
		$this->add_responsive_control(
            'tbt_testimonial_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'tbt_testimonial_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'tbt_testimonial_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'bwdtbt_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdtbt-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdtbt_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdtbt_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdtbt_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdtbt_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdtbt_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdtbt_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdtbt_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtbt_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtbt_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdtbt_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdtbt_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdtbt_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdtbt_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtbt_nav_type' => 'icon',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdtbt_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtbt_nav_type' => 'icon',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdtbt_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtbt_nav_type' => 'text',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdtbt_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtbt_nav_type' => 'text',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdtbt_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdtbt_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdtbt_dots_type',
				[
					'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
						'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtbt_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdtbt_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdtbt_dots10'  => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdtbt_dots_switcher' => 'yes',
						'bwdtbt_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdtbt_product_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdtbt_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdtbt_dots_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdtbt_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-dots' => 'inset-block-start: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdtbt_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-dots' => 'inset-inline-start {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdtbt_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdtbt_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:not(:last-child) ' => 'margin-inline-end: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdtbt_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdtbt_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtbt_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtbt_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot span',
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdtbt_dots_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdtbt_dots_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtbt_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdtbt_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtbt_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdtbt_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtbt_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtbt_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active span',
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdtbt_dots_width_active',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdtbt_dots_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtbt_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdtbt_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtbt_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdtbt_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtbt_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtbt_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover span',
				'condition' => [
					'bwdtbt_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdtbt_dots_width_hover',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdtbt_dots_height_hover',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdtbt_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdtbt_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtbt_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtbt-owl-dots .bwdtbt-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdtbt_product_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdtbt_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdtbt_arrow_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdtbt_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdtbt_arrow_size',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdtbt_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdtbt_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev span, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next span',
					'condition' => [
						'bwdtbt_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdtbt_arrow_width',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdtbt_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'block-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdtbt_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdtbt_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdtbt_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdtbt_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdtbt_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdtbt_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdtbt_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdtbt_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev ' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdtbt_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev ' => 'inset-inline-start {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdtbt_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdtbt_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdtbt_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdtbt_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdtbt_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdtbt_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdtbt_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover span, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover span',
					'condition' => [
						'bwdtbt_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdtbt_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover ' => 'inline-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdtbt_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover ' => 'block-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdtbt_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdtbt_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdtbt_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-prev:hover, {{WRAPPER}} .bwdtbt-owl-nav button.bwdtbt-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdtbt_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdtbt_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-prev, {{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdtbt_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdtbt_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdtbt_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-prev ' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdtbt_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-prev ' => 'inset-inline-start {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdtbt_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdtbt_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'inset-block-start: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdtbt_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdtbt-owl.bwdtbt-owl-carousel:hover .bwdtbt-owl-nav button.bwdtbt-owl-next ' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdtbt_slide_margin = $settings['bwdtbt_slide_margin'];
		$bwdtbt_slide_mobile_view = $settings['bwdtbt_slide_mobile_view'];
		$bwdtbt_slide_tablet_view = $settings['bwdtbt_slide_tablet_view'];
		$bwdtbt_slide_desktop_view = $settings['bwdtbt_slide_desktop_view'];
		$bwdtbt_infinite_autoplay_switcher = $settings['bwdtbt_infinite_autoplay_switcher'];
		$bwdtbt_infinite_loop_switcher = $settings['bwdtbt_infinite_loop_switcher'];
		$bwdtbt_HoverPause_switcher = $settings['bwdtbt_HoverPause_switcher'];
		$bwdtbt_centermode_switcher = $settings['bwdtbt_centermode_switcher'];
		$bwdtbt_autoplay_timeout = $settings['bwdtbt_autoplay_timeout'];
		$bwdtbt_autoplay_speed = $settings['bwdtbt_autoplay_speed'];
		$bwdtbt_stace_padding = $settings['bwdtbt_stace_padding'];
		//nav--------------------------------------------------
		$bwdtbt_nav_switcher = $settings['bwdtbt_nav_switcher'];
		$bwdtbt_nav_type = $settings['bwdtbt_nav_type'];

		if( $bwdtbt_nav_switcher == 'yes' ) {
			if( $bwdtbt_nav_type == 'icon' ) {
				$prev = $settings['bwdtbt_nav_prev_arrow']['value'];
				$next = $settings['bwdtbt_nav_next_arrow']['value'];
			} else if( $bwdtbt_nav_type == 'text' ) {
				$prev = $settings['bwdtbt_nav_prev_text'];
				$next = $settings['bwdtbt_nav_next_text'];
			} 
		}
		$bwdtbt_dots_switcher = $settings['bwdtbt_dots_switcher'];
		$bwdtbt_dots_type = $settings['bwdtbt_dots_type'];
		// for-owl-carousel-end
		// if( $bwdtbt_styles == 'sixteen' ){
		// 	$add_class = 'tbt-testimonial-ten';
		// }
		$bwdtbt_styles = $settings['tbt_style_selection'];
		$bwdtbt_styles == 'sixteen' ? $add_class = 'tbt-testimonial-ten' : '';

		if ( $bwdtbt_styles ) {?>
			<div class="tbt-testimonial-<?php echo $bwdtbt_styles ?> tbt-background-box bwdtbt-slider-common <?php echo esc_attr($settings['bwdtbt_dots_type_style']); ?> <?php echo $add_class ?>" id="<?php echo esc_attr( $settings['bwdtbt-blogpost-custom-id'] ); ?>">
				<?php require 'tbt-variable.php' ; ?>
				<div class="tbt-testimonial-item-wrapper bwdtbt-owl bwdtbt-owl-carousel bwdtbt-owl-theme">
					<?php if ( $settings['tbt_total_box'] ) {
						foreach (  $settings['tbt_total_box'] as $item ) {
					echo '<div class="tbt-testimonial-item elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';

						if( $bwdtbt_styles == 'style1' ) { ?>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/comment.php';?>
							</div>
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php'; ?>
									<?php include 'testimonials/designation.php'; ?>
									<?php include 'testimonials/review.php'; ?>
								</div>
							</div>
						<?php include 'testimonials/date.php'; }
						
						if( $bwdtbt_styles == 'style2' ){ ?>
							<i class="tbt-top-q tbt-left-icon-tbt <?php echo esc_html( $item['tbt_content_icon_left']['value'] ); ?>"></i>
							<?php include 'testimonials/image.php'; ?>
							<div class="tbt-testi-desc">
								<?php
								include 'testimonials/comment.php'; 
								include 'testimonials/name.php'; 
								include 'testimonials/designation.php'; 
								include 'testimonials/review.php'; 
								include 'testimonials/date.php';?>
							</div>
							<?php include 'testimonials/bottom-quote.php'; } 
						
						if( $bwdtbt_styles == 'style3' ){
							include 'testimonials/bottom-quote.php';?>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/comment.php'; ?>
							</div>
							<?php include 'testimonials/image.php';
							include 'testimonials/name.php';
							include 'testimonials/review.php'; 
							include 'testimonials/designation.php';
							include 'testimonials/date.php'; } 
							
						if( $bwdtbt_styles == 'style4' ){ ?>
							<div class="tbt-testi-desc">
								<i class="tbt-quote-top <?php echo esc_attr( $item['tbt_content_icon_left']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php'; ?>
								<i class="tbt-quote-bottom <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
							</div>
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php';
									include 'testimonials/date.php'; ?>
								</div>
							</div>
						<?php } 

						if( $bwdtbt_styles == 'style5' ){ ?>
							<div class="tbt-client-profile tbt-slide-area-box-shadow">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php';?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
								<?php include 'testimonials/date.php'; 
								include 'testimonials/comment.php';?>
							</div>
						<?php }
						
						if( $bwdtbt_styles == 'style6' ){ ?>
							<div class="tbt-client-profile">
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php';
									include 'testimonials/date.php'; ?>
								</div>
								<?php include 'testimonials/image.php'; ?>
							</div>
							<div class="tbt-testi-desc">
								<i class="tbt-quote-top <?php echo esc_attr( $item['tbt_content_icon_left']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php';?>
								<i class="tbt-quote-bottom <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style7' ){?> 
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php';?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/date.php'; 
								include 'testimonials/comment.php';?>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style8' ){?> 
							<?php include 'testimonials/image.php'; ?>
							<div class="tbt-testi-desc tbt-slide-area-box-shadow">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
								<?php include 'testimonials/date.php'; 
								include 'testimonials/comment.php';
								include 'testimonials/name.php'; 
								include 'testimonials/designation.php';
								include 'testimonials/review.php';?>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style9' ){?>
							<div class="tbt-client-profile tbt-slide-area-box-shadow">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php'; 
									include 'testimonials/designation.php';
									include 'testimonials/review.php'; ?>
								</div>
							</div>
							<div class="tbt-testi-desc tbt-slide-area-box-shadow">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php';
								include 'testimonials/date.php'; ?>
							</div>
						<?php }
						if( $bwdtbt_styles == 'style10' ){?>
						<div class="tbt-client-img-shape">
								<div class="tbt-client-img">
								<?php include 'testimonials/image.php'; ?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_left']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php';
								include 'testimonials/review.php';?>
								<div class="tbt-client-bio">
									<?php
									include 'testimonials/name.php'; 
									include 'testimonials/date.php';
									include 'testimonials/designation.php'; ?>
								</div>
							</div>
						<?php } 
						if( $bwdtbt_styles == 'style11' ){?>
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/designation.php';?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/comment.php';?>
								<div class="tbt-client-review">
									<?php include 'testimonials/review.php';
									include 'testimonials/date.php'; ?>
								</div>
							</div>
						<?php }
						
						if( $bwdtbt_styles == 'style12' ){?>
							<div class="tbt-client-img-shape">
							<?php include 'testimonials/image.php'; ?>
							</div>
							<div class="tbt-client-profile">
								<?php include 'testimonials/name.php';
								include 'testimonials/designation.php';
								include 'testimonials/comment.php';
								include 'testimonials/date.php';
								include 'testimonials/review.php';?>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style13' ){?>
							<div class="tbt-testi-desc">
								<i class="tbt-quote tbt-left-icon-tbt <?php echo esc_attr( $item['tbt_content_icon_left']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php';?>
							</div>
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php';
								include 'testimonials/name.php';
								include 'testimonials/date.php'; 
								include 'testimonials/designation.php';
								include 'testimonials/review.php'; ?>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style14' ){?>
							<div class="tbt-client-profile tbt-slide-area-box-shadow">
								<?php include 'testimonials/image.php';?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/date.php';
									include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php'; ?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/comment.php'; ?>
							</div>
						<?php }
						if( $bwdtbt_styles == 'style15' ){?>
							<div class="tbt-testi-desc">
								<?php include 'testimonials/comment.php'; ?>
							</div>
							<div class="tbt-client-profile">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/date.php'; 
									include 'testimonials/name.php';
									include 'testimonials/designation.php';
									include 'testimonials/review.php'; ?>
								</div>
							</div>
						<?php }
						if( $bwdtbt_styles == 'style16' ){?>
							<div class="tbt-client-img-shape">
								<?php include 'testimonials/image.php'; ?>
								<div class="tbt-client-bio">
									<?php include 'testimonials/name.php';
									include 'testimonials/date.php';
									include 'testimonials/designation.php'; ?>
								</div>
							</div>
							<div class="tbt-testi-desc">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_left']['value'] ); ?>"></i>
								<?php include 'testimonials/comment.php';
								include 'testimonials/review.php'; ?>
							</div>
						<?php }

						if( $bwdtbt_styles == 'style17' ){?>
							<?php include 'testimonials/image.php'; ?>
							<div class="tbt-testi-desc tbt-slide-area-box-shadow">
								<i class="tbt-quote <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
								<?php include 'testimonials/date.php';
								include 'testimonials/comment.php';
								include 'testimonials/name.php';
								include 'testimonials/designation.php';
								include 'testimonials/review.php';?>
							</div>
						<?php }
						?>

					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		}
	}
}
