<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Modules\DynamicTags\Module as TagsModule;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdvsix_VerticalSlideshow_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdvsix-vertical-split-slideshow', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Vertical Split Slideshow', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-slideshow';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

        $this->start_controls_section(
			'bwdvsix_repeater_section',
			[
				'label' => esc_html__( 'Slide Repeater', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'bwdvsix_item_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $repeater->add_control(
			'bwdvsix_item_title',
			[
				'label' => esc_html__( 'Image Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        //main-repeater
		$this->add_control(
			'bwdvsix_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
                        'bwdvsix_item_title' => esc_html__( 'Title' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdvsix_item_image' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        
					],
                    [
                        'bwdvsix_item_title' => esc_html__( 'Title' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdvsix_item_image' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        
					],
                    [
                        'bwdvsix_item_title' => esc_html__( 'Title' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdvsix_item_image' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        
					],
                    [
                        'bwdvsix_item_title' => esc_html__( 'Title' , BWDEB_ROOT_AUTHOR_PRO ),
						'bwdvsix_item_image' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        
					],
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'bwdvsix_slide_style_section',
			[
				'label' => esc_html__( 'Slide', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_responsive_control(
			'bwdvsix_slide_height',
			[
				'label' => esc_html__( 'Slide Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-split-slideshow, {{WRAPPER}} .bwdvsix-slideshow .bwdvsix-slider .item.slick-slide' => 'height: {{SIZE}}{{UNIT}}!important; min-height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
			'bwdvsix_slide_title_options',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        $this->add_control(
			'bwdvsix_slide_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-split-slideshow .bwdvsix-slideshow-text .item' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdvsix_slide_title_typography',
				'selector' => '{{WRAPPER}} .bwdvsix-split-slideshow .bwdvsix-slideshow-text .item',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdvsix_slide_title_shadow',
				'selector' => '{{WRAPPER}} .bwdvsix-split-slideshow .bwdvsix-slideshow-text .item',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'bwdvsix_dots_style_section',
			[
				'label' => esc_html__( 'Dots', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->start_controls_tabs(
			'bwdvsix_dots_style_tabs'
		);

		$this->start_controls_tab(
			'bwdvsix_dots_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_responsive_control(
			'bwdvsix_dots_style_gap',
			[
				'label' => esc_html__( 'Gap Between Dots', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'bwdvsix_dots_style_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li button' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'bwdvsix_dots_style_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li button' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'bwdvsix_dots_style_offestX',
			[
				'label' => esc_html__( 'Offest X', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'bwdvsix_dots_style_offestY',
			[
				'label' => esc_html__( 'Offest Y', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'bwdvsix_dots_style_BGcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li button' => 'background: {{VALUE}}!important',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdvsix_dots_style_border',
				'selector' => '{{WRAPPER}} .bwdvsix-slideshow .slick-dots li button',
			]
		);
        $this->add_control(
			'bwdvsix_dots_style_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->end_controls_tab();

        $this->start_controls_tab(
			'bwdvsix_dots_style_active_tab',
			[
				'label' => esc_html__( 'Active', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

        $this->add_responsive_control(
			'bwdvsix_dots_style_width_active',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li.slick-active button' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'bwdvsix_dots_style_height_active',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li.slick-active button' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'bwdvsix_dots_style_BGcolor_active',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li.slick-active button' => 'background: {{VALUE}}!important',
				],
			]
		);
        $this->add_control(
			'bwdvsix_dots_style_borderc_active',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvsix-slideshow .slick-dots li.slick-active button' => 'border-color: {{VALUE}}!important',
				],
			]
		);

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();

    } 

	protected function render(){
        $settings = $this->get_settings_for_display();?>

        <div class="bwdvsix-split-slideshow">
            <div class="bwdvsix-slideshow">
                <div class="bwdvsix-slider">
                <?php if ( $settings['bwdvsix_main_repetater'] ) { 
					foreach (  $settings['bwdvsix_main_repetater'] as $repet ) {?>
                        <div class="item"><img src="<?php echo $repet['bwdvsix_item_image']['url']; ?>" /></div>
                    <?php } } ?>
                </div>
            </div>
            <div class="bwdvsix-slideshow-text">
            <?php if ( $settings['bwdvsix_main_repetater'] ) { 
					foreach (  $settings['bwdvsix_main_repetater'] as $repet ) {?>

                        <div class="item"><?php echo $repet['bwdvsix_item_title']; ?></div>
            <?php } } ?>
            </div>
        </div>

        <?php
    }

}