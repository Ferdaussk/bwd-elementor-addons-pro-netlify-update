<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDIMimageshape extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdim-image-shape';
	}

	public function get_title() {
		return esc_html__( 'Image Shape', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-shape bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'image', 'shape', 'image shape' ];
	}

	

	protected function register_controls() {

		$this->start_controls_section(
			'bwdim_image_shape_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdim_image_shape_style',
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
					'style42' => esc_html__( 'Style 42', BWDEB_ROOT_AUTHOR_PRO ),
					'style43' => esc_html__( 'Style 43', BWDEB_ROOT_AUTHOR_PRO ),
					'style44' => esc_html__( 'Style 44', BWDEB_ROOT_AUTHOR_PRO ),
					'style45' => esc_html__( 'Style 45', BWDEB_ROOT_AUTHOR_PRO ),
					'style46' => esc_html__( 'Style 46', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdim_image_shape_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdim_image_shape',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_link',
			[
				'label' => esc_html__( 'Show Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write link here', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_shape_show_link' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_overlry_color',
			[
				'label' => esc_html__( 'Show Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_decs_overley_color',
			[
				'label' => esc_html__( 'Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_shape_show_overlry_color' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} a::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_title',
			[
				'label' => esc_html__( 'Show Animation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'No',
			]
		);
		$this->add_control(
			'bwdim_image_show_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Williamson', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_show_decs',
			[
				'label' => esc_html__( 'Show Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_decs',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, suscipit.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_show_button_title',
			[
				'label' => esc_html__( 'Show Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_btn_title',
			[
				'label' => esc_html__( 'Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_btn_link',
			[
				'label' => esc_html__( 'Button Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write link here', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdim_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdim-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdim_image_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_title_font_size',
				'selector' => '{{WRAPPER}} .bwdim-title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'decs_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdim_decs_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_decs_font_size',
				'selector' => '{{WRAPPER}} .bwdim-decs',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'button_style_section',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
		
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_normal_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_button_font_size',
				'selector' => '{{WRAPPER}} .bwdim-button a',
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdim-button a',
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdim_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdim-button a:hover',
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_border_hover_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
        $this->end_controls_section();
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdim_image_shape_width',
			[
				'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box a' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdim-box-thirty-six a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdim_image_style_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdim-box',
			]
		);
		$this->add_control(
			'bwdim_image_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_image_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
		$bwdim_image_anim = $settings['bwdim_image_shape_show_title'];
		$bwdim_btn_swit = $settings['bwdim_image_show_button_title'];
		$is_overlay_show = $settings['bwdim_image_shape_show_overlry_color'];
		if($is_overlay_show === 'yes'){
			$overlay_show = 'bwdim-active-overlay';
		}else{
			$overlay_show = '';
		}


		if ( ! empty( $settings['bwdim_image_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdim_image_link', $settings['bwdim_image_link'] );
		}
		if ( ! empty( $settings['bwdim_image_shape_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdim_image_shape_btn_link', $settings['bwdim_image_shape_btn_link'] );
		}
		

	if ('style1' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-1">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>">
						<img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style2' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-2">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style3' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-3">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style4' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-4">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style5' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-5">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style6' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-6">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style7' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-7">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style8' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-8">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style9' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-9">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style10' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-10">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style11' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-11">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style12' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-12">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style13' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-13">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style14' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-14">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style15' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-15">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style16' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-16">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style17' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-17">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style18' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-18">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style19' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-19">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style20' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-20">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style21' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-21">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style22' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-22">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style23' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-23">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style24' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-24">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style25' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-25">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style26' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-26">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style27' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-27">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style28' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-28">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style29' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-29">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style30' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-30">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style31' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-31">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style32' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-32">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style33' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-33">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style34' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-34">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style35' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-35">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style36' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-36">
				<div class="bwdim-image-items">
					<div class="bwdim-box-thirty-six <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style37' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-37">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style38' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-38">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style39' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-39">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style40' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-40">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style41' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-41">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style42' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-42">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style43' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-43">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style44' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-44">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style45' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-45">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style46' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-46">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo 'active-anim';} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo 'bwdim-deactive-btn';} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
    }
}