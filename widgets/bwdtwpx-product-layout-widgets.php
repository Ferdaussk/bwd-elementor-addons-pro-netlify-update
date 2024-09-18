<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdtwpx_ThreeDProduct_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdtwpx-3D-Product-layout', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( '3D WooCommerce Product Layout', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-woocommerce';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	 // Function to fetch taxonomy terms dynamically
	 protected function bwdthe_get_taxonomy_terms($taxonomy) {
        $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'hide_empty' => true,
        ));

        $options = array();
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $options[$term->term_id] = $term->name;
            }
        }
        return $options;
    }

    protected function register_controls(){

        $this->start_controls_section(
			'bwdtwpx_brand_logo',
			[
				'label' => esc_html__( 'Product Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'bwdtwpx_logo_image',
			[
				'label' => esc_html__( 'Choose Logo', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => BWDEB_PRO_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/image/logo.png',
				],
			]
		);
        $this->add_control(
			'bwdtwpx_background_image',
			[
				'label' => esc_html__( 'Background Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => BWDEB_PRO_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/image/bg.svg',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdtwpx_query',
			[
				'label' => esc_html__( 'Product Filter', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
            'stock_status',
            [
                'label'       => __( 'Select Stock Status', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::SELECT,
                'options'     => [
                    'all'         => __( 'All', BWDEB_ROOT_AUTHOR_PRO ),
                    'in_stock'    => __( 'In Stock', BWDEB_ROOT_AUTHOR_PRO ),
                    'out_of_stock'=> __( 'Out Of Stock', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default'     => 'all',
            ]
        );

		$this->add_control(
            'selected_date',
            [
                'label'       => __( 'Select Date', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::DATE_TIME,
                'description' => __( 'Filter products based on the selected date.', BWDEB_ROOT_AUTHOR_PRO ),
                'default'     => '',
            ]
        );

		$this->add_control(
            'orderby',
            [
                'label'   => __( 'Order By', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'date'       => __( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
                    'title'      => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
                    'rand'       => __( 'Random', BWDEB_ROOT_AUTHOR_PRO ),
                    // Add more options as needed
                ],
                'default' => 'date',
            ]
        );

        $this->add_control(
            'order',
            [
                'label'   => __( 'Order', BWDEB_ROOT_AUTHOR_PRO ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'ASC'  => __( 'Ascending', BWDEB_ROOT_AUTHOR_PRO ),
                    'DESC' => __( 'Descending', BWDEB_ROOT_AUTHOR_PRO ),
                ],
                'default' => 'DESC',
            ]
        );

		$category_options = $this->bwdthe_get_taxonomy_terms('product_cat');
		$category_options = ['' => __('All', BWDEB_ROOT_AUTHOR_PRO)] + $category_options;

		$tag_options = $this->bwdthe_get_taxonomy_terms('product_tag');
		$tag_options = ['' => __('All', BWDEB_ROOT_AUTHOR_PRO)] + $tag_options;

		$this->add_control(
			'selected_category',
			[
				'label'       => __( 'Select Category', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SELECT,
				'options'     => $category_options,
				'default'     => '',
				'description' => __( 'Filter products by the selected category.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'selected_tag',
			[
				'label'       => __( 'Select Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => Controls_Manager::SELECT,
				'options'     => $tag_options,
				'default'     => '',
				'description' => __( 'Filter products by the selected tag.', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
            'included_products',
            [
                'label'       => __( 'Include Products', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::TEXT,
                'description' => __( 'Enter product IDs to include (comma-separated).', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

        $this->add_control(
            'excluded_products',
            [
                'label'       => __( 'Exclude Products', BWDEB_ROOT_AUTHOR_PRO ),
                'type'        => Controls_Manager::TEXT,
                'description' => __( 'Enter product IDs to exclude (comma-separated).', BWDEB_ROOT_AUTHOR_PRO ),
            ]
        );

		$this->end_controls_section();

        $this->start_controls_section(
			'bwdtwpx_responsive_section',
			[
				'label' => esc_html__( 'Responsive Device', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		 $this->add_control(
			'bwdtwpx_important_note',
			[
				'label' => esc_html__( 'Important Note', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Request to you please do not change. It can be a problem to be responsive.', BWDEB_ROOT_AUTHOR_PRO ),
				'content_classes' => 'bwdtwpx-note',
			]
		);

        $this->add_control(
			'bwdtwpx_row_countO',
			[
				'label' => esc_html__( 'Items In Row(600)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:600px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 5,
			]
		);
        $this->add_control(
			'bwdtwpx_row_countT',
			[
				'label' => esc_html__( 'Items In Row(900)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:900px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 7,
			]
		);
        $this->add_control(
			'bwdtwpx_row_countTH',
			[
				'label' => esc_html__( 'Items In Row(1200)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:1200px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 9,
			]
		);
        $this->add_control(
			'bwdtwpx_row_countF',
			[
				'label' => esc_html__( 'Items In Row(1500)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:1500px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 11,
			]
		);
        
        $this->add_control(
			'bwdtwpx_row_countFI',
			[
				'label' => esc_html__( 'Items In Row(1800)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:1800px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 13,
			]
		);
        $this->add_control(
			'bwdtwpx_row_countS',
			[
				'label' => esc_html__( 'Items In Row(2100)', BWDEB_ROOT_AUTHOR_PRO ),
                'description' => __( '@media (min-width:2100px)', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 50,
				'step' => 1,
				'default' => 15,
			]
		);


		$this->end_controls_section();

        $this->start_controls_section(
			'bwdtwpx_style_section',
			[
				'label' => esc_html__( 'Product Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'bwdtwpx_style_imageH',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->add_control(
			'bwdtwpx_style_image_width',
			[
				'label' => esc_html__( 'Image Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
                'default' => [
					'unit' => '%',
					'size' => 62,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtwpx-product-container img' => 'width: {{SIZE}}{{UNIT}}!important; height: auto!important;',
				],
			]
		);
        $this->add_control(
			'bwdtwpx_style_logo_width',
			[
				'label' => esc_html__( 'Logo Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
                'default' => [
					'unit' => '%',
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdtwpx-product-container .li:before' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
			'bwdtwpx_style_titleH',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtwpx_style_title_typography',
				'selector' => '{{WRAPPER}} .bwdtwpx-product-container .bwdtwpx-product-title',
			]
		);
        $this->add_control(
			'bwdtwpx_style_title_t_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtwpx-product-container .bwdtwpx-product-title' => 'color: {{VALUE}}',
				],
			]
		);



        $this->add_control(
			'bwdtwpx_style_priceH',
			[
				'label' => esc_html__( 'Price', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtwpx_style_price_typography',
				'selector' => '{{WRAPPER}} .bwdtwpx-product-container .woocommerce-Price-amount bdi',
			]
		);
        $this->add_control(
			'bwdtwpx_style_price_t_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtwpx-product-container .woocommerce-Price-amount bdi' => 'color: {{VALUE}}',
				],
			]
		);


		$this->end_controls_section();

	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		$stock_status = isset($settings['stock_status']) ? $settings['stock_status'] : 'all';
		$selected_date = isset($settings['selected_date']) ? $settings['selected_date'] : '';
		$orderby = isset($settings['orderby']) ? $settings['orderby'] : 'date';
        $order = isset($settings['order']) ? $settings['order'] : 'DESC';
		$selected_category = isset($settings['selected_category']) ? $settings['selected_category'] : '';
        $selected_tag = isset($settings['selected_tag']) ? $settings['selected_tag'] : '';
		$included_products = isset($settings['included_products']) ? $settings['included_products'] : '';
        $excluded_products = isset($settings['excluded_products']) ? $settings['excluded_products'] : '';
        // Media Query
        $rows_countO = $settings['bwdtwpx_row_countO'];
        $rows_countT = $settings['bwdtwpx_row_countT'];
        $rows_countTH = $settings['bwdtwpx_row_countTH'];
        $rows_countF = $settings['bwdtwpx_row_countF'];
        $rows_countFI = $settings['bwdtwpx_row_countFI'];
        $rows_countS = $settings['bwdtwpx_row_countS'];
        $logo_image_url = !empty($settings['bwdtwpx_logo_image']['url']) ? $settings['bwdtwpx_logo_image']['url'] : '';
        $background_image_url = !empty($settings['bwdtwpx_background_image']['url']) ? $settings['bwdtwpx_background_image']['url'] : '';

        ?>

    <style>
        @media (min-width:600px) {:root {--columns: <?php echo esc_attr($rows_countO); ?>!important;}}
        @media (min-width:900px) {:root {--columns: <?php echo esc_attr($rows_countT); ?>!important;}}
        @media (min-width:1200px) {:root {--columns: <?php echo esc_attr($rows_countTH); ?>!important;}}
        @media (min-width:1500px) {:root {--columns: <?php echo esc_attr($rows_countF); ?>!important;}}
        @media (min-width:1800px) {:root {--columns: <?php echo esc_attr($rows_countFI); ?>!important;}}
        @media (min-width:2100px) {:root {--columns: <?php echo esc_attr($rows_countS); ?>!important;}}
        <?php if(!empty($settings['bwdtwpx_logo_image']['url'])){ ?>
        .bwdtwpx-product-container .li:before {background-image: url('<?php echo esc_url($logo_image_url); ?>');}<?php } ?>
        <?php if(!empty($settings['bwdtwpx_background_image']['url'])){ ?>
        .bwdtwpx-product-container .ul {background-image: url('<?php echo esc_url($background_image_url); ?>');}<?php } ?>
    </style>

        <?php

		$args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'orderby'        => $orderby,
            'order'          => $order,
            // Add more arguments as needed for filtering or sorting the products
        );
		// Modify the query based on included products
        if (!empty($included_products)) {
            $args['post__in'] = array_map('intval', explode(',', $included_products));
        }
        // Modify the query based on excluded products
        if (!empty($excluded_products)) {
            $args['post__not_in'] = array_map('intval', explode(',', $excluded_products));
        }
        // Modify the query based on the chosen stock status
        if ($stock_status !== 'all') {
            $args['meta_query'] = array(
                array(
                    'key'     => '_stock_status',
                    'value'   => $stock_status === 'in_stock' ? 'instock' : 'outofstock',
                    'compare' => '=',
                ),
            );
        }
		// Modify the query to filter by the selected date
        if (!empty($selected_date)) {
            $args['date_query'] = array(
                array(
                    'after'     => date('Y-m-d', strtotime($selected_date)),
                    'inclusive' => true,
                ),
            );
        }
		// Modify the query based on the selected category
        if (!empty($selected_category)) {
            $args['tax_query'][] = array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $selected_category,
            );
        }
        // Modify the query based on the selected tag
        if (!empty($selected_tag)) {
            $args['tax_query'][] = array(
                'taxonomy' => 'product_tag',
                'field'    => 'term_id',
                'terms'    => $selected_tag,
            );
        }

		$products = new \WP_Query( $args );

		if ( $products->have_posts() ) {
			echo '<div class="bwdtwpx-product-container">';
				echo '<div class="products ul">';
				while ( $products->have_posts() ) {
					$products->the_post();
					?>
                        <div class="product li">
                            <div class="div-after-li">
                                    <div class="bwdtwpx-product-title"><?php the_title(); ?></div>
                                    <?php echo wc_price( get_post_meta( get_the_ID(), '_price', true ) ); ?>
                            </div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                        </div>

					<?php
				}
				echo '</div>';
			echo '</div>';
		} else {
			echo 'No products found';
		}
		wp_reset_postdata();



	}

}