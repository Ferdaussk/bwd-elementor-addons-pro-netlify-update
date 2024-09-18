<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVHOBBY extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder-hobby';
	}

	public function get_title() {
		return esc_html__( 'CV HOBBY', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'cv-hobbies bwdeb-elementor-bundle';
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

        
		// hobby
		$this->start_controls_section(
			'bwdcv_hobby_section',
			[
				'label' => esc_html__( 'Hobby', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        // hobby-align
        $this->add_responsive_control(
			'bwdcv_hobby_align',
			[
				'label' => esc_html__( 'TItle Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		// hobby-item-align
        $this->add_responsive_control(
			'bwdcv_hobby_item_align',
			[
				'label' => esc_html__( 'Item Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-item,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-area' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		// hobby title
		$this->add_control(
			'bwdcv_hobby_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'hobby', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//hobby name title
		$repeater->add_control(
			'bwdcv_hobby_name_title', [
				'label' => esc_html__( 'Hobby Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'football', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// hobby name title-Typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-title',
			]
		);
		//hobby name color
		$repeater->add_control(
			'bwdcv_hobby_name_color',
			[
				'label' => esc_html__( 'Hobby name Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-title' => 'color: {{VALUE}}',
				],
			]
		);
		//hobby icon
		$repeater->add_control(
			'bwdcv_hobby_icon',
			[
				'label' => esc_html__( 'hobby Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-futbol',
					'library' => 'solid',
				],
			]
		);
		//hobby icon color
		$repeater->add_control(
			'bwdcv_hobby_icon_color',
			[
				'label' => esc_html__( 'Hobby Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-hobby-icon' => 'color: {{VALUE}}',
				],
			]
		);
		//hobby icon size
		$repeater->add_responsive_control(
			'bwdcv_hobby_icon_size',
			[
				'label' => esc_html__( 'Hobby Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-hobby-icon' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'bwdcv_hobby_name_list',
			[
				'label' => esc_html__( 'Hobby Name List', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'music' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-music',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'MOVIE' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-film',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'writing' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-pen',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'football' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-futbol',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdcv_hobby_name_title }}}',
			]
		);

		$this->end_controls_section();
		// hobby style tab
		$this->start_controls_section(
			'bwdcv_hobby',
			[
				'label' => esc_html__( 'Hobby', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// hobby title color
		$this->add_control(
			'bwdcv_hobby_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title,
                    {{WRAPPER}} .bwd-cv-hobby .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// hobby title Background-color
		$this->add_control(
			'bwdcv_hobby_title_Background_color',
			[
				'label' => esc_html__( 'TItle Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// hobby title border color
		$this->add_control(
			'bwdcv_hobby_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style13','style14','style16','style17','style18','style20',
					'style22','style23','style24','style25'],
				],
			]
		);
		// hobby background color
		$this->add_control(
			'bwdcv_hobby_background_color',
			[
				'label' => esc_html__( 'Hobby Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// hobby title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-sub-title ',
			]
		);
		// hobby icon color
		$this->add_control(
			'bwdcv_hobby_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
                    {{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon bg color
		$this->add_control(
			'bwdcv_hobby_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
                    {{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon-size
		$this->add_responsive_control(
			'bwdcv-hobby-icon-size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby icon Round Size
		$this->add_control(
			'bwdcv-hobby-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby cv icon border radius
		$this->add_responsive_control(
			'bwdcv_hobby_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby title width
		$this->add_responsive_control (
			'bwdcv-hobby-title-width',
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
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// hobby title padding
		$this->add_responsive_control(
			'bwdcv_hobby_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// hobby title border radius
		$this->add_responsive_control(
			'bwdcv_hobby_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $bwdcv_hobby_title = $settings['bwdcv_hobby_title'];

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
                                                    <div class="bwd-cv-hobby-title">
                                                        <i class="fas fa-hockey-puck bwd-cv-icon"></i>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_hobby_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-2-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr ($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-5-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-area">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-8-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-area">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<i class="fas fa-hockey-puck bwd-cv-icon"></i>
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-10-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-11-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
                                                    <div class="bwd-cv-hobby-title">
                                                        <div class="bwd-cv-icon">
                                                            <i class="fas fa-hockey-puck"></i>
                                                        </div>
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html($bwdcv_hobby_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
                                <div class="bwd-cv-vilder-information 
                                bwd-cv-hobby-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-vilder-left-content-item">
                                                    <div class="bwd-cv-hobby">
														<div class="bwd-cv-hobby-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_hobby_title); ?>
															</div>
														</div>
														<div class="bwd-cv-hobby-item">
															<?php
																if( $settings['bwdcv_hobby_name_list'] ) {
																foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
															?>
															<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
																<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
																<div class="bwd-cv-title">
																	<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
																</div>
															</div>
															<?php 
																}
															} ?>
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
                </div>
            <?php
        }elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-14-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-15-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-hockey-puck"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-16-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-language-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
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
        }elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-hobby">
                                                    <div class="bwd-cv-hobby-title">
                                                        <div class="bwd-cv-sub-title">
                                                            <?php echo esc_html( $bwdcv_hobby_title); ?>
                                                        </div>
                                                    </div>
                                                    <div class="bwd-cv-hobby-item">
                                                        <?php
                                                            if( $settings['bwdcv_hobby_name_list'] ) {
                                                            foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
                                                        ?>
                                                        <div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                                            <i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
                                                            <div class="bwd-cv-title">
                                                                <?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php 
                                                            }
                                                        } ?>
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
        }elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
                    <div >
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="bwd-cv-vilder-information bwd-cv-hobby-information bwd-cv-skill-information">
                                    <div class="bwd-cv-vilder-item ">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
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