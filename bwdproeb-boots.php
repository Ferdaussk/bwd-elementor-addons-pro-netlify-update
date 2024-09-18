<?php
namespace BWDElementorBundlePro;

use BWDElementorBundlePro\PageSettings\Page_Settings;
use Elementor\Controls_Manager;
use Elementor\Element_Base;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Core\Settings\Manager as Settings_Manager;

define( "BWDEB_PRO_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDEB_PRO_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ProbwdproebElementorBundle {
	private static $_instance = null;
	static $bwdproeb_live_copy_should_script_enqueue = false;
	public static function instance() {
        if(get_option('bwdeb-live-copy', 'off')=='on'){
            add_action('wp_footer', [__CLASS__, 'bwdproeb_live_copy_foot_enqueue_scripts']);
            add_action('wp_ajax_get_section_data', [__CLASS__, 'bwdproeb_live_copy_get_section_data']);
            add_action('wp_ajax_nopriv_get_section_data', [__CLASS__, 'bwdproeb_live_copy_get_section_data']);
            add_action('elementor/frontend/section/before_render', [__CLASS__, 'bwdproeb_live_copy_should_script_enqueue']);
            add_action('elementor/frontend/container/before_render', [__CLASS__, 'bwdproeb_live_copy_should_script_enqueue']);
            add_action('elementor/element/section/_section_bwdproeb_live_copy/after_section_start', [__CLASS__, 'bwdproeb_live_copy_register_controls']);
            add_action('elementor/element/container/_section_bwdproeb_live_copy/after_section_start', [__CLASS__, 'bwdproeb_live_copy_register_controls']);
            add_action( 'elementor/element/common/_section_style/after_section_end', [ __CLASS__, 'bwdproeb_live_copy_controls_sections' ], 1, 2 );
            add_action( 'elementor/element/column/section_advanced/after_section_end', [ __CLASS__, 'bwdproeb_live_copy_controls_sections' ], 1, 2 );
            add_action( 'elementor/element/section/section_advanced/after_section_end', [ __CLASS__, 'bwdproeb_live_copy_controls_sections' ], 1, 2 );
            add_action( 'elementor/element/container/section_layout/after_section_end', [ __CLASS__, 'bwdproeb_live_copy_controls_sections' ], 1, 2 );
            add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'bwdproeb_live_copy_enqueue' ] );
        }
		if(is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

    // ============ Start live copy =============//
    public static function bwdproeb_live_copy_enqueue() {
        $src = plugin_dir_url(__FILE__) . 'assets/public/js/extension/live-copy/marvin-new.min.js';
        $dependencies = [ 'elementor-editor' ];
        wp_enqueue_script(
            'marvin-fff',
            $src,
            $dependencies,
            '1.0',
            true
        );
        wp_localize_script(
            'marvin-fff',
            'marvin',
            [
                'storagekey' => md5( 'LICENSE KEY' ),
                'ajax_url'    => admin_url( 'admin-ajax.php' ),
                'nonce'      => wp_create_nonce('bwdproeb_live_copy_get_section_data'),
            ]
        );
	}

    public static function bwdproeb_live_copy_controls_sections( $element, $args ) {
		$element->start_controls_section(
			'_section_bwdproeb_live_copy',
			[
				'label' => __( 'Live Copy', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_ADVANCED,
			]
		);
		$element->end_controls_section();
	}

    public static function bwdproeb_live_copy_should_script_enqueue(Element_Base $section) {
		if(self::$bwdproeb_live_copy_should_script_enqueue) {
			return;
		}
		if('yes' == $section->get_settings_for_display('_bwdproeb_enable_live_copy')) {
			self::$bwdproeb_live_copy_should_script_enqueue = true;
			remove_action('elementor/frontend/section/before_render', [__CLASS__, 'bwdproeb_live_copy_should_script_enqueue']);
			remove_action('elementor/frontend/container/before_render', [__CLASS__, 'bwdproeb_live_copy_should_script_enqueue']);
		}
	}

    public static function bwdproeb_live_copy_register_controls(Element_Base $section) {
		$section->add_control(
			'_bwdproeb_enable_live_copy',
			[
				'label' => __('Enable Live Copy', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => '',
				'frontend_available' => true,
				'render_type' => 'none'
			]
		);
        $section->add_control(
			'bwdproeb_live_copy_display',
			[
				'label' => esc_html__( 'Hover?', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'none' => [
						'title' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-check-circle-o',
					],
					'block' => [
						'title' => esc_html__( 'Fixed', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-ban',
					],
				],
				'toggle' => true,
				'selectors' => [
					'.e-con > .bwdproeb-live-copy-wrap' => 'display: {{VALUE}};',
				],
			]
		);
        $section->add_control(
			'bwdproeb_live_copy_left',
			[
				'label' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
                ],
				'selectors' => [
					'.e-con > .bwdproeb-live-copy-wrap' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $section->add_control(
			'bwdproeb_live_copy_right',
			[
				'label' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
                ],
				'selectors' => [
					'.e-con > .bwdproeb-live-copy-wrap' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$section->add_responsive_control(
			'_bwdproeb_live_copy_btn_padding',
			[
				'label' => __('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'separator' => 'before',
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$section->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => '_bwdproeb_live_copy_btn_border',
				'selector' => '.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn',
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_border_radius',
			[
				'label' => __('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$section->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => '_bwdproeb_live_copy_btn_box_shadow',
				'selector' => '.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn',
			]
		);
		$section->start_controls_tabs('_bwdproeb_live_copy_btn_tabs');

		$section->start_controls_tab(
			'_bwdproeb_live_copy_btn_tab_normal',
			[
				'label' => __('Normal', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_color',
			[
				'label' => __('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn' => 'color: {{VALUE}};',
				],
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_bg_color',
			[
				'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn' => 'background-color: {{VALUE}};',
				],
			]
		);
		$section->end_controls_tab();

		$section->start_controls_tab(
			'_bwdproeb_live_copy_btn_tab_hover',
			[
				'label' => __('Hover', BWDEB_ROOT_AUTHOR_PRO),
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_hover_color',
			[
				'label' => __('Text Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_hover_bg_color',
			[
				'label' => __('Background Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		$section->add_control(
			'_bwdproeb_live_copy_btn_hover_border_color',
			[
				'label' => __('Border Color', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'_bwdproeb_live_copy_btn_border_border!' => '',
				],
				'selectors' => [
					'.elementor .bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn:focus' => 'border-color: {{VALUE}};',
				],
			]
		);
		$section->end_controls_tab();
		$section->end_controls_tabs();
    }

	protected static function add_button() {
        echo '<div id="bwdproeb-live-copy-base" class="bwdproeb-live-copy-wrap" style="display: none">';
            echo '<a class="bwdproeb-live-copy-btn" href="#" class="" target="_blank">'.esc_html('Live Copy', BWDEB_ROOT_AUTHOR_PRO).'</a>';
        echo '</div>';
    }

    protected static function bwdproeb_live_copy_add_inline_style() {
        echo "<style>
		.elementor-section-wrap > .elementor-section,
		.elementor-section.elementor-top-section,
		.e-container,
		.e-con {
			position: relative;
		}
		.bwdproeb-live-copy-wrap,
		.elementor-section-wrap .bwdproeb-live-copy-wrap,
		.elementor-section.elementor-top-section .bwdproeb-live-copy-wrap,
		.e-container > .bwdproeb-live-copy-wrap,
		.e-con > .bwdproeb-live-copy-wrap {
			position: absolute;
			top: 50%;
			z-index: 99999;
			text-decoration: none;
			font-size: 15px;
			transform: translateY(-50%);
			border-radius: 4px;
		}
		.bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn {
			display: block;
			padding: 8px 12px;
			border-radius: 4px;
			background: #007bff;
			color: #fff;
			line-height: 1;
			transition: background-color 0.2s, transform 0.2s;
		}
		.bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn:focus {
			padding: 8px 12px;
			border-radius: 4px;
			background: #016de0;
			color: #fff;
			line-height: 1;
			transition: background-color 0.2s, transform 0.2s;
		}
		.bwdproeb-live-copy-wrap .bwdproeb-live-copy-btn:hover {
			background: #0056b3;
			transform: scale(1.05);
			box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
			cursor: pointer;
		}
		.elementor-section-wrap>.elementor-section.live-copy-preview .bwdproeb-live-copy-wrap,
		.elementor-section.elementor-top-section.live-copy-preview .bwdproeb-live-copy-wrap,
		.elementor-section-wrap>.elementor-section:not(.elementor-element-edit-mode):hover .bwdproeb-live-copy-wrap,
		.elementor-section.elementor-top-section:not(.elementor-element-edit-mode):hover .bwdproeb-live-copy-wrap,
		.e-container:not(.elementor-element-edit-mode):hover .bwdproeb-live-copy-wrap,
		.e-con:not(.elementor-element-edit-mode):hover .bwdproeb-live-copy-wrap {
			display: block
		}
        </style>";
    }

    public static function bwdproeb_live_copy_foot_enqueue_scripts() {
        if(bwdproeb_elementor()->preview->is_preview_mode()) {
            self::bwdproeb_live_copy_add_inline_style();
            self::add_button();
            return;
        }
    
        if(self::$bwdproeb_live_copy_should_script_enqueue) {
            self::bwdproeb_live_copy_add_inline_style();
            self::add_button();
            wp_enqueue_script('live-copy-fff', plugin_dir_url(__FILE__) . 'assets/public/js/extension/live-copy/live-copy.min.js', ['jquery'], '1.0', true);
            wp_localize_script(
                'live-copy-fff',
                'livecopy',
                [
                    'storagekey' => md5('LICENSE KEY'),
                    'ajax_url' => admin_url('admin-ajax.php'),
                    'nonce' => wp_create_nonce('bwdproeb_live_copy_get_section_data'),
                ]
            );
        }
    }
    
    public static function bwdproeb_live_copy_get_section_data() {
        check_ajax_referer('bwdproeb_live_copy_get_section_data', 'nonce');

        $post_id = isset($_GET['post_id']) ? absint($_GET['post_id']) : 0;
        $section_id = isset($_GET['section_id']) ? sanitize_text_field($_GET['section_id']) : 0;
        $elType = isset($_GET['elType']) ? sanitize_text_field($_GET['elType']) : '';

        if(empty($post_id) || empty($section_id)) {
            wp_send_json_error('Incomplete request');
        }

        $is_built_with_elementor = bwdproeb_elementor()->documents->get( $post_id )->is_built_with_elementor();
        if(!$is_built_with_elementor) {
            wp_send_json_error('Not built with elementor');
        }

        $document = bwdproeb_elementor()->documents->get($post_id);
        $elementor_data = $document ? $document->get_elements_data() : [];
        $data = [];

        if(!empty($elementor_data)) {
            $data = wp_list_filter($elementor_data, [
                'id' => $section_id,
                'elType' => $elType,
            ]);

            $data = current($data);

            if(empty($data)) {
                wp_send_json_error('Section not found');
            }
        }

        wp_send_json_success($data);
    }

    // ============ End live copy =============//

	public function bwdproeb_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdproeb_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdproeb_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if('bwdproeb_the_contact_form_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}

	public function bwdproeb_register_widgets() {
		require_once( plugin_dir_path( __FILE__ ) . 'widgets/woop-vendors/bwdwpvx-functions.php' );// for woop-vendors only
		// Register Widgets
		if(get_option('bwdeb-plugin-meet-the-team','off')=='on'){
			require_once( __DIR__ . '/widgets/team-mtt.php' );
			require_once( __DIR__ . '/widgets/team-mtt-carousel.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\MTTMeetTheTeam() );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\MTTMeetTheTeamCarousel() );
		}
		if(get_option('bwdeb-plugin-team-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdtmc-teamcarousel-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDTMCTeamcarousel() );
		}
		if(get_option('bwdeb-plugin-testimonials','off')=='on'){
			require_once( __DIR__ . '/widgets/tbt_testimonial.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\TBTTheBestTestimonials() );
		}
		if(get_option('bwdeb-plugin-creative-button','off')=='on'){
			require_once( __DIR__ . '/widgets/cbtns-creative-buttons.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\CBTNSCreativeButtons() );
		}
		if(get_option('bwdeb-plugin-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdac-accordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDACAccordionCreatoR() );
		}
		if(get_option('bwdeb-plugin-masking-effect','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdme-masking.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDMEmasking() );
		}
		if(get_option('bwdeb-plugin-service-showcase','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdss-service.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDSSService() );
		}
		if(get_option('bwdeb-plugin-promo-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeeo-Promo-Box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdeeo_promobox() );
		}
		if(get_option('bwdeb-plugin-service-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdff-service-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDServiceFlipBox() );
		}
		if(get_option('bwdeb-plugin-step-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdff-step-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDStepFlipBox() );
		}
		if(get_option('bwdeb-plugin-team-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdff-team-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDTeamFlipBox() );
		}
		if(get_option('bwdeb-plugin-creative-list','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdbl-list.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdblBundleList() );
		}
		if(get_option('bwdeb-plugin-dual-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwddh-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDDHHeading() );
		}
		if(get_option('bwdeb-plugin-icon-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdib-iconbox.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDIBIconbox() );
		}
		if(get_option('bwdeb-plugin-dual-button','off')=='on'){
			require_once( __DIR__ . '/widgets/dual-button.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDDBDualButtons() );
		}
		if(get_option('bwdeb-plugin-honeycombs','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdhcx-honeycombs-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdhcx_honeycombs_widgets() );
		}
		if(get_option('bwdeb-plugin-slide-anything','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdsas-anyslider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdsasswiperslider_widgets() );
		}
		if(get_option('bwdeb-plugin-fancy-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdst-fancy-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDSTfancyheading() );
		}
		if(get_option('bwdeb-plugin-animated-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdah-animated-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDAHAnimatedHeadingWidget() );
		}
		if(get_option('bwdeb-plugin-animated-link','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdal-animatedlink.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdalAnimatedLink() );
		}
		if(get_option('bwdeb-plugin-awesome-step','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdas-step.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDASAwesomeStep() );
		}
		if(get_option('bwdeb-plugin-blockquote','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdbk-blockquote.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdbkBlockquote() );
		}
		if(get_option('bwdeb-plugin-business-hours','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdbh-businesshours.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdbhBusinessHours() );
		}
		if(get_option('bwdeb-plugin-call-to-action','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcta-calltoaction.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCTACallToAction() );
		}
		if(get_option('bwdeb-plugin-click-to-contact','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdctc-clickcall-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdctcclickcall_widgets() );
		}
		if(get_option('bwdeb-plugin-countdown','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcd-count-down.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdcdCountDownWidget() );
		}
		if(get_option('bwdeb-plugin-counter','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdc-counter.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCCounterWidget() );
		}
		if(get_option('bwdeb-plugin-coupon-code','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcod-coupon-code.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCODCouponCode() );
		}
		if(get_option('bwdeb-plugin-filterable-gallery','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdfg-filterable.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDFGfilterable() );
		}
		if(get_option('bwdeb-plugin-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdia-imageaccordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdiaImageAccordion() );
		}
		if(get_option('bwdeb-plugin-image-compare','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdic-compare.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDMEcompare() );
		}
		if(get_option('bwdeb-plugin-image-hotspot','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdihp-imghotspot.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwbihpimghotspot() );
		}
		if(get_option('bwdeb-plugin-image-hover-effect','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdih-imagehover.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDhbhimageHover() );
		}
		if(get_option('bwdeb-plugin-image-scroll','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdiscr-image-scroll.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdiscrImageScroll() );
		}
		if(get_option('bwdeb-plugin-image-shape','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdim-image-shape.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDIMimageshape() );
		}
		if(get_option('bwdeb-plugin-image-swap','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdis-imageswap.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdisimageSwap() );
		}
		if(get_option('bwdeb-plugin-pricing-table','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdpt-price.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDPTPricingTable() );
		}
		if(get_option('bwdeb-plugin-progress-bar','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdpb-progressBar.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDPBProgressBarWidget() );
		}
		if(get_option('bwdeb-plugin-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdtl-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDTLTimelineWidget() );
		}
		if(get_option('bwdeb-plugin-social-icon','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdsi-social-icon.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDSIsocialicon() );
		}
		if(get_option('bwdeb-plugin-creative-tab','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdtz-tabs.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDTZTabs() );
		}
		if(get_option('bwdeb-plugin-webinar-info','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdwi-webinar-info.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdWIwebinarinfo() );
		}
		if(get_option('bwdeb-plugin-unique-headers','off')=='on'){
			require_once( __DIR__ . '/widgets/header_thf.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\THFTheHeader() );
		}
		if(get_option('bwdeb-plugin-advanced-slider','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdads-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdadsswiperslider_widgets() );
		}
		if(get_option('bwdeb-plugin-photo-stack','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdps-photoStack.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdps_photostack() );
		}
		if(get_option('bwdeb-plugin-popup','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdmp-modal-popup-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDModalPopupWidget() );
		}
		if(get_option('bwdeb-plugin-image-stack-group','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdis-imageStack.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdis_imagestack() );
		}
		if(get_option('bwdeb-plugin-ihover','off')=='on'){
			require_once( __DIR__ . '/widgets/wppih-ihover-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\wppih_iHover_widgets() );
		}
		if(get_option('bwdeb-plugin-video-popup','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdvp-video-popup-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDVPVideoPopupWidget() );
		}
		if(get_option('bwdeb-plugin-profile-card','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdpc-profile-card.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDPCProfileCard() );
		}
		if(get_option('bwdeb-plugin-back-to-top','off')=='on'){
			require_once( __DIR__ . '/widgets/back_to_top.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDBTTBackToTop() );
		}
		if(get_option('bwdeb-plugin-masking-video','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdmv-masking-video.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDMVMaskingVideoWidget() );
		}
		if(get_option('bwdeb-plugin-logo-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdlc-logo-carousel-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDLCLogoCarousel() );
		}
		if(get_option('bwdeb-plugin-logo-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdlc-logo-grid-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDLCLogoGrid() );
		}
		if(get_option('bwdeb-plugin-logo-filter','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdlc-logo-filter-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDLCLogoFilter() );
		}
		if(get_option('bwdeb-plugin-map-masking','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdmfm-mflag-masking.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDMFMasking() );
		}
		if(get_option('bwdeb-plugin-author-bio','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdab-authorbio.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdabAuthorBio() );
		}
		if(get_option('bwdeb-plugin-data-table','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdct-creativeTable.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdct_creativetable() );//58
		}
		if(get_option('bwdeb-plugin-contact-form-7-styler','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcf-contactform.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdcfContactForm() );
		}
			// pro only
		if(get_option('bwdeb-plugin-lottie-animation','off')=='on'){
			require_once( __DIR__ . '/widgets/elottiea-lottie-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ELOTTIEA_Effective_widgets() );
		}
		if(get_option('bwdeb-plugin-bar-chart','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdpcb-bar-piechart-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdpcb_bar_piechart_widgets() );
		}
		if(get_option('bwdeb-plugin-lord-icon','off')=='on'){
			require_once( __DIR__ . '/widgets/plordiconsa-lordicons-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\PLORDICONSA_Effective_widgets() );
		}
			// First
		if(get_option('bwdeb-plugin-effective-pre-loader','off')=='on'){
			require_once( __DIR__ . '/widgets/eprel-preloader-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\EPREL_Effective_widgets() );
		}
		if(get_option('bwdeb-plugin-social-share','off')=='on'){
			require_once( __DIR__ . '/widgets/unique-social-share-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\USShareWidget() );
		}
		if(get_option('bwdeb-plugin-breadcrumb','off')=='on'){
			require_once( __DIR__ . '/widgets/greatest-breadcrumb-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\GRSTBCMBreadcrumBWidget() );
		}
		if(get_option('bwdeb-plugin-background-switcher','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdsb-switchBackground-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdsb_switchbackground_widgets() );
		}
			// Secound 
		if(get_option('bwdeb-plugin-unfold','off')=='on'){
			require_once( __DIR__ . '/widgets/bwduf-unfoldcontent.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdufUnfoldcontent() );
		}
		if(get_option('bwdeb-plugin-code-highlighter','off')=='on'){
			require_once( __DIR__ . '/widgets/codentor-template.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\CodEntor_Code_Widgete() );
		}
		if(get_option('bwdeb-plugin-single-post-slider','off')=='on'){
			require_once( __DIR__ . '/widgets/teps-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\TEPSThe_Effective_Post_Slider_widgets() );
		}
		if(get_option('bwdeb-plugin-post-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/thepsttmln-the-post-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\THEPSTTMLNTimelineWidget() );
		}
		if(get_option('bwdeb-plugin-circle-info','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdci-circle-info-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdci_circle_info_widgets() );
		}
		if(get_option('bwdeb-plugin-product-category-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcp-catproduct-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdcpcatproduct_widgets() );
		}
		if(get_option('bwdeb-plugin-flip-box-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdfb-flipbox.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdfbFlipBox() );
		}
		if(get_option('bwdeb-plugin-info-download-button','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdidb-button-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdidbbuttonwidgets() );
		}
			// CV Builder Widget
		if(get_option('bwdeb-plugin-cv-builder','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-cv-builder.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCV() );
		}
		if(get_option('bwdeb-plugin-cv-about','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-about.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVABOUT() );
		}
		if(get_option('bwdeb-plugin-cv-contact','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-contact.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVCONTACT() );
		}
		if(get_option('bwdeb-plugin-cv-education','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-education.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVEDUCATION() );
		}
		if(get_option('bwdeb-plugin-cv-experience','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-experience.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVEXPERIENCE() );
		}
		if(get_option('bwdeb-plugin-cv-footer','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-footer.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVFOOTER() );
		}
		if(get_option('bwdeb-plugin-cv-header','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-header.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVHEADER() );
		}
		if(get_option('bwdeb-plugin-cv-hobby','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-hobby.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVHOBBY() );
		}
		if(get_option('bwdeb-plugin-cv-language','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-language.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVLANGUAGE() );
		}
		if(get_option('bwdeb-plugin-cv-reference','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-reference.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVREFERENCE() );
		}
		if(get_option('bwdeb-plugin-cv-skill','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcv-skill.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCVSKILL() );
		}
			// Post Widget
		if(get_option('bwdeb-plugin-post-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/post-grid-w.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDBPBlog() );
		}
		if(get_option('bwdeb-plugin-post-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bpaccdn-accordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BPACCDNAccordionCreatoR() );
		}
		if(get_option('bwdeb-plugin-post-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bpiacrdn-imageaccordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bpiacrdnImageAccordion() );
		}
		if(get_option('bwdeb-plugin-post-list','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdbpl-blog-post.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDBPLBlog() );
		}
		if(get_option('bwdeb-plugin-post-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/post-tiles-w.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BPTLS_Post_Tiles() );
		}
		if(get_option('bwdeb-plugin-creative-post-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdbpc-blogpost-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\bwdbpc_blogpost_widgets() );
		}
		if(get_option('bwdeb-plugin-news-ticker','off')=='on'){
			require_once( __DIR__ . '/widgets/ptnticker-newsticker-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ptnticker_newsticker_widgets() );
		}
		if(get_option('bwdeb-plugin-masonary-blog-post','off')=='on'){
			require_once( __DIR__ . '/widgets/post-masonary.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\MBPOST_Post_Masonry() );
		}
			// Woocommerce Product
		if(get_option('bwdeb-plugin-product-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/crtp-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\CRTPProducts() );//
		}
		if(get_option('bwdeb-plugin-product-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/woociap-imageaccordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\woociapImageAccordion() );//
		}
		if(get_option('bwdeb-plugin-product-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/woocpt-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\WOOCPTProducts() );//
		}
		if(get_option('bwdeb-plugin-related-product','off')=='on'){
			require_once( __DIR__ . '/widgets/woocrp-product-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\woocrp_product_widgets() );
		}
		if(get_option('bwdeb-plugin-featured-product','off')=='on'){
			require_once( __DIR__ . '/widgets/woofpt-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\WOOFPTProducts() );
		}
		if(get_option('bwdeb-plugin-product-compare','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdwpc-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProBWDWPCProducts() );
		}
		if(get_option('bwdeb-plugin-product-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/woocpa-accordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\WOOCPAAccordionCreatoR() );//
		}
		if(get_option('bwdeb-plugin-product-category-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/woocptc-catproduct-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\woocptcCATproduct_TILES() );
		}
		if(get_option('bwdeb-plugin-product-list','off')=='on'){
			require_once( __DIR__ . '/widgets/crtplst-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\CRTPLSTProductsList() );//
		}
		if(get_option('bwdeb-plugin-product-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/wppgpc-product-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\wppgpc_product_widgets() );//
		}
		if(get_option('bwdeb-plugin-product-list-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcrtplst-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDCRTPLSTProductsListcarousel() );//
		}
		if(get_option('bwdeb-plugin-product-category-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/thecpg-catproduct-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\thecpgcatproduct_widgets() );//
		}
		if(get_option('bwdeb-plugin-product-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/woocommerce-products-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\WOOCPTMLNProductsTimelineWidget() );
		}
		if(get_option('bwdeb-plugin-content-switcher','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdcs-content-switcher.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProBWDCSContentSwitcher() );
		}
		// For new  widgets  10Dec2023
		if(get_option('bwdeb-plugin-ajax-data-table', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdadt-creativeTable.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdadt_creativetable() ); 
		}
		if(get_option('bwdeb-plugin-cart-flipper', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdcfpx-card-flipper-pro-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdcfpx_cardFlipper_widgets() ); 
		}
		if(get_option('bwdeb-plugin-con-swi-pls', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdcspx-content-switch-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdcspx_ContentSwitchPlus_widgets() ); 
		}
		if(get_option('bwdeb-plugin-img-rev-widg', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdirax-reveal-effect-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdirax_scrollimagereveal_widgets() ); 
		}
		if(get_option('bwdeb-plugin-img-unfold-kit', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdiukx-image-unfold-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdiukx_ImageUnfold_widgets() ); 
		}
		if(get_option('bwdeb-plugin-modern-feature-list', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdmflx-feature-list-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdmflx_ModernFeatureList_widgets() ); 
		}
		if(get_option('bwdeb-plugin-offcanvasmagic', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdosmx-offcanvas-magic-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdosmx_OffcanvasMagic_widgets() ); 
		}
		if(get_option('bwdeb-plugin-privacy-content-locker', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdpclx-privacy-content-locker-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdpclx_privacy_content_locker_widgets() ); 
		}
		if(get_option('bwdeb-plugin-viewpdf', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdpdfx-view-pdf-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdpdfx_ViewPdfClear_widgets() ); 
		}
		if(get_option('bwdeb-plugin-progress-master-kit', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdpmkx-progress-master-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdpmkx_ProgressKit_widgets() ); 
		}
		if(get_option('bwdeb-plugin-restaurant-price-menu', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdrpmx-rest-price-menu-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdrpmx_RestPriceMenu_widgets() ); 
		}
		if(get_option('bwdeb-plugin-sales-promotion-offer', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdspox-sales-promotion-offer-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdspox_SalesPromotionOffer_widgets() ); 
		}
		if(get_option('bwdeb-plugin-profile-showcas', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/profile-showcasing/bwdsypx-showcase-profile-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdsypx_ShowcaseProfile_widgets() ); 
		}
		if(get_option('bwdeb-product-features-w', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdspfx-product-features-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdspfx_ProductFeatures_widgets() ); 
		}
		if(get_option('bwdeb-plugin-tooltip-mastery', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdttmx-tooltip-mastery-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdttmx_ToolTip_Mestery_widgets() ); 
		}
		if(get_option('bwdeb-plugin-woo-cat-gallery', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdwcgx-woo-cat-gallery-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdwcgx_WooCatGallery_widgets() ); 
		}
		if(get_option('bwdeb-plugin-woop-multi-action', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/wc-product-multiaction-widget.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProBWDWooProductGrid_Widget() ); 
		}
		if(get_option('bwdeb-plugin-woop-wish-cont', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/wc-wishlist-count-widget.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProBWDWishlistCount_Widget() ); 
		}
		if(get_option('bwdeb-check-hero-widget1', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets1.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets1() ); 
		}
		if(get_option('bwdeb-check-hero-widget2', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets2.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets2() ); 
		}
		if(get_option('bwdeb-check-hero-widget3', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets3.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets3() ); 
		}
		if(get_option('bwdeb-check-hero-widget4', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets4.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets4() ); 
		}
		if(get_option('bwdeb-check-hero-widget5', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets5.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets5() ); 
		}
		if(get_option('bwdeb-check-hero-widget6', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets6.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets6() ); 
		}
		if(get_option('bwdeb-check-hero-widget7', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets7.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets7() ); 
		}
		if(get_option('bwdeb-check-hero-widget8', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets8.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets8() ); 
		}
		if(get_option('bwdeb-check-hero-widget9', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets9.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets9() ); 
		}
		if(get_option('bwdeb-check-hero-widget10', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets10.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets10() ); 
		}
		if(get_option('bwdeb-check-hero-widget11', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets11.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets11() ); 
		}
		if(get_option('bwdeb-check-hero-widget12', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets12.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets12() ); 
		}
		if(get_option('bwdeb-check-hero-widget13', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/hero-sections/bwdhsx-hero-section-widgets13.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhsx_hero_section_widgets13() ); 
		}
		if(get_option('bwdeb-employee-profile-identity', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdepix-employee-profile-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdepix_EmployeeProfile_widgets() ); 
		}
		if(get_option('bwdeb-horizontal-timeline-slider', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdhtsx-timeline-slider-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdhtsx_TimelineSlider_widgets() ); 
		}
		if(get_option('bwdeb-threesixty-rotation-view', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdtsrx-threesixty-rotation-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdtsrx_threesixtyRotation_widgets() ); 
		}
		if(get_option('bwdeb-woop-vendors', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdwpvx-woo-product-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdwpvx_ProductVendors_widgets() ); 
		}
		if(get_option('bwdeb-post-prestige-portfolio', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdpppx-post-portfolio-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdpppx_postPortfolio_widgets() ); 
		}
		if(get_option('bwdeb-apostst', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/apostst-filterable-main.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProBWDPostFGfilterable() ); 
		}
		if(get_option('bwdeb-widget-template', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/widget-template.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\ProfaqfgWelementorPlugiN() ); 
		}
		if(get_option('bwdeb-pssx', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdpssx-pricing-scheme-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdpssx_PricingSwitcher_widgets() ); 
		}
		if(get_option('bwdeb-blmx1', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/widgets-for-blm/bwdblmx-about-me-maker-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdblmx_Mak___() ); 
		}
		if(get_option('bwdeb-blmx2', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/widgets-for-blm/bwdblmx-bio-link-maker-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdblmx_Mm____() ); 
		}
		if(get_option('bwdeb-blmx3', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/widgets-for-blm/bwdblmx-social-media-maker-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdblmx_M__() ); 
		}
		if(get_option('bwdeb-svpx', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdsvpx-sticky-video-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdsvpx_Sti__() ); 
		}
		if(get_option('bwdeb-txsx', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdtxsx-tabify-suite-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdtxsx_Tabi__() ); 
		}
		if(get_option('bwdeb-vsix', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdvsix-vertical-slideshow-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdvsix_VerticalSlideshow_widgets() ); 
		}
		if(get_option('bwdeb-twpx', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/bwdtwpx-product-layout-widgets.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\Probwdtwpx_ThreeDProduct_widgets() ); 
		}
		if(get_option('bwdeb-random-image', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/random-image.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDrmx_random_image_widgets() ); 
		}
		if(get_option('bwdeb-mega-menu', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/mega-menu.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDmgmn_mega_menu_widgets() ); 
		}
		if(get_option('bwdeb-special-day-offer', 'off' ) =='on'){
			require_once( __DIR__ . '/widgets/special-day-offer.php' ); 
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\SPOFFERpro_Spacial_Day() ); 
		}
	}
	
	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdproeb-elementor-bundle-manager.php' );
		new Page_Settings();
	}

	public function bwdproeb_add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'bwdthebest_general_category',
			[
				'title' => esc_html__( 'General Group', BWDEB_ROOT_AUTHOR_PRO ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdthe_post_category',
			[
				'title' => esc_html__( 'Post Group', BWDEB_ROOT_AUTHOR_PRO ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdthecv_builder_category',
			[
				'title' => esc_html__( 'CV Build Group', BWDEB_ROOT_AUTHOR_PRO ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdthecv_builder_herosections',
			[
				'title' => esc_html__( 'Hero Sections', BWDEB_ROOT_AUTHOR_PRO ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdthe_woocommerce_category',
			[
				'title' => esc_html__( 'Woocommerce Group', BWDEB_ROOT_AUTHOR_PRO ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdproeb_all_assets_for_the_public(){
		// wp_enqueue_script( 'bwdproeb-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', ['jquery'], BWDEB_THE_PRO_SOFT_VERSION, true );
		require_once( __DIR__ . '/includes/ass-load.php' );
		wp_enqueue_style( 'bwdproeb-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
	}

	public function bwdproeb_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
			'proadmin-icon-style' => array('bwdproeb_path_admin_define'=>BWDEB_PRO_ASFSK_ASSETS_ADMIN_DIR_FILE . '/css/icon.css'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
			wp_enqueue_style( $handle, $fileinfo['bwdproeb_path_admin_define'], null, BWDEB_THE_PRO_SOFT_VERSION, 'all');
		}
	}

	public function bwdproeb_settings_plugin_action_link($pro_links, $pro_file){
		if(plugin_basename( BWDEB_THE_PLUGIN_FILE_PRO ) == $pro_file ) {
			$pro_settings_link = '<a href="' . admin_url( 'admin.php?page=bwdeb-plugin-main-menu' ) . '">'.esc_html__('Settings').'</a>';
			$pro_license_settings = '<a href="' . admin_url( 'admin.php?page=bwdproeb-license-settings' ) . '">'.esc_html__('License').'</a>';
			array_push( $pro_links, $pro_settings_link, $pro_license_settings );
		}
		return $pro_links;
	}

	public function register_footer_post_type() {
		$headerBoots = (get_option( 'bwdeb-header-builder', 'off' )=='on')?'Header':'';
		$footerBoots = (get_option( 'bwdeb-footer-builder', 'off' )=='on')?'Footer':'';
		$headerBfooterB = $headerBoots.' & '.$footerBoots;
		$headerBfooterBelse = $headerBoots.$footerBoots;
		$headerFooter = (get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on')?$headerBfooterB:$headerBfooterBelse;
		$labels = array(
			'name'               => _x( $headerFooter.' Builder', 'post type general name', BWDEB_ROOT_AUTHOR_PRO ),
			'singular_name'      => _x( $headerFooter.'', 'post type singular name', BWDEB_ROOT_AUTHOR_PRO ),
			'menu_name'          => _x( $headerFooter.' Builder', 'admin menu', BWDEB_ROOT_AUTHOR_PRO ),
			'name_admin_bar'     => _x( $headerFooter, 'add new on admin bar', BWDEB_ROOT_AUTHOR_PRO ),
			'add_new'            => _x( 'Add New', 'bwd-footer', BWDEB_ROOT_AUTHOR_PRO ),
			'add_new_item'       => __( 'Add New '.$headerFooter, BWDEB_ROOT_AUTHOR_PRO ),
			'new_item'           => __( 'New '.$headerFooter, BWDEB_ROOT_AUTHOR_PRO ),
			'edit_item'          => __( 'Edit '.$headerFooter, BWDEB_ROOT_AUTHOR_PRO ),
			'view_item'          => __( 'View '.$headerFooter, BWDEB_ROOT_AUTHOR_PRO ),
			'all_items'          => __( $headerFooter.' Builder', BWDEB_ROOT_AUTHOR_PRO ),
			'search_items'       => __( 'Search '.$headerFooter.' Builder', BWDEB_ROOT_AUTHOR_PRO ),
			'parent_item_colon'  => __( 'Parent '.$headerFooter.' Builder:', BWDEB_ROOT_AUTHOR_PRO ),
			'not_found'          => __( 'No '.$headerFooter.' found.', BWDEB_ROOT_AUTHOR_PRO ),
			'not_found_in_trash' => __( 'No '.$headerFooter.' found in Trash.', BWDEB_ROOT_AUTHOR_PRO )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => false,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'bwd-header-footer' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'supports'           => array('title', 'thumbnail', 'elementor'),
		);

		register_post_type( 'bwd-header-footer', $args );
	} 

	public function custom_header_footer_columns($columns) {
		unset($columns['date']);
		$columns['template_type'] = 'Template Type';
		$columns['display_rule'] = 'Display Rule';
		$columns['date'] = 'Date';

		return $columns;
	}

	public function custom_header_footer_column_content($column_name, $post_id) {
		if ($column_name == 'template_type') {
			$template_type = get_post_meta($post_id, 'bwd-template-type', true);
			echo esc_html($template_type);
		}
		if ($column_name == 'display_rule') {
			$display_rule = get_post_meta($post_id, 'bwd-display-on', true);
			echo esc_html($display_rule);
		}
	}

	public function custom_override_template($template_type) {
		if (class_exists('Elementor\Plugin') && !is_admin()) {
			$template_id = null;
			$args = array(
				'post_type'      => 'bwd-header-footer',
				'posts_per_page' => -1,
				'meta_query'     => array(
					'relation' => 'AND',
					array(
						'key'   => 'bwd-template-type',
						'value' => $template_type,
					),
				),
			);
			
			$template_posts = get_posts($args);
			foreach ($template_posts as $template_post) {
				$display_on = get_post_meta($template_post->ID, 'bwd-display-on', true);
				$display_off = get_post_meta($template_post->ID, 'bwd-display-off', true);
				$should_display = false;
				switch ($display_on) {
					case 'entire-website':
						$should_display = true;
						break;
					case 'all-singulars':
						$should_display = is_singular();
						break;
					case 'all-archives':
						$should_display = is_archive();
						break;
					case 'all-posts':
						$should_display = is_singular('post');
						break;
					case 'all-posts-archive':
						$should_display = is_post_type_archive('post');
						break;
					case 'all-posts-categories-archive':
						$should_display = is_category();
						break;
					case 'all-posts-tags-archive':
						$should_display = is_tag();
						break;
					case 'all-products':
						$should_display = is_singular('product');
						break;
					case 'all-products-archive':
						$should_display = is_post_type_archive('product');
						break;
					case 'all-product-categories-archive':
						$should_display = is_tax('product_cat');
						break;
					case 'all-product-tags-archive':
						$should_display = is_tax('product_tag');
						break;
				}
	
				// Check the "display off" conditions
				if ($should_display && $display_off) {
					switch ($display_off) {
						case 'entire-website':
							$should_display = false; 
							break;
						case 'all-singulars':
							if (is_singular()) $should_display = false;
							break;
						case 'all-archives':
							if (is_archive()) $should_display = false;
							break;
						case 'all-posts':
							if (is_singular('post')) $should_display = false;
							break;
						case 'all-posts-archive':
							if (is_post_type_archive('post')) $should_display = false;
							break;
						case 'all-posts-categories-archive':
							if (is_category()) $should_display = false;
							break;
						case 'all-posts-tags-archive':
							if (is_tag()) $should_display = false;
							break;
						case 'all-products':
							if (is_singular('product')) $should_display = false;
							break;
						case 'all-products-archive':
							if (is_post_type_archive('product')) $should_display = false;
							break;
						case 'all-product-categories-archive':
							if (is_tax('product_cat')) $should_display = false;
							break;
						case 'all-product-tags-archive':
							if (is_tax('product_tag')) $should_display = false;
							break;
					}
				}

				if ($should_display) {
					$elementor_content = \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($template_post->ID);
					if ($template_type === 'footer') {
						echo '<footer class="bwd-footer">' . $elementor_content . '</footer>';
					} elseif ($template_type === 'header') {
						echo '<header class="bwd-header">' . $elementor_content . '</header>';
					}
					break;
				}
			}
		}
	}

	public function custom_override_footer_template() {
		$this->custom_override_template('footer');
	}

    public function custom_override_header_template() {
        $this->custom_override_template('header');
    }

	public function bwdeb_add_metaboxes() {
		$headerBoots = (get_option( 'bwdeb-header-builder', 'off' )=='on')?'Header':'';
		$footerBoots = (get_option( 'bwdeb-footer-builder', 'off' )=='on')?'Footer':'';
		$headerBfooterB = $headerBoots.' & '.$footerBoots;
		$headerBfooterBelse = $headerBoots.$footerBoots;
		$headerFooter = (get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on')?$headerBfooterB:$headerBfooterBelse;
		add_meta_box('bwd-template-type', $headerFooter.' Template', array($this, 'bwdeb_template_type_callback'), 'bwd-header-footer', 'normal', 'high');
	}

	public function bwdeb_template_type_callback($post) {
		$options = get_post_meta($post->ID, 'bwd-template-type', true);
		$display_on_options = get_post_meta($post->ID, 'bwd-display-on', true);
		$display_off_options = get_post_meta($post->ID, 'bwd-display-off', true);
		?>
		<div class="bwd-template-select-wrapper">
			<label for="bwd-template-type">Template Type</label>
			<select name="bwd-template-type" id="bwd-template-type" class="bwd-template-select">
				<?php
				if(get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on'){
					echo '<option value="default"'.selected($options, 'default').'>Default</option>';
					echo '<option value="header"'.selected($options, 'header').'>Header</option>';
					echo '<option value="footer"'.selected($options, 'footer').'>Footer</option>';
				}elseif(get_option( 'bwdeb-header-builder', 'off' )=='on'){
					echo '<option value="header"'.selected($options, 'header').'>Header</option>';
				}elseif(get_option( 'bwdeb-footer-builder', 'off' )=='on'){
					echo '<option value="footer"'.selected($options, 'footer').'>Footer</option>';
				}
				?>
			</select>
		</div>
		<div class="bwd-display-on">
			<label for="bwd-display-on">Display On</label>
			<select name="bwd-display-on" id="bwd-display-on">
				<option value="select" <?php selected($display_on_options, 'select'); ?>>Select</option>
				<optgroup label="Basic">
					<option value="entire-website" <?php selected($display_on_options, 'entire-website'); ?>>Entire Website</option>
					<option value="all-singulars" <?php selected($display_on_options, 'all-singulars'); ?>>All Singulars</option>
					<option value="all-archives" <?php selected($display_on_options, 'all-archives'); ?>>All Archives</option>
				</optgroup>
				<optgroup label="Posts">
					<option value="all-posts" <?php selected($display_on_options, 'all-posts'); ?>>All Posts</option>
					<option value="all-posts-archive" <?php selected($display_on_options, 'all-posts-archive'); ?>>All Posts Archive</option>
					<option value="all-posts-categories-archive" <?php selected($display_on_options, 'all-posts-categories-archive'); ?>>All Posts Categories Archive</option>
					<option value="all-posts-tags-archive" <?php selected($display_on_options, 'all-posts-tags-archive'); ?>>All Posts Tags Archive</option>
				</optgroup>
				<optgroup label="Products">
					<option value="all-products" <?php selected($display_on_options, 'all-products'); ?>>All Products</option>
					<option value="all-products-archive" <?php selected($display_on_options, 'all-products-archive'); ?>>All Products Archive</option>
					<option value="all-product-categories-archive" <?php selected($display_on_options, 'all-product-categories-archive'); ?>>All Product Categories Archive</option>
					<option value="all-product-tags-archive" <?php selected($display_on_options, 'all-product-tags-archive'); ?>>All Product Tags Archive</option>
				</optgroup>
			</select>
		</div>	
		<div class="bwd-display-off">
			<label for="bwd-display-off">Do Not Display On</label>
			<select name="bwd-display-off" id="bwd-display-off"> 
				<option value="select" <?php selected($display_off_options, 'select'); ?>>Select</option>
				<optgroup label="Basic">
					<option value="entire-website" <?php selected($display_off_options, 'entire-website'); ?>>Entire Website</option>
					<option value="all-singulars" <?php selected($display_off_options, 'all-singulars'); ?>>All Singulars</option>
					<option value="all-archives" <?php selected($display_off_options, 'all-archives'); ?>>All Archives</option>
				</optgroup>
				<optgroup label="Posts">
					<option value="all-posts" <?php selected($display_off_options, 'all-posts'); ?>>All Posts</option>
					<option value="all-posts-archive" <?php selected($display_off_options, 'all-posts-archive'); ?>>All Posts Archive</option>
					<option value="all-posts-categories-archive" <?php selected($display_off_options, 'all-posts-categories-archive'); ?>>All Posts Categories Archive</option>
					<option value="all-posts-tags-archive" <?php selected($display_off_options, 'all-posts-tags-archive'); ?>>All Posts Tags Archive</option>
				</optgroup>
				<optgroup label="Products">
					<option value="all-products" <?php selected($display_off_options, 'all-products'); ?>>All Products</option>
					<option value="all-products-archive" <?php selected($display_off_options, 'all-products-archive'); ?>>All Products Archive</option>
					<option value="all-product-categories-archive" <?php selected($display_off_options, 'all-product-categories-archive'); ?>>All Product Categories Archive</option>
					<option value="all-product-tags-archive" <?php selected($display_off_options, 'all-product-tags-archive'); ?>>All Product Tags Archive</option>
				</optgroup>
			</select><span class="bwdebpro-select-description" title="When you select this, the page where the content will be hidden. So, please create a new content for the page.">i</span>
		</div>	
		<?php
	}

	public function save_bwdeb_template_type($post_id) {
		if (isset($_POST['bwd-template-type']) && isset($_POST['bwd-display-on']) && isset($_POST['bwd-display-off']) && $_POST['post_type'] == 'bwd-header-footer') {
			$template_type = sanitize_text_field($_POST['bwd-template-type']);
			$display_on = sanitize_text_field($_POST['bwd-display-on']);
			$display_off = sanitize_text_field($_POST['bwd-display-off']);
			update_post_meta($post_id, 'bwd-template-type', $template_type);
			update_post_meta($post_id, 'bwd-display-on', $display_on);
			update_post_meta($post_id, 'bwd-display-off', $display_off);
		}
	}
	
	public function bwdeb_hooks() {
		if(get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on'){
			add_action( 'get_header', [ $this, 'bwdeb_override_header' ] );
			add_action( 'get_footer', [ $this, 'bwdeb_override_footer' ] );
		}elseif(get_option( 'bwdeb-header-builder', 'off' )=='on'){
			add_action( 'get_header', [ $this, 'bwdeb_override_header' ] );
		}elseif(get_option( 'bwdeb-footer-builder', 'off' )=='on'){
			add_action( 'get_footer', [ $this, 'bwdeb_override_footer' ] );
		}
	}

	public function bwdeb_override_header() {
		require_once( __DIR__ . '/includes/header.php');
		$templates   = [];
		$templates[] = 'header.php';
		remove_all_actions( 'wp_head' );
		ob_start();
		locate_template( $templates, true );
		ob_get_clean();
	}
	
	public function bwdeb_override_footer() {
		require_once( __DIR__ . '/includes/footer.php');
		$templates   = [];
		$templates[] = 'footer.php';
		remove_all_actions( 'wp_footer' );
		ob_start();
		locate_template( $templates, true );
		ob_get_clean();
	}

	public function __construct() {
		if(get_option( 'bwdeb-header-builder', 'off' )=='on'||get_option( 'bwdeb-footer-builder', 'off' )=='on'){
			add_filter( 'whitelist_options', [$this,'bwdeb_plugin_settings_to_whitelist'] );
			add_action('add_meta_boxes', [$this,'bwdeb_add_metaboxes']);
			add_action('init', [$this,'register_footer_post_type']);
			if(get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on'){
				add_action('wp_footer', [$this, 'custom_override_footer_template']);
				add_action('wp_head', [$this, 'custom_override_header_template']);
			}elseif(get_option( 'bwdeb-header-builder', 'off' )=='on'){
				add_action('wp_head', [$this, 'custom_override_header_template']);
			}elseif(get_option( 'bwdeb-footer-builder', 'off' )=='on'){
				add_action('wp_footer', [$this, 'custom_override_footer_template']);
			}
			add_action('save_post', array($this, 'save_bwdeb_template_type'));
			add_filter('manage_bwd-header-footer_posts_columns', [$this, 'custom_header_footer_columns'], 99);
			add_action('manage_bwd-header-footer_posts_custom_column', [$this, 'custom_header_footer_column_content'], 10, 2);
			add_action('wp_ajax_create_new_template_post', [$this, 'bwdeb_single_template_popup']);
			add_action( 'wp', [ $this, 'bwdeb_hooks' ] );
		}
		add_filter( 'plugin_action_links', [$this,'bwdproeb_settings_plugin_action_link'], 10, 2 );
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdproeb_all_assets_for_elementor_editor_admin']);		
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdproeb_add_elementor_widget_categories' ] );
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdproeb_admin_editor_scripts' ] );		
		$this->add_page_settings_controls();
		if(class_exists( 'BWDEBElementorBundle' ) ) {
			add_action('wp_enqueue_scripts', [$this, 'bwdproeb_all_assets_for_the_public']);
			add_action( 'elementor/widgets/register', [ $this, 'bwdproeb_register_widgets' ] );
		}
	}

	public function bwdeb_single_template_popup() {
		if (isset($_POST['template_name']) && isset($_POST['template_type'])) {
			$template_name = sanitize_text_field($_POST['template_name']);
			$template_type = sanitize_text_field($_POST['template_type']);
			$post_args = array(
				'post_title' => $template_name,
				'post_type' => 'bwd-header-footer',
				'post_status' => 'publish'
			);
			$post_id = wp_insert_post($post_args);
			if ($post_id) {
				update_post_meta($post_id, '_bwd_template_type', $template_type);
			} else {
				echo '';
			}
		}
		wp_die();
	}
}

ProbwdproebElementorBundle::instance();
