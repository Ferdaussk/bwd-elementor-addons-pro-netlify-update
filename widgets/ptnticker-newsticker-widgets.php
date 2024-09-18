<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ptnticker_newsticker_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'ptnticker-newsticker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Post News Ticker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-posts-ticker bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdthe_post_category'];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'ptnticker_content_section',
			[
				'label' => esc_html__( 'All Style Here', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'ptnticker_select_style_selection',
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
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'ptnticker_title_link',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'ptnticker_title_tags',
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
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_ticker_content',
			[
				'label' => esc_html__( 'Ticker Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'ptnticker_ticker_sticky_switcher',
			[
				'label' => esc_html__( 'Ticker Sticky', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'NO', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'ptnticker_ticker_sticky_position',
			[
				'label' => esc_html__( 'Sticky Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bottom',
				'options' => [
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
				],
			]
		);
		//top
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_position_top',
			[
				'label' => esc_html__( 'Top Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-ticker-common.sticky.top' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
					'ptnticker_ticker_sticky_position' => 'top',
				],
			]
		);
		//bottom
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_position_bottom',
			[
				'label' => esc_html__( 'Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-ticker-common.sticky.bottom' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
					'ptnticker_ticker_sticky_position' => 'bottom',
				],
			]
		);
		//width
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-width' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'ptnticker_one_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'ptnticker_tag_switcher',
			[
				'label' => esc_html__( 'Heading?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'NO', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'ptnticker_ticker_title',
			[
				'label' => esc_html__( 'Heading Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Latest News', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'condition' => [
					'ptnticker_tag_switcher' => 'yes',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function ptnticker_get_all_post_types() {
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
				'options' => ptnticker_get_all_post_types(),
			]
		);

		// Add custom query to retrieve all authors
		function ptnticker_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'ptnticker_the_all_author',
            [
                'label' => __( 'Select Authors', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => ptnticker_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function ptnticker_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'ptnticker_the_all_categories',
			[
				'label' => __( 'Select Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function ptnticker_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'ptnticker_the_all_tags',
			[
				'label' => __( 'Select Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function ptnticker_get_all_post_formats() {
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
			'ptnticker_the_all_post_formats',
			[
				'label' => __( 'Post Formats', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function ptnticker_get_all_posts() {
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
			'ptnticker_include_posts',
			[
				'label' => __( 'Include Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function ptnticker_get_all_post() {
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
			'ptnticker_exclude_post',
			[
				'label' => __( 'Exclude Posts', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'ptnticker_the_all_date',
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
			'ptnticker_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_blog_coustom_month',
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
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_the_order_by',
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
		$this->add_responsive_control(
			'ptnticker_blog_order',
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
			'ptnticker_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_catproduct_carousel',
			[
				'label' => esc_html__( 'Animation Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'ptnticker-ticker-custom-id',
			[
				'label' => esc_html__( 'Custom Id', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'ticker-id', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//popover-responsive-device
		$this->add_control(
			'ptnticker_popover_responsive_device',
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
				'ptnticker_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'ptnticker_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'ptnticker_slide_mobile_view',
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

		//content amination
		$this->add_control(
			'ptnticker_content_effect',
			[
				'label'     => esc_html__('Effects Type', BWDEB_ROOT_AUTHOR_PRO),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounce' => esc_html__('Bounce', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceIn' => esc_html__('BounceIn', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceOut' => esc_html__('BounceOut', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceInUp' => esc_html__('bounceInUp', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceInDown' => esc_html__('bounceInDown', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceInLeft' => esc_html__('bounceInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__bounceInRight' => esc_html__('bounceInRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__backInUp' => esc_html__('backInUp', BWDEB_ROOT_AUTHOR_PRO),
					'animate__backInDown' => esc_html__('backInDown', BWDEB_ROOT_AUTHOR_PRO),
					'animate__backInLeft' => esc_html__('backInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__backInRight' => esc_html__('backInRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__flip' => esc_html__('Flip', BWDEB_ROOT_AUTHOR_PRO),
					'animate__flipInX' => esc_html__('FlipInX', BWDEB_ROOT_AUTHOR_PRO),
					'animate__flipInY' => esc_html__('FlipInY', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeIn' => esc_html__('fadeIn', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeOut' => esc_html__('FadeOut', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInUp' => esc_html__('fadeInUp', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInDown' => esc_html__('fadeInDown', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInUpBig' => esc_html__('fadeInUpBig', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInLeft' => esc_html__('fadeInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInRight' => esc_html__('fadeInRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInRightBig' => esc_html__('fadeInRightBig', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInBottomRight' => esc_html__('fadeInBottomRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInBottomLeft' => esc_html__('fadeInBottomLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInTopRight' => esc_html__('fadeInTopRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__fadeInTopLeft' => esc_html__('fadeInTopLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateIn' => esc_html__('RotateIn', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateOut' => esc_html__('RotateOut', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateInUpRight' => esc_html__('rotateInUpRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateInUpLeft' => esc_html__('rotateInUpLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateInDownRight' => esc_html__('rotateInDownRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rotateInDownLeft' => esc_html__('rotateInDownLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__hinge' => esc_html__('Hinge', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomIn' => esc_html__('ZoomIn', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomOut' => esc_html__('ZoomOut', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomInUp' => esc_html__('zoomInUp', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomInRight' => esc_html__('zoomInRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomInLeft' => esc_html__('zoomInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__zoomInDown' => esc_html__('zoomInDown', BWDEB_ROOT_AUTHOR_PRO),
					'animate__slideInUp' => esc_html__('SlideInUp', BWDEB_ROOT_AUTHOR_PRO),
					'animate__slideInRight' => esc_html__('slideInRight', BWDEB_ROOT_AUTHOR_PRO),
					'animate__slideInLeft' => esc_html__('slideInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__slideInDown' => esc_html__('slideInDown', BWDEB_ROOT_AUTHOR_PRO),
					'animate__flash' => esc_html__('Flash', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rollIn' => esc_html__('rollIn', BWDEB_ROOT_AUTHOR_PRO),
					'animate__pulse' => esc_html__('Pulse', BWDEB_ROOT_AUTHOR_PRO),
					'animate__rubberBand' => esc_html__('RubberBand', BWDEB_ROOT_AUTHOR_PRO),
					'animate__shakeX' => esc_html__('ShakeX', BWDEB_ROOT_AUTHOR_PRO),
					'animate__shakeY' => esc_html__('ShakeY', BWDEB_ROOT_AUTHOR_PRO),
					'animate__headShake' => esc_html__('HeadShake', BWDEB_ROOT_AUTHOR_PRO),
					'animate__swing' => esc_html__('Swing', BWDEB_ROOT_AUTHOR_PRO),
					'animate__tada' => esc_html__('Tada', BWDEB_ROOT_AUTHOR_PRO),
					'animate__wobble' => esc_html__('Wobble', BWDEB_ROOT_AUTHOR_PRO),
					'animate__jello' => esc_html__('Jello', BWDEB_ROOT_AUTHOR_PRO),
					'animate__heartBeat' => esc_html__('HeartBeat', BWDEB_ROOT_AUTHOR_PRO),
					'animate__jackInTheBox' => esc_html__('JackInTheBox', BWDEB_ROOT_AUTHOR_PRO),
					'animate__lightSpeedInLeft' => esc_html__('lightSpeedInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'animate__lightSpeedInRight' => esc_html__('lightSpeedInRight', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default' => 'animate__slideInLeft',
			]
		);
		
		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_infinite_autoplay_switcher',
			[
				'label' => esc_html__( 'Autoplay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_infinite_loop_switcher',
			[
				'label' => esc_html__( 'Infinite Loop', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_HoverPause_switcher',
			[
				'label' => esc_html__( 'Hover Pause', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'ptnticker_autoplay_timeout',
			[
				'label' => esc_html__( 'Autoplay TimeOut (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100000,
				'step' => 1,
				'default' => 3000,
			]
		);

		$this->add_control(
			'ptnticker_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speeds (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100000,
				'step' => 1,
				'default' => 2000,
			]
		);


		//popover-//Arrow Navigation
		$this->add_control(
			'ptnticker_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'ptnticker_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'ptnticker_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
						//'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
					],
					'condition' => [
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'ptnticker_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'ptnticker_nav_type' => 'icon',
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'ptnticker_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'ptnticker_nav_type' => 'icon',
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();



		$this->start_controls_section(
			'ptnticker_tag_style',
			[
				'label' => esc_html__( 'Tag Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'ptnticker_tag_switcher' => 'yes'
				]
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'tag_style_tabs',
			[
				'separator' => 'before',
			]
		);
		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'tag_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'ptnticker_tag_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_tag_bgcolor',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-title, {{WRAPPER}} .ptnticker-title::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ptnticker_tag_typography',
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_tag_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_tag_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_tag_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		$this->add_responsive_control(
            'ptnticker_tag_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'ptnticker_tag_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'tag_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'ptnticker_tag_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_tag_bgcolor_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-title:hover, {{WRAPPER}} .ptnticker-title:hover::after',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_tag_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-title:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_tag_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_tag_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-title:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();


		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_ticker_content_style',
			[
				'label' => esc_html__( 'Ticker Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'ticker_content_style_tabs',
			[
				'separator' => 'before',
			]
		);
		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'ticker_content_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'ptnticker_ticker_content_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-headline' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ptnticker_ticker_content_typography',
				'selector' => '{{WRAPPER}} .ptnticker-headline',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_ticker_content_bgcolor',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_ticker_content_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_ticker_content_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-content-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_ticker_content_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		$this->add_responsive_control(
            'ptnticker_ticker_content_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-items' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'ptnticker_ticker_content_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-items' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'ticker_content_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'ptnticker_ticker_content_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-headline:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_ticker_content_bgcolor_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_ticker_content_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_ticker_content_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-content-wrap:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_ticker_content_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();


		$this->end_controls_section();


		$this->start_controls_section(
			'ptnticker_ticker_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'ptnticker_nav_switcher' => 'yes'
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
			'ptnticker_arrow_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ' => 'color: {{VALUE}}',
				],
			]
		);

		//arrow-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_arrow_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon',
			]
		);

		//size
		$this->add_responsive_control(
			'ptnticker_arrow_size',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next svg' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'ptnticker_arrow_width',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'ptnticker_arrow_height',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i ' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_arrow_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'ptnticker_arrow_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_arrow_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ',
			]
		);

		//popover-//Arrow Navigation
		$this->add_control(
			'ptnticker_arrow_popover_style',
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
				'ptnticker_arrow_left_heading',
				[
					'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			//top
			$this->add_responsive_control(
				'ptnticker_arrow_left_position_vertical',
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
						'{{WRAPPER}} .owl-nav button.owl-prev' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'ptnticker_arrow_left_position_horizontal',
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
						'{{WRAPPER}} .owl-nav button.owl-prev' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
					],
				]
			);


			//right-arrow
			$this->add_control(
				'ptnticker_arrow_right_heading',
				[
					'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			//top
			$this->add_responsive_control(
				'ptnticker_arrow_Right_position_vertical',
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
						'{{WRAPPER}} .owl-nav button.owl-next' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//right
			$this->add_responsive_control(
				'ptnticker_arrow_right_position_horizontal',
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
						'{{WRAPPER}} .owl-nav button.owl-next' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
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
			'ptnticker_arrow_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//arrow-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_arrow_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		//size
		$this->add_responsive_control(
			'ptnticker_arrow_size_hover',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'ptnticker_arrow_width_hover',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//height
		$this->add_responsive_control(
			'ptnticker_arrow_height_hover',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover ' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_arrow_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'ptnticker_arrow_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_arrow_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();


	}
	

	protected function render(){
		$ptnticker_display = $this->get_settings_for_display();
		// for-owl-carousel-start
		$ptnticker_slide_mobile_view = $ptnticker_display['ptnticker_slide_mobile_view'];
		$ptnticker_slide_tablet_view = $ptnticker_display['ptnticker_slide_tablet_view'];
		$ptnticker_slide_desktop_view = $ptnticker_display['ptnticker_slide_desktop_view'];
		$ptnticker_content_effect = $ptnticker_display['ptnticker_content_effect'];
		$ptnticker_infinite_autoplay_switcher = $ptnticker_display['ptnticker_infinite_autoplay_switcher'];
		$ptnticker_infinite_loop_switcher = $ptnticker_display['ptnticker_infinite_loop_switcher'];
		$ptnticker_HoverPause_switcher = $ptnticker_display['ptnticker_HoverPause_switcher'];
		$ptnticker_autoplay_timeout = $ptnticker_display['ptnticker_autoplay_timeout'];
		$ptnticker_autoplay_speed = $ptnticker_display['ptnticker_autoplay_speed'];
		//nav--------------------------------------------------
		$ptnticker_nav_switcher = $ptnticker_display['ptnticker_nav_switcher'];
		$ptnticker_nav_type = $ptnticker_display['ptnticker_nav_type'];
		if( $ptnticker_nav_switcher == 'yes' ):
			if( $ptnticker_nav_type == 'icon' ):
				$prev = $ptnticker_display['ptnticker_nav_prev_arrow']['value'];
				$next = $ptnticker_display['ptnticker_nav_next_arrow']['value'];
			endif;
		endif;
		// for-owl-carousel-end
		$ptnticker_display['ptnticker_ticker_sticky_switcher'] == 'yes' ?  $sticky = 'sticky' : $sticky = '';


		// =========== wp Query
		$ptnticker_post_per_page = $ptnticker_display['ptnticker_the_post_per_page'];
		$ptnticker_categorys_dataa = $ptnticker_display['ptnticker_the_all_categories'];
		$ptnticker_the_blog_type = $ptnticker_display['selected_post_types'];
		$ptnticker_blog_order = $ptnticker_display['ptnticker_blog_order'];
		$ptnticker_author = $ptnticker_display['ptnticker_the_all_author'];
		$ptnticker_order_by = $ptnticker_display['ptnticker_the_order_by'];
		$ptnticker_include_post = $ptnticker_display['ptnticker_include_posts'];
		$ptnticker_exclude_post = $ptnticker_display['ptnticker_exclude_post'];
		$ptnticker_tags_filter = $ptnticker_display['ptnticker_the_all_tags'];
		$ptnticker_post_format = $ptnticker_display['ptnticker_the_all_post_formats'];
		
		$ptnticker_the_all_date = $ptnticker_display['ptnticker_the_all_date'];
		$ptnticker_text_str = ' ';
		if('d' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $ptnticker_the_all_date){
			$ptnticker_coustom_year = $ptnticker_display['ptnticker_blog_coustom_year'];
			$ptnticker_coustom_month = $ptnticker_display['ptnticker_blog_coustom_month'];
			$ptnticker_coustom_day = $ptnticker_display['ptnticker_blog_coustom_day'];
			$wdbp_time = $ptnticker_text_str;
		} else{
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$wdbp_time = $ptnticker_text_str;
		}

		
		$ptnticker_args = array(
			'posts_per_page' => $ptnticker_post_per_page,
			'author__in'     => $ptnticker_author,
			'tag__in'        => $ptnticker_tags_filter,
			'category__in'   => $ptnticker_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $ptnticker_exclude_post,
			'orderby'        => $ptnticker_order_by,
			'order'   		 => $ptnticker_blog_order,
			'date_query'     => $wdbp_time,
			'year'           => $ptnticker_coustom_year,
			'monthnum'       => $ptnticker_coustom_month,
			'day'            => $ptnticker_coustom_day,
		);
		
		// Check the selected post source
		if ($ptnticker_the_blog_type === 'post') {
			$ptnticker_args['post_type'] = 'post';
		} elseif ($ptnticker_the_blog_type === 'page') {
			$ptnticker_args['post_type'] = 'page';
		} elseif ($ptnticker_the_blog_type === 'manual') {
			$ptnticker_include_post = $ptnticker_display['ptnticker_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($ptnticker_include_post)) {
				$ptnticker_args['post__in'] = $ptnticker_include_post;
			} else {}
		}

		echo '<div class="ptnticker-news-ticker-'.esc_attr($ptnticker_display['ptnticker_select_style_selection']).' ptnticker-ticker-common '.esc_attr($sticky).' '.esc_attr($ptnticker_display['ptnticker_ticker_sticky_position']).'" id="'.esc_attr( $ptnticker_display['ptnticker-ticker-custom-id'] ).'">';
		require 'ptnticker-variables.php';
			echo '<div class="ptnticker-width">';
			echo '<div class="ptnticker-content-wrap">';
			echo ('yes' === $ptnticker_display['ptnticker_tag_switcher'])?'<div class="ptnticker-title-box"><div class="ptnticker-title">'.esc_html($ptnticker_display['ptnticker_ticker_title']).'</div></div>':'';
			echo '<div class="ptnticker-slide-box">';
				echo '<div class="ptnticker-owl owl-carousel">';
				$wp_query = new \WP_Query($ptnticker_args);
				if($wp_query->have_posts()) :
					while($wp_query->have_posts()) : $wp_query->the_post();
					echo '<div class="ptnticker-headline-box">';
						echo '<div class="ptnticker-headline-items">';
							echo '<div class="ptnticker-items"><'.$ptnticker_display['ptnticker_title_tags'].' class="ptnticker-headline">';
								echo ('yes' === $ptnticker_display['ptnticker_title_link'])?'<a class="ptnticker-headline" href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
							echo '</'.$ptnticker_display['ptnticker_title_tags'].'></div>';
						echo '</div>';
					echo '</div>';
					endwhile;
				endif;
				echo '</div>';
			echo '</div>';
		echo '</div>';
			echo '</div>';
		echo '</div>';
	}
}