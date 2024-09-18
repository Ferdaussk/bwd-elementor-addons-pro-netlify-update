<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class wppgpc_product_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'wppgpc-product-carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Product Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'icon-slides bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdthe_woocommerce_category'];
	}

	protected function wppgpc_get_selected_products_options() {
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
	


	protected function get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function get_product_orderby_options() {
		return apply_filters('wppgpc/product-grid/orderby-options', [
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
	protected function get_product_filter_options() {
		return apply_filters('wppgpc/product-grid/filter-options', [
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

		//tab-content
		$this->start_controls_section(
			'wppgpc_content_section',
			[
				'label' => esc_html__( 'Layout Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'wppgpc_products_zone_style',
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
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'wppgpc_products_query_section',
			[
				'label' => esc_html__( 'Product Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'wppgpc_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->get_product_filter_options(),
			]
		);

		$this->add_control(
			'wppgpc_product_order_by',
			[
				'label'    => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->get_product_orderby_options(),
			]
		);
		$this->add_control(
			'wppgpc_product_order',
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
			'wppgpc_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'wppgpc_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->get_product_statuses_options(),
			]
		);
		$this->add_control(
			'wppgpc_selected_category',
			[
				'label'   => esc_html__( 'Select Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'wppgpc_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_tags_options(),
			]
		);

		$this->add_control(
			'wppgpc_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->wppgpc_get_selected_products_options(),
				'condition'   => [
					'wppgpc_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'wppgpc_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->wppgpc_get_selected_products_options(),
				'condition'   => [
					'wppgpc_product_filter_by!' => 'manual',
				]
			]
		);

		$this->add_control(
			'wppgpc_the_all_date',
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
			'wppgpc_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'wppgpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_coustom_month',
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
					'wppgpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppgpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'wppgpc_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'wppgpc_products_image_heading',
			[
				'label' => esc_html__( 'Featured Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$this->add_control(
			'wppgpc_products_show_image',
			[
				'label' => esc_html__( 'Show Featured Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'wppgpc_products_image_clickable',
			[
				'label' => esc_html__( 'Enable Clickable', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'wppgpc_products_show_image' => 'yes',
				]
			]
		);

		$this->add_control(
			'wppgpc_products_title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'wppgpc_title',
			[
				'label' => esc_html__( 'Show Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'wppgpc_title_tag',
			[
				'label' => esc_html__( 'HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__( 'H1', BWDEB_ROOT_AUTHOR_PRO ),
					'h2' => esc_html__( 'H2', BWDEB_ROOT_AUTHOR_PRO ),
					'h3' => esc_html__( 'H3', BWDEB_ROOT_AUTHOR_PRO ),
					'h4' => esc_html__( 'H4', BWDEB_ROOT_AUTHOR_PRO ),
					'h5' => esc_html__( 'H5', BWDEB_ROOT_AUTHOR_PRO ),
					'h6' => esc_html__( 'H6', BWDEB_ROOT_AUTHOR_PRO ),
					'div' => esc_html__( 'Div', BWDEB_ROOT_AUTHOR_PRO ),
					'span' => esc_html__( 'Span', BWDEB_ROOT_AUTHOR_PRO ),
					'p' => esc_html__( 'P', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'wppgpc_title_enable_link',
			[
				'label' => esc_html__( 'Enable Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'wppgpc_title_length',
			[
				'label' => __('Word Length', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'wppgpc_products_description_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'wppgpc_description',
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
			'wppgpc_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_price',
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
			'wppgpc_date',
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
			'wppgpc_review',
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
			'wppgpc_review_count',
			[
				'label' => esc_html__( 'Review Count', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'wppgpc_review' => 'yes',
				]
			]
		);
		$this->add_control(
			'wppgpc_cat',
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
			'wppgpc_tag',
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
			'wppgpc_sell',
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
			'wppgpc_sell_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'wppgpc_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'wppgpc_badge_style',
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
				'prefix_class' => 'wppgpc-badge-',
			]
		);
		$this->add_control(
			'wppgpc_show_sale_badge',
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
			'wppgpc_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Sale Text', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
					'wppgpc_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
					'wppgpc_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
					'wppgpc_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_show_stock_out_badge',
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
			'wppgpc_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used only if the product has stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_show_featured_badge',
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
			'wppgpc_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_badge_one_position',
			[
				'label' => esc_html__( 'Sale & Featured Badge Align', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-sale-featured-badge' => 'align-items: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_show_featured_sale_order',
			[
				'label' => esc_html__( 'Featured & Sale Badge Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'wppgpc_products_actions_section',
			[
				'label' => esc_html__( 'Product Actions', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'wppgpc_view_btn',
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
			'wppgpc_cart_btn',
			[
				'label' => esc_html__( 'Cart', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'wppgpc_view_btn' => 'yes'
				],
			]
		);
		$this->add_control(
			'wppgpc_cart_button',
			[
				'label' => esc_html__('Cart Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_cart_btn' => 'yes',
					'wppgpc_products_zone_style' => ['style1', 'style5'],
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'wppgpc_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'wppgpc_products_zone_style' => ['style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
					'wppgpc_cart_btn' => 'yes',
					'wppgpc_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_btn',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'wppgpc_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'wppgpc_main_button',
			[
				'label' => esc_html__('Button Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'wppgpc_btn' => 'yes',
					'wppgpc_view_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_responsive_control(
			'wppgpc_choose_link',
			[
				'label' => esc_html__( 'Choose Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'coustom_link' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'wppgpc_btn' => 'yes',
					'wppgpc_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_main_button_link',
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
					'wppgpc_choose_link' => 'coustom_link',
				],
			]
		);
		$this->end_controls_section(); 

		// Carousel Settings Controls start
		$this->start_controls_section(
			'wppgpc_product_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'wppgpc-product-custom-id',
			[
				'label' => esc_html__( 'Custom Id', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'change-id', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//popover-autoplay
		$this->add_control(
			'wppgpc_aupoplay_popover',
			[
				'label' => esc_html__( 'Carousel Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'wppgpc_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'wppgpc_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);
				//infinite_loop_switcher
				$this->add_control(
					'wppgpc_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'wppgpc_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);

				$this->add_control(
					'wppgpc_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'wppgpc_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 500,
					]
				);

				$this->add_control(
					'wppgpc_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();

		//item-gap
		$this->add_control(
			'wppgpc_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);
		
		//popover-responsive-device
		$this->add_control(
			'wppgpc_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'wppgpc_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'wppgpc_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'wppgpc_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'wppgpc_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'wppgpc_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'wppgpc_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'wppgpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'wppgpc_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'wppgpc_nav_type' => 'icon',
						'wppgpc_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'wppgpc_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'wppgpc_nav_type' => 'icon',
						'wppgpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'wppgpc_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'wppgpc_nav_type' => 'text',
						'wppgpc_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'wppgpc_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'wppgpc_nav_type' => 'text',
						'wppgpc_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'wppgpc_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'wppgpc_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'wppgpc_dots_type',
				[
					'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
						'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'wppgpc_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'wppgpc_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
						'wppgpc_dots10'  => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'wppgpc_dots_switcher' => 'yes',
						'wppgpc_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();
		// Carousel Settings Controls End

		// Style Tab (ferdaus start)
		$this->start_controls_section(
			'wppgpc_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'wppgpc_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
		$this->add_control(
			'wppgpc_blog_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'wppgpc_title' => 'yes',
				],
				'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'wppgpc_blog_title_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_title_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card-heading .wppgpc-product-title',
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-heading .wppgpc-product-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-heading' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card-heading:hover .wppgpc-product-title',
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-heading:hover .wppgpc-product-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-heading:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'wppgpc_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_title' => 'yes',
				],
            ]
        );
		

		$this->add_control(
			'wppgpc_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
				'condition' => [
					'wppgpc_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'wppgpc_blog_description_options',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'wppgpc_description' => 'yes',
				],
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'wppgpc_blog_description_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_description_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card-decs',
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-decs, {{WRAPPER}} .wppgpc-card .wppgpc-contentbx' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card-decs:hover',
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-decs:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card-decs:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'wppgpc_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card-decs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card-decs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();


		$this->start_controls_section(
			'wppgpc_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'wppgpc_blog_button_options',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'wppgpc_blog_button_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_button_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a',
			]
		);
		$this->add_control(
			'wppgpc_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-card-button:hover a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button:hover a',
			]
		);
		$this->add_control(
			'wppgpc_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-card-button:hover a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-card-button:hover a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-card-button:hover a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button:hover a',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'wppgpc_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-card-button a, {{WRAPPER}} .wppgpc-card-area-sk .wppgpc-card .wppgpc-card-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'wppgpc_cart_button_options',
			[
				'label' => esc_html__( 'Cart Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'wppgpc_cart_button_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_cart_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_cart_button_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a',
			]
		);
		$this->add_control(
			'wppgpc_cart_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_cart_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_cart_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a',
			]
		);
		$this->add_responsive_control(
            'wppgpc_cart_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_cart_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_cart_button_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn:hover a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon:hover a',
			]
		);
		$this->add_control(
			'wppgpc_cart_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn:hover a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_cart_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn:hover a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_cart_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn:hover a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon:hover a',
			]
		);
		$this->add_responsive_control(
            'wppgpc_cart_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn:hover a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon:hover a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'wppgpc_cart_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_cart_button_icon_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-addtocard-btn a, {{WRAPPER}} .wppgpc-card .wppgpc-card-icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'wppgpc_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-imgbx img, {{WRAPPER}} .wppgpc-card .wppgpc-imgbx2 img' => 'height: {{SIZE}}px !important;',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc_for_image_bg, {{WRAPPER}} .wppgpc-card .wppgpc-upper-item .wppgpc-imgbx a:before, {{WRAPPER}} .wppgpc-card:before, {{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-sub-content, {{WRAPPER}} .wppgpc-card-area-21 .wppgpc-card .wppgpc-upper-item::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'wppgpc_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-imgbx img, {{WRAPPER}} .wppgpc-card .wppgpc-imgbx2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_price_options',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_price' => 'yes',
				],
			]
		);
		// New Price
		$this->add_control(
			'wppgpc_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Sale Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'wppgpc_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price.wppgpc-sale-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'wppgpc_blog_new_price_options',
			[
				'label' => esc_html__( 'Regular Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
				{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price:hover,
				{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price:hover,
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price:hover,
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'wppgpc_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-current-price, 
					{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-price-box .wppgpc-regular-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'wppgpc_badge_style_section',
			[
				'label' => esc_html__( 'Sale / Stock Out Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_typography_heading',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_sale_badge_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-sale-badge',
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_feature_badge_typography_heading',
			[
				'label' => esc_html__( 'Feature', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_feature_badge_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-featured-badge',
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_stock_badge_typography_heading',
			[
				'label' => esc_html__( 'Stock', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_stock_badge_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-stock-badge, {{WRAPPER}} .wppgpc-card .wppgpc-stock-count',
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_color',
			[
				'label' => esc_html__( 'Sale Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-sale-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_feature_badge_color',
			[
				'label' => esc_html__( 'Feature Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-featured-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_stock_badge_color',
			[
				'label' => esc_html__( 'Stock Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-stock-badge, {{WRAPPER}} .wppgpc-card .wppgpc-stock-count' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_sale_badge_bg_color',
			[
				'label' => esc_html__( 'Sale Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-sale-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_feature_badge_bg_color',
			[
				'label' => esc_html__( 'Feature Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-featured-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'wppgpc_stock_badge_bg_color',
			[
				'label' => esc_html__( 'Stock Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-stock-badge, {{WRAPPER}} .wppgpc-card .wppgpc-stock-count' => 'background: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'wppgpc_sale_badge_padding',
            [
                'label' => esc_html__('Sale Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-sale-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_show_sale_badge' => 'yes',
				]
            ]
        );
		$this->add_responsive_control(
            'wppgpc_feature_badge_padding',
            [
                'label' => esc_html__('Feature Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-featured-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_show_featured_badge' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_stock_badge_padding',
            [
                'label' => esc_html__('Stock Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-stock-badge, {{WRAPPER}} .wppgpc-card .wppgpc-stock-count' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'wppgpc_show_stock_out_badge' => 'yes',
				],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'wppgpc_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_date' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'wppgpc_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_responsive_control(
			'wppgpc_rating_size',
			[
				'label' => esc_html__( 'Rating Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-rating-box .wppgpc-star-rating .wppgpc-star-icons' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'wppgpc_rating_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-rating-box .wppgpc-star-rating .wppgpc-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .make_a_star',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_tag' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'wppgpc_blog_tag_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-tag a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_cat_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_cat' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'wppgpc_blog_cat_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-pro-cate a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_total_sell_style_section',
			[
				'label' => esc_html__( 'Total Sell', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_sell' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy total_sell
		$this->start_controls_tabs(
			'wppgpc_blog_taxonomy_total_sell_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_total_sell_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_total_sell_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_total_sell_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_total_sell_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_taxonomy_total_sell_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_blog_taxonomy_total_sell_hover_typography',
				'selector' => '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale:hover',
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_total_sell_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wppgpc_blog_taxonomy_total_sell_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'wppgpc_blog_total_sell_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_taxonomy_total_sell_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_taxonomy_total_sell_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx .wppgpc-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'wppgpc_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'wppgpc_blog_box_style_post'
		);
		$this->start_controls_tab(
			'wppgpc_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppgpc_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wppgpc-card, {{WRAPPER}} .wppgpc-card .wppgpc_for_back_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppgpc_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'wppgpc_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppgpc_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wppgpc-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppgpc_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-card:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'wppgpc_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card .wppgpc-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'wppgpc_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wppgpc-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();
		// Style Tab (ferdaus end)

		// Carousel Style Controls Start
		$this->start_controls_section(
			'wppgpc_product_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_nav_switcher' => 'yes'
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
				'wppgpc_arrow_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'wppgpc_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'wppgpc_arrow_size',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'wppgpc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'wppgpc_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev span, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next span',
					'condition' => [
						'wppgpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'wppgpc_arrow_width',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'wppgpc_arrow_height',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'wppgpc_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'wppgpc_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'wppgpc_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'wppgpc_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'wppgpc_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'wppgpc_arrow_popover_style',
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
					'wppgpc_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'wppgpc_arrow_left_position_vertical',
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
							'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'wppgpc_arrow_left_position_horizontal',
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
							'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'wppgpc_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'wppgpc_arrow_Right_position_vertical',
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
							'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'wppgpc_arrow_right_position_horizontal',
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
							'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
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
				'wppgpc_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'wppgpc_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'wppgpc_arrow_size_hover',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'wppgpc_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover span, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover span',
					'condition' => [
						'wppgpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'wppgpc_arrow_width_hover',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'wppgpc_arrow_height_hover',
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
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'wppgpc_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'wppgpc_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'wppgpc_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-prev:hover, {{WRAPPER}} .wppgpc-owl-nav button.wppgpc-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'wppgpc_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'wppgpc_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-prev, {{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'wppgpc_arrow_popover_style_hover',
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
					'wppgpc_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'wppgpc_arrow_left_position_vertical_hover',
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
							'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'wppgpc_arrow_left_position_horizontal_hover',
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
							'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'wppgpc_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'wppgpc_arrow_Right_position_vertical_hover',
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
							'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'wppgpc_arrow_right_position_horizontal_hover',
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
							'{{WRAPPER}} .wppgpc-owl.wppgpc-owl-carousel:hover .wppgpc-owl-nav button.wppgpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'wppgpc_product_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'wppgpc_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'wppgpc_dots_popover_style',
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
				'wppgpc_dots_Right_position_vertical',
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
						'{{WRAPPER}} .wppgpc-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'wppgpc_dots_left_position_horizontal',
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
						'{{WRAPPER}} .wppgpc-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'wppgpc_dots_gap_ertical',
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
					'{{WRAPPER}} .wppgpc-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'wppgpc_dots_gap',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'wppgpc_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
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
			'wppgpc_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppgpc_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_dots_number_typography',
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot span',
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'wppgpc_dots_width',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'wppgpc_dots_height',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppgpc_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppgpc_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot',
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
			'wppgpc_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppgpc_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active span',
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'wppgpc_dots_width_active',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'wppgpc_dots_height_active',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppgpc_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppgpc_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot.active',
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
			'wppgpc_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'wppgpc_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wppgpc_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover span',
				'condition' => [
					'wppgpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'wppgpc_dots_width_hover',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'wppgpc_dots_height_hover',
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
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'wppgpc_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'wppgpc_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'wppgpc_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .wppgpc-owl-dots .wppgpc-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
		// Carousel Style Controls End


	}


	protected function render(){
		$settings = $this->get_settings_for_display();
		// for-owl-carousel-start
		$wppgpc_slide_margin = $settings['wppgpc_slide_margin'];
		$wppgpc_slide_mobile_view = $settings['wppgpc_slide_mobile_view'];
		$wppgpc_slide_tablet_view = $settings['wppgpc_slide_tablet_view'];
		$wppgpc_slide_desktop_view = $settings['wppgpc_slide_desktop_view'];
		$wppgpc_infinite_autoplay_switcher = $settings['wppgpc_infinite_autoplay_switcher'];
		$wppgpc_infinite_loop_switcher = $settings['wppgpc_infinite_loop_switcher'];
		$wppgpc_HoverPause_switcher = $settings['wppgpc_HoverPause_switcher'];
		$wppgpc_centermode_switcher = $settings['wppgpc_centermode_switcher'];
		$wppgpc_autoplay_timeout = $settings['wppgpc_autoplay_timeout'];
		$wppgpc_autoplay_speed = $settings['wppgpc_autoplay_speed'];
		$wppgpc_stace_padding = $settings['wppgpc_stace_padding'];
		//nav--------------------------------------------------
		$wppgpc_nav_switcher = $settings['wppgpc_nav_switcher'];
		$wppgpc_nav_type = $settings['wppgpc_nav_type'];

		if( $wppgpc_nav_switcher == 'yes' ) {
			if( $wppgpc_nav_type == 'icon' ) {
				$prev = $settings['wppgpc_nav_prev_arrow']['value'];
				$next = $settings['wppgpc_nav_next_arrow']['value'];
			} else if( $wppgpc_nav_type == 'text' ) {
				$prev = $settings['wppgpc_nav_prev_text'];
				$next = $settings['wppgpc_nav_next_text'];
			} 
		}
		$wppgpc_dots_switcher = $settings['wppgpc_dots_switcher'];
		$wppgpc_dots_type = $settings['wppgpc_dots_type'];
		// for-owl-carousel-end

		// Carousel Product Settings End

		// Carousel Product Style Start ferdaus \\\\\==================================
		$wppgpc_products_style = $settings['wppgpc_products_zone_style'];
		$wppgpc_title_tag = $settings['wppgpc_title_tag'];
		$wppgpc_title_link = $settings['wppgpc_title_enable_link'];
		$wppgpc_title_length = $settings['wppgpc_title_length'];
		$featured_image = $settings['wppgpc_products_show_image'];
		$image_link_enabled = $settings['wppgpc_products_image_clickable'];
		$wppgpc_description_words = $settings['wppgpc_description_words'];
		$wppgpc_word_trim_indi = $settings['wppgpc_word_trim_indi'];
		$wppgpc_products_perpage = $settings['wppgpc_the_product_per_page'];
		$wppgpc_description_words = $settings['wppgpc_description_words'];
		$review_count = $settings['wppgpc_review_count'];
		$wppgpc_word_trim_indi = $settings['wppgpc_word_trim_indi'];
		$wppgpc_main_button = $settings['wppgpc_main_button'];
		$wppgpc_choose_link = $settings['wppgpc_choose_link'];
		$wppgpc_cart_button = $settings['wppgpc_cart_button'];
		$wppgpc_featured_sale_order = $settings['wppgpc_show_featured_sale_order'];
		$wppgpc_show_sale_badge = $settings['wppgpc_show_sale_badge'];
		$wppgpc_show_featured_badge = $settings['wppgpc_show_featured_badge'];
		$wppgpc_show_stock_out_badge = $settings['wppgpc_show_stock_out_badge'];
		$wppgpc_sale_badge_type = $settings['wppgpc_sale_badge_type'];
		$wppgpc_sale_badge_before_percent_text = $settings['wppgpc_sale_badge_before_percent_text'];
		$wppgpc_sale_badge_after_percent_text = $settings['wppgpc_sale_badge_after_percent_text'];
		$wppgpc_sale_badge_text = $settings['wppgpc_sale_badge_text'];
		$wppgpc_badge_featured_text = $settings['wppgpc_show_badge_featured_text'];
		$wppgpc_badge_stock_out_text = $settings['wppgpc_show_badge_stock_out_text'];
		$wppgpc_badge_stock_in_text = $settings['wppgpc_show_badge_stock_in_text'];
		$wppgpc_badge_stock_in_number_text = $settings['wppgpc_show_badge_stock_in_number_text'];
		$filter_by = $settings['wppgpc_product_filter_by'];
		$selected_category = $settings['wppgpc_selected_category'];
		$selected_tags = $settings['wppgpc_selected_tags'];
		$selected_include_products = $settings['wppgpc_selected_include_products'];
		$selected_exclude_products = $settings['wppgpc_selected_exclude_products'];
		$selected_statuses = $settings['wppgpc_product_grid_products_status'];
		$wppgpc_order_by = $settings['wppgpc_product_order_by'];
		$wppgpc_order = $settings['wppgpc_product_order'];

		$wppgpc_sell_label = $settings['wppgpc_sell_label'];
		$wppgpc_paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1; 

		$wppgpc_the_all_date = $settings['wppgpc_the_all_date'];
		if('d' === $wppgpc_the_all_date){
			$wppgpc_coustom_day = $wppgpc_coustom_month = $wppgpc_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $wppgpc_the_all_date){
			$wppgpc_coustom_day = $wppgpc_coustom_month = $wppgpc_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $wppgpc_the_all_date){
			$wppgpc_coustom_day = $wppgpc_coustom_month = $wppgpc_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $wppgpc_the_all_date){
			$wppgpc_coustom_year = $settings['wppgpc_blog_coustom_year'];
			$wppgpc_coustom_month = $settings['wppgpc_blog_coustom_month'];
			$wppgpc_coustom_day = $settings['wppgpc_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$wppgpc_coustom_day = $wppgpc_coustom_month = $wppgpc_coustom_year = $wdbp_time = '';
		}
		$wppgpc_cont_alignment = $settings['wppgpc_content_alignment'];
		if('left' === $wppgpc_cont_alignment){
			$wppgpc_cont_align = 'wppgpc_taxo_align_left wppgpc_taxo_align_left_j';
		} elseif('center' === $wppgpc_cont_alignment){
			$wppgpc_cont_align = 'wppgpc_taxo_align_center wppgpc_taxo_align_center_j';
		} elseif('right' === $wppgpc_cont_alignment){
			$wppgpc_cont_align = 'wppgpc_taxo_align_right wppgpc_taxo_align_right_j';
		} else{ $wppgpc_cont_align = ' '; }

        
		$wppgpc_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $wppgpc_products_perpage,
			'orderby'        => $wppgpc_order_by,
			'order'          => $wppgpc_order,
			'post__in'       => $selected_include_products,
			'post__not_in'   => $selected_exclude_products,
			'post_status'    => $selected_statuses,
			'paged' 		 => $wppgpc_paged,
			'date_query'     => $wdbp_time,
			'year'           => $wppgpc_coustom_year,
			'monthnum'       => $wppgpc_coustom_month,
			'day'            => $wppgpc_coustom_day, 
		);
		
		switch ($filter_by) {
			 case 'featured':
				$wppgpc_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$wppgpc_args['meta_query'] = array(
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
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$wppgpc_args['orderby'] = 'meta_value_num';
				$wppgpc_args['order'] = 'ASC';
				break;

			case 'popularity':
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$wppgpc_args['meta_query'] = array(
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
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$wppgpc_args['orderby'] = 'meta_value_num';
				$wppgpc_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$wppgpc_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$wppgpc_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$wppgpc_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$wppgpc_args['meta_query'] = array (
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
		if ($selected_category) {
			$wppgpc_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $selected_category,
			);
		}
		// If specific tags are selected, add a tag filter to the query
		if (!empty($selected_tags)) {
			$wppgpc_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $selected_tags,
				'operator' => 'IN',
			);
		}

		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
			switch ($wppgpc_products_style) {
				case 'style11':
					include(__DIR__.'/wpgctemplate/style11.php');
					break;
				default:
					include(__DIR__.'/wpgctemplate/style.php');
					break;
			}
		else:
			?><a href="https://wordpress.org/plugins/woocommerce/"><div class="wppgpc_wooc_not_acivate_notice"><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO); ?></div></a> <?php
		endif;
		// Carousel Product Style End ferdaus
	}
}