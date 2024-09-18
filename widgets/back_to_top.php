<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDBTTBackToTop extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDBackToTop', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Back To Top', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-v-align-top';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Back To Top Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbtt_style_selection',
			[
				'label' => esc_html__( 'Back To Top Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
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
		$this->add_control(
			'bwdbtt_back_to_top_btn_icon_one',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text', [
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'default' => esc_html__( 'Top' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_x_position',
			[
				'label' => esc_html__( 'X Position', 'BWDEB_ROOT_AUTHOR_PRO' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_Y_position',
			[
				'label' => esc_html__( 'Y Position', 'BWDEB_ROOT_AUTHOR_PRO' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbtt_style_section',
			[
				'label' => esc_html__( 'Style Section', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdbtt_style_tabs'
		);

		$this->start_controls_tab(
			'bwdbtt_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_width',
			[
				'label' => esc_html__( 'Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				],
				// 'default' => [
				// 	'unit' => '%',
				// 	'size' => 50,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_height',
			[
				'label' => esc_html__( 'Box Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				],
				// 'default' => [
				// 	'unit' => '%',
				// 	'size' => 50,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				],
				// 'default' => [
				// 	'unit' => '%',
				// 	'size' => 50,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style i' => 'font-size: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-9 span, {{WRAPPER}} .bwdbtt-scroll-to-top-19 span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_btn_text_typography',
				'selector' => '{{WRAPPER}} .bwdbtt-scroll-to-top-9 span, {{WRAPPER}} .bwdbtt-scroll-to-top-19 span',
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} .bwdbtt-progress-value-25, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style::before, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style::after, {{WRAPPER}} .bwdbtt-scroll-to-top-6::after, {{WRAPPER}} .bwdbtt-scroll-to-top-13 .bwdbtt-scroll:before, {{WRAPPER}} .bwdbtt-scroll-to-top-19::before' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_2nd_color',
			[
				'label' => esc_html__( 'Second Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_border',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style',
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_box_shadow',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdbtt_style_Hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_height_hover',
			[
				'label' => esc_html__( 'Box Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text_color_hover',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-9:hover span, {{WRAPPER}} .bwdbtt-scroll-to-top-19:hover span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_color_hover',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover, {{WRAPPER}} .bwdbtt-progress-value-25:hover, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style:hover::before, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style:hover::after, {{WRAPPER}} .bwdbtt-scroll-to-top-6:hover::after, {{WRAPPER}} .bwdbtt-scroll-top-10:before, {{WRAPPER}} .bwdbtt-scroll-to-top-13 .bwdbtt-scroll:after, {{WRAPPER}} .bwdbtt-scroll-to-top-19:hover::before' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_2nd_color_hover',
			[
				'label' => esc_html__( 'Second Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19:hover::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_border_hover',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover',
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if('style1' === $settings['bwdbtt_style_selection']){
		?>
			<a href="#" class="bwdbtt-scroll-to-top-1 bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style2' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-2 bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style3' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-3 bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style4' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-4 bwdbtt_background_and_main_common_style bwdbtt-blob1"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style5' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-5 bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style6' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-6 bwdbtt_background_and_main_common_style bwdbtt-scroll-to-target" data-target="html">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style7' === $settings['bwdbtt_style_selection']){
		?>
			<div id="bwdbtt-scroll__up-7">
				<a id="bwdbtt-scroll-top" class="bwdbtt-scroll-to-top bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
			</div>
		<?php
		} elseif('style8' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-8 bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
		<?php
		} elseif('style9' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-9 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
				<span><?php echo esc_html($settings['bwdbtt_back_to_top_btn_text']); ?></span>
			</a>
		<?php
		} elseif('style10' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-top-10 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style11' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-top-11 bwdbtt_background_and_main_common_style">
				<i class="arrow-top <?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
				<i class="arrow-bottom <?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style12' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-12 bwdbtt_background_and_main_common_style bwdbtt-scroll-to-target-12" data-target="html">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style13' === $settings['bwdbtt_style_selection']){
		?>
			<div class="bwdbtt-scroll-to-top-13 bwdbtt_background_and_main_common_style">
				<a href="#" class="bwdbtt-scroll">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
				</a>
			</div>
		<?php
		} elseif('style14' === $settings['bwdbtt_style_selection']){
		?>
			<div class="bwdbtt-scroll-to-top-14 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?> bwdbtt-scrollup-icon"></i>
			</div>
		<?php
		} elseif('style15' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-15 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style16' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-16 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style17' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-17 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style18' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-18 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style19' === $settings['bwdbtt_style_selection']){
		?>
			<div class="bwdbtt-scroll-to-top-19 bwdbtt_background_and_main_common_style">
				<span><?php echo esc_html($settings['bwdbtt_back_to_top_btn_text']); ?></span>
			</div>
		<?php
		} elseif('style20' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-20 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style21' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-21 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style22' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-22 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style23' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-23 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style24' === $settings['bwdbtt_style_selection']){
		?>
			<a class="bwdbtt-scroll-to-top-24 bwdbtt_background_and_main_common_style">
				<i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i>
			</a>
		<?php
		} elseif('style25' === $settings['bwdbtt_style_selection']){
		?>
			<div id="bwdbtt-progress-25" class="bwdbtt-progress-25 bwdbtt_background_and_main_common_style">
				<span id="bwdbtt-progress-value-25" class="bwdbtt-progress-value-25"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></span>
			</div>
		<?php
		}
	}

}
