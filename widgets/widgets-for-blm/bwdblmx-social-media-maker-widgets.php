<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdblmx_M__ extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdblmx-bio-social-media', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Bio - Social Media', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle bwdblmx-MakerBioLink-social-icon';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() { 
		// our control function code goes here.

		$this->start_controls_section(
			'bwdblmx_social_section',
			[
				'label' => esc_html__( 'Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'social',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
			]
		);

	  $repeater->add_control(
            'link',
            [
                'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

		$this->add_control( 
	        'list',
	        [
	            'label' => esc_html__('Menu Items', BWDEB_ROOT_AUTHOR_PRO),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'text' => esc_html__( 'List Item #1', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #2', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #3', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-youtube',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #4', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-spotify',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #5', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-snapchat',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #6', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-linkedin',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #7', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => [
							'value' => 'fab fa-steam',
							'library' => 'fa-solid',
						],
					],
				],
	        ]
	    );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdblmx_social_style_section',
			[
				'label' => esc_html__( 'Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdblmx_social_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-icon-link' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdblmx_social_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-icon-link:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_responsive_control(
			'bwdblmx_social_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdblmx-social-media-links-innerx-containerx .bwdblmx-icon-link i' => 'font-size: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdblmx_social_gap',
			[
				'label' => esc_html__( 'Icon Gap', BWDEB_ROOT_AUTHOR_PRO ),
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
					'{{WRAPPER}} .bwdblmx-social-media-links-container' => 'gap: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdblmx_social_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Icons Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-social-media-links-alignment' => 'text-align: {{VALUE}}!important;',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);


		$this->end_controls_section();

	}

	protected function render() { 

		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();
		$list = $settings['list'];
		// get the individual values of the input
		
		?>

		<!-- Start rendering the output -->
		<div class="bwdblmx-social-media-links-alignment">
			<div class="bwdblmx-social-media-links-container">
			    <?php if ($list) {
					foreach ( $list as $item ) {
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                ?>   
						<div class="bwdblmx-social-media-links-innerx-containerx">
							<a class="bwdblmx-icon-link" target="_blank" href="<?php echo esc_url($link); ?>">
								<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
							</a>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<!-- End rendering the output finally-->

		<?php
	}	

}
