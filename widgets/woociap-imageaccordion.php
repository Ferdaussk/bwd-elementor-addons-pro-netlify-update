<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class woociapImageAccordion extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdimageaccordion';
	}

	public function get_title() {
		return esc_html__( 'Product Image Accordion', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'product-img-accordion bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'product', 'woocommerce' ];
	}

	public function get_script_depends() {
		return [ 'woociap-iamge-accordion-category' ];
	}

	protected function woociap_get_selected_products_options() {
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
	
	protected function woociap_get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function woociap_get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	protected function woociap_get_product_types_options() {
		$product_types = get_terms('product_type', array('hide_empty' => false));

		$options = array();

		foreach ($product_types as $product_type) {
			$options[$product_type->slug] = $product_type->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function woociap_get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function woociap_get_product_orderby_options() {
		return apply_filters('woociap/product-grid/orderby-options', [
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
	protected function woociap_get_product_filter_options() {
		return apply_filters('woociap/product-grid/filter-options', [
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
			'woociap_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woociap_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woociap_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_title',
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
			'woociap_description',
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
			'woociap_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_price',
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
			'woociap_cat_show',
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
			'woociap_review',
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
			'woociap_review_count',
			[
				'label' => esc_html__( 'Review Count', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woociap_review' => 'yes',
				]
			]
		);

		$this->add_control(
			'woociap_date',
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
			'woociap_sale',
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
			'woociap_sale_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_type',
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
			'woociap_type_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->end_controls_section(); 

		$this->start_controls_section(
			'woociap_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_badge_style',
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
				'prefix_class' => 'woociap-badge-',
			]
		);
		$this->add_control(
			'woociap_show_sale_badge',
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
			'woociap_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Sale Text', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'woociap_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
					'woociap_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
					'woociap_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
					'woociap_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_show_stock_out_badge',
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
			'woociap_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used only if the product has stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_show_featured_badge',
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
			'woociap_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_badge_order',
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
					'{{WRAPPER}} .woociap-sale-featured-badge' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);
		
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woociap_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_cart_btn',
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
			'woociap_the_cart_type',
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
					'woociap_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_cart_button',
			[
				'label' => esc_html__('Cart Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_cart_btn' => 'yes',
					'woociap_the_cart_type' => 'cart',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woociap_cart_btn' => 'yes',
					'woociap_the_cart_type' => 'icon',
				],
			]
		);
		$this->add_control(
			'woociap_details_btn_text',
			[
				'label' => esc_html__('Details Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'woociap_cart_btn' => 'yes',
					'woociap_the_cart_type' => 'buy',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		

		$this->start_controls_section(
			'woociap_products_query_section',
			[
				'label' => esc_html__( 'Product Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->woociap_get_product_filter_options(),
			]
		);

		$this->add_control(
			'woociap_product_order_by',
			[
				'label'    => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->woociap_get_product_orderby_options(),
			]
		);
		$this->add_control(
			'woociap_product_order',
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
			'woociap_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'woociap_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->woociap_get_product_statuses_options(),
			]
		);

		$this->add_control(
			'woociap_selected_category',
			[
				'label'   => esc_html__( 'Select Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->woociap_get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'woociap_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->woociap_get_product_tags_options(),
			]
		);

		$this->add_control(
			'woociap_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->woociap_get_selected_products_options(),
				'condition'   => [
					'woociap_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'woociap_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->woociap_get_selected_products_options(),
				'condition'   => [
					'woociap_product_filter_by!' => 'manual',
				]
			]
		);
		$this->add_control(
			'woociap_the_all_date',
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
			'woociap_accordion_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'woociap_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_coustom_month',
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
					'woociap_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'woociap_the_all_date' => 'coustom',
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
			'woociap_accordion_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'woociap_title_alignment',
			[
				'label' => esc_html__( 'Title Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .woociap-title' => 'text-align: {{VALUE}};',
				],
				'default' => '',
				'toggle' => true,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'woociap_accordion_title_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_title_typography',
				'selector' => '{{WRAPPER}} .woociap-title',
			]
		);
		$this->add_control(
			'woociap_accordion_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_title_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-title',
			]
		);
		$this->add_control(
			'woociap_accordion_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_accordion_title_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}!important; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}}!important;',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woociap_content_alignment',
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
					'{{WRAPPER}} .woociap-content-box' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .woociap-content-box .woociap-prodCont .woociap-prodpriratbtn' => 'align-items: {{VALUE}}; justify-content:{{VALUE}};',
				],
				'toggle' => true,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'woociap_accordion_box_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_accordion_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_accordion_box_boxshadow',
				'label' => esc_html__( 'Content Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woociap_accordion_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-style-nine .woociap-content-box::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'woociap_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_accordion_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-style-one .woociap-prodRatingWrap, {{WRAPPER}} .woociap-content-box:hover::before, {{WRAPPER}} .woociap-style-ten .woociap-content-box:hover .woociap-prodRatingWrap::before, {{WRAPPER}} .woociap-style-fourteen .woociap-prodRatingWrap, {{WRAPPER}} .woociap-style-twelve .woociap-content-box::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_accordion_box_boxshadow_hover',
				'label' => esc_html__( 'Wrap Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woociap_accordion_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_description_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_description_typography',
				'selector' => '{{WRAPPER}} .woociap-prodDesc',
			]
		);
		$this->add_control(
			'woociap_accordion_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_description_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc',
			]
		);
		$this->add_control(
			'woociap_accordion_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_accordion_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-prodDesc' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-prodDesc' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_button_style_section',
			[
				'label' => esc_html__( 'Action Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_cart_btn' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_button_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_button_typography',
				'selector' => '{{WRAPPER}} .woociap-cartBtn',
			]
		);
		$this->add_control(
			'woociap_accordion_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_button_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-cartBtn:hover',
			]
		);
		$this->add_control(
			'woociap_accordion_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woociap_accordion_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woociap_the_post_image_width_size',
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
					'{{WRAPPER}} .woociap-single-img img' => 'inline-size: {{SIZE}}px',
					'{{WRAPPER}} .woociap-single-img img' => 'block-size: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_caategory_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_caategory_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_caategory_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodCat a',
			]
		);
		$this->add_control(
			'woociap_accordion_caategory_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a',
			]
		);
		$this->add_control(
			'woociap_accordion_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_caategory_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodCat a',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_caategory_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_caategory_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_price_options',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_price' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_new_price_options',
			[
				'label' => esc_html__( 'New Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woociap_accordion_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woociap-salePrice',
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-salePrice:hover',
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_accordion_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// Old Price
		$this->add_control(
			'woociap_accordion_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woociap_accordion_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woociap-regularPrice',
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-regularPrice:hover',
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_accordion_old_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_old_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_sale_style_section',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_sale_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_sale_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount',
			]
		);
		$this->add_control(
			'woociap_accordion_sale_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_sale_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount',
			]
		);
		$this->add_control(
			'woociap_accordion_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_sale_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_sale_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_sale_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_date_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_date_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-publishDate',
			]
		);
		$this->add_control(
			'woociap_accordion_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_date_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate',
			]
		);
		$this->add_control(
			'woociap_accordion_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_date_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-publishDate',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_type_style_section',
			[
				'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_accordion_type_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_type_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_type_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodType',
			]
		);
		$this->add_control(
			'woociap_accordion_type_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_type_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_accordion_type_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodType',
			]
		);
		$this->add_control(
			'woociap_accordion_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_type_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_type_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_type_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_type_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woociap_accordion_review_style_post'
		);
		$this->start_controls_tab(
			'woociap_accordion_review_normal_post',
			[
				'label' => esc_html__( 'Icons', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woociap_the_post_icon_size',
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
					'{{WRAPPER}} .woociap-prodRatingWrap  .woociap-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woociap_accordion_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodRatingWrap  .woociap-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_accordion_review_hover_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_the_post_number_size',
				'selector' => '{{WRAPPER}} .woociap-prodRatingWrap  .make_a_star',
			]
		);
		$this->add_control(
			'woociap_accordion_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodRatingWrap  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_accordion_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_accordion_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-for-overlay:before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_accordion_box2_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-single-img',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_accordion_box2_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .woociap-single-img',
			]
		);
		$this->add_responsive_control(
            'woociap_accordion_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-for-overlay:before, {{WRAPPER}} .woociap-single-img img, {{WRAPPER}} .woociap-single-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_accordion_boxL_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// Product Badge
		$this->start_controls_section(
			'woociap_product_badge_style',
			[
				'label' => esc_html__( 'Sale / Stock Badge Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		// Sale Badge
		$this->add_control(
			'woociap_sale_badge',
			[
				'label' => esc_html__( 'Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_sale_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-sale-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_sale_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-sale-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_sale_badge_typography',
				'selector' => '{{WRAPPER}} .woociap-sale-badge',
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_control(
			'woociap_sale_badge_box_size',
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
					'{{WRAPPER}} .woociap-sale-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
            'woociap_sale_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-sale-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woociap_show_sale_badge' => 'yes',
				],
            ]
        );

		// Stock Badge
		$this->add_control(
			'woociap_stock_badge',
			[
				'label' => esc_html__( 'Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_stock_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-stock-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_stock_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-stock-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_stock_badge_typography',
				'selector' => '{{WRAPPER}} .woociap-stock-badge',
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_stock_badge_box_size',
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
					'{{WRAPPER}} .woociap-stock-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'woociap_stock_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-stock-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woociap_show_stock_out_badge' => 'yes',
				],
            ]
        );

		// Featured Badge
		$this->add_control(
			'woociap_featured_badge',
			[
				'label' => esc_html__( 'Featured Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_featured_badge_text_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-featured-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_featured_badge_bg_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-featured-badge' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_featured_badge_typography',
				'selector' => '{{WRAPPER}} .woociap-featured-badge',
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_featured_badge_box_size',
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
					'{{WRAPPER}} .woociap-featured-badge' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'woociap_featured_badge_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-featured-badge' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'woociap_show_featured_badge' => 'yes',
				],
            ]
        );

		$this->end_controls_section();


    }

	protected function render() {
		$settings = $this->get_settings_for_display();
	
		$woociap_title = $settings['woociap_title'];
		$woociap_description_swtcher = $settings['woociap_description'];
		// ==================
		$woociap_products_style = $settings['woociap_products_zone_style'];
		$woociap_description_words = $settings['woociap_description_words'];
		$woociap_word_trim_indi = $settings['woociap_word_trim_indi'];
		$woociap_price = $settings['woociap_price'];
		$woociap_cart_btn = $settings['woociap_cart_btn'];
		// $woociap_cart_type = $settings['woociap_cart_type'];
		$woociap_cart_button = $settings['woociap_cart_button'];
		$woociap_sale = $settings['woociap_sale'];
		$woociap_date = $settings['woociap_date'];
		$woociap_type = $settings['woociap_type'];
		$woociap_sale_label = $settings['woociap_sale_label'];
		$woociap_type_label = $settings['woociap_type_label'];

		$woociap_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
	
		

		//Shahadat
		$woociap_filter_by = $settings['woociap_product_filter_by'];
		$woociap_order_by = $settings['woociap_product_order_by'];
		$woociap_order = $settings['woociap_product_order'];
		$woociap_products_perpage = $settings['woociap_the_product_per_page'];
		$woociap_selected_statuses = $settings['woociap_product_grid_products_status'];
		$woociap_selected_category = $settings['woociap_selected_category'];
		$woociap_selected_tags = $settings['woociap_selected_tags'];
		$woociap_selected_include_products = $settings['woociap_selected_include_products'];
		$woociap_selected_exclude_products = $settings['woociap_selected_exclude_products'];
		$woociap_review_count = $settings['woociap_review_count'];

		// Product Action 
		$woociap_the_cart_type = $settings['woociap_the_cart_type'];
		$woociap_cart_button = $settings['woociap_cart_button'];
		$woociap_details_btn_text = $settings['woociap_details_btn_text'];

		// Product Badge
		// $woociap_badge_one_position = $settings['woociap_badge_one_position'];
		$woociap_show_sale_badge = $settings['woociap_show_sale_badge'];
		$woociap_show_featured_badge = $settings['woociap_show_featured_badge'];
		$woociap_show_stock_out_badge = $settings['woociap_show_stock_out_badge'];
		$woociap_sale_badge_type = $settings['woociap_sale_badge_type'];
		$woociap_sale_badge_before_percent_text = $settings['woociap_sale_badge_before_percent_text'];
		$woociap_sale_badge_after_percent_text = $settings['woociap_sale_badge_after_percent_text'];
		$woociap_sale_badge_text = $settings['woociap_sale_badge_text'];
		$woociap_badge_featured_text = $settings['woociap_show_badge_featured_text'];
		$woociap_badge_stock_out_text = $settings['woociap_show_badge_stock_out_text'];
		$woociap_badge_stock_in_text = $settings['woociap_show_badge_stock_in_text'];
		$woociap_badge_stock_in_number_text = $settings['woociap_show_badge_stock_in_number_text'];


		$woociap_the_all_date = $settings['woociap_the_all_date'];
		if('d' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woociap_the_all_date){
			$woociap_coustom_year = $settings['woociap_accordion_coustom_year'];
			$woociap_coustom_month = $settings['woociap_accordion_coustom_month'];
			$woociap_coustom_day = $settings['woociap_accordion_coustom_day'];
			$wdbp_time = '';
		} else{
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
		}


        $woociap_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $woociap_products_perpage,
			'orderby'        => $woociap_order_by,
			'order'          => $woociap_order,
			'post__in'       => $woociap_selected_include_products,
			'post__not_in'   => $woociap_selected_exclude_products,
			'post_status'    => $woociap_selected_statuses,
			'paged' 		 => $woociap_paged,
			'date_query'     => $wdbp_time,
			'year'           => $woociap_coustom_year,
			'monthnum'       => $woociap_coustom_month,
			'day'            => $woociap_coustom_day, 
		);

		switch ($woociap_filter_by) {
			 case 'featured':
				$woociap_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$woociap_args['meta_query'] = array(
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
				$woociap_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$woociap_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$woociap_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$woociap_args['orderby'] = 'meta_value_num';
				$woociap_args['order'] = 'ASC';
				break;

			case 'popularity':
				$woociap_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$woociap_args['meta_query'] = array(
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
				$woociap_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$woociap_args['orderby'] = 'meta_value_num';
				$woociap_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$woociap_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$woociap_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$woociap_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$woociap_args['meta_query'] = array (
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
		if ($woociap_selected_category) {
			$woociap_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $woociap_selected_category,
			);
		}

		// If specific tags are selected, add a tag filter to the query
		if (!empty($woociap_selected_tags)) {
			$woociap_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $woociap_selected_tags,
				'operator' => 'IN',
			);
		}
		
		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			echo '<div class="woociap-img-accordion-'.esc_attr($woociap_products_style).' woociap-common-style">';
				$woociap_all_products = new \WP_Query( $woociap_args ); 
				if($woociap_all_products->have_posts()):
				while ( $woociap_all_products->have_posts() ) : $woociap_all_products->the_post();
					global $product;
					echo '<div class="woociap-single-img">';
						//Badge
						include(__DIR__.'/wiatemplate/badge.php');
						// Cat
						include(__DIR__.'/wiatemplate/category.php');
							echo '<div class="woociap-for-overlay">';
								echo $product->get_image();
								echo '<div class="woociap-content-box">';
								if( $woociap_products_style !== '12' ):
									if( $woociap_title == 'yes' ):
										echo '<a href="' .get_the_permalink(). '">';
										echo '<h2 class="woociap-title">'.esc_html(get_the_title()).'</h2>';
										echo '</a>';
									endif;
								endif;
									echo '<div class="woociap-prodCont">';
									if( $woociap_products_style == '12' ):
										if( $woociap_title == 'yes' ):
											echo '<a href="' .get_the_permalink(). '">';
											echo '<h2 class="woociap-title">'.esc_html(get_the_title()).'</h2>';
											echo '</a>';
										endif;
									endif;
										echo '<div class="woociap-prodpriratbtn">';
											echo '<div class="woociap-prodpriratwrap">';
												// Price
												include(__DIR__.'/wiatemplate/price.php');
												// Rating
												include(__DIR__.'/wiatemplate/review.php');
											echo '</div>';
											// Action Button
											include(__DIR__.'/wiatemplate/action-button.php');
										echo '</div>';
										echo '<div class="woociap-prodOptInfo">';
											// ======================= Texo
											$woociap_sale_wrap = '<div class="woociap-prodSaleCount woociap-extra-meta">'.esc_html__($woociap_sale_label) .'<span>' . $product->get_total_sales().'</span></div>';
											$woociap_extra_sale  = ('yes' === $woociap_sale)?$woociap_sale_wrap:'';
											echo $woociap_extra_sale;
											$woociap_date_wrap = '<div class="woociap-publishDate woociap-extra-meta"><span>'.date( 'j M Y', strtotime( $product->get_date_created() )).'</span></div>';
											$woociap_extra_date = ('yes' === $woociap_date)?$woociap_date_wrap:'';
											echo $woociap_extra_date;
											$woociap_type_wrap = '<div class="woociap-prodType woociap-extra-meta">'.esc_html__($woociap_type_label) .'<span>' . $product->get_type().'</span></div>';
											$woociap_extra_type  = ('yes' === $woociap_type)?$woociap_type_wrap:'';
											echo $woociap_extra_type;
											// =======================
										echo '</div>';
											// Description
											$woociap_description = wp_trim_words($product->get_short_description(), $woociap_description_words, $woociap_word_trim_indi);
											$woociap_description_wrap = '<div class="woociap-desc"><p class="woociap-decs">'.$woociap_description.'</p></div>';
											$woociap_description_show = ('yes' === $woociap_description_swtcher)?$woociap_description_wrap:'';
											echo $woociap_description_show;
									echo '</div>';
								echo '</div>';
							echo '</div>';
					echo '</div>';
						endwhile;
						else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; 
					endif;
					wp_reset_query();
			echo '</div>';
		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woociap_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO).'</div></a>'; endif;
	}
}
