<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BPACCDNAccordionCreatoR extends Widget_Base {

	public function get_name() {
		return esc_html__('BlogPostAccordions', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Post Accordions', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle post-accordion';
	}

	public function get_categories() {
		return [ 'bwdthe_post_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bpaccdn_products_content_section',
			[
				'label' => esc_html__( 'Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bpaccdn_products_zone_style',
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
					'21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
					'22' => esc_html__( 'Style 22', BWDEB_ROOT_AUTHOR_PRO ),
					'23' => esc_html__( 'Style 23', BWDEB_ROOT_AUTHOR_PRO ),
					'24' => esc_html__( 'Style 24', BWDEB_ROOT_AUTHOR_PRO ),
					'25' => esc_html__( 'Style 25', BWDEB_ROOT_AUTHOR_PRO ),
					'26' => esc_html__( 'Style 26', BWDEB_ROOT_AUTHOR_PRO ),
					'27' => esc_html__( 'Style 27', BWDEB_ROOT_AUTHOR_PRO ),
					'28' => esc_html__( 'Style 28', BWDEB_ROOT_AUTHOR_PRO ),
					'29' => esc_html__( 'Style 29', BWDEB_ROOT_AUTHOR_PRO ),
					'30' => esc_html__( 'Style 30', BWDEB_ROOT_AUTHOR_PRO ),
					'31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpaccdn_image_link_show_switcher',
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
			'bpaccdn_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpaccdn_accordion_collapsed_icon',
			[
				'label' => esc_html__( 'Collapsed Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-down',
					'library' => 'solid',
				],
				'condition' => [
					'bpaccdn_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_accordion_expand_icon',
			[
				'label' => esc_html__( 'Expand Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
				'condition' => [
					'bpaccdn_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_title_tags',
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
			'bpaccdn_description_show_switcher',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bpaccdn_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bpaccdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpaccdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_taxo_icon',
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
			'bpaccdn_date_show_switcher',
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
			'bpaccdn_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpaccdn_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bpaccdn_author_show_switcher',
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
			'bpaccdn_author_indicator',
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
					'bpaccdn_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpaccdn_blog_gravader_height',
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
					'{{WRAPPER}} .bpaccdn_author-img img' => 'block-size: {{SIZE}}{{UNIT}} !important; inline-size: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bpaccdn_author_show_switcher' => 'yes',
					'bpaccdn_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bpaccdn_author_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bpaccdn_author_show_switcher' => 'yes',
					'bpaccdn_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bpaccdn_comments_show_switcher',
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
			'bpaccdn_blogs_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpaccdn_button_show_switcher',
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
			'bpaccdn_button_types',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
					'bpaccdn_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bpaccdn_button_icon_align',
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
					'bpaccdn_button_show_switcher' => 'yes',
					'bpaccdn_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bpaccdn_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
					'bpaccdn_button_types' => 'text_icon',
					'bpaccdn_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
					'bpaccdn_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bpaccdn_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function bwdeb_get_all_post_types() {
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
				'options' => bwdeb_get_all_post_types(),
			]
		);

		$this->add_control(
			'bpaccdn_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// Add custom query to retrieve all authors
		function bwdeb_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bpaccdn_the_all_author',
            [
                'label' => __( 'Select Authors', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => bwdeb_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function bwdeb_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bpaccdn_the_all_categories',
			[
				'label' => __( 'Select Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdeb_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function bwdeb_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bpaccdn_the_all_tags',
			[
				'label' => __( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdeb_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function bwdeb_get_all_post_formats() {
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
			'bpaccdn_the_all_post_formats',
			[
				'label' => __( 'Post Formats', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdeb_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function bwdeb_get_all_posts() {
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
			'bpaccdn_include_posts',
			[
				'label' => __( 'Include Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdeb_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function bwdeb_get_all_post() {
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
			'bpaccdn_exclude_post',
			[
				'label' => __( 'Exclude Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdeb_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bpaccdn_the_all_date',
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
			'bpaccdn_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpaccdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_coustom_month',
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
					'bpaccdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bpaccdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpaccdn_the_order_by',
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
			'bpaccdn_blog_order',
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
			'bpaccdn_categories_show_switcher',
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
			'bpaccdn_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO ),
					'show_main_cat' => esc_html__( 'Show Main Category', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bpaccdn_categories_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpaccdn_tags_show_switcher',
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
			'bpaccdn_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpaccdn_the_pagination_type',
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
			'bpaccdn_the_pagination_items_align',
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
					'bpaccdn_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpaccdn_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bpaccdn_the_pagination_type' => 'number-and-text',
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
			'bpaccdn_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpaccdn_title_alignment',
			[
				'label' => esc_html__( 'Title Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
		// Hover control start for title
		$this->start_controls_tabs(
			'bpaccdn_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_title_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-collapsed',
			]
		);
		$this->add_control(
			'bpaccdn_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-collapsed' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-collapsed',
			]
		);
		$this->add_control(
			'bpaccdn_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpaccdn_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-collapsed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-panel-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-panel-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_icon_t_style_section',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_icon' => 'yes',
				],
			]
		);
		// Hover control start for icon_t
		$this->start_controls_tabs(
			'bpaccdn_blog_icon_t_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_icon_t_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'bpaccdn_the_title_icon_size',
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
					'{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-colexp-icon' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_icon_t_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-colexp-icon' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_icon_t_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-panel-title .bpaccdn-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_icon_t_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_responsive_control(
			'bpaccdn_the_title_icon_hover_size',
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
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-colexp-icon' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_icon_t_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-colexp-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_icon_t_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-panel-title .bpaccdn-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_pprroo_icon_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
				'selector' => '{{WRAPPER}} .bpaccdn-collapsed',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_icon_t_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-collapsed' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_icon_t_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-collapsed' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_button_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpaccdn_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_button_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-cartBtn',
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-cartBtn:hover',
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bpaccdn_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-cartBtn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-cartBtn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
	
		// Hover control start for box
		$this->start_controls_tabs(
			'bpaccdn_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpaccdn_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpaccdn_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodCont' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodCont' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodCont' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpaccdn_blog_box_bg_grediant_hover_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont:hover',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpaccdn_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-prodCont:hover',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_the_box_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodCont:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpaccdn_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_description_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-prodDesc',
			]
		);
		$this->add_control(
			'bpaccdn_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodDesc',
			]
		);
		$this->add_control(
			'bpaccdn_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpaccdn_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodDesc' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-prodDesc' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpaccdn_the_post_image_width_size',
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
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-panel-body .bpaccdn-productImg img' => 'inline-size: {{SIZE}}px',
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-panel-body .bpaccdn-productImg img' => 'block-size: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-panel-body .bpaccdn-productImg img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpaccdn_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat a',
			]
		);
		$this->add_control(
			'bpaccdn_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodCat a',
			]
		);
		$this->add_control(
			'bpaccdn_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_caategory_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodCat' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_price_options',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_date_show_switcher' => 'yes',
				],
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpaccdn_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-salePrice',
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-salePrice:hover',
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpaccdn_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-salePrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-salePrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_price_options_author',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				// 'condition' => [
				// 	'bpaccdn_price' => 'yes',
				// ],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpaccdn_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-regularPrice',
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-regularPrice:hover',
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpaccdn_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-regularPrice' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-regularPrice' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_sale_style_section',
			[
				'label' => esc_html__( 'Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpaccdn_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_sale_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpaccdn_blog_sale_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpaccdn_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_sale_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_sale_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_sale_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-prodSaleCount' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_date_style_section',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpaccdn_blog_date_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_date_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate',
			]
		);
		$this->add_control(
			'bpaccdn_blog_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_date_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-publishDate',
			]
		);
		$this->add_control(
			'bpaccdn_blog_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default:hover .bpaccdn-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpaccdn_blog_date_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-Accordion-default .bpaccdn-publishDate' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpaccdn_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpaccdn-panel-body',
			]
		);
		$this->add_responsive_control(
			'bpaccdn_products_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpaccdn-Accordion-default' => 'margin-block-end: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-panel-body' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn-panel-body' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpaccdn_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpaccdn_the_pagination_type' => ['number-and-text', 'number']
				],
			]
		);
		$this->add_responsive_control(
			'bpaccdn_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Top Spacing', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bpaccdn_pagination_item' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpaccdn_blog_button_box_pagi_gap',
			[
				'label' => esc_html__( 'Item Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bpaccdn_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bpaccdn_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bpaccdn_pagination_item a',
			]
		);
		$this->add_control(
			'bpaccdn_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpaccdn_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpaccdn_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bpaccdn_pagination_item span, {{WRAPPER}} .bpaccdn_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bpaccdn_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item span, {{WRAPPER}} .bpaccdn_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpaccdn_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpaccdn_pagination_item span, {{WRAPPER}} .bpaccdn_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bpaccdn_blog_button_box_width',
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
					'{{WRAPPER}} .bpaccdn_pagination_item a, {{WRAPPER}} .bpaccdn_pagination_item span' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpaccdn_blog_button_box_height',
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
					'{{WRAPPER}} .bpaccdn_pagination_item a, {{WRAPPER}} .bpaccdn_pagination_item span' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bpaccdn_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn_pagination_item a, {{WRAPPER}} .bpaccdn_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpaccdn_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpaccdn_pagination_item a, {{WRAPPER}} .bpaccdn_pagination_item span' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bpaccdn_icon = $settings['bpaccdn_icon'];
		$bpaccdn_title_tags = $settings['bpaccdn_title_tags'];
		$bpaccdn_styles = $settings['bpaccdn_products_zone_style'];
		$bpaccdn_post_per_page = $settings['bpaccdn_the_post_per_page'];
		$bpaccdn_post_description_words = $settings['bpaccdn_the_post_description_words'];
		$bpaccdn_blog_word_trim_indi = $settings['bpaccdn_blog_word_trim_indi'];
		$bpaccdn_blog_date_format = $settings['bpaccdn_blog_date_format'];

		$bpaccdn_author_indicator = $settings['bpaccdn_author_indicator'];
		$bpaccdn_taxo_icon = $settings['bpaccdn_taxo_icon'];

		$bpaccdn_image_link_show = $settings['bpaccdn_image_link_show_switcher'];
		$bpaccdn_description_swtcher = $settings['bpaccdn_description_show_switcher'];
		$bpaccdn_date_swtcher = $settings['bpaccdn_date_show_switcher'];
		$bpaccdn_author_swtcher = $settings['bpaccdn_author_show_switcher'];
		$bpaccdn_comments_swtcher = $settings['bpaccdn_comments_show_switcher'];
		$bpaccdn_categories_swtcher = $settings['bpaccdn_categories_show_switcher'];
		$bpaccdn_tags_swtcher = $settings['bpaccdn_tags_show_switcher'];
		$bpaccdn_cat_show_status = $settings['bpaccdn_the_cat_show_status'];

		$bpaccdn_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bpaccdn_categorys_dataa = $settings['bpaccdn_the_all_categories'];
		$bpaccdn_the_blog_type = $settings['selected_post_types'];
		$bpaccdn_blog_order = $settings['bpaccdn_blog_order'];
		$bpaccdn_author = $settings['bpaccdn_the_all_author'];
		$bpaccdn_order_by = $settings['bpaccdn_the_order_by'];
		$bpaccdn_include_post = $settings['bpaccdn_include_posts'];
		$bpaccdn_exclude_post = $settings['bpaccdn_exclude_post'];
		$bpaccdn_tags_filter = $settings['bpaccdn_the_all_tags'];
		$bpaccdn_post_format = $settings['bpaccdn_the_all_post_formats'];

		$bpaccdn_button_types = $settings['bpaccdn_button_types'];
		$bpaccdn_button_icon_align = $settings['bpaccdn_button_icon_align'];
		
		$bpaccdn_the_all_date = $settings['bpaccdn_the_all_date'];
		$bpaccdn_text_str = ' ';
		if('d' === $bpaccdn_the_all_date){
			$bpaccdn_coustom_day = $bpaccdn_text_str;
			$bpaccdn_coustom_month = $bpaccdn_text_str;
			$bpaccdn_coustom_year = $bpaccdn_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bpaccdn_the_all_date){
			$bpaccdn_coustom_day = $bpaccdn_text_str;
			$bpaccdn_coustom_month = $bpaccdn_text_str;
			$bpaccdn_coustom_year = $bpaccdn_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bpaccdn_the_all_date){
			$bpaccdn_coustom_day = $bpaccdn_text_str;
			$bpaccdn_coustom_month = $bpaccdn_text_str;
			$bpaccdn_coustom_year = $bpaccdn_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bpaccdn_the_all_date){
			$bpaccdn_coustom_year = $settings['bpaccdn_blog_coustom_year'];
			$bpaccdn_coustom_month = $settings['bpaccdn_blog_coustom_month'];
			$bpaccdn_coustom_day = $settings['bpaccdn_blog_coustom_day'];
			$wdbp_time = $bpaccdn_text_str;
		} else{
			$bpaccdn_coustom_day = $bpaccdn_text_str;
			$bpaccdn_coustom_month = $bpaccdn_text_str;
			$bpaccdn_coustom_year = $bpaccdn_text_str;
			$wdbp_time = $bpaccdn_text_str;
		}
		
		$bpaccdn_args = array(
			'posts_per_page' => $bpaccdn_post_per_page,
			'author__in'     => $bpaccdn_author,
			'tag__in'        => $bpaccdn_tags_filter,
			'category__in'   => $bpaccdn_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bpaccdn_exclude_post,
			'orderby'        => $bpaccdn_order_by,
			'order'   		 => $bpaccdn_blog_order,
			'paged'          => $bpaccdn_paged,
			'date_query'     => $wdbp_time,
			'year'           => $bpaccdn_coustom_year,
			'monthnum'       => $bpaccdn_coustom_month,
			'day'            => $bpaccdn_coustom_day,
		);
		
		// Check the selected post source
		if ($bpaccdn_the_blog_type === 'post') {
			$bpaccdn_args['post_type'] = 'post';
		} elseif ($bpaccdn_the_blog_type === 'page') {
			$bpaccdn_args['post_type'] = 'page';
		} elseif ($bpaccdn_the_blog_type === 'manual') {
			$bpaccdn_include_post = $settings['bpaccdn_include_posts']; 
			if (!empty($bpaccdn_include_post)) {
				$bpaccdn_args['post__in'] = $bpaccdn_include_post;
			} else {}
		}
		
		// Check if post format is set
		if (isset($bpaccdn_post_format) && !empty($bpaccdn_post_format)) {
			$post_format_slug = 'post-format-' . $bpaccdn_post_format;
			$bpaccdn_args['tax_query'] = array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => $post_format_slug,
				),
			);
		}
		$bpaccdn_the_pagination_type = $settings['bpaccdn_the_pagination_type'];
		$bpaccdn_yes_value = 'yes';
		$bpaccdn_blog_next_format = $settings['bpaccdn_blog_next_format'];
		$bpaccdn_blog_prev_format = $settings['bpaccdn_blog_prev_format'];

		$bpaccdn_yes_value = 'yes';
		

		echo '<div class="bpaccdn-accordion-all">';
			echo '<div class="bpaccdn-Accordion-'.esc_attr($bpaccdn_styles).' bpaccdn-accordion-common">';
			$wp_query = new \WP_Query( $bpaccdn_args );
			if($wp_query->have_posts()) :
				while($wp_query->have_posts()) : $wp_query->the_post();
				echo '<div class="bpaccdn-Accordion-default">';
					echo '<div class="bpaccdn-Accordion-heading bpaccdn-panel-heading" >';
						echo '<'.$bpaccdn_title_tags.' class="bpaccdn-panel-title">';
							echo '<span class="bpaccdn-collapsed" style="text-align:'.$settings['bpaccdn_title_alignment'].'">'.get_the_title().'</span>';
							if('yes' === $bpaccdn_icon):
								echo '<span class="bpaccdn-collapsed-icon bpaccdn-colexp-icon">'; \Elementor\Icons_Manager::render_icon( $settings['bpaccdn_accordion_collapsed_icon'], [ 'aria-hidden' => 'true' ] ); echo '</span>';
								echo '<span class="bpaccdn-expand-icon bpaccdn-colexp-icon">'; \Elementor\Icons_Manager::render_icon( $settings['bpaccdn_accordion_expand_icon'], [ 'aria-hidden' => 'true' ] ); echo '</span>';
							endif;
						echo '</'.$bpaccdn_title_tags.'>';
					echo '</div>';
					echo '<div id="collapseOne">';
						echo '<div class="bpaccdn-panel-body">';
							// Image
							if ($bpaccdn_yes_value === $bpaccdn_image_link_show):
								echo '<div class="bpaccdn-productImg"><a class="bpaccdn_thumbnail" href="'.get_the_permalink().'">'; $this->bpaccdn_post_thumbnail_here(); echo '</a></div>';
							else: echo '<div class="bpaccdn-productImg">'; $this->bpaccdn_post_thumbnail_here(); echo '</div>'; endif;
							echo '<div class="bpaccdn-prodCont">';
								// Post Ctegory
								include 'template/post-category.php';
							echo '<div class="bpaccdn-meta-wrap">';
									echo '<div class="bpaccdn-prodpriratbtn">';
									echo '<div class="bpaccdn-prodpriratwrap">';
										echo '<div class="bpaccdn-prodprice">';
										// date
										$bpaccdn_post_date = get_the_date($bpaccdn_blog_date_format);
										$bpaccdn_date_title = '<span>'.$bpaccdn_post_date.'</span></div>';
										$bpaccdn_date_icon = '<i class="bpaccdn_icons far fa-calendar-alt"></i>';
										$bpaccdn_date_show_icon = ('show' == $bpaccdn_taxo_icon)?$bpaccdn_date_icon:'';
										$bpaccdn_date_wrap_div = '<div class="bpaccdn-salePrice bpaccdn-price">'.$bpaccdn_date_show_icon;
										$bpaccdn_date_switch = ($bpaccdn_yes_value === $bpaccdn_date_swtcher)? $bpaccdn_date_wrap_div:'';
										$bpaccdn_date_title_switch = ($bpaccdn_yes_value === $bpaccdn_date_swtcher)? $bpaccdn_date_title:'';
										echo $bpaccdn_date_switch.$bpaccdn_date_title_switch;
										// author
										$bpaccdn_control_icon = $settings['bpaccdn_author_icon']['value'];
										$bpaccdn_author_icon = '<i class="bpaccdn_icons '.$bpaccdn_control_icon.'"></i>';
										$bpaccdn_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
										$bpaccdn_author_indicator_check = ('icon' === $bpaccdn_author_indicator) ? $bpaccdn_author_icon : $bpaccdn_gravater;
										$bpaccdn_total_author = $bpaccdn_author_indicator_check;
										$bpaccdn_author = ($bpaccdn_yes_value === $bpaccdn_author_swtcher) ? $bpaccdn_total_author.'<span>'.get_the_author_meta( 'nickname' ).'</span>' : '';
										echo '<div class="bpaccdn-regularPrice bpaccdn-price">'.$bpaccdn_author.'</div></div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="bpaccdn-prodOptInfo">';
									// ======================= Texo
									// Tags
									$bpaccdn_post_tags = get_the_tags();
									$bpaccdn_main_tag = ($bpaccdn_post_tags) ? $bpaccdn_post_tags[0]->name:'';
									$bpaccdn_tag_title = '<span>'.$bpaccdn_main_tag.'</span></div>';
									$bpaccdn_tag_icon = '<i class="fas fa-tag"></i>';
									$bpaccdn_tag_show_icon = ('show' == $bpaccdn_taxo_icon)?$bpaccdn_tag_icon:'';
									$bpaccdn_wrap_div = '<div class="bpaccdn-prodSaleCount bpaccdn-extra-meta">'.$bpaccdn_tag_show_icon;
									$bpaccdn_wrap_tag = ($bpaccdn_yes_value == $bpaccdn_tags_swtcher)?$bpaccdn_wrap_div:'';
									$bpaccdn_wrap_close_div = ($bpaccdn_yes_value == $bpaccdn_tags_swtcher)?$bpaccdn_tag_title:'';
									echo $bpaccdn_wrap_tag.$bpaccdn_wrap_close_div;
									// Comment
									$bpaccdn_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
									$bpaccdn_comm_title = '<span>'.$bpaccdn_main_comm.'</span></div>';
									$bpaccdn_comm_show_icon = ('show' == $bpaccdn_taxo_icon)?'<i class="fas fa-comments"></i>':'';
									$bpaccdn_wrap_comm_div = '<div class="bpaccdn-publishDate bpaccdn-extra-meta">'.$bpaccdn_comm_show_icon;
									$bpaccdn_comm_switch = ($bpaccdn_yes_value === $bpaccdn_comments_swtcher)?$bpaccdn_wrap_comm_div:'';
									$bpaccdn_comm_title_echo = ($bpaccdn_yes_value === $bpaccdn_comments_swtcher)?$bpaccdn_comm_title:'';
									echo $bpaccdn_comm_switch.$bpaccdn_comm_title_echo;
									// =======================
								echo '</div>';
							echo '</div>';
									// Description
									$bpaccdn_description = wp_trim_words(get_the_content(), $bpaccdn_post_description_words, $bpaccdn_blog_word_trim_indi);
									$bpaccdn_description_switcher = ($bpaccdn_yes_value === $bpaccdn_description_swtcher)?$bpaccdn_description:'';
									echo '<div class="bpaccdn-desc"><p class="bpaccdn-prodDesc">'.$bpaccdn_description_switcher.'</p></div>';
									// Post Pagination
									include 'template/post-button.php';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				endwhile;
				// Post Pagination
				include 'template/pagination.php';
			endif;
			wp_reset_postdata();
			echo '</div>';
		echo '</div>';
	}
	public function bpaccdn_post_categories() {
        $bpaccdn_categories_list = get_the_category_list(esc_html__(', ', BWDEB_ROOT_AUTHOR_PRO));
        if ($bpaccdn_categories_list) {
            echo $bpaccdn_categories_list;
        }
    }
	public function bpaccdn_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', BWDEB_ROOT_AUTHOR_PRO) . '</h2>';
			}
	}
}