<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdbpc_blogpost_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdbpc-blogpost-carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Creative Post Carousel', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-posts-carousel bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdthe_post_category'];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdbpc_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdbpc_select_style_selection',
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
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpc_image_show_switcher',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbpc_title_show_switcher',
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
			'bwdbpc_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'div',
				'options' => [
					'div'  => esc_html__( 'Div', BWDEB_ROOT_AUTHOR_PRO ),
					'h1' => esc_html__( 'H1', BWDEB_ROOT_AUTHOR_PRO ),
					'h2' => esc_html__( 'H2', BWDEB_ROOT_AUTHOR_PRO ),
					'h3' => esc_html__( 'H3', BWDEB_ROOT_AUTHOR_PRO ),
					'h4' => esc_html__( 'H4', BWDEB_ROOT_AUTHOR_PRO ),
					'h5' => esc_html__( 'H5', BWDEB_ROOT_AUTHOR_PRO ),
					'h6' => esc_html__( 'H6', BWDEB_ROOT_AUTHOR_PRO ),
					'p' => esc_html__( 'p', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdbpc_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_description_show_switcher',
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
			'bwdbpc_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_taxo_icon',
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
			'bwdbpc_date_show_switcher',
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
			'bwdbpc_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bwdbpc_author_show_switcher',
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
			'bwdbpc_author_indicator',
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
					'bwdbpc_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_gravader_height',
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
					'{{WRAPPER}} .bwdbpc_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bwdbpc_author_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdbpc_author-img i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_comments_show_switcher',
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
			'bwdbpc_blogs_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpc_button_show_switcher',
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
			'bwdbpc_button_types',
			[
				'label' => esc_html__( 'Button Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'condition' => [
					'bwdbpc_button_show_switcher' => 'yes',
				],
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'right',
				'options' => [
					'none' => [
						'title' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-disable-trash-o',
					],
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
					'bwdbpc_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdbpc_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function bwdbpc_get_all_post_types() {
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
				'options' => bwdbpc_get_all_post_types(),
			]
		);

		$this->add_control(
			'bwdbpc_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// Add custom query to retrieve all authors
		function bwdbpc_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bwdbpc_the_all_author',
            [
                'label' => __( 'Select Authors', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => bwdbpc_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function bwdbpc_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bwdbpc_the_all_categories',
			[
				'label' => __( 'Select Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpc_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function bwdbpc_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bwdbpc_the_all_tags',
			[
				'label' => __( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpc_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function bwdbpc_get_all_post_formats() {
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
			'bwdbpc_the_all_post_formats',
			[
				'label' => __( 'Post Formats', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpc_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function bwdbpc_get_all_posts() {
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
			'bwdbpc_include_posts',
			[
				'label' => __( 'Include Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpc_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function bwdbpc_get_all_post() {
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
			'bwdbpc_exclude_post',
			[
				'label' => __( 'Exclude Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpc_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bwdbpc_the_all_date',
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
			'bwdbpc_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_coustom_month',
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
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_the_order_by',
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
			'bwdbpc_blog_order',
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
			'bwdbpc_categories_show_switcher',
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
			'bwdbpc_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO ),
					'show_main_cat' => esc_html__( 'Show Main Category', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdbpc_categories_show_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'bwdbpc_tags_show_switcher',
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
			'bwdbpc_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpc_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-align-start-h',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-align-stretch-h',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-align-end-h',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'bwdbpc_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxo Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdbpc-btm-gap' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdbpc_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_title',
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title',
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpc_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_desce',
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce',
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_description_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_options',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpc_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_button a',
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_bttn .bwdbpc_button',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button:hover a',
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_bttn .bwdbpc_button:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_blog_bttn:hover, {{WRAPPER}} .bwdbpc_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_button_the_icon_margin',
            [
                'label' => esc_html__('Icon Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button .bwdbpc_icons_right, {{WRAPPER}} .bwdbpc_button .bwdbpc_icons_left' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpc_the_post_image_height_size',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_image' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_the_post_image_width_size',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_image' => 'width: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_image_overly_b::before, {{WRAPPER}} .bwdbpc_image_overly_a::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_image img, {{WRAPPER}} .bwdbpc_blog_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_image_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_image img',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_author_style_section',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_user .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_author-img, {{WRAPPER}} .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_user .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_user::after, {{WRAPPER}} .bwdbpc_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_author_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_author_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_date_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_date .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_date .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_date::before, {{WRAPPER}} .bwdbpc_blogPost_17 .bwdbpc_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_taxonomy_date_box_size',
			[
				'label' => esc_html__( 'Box size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_date' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbpc_select_style_selection' =>['style4', 'style11', 'style13', 'style17', 'style23', 'style30', 'style31'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_comment .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_comment .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_comment_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_comment_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_tag .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_tag .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag::before, {{WRAPPER}} .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdbpc_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_category .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_category .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_category:hover li a, {{WRAPPER}} .bwdbpc_category:hover .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_cat_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdbpc_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdbpc_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_n_bg_b:before, {{WRAPPER}} .bwdbpc_g_bg, {{WRAPPER}} .bwdbpc_blog_bottom_part, {{WRAPPER}} .bwdbpc-bg' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_box_heading',
			[
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:before, {{WRAPPER}} .bwdbpc_g_bg, {{WRAPPER}} .bwdbpc_blog_bottom_part, {{WRAPPER}} .bwdbpc-bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:before, {{WRAPPER}} .bwdbpc_box_sha, {{WRAPPER}} .bwdbpc_box_style_cmn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_margin_cmn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdbpc_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_n_bg_b::before, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_g_bg, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_bottom_part, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc-bg' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_box_heading_hover',
			[
				'label' => esc_html__( 'Gradient Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_n_bg_b::before, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_g_bg, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_bottom_part, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc-bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:hover:before, {{WRAPPER}} .bwdbpc_box_sha:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_radi:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Controls', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdbpc-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdbpc_slide_margin',
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
			'bwdbpc_popover_responsive_device',
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
				'bwdbpc_slide_desktop_view',
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
				'bwdbpc_slide_tablet_view',
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
				'bwdbpc_slide_mobile_view',
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


		//popover-autoplay
		$this->add_control(
			'bwdbpc_aupoplay_popover',
			[
				'label' => esc_html__( 'More Options', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdbpc_infinite_autoplay_switcher',
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
					'bwdbpc_infinite_loop_switcher',
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
					'bwdbpc_HoverPause_switcher',
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
					'bwdbpc_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
						'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdbpc_autoplay_timeout',
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
					'bwdbpc_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdbpc_stace_padding',
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


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdbpc_arrow_popover',
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
				'bwdbpc_nav_switcher',
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
				'bwdbpc_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdbpc_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdbpc_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdbpc_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdbpc_nav_type' => 'text',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdbpc_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdbpc_nav_type' => 'text',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdbpc_dots_popover',
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
				'bwdbpc_dots_switcher',
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
				'bwdbpc_dots_type',
				[
					'label' => esc_html__( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
						'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdbpc_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdbpc_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots2'  => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots3'  => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots4'  => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots5'  => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots6'  => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots7'  => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots8'  => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots9'  => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
						'bwdbpc_dots10'  => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'bwdbpc_dots_switcher' => 'yes',
						'bwdbpc_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();




		$this->start_controls_section(
			'bwdbpc_blogpost_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_nav_switcher' => 'yes'
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
				'bwdbpc_arrow_color',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdbpc_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdbpc_arrow_size',
				[
					'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdbpc_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev span, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next span',
					'condition' => [
						'bwdbpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdbpc_arrow_width',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdbpc_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdbpc_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdbpc_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdbpc_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdbpc_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdbpc_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdbpc_arrow_popover_style',
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
					'bwdbpc_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_vertical',
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
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_horizontal',
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
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdbpc_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_Right_position_vertical',
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
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdbpc_arrow_right_position_horizontal',
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
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
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
				'bwdbpc_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdbpc_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdbpc_arrow_size_hover',
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
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdbpc_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover span, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover span',
					'condition' => [
						'bwdbpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdbpc_arrow_width_hover',
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
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdbpc_arrow_height_hover',
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
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdbpc_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdbpc_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdbpc_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdbpc_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdbpc_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdbpc_arrow_popover_style_hover',
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
					'bwdbpc_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_vertical_hover',
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
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdbpc_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_Right_position_vertical_hover',
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
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdbpc_arrow_right_position_horizontal_hover',
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
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdbpc_blogpost_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdbpc_dots_popover_style',
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
				'bwdbpc_dots_Right_position_vertical',
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
						'{{WRAPPER}} .bwdbpc-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdbpc_dots_left_position_horizontal',
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
						'{{WRAPPER}} .bwdbpc-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdbpc_dots_gap_ertical',
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
					'{{WRAPPER}} .bwdbpc-owl-dots' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdbpc_dots_gap',
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
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:not(:last-child) ' => 'margin-inline-end: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdbpc_dots_alignment',
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
					'{{WRAPPER}} .bwdbpc-owl-dots' => 'text-align: {{VALUE}}',
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
			'bwdbpc_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width',
			[
				'label' => esc_html__( 'Dot Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-slider-common .bwdbpc-owl-dots .bwdbpc-owl-dot ' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
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
			'bwdbpc_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width_active',
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
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdbpc_dots_height_active',
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
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
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
			'bwdbpc_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width_hover',
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
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdbpc_dots_height_hover',
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
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}


	protected function render(){
		$settings = $this->get_settings_for_display();
		// for-owl-carousel-start
		$bwdbpc_slide_margin = $settings['bwdbpc_slide_margin'];
		$bwdbpc_slide_mobile_view = $settings['bwdbpc_slide_mobile_view'];
		$bwdbpc_slide_tablet_view = $settings['bwdbpc_slide_tablet_view'];
		$bwdbpc_slide_desktop_view = $settings['bwdbpc_slide_desktop_view'];
		$bwdbpc_infinite_autoplay_switcher = $settings['bwdbpc_infinite_autoplay_switcher'];
		$bwdbpc_infinite_loop_switcher = $settings['bwdbpc_infinite_loop_switcher'];
		$bwdbpc_HoverPause_switcher = $settings['bwdbpc_HoverPause_switcher'];
		$bwdbpc_centermode_switcher = $settings['bwdbpc_centermode_switcher'];
		$bwdbpc_autoplay_timeout = $settings['bwdbpc_autoplay_timeout'];
		$bwdbpc_autoplay_speed = $settings['bwdbpc_autoplay_speed'];
		$bwdbpc_stace_padding = $settings['bwdbpc_stace_padding'];
		//nav--------------------------------------------------
		$bwdbpc_nav_switcher = $settings['bwdbpc_nav_switcher'];
		$bwdbpc_nav_type = $settings['bwdbpc_nav_type'];

		if( $bwdbpc_nav_switcher == 'yes' ) {
			if( $bwdbpc_nav_type == 'icon' ) {
				$prev = $settings['bwdbpc_nav_prev_arrow']['value'];
				$next = $settings['bwdbpc_nav_next_arrow']['value'];
			} else if( $bwdbpc_nav_type == 'text' ) {
				$prev = $settings['bwdbpc_nav_prev_text'];
				$next = $settings['bwdbpc_nav_next_text'];
			} 
		}
		$bwdbpc_dots_switcher = $settings['bwdbpc_dots_switcher'];
		$bwdbpc_dots_type = $settings['bwdbpc_dots_type'];
		// for-owl-carousel-end

		// For style to Ferdaus start
		$bwdbpc_styles = $settings['bwdbpc_select_style_selection'];
		$bwdbpc_title_tags = $settings['bwdbpc_title_tags'];
		$bwdbpc_post_per_page = $settings['bwdbpc_the_post_per_page'];
		$bwdbpc_post_description_words = $settings['bwdbpc_the_post_description_words'];
		$bwdbpc_blog_word_trim_indi = $settings['bwdbpc_blog_word_trim_indi'];
		$bwdbpc_blog_date_format = $settings['bwdbpc_blog_date_format'];

		$bwdbpc_author_indicator = $settings['bwdbpc_author_indicator'];
		$bwdbpc_button_icon_align = $settings['bwdbpc_button_icon_align'];
		// Button Icon only bwdbpc_blog_button_icon
		$bwdbpc_taxo_icon = $settings['bwdbpc_taxo_icon'];
		$bwdbpc_button_types = $settings['bwdbpc_button_types'];

		$bwdbpc_image_swtcher = $settings['bwdbpc_image_show_switcher'];
		$bwdbpc_title_swtcher = $settings['bwdbpc_title_show_switcher'];
		$bwdbpc_description_swtcher = $settings['bwdbpc_description_show_switcher'];
		$bwdbpc_date_swtcher = $settings['bwdbpc_date_show_switcher'];
		$bwdbpc_author_swtcher = $settings['bwdbpc_author_show_switcher'];
		$bwdbpc_comments_swtcher = $settings['bwdbpc_comments_show_switcher'];
		$bwdbpc_categories_swtcher = $settings['bwdbpc_categories_show_switcher'];
		$bwdbpc_tags_swtcher = $settings['bwdbpc_tags_show_switcher'];
		$bwdbpc_cat_show_status = $settings['bwdbpc_the_cat_show_status'];

		$bwdbpc_categorys_dataa = $settings['bwdbpc_the_all_categories'];
		$bwdbpc_the_blog_type = $settings['selected_post_types'];
		$bwdbpc_blog_order = $settings['bwdbpc_blog_order'];
		$bwdbpc_author = $settings['bwdbpc_the_all_author'];
		$bwdbpc_order_by = $settings['bwdbpc_the_order_by'];
		$bwdbpc_include_post = $settings['bwdbpc_include_posts'];
		$bwdbpc_exclude_post = $settings['bwdbpc_exclude_post'];
		$bwdbpc_tags_filter = $settings['bwdbpc_the_all_tags'];
		$bwdbpc_post_format = $settings['bwdbpc_the_all_post_formats'];
		
		$bwdbpc_the_all_date = $settings['bwdbpc_the_all_date'];
		$bwdbpc_text_str = ' ';
		if('d' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_year = $settings['bwdbpc_blog_coustom_year'];
			$bwdbpc_coustom_month = $settings['bwdbpc_blog_coustom_month'];
			$bwdbpc_coustom_day = $settings['bwdbpc_blog_coustom_day'];
			$wdbp_time = $bwdbpc_text_str;
		} else{
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$wdbp_time = $bwdbpc_text_str;
		}

		$bwdbpc_args = array(
			'posts_per_page' => $bwdbpc_post_per_page,
			'author__in'     => $bwdbpc_author,
			'tag__in'        => $bwdbpc_tags_filter,
			'category__in'   => $bwdbpc_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bwdbpc_exclude_post,
			'orderby'        => $bwdbpc_order_by,
			'order'   		 => $bwdbpc_blog_order,
			'date_query'     => $wdbp_time,
			'year'           => $bwdbpc_coustom_year,
			'monthnum'       => $bwdbpc_coustom_month,
			'day'            => $bwdbpc_coustom_day,
		);
		
		// Check the selected post source
		if ($bwdbpc_the_blog_type === 'post') {
			$bwdbpc_args['post_type'] = 'post';
		} elseif ($bwdbpc_the_blog_type === 'page') {
			$bwdbpc_args['post_type'] = 'page';
		} elseif ($bwdbpc_the_blog_type === 'manual') {
			$bwdbpc_include_post = $settings['bwdbpc_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($bwdbpc_include_post)) {
				$bwdbpc_args['post__in'] = $bwdbpc_include_post;
			} else {}
		}

		$bwdbpc_yes_value = 'yes';
		include 'pctemplates/condition.php';
		
		if ( $bwdbpc_styles ) {?>
			<div class="<?php echo $bwdbpc_blog_class ?> bwdbpc-slider-common <?php echo esc_attr($settings['bwdbpc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdbpc-blogpost-custom-id'] ); ?>">
				<?php include 'pctemplates/bwdbpc-variable.php'; ?>
				<div class="bwdbpc-owl bwdbpc-owl-carousel bwdbpc-owl-theme">
					<?php $wp_query = new \WP_Query( $bwdbpc_args );
					if($wp_query->have_posts()) :
						while($wp_query->have_posts()) : $wp_query->the_post();
					echo '<div class="col-bwdbpc">';?>
						<div class="bwdbpc_blog_box bwdbpc_box_padding_cmn"> 
							<?php 
							
							$allowed_styles = array('style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41');
							if( in_array($bwdbpc_styles, $allowed_styles) ){ 
								include 'pctemplates/thumbnail-bg.php'; 

								if( $bwdbpc_styles !== 'style36' && $bwdbpc_styles !== 'style37' && $bwdbpc_styles !== 'style38' ){
									include 'pctemplates/post-bottom-part.php';
								}
							}

							if( !in_array($bwdbpc_styles, $allowed_styles) ){
							if( $bwdbpc_styles == 'style3' ){ include 'pctemplates/thumbnail-bg.php'; }
							if( $bwdbpc_styles !== 'style3' ){ include 'pctemplates/thumbnail.php'; include 'pctemplates/post-bottom-part.php'; }
							}
							if( $bwdbpc_styles == 'style6' || $bwdbpc_styles == 'style25' ){ include 'pctemplates/overlay-content.php'; }
							?>

						</div>
					</div>
					<?php endwhile; 
					endif;
					wp_reset_postdata(); ?>
				</div>
			</div>
			<?php
		}
	}
	public function bwdbpc_post_categories() {
        $bwdbpc_categories_list = get_the_category_list(esc_html__(', ', BWDEB_ROOT_AUTHOR_PRO));
        if ($bwdbpc_categories_list) {
            echo $bwdbpc_categories_list;
        }
    }
}
