<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdalAnimatedLink extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdal-animated-link', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Animated Link', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return ' eicon-editor-external-link bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {


		//tab-content
		$this->start_controls_section(
			'bwdal_content_section',
			[
				'label' => esc_html__( 'Animated Link', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdal_style_selection',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
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
					'style26' => esc_html__( 'Style 26', BWDEB_ROOT_AUTHOR_PRO ),
					'style27' => esc_html__( 'Style 27', BWDEB_ROOT_AUTHOR_PRO ),
					'style28' => esc_html__( 'Style 28', BWDEB_ROOT_AUTHOR_PRO ),
					'style29' => esc_html__( 'Style 29', BWDEB_ROOT_AUTHOR_PRO ),
					'style30' => esc_html__( 'Style 30', BWDEB_ROOT_AUTHOR_PRO ),
					'style31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
					'style32' => esc_html__( 'Style 32', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 33', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 34', BWDEB_ROOT_AUTHOR_PRO ),
					'style35' => esc_html__( 'Style 35', BWDEB_ROOT_AUTHOR_PRO ),
					'style36' => esc_html__( 'Style 36', BWDEB_ROOT_AUTHOR_PRO ),
					'style37' => esc_html__( 'Style 37', BWDEB_ROOT_AUTHOR_PRO ),
					'style38' => esc_html__( 'Style 38', BWDEB_ROOT_AUTHOR_PRO ),
					'style39' => esc_html__( 'Style 39', BWDEB_ROOT_AUTHOR_PRO ),
					'style40' => esc_html__( 'Style 40', BWDEB_ROOT_AUTHOR_PRO ),
					'style41' => esc_html__( 'Style 41', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'bwdal_title_section',
			[
				'label' => esc_html__( 'Animated Link Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//title
		$this->add_control(
			'bwdal_main_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Animated Link', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Title Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => ['true'],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//link
		$this->add_control(
			'bwdal_link-url',
			[
				'label' => esc_html__( 'Link URL', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Link URL Here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => ['true'],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdal_style_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .bwdal_link_alignment' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'separator' => 'before',
				'default' => 'center',
			]
		);
		$this->end_controls_section();


		//tab-style title
		$this->start_controls_section(
			'bwdal_title__style_section',
			[
				'label' => esc_html__( 'Animated Link Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabs'
		);

		//normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdal_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'color: {{VALUE}}',
				],
			]
		);

		//Background color
		$this->add_control(
			'bwdal_title_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2','style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style38', 'style39', 'style41', 'style41']
				],
			]
		);

		//style color
		$this->add_control(
			'bwdal_title_style_color',
			[
				'label' => esc_html__( 'Style Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box::before' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style3', 'style4', 'style6', 'style10', 'style14', 'style15', 'style16', 'style31', 'style38', 'style39', 'style40']
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdal_gradient_bg',
				'label' => esc_html__( 'Gradient Background', 'bwdbh-business-hours' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdal_animated_box::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41']
				],
			]
		);

		//style notbg color for style4
		$this->add_control(
			'bwdal_style_notbg',
			[
				'label' => esc_html__( 'Style Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box::before' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style39', 'style40', 'style41']
				],
			]
		);

		//border for style10
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdal_text_border_style',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdal_animated_box::after',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style40', 'style41']
				],
			]
		);
		$this->end_controls_tab();



		//hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//color
		$this->add_control(
			'bwdal_title_hover_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//style color
		$this->add_control(
			'bwdal_title_style_hover_color',
			[
				'label' => esc_html__( 'Style Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box:hover::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box:hover::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style3', 'style4', 'style5', 'style6', 'style7', 'style10', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style25', 'style30', 'style31', 'style34', 'style37', 'style38', 'style39', 'style40']
				],
			]
		);

		//gradient_bg for style5
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdal_gradient_hover_bg',
				'label' => esc_html__( 'Gradient Background', 'bwdbh-business-hours' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdal_animated_box:hover::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9' , 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41']
				],
			]
		);

		//border for style10
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdal_text_border_hover_style',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdal_animated_box:hover::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style40', 'style41']
				],
			]
		);

		//style bgcolor 38
		$this->add_control(
			'bwdal_title_style_bgcolor',
			[
				'label' => esc_html__( 'Style Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2','style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style39', 'style41']
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdal_title_typography',
				'selector' => '{{WRAPPER}} .bwdal_title_textlink',
				'separator' => 'before',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdal_link_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	}
	protected function render() {

		if ( ! empty( $settings['bwdal_link-url']['url'] ) ) {
			$this->add_link_attributes( 'bwdal_link-url', $settings['bwdal_link-url'] );
		}


		
		$settings = $this->get_settings_for_display();
		$bwdal_style_selection = $settings['bwdal_style_selection'];
		$bwdal_main_title = $settings['bwdal_main_title'];
		$bwdal_link_url = $settings['bwdal_link-url']['url'];
		
		

		if( 'style1' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_1 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style2' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_2 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style3' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_3 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style4' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_4 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style5' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_5 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style6' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_6 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                    <span class="bwdal_animated_box2"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style7' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_7 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style8' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_8 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style9' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_9 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style10' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_10 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style11' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_11 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style12' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_12 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style13' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_13 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style14' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_14 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style15' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_15 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                    <span class="bwdal_animated_box2"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style16' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_16 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                    <span class="bwdal_animated_box2"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style17' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_17 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style18' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_18 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style19' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_19 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style20' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_20 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style21' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_21 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style22' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_22 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style23' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_23 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style24' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_24 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style25' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_25 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style26' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_26 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style27' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_27 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style28' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_28 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style29' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_29 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style30' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_30 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style31' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_31 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                    <span class="bwdal_animated_box2"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style32' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_32 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style33' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_33 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style34' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_34 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style35' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_35 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style36' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_36 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style37' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_37 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span data-hover="<?php echo esc_attr($bwdal_main_title); ?>" class="bwdal_animated_box1"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style38' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_38 bwdal_link_alignment">
                <a data-hover="<?php echo esc_attr($bwdal_main_title); ?>" class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style39' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_39 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}
		elseif( 'style40' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_40 bwdal_link_alignment">
                <a class="bwdal_animated_box" href="<?php echo esc_url($bwdal_link_url); ?>">
                    <span data-hover="<?php echo esc_attr($bwdal_main_title); ?>" class="bwdal_animated_box1 bwdal_title_textlink"><?php echo esc_html($bwdal_main_title); ?></span>
                </a>
            </div>
			<?php
		}
		elseif( 'style41' === $bwdal_style_selection ) {
			?>
			<div class="bwdal_link_41 bwdal_link_alignment">
                <a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
            </div>
			<?php
		}


	}
}
