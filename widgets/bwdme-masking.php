<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDMEmasking extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameMaskingEffects', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Masking Effects', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-maskingeffect';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwdme_masking_content_section',
			[
				'label' => esc_html__( 'Masking Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_style_selection',
			[
				'label' => esc_html__( 'Masking Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'style2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'style3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'style4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'style5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'style6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
					'style7' => esc_html__( 'Style 7', BWDEB_ROOT_AUTHOR_PRO ),
					'style8' => esc_html__( 'Style 8', BWDEB_ROOT_AUTHOR_PRO ),
					'style9' => esc_html__( 'Style 9', BWDEB_ROOT_AUTHOR_PRO ),
					'style10' => esc_html__( 'Style 10', BWDEB_ROOT_AUTHOR_PRO ),
					'style11' => esc_html__( 'Style 11', BWDEB_ROOT_AUTHOR_PRO ),
					'style12' => esc_html__( 'Style 12', BWDEB_ROOT_AUTHOR_PRO ),
					'style13' => esc_html__( 'Style 13', BWDEB_ROOT_AUTHOR_PRO ),
					'style14' => esc_html__( 'Style 14', BWDEB_ROOT_AUTHOR_PRO ),
					'style15' => esc_html__( 'Style 15', BWDEB_ROOT_AUTHOR_PRO ),
					'style16' => esc_html__( 'Style 16', BWDEB_ROOT_AUTHOR_PRO ),
					'style17' => esc_html__( 'Style 17', BWDEB_ROOT_AUTHOR_PRO ),
					'style18' => esc_html__( 'Style 18', BWDEB_ROOT_AUTHOR_PRO ),
					'style19' => esc_html__( 'Style 19', BWDEB_ROOT_AUTHOR_PRO ),
					'style20' => esc_html__( 'Style 20', BWDEB_ROOT_AUTHOR_PRO ),
					'style21' => esc_html__( 'Style 21', BWDEB_ROOT_AUTHOR_PRO ),
					'style22' => esc_html__( 'Style 22', BWDEB_ROOT_AUTHOR_PRO ),
					'style23' => esc_html__( 'Style 23', BWDEB_ROOT_AUTHOR_PRO ),
					'style24' => esc_html__( 'Style 24', BWDEB_ROOT_AUTHOR_PRO ),
					'style25' => esc_html__( 'Style 25', BWDEB_ROOT_AUTHOR_PRO ),
					'style26' => esc_html__( 'Style 26', BWDEB_ROOT_AUTHOR_PRO ),
					'style27' => esc_html__( 'Style 27', BWDEB_ROOT_AUTHOR_PRO ),
					'style28' => esc_html__( 'Style 28', BWDEB_ROOT_AUTHOR_PRO ),
					'style29' => esc_html__( 'Style 29', BWDEB_ROOT_AUTHOR_PRO ),
					'style30' => esc_html__( 'Style 30', BWDEB_ROOT_AUTHOR_PRO ),
					'style31' => esc_html__( 'Style 31', BWDEB_ROOT_AUTHOR_PRO ),
					'style32' => esc_html__( 'Style 32', BWDEB_ROOT_AUTHOR_PRO ),
					'style33' => esc_html__( 'Style 33', BWDEB_ROOT_AUTHOR_PRO ),
					'style34' => esc_html__( 'Style 34', BWDEB_ROOT_AUTHOR_PRO ),
					'style35' => esc_html__( 'Style 35', BWDEB_ROOT_AUTHOR_PRO ),
					'style36' => esc_html__( 'Style 36', BWDEB_ROOT_AUTHOR_PRO ),
					'style37' => esc_html__( 'Style 37', BWDEB_ROOT_AUTHOR_PRO ),
					'style38' => esc_html__( 'Style 38', BWDEB_ROOT_AUTHOR_PRO ),
					'style39' => esc_html__( 'Style 39', BWDEB_ROOT_AUTHOR_PRO ),
					'style40' => esc_html__( 'Style 40', BWDEB_ROOT_AUTHOR_PRO ),
					'style41' => esc_html__( 'Style 41', BWDEB_ROOT_AUTHOR_PRO ),
					'style42' => esc_html__( 'Style 42', BWDEB_ROOT_AUTHOR_PRO ),
					'style43' => esc_html__( 'Style 43', BWDEB_ROOT_AUTHOR_PRO ),
					'style44' => esc_html__( 'Style 44', BWDEB_ROOT_AUTHOR_PRO ),
					'style45' => esc_html__( 'Style 45', BWDEB_ROOT_AUTHOR_PRO ),
					'style46' => esc_html__( 'Style 46', BWDEB_ROOT_AUTHOR_PRO ),
					'style47' => esc_html__( 'Style 47', BWDEB_ROOT_AUTHOR_PRO ),
					'style48' => esc_html__( 'Style 48', BWDEB_ROOT_AUTHOR_PRO ),
					'style49' => esc_html__( 'Style 49', BWDEB_ROOT_AUTHOR_PRO ),
					'style50' => esc_html__( 'Style 50', BWDEB_ROOT_AUTHOR_PRO ),
					'style51' => esc_html__( 'Style 51', BWDEB_ROOT_AUTHOR_PRO ),
					'style52' => esc_html__( 'Style 52', BWDEB_ROOT_AUTHOR_PRO ),
					'style53' => esc_html__( 'Style 53', BWDEB_ROOT_AUTHOR_PRO ),
					'style54' => esc_html__( 'Style 54', BWDEB_ROOT_AUTHOR_PRO ),
					'style55' => esc_html__( 'Style 55', BWDEB_ROOT_AUTHOR_PRO ),
					'style56' => esc_html__( 'Style 56', BWDEB_ROOT_AUTHOR_PRO ),
					'style57' => esc_html__( 'Style 57', BWDEB_ROOT_AUTHOR_PRO ),
					'style58' => esc_html__( 'Style 58', BWDEB_ROOT_AUTHOR_PRO ),
					'style59' => esc_html__( 'Style 59', BWDEB_ROOT_AUTHOR_PRO ),
					'style60' => esc_html__( 'Style 60', BWDEB_ROOT_AUTHOR_PRO ),
					'style61' => esc_html__( 'Style 61', BWDEB_ROOT_AUTHOR_PRO ),
					'style62' => esc_html__( 'Style 62', BWDEB_ROOT_AUTHOR_PRO ),
					'style63' => esc_html__( 'Style 63', BWDEB_ROOT_AUTHOR_PRO ),
					'style64' => esc_html__( 'Style 64', BWDEB_ROOT_AUTHOR_PRO ),
					'style65' => esc_html__( 'Style 65', BWDEB_ROOT_AUTHOR_PRO ),
					'style66' => esc_html__( 'Style 66', BWDEB_ROOT_AUTHOR_PRO ),
					'style67' => esc_html__( 'Style 67', BWDEB_ROOT_AUTHOR_PRO ),
					'style68' => esc_html__( 'Style 68', BWDEB_ROOT_AUTHOR_PRO ),
					'style69' => esc_html__( 'Style 69', BWDEB_ROOT_AUTHOR_PRO ),
					'style70' => esc_html__( 'Style 70', BWDEB_ROOT_AUTHOR_PRO ),
					'style71' => esc_html__( 'Style 71', BWDEB_ROOT_AUTHOR_PRO ),
					'style72' => esc_html__( 'Style 72', BWDEB_ROOT_AUTHOR_PRO ),
					'customtext' => esc_html__( 'Custom Text', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_color',
			[
				'label' => esc_html__( 'Masking Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_title_for_sale30',
			[
				'label' => esc_html__( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('BEST WP DEVELOPER', BWDEB_ROOT_AUTHOR_PRO),
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
				'label_block' => true,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdme_masking_title_typography',
				'selector' => '{{WRAPPER}} .bwdme-custom-text-in',
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_salesk',
			[
				'type' => Controls_Manager::DIVIDER,
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_min_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_position',
			[
				'label' => esc_html__( 'Masking Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'center' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'auto' => esc_html__( 'Auto', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_size',
			[
				'label' => esc_html__( 'Masking Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'auto' => esc_html__( 'Auto', BWDEB_ROOT_AUTHOR_PRO ),
					'contain' => esc_html__( 'Contain', BWDEB_ROOT_AUTHOR_PRO ),
					'cover' => esc_html__( 'Cover', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_repeat_mask',
			[
				'label' => esc_html__( 'Masking Repeat', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat' => esc_html__( 'Repeat', BWDEB_ROOT_AUTHOR_PRO ),
					'no-repeat' => esc_html__( 'No-Repeat', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat-x' => esc_html__( 'Repeat-x', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat-y' => esc_html__( 'Repeat-y', BWDEB_ROOT_AUTHOR_PRO ),
					'round' => esc_html__( 'Round', BWDEB_ROOT_AUTHOR_PRO ),
					'space' => esc_html__( 'Space', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdme_background_content_section',
			[
				'label' => esc_html__( 'Background Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_masking_image',
			[
				'label' => esc_html__( 'Choose Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_min_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_attachment',
			[
				'label' => esc_html__( 'Bg Attachment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'paralax',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'paralax' => esc_html__( 'Paralax', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_position',
			[
				'label' => esc_html__( 'Background Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'center' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
					'top' => esc_html__( 'Top', BWDEB_ROOT_AUTHOR_PRO ),
					'bottom' => esc_html__( 'Bottom', BWDEB_ROOT_AUTHOR_PRO ),
					'left' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
					'right' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
					'auto' => esc_html__( 'Auto', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_size',
			[
				'label' => esc_html__( 'Background Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'auto' => esc_html__( 'Auto', BWDEB_ROOT_AUTHOR_PRO ),
					'contain' => esc_html__( 'Contain', BWDEB_ROOT_AUTHOR_PRO ),
					'cover' => esc_html__( 'Cover', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_repeat_masking',
			[
				'label' => esc_html__( 'Background Repeat', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat' => esc_html__( 'Repeat', BWDEB_ROOT_AUTHOR_PRO ),
					'no-repeat' => esc_html__( 'No-Repeat', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat-x' => esc_html__( 'Repeat-x', BWDEB_ROOT_AUTHOR_PRO ),
					'repeat-y' => esc_html__( 'Repeat-y', BWDEB_ROOT_AUTHOR_PRO ),
					'round' => esc_html__( 'Round', BWDEB_ROOT_AUTHOR_PRO ),
					'space' => esc_html__( 'Space', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdme_masking_style_section',
			[
				'label' => esc_html__( 'Masking Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'bwdme_masking_the_box_margin',
            [
                'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdme_masking_the_box_padding',
            [
                'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<?php
        if('style1' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking1">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style2' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking2">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style3' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking3">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style4' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking4">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style5' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking5">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style6' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking6">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style7' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking7">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style8' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking8">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style9' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking9">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style10' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking10">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style11' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking11">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style12' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking12">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style13' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking13">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style14' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking14">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style15' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking15">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style16' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking16">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style17' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking17">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style18' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking18">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style19' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking19">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style20' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking20">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style21' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking21">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style22' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking22">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style23' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking23">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style24' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking24">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style25' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking25">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style26' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking26">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style27' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking27">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style28' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking28">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style29' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking29">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style30' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking30">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style31' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking31">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style32' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking32">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style33' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking33">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style34' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking34">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style35' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking35">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style36' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking36">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style37' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking37">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style38' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking38">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style39' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking39">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style40' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking40">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style41' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking41">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style42' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking42">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style43' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking43">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style44' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking44">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style45' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking45">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style46' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking46">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style47' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking47">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style48' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking48">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style49' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking49">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style50' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking50">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style51' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking51">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style52' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking52">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style53' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking53">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style54' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking54">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style55' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking55">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style56' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking56">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style57' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking57">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style58' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking58">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style59' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking59">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style60' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking60">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style61' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking61">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style62' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking62">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style63' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking63">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style64' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking64">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style65' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking65">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style66' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking66">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style67' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking67">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style68' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking68">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style69' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking69">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style70' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking70">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style71' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking71">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style72' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking72">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('customtext' === $settings['bwdme_style_selection']){
			?>
			<div class="bwdme-svg-img bwdme-custom-text 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);">
				<div class="bwdme-custom-text-in 
				<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
				<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
				"><?php echo esc_html($settings['bwdme_masking_title_for_sale30']); ?></div>
			</div>
			<?php
		}
	}

}
