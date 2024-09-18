<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class WOOCPTProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'WooCProductsTiles', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Products Tiles', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle product-tiles';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	protected function woocpt_get_selected_products_options() {
		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => -1,
		);

		$products = get_posts($args);

		$options = array();

		foreach ($products as $product) {
			$options[$product->ID] = $product->post_title;
		}

		return $options;
	}
	
	protected function woocpt_get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function woocpt_get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	protected function woocpt_get_product_types_options() {
		$product_types = get_terms('product_type', array('hide_empty' => false));

		$options = array();

		foreach ($product_types as $product_type) {
			$options[$product_type->slug] = $product_type->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function woocpt_get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function woocpt_get_product_orderby_options() {
		return apply_filters('woocpt/product-grid/orderby-options', [
			'ID'         => esc_html__('Product ID', BWDEB_ROOT_AUTHOR_PRO),
			'title'      => esc_html__('Product Title', BWDEB_ROOT_AUTHOR_PRO),
			'_price'     => esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
			'_sku'       => esc_html__('SKU', BWDEB_ROOT_AUTHOR_PRO),
			'date'       => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
			'modified'   => esc_html__('Last Modified Date', BWDEB_ROOT_AUTHOR_PRO),
			'parent'     => esc_html__('Parent ID', BWDEB_ROOT_AUTHOR_PRO),
			'rand'       => esc_html__('Random', BWDEB_ROOT_AUTHOR_PRO),
			'menu_order' => esc_html__('Menu Order', BWDEB_ROOT_AUTHOR_PRO),
			'comment_count' => esc_html__('Comment Count', BWDEB_ROOT_AUTHOR_PRO),
		]);
	}
	protected function woocpt_get_product_filter_options() {
		return apply_filters('woocpt/product-grid/filter-options', [
			'recentlyadded'  => esc_html__('Latest Products', BWDEB_ROOT_AUTHOR_PRO),
			'featured'       => esc_html__('Featured Products', BWDEB_ROOT_AUTHOR_PRO),
			'onsale'         => esc_html__('On Sale Products', BWDEB_ROOT_AUTHOR_PRO),
			'instock'        => esc_html__('In Stock Products', BWDEB_ROOT_AUTHOR_PRO),
			'outofstock'     => esc_html__('Out of Stock Products', BWDEB_ROOT_AUTHOR_PRO),
			'toprated'       => esc_html__('Top Rated Products', BWDEB_ROOT_AUTHOR_PRO),
			'bestselling'    => esc_html__('Best Selling Products', BWDEB_ROOT_AUTHOR_PRO),
			'popularity'    => esc_html__('Popular Products', BWDEB_ROOT_AUTHOR_PRO),
			'recommended'    => esc_html__('Recommended Products', BWDEB_ROOT_AUTHOR_PRO),
			'cheapest'       => esc_html__('Cheapest Products', BWDEB_ROOT_AUTHOR_PRO),
			'lowstock'       => esc_html__('Low Stock Products', BWDEB_ROOT_AUTHOR_PRO),
			'expensive'      => esc_html__('Most Expensive Products', BWDEB_ROOT_AUTHOR_PRO),
			'manual'     	 => esc_html__('Manual Selection', BWDEB_ROOT_AUTHOR_PRO),
		]);
	}

	protected function register_controls() {
		$this->start_controls_section(
			'woocpt_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woocpt_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'one',
				'options' => [
					'one' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'two' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'three' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'four' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'five' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'six' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'seven' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'eight' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'nine' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'ten' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'eleven' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'twelve' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'thirteen' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'fourteen' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'fifteen' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'sixteen' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'seventeen' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'eighteen' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'nineteen' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'twenty' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'twentyOne' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'woocpt_products_gap',
			[
				'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-main-wrapper' => 'gap: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpt_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_image_link',
			[
				'label' => esc_html__( 'Image Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_title',
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
			'woocpt_title_link',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'div'  => esc_html__( 'Div', 'bwdib-icon-box' ),
					'h1' => esc_html__( 'H1', 'bwdib-icon-box' ),
					'h2' => esc_html__( 'H2', 'bwdib-icon-box' ),
					'h3' => esc_html__( 'H3', 'bwdib-icon-box' ),
					'h4' => esc_html__( 'H4', 'bwdib-icon-box' ),
					'h5' => esc_html__( 'H5', 'bwdib-icon-box' ),
					'h6' => esc_html__( 'H6', 'bwdib-icon-box' ),
					'p' => esc_html__( 'p', 'bwdib-icon-box' ),
				],
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_description',
			[
				'label' => esc_html__( 'Short Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_price',
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
			'woocpt_date',
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
			'woocpt_sale',
			[
				'label' => esc_html__( 'Total Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_sale_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_type',
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
			'woocpt_type_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'woocpt_cat_show',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'woocpt_review',
			[
				'label' => esc_html__( 'Rating', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_review_count',
			[
				'label' => esc_html__( 'Review Count', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woocpt_review' => 'yes',
				]
			]
		);

		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpt_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_cart_btn',
			[
				'label' => esc_html__( 'Cart Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_the_cart_type',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'cart',
				'options' => [
					'cart' => esc_html__( 'Cart Button', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'buy' => esc_html__( 'Buy Now', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'woocpt_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_cart_button',
			[
				'label' => esc_html__('Cart Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_cart_btn' => 'yes',
					'woocpt_the_cart_type' => 'cart',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woocpt_cart_btn' => 'yes',
					'woocpt_the_cart_type' => 'icon',
				],
			]
		);
		$this->add_control(
			'woocpt_details_btn_text',
			[
				'label' => esc_html__('Details Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_cart_btn' => 'yes',
					'woocpt_the_cart_type' => 'buy',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'woocpt_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_badge_style',
			[
				'label' => esc_html__( 'Select Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style5', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style6', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style7', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style8', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'woocpt-badge-',
			]
		);
		$this->add_control(
			'woocpt_show_sale_badge',
			[
				'label' => esc_html__( 'Show Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Sale Text', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'woocpt_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
					'woocpt_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
					'woocpt_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
					'woocpt_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_show_stock_out_badge',
			[
				'label' => esc_html__( 'Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used only if the product has stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_show_featured_badge',
			[
				'label' => esc_html__( 'Featured Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_badge_one_position',
			[
				'label' => esc_html__( 'Badge Left/Right Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'left',
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
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_control(
			'woocpt_badge_order',
			[
				'label' => esc_html__( 'Badge Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'row',
				'options' => [
					'column' => esc_html__( 'Column', BWDEB_ROOT_AUTHOR_PRO ),
					'column-reverse' => esc_html__( 'Column Reverse', BWDEB_ROOT_AUTHOR_PRO ),
					'row' => esc_html__( 'Row', BWDEB_ROOT_AUTHOR_PRO ),
					'row-reverse' => esc_html__( 'Row Reverse', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-sale-featured-badge' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'woocpt_products_query_section',
			[
				'label' => esc_html__( 'Product Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->woocpt_get_product_filter_options(),
			]
		);

		$this->add_control(
			'woocpt_product_order_by',
			[
				'label'    => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->woocpt_get_product_orderby_options(),
			]
		);
		$this->add_control(
			'woocpt_product_order',
			[
				'label'   => esc_html__( 'Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
					'ASC'  => esc_html__( 'Ascending', BWDEB_ROOT_AUTHOR_PRO ),
					'DESC' => esc_html__( 'Descending', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'woocpt_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'woocpt_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->woocpt_get_product_statuses_options(),
			]
		);

		$this->add_control(
			'woocpt_selected_category',
			[
				'label'   => esc_html__( 'Select Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->woocpt_get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'woocpt_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->woocpt_get_product_tags_options(),
			]
		);

		$this->add_control(
			'woocpt_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->woocpt_get_selected_products_options(),
				'condition'   => [
					'woocpt_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'woocpt_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->woocpt_get_selected_products_options(),
				'condition'   => [
					'woocpt_product_filter_by!' => 'manual',
				]
			]
		);
		$this->add_control(
			'woocpt_the_all_date',
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
			'woocpt_accordion_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpt_accordion_coustom_month',
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
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpt_accordion_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);

		$this->end_controls_section();

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		$this->start_controls_section(
			'woocpt_tiles_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpt_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper, {{WRAPPER}} .woocpt-contalign-wrapper' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_content_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-content-wrapper' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'woocpt_tiles_title_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_title_typography',
				'selector' => '{{WRAPPER}} .woocpt-title .woocpt-h2-title',
			]
		);
		$this->add_control(
			'woocpt_tiles_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_title_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title',
			]
		);
		$this->add_control(
			'woocpt_tiles_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_bottom_border_color',
			[
				'label' => esc_html__( 'Bottom Border', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%);',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_tiles_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_description_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_description_typography',
				'selector' => '{{WRAPPER}} .woocpt-desc p',
			]
		);
		$this->add_control(
			'woocpt_tiles_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_description_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p',
			]
		);
		$this->add_control(
			'woocpt_tiles_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_tiles_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-desc p' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-desc p' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_button_style_section',
			[
				'label' => esc_html__( 'Actions Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_button_options',
			[
				'label' => esc_html__( 'Actions', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_button_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_button_typography',
				'selector' => '{{WRAPPER}} .woocpt-cartbtn',
			]
		);
		$this->add_control(
			'woocpt_tiles_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-cartbtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_button_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-cartbtn:hover',
			]
		);
		$this->add_control(
			'woocpt_tiles_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-cartbtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocpt_tiles_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpt_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper img' => 'inline-size: {{SIZE}}px',
					'{{WRAPPER}} .woocpt-img-wrapper img' => 'block-size: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_caategory_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_cat_show' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_caategory_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_caategory_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat',
			]
		);
		$this->add_control(
			'woocpt_tiles_caategory_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat',
			]
		);
		$this->add_control(
			'woocpt_tiles_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_caategory_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_caategory_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_caategory_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// Price Styling
		$this->start_controls_section(
			'woocpt_tiles_price_options',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_price' => 'yes',
				],
			]
		);

		$this->add_control(
			'woocpt_price_between_gap',
			[
				'label' => esc_html__( 'Between Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
				'selectors' => [
					'{{WRAPPER}} .woocpt_product_price' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Sale Price
		$this->add_control(
			'woocpt_tiles_regular_sale_price_options',
			[
				'label' => esc_html__( 'Sale Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpt_tiles_taxonomy_sale_price_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_taxonomy_sale_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_taxonomy_sale_price_typography',
				'selector' => '{{WRAPPER}} .woocpt-current-price span bdi',
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_sale_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-current-price span bdi, {{WRAPPER}} .woocpt-current-price' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_sale_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-current-price span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);

		$this->add_responsive_control(
            'woocpt_tiles_sale_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-current-price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_sale_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-current-price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_taxonomy_sale_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-current-price, {{WRAPPER}} .woocpt-current-price span bdi' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_taxonomy_sale_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_taxonomy_sale_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-current-price:hover span bdi',
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_sale_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-current-price:hover span bdi, {{WRAPPER}} .woocpt-current-price:hover' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_sale_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-current-price:hover span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		// Regular Price
		$this->add_control(
			'woocpt_tiles_regular_price_options',
			[
				'label' => esc_html__( 'Regular Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpt_tiles_taxonomy_regular_price_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_taxonomy_regular_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_taxonomy_regular_price_typography',
				'selector' => '{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price del span bdi, {{WRAPPER}} .woocpt-regular-price.woocpt-sale-price, {{WRAPPER}} .woocpt_product_price span bdi', 
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_regular_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price del span bdi, {{WRAPPER}} .woocpt-regular-price.woocpt-sale-price, {{WRAPPER}} .woocpt_product_price span bdi, {{WRAPPER}} .woocpt_product_price, {{WRAPPER}} .woocpt_product_price span bdi' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_regular_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price, {{WRAPPER}} .woocpt_product_price span bdi' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_regular_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt_product_price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_regular_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price, {{WRAPPER}} .woocpt_product_price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_taxonomy_regular_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price, {{WRAPPER}} .woocpt_product_price, {{WRAPPER}} .woocpt_product_price span bdi' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_taxonomy_regular_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_taxonomy_regular_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price:hover del span bdi, {{WRAPPER}} .woocpt-regular-price.woocpt-sale-price:hover',
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_regular_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price:hover del span bdi, {{WRAPPER}} .woocpt-regular-price.woocpt-sale-price:hover, {{WRAPPER}} .woocpt_product_price span bdi:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_regular_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-regular-price.woocpt-sale-price:hover, {{WRAPPER}} .woocpt_product_price span bdi:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_sale_style_section',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_sale_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_sale_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale',
			]
		);
		$this->add_control(
			'woocpt_tiles_sale_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_sale_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale',
			]
		);
		$this->add_control(
			'woocpt_tiles_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_sale_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_sale_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_sale_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_date_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_date_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date',
			]
		);
		$this->add_control(
			'woocpt_tiles_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_date_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date',
			]
		);
		$this->add_control(
			'woocpt_tiles_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_date_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_type_style_section',
			[
				'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_tiles_type_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_type_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_type_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type',
			]
		);
		$this->add_control(
			'woocpt_tiles_type_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_type_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_tiles_type_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type',
			]
		);
		$this->add_control(
			'woocpt_tiles_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_type_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_tiles_type_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_type_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_type_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpt_tiles_review_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_review_normal_post',
			[
				'label' => esc_html__( 'Icons', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woocpt_the_post_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .woocpt-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocpt_tiles_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .woocpt-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_review_hover_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_the_post_number_size',
				'selector' => '{{WRAPPER}} .woocpt-content-wrapper  .make_a_star',
			]
		);
		$this->add_control(
			'woocpt_tiles_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		// Product Badge
		$this->start_controls_section(
			'woocpt_product_badge_style',
			[
				'label' => esc_html__( 'Sale / Stock Badge Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		// Sale Badge
		$this->add_control(
			'woocpt_sale_badge',
			[
				'label' => esc_html__( 'Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_sale_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-sale-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_sale_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-sale-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_sale_badge_typography',
				'selector' => '{{WRAPPER}} .woocpt-sale-badge',
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_control(
			'woocpt_sale_badge_box_size',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .woocpt-sale-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
            'woocpt_sale_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-sale-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woocpt_show_sale_badge' => 'yes',
				],
            ]
        );

		// Stock Badge
		$this->add_control(
			'woocpt_stock_badge',
			[
				'label' => esc_html__( 'Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_stock_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-stock-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_stock_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-stock-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_stock_badge_typography',
				'selector' => '{{WRAPPER}} .woocpt-stock-badge',
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_stock_badge_box_size',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .woocpt-stock-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'woocpt_stock_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-stock-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woocpt_show_stock_out_badge' => 'yes',
				],
            ]
        );

		// Featured Badge
		$this->add_control(
			'woocpt_featured_badge',
			[
				'label' => esc_html__( 'Featured Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_featured_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-featured-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_featured_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-featured-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_featured_badge_typography',
				'selector' => '{{WRAPPER}} .woocpt-featured-badge',
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_featured_badge_box_size',
			[
				'label' => esc_html__( 'Box Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .woocpt-featured-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'woocpt_featured_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-featured-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woocpt_show_featured_badge' => 'yes',
				],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_tiles_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpt_tiles_box_style_post'
		);
		$this->start_controls_tab(
			'woocpt_tiles_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpt_tiles_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpt_tiles_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_tiles_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woocpt_tiles_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-style-nine .woocpt-img-wrapper::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'woocpt_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpt_tiles_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpt-style-one .woocpt-content-wrapper, {{WRAPPER}} .woocpt-img-wrapper:hover::before, {{WRAPPER}} .woocpt-style-ten .woocpt-img-wrapper:hover .woocpt-content-wrapper::before, {{WRAPPER}} .woocpt-style-fourteen .woocpt-content-wrapper, {{WRAPPER}} .woocpt-style-twelve .woocpt-img-wrapper::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpt_tiles_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_tiles_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocpt_tiles_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_tiles_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$woocpt_image_link = $settings['woocpt_image_link'];
		$woocpt_title = $settings['woocpt_title'];
		$woocpt_title_link = $settings['woocpt_title_link'];
		$woocpt_title_tags = $settings['woocpt_title_tags'];
		$woocpt_description_swtcher = $settings['woocpt_description'];
		// ==================
		$woocpt_products_style = $settings['woocpt_products_zone_style'];
		$woocpt_products_perpage = $settings['woocpt_the_product_per_page'];
		$woocpt_description_words = $settings['woocpt_description_words'];
		$woocpt_word_trim_indi = $settings['woocpt_word_trim_indi'];
		$woocpt_price = $settings['woocpt_price'];
		$woocpt_cart_btn = $settings['woocpt_cart_btn'];
		$woocpt_cart_button = $settings['woocpt_cart_button'];
		$woocpt_sale = $settings['woocpt_sale'];
		$woocpt_date = $settings['woocpt_date'];
		$woocpt_type = $settings['woocpt_type'];

		$woocpt_sale_label = $settings['woocpt_sale_label'];
		$woocpt_type_label = $settings['woocpt_type_label'];

		$woocpt_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination


		//Shahadat
		$woocpt_filter_by = $settings['woocpt_product_filter_by'];
		$woocpt_order_by = $settings['woocpt_product_order_by'];
		$woocpt_order = $settings['woocpt_product_order'];
		$woocpt_products_perpage = $settings['woocpt_the_product_per_page'];
		$woocpt_selected_statuses = $settings['woocpt_product_grid_products_status'];
		$woocpt_selected_category = $settings['woocpt_selected_category'];
		$woocpt_selected_tags = $settings['woocpt_selected_tags'];
		$woocpt_selected_include_products = $settings['woocpt_selected_include_products'];
		$woocpt_selected_exclude_products = $settings['woocpt_selected_exclude_products'];
		$woocpt_review_count = $settings['woocpt_review_count'];

		// Product Action 
		$woocpt_the_cart_type = $settings['woocpt_the_cart_type'];
		$woocpt_cart_button = $settings['woocpt_cart_button'];
		$woocpt_details_btn_text = $settings['woocpt_details_btn_text'];

		// Product Badge
		$woocpt_badge_one_position = $settings['woocpt_badge_one_position'];
		$woocpt_show_sale_badge = $settings['woocpt_show_sale_badge'];
		$woocpt_show_featured_badge = $settings['woocpt_show_featured_badge'];
		$woocpt_show_stock_out_badge = $settings['woocpt_show_stock_out_badge'];
		$woocpt_sale_badge_type = $settings['woocpt_sale_badge_type'];
		$woocpt_sale_badge_before_percent_text = $settings['woocpt_sale_badge_before_percent_text'];
		$woocpt_sale_badge_after_percent_text = $settings['woocpt_sale_badge_after_percent_text'];
		$woocpt_sale_badge_text = $settings['woocpt_sale_badge_text'];
		$woocpt_badge_featured_text = $settings['woocpt_show_badge_featured_text'];
		$woocpt_badge_stock_out_text = $settings['woocpt_show_badge_stock_out_text'];
		$woocpt_badge_stock_in_text = $settings['woocpt_show_badge_stock_in_text'];
		$woocpt_badge_stock_in_number_text = $settings['woocpt_show_badge_stock_in_number_text'];


		$woocpt_the_all_date = $settings['woocpt_the_all_date'];
		if('d' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woocpt_the_all_date){
			$woocpt_coustom_year = $settings['woocpt_accordion_coustom_year'];
			$woocpt_coustom_month = $settings['woocpt_accordion_coustom_month'];
			$woocpt_coustom_day = $settings['woocpt_accordion_coustom_day'];
			$wdbp_time = '';
		} else{
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
		}

        $woocpt_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $woocpt_products_perpage,
			'orderby'        => $woocpt_order_by,
			'order'          => $woocpt_order,
			'post__in'       => $woocpt_selected_include_products,
			'post__not_in'   => $woocpt_selected_exclude_products,
			'post_status'    => $woocpt_selected_statuses,
			'paged' 		 => $woocpt_paged,
			'date_query'     => $wdbp_time,
			'year'           => $woocpt_coustom_year,
			'monthnum'       => $woocpt_coustom_month,
			'day'            => $woocpt_coustom_day, 
		);

		switch ($woocpt_filter_by) {
			 case 'featured':
				$woocpt_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$woocpt_args['meta_query'] = array(
					'relation' => 'OR',
					array(
						'key' => '_sale_price',
						'value' => 0,
						'compare' => '>',
						'type' => 'NUMERIC',
					),
					array(
						'key' => '_sale_price',
						'value' => '',
						'compare' => '=',
					),
				);
				break;

			case 'toprated':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$woocpt_args['orderby'] = 'meta_value_num';
				$woocpt_args['order'] = 'ASC';
				break;

			case 'popularity':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$woocpt_args['meta_query'] = array(
					'relation' => 'AND',
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 4.5,
						'type' => 'NUMERIC',
					),
					array(
						'key' => '_stock_status',
						'value' => 'instock',
					)
				);
				break;	

			case 'expensive':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$woocpt_args['orderby'] = 'meta_value_num';
				$woocpt_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$woocpt_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$woocpt_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$woocpt_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$woocpt_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'instock',
					),
					array (
						'key' => '_stock',
						'value' => 10,
						'compare' => '<=',
						'type' => 'NUMERIC',
					)
				);
				break;
				default:
					'recentlyadded';
				break;
		}

		// If a specific category is selected, add a category argument
		if ($woocpt_selected_category) {
			$woocpt_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $woocpt_selected_category,
			);
		}

		// If specific tags are selected, add a tag filter to the query
		if (!empty($woocpt_selected_tags)) {
			$woocpt_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $woocpt_selected_tags,
				'operator' => 'IN',
			);
		}

		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):

			echo '<div class="woocpt-main-wrapper woocpt-style-'.esc_attr($woocpt_products_style).'">';
				$woocpt_all_products = new \WP_Query( $woocpt_args ); if($woocpt_all_products->have_posts()):
				while ( $woocpt_all_products->have_posts() ) : $woocpt_all_products->the_post();
					global $product;
				echo '<article class="woocpt-img-wrapper">';
					echo '<div class="woocpt-content-wrapper">';
						// Title
						$woocpt_for_h2 = ('yes' === $woocpt_title)?$woocpt_title_tags:'h2';
						$woocpt_title_switcher = ('yes' === $woocpt_title)?get_the_title():'';
						$woocpt_a_tag = '<a href="'.get_the_permalink().'">';
						$woocpt_title_link_switcher = ('yes' === $woocpt_title_link)?$woocpt_a_tag:'';
						echo '<div class="woocpt-title"><'.$woocpt_for_h2.' class="woocpt-h2-title">';
						echo $woocpt_title_switcher;
						echo '</'.$woocpt_for_h2.'></a></div>';
						// Description
						$woocpt_description = wp_trim_words($product->get_short_description(), $woocpt_description_words, $woocpt_word_trim_indi);
						$woocpt_description_show = ('yes' === $woocpt_description_swtcher)?$woocpt_description:'';
						echo '<div class="woocpt-desc"><p>';
						echo $woocpt_description_show;
						echo '</p></div>';
						echo '<div class="woocpt-contalign-wrapper">';
							echo '<div class="bwdts-pricart-wrapper">';

								// Price
								include(__DIR__.'/wptithe_main/price.php');

								 // Cart
								 include(__DIR__.'/wptithe_main/action-button.php');

							echo '</div>';

							// Rating
							include(__DIR__.'/wptithe_main/review.php');


						echo '</div>';
						// ======================= Texo
						$woocpt_sale_wrap = '<div class="woocpt-total-sale woocpt-extra-meta">'.esc_html__($woocpt_sale_label) .'<span>' . $product->get_total_sales().'</span></div>';
						$woocpt_extra_sale  = ('yes' === $woocpt_sale)?$woocpt_sale_wrap:'';
						echo $woocpt_extra_sale;
						$woocpt_date_wrap = '<div class="woocpt-pub-date woocpt-extra-meta">'.date( 'j M Y', strtotime( $product->get_date_created() )).'</div>';
						$woocpt_extra_date = ('yes' === $woocpt_date)?$woocpt_date_wrap:'';
						echo $woocpt_extra_date;
						$woocpt_type_wrap = '<div class="woocpt-product-type woocpt-extra-meta">'.esc_html__($woocpt_type_label) .'<span>' . $product->get_type().'</span></div>';
						$woocpt_extra_type  = ('yes' === $woocpt_type)?$woocpt_type_wrap:'';
						echo $woocpt_extra_type;
						// =======================
					echo '</div>';

					// Category
					include(__DIR__.'/wptithe_main/category.php');
					include(__DIR__.'/wptithe_main/badge.php');

					// Thumbnail
					$woocpt_thumb_link = '<a href="'.get_the_permalink().'">';
					$woocpt_title_link_check = ('yes' === $woocpt_image_link)?$woocpt_thumb_link:'';
					$woocpt_title_link_close = ('yes' === $woocpt_image_link)?'</a>':'';
					$woocpt_the_thumb = $woocpt_title_link_check. $product->get_image().$woocpt_title_link_close;
					$woocpt_else_thumb = '<div class="woocpt-img_text woocpt_for_one">'.esc_html__('No Feature Image', BWDEB_ROOT_AUTHOR_PRO).'</div>';
					$woocpt_thumb_check = (has_post_thumbnail())?$woocpt_the_thumb:$woocpt_else_thumb;
					echo $woocpt_thumb_check;
				echo '</article>';
				endwhile;
				else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; endif;
				wp_reset_query();
			echo '</div>';

		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woocpt_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO).'</div></a>'; endif;
	}
}