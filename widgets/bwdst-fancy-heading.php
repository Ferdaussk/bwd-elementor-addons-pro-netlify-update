<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDSTfancyheading extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdst-fancy-heading';
	}

	public function get_title() {
		return esc_html__( 'Fancy Heading', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-text-area bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'fancy', 'heading', 'fancy heading' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdst_stroke_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdst_stroke_text_style',
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
				],
			]
		);

		$this->end_controls_section();
        $this->start_controls_section(
			'bwdst_stroke_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdst_stroke_text_heading', [
				'label' => esc_html__( 'Heading 1', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Fancy Heading', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style15'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_inside_extra_heading', [
				'label' => esc_html__( 'Inside Heading', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Heading', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_heading_position_size',
			[
				'label' => esc_html__( 'Inside text positioning', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-two' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_heading_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-text-15' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_extra_heading', [
				'label' => esc_html__( 'Heading 2', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style14'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_textarea', [
				'label' => esc_html__( 'Heading', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eligendi?
				', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->start_controls_tabs(
			'bwdsi_stroke_style_tabs'
		);
        $this->start_controls_tab(
			'bwdsi_stroke_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style7', 'style11', 'style17'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_border_after_color',
			[
				'label' => esc_html__( 'Middle Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style7'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_color',
			[
				'label' => esc_html__( 'Inner Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-two' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_color',
			[
				'label' => esc_html__( 'Fill Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style5', 'style8', 'style12', 'style13', 'style14', 'style16', 'style19', 'style20', 'style21', 'style25', 'style28'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text .bwd-box' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:before' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:after' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text-box-two .bwd-inner-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_color',
			[
				'label' => esc_html__( 'Stroke Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style16', 'style17', 'style20', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text-two' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text .bwd-inner-text' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_bg_right',
			[
				'label' => esc_html__( 'Background Right', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_bg_left',
			[
				'label' => esc_html__( 'Background Left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-box-two' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdst_stroke_background',
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style1', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style13', 'style15', 'style17', 'style19', 'style24', 'style26', 'style27', 'style29'],
				],
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image', 'angle'],
				// 'options' => [
				// 	'angle' => false,
				// ],
				// 'default' => [
				// 	'angle' => 220,
				// ],
				'selector' => '{{WRAPPER}} .bwdst-text,							
								{{WRAPPER}} .bwdst-text:before,							
								{{WRAPPER}} .bwdst-text-two,							
								{{WRAPPER}} .bwd-bg-box',							
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdst_stroke_text_extra_size',
				'condition' => [
					'bwdst_stroke_text_style' => ['style9', 'style14'],
				],
				'selector' => '{{WRAPPER}} .bwdst-text-two',			
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdst_stroke_text_size',
				'selector' => '{{WRAPPER}} .bwdst-text,
								{{WRAPPER}} .bwd-inner-text,
								{{WRAPPER}} .bwdst-text .bwd-box',		
			]
		);
		$this->add_control(
			'bwdst_stroke_text_margin',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .bwdst-text-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
        $this->start_controls_tab(
			'bwdsi_stroke_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_hover_color',
			[
				'label' => esc_html__( 'Fill Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:hover:before' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:hover:before' => '-webkit-text-fill-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_hover_color',
			[
				'label' => esc_html__( 'Stroke Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:hover:before' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
        $this->end_controls_tab();
        $this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdst_stroke_style_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdst-stroke-items',
			]
		);
		$this->add_control(
			'bwdst_stroke_text_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();




    }

    protected function render() {

        $settings = $this->get_settings_for_display();


        if ('style1' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-1 bwdst-stroke-items">
				<div class="bwdst-text" text-data="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
        }elseif ('style2' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-2 bwdst-stroke-items">
				<div class="bwdst-text" text-data="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
        }elseif ('style3' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-3 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style4' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-4 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style5' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-5 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style6' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-6 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style7' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-7 bwdst-stroke-items bwdst-water-class">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style8' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-8 bwdst-stroke-items">
				<div class="bwdst-text" data-fill-text="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style9' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-9 bwdst-stroke-items">
				<div class="bwdst-text-box">
					<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
					<div class="bwdst-text-two"><?php echo esc_html($settings['bwdst_stroke_text_inside_extra_heading']);?></div>
				</div>
			</div>
		<?php
		}elseif ('style10' === $settings['bwdst_stroke_text_style']) { 
			?>
				<div class="bwdst-stroke-text-10 bwdst-stroke-items">
					<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
				</div>
			<?php
		}elseif ('style11' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-11 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style12' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-12 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style13' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-13 bwdst-stroke-items">
				<div class="bwdst-text" data-text="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style14' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-14 bwdst-stroke-items">
				<div class="bwd-bg-box">
					<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
					<div class="bwdst-text-two"><?php echo esc_html($settings['bwdst_stroke_text_extra_heading']);?></div>
				</div>
			</div>
		<?php
		}elseif ('style15' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-15 bwdst-stroke-items">
				<div class="bwdst-text">
					<div class="bwd-inner-text">
						<?php echo esc_html($settings['bwdst_stroke_text_textarea']);?>
					</div>
				</div>
				<div class="bwdst-text-box-two">
					<div class="bwd-inner-text">
						<?php echo esc_html($settings['bwdst_stroke_text_textarea']);?>
					</div>
				</div>
			</div>
		<?php
		}elseif ('style16' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-16 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style17' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-17 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style18' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-18 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style19' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-19 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style20' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-20 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style21' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-21 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style22' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-22 bwdst-stroke-items">
				<div class="bwdst-text" data-text="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style23' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-23 bwdst-stroke-items">
				<div class="bwdst-text" data-text="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style24' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-24 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style25' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-25 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style26' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-26 bwdst-stroke-items">
				<div class="bwdst-text" data-text="<?php echo esc_html($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style27' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-27 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style28' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-28 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}elseif ('style29' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-29 bwdst-stroke-items">
				<div class="bwdst-text"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		}
    }
}