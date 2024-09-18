<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDCV extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcv-cv-builder';
	}

	public function get_title() {
		return esc_html__( 'CV BUILDER', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'eicon-archive-posts bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthecv_builder_category' ];
	}

    public function get_keywords() {
		return [ 'cv', 'arrow', BWDEB_ROOT_AUTHOR_PRO ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdcv_cv_builder_style',
		    [
		        'label' => esc_html__('CV Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcv-cv-builder_style',
			[
				'label' => esc_html__( 'Choose Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
			]
		);
		$this->end_controls_section();

		// header
		$this->start_controls_section(
			'bwdcv_header_section',
			[
				'label' => esc_html__( 'Header', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_header_section_show' => 'yes',
				],
			]
			
		);
		// header image
		$this->add_control(
			'bwdcv_cv_box_image',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://bwd-elementor-addons-pro.netlify.app/bwd-placeholder.jpg',
				],
			]
		);
		// header cv-vilder title
		$this->add_control(
			'bwdcv_header_cv_title', [
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Edward Shine', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// header cv-vilder desg
		$this->add_control(
			'bwdcv_header_cv_desg', [
				'label' => esc_html__( 'Degination', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'graphic designer', BWDEB_ROOT_AUTHOR_PRO ),

			]
		);
		// header Description
		$this->add_control(
			'bwdcv_header_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ullam inventore eveniet deserunt, facere perferendis ad ratione fugit eum minima nesciunt nemo aut dolorem facilis tempore ea iure corrupti quaerat nostrum dignissimos.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// header cv-vilder social title
		$this->add_control(
			'bwdcv_header_cv_social_title', [
				'label' => esc_html__( 'Social Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Social', BWDEB_ROOT_AUTHOR_PRO ),
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_social_icon_show',
			[
				'label' => esc_html__( 'Show Social', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// cv header icon
		$repeater = new \Elementor\Repeater();
		// cv header icon title
		$repeater->add_control(
			'bwdcv_bwdcv_cv_box_icon_title', [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'cv box icon' , 'bwdcv_cv_builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdcv_cv_box_icon',
			[
				'label' => esc_html__( 'cv box Icon', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
			]
		);
        // cv header icon link
		$repeater->add_control(
			'bwdcv_cv_box_icon_link',
			[
				'label' => esc_html__( 'Icon Link', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write cv icon link here', 
				'bwdcv_cv_builder' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		
		$this->add_control(
			'bwdcv_cv_box_social_list',
			[
				'label' => esc_html__( 'CV Social List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-skype',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdcv_cv_box_icon' => [
							'value' => 'fas fa-envelope',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdcv_bwdcv_cv_box_icon_title }}}',
				'condition' => [
					'bwdcv_social_icon_show' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcv_profile_link_show',
			[
				'label' => esc_html__( 'Show Profile Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcv_profile_link_text', [
				'label' => esc_html__( 'Link Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Profile Link: ' , 'bwdcv_cv_builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_profile_link_show' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcv_profile_link', [
				'label' => esc_html__( 'Profile Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'User Profile Link' , 'bwdcv_cv_builder' ),
				'description' => esc_html__( 'Use only one social media link' , 'bwdcv_cv_builder' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_profile_link_show' => 'yes',
				]
			]
		);
		$this->end_controls_section();

		// header style tab
		$this->start_controls_section(
			'bwdcv_header',
			[
				'label' => esc_html__( 'Header ', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_header_section_show' => 'yes',
				],
			]
		);
		// header information background color
		$this->add_control(
			'bwdcv_header_information_bg_color',
			[
				'label' => esc_html__( 'Header Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-1-area .bwd-cv-vilder-information::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style5','style7','style9','style11','style12','style13','style14','style15','style17','style19','style20','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_information_after_background_color',
			[
				'label' => esc_html__( 'Header Bottom Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header image border color
		$this->add_control(
			'bwdcv_header_image_border_color',
			[
				'label' => esc_html__( 'Image Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style9','style11','style13','style16','style17','style19','style20','style21','style22','style23','style24'],
				],
			]
		);
		// header image outline color
		$this->add_control(
			'bwdcv_header_image_outline_color',
			[
				'label' => esc_html__( 'Image Outline Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-1-area .bwd-cv-vilder-img' => 'outline-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_image_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img:before' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_image_after_border_color',
			[
				'label' => esc_html__( 'Outline border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img:after' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header image shape color
		$this->add_control(
			'bwdcv_image_shape_background_color',
			[
				'label' => esc_html__( 'Shape Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-img-shape, {{WRAPPER}} .bwd-cv-img-shape::before, {{WRAPPER}} .bwd-cv-vilder-4-area .bwd-cv-vilder-img::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style25'],
				],
			]
		);
		// image width height
		$this->add_responsive_control(
			'bwdcv_builder_header_image_width',
			[
				'label' => esc_html__( 'Image Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// image shape width
		$this->add_responsive_control(
			'bwdcv_header_image_shape_width',
			[
				'label' => esc_html__( 'Image Shape Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-img-shape, {{WRAPPER}} .bwd-cv-img-shape::before, {{WRAPPER}} .bwd-cv-vilder-4-area .bwd-cv-vilder-img::before' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style25'],
				],
			]
		);
		// image shape height
		$this->add_responsive_control(
			'bwdcv_header_image_shape_height',
			[
				'label' => esc_html__( 'Image Shape Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-img-shape, {{WRAPPER}} .bwd-cv-img-shape::before, {{WRAPPER}} .bwd-cv-vilder-4-area .bwd-cv-vilder-img::before' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style25'],
				],
			]
		);
		// profile background color
		$this->add_control(
			'bwdcv_profile_background_color',
			[
				'label' => esc_html__( 'profile Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style5','style6','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style23','style24','style25'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-profile' => 'background-color: {{VALUE}}',
				],

			]
		);
		// header title-color
		$this->add_control(
			'bwdcv_header_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-name' => 'color: {{VALUE}}',
				],
			]
		);
		// header title background color
		$this->add_control(
			'bwdcv_header_cv_title_background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-name' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-name',
			]
			
		);
		// header desg-color
		$this->add_control(
			'bwdcv_header_cv_desg_color',
			[
				'label' => esc_html__( 'Designation Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-title' => 'color: {{VALUE}}',
				],
			]
		);
		// header desg-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_desg_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-title',
			]
		);
		// header Description-color
		$this->add_control(
			'bwdcv_header_description_color',
			[
				'label' => esc_html__( 'Description Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-vilder-profile .bwd-cv-profile-dis' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header Description-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_description_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-vilder-profile .bwd-cv-profile-dis',
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			],
			
		);
		// header social-color
		$this->add_control(
			'bwdcv_header_cv_social_color',
			[
				'label' => esc_html__( 'Social Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-social-sub-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header social background color
		$this->add_control(
			'bwdcv_header_social_title_background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-social-sub-title' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header social background color
		$this->add_control(
			'bwdcv_header_social_background_color',
			[
				'label' => esc_html__( 'Social Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-social-area,
					{{WRAPPER}} .bwd-cv-social-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header cv-vilder social-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_header_cv_social_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-social-sub-title',
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// header icon-color
		$this->add_control(
			'bwdcv_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon' => 'color: {{VALUE}}',
				],
			]
		);
		//header icon Background-color
		$this->add_control(
			'bwdcv_icon_background_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon' => 'Background-color: {{VALUE}}',
				],
			]
		);
		//header icon-size
		$this->add_responsive_control(
			'bwdcv_cv_social_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// header icon Round Size
		$this->add_responsive_control(
			'bwdcv_social_icon_Round_Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information .bwd-cv-vilder-profile .bwd-cv-vilder-social-area .bwd-cv-social-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// about
		$this->start_controls_section(
			'bwdcv_about_section',
			[
				'label' => esc_html__( 'About', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_about_section_show' => 'yes',
				],
			]
		);
		// about cv-vilder title
		$this->add_control(
			'bwdcv_about_cv_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'about me', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// about cv-vilder desg
		$this->add_control(
			'bwdcv_about_cv_desg',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a incidunt, voluptatibus doloribus quod praesentium quibusdam provident? Culpa ut, ex laboriosam adipisci est quaerat, autem aspernatur doloribus alias iste amet.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		// about style tab
		$this->start_controls_section(
			'bwdcv_about',
			[
				'label' => esc_html__( 'About', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_about_section_show' => 'yes',
				],
			]
		);
		// about title-color
		$this->add_control(
			'bwdcv_about_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// about title Background-color
		$this->add_control(
			'bwdcv_about_cv_title_Background_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'background: {{VALUE}}',
				],
			]
		);
		// about title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-sub-title',
			]
		);
		// about title border color
		$this->add_control(
			'bwdcv_about_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title, 
					{{WRAPPER}} .bwd-cv-about,
					{{WRAPPER}} .bwd-cv-vilder-14-area .bwd-cv-vilder-information .bwd-cv-profile' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style16','style17','style18','style19','style20','style22','style23','style24','style25'],
				],
			]
		);
		// about desg-color
		$this->add_control(
			'bwdcv_about_cv_desg_color',
			[
				'label' => esc_html__( 'Desg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis' => 'color: {{VALUE}}',
				],
			]
		);
		// about desg-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_about_cv_desg_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-dis',
			]
		);
		// about icon-color
		$this->add_control(
			'bwdcv_about_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_about_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon-size
		$this->add_responsive_control(
			'bwdcv-about-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about icon Round Size
		$this->add_responsive_control(
			'bwdcv-about-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about cv icon border radius
		$this->add_responsive_control(
			'bwdcv_about_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-profile .bwd-cv-profile-title .bwd-cv-profile-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// about title width
		$this->add_responsive_control (
			'bwdcv-about-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// about title padding
		$this->add_responsive_control(
			'bwdcv_about_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// about title border radius
		$this->add_responsive_control(
			'bwdcv_about_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-profile-title,
					{{WRAPPER}} .bwd-cv-vilder-3-area  .bwd-cv-profile .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// contact
		$this->start_controls_section(
			'bwdcv_contact_section',
			[
				'label' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_contact_section_show' => 'yes',
				],
			]
		);
		// contact title
		$this->add_control(
			'bwdcv_contact_cv_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'contact', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact phone number
		$this->add_control(
			'bwdcv_contact_phone_number', [
				'label' => esc_html__( 'Phone Number', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '+00 952 165', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact email
		$this->add_control(
			'bwdcv_contact_email', [
				'label' => esc_html__( 'Email', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'info20@gmail.com', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// contact location
		$this->add_control(
			'bwdcv_contact_location',
			[
				'label' => esc_html__( 'Location', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'uttara dhaka 1230', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your location here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		// contact style tab
		$this->start_controls_section(
			'bwdcv_contact',
			[
				'label' => esc_html__( 'Contact', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_contact_section_show' => 'yes',
				],
			]
		);
		// contact title Background-color
		$this->add_control(
			'bwdcv_contact_cv_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title color
		$this->add_control(
			'bwdcv_contact_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-sub-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// contact background color
		$this->add_control(
			'bwdcv_contact_background_color',
			[
				'label' => esc_html__( 'Contact Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_contact_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact-title .bwd-cv-sub-title,
				{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title',
			]
		);
		// contact title border color
		$this->add_control(
			'bwdcv_contact_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title, 
					{{WRAPPER}} .bwd-cv-contact-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		
		// contact cv icon color
		$this->add_control(
			'bwdcv_contact_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		$this->add_control(
			'bwdcv_contact_title_icon_bg_color',
			[
				'label' => esc_html__( 'Title Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		//contact cv icon font-size
		$this->add_responsive_control(
			'bwdcv_contact_cv_icon_size',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// contact cv icon Round Size
		$this->add_responsive_control(
			'bwdcv_contact_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contacts-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		// contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_contact_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-icon,
                    {{WRAPPER}} .bwd-cv-contacts-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style25'],
				],
			]
		);
		//contact item icon color
		$this->add_control(
			'bwdcv_contact_item_icon_color',
			[
				'label' => esc_html__( 'Item Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
        //contact item icon Background-color
		$this->add_control(
			'bwdcv_contact_icon_background_color',
			[
				'label' => esc_html__( 'Item Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'Background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact Item icon font size
		$this->add_responsive_control(
			'bwdcv-contact-icon-size',
			[
				'label' => esc_html__( 'Item Icon Font Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact cv item icon Round Size
		$this->add_responsive_control(
			'bwdcv_contact_item_icon_round_size',
			[
				'label' => esc_html__( 'Item Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact cv icon border radius
		$this->add_responsive_control(
			'bwdcv_ontact_item_icon_border_radius',
			[
				'label' => esc_html__( 'Item Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-contact .bwd-cv-contact-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style16','style17','style25'],
				],
			]
		);
		// contact item-color
		$this->add_control(
			'bwdcv_contact_item_color',
			[
				'label' => esc_html__( 'Number, Mail & Location Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'color: {{VALUE}}',
				],
			]
		);
		// contact item font-size
		$this->add_responsive_control(
			'bwdcv-contact-item-size',
			[
				'label' => esc_html__( 'Item Font Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-item' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Contact title width
		$this->add_responsive_control (
			'bwdcv-contact-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// contact title padding
		$this->add_responsive_control(
			'bwdcv_contact_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);
		// contact title border radius
		$this->add_responsive_control(
			'bwdcv_contact_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-contact-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-contact .bwd-cv-contact-title .bwd-cv-contact-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style11'],
				],
			]
		);

		$this->end_controls_section();

		// skill
		$this->start_controls_section(
			'bwdcv_skill_section',
			[
				'label' => esc_html__( 'Skill', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_skill_section_show' => 'yes',
				],
			]
		);
		// skill title
		$this->add_control(
			'bwdcv_skill_cv_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'skill', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater = new \Elementor\Repeater();
		//skill name title
		$repeater->add_control(
			'bwdcv_skill_name_title', [
				'label' => esc_html__( 'Skill Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'web developer', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'bwdcv_skill_percent',
			[
				'label' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 50,
			]
		);
		
		$this->add_control(
			'bwdcv_skill_name_list',
			[
				'label' => esc_html__( 'Skill Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_skill_name_title' => esc_html__( 'html' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'css' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'javascript' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'php' ),
					],
					[	
						'bwdcv_skill_name_title' => esc_html__( 'mysql' ),
					]
				],
				'title_field' => '{{{ bwdcv_skill_name_title }}}',
			]
		);

		$this->end_controls_section();

		// skill style tab
		$this->start_controls_section(
			'bwdcv_skill',
			[
				'label' => esc_html__( 'Skill', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_skill_section_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_skill_title_heading',
			[
				'label' => esc_html__( 'Skill Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		// skill title Background-color
		$this->add_control(
			'bwdcv_skill_cv_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// skill title color
		$this->add_control(
			'bwdcv_skill_cv_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// skill title border color
		$this->add_control(
			'bwdcv_skill_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title, 
					{{WRAPPER}} .bwd-cv-skill-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		// skill background color
		$this->add_control(
			'bwdcv_skill_background_color',
			[
				'label' => esc_html__( 'Skill Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_skill_cv_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-sub-title',
			]
		);
		// skill icon color
		$this->add_control(
			'bwdcv_skill_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon bg color
		$this->add_control(
			'bwdcv_skill_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon-size
		$this->add_responsive_control(
			'bwdcv-skill-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// skill icon Round Size
		$this->add_control(
			'bwdcv-skill-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-skill-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// skill cv icon border radius
		$this->add_responsive_control(
			'bwdcv_skill_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-skill-title .bwd-cv-skill-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// skill title width
		$this->add_responsive_control (
			'bwdcv-skill-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// skill title padding
		$this->add_responsive_control(
			'bwdcv_skill_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// skill title border radius
		$this->add_responsive_control(
			'bwdcv_skill_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-skill-title,
					{{WRAPPER}} .bwd-cv-skill .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// Skill Name Color
		$this->add_control(
			'bwdcv_skill_name_color',
			[
				'label' => esc_html__( 'Skill Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcv_skill_name_heading',
			[
				'label' => esc_html__( 'Skill Name Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		// Skill Name Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_skill_name_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name',
			]
		);
		// Skill Range Up Background Color
		$this->add_control(
			'bwdcv_skill_range_after_background_color',
			[
				'label' => esc_html__( 'Range Up Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val' => 'background: {{VALUE}}',
				],
			]
		);
		// Skill Range Bottom Background Color
		$this->add_control(
			'bwdcv_skill_range_background_color',
			[
				'label' => esc_html__( 'Range Bottom Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name::before' => 'background: {{VALUE}}',
				],
			]
		);
		// Skill Range Value Color
		$this->add_control(
			'bwdcv_skill_range_value_color',
			[
				'label' => esc_html__( 'Range Value Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::before,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::after' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcv_skill_range_heading',
			[
				'label' => esc_html__( 'Range Value Typography', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		// Skill Range Value Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_range_name_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::before,
				{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name .bwdcv-per-val::after',
			]
		);
		
		//skill range border color 
		$this->add_control(
			'bwdcv_skill_range_border_color',
			[
				'label' => esc_html__( 'Range Border Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-skill .bwd-cv-skill-name:before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		// language
		$this->start_controls_section(
			'bwdcv_language_section',
			[
				'label' => esc_html__( 'Language', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_language_section_show' => 'yes',
				],
			]
		);
		// language title
		$this->add_control(
			'bwdcv_language_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'language', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//language name title
		$repeater->add_control(
			'bwdcv_language_name_title', [
				'label' => esc_html__( 'language Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'english', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		//language percent
		$repeater->add_control(
			'bwdcv_lang_percent',
			[
				'label' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 50,
			]
		);
			
		$this->add_control(
			'bwdcv_language_name_list',
			[
				'label' => esc_html__( 'Language Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_language_name_title' => esc_html__( 'english' ),
					],
					[	
						'bwdcv_language_name_title' => esc_html__( 'spanish' ),
					]
					
				],
				'title_field' => '{{{ bwdcv_language_name_title }}}',
			]
		);

		$this->end_controls_section();

		// language style tab
		$this->start_controls_section(
			'bwdcv_language',
			[
				'label' => esc_html__( 'Language', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_language_section_show' => 'yes',
				],
			]
		);
		// language title Background-color
		$this->add_control(
			'bwdcv_language_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title' => 'Background: {{VALUE}} !important',
				],
			]
		);
		// language title color
		$this->add_control(
			'bwdcv_language_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-sub-title' => 'Color: {{VALUE}} !important',
				],
			]
		);
		// language title border color
		$this->add_control(
			'bwdcv_language_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title, 
					{{WRAPPER}} .bwd-cv-language-sub-title' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style13','style14','style16','style17','style18',
					'style22','style23','style24','style25'],
				],
			]
		);
		// language background color
		$this->add_control(
			'bwdcv_language_background_color',
			[
				'label' => esc_html__( 'Language Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_language_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-sub-title ',
			]
		);
		// language icon color
		$this->add_control(
			'bwdcv_language_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-icon' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon bg color
		$this->add_control(
			'bwdcv_language_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon-size
		$this->add_responsive_control(
			'bwdcv-language-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style21','style22','style23','style24','style25'],
				],
			]
		);
		// language icon Round Size
		$this->add_control(
			'bwdcv-language-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-language-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// language cv icon border radius
		$this->add_responsive_control(
			'bwdcv_language_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-language .bwd-cv-language-title .bwd-cv-language-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style21','style22','style25'],
				],
			]
		);
		// language title width
		$this->add_responsive_control (
			'bwdcv-language-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// language title padding
		$this->add_responsive_control(
			'bwdcv_language_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// language title border radius
		$this->add_responsive_control(
			'bwdcv_language_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//language name color
		$this->add_control(
			'bwdcv_language_name_color',
			[
				'label' => esc_html__( 'Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-language-name' => 'color: {{VALUE}}',
				],
			]
		);
		//language name Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_language_name_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-language-name ',
			]
		);
		//language range background color
		$this->add_control(
			'bwdcv_language_range_up_background_color',
			[
				'label' => esc_html__( 'Range UP Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val' => 'background: {{VALUE}}',
				],
			]
		); 
		$this->add_control(
			'bwdcv_language_range_down_background_color',
			[
				'label' => esc_html__( 'Range Bottom Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-language .bwd-cv-language-name::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcv_language_range_value_color',
			[
				'label' => esc_html__( 'Range Value Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val::before,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-language .bwd-cv-language-name .bwdcv-per-val::after' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_range_name_te_typography',
				'selector' => '{{WRAPPER}} .bwdcv-per-val::before,
				{{WRAPPER}} .bwdcv-per-val::after',
			]
		); 
		$this->end_controls_section();

		// hobby
		$this->start_controls_section(
			'bwdcv_hobby_section',
			[
				'label' => esc_html__( 'Hobby', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_hobby_section_show' => 'yes',
				],
			]
		);
		// hobby title
		$this->add_control(
			'bwdcv_hobby_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'hobby', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//hobby name title
		$repeater->add_control(
			'bwdcv_hobby_name_title', [
				'label' => esc_html__( 'Hobby Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'football', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		//hobby icon
		$repeater->add_control(
			'bwdcv_hobby_icon',
			[
				'label' => esc_html__( 'hobby Icon', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-futbol',
					'library' => 'solid',
				],
			]
		);
		
		$this->add_control(
			'bwdcv_hobby_name_list',
			[
				'label' => esc_html__( 'Hobby Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'music' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-music',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'MOVIE' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-film',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'writing' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-pen',
							'library' => 'solid',
						],
					],
					[	
						'bwdcv_hobby_name_title' => esc_html__( 'football' ),
						'bwdcv_hobby_icon' => [
							'value' => 'fas fa-futbol',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdcv_hobby_name_title }}}',
			]
		);

		$this->end_controls_section();

		// hobby style tab
		$this->start_controls_section(
			'bwdcv_hobby',
			[
				'label' => esc_html__( 'Hobby', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_hobby_section_show' => 'yes',
				],
			]
		);
		// hobby title color
		$this->add_control(
			'bwdcv_hobby_title_color',
			[
				'label' => esc_html__( 'Title Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-sub-title' => 'Color: {{VALUE}}',
				],
			]
		);
		// hobby title Background-color
		$this->add_control(
			'bwdcv_hobby_title_Background_color',
			[
				'label' => esc_html__( 'TItle Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// hobby title border color
		$this->add_control(
			'bwdcv_hobby_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style13','style14','style16','style17','style18','style20',
					'style22','style23','style24','style25'],
				],
			]
		);
		// hobby name title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-sub-title',
			]
		);
		// hobby icon color
		$this->add_control(
			'bwdcv_hobby_title_icon_color',
			[
				'label' => esc_html__( 'Title Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		//hobby icon size
		$this->add_responsive_control(
			'bwdcv_hobby_title_icon_size',
			[
				'label' => esc_html__( 'Title Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		//hobby name color
		$this->add_control(
			'bwdcv_hobby_name_color',
			[
				'label' => esc_html__( 'Hobby name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-title' => 'color: {{VALUE}}',
				],
			]
		);
		//hobby icon color
		$this->add_control(
			'bwdcv_hobby_name_icon_color',
			[
				'label' => esc_html__( 'Name Icon Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-name .bwd-cv-hobby-icon' => 'color: {{VALUE}}',
				],
			]
		);
		// hobby icon-size
		$this->add_responsive_control(
			'bwdcv-hobby-icon-size',
			[
				'label' => esc_html__( 'Hobby Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-name .bwd-cv-hobby-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby background color
		$this->add_control(
			'bwdcv_hobby_background_color',
			[
				'label' => esc_html__( 'Hobby Area Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-area' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// hobby title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_hobby_name_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-title',
			]
		);
		
		// hobby icon bg color
		$this->add_control(
			'bwdcv_hobby_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style10','style12','style13','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		
		// hobby icon Round Size
		$this->add_control(
			'bwdcv-hobby-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby cv icon border radius
		$this->add_responsive_control(
			'bwdcv_hobby_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-hobby .bwd-cv-hobby-title .bwd-cv-hobby-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// hobby title width
		$this->add_responsive_control (
			'bwdcv-hobby-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// hobby title padding
		$this->add_responsive_control(
			'bwdcv_hobby_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// hobby title border radius
		$this->add_responsive_control(
			'bwdcv_hobby_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-hobby-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// education
		$this->start_controls_section(
			'bwdcv_education_section',
			[
				'label' => esc_html__( 'Education', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_education_section_show' => 'yes',
				],
			]
		);
		// education title
		$this->add_control(
			'bwdcv_education_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'education', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater = new \Elementor\Repeater();
		//education name title
		$repeater->add_control(
			'bwdcv_education_name_title', [
				'label' => esc_html__( 'education Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'UNIVERSITY DEGREE', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		// education Description
		$repeater->add_control(
			'bwdcv_education_desc',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// education Year
		$repeater->add_control(
			'bwdcv_education_year', [
				'label' => esc_html__( 'Year', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( '2014' ),
			]
		);
		
		$this->add_control(
			'bwdcv_education_name_list',
			[
				'label' => esc_html__( 'Education Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_education_name_title' => esc_html__( 'university degree', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2014', 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_education_name_title' => esc_html__( 'university of honours', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2017', 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_education_name_title' => esc_html__( 'university master', 'bwdcv_cv_builder' ),
						'bwdcv_education_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
						'bwdcv_education_year' => esc_html__( '2020', 'bwdcv_cv_builder' ),
					],
				],
				'title_field' => '{{{ bwdcv_education_name_title }}}',
			]
		);

		$this->end_controls_section();

		// education style tab
		$this->start_controls_section(
			'bwdcv_education',
			[
				'label' => esc_html__( 'Education', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// education title-color
		$this->add_control(
			'bwdcv_education_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// education title Background-color
		$this->add_control(
			'bwdcv_education_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title' => 'Background: {{VALUE}}',
				],
			]
		);
		// education title border color
		$this->add_control(
			'bwdcv_education_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education-title,
					{{WRAPPER}} .bwd-cv-institute-item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style10','style12','style16','style17','style18','style19','style20',
					'style22','style23','style24',],
				],
			]
		);
		// education title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-sub-title ',
			]
		);
		// education icon-color
		$this->add_control(
			'bwdcv_education_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon bg color
		$this->add_control(
			'bwdcv_education_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon-size
		$this->add_responsive_control(
			'bwdcv-education-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education icon Round Size
		$this->add_control(
			'bwdcv-education-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-education-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education cv icon border radius
		$this->add_responsive_control(
			'bwdcv_education_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-education .bwd-cv-education-title .bwd-cv-education-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// education title width
		$this->add_responsive_control (
			'bwdcv-education-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// education title padding
		$this->add_responsive_control(
			'bwdcv_education_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// education title border radius
		$this->add_responsive_control(
			'bwdcv_education_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-education .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// education name title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-institute-title',
			]
		);
		//education name color
		$this->add_control(
			'bwdcv_institute_name_color',
			[
				'label' => esc_html__( 'Institute Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-institute-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		//institute name background color
		$this->add_control(
			'bwdcv_institute_name_line_bg_color',
			[
				'label' => esc_html__( 'Line Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-institute-name::before' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdcv_institute_line_drop_bg_color',
			[
				'label' => esc_html__( 'Line Drop Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-institute-name::after' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		// education Description Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_institute_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-dis',
			]
		);
		//education Description color
		$this->add_control(
			'bwdcv_institute_description_color',
			[
				'label' => esc_html__( 'Description Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-dis' => 'color: {{VALUE}} !important',
				],
			]
		);
		// education Year Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_education_year_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-year',
			]
		);
		//education Year color
		$this->add_control(
			'bwdcv_education_year_color',
			[
				'label' => esc_html__( 'Year Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-institute-year' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->end_controls_section();

		// experience
		$this->start_controls_section(
			'bwdcv_experience_section',
			[
				'label' => esc_html__( 'Experience', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_experience_section_show' => 'yes',
				],
			]
		);
		// experience title
		$this->add_control(
			'bwdcv_experience_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'experience', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$repeater = new \Elementor\Repeater();
		
		// experience Year
		$repeater->add_control(
			'bwdcv_experience_year', [
				'label' => esc_html__( 'Year', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( '2016' ),
			]
		);
		//experience name title
		$repeater->add_control(
			'bwdcv_experience_name_title', [
				'label' => esc_html__( 'Experience Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// experience Description
		$repeater->add_control(
			'bwdcv_experience_desc',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type your description here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdcv_experience_name_list',
			[
				'label' => esc_html__( 'Experience Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_experience_year' => esc_html__( '2016', 'bwdcv_cv_builder' ),
						'bwdcv_experience_name_title' => esc_html__( 'tech company - junior data', 'bwdcv_cv_builder' ),
						'bwdcv_experience_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
					],
					[	
						'bwdcv_experience_year' => esc_html__( '2020', 'bwdcv_cv_builder' ),
						'bwdcv_experience_name_title' => esc_html__( 'techno company - senior data', 'bwdcv_cv_builder' ),
						'bwdcv_experience_desc' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat totam voluptates quasi illo! Maiores doloremque quisquam ipsa?', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
					],
				],
				'title_field' => '{{{ bwdcv_experience_name_title }}}',
			]
		);

		$this->end_controls_section();

		// experience style tab
		$this->start_controls_section(
			'bwdcv_experience',
			[
				'label' => esc_html__( 'Experience', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_experience_section_show' => 'yes',
				],
			]
		);
		// experience title-color
		$this->add_control(
			'bwdcv_experience_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// experience title Background-color
		$this->add_control(
			'bwdcv_experience_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style5'],
				],
			]
		);
		// experience Background-color
		$this->add_control(
			'bwdcv_experience_Background_color',
			[
				'label' => esc_html__( 'Text Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title' => 'Background: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
			]
		);
		// experience title border color
		$this->add_control(
			'bwdcv_experience_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-title,
					{{WRAPPER}} .bwd-cv-experience-item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style10','style12','style16','style17','style18','style19','style20',
					'style22','style23','style24'],
				],
			]
		);
		// experience title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_title_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-sub-title ',
			]
		);
		// experience icon-color
		$this->add_control(
			'bwdcv_experience_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon bg color
		$this->add_control(
			'bwdcv_experience_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon-size
		$this->add_responsive_control(
			'bwdcv-experience-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience icon Round Size
		$this->add_control(
			'bwdcv-experience-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-experience-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience cv icon border radius
		$this->add_responsive_control(
			'bwdcv_experience_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-experience .bwd-cv-experience-title .bwd-cv-experience-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// experience title width
		$this->add_responsive_control (
			'bwdcv-experience-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// experience title padding
		$this->add_responsive_control(
			'bwdcv_experience_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// experience title border radius
		$this->add_responsive_control(
			'bwdcv_experience_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Experience Line Background Color
		$this->add_control(
			'bwdcv_experience_line_bg_color',
			[
				'label' => esc_html__( 'Line Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-name::before' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		// Experience Drop Background Color
		$this->add_control(
			'bwdcv_experience_line_drop_bg_color',
			[
				'label' => esc_html__( 'Line Drop Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-name::after' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		// experience Year Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_year_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-experience-year',
			]
		);
		//experience Year color
		$this->add_control(
			'bwdcv_experience_year_color',
			[
				'label' => esc_html__( 'Experience Year Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-year' => 'color: {{VALUE}} !important',
				],
			]
		);
		// experience name title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-experience-sub-title',
			]
		);
		//experience name color
		$this->add_control(
			'bwdcv_experience_name_color',
			[
				'label' => esc_html__( 'Experience Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// experience Description Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_experience_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-experience-dis',
			]
		);
		//experience Description color
		$this->add_control(
			'bwdcv_experience_description_color',
			[
				'label' => esc_html__( 'Description Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-experience-dis' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->end_controls_section();

		// reference
		$this->start_controls_section(
			'bwdcv-reference_section',
			[
				'label' => esc_html__( 'Reference', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_reference_section_show' => 'yes',
				],
			]
		);
		// reference title
		$this->add_control(
			'bwdcv_reference_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'reference', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		$repeater = new \Elementor\Repeater();
		//reference name title
		$repeater->add_control(
			'bwdcv_reference_name_title', [
				'label' => esc_html__( 'Reference Name', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'johan doe', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		//reference company title
		$repeater->add_control(
			'bwdcv_reference_company_title', [
				'label' => esc_html__( 'Reference Company', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'company / job position', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		//reference number title
		$repeater->add_control(
			'bwdcv_reference_number_title', [
				'label' => esc_html__( 'Reference Number', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'phone: +123 456 980', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		//reference relation title
		$repeater->add_control(
			'bwdcv_reference_relation_title', [
				'label' => esc_html__( 'Relation Number', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'relation: brother', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		
		$this->add_control(
			'bwdcv_reference_name_list',
			[
				'label' => esc_html__( 'Reference Name List', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'separator' => 'before',
				'default' => [
					[	
						'bwdcv_reference_name_title' => esc_html__( 'johan doe' ),
						'bwdcv_reference_company_title' => esc_html__( 'company / job position', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
						'bwdcv_reference_number_title' => esc_html__( 'phone: +123 456 980' ),
						'bwdcv_reference_relation_title' => esc_html__( 'relation: brother' ),
					],
					[	
						'bwdcv_reference_name_title' => esc_html__( 'marinda joe' ),
						'bwdcv_reference_company_title' => esc_html__( 'company / job position', BWDEB_ROOT_AUTHOR_PRO, 'bwdcv_cv_builder' ),
						'bwdcv_reference_number_title' => esc_html__( 'phone: +256 456 980' ),
						'bwdcv_reference_relation_title' => esc_html__( 'relation: student' ),
					],
				],
				'title_field' => '{{{ bwdcv_reference_name_title }}}',
			]
		);

		$this->end_controls_section();
		
		// reference style tab
		$this->start_controls_section(
			'bwdcv_reference',
			[
				'label' => esc_html__( 'Reference', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_reference_section_show' => 'yes',
				],
				
			]
		);
		// reference title-color
		$this->add_control(
			'bwdcv_reference_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title' => 'color: {{VALUE}}',
				],
			]
		);
		// reference title Background-color
		$this->add_control(
			'bwdcv_reference_title_Background_color',
			[
				'label' => esc_html__( 'Title Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style4','style7','style9','style11','style13','style15','style17','style18','style19','style21','style23'],
				],
			]
		);
		// reference title border color
		$this->add_control(
			'bwdcv_reference_cv_title_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference-title' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style6','style8','style10','style12','style14','style16','style17','style18','style19','style20',
					'style22','style23','style24','style25'],
				],
			]
		);
		// reference title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-sub-title ',
			]
		);
		// reference icon-color
		$this->add_control(
			'bwdcv_reference_icon_color',
			[
				'label' => esc_html__( 'Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon bg color
		$this->add_control(
			'bwdcv_reference_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon-size
		$this->add_responsive_control(
			'bwdcv-reference-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference icon Round Size
		$this->add_control(
			'bwdcv-reference-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-reference-icon i' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference cv icon border radius
		$this->add_responsive_control(
			'bwdcv_reference_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-icon,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-icon i,
					{{WRAPPER}} .bwd-cv-reference .bwd-cv-reference-title .bwd-cv-reference-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style3','style4','style5','style7','style8','style10','style12','style14','style16','style17','style18','style20','style21','style22','style24','style25'],
				],
			]
		);
		// reference title width
		$this->add_responsive_control (
			'bwdcv-reference-title-width',
			[
				'label' => esc_html__( 'Title Width', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'em', 'rem' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference-title' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// reference title padding
		$this->add_responsive_control(
			'bwdcv_reference_title_padding',
			[
				'label' => esc_html__( 'Title Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// reference title border radius
		$this->add_responsive_control(
			'bwdcv_reference_title_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-reference .bwd-cv-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// reference name title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-name',
			]
		);
		//reference name color
		$this->add_control(
			'bwdcv_reference_name_color',
			[
				'label' => esc_html__( 'Referrer Name Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-name' => 'color: {{VALUE}}',
				],
			]
		);
		// reference company title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_company_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-company-name',
			]
		);
		//reference company color
		$this->add_control(
			'bwdcv_reference_company_color',
			[
				'label' => esc_html__( 'Referrer Position Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-company-name' => 'color: {{VALUE}}',
				],
			]
		);
		// reference number title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_number_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-number-title',
			]
		);
		//reference number color
		$this->add_control(
			'bwdcv_reference_number_color',
			[
				'label' => esc_html__( 'Referrer Number Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-number-title' => 'color: {{VALUE}}',
				],
			]
		);
		// reference relation title-Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_reference_relation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-relation-title',
			]
		);
		//reference relation color
		$this->add_control(
			'bwdcv_reference_relation_color',
			[
				'label' => esc_html__( 'Referrer Relation Color', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-cv-reference-relation-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		// footer
		$this->start_controls_section(
			'bwdcv_footer_section',
			[
				'label' => esc_html__( 'Footer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdcv_footer_section_show' => 'yes',
				],
			]
			
		);
		$this->add_control(
			'bwdcv_video_type_show',
			[
				'label' => esc_html__( 'Show Video', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_video_type',
			[
				'label' => esc_html__( 'Source', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => 'youtube',
				'options' => [
					'youtube' => esc_html__( 'YouTube', BWDEB_ROOT_AUTHOR_PRO ),
					'hosted' => esc_html__( 'Self Hosted', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition' => [
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video_youtube_url',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your URL', BWDEB_ROOT_AUTHOR_PRO ) . ' (YouTube)',
				'label_block' => true,
				'default' => [
					'url' => 'https://www.youtube-nocookie.com/embed/aLMXFDqaaO0',
				],
				'condition' => [
					'bwdcv_video_type' => 'youtube',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_video',
			[
				'label' => esc_html__( 'Choose video', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
				'condition' => [
					'bwdcv_video_type' => 'hosted',
					'bwdcv_video_type_show' => 'yes',
				],
			]
		);
		// footer signature_upload
		$this->add_control(
			'bwdcv_signature_upload_show',
			[
				'label' => esc_html__( 'Show Signature', 'bwdab-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdab-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'bwdab-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_signature_upload',
			[
				'label' => esc_html__( 'Choose Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/sign-white.png',
				],
				'condition' => [
					'bwdcv_signature_upload_show' => 'yes',
				],
			]
		);
		// footer button
		$this->add_control(
			'bwdcv_footer_btn_show',
			[
				'label' => esc_html__( 'Show Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_text',
			[
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Contact Me', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv_footer_btn_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_footer_btn_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		// footer style tab
		$this->start_controls_section(
			'bwdcv_footer',
			[
				'label' => esc_html__( 'Footer', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_footer_section_show' => 'yes',
				],
			]
		);
		// footer  Background-color
		$this->add_control(
			'bwdcv_footer_background_color',
			[
				'label' => esc_html__( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio color
		$this->add_control(
			'bwdcv_footer_video_icon_color',
			[
				'label' => esc_html__( 'Video Icon Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'color: {{VALUE}}',
				],
			]
		);
		// footer vedio Background-color
		$this->add_control(
			'bwdcv_footer_video_background_color',
			[
				'label' => esc_html__( 'Video Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer vedio icon size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 25,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer vedio icon Round Size
		$this->add_responsive_control(
			'bwdcv-footer-vedio-icon-Round Size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwdcv_cv_builder' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 80,
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-vedio' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// footer button tab
		$this->add_control(
			'bwdcv_footer_button',
			[
				'label' => esc_html__( 'Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->start_controls_tabs(
			'bwdcv_button_tabs'
		);
		// footer button normal
		$this->start_controls_tab(
			'bwdcv_button_normal_tab',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// footer button normal color
		$this->add_control(
			'bwdcv_footer_button_normal_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button normal Background-color
		$this->add_control(
			'bwdcv_footer_button_normal_background_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'Background: {{VALUE}}',
				],
			]
		);
		// footer button normal Typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_footer_button_normal_typography',
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button',
			]
		);
		// footer button padding
		$this->add_responsive_control(
			'bwdcv_button_padding',
			[
				'label' => esc_html__( 'Button Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// footer button border radius
		$this->add_responsive_control(
			'bwdcv-button-border-radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		// footer button hover
		$this->start_controls_tab(
			'bwdcv_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// footer button hover color
		$this->add_control(
			'bwdcv_footer_button_hover_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		// footer button hover Background-color
		$this->add_control(
			'bwdcv_footer_button_hover_background_color',
			[
				'label' => esc_html__( 'Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta .bwd-cv-button:hover' => 'Background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_responsive_control(
			'bwdcv_footer_padding',
			[
				'label' => esc_html__( 'Footer Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcv_footer_margin',
			[
				'label' => esc_html__( 'Footer Top Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' =>  'px' ,
				'description' => esc_html__( 'This control only work for print mode', BWDEB_ROOT_AUTHOR_PRO ),
				'range' => [
					'px' => [
						'min' => -2000,
						'max' => 2000,
						'step' => 1,
					]
				],
				'selectors' => [
					'@media print' => [
						'{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-vilder-information .bwd-cv-meta' => 'margin-top: {{SIZE}}!important;',
					],
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcv_download_section',
			[
				'label' => esc_html__( 'Download Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		$this->add_control(
			'bwdcv_download_btn_show',
			[
				'label' => esc_html__( 'Button Show', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_download_text', [
				'label' => esc_html__( 'Button Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Download CV', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcv_download_btn_show' => 'yes',
				],

			]
		);
		$this->add_control(
			'bwdcv_download_icon',
			[
				'label' => esc_html__( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-download',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdcv_download_btn_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcv-download_icon_position',
			[
				'label' => esc_html__( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'after',
				'options' => [
					'before'  => esc_html__( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
					'after' => esc_html__( 'After', BWDEB_ROOT_AUTHOR_PRO )
				],
				'condition' => [
					'bwdcv_download_btn_show' => 'yes',
				],
				'prefix_class' => 'bwdcv-download-icon-position-',
			]
		);
		$this->add_responsive_control(
			'bwdcv-download_align',
			[
				'label' => esc_html__( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'bwdcv_download_btn_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcv_choose_section_hide',
			[
				'label' => esc_html__( 'Choose Section Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		$this->add_control(
			'bwdcv_header_section_show',
			[
				'label' => esc_html__( 'Header Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_about_section_show',
			[
				'label' => esc_html__( 'About Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_contact_section_show',
			[
				'label' => esc_html__( 'Contact Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_skill_section_show',
			[
				'label' => esc_html__( 'Skill Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_language_section_show',
			[
				'label' => esc_html__( 'Language Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_hobby_section_show',
			[
				'label' => esc_html__( 'Hobby Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_education_section_show',
			[
				'label' => esc_html__( 'Education Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_experience_section_show',
			[
				'label' => esc_html__( 'Experience Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_reference_section_show',
			[
				'label' => esc_html__( 'Reference Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcv_footer_section_show',
			[
				'label' => esc_html__( 'Footer Section', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcv_download_style_section',
			[
				'label' => esc_html__( 'Download Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcv_download_btn_show' => 'yes',
				],
			]
			
		);
		$this->add_control(
			'bwdcv_download_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcv_download_typography',
				'selector' => '{{WRAPPER}} .bwd-downl-btn a',
				]
				
			);
		$this->add_control(
			'bwdcv_download_icon_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn .bwd-down-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwd-downl-btn .bwd-down-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_download_icon_size',
			[
				'label' => esc_html__( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn .bwd-down-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-downl-btn .bwd-down-icon svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_download_icon_spacing',
			[
				'label' => esc_html__( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn a' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcv_download_btn_background',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwd-downl-btn a',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcv_download_border',
				'selector' => '{{WRAPPER}} .bwd-downl-btn a',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcv_download_box_shadow',
				'selector' => '{{WRAPPER}} .bwd-downl-btn a',
			]
		);
		$this->add_responsive_control(
			'bwdcv_download_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_download_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_download_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-downl-btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		//box information
		$this->start_controls_section(
			'bwdcv_shadow_section',
			[
				'label' => esc_html__( 'Box Information', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		// information background color
		$this->add_control(
			'bwdcv_information_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information,
					{{WRAPPER}} .bwd-cv-vilder-common .bwd-cv-meta:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		// left item bg color
		$this->add_control(
			'bwdcv_item_bg_color',
			[
				'label' => esc_html__( 'Left Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-left-content, {{WRAPPER}} .bwd-cv-vilder-left-content-item' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style3','style4','style7','style10','style12','style14','style16','style17','style18','style21',],
				],
				
			]
		);
		// right item bg color
		$this->add_control(
			'bwdcv_item_right_bg_color',
			[
				'label' => esc_html__( 'Right Bg Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-3-area .bwd-cv-vilder-right-content, {{WRAPPER}} .bwd-cv-vilder-12-area .bwd-cv-vilder-right-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcv-cv-builder_style!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25'],
				],
				
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcv_builder_wrapper_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .bwd-cv-vilder-information',
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcv_builder_wrapper_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-cv-vilder-information' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
    }

	protected function render() {

		$settings = $this->get_settings_for_display();
		
   
		$bwdcv_cv_box_image = $settings['bwdcv_cv_box_image']['url'];
		$bwdcv_header_cv_title = $settings['bwdcv_header_cv_title'];
		$bwdcv_header_cv_social_title = $settings['bwdcv_header_cv_social_title'];
		$bwdcv_header_cv_desg = $settings['bwdcv_header_cv_desg'];
		$bwdcv_header_description = $settings['bwdcv_header_description'];
		$bwdcv_user_profile_link_text = $settings['bwdcv_profile_link_text'];
		$bwdcv_user_profile_link = $settings['bwdcv_profile_link'];
		$bwdcv_show_social = $settings['bwdcv_social_icon_show'];
		$bwdcv_show_profile_link = $settings['bwdcv_profile_link_show'];
		// Header
		$bwdcv_header_bg_color = isset($settings['bwdcv_header_information_bg_color']) ? $settings['bwdcv_header_information_bg_color'] : '';
		$bwdcv_header_title_color = isset($settings['bwdcv_header_cv_title_color']) ? $settings['bwdcv_header_cv_title_color'] : '';
		$bwdcv_header_desg_color = isset($settings['bwdcv_header_cv_desg_color']) ? $settings['bwdcv_header_cv_desg_color'] : '';
		$bwdcv_header_social_icon_color = isset($settings['bwdcv_icon_color']) ? $settings['bwdcv_icon_color'] : '';
		$bwdcv_header_social_icon_bg_color = isset($settings['bwdcv_icon_background_color']) ? $settings['bwdcv_icon_background_color'] : '';
		$bwdcv_social_icon_color = isset($settings['bwdcv_icon_background_color']) ? $settings['bwdcv_icon_background_color'] : '';
		$bwdcv_social_icon_size = isset($settings['bwdcv_cv_social_icon_size']['size']) ? $settings['bwdcv_cv_social_icon_size']['size'] . 'px' : ''; 
		$bwdcv_social_icon_round_size = isset($settings['bwdcv_social_icon_Round_Size']['size']) ? $settings['bwdcv_social_icon_Round_Size']['size'] . 'px' : '';

		// About
		$bwdcv_about_cv_title = $settings['bwdcv_about_cv_title'];
		$bwdcv_about_title_color = isset($settings['bwdcv_about_cv_title_color']) ? $settings['bwdcv_about_cv_title_color'] : ''; 
		$bwdcv_about_title_bg_color = isset($settings['bwdcv_about_cv_title_Background_color']) ? $settings['bwdcv_about_cv_title_Background_color'] : ''; 
		$bwdcv_about_cv_desg = $settings['bwdcv_about_cv_desg'];
		$bwdcv_about_desg_color = isset($settings['bwdcv_about_cv_desg_color']) ? $settings['bwdcv_about_cv_desg_color'] : ''; 
		$bwdcv_about_icon_color = isset($settings['bwdcv_about_icon_color']) ? $settings['bwdcv_about_icon_color'] : ''; 
		// Contact
		$bwdcv_contact_cv_title = $settings['bwdcv_contact_cv_title'];
		$bwdcv_contact_title_color = isset($settings['bwdcv_contact_cv_title_color']) ? $settings['bwdcv_contact_cv_title_color'] : '';
		$bwdcv_contact_icon_color = isset($settings['bwdcv_contact_icon_color']) ? $settings['bwdcv_contact_icon_color'] : '';
		$bwdcv_contact_title_bg_color = isset($settings['bwdcv_contact_cv_title_Background_color']) ? $settings['bwdcv_contact_cv_title_Background_color'] : '';
		$bwdcv_contact_item_color = isset($settings['bwdcv_contact_item_color']) ? $settings['bwdcv_contact_item_color'] : '';
		$bwdcv_contact_phone_number = $settings['bwdcv_contact_phone_number'];
		$bwdcv_contact_email = $settings['bwdcv_contact_email'];
		$bwdcv_contact_location = $settings['bwdcv_contact_location'];
		// Skill
		$bwdcv_skill_cv_title = $settings['bwdcv_skill_cv_title'];
		$bwdcv_skill_name_color = isset($settings['bwdcv_skill_name_color']) ? $settings['bwdcv_skill_name_color'] : '';
		$bwdcv_skill_range_up_color = isset($settings['bwdcv_skill_range_after_background_color']) ? $settings['bwdcv_skill_range_after_background_color'] : '';
		$bwdcv_skill_range_down_color = isset($settings['bwdcv_skill_range_background_color']) ? $settings['bwdcv_skill_range_background_color'] : '';
		$bwdcv_skill_range_value_color = isset($settings['bwdcv_skill_range_value_color']) ? $settings['bwdcv_skill_range_value_color'] : '';
		$bwdcv_skill_title_color = isset($settings['bwdcv_skill_cv_title_color']) ? $settings['bwdcv_skill_cv_title_color'] : '';
		$bwdcv_skill_icon_color = isset($settings['bwdcv_skill_icon_color']) ? $settings['bwdcv_skill_icon_color'] : '';
		$bwdcv_skill_bg_color = isset($settings['bwdcv_skill_cv_title_Background_color']) ? $settings['bwdcv_skill_cv_title_Background_color'] : '';
		// Language
		$bwdcv_language_title = $settings['bwdcv_language_title'];
		$bwdcv_language_title_color = isset($settings['bwdcv_language_title_color']) ? $settings['bwdcv_language_title_color'] : '';
		$bwdcv_language_icon_color = isset($settings['bwdcv_language_icon_color']) ? $settings['bwdcv_language_icon_color'] : '';
		$bwdcv_language_title_bg_color = isset($settings['bwdcv_language_title_bg_color']) ? $settings['bwdcv_language_title_bg_color'] : '';
		$bwdcv_language_name_color = isset($settings['bwdcv_language_name_color']) ? $settings['bwdcv_language_name_color'] : '';
		$bwdcv_language_range_up_color = isset($settings['bwdcv_language_range_up_background_color']) ? $settings['bwdcv_language_range_up_background_color'] : '';
		$bwdcv_language_range_down_color = isset($settings['bwdcv_language_range_down_background_color']) ? $settings['bwdcv_language_range_down_background_color'] : '';
		$bwdcv_language_range_value_color = isset($settings['bwdcv_language_range_value_color']) ? $settings['bwdcv_language_range_value_color'] : '';
		// Hobby
		$bwdcv_hobby_title = $settings['bwdcv_hobby_title'];
		$bwdcv_hobby_title_color = isset($settings['bwdcv_hobby_title_color']) ? $settings['bwdcv_hobby_title_color'] : '';
		$bwdcv_hobby_title_icon_color = isset($settings['bwdcv_hobby_title_icon_color']) ? $settings['bwdcv_hobby_title_icon_color'] : '';
		$bwdcv_hobby_icon_color = isset($settings['bwdcv_hobby_name_icon_color']) ? $settings['bwdcv_hobby_name_icon_color'] : '';
		$bwdcv_hobby_name_color = isset($settings['bwdcv_hobby_name_color']) ? $settings['bwdcv_hobby_name_color'] : '';
		$bwdcv_hobby_title_bg_color = isset($settings['bwdcv_hobby_title_background_color']) ? $settings['bwdcv_hobby_title_background_color'] : '';
		// Education
		$bwdcv_education_title = $settings['bwdcv_education_title'];
		$bwdcv_institute_name_color = isset($settings['bwdcv_institute_name_color']) ? $settings['bwdcv_institute_name_color'] : '';
		$bwdcv_education_icon_color = isset($settings['bwdcv_education_icon_color']) ? $settings['bwdcv_education_icon_color'] : '';
		$bwdcv_education_title_color = isset($settings['bwdcv_education_title_color']) ? $settings['bwdcv_education_title_color'] : '';
		$bwdcv_education_title_bg_color = isset($settings['bwdcv_education_title_background_color']) ? $settings['bwdcv_educatioin_title_background_color'] : '';
		$bwdcv_institute_line_bg_color = isset($settings['bwdcv_institute_name_line_bg_color']) ? $settings['bwdcv_institute_name_line_bg_color'] : '';
		$bwdcv_institute_line_drop_bg_color = isset($settings['bwdcv_institute_line_drop_bg_color']) ? $settings['bwdcv_institute_line_drop_bg_color'] : '';
		$bwdcv_institute_desc_color = isset($settings['bwdcv_institute_description_color']) ? $settings['bwdcv_institute_description_color'] : '';
		$bwdcv_education_year_color = isset($settings['bwdcv_education_year_color']) ? $settings['bwdcv_education_year_color'] : '';
		// Experience
		$bwdcv_experience_title = $settings['bwdcv_experience_title'];
		$bwdcv_experience_title_color = isset($settings['bwdcv_experience_title_color']) ? $settings['bwdcv_experience_title_color'] : '';
		$bwdcv_experience_title_bg_color = isset($settings['bwdcv_experience_title_background_color']) ? $settings['bwdcv_experience_title_background_color'] : '';
		$bwdcv_experience_icon_color = isset($settings['bwdcv_experience_icon_color']) ? $settings['bwdcv_experience_icon_color'] : '';
		$bwdcv_experience_line_bg_color = isset($settings['bwdcv_experience_line_bg_color']) ? $settings['bwdcv_experience_line_bg_color'] : '';
		$bwdcv_experience_line_drop_bg_color = isset($settings['bwdcv_experience_line_drop_bg_color']) ? $settings['bwdcv_experience_line_drop_bg_color'] : '';
		$bwdcv_experience_year_color = isset($settings['bwdcv_experience_year_color']) ? $settings['bwdcv_experience_year_color'] : '';
		$bwdcv_experience_name_color = isset($settings['bwdcv_experience_name_color']) ? $settings['bwdcv_experience_name_color'] : '';
		$bwdcv_experience_desc_color = isset($settings['bwdcv_experience_description_color']) ? $settings['bwdcv_experience_description_color'] : '';
		// Reference
		$bwdcv_reference_title = $settings['bwdcv_reference_title'];
		$bwdcv_reference_title_color = isset($settings['bwdcv_reference_title_color']) ? $settings['bwdcv_reference_title_color'] : '';
		$bwdcv_reference_title_bg_color = isset($settings['bwdcv_reference_title_background_color']) ? $settings['bwdcv_reference_title_background_color'] : '';
		$bwdcv_reference_icon_color = isset($settings['bwdcv_reference_icon_color']) ? $settings['bwdcv_reference_icon_color'] : '';
		$bwdcv_reference_name_color = isset($settings['bwdcv_reference_name_color']) ? $settings['bwdcv_reference_name_color'] : '';
		$bwdcv_reference_company_color = isset($settings['bwdcv_reference_company_color']) ? $settings['bwdcv_reference_company_color'] : '';
		$bwdcv_reference_number_color = isset($settings['bwdcv_reference_number_color']) ? $settings['bwdcv_reference_number_color'] : '';
		$bwdcv_reference_relation_color = isset($settings['bwdcv_reference_relation_color']) ? $settings['bwdcv_reference_relation_color'] : '';
		// Footer
		$bwdcv_footer_bg_color = isset($settings['bwdcv_footer_background_color']) ? $settings['bwdcv_footer_background_color'] : '';
		$bwdcv_footer_video_icon_color = isset($settings['bwdcv_footer_video_icon_color']) ? $settings['bwdcv_footer_video_icon_color'] : '';
		$bwdcv_footer_video_bg_color = isset($settings['bwdcv_footer_video_background_color']) ? $settings['bwdcv_footer_video_background_color'] : '';
		$bwdcv_footer_btn_color = isset($settings['bwdcv_footer_button_normal_color']) ? $settings['bwdcv_footer_button_normal_color'] : '';
		$bwdcv_footer_btn_bg_color = isset($settings['bwdcv_footer_button_normal_background_color']) ? $settings['bwdcv_footer_button_normal_background_color'] : '';
		$footer_margin_top = isset($settings['bwdcv_footer_margin']['size']) ? $settings['bwdcv_footer_margin']['size'] . 'px' : '';
		// Wrapper
		$bwdcv_wrapper_left_bg_color = isset($settings['bwdcv_item_bg_color']) ? $settings['bwdcv_item_bg_color'] : '';
		$bwdcv_wrapper_right_bg_color = isset($settings['bwdcv_item_right_bg_color']) ? $settings['bwdcv_item_right_bg_color'] : '';

		$bwdcv_signature_show = $settings['bwdcv_signature_upload_show'];
		$bwdcv_signature_upload = $settings['bwdcv_signature_upload']['url'];
		$bwdcv_show_video = $settings['bwdcv_video_type_show'];
		$video = $settings['bwdcv_video_type'];
		$bwdcv_button_show = $settings['bwdcv_footer_btn_show'];
		$bwdcv_button_text = $settings['bwdcv_footer_btn_text'];
		$download_btn_show = $settings['bwdcv_download_btn_show'];
		$download_btn_text = $settings['bwdcv_download_text'];
		$header_section = $settings['bwdcv_header_section_show'];
		$about_section = $settings['bwdcv_about_section_show'];
		$contact_section = $settings['bwdcv_contact_section_show'];
		$skill_section = $settings['bwdcv_skill_section_show'];
		$language_section = $settings['bwdcv_language_section_show'];
		$hobby_section = $settings['bwdcv_hobby_section_show'];
		$education_section = $settings['bwdcv_education_section_show'];
		$experience_section = $settings['bwdcv_experience_section_show'];
		$reference_section = $settings['bwdcv_reference_section_show'];
		$footer_section = $settings['bwdcv_footer_section_show'];

		include(__DIR__.'/bwdcv-print.php');

		if ( ! empty( $settings['bwdcv_cv_box_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_cv_box_icon_link', $settings['bwdcv_cv_box_icon_link'] );
		}
	
		if ( ! empty( $settings['bwdcv_footer_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcv_footer_btn_link', $settings['bwdcv_footer_btn_link'] );
		}
		if ('style1' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-1-area">
					<div class="bwd-cv-vilder-common">
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') :?>
									<div class="bwd-cv-header">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
											<?php if($bwdcv_show_social) :?>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php endif; ?>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') :?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section=== 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<i class="fas fa-chart-pie bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<span class="bwd-cv-skill-name-title"><?php echo esc_html($item['bwdcv_skill_name_title']); ?></span>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
														>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<i class="fas fa-language bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
														}
													} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style2' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-2-area">
					<div class="bwd-cv-vilder-common">
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-6 order-lg-1">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html ($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title">
													<?php echo esc_html ($bwdcv_header_cv_desg); ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 order-lg-2 bwd-cv-image-shape-area">
											<div class="bwd-cv-img-shape"></div>
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr( $bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
													<div class="bwd-cv-sub-title">
												 		<?php echo esc_html ( $bwdcv_about_cv_title); ?>
													</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html ( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ( $bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
															</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-vilder-social-area">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html( $bwdcv_header_cv_social_title); ?></div>
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo esc_attr( $item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr ($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
													<?php 
														}
													}?>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
														>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
													 	</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr ($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div> 
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
										<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
    			</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style3' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-3-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-4">
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-8">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title">
													<?php echo esc_html($bwdcv_header_cv_desg); ?>
												</div>
												<div class="bwd-cv-profile-dis">
													<?php echo esc_html($bwdcv_header_description); ?>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-vilder-social-area">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html($bwdcv_header_cv_social_title); ?></div>
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo esc_attr( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
													<?php 
														}
													} ?>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
												</div>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_about_cv_title); ?>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?> 
													</div>
												</div>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
														>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
													 	</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_education_title; ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_experience_title; ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo $bwdcv_reference_title; ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style4' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-4-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title">
												<?php echo esc_html($bwdcv_header_cv_desg); ?>
											</div>
											<div class="bwd-cv-profile-dis">
												<?php echo esc_html($bwdcv_header_description); ?>
											</div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item d-flex">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>	
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name ">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range bwd-pb-name">
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
														>
														</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
													 	</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_about_cv_title); ?>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?> 
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style5' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-5-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title">
														<?php echo esc_html($bwdcv_header_cv_desg); ?>
													</div>
												</div>
												<div class="bwd-cv-social">
													<div class="bwd-cv-social-sub-title"><?php echo esc_html($bwdcv_header_cv_social_title); ?></div>
													<?php if($bwdcv_show_social) :?>
													<div class="bwd-cv-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
													<?php 
														}
													} endif;?>
													<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-skill-area">
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range bwd-pb-name">
																<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-area">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-contact-area">
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-area">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-language-name">
																<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															</div>
															<div class="bwd-cv-language-range bwd-pb-name">
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>" >
													 		</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style6' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-6-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
										<div class="bwd-cv-header row">
											<div class="col-lg-4">
												<div class="bwd-cv-vilder-img ">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
											</div>
											<div class="col-lg-8">
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr( $item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
														<?php 
															}
														} ?>
														<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name bwd-pb-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style7' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-7-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-header">
										<?php if($header_section === 'yes') : ?>
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<?php endif; ?>
										<?php if($contact_section === 'yes') : ?>
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
											<div class="bwd-cv-contact">
												<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
												<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
												<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-language-name">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														</div>
														<div class="bwd-cv-language-range bwd-pb-name">
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range bwd-pb-name">
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style8' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-8-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-4 bwd-cv-image-shape-area">
											<div class="bwd-cv-img-shape"></div>
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-8">
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
										</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name bwd-pb-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style9' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-9-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-4 bwd-cv-image-shape-area">
											<div class="bwd-cv-img-shape"></div>
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-8">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
													<?php 
														}
													} ?>
												</div>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<i class="fas fa-phone-alt bwd-cv-contacts-icon"></i>
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-contact-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>	
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<i class="fas fa-snowman bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_skill_cv_title); ?>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name ">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														</div>
														<div class="bwd-cv-skill-range bwd-pb-name">
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<i class="fas fa-language bwd-cv-icon"></i>
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<i class="fas fa-hockey-puck bwd-cv-icon"></i>
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_education_title); ?>
													</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
														<div class="bwd-cv-icon">
															<i class="fas fa-asterisk"></i>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style10' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-10-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-social-area">
										<?php
											if( $settings['bwdcv_cv_box_social_list'] ) {
											foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
										?>
										<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
										href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
										<?php 
											}
										} ?>
									</div>
									<?php if($bwdcv_show_profile_link) :?>
										<div class="bwd-cv-profile-link">
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
										</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title">
											<?php echo esc_html($bwdcv_header_cv_desg); ?>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-identity-area row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-identity-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-identity-right-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> 
														<div class="bwd-cv-icon">
															<i class="fas fa-phone-alt"></i>
														</div>
														<?php echo esc_html( $bwdcv_contact_phone_number); ?>
													</div>
													<div class="bwd-cv-email bwd-cv-contact-item">
														<div class="bwd-cv-icon">
														<i class="fas fa-envelope "></i>
														</div>
														<?php echo esc_html( $bwdcv_contact_email); ?>
													</div>
													<div class="bwd-cv-location bwd-cv-contact-item">
														<div class="bwd-cv-icon">
														<i class="fas fa-map-marker-alt"></i>
														</div>
														<?php echo esc_html( $bwdcv_contact_location); ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name bwd-pb-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>	
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<div class="bwd-cv-language-item">
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style11' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-11-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-img-shape"></div>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<?php endif; ?>
												<div class="bwd-cv-vilder-left-content-item">
													<?php if($header_section === 'yes') : ?>
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title">
															<?php echo esc_html($bwdcv_header_cv_desg); ?>
														</div>
													</div>
													<div class="bwd-cv-vilder-social-area">
														<div class="bwd-cv-social-title-item">
															<div class="bwd-cv-icon">
																<i class="fas fa-hashtag"></i>
															</div>
															<div class="bwd-cv-social-sub-title">
																<?php echo $bwdcv_header_cv_social_title; ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo $item['bwdcv_cv_box_icon_link']['url'];?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
														<?php 
															}
														} ?>
													</div>
													<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
													<?php endif; ?>
													<?php if($contact_section === 'yes') : ?>
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-contacts-icon">
																<i class="fas fa-phone-alt"></i>
															</div>
															<div class="bwd-cv-contact-sub-title">
																<?php echo $bwdcv_contact_cv_title; ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
													<?php endif; ?>
													<?php if($skill_section === 'yes') : ?>
													<div class="bwd-cv-skill bwd-cv-pb-area">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-snowman "></i>
															</div>
															<div class="bwd-cv-skill-sub-title">
																<?php echo $bwdcv_skill_cv_title; ?>
																
															</div>
														</div>
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name ">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range bwd-pb-name">
																<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																	>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
													<?php if($language_section === 'yes') : ?>
													<div class="bwd-cv-language bwd-cv-pb-area">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-language "></i>
															</div>
															<div class="bwd-cv-sub-title">
																<?php echo $bwdcv_language_title; ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-hockey-puck"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-asterisk"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style12' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-12-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-4">
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-8">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
													<?php 
														}
													} ?>
												</div>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($contact_section=== 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name bwd-pb-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																	>
																</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section=== 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style13' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-13-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo esc_attr($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value'] );?>" ></i></a>
														<?php 
															}
														} ?>
													</div>
													<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
												</div>
												<?php endif; ?>
												<div class="bwd-cv-vilder-left-content-item">
													<?php if($contact_section === 'yes') : ?>
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_contact_cv_title); ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
													<?php endif; ?>
													<?php if($skill_section === 'yes') : ?>
													<div class="bwd-cv-skill bwd-cv-pb-area">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_skill_cv_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_skill_name_list'] ) {
															foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name ">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range bwd-pb-name">
																<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																	>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
													<?php if($language_section === 'yes') : ?>
													<div class="bwd-cv-language bwd-cv-pb-area">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_language_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
													<?php if($hobby_section === 'yes') : ?>
													<div class="bwd-cv-hobby">
														<div class="bwd-cv-hobby-title">
															<div class="bwd-cv-sub-title">
																<?php echo esc_html($bwdcv_hobby_title); ?>
															</div>
														</div>
														<div class="bwd-cv-hobby-item">
															<?php
																if( $settings['bwdcv_hobby_name_list'] ) {
																foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
															?>
															<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
																<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
																<div class="bwd-cv-title">
																	<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
																</div>
															</div>
															<?php 
																}
															} ?>
														</div>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style14' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-14-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-header">
										<?php if($header_section === 'yes') : ?>
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<?php endif; ?>
										<div class="bwd-cv-vilder-profile">
											<?php if($header_section === 'yes') : ?>
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
											<?php endif; ?>
											<?php if($contact_section === 'yes') : ?>
											<div class="bwd-cv-contact">
												<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i>+00 952 165</div>
												<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i>info20@gmail.com</div>
												<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i>uttara dhaka 1230</div>
											</div>
											<?php endif; ?>
										</div>
									</div>	
									<div class="col-lg-12">
										<?php if($about_section === 'yes') : ?>
										<div class="bwd-cv-profile">
											<div class="bwd-cv-profile-title">
												<div class="bwd-cv-sub-title">
													<?php echo esc_html($bwdcv_about_cv_title); ?>
												</div>
											</div>
											<div class="bwd-cv-profile-dis">
												<?php echo esc_html($bwdcv_about_cv_desg); ?>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-skill-name bwd-pb-name">
															<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_skill_percent']); ?>"
																>
															</div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style15' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-15-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section  === 'yes') : ?>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
														<?php 
															}
														} ?>
													</div>
													<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
												</div>
												<?php endif; ?>
												<div class="bwd-cv-vilder-left-content-item">
													<?php if($contact_section === 'yes') : ?>
													<div class="bwd-cv-contact">
														<div class="bwd-cv-contact-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-phone-alt"></i>
															</div>
															<div class="bwd-cv-contact-sub-title">
																<?php echo esc_html($bwdcv_contact_cv_title); ?>
															</div>
														</div>
														<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
														<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
														<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
													</div>
													<?php endif; ?>
													<?php if($skill_section === 'yes') : ?>
													<div class="bwd-cv-skill bwd-cv-pb-area">
														<div class="bwd-cv-skill-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-snowman "></i>
															</div>
															<div class="bwd-cv-skill-sub-title">
																<?php echo esc_html($bwdcv_skill_cv_title); ?>
															</div>
														</div>
														<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-skill-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-skill-name">
																<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
															</div>
															<div class="bwd-cv-skill-range bwd-pb-name">
																<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
																>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
													<?php if($language_section === 'yes') : ?>
													<div class="bwd-cv-language bwd-cv-pb-area">
														<div class="bwd-cv-language-title">
															<div class="bwd-cv-icon">
																<i class="fas fa-language "></i>
															</div>
															<div class="bwd-cv-sub-title bwd-cv-language-sub-title">
																<?php echo esc_html($bwdcv_language_title); ?>
															</div>
														</div>
														<?php
															if( $settings['bwdcv_language_name_list'] ) {
															foreach( $settings['bwdcv_language_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<?php echo esc_html($item['bwdcv_language_name_title']); ?>
															<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
																>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-user"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<i class="fas fa-graduation-cap bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<i class="fas fa-shopping-bag bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-hockey-puck"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value'] );?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style16' === $settings['bwdcv-cv-builder_style']) {
			?>
				<div class="bwd-cv-vilder-16-area  bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-img-contact-area">
										<?php if($header_section === 'yes') : ?>
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<?php endif; ?>
										<?php if($contact_section === 'yes') : ?>
										<div class="bwd-cv-contact">
											<div class="bwd-cv-phone-number bwd-cv-contact-item"> 
												<div class="bwd-cv-phone-number-title">phone</div>
												<?php echo esc_html( $bwdcv_contact_phone_number); ?>
											</div>
											<div class="bwd-cv-email bwd-cv-contact-item">
												<div class="bwd-cv-email-title">email</div> 
												<?php echo esc_html( $bwdcv_contact_email); ?></div>
											<div class="bwd-cv-location bwd-cv-contact-item"> 
											<div class="bwd-cv-location-title">location</div> 
												<?php echo esc_html( $bwdcv_contact_location); ?>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html($bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo esc_url($item['bwdcv_cv_box_icon_link']['url']);?>"><i class="bwd-cv-social-icon  <?php echo esc_attr($item['bwdcv_cv_box_icon']['value']);?>" ></i></a>
											<?php 
												}
											} ?>
										</div>
										<?php if($bwdcv_show_profile_link) :?>
										<div class="bwd-cv-profile-link">
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
										</div>
										<?php endif; ?>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-skill-sub-title">
															<?php echo esc_html($bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo esc_attr($item['bwdcv_hobby_icon']['value']);?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-8 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html($bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
																<div class="bwd-cv-reference-company-name">
																	<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
																</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo $bwdcv_signature_upload; ?>" alt="">
										</div><?php } ?>
										<?php if($bwdcv_show_video === 'yes') { ?>
										<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
										elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
										?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style17' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-17-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-vilder-img">
										<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
									</div>
									<div class="bwd-cv-vilder-profile">
										<div class="bwd-cv-vilder-name">
											<?php echo esc_html($bwdcv_header_cv_title); ?>
										</div>
										<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
										<div class="bwd-cv-vilder-social-area">
											<?php
												if( $settings['bwdcv_cv_box_social_list'] ) {
												foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
											?>
											<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
											href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
											<?php 
												}
											} ?>
										</div>
										<?php if($bwdcv_show_profile_link) :?>
										<div class="bwd-cv-profile-link">
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
											<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
										</div>
										<?php endif; ?>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style18' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-18-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-4">
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-8">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
													<?php 
														}
													} ?>
												</div>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style19' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-19-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header row">
										<div class="col-lg-6">
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
													<?php 
														}
													} ?>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number bwd-cv-contact-item"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email bwd-cv-contact-item"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location bwd-cv-contact-item"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<i class="fas fa-chart-pie bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<i class="fas fa-language  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style20' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-20-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-img-shape"></div>
												<div class="bwd-cv-vilder-img">
													<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
												</div>
												<div class="bwd-cv-vilder-profile">
													<div class="bwd-cv-vilder-name">
														<?php echo esc_html($bwdcv_header_cv_title); ?>
													</div>
													<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
													<div class="bwd-cv-vilder-social-area">
														<?php
															if( $settings['bwdcv_cv_box_social_list'] ) {
															foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
														?>
														<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
														href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
														<?php 
															}
														} ?>
													</div>
													<?php if($bwdcv_show_profile_link) :?>
													<div class="bwd-cv-profile-link">
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
														<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
													</div>
													<?php endif; ?>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<i class="fas fa-phone-alt bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<i class="fas fa-chart-pie bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<i class="fas fa-language  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style21' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-21-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-item">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>	
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style22' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-22-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<?php if($header_section === 'yes') : ?>
									<div class="bwd-cv-header">
										<div class="bwd-cv-vilder-img">
											<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
										</div>
										<div class="bwd-cv-vilder-profile">
											<div class="bwd-cv-vilder-name">
												<?php echo esc_html($bwdcv_header_cv_title); ?>
											</div>
											<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
											<div class="bwd-cv-vilder-social-area">
												<?php
													if( $settings['bwdcv_cv_box_social_list'] ) {
													foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
												?>
												<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
												href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
												<?php 
													}
												} ?>
											</div>
											<?php if($bwdcv_show_profile_link) :?>
											<div class="bwd-cv-profile-link">
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
												<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
									<div class="bwd-cv-vilder-item row">
										<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style23' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-23-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-vilder-img">
														<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
													</div>
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
														<div class="bwd-cv-vilder-social-area">
															<?php
																if( $settings['bwdcv_cv_box_social_list'] ) {
																foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
															?>
															<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
															href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
															<?php 
																}
															} ?>
														</div>
														<?php if($bwdcv_show_profile_link) :?>
														<div class="bwd-cv-profile-link">
															<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
															<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
														</div>
														<?php endif; ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<i class="fas fa-user  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-briefcase-medical"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-icon">
															<i class="fas fa-graduation-cap"></i>
														</div>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<i class="fas fa-asterisk bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<i class="fas fa-hockey-puck  bwd-cv-icon"></i>
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}elseif ('style24' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-24-area bwd-cv-vilder-common">
					<div >
					<div class="row g-0">
						<div class="col-lg-12">
							<div class="bwd-cv-vilder-information">
								<div class="bwd-cv-vilder-item row">
									<div class="col-lg-5 col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-left-content">
											<?php if($header_section === 'yes') : ?>
											<div class="bwd-cv-img-shape"></div>
											<div class="bwd-cv-vilder-img">
												<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
											</div>
											<div class="bwd-cv-vilder-profile">
												<div class="bwd-cv-vilder-name">
													<?php echo esc_html($bwdcv_header_cv_title); ?>
												</div>
												<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
												<div class="bwd-cv-vilder-social-area">
													<?php
														if( $settings['bwdcv_cv_box_social_list'] ) {
														foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
													?>
													<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
													href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
													<?php 
														}
													} ?>
												</div>
												<?php if($bwdcv_show_profile_link) :?>
												<div class="bwd-cv-profile-link">
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
													<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
												</div>
												<?php endif; ?>
											</div>
											<?php endif; ?>
											<?php if($contact_section === 'yes') : ?>
											<div class="bwd-cv-contact">
												<div class="bwd-cv-contact-title">
													<i class="fas fa-phone-alt bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_contact_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
												<div class="bwd-cv-email"><i class="fas fa-envelope bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
												<div class="bwd-cv-location"><i class="fas fa-map-marker-alt bwd-cv-icon"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
											</div>
											<?php endif; ?>
											<?php if($skill_section === 'yes') : ?>
											<div class="bwd-cv-skill bwd-cv-pb-area">
												<div class="bwd-cv-skill-title">
													<i class="fas fa-chart-pie bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_skill_cv_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_skill_name_list'] ) {
													foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
													<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
														>
														<div class="bwdcv-range"></div>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
											<?php endif; ?>
											<?php if($language_section === 'yes') : ?>
											<div class="bwd-cv-language bwd-cv-pb-area">
												<div class="bwd-cv-language-title">
													<i class="fas fa-language bwd-cv-icon"></i>
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_language_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_language_name_list'] ) {
													foreach( $settings['bwdcv_language_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<?php echo esc_html($item['bwdcv_language_name_title']); ?>
													<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
														>
														<div class="bwdcv-range"></div>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-lg-7 col-md-6 col-sm-12">
										<div class="bwd-cv-vilder-right-content">
											<?php if($about_section === 'yes') : ?>
											<div class="bwd-cv-profile">
												<div class="bwd-cv-profile-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html ($bwdcv_about_cv_title); ?>
													</div>
												</div>
												<div class="bwd-cv-profile-dis">
													<?php echo esc_html( $bwdcv_about_cv_desg); ?>
												</div>
											</div>
											<?php endif; ?>
											<?php if($education_section === 'yes') : ?>
											<div class="bwd-cv-education">
												<div class="bwd-cv-education-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_education_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_education_name_list'] ) {
													foreach( $settings['bwdcv_education_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<div class="bwd-cv-institute-item d-flex align-items-center">
														<div class="bwd-cv-institute-year">
															<?php echo esc_html($item['bwdcv_education_year']); ?>
														</div>
														<div class="bwd-cv-institute-title">
															<?php echo esc_html($item['bwdcv_education_name_title']); ?>
														</div>
													</div>
													<div class="bwd-cv-institute-dis">
														<?php echo esc_html($item['bwdcv_education_desc']); ?>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
											<?php endif; ?>
											<?php if($experience_section === 'yes') : ?>
											<div class="bwd-cv-experience">
												<div class="bwd-cv-experience-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html($bwdcv_experience_title); ?>
													</div>
												</div>
												<?php
													if( $settings['bwdcv_experience_name_list'] ) {
													foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
												?>
												<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
													<div class="bwd-cv-experience-item d-flex align-items-center">
														<div class="bwd-cv-experience-year">
															<?php echo esc_html($item['bwdcv_experience_year']); ?>
														</div>
														<div class="bwd-cv-experience-sub-title">
															<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
														</div>
													</div>
													<div class="bwd-cv-experience-dis">
														<?php echo esc_html($item['bwdcv_experience_desc']); ?>
													</div>
												</div>
												<?php 
													}
												} ?>
											</div>
											<?php endif; ?>
											<?php if($hobby_section === 'yes') : ?>
											<div class="bwd-cv-hobby">
												<div class="bwd-cv-hobby-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_hobby_title); ?>
													</div>
												</div>
												<div class="bwd-cv-hobby-wrap">
													<?php
														if( $settings['bwdcv_hobby_name_list'] ) {
														foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
														<div class="bwd-cv-title">
															<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
														</div>
														
													</div>
													<?php 
														}
													} ?>
												</div>
											</div>
											<?php endif; ?>
											<?php if($reference_section === 'yes') : ?>
											<div class="bwd-cv-reference">
												<div class="bwd-cv-reference-title">
													<div class="bwd-cv-sub-title">
														<?php echo esc_html( $bwdcv_reference_title); ?>
													</div>
												</div>
												<div class="bwd-cv-reference-details">
													<?php
														if( $settings['bwdcv_reference_name_list'] ) {
														foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-reference-name">
															<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
														</div>
														<div class="bwd-cv-reference-company-name">
															<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
														</div>
														<div class="bwd-cv-reference-number">
															<div class="bwd-cv-reference-number-title">
																<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
															</div>
														</div>
														<div class="bwd-cv-reference-relation">
															<div class="bwd-cv-reference-relation-title">
																<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
															</div>
														</div>
													</div>
													<?php 
													}
													} ?>
													
												</div>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<?php if($footer_section === 'yes') : ?>
								<div class="bwd-cv-meta d-flex align-items-center">
									<?php if($bwdcv_show_video === 'yes') { ?>
									<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
									elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
									?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
									<?php } ?>
									<?php if( $bwdcv_signature_show === 'yes' ) { ?>
									<div class="bwd-cv-signature">
										<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
									</div><?php } ?>
									<?php if( $bwdcv_button_show === 'yes' ) {?>
									<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
			<?php endif; ?>
			<?php
		}elseif ('style25' === $settings['bwdcv-cv-builder_style']) {
			?>	
				<div class="bwd-cv-vilder-25-area bwd-cv-vilder-common">
					<div >
						<div class="row g-0">
							<div class="col-lg-12">
								<div class="bwd-cv-vilder-information">
									<div class="bwd-cv-vilder-item row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-left-content">
												<?php if($header_section === 'yes') : ?>
												<div class="bwd-cv-vilder-left-content-item">
													<div class="bwd-cv-vilder-profile">
														<div class="bwd-cv-vilder-name">
															<?php echo esc_html($bwdcv_header_cv_title); ?>
														</div>
														<div class="bwd-cv-vilder-title"><?php echo esc_html( $bwdcv_header_cv_desg); ?></div>
														<div class="bwd-cv-vilder-social-area">
															<?php
																if( $settings['bwdcv_cv_box_social_list'] ) {
																foreach( $settings['bwdcv_cv_box_social_list'] as $item ) { 
															?>
															<a class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" 
															href="<?php echo  esc_url( $item['bwdcv_cv_box_icon_link']['url'] );?>"><i class="bwd-cv-social-icon  <?php echo $item['bwdcv_cv_box_icon']['value'];?>" ></i></a>
															<?php 
																}
															} ?>
														</div>
														<?php if($bwdcv_show_profile_link) :?>
														<div class="bwd-cv-profile-link">
															<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link_text ); ?></span>
															<span class="bwdcv-profile-link"><?php echo esc_html( $bwdcv_user_profile_link); ?></span>
														</div>
														<?php endif; ?>
													</div>
													<div class="bwd-cv-vilder-img">
														<img src="<?php echo esc_attr($bwdcv_cv_box_image); ?>" alt="">
													</div>
												</div>
												<?php endif; ?>
												<?php if($contact_section === 'yes') : ?>
												<div class="bwd-cv-contact">
													<div class="bwd-cv-contact-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_contact_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-phone-number"> <i class="fas fa-phone-alt"></i><?php echo esc_html( $bwdcv_contact_phone_number); ?></div>
													<div class="bwd-cv-email"><i class="fas fa-envelope"></i><?php echo esc_html( $bwdcv_contact_email); ?></div>
													<div class="bwd-cv-location"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $bwdcv_contact_location); ?></div>
												</div>
												<?php endif; ?>
												<?php if($skill_section === 'yes') : ?>
												<div class="bwd-cv-skill bwd-cv-pb-area">
													<div class="bwd-cv-skill-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_skill_cv_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_skill_name_list'] ) {
														foreach( $settings['bwdcv_skill_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-skill-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_skill_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_skill_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($language_section === 'yes') : ?>
												<div class="bwd-cv-language bwd-cv-pb-area">
													<div class="bwd-cv-language-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_language_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_language_name_list'] ) {
														foreach( $settings['bwdcv_language_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-language-name bwd-pb-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<?php echo esc_html($item['bwdcv_language_name_title']); ?>
														<div class="bwdcv-per-val" data-pb-val="<?php echo 	esc_attr($item['bwdcv_lang_percent']); ?>"
															>
															<div class="bwdcv-range"></div>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($hobby_section === 'yes') : ?>
												<div class="bwd-cv-hobby">
													<div class="bwd-cv-hobby-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_hobby_title); ?>
														</div>
													</div>
													<div class="bwd-cv-hobby-wrap">
														<?php
															if( $settings['bwdcv_hobby_name_list'] ) {
															foreach( $settings['bwdcv_hobby_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-hobby-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<i class="<?php echo $item['bwdcv_hobby_icon']['value'];?> bwd-cv-hobby-icon"></i>
															<div class="bwd-cv-title">
																<?php echo esc_html($item['bwdcv_hobby_name_title']); ?>
															</div>
															
														</div>
														<?php 
															}
														} ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="bwd-cv-vilder-right-content">
												<?php if($about_section === 'yes') : ?>
												<div class="bwd-cv-profile">
													<div class="bwd-cv-profile-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html ($bwdcv_about_cv_title); ?>
														</div>
													</div>
													<div class="bwd-cv-profile-dis">
														<?php echo esc_html( $bwdcv_about_cv_desg); ?>
													</div>
												</div>
												<?php endif; ?>
												<?php if($experience_section === 'yes') : ?>
												<div class="bwd-cv-experience">
													<div class="bwd-cv-experience-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_experience_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_experience_name_list'] ) {
														foreach( $settings['bwdcv_experience_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-experience-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-experience-item d-flex align-items-center">
															<div class="bwd-cv-experience-sub-title">
																<?php echo esc_html($item['bwdcv_experience_name_title']); ?>
															</div>
															<div class="bwd-cv-experience-year">
																<?php echo esc_html($item['bwdcv_experience_year']); ?>
															</div>
														</div>
														<div class="bwd-cv-experience-dis">
															<?php echo esc_html($item['bwdcv_experience_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($education_section === 'yes') : ?>
												<div class="bwd-cv-education">
													<div class="bwd-cv-education-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html($bwdcv_education_title); ?>
														</div>
													</div>
													<?php
														if( $settings['bwdcv_education_name_list'] ) {
														foreach( $settings['bwdcv_education_name_list'] as $item ) { 
													?>
													<div class="bwd-cv-institute-name elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
														<div class="bwd-cv-institute-item d-flex align-items-center">
															<div class="bwd-cv-institute-title">
																<?php echo esc_html($item['bwdcv_education_name_title']); ?>
															</div>
															<div class="bwd-cv-institute-year">
																<?php echo esc_html($item['bwdcv_education_year']); ?>
															</div>
															
														</div>
														<div class="bwd-cv-institute-dis">
															<?php echo esc_html($item['bwdcv_education_desc']); ?>
														</div>
													</div>
													<?php 
														}
													} ?>
												</div>
												<?php endif; ?>
												<?php if($reference_section === 'yes') : ?>
												<div class="bwd-cv-reference">
													<div class="bwd-cv-reference-title">
														<div class="bwd-cv-sub-title">
															<?php echo esc_html( $bwdcv_reference_title); ?>
														</div>
													</div>
													<div class="bwd-cv-reference-details">
														<?php
															if( $settings['bwdcv_reference_name_list'] ) {
															foreach( $settings['bwdcv_reference_name_list'] as $item ) { 
														?>
														<div class="bwd-cv-reference-information elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
															<div class="bwd-cv-reference-name">
																<?php echo esc_html($item['bwdcv_reference_name_title']); ?>
															</div>
															<div class="bwd-cv-reference-company-name">
																<?php echo esc_html($item['bwdcv_reference_company_title']); ?>
															</div>
															<div class="bwd-cv-reference-number">
																<div class="bwd-cv-reference-number-title">
																	<?php echo esc_html($item['bwdcv_reference_number_title']); ?>
																</div>
															</div>
															<div class="bwd-cv-reference-relation">
																<div class="bwd-cv-reference-relation-title">
																	<?php echo esc_html($item['bwdcv_reference_relation_title']); ?>
																</div>
															</div>
														</div>
														<?php 
														}
														} ?>
														
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<?php if($footer_section === 'yes') : ?>
									<div class="bwd-cv-meta d-flex align-items-center">
										<?php if($bwdcv_show_video === 'yes') { ?>
											<a href="<?php if('youtube' === $video) {echo esc_url($settings['bwdcv_video_youtube_url']['url']);}
											elseif('hosted' === $video) {echo esc_url($cv_video_hosted);}
											?>" class="bwd-cv-vedio ripple-white " data-popup-youtube-url="https://www.youtube.com/watch?v=Gsj7uU_7Um4&list=PL_XxuZqN0xVD0op-QDEgyXFA4fRPChvkl&index=13" data-popup-custom-url=""><i class="fas fa-play"></i></a>
										<?php } ?>
										<?php if( $bwdcv_signature_show === 'yes' ) { ?>
										<div class="bwd-cv-signature">
											<img src="<?php echo esc_attr ($bwdcv_signature_upload); ?>" alt="">
										</div><?php } ?>
										<?php if( $bwdcv_button_show === 'yes' ) {?>
										<a href="<?php echo esc_url($settings['bwdcv_footer_btn_link']['url']); ?>" class="bwd-cv-button"><?php echo esc_html($bwdcv_button_text); ?></a><?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($download_btn_show === 'yes') : ?>
				<div class="bwd-downl-btn">
					<a href="#" class="bwd-download-text"><?php echo esc_html($download_btn_text); ?>
						<span class='bwd-down-icon'><?php \Elementor\Icons_Manager::render_icon( $settings['bwdcv_download_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					</a>
				</div>
				<?php endif; ?>
			<?php
		}
	}
}
