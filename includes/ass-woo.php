<?php
/**
 * 
 * 
 *  @return the free BWD Elementor Addons Plugin unactive notice here 
 * 
 * 
 */

if (!defined( 'ABSPATH')) {
    exit;
}
// For bwd-elementor-addons
function bwdproeb_free_plugin_installed() {
	if(!class_exists('BWDEBElementorBundle')){
		$check_display = get_current_screen();
		if (isset( $check_display->parent_file) && 'plugins.php' === $check_display->parent_file && 'update' === $check_display->id) {
			return;
		}
		$bwd_plugin_plugin = 'bwd-elementor-addons/bwd-elementor-addons.php';
		if (bwdproeb_addon_install()) {
			if (!current_user_can('activate_plugins')) {
				return;
			}
			$bwd_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_plugin_plugin . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_plugin_plugin );
			$bwd_plugin_the_notice_is = '<p><b>'.esc_html__('BWD Elementor Addons Pro', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires BWD Elementor Addons to be activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
			$bwd_plugin_the_notice_is .= '<p><a href="'. esc_url($bwd_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate BWD Elementor Addons', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
		} else {
			if (!current_user_can('install_plugins')) {
				return;
			}
			$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=bwd-elementor-addons'), 'install-plugin_bwd-elementor-addons');
			$bwd_plugin_the_notice_is = '<p><b>'.esc_html__('BWD Elementor Addons Pro', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires BWD Elementor Addons to be installed and activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
			$bwd_plugin_the_notice_is .= '<p><a href="'. esc_url($install_url) .'" class="button-primary">'.esc_html__('Install BWD Elementor Addons', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
		}
		echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_plugin_the_notice_is) . '</p></div>';
	}
	// ===========////////////// start
	if ( get_option( 'bwdeb-plugin-woop-multi-action', 'off' ) == 'on' ) {
		if ( ! defined( 'YITH_WOOCOMPARE_SLUG' ) ) {
			$bwd_plugin_compare = 'yith-woocommerce-compare/init.php';
			// compare
			if (bwdproeb_compare_install()) {
				if (!current_user_can('activate_plugins')) {
					return;
				}
				$bwd_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_plugin_compare . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_plugin_compare );
				$bwd_plugin_the_notice_compare_is = '<p><b>'.esc_html__('Woo Product Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Compare to be activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_compare_is .= '<p><a href="'. esc_url($bwd_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate YITH WooCommerce Compare', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			} else {
				if (!current_user_can('install_plugins')) {
					return;
				}
				$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');
				$bwd_plugin_the_notice_compare_is = '<p><b>'.esc_html__('Woo Product Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Compare to be installed and activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_compare_is .= '<p><a href="'. esc_url($install_url) .'" class="button-primary">'.esc_html__('Install YITH WooCommerce Compare', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			}
			echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_plugin_the_notice_compare_is) . '</p></div>';
		}
		// quick_view
		if ( ! defined( 'YITH_WCQV_SLUG' ) ) {
			$bwd_plugin_quick_view = 'yith-woocommerce-quick-view/init.php';
			if (bwdproeb_quick_view_install()) {
				if (!current_user_can('activate_plugins')) {
					return;
				}
				$bwd_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_plugin_quick_view . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_plugin_quick_view );
				$bwd_plugin_the_notice_quick_view_is = '<p><b>'.esc_html__('Woo Product Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Quick View to be activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_quick_view_is .= '<p><a href="'. esc_url($bwd_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate YITH WooCommerce Quick View', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			} else {
				if (!current_user_can('install_plugins')) {
					return;
				}
				$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');
				$bwd_plugin_the_notice_quick_view_is = '<p><b>'.esc_html__('Woo Product Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Quick View to be installed and activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_quick_view_is .= '<p><a href="'. esc_url($install_url) .'" class="button-primary">'.esc_html__('Install YITH WooCommerce Quick View', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			}
			echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_plugin_the_notice_quick_view_is) . '</p></div>';
		}
	}
	if ( get_option( 'bwdeb-plugin-woop-wish-cont', 'off' ) == 'on' ) {
		if ( ! defined( 'YITH_WCWL_SLUG' ) ) {
			// wishlist
			$bwd_plugin_wishlist = 'yith-woocommerce-wishlist/init.php';
			if (bwdproeb_wishlist_install()) {
				if (!current_user_can('activate_plugins')) {
					return;
				}
				$bwd_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_plugin_wishlist . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_plugin_wishlist );
				$bwd_plugin_the_notice_wishlist_is = '<p><b>'.esc_html__('Woo Wishlist Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Wishlist to be activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_wishlist_is .= '<p><a href="'. esc_url($bwd_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate YITH WooCommerce Wishlist', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			} else {
				if (!current_user_can('install_plugins')) {
					return;
				}
				$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');
				$bwd_plugin_the_notice_wishlist_is = '<p><b>'.esc_html__('Woo Wishlist Multi Action ', BWDEB_ROOT_AUTHOR_PRO).'</b> '.esc_html__('requires YITH WooCommerce Wishlist to be installed and activated.', BWDEB_ROOT_AUTHOR_PRO).'</p>';
				$bwd_plugin_the_notice_wishlist_is .= '<p><a href="'. esc_url($install_url) .'" class="button-primary">'.esc_html__('Install YITH WooCommerce Wishlist', BWDEB_ROOT_AUTHOR_PRO).'</a></p>';
			}
			echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_plugin_the_notice_wishlist_is) . '</p></div>';
		}
	}
	// ===========////////////// end
}
function bwdosmx__my_plugin() {
	return \Elementor\Plugin::instance();
}
function bwdproeb_addon_install() {
	$file_path = 'bwd-elementor-addons/bwd-elementor-addons.php';
	$installed_plugins = get_plugins();
	return isset($installed_plugins[$file_path]);
}

function bwdproeb_compare_install() {
	$file_path = 'yith-woocommerce-compare/init.php';
	$installed_plugins = get_plugins();
	return isset($installed_plugins[$file_path]);
}
function bwdproeb_quick_view_install() {
	$file_path = 'yith-woocommerce-quick-view/init.php';
	$installed_plugins = get_plugins();
	return isset($installed_plugins[$file_path]);
}
function bwdproeb_wishlist_install() {
	$file_path = 'yith-woocommerce-wishlist/init.php';
	$installed_plugins = get_plugins();
	return isset($installed_plugins[$file_path]);
}

if (!function_exists('bwdpssx_get_currency_symbol')) {
    function bwdpssx_get_currency_symbol( $bwdpssx_symbol_name ) {
        $bwdpssx_symbols = [
            'dollar'        => '&#36;',
            'euro'          => '&#128;',
            'franc'         => '&#8355;',
            'pound'         => '&#163;',
            'ruble'         => '&#8381;',
            'shekel'        => '&#8362;',
            'baht'          => '&#3647;',
            'yen'           => '&#165;',
            'won'           => '&#8361;',
            'guilder'       => '&fnof;',
            'peso'          => '&#8369;',
            'peseta'        => '&#8359',
            'lira'          => '&#8356;',
            'rupee'         => '&#8360;',
            'indian_rupee'  => '&#8377;',
            'real'          => 'R$',
            'krona'         => 'kr',
        ];
        return isset( $bwdpssx_symbols[ $bwdpssx_symbol_name ] ) ? $bwdpssx_symbols[ $bwdpssx_symbol_name ] : '';
    }
} 