<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdtsrx_threesixtyRotation_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdtsrx-threesixty-rotation-view', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( '360 Rotation View', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdtsrx-threesixtyRotation-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

	/**
     * Register widget content controls
    */
	$this->__threesixty_rotation_content_controls();
	$this->__threesixty_center_circle();
	$this->__settings_content_controls();
	
	/**
     * Register widget style controls
    */
	$this->__wrapper_style_controls();
	$this->__magnify_style_controls();
	$this->__autoplay_btn_style_controls();

	}

	protected function __threesixty_rotation_content_controls() {

		$this->start_controls_section(
			'_section_threesixty_rotation',
			[
				'label' => __('Threesixty Rotation', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'images',
			[
				'label' => __('Gallery', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'dynamic' => [
					'active' => true,
				]
			]
		);

		$this->end_controls_section();
	}

	protected function __settings_content_controls() {

		$this->start_controls_section(
			'_section_threesixty_rotation_setting',
			[
				'label' => __('Settings', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'auto_play',
			[
				'label' => __( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'autoplay'  => __( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
					'button'  => __( 'Button Play', BWDEB_ROOT_AUTHOR_PRO ),
					'none' => __( 'None', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'button_align',
			[
				'label' => __( 'Button Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper .bwdtsrx-threesixty-rotation-autoplay-button' => 'text-align: {{VALUE}};',
				],
				'style_transfer' => true,
				'condition' => [
					'auto_play' => 'button'
				]
			]
		);

		$this->add_control(
			'magnify',
			[
				'label' => __('Magnify', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => __('Off', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'zoom',
			[
				'label' => __('Magnify Zoom', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '3',
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'magnify' => 'yes'
				]
			]
		);

		$this->end_controls_section();
	}

	protected function __threesixty_center_circle() {

		$this->start_controls_section(
			'_section_threesixty_center_circle',
			[
				'label' => __('Center Circle', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdtsrx_image_view',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => '',
                ],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_responsive_control(
			'bwdtsrx_center_size',
			[
				'label' => esc_html__( 'Circle Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-360img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdtsrx_center_background_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-360img' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtsrx_center_box_shadow',
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-360img',
			]
		);
		

		$this->end_controls_section();

	}

	protected function __wrapper_style_controls() {

		$this->start_controls_section(
			'_style_threesixty_rotation_wrapper',
			[
				'label' => __('Wrapper', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'wrapper_width',
			[
				'label' => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wrapper_background',
				'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wrapper_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper',
			]
		);

		$this->add_control(
			'wrapper_border_radius',
			[
				'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wrapper_box_shadow',
				'label' => __('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper',
			]
		);

		$this->add_responsive_control(
			'wrapper_padding',
			[
				'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'sticky_title_position_left',
			[
				'label' => __('Sticky Title Position Left', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'default' => 'left',
				'selectors' => [
					'(desktop){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'left: {{wrapper_padding.LEFT || 0}}{{wrapper_padding.UNIT}}; right:auto;',
					'(tablet){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'left: {{wrapper_padding_tablet.LEFT}}{{wrapper_padding_tablet.UNIT}}; right:auto;',
					'(mobile){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'left: {{wrapper_padding_mobile.LEFT}}{{wrapper_padding_mobile.UNIT}}; right:auto;',
				],
				'condition' => [
					'sticky_title!' => '',
					'sticky_title_position' => 'left',
				]
			]
		);

		$this->add_control(
			'sticky_title_position_right',
			[
				'label' => __('Sticky Title Position Right', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'default' => 'right',
				'selectors' => [
					'(desktop){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'right: {{wrapper_padding.RIGHT || 0}}{{wrapper_padding.UNIT}}; left:auto;',
					'(tablet){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'right: {{wrapper_padding_tablet.RIGHT}}{{wrapper_padding_tablet.UNIT}}; left:auto;',
					'(mobile){{WRAPPER}}  .bwdtsrx-threesixty-rotation-wrapper  span.bwdtsrx-threesixty-rotation-sticky-title' => 'right: {{wrapper_padding_mobile.RIGHT}}{{wrapper_padding_mobile.UNIT}}; left:auto;',
				],
				'condition' => [
					'sticky_title!' => '',
					'sticky_title_position' => 'right',
				]
			]
		);

		$this->end_controls_section();
	}

	protected function __magnify_style_controls() {

		$this->start_controls_section(
			'_style_threesixty_rotation_magnify',
			[
				'label' => __('Magnify', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'magnify' => 'yes',
				]
			]
		);

		$this->add_responsive_control(
			'glass_icon_size',
			[
				'label' => __('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper  .bwdtsrx-threesixty-rotation-magnify i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'glass_icon_color',
			[
				'label' => __('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper  .bwdtsrx-threesixty-rotation-magnify i' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'glass_width',
			[
				'label' => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px',  ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper .bwdtsrx-img-magnifier-glass' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'glass_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper .bwdtsrx-img-magnifier-glass',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'glass_box_shadow',
				'label' => __('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper .bwdtsrx-img-magnifier-glass',
			]
		);

		$this->end_controls_section();
	}

	protected function __autoplay_btn_style_controls() {

		$this->start_controls_section(
			'_style_threesixty_rotation_button',
			[
				'label' => __('AutoPlay Button', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'auto_play' => 'button',
				]
			]
		);

		$this->start_controls_tabs('_tabs_button');

		$this->start_controls_tab(
			'_tab_button_normal',
			[
				'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$this->add_control(
			'button_color',
			[
				'label' => __('Title Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper  button.bwdtsrx-threesixty-rotation-play' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'button_background',
				'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'button_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play',
			]
		);

		$this->add_control(
			'button_border_radius',
			[
				'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'button_box_shadow',
				'label' => __('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play',
			]
		);

		$this->add_responsive_control(
			'button_padding',
			[
				'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				],
			]
		);

		$this->add_control(
			'button_space_top',
			[
				'label' => __( 'Space Top', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdtsrx_autoplay_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-autoplay-button button' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdtsrx_autoplay_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-autoplay-button button' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_button_hover',
			[
				'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

		$this->add_control(
			'button_hover_color',
			[
				'label' => __('Title Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper  button.bwdtsrx-threesixty-rotation-play:hover, {{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper  button.bwdtsrx-threesixty-rotation-play:focus' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'button_hover_background',
				'label' => __('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdtsrx-threesixty-rotation-wrapper button.bwdtsrx-threesixty-rotation-play:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		if ( empty( $settings['images'] ) ) {
			?>
			<div class="bwdtsrx-select-image" style="background-image: url(<?php echo BWDTSRX_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/image/bwd-placeholder.jpg' ?>)"></div>
			<?php
		}
		$this->add_render_attribute('wrapper', 'class', 'bwdtsrx-threesixty-rotation-wrapper');
		$this->add_render_attribute(
			'rotation',
			[
				'class' => 'bwdtsrx-threesixty-rotation-inner',
				'id' => 'bwdtsrx-threesixty-rotation' . $this->get_id(),
				'data-selector' => 'bwdtsrx-threesixty-rotation' . $this->get_id()
			]
		);
		if('autoplay' === $settings['auto_play'] ){
			$this->add_render_attribute('rotation', 'data-autoplay', 'on');
		}
		if ( 'yes' === $settings['magnify'] ) {
			$this->add_render_attribute(
				'glass',
				[
					'class' => 'bwdtsrx-threesixty-rotation-magnify',
					'data-zoom' => esc_html($settings['zoom'])
				]
			);
		}
		// $svg_url = BWDTSRX_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/image/360_view.svg';
		?>

		<div <?php $this->print_render_attribute_string('wrapper'); ?>>
			<div <?php $this->print_render_attribute_string('rotation'); ?>>
				<?php if ('yes' === $settings['magnify']): ?>
					<span <?php $this->print_render_attribute_string('glass'); ?>>
						<i class="fas fa-search"></i>
					</span>
				<?php endif; ?>
				<?php foreach ($settings['images'] as $item) : ?>
					<img data-src="<?php echo esc_url($item['url']); ?>">
				<?php endforeach; ?>
				<div class="bwdtsrx-threesixty-rotation-360img" style='background-image:url("<?php echo esc_url($settings['bwdtsrx_image_view']['url']);?>")'></div>
			</div>
			<?php if ('autoplay' === $settings['auto_play'] ) : ?>
				<button class="bwdtsrx-threesixty-rotation-autoplay"></button>
			<?php endif; ?>
			<?php if ('button' === $settings['auto_play'] ) : ?>
			<div class="bwdtsrx-threesixty-rotation-autoplay-button">
				<button class="bwdtsrx-threesixty-rotation-play">
					<i aria-hidden="true" class="fas fa-play"></i>
				</button>
			</div>
			<?php endif; ?>
		</div>
		<?php
	}

}