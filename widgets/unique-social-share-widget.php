<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (!defined('ABSPATH')){ 
	exit; 
} // Exit if accessed directly

class USShareWidget extends Widget_Base{

	public function get_name(){
		return esc_html__('UniqueSocialShare', BWDEB_ROOT_AUTHOR_PRO);
	}
	public function get_title(){
		return esc_html__('Unique Social Share', BWDEB_ROOT_AUTHOR_PRO);
	}
	public function get_icon(){
		return 'bwdeb-elementor-bundle social-share';
	}
	public function get_categories(){
		return ['bwdthebest_general_category'];
	}
	public function get_keywords() {
		return ['social', 'shares', 'social-share', 'social-media', 'media', 'plugins', 'developer', 'elementor'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_usshares',
			array(
				'label' => esc_html__( 'Content Settings', BWDEB_ROOT_AUTHOR_PRO ),
			)
		);
		$this->add_control(
			'usshare_presets_style',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
			]
		);
		$this->add_control(
			'usshare_main_show_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'usshare_main_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Social Share Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'     => [
					'active' => true,
				],
				'label_block' => true,
				'condition' => [
					'usshare_main_show_title' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_whole_social_icons',
			array(
				'label' => esc_html__( 'Social Share', BWDEB_ROOT_AUTHOR_PRO ),
			)
		);
		
