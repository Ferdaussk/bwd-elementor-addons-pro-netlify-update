<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdblmx_Mm____ extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdblmx-bio-link-maker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Bio Link Maker', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle bwdblmx-MakerBioLink-biolink-icon';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls() { 
		// our control function code goes here.

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content Section', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'version',
			[
				'label' => esc_html__( 'Version', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'v1',
				'options' => [
					'v1' => esc_html__( 'v1', BWDEB_ROOT_AUTHOR_PRO ),
					'v2'  => esc_html__( 'v2', BWDEB_ROOT_AUTHOR_PRO ),
					'v3' => esc_html__( 'v3', BWDEB_ROOT_AUTHOR_PRO ),
					'v4' => esc_html__( 'v4', BWDEB_ROOT_AUTHOR_PRO ),
					'v5' => esc_html__( 'v5', BWDEB_ROOT_AUTHOR_PRO ),
					'v6' => esc_html__( 'v6', BWDEB_ROOT_AUTHOR_PRO ),
					'v7' => esc_html__( 'v7', BWDEB_ROOT_AUTHOR_PRO ),
					'v8' => esc_html__( 'v8', BWDEB_ROOT_AUTHOR_PRO ),
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'card_color',
			[
				'label' => esc_html__( 'Card Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-bio-links-innerx-containerx' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'bio_links_image',
			[
				'label' => esc_html__( 'Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bio_links_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Your description goes here.', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => 'Basic Description and More',
			],
		);	

		$repeater->add_control(
            'padding_description',
            [
                'label' => esc_html__( 'Description Padding', BWDEB_ROOT_AUTHOR_PRO ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .bwdblmx-bio-links-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'default' => [
                'unit' => 'px',
                'size' => 150,
            ],
         ]
       );

		$repeater->add_control(
			'btn_title',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Button',
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater->add_control(
			'bwdblmx_bttn_color',
			[
				'label' => esc_html__( 'Button Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-bio-links-button' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'button_color',
			[
				'label' => esc_html__( 'Button BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);

		$repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'social',
			]
		);

		$repeater->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#1e2330',
			]
		);
		$repeater->add_responsive_control(
			'bwdblmx_icon__size',
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
					'{{WRAPPER}} .bwdblmx-bio-links-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
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
						'bio_links_description' => esc_html__( 'Basic Description and More', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bio_links_description' => esc_html__( 'The Best Capussino Blends', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bio_links_description' => esc_html__( 'Arts: Sailing Rivers Painting', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bio_links_description' => esc_html__( 'One of the Fine Diamond', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
	        ]
	    );

		$this->end_controls_section();

		// Description Style Section--------------------------------
		$this->start_controls_section(
			'bwdblmx_desc_style_section',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdblmx_desc__typography',
				'selector' => '{{WRAPPER}} .bwdblmx-bio-links-description',
			]
		);
		$this->add_control(
			'bwdblmx_desc__color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-bio-links-description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		// Description Style Section--------------------------------
		$this->start_controls_section(
			'bwdblmx_button_style_section',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdblmx_button__typography',
				'selector' => '{{WRAPPER}} .bwdblmx-bio-links-button',
			]
		);
		$this->add_control(
			'bwdblmx_button__color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-bio-links-button' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdblmx_button__BGcolor',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdblmx-bio-links-button' => 'background-color: {{VALUE}}!important',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() { 

		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();
		// get the individual values of the input
		$list = $settings['list'];
		$version = $settings['version'];
		?>

		<!-- Start rendering the output -->
		<?php if($version == "v1"){?>
			<div class="bwdblmx-bio-links-container">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
						    <div class="bwdblmx-bio-links-img-holder">
						        <?php echo '<img src="' . esc_url( $item['bio_links_image']['url'] ) . '" alt="my-image">'; ?>
						    </div>
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content ">				        	
					            <div class="bwdblmx-bio-links-button" style="background:<?php echo esc_attr($button_color)?>">
					            	<?php if(!empty($btn_title)){ ?>
					                	<?php echo esc_html($btn_title) ?>
					                <?php } ?>
					                <?php if(!empty($icon)){ ?>
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
						            <?php } ?>
					            </div>				        	
					        </div>
					        <a target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v2"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v2">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v3"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v3">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v4"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v4">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v5"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v5">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v6"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v6">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v7"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v7">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
		                	<div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button">
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
					            </div>				        	
					        </div>
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html($bio_links_description);  ?>
					        </div>
					        <a class="bwdblmx-bio-links-hover" target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($version == "v8"){?>
			<div class="bwdblmx-bio-links-container bwdblmx-bio-links-container-v8">
				<?php if ($list) {
					foreach ( $list as $item ) {
						$card_color = $item['card_color'];
						$bio_links_image = $item['bio_links_image'];
						$bio_links_description = $item['bio_links_description'];
		                $icon = $item['icon'];
		                $link = $item['link']['url'];
		                // $btn_url = $item['btn_url'];
		                $btn_title = $item['btn_title'];
		                $icon_color = $item['icon_color'];
		                $button_color = $item['button_color'];

		                ?>   
		                <div class="bwdblmx-bio-links-innerx-containerx" style="background-color:<?php echo esc_attr($card_color)?>">
						    <div class="bwdblmx-bio-links-img-holder">
						        <?php echo '<img src="' . esc_url( $item['bio_links_image']['url'] ) . '" alt="my-image">'; ?>
						    </div>
					        <div class="bwdblmx-bio-links-description">
				                <?php echo esc_html( $bio_links_description);  ?>
					        </div>
					        <div class="bwdblmx-bio-links-inner-content">				        	
					            <div class="bwdblmx-bio-links-button" style="background:<?php echo esc_attr($button_color)?>">
					            	<?php if(!empty($btn_title)){ ?>
					                	<?php echo esc_html($btn_title) ?>
					                <?php } ?>
					                <?php if(!empty($icon)){ ?>
					                <div class="bwdblmx-bio-links-icon" style="color:<?php echo esc_attr($icon_color)?>">   	
					            		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						            </div>
						            <?php } ?>
					            </div>				        	
					        </div>
					        <a target="_blank" href="<?php echo esc_url($link); ?>">
					        </a>
					    </div>
		        	<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
		<!-- End rendering the output finally-->

		<?php
	}	

}