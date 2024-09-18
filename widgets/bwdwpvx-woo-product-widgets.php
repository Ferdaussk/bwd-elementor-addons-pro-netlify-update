<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdwpvx_ProductVendors_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdwpvx-product-vendors', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'WooCommerce Product Vendors', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdwpvx-ProductVendors-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

    protected function register_controls() {

        //Start bwdwpvx List General Section.
        $this->start_controls_section(
            'bwdwpvx_general_section', array(
                'label'             => esc_html__('General', BWDEB_ROOT_AUTHOR_PRO),
            )
        );

        //Food Menu Type.
        $this->add_control(
            'bwdwpvx_product_source', [
                'label'             => esc_html__('Food Menu Source', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => bwdwpvx_menu_type(),
                'default'           => 'custom',
            ]
        );

        //Food Menu Design.
        $this->add_control(
            'bwdwpvx_product_layout', [
                'label'                 => esc_html__('Food Menu Layout', BWDEB_ROOT_AUTHOR_PRO),
                'type'                  => \Elementor\Controls_Manager::SELECT,
                'options'               => [
                    '1'   => esc_html__('Design 1', BWDEB_ROOT_AUTHOR_PRO),
                    '2'   => esc_html__('Design 2', BWDEB_ROOT_AUTHOR_PRO),
                    '3'   => esc_html__('Design 3', BWDEB_ROOT_AUTHOR_PRO),
                    '4'   => esc_html__('Design 4', BWDEB_ROOT_AUTHOR_PRO),
                    '5'   => esc_html__('Design 5', BWDEB_ROOT_AUTHOR_PRO),
                    '6'   => esc_html__('Design 6', BWDEB_ROOT_AUTHOR_PRO),
                    '7'   => esc_html__('Design 7', BWDEB_ROOT_AUTHOR_PRO),
                    '8'   => esc_html__('Design 8', BWDEB_ROOT_AUTHOR_PRO),
                    '9'   => esc_html__('Design 9', BWDEB_ROOT_AUTHOR_PRO),
                    '10'  => esc_html__('Design 10', BWDEB_ROOT_AUTHOR_PRO),
                    '11'  => esc_html__('Design 11', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'               => '1',
            ]
        );

        $this->end_controls_section();
        //End bwdwpvx List General Section.

        //Start Grid Options Section.
        $this->start_controls_section(
            'bwdwpvx_grid_option_section', array(
                'label'             => esc_html__('Grid Options', BWDEB_ROOT_AUTHOR_PRO),
            )
        );

        //Grid Columns.
        $this->add_responsive_control(
            'bwdwpvx_grid_columns', [
                'label'             => esc_html__('Grid Columns', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => [
                    'default'       => 'Default',
                    '1'             => '1',
                    '2'             => '2',
                    '3'             => '3',
                    '4'             => '4',
                    '5'             => '5',
                    '6'             => '6',
                ],  
				'desktop_default'   => 'default',
				'tablet_default'    => 'default',
				'mobile_default'    => 'default',
                'prefix_class'      => 'elementor-grid%s-',
                'frontend_available'=> true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-container' => 'grid-template-columns: repeat({{VALUE}},1fr);',
                ],
            ]
        );

        //Grid Column Gap.
        $this->add_responsive_control(
            'bwdwpvx_product_column_gap', [
                'label'              => esc_html__('Grid Column Gap', BWDEB_ROOT_AUTHOR_PRO),
                'type'               => \Elementor\Controls_Manager::SLIDER,
                'default'            => [
                    'size'           => 30,
                ],      
                'range'              => [
                    'px'             => [
                        'min'        => 0,
                        'max'        => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'          => [
                    '{{WRAPPER}} .bwdwpvx-container' => 'grid-column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //Grid Row Gap.
        $this->add_responsive_control(
            'bwdwpvx_product_row_gap', [
                'label'             => esc_html__('Grid Row Gap', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'default'           => [
                    'size'          => 30,
                ],  
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-container' => 'grid-row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //Custom Currency Symbol.
        $this->add_control(
            'bwdwpvx_currency_symbol', [
                'label'             => esc_html__('Currency Symbol', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => [
                    ''              => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO ),
                    'dollar'        => '&#36; ' . _x('Dollar', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'euro'          => '&#128; ' . _x('Euro', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'baht'          => '&#3647; ' . _x('Baht', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'franc'         => '&#8355; ' . _x('Franc', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'guilder'       => '&fnof; ' . _x('Guilder', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'krona'         => 'kr ' . _x('Krona', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'lira'          => '&#8356; ' . _x('Lira', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'peso'          => '&#8369; ' . _x('Peso', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'pound'         => '&#163; ' . _x('Pound Sterling', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'real'          => 'R$ ' . _x('Real', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'ruble'         => '&#8381; ' . _x('Ruble', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'rupee'         => '&#8360; ' . _x('Rupee', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'indian_rupee'  => '&#8377; ' . _x('Rupee (Indian)', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'shekel'        => '&#8362; ' . _x('Shekel', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'yen'           => '&#165; ' . _x('Yen/Yuan', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'won'           => '&#8361; ' . _x('Won', 'Currency', BWDEB_ROOT_AUTHOR_PRO),
                    'bwdwpvx_custom' => esc_html__('Custom', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'           => 'dollar',
                'condition'         => ['bwdwpvx_product_source' => 'custom'],
            ]
        );

        //Custom Currency Text.
        $this->add_control(
            'bwdwpvx_currency_text_symbol', [
                'label'             => esc_html__('Custom Symbol', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXT,
                'condition'         => [
                    'bwdwpvx_currency_symbol' => 'bwdwpvx_custom',
                ],
            ]
        );

        $this->end_controls_section();
        //End Grid Options Section.

        //Start Custom Item Section.
        $this->start_controls_section(
            'bwdwpvx_custom_item_section', array(
                'label'             => esc_html__('Item', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_product_source' => 'custom'],
            )
        );

        //Start Repeater Control.
        $repeater = new \Elementor\Repeater();

        //Custom Title.
        $repeater->add_control(
			'bwdwpvx_title', [
                'label'             => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXT,
                'default'           => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
				'label_block'       => true,
                'dynamic'           => ['active' => true],
			]
		);

        //Custom Content.
        $repeater->add_control(
			'bwdwpvx_list_content', [
				'label'             => esc_html__('Content', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXTAREA,
                'default'           => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisi cing elit sed do eiusmod', BWDEB_ROOT_AUTHOR_PRO),
			]
		);

        //Show Custom Image.
        $repeater->add_control(
            'bwdwpvx_show_custom_image', [
                'label'             => esc_html__('Show Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Custom Image.
        $repeater->add_control(
			'bwdwpvx_image', [
				'label'             => esc_html__('Choose Image', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::MEDIA,
                'dynamic'           => [
					'active'        => true,
				],
				'default'           => [
                    'url'           => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
                'condition'         => ['bwdwpvx_show_custom_image' => 'yes'],
			]
		);

        //Show Custom Icon.
        $repeater->add_control(
            'bwdwpvx_show_custom_icon', [
                'label'             => esc_html__('Show Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'no',
            ]
        );

        //Custom Icon.
        $repeater->add_control(
            'bwdwpvx_icon', [
                'label'             => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::ICONS,
                'default'           => [
                    'value'         => 'fas fa-leaf',
                    'library'       => 'fa-solid',
                ],
                'condition'         => [
                    'bwdwpvx_show_custom_icon' => 'yes',
                ],
            ]
        );

        //Show Label.
        $repeater->add_control(
            'bwdwpvx_show_label', [
                'label'             => esc_html__('Show Label', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Custom Label Text.
        $repeater->add_control(
			'bwdwpvx_label', [
				'label'             => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_label' => 'yes'],
			]
		);

        //Custom Regular Price.
        $repeater->add_control(
			'bwdwpvx_regular_price', [
                'label'             => esc_html__('Regular Price', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXT,
                'default'           => 12,
			]
		);

        //Custom Sale Price.
        $repeater->add_control(
			'bwdwpvx_sale_price', [
                'label'             => esc_html__('Sale Price', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::TEXT,
                'default'           => 8,
			]
		);

        //Show Button.
        $repeater->add_control(
            'bwdwpvx_show_btn', [
                'label'             => esc_html__('Show Button', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Custom Button Text.
        $repeater ->add_control(
			'bwdwpvx_button', [
				'label'             => esc_html__('Button Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'dynamic'           => ['active' => true],
				'default'           => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_btn' => 'yes'],
			]
		);

        //Button Link.
        $repeater->add_control(
			'bwdwpvx_link', [
				'label'              => esc_html__('Link', BWDEB_ROOT_AUTHOR_PRO),
				'type'               => \Elementor\Controls_Manager::URL,
				'dynamic'            => [
					'active'         => true,
				],
				'placeholder'        => esc_html__('https://your-link.com', BWDEB_ROOT_AUTHOR_PRO),
				'default'            => [
					'url'            => '#',
				],
                'condition'         => ['bwdwpvx_show_btn' => 'yes'],			
			]
		);

        //Show Customer Rating.
        $repeater->add_control(
            'bwdwpvx_show_customer_rating', [
                'label'             => esc_html__('Show Customer Rating', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Custom Customer Rating.
        $repeater->add_control(
            'bwdwpvx_customer_rating', [
                'label'             => esc_html__('Customer Rating', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => [
                    '1'             => '1',
                    '2'             => '2',
                    '3'             => '3',
                    '4'             => '4',
                    '5'             => '5',
                ],
                'default'           => '3',
                'description'       => esc_html__('Select your rating.', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_customer_rating' => 'yes'],
            ]
        );

        //Show Highlight Product.
        $repeater->add_control(
            'bwdwpvx_show_highlight', [
                'label'             => esc_html__('Show Highlight Product', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'no',
            ]
        );

        //Custom Repeater Item Default.
        $this->add_control(
			'bwdwpvx_lists', [
				'label'             => esc_html__('List Item', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::REPEATER,
                'fields'            => $repeater->get_controls(),
                'default'           => [
                    [
                        'bwdwpvx_title'   => esc_html__('List One', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bwdwpvx_title'   => esc_html__('List Two', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                    [
                        'bwdwpvx_title'   => esc_html__('List Three', BWDEB_ROOT_AUTHOR_PRO),
                    ],
                ],
                'title_field'            => '{{{ bwdwpvx_title }}}'
			]
        );   

        $this->end_controls_section();
        //End Custom Item Section.

        //Start WooCommerce Item Section.
        $this->start_controls_section(
            'bwdwpvx_woo_item_section', array(
                'label'             => esc_html__('Item', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_product_source' => 'woocommerce'],
            )
        );

        //No. of Product.
        $this->add_control(
            'bwdwpvx_number_of_products', [
                'label'             => esc_html__('Display No. of Product', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::NUMBER,
				'min'               => 1,
				'max'               => 100,
				'step'              => 1,
				'default'           => 10,
            ]
        );

        //WooCommerce Show Image.
        $this->add_control(
            'bwdwpvx_show_image', [
                'label'             => esc_html__('Show Image', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
                'separator'         => 'before',
            ]
        );

        //WooCommerce Image Size.
        $this->add_group_control(
            \Elementor\Group_Control_Image_Size::get_type(), [
                'name'              => 'bwdwpvx_product_image_size',
                'exclude'           => ['custom'],
                'default'           => 'medium',
                'condition'         => ['bwdwpvx_show_image' => 'yes'],
            ]
        );

        //WooCommerce Show Title.
        $this->add_control(
            'bwdwpvx_show_title', [
                'label'             => esc_html__('Show Title', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'separator'         => 'before',
                'default'           => 'yes',
            ]
        );

        //WooCommerce Show Description.
        $this->add_control(
            'bwdwpvx_show_description', [
                'label'             => esc_html__('Show Description', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'options'           => [
                    'none'          => esc_html__('None', BWDEB_ROOT_AUTHOR_PRO),
                    'short'         => esc_html__('Short', BWDEB_ROOT_AUTHOR_PRO),
					'full'          => esc_html__('Full', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default'           => 'short',
                'separator'         => 'after',
            ]
        );

        //WooCommerce Show Regular Price.
        $this->add_control(
            'bwdwpvx_show_regular_price', [
                'label'             => esc_html__('Show Regular Price', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //WooCommerce Show Sale Price.
        $this->add_control(
            'bwdwpvx_show_sale_price', [
                'label'             => esc_html__('Show Sale Price', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //WooCommerce Show Rating.
        $this->add_control(
            'bwdwpvx_show_rating', [
                'label'             => esc_html__('Show Rating', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //WooCommerce Sale Label Title.
        $this->add_control(
            'bwdwpvx_sale', [
                'label'             => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::HEADING,
                'separator'         => 'before',
            ]   
        );

        //WooCommerce Show Sale Label.
        $this->add_control(
            'bwdwpvx_show_label', [
                'label'             => esc_html__('Sale Label', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
                'separator'         => 'before',
            ]
        );

        //WooCommerce Sale Label Text.
        $this->add_control(
			'bwdwpvx_sale_label', [
				'label'             => esc_html__('Sale Label Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Sale', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_label' => 'yes'],
			]
		);

        //WooCommerce Button Label.
        $this->add_control(
            'bwdwpvx_button', [
                'label'             => esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::HEADING,
                'separator'         => 'before',
            ]
        );

        //Show Cart Button.
        $this->add_control(
            'bwdwpvx_show_cart_button', [
                'label'             => esc_html__('Show Cart Button', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
                'separator'         => 'before',
            ]
        );

        //Show Custom Button.
        $this->add_control(
            'bwdwpvx_show_custom_button', [
                'label'             => esc_html__('Show Custom Button', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Show', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('Hide', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
                'condition'         => ['bwdwpvx_show_cart_button' => 'yes'],
            ]
        );

        //Simple Product Text.
        $this->add_control(
			'bwdwpvx_simple_button_text', [
				'label'             => esc_html__('Simple Product Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_custom_button' => 'yes'],
			]   
		);

        //Grouped Product Text.
        $this->add_control(
			'bwdwpvx_grouped_button_text', [
				'label'             => esc_html__('Grouped Product Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_custom_button' => 'yes'],
			]
		);

        //External/Affiliate Button Text.
        $this->add_control(
			'bwdwpvx_external_button_text', [
				'label'             => esc_html__('External/Affiliate Button Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_custom_button' => 'yes'],
			]
		);

        //Variable Product Text.
        $this->add_control(
			'bwdwpvx_variable_button_text', [
				'label'             => esc_html__('Variable Product Text', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::TEXT,
				'default'           => esc_html__('Order Now', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_show_custom_button' => 'yes'],
			]
		);

        $this->end_controls_section();
        //End WooCommerce Item Section.

        //Start Products Query Section.
        $this->start_controls_section(
            'bwdwpvx_product_query_section', array(
                'label'             => esc_html__('Products Query', BWDEB_ROOT_AUTHOR_PRO),
                'condition'         => ['bwdwpvx_product_source' => 'woocommerce'],
            )
        );

        //Product Source.
        $this->add_control(
            'apcw_product_source', [
                'label'         => esc_html__('Product Source', BWDEB_ROOT_AUTHOR_PRO),
                'label_block'   => true,
                'type'          => \Elementor\Controls_Manager::SELECT,
                'default'       =>  'select',
                'multiple'      => true,
                'options'       => [
                    'select'                => esc_html__('Select', BWDEB_ROOT_AUTHOR_PRO ),
					'recent-products'       => esc_html__('Recent Products', BWDEB_ROOT_AUTHOR_PRO ),
					'featured-products'     => esc_html__('Featured Products', BWDEB_ROOT_AUTHOR_PRO ),
                    'best-selling-products' => esc_html__('Best Selling Products', BWDEB_ROOT_AUTHOR_PRO ),
                    'sale-products'         => esc_html__('Sale Products', BWDEB_ROOT_AUTHOR_PRO ),
                    'top-products'          => esc_html__('Top Rated Products', BWDEB_ROOT_AUTHOR_PRO ),
				],
            ]
        );

        //Include Categories.
        $this->add_control(
            'bwdwpvx_product_categories', [
                'label'             => esc_html__('Product Categories', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT2,
                'label_block'       => true,
                'multiple'          => true,
                'description'       => esc_html__('Select the categories you want to show', BWDEB_ROOT_AUTHOR_PRO),
                'separator'         => 'before',
                'options'           => bwdwpvx_product_categories(),
            ]
        );

        //Exclude Categories.
        $this->add_control(
            'bwdwpvx_exclude_product_categories', [
                'label'             => esc_html__('Exclude Above Categories', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('No', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Include Tags.
        $this->add_control(
            'bwdwpvx_product_tags', [
                'label'             => esc_html__('Product Tags', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT2,
                'label_block'       => true,
                'multiple'          => true,
                'description'       => esc_html__('Select the tags you want to show', BWDEB_ROOT_AUTHOR_PRO),
                'options'           => bwdwpvx_product_tags(),
                'separator'         => 'before',
            ]
        );

        //Exclude Tags.
        $this->add_control(
            'bwdwpvx_exclude_product_tags', [
                'label'             => esc_html__('Exclude Above Tags', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SWITCHER,
                'label_on'          => esc_html__('Yes', BWDEB_ROOT_AUTHOR_PRO),
                'label_off'         => esc_html__('No', BWDEB_ROOT_AUTHOR_PRO),
                'default'           => 'yes',
            ]
        );

        //Product Order By.
        $this->add_control(
            'bwdwpvx_product_orderby', [
                'label'             => esc_html__('Order By', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'default'           => 'date',
                'options'           => [
                'date'              => esc_html__('Date', BWDEB_ROOT_AUTHOR_PRO),
                'title'             => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'menu_order'        => esc_html__('Menu Order', BWDEB_ROOT_AUTHOR_PRO),
                'rand'              => esc_html__('Random', BWDEB_ROOT_AUTHOR_PRO),
                'ID'                => esc_html__('Post ID', BWDEB_ROOT_AUTHOR_PRO),
                'author'            => esc_html__('Author', BWDEB_ROOT_AUTHOR_PRO),
                'rating'            => esc_html__('Rating', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

        //Product Sort By.
        $this->add_control(
            'bwdwpvx_product_sort_order', [
                'label'             => esc_html__('Sort By', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'default'           => 'desc',
                'options'           => [
                    'asc'           => esc_html__('ASC', BWDEB_ROOT_AUTHOR_PRO),
                    'desc'          => esc_html__('DESC', BWDEB_ROOT_AUTHOR_PRO),
                ],
            ]
        );

        $this->end_controls_section();
        //End Products Query Section.
        //End Content Section

        //Style Section Start.
        //Start Item Style.
        $this->start_controls_section(
            'bwdwpvx_item_style', [
                'label'             => esc_html__('Item', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Item Background Color.
        $this->add_control( 
            'bwdwpvx_item_bg_color', [
                'label'             => esc_html__('Item Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-content-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        //Item Highlight Background Color.
        $this->add_control( 
            'bwdwpvx_highlight_bg_color', [
                'label'             => esc_html__('Highlight Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content' => 'background-color: {{VALUE}} !important;',
                ],
                'condition'         => ['bwdwpvx_product_source' => 'custom'],
            ]
        );

        //Item Highlight Border Color.
        $this->add_control(
            'bwdwpvx_highlight_border_color', [
                'label'             => esc_html__('Highlight Border Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '#ea1f2e',
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-highlight,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-item-container.bwdwpvx-highlight .bwdwpvx-content' => 'border-color: {{VALUE}} !important;',
                    '{{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-highlight.bwdwpvx-item-container::before' => 'background-color: {{VALUE}} !important;',
                ],
                'condition'         => ['bwdwpvx_product_source' => 'custom'],
            ]
        );

        //Item Divider Color.
        $this->add_control(
            'bwdwpvx_divider_color', [
                'label'             => esc_html__('Divider Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container::before' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container' => 'border-top-color: {{VALUE}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['10'],
                ]
            ]
        );

        //Item Divider Width.
        $this->add_control(
			'bwdwpvx_devider-width', [
                'label'             => esc_html__('Item Divider Width', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::SLIDER,
				'size_units'        => [ 'px' ],
				'range'             => [
					'px'            => [
						'min'       => 0,
						'max'       => 10,
						'step'      => 1,
					],
				],
				'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container::before' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container' => 'border-top-width: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['10'],
                ]
			]
		);

        //Item Border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_item_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-content-wrapper,
                {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-content',
            ]
        );

        //Item Box Shadow.
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(), [
                'name'              => 'bwdwpvx_box_shadow',
                'selector'          => '{{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-content-wrapper,
                {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container,
                {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-content',
            ]
        );

        //Item Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_item_border_radius', [
                'label'             => esc_html__('Item Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-content,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-content-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Item Padding.
        $this->add_responsive_control(
            'bwdwpvx_item_padding', [
                'label'             => esc_html__('Item Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-item-container,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['5', '8'],
                ]
            ]
        );

        //Item Content Padding.
        $this->add_responsive_control(
            'bwdwpvx_content_padding', [
                'label'             => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2', '3', '4', '5', '6', '7','8','10','11'],
                ]
            ]
        );

        //Item Content Padding.
        $this->add_responsive_control(
            'bwdwpvx_content_wrapper_padding', [
                'label'             => esc_html__('Content Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'default'           => [
                    'top'           => '20',
                    'right'         => '20',
                    'bottom'        => '20',
                    'left'          => '20',
                    'isLinked'      => true,
                ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-content-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['9'],
                ]
            ]
        );

        //Content Alignment.
        $this->add_responsive_control(
            'bwdwpvx_content_align', [
                'label'             => esc_html__('Alignment', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::CHOOSE,
                'options'           => [
                    'left'          => [
                        'title'     => esc_html__('Left', BWDEB_ROOT_AUTHOR_PRO),
                        'icon'      => 'eicon-text-align-left',
                    ],
                    'center'        => [
                        'title'     => esc_html__('Center', BWDEB_ROOT_AUTHOR_PRO),
                        'icon'      => 'eicon-text-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__('Right', BWDEB_ROOT_AUTHOR_PRO),
                        'icon'      => 'eicon-text-align-right',
                    ],
                ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-content' => 'text-align: {{VALUE}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['2', '3', '4', '6', '7','8', '11'],
                ]
            ]
        );

        $this->end_controls_section();
        //End Item Style.

        //Start Category Style.
        $this->start_controls_section(
            'bwdwpvx_category_style', [
                'label'             => esc_html__('Category', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'         => ['bwdwpvx_product_source' => 'woocommerce'],
            ]
        );

        //Category Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'category_typography',
				'selector'          => '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category',
			]
		);

        //Category Color.
        $this->add_control( 
            'bwdwpvx_category_color', [
                'label'             => esc_html__('Category Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Category Background Color.
        $this->add_control( 
            'bwdwpvx_category_bg_color', [
                'label'             => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        //Category Border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_category_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category',
            ]
        );

        //Category Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_category_border_radius', [
                'label'             => esc_html__('Category Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Category Padding.
        $this->add_responsive_control(
            'bwdwpvx_category_padding', [
                'label'             => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Category Spacing.
        $this->add_responsive_control(
            'bwdwpvx_category_spacing', [
                'label'             => esc_html__('Category Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-category' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        //End Category Style.

        //Start Tag Style.
        $this->start_controls_section(
            'bwdwpvx_tag_style', [
                'label'             => esc_html__('Tag', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
                'condition'         => ['bwdwpvx_product_source' => 'woocommerce'],
            ]
        );

        //Tag Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'bwdwpvx_tag_typography',
				'selector'          => '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag',
			]
		);

        //Tag Color.
        $this->add_control( 
            'bwdwpvx_tag_color', [
                'label'             => esc_html__('Tag Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Tag Background Color.
        $this->add_control( 
            'bwdwpvx_tag_bg_color', [
                'label'             => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        //Tag Border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_tag_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag',
            ]
        );

        //Tag Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_tag_border_radius', [
                'label'             => esc_html__('Tag Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Tag Padding.
        $this->add_responsive_control(
            'bwdwpvx_tag_padding', [
                'label'             => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Tag Spacing.
        $this->add_responsive_control(
            'bwdwpvx_tag_spacing', [
                'label'             => esc_html__('Tag Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'          => [
                    '{{WRAPPER}} .bwdwpvx-cat-tag-title .bwdwpvx-tag' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        //End Tag Style.

        //Start Image Style.
        $this->start_controls_section(
            'bwdwpvx_image_style', [
                'label'             => esc_html__('Image', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Image Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_image_border_radius', [
                'label'             => esc_html__('Image Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-image img,
                    {{WRAPPER}} .bwdwpvx-woocommerce .bwdwpvx-img img,
                    {{WRAPPER}} .bwdwpvx-design-1 .bwdwpvx-img-icon-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container:hover .bwdwpvx-image:after,
                    {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-item-container:hover .bwdwpvx-layout-img:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2','4', '5', '7','9', '11'],
                ]
            ]
        );

        //Image Border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_image_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-item-container .bwdwpvx-img-wrapper,
                {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-image img,
                {{WRAPPER}} .bwdwpvx-design-2 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-layout-img,
                {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-layout-img img,
                {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-layout-img img',
                'condition'         => [
                    'bwdwpvx_product_layout' => ['2', '3', '4', '5', '6', '7', '8','9', '10', '11'],
                ]
            ]
        );

        //Image Padding.
        $this->add_responsive_control(
            'bwdwpvx_image_padding', [
                'label'             => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-image,
                    {{WRAPPER}} .bwdwpvx-design-10 .bwdwpvx-img-icon-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['4','10'],
                ],
            ]   
        );

        //Image Width.
        $this->add_responsive_control(
            'bwdwpvx_image_width', [
                'label'             => esc_html__('Image Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'size_units'        => [ 'px', '%' ],
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 400,
                    ],
                    '%' => [
						'min' => 0,
						'max' => 100,
					],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-layout-img .bwdwpvx-image img,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-image img,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-img-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-8 .bwdwpvx-woocommerce .bwdwpvx-layout-img,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-img-icon-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-layout-img'  => 'max-width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper,
                    {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img,
                    {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img img,
                    {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper img,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-image img,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-woocommerce .bwdwpvx-img img,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-image img,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-woocommerce .bwdwpvx-img img'  => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2', '4', '5','7','8', '9', '10', '11'],
                ]
            ]
        );

        //Image Width.
//         $this->add_responsive_control(
//             'bwdwpvx_image_height', [
//                 'label'             => esc_html__('Image Height', BWDEB_ROOT_AUTHOR_PRO),
//                 'type'              => \Elementor\Controls_Manager::SLIDER,
//                 'size_units'        => [ 'px', '%' ],
//                 'range'             => [
//                     'px'            => [
//                         'min'       => 0,
//                         'max'       => 400,
//                     ],
//                     '%' => [
// 						'min' => 0,
// 						'max' => 100,
// 					],
//                 ],
//                 'frontend_available' => true,
//                 'selectors'         => [
//                     '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-wrapper,
//                     {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-woocommerce .bwdwpvx-layout-img' => 'height: {{SIZE}}{{UNIT}};',
//                     '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-layout-img .bwdwpvx-image img,
//                     {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-image img'  => 'height: {{SIZE}}{{UNIT}};',
//                     '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper,
//                     {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img,
//                     {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img .bwdwpvx-img img,
//                     {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper img,
//                     {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-image img,
//                     {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-woocommerce .bwdwpvx-img img,
//                     {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-image img,
//                     {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-woocommerce .bwdwpvx-img img'  => 'height: {{SIZE}}{{UNIT}};',
//                 ],
//                 'condition'         => [
//                     'bwdwpvx_product_layout' => ['1', '2', '4', '5','7','8', '9', '10', '11'],
//                 ]
//             ]
//         );

		 $this->add_responsive_control(
            'bwdwpvx_image_height', [
                'label'             => esc_html__('Image Height', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'size_units'        => [ 'px', '%' ],
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 400,
                    ],
                    '%' => [
						'min' => 0,
						'max' => 100,
					],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-wrapper,
                    {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-woocommerce .bwdwpvx-layout-img' => 'height: {{SIZE}}{{UNIT}};',

                    '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-layout-img .bwdwpvx-image,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-image'  => 'height: {{SIZE}}{{UNIT}};',

                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper,
                    {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img,
                    {{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-layout-img .bwdwpvx-img,
                    {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-img-icon-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-image,
                    {{WRAPPER}} .bwdwpvx-design-4 .bwdwpvx-woocommerce .bwdwpvx-img,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-image,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-woocommerce .bwdwpvx-img'  => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2', '4', '5','7','8', '9', '10', '11'],
                ]
            ]
        );
		
        $this->end_controls_section();
        //End Box Style.

        //Start Title Style.
        $this->start_controls_section(
            'bwdwpvx_title_style', [
                'label'             => esc_html__('Title', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Title Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'bwdwpvx_title_typography',
				'selector'          => '{{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-title a,
                {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-title',
			]
		);

        //Title Color.
        $this->add_control( 
            'bwdwpvx_title_color', [
                'label'             => esc_html__('Title Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container.bwdwpvx-woocommerce .bwdwpvx-title a,
                {{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Title Spacing.
        $this->add_responsive_control(
            'bwdwpvx_title_spacing', [
                'label'             => esc_html__('Title Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-title-price-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-5 .bwdwpvx-title-wrapper,
                    {{WRAPPER}} .bwdwpvx-design-7 .bwdwpvx-title-wrapper' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2', '3', '4', '6', '7','8'],
                ]
            ]
        );

        //Title Spacing.
        $this->add_responsive_control(
            'bwdwpvx_title_odd_spacing', [
                'label'             => esc_html__('Title Spacing (odd)', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 200,
                    ],
                ],
                'default'   => [
					'unit'  => 'px',
					'size'  => 20,
				],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-container .bwdwpvx-design-9:nth-child(odd) .bwdwpvx-title-wrapper ' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['9'],
                ]
            ]
        );

        //Title Spacing.
        $this->add_responsive_control(
            'bwdwpvx_title_even_spacing', [
                'label'             => esc_html__('Title Spacing (even)', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 200,
                    ],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-container .bwdwpvx-design-9:nth-child(even) .bwdwpvx-title-wrapper ' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['9'],
                ]
            ]
        );

        //Dotted Separator Color.
        $this->add_control( 
            'bwdwpvx_separator_color', [
                'label'             => esc_html__('Dotted Separator Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-separator' => 'border-color: {{VALUE}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '2', '3', '4', '6', '8' ],
                ]
            ]
        );

        $this->end_controls_section();
        //End Title Style.

        //Start Description Style.
        $this->start_controls_section(
            'bwdwpvx_description_style', [
                'label'             => esc_html__('Description', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Description Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'bwdwpvx_description_typography',
				'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-description p',
			]
		);

        //Description Text Color.
        $this->add_control( 
            'bwdwpvx_description_color', [
                'label'             => esc_html__('Description Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-description p' => 'color: {{VALUE}};',
                ],
            ]
        );

//         //Description Spacing.
//         $this->add_responsive_control(
//             'bwdwpvx_description_spacing', [
//                 'label'             => esc_html__('Description Spacing', BWDEB_ROOT_AUTHOR_PRO),
//                 'type'              => \Elementor\Controls_Manager::SLIDER,
//                 'range'             => [
//                     'px'            => [
//                         'min'       => 0,
//                         'max'       => 100,
//                     ],
//                 ],
//                 'frontend_available' => true,
//                 'selectors'          => [
//                     '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-description' => 'margin-top: {{SIZE}}{{UNIT}};',
//                 ],
//                 'condition'         => [
//                     'bwdwpvx_product_layout' => ['1', '2', '3', '4', '6', '7', '8', '9', '10', '11'],
//                 ]
//             ]
//         );

//         //Description Spacing.
//         $this->add_responsive_control(
//             'bwdwpvx_description_style_spacing', [
//                 'label'             => esc_html__('Description Spacing', BWDEB_ROOT_AUTHOR_PRO),
//                 'type'              => \Elementor\Controls_Manager::SLIDER,
//                 'range'             => [
//                     'px'            => [
//                         'min'       => 0,
//                         'max'       => 100,
//                     ],
//                 ],
//                 'frontend_available' => true,
//                 'selectors'          => [
//                     '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-description p' => 'margin-left: {{SIZE}}{{UNIT}};',
//                 ],
//                 'condition'         => [
//                     'bwdwpvx_product_layout' => ['5' ],
//                 ]
//             ]
//         );

		 $this->add_control(
			'bwdwpvx_description_spacing_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
        $this->end_controls_section();
        //End Description Style.

        //Start Price Style.
        $this->start_controls_section(
            'bwdwpvx_price_style', [
                'label'             => esc_html__('Price', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Currency Symbol Position.
        $this->add_control(
			'bwdwpvx_currency_position', [
				'label'             => esc_html__('Currency Symbol Position', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::CHOOSE,
				'default'           => 'before',
				'options'           => [
					'before'        => [
						'title'     => esc_html__('Before', BWDEB_ROOT_AUTHOR_PRO),
						'icon'      => 'eicon-h-align-left',
					],
					'after'         => [
						'title'     => esc_html__('After', BWDEB_ROOT_AUTHOR_PRO),
						'icon'      => 'eicon-h-align-right',
					],
				],
                'condition'         => ['bwdwpvx_product_source' => 'custom'],
			]
		);

        //Regular Price Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'bwdwpvx_regular_price_typography',
                'label'             => esc_html__('Regular Price Typography', BWDEB_ROOT_AUTHOR_PRO),
				'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-regular-price',
			]
		);

        //Regular Price Color.
        $this->add_control( 
            'bwdwpvx_regular_color', [
                'label'             => esc_html__('Regular Price Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-regular-price' => 'color: {{VALUE}};',
                ],
            ]
        );

        // Price Color.
		$this->add_control(
			'bwdwpvx_price_line_color', [
				'label'         	=> esc_html__('Price Line Through', BWDEB_ROOT_AUTHOR_PRO),
				'type'          	=> \Elementor\Controls_Manager::COLOR,
				'selectors'     	=> [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-line' => 'text-decoration-color: {{VALUE}};',
				],
			]
		);

		// Title Spacing.
		$this->add_responsive_control(
			'bwdwpvx_line_width', [
				'label' 			=> esc_html__('Price Line Through Width', BWDEB_ROOT_AUTHOR_PRO),
				'type' 				=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 		=> ['px'],
				'range'				=> [
					'px' 			=> [
						'min' 		=> 0,
						'max' 		=> 10,
						'step' 		=> 1,
					],
				],
				'default' 			=> [
					'unit' 			=> 'px',
					'size' 			=> 1,
				],
				'selectors' 		=> [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-line' => 'text-decoration-thickness: {{SIZE}}{{UNIT}};',
				],
			]
		);

        //Sale Price Typography.
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'              => 'bwdwpvx_sale_price_typography',
                'label'             => esc_html__('Sale Price Typography', BWDEB_ROOT_AUTHOR_PRO),
				'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-sale-price',
			]
		);

        //Sale Price Color.
        $this->add_control( 
            'bwdwpvx_sale_color', [
                'label'             => esc_html__('Sale Price Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-sale-price' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Price Background Color.
        $this->add_control( 
            'bwdwpvx_price_bg_color', [
                'label'             => esc_html__('Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '#FFFFFF',
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-all-price' => 'background-color: {{VALUE}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['11'],
                ]
            ]
        );

        //Price Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_price_border_radius', [
                'label'             => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-all-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['11'],
                ]
            ]
        );

        //Price Padding.
        $this->add_responsive_control(
            'bwdwpvx_price_padding', [
                'label'             => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-all-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['11'],
                ]
            ]
        );

        //Price border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_price_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-all-price',
                'condition'         => [
                    'bwdwpvx_product_layout' => ['11'],
                ]
            ]
        );

        //Price Spacing.
        $this->add_responsive_control(
            'bwdwpvx_price_spacing', [
                'label'             => esc_html__('Price Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'default'           => [
					'unit'          => 'px',
					'size'          => 5,
				],
                'frontend_available' => true,
                'selectors'          => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-sale-price' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        //End Price Style.

        //Start Button Style.
        $this->start_controls_section(
            'bwdwpvx_button_style', [
                'label'             => esc_html__('Button', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Button Typography.
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name'              => 'bwdwpvx_button_typography',
                'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button-text',
            ]
        );

        //Button Spacing.
        $this->add_responsive_control(
            'bwdwpvx_button_spacing', [
                'label'             => esc_html__('Button Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'          => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //Start Button Tab.
        $this->start_controls_tabs('bwdwpvx_button_color_tabs');

        //Start Normal Button Tab.
        $this->start_controls_tab('bwdwpvx_normal_button', [
            'label'                 => esc_html__('Normal', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        //Button Text Color.
        $this->add_control(
            'bwdwpvx_button_color', [
                'label'             => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Button Background Color.
        $this->add_control(
            'bwdwpvx_button_bg_color', [
                'label'             => esc_html__('Button Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        //End Normal Button Tab.

        //Start Hover Button Tab.
        $this->start_controls_tab('bwdwpvx_hover_button', [
            'label'                 => esc_html__('Hover', BWDEB_ROOT_AUTHOR_PRO),
            ]
        );

        //Button Text Color.
        $this->add_control(
            'bwdwpvx_button_color_hover', [
                'label'             => esc_html__('Text Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Button Background Color.
        $this->add_control(
            'bwdwpvx_button_bg_color_hover', [
                'label'             => esc_html__('Button Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        //Button border.
        $this->add_control(
            'bwdwpvx_border_color_hover', [
                'label'             => esc_html__('Border Hover Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        //End Hover Button Tab.

        $this->end_controls_tabs();
        //End Button Tab.

        //Button border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_button_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text',
            ]
        );

        //Button Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_border_radius', [
                'label'             => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Button Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_button_padding', [
                'label'             => esc_html__('Button Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-button .bwdwpvx-button-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        //End Button Style.

        //Start Icon Style.
        $this->start_controls_section(
            'bwdwpvx_icon_style', [
                'label'             => esc_html__('Icon', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Icon Size.
        $this->add_responsive_control(
			'bwdwpvx_icon_size', [
				'label'             => esc_html__('Icon Size', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::SLIDER,
				'size_units'        => [ 'px', '%' ],
				'range'             => [
					'px'            => [
						'min'       => 0,
						'max'       => 100,
						'step'      => 1,
					],
				],
                'default'           => [
                    'size'          => 14,
					'unit'          => 'px',
                ],
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon svg' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
				],
			]
		);

        //Icon Color.
        $this->add_control(
			'bwdwpvx_icon_color', [
				'label'             => esc_html__('Icon Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '#ffffff',
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon svg' => 'fill:{{VALUE}}',
				],
			]
		);

        //Icon Background Color.
        $this->add_control(
			'bwdwpvx_icon_background_color', [
				'label'             => esc_html__('Icon Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::COLOR,
                'default'           => '#ea1f2e',
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon' => 'background-color: {{VALUE}} !important;',
				],
			]
		);

        //Icon border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_icon_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon',
            ]
        );

        //Icon Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_icon_border_radius', [
                'label'             => esc_html__('Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //Icon Padding.
        $this->add_responsive_control(
            'bwdwpvx_icon_padding', [
                'label'             => esc_html__('Icon Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        //End Icon Style.

        //Start Rating Style.
        $this->start_controls_section(
            'bwdwpvx_rating_style', [
                'label'             => esc_html__('Rating', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Rating Spacing.
        $this->add_responsive_control(
            'bwdwpvx_rating_spacing', [
                'label'             => esc_html__('Rating Spacing', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::SLIDER,
                'range'             => [
                    'px'            => [
                        'min'       => 0,
                        'max'       => 100,
                    ],
                ],
                'frontend_available' => true,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-rating,
                    {{WRAPPER}} .bwdwpvx-woocommerce .bwdwpvx-star-rating' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //Rating Size.
        $this->add_control(
			'bwdwpvx_rating_size', [
				'label'             => esc_html__('Rating Size', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::SLIDER,
				'size_units'        => [ 'px', '%' ],
				'range'             => [
					'px'            => [
						'min'       => 0,
						'max'       => 100,
						'step'      => 1,
					],
				],
                'default'           => [
                    'size'          => 14,
					'unit'          => 'px',
                ],
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-rating i,
                    {{WRAPPER}} .bwdwpvx-woocommerce .bwdwpvx-star-rating' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

        //Rating Color.
        $this->add_control(
			'bwdwpvx_rating_color', [
				'label'             => esc_html__('Rating Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::COLOR,
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-rating .star,
                    {{WRAPPER}} .bwdwpvx-woocommerce .bwdwpvx-star-rating::before' => 'color: {{VALUE}};',
				],
			]
		);

        //Rating Fill Color.
        $this->add_control(
			'bwdwpvx_rating_fill_color', [
				'label'             => esc_html__('Rating Fill Color', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::COLOR,
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-rating .star-fill,
                    {{WRAPPER}} .bwdwpvx-woocommerce .bwdwpvx-star-rating span' => 'color: {{VALUE}};',
				],
			]
		);

        $this->end_controls_section();
        //End Rating Style.

        //Start Label Style.
        $this->start_controls_section(
            'bwdwpvx_label_style', [
                'label'             => esc_html__('Label', BWDEB_ROOT_AUTHOR_PRO),
                'tab'               => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //Label Typography.
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), [
                'name'              => 'bwdwpvx_label_typography',
                'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label,
                {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-label',
            ]
        );

        //Label Color.
        $this->add_control( 
            'bwdwpvx_label_color', [
                'label'             => esc_html__('Label Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label,
                    {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-label' => 'color: {{VALUE}};',
                ],
            ]
        );

        //Label Background Color.
        $this->add_control( 
            'bwdwpvx_label_bg_color', [
                'label'             => esc_html__('Label Background Color', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::COLOR,
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label,
                    {{WRAPPER}} .bwdwpvx-design-3 .bwdwpvx-label::after,
                    {{WRAPPER}} .bwdwpvx-design-6 .bwdwpvx-label,
                    {{WRAPPER}} .bwdwpvx-design-11 .bwdwpvx-label::after' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        //Label Border.
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(), [
                'name'              => 'bwdwpvx_label_border',
                'selector'          => '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label',
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '9'],
                ]
            ]
        );

        //Label Border Radius.
        $this->add_responsive_control(
            'bwdwpvx_label_border_radius', [
                'label'             => esc_html__('Label Border Radius', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout' => ['1', '9'],
                ]
            ]
        );

        //Label Padding.
        $this->add_responsive_control(
            'bwdwpvx_label_padding', [
                'label'             => esc_html__('Label Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type'              => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units'        => [ 'px', '%' ],
                'selectors'         => [
                    '{{WRAPPER}} .bwdwpvx-item-container .bwdwpvx-label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'         => [
                    'bwdwpvx_product_layout!' => '6',
                    'bwdwpvx_product_layout' => ['1', '2', '4', '5', '7', '8', '9', '10', '11'],
                ]
            ]
        );

        //Rating Size.
        $this->add_responsive_control(
			'bwdwpvx_label_spacing', [
				'label'             => esc_html__('Label Spacing', BWDEB_ROOT_AUTHOR_PRO),
				'type'              => \Elementor\Controls_Manager::SLIDER,
				'size_units'        => [ 'px', '%' ],
				'range'             => [
					'px'            => [
						'min'       => 0,
						'max'       => 100,
						'step'      => 1,
					],
				],
                'default'           => [
                    'size'          => 10,
					'unit'          => 'px',
                ],
				'selectors'         => [
					'{{WRAPPER}} .bwdwpvx-design-9 .bwdwpvx-label' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
                'condition'         => [
                    'bwdwpvx_product_layout' => '9',
                ]
			]
		);

        $this->end_controls_section();
        //End Label Style.
        
        //End Style Section
    }

	protected function render() {

        $settings = $this->get_settings_for_display();
        
        $args = array(
            'post_type'             => 'product',
            'posts_per_page'        => $settings['bwdwpvx_number_of_products'],
            'post_status'           => 'publish',
            'orderby'               => $settings['bwdwpvx_product_orderby'],
            'order'                 => $settings['bwdwpvx_product_sort_order'],
        );
        
        //Product per page.
        if (isset($settings['bwdwpvx_number_of_products']) && !empty($settings['bwdwpvx_number_of_products'])) {
            $args['posts_per_page'] = $settings['bwdwpvx_number_of_products'];
        } else {
            $args['posts_per_page'] = -1;
        }
        
        //Filter By Product Source.
        $args['meta_query'] = ['relation' => 'AND'];
        
        if ($settings['apcw_product_source'] == 'featured-products') {
            $args['tax_query'] = [
                'relation'  => 'AND',
                [
                    'taxonomy'  => 'product_visibility',
                    'field'     => 'name',
                    'terms'     => 'featured',
                ],
                [
                    'taxonomy'  => 'product_visibility',
                    'field'     => 'name',
                    'terms'     => ['exclude-from-search', 'exclude-from-catalog'],
                    'operator'  => 'NOT IN',
                ],
            ];
        } else if ($settings['apcw_product_source'] == 'best-selling-products') {
            $args['meta_key']   = 'total_sales';
            $args['orderby']    = 'meta_value_num';
            $args['order']      = 'DESC';
        } else if ($settings['apcw_product_source'] == 'sale-products') {
            $args['post__in']   = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
        } else if ($settings['apcw_product_source'] == 'top-products') {
            $args['meta_key']   = '_wc_average_rating';
            $args['orderby']    = 'meta_value_num';
            $args['order']  = 'DESC';
        }
        
        //Exclude IN or NOT IN.
        if (isset($settings['bwdwpvx_exclude_product_categories']) && !empty($settings['bwdwpvx_exclude_product_categories'])) {
            $bwdwpvx_product_cats = 'NOT IN';
        } else {
            $bwdwpvx_product_cats = 'IN';
        }
        if (isset($settings['bwdwpvx_exclude_product_tags']) && !empty($settings['bwdwpvx_exclude_product_tags'])) {
            $bwdwpvx_product_tags = 'NOT IN';
        } else {
            $bwdwpvx_product_tags = 'IN';
        }
        
        //Query Check all Display Category and Tags.
        if ((isset($settings['bwdwpvx_product_categories']) && !empty($settings['bwdwpvx_product_categories'])) && (isset($settings['bwdwpvx_product_tags']) && !empty($settings['bwdwpvx_product_tags']))) {
            //Display All Product with Category and Tags //Condition AND.
            $args['tax_query'][] = array(
                'relation'       => 'AND',
                array(
                    'taxonomy'   => 'product_cat',
                    'field'      => 'ID',
                    'terms'      => $settings['bwdwpvx_product_categories'],
                    'operator'   => $bwdwpvx_product_cats,
                ),
                array(
                    'field'      => 'ID',
                    'taxonomy'   => 'product_tag',
                    'terms'      => $settings['bwdwpvx_product_tags'],
                    'operator'   => $bwdwpvx_product_tags,
                ),
            );
        } elseif (isset($settings['bwdwpvx_product_categories']) && !empty($settings['bwdwpvx_product_categories'])) {
            //Display All Product with Category.
            $args['tax_query'][] = array(
                array(
                    'taxonomy'   => 'product_cat',
                    'field'      => 'ID',
                    'terms'      => $settings['bwdwpvx_product_categories'],
                    'operator'   => $bwdwpvx_product_cats,
                ),
            );
        } elseif (isset($settings['bwdwpvx_product_tags']) && !empty($settings['bwdwpvx_product_tags'])) {
            //Display All Product with Tags. 
            $args['tax_query'][] = array(
                array(
                    'taxonomy'   => 'product_tag',
                    'field'      => 'ID',
                    'terms'      => $settings['bwdwpvx_product_tags'],
                    'operator'   => $bwdwpvx_product_tags,
                ),
            );
        }
        
        $products = new \WP_Query($args); ?>
        
        <div class="bwdwpvx-cat-tag-title">
            <?php
            //Product Category Title.
            if($settings['bwdwpvx_product_source'] == "woocommerce") {
                $bwdwpvx_term_ids = $settings['bwdwpvx_product_categories'];
                if (is_array($bwdwpvx_term_ids) || is_object($bwdwpvx_term_ids)){
                    foreach ($bwdwpvx_term_ids as $bwdwpvx_cat_id) {
                        $bwdwpvx_term = get_term_by('id', $bwdwpvx_cat_id, 'product_cat'); ?>
                        <h2 class="bwdwpvx-category">
                            <?php if ($bwdwpvx_term) {
                                echo $bwdwpvx_term->name;
                            } ?>
                        </h2>
                    <?php }
                }
                //Product Tag Title.
                $bwdwpvx_term_ids = $settings['bwdwpvx_product_tags'];
                if (is_array($bwdwpvx_term_ids) || is_object($bwdwpvx_term_ids)){
                    foreach ($bwdwpvx_term_ids as $bwdwpvx_tag_id) {
                        $bwdwpvx_term = get_term_by('id', $bwdwpvx_tag_id, 'product_tag'); ?>
                        <h2 class="bwdwpvx-tag">
                            <?php if ($bwdwpvx_term) {
                                echo $bwdwpvx_term->name;
                            } ?>
                        </h2>
                    <?php }
                } 
            }?>
        </div>
        <div class="bwdwpvx-container <?php echo $settings['bwdwpvx_product_layout'] ?>">
            <?php
            if($settings['bwdwpvx_product_source'] == "woocommerce" && class_exists('WooCommerce')) {
                //For Woocommerce Data.
                while ($products->have_posts()) : $products->the_post();  
                    $bwdwpvx_temp = $settings['bwdwpvx_product_layout'];
                    include( __DIR__ . '/woop-vendors/design-'.$bwdwpvx_temp.'.php');
                endwhile;
                wp_reset_postdata();
            }
            //For custom Data.
            if($settings['bwdwpvx_product_source'] == "custom") {
                $bwdwpvx_temp = $settings['bwdwpvx_product_layout'];
                include( __DIR__ . '/woop-vendors/design-'.$bwdwpvx_temp.'.php');
            } ?>
        </div>
        <?php
    }

}