		$this->add_control(
			'usshare_icon_btn_position',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'inline',
				'options' => [
					'inline' => esc_html__( 'Inline', BWDEB_ROOT_AUTHOR_PRO ),
					'floating' => esc_html__( 'Floating', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'usshare-icon-pos-',
			]
		);
		$this->add_control(
			'usshare_icon_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'default' => 'left',
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
				],
				'prefix_class' => 'usshare-icon-align-',
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'gap: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_vertical_pos',
			[
				'label' => esc_html__( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_horizontal_pos_left',
			[
				'label' => esc_html__( 'Horizontal Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
					'usshare_icon_align' => 'left',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_horizontal_pos_right',
			[
				'label' => esc_html__( 'Horizontal Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
					'usshare_icon_align' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-h-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container, {{WRAPPER}} .usshare_btn_wrap.usshare_style17' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'inline',
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'usshare_social_type',
			[
				'label'   => esc_html__( 'Networks', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'facebook'    => esc_html__( 'Facebook', BWDEB_ROOT_AUTHOR_PRO ),
					'twitter'     => esc_html__( 'Twitter', BWDEB_ROOT_AUTHOR_PRO ),
					'linkedin'    => esc_html__( 'Linkedin', BWDEB_ROOT_AUTHOR_PRO ),
					'instagram'   => esc_html__( 'Instagram', BWDEB_ROOT_AUTHOR_PRO ),
					'email'       => esc_html__( 'Email', BWDEB_ROOT_AUTHOR_PRO ),
					'whatsapp'    => esc_html__( 'Whatsapp', BWDEB_ROOT_AUTHOR_PRO ),
					'youtube'     => esc_html__( 'Youtube', BWDEB_ROOT_AUTHOR_PRO ),
					'telegram'    => esc_html__( 'Telegram', BWDEB_ROOT_AUTHOR_PRO ),
					'viber'       => esc_html__( 'Viber', BWDEB_ROOT_AUTHOR_PRO ),
					'pinterest'   => esc_html__( 'Pinterest', BWDEB_ROOT_AUTHOR_PRO ),
					'tumblr'      => esc_html__( 'Tumblr', BWDEB_ROOT_AUTHOR_PRO ),
					'reddit'      => esc_html__( 'Reddit', BWDEB_ROOT_AUTHOR_PRO ),
					'vk'          => esc_html__( 'VK', BWDEB_ROOT_AUTHOR_PRO ),
					'xing'        => esc_html__( 'Xing', BWDEB_ROOT_AUTHOR_PRO ),
					'get-pocket'  => esc_html__( 'Get Pocket', BWDEB_ROOT_AUTHOR_PRO ),
					'digg'        => esc_html__( 'Digg', BWDEB_ROOT_AUTHOR_PRO ),
					'stumbleupon' => esc_html__( 'StumbleUpon', BWDEB_ROOT_AUTHOR_PRO ),
					'weibo'       => esc_html__( 'Weibo', BWDEB_ROOT_AUTHOR_PRO ),
					'renren'      => esc_html__( 'Renren', BWDEB_ROOT_AUTHOR_PRO ),
					'skype'       => esc_html__( 'Skype', BWDEB_ROOT_AUTHOR_PRO ),
					'quora'       => esc_html__( 'Quora', BWDEB_ROOT_AUTHOR_PRO ),
					'snapchat'      => esc_html__( 'Snapchat', 'elementskit-lite' ),
					'flicker'       => esc_html__( 'Flicker', 'elementskit-lite' ),
					'odnoklassniki' => esc_html__( 'Odnoklassniki', 'elementskit-lite' ),
					'moimir'        => esc_html__( 'Moimir', 'elementskit-lite' ),
					'blogger'       => esc_html__( 'Blogger', 'elementskit-lite' ),
					'evernote'      => esc_html__( 'Evernote', 'elementskit-lite' ),
					'delicious'     => esc_html__( 'Delicious', 'elementskit-lite' ),
					'surfingbird'   => esc_html__( 'Surfingbird', 'elementskit-lite' ),
					'liveinternet'  => esc_html__( 'Liveinternet', 'elementskit-lite' ),
					'buffer'        => esc_html__( 'Buffer', 'elementskit-lite' ),
					'instapaper'    => esc_html__( 'Instapaper', 'elementskit-lite' ),
					'wordpress'     => esc_html__( 'WordPress', 'elementskit-lite' ),
					'baidu'         => esc_html__( 'Baidu', 'elementskit-lite' ),
					'line'          => esc_html__( 'Line', 'elementskit-lite' ),
				],
				'default' => 'facebook',
			]
		);
		$repeater->add_control(
			'usshare_icon_content_type',
			[
				'label' => esc_html__( 'Content Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icontext' => esc_html__( 'Icon & Text', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$repeater->add_control(
			'usshare_icon_position',
			[
				'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'before',
				'options' => [
					'before' => esc_html__( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
					'after' => esc_html__( 'After', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_icon_spacing',
			[
				'label' => esc_html__( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link.icontext' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_btn_iocn_text',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook' , BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your social title' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_btn_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook' , BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your social title' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_iconstext',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icons',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_custom_link',
			[
				'label'       => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'https://your-share-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::URL,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
			]
		);
		// Hover control start for box
		$repeater->start_controls_tabs(
			'usshare_social_box_style_share'
		);
		$repeater->start_controls_tab(
			'usshare_social_box_normal_share',
			[
				'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_icon_text_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_text_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_text_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_text_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_color',
			[
				'label' => esc_html__('Icon Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color',
				'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow',
				'label' => esc_html__('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'usshare_social_box_hover_tab',
			[
				'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_icontext_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_text_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_text_hover_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_text_hover_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_hover_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_hover_color',
			[
				'label' => esc_html__('Icon Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hover',
				'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover, {{WRAPPER}} {{CURRENT_ITEM}}.usshare_btn_link_wrap a:hover::before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_hover',
				'label' => esc_html__('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_hover',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_box_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'usshare_all_social_btn',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-facebook',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'facebook',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-x-twitter',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'twitter',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-linkedin',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'linkedin',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-whatsapp',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'whatsapp',
					],
				],
				'title_field' => '{{{ usshare_social_type }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_social_title_style',
			[
				'label' => esc_html__( 'Wrapper', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'usshare_content_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-h-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'text-align: {{VALUE}};',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'usshare_title_style_post'
		);
		$this->start_controls_tab(
			'usshare_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hovere',
				'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'usshare_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hoverr',
				'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_style1:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_wraa',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'usshare_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_wraa',
				'label' => esc_html__('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_responsive_control(
			'usshare_title_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_title_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render(){
		$settings = $this->get_settings_for_display();

		echo '<div class="usshare_btn_wrap usshare_'.$settings['usshare_presets_style'].'">';
		if($settings['usshare_main_show_title'] === 'yes') {
			echo '<span class="usshare_share_text">'.$settings['usshare_main_title'].'</span>';
		}
			echo '<div class="main-container">';
				foreach (  $settings['usshare_all_social_btn'] as $usshare_btn ) {
					$types = $usshare_btn['usshare_social_type'];
					$social_title = $usshare_btn['usshare_btn_title'];
					$social_icon_text = $usshare_btn['usshare_btn_iocn_text'];
					$social_cont = $usshare_btn['usshare_icon_content_type'];
					$icon_pos = $usshare_btn['usshare_icon_position'];
					$current = get_the_permalink();
					$titlE = get_the_title();
					$link = $usshare_btn['usshare_custom_link']['url'];
					if($types == 'facebook'): $usshare_Alink = (!empty($link))?'https://www.facebook.com/sharer/sharer.php?u='.$link:'https://www.facebook.com/sharer/sharer.php?u='.$current; 
						elseif($types == 'twitter'): $usshare_Alink = (!empty($link))?'https://twitter.com/intent/tweet?text='.$link:'https://twitter.com/intent/tweet?text='.$titlE.'&amp;url='.$current; 
							elseif($types == 'whatsapp'): $usshare_Alink = (!empty($link))?'https://api.whatsapp.com/send?text='.$link:'https://api.whatsapp.com/send?text='.$titlE.$current; 
								elseif($types == 'linkedin'): $usshare_Alink = (!empty($link))?'https://www.linkedin.com/sharing/share-offsite/?url='.$link:'https://www.linkedin.com/sharing/share-offsite/?url='.$current; 
						elseif($types == 'reddit'): $usshare_Alink = (!empty($link))?'https://www.reddit.com/submit?url='.$link:'https://www.reddit.com/submit?url='.$current.'&amp;title='.$titlE; 
							elseif($types == 'tumblr'): $usshare_Alink = (!empty($link))?'https://www.tumblr.com/share/link?url='.$link:'https://www.tumblr.com/share/link?url='.$current.'&amp;name='. $titlE.'&amp;description='.get_the_excerpt(); 
								elseif($types == 'telegram'): $usshare_Alink = (!empty($link))?'https://telegram.me/share/url?url='.$link:'https://telegram.me/share/url?url='.$current.'&amp;text='.$titlE; 
									elseif($types == 'email'): $usshare_Alink = (!empty($link))?'mailto:?subject='.$link:'mailto:?subject='.$titlE.'&body='.$current; 
						elseif($types == 'viber'): $usshare_Alink = (!empty($link))?'viber://forward?text='.$link:'viber://forward?text='.$titlE.$current; 
							elseif($types == 'vk'): $usshare_Alink = (!empty($link))?'http://vk.com/share.php?url='.$link:'http://vk.com/share.php?url='.$current; 
								elseif($types == 'xing'): $usshare_Alink = (!empty($link))?'https://www.xing.com/spi/shares/new?url='.$link:'https://www.xing.com/spi/shares/new?url='.$current; 
									elseif($types == 'pocket'): $usshare_Alink = (!empty($link))?'https://getpocket.com/save?url='.$link:'https://getpocket.com/save?url='.$current.'&title='.$titlE; 
						elseif($types == 'digg'): $usshare_Alink = (!empty($link))?'http://digg.com/submit?url='.$link:'http://digg.com/submit?url='.$current; 
							elseif($types == 'stumbleupon'): $usshare_Alink = (!empty($link))?'http://www.stumbleupon.com/submit?url='.$link:'http://www.stumbleupon.com/submit?url='.$current.'&title='.$titlE; 
								elseif($types == 'weibo'): $usshare_Alink = (!empty($link))?'http://service.weibo.com/share/share.php?url='.$link:'http://service.weibo.com/share/share.php?url='.$current.'&title='.$titlE; 
									elseif($types == 'renren'): $usshare_Alink = (!empty($link))?'http://widget.renren.com/dialog/share?resourceUrl='.$link:'http://widget.renren.com/dialog/share?resourceUrl='.$current.'&title='.$titlE; 
						elseif($types == 'skype'): $usshare_Alink = (!empty($link))?'skype:?chat&topic='.$link:'skype:?chat&topic='.$titlE.'&add='.$current; 
							elseif($types == 'pinterest'): $usshare_Alink = (!empty($link))?'https://pinterest.com/pin/create/button/?url='.$link:'https://pinterest.com/pin/create/button/?url='.$current.'&amp;media='.wp_get_attachment_url( get_share_thumbnail_id($share->ID) ).'&amp;description='.get_the_excerpt(); 
								elseif($types == 'youtube'): $usshare_Alink = (!empty($link))?'https://www.youtube.com/share?url='.$link:'https://www.youtube.com/share?url='.$current; 
									elseif($types == 'instagram'): $usshare_Alink = (!empty($link))?'https://www.instagram.com/share?url='.$link:'https://www.instagram.com/share?url='.$current.'&title='.$titlE; 
						elseif($types == 'quora'): $usshare_Alink = (!empty($link))?'http://www.quora.com/share?url='.$link:'http://www.quora.com/share?url='.$current.'&title='.$titlE; 
							elseif($types == 'snapchat'): $usshare_Alink = (!empty($link))?'https://www.snapchat.com/share?url='.$link:'https://www.snapchat.com/share?url='.$current; 
								elseif($types == 'flickr'): $usshare_Alink = (!empty($link))?'https://www.flickr.com/search/?q='.$link:'https://www.flickr.com/search/?q='.$titlE; 
									elseif($types == 'odnoklassniki'): $usshare_Alink = (!empty($link))?'https://connect.ok.ru/offer?url='.$link:'https://connect.ok.ru/offer?url='.urlencode($current); 
						elseif($types == 'blogger'): $usshare_Alink = (!empty($link))?'https://www.blogger.com/share?u='.$link:'https://www.blogger.com/share?u='.urlencode($current); 
							elseif($types == 'evernote'): $usshare_Alink = (!empty($link))?'https://www.evernote.com/clip.action?url='.$link:'https://www.evernote.com/clip.action?url='.urlencode($current).'&title='.urlencode($titlE); 
								elseif($types == 'delicious'): $usshare_Alink = (!empty($link))?'https://del.icio.us/post?url='.$link:'https://del.icio.us/post?url='.urlencode($current).'&amp;title='.urlencode($titlE); 
									elseif($types == 'surfingbird'): $usshare_Alink = (!empty($link))?'http://surfingbird.ru/share?url='.$link:'http://surfingbird.ru/share?url='.$current.'&title='.$titlE; 
						elseif($types == 'liveinternet'): $usshare_Alink = (!empty($link))?'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$link:'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$current.'&cntitle='.$titlE; 
							elseif($types == 'buffer'): $usshare_Alink = (!empty($link))?'https://bufferapp.com/add?url='.$link:'https://bufferapp.com/add?url='.urlencode($current).'&amp;text='.urlencode($titlE); 
								elseif($types == 'instapaper'): $usshare_Alink = (!empty($link))?'http://www.instapaper.com/hello2?url='.$link:'http://www.instapaper.com/hello2?url='.urlencode($current).'&title='.urlencode($titlE);
									elseif($types == 'wordpress'): $usshare_Alink = (!empty($link))?'https://wordpress.com/press-this.php?u='.$link:'https://wordpress.com/press-this.php?u='.urlencode($current).'&t='.urlencode($titlE);
						elseif($types == 'baidu'): $usshare_Alink = (!empty($link))?'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.$link:'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.esc_url($current).'&title='.esc_attr($titlE);
							elseif($types == 'line'): $usshare_Alink = (!empty($link))?'https://line.me/R/msg/text/?'.$link:'https://line.me/R/msg/text/?'.$titlE.'%0A'.$current;
					endif;
					echo '<div class="usshare_btn_link_wrap elementor-repeater-item-' . esc_attr( $usshare_btn['_id'] ) . '">';
						?><a class="usshare_btn_link <?php echo $social_cont; ?> <?php echo $icon_pos; ?>" href="<?php echo $usshare_Alink; ?>" onclick="window.open(this.href, '_blank', 'width=400,height=400,left='+screen.width/2.5+',top='+screen.height/3); return false;"><?php
						if($usshare_btn['usshare_icon_content_type'] === 'icontext') :
							 \Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_iconstext'], [ 'aria-hidden' => 'true' ] ); 
							echo esc_html($social_icon_text);
						elseif($usshare_btn['usshare_icon_content_type'] === 'icon') :	
						 \Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_icons'], [ 'aria-hidden' => 'true' ] ); 
						elseif($usshare_btn['usshare_icon_content_type'] === 'text') :
							echo esc_html($social_title);
						endif;		
						echo '</a>';
					echo '</div>';
				}
			echo '</div>';
    echo '</div>';
	}
}
