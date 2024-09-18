<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Widget_Base;

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

class BWDmgmn_mega_menu_widgets extends Widget_Base {

    public function get_name() {
        return 'MegaMenuMaster';
    }

    public function get_title() {
        return esc_html__( 'Mega Menu Master', BWDEB_ROOT_AUTHOR_PRO );
    }

    public function get_icon() {
        return 'bwdeb-elementor-bundle eicon-mega-menu';
    }

    public function get_categories() {
        return ['bwdthebest_general_category'];
    }

    private function select_elementor_page( $type ) {
        $args = [
            'post_type'      => 'elementor_library',
            'posts_per_page' => -1,
            'tax_query'      => [
                [
                    'taxonomy' => 'elementor_library_type',
                    'field'    => 'slug',
                    'terms'    => $type,
                ],
            ],
        ];
        $query = new \WP_Query( $args );
        $items = [];
        foreach ( $query->posts as $post ) {
            $items[$post->ID] = $post->post_title;
        }
        return $items;
    }

    protected function register_controls() {
        $this->start_controls_section(
            'mmm_add_banner_content',
            [
                'label' => __( 'Mega Menu', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'mmm_mega_menu_word_wrap',
            [
                'label'     => esc_html__( 'Word Wrap', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => 'mmm-word_wrap',
                'options'   => [
                    ''              => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                    'mmm-word_wrap' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'mmm_content_type!' => 'default',
                ],
            ]
        );
        $repeater->add_control(
            'mmm_mega_menu_overflow',
            [
                'label'     => esc_html__( 'Overflow', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    ''                     => esc_html__( 'No', BWDEB_ROOT_AUTHOR_PRO ),
                    'mmm-overflow-visible' => esc_html__( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'mmm_content_type!' => 'default',
                ],
            ]
        );
        $repeater->add_control(
            'mmm_mega_menu_width',
            [
                'label'     => esc_html__( 'Mega Menu Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => 'custom',
                'options'   => [
                    'custom'     => esc_html__( 'Custom', BWDEB_ROOT_AUTHOR_PRO ),
                    'full-width' => esc_html__( 'Full Width', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'mmm_content_type!' => 'default',
                ],
            ]
        );
        $repeater->add_control(
            'mmm_mega_wrap_style_width',
            [
                'label'      => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 2000,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .mmm-sub-menu' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
                    'mmm_mega_menu_width' => 'custom',
                    'mmm_content_type!'   => 'default',
                ],
            ]
        );

        $repeater->add_control(
            'mmm_mega_menu_position',
            [
                'label'     => esc_html__( 'Mega Menu Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    ''                   => esc_html__( 'default', BWDEB_ROOT_AUTHOR_PRO ),
                    'mega-menu-relative' => esc_html__( 'Relative', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'condition' => [
                    'mmm_mega_menu_width' => 'custom',
                    'mmm_content_type!'   => 'default',
                ],
            ]
        );

        $repeater->add_control(
            'mmm_menu_name',
            [
                'label'       => esc_html__( 'Menu Name', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Home', BWDEB_ROOT_AUTHOR_PRO ),
                'placeholder' => esc_html__( 'Type menu name here', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $repeater->add_control(
            'mmm_content_type',
            [
                'label'   => __( 'Type', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'default'            => __( 'Simple', BWDEB_ROOT_AUTHOR_PRO ),
                    'saved_section'      => __( 'Saved Section', BWDEB_ROOT_AUTHOR_PRO ),
                    'saved_page'         => __( 'Saved Page', BWDEB_ROOT_AUTHOR_PRO ),
                    'product_categories' => __( 'Product Categories', BWDEB_ROOT_AUTHOR_PRO ),
                    'post_categories'    => __( 'Post Categories', BWDEB_ROOT_AUTHOR_PRO ),
                    'menu'               => __( 'Menus', BWDEB_ROOT_AUTHOR_PRO ),
                    'products'           => __( 'Products', BWDEB_ROOT_AUTHOR_PRO ),
                    'posts'              => __( 'Posts', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default' => 'default',
            ]
        );
        $repeater->add_control(
            'mmm_mega_global_title',
            [
                'label'       => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'This is top title', BWDEB_ROOT_AUTHOR_PRO ),
                'placeholder' => esc_html__( 'Type title here', BWDEB_ROOT_AUTHOR_PRO ),
                'condition'   => [
                    'mmm_content_type!' => ['default', 'saved_section', 'saved_page', 'menu'],
                ],
            ]
        );

        $repeater->add_control(
            'mmm_menu_website_link',
            [
                'label'       => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => \Elementor\Controls_Manager::URL,
                'options'     => ['url', 'is_external', 'nofollow'],
                'default'     => [
                    'url'         => '#',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
                'label_block' => true,
                'condition'   => [
                    'mmm_content_type' => 'default',
                ],
            ]
        );

        $saved_sections = ['0' => __( 'Choose Section', BWDEB_ROOT_AUTHOR_PRO )] + $this->select_elementor_page( 'section' );

        $repeater->add_control(
            'mmm_saved_section',
            [
                'label'     => __( 'Sections', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::SELECT,
                'options'   => $saved_sections,
                'default'   => '0',
                'condition' => [
                    'mmm_content_type' => 'saved_section',
                ],
            ]
        );

        $saved_page = ['0' => __( 'Choose Page', BWDEB_ROOT_AUTHOR_PRO )] + $this->select_elementor_page( 'page' );

        $repeater->add_control(
            'mmm_saved_pages',
            [
                'label'     => __( 'Pages', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::SELECT,
                'options'   => $saved_page,
                'default'   => '0',
                'condition' => [
                    'mmm_content_type' => 'saved_page',
                ],
            ]
        );

        // Product Categories
        $repeater->add_control(
            'mmm_product_categories',
            [
                'label'       => __( 'Product Categories', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SELECT2,
                'multiple'    => true,
                'label_block' => true,
                'options'     => $this->get_woocommerce_categories(),
                'condition'   => [
                    'mmm_content_type' => 'product_categories',
                ],
            ]
        );

        // Menu
        $repeater->add_control(
            'mmm_menu',
            [
                'label'     => __( 'Menus', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => Controls_Manager::SELECT,
                'options'   => $this->get_menus(),
                'default'   => '0',
                'condition' => [
                    'mmm_content_type' => 'menu',
                ],
            ]
        );

        // Post Categories
        $repeater->add_control(
            'mmm_post_categories',
            [
                'label'       => __( 'Post Categories', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SELECT2,
                'multiple'    => true,
                'label_block' => true,
                'options'     => $this->get_wp_categories(),
                'condition'   => [
                    'mmm_content_type' => 'post_categories',
                ],
            ]
        );

        // Products
        $repeater->add_control(
            'mmm_products',
            [
                'label'       => __( 'Products', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SELECT2,
                'multiple'    => true,
                'label_block' => true,
                'options'     => $this->get_woocommerce_products(),
                'condition'   => [
                    'mmm_content_type' => 'products',
                ],
            ]
        );

        // Posts
        $repeater->add_control(
            'mmm_posts',
            [
                'label'       => __( 'Posts', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SELECT2,
                'multiple'    => true,
                'label_block' => true,
                'options'     => $this->get_wp_posts(),
                'condition'   => [
                    'mmm_content_type' => 'posts',
                ],
            ]
        );

        $repeater->add_control(
            'dropdown_menu_icon',
            [
                'label'                  => esc_html__( 'Drop Down Icon', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                   => \Elementor\Controls_Manager::ICONS,
                'label_block'            => false,
                'default'                => [
                    'value'   => 'fas fa-chevron-down',
                    'library' => 'fa-solid',
                ],
                'skin'                   => 'inline',
                'exclude_inline_options' => 'svg',
                'condition'              => [
                    'mmm_content_type!' => ['default'],
                ],
            ]
        );
        $repeater->add_control(
            'mmm_mega_submenu_panel_position',
            [
                'label'     => esc_html__( 'Submenu Direction', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::CHOOSE,
                'default'   => '',
                'toggle'    => true,
                'options'   => [
                    'mmm-submenu-left-position' => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-chevron-left',
                    ],
                    ''                          => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-chevron-right',
                    ],
                ],
                'condition' => [
                    'mmm_content_type' => 'menu',
                ],
            ]
        );

        $this->add_control(
            'mmm_repeater',
            [
                'label'       => __( 'Content Items', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'mmm_menu_name' => esc_html__( 'Home', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'mmm_menu_name' => esc_html__( 'Services', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'mmm_menu_name' => esc_html__( 'Products', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'mmm_menu_name' => esc_html__( 'About', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                    [
                        'mmm_menu_name' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
                    ],
                ],
                'title_field' => '{{{ mmm_menu_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'mmm_hamburger_menu_section',
            [
                'label' => __( 'Hamburger Menu', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'mmm_nav_menu_logo',
            [
                'label'   => esc_html__( 'Menu Logo', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mmm_nav_menu_logo_link_to',
            [
                'label'   => esc_html__( 'Logo link', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'home',
                'options' => [
                    'home'   => esc_html__( 'Default(Home)', BWDEB_ROOT_AUTHOR_PRO ),
                    'custom' => esc_html__( 'Custom URL', BWDEB_ROOT_AUTHOR_PRO ),
                ],
            ]
        );

        $this->add_control(
            'mmm_nav_menu_logo_link',
            [
                'label'       => esc_html__( ' Custom Link', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'condition'   => [
                    'mmm_nav_menu_logo_link_to' => 'custom',
                ],
                'show_label'  => false,

            ]
        );
        $this->add_control(
            'mobile_menu_icon',
            [
                'label'                  => esc_html__( 'Open Icon', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                   => \Elementor\Controls_Manager::ICONS,
                'label_block'            => false,
                'skin'                   => 'inline',
                'exclude_inline_options' => 'svg',
                'default'                => [
                    'value'   => 'fas fa-bars',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $this->add_control(
            'mobile_menu_close_icon',
            [
                'label'                  => esc_html__( 'Open Icon', BWDEB_ROOT_AUTHOR_PRO ),
                'type'                   => \Elementor\Controls_Manager::ICONS,
                'label_block'            => false,
                'skin'                   => 'inline',
                'exclude_inline_options' => 'svg',
                'default'                => [
                    'value'   => 'fas fa-times',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $this->end_controls_section();

        // Style Header Wrap tab section
        $this->start_controls_section(
            'mmm_header_wrap_style_section',
            [
                'label' => __( 'Menu Wrapper', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'mmm_header_wrap_panel_width',
            [
                'label'          => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'           => Controls_Manager::SLIDER,
                'size_units'     => ['px', '%'],
                'devices'        => ['desktop', 'tablet', 'mobile'],
                'range'          => [
                    'px' => [
                        'min'  => 350,
                        'max'  => 700,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'tablet_default' => [
                    'size' => 350,
                    'unit' => 'px',
                ],
                'selectors'      => [
                    '(tablet) {{WRAPPER}} .mmm-navbar'  => 'max-width: {{SIZE}}{{UNIT}};',
                    '(tablet) {{WRAPPER}} .mmm-for-nav' => '--offcanvas-left-offset: -{{SIZE}}{{UNIT}};',
                    '(mobile) {{WRAPPER}} .mmm-navbar'  => 'max-width: {{SIZE}}{{UNIT}};',
                    '(mobile) {{WRAPPER}} .mmm-for-nav' => '--offcanvas-left-offset: -{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_header_wrap_content_name_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_header_wrap_border',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar',
            ]
        );

        $this->add_responsive_control(
            'mmm_header_wrap_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_header_wrap_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Menus tab section
        $this->start_controls_section(
            'mmm_main_menus_title_style_section',
            [
                'label' => __( 'Menus', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mmm_menus_align',
            [
                'label'     => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::CHOOSE,
                'options'   => [
                    'left'          => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'        => [
                        'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'         => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                    'space-between' => [
                        'title' => esc_html__( 'Justify', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-justify',
                    ],
                ],
                'default'   => 'end',
                'toggle'    => true,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper ul.mmm-navbar-nav' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        // ==========
        $this->start_controls_tabs(
            'mmm_main_menus_title_style_tabs'
        );

        // Normal tab
        $this->start_controls_tab(
            'mmm_main_menus_title_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'mmm_main_menus_title_name_typography',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link',
            ]
        );

        $this->add_control(
            'mmm_main_menus_title_content_name_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_main_menus_title_content_name_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_main_menus_title_border',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link',
            ]
        );

        $this->add_responsive_control(
            'mmm_main_menus_title_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_main_menus_title_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_main_menus_title_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li > a.mmm-menu-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        // Hover tab
        $this->start_controls_tab(
            'mmm_main_menus_title_tstm_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'mmm_main_menus_title_content_hover_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li:hover > a.mmm-menu-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_main_menus_title_content_name_hover_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li:hover > a.mmm-menu-link',
            ]
        );

        $this->add_control(
            'mmm_main_menus_title_hover_border_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li:hover > a.mmm-menu-link' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_main_menus_title_hover_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li:hover > a.mmm-menu-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'mmm_mega_dropdown_indicator',
            [
                'label' => __( 'Dropdown Indicator', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_dropdown_indicator_size',
            [
                'label'      => esc_html__( 'Indicator Size', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem', 'custom'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 5,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .drop-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'mmm_mega_dropdown_indicator_color',
            [
                'label'     => esc_html__( 'Indicator Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar a.mmm-menu-link .drop-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mmm_mega_dropdown_indicator_hover_color',
            [
                'label'     => esc_html__( 'Indicator Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar-nav li:hover a.mmm-menu-link .drop-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mega_dropdown_indicator_border',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar .drop-icon',
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_dropdown_indicator_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .drop-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_dropdown_indicator_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .drop-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_mega_dropdown_indicator_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .drop-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'mmm_dropdown_indicator_for_submenu',
            [
                'label'     => esc_html__( 'For Submenu', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'mmm_mega_dropdown_indicator_color_submenu',
            [
                'label'     => esc_html__( 'Indicator Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar li > .mmm-sub-menu li a .drop-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mmm_mega_dropdown_indicator_hover_color_submenu',
            [
                'label'     => esc_html__( 'Indicator Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar li > .mmm-sub-menu li:hover a .drop-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Mega Wrap tab section
        $this->start_controls_section(
            'mmm_mega_submenu_panel_style_section',
            [
                'label' => __( 'Submenu Panel', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mega_submenu_panel_background_color',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu, {{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu .sub-menu',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mega_submenu_panel_border',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu, {{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu .sub-menu',
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_submenu_panel_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu, {{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu .sub-menu' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_mega_submenu_panel_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu, {{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu .sub-menu' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'mmm_mega_submenu_panel_box_shadow',
                'selector' => '{{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu, {{WRAPPER}} .main-wrapper .mmm-navbar .mmm-sub-menu .sub-menu',
            ]
        );

        $this->end_controls_section();

        // Style Mega Wrap tab section
        $this->start_controls_section(
            'mmm_submenu_menus_style_section',
            [
                'label' => __( 'Submenu Menus', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'mmm_submenu_menus_style_tabs'
        );

        // Normal tab
        $this->start_controls_tab(
            'mmm_submenu_menus_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'mmm_submenu_menus_typography',
                'selector' => '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a',
            ]
        );
        $this->add_control(
            'mmm_submenu_menus_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_submenu_menus_background_color',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mega_wrap_border',
                'selector' => '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a',
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_wrap_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_wrap_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item > a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        // Hover tab
        $this->start_controls_tab(
            'mmm_mega_wrap_tstm_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );
        $this->add_control(
            'mmm_submenu_menus_color_hover',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item:hover > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mmm_submenu_menus_border_color_hover',
            [
                'label'     => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item:hover > a' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_submenu_menus_background_color_hover',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item:hover > a',
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_wrap_hover_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-navbar .mmm-sub-menu li.menu-item:hover > a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        // ============
        $this->end_controls_section();

        // Style Description tab section
        $this->start_controls_section(
            'mmm_mega_title_style_section',
            [
                'label' => __( 'Submenu Title', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mmm_mega_title_align',
            [
                'label'     => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'default'   => 'left',
                'toggle'    => true,
                'selectors' => [
                    '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'mmm_mega_title_name_typography',
                'selector' => '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title',
            ]
        );

        $this->add_control(
            'mmm_mega_title_content_name_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mega_title_content_name_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mega_title_border',
                'selector' => '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title',
            ]
        );
        $this->add_responsive_control(
            'mmm_mega_title_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_mega_title_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mega_title_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu h2.mmm-mega-global-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'mmm_submenu_content_style_section',
            [
                'label' => __( 'Submenu Content', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'mmm_submenu_content_typography',
                'selector' => '{{WRAPPER}} .mmm-sub-menu .mmm-list a h4',
            ]
        );

        $this->add_control(
            'mmm_submenu_content_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mmm-sub-menu .mmm-list a h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_submenu_content_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .mmm-sub-menu .mmm-list a',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_submenu_content_border',
                'selector' => '{{WRAPPER}} .mmm-sub-menu .mmm-list a',
            ]
        );

        $this->add_responsive_control(
            'mmm_submenu_content_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu .mmm-list a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_submenu_content_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu .mmm-list a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_submenu_content_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-sub-menu .mmm-list a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'mmm_submenu_content_box_shadow',
                'selector' => '{{WRAPPER}} .mmm-sub-menu .mmm-list a',
            ]
        );

        $this->end_controls_section();

        // Style Mobile Menu Logo tab section
        $this->start_controls_section(
            'mmm_mobile_menu_logo_style_section',
            [
                'label' => __( 'Mobile Menu Logo', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mmm_mobile_menu_logo_width',
            [
                'label'      => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 5,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 160,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-nav-identity-panel a.mmm-nav-logo img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mmm_mobile_menu_logo_height',
            [
                'label'      => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 5,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 60,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-nav-identity-panel a.mmm-nav-logo img' => 'max-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_mobile_menu_logo_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-nav-identity-panel a.mmm-nav-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'mmm_mobile_menu_logo_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .mmm-nav-identity-panel a.mmm-nav-logo' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'mmm_mobile_humburger_style_section',
            [
                'label' => __( 'Humburger', BWDEB_ROOT_AUTHOR_PRO ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mmm_mobile_humburger_more_options',
            [
                'label' => esc_html__( 'Humburger Toggle', BWDEB_ROOT_AUTHOR_PRO ),
                'type'  => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_responsive_control(
            'mmm_mobile_humburger_position',
            [
                'label'     => esc_html__( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::CHOOSE,
                'default'   => 'right',
                'toggle'    => true,
                'options'   => [
                    'left'  => [
                        'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-chevron-left',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
                        'icon'  => 'eicon-chevron-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper .mmm-menu-hamburger' => 'float: {{VALUE}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'mmm_mobile_humburger_style_tabs'
        );

        $this->start_controls_tab(
            'mmm_mobile_humburger_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'mmm_mobile_humburger_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_border',
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger',
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'mmm_mobile_humburger_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'mmm_mobile_humburger_color_hover',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mmm_mobile_humburger_border_color_hover',
            [
                'label'     => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_bgcolor_hover',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger:hover',
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_border_radius_hover',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-hamburger:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control(
            'mmm_mobile_humburger_close_more_options',
            [
                'label' => esc_html__( 'Close Toggle', BWDEB_ROOT_AUTHOR_PRO ),
                'type'  => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->start_controls_tabs(
            'mmm_mobile_humburger_close_style_tabs'
        );

        $this->start_controls_tab(
            'mmm_mobile_humburger_close_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'mmm_mobile_humburger_close_color',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_close_bgcolor',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-close',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_close_border',
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-close',
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_close_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_close_padding',
            [
                'label'      => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_close_margin',
            [
                'label'      => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'mmm_mobile_humburger_close_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'mmm_mobile_humburger_close_color_hover',
            [
                'label'     => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mmm_mobile_humburger_close_border_color_hover',
            [
                'label'     => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'mmm_mobile_humburger_close_bgcolor_hover',
                'label'    => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-wrapper button.mmm-menu-close:hover',
            ]
        );

        $this->add_responsive_control(
            'mmm_mobile_humburger_close_border_radius_hover',
            [
                'label'      => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .main-wrapper button.mmm-menu-close:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function get_woocommerce_categories() {
        $terms = get_terms( 'product_cat', array( 'hide_empty' => false ) );
        $categories = [];
        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {
                $categories[$term->term_id] = $term->name;
            }
        }
        return $categories;
    }

    private function get_menus() {
        $menus = wp_get_nav_menus();
        $options = [];
        foreach ( $menus as $menu ) {
            $options[$menu->term_id] = $menu->name;
        }
        return $options;
    }

    protected function get_wp_categories() {
        $terms = get_terms( 'category', array( 'hide_empty' => false ) );
        $categories = [];
        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {
                $categories[$term->term_id] = $term->name;
            }
        }
        return $categories;
    }

    protected function get_woocommerce_products() {
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        );
        $products = get_posts( $args );
        $options = [];
        if ( !empty( $products ) ) {
            foreach ( $products as $product ) {
                $options[$product->ID] = $product->post_title;
            }
        }
        return $options;
    }

    protected function get_wp_posts() {
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        );
        $posts = get_posts( $args );
        $options = [];
        if ( !empty( $posts ) ) {
            foreach ( $posts as $post ) {
                $options[$post->ID] = $post->post_title;
            }
        }
        return $options;
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $link = $target = $nofollow = '';
        if ( isset( $settings['mmm_nav_menu_logo_link_to'] ) && $settings['mmm_nav_menu_logo_link_to'] == 'home' ) {
            $link = get_home_url();
        } elseif ( isset( $settings['mmm_nav_menu_logo_link'] ) ) {
            $link = $settings['mmm_nav_menu_logo_link']['url'];
            $target = ( $settings['mmm_nav_menu_logo_link']['is_external'] != "on" ? "" : "_blank" );
            $nofollow = ( $settings['mmm_nav_menu_logo_link']['nofollow'] != "on" ? "" : "nofollow" );
        }

        echo '<div class="main-wrapper">';
        //$stickyPosition = $settings['mmm_sticky_header']=='yes'?'':'position';
        echo '<button class="mmm-menu-hamburger mmm-menu-toggler">';
        echo '<i class="' . esc_attr( $settings['mobile_menu_icon']['value'] ) . '"></i>';
        echo '</button>';
        echo '<nav class="mmm-navbar mmm-for-nav">';
        echo '<div class="mmm-navbar-collapse">';
        echo '<ul class="mmm-navbar-nav">';
        if ( !empty( $settings['mmm_repeater'] ) ) {
            foreach ( $settings['mmm_repeater'] as $item ) {
                $classes = [
                    'elementor-repeater-item-' . esc_attr( $item['_id'] ),
                    $item["mmm_content_type"] == "default" ? "" : "mmm-megamenu-has",
                    $item['mmm_mega_menu_width'],
                    $item['mmm_mega_menu_position'],
                    $item['mmm_mega_menu_overflow'],
                    $item['mmm_mega_menu_word_wrap'],
                    $item['mmm_mega_submenu_panel_position'],
                ];
                echo '<li class="' . implode( ' ', array_filter( $classes ) ) . '">';
                if ( $item['mmm_content_type'] == 'default' ) {
                    echo '<a href="' . esc_url( $item['mmm_menu_website_link']['url'] ) . '" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] ) . '</a>';
                } elseif ( $item['mmm_content_type'] == 'saved_section' && $item['mmm_saved_section'] != '0' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu">';
                    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $item['mmm_saved_section'] );
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'saved_page' && $item['mmm_saved_pages'] != '0' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu">';
                    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $item['mmm_saved_pages'] );
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'product_categories' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu ' . $item['mmm_content_type'] . '">';
                    if ( !empty( $item['mmm_mega_global_title'] ) ) {echo '<h2 class="mmm-mega-global-title">' . esc_html( $item['mmm_mega_global_title'] ) . '</h2>';}
                    echo '<div class="mega-product-cat-wrap mmm-list">';
                    $categories = $this->get_woocommerce_categories();
                    if ( $item['mmm_product_categories'] == true ) {
                        foreach ( $item['mmm_product_categories'] as $category_id ) {
                            if ( isset( $categories[$category_id] ) ) {
                                $category = get_term( $category_id, 'product_cat' );
                                $image = wp_get_attachment_url( get_term_meta( $category_id, 'thumbnail_id', true ) );
                                echo '<a href="' . esc_url( get_term_link( $category ) ) . '" class="mmm-product-category">';
                                echo '<div class="mmm-product-cat-image">';
                                if ( !empty( $image ) ) {
                                    echo '<img src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '">';
                                }
                                echo '</div>';
                                echo '<div class="mmm-product-cat-content">';
                                echo '<h4>' . esc_html( $category->name ) . '</h4>';
                                echo '</div>';
                                echo '</a>';
                            }
                        }
                    } else {
                        echo __( 'Please select some categories.', BWDEB_ROOT_AUTHOR_PRO );
                    }
                    echo '</div>';
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'post_categories' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu ' . ( $item['mmm_content_type'] ) . '">';
                    if ( !empty( $item['mmm_mega_global_title'] ) ) {echo '<h2 class="mmm-mega-global-title">' . esc_html( $item['mmm_mega_global_title'] ) . '</h2>';}
                    echo '<div class="mega-post-categories-wrap mmm-list">';
                    $categories = $this->get_wp_categories();
                    if ( $item['mmm_post_categories'] == true ) {
                        foreach ( $item['mmm_post_categories'] as $term_id ) {
                            $term = get_term( $term_id, 'category' );
                            if ( !is_wp_error( $term ) ) {
                                echo '<a href="' . esc_url( get_term_link( $term ) ) . '" class="mmm-post-category">';
                                echo '<div class="mmm-post-categories-content">';
                                echo '<h4>' . esc_html( $term->name ) . '</h4>';
                                echo '</div>';
                                echo '</a>';
                            }
                        }
                    } else {
                        echo __( 'Please select some categories.', BWDEB_ROOT_AUTHOR_PRO );
                    }
                    echo '</div>';
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'products' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu ' . $item['mmm_content_type'] . '">';
                    if ( !empty( $item['mmm_mega_global_title'] ) ) {echo '<h2 class="mmm-mega-global-title">' . esc_html( $item['mmm_mega_global_title'] ) . '</h2>';}
                    echo '<div class="mega-products-wrap mmm-list">';
                    if ( $item['mmm_products'] == true ) {
                        foreach ( $item['mmm_products'] as $product_id ) {
                            $product = wc_get_product( $product_id );
                            if ( $product ) {
                                echo '<a href="' . esc_url( get_permalink( $product_id ) ) . '" class="mmm-products">';
                                echo '<div class="mmm-product-image">';
                                if ( $product->get_image_id() ) {
                                    echo '<img src="' . esc_url( wp_get_attachment_url( $product->get_image_id() ) ) . '" alt="' . esc_attr( $product->get_name() ) . '">';
                                }
                                echo '</div>';
                                echo '<div class="mmm-product-content">';
                                echo '<h4>' . esc_html( $product->get_name() ) . '</h4>';
                                echo '</div>';
                                echo '</a>';
                            }
                        }
                    } else {
                        echo __( 'Please select some products.', BWDEB_ROOT_AUTHOR_PRO );
                    }
                    echo '</div>';
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'posts' ) {
                    echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                    if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                        echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                    }
                    echo '</a>';
                    echo '<div class="mmm-sub-menu ' . ( $item['mmm_content_type'] ) . '">';
                    if ( !empty( $item['mmm_mega_global_title'] ) ) {echo '<h2 class="mmm-mega-global-title">' . esc_html( $item['mmm_mega_global_title'] ) . '</h2>';}
                    echo '<div class="mega-posts-wrap mmm-list">';
                    if ( $item['mmm_posts'] == true ) {
                        foreach ( $item['mmm_posts'] as $post_id ) {
                            $post = get_post( $post_id );
                            $thumbnail_url = get_the_post_thumbnail_url( $post_id );
                            echo '<a href="' . esc_url( get_permalink( $post_id ) ) . '" class="mmm-posts">';
                            echo '<div class="mmm-post-image">';
                            if ( $thumbnail_url ) {
                                echo '<img src="' . esc_url( $thumbnail_url ) . '" alt="' . esc_attr( $post->post_title ) . '">';
                            }
                            echo '</div>';
                            echo '<div class="mmm-post-content">';
                            echo '<h4>' . esc_html( $post->post_title ) . '</h4>';
                            echo '</div>';
                            echo '</a>';
                        }
                    } else {
                        echo __( 'Please select some posts.', BWDEB_ROOT_AUTHOR_PRO );
                    }
                    echo '</div>';
                    echo '</div>';
                } elseif ( $item['mmm_content_type'] == 'menu' ) {
                    if ( $item['mmm_menu'] != '0' ) {
                        echo '<a href="#" class="mmm-menu-link">' . esc_html( $item['mmm_menu_name'] );
                        if ( !empty( $item['dropdown_menu_icon']['value'] ) ) {
                            echo '<span class="drop-icon"><i class="' . esc_attr( $item['dropdown_menu_icon']['value'] ) . '"></i></span>';
                        }
                        echo '</a>';
                        echo '<div class="mmm-sub-menu ' . $item['mmm_content_type'] . ' ">';

                        if ( $item['mmm_menu'] == true ) {
                            echo '<div class="mmm-common-content mmm-menus">';
                            wp_nav_menu( array( 'menu' => $item['mmm_menu'] ) );
                            echo '</div>';
                        } else {
                            echo __( 'Please select a menu.', BWDEB_ROOT_AUTHOR_PRO );
                        }

                        echo '</div>';
                    }
                }
                echo '</li>';
            }
        }
        echo '</ul>';
        echo '</div>';
        echo '<div class="mmm-nav-identity-panel">';
        echo '<div class="mmm-site-title">';
        echo '<a class="mmm-nav-logo" href="' . $link . '" target="' . ( !empty( $target ) ? $target : '_self' ) . '" rel="' . $nofollow . '">';
        echo '<img src="' . $settings['mmm_nav_menu_logo']['url'] . '" alt="logo">';
        echo '</a>';
        echo '</div>';
        echo '<button class="mmm-menu-close mmm-menu-toggler" type="button">';
        echo '<i class="' . esc_attr( $settings['mobile_menu_close_icon']['value'] ) . '"></i>';
        echo '</button>';
        echo '</div>';
        echo '</nav>';
        echo '</div>';
    }
}
