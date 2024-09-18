<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTZTabs extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTabsZone', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Creative Tabs', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-tab';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtz_tabs_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdtz_tabs_zone_style',
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
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_item_settings_section',
			[
				'label' => esc_html__( 'Tab Item Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdtz_tab-items_heading',
			[
				'label' => esc_html__( 'Tab Item', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_tabs_title_default', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Dev' , BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'bwdtz_default_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', BWDEB_ROOT_AUTHOR_PRO),
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_default_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdtz_tabs_title_id', [
				'label' => esc_html__( 'Name ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_title', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Web Developer' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', BWDEB_ROOT_AUTHOR_PRO),
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'bwdtz_tabs',
			[
				'label' => esc_html__( 'Balance Tab Item and Item Info', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_title' => esc_html__( 'Development', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Software', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Programming', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdtz_tabs_title }}}',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_info_settings_section',
			[
				'label' => esc_html__( 'Item Info Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdtz_tab_item_info_heading',
			[
				'label' => esc_html__( 'Item Info', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_hide_info_title_first',
			[
				'label' => esc_html__( 'Show Title Here', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', BWDEB_ROOT_AUTHOR_PRO),
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_tabs_description_default', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus?' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);

		$sk_repeater = new \Elementor\Repeater();
		$sk_repeater->add_control(
			'bwdtz_tabs_title2_id', [
				'label' => esc_html__( 'Name ID', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_hide_info_title',
			[
				'label' => esc_html__( 'Show Title Here', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', BWDEB_ROOT_AUTHOR_PRO),
				'yes' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_title2', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdtz_hide_info_title' => 'yes'
				],
				'default' => esc_html__( 'Development' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_description2', [
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_tabs2',
			[
				'label' => esc_html__( 'Balance Tab Item and Item Info', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $sk_repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #1', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #2', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #3', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdtz_tabs_description2 }}}',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_item_content_style',
			[
				'label' => esc_html__( 'Tab Item Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtz_tabs_items_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdtz-tab-nineteen .bwdtz-nav-tabs',
				'condition' => [
					'bwdtz_tabs_zone_style' => 'style19',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_icon_item_color',
			[
				'label' => esc_html__( 'Icon Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-icon30 i' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => 'style30',
				],
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwdtz_tabs_default_title_style_tabs'
		);
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdtz_box_default_title_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-bg-btn:before' => 'background-color: {{VALUE}}; background: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-before:before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i',
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_normal_progress_color',
			[
				'label' => esc_html__( 'Progress Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-progress-normal, {{WRAPPER}} .bwdtz-pgrs-before:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-pgrs-line' => 'border-right-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => ['style18', 'style21', 'style22', 'style24'],
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_normal_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn-border' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-bg-style17:before, {{WRAPPER}} .bwdtz-normal-btn-bg-style26:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_btn_normal_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-tab-button',
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_hover_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdtz_box_def_active_default_title_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .active p.bwdtz-active-btn, {{WRAPPER}} .bwd-tab-list.active .bwd-tab-button, {{WRAPPER}} .bwd-tab-list.active .bwd-tab-button:hover, {{WRAPPER}} .bwd-tab-list .bwd-tab-button:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-active-puls-color:before, {{WRAPPER}} .bwdtz-style29:before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_def_active_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active:nth-child(2) .bwdtz-active-btn, {{WRAPPER}} .bwdtz-active-btn.active, {{WRAPPER}} .active .bwdtz-active-btn:hover, {{WRAPPER}} .active p.bwdtz-active-btn, {{WRAPPER}} .active .bwdtz-active-btn, {{WRAPPER}} .bwdtz-active-btn:hover, {{WRAPPER}} .bwdtz-active-btn-after:after, {{WRAPPER}} .bwdtz-active-btn-before:before, {{WRAPPER}} .active .bwdtz-active-btn-before-style17:before, {{WRAPPER}} .bwdtz-style29:after' => 'background-color: {{VALUE}}; background: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-arrow-hover-active:hover:after, {{WRAPPER}} .active:after, {{WRAPPER}} .active .bwdtz-active-btn-after:after, {{WRAPPER}} .bwdtz-active-btn-before-style3:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .active .bwdtz-active-btn-after-style28:after' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .active .bwdtz-style5-after:after, {{WRAPPER}} .active .bwdtz-style5-before:before, {{WRAPPER}} .bwdtz-style5-after:hover:after, {{WRAPPER}} .bwdtz-style5-before:hover:before, {{WRAPPER}} .bwdtz-style5-after:after, {{WRAPPER}} .bwdtz-style5-before:before' => 'border-left-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-s-a:after' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz__def_active_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .bwdtz-active-btn.active',
				'default' => [
					'color' => 'transparent',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box__def_active_default_title_name_typography',
				'selector' => '{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .bwdtz-active-btn',
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_active_progress_color',
			[
				'label' => esc_html__( 'Progress Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-progress-active, {{WRAPPER}} .bwdtz-progress-active-b.active:before, {{WRAPPER}} .bwdtz-progress-active-b.active:hover:before, {{WRAPPER}} .bwdtz-progress-active-b:hover:before, {{WRAPPER}} .bwdtz-progress-active-a:hover:after, {{WRAPPER}} .bwdtz-progress-active-a:after, {{WRAPPER}} .bwdtz-progress-active-b:before, {{WRAPPER}} .bwdtz-normal-btn-bg-style26:after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => ['style18', 'style21', 'style22', 'style24', 'style25', 'style26'],
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_active_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active .bwdtz-normal-btn-border' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-outline:before' => 'outline-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-active-btn1, {{WRAPPER}} .bwdtz-active-btn1-after:after, {{WRAPPER}} .bwdtz-active-btn1-before:before, {{WRAPPER}} .active .bwdtz-active-btn-after-style28:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_btn_active_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .active .bwd-tab-button',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_info_content_style',
			[
				'label' => esc_html__( 'Item Info Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_name_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-style' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_profile_info_background_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-bg, {{WRAPPER}} .bwdtz-tab-style14' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-border-top, {{WRAPPER}} .bwdtz-border-top:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-border-bottom, {{WRAPPER}} .bwdtz-border-bottom:after' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_info_default_info_shadow',
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtz-item-info-style',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_info_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-item-info-style',
			]
		);


		$this->add_control(
			'bwdtz_box_default_info_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-border-after:after, {{WRAPPER}} .bwdtz-item-info-border-before:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-item-info-border-before-color:before, {{WRAPPER}} .bwdtz-tab-twenty-one .bwdtz-tab-content' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-item-info-border1' => 'outline-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdtz-info-boxshadow',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_wrapper_style',
			[
				'label' => esc_html__( 'Wrapper Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtz_tabs_box_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdtz-tab-common',
			]
		);
		$this->add_responsive_control(
            'bwdtz_tabs_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtz-tab-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdtz_tabs_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtz-tab-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section(); 
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdtz_common_styles = $settings['bwdtz_tabs_zone_style'];
		if('style1' === $bwdtz_common_styles ){
	   ?>
	   	<div class="bwdtz-tab-one bwdtz-tab-common">
			<div class="bwdtz-nav">
				<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-nav-link bwd-tab-list active" id="home-tab"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-nav-link bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active" id="home">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	   <?php
	   } elseif('style2' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-two bwdtz-tab-common">
			<div class="bwdtz-nav">
			<div class="bwd-tab-list active" id="Section1"><div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-nav-link bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style3' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-three bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-three-btn-1"><div class="bwdtz-normal-btn bwdtz-active-btn-before-style3 bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-three-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn-before-style3 bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-border-top bwdtz-border-bottom">
				<div class="bwdtz-tab-pane active">
				<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style4' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-four bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwdtz-arrow-hover-active bwd-tab-list active" id="tab-four-btn-1"><div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-active-btn-after bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-arrow-hover-active bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-four-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-active-btn-after bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content">
				<div class="bwdtz-item-info-style bwdtz-item-info-bg bwdtz-tab-pane active"><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-item-info-style bwdtz-item-info-bg bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
				<?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style5' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-five bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-five-btn-1"><div class="bwdtz-style5-after bwdtz-style5-before bwdtz-normal-btn  bwdtz-active-btn bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-five-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-style5-after bwdtz-style5-before bwdtz-normal-btn bwd-tab-button bwdtz-active-btn"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-item-info-style bwdtz-item-info-bg bwdtz-tab-content">
				<div class="bwdtz-tab-pane active" id="Section1">
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style6' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-six bwdtz-tab-common">
			<div class="bwdtz-item-info-border-before bwdtz-nav-tabs">
				<div class="bwd-tab-list active" id="tab-six-btn-1"><div class="bwdtz-normal-btn bwdtz-active-btn bwd-tab-button"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class=" bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane Section1 active">
					<p class=" bwdtz-item-info-style"><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane Section2 bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<p class=" bwdtz-item-info-style"><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style7' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-seven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?>
						<p class="bwdtz-active-btn"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></p>
					</div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } ?><p class="bwdtz-active-btn"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></p></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active ">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style8' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eight bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active "><div class="bwdtz-item-info-border-before bwdtz-item-info-border-after bwdtz-normal-btn bwdtz-active-btn bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-item-info-border-before bwdtz-item-info-border-after bwdtz-normal-btn bwdtz-active-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-item-info-border-before-color">
				<div class="bwdtz-tab-pane active ">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style9' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-nine bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwdtz-s-a bwd-tab-list active"><div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-normal-btn-border bwd-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-s-a bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-normal-btn-border bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style10' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-ten bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active">
					<div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwdtz-active-btn bwdtz-tab-button"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div>
				</div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwdtz-active-btn bwdtz-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active ">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><div><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><div class="bwdtz-tab-title"><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></div> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
        	</div>
        </div>
		<?php
	   } elseif('style11' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eleven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-normal-btn bwdtz-active-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style12' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twelve bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div  class="bwd-tab-list active"><div class="bwdtz-active-btn-after bwdtz-active-btn-before bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn-after bwdtz-active-btn-before bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style13' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-puls-color bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-puls-color bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style14' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-fourteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-style14 bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-style14 bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style15' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-fifteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-item-info-border-after bwdtz-item-info-border-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-item-info-border-after bwdtz-item-info-border-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style16' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-sixteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-normal-btn-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style17' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-seventeen bwdtz-tab-common">
			<div class="bwdtz-normal-btn-bg-style17 bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn-before-style17 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn-before-style17 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style18' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-eighteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-progress-normal bwdtz-progress-bar">
				<span class="bwdtz-progress-active bwdtz-progress-bar-inner"></span>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style19' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-nineteen bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style20' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div  class="bwd-tab-list active"><div class="bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style ">
				<div class="bwdtz-item-info-bg bwdtz-info-boxshadow bwdtz-tab-pane active">
					<h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-item-info-bg bwdtz-info-boxshadow bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
    	</div>
		<?php
	   } elseif('style21' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-one bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-progress-normal bwdtz-progress-bar">
				<span class="bwdtz-progress-active bwdtz-progress-bar-inner"></span>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style22' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-two bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwdtz-pgrs-before bwd-tab-list active"><div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-pgrs-before bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } ?> </div></div>
				<?php
					}
				}
				?>
				<div class="bwdtz-progress-normal bwdtz-progress-bar">
					<span class="bwdtz-progress-active bwdtz-progress-bar-inner"></span>
				</div>
			</div>

			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow bwdtz-item-info-border1">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style23' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-three bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn1-after bwdtz-active-btn1-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn1-after bwdtz-active-btn1-before bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style24' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-four bwdtz-tab-common">
			<div class="bwdtz-pgrs-line bwdtz-nav-tabs">
				<div class="bwd-tab-list active bwdtz-progress-active-b"><div class="bwdtz-normal-btn-outline bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . ' bwdtz-progress-active-b" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn-outline bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style25' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-five bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-progress-active-b bwdtz-progress-active-a bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-progress-active-b bwdtz-progress-active-a bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style26' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-six bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-normal-btn-bg-style26 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn-bg-style26 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style27' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-seven bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style28' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-eight bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn-after-style28 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-normal-bg-btn bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn-after-style28 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style29' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-twenty-nine bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-style29 bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-style29 bwdtz-normal-btn-border bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style30' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirty bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-icon30 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-icon30 bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php } ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   } elseif('style31' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-thirty-one bwdtz-tab-common">
			<div class="bwdtz-nav-tabs">
				<div class="bwd-tab-list active"><div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button" href="#Section1"><?php if('yes' === $settings['bwdtz_default_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($settings['bwdtz_default_tabs_item_icon']['value']); ?>"></i><?php } ?><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="tab-six-btn-2 '. $bwdtz_elementor['bwdtz_tabs_title_id'] .'-tab">'; ?>
				<div class="bwdtz-active-btn bwdtz-normal-btn bwd-tab-button"><?php if('yes' === $bwdtz_elementor['bwdtz_tabs_item_icon_switcher']){ ?><i class="<?php echo esc_attr($bwdtz_elementor['bwdtz_tabs_item_icon']['value']); ?>"></i><?php }  echo esc_html__($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg bwdtz-info-boxshadow">
				<div class="bwdtz-tab-pane active">
					<?php if('yes' === $settings['bwdtz_hide_info_title_first']){ ?><h3><?php echo esc_html__($settings['bwdtz_tabs_title_default']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="Section2 '. $bwdtz_elementor2['bwdtz_tabs_title2_id'] .'">'; ?>
					<?php if('yes' === $bwdtz_elementor2['bwdtz_hide_info_title']){ ?><h3><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_info_title2']); ?></h3> <?php } ?>
					<p><?php echo esc_html__($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	   }
	}
}			 
		
		