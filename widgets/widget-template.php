<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ProfaqfgWelementorPlugiN extends Widget_Base {

	public function get_name() {
		return esc_html__('FAQForgeName');
	}

	public function get_title() {
		return esc_html__( 'FAQ Forge', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-accordion';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'faqfg_content_selection',
			[
				'label' => esc_html__( 'FAQ Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'faqfg_faq_style_selection',
			[
				'label' => esc_html__( 'FAQ Presets', BWDEB_ROOT_AUTHOR_PRO ),
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
		$this->add_responsive_control(
			'faqfg_cardslider_all_items_align',
			[
				'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'faqfg_widget_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'The versatile FAQ Forge plugin.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'faqfg_content_settings',
			[
				'label' => esc_html__( 'FAQ Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'faqfg_faq_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'What about FAQ Forge plugin?', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_jytjg_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed',
			]
		);
		$repeater->add_control(
			'faqfg_faq_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_title_hover_color',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_title_hover_bg_color',
			[
				'label' => esc_html__( 'Hover Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'faqfg_faq_total_title_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-title .faqfg-collapsed' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'faqfg_faq_divider_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'faqfg_faq_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'FAQ Forge is a powerful Elementor add-on that empowers you to effortlessly create sleek and interactive accordion-style FAQs. Craft engaging user experiences with ease, showcasing information in a clean, organized format. Customize every aspect to match your site\'s style and watch your FAQs come to life. Elevate user engagement and streamline information access with FAQ Forge.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_erer_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body',
			]
		);
		$repeater->add_control(
			'faqfg_faq_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_description_hover_color',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_description_hover_bg_color',
			[
				'label' => esc_html__( 'Hover Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'faqfg_faq_total_description_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-panel-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'faqfg_faq_divider_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		$repeater->add_control(
			'faqfg_faq_collapsed_icon',
			[
				'label' => esc_html__( 'Collapsed Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-down',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_expand_icon',
			[
				'label' => esc_html__( 'Expand Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_box_collapsed_icon_color',
			[
				'label' => esc_html__( 'Collapsed Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-collapsed-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-collapsed-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'faqfg_faq_box_expand_icon_color',
			[
				'label' => esc_html__( 'Expand Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-expand-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-expand-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'faqfg_faq_box_icon_size',
			[
				'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .faqfg-collapsed-icon, {{WRAPPER}} {{CURRENT_ITEM}} .faqfg-expand-icon' => 'font-size: {{SIZE}}{{UNIT}};',
					' {{WRAPPER}} {{CURRENT_ITEM}} .faqfg-collapsed-icon svg, {{WRAPPER}} {{CURRENT_ITEM}} .faqfg-expand-icon svg' => 'width: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$repeater->add_control(
			'faqfg_faq_divider_s_k',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'faqfg_faq_box_item_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
            'faqfg_faq_total_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'faqfg_faq_total_box_margin',
            [
                'label' => esc_html__('Box Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'faqfg_total_faq_box',
			[
				'label' => esc_html__( 'FAQ Forge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'faqfg_faq_title' => esc_html__( 'FAQ Forge #1', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'faqfg_faq_title' => esc_html__( 'FAQ Forge #2', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'faqfg_faq_title' => esc_html__( 'FAQ Forge #3', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'faqfg_faq_title' => esc_html__( 'FAQ Forge #4', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ faqfg_faq_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'faqfg_faq_toptitle_style_section',
			[
				'label' => esc_html__( 'FAQ Top Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'faqfg_cardslider_title_typography_reside',
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title',
				]
			]
		);
		$this->add_responsive_control(
			'faqfg_cardslider_title_text_size',
			[
				'label' => esc_html__( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'faqfg_cardslider_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'faqfg_cardslider_title_hover_color',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'faqfg_cardslider_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'faqfg_cardslider_title_hover_bg_color',
			[
				'label' => esc_html__( 'Hover Bg', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .faqfg_top_title:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'faqfg_cardslider_total_title_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faqfg_top_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'faqfg_faq_builder_style_section',
			[
				'label' => esc_html__( 'FAQ Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'faqfg_faq_builder_section_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .faqfg-faq-all',
			]
		);
		$this->add_responsive_control(
            'faqfg_buttons_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faqfg-faq-all' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'faqfg_buttons_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .faqfg-faq-all' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		 
		// Social Link
		if ( ! empty( $settings['faqfg_faq_side_icon']['url'] ) ) {
			$this->add_link_attributes( 'faqfg_faq_side_icon', $settings['faqfg_faq_side_icon'] );
		}
		echo !empty($settings['faqfg_widget_title'])?'<div class="faqfg_top_title">'.esc_html__($settings['faqfg_widget_title']).'</div>':'';
		?>
		<div class="faqfg-faq-all">
			<?php
			if ('style1' === $settings['faqfg_faq_style_selection']){ ?>
				<div class="faqfg-FAQ-1 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
						echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-FAQ-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed faqfg-zvfgdfvbds"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style2' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-2 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style3' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-3 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style4' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-4 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style5' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-5 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" role="tab" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="faqfg-collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style6' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-6 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading">
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div>
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style7' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-7 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne" class="faqfg-panel-collapse in">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style8' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-8 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style9' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-9 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style10' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-10 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style11' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-11 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style12' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-12 faqfg-faq-common" id="faq">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style13' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-13 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style14' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-14 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading" >
							<h4 class="faqfg-panel-title">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style15' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-15 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style16' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-16 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="faqfg-panel-body">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style17' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-17 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style18' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-18 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style19' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-19 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style20' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-20 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style21' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-21 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style22' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-22 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style23' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-23 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style24' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-24 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style25' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-25 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style26' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-26 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style27' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-27 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style28' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-28 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style29' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-29 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-FAQ-default">
							<div class="faqfg-panel-heading " id="headingOne ">
								<h4 class="faqfg-panel-title ">
									<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
									<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
									<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								</h4>
							</div>
							<div id="collapseOne ">
								<div class="faqfg-panel-body ">
									<?php echo $item['faqfg_faq_description']; ?>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style30' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-30 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			} elseif('style31' === $settings['faqfg_faq_style_selection']){
				?>
				<div class="faqfg-FAQ-31 faqfg-faq-common">
				<?php
				if ( $settings['faqfg_total_faq_box'] ) {
					foreach (  $settings['faqfg_total_faq_box'] as $item ) {
					echo '<div class="faqfg-FAQ-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="faqfg-panel-heading " id="headingOne ">
							<h4 class="faqfg-panel-title ">
								<span class="faqfg-collapsed"><?php echo esc_html__($item['faqfg_faq_title']); ?></span>
								<span class="faqfg-collapsed-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
								<span class="faqfg-expand-icon"><?php \Elementor\Icons_Manager::render_icon( $item['faqfg_faq_expand_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
							</h4>
						</div>
						<div id="collapseOne ">
							<div class="faqfg-panel-body ">
								<?php echo $item['faqfg_faq_description']; ?>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
			<?php
			}
			?>
		</div>
		<script type="application/ld+json">
		{ 
			"@context": "http://schema.org/",
			"@type": "Plugin",
			"name": "FAQ Forge",
			"dateCreated": "2023-09-13",
			"image": "https://bestwpdeveloper.com/faq-forge/",
			"director": 
				{ 
					"@type": "Organization",
					"name": "Best WP Developer",
					"birthDate": "2019-02-15"
				}
		}
		</script>
		<?php
	}
	
	
}
