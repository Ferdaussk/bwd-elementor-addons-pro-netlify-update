<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (!defined('ABSPATH')) {
    exit;
}
// Exit if accessed directly

class THEPSTTMLNTimelineWidget extends Widget_Base
{

    public function get_name()
    {
        return esc_html__('ThePostTimeline', BWDEB_ROOT_AUTHOR_PRO);
    }
    public function get_title()
    {
        return esc_html__('The Post Timeline', BWDEB_ROOT_AUTHOR_PRO);
    }
    public function get_icon()
    {
        return 'post-timeline bwdeb-elementor-bundle';
    }
    public function get_categories()
    {
        return ['bwdthe_post_category'];
    }
    public function get_script_depends()
    {
        return ['the-post-timeline-category'];
    }
    public function get_keywords()
    {
        return ['timeline', 'bwd', 'text', 'post', 'p', 'blog-post', 'blog'];
    }
    protected function register_controls()
    {
        // Timeline layout control section start
        $this->start_controls_section(
            'thepsttmln_TL_presets',
            [
                'label' => esc_html__('All Presets', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        //all timeline style
        $this->add_control(
            'thepsttmln_TL_choose_design',
            [
                'label' => esc_html__('Choose Design', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'style1',
                'options' => [
                    'style1' => esc_html__('Style1', BWDEB_ROOT_AUTHOR_PRO),
                    'style2' => esc_html__('Style2', BWDEB_ROOT_AUTHOR_PRO),
                    'style3' => esc_html__('Style3', BWDEB_ROOT_AUTHOR_PRO),
                    'style4' => esc_html__('Style4', BWDEB_ROOT_AUTHOR_PRO),
                    'style5' => esc_html__('Style5', BWDEB_ROOT_AUTHOR_PRO),
                    'style6' => esc_html__('Style6', BWDEB_ROOT_AUTHOR_PRO),
                    'style7' => esc_html__('Style7', BWDEB_ROOT_AUTHOR_PRO),
                    'style8' => esc_html__('Style8', BWDEB_ROOT_AUTHOR_PRO),
                    'style9' => esc_html__('Style9', BWDEB_ROOT_AUTHOR_PRO),
                    'style10' => esc_html__('Style10', BWDEB_ROOT_AUTHOR_PRO),
                    'style11' => esc_html__('Style11', BWDEB_ROOT_AUTHOR_PRO),
                    'style12' => esc_html__('Style12', BWDEB_ROOT_AUTHOR_PRO),
                    'style13' => esc_html__('Style13', BWDEB_ROOT_AUTHOR_PRO),
                    'style14' => esc_html__('Style14', BWDEB_ROOT_AUTHOR_PRO),
                    'style15' => esc_html__('Style15', BWDEB_ROOT_AUTHOR_PRO),
                    'style16' => esc_html__('Style16', BWDEB_ROOT_AUTHOR_PRO),
                    'style17' => esc_html__('Style17', BWDEB_ROOT_AUTHOR_PRO),
                    'style18' => esc_html__('Style18', BWDEB_ROOT_AUTHOR_PRO),
                    'style19' => esc_html__('Style19', BWDEB_ROOT_AUTHOR_PRO),
                    'style20' => esc_html__('Style20', BWDEB_ROOT_AUTHOR_PRO),
                    'style21' => esc_html__('Style21', BWDEB_ROOT_AUTHOR_PRO),
                    'style22' => esc_html__('Style22', BWDEB_ROOT_AUTHOR_PRO),
                    'style23' => esc_html__('Style23', BWDEB_ROOT_AUTHOR_PRO),
                    'style24' => esc_html__('Style24', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_the_blog_type',
            [
                'label' => esc_html__('Blog Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'post',
                'options' => [
                    'post' => esc_html__('Post', BWDEB_ROOT_AUTHOR_PRO),
                    'page' => esc_html__('Page', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_content_section',
            [
                'label' => esc_html__('Post Settings', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'thepsttmln_image_link_show_switcher',
            [
                'label' => esc_html__('Image Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'thepsttmln_title_show_switcher',
            [
                'label' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'thepsttmln_title_link_show_switcher',
            [
                'label' => esc_html__('Title Link', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'thepsttmln_title_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_title_tags',
            [
                'label' => esc_html__('Title HTML Tag', 'bwdib-icon-box'),
                'type' => Controls_Manager::SELECT,
                'default' => 'h2',
                'options' => [
                    'div' => esc_html__('Div', 'bwdib-icon-box'),
                    'h1' => esc_html__('H1', 'bwdib-icon-box'),
                    'h2' => esc_html__('H2', 'bwdib-icon-box'),
                    'h3' => esc_html__('H3', 'bwdib-icon-box'),
                    'h4' => esc_html__('H4', 'bwdib-icon-box'),
                    'h5' => esc_html__('H5', 'bwdib-icon-box'),
                    'h6' => esc_html__('H6', 'bwdib-icon-box'),
                    'p' => esc_html__('p', 'bwdib-icon-box'),
                ],
                'condition' => [
                    'thepsttmln_title_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_description_show_switcher',
            [
                'label' => esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_the_post_description_words',
            [
                'label' => esc_html__('Word Length', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'default' => 15,
                'condition' => [
                    'thepsttmln_description_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_word_trim_indi',
            [
                'label' => esc_html__('Word Trim Indicator', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('......', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'condition' => [
                    'thepsttmln_description_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_taxo_icon',
            [
                'label' => esc_html__('All Taxo Icons', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'separator' => 'before',
                'default' => 'show',
                'options' => [
                    'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'show' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_date_show_switcher',
            [
                'label' => esc_html__('Publish Date', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'separator' => 'before',
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_date_format',
            [
                'label' => esc_html__('Date Format', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('j M y', BWDEB_ROOT_AUTHOR_PRO),
                'placeholder' => esc_html__('j M y', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'condition' => [
                    'thepsttmln_date_show_switcher' => 'yes',
                ],
                'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
            ]
        );
        $this->add_control(
            'thepsttmln_author_show_switcher',
            [
                'label' => esc_html__('Author', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'thepsttmln_author_indicator',
            [
                'label' => esc_html__('Author Indicator', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'none' => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'gravatar' => esc_html__('Gravatar', BWDEB_ROOT_AUTHOR_PRO),
                    'icon' => esc_html__('Author Icon', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'thepsttmln_author_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_gravader_height',
            [
                'label' => esc_html__('Gravader Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .thepsttmln_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
                ],
                'condition' => [
                    'thepsttmln_author_show_switcher' => 'yes',
                    'thepsttmln_author_indicator' => 'gravatar',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_author_icon',
            [
                'label' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user-alt',
                    'library' => 'solid',
                ],
                'condition' => [
                    'thepsttmln_author_show_switcher' => 'yes',
                    'thepsttmln_author_indicator' => 'icon',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_comments_show_switcher',
            [
                'label' => esc_html__('Comment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_products_actions_section',
            [
                'label' => esc_html__('Button Settings', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        // =========================================
        $this->add_control(
            'thepsttmln_cart_btn',
            [
                'label' => esc_html__('Button Status', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_cart_type',
            [
                'label' => esc_html__('Select Type', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'text',
                'options' => [
                    'text' => esc_html__('Text', BWDEB_ROOT_AUTHOR_PRO),
                    'icon' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'thepsttmln_cart_btn' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_cart_button',
            [
                'label' => esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_manager::TEXT,
                'default' => esc_html__('Read More', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'thepsttmln_cart_type' => 'text',
                    'thepsttmln_cart_btn' => 'yes',
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_cart_button_icon',
            [
                'label' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-shopping-cart',
                    'library' => 'solid',
                ],
                'condition' => [
                    'thepsttmln_cart_type' => 'icon',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_query_section',
            [
                'label' => esc_html__('Post Query', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        // For Author Filter
        $thepsttmln_array = get_users();
        foreach ($thepsttmln_array as $thepsttmln_author) {
            $thepsttmln_id = $thepsttmln_author->ID;
            $thepsttmln_name = $thepsttmln_author->display_name;
            $thepsttmln_get_array[$thepsttmln_id] = $thepsttmln_name;
        }
        $this->add_control(
            'thepsttmln_the_all_author',
            [
                'label' => esc_html__('Choose Author', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'options' => ['' => esc_html__('Select One')] + $thepsttmln_get_array,
            ]
        );
        $this->add_control(
            'thepsttmln_the_all_date',
            [
                'label' => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default' => esc_html__('All', BWDEB_ROOT_AUTHOR_PRO),
                    'd' => esc_html__('Today', BWDEB_ROOT_AUTHOR_PRO),
                    'm' => esc_html__('Current Month', BWDEB_ROOT_AUTHOR_PRO),
                    'coustom' => esc_html__('Coustom', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_coustom_year',
            [
                'label' => esc_html__('Type 4 Digit Year Only', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('2022', BWDEB_ROOT_AUTHOR_PRO),
                'placeholder' => esc_html__('Type Your Year Only', BWDEB_ROOT_AUTHOR_PRO),
                'label_block' => true,
                'condition' => [
                    'thepsttmln_the_all_date' => 'coustom',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_coustom_month',
            [
                'label' => esc_html__('Select Month', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'multiple' => true,
                'default' => '0',
                'options' => [
                    '0' => esc_html__('All', BWDEB_ROOT_AUTHOR_PRO),
                    '1' => esc_html__('Jan', BWDEB_ROOT_AUTHOR_PRO),
                    '2' => esc_html__('Feb', BWDEB_ROOT_AUTHOR_PRO),
                    '3' => esc_html__('Mar', BWDEB_ROOT_AUTHOR_PRO),
                    '4' => esc_html__('Apr', BWDEB_ROOT_AUTHOR_PRO),
                    '5' => esc_html__('May', BWDEB_ROOT_AUTHOR_PRO),
                    '6' => esc_html__('Jun', BWDEB_ROOT_AUTHOR_PRO),
                    '7' => esc_html__('Jul', BWDEB_ROOT_AUTHOR_PRO),
                    '8' => esc_html__('Aug', BWDEB_ROOT_AUTHOR_PRO),
                    '9' => esc_html__('Sep', BWDEB_ROOT_AUTHOR_PRO),
                    '10' => esc_html__('Oct', BWDEB_ROOT_AUTHOR_PRO),
                    '11' => esc_html__('Nov', BWDEB_ROOT_AUTHOR_PRO),
                    '12' => esc_html__('Dec', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'thepsttmln_the_all_date' => 'coustom',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_coustom_day',
            [
                'label' => esc_html__('Day Only (Date)', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'separator' => 'after',
                'default' => esc_html__('00', BWDEB_ROOT_AUTHOR_PRO),
                'placeholder' => esc_html__('00', BWDEB_ROOT_AUTHOR_PRO),
                'condition' => [
                    'thepsttmln_the_all_date' => 'coustom',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_the_order_by',
            [
                'label' => esc_html__('Order By', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'all',
                'options' => [
                    'all' => esc_html__('All', BWDEB_ROOT_AUTHOR_PRO),
                    'author' => esc_html__('Author', BWDEB_ROOT_AUTHOR_PRO),
                    'title' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                    'id' => esc_html__('ID', BWDEB_ROOT_AUTHOR_PRO),
                    'date' => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_order',
            [
                'label' => esc_html__('Order', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC' => esc_html__('Descending', BWDEB_ROOT_AUTHOR_PRO),
                    'ASC' => esc_html__('Ascending', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_the_post_per_page',
            [
                'label' => esc_html__('Post Per Page', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::NUMBER,
                'default' => 4,
                'separator' => 'after',
                'placeholder' => esc_html__('00', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        $this->add_control(
            'thepsttmln_categories_show_switcher',
            [
                'label' => esc_html__('Category', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'thepsttmln_the_cat_show_status',
            [
                'label' => esc_html__('Show Status', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 'show_main_cat',
                'options' => [
                    'show_multiple_cat' => esc_html__('Show Multiple Category', BWDEB_ROOT_AUTHOR_PRO),
                    'show_main_cat' => esc_html__('Show Main Category', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'condition' => [
                    'thepsttmln_categories_show_switcher' => 'yes',
                ],
            ]
        );
        // For Category Filter
        $thepsttmln_idObj = get_category_by_slug('category-slug');
        $thepsttmln_order_options = array($thepsttmln_idObj => 'All Categories');
        $thepsttmln_categories = get_categories('orderby=name&hide_empty=0');
        foreach ($thepsttmln_categories as $category):
            $thepsttmln_catids = $category->slug;
            $thepsttmln_catname = $category->name;
            $thepsttmln_order_options[$thepsttmln_catids] = $thepsttmln_catname;
        endforeach;
        $this->add_control(
            'thepsttmln_the_cat_columnsdd',
            [
                'label' => esc_html__('Filter Categories', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => 0,
                'options' => $thepsttmln_order_options,
            ]
        );
        $this->add_control(
            'thepsttmln_tags_show_switcher',
            [
                'label' => esc_html__('Tag', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off' => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        // For tag Filter
        $thepsttmln_idObj = get_tag('tags-slug');
        $thepsttmln_order_optionst = array($thepsttmln_idObj => 'All Tags');
        $thepsttmln_ta = get_tags('orderby=name&hide_empty=0');
        foreach ($thepsttmln_ta as $tag):
            $thepsttmln_tagids = $tag->slug;
            $thepsttmln_tagname = $tag->name;
            $thepsttmln_order_optionst[$thepsttmln_tagids] = $thepsttmln_tagname;
        endforeach;
        $this->add_control(
            'thepsttmln_the_tag_filter',
            [
                'label' => esc_html__('Filter Tags', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'default' => $thepsttmln_idObj,
                'options' => $thepsttmln_order_optionst,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_content_pagination_section',
            [
                'label' => esc_html__('Pagination', 'blog-post-list'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'thepsttmln_the_pagination_type',
            [
                'label' => esc_html__('Pagination', 'blog-post-list'),
                'type' => Controls_Manager::SELECT,
                'default' => 'number-and-text',
                'options' => [
                    'none' => esc_html__('None', 'blog-post-list'),
                    'number-and-text' => esc_html__('Number and Text', 'blog-post-list'),
                    'number' => esc_html__('Number', 'blog-post-list'),
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_next_format',
            [
                'label' => esc_html__('Next Text', 'blog-post-list'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Next »', 'blog-post-list'),
                'label_block' => true,
                'condition' => [
                    'thepsttmln_the_pagination_type' => 'number-and-text',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_prev_format',
            [
                'label' => esc_html__('Prev Text', 'blog-post-list'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('« Prev', 'blog-post-list'),
                'label_block' => true,
                'condition' => [
                    'thepsttmln_the_pagination_type' => 'number-and-text',
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
            'thepsttmln_blog_content_style_section',
            [
                'label' => esc_html__('Content Style', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_content_alignment',
            [
                'label' => esc_html__('Content Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'separator' => 'after',
                'options' => [
                    'start' => [
                        'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'end' => [
                        'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-for-content' => 'text-align: {{VALUE}};',
                    '{{WRAPPER}} .thepsttmln-prodprice' => 'justify-content: {{VALUE}};',
                    '{{WRAPPER}} .thepsttmln-prodRatingWrap' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        // Hover control start for box
        $this->start_controls_tabs(
            'thepsttmln_blog_box_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_box_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'thepsttmln_blog_box_bg_grediant_color',
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'thepsttmln_blog_box_boxshadow',
                'label' => esc_html__('Content Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_box_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_box_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'thepsttmln_blog_box_bg_grediant_color_hover',
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'thepsttmln_blog_box_boxshadow_hover',
                'label' => esc_html__('Wrap Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_box_border_hover',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_responsive_control(
            'thepsttmln_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item-container .thepsttmln-timeline-for-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_title_style_section',
            [
                'label' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_title_show_switcher' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_title_alignment',
            [
                'label' => esc_html__('Title Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'separator' => 'after',
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
            ]
        );
        // Hover control start for title
        $this->start_controls_tabs(
            'thepsttmln_blog_title_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_title_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_title_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-title .thepsttmln-h2-title, {{WRAPPER}} .thepsttmln-timeline-title',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_title_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-title .thepsttmln-h2-title, {{WRAPPER}} .thepsttmln-timeline-title' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_title_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-title a, {{WRAPPER}} .thepsttmln-timeline-title' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_title_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_title_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-title .thepsttmln-h2-title',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_title_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-title .thepsttmln-h2-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_title_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-title' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End
        $this->add_responsive_control(
            'thepsttmln_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-title a, {{WRAPPER}} .thepsttmln-timeline-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_title_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-title a, {{WRAPPER}} .thepsttmln-timeline-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_title_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-title a, {{WRAPPER}} .thepsttmln-timeline-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_description_style_section',
            [
                'label' => esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_description' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_description_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_description_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_description_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-desc .thepsttmln-timeline-desc',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_description_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-desc .thepsttmln-timeline-desc' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_description_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-desc .thepsttmln-timeline-desc' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_description_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_description_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-desc .thepsttmln-timeline-desc',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_description_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-desc .thepsttmln-timeline-desc' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_description_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-desc .thepsttmln-timeline-desc' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End
        $this->add_responsive_control(
            'thepsttmln_blog_desc_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-desc .thepsttmln-timeline-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_desc_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-desc .thepsttmln-timeline-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_button_style_section',
            [
                'label' => esc_html__('Button Style', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_cart_btn' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_button_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_button_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_button_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-cartBtn',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_button_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_button_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_button_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-cartBtn',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_button_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_button_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-cartBtn:hover',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_button_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_button_bg_hover_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn:hover' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_button_border_hover',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-cartBtn:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_responsive_control(
            'thepsttmln_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_button_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-cartBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_image_style_section',
            [
                'label' => esc_html__('Image Style', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_the_post_image_width_size',
            [
                'label' => esc_html__('Thumbnail Size', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-img img' => 'width: {{SIZE}}px',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_caategory_style_section',
            [
                'label' => esc_html__('Category', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_cat' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_caategory_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_caategory_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_caategory_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat a',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_caategory_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_caategory_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_caategory_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_caategory_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodCat a',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_caategory_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodCat a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_caategory_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodCat a' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_caategory_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat',
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodCat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_price_options',
            [
                'label' => esc_html__('Comment', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_comments_show_switcher' => 'yes',
                ],
            ]
        );
        // New Price
        // Hover control start for taxonomy author
        $this->start_controls_tabs(
            'thepsttmln_blog_taxonomy_new_price_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_taxonomy_new_price_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_taxonomy_new_price_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-salePrice',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_taxonomy_new_price_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_taxonomy_new_price_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_taxonomy_new_price_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_taxonomy_new_price_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-salePrice:hover',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_taxonomy_new_price_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice:hover' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_taxonomy_new_price_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice:hover' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End
        $this->add_responsive_control(
            'thepsttmln_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_sale_style_section',
            [
                'label' => esc_html__('Author', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_author_show_switcher' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_sale_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_sale_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_sale_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_sale_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_sale_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_sale_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_sale_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodSaleCount',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_sale_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodSaleCount' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_sale_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodSaleCount' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_sale_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount',
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_sale_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_sale_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodSaleCount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_date_style_section',
            [
                'label' => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_date_show_switcher' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_date_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_date_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_date_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_date_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_date_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_date_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_date_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-date',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_date_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_date_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-timeline-date' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_date_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date',
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_date_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_date_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-timeline-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_type_style_section',
            [
                'label' => esc_html__('Tag', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_tags_show_switcher' => 'yes',
                ],
            ]
        );
        // Hover control start for description
        $this->start_controls_tabs(
            'thepsttmln_blog_type_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_type_normal_post',
            [
                'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_type_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_type_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_type_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_type_hover_tab',
            [
                'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_type_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodType',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_type_hover_color',
            [
                'label' => esc_html__('Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodType' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_type_hover_bg_color',
            [
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item:hover .thepsttmln-prodType' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_type_border',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType',
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_type_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_type_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item .thepsttmln-prodType' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_style_section',
            [
                'label' => esc_html__('Box Style', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'thepsttmlnlkjhkl_blog_number_color',
            [
                'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn, {{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn::before, {{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn::after' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'thepsttmln_blog_box_Wrap_bg_grediant_color',
                'label' => esc_html__('Background', BWDEB_ROOT_AUTHOR_PRO),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn, {{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn::before, {{WRAPPER}} .thepsttmln-timeline-box-bgc-cmmn::after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'thepsttmln_blog_box2_boxshadow_hover',
                'label' => esc_html__('Box Shadow', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'thepsttmln_blog_box2_border_hover',
                'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
                'selector' => '{{WRAPPER}} .thepsttmln-timeline-item',
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-timeline-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // timeline style tab
        $this->start_controls_section(
            'thepsttmln_TL_styles',
            [
                'label' => esc_html__('Progress', BWDEB_ROOT_AUTHOR_PRO),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        // progressbar
        $this->add_control(
            'thepsttmln_TL_progressbar',
            [
                'label' => esc_html__('Progress Bar', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17'],
                ],
            ]
        );
        //width
        $this->add_responsive_control(
            'thepsttmln_TL_progressbar_width',
            [
                'label' => esc_html__('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .thepsttmln-pb-cmn,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17'],
                ],

            ]
        );
        // border -radius
        $this->add_responsive_control(
            'thepsttmln_TL_progressbar_border_radius',
            [
                'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .thepsttmln-pb-cmn,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn,
					{{WRAPPER}} .thepsttmln-pb-cmn-pseudo::before,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::before' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17'],
                ],
            ]
        );
        //color
        $this->add_control(
            'thepsttmln_TL_progressbar_color',
            [
                'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-pb-cmn,
					{{WRAPPER}} .thepsttmln-pb-cmn-pseudo::before' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style22'],
                ],
            ]
        );
        //border color
        $this->add_control(
            'thepsttmln_TL_progressbar_border_color',
            [
                'label' => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-pb-cmn,
					{{WRAPPER}} .thepsttmln-pb-cmn-pseudo::before' => 'border-color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24'],
                ],
            ]
        );
        //bg color
        $this->add_control(
            'thepsttmln_TL_progressbar_bg_color',
            [
                'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-pb-bg-cm,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::after' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19'],
                ],
            ]
        );
        //bg border color
        $this->add_control(
            'thepsttmln_TL_progressbar_bg_border_color',
            [
                'label' => esc_html__('BG Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln-pb-bg-cmn,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .thepsttmln-pb-bg-cmn-pseudo::after' => 'border-color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'thepsttmln_TL_choose_design!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24'],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'thepsttmln_blog_pagination_style_section',
            [
                'label' => esc_html__('Pagination Style', 'blog-post-list'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'thepsttmln_the_pagination_type' => ['number-and-text', 'number'],
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_the_pagination_items_align',
            [
                'label' => esc_html__('Items Alignment', 'blog-post-list'),
                'type' => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'blog-post-list'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'blog-post-list'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'blog-post-list'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'condition' => [
                    'thepsttmln_the_pagination_type' => ['number-and-text', 'number'],
                ],
                'toggle' => true,
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_button_box_pagi_margin_top',
            [
                'label' => esc_html__('Gap', 'blog-post-list'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'rem'],
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
                    '{{WRAPPER}} .thepsttmln_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        // Hover control start for pagination
        $this->start_controls_tabs(
            'thepsttmln_blog_pagination_style_post'
        );
        $this->start_controls_tab(
            'thepsttmln_blog_pagination_normal_post',
            [
                'label' => esc_html__('Normal', 'blog-post-list'),
            ]
        );
        // Normal Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_pagination_typography',
                'selector' => '{{WRAPPER}} .thepsttmln_pagination_item a',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_pagination_color',
            [
                'label' => esc_html__('Color', 'blog-post-list'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_pagination_bg_color',
            [
                'label' => esc_html__('Background', 'blog-post-list'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item a' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'thepsttmln_blog_pagination_hover_tab',
            [
                'label' => esc_html__('Active', 'blog-post-list'),
            ]
        );
        // Hover Controls
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'thepsttmln_blog_pagination_hover_typography',
                'selector' => '{{WRAPPER}} .thepsttmln_pagination_item span, {{WRAPPER}} .thepsttmln_pagination_item a:hover',
            ]
        );
        $this->add_control(
            'thepsttmln_blog_pagination_hover_color',
            [
                'label' => esc_html__('Active Color', 'blog-post-list'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item span, {{WRAPPER}} .thepsttmln_pagination_item a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'thepsttmln_blog_pagination_hover_bg_color',
            [
                'label' => esc_html__('Background', 'blog-post-list'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item span, {{WRAPPER}} .thepsttmln_pagination_item a:hover' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        // Hover Control End

        $this->add_responsive_control(
            'thepsttmln_blog_button_box_width',
            [
                'label' => esc_html__('Box Width', 'blog-post-list'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .thepsttmln_pagination_item a, {{WRAPPER}} .thepsttmln_pagination_item span' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_button_box_height',
            [
                'label' => esc_html__('Box Height', 'blog-post-list'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .thepsttmln_pagination_item a, {{WRAPPER}} .thepsttmln_pagination_item span' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'blog-post-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item a, {{WRAPPER}} .thepsttmln_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'thepsttmln_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-list'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thepsttmln_pagination_item a, {{WRAPPER}} .thepsttmln_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings();
        // ================
        $thepsttmln_title_tags = $settings['thepsttmln_title_tags'];
        $thepsttmln_styles = $settings['thepsttmln_TL_choose_design'];
        $thepsttmln_post_per_page = $settings['thepsttmln_the_post_per_page'];
        $thepsttmln_post_description_words = $settings['thepsttmln_the_post_description_words'];
        $thepsttmln_blog_word_trim_indi = $settings['thepsttmln_blog_word_trim_indi'];
        $thepsttmln_blog_date_format = $settings['thepsttmln_blog_date_format'];

        $thepsttmln_cart_btn = $settings['thepsttmln_cart_btn'];
        $thepsttmln_cart_type = $settings['thepsttmln_cart_type'];
        $thepsttmln_cart_button = $settings['thepsttmln_cart_button'];
        $thepsttmln_cart_button_icon = $settings['thepsttmln_cart_button_icon']['value'];

        // --------------- Pagination
        $thepsttmln_the_pagination_type = $settings['thepsttmln_the_pagination_type'];
        $thepsttmln_pagination_align = $settings['thepsttmln_the_pagination_items_align'];
        // --------------- Pagination

        $thepsttmln_author_indicator = $settings['thepsttmln_author_indicator'];
        $thepsttmln_taxo_icon = $settings['thepsttmln_taxo_icon'];

        $thepsttmln_align = $settings['thepsttmln_content_alignment'];
        if ('start' === $thepsttmln_align) {
            $thepsttmln_cont_align = 'thepsttmln_taxo_align_left thepsttmln_taxo_align_left_j';
        } elseif ('center' === $thepsttmln_align) {
            $thepsttmln_cont_align = 'thepsttmln_taxo_align_center thepsttmln_taxo_align_center_j';
        } elseif ('end' === $thepsttmln_align) {
            $thepsttmln_cont_align = 'thepsttmln_taxo_align_right thepsttmln_taxo_align_right_j';
        } else { $thepsttmln_cont_align = ' ';}

        $thepsttmln_image_link_show = $settings['thepsttmln_image_link_show_switcher'];
        $thepsttmln_title = $settings['thepsttmln_title_show_switcher'];
        $thepsttmln_title_link = $settings['thepsttmln_title_link_show_switcher'];
        $thepsttmln_description_swtcher = $settings['thepsttmln_description_show_switcher'];
        $thepsttmln_date_swtcher = $settings['thepsttmln_date_show_switcher'];
        $thepsttmln_author_swtcher = $settings['thepsttmln_author_show_switcher'];
        $thepsttmln_comments_swtcher = $settings['thepsttmln_comments_show_switcher'];
        $thepsttmln_categories_swtcher = $settings['thepsttmln_categories_show_switcher'];
        $thepsttmln_tags_swtcher = $settings['thepsttmln_tags_show_switcher'];
        $thepsttmln_tags_filter = $settings['thepsttmln_the_tag_filter'];
        $thepsttmln_cat_show_status = $settings['thepsttmln_the_cat_show_status'];

        $thepsttmln_categorys_dataa = $settings['thepsttmln_the_cat_columnsdd'];
        $thepsttmln_the_blog_type = $settings['thepsttmln_the_blog_type'];
        $thepsttmln_blog_order = $settings['thepsttmln_blog_order'];
        $thepsttmln_author = $settings['thepsttmln_the_all_author'];
        $thepsttmln_order_by = $settings['thepsttmln_the_order_by'];

        $thepsttmln_the_all_date = $settings['thepsttmln_the_all_date'];
        if ('d' === $thepsttmln_the_all_date) {
            $thepsttmln_coustom_day = $thepsttmln_coustom_month = $thepsttmln_coustom_year = $wdbp_time = '';
            $day = date('d');
            $wdbp_time = ['day' => $day];
        } elseif ('m' === $thepsttmln_the_all_date) {
            $thepsttmln_coustom_day = $thepsttmln_coustom_month = $thepsttmln_coustom_year = $wdbp_time = '';
            $month = date('m');
            $wdbp_time = ['month' => $month];
        } elseif ('y' === $thepsttmln_the_all_date) {
            $thepsttmln_coustom_day = $thepsttmln_coustom_month = $thepsttmln_coustom_year = $wdbp_time = '';
            $year = date('y');
            $wdbp_time = ['year' => $year];
        } elseif ('coustom' === $thepsttmln_the_all_date) {
            $thepsttmln_coustom_year = $settings['thepsttmln_blog_coustom_year'];
            $thepsttmln_coustom_month = $settings['thepsttmln_blog_coustom_month'];
            $thepsttmln_coustom_day = $settings['thepsttmln_blog_coustom_day'];
            $wdbp_time = '';
        } else {
            $thepsttmln_coustom_day = $thepsttmln_coustom_month = $thepsttmln_coustom_year = $wdbp_time = '';
        }

        $thepsttmln_args = array(
            'post_type' => $thepsttmln_the_blog_type,
            'author__in' => $thepsttmln_author,
            'orderby' => $thepsttmln_order_by,
            'order' => $thepsttmln_blog_order,
            'post_status' => 'publish',
            'posts_per_page' => $thepsttmln_post_per_page,
            'category_name' => $thepsttmln_categorys_dataa,
            'date_query' => $wdbp_time,
            'year' => $thepsttmln_coustom_year,
            'monthnum' => $thepsttmln_coustom_month,
            'day' => $thepsttmln_coustom_day,
        );
        $thepsttmln_yes_value = 'yes';
        include __DIR__ . '/thepsttmln-all-styles/' . $thepsttmln_styles . '.php';
    }
    public function thepsttmln_post_categories()
    {
        $thepsttmln_categories_list = get_the_category_list(esc_html__(', ', 'blog-post-tiles'));
        if ($thepsttmln_categories_list) {
            echo $thepsttmln_categories_list;
        }
    }
    public function thepsttmln_post_thumbnail_here()
    {
        if (has_post_thumbnail()) {
            the_post_thumbnail('ferdaussk01_custom-size');
        } else {
            echo '<h2 class="text-center ">' . esc_html__('No Thumbnail') . '</h2>';
        }
    }
}
