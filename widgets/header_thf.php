<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class THFTheHeader extends Widget_Base {

	public function get_name() {
		return esc_html__( 'TheNavMenu', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'The Unique Headers', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-header';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}



	private function get_available_menus() {
		$menus = wp_get_nav_menus();
		$options = [];
		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}
		return $options;
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Menu Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_footer_styles',
			[
				'label' => esc_html__( 'Menu Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
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
				],
			]
		);
		$menus = $this->get_available_menus();
		if ( ! empty( $menus ) ) {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'label' => esc_html__( 'Select Menu', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'options' => $menus,
					'default' => array_keys( $menus )[0],
					'save_default' => true,
					'description' => sprintf(
						esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', BWDEB_ROOT_AUTHOR_PRO ),
						sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php' ) ),
						'</a>'
					),
				]
			);
		} else {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>' . esc_html__( 'There are no menus in your site.', BWDEB_ROOT_AUTHOR_PRO ) . '</strong><br>' .
							sprintf(
								esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', BWDEB_ROOT_AUTHOR_PRO ),
								sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
								'</a>'
							),
					'separator' => 'after',
				]
			);
		}
		$this->add_control(
			'thf_header_top_switcher',
			[
				'label' => esc_html__( 'Hide Top Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thf_nav_logo_switcher',
			[
				'label' => esc_html__( 'Hide Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_sticky_header_section',
			[
				'label' => esc_html__( 'Sticky Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_type',
			[
				'label' => esc_html__( 'Header Sticky', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'thf_menus_scroll_desktop_distance',
			[
				'label' => esc_html__( 'Scroll Distance (px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 1000,
				'step' => 1,
				'default' =>200,
				'condition' => [
					'thf_header_type' => 'yes'
				],
				'separator'=>'after'
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'text_header_top_section',
			[
				'label' => esc_html__( 'Header Top Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'thf_header_top_switcher' => 'yes',
				],
			]
		);
		// msg
		$this->add_control(
			'thf_header_top_text_switcher',
			[
				'label' => esc_html__( 'Contacts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_text = new \Elementor\Repeater();
		$top_bar_text->add_control(
			'thf_header_top_contact_icon_switcher',
			[
				'label' => esc_html__( 'Icon Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		// For Text Icon start
		$top_bar_text->start_controls_tabs(
			'style_top_bar_tabstext_icon'
		);
		$top_bar_text->start_controls_tab(
			'style_top_bar_normal_tabtext_icon',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		$top_bar_text->add_responsive_control(
			'thf_main_text_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_icon_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->start_controls_tab(
			'style_top_bar_hover_tabtext_icon',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		$top_bar_text->add_responsive_control(
			'thf_main_text_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_icon_top_bar_hover_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_text_icon_top_bar_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i',							
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->end_controls_tabs();
		
		$top_bar_text->add_responsive_control(
			'thf_text_icon_top_bar_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$top_bar_text->add_responsive_control(
            'thf_header_top_bar_paddingtext_icon',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$top_bar_text->add_responsive_control(
            'thf_header_top_bar_margintext_icon',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_top_bar_text_icon_hover_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i',
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_text_icon_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i',
			]
		);
		// For Text Icon end
		$top_bar_text->add_control(
			'thf_top_icon_text',
			[
				'label' => esc_html__( 'Text Address', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => 'true',
				'separator' => 'before',
				'default' => esc_html__( 'www.wordpress.org', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.the-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_title',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$top_bar_text->start_controls_tabs(
			'style_top_bar_tabstext'
		);
		$top_bar_text->start_controls_tab(
			'style_top_bar_normal_tabtext',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'style_top_bar_text_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text',
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->start_controls_tab(
			'style_top_bar_hover_tabtext',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'style_top_bar_text_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text:hover',
			]
		);
		$top_bar_text->add_control(
			'thf_text_top_bar_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_text_top_bar_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover',							
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->end_controls_tabs();
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_text_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}',
			]
		);
		$this->add_control(
			'thf_top_bar_text_list',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $top_bar_text->get_controls(),
				'default' => [
					[
						'thf_top_icon_text' => esc_html__( 'US. IN. 47712', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_top_bar_text_icon' => [
							'value' => 'fas fa-map-marker-alt',
							'library' => 'solid',
						],
					],
					[
						'thf_top_icon_text' => esc_html__( '+12027953213', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'thf_top_icon_text' => esc_html__( 'mail@mail.com', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_top_bar_text_icon' => [
							'value' => 'far fa-envelope',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_top_icon_text }}}',
				'condition' => [
					'thf_header_top_text_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_gap_size',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left a' => 'margin-right: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_bottom_gap',
			[
				'label' => esc_html__( 'Item Bottom Gap (Mobile)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left a' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_top_bar_address_area',
			[
				'label' => esc_html__( 'Address Area', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'start',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .top-header-left' => 'justify-content: {{VALUE}};',
				],
			]
		);
		// Social Icon
		$this->add_control(
			'thf_header_top_icon_switcher',
			[
				'label' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_icon = new \Elementor\Repeater();
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.the-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$top_bar_icon->start_controls_tabs(
			'style_top_bar_tabs'
		);
		$top_bar_icon->start_controls_tab(
			'style_top_bar_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}} i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.social-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_icon_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->end_controls_tab();
		$top_bar_icon->start_controls_tab(
			'style_top_bar_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_social_icon_top_bar_hover_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_icon_top_bar_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover',							
			]
		);
		$top_bar_icon->end_controls_tab();
		$top_bar_icon->end_controls_tabs();
		
		$top_bar_icon->add_responsive_control(
			'thf_icon_top_bar_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_top_bar_hover_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}',
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}',
			]
		);
		$this->add_control(
			'thf_top_bar_social_icon_list',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $top_bar_icon->get_controls(),
				'default' => [
					[
						'thf_social_icon_text_title' => esc_html__( 'Twitter', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-x-twitter',
							'library' => 'solid',
						],
					],
					[	'thf_social_icon_text_title' => esc_html__( 'Facebook', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-facebook-f',
							'library' => 'solid',
						],
					],
					[
						'thf_social_icon_text_title' => esc_html__( 'Instagram', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_social_icon_text_title }}}',
				'condition' => [
					'thf_header_top_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_icon_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .top-header-right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .social-icons' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_area',
			[
				'label' => esc_html__( 'Icon Area', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-right' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'end',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .top-header-right' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'text_logo_section',
			[
				'label' => esc_html__( 'Nav Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'thf_nav_logo_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'thf_choose_logo_link',
			[
				'label' => esc_html__( 'Logo Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dynamic_link',
				'options' => [
					'dynamic_link' => esc_html__( 'Dynamic Link', BWDEB_ROOT_AUTHOR_PRO ),
					'custom_link' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'thf_logo_wraper_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_choose_logo_link' => 'custom_link',
				],
			]
		);
		$this->add_control(
			'thf_choose_menu_type',
			[
				'label' => esc_html__( 'Logo Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom_logo',
				'options' => [
					'dynamic_logo' => esc_html__( 'Dynamic Logo', BWDEB_ROOT_AUTHOR_PRO ),
					'custom_logo' => esc_html__( 'Custom Logo', BWDEB_ROOT_AUTHOR_PRO ),
					'custom_text' => esc_html__( 'Custom Text', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'thf_custom_logo',
			[
			  'label' => esc_html__( 'Choose Logo', BWDEB_ROOT_AUTHOR_PRO ),
			  'type' => Controls_Manager::MEDIA,
			  'default' => [
				'url' => plugin_dir_url(__DIR__) . 'assets/public/img/logo-header.webp',
			  ],
			  'condition' => [
				  'thf_choose_menu_type' => 'custom_logo',
			  ],
			]
		);
		$this->add_control(
			'thf_custom_logo_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'MY LOGO', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		$this->add_responsive_control(
			'thf_nav_logo_alignment',
			[
				'label' => esc_html__( 'Logo Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'separator' => 'after',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_logo_area',
			[
				'label' => esc_html__( 'Logo Area', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo, {{WRAPPER}} .offcanvas-header-common .dates-header-logo' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		
		$this->add_control(
			'thf_tagline_switcher',
			[
				'label' => esc_html__( 'Show Tagline', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_main_menu_section',
			[
				'label' => esc_html__( 'Main Menu', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_responsive_control(
			'thf_menu_alignment',
			[
				'label' => esc_html__( 'Menu Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_main_menu_area',
			[
				'label' => esc_html__( 'Menu Area (width:50%)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-dates-menu-area' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_menu_indicator_section',
			[
				'label' => esc_html__( 'Dropdown', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_menu_depth',
			[
				'label' => esc_html__( 'Menu Depth', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 4,
			]
		);
		$this->add_control(
			'thf_submenu_indicator_alignment',
			[
				'label' => esc_html__( 'Indicator Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'menu_indicator_right',
				'options' => [
					'menu_indicator_left'  => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'menu_indicator_right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'thf_main_menu_icon',
			[
				'label' => esc_html__( 'Main Indicator Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'thf-main-down',
				'options' => [
					'thf-main-default-icon'  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-down'  => esc_html__( 'Down', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-updown-leftright' => esc_html__( 'Left Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-quote-left' => esc_html__( 'Quote Left', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-left-right' => esc_html__( 'Left Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-double-right' => esc_html__( 'Double Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-bolt-right' => esc_html__( 'Bolt Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-plus' => esc_html__( 'Plus', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-main-user-plus' => esc_html__( 'User Plus', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		
		$this->add_control(
			'thf_child_menu_icon',
			[
				'label' => esc_html__( 'Child Indicator Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'thf-child-right',
				'options' => [
					'thf-child-down'  => esc_html__( 'Down', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-updown-leftright' => esc_html__( 'Left Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-quote-left' => esc_html__( 'Quote Left', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-left-right' => esc_html__( 'Left Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-double-right' => esc_html__( 'Double Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-bolt-right' => esc_html__( 'Bolt Right', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-plus' => esc_html__( 'Plus', BWDEB_ROOT_AUTHOR_PRO ),
					'thf-child-user-plus' => esc_html__( 'User Plus', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_button_content_section',
			[
				'label' => esc_html__( 'Nav Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_footer_btn_type',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'none'  => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'search_form' => esc_html__( 'Search Form', BWDEB_ROOT_AUTHOR_PRO ),
					'custom' => esc_html__( 'Custom Button', BWDEB_ROOT_AUTHOR_PRO ),
					'social_icon' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'admin_icon_name' => esc_html__( 'Admin', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'thf_search_form_style_selection',
			[
				'label' => esc_html__( 'Search Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwdsb-search-box-6',
				'options' => [
					'bwdsb-search-box-6' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdsb-search-box-7' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdsb-search-box-8' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdsb-search-box-9' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdsb-search-box-10' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'bwdsb-search-box-11' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_nav_search_form_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Search', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);

		// Coustom
		$this->add_control(
			'thf_button_style_selection',
			[
				'label' => esc_html__( 'Button Styles', BWDEB_ROOT_AUTHOR_PRO ),
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
					// Style 1,2,3,26,41,50,59,62,67,69,85,87,88,89,92
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_buttons_custom_class_id', 
			[
				'label' => esc_html__( 'Class ID (Custom)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', BWDEB_ROOT_AUTHOR_PRO ),
					'<code>',
					'</code>'
				),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_nav_button_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Get in touch', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_header_footer_button_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Social Icon
		
		$this->add_control(
			'thf_social_icon_selection',
			[
				'label' => esc_html__( 'Icon Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ), 
					// Style 2,6,7,19,28
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'thf_social_icon',
			[
				'label' => esc_html__( 'Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
			]
		);
		$repeater->add_control(
			'thf_social_icon_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', BWDEB_ROOT_AUTHOR_PRO ),
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
		$repeater->add_control(
			'thf_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'thf_icon_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-shadow' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-icon' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'thf_icon_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'thf_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_normal_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'thf_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover .thf-extra-item' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_icon_hover_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-before-icons,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:after',							
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_hover_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'thf_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'thf_social_icon_title' => esc_html__( 'Twitter', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_social_icon' => [
							'value' => 'fab fa-x-twitter',
							'library' => 'solid',
						],
					],
					[	'thf_social_icon_title' => esc_html__( 'Facebook', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_social_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'thf_social_icon_title' => esc_html__( 'Instagram', BWDEB_ROOT_AUTHOR_PRO ),
						'thf_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_social_icon_title }}}',
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		// Social Icon

		// 
		$this->add_responsive_control(
			'thf_nav_button_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'separator' => 'after',
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_menu_button_area',
			[
				'label' => esc_html__( 'Button Area (width:25%)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-all-button-con' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_mobile_menu_breakpoint',
			[
				'label' => esc_html__( 'Breakpoint', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'mobile' => esc_html__( 'Mobile (768px >)', BWDEB_ROOT_AUTHOR_PRO ),
					'tablet' => esc_html__( 'Tablet (1025px >)', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'thf_hamburger_menu_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-bars',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'thf_mobile_menu_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				// 'default' => 'right',
				'separator' => 'after',
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
		$this->end_controls_section();

		// Style start
		$this->start_controls_section(
			'thf_style_section_for_top_bar',
			[
				'label' => esc_html__( 'Top Bar Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_top_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_top_header_outer_width',
			[
				'label' => esc_html__( 'Top Header Outer Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-1' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_top_header_inner_width',
			[
				'label' => esc_html__( 'Top Header Inner  Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-top-header-width' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_top_bar_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_top_bar_bg_color',
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .top-header-1',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_style_section_for_header',
			[
				'label' => esc_html__( 'Header Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_header_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thf_header_common, {{WRAPPER}} .offcanvas-header-common .dates-menu-area, {{WRAPPER}} .offcanvas-header-common::after',
			]
		);
		$this->add_responsive_control(
			'thf_main_header_outer_width',
			[
				'label' => esc_html__( 'Header Outer Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf_header_common' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_header_inner_width',
			[
				'label' => esc_html__( 'Header Inner Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-main-header-width' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_wraper_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_header_common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_style_section_for_logo',
			[
				'label' => esc_html__( 'Logo Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_main_logo_size',
			[
				'label' => esc_html__( 'Logo Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo img' => ' height: {{SIZE}}px;',
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_logo',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .dates-header-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_choose_menu_type' => 'custom_logo',
				],
            ]
        );
		if ( !has_custom_logo() ) {
		$this->add_control(
			'thf_header_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhf_site_title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_header_title_typography',
				'selector' => '{{WRAPPER}} .bwdhf_site_title',
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		}
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_menus',
			[
				'label' => esc_html__( 'Menu Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item > li > a',
			]
		);
		$this->add_control(
			'thf_menus_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > a' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items > ul > li' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_menu_space',
			[
				'label' => esc_html__( 'Menu Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .menu-items > .thf-menu-part-item' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menus_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thf_header_menus_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li, {{WRAPPER}} .sub-menu li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_hover_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover',
			]
		);
		$this->add_control(
			'thf_menus_title_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items ul li:hover, {{WRAPPER}} .sub-menu li:hover, {{WRAPPER}} .thf-menu-part-item li .sub-menu li:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_overly_color',
			[
				'label' => esc_html__( 'Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items .thf-menu-part-item li::after, {{WRAPPER}} .menu-items .thf-menu-part-item li:hover, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::before, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .menu-items .thf-menu-part-item li .sub-menu' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_active_status',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'thf_menus_title_active_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active-dates-menu-item a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_active_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active-dates-menu-item' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_submenu_options',
			[
				'label' => esc_html__( 'Dropdown', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_submenu_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_submenu_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_dropdown_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_text_color',
			[
				'label' => esc_html__( 'Dropdown Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_main_indicator_title',
			[
				'label' => esc_html__( 'Dropdown Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'thf_menu_indicator_size',
			[
				'label' => esc_html__( 'Indicator Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_color',
			[
				'label' => esc_html__( 'Indicator Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children a::before, {{WRAPPER}} .menu-item-has-children a::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'thf_main_indicator_space',
			[
				'label' => esc_html__( 'Indicator Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'thf_submenu_indicator_alignment' => 'menu_indicator_right',
				],
			]
		);
		$this->add_responsive_control(
			'thf_child_indicator_space',
			[
				'label' => esc_html__( 'Child Indicator Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
	
		$this->add_control(
			'thf_main_dropdown_border_title',
			[
				'label' => esc_html__( 'Dropdown Item Divider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'thf_main_dropdown_border_style',
			[
				'label' => esc_html__( 'Border Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'solid' => esc_html__( 'Solid', BWDEB_ROOT_AUTHOR_PRO ),
					'double' => esc_html__( 'Double', BWDEB_ROOT_AUTHOR_PRO ),
					'dotted' => esc_html__( 'Dotted', BWDEB_ROOT_AUTHOR_PRO ),
					'dashed' => esc_html__( 'Dashed', BWDEB_ROOT_AUTHOR_PRO ),
					'groove' => esc_html__( 'Groove', BWDEB_ROOT_AUTHOR_PRO ),
					'ridge' => esc_html__( 'Ridge', BWDEB_ROOT_AUTHOR_PRO ),
					'inset' => esc_html__( 'Inset', BWDEB_ROOT_AUTHOR_PRO ),
					'outset' => esc_html__( 'Outset', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-style: {{VALUE}}',
				],
				
		
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_item_border_width',
			[
				'label' => esc_html__( 'Border Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-width: {{SIZE}}px;',
				],
				'condition' => [
					'thf_main_dropdown_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_control(
			'thf_menus_dropdown_border_item_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-color: {{VALUE}}',
				],
				'condition' => [
					'thf_main_dropdown_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_control(
			'thf_main_dropdown_width_title',
			[
				'label' => esc_html__( 'Dropdown Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_width',
			[
				'label' => esc_html__( 'Dropdown Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'width: {{SIZE}}px;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thf_main_dropdown_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thf-menu-part-item > li > .sub-menu',
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_border_radius',
			[
				'label' => esc_html__( 'Border radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_top_gap',
			[
				'label' => esc_html__( 'Dropdown Top Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_bg_color',
			[
				'label' => esc_html__( 'Dropdown Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_menus_title_submenu_item_padding',
            [
                'label' => esc_html__('Dropdown Item Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_submenu_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_dropdown_hover_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a:hover',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_hover_text_color',
			[
				'label' => esc_html__( 'Dropdown Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_menu_indicator_hover_size',
			[
				'label' => esc_html__( 'Indicator Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_hover_color',
			[
				'label' => esc_html__( 'Indicator Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children a:hover::before, {{WRAPPER}} .menu-item-has-children a:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_item_bg_hover_color',
			[
				'label' => esc_html__( 'Dropdown Item Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_bg_hover_color',
			[
				'label' => esc_html__( 'Dropdown Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_button',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_buttons_content_typography',
				'selector' => '{{WRAPPER}} .thf-title, a:before, a:after, .thf_creative_buttons a',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'thf_title_style_tabs'
		);

		$this->start_controls_tab(
			'thf_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'background: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'thf_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'color: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title::before, .thf_creative_buttons .thf-title:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'thf_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-creative-buttons' ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_responsive_control(
            'thf_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title, .thf_creative_buttons .thf-title:after, .thf-btn-eleven .thf-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		// End Custom Button
		$this->end_controls_section();


		// For Search Button start
		$this->start_controls_section(
			'thf_style_section_for_search_form',
			[
				'label' => esc_html__( 'Search Form', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Input Style
		$this->add_control(
			'thf_input_style_title_options',
			[
				'label' => esc_html__( 'Input Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_search_button_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_search_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_search_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_search_btn_padding_hover',
            [
                'label' => esc_html__('Input Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-input-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'thf_divider_aa',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Submit Style
		$this->add_control(
			'thf_submit_style_title_options',
			[
				'label' => esc_html__( 'Submit Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_submit_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_submit_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_submit_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_submit_padding_hover',
            [
                'label' => esc_html__('Submit Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_control(
			'thf_divider_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Wrapper Style
		$this->add_control(
			'thf_wrapper_style_title_options',
			[
				'label' => esc_html__( 'Wrapper Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_search_wrapper',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_wrapper_padding_hover',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_header_btn_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_search_btn_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				// 'separator' => 'before',
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thf_search_form_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_btn_border-radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form .bwdsb-form input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		// Search for form end
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_admin_gravader',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_admin_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_admin_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_admin_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_admin_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_hover_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author:hover a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_admin_padding_hover',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author:hover a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'thf_menus_admin_size',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_menus_hamburger_menu',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_hamburger_menu_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['thf_header_footer_button_link']['url'] ) ) {
			$this->add_link_attributes( 'thf_header_footer_button_link', $settings['thf_header_footer_button_link'] );
		}
		
		$thf_style_section_ctrl = $settings['thf_header_footer_styles'];
		$menus = $this->get_available_menus();
		if ( ! empty( $menus ) ) {
			$thf_choose_the_menu = $settings['thf_choose_main_menu'];
		} else{
			$thf_choose_the_menu = '';
		}
		$thf_nav_logo_switcher = $settings['thf_nav_logo_switcher'];
		$thf_tagline = $settings['thf_tagline_switcher'];
		$thf_search_form_style_selection = $settings['thf_search_form_style_selection'];
		if($thf_search_form_style_selection === $thf_search_form_style_selection){
			$thf_search_class = $thf_search_form_style_selection;
		}
		$thf_nav_search_form_text = $settings['thf_nav_search_form_text'];
		$thf_button_style_selection = $settings['thf_button_style_selection'];
		$thf_header_footer_btn_type = $settings['thf_header_footer_btn_type'];
		$thf_hamburger = $settings['thf_hamburger_menu_icon']['value'];
		$thf_menu_brkPoint = $settings['thf_mobile_menu_breakpoint'];

		$thf_choose_menu_type = $settings['thf_choose_menu_type'];
		$thf_choose_logo_link = $settings['thf_choose_logo_link'];
		$thf_custom_logo_text = $settings['thf_custom_logo_text'];
		
		$thf_sticky_h =$settings['thf_header_type'];
		$thf_dk_scroll = '';
		if('yes' === $thf_sticky_h){
			$thf_dk_scroll = $settings['thf_menus_scroll_desktop_distance'];
		}


		
		$thf_id_menu = $settings['thf_menu_alignment'];
		if($thf_id_menu === $thf_id_menu){
			$thf_menu_align = $thf_id_menu;
		} else{
			$thf_menu_align = ' ';
		}
		$thf_id_button = $settings['thf_nav_button_alignment'];
		if($thf_id_button === $thf_id_button){
			$thf_button_align = $thf_id_button;
		} else{
			$thf_button_align = ' ';
		}

		$thf_mm_alignment = $settings['thf_mobile_menu_alignment'];
		if('left' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_left';
		} elseif('center' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_center';
		} elseif('right' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_right';
		} else{$thf_mobile_align = ' ';}

		$thf_nav_button_text = $settings['thf_nav_button_text'];
		$thf_social_icon_selection = $settings['thf_social_icon_selection'];
		if($thf_social_icon_selection === $thf_social_icon_selection){
			$thf_social_icon = $thf_social_icon_selection;
		}

		$thf_submenu_indicator_alignment = $settings['thf_submenu_indicator_alignment'];
		if($thf_submenu_indicator_alignment === $thf_submenu_indicator_alignment){
			$thf_menu_indi_align = $thf_submenu_indicator_alignment;
		} else{
			$thf_menu_indi_align = ' ';
		}
		$thf_main_menu_icon = $settings['thf_main_menu_icon'];
		if($thf_main_menu_icon === $thf_main_menu_icon){
			$thf_menu_i_main = $thf_main_menu_icon;
		}
		$thf_child_menu_icon = $settings['thf_child_menu_icon'];
		if($thf_child_menu_icon === $thf_child_menu_icon){
			$thf_menu_i_child = $thf_child_menu_icon;
		}
		$thf_menu_depth = $settings['thf_menu_depth'];
		$settings = $this->get_active_settings();
		$args = [
			'echo' => false,
			'menu' => $thf_choose_the_menu,
			'container' => 'div',
			'container_class' => 'menu-items',
			'menu_class' => 'thf-menu-part-item',
			'fallback_cb' => '__return_empty_string',
			'depth' => $thf_menu_depth,
		];
		$thf_header_style = $settings['thf_header_footer_styles'];
		?><div class="<?php echo $thf_header_style; ?>"><?php
		// Menu header top ber
		$thf_header_top = $settings['thf_header_top_switcher'];
		switch ($thf_header_top) {
			case "yes":
				include( __DIR__ . '/templates/its-top.php' );
				break;
		}
		// Menu HTML
		$menu_html = wp_nav_menu( $args );
		switch ($thf_style_section_ctrl) {
			case "$thf_style_section_ctrl":
				include( __DIR__ . '/templates/'.$thf_style_section_ctrl.'.php' );
				break;
		}
		?></div><?php
	}
}
