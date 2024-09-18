<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class CRTPProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'CreativeProductsGrid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Creative Products Grid', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-products';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	protected function bwdthe_get_selected_products_options() {
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
		return apply_filters('crtp/product-grid/orderby-options', [
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
		return apply_filters('crtp/product-grid/filter-options', [
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
			'crtp_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'crtp_products_zone_style',
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
			'crtp_box_column',
			[
				'label' => esc_html__( 'Choose Column', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'description' => esc_html__('Choosing column layout means all modes follow suit. Default selection ensures automatic responsiveness.', BWDEB_ROOT_AUTHOR_PRO),
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'column1' => esc_html__( 'One', BWDEB_ROOT_AUTHOR_PRO ),
					'column2' => esc_html__( 'Two', BWDEB_ROOT_AUTHOR_PRO ),
					'column3' => esc_html__( 'Three', BWDEB_ROOT_AUTHOR_PRO ),
					'column4'  => esc_html__( 'Four', BWDEB_ROOT_AUTHOR_PRO ),
                    'column5' => esc_html__( 'Five', BWDEB_ROOT_AUTHOR_PRO ),
                    'column6' => esc_html__( 'Six', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'prefix_class' => 'crpt-grid%s-'
			]
		);
		$this->add_responsive_control(
			'crtp_products_column_gap',
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
					'{{WRAPPER}} .crtp_gap_c' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .crtp_gap_r' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'crtp_blog_row_gap',
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
			'crtp_products_query_section',
			[
				'label' => esc_html__( 'Product Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->get_product_filter_options(),
			]
		);

		$this->add_control(
			'crtp_product_order_by',
			[
				'label'    => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->get_product_orderby_options(),
			]
		);
		$this->add_control(
			'crtp_product_order',
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
			'crtp_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'crtp_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->get_product_statuses_options(),
			]
		);

		
		$this->add_control(
			'crtp_selected_category',
			[
				'label'   => esc_html__( 'Select Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'crtp_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_tags_options(),
			]
		);

		$this->add_control(
			'crtp_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdthe_get_selected_products_options(),
				'condition'   => [
					'crtp_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'crtp_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdthe_get_selected_products_options(),
				'condition'   => [
					'crtp_product_filter_by!' => 'manual',
				]
			]
		);

		$this->add_control(
			'crtp_the_all_date',
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
			'crtp_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtp_blog_coustom_month',
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
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtp_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		
	
		$this->end_controls_section();		
		$this->start_controls_section(
			'crtp_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				
			]
		);
		$this->add_control(
			'crtp_products_image_heading',
			[
				'label' => esc_html__( 'Featured Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$this->add_control(
			'crtp_products_show_image',
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
			'crtp_products_image_clickable',
			[
				'label' => esc_html__( 'Enable Clickable', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtp_products_show_image' => 'yes',
				]
			]
		);

		$this->add_control(
			'crtp_products_title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtp_title',
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
			'crtp_title_tag',
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
			'crtp_title_enable_link',
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
			'crtp_title_length',
			[
				'label' => __('Word Length', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'crtp_products_description_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtp_description',
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
			'crtp_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_price',
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
			'crtp_date',
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
			'crtp_review',
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
			'crtp_review_count',
			[
				'label' => esc_html__( 'Review Count', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtp_review' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtp_cat',
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
			'crtp_tag',
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
			'crtp_sell',
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
			'crtp_sell_label',
			[
				'label' => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'crtp_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_badge_style',
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
				'prefix_class' => 'crtp-badge-',
			]
		);
		$this->add_control(
			'crtp_show_sale_badge',
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
			'crtp_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
					'text' => esc_html__( 'Sale Text', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtp_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_stock_out_badge',
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
			'crtp_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', BWDEB_ROOT_AUTHOR_PRO),
				'description' => esc_html__('This field will be used only if the product has stock count number.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_featured_badge',
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
			'crtp_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_badge_one_position',
			[
				'label' => esc_html__( 'Sale & Featured Badge Align', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'left',
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
					'{{WRAPPER}} .crpt-card .crtp-sale-featured-badge' => 'align-items: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_show_featured_sale_order',
			[
				'label' => esc_html__( 'Featured & Sale Badge Order', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'crtp_products_actions_section',
			[
				'label' => esc_html__( 'Product Actions', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_view_btn',
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
			'crtp_cart_btn',
			[
				'label' => esc_html__( 'Cart', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'crtp_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtp_cart_button',
			[
				'label' => esc_html__('Cart Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_cart_btn' => 'yes',
					'crtp_products_zone_style' => ['style1', 'style5'],
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'crtp_products_zone_style' => ['style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
					'crtp_cart_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_btn',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'crtp_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtp_main_button',
			[
				'label' => esc_html__('Button Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'crtp_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_choose_link',
			[
				'label' => esc_html__( 'Choose Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'coustom_link' => esc_html__( 'Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'crtp_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_main_button_link',
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
					'crtp_choose_link' => 'coustom_link',
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'crtp_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'crtp-number-and-text',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'crtp-number-and-text' => esc_html__( 'Number and Text', BWDEB_ROOT_AUTHOR_PRO ),
					'number' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'crtp_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'center',
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'crtp_the_pagination_type' => ['crtp-number-and-text', 'number'],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item ul' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'crtp_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'crtp_the_pagination_type' => 'crtp-number-and-text',
				],
			]
		);
		$this->add_control(
			'crtp_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'crtp_the_pagination_type' => 'crtp-number-and-text',
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'crtp_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crpt_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx' => 'align-items: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_content_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
			'crtp_blog_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'crtp_title' => 'yes',
				],
				'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'crtp_blog_title_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_title_typography',
				'selector' => '{{WRAPPER}} .crpt-card-heading a',
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading a' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card-heading:hover a',
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading:hover a' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_title' => 'yes',
				],
            ]
        );
		

		$this->add_control(
			'crtp_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'crtp_blog_description_options',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'crtp_description' => 'yes',
				],
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_blog_description_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_description_typography',
				'selector' => '{{WRAPPER}} .crpt-card-decs',
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs, {{WRAPPER}} .crpt-card .crpt-contentbx' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card-decs:hover',
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-decs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-decs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'crtp_blog_button_options',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_blog_button_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_button_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a',
			]
		);
		$this->add_control(
			'crtp_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a',
			]
		);
		$this->add_control(
			'crtp_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'crtp_cart_button_options',
			[
				'label' => esc_html__( 'Cart Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_cart_button_style_post'
		);
		$this->start_controls_tab(
			'crtp_cart_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_cart_button_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a',
			]
		);
		$this->add_control(
			'crtp_cart_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_cart_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a',
			]
		);
		$this->add_responsive_control(
            'crtp_cart_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_cart_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_cart_button_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a',
			]
		);
		$this->add_control(
			'crtp_cart_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_cart_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a',
			]
		);
		$this->add_responsive_control(
            'crtp_cart_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'crtp_cart_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_cart_button_icon_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crtp_thumbnail_size',
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
					'{{WRAPPER}} .crpt-card .crpt-imgbx img, {{WRAPPER}} .crpt-card .crpt-imgbx2 img' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'crtp_image_bg_color',
			[
				'label' => esc_html__( 'Image Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt_for_image_bg, {{WRAPPER}} .crpt-card .crpt-upper-item .crpt-imgbx a:before, {{WRAPPER}} .crpt-card:before, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-sub-content, {{WRAPPER}} .crpt-card-area-21 .crpt-card .crpt-upper-item::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-imgbx img, {{WRAPPER}} .crpt-card .crpt-imgbx2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_price_options',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_price' => 'yes',
				],
			]
		);
		// Regular Price
		$this->add_control(
			'crtp_blog_regular_sale_price_options',
			[
				'label' => esc_html__( 'Sale Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_sale_price_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_sale_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_sale_price_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_sale_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_sale_price_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_sale_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_sale_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_sale_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'crtp_blog_regular_price_options',
			[
				'label' => esc_html__( 'Regular Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// sale Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_regular_price_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_regular_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_regular_price_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box', 
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_regular_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_regular_price_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_regular_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_regular_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_regular_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'crtp_badge_style_section',
			[
				'label' => esc_html__( 'Sale / Stock Out Badge', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_typography_heading',
			[
				'label' => esc_html__( 'Sale', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_sale_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-sale-badge',
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_typography_heading',
			[
				'label' => esc_html__( 'Feature', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_feature_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-featured-badge',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_typography_heading',
			[
				'label' => esc_html__( 'Stock', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_stock_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count',
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_color',
			[
				'label' => esc_html__( 'Sale Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_color',
			[
				'label' => esc_html__( 'Feature Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_color',
			[
				'label' => esc_html__( 'Stock Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_bg_color',
			[
				'label' => esc_html__( 'Sale Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_bg_color',
			[
				'label' => esc_html__( 'Feature Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_bg_color',
			[
				'label' => esc_html__( 'Stock Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_sale_badge_padding',
            [
                'label' => esc_html__('Sale Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				]
            ]
        );
		$this->add_responsive_control(
            'crtp_feature_badge_padding',
            [
                'label' => esc_html__('Feature Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_stock_badge_padding',
            [
                'label' => esc_html__('Stock Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_date' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_responsive_control(
			'crtp_review_star_size',
			[
				'label' => esc_html__( 'Star Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-price-rating .crpt-rating-box' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'crtp_review_star_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp-star-rating .crpt-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_responsive_control(
			'crtp_review_number_size',
			[
				'label' => esc_html__( 'Number Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .make_a_star' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'crtp_review_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_tag' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'crtp_blog_tag_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_cat_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_cat' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_cat_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_total_sell_style_section',
			[
				'label' => esc_html__( 'Total Sell', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_sell' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy total_sell
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_total_sell_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_total_sell_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_total_sell_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_total_sell_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_total_sell_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_total_sell_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_taxonomy_total_sell_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_total_sell_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'crtp_blog_box_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtp_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crpt-card, {{WRAPPER}} .crpt-card .crpt_for_back_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtp_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'crtp_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtp_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtp_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_the_pagination_type' => ['crtp-number-and-text', 'number'],
				],
			]
		);
		$this->add_responsive_control(
			'crtp_pagination_gap',
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
					'{{WRAPPER}} .crtp_pagination_item ul' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'crtp_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span',
			]
		);
		$this->add_control(
			'crtp_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_pagination_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_pagination_active_typography',
				'selector' => '{{WRAPPER}} .crtp_pagination_item .current',
			]
		);
		$this->add_control(
			'crtp_pagination_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item .current' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_pagination_active_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item .current' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->add_responsive_control(
            'crtp_pagination_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_pagination_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$crtp_products_style = $settings['crtp_products_zone_style'];
		$crtp_title_tag = $settings['crtp_title_tag'];
		$crtp_title_link = $settings['crtp_title_enable_link'];
		$crtp_title_length = $settings['crtp_title_length'];
		$featured_image = $settings['crtp_products_show_image'];
		$image_link_enabled = $settings['crtp_products_image_clickable'];
		$review_count = $settings['crtp_review_count'];
		$crtp_featured_sale_order = $settings['crtp_show_featured_sale_order'];
		$crtp_show_sale_badge = $settings['crtp_show_sale_badge'];
		$crtp_show_featured_badge = $settings['crtp_show_featured_badge'];
		$crtp_show_stock_out_badge = $settings['crtp_show_stock_out_badge'];
		$crtp_sale_badge_type = $settings['crtp_sale_badge_type'];
		$crtp_sale_badge_before_percent_text = $settings['crtp_sale_badge_before_percent_text'];
		$crtp_sale_badge_after_percent_text = $settings['crtp_sale_badge_after_percent_text'];
		$crtp_sale_badge_text = $settings['crtp_sale_badge_text'];
		$crtp_badge_featured_text = $settings['crtp_show_badge_featured_text'];
		$crtp_badge_stock_out_text = $settings['crtp_show_badge_stock_out_text'];
		$crtp_badge_stock_in_text = $settings['crtp_show_badge_stock_in_text'];
		$crtp_badge_stock_in_number_text = $settings['crtp_show_badge_stock_in_number_text'];
		$crtp_pagination_align = $settings['crtp_the_pagination_items_align'];
		$crtp_the_pagination_type = $settings['crtp_the_pagination_type'];
		$crtp_blog_next_format = $settings['crtp_blog_next_format'];
		$crtp_blog_prev_format = $settings['crtp_blog_prev_format'];
		$crtp_products_perpage = $settings['crtp_the_product_per_page'];
		$crtp_description_words = $settings['crtp_description_words'];
		$crtp_word_trim_indi = $settings['crtp_word_trim_indi'];
		$crtp_main_button = $settings['crtp_main_button'];
		$crtp_choose_link = $settings['crtp_choose_link'];
		$crtp_cart_button = $settings['crtp_cart_button'];
		$filter_by = $settings['crtp_product_filter_by'];
		$selected_category = $settings['crtp_selected_category'];
		$selected_tags = $settings['crtp_selected_tags'];
		

		// Filter Query
		// Custom Select Product
		$selected_include_products = $settings['crtp_selected_include_products'];
		$selected_exclude_products = $settings['crtp_selected_exclude_products'];
		$selected_statuses = $settings['crtp_product_grid_products_status'];
		$crtp_order_by = $settings['crtp_product_order_by'];
		$crtp_order = $settings['crtp_product_order'];

		if ( ! empty( $settings['crtp_main_button_link']['url'] ) ) {
			$this->add_link_attributes( 'crtp_main_button_link', $settings['crtp_main_button_link'] );
		}

		$crtp_sell_label = $settings['crtp_sell_label'];

		$crtp_paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1; 

		$crtp_the_all_date = $settings['crtp_the_all_date'];
		$crtp_text_str = ' ';
		if('d' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $crtp_the_all_date){
			$crtp_coustom_year = $settings['crtp_blog_coustom_year'];
			$crtp_coustom_month = $settings['crtp_blog_coustom_month'];
			$crtp_coustom_day = $settings['crtp_blog_coustom_day'];
			$wdbp_time = $crtp_text_str;
		} else{
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$wdbp_time = $crtp_text_str;
		}
		
		$crtp_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $crtp_products_perpage,
			'orderby'        => $crtp_order_by,
			'order'          => $crtp_order,
			'post__in'       => $selected_include_products,
			'post__not_in'   => $selected_exclude_products,
			'post_status'    => $selected_statuses,
			'paged' 		 => $crtp_paged,
			'date_query'     => $wdbp_time,
			'year'           => $crtp_coustom_year,
			'monthnum'       => $crtp_coustom_month,
			'day'            => $crtp_coustom_day, 
		);

		// Get the selected filter from the control
		
		switch ($filter_by) {
			 case 'featured':
				$crtp_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$crtp_args['meta_query'] = array(
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
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$crtp_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$crtp_args['orderby'] = 'meta_value_num';
				$crtp_args['order'] = 'ASC';
				break;

			case 'popularity':
				$crtp_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$crtp_args['meta_query'] = array(
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
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$crtp_args['orderby'] = 'meta_value_num';
				$crtp_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$crtp_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$crtp_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$crtp_args['meta_query'] = array (
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
			$crtp_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $selected_category,
			);
		}
		// If specific tags are selected, add a tag filter to the query
		if (!empty($selected_tags)) {
			$crtp_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $selected_tags,
				'operator' => 'IN',
			);
		}

		if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
			switch ($crtp_products_style) {
				case 'style11':
					include(__DIR__.'/pgthe_main/style11.php');
					break;
				default:
					include(__DIR__.'/pgthe_main/style.php');
					break;
			}
		} else {
			?>
			<a href="https://WordPress.org/plugins/WooCommerce/">
				<div class="crtp_wooc_not_acivate_notice"><?php echo esc_html__('Maybe you have not installed/activated the WooCommerce plugin.', BWDEB_ROOT_AUTHOR_PRO); ?></div>
			</a>
			<?php
		}

	}
} 
