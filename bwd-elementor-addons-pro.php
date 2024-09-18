<?php
/**
 * Plugin Name: BWD Elementor Addons Pro
 * Description: BWD Elementor Addons Pro is a plugin for Elementor that offers various widgets and preset designs to enhance the design capabilities of the page builder.
 * Plugin URI:  https://bestwpdeveloper.com/
 * Version:     4.12.5
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-elementor-addons-pro
 * Elementor tested up to: 3.19.2
 * Elementor Pro tested up to: 3.19.2
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit;
require_once ( plugin_dir_path(__FILE__) ) . '/includes/ass-woo.php';
define( "BWDEB_THE_PRO_SOFT_VERSION", "4.12.5" );
define( "BWDEB_ROOT_AUTHOR_PRO", "bwd-elementor-addons-pro" );
define("BWDEB_THE_PLUGIN_FILE_PRO", __FILE__);
final class ProbwdelementorBundle {
	const VERSION = BWDEB_THE_PRO_SOFT_VERSION;
	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
	const MINIMUM_PHP_VERSION = '7.0';
    
	public function __construct() {
		add_action( 'bwdproeb_init', array( $this, 'bwdproeb_loaded_textdomain' ) );
		// bwdproeb_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdproeb_init' ) );
		add_action('admin_notices', 'bwdproeb_free_plugin_installed');
	}

	public function bwdproeb_loaded_textdomain() {
		load_plugin_textdomain( BWDEB_ROOT_AUTHOR_PRO, false, basename(dirname(__FILE__)).'/languages' );
	}

	public function bwdproeb_init() {
		if ( ! did_action( 'elementor/loaded' ) ) {
			return;
		}
		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdproeb_admin_notice_minimum_elementor_version' ) );
			return;
		}
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdproeb_admin_notice_minimum_php_version' ) );
			return;
		}
		require_once( 'bwdproeb-boots.php' );
		require_once( 'widgets/extensions/advanced.php' );
		
        // Add Plugin actions
        add_action( 'elementor/elements/categories_registered', function () {
            $elementsManager = \Elementor\Plugin::instance()->elements_manager;
            $elementsManager->add_category(
                'bwdttmx_addons_wc',
                array(
                  'title' => 'WC MULTI ACTION ADDONS ',
                  'icon'  => 'fonts',
            ));
            $elementsManager->add_category(
                'bwdttmx_addons_wc_single',
                array(
                  'title' => 'WC MULTI ACTION ADDONS',
                  'icon'  => 'fonts',
            ));
        });

		require_once( 'includes/function.php' );
		$this->reg_apps__in_class();
    }

	
    static function bwdwpmx_get_template_elementor($type = null) {
        $args = [
            'post_type' => 'elementor_library',
            'posts_per_page' => -1,
        ];
        if ($type) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'elementor_library_type',
                    'field' => 'slug',
                    'terms' => $type,
                ],
            ];
        }
        $template = get_posts($args);
        $tpl = array();
        if (!empty($template) && !is_wp_error($template)) {
            foreach ($template as $post) {
                $tpl[$post->ID] = $post->post_title;
            }
        }
        return $tpl;
    }  

    static function bwdwpmx_get_taxonomies_product( $category = 'product_cat' ){
        $category_posts = get_terms( array(
            'taxonomy' => $category,
            'hide_empty' => true,
        ));
        
        foreach ( $category_posts as $category_post ) {
            $category_posts_name[$category_post->slug] = $category_post->name;      
        }
        return $category_posts_name;
    }

    public function reg_apps__in_class(){
        // Second code snippet
        function Probwdwpmx_get_taxonomies_product($category = 'product_cat')
        {
            $category_posts = get_terms(array(
                'taxonomy' => $category,
                'hide_empty' => true,
            ));

            foreach ($category_posts as $category_post) {
                $category_posts_name[$category_post->slug] = $category_post->name;
            }

            return $category_posts_name;
        }

        function bwdeb_save_plugin()
        {
            return \Elementor\Plugin::instance();
        }

        require __DIR__ . '/vendor/autoload.php';

        /**
         * 
         * @this function used for the plugin licensing
         * @---Pro check---
         * 
         */
        function bwdproeb_all_dashboard_admin()
        {
            wp_enqueue_style('bwdproebsk-admin-assets', plugin_dir_url(__FILE__) . 'assets/admin/css/admin-dashboard.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
        }
        add_action('admin_enqueue_scripts', 'bwdproeb_all_dashboard_admin');

        function appsero_init_tracker_bwd_elementor_addons_pro()
        {
            if (!class_exists('Appsero\Client')) {
                require_once __DIR__ . '/appsero/src/Client.php';
            }

            $client = new Appsero\Client(
                'd2dac0b4-44db-4ede-8193-1fe6379e1732', 
                esc_html__('BWD Elementor Addons Pro',
                BWDEB_ROOT_AUTHOR_PRO), 
                __FILE__
            );
            $client->insights()->init();
            $client->updater();

            // Active license page and checker
            $args = array(
                'type'       => 'submenu',
                'parent_slug' => 'bwdeb-plugin-main-menu',
                'menu_title' => esc_html__( 'Activate License', BWDEB_ROOT_AUTHOR_PRO),
                'page_title' => esc_html__( 'BWD Elementor Addons Pro', BWDEB_ROOT_AUTHOR_PRO),
                'menu_slug'  => 'bwdproeb-license-settings',
            );
            $client->license()->add_settings_page($args);
        }
        appsero_init_tracker_bwd_elementor_addons_pro();
    }

	public function bwdproeb_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}
		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', BWDEB_ROOT_AUTHOR_PRO ),
			'<strong>' . esc_html__( 'BWD Elementor Addons Pro', BWDEB_ROOT_AUTHOR_PRO ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', BWDEB_ROOT_AUTHOR_PRO ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', BWDEB_ROOT_AUTHOR_PRO) . '</p></div>', $message );
	}

	public function bwdproeb_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}
		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', BWDEB_ROOT_AUTHOR_PRO ),
			'<strong>' . esc_html__( 'BWD Elementor Addons Pro', BWDEB_ROOT_AUTHOR_PRO ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', BWDEB_ROOT_AUTHOR_PRO ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', BWDEB_ROOT_AUTHOR_PRO) . '</p></div>', $message );
	}
}

// Instantiate bwdproeb-elementor-bundle.
new ProbwdelementorBundle();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );