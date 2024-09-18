<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class TEPSThe_Effective_Post_Slider_widgets extends Widget_Base {

	public function get_name() {
		return 'teps-swiperslider';
	}

	public function get_title() {
		return esc_html__( 'Effective Post Slider', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-post-slider bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_post_category' ];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'teps_slider_contents',
			[
				'label' => esc_html__( 'Slider Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'teps_all_style',
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
		

		$this->add_control(
            'slides_control_separator',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );

		$this->add_control(
			'teps_the_blog_type',
			[
				'label' => esc_html__( 'Blog Type', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => [
					'post' => esc_html__( 'Post', BWDEB_ROOT_AUTHOR_PRO ),
					'page' => esc_html__( 'Page', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'teps_image_link_show_switcher',
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
			'teps_title_show_switcher',
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
			'teps_title_link_show_switcher',
			[
				'label' => esc_html__( 'Title Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'teps_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_title_tags',
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
			'teps_description_show_switcher',
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
			'teps_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'teps_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '...', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'teps_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_taxo_icon',
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
			'teps_date_show_switcher',
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
			'teps_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'j M y', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'teps_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'teps_author_show_switcher',
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
			'teps_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'gravatar' => esc_html__( 'Gravatar', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'Author Icon', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_gravader_height',
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
					'{{WRAPPER}} .teps_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
					'teps_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'teps_author_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
					'teps_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'teps_comments_show_switcher',
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
			'teps_blogs_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'teps_button_show_switcher',
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
			'teps_button_types',
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
			'teps_blog_button_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Continue Reading', BWDEB_ROOT_AUTHOR_PRO),
				'label_block' => true,
				'condition' => [
					'teps_button_show_switcher' => 'yes',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'teps_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'teps_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
					'teps_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'teps_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'teps_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'teps_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'teps_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$teps_array = get_users();
		foreach ($teps_array as $teps_author){
			$teps_id = $teps_author->ID;
			$teps_name = $teps_author->display_name;
			$teps_get_array[$teps_id] = $teps_name;
		}
		$this->add_control(
			'teps_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'options' => $teps_get_array,
			]
		);
		$this->add_control(
			'teps_the_all_date',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', BWDEB_ROOT_AUTHOR_PRO ),
					'd' => esc_html__( 'Today', BWDEB_ROOT_AUTHOR_PRO ),
					'm' => esc_html__( 'Current Month', BWDEB_ROOT_AUTHOR_PRO ),
					'coustom' => esc_html__( 'Coustom', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'condition' => [
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_month',
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
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_the_order_by',
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
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_order',
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
			'teps_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::NUMBER,
				'default' => 4,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$this->add_control(
			'teps_categories_show_switcher',
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
			'teps_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_main_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO ),
					'show_main_cat' => esc_html__( 'Show Main Category', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'teps_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$teps_idObj = get_category_by_slug('category-slug');
		$teps_order_options = array($teps_idObj => 'All Categories');
		$teps_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($teps_categories as $category):
			$teps_catids = $category->slug;
			$teps_catname = $category->name;
			$teps_order_options[$teps_catids] = $teps_catname;
		endforeach;
		$this->add_control(
			'teps_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $teps_order_options,
			]
		);
		$this->add_control(
			'teps_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$teps_idObj = get_tag('tags-slug');
		$teps_order_optionst = array($teps_idObj => 'All Tags');
		$teps_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($teps_ta as $tag):
			$teps_tagids = $tag->slug;
			$teps_tagname = $tag->name;
			$teps_order_optionst[$teps_tagids] = $teps_tagname;
		endforeach;
		$this->add_control(
			'teps_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => $teps_idObj,
				'options' => $teps_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//content amination
		$this->add_control(
			'teps_content_animations',
			[
				'label'     => esc_html__('Animation Type', BWDEB_ROOT_AUTHOR_PRO),
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
				'default' => 'animate__fadeInUp',
			]
		);

		//content_animation_speed
		$this->add_control(
			'teps_content_animation_speed',
			[
				'label' => __('Animation Speed (ms)', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['ms'],
				'range' => [
					'ms' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 'ms',
					'size' => 1250,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .teps-slide-content' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Slide Effect
		$this->add_control(
			'teps_slider_effects',
			[
				'label' => esc_html__( 'Slide Effect', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'false'  => esc_html__( 'Slide', BWDEB_ROOT_AUTHOR_PRO ),
					'fade'  => esc_html__( 'Fade', BWDEB_ROOT_AUTHOR_PRO ),
					'coverflow'  => esc_html__( 'Cover Flow', BWDEB_ROOT_AUTHOR_PRO ),
					'cube'  => esc_html__( 'Cube', BWDEB_ROOT_AUTHOR_PRO ),
					'flip'  => esc_html__( 'Flip', BWDEB_ROOT_AUTHOR_PRO ),
					'cards'  => esc_html__( 'Cards', BWDEB_ROOT_AUTHOR_PRO ),
					'creative'  => esc_html__( 'Creative', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'frontend_available' => true,
			]
		);

		//popover-Coverflow-coverflow
		$this->add_control(
			'teps_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'teps_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'teps_coverflow_rotate',
				[
					'label' => esc_html__( 'Coverflow Rotate', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Depth
			$this->add_control(
				'teps_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 100,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Modifier
			$this->add_control(
				'teps_coverflow_modifier',
				[
					'label' => esc_html__( 'Coverflow Modifier', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 1,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow shadow switcher
			$this->add_control(
				'teps_coverflow_shadow_switcher',
				[
					'label' => esc_html__( 'Coverflow Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);

			//Coverflow shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-slide-shadow-left, {{WRAPPER}} .teps-swiper-slide-shadow-right',
					'condition' => [
						'teps_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'teps_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'condition' => [
					'teps_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'teps_cube_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-cube-shadow:before',
					'condition' => [
						'teps_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'teps_cube_slide_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Slide Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
					'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-slide-shadow-left, {{WRAPPER}} .teps-swiper-slide-shadow-right',
					'condition' => [
						'teps_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'teps_cube_shadow_offset',
				[
					'label' => esc_html__( 'Cube Shadow Offset', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Cube Shadow Blur
			$this->add_control(
				'teps_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .teps-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'teps_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
				'default' => 1500,
				'dynamic' => [
					'active' => true,
				],
				'frontend_available' => true,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'teps_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'frontend_available' => true,
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'teps_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'teps_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( 768px - 1024px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_tablet_space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//mobile
			$this->add_control(
				'teps_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', BWDEB_ROOT_AUTHOR_PRO ),
					'description' => esc_html__('Notice: ( maximum - 767px )', BWDEB_ROOT_AUTHOR_PRO),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_mobile_space',
				[
					'label' => esc_html__( 'SpaceBetween', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

		$this->end_popover();

        //Slider Direction
		$this->add_control(
            'teps_slider_direction',
            [
                'label' => __('Slider Direction', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'horizontal',
                'options' => [
                    'horizontal'  => __('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
                    'vertical' => __('Vertical', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'frontend_available' => true,
            ]
        );

        //Infinite Loop
        $this->add_control(
            'teps_loop_switcher',
            [
                'label' => esc_html__( 'Infinite Loop?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //autoplay
        $this->add_control(
            'teps_autoslide_switcher',
            [
                'label' => esc_html__( 'Autoplay?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //autoplay speed
		$this->add_control(
			'teps_slider_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speed (ms)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
                'default' => 5000,
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'teps_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'teps_mousewheel',
            [
                'label' => esc_html__( 'Mousewheel?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //scrollbar
		$this->add_control(
            'teps_scroll_bar',
            [
                'label' => __('Scroll Bar?', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => __('No', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
            ]
        );

		//scrollbar show-hide
        $this->add_control(
            'teps_scroll_visibility',
            [
                'label' => __('Scroll Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', BWDEB_ROOT_AUTHOR_PRO),
                    'true' => __('Automatic hide', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'teps_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'teps_slide_pagination',
            [
                'label' => esc_html__( 'Pagination?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //teps_pagination_type
        $this->add_control(
            'teps_pagination_type',
            [
                'label' => esc_html__( 'Pagination Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bullets',
                'options' => [
                    'bullets'  => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
					'numbers'  => esc_html__( 'Numbers', BWDEB_ROOT_AUTHOR_PRO ),
                    'progressbar'  => esc_html__( 'Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
                    'fraction'  => esc_html__( 'Fraction', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'teps_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'teps_arrow_switcher',
            [
                'label' => esc_html__( 'Arrow Navigation?', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
                'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //arrow type
        $this->add_control(
            'teps_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
                    'text'  => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'teps_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'teps_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'teps_nav_type' => 'icon',
                    'teps_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'teps_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
				]
			);
			//next icon
			$this->add_control(
				'teps_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
				]
			);

        $this->end_popover();


        //popover Navigation text
        $this->add_control(
			'teps_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
                'condition' => [
                    'teps_nav_type' => 'text',
                    'teps_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'teps_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

            //next text
			$this->add_control(
				'teps_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', BWDEB_ROOT_AUTHOR_PRO ),
					'dynamic' => [
						'active' => true,
					],
				]
			);
		$this->end_popover();
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_box_style_section',
			[
				'label' => esc_html__( 'Box Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//slider-height
		$this->add_responsive_control(
			'teps_slider_main_height',
			[
				'label' => esc_html__( 'Slider Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-feature-image' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style9','style10','style20'],
					'teps_slider_direction!' => 'vertical',
				],
			]
		);

		//slider-height-for-vertical
		$this->add_responsive_control(
			'teps_slider_main_height_vertical',
			[
				'label' => esc_html__( 'Slider Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-feature-image, {{WRAPPER}} .teps-postslider-wrap' => 'height: 100%!important;',
					'{{WRAPPER}} .teps-swiper-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style9','style10','style20'],
					'teps_slider_direction' => 'vertical',
				],
			]
		);

		//content-box-width
		$this->add_responsive_control(
			'teps_blog_content_box_width',
			[
				'label' => esc_html__( 'Content Box Width (%)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-content-info' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style8','style9','style10','style14','style20'],
				],
			]
		);
		//texonomy-gap
		$this->add_responsive_control(
			'teps_blog_texonomy_gap',
			[
				'label' => esc_html__( 'Texonomy Gap ', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-meta.d-flex' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//horizontan-alignment
		$this->add_responsive_control(
			'teps_blog_box_horizontal_alignment',
			[
				'label' => esc_html__( 'Horizontal Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-box-alignment' => 'justify-content: {{VALUE}}!important',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style8','style9','style10','style14','style20'],
				],
				'toggle' => true,
			]
		);
		//vertical-alignment
		$this->add_responsive_control(
			'teps_blog_box_vertical_alignment',
			[
				'label' => esc_html__( 'Vertical Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-v-align-middle',
					],
					'end' => [
						'title' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => ' eicon-v-align-bottom',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-box-alignment' => 'align-items: {{VALUE}}!important',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style6','style8','style9','style10','style11','style20'],
				],
				'toggle' => true,
			]
		);
		//alignment
		$this->add_responsive_control(
			'teps_blog_box_content_alignment',
			[
				'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .teps-postslider-content-info' => 'text-align: {{VALUE}}',
					'{{WRAPPER}} .teps-extra-align, {{WRAPPER}} .teps-postslider-meta' => 'justify-content: {{VALUE}}!important',
				],
				'toggle' => true,
			]
		);
		//box-padding
		$this->add_responsive_control(
            'teps_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		//box-margin
		$this->add_responsive_control(
            'teps_blog_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->start_controls_tabs(
			'teps_blog_box_style_tabs'
		);
		
		$this->start_controls_tab(
			'teps_blog_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_blog_box_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-content-info, {{WRAPPER}} .teps-postslider-content-info::after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_box_border',
				'selector' => '{{WRAPPER}} .teps-postslider-content-info',
			]
		);

		$this->add_responsive_control(
            'teps_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info, {{WRAPPER}} .teps-postslider-content-info::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-content-info',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_blog_box_background_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover, {{WRAPPER}} .teps-postslider-content-info:hover::after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_box_border_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover',
			]
		);

		$this->add_responsive_control(
            'teps_blog_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info:hover, {{WRAPPER}} .teps-postslider-content-info:hover::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'teps_blog_title_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_title_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-title-link',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_title_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-title-link',
			]
		);
		$this->add_responsive_control(
            'teps_blog_title_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
            'teps_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		// Hover Controls
		
		$this->add_control(
			'teps_blog_title_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_title_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_title_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-title-link:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_title_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_description_options',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_description_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'teps_blog_description_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_description_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-desce',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_description_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-desce',
			]
		);
		$this->add_responsive_control(
            'teps_blog_description_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
            'teps_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_description_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_description_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_description_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-desce:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_description_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);



		$this->start_controls_tabs(
			'teps_blog_image_style_tabs'
		);
		
		$this->start_controls_tab(
			'teps_blog_image_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_responsive_control(
			'teps_the_post_image_size',
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
					'{{WRAPPER}} .teps-postslider-feature-image' => 'width: {{SIZE}}{{UNIT}}',
				],
				'condition' =>[
					'teps_all_style' =>['style1'],
				],
			]
		);
		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'teps_image_overlay',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_image_overlay_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-feature-image-link',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_image_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-feature-image',
			]
		);
		$this->add_responsive_control(
            'teps_image_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-feature-image img, {{WRAPPER}} .teps-feature-image-link, {{WRAPPER}} .teps-postslider-feature-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_image_border_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_image_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-feature-image',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_image_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'teps_image_overlay_hover',
			[
				'label' => esc_html__( 'Image Overlay', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_image_overlay_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-feature-image-link',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();


		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_author_options',
			[
				'label' => esc_html__( 'Author', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_author_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'teps_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls

		$this->add_control(
			'teps_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_author_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_author_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_taxonomy_author_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_author_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_author_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_author_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta',
			]
		);

		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_date_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'teps_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_date_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_date_hover_post',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_date_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_date_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_date_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_date_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_comments_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'teps_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_comment_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_comment_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_comment_hover_post',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_comment_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_comment_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_comment_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_comment_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_categories_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy category
		$this->start_controls_tabs(
			'teps_blog_taxonomy_category_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_category_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_category_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta, {{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta .teps-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_category_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta .teps-cat',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_category_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_category_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_category_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_category_hover_post',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_category_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta, {{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta .teps-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_category_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_category_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_category_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_tags_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy tag
		$this->start_controls_tabs(
			'teps_blog_taxonomy_tag_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_tag_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_tag_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_tag_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
			'teps_blog_taxonomy_tag_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_tag_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_tag_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_tag_hover_post',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_tag_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_tag_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
			'teps_blog_taxonomy_tag_border_radius_hover',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_tag_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'teps_blog_button_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_button_icon_gap',
			[
				'label' => __('Icon Gap', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 5000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
					'teps_button_icon_align!' => 'none',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_button_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		//alignment
		$this->add_responsive_control(
			'teps_blog_button_text_alignment',
			[
				'label' => esc_html__( 'Text Alignment', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .teps-postslider-button-link' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_button_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		$this->add_responsive_control(
            'teps_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'teps_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_button_icon_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_button_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_bg_color_hover',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_button_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_button_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_button_icon_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_arrow_switcher' => 'yes',
                ],
			]
		);

        //norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
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
                'teps_arrow_color',
                [
                    'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_arrow_background_color',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'teps_arrow_size',
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
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'teps_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'teps_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
                    'condition' => [
						'teps_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'teps_arrow_width',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'teps_arrow_height',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'teps_arrow_border',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'teps_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'teps_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'teps_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'teps_slider_visibility',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'teps_arrow_popover_style',
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
					'teps_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'teps_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'teps_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'teps_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
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
				'teps_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_arrow_background_color_hover',
					'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'teps_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'teps_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'teps_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
                    'condition' => [
						'teps_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'teps_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'teps_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'teps_arrow_border_hover',
					'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'teps_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'teps_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'teps_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', BWDEB_ROOT_AUTHOR_PRO),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'teps_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', BWDEB_ROOT_AUTHOR_PRO),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', BWDEB_ROOT_AUTHOR_PRO),
						'hidden'  => esc_html__('Hidden', BWDEB_ROOT_AUTHOR_PRO),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'teps_arrow_popover_style_hover',
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
					'teps_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'teps_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'teps_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'teps_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'teps_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => ['bullets', 'numbers'],
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'teps_dots_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

            //horizontal
			//bottom
			$this->add_responsive_control(
				'teps_dots_bottom_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'horizontal',
                    ],
				]
			);

			//left
			$this->add_responsive_control(
				'teps_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'horizontal',
                    ],
				]
			);

            //vertical
            //top
			$this->add_responsive_control(
				'teps_dots_top_position_vertical',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'top: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'vertical',
                    ],
				]
			);

			//right
			$this->add_responsive_control(
				'teps_dots_right_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'right: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'vertical',
                    ],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'teps_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'teps_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'teps_dots_gap_vartical',
			[
				'label' => esc_html__( 'Dots Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'teps_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'teps_dots_alignment',
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
					'{{WRAPPER}} .teps-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'teps_slider_direction' => 'horizontal',
                ],
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
			'teps_dots_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet .teps-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_dots_number_typography',
				'selector' => '{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet',
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
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
			'teps_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet-active .teps-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width_active',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border_active',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
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
			'teps_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet .teps-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width_hover',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height_hover',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'teps_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => 'progressbar',
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_progressbar',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_progressbar',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//Height
		$this->add_responsive_control(
			'teps_progressbar_height',
			[
				'label' => esc_html__( 'height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_slider_direction' => 'horizontal',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'teps_progressbar_width',
			[
				'label' => esc_html__( 'width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .teps-swiper-pagination-progressbar' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_slider_direction' => 'vertical',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_progressbar_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-progressbar',
			]
		);

		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_progressbar',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_progressbar_background_color_active',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-progressbar .teps-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'teps_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => 'fraction',
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'teps_fraction_popover_style',
			[
				'label' => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
				'label_on' => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//bottom
			$this->add_responsive_control(
				'teps_fraction_bottom_position',
				[
					'label' => esc_html__( 'Vertical', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'teps_fraction_left_position',
				[
					'label' => esc_html__( 'Horizontal', BWDEB_ROOT_AUTHOR_PRO ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'teps_fraction_width',
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
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'teps_fraction_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'teps_fraction_gap',
			[
				'label' => esc_html__( 'Fraction Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'teps_fraction_alignment',
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
					'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'teps_fraction_number_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'teps_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span.teps-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_fraction_typography',
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_fraction_background_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_faction_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_scroll_bar' => 'yes',
                ],
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_scrollbar_background',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-scrollbar-drag',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$teps_all_num = $settings['teps_all_style'];
		$teps_title_tags = $settings['teps_title_tags'];
		$teps_post_per_page = $settings['teps_the_post_per_page'];
		$teps_post_description_words = $settings['teps_the_post_description_words'];
		$teps_blog_word_trim_indi = $settings['teps_blog_word_trim_indi'];
		$teps_blog_date_format = $settings['teps_blog_date_format'];
		// $teps_control_icon = $settings['teps_author_icon']['value'];

		$teps_author_indicator = $settings['teps_author_indicator'];
		$teps_taxo_icon = $settings['teps_taxo_icon'];

		$teps_image_link_show = $settings['teps_image_link_show_switcher'];
		$teps_title_swtcher = $settings['teps_title_show_switcher'];
		$teps_title_link_show = $settings['teps_title_link_show_switcher'];
		$teps_description_swtcher = $settings['teps_description_show_switcher'];
		$teps_date_swtcher = $settings['teps_date_show_switcher'];
		$teps_author_swtcher = $settings['teps_author_show_switcher'];
		$teps_comments_swtcher = $settings['teps_comments_show_switcher'];
		$teps_categories_swtcher = $settings['teps_categories_show_switcher'];
		$teps_tags_swtcher = $settings['teps_tags_show_switcher'];
		$teps_tags_filter = $settings['teps_the_tag_filter'];
		$teps_cat_show_status = $settings['teps_the_cat_show_status'];

		$teps_categorys_dataa = $settings['teps_the_cat_columnsdd'];
		$teps_the_blog_type = $settings['teps_the_blog_type'];
		$teps_blog_order = $settings['teps_blog_order'];
		$teps_author = $settings['teps_the_all_author'];
		$teps_order_by = $settings['teps_the_order_by'];

		// btn
		$teps_button_types = $settings['teps_button_types'];
		$teps_button_icon_align = $settings['teps_button_icon_align'];
		$teps_the_all_date = $settings['teps_the_all_date'];
		if('d' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $teps_the_all_date){
			$teps_coustom_year = $settings['teps_blog_coustom_year'];
			$teps_coustom_month = $settings['teps_blog_coustom_month'];
			$teps_coustom_day = $settings['teps_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = $wdbp_time = '';
		}
		$teps_args = array(
			'post_type'=> $teps_the_blog_type,
			'author__in' => $teps_author,
			'orderby'   => $teps_order_by,
			'order' => $teps_blog_order,
			'post_status' => 'publish',
			'posts_per_page' => $teps_post_per_page,
			'category_name' => $teps_categorys_dataa,
			'date_query' => $wdbp_time,
			'year' => $teps_coustom_year,
			'monthnum' => $teps_coustom_month,
			'day' => $teps_coustom_day,
		);
		$teps_yes_value = 'yes';
		$animation_class = (isset($settings['teps_content_animations']) && ($settings['teps_content_animations'] != 'none')) ? $settings['teps_content_animations'] : '';
		include( __DIR__ . '/teps-templates/'.$teps_all_num.'.php' );
	}
}
