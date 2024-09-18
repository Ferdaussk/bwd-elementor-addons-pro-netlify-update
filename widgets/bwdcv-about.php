<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCVABOUT extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder-about';
	}

	public function get_title() {
		return esc_html__( 'CV ABOUT', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-about bwdeb-elementor-bundle';
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

        // about
		$this->start_controls_section(
			'bwdcv_about_section',
			[
				'label' => esc_html__( 'About', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        // about-align
        $this->add_responsive_control(
			'bwdcv_about_align',
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
					{{WRAPPER}} .bwd-cv-vilder-identity-area,
					{{WRAPPER}} .bwd-cv-vilder-14-area .bwd-cv-vilder-information .bwd-cv-profile' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		// about cv-vilder title
		$this->add_control(
			'bwdcv_about_cv_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'about me', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// about cv-vilder desg
		$this->add_control(
			'bwdcv_about_cv_desg', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a incidunt, voluptatibus doloribus quod praesentium quibusdam provident? Culpa ut, ex laboriosam adipisci est quaerat, autem aspernatur doloribus alias iste amet.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->end_controls_section();

		// about style tab
		$this->start_controls_section(
			'bwdcv_about',
			[
				'label' => esc_html__( 'About', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// about title-color
		$this->add_control(
			'bwdcv_about_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// about title Background-color
		$this->add_control(
			'bwdcv_about_cv_title_Background_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'background: {{VALUE}}',
				],
			]
		);
		// about title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-sub-title',
			]
		);
		// about title border color
		$this->add_control(
			'bwdcv_about_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title, 
					{{WRAPPER}} .bwd-cv-about,
					{{WRAPPER}} .bwd-cv-vilder-14-area .bwd-cv-vilder-information .bwd-cv-profile' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style16','style17','style18','style19','style20','style22','style23','style24','style25'],
				],
			]
		);
		// about desg-color
		$this->add_control(
			'bwdcv_about_cv_desg_color',
			[
				'label' => esc_html__( 'Desg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis' => 'color: {{VALUE}}',
				],
			]
		);
		// about desg-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_desg_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis',
			]
		);
		// about icon-color
		$this->add_control(
			'bwdcv_about_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_about_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon-size
		$this->add_responsive_control(
			'bwdcv-about-icon-size',
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
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon Round Size
		$this->add_responsive_control(
			'bwdcv-about-icon-Round Size',
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
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about cv icon border radius
		$this->add_responsive_control(
			'bwdcv_about_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about title width
		$this->add_responsive_control (
			'bwdcv-about-title-width',
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
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// about title padding
		$this->add_responsive_control(
			'bwdcv_about_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// about title border radius
		$this->add_responsive_control(
			'bwdcv_about_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		$bwdcv_about_cv_title = $settings['bwdcv_about_cv_title'];
		$bwdcv_about_cv_desg = $settings['bwdcv_about_cv_desg'];

        if ('style1' === $settings['bwdcv-cv-builder_style']) {
            ?>	
                <div class="bwd-cv-vilder-1-area bwd-cv-vilder-common">
                    <div class="row g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information bwd-cv-about-information">
								<div class="bwd-cv-vilder-item">
									<div class="col-xl-12">
										<div class="bwd-cv-vilder-left-content">
											<div class="bwd-cv-profile">
												<div class="bwd-cv-profile-title">
													<i class="fas fa-user bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html ($bwdcv_about_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-profile-dis">
													<?php echo esc_html( $bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
										<div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
													<div class="bwd-cv-sub-title">
												 		<?php echo esc_html ( $bwdcv_about_cv_title); ?>
													</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html ( $bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-left-content">
                                                <div class="bwd-cv-profile">
                                                    <div class="bwd-cv-sub-title">
                                                        <?php echo esc_html($bwdcv_about_cv_title); ?>
                                                    </div>
                                                    <div class="bwd-cv-profile-dis">
                                                        <?php echo esc_html($bwdcv_about_cv_desg); ?> 
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
                                            <div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-profile">
                                                    <div class="bwd-cv-sub-title">
                                                        <?php echo esc_html($bwdcv_about_cv_title); ?>
                                                    </div>
                                                    <div class="bwd-cv-profile-dis">
                                                        <?php echo esc_html($bwdcv_about_cv_desg); ?> 
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
                                                <div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
				<div class="bwd-cv-vilder-10-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
									<div class="bwd-cv-vilder-identity-area">
										<div class="col-xl-12">
											<div class="bwd-cv-identity-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
				<div class="bwd-cv-vilder-14-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
									<div class="col-lg-12">
										<div class="bwd-cv-profile">
											<div class="bwd-cv-profile-title">
												<div class="bwd-cv-sub-title">
													<?php echo esc_html($bwdcv_about_cv_title); ?>
												</div>
											</div>
											<div class="bwd-cv-profile-dis">
												<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-left-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
								<div class="bwd-cv-vilder-information bwd-cv-about-information">
                                    <div class="bwd-cv-vilder-item">
                                        <div class="col-xl-12">
											<div class="bwd-cv-vilder-right-content">
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
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
        }                          
    }
}