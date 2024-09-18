<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCRTPLSTProductsListcarousel extends Widget_Base {

	public function get_name() {
		return esc_html__( 'CreativeProductsListcarousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Creative Products List Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle product-list-carousel';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdcrtplst_woocommerce_category' ];
	}

	protected function bwdcrtplst_get_selected_products_options() {
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
	
	protected function bwdcrtplst_get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function bwdcrtplst_get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	protected function bwdcrtplst_get_product_types_options() {
		$product_types = get_terms('product_type', array('hide_empty' => false));

		$options = array();

		foreach ($product_types as $product_type) {
			$options[$product_type->slug] = $product_type->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function bwdcrtplst_get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function bwdcrtplst_get_product_orderby_options() {
		return apply_filters('crtp/product-grid/orderby-options', [
			'ID'         => esc_html__('Product ID', 'creative-productslist-carousel-list'),
			'title'      => esc_html__('Product Title', 'creative-productslist-carousel-list'),
			'_price'     => esc_html__('Price', 'creative-productslist-carousel-list'),
			'_sku'       => esc_html__('SKU', 'creative-productslist-carousel-list'),
			'date'       => esc_html__('Date', 'creative-productslist-carousel-list'),
			'modified'   => esc_html__('Last Modified Date', 'creative-productslist-carousel-list'),
			'parent'     => esc_html__('Parent ID', 'creative-productslist-carousel-list'),
			'rand'       => esc_html__('Random', 'creative-productslist-carousel-list'),
			'menu_order' => esc_html__('Menu Order', 'creative-productslist-carousel-list'),
			'comment_count' => esc_html__('Comment Count', 'creative-productslist-carousel-list'),
		]);
	}
	protected function bwdcrtplst_get_product_filter_options() {
		return apply_filters('crtp/product-grid/filter-options', [
			'recentlyadded'  => esc_html__('Latest Products', 'creative-productslist-carousel-list'),
			'featured'       => esc_html__('Featured Products', 'creative-productslist-carousel-list'),
			'onsale'         => esc_html__('On Sale Products', 'creative-productslist-carousel-list'),
			'instock'        => esc_html__('In Stock Products', 'creative-productslist-carousel-list'),
			'outofstock'     => esc_html__('Out of Stock Products', 'creative-productslist-carousel-list'),
			'toprated'       => esc_html__('Top Rated Products', 'creative-productslist-carousel-list'),
			'bestselling'    => esc_html__('Best Selling Products', 'creative-productslist-carousel-list'),
			'popularity'    => esc_html__('Popular Products', 'creative-productslist-carousel-list'),
			'recommended'    => esc_html__('Recommended Products', 'creative-productslist-carousel-list'),
			'cheapest'       => esc_html__('Cheapest Products', 'creative-productslist-carousel-list'),
			'lowstock'       => esc_html__('Low Stock Products', 'creative-productslist-carousel-list'),
			'expensive'      => esc_html__('Most Expensive Products', 'creative-productslist-carousel-list'),
			'manual'     	 => esc_html__('Manual Selection', 'creative-productslist-carousel-list'),
		]);
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdcrtplst_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'creative-productslist-carousel-list' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'creative-productslist-carousel-list' ),
					'style2' => esc_html__( 'Style 2', 'creative-productslist-carousel-list' ),
					'style3' => esc_html__( 'Style 3', 'creative-productslist-carousel-list' ),
					'style4' => esc_html__( 'Style 4', 'creative-productslist-carousel-list' ),
					'style5' => esc_html__( 'Style 5', 'creative-productslist-carousel-list' ),
					'style6' => esc_html__( 'Style 6', 'creative-productslist-carousel-list' ),
					'style7' => esc_html__( 'Style 7', 'creative-productslist-carousel-list' ),
					'style8' => esc_html__( 'Style 8', 'creative-productslist-carousel-list' ),
					'style9' => esc_html__( 'Style 9', 'creative-productslist-carousel-list' ),
					'style10' => esc_html__( 'Style 10', 'creative-productslist-carousel-list' ),
					'style11' => esc_html__( 'Style 11', 'creative-productslist-carousel-list' ),
					'style12' => esc_html__( 'Style 12', 'creative-productslist-carousel-list' ),
					'style13' => esc_html__( 'Style 13', 'creative-productslist-carousel-list' ),
					'style14' => esc_html__( 'Style 14', 'creative-productslist-carousel-list' ),
					'style15' => esc_html__( 'Style 15', 'creative-productslist-carousel-list' ),
					'style16' => esc_html__( 'Style 16', 'creative-productslist-carousel-list' ),
					'style17' => esc_html__( 'Style 17', 'creative-productslist-carousel-list' ),
					'style18' => esc_html__( 'Style 18', 'creative-productslist-carousel-list' ),
					'style19' => esc_html__( 'Style 19', 'creative-productslist-carousel-list' ),
					'style20' => esc_html__( 'Style 20', 'creative-productslist-carousel-list' ),
					'style21' => esc_html__( 'Style 21', 'creative-productslist-carousel-list' ),
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'bwdcrtplst_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'creative-productslist-carousel-list' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_products_image_heading',
			[
				'label' => esc_html__( 'Featured Image', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$this->add_control(
			'bwdcrtplst_products_show_image',
			[
				'label' => esc_html__( 'Show Featured Image', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_products_image_clickable',
			[
				'label' => esc_html__( 'Enable Clickable', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcrtplst_products_show_image' => 'yes',
				]
			]
		);

		$this->add_control(
			'bwdcrtplst_products_title_heading',
			[
				'label' => esc_html__( 'Title', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdcrtplst_title',
			[
				'label' => esc_html__( 'Show Title', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_title_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__( 'H1', 'creative-productslist-carousel-list' ),
					'h2' => esc_html__( 'H2', 'creative-productslist-carousel-list' ),
					'h3' => esc_html__( 'H3', 'creative-productslist-carousel-list' ),
					'h4' => esc_html__( 'H4', 'creative-productslist-carousel-list' ),
					'h5' => esc_html__( 'H5', 'creative-productslist-carousel-list' ),
					'h6' => esc_html__( 'H6', 'creative-productslist-carousel-list' ),
					'div' => esc_html__( 'Div', 'creative-productslist-carousel-list' ),
					'span' => esc_html__( 'Span', 'creative-productslist-carousel-list' ),
					'p' => esc_html__( 'P', 'creative-productslist-carousel-list' ),
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_title_enable_link',
			[
				'label' => esc_html__( 'Enable Link', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_title_length',
			[
				'label' => __('Word Length', 'creative-productslist-carousel-list'),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'bwdcrtplst_products_description_heading',
			[
				'label' => esc_html__( 'Description', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdcrtplst_description',
			[
				'label' => esc_html__( 'Short Description', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_description_words',
			[
				'label' => esc_html__( 'Word Length', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'creative-productslist-carousel-list' ),
				'label_block' => true,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_price',
			[
				'label' => esc_html__( 'Price', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_review',
			[
				'label' => esc_html__( 'Rating', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_review_count',
			[
				'label' => esc_html__( 'Review Count', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcrtplst_review' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcrtplst_cat_show',
			[
				'label' => esc_html__( 'Category', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_tag_show',
			[
				'label' => esc_html__( 'Tag', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_total_sell',
			[
				'label' => esc_html__( 'Total Sell', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_total_sell_label',
			[
				'label' => esc_html__('Label', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_total_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'bwdcrtplst_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'creative-productslist-carousel-list' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', 'creative-productslist-carousel-list' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->bwdcrtplst_get_product_filter_options(),
			]
		);

		$this->add_control(
			'bwdcrtplst_product_order_by',
			[
				'label'    => esc_html__( 'Order By', 'creative-productslist-carousel-list' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->bwdcrtplst_get_product_orderby_options(),
			]
		);
		$this->add_control(
			'bwdcrtplst_product_order',
			[
				'label'   => esc_html__( 'Order', 'creative-productslist-carousel-list' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
					'ASC'  => esc_html__( 'Ascending', 'creative-productslist-carousel-list' ),
					'DESC' => esc_html__( 'Descending', 'creative-productslist-carousel-list' ),
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', 'creative-productslist-carousel-list' ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', 'creative-productslist-carousel-list' ),
			]
		);
		$this->add_control(
			'bwdcrtplst_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', 'creative-productslist-carousel-list' ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->bwdcrtplst_get_product_statuses_options(),
			]
		);
		$this->add_control(
			'bwdcrtplst_selected_category',
			[
				'label'   => esc_html__( 'Select Category', 'creative-productslist-carousel-list' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->bwdcrtplst_get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'bwdcrtplst_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', 'creative-productslist-carousel-list' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->bwdcrtplst_get_product_tags_options(),
			]
		);

		$this->add_control(
			'bwdcrtplst_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', 'creative-productslist-carousel-list' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdcrtplst_get_selected_products_options(),
				'condition'   => [
					'bwdcrtplst_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', 'creative-productslist-carousel-list' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdcrtplst_get_selected_products_options(),
				'condition'   => [
					'bwdcrtplst_product_filter_by!' => 'manual',
				]
			]
		);
		$this->add_control(
			'bwdcrtplst_the_all_date',
			[
				'label' => esc_html__( 'Date', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'creative-productslist-carousel-list' ),
					'd' => esc_html__( 'Today', 'creative-productslist-carousel-list' ),
					'm' => esc_html__( 'Current Month', 'creative-productslist-carousel-list' ),
					'coustom' => esc_html__( 'Custom', 'creative-productslist-carousel-list' ),
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'creative-productslist-carousel-list' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'creative-productslist-carousel-list' ),
				'label_block' => true,
				'condition' => [
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'creative-productslist-carousel-list' ),
					'1' => esc_html__( 'Jan', 'creative-productslist-carousel-list' ),
					'2' => esc_html__( 'Feb', 'creative-productslist-carousel-list' ),
					'3' => esc_html__( 'Mar', 'creative-productslist-carousel-list' ),
					'4' => esc_html__( 'Apr', 'creative-productslist-carousel-list' ),
					'5' => esc_html__( 'May', 'creative-productslist-carousel-list' ),
					'6' => esc_html__( 'Jun', 'creative-productslist-carousel-list' ),
					'7' => esc_html__( 'Jul', 'creative-productslist-carousel-list' ),
					'8' => esc_html__( 'Aug', 'creative-productslist-carousel-list' ),
					'9' => esc_html__( 'Sep', 'creative-productslist-carousel-list' ),
					'10' => esc_html__( 'Oct', 'creative-productslist-carousel-list' ),
					'11' => esc_html__( 'Nov', 'creative-productslist-carousel-list' ),
					'12' => esc_html__( 'Dec', 'creative-productslist-carousel-list' ),
				],
				'condition' => [
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'creative-productslist-carousel-list' ),
				'placeholder' => esc_html__( '00', 'creative-productslist-carousel-list' ),
				'condition' => [
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdcrtplst_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', 'creative-productslist-carousel-list' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_badge_style',
			[
				'label' => esc_html__( 'Select Style', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style1', 'creative-productslist-carousel-list' ),
					'style2' => esc_html__( 'Style2', 'creative-productslist-carousel-list' ),
					'style3' => esc_html__( 'Style3', 'creative-productslist-carousel-list' ),
					'style4' => esc_html__( 'Style4', 'creative-productslist-carousel-list' ),
					'style5' => esc_html__( 'Style5', 'creative-productslist-carousel-list' ),
					'style6' => esc_html__( 'Style6', 'creative-productslist-carousel-list' ),
					'style7' => esc_html__( 'Style7', 'creative-productslist-carousel-list' ),
					'style8' => esc_html__( 'Style8', 'creative-productslist-carousel-list' ),
				],
				'prefix_class' => 'bwdcrtplst-badge-',
			]
		);
		$this->add_control(
			'bwdcrtplst_show_sale_badge',
			[
				'label' => esc_html__( 'Show Sale Badge', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', 'creative-productslist-carousel-list' ),
					'text' => esc_html__( 'Sale Text', 'creative-productslist-carousel-list' )
				],
				'condition' => [
					'bwdcrtplst_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcrtplst_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'bwdcrtplst_show_sale_badge' => 'yes',
					'bwdcrtplst_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_sale_badge' => 'yes',
					'bwdcrtplst_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_sale_badge' => 'yes',
					'bwdcrtplst_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_show_stock_out_badge',
			[
				'label' => esc_html__( 'Stock Badge', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'creative-productslist-carousel-list'),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'creative-productslist-carousel-list'),
				'description' => esc_html__('This field will be used only if the product has stock count number.', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_show_featured_badge',
			[
				'label' => esc_html__( 'Featured Badge', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_badge_one_position',
			[
				'label' => esc_html__( 'Badge Left/Right Position', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'left',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'creative-productslist-carousel-list' ),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'creative-productslist-carousel-list' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'bwdcrtplst_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdcrtplst_badge_order',
			[
				'label' => esc_html__( 'Badge Order', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'row',
				'options' => [
					'column' => esc_html__( 'Column', 'creative-productslist-carousel-list' ),
					'column-reverse' => esc_html__( 'Column Reverse', 'creative-productslist-carousel-list' ),
					'row' => esc_html__( 'Row', 'creative-productslist-carousel-list' ),
					'row-reverse' => esc_html__( 'Row Reverse', 'creative-productslist-carousel-list' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-sale-featured-badge' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'bwdcrtplst_show_featured_badge' => 'yes',
					'bwdcrtplst_show_sale_badge' => 'yes',
				],
			]
		);
		
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdcrtplst_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'creative-productslist-carousel-list' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_btn',
			[
				'label' => esc_html__( 'Cart Button', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
				'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_the_cart_type',
			[
				'label' => esc_html__( 'Button Type', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'cart',
				'options' => [
					'cart' => esc_html__( 'Cart Button', 'creative-productslist-carousel-list' ),
					'icon' => esc_html__( 'Icon', 'creative-productslist-carousel-list' ),
					'buy' => esc_html__( 'Buy Now', 'creative-productslist-carousel-list' ),
				],
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_button',
			[
				'label' => esc_html__('Cart Button', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
					'bwdcrtplst_the_cart_type' => 'cart',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
					'bwdcrtplst_the_cart_type' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_details_btn_text',
			[
				'label' => esc_html__('Details Button', 'creative-productslist-carousel-list'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', 'creative-productslist-carousel-list'),
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
					'bwdcrtplst_the_cart_type' => 'buy',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdcrtplst_product_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'creative-productslist-carousel-list' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'creative-productslist-carousel-list' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'creative-productslist-carousel-list' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_bottom_part' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .bwdcrtplst_product_meta' => 'justify-content: {{VALUE}};',
					'{{WRAPPER}} .bwdcrtplst_product_price' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_content_padding',
			[
				'label' => esc_html__('Content Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_the_box_content_border_radius',
			[
				'label' => esc_html__('Content Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_bottom_part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_title_options',
			[
				'label' => esc_html__( 'Title', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdcrtplst_product_title_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_title_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_title',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_title_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_title_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_title_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_title',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_description_options',
			[
				'label' => esc_html__( 'Description', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcrtplst_product_description_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_description_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_desce',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_description_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_desc_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_desc_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_desce',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_options',
			[
				'label' => esc_html__( 'Button', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcrtplst_product_button_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_button_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_button a, {{WRAPPER}} .bwdcrtplst_button i',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_button a, {{WRAPPER}} .bwdcrtplst_button i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_product_button_border',
				'label' => esc_html__( 'Border', 'creative-productslist-carousel-list' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_bttn .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_productList_4 .bwdcrtplst_product_meta',
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_button_bg_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_product_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdcrtplst_product_button_icon_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_button_icon_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_bttn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button:hover a',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_product_button_border_hover',
				'label' => esc_html__( 'Border', 'creative-productslist-carousel-list' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_bttn .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_productList_4 .bwdcrtplst_product_meta:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_button_bg_hover_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_product_bttn:hover, {{WRAPPER}} .bwdcrtplst_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_the_post_image_height_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_image' => 'block-size: {{SIZE}}{{UNIT}}% !important; inline-size: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_image_overly_b::before, {{WRAPPER}} .bwdcrtplst_image_overly_a::after, {{WRAPPER}} .bwdcrtplst_productList_list_40 .bwdcrtplst_product_bottom_part::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_overlay_icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_style_selection' => ['style4', 'style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_image_border_radius',
			[
				'label' => esc_html__('Image Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_productList_list_32 .bwdcrtplst_product_image, {{WRAPPER}} .bwdcrtplst_product_image img, {{WRAPPER}} .bwdcrtplst_product_image, {{WRAPPER}} .bwdcrtplst_product_image::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// Price Styling
		$this->start_controls_section(
			'bwdcrtplst_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_price' => 'yes',
				],
			]
		);

		$this->add_control(
			'bwdcrtplst_price_between_gap',
			[
				'label' => esc_html__( 'Between Gap', 'creative-productslist-carousel-list' ),
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
					'{{WRAPPER}} .bwdcrtplst_product_price' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Sale Price
		$this->add_control(
			'bwdcrtplst_blog_regular_sale_price_options',
			[
				'label' => esc_html__( 'Sale Price', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_sale_price_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_sale_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_sale_price_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-current-price span bdi',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_sale_price_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-current-price span bdi, {{WRAPPER}} .bwdcrtplst-current-price' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_sale_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-current-price span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);

		$this->add_responsive_control(
            'bwdcrtplst_blog_sale_price_padding',
            [
                'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst-current-price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_sale_price_margin',
            [
                'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst-current-price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_sale_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst-current-price, {{WRAPPER}} .bwdcrtplst-current-price span bdi' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_sale_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_sale_price_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-current-price:hover span bdi',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_sale_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-current-price:hover span bdi, {{WRAPPER}} .bwdcrtplst-current-price:hover' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_sale_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-current-price:hover span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		// Regular Price
		$this->add_control(
			'bwdcrtplst_blog_regular_price_options',
			[
				'label' => esc_html__( 'Regular Price', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_regular_price_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_regular_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_regular_price_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price del span bdi, {{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price, {{WRAPPER}} .bwdcrtplst_product_price span bdi', 
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_regular_price_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price del span bdi, {{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price, {{WRAPPER}} .bwdcrtplst_product_price span bdi, {{WRAPPER}} .bwdcrtplst_product_price, {{WRAPPER}} .bwdcrtplst_product_price span bdi' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_regular_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price, {{WRAPPER}} .bwdcrtplst_product_price span bdi' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_regular_price_padding',
            [
                'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_product_price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_regular_price_margin',
            [
                'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price, {{WRAPPER}} .bwdcrtplst_product_price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_regular_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price, {{WRAPPER}} .bwdcrtplst_product_price, {{WRAPPER}} .bwdcrtplst_product_price span bdi' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_regular_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_regular_price_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price:hover del span bdi, {{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price:hover',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_regular_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price:hover del span bdi, {{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price:hover, {{WRAPPER}} .bwdcrtplst_product_price span bdi:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_regular_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-regular-price.bwdcrtplst-sale-price:hover, {{WRAPPER}} .bwdcrtplst_product_price span bdi:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_comment_options',
			[
				'label' => esc_html__( 'Review', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdcrtplst_product_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_comment a, {{WRAPPER}} .bwdcrtplst_product_comment .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_comment a, {{WRAPPER}} .bwdcrtplst_product_comment .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_taxonomy_comment_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment a, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment a, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_taxonomy_comment_hover_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'bwdcrtplst_product_comment_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_comment' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_comment_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_tags_options',
			[
				'label' => esc_html__( 'Sale', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_sale' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdcrtplst_product_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_tag, {{WRAPPER}} .bwdcrtplst_product_tag a, {{WRAPPER}} .bwdcrtplst_product_tag .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_tag, {{WRAPPER}} .bwdcrtplst_product_tag a, {{WRAPPER}} .bwdcrtplst_product_tag .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_taxonomy_tags_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_tag_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag a, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag a, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_taxonomy_tags_hover_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
			'bwdcrtplst_taxonomy_tags_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_categories_options',
			[
				'label' => esc_html__( 'Category', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdcrtplst_product_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_product_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_category:hover li a, {{WRAPPER}} .bwdcrtplst_category:hover .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_category li .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_product_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a:hover, {{WRAPPER}} .bwdcrtplst_product_box .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_product_box .bwdcrtplst_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bwdcrtplst_product_taxonomy_categories_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_cat_margin',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_taxonomy_cat_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_product_style_section',
			[
				'label' => esc_html__( 'Box Style', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdcrtplst_product_box_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_product_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-productslist-carousel-list' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdcrtplst_product_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_productList_list_40 .bwdcrtplst_product_box, {{WRAPPER}} .bwdcrtplst_n_bg_b:before, {{WRAPPER}} .bwdcrtplst_n_bg, {{WRAPPER}} .bwdcrtplst_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_product_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcrtplst_productList_list_40 .bwdcrtplst_product_box, {{WRAPPER}} .bwdcrtplst_g_bg_b:before, {{WRAPPER}} .bwdcrtplst_g_bg, {{WRAPPER}} .bwdcrtplst_box_style_cmn, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_product_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'creative-productslist-carousel-list' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_g_bg_b:before, {{WRAPPER}} .bwdcrtplst_box_sha, {{WRAPPER}} .bwdcrtplst_box_style_cmn, {{WRAPPER}} .bwdcrtplst_product_box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_product_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-productslist-carousel-list' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdcrtplst_product_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_productList_list_40 .bwdcrtplst_product_box:hover, {{WRAPPER}} .bwdcrtplst_n_bg_b:hover:before, {{WRAPPER}} .bwdcrtplst_n_bg:hover, {{WRAPPER}} .bwdcrtplst_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_product_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'creative-productslist-carousel-list' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcrtplst_productList_list_40 .bwdcrtplst_product_box:hover, {{WRAPPER}} .bwdcrtplst_g_bg_b:hover:before, {{WRAPPER}} .bwdcrtplst_g_bg:hover, {{WRAPPER}} .bwdcrtplst_box_style_cmn:hover, {{WRAPPER}} .bwdcrtplst_product_box:hover .bwdcrtplst_product_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_product_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'creative-productslist-carousel-list' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_product_box_border',
				'label' => esc_html__( 'Border', 'creative-productslist-carousel-list' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_product_box',
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_product_box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_product_box_padding',
			[
				'label' => esc_html__('Padding', 'creative-productslist-carousel-list'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{RIGHT}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_productpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', 'creative-productslist-carousel-list' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdcrtplst-productpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'creative-productslist-carousel-list' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdcrtplst_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdcrtplst_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'creative-productslist-carousel-list' ),
				'label_on' => esc_html__( 'Custom', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdcrtplst_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'bwdcrtplst_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'bwdcrtplst_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdcrtplst_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'creative-productslist-carousel-list' ),
				'label_on' => esc_html__( 'Custom', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
						'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
						'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
						'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
						'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdcrtplst_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdcrtplst_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'creative-productslist-carousel-list' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdcrtplst_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'creative-productslist-carousel-list' ),
				'label_on' => esc_html__( 'Custom', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdcrtplst_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
					'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdcrtplst_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'creative-productslist-carousel-list' ),
						'text'  => esc_html__( 'Text', 'creative-productslist-carousel-list' ),
					],
					'condition' => [
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdcrtplst_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdcrtplst_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdcrtplst_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'creative-productslist-carousel-list' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdcrtplst_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'creative-productslist-carousel-list' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdcrtplst_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'creative-productslist-carousel-list' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'creative-productslist-carousel-list' ),
				'label_on' => esc_html__( 'Custom', 'creative-productslist-carousel-list' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdcrtplst_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'creative-productslist-carousel-list' ),
					'label_off' => esc_html__( 'Hide', 'creative-productslist-carousel-list' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdcrtplst_dots_type',
				[
					'label' => esc_html__( 'Type', 'creative-productslist-carousel-list' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'creative-productslist-carousel-list' ),
						'numbers'  => esc_html__( 'Numbers', 'creative-productslist-carousel-list' ),
					],
					'condition' => [
						'bwdcrtplst_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdcrtplst_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'creative-productslist-carousel-list' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots1'  => esc_html__( 'Style 1', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots2'  => esc_html__( 'Style 2', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots3'  => esc_html__( 'Style 3', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots4'  => esc_html__( 'Style 4', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots5'  => esc_html__( 'Style 5', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots6'  => esc_html__( 'Style 6', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots7'  => esc_html__( 'Style 7', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots8'  => esc_html__( 'Style 8', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots9'  => esc_html__( 'Style 9', 'creative-productslist-carousel-list' ),
						'bwdcrtplst_dots10'  => esc_html__( 'Style 10', 'creative-productslist-carousel-list' ),
					],
					'condition' => [
						'bwdcrtplst_dots_switcher' => 'yes',
						'bwdcrtplst_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdcrtplst_catproduct_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdcrtplst_arrow_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcrtplst_arrow_size',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev span, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next span',
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcrtplst_arrow_width',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdcrtplst_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcrtplst_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdcrtplst_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 0.1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcrtplst_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcrtplst_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdcrtplst_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdcrtplst_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcrtplst_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdcrtplst_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcrtplst_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover span, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover span',
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcrtplst_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdcrtplst_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcrtplst_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdcrtplst_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcrtplst_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcrtplst_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdcrtplst_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdcrtplst_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcrtplst_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdcrtplst_catproduct_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdcrtplst_dots_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdcrtplst_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdcrtplst_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdcrtplst_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdcrtplst_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdcrtplst_dots_alignment',
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
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcrtplst_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcrtplst_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width_active',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcrtplst_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width_hover',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height_hover',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}
	
	protected function render() {
		$settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdcrtplst_slide_margin = $settings['bwdcrtplst_slide_margin'];
		$bwdcrtplst_slide_mobile_view = $settings['bwdcrtplst_slide_mobile_view'];
		$bwdcrtplst_slide_tablet_view = $settings['bwdcrtplst_slide_tablet_view'];
		$bwdcrtplst_slide_desktop_view = $settings['bwdcrtplst_slide_desktop_view'];
		$bwdcrtplst_infinite_autoplay_switcher = $settings['bwdcrtplst_infinite_autoplay_switcher'];
		$bwdcrtplst_infinite_loop_switcher = $settings['bwdcrtplst_infinite_loop_switcher'];
		$bwdcrtplst_HoverPause_switcher = $settings['bwdcrtplst_HoverPause_switcher'];
		$bwdcrtplst_centermode_switcher = $settings['bwdcrtplst_centermode_switcher'];
		$bwdcrtplst_autoplay_timeout = $settings['bwdcrtplst_autoplay_timeout'];
		$bwdcrtplst_autoplay_speed = $settings['bwdcrtplst_autoplay_speed'];
		// $bwdcrtplst_stace_padding = $settings['bwdcrtplst_stace_padding'];
		//nav--------------------------------------------------
		$bwdcrtplst_nav_switcher = $settings['bwdcrtplst_nav_switcher'];
		$bwdcrtplst_nav_type = $settings['bwdcrtplst_nav_type'];

		if( $bwdcrtplst_nav_switcher == 'yes' ) {
			if( $bwdcrtplst_nav_type == 'icon' ) {
				$prev = $settings['bwdcrtplst_nav_prev_arrow']['value'];
				$next = $settings['bwdcrtplst_nav_next_arrow']['value'];
			} else if( $bwdcrtplst_nav_type == 'text' ) {
				$prev = $settings['bwdcrtplst_nav_prev_text'];
				$next = $settings['bwdcrtplst_nav_next_text'];
			} 
		}
		$bwdcrtplst_dots_switcher = $settings['bwdcrtplst_dots_switcher'];
		$bwdcrtplst_dots_type = $settings['bwdcrtplst_dots_type'];
		// for-owl-carousel-end
		
		$bwdcrtplst_products_style = $settings['bwdcrtplst_products_zone_style'];
		$bwdcrtplst_title_tag = $settings['bwdcrtplst_title_tag'];
		$bwdcrtplst_title_link = $settings['bwdcrtplst_title_enable_link'];
		$bwdcrtplst_title_length = $settings['bwdcrtplst_title_length'];
		$bwdcrtplst_featured_image = $settings['bwdcrtplst_products_show_image'];
		$bwdcrtplst_image_link_enabled = $settings['bwdcrtplst_products_image_clickable'];
		$bwdcrtplst_review_count = $settings['bwdcrtplst_review_count'];
		$bwdcrtplst_badge_one_position = $settings['bwdcrtplst_badge_one_position'];
		$bwdcrtplst_show_sale_badge = $settings['bwdcrtplst_show_sale_badge'];
		$bwdcrtplst_show_featured_badge = $settings['bwdcrtplst_show_featured_badge'];
		$bwdcrtplst_show_stock_out_badge = $settings['bwdcrtplst_show_stock_out_badge'];
		$bwdcrtplst_sale_badge_type = $settings['bwdcrtplst_sale_badge_type'];
		$bwdcrtplst_sale_badge_before_percent_text = $settings['bwdcrtplst_sale_badge_before_percent_text'];
		$bwdcrtplst_sale_badge_after_percent_text = $settings['bwdcrtplst_sale_badge_after_percent_text'];
		$bwdcrtplst_sale_badge_text = $settings['bwdcrtplst_sale_badge_text'];
		$bwdcrtplst_badge_featured_text = $settings['bwdcrtplst_show_badge_featured_text'];
		$bwdcrtplst_badge_stock_out_text = $settings['bwdcrtplst_show_badge_stock_out_text'];
		$bwdcrtplst_badge_stock_in_text = $settings['bwdcrtplst_show_badge_stock_in_text'];
		$bwdcrtplst_badge_stock_in_number_text = $settings['bwdcrtplst_show_badge_stock_in_number_text'];
		$bwdcrtplst_products_perpage = $settings['bwdcrtplst_the_product_per_page'];
		$bwdcrtplst_description_words = $settings['bwdcrtplst_description_words'];
		$bwdcrtplst_word_trim_indi = $settings['bwdcrtplst_word_trim_indi'];
		$bwdcrtplst_cart_button = $settings['bwdcrtplst_cart_button'];
		$bwdcrtplst_filter_by = $settings['bwdcrtplst_product_filter_by'];
		$bwdcrtplst_selected_category = $settings['bwdcrtplst_selected_category'];
		$bwdcrtplst_selected_tags = $settings['bwdcrtplst_selected_tags'];

		// Product Action 
		$bwdcrtplst_the_cart_type = $settings['bwdcrtplst_the_cart_type'];
		$bwdcrtplst_cart_button = $settings['bwdcrtplst_cart_button'];
		$bwdcrtplst_details_btn_text = $settings['bwdcrtplst_details_btn_text'];

		// Filter Query
		$bwdcrtplst_selected_include_products = $settings['bwdcrtplst_selected_include_products'];
		$bwdcrtplst_selected_exclude_products = $settings['bwdcrtplst_selected_exclude_products'];
		$bwdcrtplst_selected_statuses = $settings['bwdcrtplst_product_grid_products_status'];
		$bwdcrtplst_order_by = $settings['bwdcrtplst_product_order_by'];
		$bwdcrtplst_order = $settings['bwdcrtplst_product_order'];

		$bwdcrtplst_show_sell = $settings['bwdcrtplst_total_sell'];
		$bwdcrtplst_sell_label = $settings['bwdcrtplst_total_sell_label'];

		$bwdcrtplst_paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1; 
		
		$bwdcrtplst_the_all_date = $settings['bwdcrtplst_the_all_date'];
		$bwdcrtplst_text_str = ' ';
		if('d' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_month = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_year = $bwdcrtplst_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_month = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_year = $bwdcrtplst_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_month = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_year = $bwdcrtplst_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_year = $settings['bwdcrtplst_product_coustom_year'];
			$bwdcrtplst_coustom_month = $settings['bwdcrtplst_product_coustom_month'];
			$bwdcrtplst_coustom_day = $settings['bwdcrtplst_product_coustom_day'];
			$wdbp_time = $bwdcrtplst_text_str;
		} else{
			$bwdcrtplst_coustom_day = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_month = $bwdcrtplst_text_str;
			$bwdcrtplst_coustom_year = $bwdcrtplst_text_str;
			$wdbp_time = $bwdcrtplst_text_str;
		}
		

		$bwdcrtplst_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $bwdcrtplst_products_perpage,
			'orderby'        => $bwdcrtplst_order_by,
			'order'          => $bwdcrtplst_order,
			'post__in'       => $bwdcrtplst_selected_include_products,
			'post__not_in'   => $bwdcrtplst_selected_exclude_products,
			'post_status'    => $bwdcrtplst_selected_statuses,
			'paged' 		 => $bwdcrtplst_paged,
			'date_query'     => $wdbp_time,
			'year'           => $bwdcrtplst_coustom_year,
			'monthnum'       => $bwdcrtplst_coustom_month,
			'day'            => $bwdcrtplst_coustom_day, 
		);
		
		switch ($bwdcrtplst_filter_by) {
			 case 'featured':
				$bwdcrtplst_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$bwdcrtplst_args['meta_query'] = array(
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
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$bwdcrtplst_args['orderby'] = 'meta_value_num';
				$bwdcrtplst_args['order'] = 'ASC';
				break;

			case 'popularity':
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$bwdcrtplst_args['meta_query'] = array(
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
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$bwdcrtplst_args['orderby'] = 'meta_value_num';
				$bwdcrtplst_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$bwdcrtplst_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$bwdcrtplst_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$bwdcrtplst_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$bwdcrtplst_args['meta_query'] = array (
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
		if ($bwdcrtplst_selected_category) {
			$bwdcrtplst_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $bwdcrtplst_selected_category,
			);
		}
		// If specific tags are selected, add a tag filter to the query
		if (!empty($bwdcrtplst_selected_tags)) {
			$bwdcrtplst_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $bwdcrtplst_selected_tags,
				'operator' => 'IN',
			);
		}

		include(__DIR__.'/product-list-caro/condition.php');
		
		if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){?><?php
			if( $bwdcrtplst_products_style ) {?>
				<div class="<?php echo $style_extra_class ?> bwdcrtplst_commons bwdcrtplst-slider-common <?php echo esc_attr($settings['bwdcrtplst_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdcrtplst-productpost-custom-id'] ); ?>">
					<?php include(__DIR__.'/product-list-caro/bwdcrtplst-variable.php'); ?>
					<div class="bwdcrtplst-owl bwdcrtplst-owl-carousel bwdcrtplst-owl-theme">
						<?php $bwdcrtplst_all_products = new \WP_Query( $bwdcrtplst_args ); 
						if($bwdcrtplst_all_products->have_posts()){
							while ( $bwdcrtplst_all_products->have_posts() ){
								$bwdcrtplst_all_products->the_post();
								global $product; ?>
								<div class="bwdcrtplst_wrap">
									<div class="bwdcrtplst_product_box bwdcrtplst_box_sha">
										<div class="bwdcrtplst-sale-featured-badge <?php echo esc_attr( $bwdcrtplst_badge_one_position == 'right' ) ? 'bwdcrtplst-badge-right' : 'bwdcrtplst-badge-left'; ?>">
											<?php
											// Feature Badge
											if ('yes' === $bwdcrtplst_show_featured_badge && $product->is_featured()) {
												echo '<p class="bwdcrtplst-featured-badge">' . esc_html($bwdcrtplst_badge_featured_text) . '</p>';
											}
											// Sale Badge
											if ('yes' === $bwdcrtplst_show_sale_badge && $product->is_on_sale()) {
												$regular_price = floatval($product->get_regular_price());
												$sale_price = floatval($product->get_sale_price());
												if ($regular_price > 0) {
													$badge_content = ('percent' === $bwdcrtplst_sale_badge_type) ? 
														esc_html($bwdcrtplst_sale_badge_before_percent_text) . ' ' . round(100 - ($sale_price / $regular_price) * 100) . '% ' . esc_html($bwdcrtplst_sale_badge_after_percent_text) :
														esc_html($bwdcrtplst_sale_badge_text);
											
													echo '<p class="bwdcrtplst-sale-badge">' . $badge_content . '</p>';
												} else {
													// Handle the case where the regular price is zero if necessary
													echo '';
												}
											}
											
											 ?>
											<?php
											//Stock Badge
											if ('yes' === $bwdcrtplst_show_stock_out_badge) {
												echo !$product->is_in_stock() ? '<p class="bwdcrtplst-stock-badge">' . esc_html($bwdcrtplst_badge_stock_out_text) . '</p>' : '<p class="bwdcrtplst-stock-badge bwdcrtplst-stock-count">' . ($product->get_stock_quantity() > 0 ? esc_html__($bwdcrtplst_badge_stock_in_number_text) . ' : ' . $product->get_stock_quantity() : esc_html__($bwdcrtplst_badge_stock_in_text)) . '</p>';
											}?>
										</div>
										<?php if(has_post_thumbnail()){ ?>
										<?php if( $bwdcrtplst_products_style == 'style16' ){ ?>
											<div class="bwdcrtplst-productextra-img">
												<?php include(__DIR__.'/product-list-caro/product-image.php'); ?>
												</div>
											</div>
										<?php }else{
											if( $bwdcrtplst_products_style !== 'style17' && $bwdcrtplst_products_style !== 'style18' && $bwdcrtplst_products_style !== 'style19' ){?>
											<?php include(__DIR__.'/product-list-caro/product-image.php'); ?>
											</div>
											<?php } ?>
											<?php }} if( $bwdcrtplst_products_style == 'style17' || $bwdcrtplst_products_style == 'style18' || $bwdcrtplst_products_style == 'style19' ){ ?>
												<?php include(__DIR__.'/product-list-caro/product-image.php'); ?>
											<?php } ?>
											<div class="bwdcrtplst_product_bottom_part bwdcrtplst_box_style_cmn">
												<div class="bwdcrtplst_product_meta">
													
													<?php if('yes' === $settings['bwdcrtplst_tag_show']){ ?>
													<div class="bwdcrtplst_product_tag"><?php echo wc_get_product_tag_list(get_the_id()); ?></div>
													<?php } ?>
													<?php if('yes' === $bwdcrtplst_show_sell){ ?>
													<div class="bwdcrtplst_product_tag bwdcrtplst_product_sale"><?php echo esc_html__($bwdcrtplst_sell_label) .'<span>' . $product->get_total_sales().'</span>'; ?></div>
													<?php } ?>

													<?php if('yes' === $settings['bwdcrtplst_review']){ ?>
													<div class="bwdcrtplst_product_comment">
														<?php include(__DIR__.'/product-list-caro/star_rating.php'); ?>
													</div>
													<?php } ?>

													<?php if('yes' === $settings['bwdcrtplst_cat_show']){ ?>
													<div class="bwdcrtplst_category">
														<ul class="post-categories"><li><?php echo wc_get_product_category_list(get_the_id()); ?></li></ul>
													</div>
													<?php } ?>
												</div>
												
												<?php if('yes' === $settings['bwdcrtplst_title']){ ?>
													<?php include 'product-list-caro/title.php'; ?>
												<?php } ?>

												<?php if('yes' === $settings['bwdcrtplst_price']){ ?>
													<?php include 'product-list-caro/price.php'; ?>
												<?php } ?>

												<?php if('yes' === $settings['bwdcrtplst_description']){ ?>
												<div class="bwdcrtplst_product_description">
													<div class="bwdcrtplst_desce"><?php echo wp_trim_words($product->get_short_description(), $bwdcrtplst_description_words, $bwdcrtplst_word_trim_indi); ?></div>
												</div>
												<?php } ?>
												<?php if('yes' === $settings['bwdcrtplst_cart_btn']): ?>
													<div class="bwdcrtplst_product_bttn">
														<a href="<?php echo esc_url(('cart' === $bwdcrtplst_the_cart_type || 'icon' === $bwdcrtplst_the_cart_type) ? $product->add_to_cart_url() : get_permalink()); ?>" class="bwdcrtplst_button">
															<?php 
															echo ('cart' === $bwdcrtplst_the_cart_type) ? esc_html__($bwdcrtplst_cart_button) : 
																(('buy' === $bwdcrtplst_the_cart_type) ? esc_html__($bwdcrtplst_details_btn_text) : '');

															if ('icon' === $bwdcrtplst_the_cart_type) {
																\Elementor\Icons_Manager::render_icon($settings['bwdcrtplst_cart_button_icon'], ['aria-hidden' => 'true']);
															} 
															?>
														</a>
													</div>
												<?php endif; ?>
											</div>
											<?php if( $bwdcrtplst_products_style == 'style17' || $bwdcrtplst_products_style == 'style18' || $bwdcrtplst_products_style == 'style19' ){ ?>
											</div>
											<?php } ?>
										
									</div>
								</div>
							<?php } }
						wp_reset_query();?>
					</div>
				</div><?php
			}
		} else{
			?><a href="https://WordPress.org/plugins/WooCommerce/"><div class="bwdcrtplst_wooc_not_acivate_notice"><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', 'creative-productslist-carousel-list'); ?></div></a><?php
		}
	}
}

