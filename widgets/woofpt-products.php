<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class WOOFPTProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'WooFeaturedProductGridTypes', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Featured Product Grid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle featured-products';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'woofpt_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woofpt_products_zone_style',
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
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_box_column',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( 'One Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( 'Two Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column3' => esc_html__( 'Three Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column4'  => esc_html__( 'Four Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( 'Five Column', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( 'Six Column', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'woofpt-grid%s-'
			]
		);
		$this->add_responsive_control(
			'woofpt_alignment',
			[
				'label' => esc_html__( 'Column Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
				// 'separator' => 'after',
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
		$this->add_responsive_control(
			'woofpt_products_column_gap',
			[
				'label' => esc_html__( 'Column Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woofpt_gap_c' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .woofpt_gap_r' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_blog_row_gap',
			[
				'label' => esc_html__( 'Row Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .row .column_number' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woofpt_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woofpt_top_title',
			[
				'label' => esc_html__( 'Featured Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_top_title_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Featured Product.', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_top_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_description',
			[
				'label' => esc_html__( 'Short Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'woofpt_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_sale_dis',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'woofpt_products_sale_style',
			[
				'label' => esc_html__( 'Sale Style', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
				'condition' => [
					'woofpt_sale_dis' => 'yes',
				],
				'prefix_class' => 'woofpt-products-sale-',
			]
		);
		$this->add_control(
			'woofpt_products_sale_position',
			[
				'label' => esc_html__( 'Sale Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'woofpt_sale_dis' => 'yes',
				],
				'prefix_class' => 'woofpt-products-sale-pos-',
			]
		);
		$this->add_control(
			'woofpt_sale_dis_text',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Sale!', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_sale_dis' => 'yes',
				],
				'separator' => 'after',
			]
		);
		$this->add_control(
			'woofpt_price',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_date',
			[
				'label' => esc_html__( 'Publish Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woofpt_review',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_review_star_number',
			[
				'label' => esc_html__( 'Star Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'woofpt_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_sell',
			[
				'label' => esc_html__( 'Total Sell', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woofpt_sell_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woofpt_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woofpt_type',
			[
				'label' => esc_html__( 'Product Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woofpt_type_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woofpt_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woofpt_products_actions_section',
			[
				'label' => esc_html__( 'Product Actions', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woofpt_view_btn',
			[
				'label' => esc_html__( 'Actions', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_cart_btn',
			[
				'label' => esc_html__( 'Cart', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'woofpt_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_cart_button',
			[
				'label' => esc_html__('Cart Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woofpt_cart_btn' => 'yes',
					'woofpt_products_zone_style' => ['style1', 'style5'],
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woofpt_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woofpt_products_zone_style' => ['style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
					'woofpt_cart_btn' => 'yes',
					'woofpt_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_btn',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'woofpt_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woofpt_main_button',
			[
				'label' => esc_html__('Button Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woofpt_btn' => 'yes',
					'woofpt_view_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_choose_link',
			[
				'label' => esc_html__( 'Choose Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'coustom_link' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'woofpt_btn' => 'yes',
					'woofpt_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_main_button_link',
			[
				'label' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.type-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => 'www.type-link.com',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'woofpt_choose_link' => 'coustom_link',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woofpt_products_query_section',
			[
				'label' => esc_html__( 'Product Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woofpt_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// For Author Filter
		$woofpt_array = get_users();
		foreach ($woofpt_array as $woofpt_author){
			$woofpt_id = $woofpt_author->ID;
			$woofpt_name = $woofpt_author->display_name;
			$woofpt_get_array[$woofpt_id] = $woofpt_name;
		}
		$this->add_control(
			'woofpt_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'options' => $woofpt_get_array,
			]
		);
		$this->add_control(
      'woofpt_the_product_stock_or_not',
      [
        'label' => esc_html__( 'Stock Check', BWDEB_ROOT_AUTHOR_PRO ),
        'type' => Controls_Manager::SELECT,
        'default' => 'both',
        'options' => [
          'both' => esc_html__( 'Both', BWDEB_ROOT_AUTHOR_PRO ),
          'outofstock' => esc_html__( 'Out of Stock', BWDEB_ROOT_AUTHOR_PRO ),
          'instock' => esc_html__( 'In Stock', BWDEB_ROOT_AUTHOR_PRO ),
        ],
      ]
    );
		$this->add_control(
			'woofpt_the_all_date',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'd' => esc_html__( 'Today', BWDEB_ROOT_AUTHOR_PRO ),
					'm' => esc_html__( 'Current Month', BWDEB_ROOT_AUTHOR_PRO ),
					'coustom' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'woofpt_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'1' => esc_html__( 'Jan', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'Feb', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( 'Mar', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( 'Apr', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( 'May', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( 'Jun', BWDEB_ROOT_AUTHOR_PRO ),
					'7' => esc_html__( 'Jul', BWDEB_ROOT_AUTHOR_PRO ),
					'8' => esc_html__( 'Aug', BWDEB_ROOT_AUTHOR_PRO ),
					'9' => esc_html__( 'Sep', BWDEB_ROOT_AUTHOR_PRO ),
					'10' => esc_html__( 'Oct', BWDEB_ROOT_AUTHOR_PRO ),
					'11' => esc_html__( 'Nov', BWDEB_ROOT_AUTHOR_PRO ),
					'12' => esc_html__( 'Dec', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'woofpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woofpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woofpt_the_order_by',
			[
				'label' => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'author' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
					'title' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_blog_order',
			[
				'label' => esc_html__( 'Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', BWDEB_ROOT_AUTHOR_PRO ),
					'ASC' => esc_html__( 'Ascending', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'woofpt_cat',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woofpt_tag',
			[
				'label' => esc_html__( 'Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woofpt_the_select_cat_columnsdd',
			[
				'label' => esc_html__( 'Products Filter By', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all_filter',
				'options' => [
					'all_filter' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'all_cat' => esc_html__( 'By Category', BWDEB_ROOT_AUTHOR_PRO ),
					'all_tags' => esc_html__( 'By Tag', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		// For product category filter
		function woofpt_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_woofpt_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_woofpt_terms ) || is_wp_error( $all_woofpt_terms ) ) {
				return '';
			}
			foreach ( $all_woofpt_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		$this->add_control(
			'woofpt_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woofpt_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => woofpt_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function woofpt_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'woofpt_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woofpt_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => woofpt_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
	
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woofpt_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'woofpt-number-and-text',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'woofpt-number-and-text' => esc_html__( 'Number and Text', BWDEB_ROOT_AUTHOR_PRO ),
					'number' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'woofpt_taxo_align_center',
				'options' => [
					'woofpt_taxo_align_left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'woofpt_taxo_align_center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'woofpt_taxo_align_right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'woofpt_the_pagination_type' => ['woofpt-number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'woofpt_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_the_pagination_type' => 'woofpt-number-and-text',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woofpt_the_pagination_type' => 'woofpt-number-and-text',
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'woofpt_blog_top_title_style_section',
			[
				'label' => esc_html__( 'Top Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_top_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_top_title_alignment',
			[
				'label' => esc_html__( 'Title Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
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
		// Hover control start for title
		$this->start_controls_tabs(
			'woofpt_blog_top_title_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_top_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_top_title_typography',
				'selector' => '{{WRAPPER}} .woofpt-top-title',
			]
		);
		$this->add_control(
			'woofpt_blog_top_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-top-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_top_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-top-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_top_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_top_title_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-top-title:hover a',
			]
		);
		$this->add_control(
			'woofpt_blog_top_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-top-title:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_top_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-top-title:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_top_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-top-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_top_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-top-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
					]
		);
		$this->add_responsive_control(
			'woofpt_blog_top_title_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .woofpt-top-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'woofpt_blog_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'woofpt_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_title_typography',
				'selector' => '{{WRAPPER}} .woofpt-card-heading a',
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-heading a' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-heading' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card-heading:hover a',
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-heading:hover a' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-heading:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woofpt_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woofpt_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
				'woofpt_blog_title_margin',
				[
						'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => ['px', 'em', 'rem', '%'],
						'selectors' => [
								'{{WRAPPER}} .woofpt-card-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
		'condition' => [
			'woofpt_title' => 'yes',
		],
				]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'woofpt_blog_description_options',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woofpt_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_description_typography',
				'selector' => '{{WRAPPER}} .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs',
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card-decs:hover, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs:hover',
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-decs:hover, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card-decs:hover, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'woofpt_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woofpt_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card-decs, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content .woofpt-card-hedi-box .woofpt-card-title .woofpt-card-decs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woofpt_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'woofpt_blog_button_options',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woofpt_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_button_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a',
			]
		);
		$this->add_control(
			'woofpt_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-card-button:hover a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button:hover a',
			]
		);
		$this->add_control(
			'woofpt_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-card-button:hover a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-card-button:hover a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-card-button:hover a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button:hover a',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-card-button a, {{WRAPPER}} .woofpt-card-area-sk .woofpt-card .woofpt-card-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'woofpt_cart_button_options',
			[
				'label' => esc_html__( 'Cart Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woofpt_cart_button_style_post'
		);
		$this->start_controls_tab(
			'woofpt_cart_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_cart_button_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a',
			]
		);
		$this->add_control(
			'woofpt_cart_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_cart_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_cart_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a',
			]
		);
		$this->add_responsive_control(
            'woofpt_cart_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_cart_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_cart_button_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn:hover a, {{WRAPPER}} .woofpt-card .woofpt-card-icon:hover a',
			]
		);
		$this->add_control(
			'woofpt_cart_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn:hover a, {{WRAPPER}} .woofpt-card .woofpt-card-icon:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_cart_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn:hover a, {{WRAPPER}} .woofpt-card .woofpt-card-icon:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_cart_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn:hover a, {{WRAPPER}} .woofpt-card .woofpt-card-icon:hover a',
			]
		);
		$this->add_responsive_control(
            'woofpt_cart_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn:hover a, {{WRAPPER}} .woofpt-card .woofpt-card-icon:hover a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'woofpt_cart_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_cart_button_icon_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-addtocard-btn a, {{WRAPPER}} .woofpt-card .woofpt-card-icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woofpt_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-imgbx img, {{WRAPPER}} .woofpt-card .woofpt-imgbx2 img' => 'width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt_for_image_bg, {{WRAPPER}} .woofpt-card .woofpt-upper-item .woofpt-imgbx a:before, {{WRAPPER}} .woofpt-card:before, {{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-sub-content, {{WRAPPER}} .woofpt-card-area-21 .woofpt-card .woofpt-upper-item::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'woofpt_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-imgbx img, {{WRAPPER}} .woofpt-card .woofpt-imgbx2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_price_options',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_price' => 'yes',
				],
			]
		);
		// New Price
		$this->add_control(
			'woofpt_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-old-price, {{WRAPPER}} .woofpt-price-box .woofpt-old-price .woocommerce-Price-amount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'woofpt_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Old Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price:hover, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-dis-price, {{WRAPPER}} .woofpt-price-box .woofpt-dis-price .woocommerce-Price-amount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_sale_dis_style_section',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_sale_dis' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy sale_dis
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_sale_dis_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_sale_dis_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_sale_dis_typography',
				'selector' => '{{WRAPPER}} .woofpt_sale_notice',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_sale_dis_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_sale_notice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_sale_dis_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_sale_notice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_sale_dis_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_sale_dis_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt_sale_notice:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_sale_dis_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_sale_notice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_sale_dis_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_sale_notice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_sale_dis_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt_sale_notice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_sale_dis_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt_sale_notice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_sale_dis_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt_sale_notice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_date' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .woofpt-star-rating .woofpt-star-icons',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-star-rating .woofpt-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .make_a_star',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_tag' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'woofpt_blog_tag_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_cat_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_cat' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_cat_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-pro-cate a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_total_sell_style_section',
			[
				'label' => esc_html__( 'Total Sell', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_sell' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy total_sell
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_total_sell_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_total_sell_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_total_sell_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_total_sell_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_total_sell_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_total_sell_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_total_sell_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_total_sell_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_total_sell_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woofpt_blog_total_sell_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_taxonomy_total_sell_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_total_sell_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_product_type_style_section',
			[
				'label' => esc_html__( 'Product Type', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_type' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy product_type
		$this->start_controls_tabs(
			'woofpt_blog_taxonomy_product_type_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_product_type_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_product_type_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_product_type_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_product_type_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_taxonomy_product_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_taxonomy_product_type_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_product_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_taxonomy_product_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_product_type_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_taxonomy_product_type_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_taxonomy_product_type_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx .woofpt-product-type' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woofpt_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
		// Hover control start for box
		$this->start_controls_tabs(
			'woofpt_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'woofpt_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card, {{WRAPPER}} .woofpt-card .woofpt_for_back_bg' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woofpt_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woofpt-card, {{WRAPPER}} .woofpt-card .woofpt_for_back_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woofpt_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woofpt_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt-card:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woofpt_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woofpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woofpt_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woofpt_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woofpt-card:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woofpt_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card .woofpt-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'woofpt_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woofpt_the_pagination_type' => ['woofpt-number-and-text', 'number'],
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'woofpt_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'woofpt_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .woofpt_pagination_item a',
			]
		);
		$this->add_control(
			'woofpt_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woofpt_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woofpt_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .woofpt_pagination_item span, {{WRAPPER}} .woofpt_pagination_item a:hover',
			]
		);
		$this->add_control(
			'woofpt_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item span, {{WRAPPER}} .woofpt_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woofpt_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item span, {{WRAPPER}} .woofpt_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'woofpt_blog_button_box_width',
			[
				'label' => esc_html__( 'Box Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item a, {{WRAPPER}} .woofpt_pagination_item span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'woofpt_blog_button_box_height',
			[
				'label' => esc_html__( 'Box Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woofpt_pagination_item a, {{WRAPPER}} .woofpt_pagination_item span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'woofpt_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt_pagination_item a, {{WRAPPER}} .woofpt_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woofpt_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woofpt_pagination_item a, {{WRAPPER}} .woofpt_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$woofpt_products_style = $settings['woofpt_products_zone_style'];
		$woofpt_pagination_align = $settings['woofpt_the_pagination_items_align'];
		$woofpt_the_pagination_type = $settings['woofpt_the_pagination_type'];
		$woofpt_blog_next_format = $settings['woofpt_blog_next_format'];
		$woofpt_blog_prev_format = $settings['woofpt_blog_prev_format'];
		$woofpt_products_perpage = $settings['woofpt_the_product_per_page'];
		$woofpt_the_cat_product = $settings['woofpt_the_cat_columnsdd'];
		$woofpt_the_tag_product = $settings['woofpt_the_tag_columnsdd'];
		$woofpt_description_words = $settings['woofpt_description_words'];
		$woofpt_word_trim_indi = $settings['woofpt_word_trim_indi'];
		$woofpt_sale_dis = $settings['woofpt_sale_dis'];
		$woofpt_sale_dis_text = $settings['woofpt_sale_dis_text'];
		$woofpt_main_button = $settings['woofpt_main_button'];
		$woofpt_choose_link = $settings['woofpt_choose_link'];
		$woofpt_cart_button = $settings['woofpt_cart_button'];

		$woofpt_sell_label = $settings['woofpt_sell_label'];
		$woofpt_type_label = $settings['woofpt_type_label'];

		if('left' === $settings['woofpt_alignment']){
			$woofpt_align = 'justify-content-start';
		} elseif('center' === $settings['woofpt_alignment']){
			$woofpt_align = 'justify-content-center';
		} elseif('right' === $settings['woofpt_alignment']){
			$woofpt_align = 'justify-content-end';
		} else{
			$woofpt_align = ' ';
		}

		$woofpt_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$woofpt_blog_order = $settings['woofpt_blog_order'];
		$woofpt_author = $settings['woofpt_the_all_author'];
		$woofpt_order_by = $settings['woofpt_the_order_by'];
		
		$woofpt_the_all_date = $settings['woofpt_the_all_date'];
		$woofpt_text_str = ' ';
		if('d' === $woofpt_the_all_date){
			$woofpt_coustom_day = $woofpt_text_str;
			$woofpt_coustom_month = $woofpt_text_str;
			$woofpt_coustom_year = $woofpt_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woofpt_the_all_date){
			$woofpt_coustom_day = $woofpt_text_str;
			$woofpt_coustom_month = $woofpt_text_str;
			$woofpt_coustom_year = $woofpt_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woofpt_the_all_date){
			$woofpt_coustom_day = $woofpt_text_str;
			$woofpt_coustom_month = $woofpt_text_str;
			$woofpt_coustom_year = $woofpt_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woofpt_the_all_date){
			$woofpt_coustom_year = $settings['woofpt_blog_coustom_year'];
			$woofpt_coustom_month = $settings['woofpt_blog_coustom_month'];
			$woofpt_coustom_day = $settings['woofpt_blog_coustom_day'];
			$wdbp_time = $woofpt_text_str;
		} else{
			$woofpt_coustom_day = $woofpt_text_str;
			$woofpt_coustom_month = $woofpt_text_str;
			$woofpt_coustom_year = $woofpt_text_str;
			$wdbp_time = $woofpt_text_str;
		}
		$woofpt_cont_alignment = $settings['woofpt_content_alignment'];
		if('left' === $woofpt_cont_alignment){
			$woofpt_cont_align = 'woofpt_taxo_align_left woofpt_taxo_align_left_j';
		} elseif('center' === $woofpt_cont_alignment){
			$woofpt_cont_align = 'woofpt_taxo_align_center woofpt_taxo_align_center_j';
		} elseif('right' === $woofpt_cont_alignment){
			$woofpt_cont_align = 'woofpt_taxo_align_right woofpt_taxo_align_right_j';
		} else{ $woofpt_cont_align = ' '; }
		// ========featured
		$woofpt_query[] = array(
			'taxonomy' => 'product_visibility',
			'field' => 'name',
			'terms' => 'featured',
			'operator' => 'IN',
		);
		if($settings['woofpt_the_product_stock_or_not'] == 'instock'):
      $woofpt_product_stock_check = 'instock';
      $woofpt_product_compre_check = '=';
      elseif($settings['woofpt_the_product_stock_or_not'] == 'outofstock'):
        $woofpt_product_stock_check = 'outofstock';
        $woofpt_product_compre_check = 'IN';
        elseif($settings['woofpt_the_product_stock_or_not'] == 'both'):
          $woofpt_product_stock_check = ['instock','outofstock'];
          $woofpt_product_compre_check = 'IN';
        endif;
		$woofpt_args = [
			'post_type' => 'product',
			'post_status' => 'publish',
			'ignore_sticky_posts' => 1,
			'posts_per_page' => $woofpt_products_perpage,
			'orderby' => $woofpt_order_by,
			'meta_query' => array(
        array(
          'key' => '_stock_status',
          'value' => $woofpt_product_stock_check,
          'compare' => $woofpt_product_compre_check,
        )
      ),
			'order' => $woofpt_blog_order,
			'product_cat' => $woofpt_the_cat_product,
			'product_tag' => $woofpt_the_tag_product,
			'author__in' => $woofpt_author,
			'paged' => $woofpt_paged,
			'date_query' => $wdbp_time,
			'year' => $woofpt_coustom_year,
			'monthnum' => $woofpt_coustom_month,
			'day' => $woofpt_coustom_day,
			'tax_query' => $woofpt_query
		];
		if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($settings['woofpt_top_title']=='yes'){echo '<div class="woofpt-top-title" style="text-align:'.esc_attr($settings['woofpt_top_title_alignment']).'">'.esc_html__($settings['woofpt_top_title_text']).'</div>';}
			switch ($woofpt_products_style){
				case "$woofpt_products_style":
					include( __DIR__ . '/wfpgthe_main/'.$woofpt_products_style.'.php' );
					break;
			}
		else:
			?><a href="https://WordPress.org/plugins/WooCommerce/"><div class="woofpt_wooc_not_acivate_notice"><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO); ?></div></a><?php
		endif;
	}
}

