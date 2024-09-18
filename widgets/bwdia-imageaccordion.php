<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdiaImageAccordion extends \Elementor\Widget_Base {
	public function get_name() {
		return 'bwdskimageaccordion';
	}

	public function get_title() {
		return esc_html__( 'Image Accordion', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-accordion bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'hover' ];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'bwdia_image_accordion_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdia_image_accordion_style_layout',
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
					'style6' => esc_html__( 'Style 6 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style13' => esc_html__( 'Style 13 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style14' => esc_html__( 'Style 14 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style15' => esc_html__( 'Style 15 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style16' => esc_html__( 'Style 16 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style17' => esc_html__( 'Style 17 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style18' => esc_html__( 'Style 18 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style19' => esc_html__( 'Style 19 ', BWDEB_ROOT_AUTHOR_PRO ),
					'style20' => esc_html__( 'Style 20 ', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdia_image_accordion_content_style',
		    [
		        'label' => esc_html__('Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdia_img_acc_content_align',
			[
				'label' => esc_html__( ' Content Alignment', 'bwdsi-social-icon' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdsi-social-icon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdsi-social-icon' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdsi-social-icon' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .bwdia-content-box' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdia_image_acc_show_one_item',
			[
				'label' => esc_html__( 'Active item', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_show_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Williamson', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdia_image_title_font_size',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-title',
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'bwdia_image_acc_show_decs',
			[
				'label' => esc_html__( 'Show Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',

			]
		);
		$repeater->add_control(
			'bwdia_image_acc_shape_decs',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, suscipit.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_decs_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_decs_font_size',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-decs',
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_cont_bg_switch',
			[
				'label' => esc_html__( 'Show Content Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdia_img_content_background_color',
			[
				'label' => esc_html__( 'Content Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-content-bg' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdia_image_cont_bg_switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_accordion_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_accordion_show_link',
			[
				'label' => esc_html__( 'Show Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_link',
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
					'bwdia_image_accordion_show_link' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdia_image_accordion_item',
			[
				'label' => esc_html__( 'Image Accordion list', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdia_image_acc_title' => esc_html__( 'Williamso', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Jonduae', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Alexraue', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Luthipeue', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdia_image_acc_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdia_image_style_background_overlay_color',
			[
				'label' => esc_html__( 'Image Overlay Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-single-img:hover > a:before' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdia_image_shape_width',
			[
				'label' => esc_html__( 'Image Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdia_image_style_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdia_image_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdia_img_background_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdim-box',
			]
		);
		$this->add_responsive_control(
			'bwdia_image_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( ! empty( $settings['bwdia_image_acc_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdia_image_acc_btn_link', $settings['bwdia_image_acc_btn_link'] );
		}
		if ( ! empty( $settings['bwdia_image_acc_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdia_image_acc_link', $settings['bwdia_image_acc_link'] );
		}


		if ('style1' === $settings['bwdia_image_accordion_style_layout']) { 
		?>

			<div class="bwdia-img-accordion-1 bwdia-common-style">
			<?php
				if ( $settings['bwdia_image_accordion_item'] ) {
					foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
			<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">
				<div class="bwdia-content-box">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
				</div>
				</a>
			</div>
				<?php
				}	
				}	
				?>
			</div>

		<?php
		}elseif ('style2' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
		<div class="bwdia-img-accordion-2 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
			<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] );
			 if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
			</div>
					<?php
					}	
				}	
					?>
		</div>
	
			<?php
		}elseif ('style3' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-3 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style4' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-4 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style5' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-5 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
				</div>
				</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style6' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-6 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style7' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-7 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style8' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-8 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
					<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
					<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style9' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-9 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style10' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-10 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style11' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-11 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
					<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
						<div class="bwdia-img-box">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">
					</div>
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php		
		}elseif ('style12' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-12 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
					<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
						<div class="bwdia-img-box">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt=""></div>
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style13' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-13 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
					<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
						<div class="bwdia-img-box">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt=""></div>
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style14' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-14 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
					<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
						<div class="bwdia-img-box">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt=""></div>
					<div class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style15' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-15 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style16' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-16 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">					
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style17' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-17 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">					
					<div class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style18' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-18 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div 
				class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style19' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-19 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">				<div class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>	
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}elseif ('style20' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
				<div class="bwdia-img-accordion-20 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
				<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo ' bwdia-active-item';}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">					<div class="bwdia-content-box bwdia-content-bg <?php if($item['bwdia_image_cont_bg_switch'] !== 'yes'){echo 'bwdia-deactive-content';} ?>">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
				</div>
					<?php
					}	
					}	
					?>
				</div>
	
			<?php
		}	

		 
	}
}



