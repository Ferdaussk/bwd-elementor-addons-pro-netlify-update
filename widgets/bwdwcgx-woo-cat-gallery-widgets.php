<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class bwdwcgxHelper
{
	public static function autoPrefix($item)
	{
		return strpos($item, 'bwdwcgx-product-categories-elementor') === false ? 'bwdwcgx-product-categories-elementor' . '-' . $item : $item;
	}

	public static function renderStyle1(array $aItem, array $aSettings)
	{
		?>
		<div class="bwdwcgx-col">
			<a href="<?php echo esc_url($aItem["link"]["url"]); ?>"
			   target="<?php echo esc_attr($aItem["link"]["target"]); ?>"
			   class="bwdwcgx-collection bwdwcgx-collection-style1"
			   style="--color-background-color: <?php echo esc_attr($aSettings["item_background_color"]); ?>"
			>
				<div class="bwdwcgx-image">
					<?php
					if (!empty($aItem["img_url"])) {
						?>
						<img
							src="<?php echo esc_url($aItem["img_url"]) ?>"
							alt="<?php echo esc_attr($aItem["name"]); ?>"
						/>
						<?php
					}
					?>
				</div>
				<h2 class="bwdwcgx-h2"
				    style="--color-text: <?php echo esc_attr($aSettings["text_color"]); ?>;--color-text-hover: <?php echo esc_attr($aSettings["text_hover_color"]); ?>;--color-text-background: <?php echo esc_attr($aSettings["text_background_color"]); ?>;">
					<?php echo esc_html($aItem["name"]); ?>
				</h2>
			</a>
		</div>
		<?php
	}

	public static function renderStyle2(array $aItem, array $aSettings)
	{
		?>
		<div class="bwdwcgx-col">
			<a href="<?php echo esc_url($aItem["link"]["url"]); ?>"
			   target="<?php echo esc_attr($aItem["link"]["target"]); ?>"
			   class="bwdwcgx-collection bwdwcgx-collection-style2">
				<div class="bwdwcgx-image">
					<?php
					if (!empty($aItem["img_url"])) {
						?>
						<img
							src="<?php echo esc_url($aItem["img_url"]) ?>"
							alt="<?php echo esc_attr($aItem["name"]); ?>"
						/>
						<?php
					}
					?>
				</div>
				<h2 class="bwdwcgx-h2"
				    style="--color-text: <?php echo esc_attr($aSettings["text_color"]); ?>;--color-text-hover: <?php echo esc_attr($aSettings["text_hover_color"]); ?>;--color-text-background: <?php echo esc_attr($aSettings["text_background_color"]); ?>;">
					<?php echo esc_html($aItem["name"]); ?>
				</h2>
			</a>
		</div>
		<?php
	}

	public static function renderStyle3(array $aItem, array $aSettings)
	{
		?>
		<div class="bwdwcgx-col">
			<a href="<?php echo esc_url($aItem["link"]["url"]); ?>"
			   target="<?php echo esc_attr($aItem["link"]["target"]); ?>"
			   class="bwdwcgx-collection bwdwcgx-collection-style3">
				<div class="bwdwcgx-image">
					<?php
					if (!empty($aItem["img_url"])) {
						?>
						<img
							src="<?php echo esc_url($aItem["img_url"]) ?>"
							alt="<?php echo esc_attr($aItem["name"]); ?>"
						/>
						<?php
					}
					?>
				</div>
				<h2 class="bwdwcgx-h2"
				    style="--color-text: <?php echo esc_attr($aSettings["text_color"]); ?>;--color-text-hover: <?php echo esc_attr($aSettings["text_hover_color"]); ?>;--color-text-background: <?php echo esc_attr($aSettings["text_background_color"]); ?>;">
					<?php echo esc_html($aItem["name"]); ?>
				</h2>
			</a>
		</div>
		<?php
	}

	public static function renderStyle4(array $aItem, array $aSettings)
	{
		?>
		<div class="bwdwcgx-col">
			<a href="<?php echo esc_url($aItem["link"]["url"]); ?>"
			   target="<?php echo esc_attr($aItem["link"]["target"]); ?>"
			   class="bwdwcgx-collection bwdwcgx-collection-style4">
				<div class="bwdwcgx-image">
					<?php
					if (!empty($aItem["img_url"])) {
						?>
						<img
							src="<?php echo esc_url($aItem["img_url"]) ?>"
							alt="<?php echo esc_attr($aItem["name"]); ?>"
						/>
						<?php
					}
					?>
				</div>
				<h2
				    style="--color-text: <?php echo esc_attr($aSettings["text_color"]); ?>;--color-text-hover: <?php echo esc_attr($aSettings["text_hover_color"]); ?>;--color-text-background: <?php echo esc_attr($aSettings["text_background_color"]); ?>;">
					<div  class="bwdwcgx-h2"><?php echo esc_html($aItem["name"]); ?></div>
				</h2>
			</a>
		</div>
		<?php
	}

	public static function renderItem(array $aItem, array $aSettings = [])
{
    if (!empty($aItem["featured_image"]) && !empty($aItem["featured_image"]["id"])) {
        $aItem["img_url"] = wp_get_attachment_image_url($aItem["featured_image"]["id"], "large");
    } else {
        $thumbnailId = get_term_meta($aItem["cat_id"], 'thumbnail_id', true);
        $aItem["img_url"] = wp_get_attachment_image_url($thumbnailId, "large");
    }

    if (!empty($aItem["custom_link"]) && !empty($aItem["custom_link"]["url"])) {
        $link = !empty($aItem["link"]) && !empty($aItem["link"]["url"]) ? $aItem["link"]["url"] : "";
        $target = !empty($aItem["link"]) && $aItem["link"]["is_external"] == "on" ? "_blank" : "_self";
        $name = !empty($aItem["custom_name"]) ? $aItem["custom_name"] : "";
    } else {
        $oTerm = get_term($aItem["cat_id"], "product_cat");
        if (is_wp_error($oTerm)) {
            // Handle the error gracefully, e.g., by setting default values.
            $link = "";
            $target = "_blank";
            $name = "";
        } else {
            $link = get_term_link($oTerm);
            $target = "_blank";
            $name = $oTerm->name;
        }
    }

    $aItem["link"] = [
        "url"    => $link,
        "target" => $target
    ];

    $aItem["name"] = $name;

    switch ($aSettings["style"]) {
        case "style1":
            self::renderStyle1($aItem, $aSettings);
            break;
        case "style2":
            self::renderStyle2($aItem, $aSettings);
            break;
        case "style3":
            self::renderStyle3($aItem, $aSettings);
            break;
        case "style4":
            self::renderStyle4($aItem, $aSettings);
            break;
    }
}


}



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdwcgx_WooCatGallery_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdwcgx-woocat-gallery-pro', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'WooCat Gallery Pro', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-product-categories bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthe_woocommerce_category' ];
	}

	protected function getTerms()
	{
		$aTerms = get_terms([
			'taxonomy'   => 'product_cat',
			'hide_empty' => false
		]);

		if (empty($aTerms) || is_wp_error($aTerms)) {
			return [
				"" => esc_html__("No category found", "bwdwcgx-woocat-gallery")
			];
		}

		$aOptions = [
			"---" => esc_html__("Select a category", "bwdwcgx-woocat-gallery")
		];

		foreach ($aTerms as $oTerm) {
			$aOptions[$oTerm->term_id] = $oTerm->name;
		}

		return $aOptions;
	}

    protected function register_controls()
	{
		$this->start_controls_section(
			'bwdwcgx_product_categories_heading_section_content',
			[
				'label' => esc_html__('Heading Settings', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			"heading",
			[
				"label"   => esc_html__("Title", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::TEXT,
				"default" => "Best selling collections"
			]
		);

		$this->add_control(
			"description",
			[
				"label"   => esc_html__("Description", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::TEXTAREA,
				"default" => "Discover our curated collection of stylish clothing and accessories. Elevate your fashion game with us!"
			]
		);

		$this->add_control(
			"heading_alignment",
			[
				"label"   => esc_html__("Heading Alignment", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"default" => "center",
				"options" => [
					"left"   => esc_html__("Left", "bwdwcgx-woocat-gallery"),
					"right"  => esc_html__("Right", "bwdwcgx-woocat-gallery"),
					"center" => esc_html__("Center", "bwdwcgx-woocat-gallery")
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdwcgx_product_categories_item_section_content',
			[
				'label' => esc_html__('Items Settings', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			"style",
			[
				"label"   => esc_html__("Style", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"options" => [
					"style1" => esc_html__("Style 1", "bwdwcgx-woocat-gallery"),
					"style2" => esc_html__("Style 2", "bwdwcgx-woocat-gallery"),
					"style3" => esc_html__("Style 3", "bwdwcgx-woocat-gallery"),
					"style4" => esc_html__("Style 4", "bwdwcgx-woocat-gallery")
				],
				"default" => "style1"
			]
		);

		// Repeater control for Title and Description fields
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			"cat_id",
			[
				"label"   => esc_html__("Category", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT2,
				"options" => $this->getTerms()
			]
		);

		$repeater->add_control(
			"custom_name",
			[
				"label"       => esc_html__("Custom Name", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("This setting overrides the Category name. Please input link to enable this field", "bwdwcgx-woocat-gallery"),
				"type"        => \Elementor\Controls_Manager::TEXT
			]
		);

		$repeater->add_control(
			"custom_link",
			[
				"label"       => esc_html__("Custom Link", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("This setting overrides the Category link.", "bwdwcgx-woocat-gallery"),
				"type"        => \Elementor\Controls_Manager::URL
			]
		);

		$repeater->add_control(
			"featured_image",
			[
				"label"       => esc_html__("Featured Image", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("This setting  overrides the Category featured image.","bwdwcgx-woocat-gallery"),
				"type"        => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		// Repeatable control for Title and Description fields
		$this->add_control(
			'items',
			[
				'label'  => esc_html__('Items', 'bwdwcgx-swaying-photo-gallery'),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'default' => [
					[
						'featured_image' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'featured_image' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'featured_image' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'featured_image' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
				],
				'fields' => $repeater->get_controls()
			]
		);

		$this->end_controls_section();;

		$this->start_controls_section(
			'bwdwcgx_product_categories_bottom_section_content',
			[
				'label' => esc_html__('Bottom Settings', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_view_more_typography',
				'selector' => '{{WRAPPER}} .bwdwcgx-btn-view-more span',
			]
		);

		$this->add_control(
			"view_all_btn_name",
			[
				"label"   => esc_html__("View All Button Name", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("Please input link to enable this field", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::TEXT,
				"default" => "View All Collections",
				"label_block" => true,
			]
		);

		$this->add_control(
			"view_all_btn_link",
			[
				"label" => esc_html__("View All Button Link", "bwdwcgx-woocat-gallery"),
				"type"  => \Elementor\Controls_Manager::URL
			]
		);

		$this->add_control(
			'view_all_btn_icon',
			[
				'label' => esc_html__( 'View All Button Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-angle-right',
					'library' => 'fa-solid',
				],
			]
		);
		$this->add_responsive_control(
			'view_all_btn_icon_gap',
			[
				'label' => esc_html__( 'Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-container .bwdwcgx-btn-view-more' => 'gap: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			"view_all_btn_text_color",
			[
				"label"   => esc_html__("View All Button Text Color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#000"
			]
		);

		$this->add_control(
			"view_all_btn_hover_color",
			[
				"label"   => esc_html__("View All Button Hover Color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#000"
			]
		);

		$this->add_control(
			"view_all_btn_bg_color",
			[
				"label"   => esc_html__("View All Button Background Color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#e5e5e5"
			]
		);

		$this->add_control(
			"view_all_btn_hover_bg_color",
			[
				"label"   => esc_html__("View All Button Hover Background Color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#f7797d"
			]
		);

		$this->add_control(
			"button_alignment",
			[
				"label"   => esc_html__("Alignment", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"default" => "center",
				"options" => [
					"left"   => esc_html__("Left", "bwdwcgx-woocat-gallery"),
					"right"  => esc_html__("Right", "bwdwcgx-woocat-gallery"),
					"center" => esc_html__("Center", "bwdwcgx-woocat-gallery")
				]
			]
		);
		$this->add_responsive_control(
			'button_view_more_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-container .bwdwcgx-btn-view-more' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'button_view_more_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-container .bwdwcgx-btn-view-more' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdwcgx_product_responsive_section',
			[
				'label' => esc_html__('Responsive', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			"lg_items_per_row",
			[
				"label"   => esc_html__("Items Per Row (>= 992px)", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"options" => [
					"bwdwcgx-row-cols-lg-8" => esc_html__("8 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-7" => esc_html__("7 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-6" => esc_html__("6 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-5" => esc_html__("5 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-4" => esc_html__("4 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-3" => esc_html__("3 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-lg-2" => esc_html__("2 items per row", "bwdwcgx-woocat-gallery")
				],
				"default" => "bwdwcgx-row-cols-lg-4"
			]
		);

		$this->add_control(
			"md_items_per_row",
			[
				"label"   => esc_html__("Items Per Row (>= 768px)", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"options" => [
					"bwdwcgx-row-cols-md-8" => esc_html__("8 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-7" => esc_html__("7 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-6" => esc_html__("6 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-5" => esc_html__("5 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-4" => esc_html__("4 items  per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-3" => esc_html__("3 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-md-2" => esc_html__("2 items per row", "bwdwcgx-woocat-gallery")
				],
				"default" => "bwdwcgx-row-cols-md-4"
			]
		);

		$this->add_control(
			"sm_items_per_row",
			[
				"label"   => esc_html__("Items Per Row (>= 576px)", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"options" => [
					"bwdwcgx-row-cols-sm-6" => esc_html__("6 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-sm-5" => esc_html__("5 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-sm-4" => esc_html__("4 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-sm-3" => esc_html__("3 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-sm-2" => esc_html__("2 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-sm-1" => esc_html__("1 items per row", "bwdwcgx-woocat-gallery"),
				],
				"default" => "bwdwcgx-row-cols-sm-4"
			]
		);

		$this->add_control(
			"xs_items_per_row",
			[
				"label"   => esc_html__("Items Per Row (< 576px)", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::SELECT,
				"options" => [
					"bwdwcgx-row-cols-6" => esc_html__("6 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-5" => esc_html__("5 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-4" => esc_html__("4 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-3" => esc_html__("3 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-2" => esc_html__("2 items per row", "bwdwcgx-woocat-gallery"),
					"bwdwcgx-row-cols-1" => esc_html__("1 items per row", "bwdwcgx-woocat-gallery"),
				],
				"default" => "bwdwcgx-row-cols-2"
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdwcgx_product_categories_section_style',
			[
				'label' => esc_html__('Extra Settings', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			"text_color",
			[
				"label"   => esc_html__("Text color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#f7797d"
			]
		);

		$this->add_control(
			"text_hover_color",
			[
				"label"   => esc_html__("Text hover color", "bwdwcgx-woocat-gallery"),
				"type"    => \Elementor\Controls_Manager::COLOR,
				"default" => "#f7797d"
			]
		);

		$this->add_control(
			"text_background_color",
			[
				"label"       => esc_html__("Button Background Color", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("This setting is only applied for Style 4", "bwdwcgx-woocat-gallery"),
				"type"        => \Elementor\Controls_Manager::COLOR,
				"default"     => "#f7797d"
			]
		);

		$this->add_control(
			"item_background_color",
			[
				"label"       => esc_html__("Item Background Color", "bwdwcgx-woocat-gallery"),
				"description" => esc_html__("This setting is only applied for Style 1", "bwdwcgx-woocat-gallery"),
				"type"        => \Elementor\Controls_Manager::COLOR,
				"default"     => "#F2FCEF"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'category_typography',
				'selector' => '{{WRAPPER}} .bwdwcgx-h2',
			]
		);

		$this->add_responsive_control(
			'category_margin',
			[
				'label' => esc_html__( 'Category Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_responsive_control(
			'every_items_margin',
			[
				'label' => esc_html__( 'Item Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-col' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_desc_section_style',
			[
				'label' => esc_html__('Title & Description', BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'title_desc_section_gap',
			[
				'label' => esc_html__( 'Section Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-heading' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			'title_heading',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'main_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-heading__title' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'main_title__typography',
				'selector' => '{{WRAPPER}} .bwdwcgx-heading__title',
			]
		);
		$this->add_responsive_control(
			'main_title__bottom_gap',
			[
				'label' => esc_html__( 'Bottom Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-heading__title' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);


		$this->add_control(
			'title_desc_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'desc_heading',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'main_desc_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwcgx-heading__description' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'main_desc__typography',
				'selector' => '{{WRAPPER}} .bwdwcgx-heading__description',
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$aSettings = $this->get_settings_for_display();

		if (empty($aSettings)) {
			return;
		}

		if (empty($aSettings["items"])) {
			return;
		}

		$aWrapperClasses[] = "bwdwcgx-row";
		$aWrapperClasses[] = $aSettings["lg_items_per_row"];
		$aWrapperClasses[] = $aSettings["md_items_per_row"];
		$aWrapperClasses[] = $aSettings["sm_items_per_row"];
		$aWrapperClasses[] = $aSettings["xs_items_per_row"];
		?>
		<div class="bwdwcgx-product-categories-wrapper bwdwcgx-container">


			<?php if (!empty($aSettings["heading"]) || !empty($aSettings["description"])) : ?>
				<div class="bwdwcgx-col-xs-12 bwdwcgx-col-sm-12 bwdwcgx-col-md-12 bwdwcgx-col-lg-12">
					<div class="bwdwcgx-heading" style="text-align: <?php echo esc_attr($aSettings["heading_alignment"]); ?>">
						<?php if (!empty($aSettings["heading"])) : ?>
							<h2 class="bwdwcgx-heading__title"><?php echo esc_html($aSettings["heading"]); ?></h2>
						<?php endif; ?>

						<?php if (!empty($aSettings["description"])) : ?>
							<p class="bwdwcgx-heading__description">
								<?php echo esc_html($aSettings["description"]); ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="bwdwcgx-col-xs-12 bwdwcgx-col-sm-12 bwdwcgx-col-md-12 bwdwcgx-col-lg-12">
				<div
					class="bwdwcgx-row <?php echo esc_attr(implode(" ", $aWrapperClasses)); ?>"
				>
					<?php
					foreach ($aSettings["items"] as $aItem) {
						bwdwcgxHelper::renderItem($aItem, $aSettings);
					}
					?>
				</div>
			</div>

			<?php
			$link = !empty($aSettings["view_all_btn_link"]) && !empty($aSettings["view_all_btn_link"]["url"]) ?
				$aSettings["view_all_btn_link"]["url"] : "";
			$target = !empty($aSettings["view_all_btn_link"]) && $aSettings["view_all_btn_link"]["is_external"] == "on" ? "_blank" :
				"_self";
			?>

			<?php if (!empty($link)) : ?>
				<div class="bwdwcgx-col-xs-12 bwdwcgx-col-sm-12 bwdwcgx-col-md-12 bwdwcgx-col-lg-12" style="text-align: <?php echo esc_attr($aSettings["button_alignment"]); ?>;">
					<a class="bwdwcgx-btn-view-more"
					   style="--button-color: <?php echo esc_attr($aSettings["view_all_btn_text_color"]) ?>;
						   --button-bg-color: <?php echo esc_attr($aSettings["view_all_btn_bg_color"]) ?>;
						   --button-hover-color: <?php echo esc_attr($aSettings["view_all_btn_hover_color"]) ?>;
						   --button-hover-bg-color: <?php echo esc_attr($aSettings["view_all_btn_hover_bg_color"]) ?>"
					   target="<?php echo esc_attr($target); ?>"
					   href="<?php echo esc_url($link); ?>">
						<span><?php echo esc_html($aSettings["view_all_btn_name"]) ?></span>
						<span><?php \Elementor\Icons_Manager::render_icon( $aSettings['view_all_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
			<?php endif; ?>
		</div>
		<?php
	}

}