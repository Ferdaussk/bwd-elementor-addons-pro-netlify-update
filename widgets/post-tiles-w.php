<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BPTLS_Post_Tiles extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BlogPost_Tiles', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Post Tiles', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-posttiles';
	}

	public function get_categories() {
		return [ 'bwdthe_post_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bptls_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bptls_style_selection',
			[
				'label' => esc_html__( 'Post Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
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
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bptls_image_link_show_switcher',
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
			'bptls_title_show_switcher',
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
			'bptls_title_link_show_switcher',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bptls_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_title_tags',
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
			]
		);
		$this->add_control(
			'bptls_description_show_switcher',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bptls_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bptls_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bptls_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'show' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bptls_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bptls_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bptls_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bptls_author_show_switcher',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bptls_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'gravatar' => esc_html__( 'Gravatar', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Author Icon', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bptls_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bptls_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bptls_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bptls_author_show_switcher' => 'yes',
					'bptls_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bptls_author_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bptls_author_show_switcher' => 'yes',
					'bptls_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bptls_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function bptls_get_all_post_types() {
			$post_type_options = array(
				'post' => __('Posts', BWDEB_ROOT_AUTHOR_PRO),
				'page' => __('Pages', BWDEB_ROOT_AUTHOR_PRO),
			);
			$post_type_options['manual'] = esc_html__('Manual Selection', BWDEB_ROOT_AUTHOR_PRO);

			return $post_type_options;
		}
		$this->add_control(
			'selected_post_types',
			[
				'label' => __( 'Source', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'post',
				'multiple' => true,
				'options' => bptls_get_all_post_types(),
			]
		);

		$this->add_control(
			'bptls_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// Add custom query to retrieve all authors
		function bptls_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bptls_the_all_author',
            [
                'label' => __( 'Select Authors', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => bptls_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function bptls_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bptls_the_all_categories',
			[
				'label' => __( 'Select Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bptls_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function bptls_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bptls_the_all_tags',
			[
				'label' => __( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bptls_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function bptls_get_all_post_formats() {
			$post_formats = get_theme_support( 'post-formats' );
			
			// Check if $post_formats is an array
			if ( is_array( $post_formats ) && is_array( $post_formats[0] ) ) {
				$post_formats = $post_formats[0];
			} else {
				$post_formats = array();
			}
		
			$post_format_options = array();
			foreach ( $post_formats as $format ) {
				$post_format_options[$format] = ucfirst( $format );
			}
			return $post_format_options;
		}
		
		
		$this->add_control(
			'bptls_the_all_post_formats',
			[
				'label' => __( 'Post Formats', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bptls_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function bptls_get_all_posts() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}
		$this->add_control(
			'bptls_include_posts',
			[
				'label' => __( 'Include Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bptls_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function bptls_get_all_post() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}

		$this->add_control(
			'bptls_exclude_post',
			[
				'label' => __( 'Exclude Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bptls_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bptls_the_all_date',
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
			'bptls_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_blog_coustom_month',
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
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_the_order_by',
			[
				'label' => esc_html__( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'author' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
					'title' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
					'id' => esc_html__( 'ID', BWDEB_ROOT_AUTHOR_PRO ),
					'date' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
					'rand' => esc_html__( 'Random', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bptls_blog_order',
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
			'bptls_categories_show_switcher',
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
			'bptls_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO ),
					'show_main_cat' => esc_html__( 'Show Main Category', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bptls_categories_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
					'{{WRAPPER}} .bptls-content-wrapper' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .bptls-meta' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bptls_blog_content_bg_color',
			[
				'label' => esc_html__( 'Content Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-content-wrapper::before, {{WRAPPER}} .bptls-style-eleven .bptls-content-wrapper::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bptls-img-wrapper::after' => 'border-left: 55px solid {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bptls_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_title_typography',
				'selector' => '{{WRAPPER}} .bptls-title .bptls-h2-title',
			]
		);
		$this->add_control(
			'bptls_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_title_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-title .bptls-h2-title',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_title_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-title .bptls-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title',
			]
		);
		$this->add_control(
			'bptls_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%)',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_title_hover_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_title_hover_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bptls_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-title .bptls-h2-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-title .bptls-h2-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_description_options',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_description_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bptls_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_description_typography',
				'selector' => '{{WRAPPER}} .bptls-desc p',
			]
		);
		$this->add_control(
			'bptls_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p',
			]
		);
		$this->add_control(
			'bptls_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-desc p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-desc p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_the_post_image_size',
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
					'{{WRAPPER}} .bptls-img-wrapper img' => 'height: {{SIZE}}{{UNIT}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bptls_image_overlay_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bptls-img-wrapper::before, {{WRAPPER}} .bptls-style-twelve .bptls-img-wrapper::after',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_author_options',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_author_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-author span, {{WRAPPER}} .bptls-img-wrapper .bptls-author .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-author span, {{WRAPPER}} .bptls-img-wrapper .bptls-author .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-author .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-author .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bptls_blog_author_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_author_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_date_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-date span, {{WRAPPER}} .bptls-img-wrapper .bptls-date .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-date span, {{WRAPPER}} .bptls-img-wrapper .bptls-date .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-date .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-date .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper .bptls-comment .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper .bptls-comment .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_comment_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_comment_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-cat',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bptls_blog_cat_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_tag .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_tag .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag::before, {{WRAPPER}} .bptls_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bptls_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_the_collumn_gap_size',
			[
				'label' => esc_html__( 'Collumn Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bptls-main-wrapper' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bptls_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bptls_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'bptls_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-style-six .bptls-img-wrapper:hover::after, {{WRAPPER}} .bptls-style-twelve .bptls-img-wrapper::after' => 'background: {{VALUE}}',
					'condition' => [
						'bptls_style_selection' => ['six', 'twelve'],
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bptls_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bptls_title_tags = $settings['bptls_title_tags'];
		$bptls_styles = $settings['bptls_style_selection'];
		$bptls_post_per_page = $settings['bptls_the_post_per_page'];
		$bptls_post_description_words = $settings['bptls_the_post_description_words'];
		$bptls_blog_word_trim_indi = $settings['bptls_blog_word_trim_indi'];
		$bptls_blog_date_format = $settings['bptls_blog_date_format'];

		$bptls_author_indicator = $settings['bptls_author_indicator'];
		$bptls_taxo_icon = $settings['bptls_taxo_icon'];

		$bptls_image_link_show = $settings['bptls_image_link_show_switcher'];
		$bptls_title_swtcher = $settings['bptls_title_show_switcher'];
		$bptls_title_link_show = $settings['bptls_title_link_show_switcher'];
		$bptls_description_swtcher = $settings['bptls_description_show_switcher'];
		$bptls_date_swtcher = $settings['bptls_date_show_switcher'];
		$bptls_author_swtcher = $settings['bptls_author_show_switcher'];
		$bptls_comments_swtcher = $settings['bptls_comments_show_switcher'];
		$bptls_categories_swtcher = $settings['bptls_categories_show_switcher'];
		$bptls_tags_swtcher = $settings['bptls_tags_show_switcher'];
		$bptls_cat_show_status = $settings['bptls_the_cat_show_status'];

		$bptls_categorys_dataa = $settings['bptls_the_all_categories'];
		$bptls_the_blog_type = $settings['selected_post_types'];
		$bptls_blog_order = $settings['bptls_blog_order'];
		$bptls_author = $settings['bptls_the_all_author'];
		$bptls_order_by = $settings['bptls_the_order_by'];
		$bptls_include_post = $settings['bptls_include_posts'];
		$bptls_exclude_post = $settings['bptls_exclude_post'];
		$bptls_tags_filter = $settings['bptls_the_all_tags'];
		$bptls_post_format = $settings['bptls_the_all_post_formats'];
		
		$bptls_the_all_date = $settings['bptls_the_all_date'];
		if('d' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bptls_the_all_date){
			$bptls_coustom_year = $settings['bptls_blog_coustom_year'];
			$bptls_coustom_month = $settings['bptls_blog_coustom_month'];
			$bptls_coustom_day = $settings['bptls_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
		}

		
		$bptls_args = array(
			'posts_per_page' => $bptls_post_per_page,
			'author__in'     => $bptls_author,
			'tag__in'        => $bptls_tags_filter,
			'category__in'   => $bptls_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bptls_exclude_post,
			'orderby'        => $bptls_order_by,
			'order'   		 => $bptls_blog_order,
			'date_query'     => $wdbp_time,
			'year'           => $bptls_coustom_year,
			'monthnum'       => $bptls_coustom_month,
			'day'            => $bptls_coustom_day,
		);
		
		// Check the selected post source
		if ($bptls_the_blog_type === 'post') {
			$bptls_args['post_type'] = 'post';
		} elseif ($bptls_the_blog_type === 'page') {
			$bptls_args['post_type'] = 'page';
		} elseif ($bptls_the_blog_type === 'manual') {
			$bptls_include_post = $settings['bptls_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($bptls_include_post)) {
				$bptls_args['post__in'] = $bptls_include_post;
			} else {}
		}
		
		// Check if post format is set
		if (isset($bptls_post_format) && !empty($bptls_post_format)) {
			// Ensure post format has correct format without 'post-format-' prefix
			$post_format_slug = 'post-format-' . $bptls_post_format;
			// Add tax query for post format
			$bptls_args['tax_query'] = array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => $post_format_slug,
				),
			);
		}

		$bptls_yes_value = 'yes';


		echo '<div class="bptls-main-wrapper bptls-style-'.esc_attr($bptls_styles).'">';
			$wp_query = new \WP_Query( $bptls_args );
			if($wp_query->have_posts()) :
				while($wp_query->have_posts()) : $wp_query->the_post();
			echo '<article class="bptls-img-wrapper">';
				echo '<div class="bptls-content-wrapper">';
					// Title
					$bptls_title = get_the_title();
					$bptls_title_switcher = ($bptls_yes_value === $bptls_title_swtcher)?$bptls_title:'';
					$bptls_a_tag = '<a href="'.get_the_permalink().'">';
					$bptls_title_link_switcher = ($bptls_yes_value === $bptls_title_link_show)?$bptls_a_tag:'';
					echo '<div class="bptls-title">'.$bptls_title_link_switcher.'<'.$bptls_title_tags.' class="bptls-h2-title">';
					echo $bptls_title_switcher;
					echo '<'.$bptls_title_tags.'></a></div>'; 
					// Description
					$bptls_description = wp_trim_words(get_the_content(), $bptls_post_description_words, $bptls_blog_word_trim_indi);
					$bptls_description_switcher = ($bptls_yes_value === $bptls_description_swtcher)?$bptls_description:'';
					echo '<div class="bptls-desc"><p>';
					echo $bptls_description_switcher;
					echo '</p></div>';
					echo '<div class="bptls-meta">';
						// date
						$bptls_post_date = get_the_date($bptls_blog_date_format);
						$bptls_date_title = '<span>'.$bptls_post_date.'</span></div>';
						$bptls_date_icon = '<i class="bptls_icons far fa-calendar-alt"></i>';
						$bptls_date_show_icon = ('show' == $bptls_taxo_icon)?$bptls_date_icon:'';
						$bptls_date_wrap_div = '<div class="bptls-date">'.$bptls_date_show_icon;
						$bptls_date_switch = ($bptls_yes_value === $bptls_date_swtcher)? $bptls_date_wrap_div:'';
						$bptls_date_title_switch = ($bptls_yes_value === $bptls_date_swtcher)? $bptls_date_title:'';
						echo $bptls_date_switch;
						echo $bptls_date_title_switch;
						// author
						$bptls_control_icon = $settings['bptls_author_icon']['value'];
						$bptls_author_icon = '<i class="bptls_icons '.$bptls_control_icon.'"></i>';
						$bptls_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
						$bptls_author_indicator_check = ('icon' === $bptls_author_indicator) ? $bptls_author_icon : $bptls_gravater;
						$bptls_total_author = $bptls_author_indicator_check;
						$bptls_author = ($bptls_yes_value === $bptls_author_swtcher) ? $bptls_total_author : '';
						echo '<div class="bptls-author">';
						echo $bptls_author;
						echo '<span>'.get_the_author_meta( 'nickname' ).'</span>';
						echo '</div>';
						// Tags
						$bptls_post_tags = get_the_tags();
						$bptls_main_tag = ($bptls_post_tags) ? $bptls_post_tags[0]->name:'';
						$bptls_tag_title = '<span>'.$bptls_main_tag.'</span></div>';
						$bptls_tag_icon = '<i class="fas fa-tag"></i>';
						$bptls_tag_show_icon = ('show' == $bptls_taxo_icon)?$bptls_tag_icon:'';
						$bptls_wrap_div = '<div class="bptls-tag">'.$bptls_tag_show_icon;
						$bptls_wrap_tag = ($bptls_yes_value == $bptls_tags_swtcher)?$bptls_wrap_div:'';
						$bptls_wrap_close_div = ($bptls_yes_value == $bptls_tags_swtcher)?$bptls_tag_title:'';
						echo $bptls_wrap_tag;
						echo $bptls_wrap_close_div;
						// Comment
						$bptls_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
						$bptls_comm_title = '<span>'.$bptls_main_comm.'</span></div>';
						$bptls_comm_icon = '<i class="fas fa-comments"></i>';
						$bptls_comm_show_icon = ('show' == $bptls_taxo_icon)?$bptls_comm_icon:'';
						$bptls_wrap_comm_div = '<div class="bptls-comment">'.$bptls_comm_show_icon;
						$bptls_comm_switch = ($bptls_yes_value === $bptls_comments_swtcher)?$bptls_wrap_comm_div:'';
						$bptls_comm_title_echo = ($bptls_yes_value === $bptls_comments_swtcher)?$bptls_comm_title:'';
						echo $bptls_comm_switch;
						echo $bptls_comm_title_echo;
					echo '</div>';
				echo '</div>';
				include 'ptilestemplates/post-category.php';
				//Image
				$bptls_image_a_tag = '<a class="bptls_thumbnail" href="'.get_the_permalink().'">';
				$bptls_image_link_switcher = ($bptls_yes_value === $bptls_image_link_show)?$bptls_image_a_tag:'';
				echo $bptls_image_link_switcher;
				$this->bptls_post_thumbnail_here();
				echo '</a>'; 
			echo '</article>';
				endwhile;
			endif;
		echo '</div>';

	}

	public function bptls_post_categories() {
        $bptls_categories_list = get_the_category_list(esc_html__(', ', BWDEB_ROOT_AUTHOR_PRO));
        if ($bptls_categories_list) {
            echo $bptls_categories_list;
        }
    }
	public function bptls_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', BWDEB_ROOT_AUTHOR_PRO) . '</h2>';
			}
	}
}
