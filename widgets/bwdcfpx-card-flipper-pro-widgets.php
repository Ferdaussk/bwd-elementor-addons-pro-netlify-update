<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Helper {

	public static function get_post_list($post_type = 'any')
    {
        return self::get_query_post_list($post_type);
    }
	public static function get_elementor_templates($type = null)
    {
        $options = [];

        if ($type) {
            $args = [
                'post_type' => 'elementor_library',
                'posts_per_page' => -1,
            ];
            $args['tax_query'] = [
                [
                    'taxonomy' => 'elementor_library_type',
                    'field' => 'slug',
                    'terms' => $type,
                ],
            ];

            $page_templates = get_posts($args);

            if (!empty($page_templates) && !is_wp_error($page_templates)) {
                foreach ($page_templates as $post) {
                    $options[$post->ID] = $post->post_title;
                }
            }
        } else {
            $options = self::get_query_post_list('elementor_library');
        }

        return $options;
    }
	public static function get_page_template_options($type = '')
    {
        $page_templates = self::get_elementor_templates($type);

        $options[-1] = __('Select', BWDEB_ROOT_AUTHOR_PRO);

        if (count($page_templates)) {
            foreach ($page_templates as $id => $name) {
                $options[$id] = $name;
            }
        } else {
            $options['no_template'] = __('No saved templates found!', BWDEB_ROOT_AUTHOR_PRO);
        }

        return $options;
    }
	public static function get_render_icon( $icon, $attributes = [], $tag = 'i' ) {
		if ( empty( $icon['library'] ) ) {
			return false;
		}

		$output = '';

		/**
		 * When the library value is svg it means that it's a SVG media attachment uploaded by the user.
		 * Otherwise, it's the name of the font family that the icon belongs to.
		 */
		if ( 'svg' === $icon['library'] ) {
			$output = method_exists( 'Elementor\Icons_Manager', 'render_uploaded_svg_icon' ) ? \Elementor\Icons_Manager::render_uploaded_svg_icon( $icon['value'] ) : '';
		} else {
			$output = method_exists( 'Elementor\Icons_Manager', 'render_font_icon' ) ? \Elementor\Icons_Manager::render_font_icon( $icon, $attributes, $tag ) : '';
		}

		return $output;
	}
	public static function get_query_post_list($post_type = 'any', $limit = -1, $search = '')
    {
        global $wpdb;
        $where = '';
        $data = [];

        if (-1 == $limit) {
            $limit = '';
        } elseif (0 == $limit) {
            $limit = "limit 0,1";
        } else {
            $limit = $wpdb->prepare(" limit 0,%d", esc_sql($limit));
        }

        if ('any' === $post_type) {
            $in_search_post_types = get_post_types(['exclude_from_search' => false]);
            if (empty($in_search_post_types)) {
                $where .= ' AND 1=0 ';
            } else {
                $where .= " AND {$wpdb->posts}.post_type IN ('" . join("', '",
                    array_map('esc_sql', $in_search_post_types)) . "')";
            }
        } elseif (!empty($post_type)) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_type = %s", esc_sql($post_type));
        }

        if (!empty($search)) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_title LIKE %s", '%' . esc_sql($search) . '%');
        }

        $query = "select post_title,ID  from $wpdb->posts where post_status = 'publish' $where $limit";
        $results = $wpdb->get_results($query);
        if (!empty($results)) {
            foreach ($results as $row) {
                $data[$row->ID] = $row->post_title;
            }
        }
        return $data;
    }

}

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdcfpx_cardFlipper_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdcfpx-card-flipper-pro', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Card Flipper Pro', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-flip-box bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() {

		/**
		 * Interactive Cards Contents
		 */
		$this->start_controls_section(
			'bwdcfpx_section_interactive_card_contents',
			[
				'label' => esc_html__( 'Interactive Card', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_style',
			[
				'label'     	=> esc_html__('Front Panel Card Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' 			=> \Elementor\Controls_Manager::SELECT,
				'default' 		=> 'text-card',
				'label_block' 	=> false,
				'options' 		=> [
					'text-card' => esc_html__('Text Card', BWDEB_ROOT_AUTHOR_PRO),
					'img-card' 	=> esc_html__('Image Card', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_type',
			[
				'label'     	=> esc_html__('Rear Panel Card Type', BWDEB_ROOT_AUTHOR_PRO),
				'type' 			=> \Elementor\Controls_Manager::SELECT,
				'default' 		=> 'img-grid',
				'label_block' 	=> false,
				'options' 		=> [
					'img-grid' 		=> esc_html__('Image Grid', BWDEB_ROOT_AUTHOR_PRO),
					'scrollable' 	=> esc_html__('Scrollable Content', BWDEB_ROOT_AUTHOR_PRO),
					'video' 		=> esc_html__('Video', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);


		$this->start_controls_tabs('bwdcfpx_interactive_card_Tabs');
        
		// Front Panel Tab
		$this->start_controls_tab('front-panel', ['label' => esc_html__('Front Panel', BWDEB_ROOT_AUTHOR_PRO)]);

		$this->add_control(
			'bwdcfpx_interactive_card_is_show_front_panel_cover',
			[
				'label' => __('Show Cover Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => __('Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => '',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_cover',
			[
				'label' => esc_html__('Cover Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
					'bwdcfpx_interactive_card_is_show_front_panel_cover' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen' => 'background: center / cover url({{URL}}) no-repeat !important;',
				],
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_counter',
			[
				'label' => esc_html__('Counter', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => false,
				'default' => esc_html__('1', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => ['active' => true],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				],
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->add_control(
			'counter_html_tag',
			[
				'label'   => __( 'Counter HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'   => __( 'H1', BWDEB_ROOT_AUTHOR_PRO ),
					'h2'   => __( 'H2', BWDEB_ROOT_AUTHOR_PRO ),
					'h3'   => __( 'H3', BWDEB_ROOT_AUTHOR_PRO ),
					'h4'   => __( 'H4', BWDEB_ROOT_AUTHOR_PRO ),
					'h5'   => __( 'H5', BWDEB_ROOT_AUTHOR_PRO ),
					'h6'   => __( 'H6', BWDEB_ROOT_AUTHOR_PRO ),
					'div'  => __( 'div', BWDEB_ROOT_AUTHOR_PRO ),
					'span' => __( 'span', BWDEB_ROOT_AUTHOR_PRO ),
					'p'    => __( 'p', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_title',
			[
				'label' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => false,
				'default' => esc_html__('Interactive Cards', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				],
				'dynamic' => ['active' => true],
				'ai' => [
					'active' => false,
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_img',
			[
				'label' => esc_html__('Cover Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'img-card'
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen' => 'background-image: url({{URL}});',
				],
				'ai' => [
					'active' => false,
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_text_type',
			[
				'label'                 => __('Content Type', BWDEB_ROOT_AUTHOR_PRO),
				'type'                  => \Elementor\Controls_Manager::SELECT,
				'options'               => [
					'content'       => __('Content', BWDEB_ROOT_AUTHOR_PRO),
					'template'      => __('Saved Templates', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default'               => 'content',
			]
		);

		$this->add_control(
			'bwdcfpx_primary_templates',
			[
				'label'                 => __('Choose Template', BWDEB_ROOT_AUTHOR_PRO),
				'type'                  => \Elementor\Controls_Manager::SELECT,
				'options'               => Helper::get_elementor_templates(),
				'condition'             => [
					'bwdcfpx_interactive_card_text_type'      => 'template',
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_content',
			[
				'label' => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__('A new concept of showing content in your web page with more interactive way.', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
					'bwdcfpx_interactive_card_text_type' => 'content'
				],
				'dynamic' => ['active' => true]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_button_heading',
			[
				'label' => esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_is_show_front_panel_btn_icon',
			[
				'label' => __('Show Button Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => __('Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => '',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_btn',
			[
				'label' => esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic'   => ['active' => true],
                'label_block' => false,
				'default' => esc_html__( 'More', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card',
				],
				'ai' => [
					'active' => false,
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_btn_icon_alignment',
			[
				'label' => __('Button Icon Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_front_panel_btn_icon'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_btn_icon_spacing',
			[
				'label' => __('Button Icon Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn .front-btn-icon.left' => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn .front-btn-icon.right' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_front_panel_btn_icon'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_btn_icon',
			[
				'label' => __('Button Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-circle-right',
					'library' => 'fa-solid',
				],
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_front_panel_btn_icon'	=> 'yes'
				]
			]
		);
		$this->end_controls_tab();

		// Rear Panel Tab
		$this->start_controls_tab('rear-panel', ['label' => esc_html__('Rear Panel', BWDEB_ROOT_AUTHOR_PRO)]);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_image',
			[
				'label' => esc_html__('Cover Image', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'selectors' => [
					'{{WRAPPER}} .content .bwdcfpx-image' => 'background-image: url({{URL}});',
				],
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				],
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_image_alignment',
			[
				'label'     	=> esc_html__('Image Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' 			=> \Elementor\Controls_Manager::SELECT,
				'default' 		=> 'top',
				'label_block' 	=> false,
				'options' 		=> [
					'left' 			=> esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
					'right' 		=> esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
					'top' 			=> esc_html__('Top', BWDEB_ROOT_AUTHOR_PRO),
				],
				'prefix_class' => 'bwdcfpx-interactive-card-rear-img-align-',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_image_height',
			[
				'label' => esc_html__('Image Height', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 62,
					'unit' => '%',
				],
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}}.bwdcfpx-interactive-card-rear-img-align-top .interactive-card .content .bwdcfpx-content-inner .bwdcfpx-image' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_rear_image_alignment' => 'top'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_title',
			[
				'label' => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Cool Headline', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				],
				'dynamic' => ['active' => true],
				'ai' => [
					'active' => false,
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_text_type',
			[
				'label'                 => __('Content Type', BWDEB_ROOT_AUTHOR_PRO),
				'type'                  => \Elementor\Controls_Manager::SELECT,
				'options'               => [
					'content'       => __('Content', BWDEB_ROOT_AUTHOR_PRO),
					'template'      => __('Saved Templates', BWDEB_ROOT_AUTHOR_PRO),
				],
				'default'               => 'content',
			]
		);

		$this->add_control(
			'bwdcfpx_primary_rear_templates',
			[
				'label'                 => __('Choose Template', BWDEB_ROOT_AUTHOR_PRO),
				'type'                  => \Elementor\Controls_Manager::SELECT,
				'options'               => Helper::get_elementor_templates(),
				'condition'             => [
					'bwdcfpx_interactive_card_rear_text_type'      => 'template',
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_content',
			[
				'label' => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__('A new concept of showing content in your web page with more interactive way.', BWDEB_ROOT_AUTHOR_PRO),
				'dynamic' => ['active' =>  true],
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid',
					'bwdcfpx_interactive_card_rear_text_type' => 'content'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_button_heading',
			[
				'label' => esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon',
			[
				'label' => __('Show Button Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Show', BWDEB_ROOT_AUTHOR_PRO),
				'label_off' => __('Hide', BWDEB_ROOT_AUTHOR_PRO),
				'return_value' => 'yes',
				'default' => '',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn',
			[
				'label' => esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Read More', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				],
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_link',
			[
				'label' => esc_html__('Button Link', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::URL,
                'dynamic'     => ['active' => true],
				'label_block' => true,
				'default' => [
					'url' => '#',
					'is_external' => '',
				],
				'show_external' => true,
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_panel_btn_icon_alignment',
			[
				'label' => __('Button Icon Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_panel_btn_icon_spacing',
			[
				'label' => __('Button Icon Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card a.interactive-btn .rear-btn-icon.left' => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .interactive-card a.interactive-btn .rear-btn-icon.right' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon'	=> 'yes'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_panel_btn_icon',
			[
				'label' => __('Button Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-circle-left',
					'library' => 'fa-solid',
				],
				'condition'	=> [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon'	=> 'yes'
				]
			]
		);

		/**
		 * Scrollable Content
		 */
		$this->add_control(
			'bwdcfpx_interactive_card_rear_custom_code',
			[
				'label'			=> esc_html__('Custom Content', BWDEB_ROOT_AUTHOR_PRO),
				'type'			=> \Elementor\Controls_Manager::WYSIWYG,
				'label_block' 	=> true,
				'default' 		=> __('<h2>Custom Content</h2> <strong>A new concept of showing content in your web page with more interactive way</strong>. <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates assumenda recusandae a dolorum, nulla fugit reiciendis inventore explicabo cum autem placeat dignissimos doloremque quae magni sapiente eligendi hic ipsum quaerat mollitia, natus ullam. Repellat eligendi corporis cum suscipit totam molestiae ad, explicabo magnam libero, iusto sequi voluptatem nam culpa laboriosam officia consequatur eaque accusamus distinctio quas ipsa fuga consectetur iure asperiores! Ratione veniam magnam culpa temporibus nam quam cumque nesciunt debitis reprehenderit obcaecati eum tempore harum officiis autem facere, quos, ad officia sunt asperiores. Reprehenderit molestiae, vero omnis alias voluptatem recusandae dolores ab at. Nemo aliquam fuga vel necessitatibus voluptatum officiis ipsum, consequuntur id eum maiores debitis nostrum expedita libero saepe, doloribus mollitia minus quidem quo facere, consequatur! Veniam delectus doloribus blanditiis aliquid iure officiis modi sapiente unde. Ad, placeat suscipit. Perspiciatis dolores, expedita optio omnis reiciendis obcaecati quidem saepe praesentium autem unde suscipit nostrum natus vel tempore quas laudantium, excepturi! Ad, illo. Libero earum doloribus perspiciatis impedit, cum magni sint odio! Maxime sunt iste quibusdam nisi quia, voluptas, dolore tempora dolor neque error ducimus. Quas excepturi qui inventore quod at amet ipsa quasi blanditiis, voluptatem aliquam dolor beatae enim obcaecati alias voluptatibus vel molestias deleniti eius error nostrum, nesciunt adipisci quibusdam. Non mollitia rerum in commodi optio ipsam, neque quidem voluptatum velit quaerat suscipit consectetur nostrum odio, rem illo! Id placeat dignissimos tempora aliquam fugit veniam quam cum repudiandae fugiat nemo ad iure qui cupiditate natus aspernatur, dicta dolore ab corporis perferendis quaerat eaque assumenda libero explicabo beatae. Quas.</p>', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'scrollable',
					'bwdcfpx_interactive_card_rear_text_type' => 'content'
				]
			]
		);

		/**
		 * Video Content
		 */
		$this->add_control(
			'bwdcfpx_interactive_card_youtube_video_url',
			[
				'label' => esc_html__('Youtube URL', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => false,
				'default' => esc_html__('https://www.youtube.com/watch?v=MLpWrANjFbI', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'video'
				],
				'ai' => [
					'active' => false,
				],
			]

		);

		$this->add_control(
			'bwdcfpx_interactive_card_youtube_video_fullscreen',
			[
				'label' => esc_html__('Allow Full Screen?', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'video'
				]
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		/**
		 * Interactive Cards Settings
		 */
		$this->start_controls_section(
			'bwdcfpx_section_interactive_card_animation_settings',
			[
				'label' => esc_html__('Animation Settings', BWDEB_ROOT_AUTHOR_PRO)
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_content_animation',
			[
				'label'     	=> esc_html__('Content Animation', BWDEB_ROOT_AUTHOR_PRO),
				'type' 			=> \Elementor\Controls_Manager::SELECT,
				'default' 		=> 'content-show',
				'label_block' 	=> false,
				'options' 		=> [
					'content-show'  	=> esc_html__('Appear', BWDEB_ROOT_AUTHOR_PRO),
					'slide-in-left'  	=> esc_html__('SlideInLeft', BWDEB_ROOT_AUTHOR_PRO),
					'slide-in-right'  	=> esc_html__('SlideInRight', BWDEB_ROOT_AUTHOR_PRO),
					'slide-in-swing-left'  	=> esc_html__('SlideInSwingLeft', BWDEB_ROOT_AUTHOR_PRO),
					'slide-in-swing-right'  => esc_html__('SlideInSwingRight', BWDEB_ROOT_AUTHOR_PRO),
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_animation_reveal_time',
			[
				'label' => esc_html__('Timing (ms)', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => false,
				'default' => 400,
				'ai' => [
					'active' => false,
				],
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (General Style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_general_style',
			[
				'label' => esc_html__('General Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_general_width',
			[
				'label' => esc_html__('Max Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 100,
					'unit' => '%',
				],
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_general_height',
			[
				'label' => esc_html__('Height', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 600,
					'unit' => 'px',
				],
				'size_units' => ['px', 'vh', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'vh' => [
						'min' => 1,
						'max' => 100,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_general_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#262C37',
				'selectors' => [
					'{{WRAPPER}} .interactive-card' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_general_container_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_general_container_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .interactive-card .content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_small_overlay_circle_bg',
			[
				'label' => esc_html__('Small Overlay Circle', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content::after' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_large_overlay_circle_bg',
			[
				'label' => esc_html__('Large Overlay Circle', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content::before' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Interactive Card Front Panel)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_front_style',
			[
				'label' => esc_html__('Front Panel Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_content_align',
			[
				'label' => __('Content Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-image-screen' => 'text-align: {{VALUE}};',
				],
				'condition'	=> [
					'bwdcfpx_interactive_card_style'	=> 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_panel_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#262C37',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-image-screen' => 'background: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_content_width',
			[
				'label' => esc_html__('Front Content Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 100,
					'unit' => '%',
				],
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'img-card',
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_content_height',
			[
				'label' => esc_html__('Front Content Height', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 100,
					'unit' => '%',
				],
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'img-card',
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_cardfront_panel_container_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-image-screen' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_panel_border',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-content',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_content_shadow',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen',
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Interactive Card Front Panel thumbnail style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_front_thumbnail_style',
			[
				'label' => esc_html__('Front Panel Thumbnail Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition'	=> [
					'bwdcfpx_interactive_card_style'	=> 'img-card'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_thumbnail_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen',
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_thumbnail_radius',
			[
				'label' => __('Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_thumbnail_shadow',
				'label' => __('Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-content .bwdcfpx-image-screen',
			]
		);


		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Interactive Card Rear Panel)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_rear_style',
			[
				'label' => esc_html__('Rear Panel Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_panel_content_align',
			[
				'label' => __('Content Alignment', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __('Center', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __('Right', BWDEB_ROOT_AUTHOR_PRO),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content .bwdcfpx-content-inner' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_panel_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_rear_panel_container_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_panel_border',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .content',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_content_shadow',
				'selector' => '{{WRAPPER}} .interactive-card .content .bwdcfpx-content-inner',
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Interactive Card Rear Panel thumbnail style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_rear_thumbnail_style',
			[
				'label' => esc_html__('Rear Panel Thumbnail Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_thumbnail_border',
				'label' => __('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .content .bwdcfpx-content-inner .bwdcfpx-image',
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_thumbnail_radius',
			[
				'label' => __('Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content .bwdcfpx-content-inner .bwdcfpx-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_thumbnail_shadow',
				'label' => __('Shadow', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .content .bwdcfpx-content-inner .bwdcfpx-image',
			]
		);


		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Front Panel Typogrpahy)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_front_typography',
			[
				'label' => esc_html__('Front Panel Color &amp; Typography', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_title_counter_heading',
			[
				'label' => esc_html__('Counter Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_counter_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#737373',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-header .card-number' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_counter_typography',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-header .card-number',
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_title_heading',
			[
				'label' => esc_html__('Title Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_title_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-header .bwdcfpx-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_title_typography',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-header .bwdcfpx-title',
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_content_heading',
			[
				'label' => esc_html__('Content Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_content_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cecece',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-front-text-body' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_content_typography',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-front-text-body',
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Rear Panel Typogrpahy)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_rear_typography',
			[
				'label' => esc_html__('Rear Panel Color &amp; Typography', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_title_heading',
			[
				'label' => esc_html__('Title Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_title_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#444',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content .bwdcfpx-text .bwdcfpx-title' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_type!' => 'scrollable'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_title_typography',
				'selector' => '{{WRAPPER}} .interactive-card .content .bwdcfpx-text .bwdcfpx-title',
				'condition' => [
					'bwdcfpx_interactive_card_type!' => 'scrollable'
				]
			]
		);
		// heading - h1 to h6 tag style
		$this->add_control(
			'bwdcfpx_interactive_card_rear_title_heading_tags',
			[
				'label' => esc_html__('All Heading Tags Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'scrollable'
				]
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_title_tags_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#444',
				'selectors' => [
					'	{{WRAPPER}} .interactive-card .content h1, 
						{{WRAPPER}} .interactive-card .content h2,
						{{WRAPPER}} .interactive-card .content h3,
						{{WRAPPER}} .interactive-card .content h4,
						{{WRAPPER}} .interactive-card .content h5,
						{{WRAPPER}} .interactive-card .content h6
					' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'scrollable'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_title_tags_typography',
				'selector' => '{{WRAPPER}} .interactive-card .content h1, 
				{{WRAPPER}} .interactive-card .content h2,
				{{WRAPPER}} .interactive-card .content h3,
				{{WRAPPER}} .interactive-card .content h4,
				{{WRAPPER}} .interactive-card .content h5,
				{{WRAPPER}} .interactive-card .content h6',
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'scrollable'
				]
			]
		);

		// content
		$this->add_control(
			'bwdcfpx_interactive_card_rear_content_heading',
			[
				'label' => esc_html__('Content Style', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_content_color',
			[
				'label' => esc_html__('Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#4d4d4d',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .content .bwdcfpx-text, {{WRAPPER}} .interactive-card .content p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_content_typography',
				'selector' => '{{WRAPPER}} .interactive-card .content .bwdcfpx-text, {{WRAPPER}} .interactive-card .content p',
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Button Style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_front_button_style',
			[
				'label' => esc_html__('Front Panel Button Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		/**
		 * Front Panel Button
		 */
		$this->add_control(
			'bwdcfpx_interactive_card_button_style_front_panel',
			[
				'label' => esc_html__('Button Style ( Front Panel )', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_btn_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_btn_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_btn_typography',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_btn_icon_size',
			[
				'label' => __('Icon Size', 'essential-addons-for-elementor-lite'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 14,
				],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-btn .front-btn-icon i' => 'font-size: {{SIZE}}px;',
					'{{WRAPPER}} .interactive-btn .front-btn-icon svg' => 'height: {{SIZE}}px; width: {{SIZE}}px;',
					'{{WRAPPER}} .interactive-btn .front-btn-icon' => 'height: {{SIZE}}px; width: {{SIZE}}px;',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_front_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->start_controls_tabs('bwdcfpx_interactive_card_front_button_tabs');

		// Normal State Tab
		$this->start_controls_tab(
			'bwdcfpx_interactive_card_front_btn_normal',
			[
				'label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_normal_text_color',
			[
				'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_normal_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#49508c',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn' => 'background: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_normal_icon_color',
			[
				'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn .front-btn-icon i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .interactive-card .interactive-btn .front-btn-icon svg' => 'fill: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_btn_border',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_front_btn_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn' => 'border-radius: {{SIZE}}px;',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->end_controls_tab();

		// Hover State Tab
		$this->start_controls_tab(
			'bwdcfpx_interactive_card_front_btn_hover',
			[
				'label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_hover_text_color',
			[
				'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#f9f9f9',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_hover_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#7e5ae2',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn:hover' => 'background: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_normal_icon_color_hover',
			[
				'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn:hover .front-btn-icon i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .interactive-card .interactive-btn:hover .front-btn-icon svg' => 'fill: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_front_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_front_btn_hover_border_color',
			[
				'label' => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn:hover' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				]
			]

		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_front_button_shadow',
				'selector' => '{{WRAPPER}} .interactive-card .bwdcfpx-front-text-content .bwdcfpx-footer a.interactive-btn',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				],
				'separator' => 'none'
			]
		);



		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Rear Panel Button Style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_rear_button_style',
			[
				'label' => esc_html__('Rear Panel Button Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcfpx_interactive_card_type' => 'img-grid'
				]
			]
		);

		/**
		 * Rear Panel Button
		 */
		$this->add_control(
			'bwdcfpx_interactive_card_button_style_rear_text_panel',
			[
				'label' => esc_html__('Button Style ( Rear Panel )', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcfpx_interactive_card_style' => 'text-card'
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_rear_btn_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_rear_btn_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_btn_typography',
				'selector' => '{{WRAPPER}} .interactive-card .interactive-btn',
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_rear_btn_icon_size',
			[
				'label' => __('Icon Size', 'essential-addons-for-elementor-lite'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 14,
				],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-btn .rear-btn-icon i' => 'font-size: {{SIZE}}px;',
					'{{WRAPPER}} .interactive-btn .rear-btn-icon svg' => 'height: {{SIZE}}px; width: {{SIZE}}px;',
					'{{WRAPPER}} .interactive-btn .rear-btn-icon' => 'height: {{SIZE}}px; width: {{SIZE}}px;',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->start_controls_tabs('bwdcfpx_interactive_card_rear_button_tabs');

		// Normal State Tab
		$this->start_controls_tab('bwdcfpx_interactive_card_rear_btn_normal', ['label' => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO)]);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_normal_text_color',
			[
				'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_normal_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#49508c',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_normal_icon_color_hover',
			[
				'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn .rear-btn-icon i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .interactive-card .interactive-btn .rear-btn-icon svg' => 'fill: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_btn_border',
				'label' => esc_html__('Border', BWDEB_ROOT_AUTHOR_PRO),
				'selector' => '{{WRAPPER}} .interactive-card .interactive-btn',
			]
		);

		$this->add_responsive_control(
			'bwdcfpx_interactive_card_rear_btn_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn' => 'border-radius: {{SIZE}}px;',
				],
			]
		);

		$this->end_controls_tab();

		// Hover State Tab
		$this->start_controls_tab('bwdcfpx_interactive_card_rear_btn_hover', ['label' => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO)]);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_hover_text_color',
			[
				'label' => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#f9f9f9',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_hover_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#7e5ae2',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn:hover' => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_normal_icon_color',
			[
				'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn:hover .rear-btn-icon i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .interactive-card .interactive-btn:hover .rear-btn-icon svg' => 'fill: {{VALUE}};',
				],
				'condition' => [
					'bwdcfpx_interactive_card_is_show_rear_panel_btn_icon' => 'yes',
				]
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_rear_btn_hover_border_color',
			[
				'label' => esc_html__('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .interactive-btn:hover' => 'border-color: {{VALUE}};',
				],
			]

		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcfpx_interactive_card_rear_button_shadow',
				'selector' => '{{WRAPPER}} .interactive-card .interactive-btn',
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

		/**
		 * -------------------------------------------
		 * Tab Style (Close Button Style)
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'bwdcfpx_interactive_card_close_button_style',
			[
				'label' => esc_html__('Close Button Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_button_bg_color',
			[
				'label' => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .interactive-card .close-me' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_button_icon_color',
			[
				'label' => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#333',
				'selectors' => [
                    '{{WRAPPER}} .interactive-card .close-me' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .interactive-card .close-me svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_button_icon_new',
			[
				'label' => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'bwdcfpx_interactive_card_close_button_icon',
				'default' => [
					'value' => 'fas fa-times',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_button_icon_size',
			[
				'label' => esc_html__('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 30
				],
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .close-me' => 'width: {{SIZE}}px; height: {{SIZE}}px; line-height: {{SIZE}}px;',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_button_icon_font_size',
			[
				'label' => esc_html__('Icon Font Size', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
                        'unit' => 'px',
				    	'size' => 13
				],
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
                    '{{WRAPPER}} .interactive-card .close-me' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .interactive-card .close-me svg' => 'height: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .interactive-card .close-me .bwdcfpx-interactive-card-svg-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcfpx_interactive_card_close_button_radius',
			[
				'label' => __('Icon Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .close-me' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_colse_btn_position_heading',
			[
				'label' => esc_html__('Position', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_btn_from_top',
			[
				'label' => esc_html__('Vertical', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 15
				],
				'range' => [
					'px' => [
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .close-me' => 'top: {{SIZE}}px;',
				],
			]
		);

		$this->add_control(
			'bwdcfpx_interactive_card_close_btn_from_right',
			[
				'label' => esc_html__('Horizontal', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 15
				],
				'range' => [
					'px' => [
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .interactive-card .close-me' => 'right: {{SIZE}}px;',
					'.rtl {{WRAPPER}} .interactive-card .close-me' => 'left: {{SIZE}}px;',
				],
			]
		);

		$this->end_controls_section();
}

protected function render()
{

	$settings = $this->get_settings_for_display();

	// Rear Button Link Target and NoFollow
	$target = $this->get_settings('bwdcfpx_interactive_card_rear_btn_link')['is_external'] ? 'target="_blank"' : '';
	$nofollow = $this->get_settings('bwdcfpx_interactive_card_rear_btn_link')['nofollow'] ? 'rel="nofollow"' : '';

	if (isset($settings['__fa4_migrated']['bwdcfpx_interactive_card_close_button_icon_new']) || empty($settings['bwdcfpx_interactive_card_close_button_icon'])) {
		if (isset($settings['bwdcfpx_interactive_card_close_button_icon_new']['value']['url'])) {
			$icon = Helper::get_render_icon($settings['bwdcfpx_interactive_card_close_button_icon_new']);
		} else {
			$icon = Helper::get_render_icon($settings['bwdcfpx_interactive_card_close_button_icon_new']);
		}
	} else {
		$icon = '<i class="'.$settings['bwdcfpx_interactive_card_close_button_icon'].'"></i>';
	}

	// Youtube FullScreen
	if ('yes' === $settings['bwdcfpx_interactive_card_youtube_video_fullscreen']) : $full_screen = 'allowfullscreen';
	else : $full_screen = '';
	endif;

	$this->add_render_attribute('bwdcfpx-interactive-card', [
		'class'	=> 'interactive-card',
		'data-interactive-card-id'	=> esc_attr($this->get_id()),
		'data-animation'			=> $settings['bwdcfpx_interactive_card_content_animation'],
		'data-animation-time'		=> $settings['bwdcfpx_interactive_card_animation_reveal_time']
	]);

?>

	<div id="interactive-card-<?php echo esc_attr($this->get_id()); ?>" <?php echo 	$this->get_render_attribute_string('bwdcfpx-interactive-card'); ?>>
		<?php if ('text-card' === $settings['bwdcfpx_interactive_card_style']) : ?>
			<div class="bwdcfpx-front-content bwdcfpx-front-text-content">
				<div class="bwdcfpx-image-screen">
					<div class="bwdcfpx-header">
						<?php if ( ! empty( $settings['bwdcfpx_interactive_card_front_panel_counter'] ) ) {
							printf( '<%1$s class="card-number">', $settings['counter_html_tag'] );
							echo $settings['bwdcfpx_interactive_card_front_panel_counter'];
							printf( '</%1$s>', $settings['counter_html_tag'] );
						} ?>
						<?php if (!empty($settings['bwdcfpx_interactive_card_front_panel_title'])) : ?>
							<h2 class="bwdcfpx-title"><?php echo $settings['bwdcfpx_interactive_card_front_panel_title']; ?></h2>
						<?php endif; ?>
					</div>
					<?php if ('content' == $settings['bwdcfpx_interactive_card_text_type']) :  ?>
						<?php if (!empty($settings['bwdcfpx_interactive_card_front_panel_content'])) : ?>
							<div class="bwdcfpx-front-text-body">
								<?php echo $settings['bwdcfpx_interactive_card_front_panel_content']; ?>
							</div>
						<?php endif; ?>
					<?php elseif ('template' == $settings['bwdcfpx_interactive_card_text_type']) : ?>
						<div class="bwdcfpx-front-text-body">
							<?php
							if ( ! empty( $settings['bwdcfpx_primary_templates'] ) ) {
								// WPML Compatibility
								if ( ! is_array( $settings['bwdcfpx_primary_templates'] ) ) {
									$settings['bwdcfpx_primary_templates'] = apply_filters( 'wpml_object_id', $settings['bwdcfpx_primary_templates'], 'wp_template', true );
								}
								echo \Elementor\Plugin::$instance->frontend->get_builder_content( $settings['bwdcfpx_primary_templates'], true );
							}
							?>
						</div>
					<?php endif; ?>
					<?php if (!empty($settings['bwdcfpx_interactive_card_front_panel_btn'])) : ?>
						<div class="bwdcfpx-footer">
							<a href="javascript:;" class="interactive-btn">
								<?php
								if ($settings['bwdcfpx_interactive_card_is_show_front_panel_btn_icon'] == 'yes' && $settings['bwdcfpx_interactive_card_front_panel_btn_icon_alignment'] == 'left') {
									echo '<span class="' . $settings['bwdcfpx_interactive_card_front_panel_btn_icon_alignment'] . ' front-btn-icon"></i>';
									\Elementor\Icons_Manager::render_icon( $settings['bwdcfpx_interactive_card_front_panel_btn_icon'], [ 'aria-hidden' => 'true' ] );
									echo '</span>';
								}
								echo $settings['bwdcfpx_interactive_card_front_panel_btn'];
								if ($settings['bwdcfpx_interactive_card_is_show_front_panel_btn_icon'] == 'yes' && $settings['bwdcfpx_interactive_card_front_panel_btn_icon_alignment'] == 'right') {
									echo '<span class="' . $settings['bwdcfpx_interactive_card_front_panel_btn_icon_alignment'] . ' front-btn-icon"></i>';
									\Elementor\Icons_Manager::render_icon( $settings['bwdcfpx_interactive_card_front_panel_btn_icon'], [ 'aria-hidden' => 'true' ] );
									echo '</span>';
								}
								?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php elseif ('img-card' === $settings['bwdcfpx_interactive_card_style']) : ?>
			<div class="bwdcfpx-front-content">
				<div class="bwdcfpx-image-screen">
					<div class="bwdcfpx-image-screen-overlay"></div>
				</div>
			</div>
		<?php endif; ?>

		<div class="content">
			<span class="close close-me">
				<?php if (is_array($icon) && isset($icon['url'])) : ?>
					<img src="<?php echo esc_url($icon['url']); ?>" class="bwdcfpx-interactive-card-svg-icon" alt="<?php echo esc_attr(get_post_meta($icon['id'], '_wp_attachment_image_alt', true)); ?>" />
				<?php else :
						echo $icon;
					endif; ?>
			</span>
			<?php if ('img-grid' === $settings['bwdcfpx_interactive_card_type']) : ?>
				<div class="bwdcfpx-content-inner">
					<div class="bwdcfpx-text">
						<div class="bwdcfpx-text-inner">
							<?php if (!empty($settings['bwdcfpx_interactive_card_rear_title'])) : ?>
								<h2 class="bwdcfpx-title"><?php echo $settings['bwdcfpx_interactive_card_rear_title']; ?></h2>
							<?php endif; ?>
							<?php if ('content' == $settings['bwdcfpx_interactive_card_rear_text_type']) : ?>
								<?php echo wpautop($settings['bwdcfpx_interactive_card_rear_content']); ?>
							<?php elseif ('template' == $settings['bwdcfpx_interactive_card_rear_text_type']) : ?>
								<?php
								if ( ! empty( $settings['bwdcfpx_primary_rear_templates'] ) ) {
									// WPML Compatibility
									if ( ! is_array( $settings['bwdcfpx_primary_rear_templates'] ) ) {
										$settings['bwdcfpx_primary_rear_templates'] = apply_filters( 'wpml_object_id', $settings['bwdcfpx_primary_rear_templates'], 'wp_template', true );
									}
									echo \Elementor\Plugin::$instance->frontend->get_builder_content( $settings['bwdcfpx_primary_rear_templates'], true );
								}
								?>
							<?php endif; ?>
							<?php if (!empty($settings['bwdcfpx_interactive_card_rear_btn'])) : ?>
								<a href="<?php echo esc_url($settings['bwdcfpx_interactive_card_rear_btn_link']['url']); ?>" <?php echo $target; ?> <?php echo $nofollow; ?> class="interactive-btn">
									<?php
									if ($settings['bwdcfpx_interactive_card_is_show_rear_panel_btn_icon'] == 'yes' && $settings['bwdcfpx_interactive_card_rear_panel_btn_icon_alignment'] == 'left') {
										echo '<span class="' . $settings['bwdcfpx_interactive_card_rear_panel_btn_icon_alignment'] . ' rear-btn-icon"></i>';
										\Elementor\Icons_Manager::render_icon( $settings['bwdcfpx_interactive_card_rear_panel_btn_icon'], [ 'aria-hidden' => 'true' ] );
										echo '</span>';
									}
									echo $settings['bwdcfpx_interactive_card_rear_btn'];
									if ($settings['bwdcfpx_interactive_card_is_show_rear_panel_btn_icon'] == 'yes' && $settings['bwdcfpx_interactive_card_rear_panel_btn_icon_alignment'] == 'right') {
										echo '<span class="' . $settings['bwdcfpx_interactive_card_rear_panel_btn_icon_alignment'] . ' rear-btn-icon"></i>';
										\Elementor\Icons_Manager::render_icon( $settings['bwdcfpx_interactive_card_rear_panel_btn_icon'], [ 'aria-hidden' => 'true' ] );
										echo '</span>';
									}
									?>
								</a>
							<?php endif; ?>
						</div>
					</div>
					<?php if (!empty($settings['bwdcfpx_interactive_card_rear_image'])) : ?>
						<div class="bwdcfpx-image"></div>
					<?php endif; ?>
				</div>
			<?php elseif ('scrollable' === $settings['bwdcfpx_interactive_card_type']) : ?>
				<div class="bwdcfpx-content-overflow">
					<?php if ('content' == $settings['bwdcfpx_interactive_card_rear_text_type']) : ?>
						<?php echo do_shortcode(wp_kses_post($settings['bwdcfpx_interactive_card_rear_custom_code'])); ?>
					<?php elseif ('template' == $settings['bwdcfpx_interactive_card_rear_text_type']) : ?>
						<?php
						if ( ! empty( $settings['bwdcfpx_primary_rear_templates'] ) ) {
							// WPML Compatibility
							if ( ! is_array( $settings['bwdcfpx_primary_rear_templates'] ) ) {
								$settings['bwdcfpx_primary_rear_templates'] = apply_filters( 'wpml_object_id', $settings['bwdcfpx_primary_rear_templates'], 'wp_template', true );
							}
							echo \Elementor\Plugin::$instance->frontend->get_builder_content( $settings['bwdcfpx_primary_rear_templates'], true );
						}
						?>
					<?php endif; ?>
				</div>
			<?php
			elseif ('video' === $settings['bwdcfpx_interactive_card_type']) :
			?>
				<iframe src="<?php echo esc_url(str_replace('watch?v=', 'embed/', $settings['bwdcfpx_interactive_card_youtube_video_url'])); ?>" <?php echo $full_screen; ?>></iframe>
			<?php endif; ?>
		</div>
	</div>
<?php
}

}