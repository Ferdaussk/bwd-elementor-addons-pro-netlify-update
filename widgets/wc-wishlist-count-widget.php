<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if ( ! defined( 'ABSPATH' ) ) exit;
class ProBWDWishlistCount_Widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'bwd-wishlist-count';
    }
    
    public function get_title() {
        return esc_html__( 'Woo Wishlist Multi Action', BWDEB_ROOT_AUTHOR_PRO );
    }

    public function get_icon() {
        return 'bwdttmx-wish-icon-image bwdwpmx-admins-icon bwdeb-elementor-bundle';
    }

    public function get_style_depends(){
	    return ['all-font-awesome', 'font-awesome', 'bwdwpmx-woo-style'];
  	}
    
    public function get_categories() {
        return [ 'bwdthe_woocommerce_category' ];
    }

	protected function register_controls() {
        // Start General        
			$this->start_controls_section( 
				'section_wishlist_count',
	            [
	                'label' => esc_html__('General', BWDEB_ROOT_AUTHOR_PRO),
	            ]
	        );

			$this->add_responsive_control(
				'align',
				[
					'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left'    => [
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
					'default' => 'right',
					'selectors' => [
						'{{WRAPPER}} .bwdwpmx-wishlist-count' => 'text-align: {{VALUE}};text-align: -webkit-{{VALUE}};',
					],
				]
			);

			$this->add_responsive_control( 
	        	'padding',
				[
					'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'selectors' => [
						'{{WRAPPER}} .bwdwpmx-wishlist-count' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);	

			$this->add_responsive_control( 
				'margin',
				[
					'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'selectors' => [
						'{{WRAPPER}} .bwdwpmx-wishlist-count' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);  

	        $this->end_controls_section();
        // /.End General

	    // Start Icon  
		    $this->start_controls_section( 
					'section_style_icon',
		            [
		                'label' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
		            ]
		        );

		    	$this->add_control(
					'icon',
					[
						'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::ICONS,
						'default' => [
							'value' => 'fa fa-heart',
							'library' => 'solid',
						],
					]
				);

				$this->add_control(
					'icon_font_size',
					[
						'label' => esc_html__( 'Icon Font Size', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 100,
								'step' => 1,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 15,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);

				$this->add_control(
					'icon_size',
					[
						'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 100,
								'step' => 1,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 40,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
						],
					]
				);				

				$this->add_group_control( 
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'icon_border',
						'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
						'selector' => '{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon',
					]
				);    

				$this->add_responsive_control( 
					'icon_border_radius',
					[
						'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px' , '%' ],
						'default' => [
							'top' => '50',
							'right' => '50',
							'bottom' => '50',
							'left' => '50',
							'unit' => '%',
							'isLinked' => true,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

				$this->add_group_control( 
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'icon_box_shadow',
						'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
						'selector' => '{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon',
					]
				); 

				$this->start_controls_tabs( 'icon_color_tabs' );				

					$this->start_controls_tab( 
						'icon_color_normal_tab',
						[
							'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),						
						]
						);
						$this->add_control( 
							'icon_color',
							[
								'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
								'type' => \Elementor\Controls_Manager::COLOR,
								'default' => '#ffffff',
								'selectors' => [
									'{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon' => 'color: {{VALUE}}',
								],
							]
						);

						$this->add_control( 
							'icon_background_color',
							[
								'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
								'type' => \Elementor\Controls_Manager::COLOR,
								'default' => '#03b162',
								'selectors' => [
									'{{WRAPPER}} .bwdwpmx-wishlist-count .wrap-icon' => 'background-color: {{VALUE}}',
								],
							]
						);
					$this->end_controls_tab();

					$this->start_controls_tab( 
						'icon_color_hover_tab',
						[
							'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),						
						]
						);
						$this->add_control( 
							'icon_color_hover',
							[
								'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
								'type' => \Elementor\Controls_Manager::COLOR,
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} .bwdwpmx-wishlist-count .inner-wishlist-count:hover .wrap-icon' => 'color: {{VALUE}}',
								],
							]
						);

						$this->add_control( 
							'icon_background_color_hover',
							[
								'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
								'type' => \Elementor\Controls_Manager::COLOR,
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} .bwdwpmx-wishlist-count .inner-wishlist-count:hover .wrap-icon' => 'background-color: {{VALUE}}',
								],
							]
						);
					$this->end_controls_tab();

				$this->end_controls_tabs();				

		   	$this->end_controls_section();
        // /.End Icon

		// Start Count  
		    $this->start_controls_section( 
					'section_style_count',
		            [
		                'label' => esc_html__('Count', BWDEB_ROOT_AUTHOR_PRO),
		            ]
		        );

		    	$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'count_typography',
						'selector' => '{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter',
					]
				);

				$this->add_control(
					'count_size',
					[
						'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 100,
								'step' => 1,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 20,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				$this->add_control(
					'count_offset_x',
					[
						'label' => esc_html__( 'Offset Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 100,
								'step' => 1,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => -10,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				$this->add_control(
					'count_offset_y',
					[
						'label' => esc_html__( 'Offset Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 100,
								'step' => 1,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 0,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

				$this->add_control( 
					'count_color',
					[
						'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '#203b48',
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_control( 
					'count_background_color',
					[
						'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '#fbd83f',
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'background-color: {{VALUE}}',
						],
					]
				);

				$this->add_responsive_control( 
					'count_border_radius',
					[
						'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px' , '%' ],
						'default' => [
							'top' => '3',
							'right' => '3',
							'bottom' => '3',
							'left' => '3',
							'unit' => 'px',
							'isLinked' => true,
						],
						'selectors' => [
							'{{WRAPPER}} .bwdwpmx-wishlist-count .wishlist-counter' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

		   	$this->end_controls_section();
        // /.End Count

	}

	protected function render($instance = []) {
		$settings = $this->get_settings_for_display();		
		?>
		<div class="bwdwpmx-wishlist-count">
			<a href="<?php echo esc_url( htmlspecialchars( YITH_WCWL()->get_wishlist_url() ) ); ?>" class="inner-wishlist-count">
				<span class="wrap-icon"><?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
				<span class="wishlist-counter"><?php echo yith_wcwl_count_all_products(); ?></span>
			</a>
		</div>		
		<?php
	}	

}