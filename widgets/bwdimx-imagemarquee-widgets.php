<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdimx_imagemarquee_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdimximagemarquee', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Image Marquee', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle bwdimx-imagemarquee-icon';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() {

		$this->start_controls_section(
			'bwdimx_general',
			[
				'label' => esc_html__( 'General', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdimx_direction',
			[
				'label'     => esc_html__('Direction', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'dirleft',
				'options'   => [
					'dirleft' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
					'dirright' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
					'dirup' => esc_html__('Up', BWDEB_ROOT_AUTHOR_PRO),
					'dirdown' => esc_html__('Down', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_responsive_control(
			'bwdimx_items_gap',
			[
				'label'       => esc_html__('Gap Between Items', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 20,
			]
		);

		$this->add_responsive_control(
			'bwdimx_items_speed',
			[
				'label'       => esc_html__('Speed', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__( 'Speed: 1000 = 2s',BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 1,
				'max'         => 1000000,
				'step'        => 1,
				'default'     => 8000,
			]
		);

		$this->add_responsive_control(
			'bwdimx_items_height',
			[
				'label'       => esc_html__('Item Height', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 200,
				'selectors'   => [
					'{{WRAPPER}} .bwdimx_logo_marquee_holder' => 'height: {{SIZE}}px',
				],
			]
		);

		$this->add_control(
			'bwdimx_mobile_responsive_num',
			[
				'label'       => esc_html__('Mobile', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 1,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 1,
			]
		);
		$this->add_control(
			'bwdimx_tablet_responsive_num',
			[
				'label'       => esc_html__('Tablet', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 1,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 2,
			]
		);
		$this->add_control(
			'bwdimx_desktop_responsive_num',
			[
				'label'       => esc_html__('Desktop', BWDEB_ROOT_AUTHOR_PRO),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 1,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 3,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdimx_repeater_item',
			[
				'label' => esc_html__( 'Repeat Items', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$bwdimx_repet = new \Elementor\Repeater();

		$bwdimx_repet->add_control(
			'bwdimx_repeat_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$bwdimx_repet->add_control(
			'bwdimx_image_link',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'show_external' => true,
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$bwdimx_repet->add_control(
			'bwdimx_Image_size',
			[
				'label'     => esc_html__('Image Size', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'contain',
				'options'   => [
					'contain' => esc_html__('Contain', BWDEB_ROOT_AUTHOR_PRO),
					'cover' => esc_html__('Cover', BWDEB_ROOT_AUTHOR_PRO),
					'fill' => esc_html__('Fill', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdimx_img' => 'object-fit: {{VALUE}};',
				],
			]
		);
		$bwdimx_repet->add_control(
			'bwdimx_Image_position',
			[
				'label'     => esc_html__('Image Position', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'default' => 'center',
				'options'   => [
					'center' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
					'left' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
					'right' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
					'top' => esc_html__('Top', BWDEB_ROOT_AUTHOR_PRO),
					'bottom' => esc_html__('Bottom', BWDEB_ROOT_AUTHOR_PRO),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdimx_img' => 'object-position: {{VALUE}};',
				],
			]
		);

		$bwdimx_repet->add_control(
			'bwdimx_options',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$bwdimx_repet->start_controls_tabs(
			'bwdimx_style_tabs'
		);

		$bwdimx_repet->start_controls_tab(
			'bwdimx_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdimx_background_type',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder',
			]
		);

		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdimx_commn_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder',
			]
		);

		$bwdimx_repet->add_responsive_control(
			'bwdimx_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$bwdimx_repet->add_responsive_control(
			'bwdimx_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdimx_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder',
			]
		);

		$bwdimx_repet->end_controls_tab();

		$bwdimx_repet->start_controls_tab(
			'bwdimx_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdimx_background_type_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder:hover',
			]
		);

		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdimx_commn_border_hover',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder:hover',
			]
		);

		$bwdimx_repet->add_responsive_control(
			'bwdimx_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$bwdimx_repet->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdimx_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdimx_logo_marquee_holder:hover',
			]
		);

		$bwdimx_repet->end_controls_tab();

		$bwdimx_repet->end_controls_tabs();

		$this->add_control(
			'bwdimx_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdimx_repet->get_controls(),
				'default' => [
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdimx_repeat_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdimx_style',
			[
				'label' => esc_html__( 'Common', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdimx_style_tabs'
		);

		$this->start_controls_tab(
			'bwdimx_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdimx_background_type',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdimx_commn_border',
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder',
			]
		);

		$this->add_responsive_control(
			'bwdimx_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdimx_logo_marquee_holder' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdimx_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdimx_logo_marquee_holder' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdimx_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdimx_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdimx_background_type_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdimx_commn_border_hover',
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder:hover',
			]
		);

		$this->add_responsive_control(
			'bwdimx_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdimx_logo_marquee_holder:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdimx_shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdimx_logo_marquee_holder:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		$this->end_controls_section();

	}

    protected function render(){

        $settings = $this->get_settings_for_display();


		?>
			<div class="bwdimx_logo_marquee bwdimx-style-common">
			<?php require 'bwdimx-variable.php' ; ?>
				<div class="bwdimx_marquee">
					<div class="bwdimx-logo-wrapper <?php echo esc_attr($settings['bwdimx_direction']);?>">
					<?php if ( $settings['bwdimx_main_repetater'] ) { 
                    	foreach (  $settings['bwdimx_main_repetater'] as $bwdimx_repet ) {
                	?>
						<div class="bwdimx_logo_marquee_holder elementor-repeater-item-<?php echo esc_attr( $bwdimx_repet['_id'] ); ?>">
							<a class="bwdimx_img_anchor" href="<?php echo esc_url(isset($bwdimx_repet['bwdimx_image_link']['url']) ? $bwdimx_repet['bwdimx_image_link']['url'] : ''); ?>" <?php echo esc_attr(($bwdimx_repet['bwdimx_image_link']['is_external']) ? 'target="_blank"' : ''); ?>>
								<img class="bwdimx_img" src="<?php echo esc_url( $bwdimx_repet['bwdimx_repeat_image']['url'] ); ?>">
							</a>
						</div>

					<?php }}?>
					</div>
				</div>
			</div>
		<?php
        

    }

}