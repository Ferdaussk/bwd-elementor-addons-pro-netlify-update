<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDDHHeading extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameDualHeading', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Dual Heading', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle dual-heading';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'bwddh_heading_content_section',
			[
				'label' => esc_html__( 'Heading Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwddh_style_selection',
			[
				'label' => esc_html__( 'Heading Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
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
			'bwddh_heading_title_url_switcher',
			[
				'label' => esc_html__( 'Hide Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwddh_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwddh_heading_title_url',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwddh_heading_title_url_switcher' => 'yes',
				],
				'placeholder' => esc_attr__( 'https://www.your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddh_heading_url_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_title01_switcher',
			[
				'label' => esc_html__( 'Hide Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddh_heading_title01',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'default' => esc_html__('Got to our main', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwddh_heading_title_style_tabs01'
		);
		$this->start_controls_tab(
			'bwddh_heading_title_normal_tab01',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_typography01',
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading .bwddh-first-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_color01',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading .bwddh-first-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwddh_heading_title_hover_tab01',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_hover_typography01',
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading:hover .bwddh-first-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_hover_color01',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading:hover .bwddh-first-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_control(
			'bwddh_heading_title02_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_divider_title02_switcher',
			[
				'label' => esc_html__( 'Hide Divider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwddh_heading_divider_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwddh_heading_divider_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwddh_heading_divider_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'bwddh_heading_divider_width_position',
            [
                'label' => esc_html__('Position', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heddi-1:after' => 'position: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwddh_heading_title_headingdivider_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_title02_switcher',
			[
				'label' => esc_html__( 'Hide Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddh_heading_title02',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'default' => esc_html__('Program', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwddh_heading_title_style_tabs02'
		);
		$this->start_controls_tab(
			'bwddh_heading_title_normal_tab02',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_typography02',
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading .bwddh-sec-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_color02',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading .bwddh-sec-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwddh_heading_title_hover_tab02',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_hover_typography02',
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading:hover .bwddh-sec-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_hover_color02',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading:hover .bwddh-sec-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwddh_heading_style_section',
			[
				'label' => esc_html__( 'Heading Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddh_heading_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddh-heading',
			]
		);
		$this->add_responsive_control(
            'bwddh_heading_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwddh_heading_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwddh_heading_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwddh_alignment = $settings['bwddh_alignment'];
		if('left' === $bwddh_alignment){
			$bwddh_align_p = 'bwddh_for_align_left';
		} elseif('center' === $bwddh_alignment){
			$bwddh_align_p = 'default';
		} elseif('right' === $bwddh_alignment){
			$bwddh_align_p = 'bwddh_for_align_right';
		}
		// Link
		if ( ! empty( $settings['bwddh_heading_title_url']['url'] ) ) {
			$this->add_link_attributes( 'bwddh_heading_title_url', $settings['bwddh_heading_title_url'] );
		}
		if('style1' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-1">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-1"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style2' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-2">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-2"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style3' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-3">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-3 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-3"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style4' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-4">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-4 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-4"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style5' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-5">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-5 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-5"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style6' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-6">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-6 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-6"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style7' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-7">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-7 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-7"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style8' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-8">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-8 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-8"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style9' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-9">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-9 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-9"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style10' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-10">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-10 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-10"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style11' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-11">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-11 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-11"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style12' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-12">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-12 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-12"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style13' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-13">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-13 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-13"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style14' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-14">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-14 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-14"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style15' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-15">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-15 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-15"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style16' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-16">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-16 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-16"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style17' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-17">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-17 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-17"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style18' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-18">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-18 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-18"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style19' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-19">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-19 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-19"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style20' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-20">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-20 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-20"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style21' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-21">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-21 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-21"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style22' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-22">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-22 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-22"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style23' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-23">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-23 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-23"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style24' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-24">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-24 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-24"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style25' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-25">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-25 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-25"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style26' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-26">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-26 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-26"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style27' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-27">
			<div class="bwddh-bg">
				<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-27 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-27"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
			</div>
		</div></a>
		<?php
		} elseif('style28' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-28">
			<div class="bwddh-bg">
				<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-28 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-28"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
			</div>
		</div></a>
		<?php
		} elseif('style29' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-29">
			<div class="bwddh-bg">
				<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-29 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-29"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
			</div>
		</div></a>
		<?php
		} elseif('style30' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-30">
			<div class="bwddh-bg">
				<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-30 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-30"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
			</div>
		</div></a>
		<?php
		} elseif('style31' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo $bwddh_align_p; ?> bwddh-dual-hedi-31">
			<div class="bwddh-bg">
				<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi bwddh-heddi-31 <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-31"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
			</div>
		</div></a>
		<?php
		}
	}
}
