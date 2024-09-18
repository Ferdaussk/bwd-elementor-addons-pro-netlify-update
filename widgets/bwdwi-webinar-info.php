<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdWIwebinarinfo extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdwi-webinar-info';
	}

	public function get_title() {
		return esc_html__( 'Webinar Info', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'webinar bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

    public function get_keywords() {
		return [ 'webinar', 'info', 'webinar info' ];
	}

	

	protected function register_controls() {

		$this->start_controls_section(
			'bwdwi_webinar_info_choose_style',
		    [
		        'label' => esc_html__('Choose Style',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdwi_webinar_info_style',
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
				],
			]
		);

		// choose count down style
		$this->add_control(
			'bwdwi_count_down_choose',
			[
				'label' => esc_html__( 'Count-Down Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', BWDEB_ROOT_AUTHOR_PRO ),
					'2' => esc_html__( 'Style 2', BWDEB_ROOT_AUTHOR_PRO ),
					'3' => esc_html__( 'Style 3', BWDEB_ROOT_AUTHOR_PRO ),
					'4' => esc_html__( 'Style 4', BWDEB_ROOT_AUTHOR_PRO ),
					'5' => esc_html__( 'Style 5', BWDEB_ROOT_AUTHOR_PRO ),
					'6' => esc_html__( 'Style 6', BWDEB_ROOT_AUTHOR_PRO ),
				]
			]
		);
		// choose count down style

		$this->end_controls_section();
		// web inner content sec start
        $this->start_controls_section(
			'bwdwi_webinar_info_style_area',
		    [
		        'label' => esc_html__('WebInar Content',BWDEB_ROOT_AUTHOR_PRO),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdwi_webinar_info_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_title',
			[
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_description',
			[
				'label' => esc_html__( 'Description', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, odio.', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdwi_webinar_info_content_image_extra',
			[
				'label' => esc_html__( 'Choose Image One', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi',
			[
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your Designation here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_content_image_extra_two',
			[
				'label' => esc_html__( 'Choose Image Two', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5', 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title_two',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5', 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi_two',
			[
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your Designation here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style4', 'style5' , 'style6', 'style7', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_content_image_extra_three',
			[
				'label' => esc_html__( 'Choose Image Three', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_title_three',
			[
				'label' => esc_html__( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wlliamson due', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_rep_degi_three',
			[
				'label' => esc_html__( 'Designation', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Marketing Expert ', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your Designation here', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => [ 'style2', 'style3', 'style4','style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style21'],
				],
				'separator' => 'after',
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_date',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'separator' => 'before',
				'enableTime' => false,
				'default' => '8th-Nov',
				'picker_options' => [
					'dateFormat'=>'J-M',
				
				],
			]
		);


		$this->add_control(
			'bwdwi_webinar_date_icon',
			[
				'label' => esc_html__( 'Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-calendar',
					'library' => 'solid',
				],
			]
		);

		$this->add_control(
			'bwdwi_webinar_info_time',
			[
				'label' => esc_html__( 'Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'separator' => 'before',
				'enableDate' => false,
				'picker_options' => [
					'dateFormat'=>'h-i'
				],
				'default' => '10-05'
			]
		);
		//time zone
		$this->add_control(
            'bwdwi_webinar_info_time_zone',
            [
                'label' => esc_html__('Select GMT', BWDEB_ROOT_AUTHOR_PRO),
                'type' => Controls_Manager::SELECT,
                'options' => [

                    'GMT+0' => esc_html__('GMT+0', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+1' => esc_html__('GMT+1', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+2' => esc_html__('GMT+2', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+3' => esc_html__('GMT+3', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+4' => esc_html__('GMT+4', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+5' => esc_html__('GMT+5', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+6' => esc_html__('GMT+6', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+7' => esc_html__('GMT+7', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+8' => esc_html__('GMT+8', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+9' => esc_html__('GMT+9', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+10' => esc_html__('GMT+10', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+11' => esc_html__('GMT+11', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT+12' => esc_html__('GMT+12', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-1' => esc_html__('GMT-1', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-2' => esc_html__('GMT-2', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-3' => esc_html__('GMT-3', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-4' => esc_html__('GMT-4', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-5' => esc_html__('GMT-5', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-6' => esc_html__('GMT-6', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-7' => esc_html__('GMT-7', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-8' => esc_html__('GMT-8', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-9' => esc_html__('GMT-9', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-10' => esc_html__('GMT-10', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-11' => esc_html__('GMT-11', BWDEB_ROOT_AUTHOR_PRO),
                    'GMT-12' => esc_html__('GMT-12', BWDEB_ROOT_AUTHOR_PRO),
                ],
                'default' => 'GMT+0',
            ]
        );

		$this->add_control(
			'bwdwi_webinar_time_icon',
			[
				'label' => esc_html__( 'Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa-solid fa-clock',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'bwdwi_webinar_info_btn_title',
			[
				'label' => esc_html__( 'Button Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Registration Now', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => esc_html__( 'Type your title here', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_webinar_btn_link',
			[
				'label' => esc_html__( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $this->end_controls_section();

		// count down content section start  ========================
		$this->start_controls_section(
			'bwdwi_count_down_content_section',
			[
				'label' => esc_html__( 'Count Down Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// expired date
		$this->add_control(
			'bwdwi_expired_date',
			[
				'label' => esc_html__( 'Expired Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default'=> esc_html__('2023-01-01 11:15'),
			]
		);

		//time unit reverse
		$this->add_control(
			'bwdwi_count_down_time_unit_direction',
			[
				'label' => esc_html__( 'Flip Time Unit Direction', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'on', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'off', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// title controls
		$this->add_control(
			'bwdwi_count_down_unit_title_contents',
			[
				'label' => esc_html__( 'Unit Titles', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdwi_count_down_day_title',
			[
				'label' => esc_html__( 'Day', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Day', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_hour_title',
			[
				'label' => esc_html__( 'Hour', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Hour', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_min_title',
			[
				'label' => esc_html__( 'Minutes', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Minutes', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdwi_count_down_sec_title',
			[
				'label' => esc_html__( 'Seconds', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Seconds', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//what will happened after due time expired
		$this->add_control(
			'bwdwi_count_down_after_expired',
			[
				'label' => esc_html__( 'Actions After Expire', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'separator' => 'before',
				'label_block'=> true,
				'options' => [
					'redirect'  => esc_html__( 'Redirect', BWDEB_ROOT_AUTHOR_PRO ),
					'hide' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
					'show-message' => esc_html__('Show Message', BWDEB_ROOT_AUTHOR_PRO ),
				],

			]
		);
		//redirect control
		$this->add_control(
			'bwdwi_count_down_after_expired_url',
			[
				'label' => esc_html__( 'Redirect Url', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_count_down_after_expired' => 'redirect',
				],
			]
		);
		//Message control
		$this->add_control(
			'bwdwi_count_down_after_expired_msg',
			[
				'label' => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdwi_count_down_after_expired' => 'show-message',
				],
			]
		);
		$this->end_controls_section();
		// count down content section end
		// webinner style section start
		$this->start_controls_section(
			'bwdwi_heading_style_section',
			[
				'label' => esc_html__( 'Heading', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_webinar_hedi_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-heading' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdwi_heading_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_heading_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-heading',
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_dec_style_section',
			[
				'label' => esc_html__( 'Description', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_webinar_decs_align',
			[
				'label' => esc_html__( 'Alignment', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwdwi-webinar-box' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-decs' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdwi_decs_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_decs_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-decs',
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_image_style_section',
			[
				'label' => esc_html__( 'Image', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width_height',
			[
				'label' => esc_html__( 'Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
					
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width_height_last',
			[
				'label' => esc_html__( 'Second Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-sec-img' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
					
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style18'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_width',
			[
				'label' => esc_html__( 'Image Width', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_shape_height',
			[
				'label' => esc_html__( 'Image Height', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style7', 'style8', 'style11', 'style16', 'style17', 'style18', 'style19', 'style21'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdwi_webi_img_background',
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'condition' => [
					'bwdwi_webinar_info_style' => [ 'style2', 'style4', 'style9', 'style11'],
				],
				'selector' => '{{WRAPPER}} .bwdwi-single-img,
								{{WRAPPER}} .bwdwi-single-img .bwdwi-img-item',
			]
		);
		$this->add_control(
			'bwdwi_image_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-single-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_image_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-img-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_name_style_section',
			[
				'label' => esc_html__( 'Name', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_name_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_name_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .bwdwi-img-content' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style5', 'style6', 'style10', 'style12', 'style13', 'style14', 'style15'],
				],
			]
		);
		$this->add_control(
			'bwdwi_name_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-name' => 'border-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_name_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-single-img .bwdwi-img-content .bwdwi-name',
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdwi_degi_style_section',
			[
				'label' => esc_html__( 'Designation', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_degi_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-degi' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_degi_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-degi' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style6', 'style12', 'style13', 'style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_degi_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-single-img .bwdwi-img-content .bwdwi-degi',
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdwi_dae_style_section',
			[
				'label' => esc_html__( 'Date and Time', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_date_date_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-date' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_date_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-date-time .bwdwi-date',
			]
		);
		$this->add_control(
			'bwdwi_date_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'bwdwi_date_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date i' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_webi_icon_date_font',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdwi-date i' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
        $this->end_controls_section();


		$this->start_controls_section(
			'bwdwi_btn_style_section',
			[
				'label' => esc_html__( 'Button', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdwi-webinar-box' ),
			]
		);
		$this->add_control(
			'bwdwi_btn_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdwi_webinar_info_style!' => ['style7', 'style10', 'style13', 'style14', 'style15', 'style16', 'style18'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_button_font_size',
				'selector' => '{{WRAPPER}} .bwdwi-button a',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-button a',
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdwi-webinar-box' ),
			]
		);
		$this->add_control(
			'bwdwi_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover:before' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwi_hover_border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-button a:hover',
			]
		);
		$this->add_responsive_control(
			'bwdwi_btn_border_hover_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdwi_bg_style_section',
			[
				'label' => esc_html__( 'Content Box', 'bwdwi-webinar-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdwi_btn_background_main_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdwi_btn_background_shape_color',
			[
				'label' => esc_html__( 'Bg Shape color', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webinar-box::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-webinar-box::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_webinar_info_style' => ['style1', 'style8', 'style11', 'style13', 'style14', 'style15', 'style16', 'style19', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdwi_content_border',
				'label' => esc_html__( 'Border', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-webi-bg',
			]
		);
		$this->add_responsive_control(
			'bwdwi_content_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwdwi-webinar-box' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-webi-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdwi_webi_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdwi-webinar-box' ),
				'selector' => '{{WRAPPER}} .bwdwi-webinar-box',
			]
		);
        $this->end_controls_section();
		// count down style section ========================
		$this->start_controls_section(
			'bwdwi_count_down_style_section',
			[
				'label' => esc_html__( 'Count Down Style', 'bwdwi-count-down'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//unit controls
		$this->add_control(
			'bwdwi_count_down_unit_style',
			[
				'label' => esc_html__( 'Time Units', 'bwdwi-count-down'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// unit typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_count_down_num_typography',
				'selector' => '{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num',
			]
		);
		// unit text color
		$this->add_control(
			'bwdwi_count_down_num_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-count-down-color-common' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-shape-common' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-shape-common::before,
					{{WRAPPER}} .bwdwi-shape-common::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		// unit bg color
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdwi-count-down-num-bg',
				'label' => esc_html__( 'Background', 'bwdwi-count-down' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num',
			]
		);
		// unit border color
		$this->add_control(
			'bwdwi_count_down_num_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style30'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num' => 'border-color: {{VALUE}}'
				],
			]
		);
		//top line color
		$this->add_control(
			'bwdwi_count_down_num_flip_top_line_color',
			[
				'label' => esc_html__( 'Top Line Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-inner' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num::before,
					{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-num::after,
					{{WRAPPER}} .bwdwi-count-down-item .bwdwi-num-inner::before,
					{{WRAPPER}} .bwdwi-count-down-item .bwdwi-num-inner::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		//bottom line color
		$this->add_control(
			'bwdwi_count_down_num_flip_bottom_line_color',
			[
				'label' => esc_html__( 'Bottom Line Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-inner' => 'border-top-color: {{VALUE}}',
				],
			]
		);
		//unit width
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_width',
			[
				'label' => esc_html__( 'Width', 'bwdwi-count-down'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 70,
						'max' => 150,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],

				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-common .bwdwi-count-down-item' => 'flex-basis: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit height
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_height',
			[
				'label' => esc_html__( 'Height', 'bwdwi-count-down'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 50,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-common .bwdwi-height-control' => 'height: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdwi_count_down_choose' => ['style1', 'style2'],
				],
			]
		);
		//padding
		$this->add_responsive_control(
			'bwdwi_count_down_num_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdwi-count-down'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-common .bwdwi-count-down-item .bwdwi-count-down-num,
					{{WRAPPER}} .bwdwi-count-down-common .bwdwi-item-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		// margin
		$this->add_responsive_control(
			'bwdwi_count_down_item_margin',
			[
				'label' => esc_html__( 'Margin', 'bwdwi-count-down'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-common .bwdwi-count-down-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit bg shape color
		$this->add_control(
			'bwdwi_count_down_num_bg_shape_colors',
			[
				'label' => esc_html__( 'Unit BG Shape Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27' ],
				],
			],
		);
		//unit shape 1
		$this->add_control(
			'bwdwi_count_down_num_bg_shape1',
			[
				'label' => esc_html__( 'Shape One Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-bg-shape::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit shape 2
		$this->add_control(
			'bwdwi_count_down_num_bg_shape2',
			[
				'label' => esc_html__( 'Shape Two Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-num-bg-shape::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdwi_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit title styles
		$this->add_control(
			'bwdwi_count_down_unit_title_styles',
			[
				'label' => esc_html__( 'Unit Title', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//title typo  
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdwi_count_down_title_typography',
				'selector' => '{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-title',
			]
		);
		// title text color
		$this->add_control(
			'bwdwi_count_down_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-title' => 'color: {{VALUE}}',
				],
			]
		);
		// title bg color
		$this->add_control(
			'bwdwi_count_down_title_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwdwi-count-down' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdwi-count-down-num-common::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-count-down-item-common' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdwi-count-down-item .bwdwi-count-down-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
		$cd_style = $settings['bwdwi_count_down_choose'];
		
		if ( ! empty( $settings['bwdwi_webinar_info_bg_image']['url'] ) ) {
			$bgimg= $settings['bwdwi_webinar_info_bg_image']['url'];
		}

		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra']['url'] ) ) {
			$img= $settings['bwdwi_webinar_info_content_image_extra']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra_two']['url'] ) ) {
			$imgTwo= $settings['bwdwi_webinar_info_content_image_extra_two']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_info_content_image_extra_three']['url'] ) ) {
			$imgThree= $settings['bwdwi_webinar_info_content_image_extra_three']['url'];
		}
		if ( ! empty( $settings['bwdwi_webinar_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdwi_webinar_btn_link', $settings['bwdwi_webinar_btn_link'] );
		}

		//count down area start
		$time_zone = $settings['bwdwi_webinar_info_time_zone'];

		$unit_dir_switch = $settings['bwdwi_count_down_time_unit_direction'];
		$provided_date = strtotime( $settings['bwdwi_expired_date']);

		$day_unit_title = $settings['bwdwi_count_down_day_title'];
		$hour_unit_title = $settings['bwdwi_count_down_hour_title'];
		$min_unit_title = $settings['bwdwi_count_down_min_title'];
		$sec_unit_title = $settings['bwdwi_count_down_sec_title'];
	
		//expired event
		$ex_show_msg = $settings['bwdwi_count_down_after_expired_msg'];
		

		if('redirect' === $settings['bwdwi_count_down_after_expired']){
			$ex_show_url = $settings['bwdwi_count_down_after_expired_url']['url'];
		}
		
		//store value what will happen after date expired 
		$after_ex_events = $settings['bwdwi_count_down_after_expired'];
		if($after_ex_events){
			foreach($after_ex_events as $after_ex_event_item){
				if($after_ex_event_item === 'hide'){
					$af_ex_event = 'hide';
				}else if($after_ex_event_item === 'show-message'){
					$af_ex_event = 'message';
				}else if($after_ex_event_item === 'redirect'){
					$af_ex_event = 'redirect';
				}
			}
		}

		//unit direction check
		if('yes' === $unit_dir_switch){
			$unit_dir = 'bwdwi-unit-flip-rev';
		}else{
			$unit_dir = 'bwdwi-unit-flip-row';
		}

		//count down area end


	if ('style1' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-1 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>



								</div>
							</div>
							<div class="bwdwi-webinar-info">
								<?php
									include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
								?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style2' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-2 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
								<?php
									include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
								?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style3' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-3 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style4' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-4 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-img-content">
								<div class="bwdwi-name">
								<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
								</div>
								<div class="bwdwi-degi">
								<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style5' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-5 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
									<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style6' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-6 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style7' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-7 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style8' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-8 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-hedi-decs">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
                    	</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style9' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-9 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style10' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-10 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style11' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-11 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style12' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-12 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bgbwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
								<div class="bwdwi-date-time">
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
									</div>
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style13' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-13 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/pbwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style14' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-14 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style15' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-15 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style16' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-16 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style17' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-17 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
								<div class="bwdwi-date-time">
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
									</div>
									<div class="bwdwi-date">
										<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style18' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-18 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-heading">
								<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
							</div>
							<div class="bwdwi-decs">
								<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
							</div>
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item bwdwi-sec-img">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style19' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-19 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style20' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-20 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgTwo)){
										echo $imgTwo;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_two']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_two']);?>
									</div>
								</div>
							</div>
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($imgThree)){
										echo $imgThree;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title_three']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi_three']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}elseif ('style21' === $settings['bwdwi_webinar_info_style']) { 
	?>
	<div class="bwdwi-webinar-item-21 bwdwi-webi-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="bwdwi-webinar-box">
						<div class="bwdwi-bg-img">
							<img src="
								<?php 
								if(!empty($bgimg)){
									echo $bgimg;
								}else{
									echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
								}
								?>
							">
						</div>
						<div class="bwdwi-heading">
							<?php echo esc_html($settings['bwdwi_webinar_info_title']);?>
						</div>
						<div class="bwdwi-decs">
							<?php echo esc_html($settings['bwdwi_webinar_info_description']);?>
						</div>
						<div class="bwdwi-img-box">
							<div class="bwdwi-single-img">
								<div class="bwdwi-img-item">
									<img src="
									<?php 
									if(!empty($img)){
										echo $img;
									}else{
										echo plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__);
									}
									?>
									">
								</div>
								<div class="bwdwi-img-content">
									<div class="bwdwi-name">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_title']);?>
									</div>
									<div class="bwdwi-degi">
										<?php echo esc_html($settings['bwdwi_webinar_info_rep_degi']);?>
									</div>
								</div>
							</div>
						</div>
						<div class="bwdwi-content-box">
							<div class="bwdwi-date-time">
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_date_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_date']);?>
								</div>
								<div class="bwdwi-date">
									<i class="<?php echo $settings['bwdwi_webinar_time_icon']['value'];?>"></i><?php echo esc_html($settings['bwdwi_webinar_info_time']);?> 									<div class="bwdwi-time-zone">
										<?php echo esc_html__($time_zone); ?>
									</div>
								</div>
							</div>
							<div class="bwdwi-webinar-info">
							<?php
								include( __DIR__ . '/cd-templates/style'. $cd_style .'.php' );
							?>
							</div>
							<div class="bwdwi-button">
								<a href="<?php echo  esc_url( $settings['bwdwi_webinar_btn_link']['url'] );?>"><?php echo esc_html($settings['bwdwi_webinar_info_btn_title']);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
		

    }
}

