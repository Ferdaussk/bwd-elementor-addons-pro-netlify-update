<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdcdCountDownWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDCDCountdown', BWDEB_ROOT_AUTHOR_PRO );
	}
	public function get_title() {
		return esc_html__( 'Count Down', BWDEB_ROOT_AUTHOR_PRO );
	}
	public function get_icon() {
		return 'eicon-countdown bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}
	
	public function get_keywords() {
		return [ 'count-down', 'bwd count-down', 'count', 'number' ];
	}
	protected function register_controls() {
     // countdown layout control section start
		$this->start_controls_section(
			'bwdcd_count_down_layout_section',
			[
				'label' => esc_html__( 'Count Down Layout', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcd_count_down_choose',
			[
				'label' => esc_html__( 'Choose Styles', BWDEB_ROOT_AUTHOR_PRO ),
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
				],
			]
		);
		$this->end_controls_section();
		// count down content section ========================
		$this->start_controls_section(
			'bwdcd_count_down_content_section',
			[
				'label' => esc_html__( 'Content', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// expired date
		$this->add_control(
			'bwdcd_expired_date',
			[
				'label' => esc_html__( 'Expired Date', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default'=> esc_html__('2023-01-01 11:15'),
			]
		);

		//time unit reverse
		$this->add_control(
			'bwdcd_count_down_time_unit_direction',
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
			'bwdcd_count_down_unit_title_contents',
			[
				'label' => esc_html__( 'Unit Titles', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdcd_count_down_day_title',
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
			'bwdcd_count_down_hour_title',
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
			'bwdcd_count_down_min_title',
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
			'bwdcd_count_down_sec_title',
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
			'bwdcd_count_down_after_expired',
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
			'bwdcd_count_down_after_expired_url',
			[
				'label' => esc_html__( 'Redirect Url', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcd_count_down_after_expired' => 'redirect',
				],
			]
		);
		//Message control
		$this->add_control(
			'bwdcd_count_down_after_expired_msg',
			[
				'label' => esc_html__( 'Message', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcd_count_down_after_expired' => 'show-message',
				],
			]
		);
		$this->end_controls_section();
		// count down style section ========================
		$this->start_controls_section(
			'bwdcd_count_down_style_section',
			[
				'label' => esc_html__( 'Style', BWDEB_ROOT_AUTHOR_PRO),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//unit controls
		$this->add_control(
			'bwdcd_count_down_unit_style',
			[
				'label' => esc_html__( 'Time Units', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// unit typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcd_count_down_num_typography',
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num',
			]
		);
		// unit text color
		$this->add_control(
			'bwdcd_count_down_num_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-color-common' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-shape-common' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-shape-common::before,
					{{WRAPPER}} .bwdcd-shape-common::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		// unit bg color
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcd-count-down-num-bg',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num',
			]
		);
		// unit border color
		$this->add_control(
			'bwdcd_count_down_num_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style30'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num' => 'border-color: {{VALUE}}'
				],
			]
		);
		//top line color
		$this->add_control(
			'bwdcd_count_down_num_flip_top_line_color',
			[
				'label' => esc_html__( 'Top Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-inner' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num::before,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num::after,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-num-inner::before,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-num-inner::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		//bottom line color
		$this->add_control(
			'bwdcd_count_down_num_flip_bottom_line_color',
			[
				'label' => esc_html__( 'Bottom Line Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-inner' => 'border-top-color: {{VALUE}}',
				],
			]
		);
		//unit width
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_width',
			[
				'label' => esc_html__( 'Width', BWDEB_ROOT_AUTHOR_PRO),
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
				'default' => [
					'unit' => 'px',
					'size' => 110,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item' => 'flex-basis: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit height
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO),
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
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-height-control' => 'height: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
			]
		);
		//padding
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_padding',
			[
				'label' => esc_html__( 'Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item .bwdcd-count-down-num,
					{{WRAPPER}} .bwdcd-count-down-common .bwdcd-item-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		// margin
		$this->add_responsive_control(
			'bwdcd_count_down_item_margin',
			[
				'label' => esc_html__( 'Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit bg shape color
		$this->add_control(
			'bwdcd_count_down_num_bg_shape_colors',
			[
				'label' => esc_html__( 'Unit BG Shape Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27' ],
				],
			],
		);
		//unit shape 1
		$this->add_control(
			'bwdcd_count_down_num_bg_shape1',
			[
				'label' => esc_html__( 'Shape One Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-bg-shape::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit shape 2
		$this->add_control(
			'bwdcd_count_down_num_bg_shape2',
			[
				'label' => esc_html__( 'Shape Two Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-bg-shape::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit title styles
		$this->add_control(
			'bwdcd_count_down_unit_title_styles',
			[
				'label' => esc_html__( 'Unit Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//title typo  
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcd_count_down_title_typography',
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title',
			]
		);
		// title text color
		$this->add_control(
			'bwdcd_count_down_title_color',
			[
				'label' => esc_html__( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title' => 'color: {{VALUE}}',
				],
			]
		);
		// title bg color
		$this->add_control(
			'bwdcd_count_down_title_bg_color',
			[
				'label' => esc_html__( 'BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-num-common::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item-common' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings =$this->get_settings();
		$unit_dir_switch = $settings['bwdcd_count_down_time_unit_direction'];
		$provided_date = strtotime( $settings['bwdcd_expired_date']);
		$day_unit_title = $settings['bwdcd_count_down_day_title'];
		$hour_unit_title = $settings['bwdcd_count_down_hour_title'];
		$min_unit_title = $settings['bwdcd_count_down_min_title'];
		$sec_unit_title = $settings['bwdcd_count_down_sec_title'];
		//expired event
		$ex_show_msg = $settings['bwdcd_count_down_after_expired_msg'];
		$ex_show_url = $settings['bwdcd_count_down_after_expired_url']['url'];

		//store value what will happen after date expired 
		$after_ex_events = $settings['bwdcd_count_down_after_expired'];
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
			$unit_dir = 'bwdcd-unit-flip-rev';
		}else{
			$unit_dir = 'bwdcd-unit-flip-row';
		}
		//================== count down rendering start here=====================
		if('style1' === $settings['bwdcd_count_down_choose']){
				?>
			<div class="bwdcd-count-down-1 bwdcd-count-down-common <?php echo esc_attr__($unit_dir)?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng  bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>

			</div>
				<?php
		}else if('style2' === $settings['bwdcd_count_down_choose']){
				?>
			<!-- count down 2 start -->
			<div class="bwdcd-count-down-2 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
	
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>

				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner">50</div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner">50</div>
						<div class="bwdcd-num-after bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>

			</div>
			<!-- count down 2 end -->
			<!-- ============================================= -->
				<?php
		}else if('style3' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 3 start -->
			<div class="bwdcd-count-down-3 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">
						<div class="bwdcd-top-num bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">
						<div class="bwdcd-top-num bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">
						<div class="bwdcd-top-num bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">
						<div class="bwdcd-top-num bwdcd-num-inner">50</div>
						<div class="bwdcd-bottom-num bwdcd-num-inner">50</div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>

			<!-- count down 3 end -->
			<!-- ============================================= -->
			<?php
		}else if('style4' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-4 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<?php
		}else if('style5' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 5 start -->
				<div class="bwdcd-count-down-5 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<!-- count down 5 end -->
			<!-- ============================================= -->
			<?php
		}else if('style6' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 6 start -->
				<div class="bwdcd-count-down-6 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<!-- count down 6 end -->
			<!-- ============================================= -->
			<?php
		}else if('style7' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 7 start -->
				<div class="bwdcd-count-down-7 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper bwdcd-wrapper-common">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<!-- count down 7 end -->
			<!-- ============================================= -->
			<?php
		}else if('style8' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 8 start -->
				<div class="bwdcd-count-down-8 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<?php
		}else if('style9' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-9 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-count-down-num-common bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<?php
		}else if('style10' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-10 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<?php
		}else if('style11' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-11 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<!-- count down 11 end -->
			<!-- ============================================= -->
			<?php
		}else if('style12' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 12 start -->
				<div class="bwdcd-count-down-12 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-min">55</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item">
							<div class="bwdcd-count-down-num bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<!-- count down 12 end -->
			<!-- ============================================= -->
			<?php
		}else if('style13' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 13 start -->
				<div class="bwdcd-count-down-13 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-day">100</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-min">55</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<?php
		}else if('style14' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-14 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-wrapper bwdcd-count-down-color-common">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-day">100</div>
							<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-hour">20</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($hour_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-min">55</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($min_unit_title)?></div>
						</div>

						<div class="bwdcd-count-down-item bwdcd-count-down-item-common bwdcd-wrapper-common">
							<div class="bwdcd-count-down-num bwdcd-shape-common bwdcd-sec">22</div>
							<div class="bwdcd-count-down-title "><?php echo esc_html__($sec_unit_title)?></div>
						</div>
					</div>
				</div>
			<!-- count down 14 end -->
			<!-- ============================================= -->
			<?php
		}else if('style15' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 15 start -->
				<div class="bwdcd-count-down-15 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<div class="bwdcd-count-down-item bwdcd-count-down-color-common bwdcd-item-padding">
						<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
						<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item bwdcd-count-down-color-common bwdcd-item-padding">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item bwdcd-count-down-color-common bwdcd-item-padding">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item bwdcd-count-down-color-common bwdcd-item-padding">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<!-- count down 15 end -->
			<!-- ============================================= -->
			<?php
		}else if('style16' === $settings['bwdcd_count_down_choose']){
			?>
			<!-- count down 16 start -->
				<div class="bwdcd-count-down-16 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<!-- count down 16 end -->
			<!-- ============================================= -->
			<?php
		}else if('style17' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-17 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<?php
		}else if('style18' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-18 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<?php
		}else if('style19' === $settings['bwdcd_count_down_choose']){
			?>
				<div class="bwdcd-count-down-19 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
					<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
					<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-day">100</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-hour">20</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-min">55</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
					</div>

					<div class="bwdcd-count-down-item">
						<div class="bwdcd-count-down-num bwdcd-sec">22</div>
						<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
					</div>
				</div>
			<?php
		}else if('style20' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-20 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
				value="<?php echo esc_attr__($af_ex_event) ;?>"
				/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style21' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-21 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style22' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-22 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style23' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-23 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style24' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-24 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style25' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-25 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-day">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-hour">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-min">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-sec">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style26' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-26 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style27' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-27 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style28' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-28 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style29' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-29 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style30' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-30 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}else if('style31' === $settings['bwdcd_count_down_choose']){
			?>
			<div class="bwdcd-count-down-31 bwdcd-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-day bwdcd-shape-common">100</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-hour bwdcd-shape-common">20</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-min bwdcd-shape-common">55</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
				<div class="bwdcd-count-down-num bwdcd-num-bg-shape bwdcd-sec bwdcd-shape-common">22</div>
				<div class="bwdcd-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>
			<?php
		}
	}
}
