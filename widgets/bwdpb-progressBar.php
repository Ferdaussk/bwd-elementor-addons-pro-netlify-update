<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDPBProgressBarWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDPBProgressBar', BWDEB_ROOT_AUTHOR_PRO );
	}
	public function get_title() {
		return esc_html__( 'ProgressBar', BWDEB_ROOT_AUTHOR_PRO );
	}
	public function get_icon() {
		return 'icon-progressbar bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	public function get_keywords() {
		return [ 'progressBar', 'bwd bwdpb-progressBar', 'progress', 'bar' ];
	}
	protected function register_controls() {
     // ProgressBar layout control section start
		$this->start_controls_section(
			'bwdpb_ProgressBar_layout_section',
			[
				'label' => esc_html__( 'ProgressBar Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdpb_ProgressBar_choose',
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
		// ProgressBar content section start
		$this->start_controls_section(
			'bwdpb_PB_content_section',
			[
				'label' => esc_html__( 'Progress Bar', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//percentage hide show status
		$this->add_control(
			'bwdpb_PB_per_status',
			[
				'label' => esc_html__( 'Display Percentage', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'after'
			]
		);
		$repeater = new \Elementor\Repeater();
		// pb present
		$repeater->add_control(
			'bwdpb_pb_width',
			[
				'label' => esc_html__( 'Percentage', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 75,
				'separator' => 'after'
			]
		);
		//title
		$repeater->add_control(
			'bwdpb_PB_title', [
				'label' => esc_html__( 'Title', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'HTML5 -' , BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// pb title color
		$repeater->add_control(
			'bwdpb_PB_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-title,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-value' => 'color: {{VALUE}}',
				]
			]
		);
		// title typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpb_PB_typo',
				'selector' => '{{WRAPPER}} {{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-title',

			]
		);

		$repeater->add_control(
			'bwdpb_PB_style',
			[
				'label' => esc_html__( 'Progress Bar Styles', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// pb color
		$repeater->add_control(
			'bwdpb_PB_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-bar' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_pb-color' => 'color: {{VALUE}}'
				],
			]
		);
		// pb bg color
		$repeater->add_control(
			'bwdpb_PB_bg_color',
			[
				'label' => esc_html__( 'BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress' => 'background-color: {{VALUE}}',
				],
			]
		);
		// height 
		$repeater->add_control(
			'bwdpb_PB_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//border radius
		$repeater->add_control(
			'bwdpb_PB_border_radius',
			[
				'label' => esc_html__( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-bar' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//pb gap
		$repeater->add_control(
			'bwdpb_PB_gap',
			[
				'label' => esc_html__( 'ProgressBar Gap', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpb-mb-30,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdpb-mb-50' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				]
			]
		);

		//progress indicator
		$repeater->add_control(
			'bwdpb_PB_indicator',
			[
				'label' => esc_html__( 'Progress Indicator', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//pb indicator size
		$repeater->add_control(
			'bwdpb_PB_indicator_size',
			[
				'label' => esc_html__( 'Indicator Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'selectors' => [
				'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
				{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
				{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				
				]
			]
		);
		//pb indicator border color
		$repeater->add_control(
			'bwdpb_PB_indicator_border_color',
			[
				'label' => esc_html__( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'border-color: {{VALUE}};',
				]
			]
		);
		//pb indicator bg color
		$repeater->add_control(
			'bwdpb_PB_indicator_bg_color',
			[
				'label' => esc_html__( 'BG Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'background-color: {{VALUE}};',
				]
			]
		);
		//fetch repeater
		$this->add_control(
			'bwdpb_PB_item_list',
			[
				'label' => esc_html__( 'Progress Bar Item', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdpb_PB_title' => esc_html__( 'HTML', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'CSS', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'JS', BWDEB_ROOT_AUTHOR_PRO ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'PHP', BWDEB_ROOT_AUTHOR_PRO ),
					],
				],
				'title_field' => '{{{ bwdpb_PB_title }}}',
			]
		);
		$this->end_controls_section();
		// style section 
	}
	protected function render() {
		$settings =$this->get_settings();
		$chosen_pb = $settings['bwdpb_ProgressBar_choose']; 
		$pb_list = $settings['bwdpb_PB_item_list'];
		$pb_per_st = $settings['bwdpb_PB_per_status'];

		if('yes' === $pb_per_st){
			$per_st = 'bwd_pr_show';
		}else{
			$per_st = 'bwd_pr_hide';
		}

		//================== ProgressBar rendering start here=====================
		if('style1' === $chosen_pb){
				?>
	  		<div class="bwd_progress_Design_1 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
							?>
						<div class="bwd_progress_box">
							<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
								<div class="bwd_progress-title">
									<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
									<span class="bwd_pb_val_con">
										<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr__($per_st)?>">
										%
									</span>
								</div>
								<div class="bwd-progress">
								<div class="bwd_progress-bar bwdpb-indicator-after"></div>
								</div>
							</div>
						</div>
							<?php
					}
				}
					?>
      		</div>
				<?php
		}else if('style2' === $chosen_pb){
			?>
			<div class="bwd_progress_Design_2 bwd_pb_common">
			<?php
			if($pb_list){
				foreach($pb_list as $item){
			?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
                	<div class="bwd_progress-title">
					<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
					</div>
                	<div class="bwd_progress-outer">
						<div class="bwd-progress">
							<div class="bwd_progress-bar bwd_progress-bar-striped"></div>
								<div class="bwd_progress-value">
									<span class="bwd_pb_val_con">
										<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr__($per_st)?>">
										%
									</span>
								</div>
							</div>
						</div>
					</div>
            	</div>
				<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style3' === $chosen_pb){
				?>
			<div class="bwd_progress_Design_3 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              	<div class="bwd_progress_box">
			  		<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
						<div class="bwd_progress-title">
							<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
						</div>
						<div class="bwd-progress">
							<div class="bwd_progress-bar">
								<div class="bwd_progress-value bwdpb-indicator-size">
									<span class="bwd_pb_val_con">
										<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr__($per_st)?>">
										%
									</span>
								</div>
							</div>
						</div>
					</div>
      			</div>
				  <?php
					}
				}
					?>
			</div>
				<?php
		}else if('style4' === $chosen_pb){
				?>
   			<div class="bwd_progress_Design_4 bwd_pb_common">
			   		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwdpb-indicator-after"></div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
				<?php
		}else if('style5' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_5 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class=" bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwd_progress-bar-striped bwdpb-indicator-after">
						<div class="bwd_progress-value">
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  		<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style6' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_6 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwdpb-indicator-after"></div>
					</div>
				</div>
              </div>
			  		<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style7' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_7 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>  
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwd_progress-bar-striped active"></div>
					</div>
				</div>
              </div>
			  		<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style8' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_8 bwd_pb_common">
			 	 <?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class=" bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress ">
						<div class="bwd_progress-bar">
							<div class="bwd_progress-value bwdpb-indicator-size">
								<span class="bwd_pb_val_con">
									<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
								</span>
								<span class="<?php echo esc_attr__($per_st)?>">
									%
								</span>
							</div>
						</div>
					</div>
				</div>
              </div>
			  		<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style9' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_9 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
				<div class="bwd_progress_box">
					<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
						<div class="bwd_progress-title">
							<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
						</div>
						<div class="bwd-progress">
							<div class="bwd_progress-bar bwd_pb-color">
								<div class="bwd_progress-value">
									<span class="bwd_pb_val_con">
										<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr__($per_st)?>">
										%
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style10' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_10 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>

				<div class="bwdpb-mb-30 bwd-progress elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
						<div class="bwd_progress-title">
							<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
						</div>
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
						<div class="bwd_progress-bar"></div>
				</div>
			  		<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style11' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_11 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwd_pb-color">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
              	</div>
			  </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style12' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_12 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar">
							<div class="bwd_progress-value bwdpb-indicator-size">								
								<span class="bwd_pb_val_con">
									<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
								</span>
								<span class="<?php echo esc_attr__($per_st)?>">
									%
								</span>
							</div>
						</div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style13' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_13 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              	<div class="bwdpb-mb-50 bwd-progress elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd_progress-bar bwdpb-indicator-after">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
              	</div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style14' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_14 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 								
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwdpb-indicator-before bwdpb-indicator-after"></div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style15' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_15 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>								
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwdpb-indicator-before bwdpb-indicator-after"></div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style16' === $chosen_pb){
			?>
		  <div class="bwd_progress_Design_16 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
			<div class="bwd_progress_box">
				<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>								
						<span class="bwd_pb_val_con">
							<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
						</span>
						<span class="<?php echo esc_attr__($per_st)?>">
							%
						</span>
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwdpb-indicator-after"></div>
					</div>
				</div>
			</div>
					<?php
					}
				}
					?>
		  </div>
			<?php
		}else if('style17' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_17 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwdpb-mb-30 bwd-progress elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style18' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_18 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              	<div class="bwd-progress bwdpb-mb-50 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-title">
							<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
						</div>
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
              	</div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style19' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_19 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              	<div class=" bwdpb-mb-30 bwd-progress elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-title">
							<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
						</div>
						<div class="bwd_progress-value bwdpb-indicator-size">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
              	</div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style20' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_20 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style21' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_21 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwdpb-indicator-after">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style22' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_22 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwdpb-indicator-after">
						<div class="bwd_progress-value ">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style23' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_23 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?>
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style24' === $chosen_pb){
			?>
	  		<div class="bwd_progress_Design_24 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style25' === $chosen_pb){
				?>
      		<div class="bwd_progress_Design_25 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
				<?php
		}else if('style26' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_26 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar bwdpb-indicator-after">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
					?>
      		</div>
			<?php
		}else if('style27' === $chosen_pb){
			?>
	  		<div class="bwd_progress_Design_27 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
				<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwdpb-indicator-after">
							<div class="bwd_progress-value">								
								<span class="bwd_pb_val_con">
									<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
								</span>
								<span class="<?php echo esc_attr__($per_st)?>">
									%
								</span>
							</div>
						</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
				?>
      		</div>
			<?php
		}else if('style28' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_28 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
				?>
      		</div>
			<?php
		}else if('style29' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_29 bwd_pb_common">
			  		<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar" >
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
				?>
      		</div>
			<?php
		}else if('style30' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_30 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd_progress-title">
						<?php echo esc_html__( $item['bwdpb_PB_title'] )?> 
					</div>
					<div class="bwd-progress">
					<div class="bwd_progress-bar">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
					</div>
					</div>
				</div>
              </div>
			  <?php
					}
				}
				?>
      		</div>
			<?php
		}else if('style31' === $chosen_pb){
			?>
      		<div class="bwd_progress_Design_31 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
					?>
              <div class="bwd_progress-outer">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr__( $item['_id'] )?>">
					<div class="bwd-progress">
						<div class="bwd_progress-bar bwd_progress-bar-striped active">
						<div class="bwd_progress-value">								
							<span class="bwd_pb_val_con">
								<?php echo esc_html__( $item['bwdpb_pb_width'] )?>
							</span>
							<span class="<?php echo esc_attr__($per_st)?>">
								%
							</span>
						</div>
						</div>
					</div>
				</div>
              </div>
			  	<?php
					}
				}
				?>
      		</div>
			<?php
		}
	}
}


