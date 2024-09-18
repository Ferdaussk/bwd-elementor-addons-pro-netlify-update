<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVCONTACT extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder-contact';
	}

	public function get_title() {
		return esc_html__( 'CV Contact', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'cv-contact bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthecv_builder_category' ];
	}

    public function get_keywords() {
		return [ 'cv', 'arrow', BWDEB_ROOT_AUTHOR_PRO ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdcv_cv_builder_style',
		    [
		        'label' => esc_html__('Cv Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcv-cv-builder_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'style13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'style14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'style15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'style16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'style17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'style18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'style19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'style20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'style21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
					'style22' => esc_html__( 'Style 22', BWDEB_ROOT_AUTHOR_PRO ),
					'style23' => esc_html__( 'Style 23', BWDEB_ROOT_AUTHOR_PRO ),
					'style24' => esc_html__( 'Style 24', BWDEB_ROOT_AUTHOR_PRO ),
					'style25' => esc_html__( 'Style 25', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->end_controls_section();

        // contact
		$this->start_controls_section(
			'bwdcv_contact_section',
			[
				'label' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        // contact-align
        $this->add_responsive_control(
			'bwdcv_contact_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
					'{{WRAPPER}} .bwd-cv-vilder-item,
                    {{WRAPPER}} .bwd-cv-vilder-7-area .bwd-cv-vilder-profile .bwd-cv-contact,
                    {{WRAPPER}} .bwd-cv-vilder-identity-area .bwd-cv-identity-right-content,
                    {{WRAPPER}} .bwd-cv-vilder-14-area .bwd-cv-vilder-profile,
                    {{WRAPPER}} .bwd-cv-vilder-img-contact-area' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		// contact title
		$this->add_control(
			'bwdcv_contact_cv_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'contact', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact phone number
		$this->add_control(
			'bwdcv_contact_phone_number', [
				'label' => esc_html__( 'Phone Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '+00 952 165', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact email
		$this->add_control(
			'bwdcv_contact_email', [
				'label' => esc_html__( 'Email', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'info20@gmail.com', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact location
		$this->add_control(
			'bwdcv_contact_location', [
				'label' => esc_html__( 'Location', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'uttara dhaka 1230', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->end_controls_section();

		// contact style tab
		$this->start_controls_section(
			'bwdcv_contact',
			[
				'label' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// contact title Background-color
		$this->add_control(
			'bwdcv_contact_cv_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Background: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title color
		$this->add_control(
			'bwdcv_contact_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-sub-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// contact background color
		$this->add_control(
			'bwdcv_contact_background_color',
			[
				'label' => esc_html__( 'Contact Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_contact_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact-title .bwd-cv-sub-title,
                {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title',
			]
		);
		// contact title border color
		$this->add_control(
			'bwdcv_contact_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title, 
					{{WRAPPER}} .bwd-cv-contact-sub-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		// contact cv icon color
		$this->add_control(
			'bwdcv_contact_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_contact_title_icon_bg_color',
			[
				'label' => esc_html__( 'Title Icon Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		// contact icon-size
		$this->add_responsive_control(
			'bwdcv-contact-icon-size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact cv icon Round Size
		$this->add_responsive_control(
			'bwdcv_contact_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
        // contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_contact_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
        //contact item icon color
		$this->add_control(
			'bwdcv_contact_item_icon_color',
			[
				'label' => esc_html__( 'Item Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
        //contact item icon Background-color
		$this->add_control(
			'bwdcv_contact_icon_background_color',
			[
				'label' => esc_html__( 'Item Icon Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'Background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact cv item Round Size
		$this->add_responsive_control(
			'bwdcv_contact_item_icon_round_size',
			[
				'label' => esc_html__( 'Item Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
        // contact Item icon font size
		$this->add_responsive_control(
			'bwdcv-contact-item-icon-size',
			[
				'label' => esc_html__( 'Item Icon Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
        // contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_ontact_item_icon_border_radius',
			[
				'label' => esc_html__( 'Item Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		//contact cv icon -size
		$this->add_responsive_control(
			'bwdcv_contact_cv_icon_size',
			[
				'label' => esc_html__( 'Icon Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				
			]
		);
		// contact item-color
		$this->add_control(
			'bwdcv_contact_item_color',
			[
				'label' => esc_html__( 'Item Font Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'color: {{VALUE}}',
				],
			]
		);
		// contact item font-size
		$this->add_responsive_control(
			'bwdcv-contact-item-size',
			[
				'label' => esc_html__( 'Item Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Contact title width
		$this->add_responsive_control (
			'bwdcv-contact-title-width',
			[
				'label' => esc_html__( 'Title Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// contact title padding
		$this->add_responsive_control(
			'bwdcv_contact_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title border radius
		$this->add_responsive_control(
			'bwdcv_contact_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
                    {{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);

		$this->end_controls_section();
		//box information
		$this->start_controls_section(
			'bwdcv_shadow_section',
			[
				'label' => esc_html__( 'Box Information', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		// information background color
		$this->add_control(
			'bwdcv_information_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		// left item bg color
		$this->add_control(
			'bwdcv_item_bg_color',
			[
				'label' => esc_html__( 'Left Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-left-content, {{WRAPPER}} .bwd-cv-vilder-left-content-item' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style4','style7','style10','style12','style14','style16','style17','style18','style21',],
				],
				
			]
		);
		// right item bg color
		$this->add_control(
			'bwdcv_item_right_bg_color',
			[
				'label' => esc_html__( 'Right Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-3-area .bwd-cv-vilder-right-content, {{WRAPPER}} .bwd-cv-vilder-12-area .bwd-cv-vilder-right-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
				
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcv_builder_wrapper_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
       
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bwdcv_contact_cv_title = $settings['bwdcv_contact_cv_title'];
        $bwdcv_contact_phone_number = $settings['bwdcv_contact_phone_number'];
		$bwdcv_contact_email = $settings['bwdcv_contact_email'];
		$bwdcv_contact_location = $settings['bwdcv_contact_location'];

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
                                                    <div class="bwd-cv-contact-title">
                                                        <i class="fas fa-phone-alt bwd-cv-icon"></i>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_contact_cv_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
                                                    <div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
                                                    <div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-2-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-contact">
                                                    <div class="bwd-cv-contact-title">
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_contact_cv_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
                                                    <div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
                                                    <div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-5-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-6-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-7-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
											<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
											<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-8-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-9-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<i class="fas fa-phone-alt bwd-cv-contacts-icon"></i>
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt  bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope  bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt  bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-10-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-identity-area">
										<div class="col-xl-12">
											<div class="bwd-cv-identity-right-content">
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-11-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-contacts-icon">
																<i class="fas fa-phone-alt"></i>
															</div>
															<div class="bwd-cv-contact-sub-title">
																<?php echo $bwdcv_contact_cv_title; ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-12-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-13-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-vilder-left-content-item">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-14-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
											<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
											<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-15-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
                                                    <div class="bwd-cv-contact-title">
                                                        <div class="bwd-cv-icon">
                                                            <i class="fas fa-phone-alt"></i>
                                                        </div>
                                                        <div class="bwd-cv-contact-sub-title">
                                                            <?php echo esc_html($bwdcv_contact_cv_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
                                                    <div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
                                                    <div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-16-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-img-contact-area">
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> 
												<div class="bwd-cv-phone-number-title">phone</div>
												<?php echo esc_html( $bwdcv_contact_phone_number); ?>
											</div>
											<div class="bwd-cv-email bwd-cv-contact-item">
												<div class="bwd-cv-email-title">email</div> 
												<?php echo esc_html( $bwdcv_contact_email); ?></div>
											<div class="bwd-cv-location bwd-cv-contact-item"> 
												<div class="bwd-cv-location-title">location</div> 
												<?php echo esc_html( $bwdcv_contact_location); ?></div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
                                                    <div class="bwd-cv-contact-title">
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_contact_cv_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
                                                    <div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
                                                    <div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?>/div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
                                                    <div class="bwd-cv-contact-title">
                                                        <i class="fas fa-phone-alt bwd-cv-icon"></i>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_contact_cv_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
                                                    <div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
                                                    <div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-contact-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		    <?php
		}
                                 
    }
}