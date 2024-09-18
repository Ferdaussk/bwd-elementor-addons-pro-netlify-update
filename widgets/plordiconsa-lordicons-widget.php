<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class PLORDICONSA_Effective_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'PowerfulLordiconsAnimation', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Powerful Lordicons Animation', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle lord-icon';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'plordiconsa_section_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'plordiconsa_icon_method',
			[
				'type'        => Controls_Manager::SELECT,
				'label'       => esc_html__( 'Icon Method', BWDEB_ROOT_AUTHOR_PRO ),
				'options'     => [
					'cdn'  => esc_html__( 'Paste Lordicon URL', BWDEB_ROOT_AUTHOR_PRO ),
					'file' => esc_html__( 'Upload Lordicon file', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'     => 'cdn',
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'plordiconsa_lordicons_url',
			[
				'label'       => esc_html__( 'Animation JSON URL', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => array( 'active' => true ),
				'default' 		=> 'https://cdn.lordicon.com/vixtkkbk.json',
				'description' => 'Get URL/JSON file from <a href="https://lordicon.com/icons" target="_blank">here...!!</a> Follow <a href="https://prnt.sc/G0sKSPQLyi78" target="_blank">here...!!!</a>',
				'label_block' => true,
				'condition'   => array(
					'plordiconsa_icon_method' => 'cdn',
				),
			]
		);

		$this->add_control(
			'plordiconsa_lordicons_file',
			[
				'label'              => esc_html__( 'Upload JSON File', BWDEB_ROOT_AUTHOR_PRO ),
				'type'               => Controls_Manager::MEDIA,
				'media_type'         => 'application/json',
				'frontend_available' => true,
				'condition'          => array(
					'plordiconsa_icon_method' => 'file',
				),
			]
		);
		$this->add_control(
			'plordiconsa_animation_trigger',
			[
				'type'    => Controls_Manager::SELECT,
				'label'   => esc_html__( 'Animation Trigger', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [
					'loop'          => esc_html__( 'Loop (infinite)', BWDEB_ROOT_AUTHOR_PRO ),
					'click'         => esc_html__( 'Click', BWDEB_ROOT_AUTHOR_PRO ),
					'hover'         => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
					'loop-on-hover' => esc_html__( 'Loop on Hover', BWDEB_ROOT_AUTHOR_PRO ),
					'morph'         => esc_html__( 'Morph', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'loop',
			]
		);
		$this->add_control(
			'plordiconsa_target',
			[
				'type'    => Controls_Manager::SELECT,
				'label'   => esc_html__( 'Target', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [
					'widget'  => esc_html__( 'On Widget', BWDEB_ROOT_AUTHOR_PRO ),
					'column'  => esc_html__( 'On Column', BWDEB_ROOT_AUTHOR_PRO ),
					'section' => esc_html__( 'On Section', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'widget',
			]
		);
		$this->add_control(
			'plordiconsa_link_switcher',
			[
				'label' => esc_html__( 'Icon Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'plordiconsa_icon_link',
			[
				'label'       => esc_html__( 'Place URL', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::URL,
				'dynamic'     => [
					 'active' => true 
				],
				'default'     => [
					'url' => '#',
				],
				'placeholder' => 'https://example.com/',
				'label_block' => true,
				'separator'   => 'after',
				'condition'   => [
					'plordiconsa_link_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_pulse_effect',
			[
				'label'        => esc_html__( 'Pulse Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => Controls_Manager::SWITCHER,
				'description'  => esc_html__( 'This will override your box shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default'      => '',
			]
		);
		$this->add_control(
			'plordiconsa_pulse_color',
			[
				'label'     => esc_html__( 'Pulse Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#B6B6B6',
				'condition' => [
					'plordiconsa_pulse_effect' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .plordiconsa_pulse_effect' => '--pulse-color:{{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'plordiconsa_align',
			[
				'label'     => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => [
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
				'toggle'    => true,
				'default'   => 'center',
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-lordicon-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'plordiconsa_section_content',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'plordiconsa_title_switcher',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'plordiconsa_lordicon_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Lordicon', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic'     => [
					 'active' => true 
				],
				'condition'   => [
					'plordiconsa_title_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_description_switcher',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'plordiconsa_lordicon_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Animated icon library', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'     => [
					 'active' => true 
				],
				'condition'   => [
					'plordiconsa_description_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_btn_switcher',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type'  => Controls_Manager::SWITCHER,
			]
		);
		$this->add_control(
			'plordiconsa_btn_title',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic'     => [
					 'active' => true 
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_btn_link',
			[
				'label'       => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::URL,
				'dynamic'     => [
					 'active' => true 
				],
				'default'     => [
					'url' => '#',
				],
				'placeholder' => 'https://example.com/',
				'label_block' => true,
				'separator'   => 'after',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'plordiconsa_section_style_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'plordiconsa_icon_size',
			[
				'label'   => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SLIDER,
				'range'   => [
					'px' => [
						'min' => 1,
						'max' => 1000,
					],
				],
				'default' => [
					'size' => 150,
				],
			]
		);

		$this->add_control(
			'plordiconsa_primary_color',
			[
				'label'   => esc_html__( 'Primary Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'default' => '#121331',
			]
		);

		$this->add_control(
			'plordiconsa_secondary_color',
			[
				'label'   => esc_html__( 'Secondary Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'default' => '#08a88a',
			]
		);
		$this->add_control(
			'plordiconsa_icon_stroke',
			[
				'label'   => esc_html__( 'Stroke', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SLIDER,
				'range'   => [
					'min' => 1,
					'max' => 500,
				],
				'default' => [
					'size' => '20',
				],
			]
		);

		$this->add_control(
			'plordiconsa_icon_bg_color',
			[
				'label'     => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::COLOR,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'plordiconsa_icon_border',
				'selector' => '{{WRAPPER}} .plordiconsa-lordicon',
			]
		);

		$this->add_responsive_control(
			'plordiconsa_icon_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-lordicon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'plordiconsa_icon_shadow',
				'exclude'  => [
					'box_shadow_position',
				],
				'selector' => '{{WRAPPER}} .plordiconsa-lordicon',
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'plordiconsa_section_content_style',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'plordiconsa_title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition'   => [
					'plordiconsa_title_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_title_color',
			[
				'label'   => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-title' => 'color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_title_switcher'  => 'yes',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'plordiconsa_title_typography',
				'selector' => '{{WRAPPER}} .plordiconsa-title',
				'condition'   => [
					'plordiconsa_title_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_title_margin',
			[
				'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_title_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_desc_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition'   => [
					'plordiconsa_description_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_desc_color',
			[
				'label'   => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-desc' => 'color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_description_switcher'  => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'plordiconsa_desc_typography',
				'selector' => '{{WRAPPER}} .plordiconsa-desc',
				'condition'   => [
					'plordiconsa_description_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_desc_margin',
			[
				'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_description_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_btn_heading',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->start_controls_tabs(
			'plordiconsa_style_tabs'
		);

		$this->start_controls_tab(
			'plordiconsa_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'plordiconsa_btn_color',
			[
				'label'   => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-btn a' => 'color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_btn_bg_color',
			[
				'label'   => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-btn a' => 'background-color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'plordiconsa_btn_typography',
				'selector' => '{{WRAPPER}} .plordiconsa-btn a',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'plordiconsa_btn_border',
				'selector' => '{{WRAPPER}} .plordiconsa-btn a',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_btn_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_btn_padding',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_btn_margin',
			[
				'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'plordiconsa_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'plordiconsa_hover_btn_color',
			[
				'label'   => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-btn a:hover' => 'color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_control(
			'plordiconsa_btn_hover_bg_color',
			[
				'label'   => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .plordiconsa-btn a:hover' => 'background-color: {{VALUE}}',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'plordiconsa_btn_hover_typography',
				'selector' => '{{WRAPPER}} .plordiconsa-btn a:hover',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'plordiconsa_btn_hover_border',
				'selector' => '{{WRAPPER}} .plordiconsa-btn a:hover',
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'plordiconsa_btn_hvoer_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .plordiconsa-btn a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'   => [
					'plordiconsa_btn_switcher'  => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}

	protected function render() {
		$settings    = $this->get_settings_for_display();
		$json_url    = '';
		$method      = $settings['plordiconsa_icon_method'];
		$target      = $settings['plordiconsa_target'];
		$icon_size   = $settings['plordiconsa_icon_size'];
		$icon_stroke = $settings['plordiconsa_icon_stroke'];
		$bg_color = $settings['plordiconsa_icon_bg_color'];
		$icon_title = $settings['plordiconsa_lordicon_title'];
		$icon_desc = $settings['plordiconsa_lordicon_description'];
		$btn_text = $settings['plordiconsa_btn_title'];
			
		if ( ! empty( $settings['plordiconsa_icon_link']['url'] )) {
			$this->add_link_attributes( 'plordiconsa_icon_link', $settings['plordiconsa_icon_link'] );
		}
		if ( ! empty( $settings['plordiconsa_btn_link']['url'] )) {
			$this->add_link_attributes( 'plordiconsa_btn_link', $settings['plordiconsa_btn_link'] );
		}
			
		if ( 'file' == $method ) {
			$json_url = $settings['plordiconsa_lordicons_file']['url'];
		} else {
			$json_url = $settings['plordiconsa_lordicons_url'];
		}
		$target_class = '';

		if ( 'custom' == $target ) {
			$target_class = $settings['plordiconsa_custom_target'];
		} elseif ( 'column' == $target ) {
			$target_class = '.elementor-column';
		} elseif ( 'section' == $target ) {
			$target_class = '.elementor-section';
		}
		$pulse_effect = ( 'yes' == $settings['plordiconsa_pulse_effect'] ) ? ' plordiconsa_pulse_effect' : '';

		?>
			<div class="plordiconsa-lordicon-wrapper">
				<a <?php if($settings['plordiconsa_link_switcher'] === 'yes') { ?>href="<?php echo esc_url( $settings['plordiconsa_icon_link']['url'] ); ?>"<?php } ?>>	
					<lord-icon
						src="<?php echo esc_url( $json_url ); ?>"
						trigger="<?php echo esc_attr( $settings['plordiconsa_animation_trigger'] ); ?>"
						stroke="<?php echo esc_attr( $icon_stroke['size'] ); ?>"
						target="<?php echo esc_attr( $target_class ); ?>"
						class="<?php echo esc_attr( $pulse_effect ); ?> plordiconsa-lordicon"
						colors="primary:<?php echo esc_attr( $settings['plordiconsa_primary_color'] ); ?>,secondary:<?php echo esc_attr( $settings['plordiconsa_secondary_color'] ); ?>"
						style="width:<?php echo esc_attr( $icon_size['size'] ); ?>px;height:<?php echo esc_attr( $icon_size['size'] ); ?>px; background:<?php echo esc_attr( $bg_color ); ?>;">
					</lord-icon>
				</a>
				<div class="plordiconsa-content-wrapper">
					<div class="plordiconsa-title">
						<?php echo esc_html( $icon_title ); ?>
					</div>
					<div class="plordiconsa-desc">
						<?php echo $icon_desc; ?>
					</div>
					<?php if($settings['plordiconsa_btn_switcher'] === 'yes') : ?>
					<div class="plordiconsa-btn">
						<a href="<?php echo esc_url( $settings['plordiconsa_btn_link']['url'] ); ?>"><?php echo esc_html( $btn_text ); ?></a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		<?php

	}
}
