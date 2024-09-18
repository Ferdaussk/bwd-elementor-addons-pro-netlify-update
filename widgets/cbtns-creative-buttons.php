<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class CBTNSCreativeButtons extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameCreativeButtons', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Creative Buttons', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-dual-button';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'cbtns_buttons_content_section',
			[
				'label' => esc_html__( 'Buttons Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'cbtns_style_selection',
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
					'style32' => esc_html__( 'Style 32', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 33', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 34', BWDEB_ROOT_AUTHOR_PRO ),
					'style35' => esc_html__( 'Style 35', BWDEB_ROOT_AUTHOR_PRO ),
					'style36' => esc_html__( 'Style 36', BWDEB_ROOT_AUTHOR_PRO ),
					'style37' => esc_html__( 'Style 37', BWDEB_ROOT_AUTHOR_PRO ),
					'style38' => esc_html__( 'Style 38', BWDEB_ROOT_AUTHOR_PRO ),
					'style39' => esc_html__( 'Style 39', BWDEB_ROOT_AUTHOR_PRO ),
					'style40' => esc_html__( 'Style 40', BWDEB_ROOT_AUTHOR_PRO ),
					'style41' => esc_html__( 'Style 41', BWDEB_ROOT_AUTHOR_PRO ),
					'style42' => esc_html__( 'Style 42', BWDEB_ROOT_AUTHOR_PRO ),
					'style43' => esc_html__( 'Style 43', BWDEB_ROOT_AUTHOR_PRO ),
					'style44' => esc_html__( 'Style 44', BWDEB_ROOT_AUTHOR_PRO ),
					'style45' => esc_html__( 'Style 45', BWDEB_ROOT_AUTHOR_PRO ),
					'style46' => esc_html__( 'Style 46', BWDEB_ROOT_AUTHOR_PRO ),
					'style47' => esc_html__( 'Style 47', BWDEB_ROOT_AUTHOR_PRO ),
					'style48' => esc_html__( 'Style 48', BWDEB_ROOT_AUTHOR_PRO ),
					'style49' => esc_html__( 'Style 49', BWDEB_ROOT_AUTHOR_PRO ),
					'style50' => esc_html__( 'Style 50', BWDEB_ROOT_AUTHOR_PRO ),
					'style51' => esc_html__( 'Style 51', BWDEB_ROOT_AUTHOR_PRO ),
					'style52' => esc_html__( 'Style 52', BWDEB_ROOT_AUTHOR_PRO ),
					'style53' => esc_html__( 'Style 53', BWDEB_ROOT_AUTHOR_PRO ),
					'style54' => esc_html__( 'Style 54', BWDEB_ROOT_AUTHOR_PRO ),
					'style55' => esc_html__( 'Style 55', BWDEB_ROOT_AUTHOR_PRO ),
					'style56' => esc_html__( 'Style 56', BWDEB_ROOT_AUTHOR_PRO ),
					'style57' => esc_html__( 'Style 57', BWDEB_ROOT_AUTHOR_PRO ),
					'style58' => esc_html__( 'Style 58', BWDEB_ROOT_AUTHOR_PRO ),
					'style59' => esc_html__( 'Style 59', BWDEB_ROOT_AUTHOR_PRO ),
					'style60' => esc_html__( 'Style 60', BWDEB_ROOT_AUTHOR_PRO ),
					'style61' => esc_html__( 'Style 61', BWDEB_ROOT_AUTHOR_PRO ),
					'style62' => esc_html__( 'Style 62', BWDEB_ROOT_AUTHOR_PRO ),
					'style63' => esc_html__( 'Style 63', BWDEB_ROOT_AUTHOR_PRO ),
					'style64' => esc_html__( 'Style 64', BWDEB_ROOT_AUTHOR_PRO ),
					'style65' => esc_html__( 'Style 65', BWDEB_ROOT_AUTHOR_PRO ),
					'style66' => esc_html__( 'Style 66', BWDEB_ROOT_AUTHOR_PRO ),
					'style67' => esc_html__( 'Style 67', BWDEB_ROOT_AUTHOR_PRO ),
					'style68' => esc_html__( 'Style 68', BWDEB_ROOT_AUTHOR_PRO ),
					'style69' => esc_html__( 'Style 69', BWDEB_ROOT_AUTHOR_PRO ),
					'style70' => esc_html__( 'Style 70', BWDEB_ROOT_AUTHOR_PRO ),
					'style71' => esc_html__( 'Style 71', BWDEB_ROOT_AUTHOR_PRO ),
					'style72' => esc_html__( 'Style 72', BWDEB_ROOT_AUTHOR_PRO ),
					'style73' => esc_html__( 'Style 73', BWDEB_ROOT_AUTHOR_PRO ),
					'style74' => esc_html__( 'Style 74', BWDEB_ROOT_AUTHOR_PRO ),
					'style75' => esc_html__( 'Style 75', BWDEB_ROOT_AUTHOR_PRO ),
					'style76' => esc_html__( 'Style 76', BWDEB_ROOT_AUTHOR_PRO ),
					'style77' => esc_html__( 'Style 77', BWDEB_ROOT_AUTHOR_PRO ),
					'style78' => esc_html__( 'Style 78', BWDEB_ROOT_AUTHOR_PRO ),
					'style79' => esc_html__( 'Style 79', BWDEB_ROOT_AUTHOR_PRO ),
					'style80' => esc_html__( 'Style 80', BWDEB_ROOT_AUTHOR_PRO ),
					'style81' => esc_html__( 'Style 81', BWDEB_ROOT_AUTHOR_PRO ),
					'style82' => esc_html__( 'Style 82', BWDEB_ROOT_AUTHOR_PRO ),
					'style83' => esc_html__( 'Style 83', BWDEB_ROOT_AUTHOR_PRO ),
					'style84' => esc_html__( 'Style 84', BWDEB_ROOT_AUTHOR_PRO ),
					'style85' => esc_html__( 'Style 85', BWDEB_ROOT_AUTHOR_PRO ),
					'style86' => esc_html__( 'Style 86', BWDEB_ROOT_AUTHOR_PRO ),
					'style87' => esc_html__( 'Style 87', BWDEB_ROOT_AUTHOR_PRO ),
					'style88' => esc_html__( 'Style 88', BWDEB_ROOT_AUTHOR_PRO ),
					'style89' => esc_html__( 'Style 89', BWDEB_ROOT_AUTHOR_PRO ),
					'style90' => esc_html__( 'Style 90', BWDEB_ROOT_AUTHOR_PRO ),
					'style91' => esc_html__( 'Style 91', BWDEB_ROOT_AUTHOR_PRO ),
					'style92' => esc_html__( 'Style 92', BWDEB_ROOT_AUTHOR_PRO ),
					'style93' => esc_html__( 'Style 93', BWDEB_ROOT_AUTHOR_PRO ),
					'style94' => esc_html__( 'Style 94', BWDEB_ROOT_AUTHOR_PRO ),
					'style95' => esc_html__( 'Style 95', BWDEB_ROOT_AUTHOR_PRO ),
					'style96' => esc_html__( 'Style 96', BWDEB_ROOT_AUTHOR_PRO ),
					'style97' => esc_html__( 'Style 97', BWDEB_ROOT_AUTHOR_PRO ),
					'style98' => esc_html__( 'Style 98', BWDEB_ROOT_AUTHOR_PRO ),
					'style99' => esc_html__( 'Style 99', BWDEB_ROOT_AUTHOR_PRO ),
					'style100' => esc_html__( 'Style 100', BWDEB_ROOT_AUTHOR_PRO ),
					'style101' => esc_html__( 'Style 101', BWDEB_ROOT_AUTHOR_PRO ),
					'style102' => esc_html__( 'Style 102', BWDEB_ROOT_AUTHOR_PRO ),
					'style103' => esc_html__( 'Style 103', BWDEB_ROOT_AUTHOR_PRO ),
					'style104' => esc_html__( 'Style 104', BWDEB_ROOT_AUTHOR_PRO ),
					'style105' => esc_html__( 'Style 105', BWDEB_ROOT_AUTHOR_PRO ),
					'style106' => esc_html__( 'Style 106', BWDEB_ROOT_AUTHOR_PRO ),
					'style107' => esc_html__( 'Style 107', BWDEB_ROOT_AUTHOR_PRO ),
					'style108' => esc_html__( 'Style 108', BWDEB_ROOT_AUTHOR_PRO ),
					'style109' => esc_html__( 'Style 109', BWDEB_ROOT_AUTHOR_PRO ),
					'style110' => esc_html__( 'Style 110', BWDEB_ROOT_AUTHOR_PRO ),
					'style111' => esc_html__( 'Style 111', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'cbtns_text_buttons', [
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'cbtns_link_buttons',
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
			]
		);
		$this->add_control(
			'cbtns_alignment_buttons',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .cbtns-button-box' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'cbtns_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'cbtns_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Show Icon (If Has)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'cbtns_content_icon_button',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_buttons_icon_positions',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon_position_right',
				'options' => [
					'icon_position_right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'icon_position_left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'cbtns_title_style_tabsxs'
		);

		$this->start_controls_tab(
			'cbtns_title_style_normal_tabxx',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'cbtns_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns-icon',
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_content_quote_right_hover_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon' => 'background: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'cbtns_title_style_hover_tabaa',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'cbtns_content_quote_right_colorss',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a:hover .cbtns-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} a:hover .cbtns-icon',
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_content_quote_right_hover_colordd',
			[
				'label' => esc_html__( 'Hover Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a:hover .cbtns-icon' => 'background: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		
		$this->add_responsive_control(
			'cbtns_buttons_the_box_right_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);


		$this->add_control(
			'cbtns_buttons_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_responsive_control(
			'cbtns_buttons_social_border_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'cbtns_buttons_social_border_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'cbtns_buttons_social_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'cbtns_buttons_ska',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'cbtns_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', BWDEB_ROOT_AUTHOR_PRO ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'cbtns_buttons_style_section',
			[
				'label' => esc_html__( 'Buttons Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'cbtns_buttons_content_typography',
				'selector' => '{{WRAPPER}} .cbtns-title, a:before, a:after, .cbtns_creative_buttons a',
			]
		);
		$this->add_control(
			'cbtns_buttons_text_shadow', [
				'label' => esc_html__( 'Text Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'default' => [
					'color' => 'transparent'
				],
				'selectors' => [
					'{{SELECTOR}} {{WRAPPER}} .cbtns-title' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'cbtns_title_style_tabs'
		);

		$this->start_controls_tab(
			'cbtns_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'cbtns_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_normal_background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title',
			]
		);
		$this->add_control(
			'cbtns_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'cbtns_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'cbtns_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hover_background',
				'label' => esc_html__( 'Background Type', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before, .cbtns_creative_buttons .cbtns-title:hover',
			]
		);
		$this->add_control(
			'cbtns_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before' => 'border-color: {{VALUE}}', // Style no 56
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::after' => 'border-color: {{VALUE}}', // Style no 56
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->add_control(
			'cbtns_buttons_entrance_animation',
			[
				'label' => esc_html__( 'Entrance Animation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ANIMATION,
				'prefix_class' => '.cbtns_creative_buttons',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'cbtns_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cbtns_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title',
			]
		);
		$this->add_responsive_control(
            'cbtns_buttons_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title, .cbtns_creative_buttons .cbtns-title:after, .cbtns-btn-eleven .cbtns-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$cbtns_styles = $settings['cbtns_style_selection'];
		// Social Link
		// if ( ! empty( $settings['cbtns_link_buttons']['url'] ) ) {
		// 	$this->add_link_attributes( 'cbtns_link_buttons', $settings['cbtns_link_buttons'] );
		// }
		?>
			<div class="cbtns-button-box">
			<?php
			// Single buttons
			if( $cbtns_styles ){ ?>
				<div class="cbtns-btn-<?php echo $cbtns_styles ?> cbtns_creative_buttons <?php echo esc_attr($settings['cbtns_buttons_custom_class_id']); ?>">
					<a href="<?php echo esc_url($settings['cbtns_link_buttons']['url']); ?>">
					<div class="cbtns-title"><?php echo esc_html__($settings['cbtns_text_buttons']); ?></div>
					   <?php if($cbtns_styles == 'two'){?>
							<span style="top: 59.7969px; left: 2.46875px;"></span>
					   <?php }
					   if($cbtns_styles == 'fourty'){?>
					    	<span></span>
						<?php }
						if($cbtns_styles == 'fiftythree'){?>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						<?php }
						if($cbtns_styles == 'eightyone'){?>
							<div class="liquid"></div>
						<?php }
						if($cbtns_styles == 'eightythree'){?>
							<span></span>
							<span></span>
						<?php }
						if($cbtns_styles == 'eightysix'){?>
							<span></span>
						<?php }?>
					</a>
				</div>
			    <?php
			}?>
		</div> <!-- Buttons Alignment -->
		<?php
	}
}
