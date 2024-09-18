<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdiscrImageScroll extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdimagescroll';
	}

	public function get_title() {
		return esc_html__( 'Image Scroll', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-imagescroll bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'scroll', 'bwd', 'hover' ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'bwdiscr_image_scroll_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdiscr_image_scroll_style_layout',
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
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdiscr_image_scroll_section',
			[
				'label' => esc_html__( 'Image Scroll', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		$this->add_control(
			'bwdiscr_image_scroll_option',
			[
				'label'   => esc_html__('Select Image Scroll', BWDEB_ROOT_AUTHOR_PRO),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bottom-top',
				'options' => [
					'bottom-top'    => esc_html__('Bottom Top', BWDEB_ROOT_AUTHOR_PRO),
					'top-bottom'    => esc_html__('Top Bottom', BWDEB_ROOT_AUTHOR_PRO),
					'right-left'     => esc_html__('Right Left', BWDEB_ROOT_AUTHOR_PRO),
					'left-right'     => esc_html__('Left right', BWDEB_ROOT_AUTHOR_PRO),
				],
				'prefix_class' => 'bwdiscr-image-scroll-',
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => [ 'style7', 'style8','style9'],
				],
			]
		);
		//  image
		$this->add_control(
			'bwdiscr_scroll_image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_monitor_device_image',
			[
				'label' => esc_html__( 'Monitor Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-2.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_mobile_device_image',
			[
				'label' => esc_html__( 'Mobile Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-3.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_tab_device_image',
			[
				'label' => esc_html__( 'Tab Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-5.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_laptop_device_image',
			[
				'label' => esc_html__( 'Laptop Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-4.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		
		
		$this->end_controls_section();

		// style tab
		$this->start_controls_section(
			'bwdiscr_image_scroll',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdiscr-scroll-img-area',
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style9','style10','style11',],
				],
			]
		);
		$this->add_responsive_control(
			'bwdiscr_image_scroll_width',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-image-scroll-common,
					{{WRAPPER}} .bwdiscr-scroll-item,
					{{WRAPPER}} .bwdiscr-scroll-img-area,
					{{WRAPPER}} .bwdiscr-image-scroll-4-area .bwdiscr-scroll-item .bwdiscr-scroll-device-img,
					{{WRAPPER}} .bwdiscr-image-scroll-11-area .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-7-area .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-3-area .bwdiscr-scroll-device-img' => 'max-width: {{SIZE}}{{UNIT}};  width: {{SIZE}}{{UNIT}}; max-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// $this->add_responsive_control(
		// 	'bwdiscr_image_scroll_height',
		// 	[
		// 		'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
		// 		'type' => \Elementor\Controls_Manager::SLIDER,
		// 		'size_units' => [ 'px', '%' ],
		// 		'range' => [
		// 			'px' => [
		// 				'min' => 0,
		// 				'max' => 1000,
		// 				'step' => 1,
		// 			],
		// 			'%' => [
		// 				'min' => 0,
		// 				'max' => 100,
		// 			],
		// 		],
		// 		'selectors' => [
		// 			'{{WRAPPER}} .bwdiscr-image-scroll-common,
		// 			{{WRAPPER}} .bwdiscr-scroll-item,
		// 			{{WRAPPER}} .bwdiscr-scroll-img-area,
		// 			{{WRAPPER}} .bwdiscr-image-scroll-6-area .bwdiscr-scroll-img-area img,
		// 			{{WRAPPER}} .bwdiscr-image-scroll-7-area .bwdiscr-scroll-img-area img' => 'max-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
		// 		],
		// 	]
		// );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdiscr-scroll-img-area',
			]
		);
		$this->add_control(
			'bwdiscr_image_scroll_bg_color',
			[
				'label' => esc_html__( 'Image Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-img-area::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style8','style9','style10','style11', 'style13', 'style14', 'style16', 'style17', 'style18', 'style19', 'style20'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_image_scroll_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style8','style9','style10','style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdiscr_image_scroll_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-img-area,
					{{WRAPPER}} .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-8-area.bwdiscr-image-scroll-common' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
				
		$this->end_controls_section();
		
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
			$img_id = $settings['bwdiscr_scroll_image'];
		
		if ( ! empty( $settings['bwdiscr_scroll_image'] ) ) {
			$bwdiscr_scroll_image = $settings['bwdiscr_scroll_image']['url'];
		}


		if ( ! empty( $settings['bwdiscr_scroll_mobile_device_image'] ) ) {
			$bwdiscr_scroll_mobile_device_image = $settings['bwdiscr_scroll_mobile_device_image']['url'];
		}

		if ( ! empty( $settings['bwdiscr_scroll_tab_device_image'] ) ) {
			$bwdiscr_scroll_tab_device_image = $settings['bwdiscr_scroll_tab_device_image']['url'];
		}

		if ( ! empty( $settings['bwdiscr_scroll_laptop_device_image'] ) ) {
			$bwdiscr_scroll_laptop_device_image = $settings['bwdiscr_scroll_laptop_device_image']['url'];
		}		
		if ( ! empty( $settings['bwdiscr_scroll_monitor_device_image'] ) ) {
			$bwdiscr_scroll_monitor_device_image = $settings['bwdiscr_scroll_monitor_device_image']['url'];
		}		
		
		if ('style1' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-1-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style2' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-2-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style3' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-3-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-item">
						<div class="bwdiscr-scroll-device-img">
							<img src="<?php echo esc_url($bwdiscr_scroll_mobile_device_image); ?>" alt="">
						</div>
						<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
							<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>">
						</div>
					</div>
				</div>
			<?php
		}elseif('style4' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-4-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-item">
						<div class="bwdiscr-scroll-device-img">
							<img src="<?php echo esc_url($bwdiscr_scroll_tab_device_image); ?>" alt="">
						</div>
						<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
							<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>">
						</div>
					</div>
				</div>
			<?php
		}elseif('style5' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-5-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-item">
						<div class="bwdiscr-scroll-device-img">
							<img src="<?php echo esc_url($bwdiscr_scroll_laptop_device_image); ?>" alt="">
						</div>
						<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
							<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>">
						</div>
					</div>
				</div>
			<?php
		}elseif('style6' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-6-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-item">
						<div class="bwdiscr-scroll-device-img">
							<img src="<?php echo esc_url($bwdiscr_scroll_monitor_device_image); ?>" alt="">
						</div>
						<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
						</div>
					</div>
				</div>
			<?php
		}elseif('style7' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-7-area bwdiscr-image-scroll-common">
					<div style ="background-image: url(<?php if(!empty($img_id['url'])){ echo $img_id['url']; }else{ echo 'https://bwd-assets.netlify.app/scroll-img-1.jpg'; } ?>)" class="bwdiscr-scroll-img-area">
					</div>
				</div>
			<?php
		}elseif('style8' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-8-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
					<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
						<div class="bwdiscr-scroll-icon">
							<a href="">
								<i class="fas fa-arrows-alt-h"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif('style9' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-9-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
					<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
						<div class="bwdiscr-scroll-icon">
							<a href="">
								<i class="fas fa-arrows-alt-v "></i>
							</a>
						</div>
					</div>
				</div> 
			<?php
		}elseif('style10' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-10-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style11' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-11-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
					<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style12' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-12-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style13' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-13-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style14' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-14-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style15' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-15-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style16' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-16-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style17' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-17-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style18' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-18-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style19' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-19-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style20' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-20-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style21' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-21-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_url($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}
	}
}



