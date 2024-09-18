<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Probwdpdfx_ViewPdfClear_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdpdfx-view-pdf-clear', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Clear PDF View', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdpdfx-ViewPdfClear-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    protected function register_controls(){

	/**
     * Register widget content controls
    */
		$this->__pdf_content_controls();
        $this->__pdf_settings_controls();

	/**
     * Register widget style controls
    */
		$this->__title_desc_style_controls();
		$this->__button_style_controls();

	}

	protected function __pdf_content_controls() {
        $this->start_controls_section(
            '_section_pdf_content',
            [
                'label' => __('PDF Source', BWDEB_ROOT_AUTHOR_PRO),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
		$this->add_control(
			'file_type',
			[
				'label' => __('File Source', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' =>[
					'url' => __('URL', BWDEB_ROOT_AUTHOR_PRO),
					'upload_file' => __('Upload File', BWDEB_ROOT_AUTHOR_PRO),
				],
                'default' => 'url'
			]
		);

		$this->add_control(
			'pdf_url',
			[
				'label' => __('PDF URL', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'http://www.example.com/sample.pdf', BWDEB_ROOT_AUTHOR_PRO),
                'default' => [
                    'url' =>  'https://bestwpdeveloper.com/wp-content/uploads/2023/11/xohan-CV.pdf'
                ],
				'show_external' => false,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'file_type' => 'url'
				],
            ]
		);

		$this->add_control(
			'pdf_file',
			[
				'label' => __( 'Choose PDF',  BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'application/pdf',
                'default' => [
                    'url' => plugin_dir_url( __FILE__ ) . 'assets/public/pdfjs/xohan-CV.pdf'
                ],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'file_type' => 'upload_file'
				],
			]
		);

		$this->add_control(
			'page_number',
			[
				'label' => __( 'Page Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '1',
			]
		);
        
        $this->add_control(
			'pdf_title',
			[
				'label' => __( 'PDF Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'PDF Title', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => __( 'Type PDF title', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				]
			]
		);
        
        $this->end_controls_section();
    }
	protected function __pdf_settings_controls(){
		$this->start_controls_section(
            '_section_pdf_settings',
            [
                'label' => __('Settings', BWDEB_ROOT_AUTHOR_PRO),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
			'enable_download',
			[
				'label'        => __( 'Show Download?', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'return_value' => 'yes',
			]
		);

        $this->add_control(
			'enable_icon',
			[
				'label'        => __( 'Show Icon?', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'return_value' => 'yes',
			]
		);

        $this->add_control(
			'icon',
			[
				'label' => __( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-file-pdf',
					'library' => 'solid',
				],
                'condition' => [
                    'enable_icon' => 'yes'
                ]
			]
		);
        $this->add_responsive_control(
            'pdf_width',
            [
                'label'      => __('Width', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['%','px',],
                'range'      => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min'  => 0,
                        'max'  => 2000,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'size' => 100,
                    'unit' => '%',
                ]
            ]
        );

        $this->add_responsive_control(
            'pdf_height',
            [
                'label'      => __('Height', BWDEB_ROOT_AUTHOR_PRO),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'em'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'    => [
                    'size' => 600,
                    'unit' => 'px',
                ],
            ]
        );

		$this->add_responsive_control(
			'align',
			[
				'label' => __( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .elementor-widget-container' => 'text-align: {{VALUE}};'
				]
			]
		);
        
        $this->end_controls_section();
	}

	protected function __title_desc_style_controls() {

		$this->start_controls_section(
			'_section_style_content',
			[
				'label' => __( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-pdf-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .bwdpdfx-pdf-title',
			]
		);

		$this->add_control(
			'_heading_title_bar',
			[
				'type' => \Elementor\Controls_Manager::HEADING,
				'label' => __( 'Title Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before'
			]
		);
		
		$this->add_responsive_control(
			'title_spacing',
			[
				'label' => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .pdf_viewer_options' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'title_background',
				'label' => __( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .pdf_viewer_options',
			]
		);

		$this->add_responsive_control(
			'title_bar_padding',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pdf_viewer_options' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'title_bar_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pdf_viewer_options' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_heading',
			[
				'label' => __( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pdf-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pdf-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .pdf-icon' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .pdf-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: auto;'
				],
				'default' => [
					'size' => 30
				]
			]
		);

		$this->add_responsive_control(
			'icon_spacing',
			[
				'label' => __( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 10
				],
				'selectors' => [
					'{{WRAPPER}} .pdf-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}
	protected function __button_style_controls() {

		$this->start_controls_section(
			'_section_style_button',
			[
				'label' => __( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'button_padding',
			[
				'label' => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} .bwdpdfx-btn',
			]
		); 

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'button_border',
				'selector' => '{{WRAPPER}} .bwdpdfx-btn',
			]
		);

		$this->add_control(
			'button_border_radius',
			[
				'label' => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'style' => 'thick',
			]
		);

		$this->start_controls_tabs( '_tabs_button' );

		$this->start_controls_tab(
			'_tab_button_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'button_color',
			[
				'label' => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_bg_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdpdfx-btn',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_button_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'button_hover_color',
			[
				'label' => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn:hover, {{WRAPPER}} .bwdpdfx-btn:focus' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_bg_color',
			[
				'label' => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn:hover, {{WRAPPER}} .bwdpdfx-btn:focus' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_border_color',
			[
				'label' => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'button_border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpdfx-btn:hover, {{WRAPPER}} .bwdpdfx-btn:focus' => 'border-color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'button_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdpdfx-btn:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
        $settings = $this->get_settings_for_display();
        $unique_id = 'viewer-' . $this->get_id();
		$file_type = $settings['file_type'];

        $pdf_url_i = '';

        if('url' == $file_type){
            $pdf_url_i =  $settings['pdf_url']['url'];
        }else{
            $pdf_url_i =  $settings['pdf_file']['url'];
        }

		if (isset($settings['pdf_width'])) {
			$width = $settings['pdf_width']['size'] . $settings['pdf_width']['unit'];
		}
		if (isset($settings['pdf_height'])) {
			$height = $settings['pdf_height']['size'] . $settings['pdf_height']['unit'];
		}

		if(empty($pdf_url_i)){
			$pdf_url_i = plugin_dir_url( __FILE__ ) . 'assets/public/pdfjs/xohan-CV.pdf';
		}

		$json_settings = [
            'unique_id' 	=> $unique_id,
            'pdf_url' 		=> $pdf_url_i,
			'file_type' 	=> $file_type,
			'page_number' 	=> $settings['page_number'],
			'width' 		=> $width,
			'height' 		=> $height,
        ];



		$this->add_render_attribute( 'pdf_settings', 'data-pdf-settings', wp_json_encode( $json_settings ) );
        
        ?>
        <div class="pdf_viewer_container">
            <div class="pdf_viewer_options <?php echo esc_attr($unique_id); ?>" <?php $this->print_render_attribute_string( 'pdf_settings' ) ?>>
				<span class="bwdpdfx-title-flex">
					<span class="pdf-icon">
						<?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);  ?>
					</span>
					<?php
					if($settings['pdf_title']){
						echo sprintf( '<h2 class="bwdpdfx-pdf-title">%s</h2>',
						esc_html( $settings['pdf_title'] )
						);
					}
					?>
				</span>
				<?php 
                ?>
                <div class="pdf-button">
                <?php
                    if('yes' == $settings['enable_download']){
                        printf( '<a href="%1$s" class="bwdpdfx-btn" download title="%2$s">%3$s</a>',
                            esc_url($pdf_url_i),
                            esc_html( $settings['pdf_title'] ),
                            __('Download', BWDEB_ROOT_AUTHOR_PRO)
                        );
                    }
                ?>
                </div>
            </div>
            
			<div>
				<div id="<?php echo esc_attr( $unique_id ); ?>"></div>
			</div>
			
        </div>
        <?php
	}

}