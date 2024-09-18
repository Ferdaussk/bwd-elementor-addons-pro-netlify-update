<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly bpiacrdn_icon

class bpiacrdnImageAccordion extends \Elementor\Widget_Base {

	public function get_name() {
		return 'BlogPostImageAccordion';
	}

	public function get_title() {
		return esc_html__( 'Post Image Accordion', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'post-image-accordion bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_post_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'hover' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bpiacrdn_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bpiacrdn_products_zone_style',
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
			'bpiacrdn_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpiacrdn_title',
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
			'bpiacrdn_title_link',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'bpiacrdn_title' => 'yes',
				],
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_title_tags',
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
			'bpiacrdn_description_show_switcher',
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
			'bpiacrdn_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_taxo_icon',
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
			'bpiacrdn_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bpiacrdn_author_show_switcher',
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
			'bpiacrdn_author_indicator',
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
					'bpiacrdn_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_gravader_height',
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
					'{{WRAPPER}} .bpiacrdn_author-img img' => 'block-size: {{SIZE}}{{UNIT}} !important; inline-size: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
					'bpiacrdn_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_author_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
					'bpiacrdn_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bpiacrdn_blogs_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpiacrdn_button_show_switcher',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_button_types',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
					'bpiacrdn_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
					'bpiacrdn_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
					'bpiacrdn_button_types' => 'text_icon',
					'bpiacrdn_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
					'bpiacrdn_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function bpiacrdn_get_all_post_types() {
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
				'options' => bpiacrdn_get_all_post_types(),
			]
		);

		$this->add_control(
			'bpiacrdn_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// Add custom query to retrieve all authors
		function bpiacrdn_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bpiacrdn_the_all_author',
            [
                'label' => __( 'Select Authors', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => bpiacrdn_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function bpiacrdn_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bpiacrdn_the_all_categories',
			[
				'label' => __( 'Select Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bpiacrdn_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function bpiacrdn_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bpiacrdn_the_all_tags',
			[
				'label' => __( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bpiacrdn_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function bpiacrdn_get_all_post_formats() {
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
			'bpiacrdn_the_all_post_formats',
			[
				'label' => __( 'Post Formats', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bpiacrdn_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function bpiacrdn_get_all_posts() {
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
			'bpiacrdn_include_posts',
			[
				'label' => __( 'Include Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bpiacrdn_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function bpiacrdn_get_all_post() {
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
			'bpiacrdn_exclude_post',
			[
				'label' => __( 'Exclude Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bpiacrdn_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bpiacrdn_the_all_date',
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
			'bpiacrdn_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_coustom_month',
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
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_the_order_by',
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
			'bpiacrdn_blog_order',
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
			'bpiacrdn_categories_show_switcher',
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
			'bpiacrdn_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO ),
					'show_main_cat' => esc_html__( 'Show Main Category', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bpiacrdn_categories_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_tags_show_switcher',
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
			'bpiacrdn_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpiacrdn_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number-and-text',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'number-and-text' => esc_html__( 'Number and Text', BWDEB_ROOT_AUTHOR_PRO ),
					'number' => esc_html__( 'Number', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'filter_center',
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
				'condition' => [
					'bpiacrdn_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_pagination_type' => 'number-and-text',
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
			'bpiacrdn_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_title_alignment',
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
					'{{WRAPPER}} .bpiacrdn-title' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bpiacrdn_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_title_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_content_horizontal_alignment',
			[
				'label' => esc_html__( 'Horizontal Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box' => 'align-items: {{VALUE}}',
					'{{WRAPPER}} .bpiacrdn-prodpriratwrap' => 'justify-content: {{VALUE}}',
					'{{WRAPPER}} .bpiacrdn-atcart-btn, {{WRAPPER}} .bpiacrdn-decs, {{WRAPPER}} .bpiacrdn-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_content_vertical_alignment',
			[
				'label' => esc_html__( 'Vertical Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'toggle' => true,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'bpiacrdn_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_boxshadow',
				'label' => esc_html__( 'Content Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bpiacrdn_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-style-nine .bpiacrdn-content-box::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'bpiacrdn_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-style-one .bpiacrdn-prodRatingWrap, {{WRAPPER}} .bpiacrdn-content-box:hover::before, {{WRAPPER}} .bpiacrdn-style-ten .bpiacrdn-content-box:hover .bpiacrdn-prodRatingWrap::before, {{WRAPPER}} .bpiacrdn-style-fourteen .bpiacrdn-prodRatingWrap, {{WRAPPER}} .bpiacrdn-style-twelve .bpiacrdn-content-box::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Wrap Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bpiacrdn_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_description_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_button_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bpiacrdn_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_the_post_image_width_size',
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
					'{{WRAPPER}} .bpiacrdn-single-img img' => 'inline-size: {{SIZE}}px',
					'{{WRAPPER}} .bpiacrdn-single-img img' => 'block-size: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_date_options',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_date_show_switcher' => 'yes',
				],
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpiacrdn_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-salePrice',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-salePrice:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_author_options',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpiacrdn_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-regularPrice',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-regularPrice:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_sale_style_section',
			[
				'label' => esc_html__( 'Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_type_style_section',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_type_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_type_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_type_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-for-overlay:before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box2_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box2_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-for-overlay:before', '{{WRAPPER}} .bpiacrdn-single-img img', '{{WRAPPER}} .bpiacrdn-single-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_the_pagination_type' => ['number-and-text', 'number']
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Pagination Gap From Top', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_pagi_item-gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bpiacrdn_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn_pagination_item a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_width',
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
					'{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_height',
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
					'{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bpiacrdn_title_tags = $settings['bpiacrdn_title_tags'];
		$bpiacrdn_styles = $settings['bpiacrdn_products_zone_style'];
		$bpiacrdn_post_per_page = $settings['bpiacrdn_the_post_per_page'];
		$bpiacrdn_post_description_words = $settings['bpiacrdn_the_post_description_words'];
		$bpiacrdn_blog_word_trim_indi = $settings['bpiacrdn_blog_word_trim_indi'];
		$bpiacrdn_blog_date_format = $settings['bpiacrdn_blog_date_format'];

		$bpiacrdn_author_indicator = $settings['bpiacrdn_author_indicator'];
		$bpiacrdn_taxo_icon = $settings['bpiacrdn_taxo_icon'];

		$bpiacrdn_title = $settings['bpiacrdn_title'];
		$bpiacrdn_title_link = $settings['bpiacrdn_title_link'];
		$bpiacrdn_description_swtcher = $settings['bpiacrdn_description_show_switcher'];
		$bpiacrdn_date_swtcher = $settings['bpiacrdn_date_show_switcher'];
		$bpiacrdn_author_swtcher = $settings['bpiacrdn_author_show_switcher'];
		$bpiacrdn_comments_swtcher = $settings['bpiacrdn_comments_show_switcher'];
		$bpiacrdn_categories_swtcher = $settings['bpiacrdn_categories_show_switcher'];
		$bpiacrdn_tags_swtcher = $settings['bpiacrdn_tags_show_switcher'];
		$bpiacrdn_cat_show_status = $settings['bpiacrdn_the_cat_show_status'];

		$bpiacrdn_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bpiacrdn_categorys_dataa = $settings['bpiacrdn_the_all_categories'];
		$bpiacrdn_the_blog_type = $settings['selected_post_types'];
		$bpiacrdn_blog_order = $settings['bpiacrdn_blog_order'];
		$bpiacrdn_author = $settings['bpiacrdn_the_all_author'];
		$bpiacrdn_order_by = $settings['bpiacrdn_the_order_by'];
		$bpiacrdn_include_post = $settings['bpiacrdn_include_posts'];
		$bpiacrdn_exclude_post = $settings['bpiacrdn_exclude_post'];
		$bpiacrdn_tags_filter = $settings['bpiacrdn_the_all_tags'];
		$bpiacrdn_post_format = $settings['bpiacrdn_the_all_post_formats'];

		$bpiacrdn_button_types = $settings['bpiacrdn_button_types'];
		$bpiacrdn_button_icon_align = $settings['bpiacrdn_button_icon_align'];
		
		$bpiacrdn_the_all_date = $settings['bpiacrdn_the_all_date'];
		if('d' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_coustom_month = $bpiacrdn_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_coustom_month = $bpiacrdn_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_coustom_month = $bpiacrdn_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_year = $settings['bpiacrdn_blog_coustom_year'];
			$bpiacrdn_coustom_month = $settings['bpiacrdn_blog_coustom_month'];
			$bpiacrdn_coustom_day = $settings['bpiacrdn_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$bpiacrdn_coustom_day = $bpiacrdn_coustom_month = $bpiacrdn_coustom_year = $wdbp_time = '';
		}
		
		$bpiacrdn_args = array(
			'posts_per_page' => $bpiacrdn_post_per_page,
			'author__in'     => $bpiacrdn_author,
			'tag__in'        => $bpiacrdn_tags_filter,
			'category__in'   => $bpiacrdn_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bpiacrdn_exclude_post,
			'orderby'        => $bpiacrdn_order_by,
			'order'   		 => $bpiacrdn_blog_order,
			'paged'          => $bpiacrdn_paged,
			'date_query'     => $wdbp_time,
			'year'           => $bpiacrdn_coustom_year,
			'monthnum'       => $bpiacrdn_coustom_month,
			'day'            => $bpiacrdn_coustom_day,
		);
		
		// Check the selected post source
		if ($bpiacrdn_the_blog_type === 'post') {
			$bpiacrdn_args['post_type'] = 'post';
		} elseif ($bpiacrdn_the_blog_type === 'page') {
			$bpiacrdn_args['post_type'] = 'page';
		} elseif ($bpiacrdn_the_blog_type === 'manual') {
			$bpiacrdn_include_post = $settings['bpiacrdn_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($bpiacrdn_include_post)) {
				$bpiacrdn_args['post__in'] = $bpiacrdn_include_post;
			} else {}
		}
		
		// Check if post format is set
		if (isset($bpiacrdn_post_format) && !empty($bpiacrdn_post_format)) {
			$post_format_slug = 'post-format-' . $bpiacrdn_post_format;
			$bpiacrdn_args['tax_query'] = array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => $post_format_slug,
				),
			);
		}
		$bpiacrdn_the_pagination_type = $settings['bpiacrdn_the_pagination_type'];
		$bpiacrdn_yes_value = 'yes';
		$bpiacrdn_blog_next_format = $settings['bpiacrdn_blog_next_format'];
		$bpiacrdn_blog_prev_format = $settings['bpiacrdn_blog_prev_format'];
		
		$bpiacrdn_yes_value = 'yes';

		echo '<div class="bpiacrdn-img-accordion-'.esc_attr($bpiacrdn_styles).' bpiacrdn-common-style">';
			echo '<div class="bpiacrdn-item-wrap">';
				$wp_query = new \WP_Query( $bpiacrdn_args );
				if($wp_query->have_posts()) :
				while($wp_query->have_posts()) : $wp_query->the_post();
					echo '<div class="bpiacrdn-single-img">';
						// Post Ctegory
						include 'imgactemplate/post-category.php';
						echo '<div class="bpiacrdn-for-overlay">';
							echo '<a class="bpiacrdn_thumbnail" href="'.get_the_permalink().'">';
							echo $this->bpiacrdn_post_thumbnail_here();
							echo '</a>';
							echo '<div class="bpiacrdn-content-box '.$settings['bpiacrdn_content_vertical_alignment'].'">';
								$bpiacrdn_title_link_check = ('yes' === $bpiacrdn_title_link)?'<a href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
								$bpiacrdn_title_wrap = '<div class="bpiacrdn-title">'.$bpiacrdn_title_link_check.'</div>';
								echo ('yes' === $bpiacrdn_title)?$bpiacrdn_title_wrap:'';
								echo '<div class="bpiacrdn-prodCont">';
									echo '<div class="bpiacrdn-prodpriratbtn">';
										echo '<div class="bpiacrdn-prodpriratwrap">';
											// date
											$bpiacrdn_post_date = get_the_date($bpiacrdn_blog_date_format);
											$bpiacrdn_date_title = '<span>'.$bpiacrdn_post_date.'</span></div>';
											$bpiacrdn_date_icon = '<i class="bpiacrdn_icons far fa-calendar-alt"></i>';
											$bpiacrdn_date_show_icon = ('show' == $bpiacrdn_taxo_icon)?$bpiacrdn_date_icon:'';
											$bpiacrdn_date_wrap_div = '<div class="bpiacrdn-salePrice bpiacrdn-price">'.$bpiacrdn_date_show_icon;
											$bpiacrdn_date_switch = ($bpiacrdn_yes_value === $bpiacrdn_date_swtcher)? $bpiacrdn_date_wrap_div:'';
											$bpiacrdn_date_title_switch = ($bpiacrdn_yes_value === $bpiacrdn_date_swtcher)? $bpiacrdn_date_title:'';
											echo $bpiacrdn_date_switch.$bpiacrdn_date_title_switch;
											// author
											$bpiacrdn_control_icon = $settings['bpiacrdn_author_icon']['value'];
											$bpiacrdn_author_icon = '<i class="bpiacrdn_icons '.$bpiacrdn_control_icon.'"></i>';
											$bpiacrdn_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
											$bpiacrdn_author_indicator_check = ('icon' === $bpiacrdn_author_indicator) ? $bpiacrdn_author_icon : $bpiacrdn_gravater;
											$bpiacrdn_total_author = $bpiacrdn_author_indicator_check;
											$bpiacrdn_author = ($bpiacrdn_yes_value === $bpiacrdn_author_swtcher) ? $bpiacrdn_total_author.'<span>'.get_the_author_meta( 'nickname' ).'</span>' : '';
											echo '<div class="bpiacrdn-regularPrice bpiacrdn-price">'.$bpiacrdn_author .'</div>';
										echo '</div>';
									echo '</div>';
									echo '<div class="bpiacrdn-prodOptInfo">';
										// ======================= Texo
										// Tags
										$bpiacrdn_post_tags = get_the_tags();
										$bpiacrdn_main_tag = ($bpiacrdn_post_tags) ? $bpiacrdn_post_tags[0]->name:'';
										$bpiacrdn_tag_title = '<span>'.$bpiacrdn_main_tag.'</span></div>';
										$bpiacrdn_tag_icon = '<i class="fas fa-tag"></i>';
										$bpiacrdn_tag_show_icon = ('show' == $bpiacrdn_taxo_icon)?$bpiacrdn_tag_icon:'';
										$bpiacrdn_wrap_div = '<div class="bpiacrdn-prodSaleCount bpiacrdn-extra-meta">'.$bpiacrdn_tag_show_icon;
										$bpiacrdn_wrap_tag = ($bpiacrdn_yes_value == $bpiacrdn_tags_swtcher)?$bpiacrdn_wrap_div:'';
										$bpiacrdn_wrap_close_div = ($bpiacrdn_yes_value == $bpiacrdn_tags_swtcher)?$bpiacrdn_tag_title:'';
										echo $bpiacrdn_wrap_tag.$bpiacrdn_wrap_close_div;
										// Comment
										$bpiacrdn_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
										$bpiacrdn_comm_title = '<span>'.$bpiacrdn_main_comm.'</span></div>';
										$bpiacrdn_comm_show_icon = ('show' == $bpiacrdn_taxo_icon)?'<i class="fas fa-comments"></i>':'';
										$bpiacrdn_wrap_comm_div = '<div class="bpiacrdn-prodType bpiacrdn-extra-meta">'.$bpiacrdn_comm_show_icon;
										$bpiacrdn_comm_switch = ($bpiacrdn_yes_value === $bpiacrdn_comments_swtcher)?$bpiacrdn_wrap_comm_div:'';
										$bpiacrdn_comm_title_echo = ($bpiacrdn_yes_value === $bpiacrdn_comments_swtcher)?$bpiacrdn_comm_title:'';
										echo $bpiacrdn_comm_switch.$bpiacrdn_comm_title_echo;
										// =======================
									echo '</div>';
									// Description
									$bpiacrdn_description = wp_trim_words(get_the_content(), $bpiacrdn_post_description_words, $bpiacrdn_blog_word_trim_indi);
									$bpiacrdn_description_switcher = ($bpiacrdn_yes_value === $bpiacrdn_description_swtcher)?$bpiacrdn_description:'';
									echo '<div class="bpiacrdn-prodDesc"><p class="bpiacrdn-decs">'.$bpiacrdn_description_switcher.'</p></div>';

									// Post Button
									include 'imgactemplate/post-button.php';

								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endwhile;
			echo '</div>';
			// Post Pagination
			include 'imgactemplate/pagination.php';
			endif;
			wp_reset_postdata();
		echo '</div>';
	}
	public function bpiacrdn_post_categories() {
        $bpiacrdn_categories_list = get_the_category_list(esc_html__(', ', BWDEB_ROOT_AUTHOR_PRO));
        if ($bpiacrdn_categories_list) {
            echo $bpiacrdn_categories_list;
        }
    }
	public function bpiacrdn_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
		} else{
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', BWDEB_ROOT_AUTHOR_PRO) . '</h2>';
		}
	}
}