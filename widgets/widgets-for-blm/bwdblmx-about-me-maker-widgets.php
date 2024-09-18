<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdblmx_Mak___ extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdblmx-bio-about-me', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Bio - About Me', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle bwdblmx-MakerBioLink-about-icon';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() { 
		// our control function code goes here.

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content Section', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'about_us_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'about_us_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Your main title goes here.', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => 'Jenn',
			],
		);

		$this->add_control(
			'about_us_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'default' => 'Curating all things home decor, fashion, food and travel',
				'placeholder' => esc_html__( 'Your description goes here.', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => 'Curating all things home decor, fashion, food and travel',
			],
		);

		$this->end_controls_section();

		// Image Style Section-------------------------------------
		$this->start_controls_section(
			'bwdblmx_image_style_section',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdblmx_image_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Image Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdblmx-about-me-img-holder' => 'text-align: {{VALUE}}!important;',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwdblmx_image_width',
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
					'{{WRAPPER}} .bwdblmx-about-me-img-holder img' => 'width: {{SIZE}}{{UNIT}}!important; max-width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdblmx_image_height',
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
					'{{WRAPPER}} .bwdblmx-about-me-img-holder img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdblmx_image_border',
				'selector' => '{{WRAPPER}} .bwdblmx-about-me-img-holder img',
			]
		);
		$this->add_responsive_control(
			'bwdblmx_image_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-about-me-img-holder img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// Title Style Section-------------------------------------
		$this->start_controls_section(
			'bwdblmx_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdblmx_title_typography',
				'selector' => '{{WRAPPER}} .bwdblmx-about-me-title',
			]
		);

		$this->add_control(
			'bwdblmx_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-about-me-title' => 'color: {{VALUE}}!important',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'bwdblmx_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-about-me-title:hover' => 'color: {{VALUE}}!important',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'bwdblmx_title_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Title Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdblmx-about-me-title' => 'text-align: {{VALUE}}!important;',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_responsive_control(
            'bwdblmx_title_padding',
            [
                'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdblmx-about-me-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
         ]
       );

		$this->end_controls_section();

		// Description Style Section-------------------------------------
		$this->start_controls_section(
			'bwdblmx_desc_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdblmx_desc_typography',
				'selector' => '{{WRAPPER}} .bwdblmx-about-me-description',
			]
		);

		$this->add_control(
			'bwdblmx_desc_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-about-me-description' => 'color: {{VALUE}}!important',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'bwdblmx_desc_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-about-me-description:hover' => 'color: {{VALUE}}!important',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'bwdblmx_desc_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Title Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdblmx-about-me-description' => 'text-align: {{VALUE}}!important;',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_responsive_control(
            'bwdblmx_desc_padding',
            [
                'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdblmx-about-me-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
         ]
       );

		$this->end_controls_section();

	}

	protected function render() { 
		$settings = $this->get_settings_for_display();

		?>
			<div class="bwdblmx-about-me-container">
				<div class="bwdblmx-about-me-img-holder">
					<img src="<?php echo esc_url( $settings['about_us_image']['url'] ) ?>">
				</div>
				<div class="bwdblmx-about-me-content">
					<div class="bwdblmx-about-me-inner-content">
						<h2 class="bwdblmx-about-me-title">
							<?php echo esc_html( $settings['about_us_title'], BWDEB_ROOT_AUTHOR_PRO);  ?>
						</h2>
						<p class="bwdblmx-about-me-description">
							<?php echo esc_html( $settings['about_us_description'], BWDEB_ROOT_AUTHOR_PRO);  ?>
						</p>
					</div>
				</div>
			</div>

		<?php
	}

}
