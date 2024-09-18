<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdisimageSwap extends \Elementor\Widget_Base {


	public function get_name() {
		return 'BWDISImageSwap';
	}

	public function get_title() {
		return esc_html__( 'Image Swap', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-image-swap bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'swap', 'hover', 'effect', 'bwd' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdis_image_swap_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdis_image_swap_style_layout',
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
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdis_image_swap_section',
			[
				'label' => esc_html__( 'Image Swap', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		//  image
		$this->add_control(
			'bwdis_swap_fornt_image',
			[
				'label' => esc_html__( 'Front Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdis_swap_back_image',
			[
				'label' => esc_html__( 'Back Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdis_image_swap_link',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write image link here', 
				BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		$this->end_controls_section();

		// skill style tab
		$this->start_controls_section(
			'bwdis_image_swap',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'bwdis_image_swap_overly_show',
			[
				'label' => esc_html__( 'Show Overly', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdis_image_swap_bg_color',
			[
				'label' => esc_html__( 'Overly Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdis-swap-img-area::before' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdis_image_swap_overly_show' => 'yes',
				],
				
			]
		);
		$this->add_responsive_control(
			'bwdis_image_swap_area_size',
			[
				'label' => esc_html__( 'Image Area Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdis-swap-img-area' => 'max-width: {{SIZE}}{{UNIT}}; max-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdis_swap_image_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis-swap-img-area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdis-swap-img-area',
			]
		);
		
		$this->end_controls_section();


		
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdis_swap_fornt_image = $settings['bwdis_swap_fornt_image']['url'];
		$bwdis_swap_back_image = $settings['bwdis_swap_back_image']['url'];
		$is_overlay_show = $settings['bwdis_image_swap_overly_show'];

		if($is_overlay_show === 'yes'){
			$overlay_show = 'bwdis-overly-active';
		}else{
			$overlay_show = '';
		}

		if ( ! empty( $settings['bwdis_image_swap_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdis_image_swap_link', $settings['bwdis_image_swap_link'] );
		}
		
		if ('style1' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-1-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style2' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-2-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style3' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-3-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style4' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-4-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style5' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-5-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style6' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-6-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style7' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-7-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style8' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-8-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style9' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-9-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style10' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-10-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style11' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-11-area">
					<a href="<?php echo esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style12' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-12-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style13' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-13-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style14' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-14-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style15' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-15-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style16' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-16-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style17' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-17-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style18' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-18-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style19' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-19-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style20' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-20-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style21' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-21-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style22' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-22-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style23' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-23-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style24' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-24-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style25' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-25-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style26' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-26-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style27' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-27-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style28' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-28-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style29' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-29-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style30' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-30-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style31' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-31-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}
	
		 
	}
}



