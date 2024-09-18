<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDhbhimageHover extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwbih-image-hover';
	}

	public function get_title() {
		return esc_html__( 'Image Hover Effect', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-animation bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'image', 'hover', 'effect', 'bwd', 'image hover', 'animation'  ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'bwdih_hover_box_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		    ]
		);
		$this->add_control(
			'bwdih_hover_box_style',
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
		$this->add_control(
			'bwdih_hover_box_column_option',
			[
				'label' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'12'  => esc_html__( '1', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( '2', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( '3', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( '4', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'bwdih_hover_content_icon',
		    [
		        'label' => esc_html__('Box Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdih_hover_box_image', 
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				]
			]
		);
        $repeater->add_control(
			'bwdih_hover_box_name',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'separator' => 'before',
				'dynamic' => [
                    'active' => true,
                ],
				'placeholder' => esc_html__( 'Type your name here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// name color
		$repeater->add_control(
			'bwdih_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdih_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-title',
			]
		);		
		$repeater->add_control(
			'bwdih_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
                    'active' => true,
                ],
                'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, natus.', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
				'placeholder' => esc_html__( 'Write Description here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// title color
		$repeater->add_control(
			'bwdih_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-decs',
			]
		);		
		$repeater->add_control(
			'bwdih_btn_title',
			[
				'label' => esc_html__( 'Button title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'default' => esc_html__( 'Read More', BWDEB_ROOT_AUTHOR_PRO ),
                'label_block' => true,
				'placeholder' => esc_html__( 'Write button here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdih_btn_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write button link here', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->start_controls_tabs(
			'style_tabs'
		);
		
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdih_button_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a',
			]
		);
		$repeater->add_control(
			'bwdih_btn_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_btn_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a',
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_adv_radius',
			[
				'label'       => __( 'Advanced Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SWITCHER,
				'description' => __( 'Apply custom radius values. Get the radius value from ', 'premium-addons-for-elementor' ) . '<a href="https://9elements.github.io/fancy-border-radius/" target="_blank">here</a>',
			]
		);
		$repeater->add_control(
			'bwdih_btn_adv_radius_value',
			[
				'label'     => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => Controls_Manager::TEXT,
				'dynamic'   => array( 'active' => true ),
				'selectors' => array(
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'border-radius: {{VALUE}};',
				),
				'condition' => array(
					'bwdih_btn_adv_radius' => 'yes',
				),
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover',
			]
		);
		$repeater->add_control(
			'bwdih_btn_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_hover_btn_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover',
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_responsive_control(
			'bwdih_wrapper_bottom_space',
			[
				'label' => esc_html__( 'Item Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' =>['px', 'em', 'rem'] ,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-wrapper-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdih_hover_list',
			[
				'label' => esc_html__( 'Hover List', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdih_hover_box_name' => esc_html__( 'Williamson', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdih_hover_box_name' => esc_html__( 'Jonduae', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdih_hover_box_name' => esc_html__( 'Alexraue', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdih_hover_box_name }}}',
			]
		);

    	$this->end_controls_section();

		// style-tab
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'hoverbox_border_radius',
			[
				'label' => esc_html__( 'Box border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'hoverbox_padding',
			[
				'label' => esc_html__( 'Box padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'hoverbox_margin',
			[
				'label' => esc_html__( 'Box margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-wrapper-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdih_bg_heading1',
			[
				'label' => esc_html__( 'Main background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdih_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);
		$this->add_control(
			'bwdih_bg_heading2',
			[
				'label' => esc_html__( 'Inside background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdih_background_content',
				'label' => esc_html__( 'Inside background ', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-hover-content',
			]
		);
		$this->add_control(
			'bwdih_overlay_color1',
			[
				'label' => esc_html__( 'Overlay Color 1', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdih_overlay_color2',
			[
				'label' => esc_html__( 'Overlay Color 2', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part:after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_hover_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdih_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);

		$this->end_controls_section();

    }

	protected function render() {

    $settings = $this->get_settings_for_display();

	if ( ! empty( $settings['bwdih_btn_link']['url'] ) ) {
		$this->add_link_attributes( 'bwdih_btn_link', $settings['bwdih_btn_link'] );
	}

	if ('style1' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-1">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach ( $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_url($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style2' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-2">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style3' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-3">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style4' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-4">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style5' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-5">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style6' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-6">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?>
										</div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style7' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-7">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-sub-content">
											<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?>
											</div>
											<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
											<div class="bwd-hover-button">
											<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
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
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style8' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-8">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?>
										</div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style9' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-9">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style10' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-10">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style11' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-11">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style12' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-12">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style13' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-13">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style14' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-14">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style15' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-15">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style16' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-16">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style17' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-17">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style18' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-18">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style19' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-19">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style20' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-20">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style21' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-21">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html ($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style22' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-22">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html__($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html__($item['bwdih_description']); ?></div>
									</div>
									<div class="bwd-hover-button">
									<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style23' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-23">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?>col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style24' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-24">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style25' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-25">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style26' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-26">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style27' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-27">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?>col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style28' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-28">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-sub-content">
											<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
											<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
											<div class="bwd-hover-button">
											<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
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
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style29' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-29">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-hover-overlay"></div>
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html ($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style30' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-30">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-sub-content">
											<div class="bwd-hover-title"><?php echo esc_html ($item	['bwdih_hover_box_name']); ?>
											</div>
											<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										</div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}	
				}	
				?>
			</div>
		</div>
	</div>
	<?php
	}elseif('style31' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-31">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-sub-content">
											<div class="bwd-hover-title"><?php echo esc_html ($item	['bwdih_hover_box_name']); ?>
											</div>
											<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
											<div class="bwd-hover-button">
											<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr($item['bwdih_btn_title']);?></a>
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
				?>
			</div>
		</div>
	</div>
	<?php
	}

	}
}