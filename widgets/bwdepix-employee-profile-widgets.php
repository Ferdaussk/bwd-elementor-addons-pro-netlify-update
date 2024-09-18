<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function bwdepix_get_allowed_html_tags($level = 'basic') {
	$allowed_html = [
		'b'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'i'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'u'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		's'      => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'br'     => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'em'     => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'del'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'ins'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'sub'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'sup'    => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'code'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'mark'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'small'  => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'strike' => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'abbr'   => [
			'title' => [],
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'span'   => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
		'strong' => [
			'class' => [],
			'id'    => [],
			'style' => [],
		],
	];

	if ( 'intermediate' === $level || 'all' === $level ) {
		$tags = [
			'a'       => [
				'href'  => [],
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'q'       => [
				'cite'  => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'img'     => [
				'src'    => [],
				'alt'    => [],
				'height' => [],
				'width'  => [],
				'class'  => [],
				'id'     => [],
				'style'  => [],
			],
			'dfn'     => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'time'    => [
				'datetime' => [],
				'class'    => [],
				'id'       => [],
				'style'    => [],
			],
			'cite'    => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'acronym' => [
				'title' => [],
				'class' => [],
				'id'    => [],
				'style' => [],
			],
			'hr'      => [
				'class' => [],
				'id'    => [],
				'style' => [],
			],
		];

		$allowed_html = array_merge($allowed_html, $tags);
	}

	return $allowed_html;
}
function bwdepix_kses_intermediate($string = '') {
	return wp_kses($string, bwdepix_get_allowed_html_tags('intermediate'));
}
function bwdepix_kses_basic($string = '') {
	return wp_kses($string, bwdepix_get_allowed_html_tags('basic'));
}
function bwdepix_escape_tags($tag, $default = 'span', $extra = []) {

	$supports = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div', 'span', 'p'];

	$supports = array_merge($supports, $extra);

	if (!in_array($tag, $supports, true)) {
		return $default;
	}

	return $tag;
}
function bwdepix_get_allowed_html_desc($level = 'basic') {
	if (!in_array($level, ['basic', 'intermediate'])) {
		$level = 'basic';
	}

	$tags_str = '<' . implode('>,<', array_keys(bwdepix_get_allowed_html_tags($level))) . '>';
	return sprintf(__('This input field has support for the following HTML tags: %1$s', 'happy-elementor-addons'), '<code>' . esc_html($tags_str) . '</code>');
}
class Probwdepix_EmployeeProfile_widgets extends Widget_Base {

	public function render_icon_button( $args = [] ) {
		$args = wp_parse_args( $args, [
			'old_icon'   => 'button_icon',
			'icon_pos'   => 'button_icon_position',
			'new_icon'   => 'button_selected_icon',
			'text'       => 'button_text',
			'link'       => 'button_link',
			'class'      => 'bwdepix-btn bwdepix-btn--link',
			'text_class' => 'bwdepix-btn-text',
		] );

		$settings = $this->get_settings_for_display();
		$button_text = isset( $settings[ $args['text'] ] ) ? $settings[ $args['text'] ] : '';
		$has_new_icon = ( ! empty( $settings[ $args['new_icon'] ] ) && ! empty( $settings[ $args['new_icon'] ]['value'] ) ) ? true : false;
		$has_old_icon = ! empty( $settings[ $args['old_icon'] ] ) ? true : false;

		// Return as early as possible
		// Do not process anything if there is no icon and text
		if ( empty( $button_text ) && ! $has_new_icon && ! $has_old_icon ) {
			return;
		}

		$this->add_inline_editing_attributes( $args['text'], 'none' );
        $this->add_render_attribute( $args['text'], 'class', $args['text_class'] );

        $this->add_render_attribute( 'button', 'class', $args['class'] );
		
		if( ! empty($settings[ $args['link'] ]) ){
			$this->add_link_attributes( 'button', $settings[ $args['link'] ] );
		}

		if ( $button_text && ( empty( $has_new_icon ) && empty( $has_old_icon ) ) ) :
			printf( '<a %1$s>%2$s</a>',
				$this->get_render_attribute_string( 'button' ),
				sprintf( '<span %1$s>%2$s</span>', $this->get_render_attribute_string( $args['text'] ), esc_html( $button_text ) )
			);
		elseif ( empty( $button_text ) && ( ! empty( $has_old_icon ) || ! empty( $has_new_icon ) ) ) : ?>
			<a <?php $this->print_render_attribute_string( 'button' ); ?>><?php bwdepix_render_button_icon( $settings, $args['old_icon'], $args['new_icon'] ); ?></a>
		<?php elseif ( $button_text && ( ! empty( $has_old_icon ) || ! empty( $has_new_icon ) ) ) :
			if ( $settings[ $args['icon_pos'] ] === 'before' ) :
				$this->add_render_attribute( 'button', 'class', 'bwdepix-btn--icon-before' );
				$button_text = sprintf( '<span %1$s>%2$s</span>', $this->get_render_attribute_string( $args['text'] ), esc_html( $button_text ) );
				?>
				<a <?php $this->print_render_attribute_string( 'button' ); ?>><?php bwdepix_render_button_icon( $settings, $args['old_icon'], $args['new_icon'], ['class' => 'bwdepix-btn-icon'] ); ?> <?php echo $button_text; ?></a>
				<?php
			else :
				$this->add_render_attribute( 'button', 'class', 'bwdepix-btn--icon-after' );
				$button_text = sprintf( '<span %1$s>%2$s</span>', $this->get_render_attribute_string( $args['text'] ), esc_html( $button_text ) );
				?>
				<a <?php $this->print_render_attribute_string( 'button' ); ?>><?php echo $button_text; ?> <?php bwdepix_render_button_icon( $settings, $args['old_icon'], $args['new_icon'], ['class' => 'bwdepix-btn-icon'] ); ?></a>
				<?php
			endif;
		endif;
	}

    public function get_name() {
		return esc_html__( 'bwdepix-employe-profile-identity', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title() {
		return esc_html__( 'Employee Profile Identity', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon() {
		return 'bwdepix-EmployeeProfile-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}

	protected static function get_profile_names() {
		return [
			'500px'          => __( '500px', BWDEB_ROOT_AUTHOR_PRO ),
			'apple'          => __( 'Apple', BWDEB_ROOT_AUTHOR_PRO ),
			'behance'        => __( 'Behance', BWDEB_ROOT_AUTHOR_PRO ),
			'bitbucket'      => __( 'BitBucket', BWDEB_ROOT_AUTHOR_PRO ),
			'codepen'        => __( 'CodePen', BWDEB_ROOT_AUTHOR_PRO ),
			'delicious'      => __( 'Delicious', BWDEB_ROOT_AUTHOR_PRO ),
			'deviantart'     => __( 'DeviantArt', BWDEB_ROOT_AUTHOR_PRO ),
			'digg'           => __( 'Digg', BWDEB_ROOT_AUTHOR_PRO ),
			'dribbble'       => __( 'Dribbble', BWDEB_ROOT_AUTHOR_PRO ),
			'email'          => __( 'Email', BWDEB_ROOT_AUTHOR_PRO ),
			'phone'          => __( 'Phone', BWDEB_ROOT_AUTHOR_PRO ),
			'facebook'       => __( 'Facebook', BWDEB_ROOT_AUTHOR_PRO ),
			'flickr'         => __( 'Flicker', BWDEB_ROOT_AUTHOR_PRO ),
			'foursquare'     => __( 'FourSquare', BWDEB_ROOT_AUTHOR_PRO ),
			'github'         => __( 'Github', BWDEB_ROOT_AUTHOR_PRO ),
			'houzz'          => __( 'Houzz', BWDEB_ROOT_AUTHOR_PRO ),
			'instagram'      => __( 'Instagram', BWDEB_ROOT_AUTHOR_PRO ),
			'jsfiddle'       => __( 'JS Fiddle', BWDEB_ROOT_AUTHOR_PRO ),
			'linkedin'       => __( 'LinkedIn', BWDEB_ROOT_AUTHOR_PRO ),
			'medium'         => __( 'Medium', BWDEB_ROOT_AUTHOR_PRO ),
			'pinterest'      => __( 'Pinterest', BWDEB_ROOT_AUTHOR_PRO ),
			'product-hunt'   => __( 'Product Hunt', BWDEB_ROOT_AUTHOR_PRO ),
			'reddit'         => __( 'Reddit', BWDEB_ROOT_AUTHOR_PRO ),
			'slideshare'     => __( 'Slide Share', BWDEB_ROOT_AUTHOR_PRO ),
			'snapchat'       => __( 'Snapchat', BWDEB_ROOT_AUTHOR_PRO ),
			'soundcloud'     => __( 'SoundCloud', BWDEB_ROOT_AUTHOR_PRO ),
			'spotify'        => __( 'Spotify', BWDEB_ROOT_AUTHOR_PRO ),
			'stack-overflow' => __( 'StackOverflow', BWDEB_ROOT_AUTHOR_PRO ),
			'tripadvisor'    => __( 'TripAdvisor', BWDEB_ROOT_AUTHOR_PRO ),
			'tumblr'         => __( 'Tumblr', BWDEB_ROOT_AUTHOR_PRO ),
			'twitch'         => __( 'Twitch', BWDEB_ROOT_AUTHOR_PRO ),
			'twitter'        => __( 'Twitter', BWDEB_ROOT_AUTHOR_PRO ),
			'vimeo'          => __( 'Vimeo', BWDEB_ROOT_AUTHOR_PRO ),
			'vk'             => __( 'VK', BWDEB_ROOT_AUTHOR_PRO ),
			'website'        => __( 'Website', BWDEB_ROOT_AUTHOR_PRO ),
			'whatsapp'       => __( 'WhatsApp', BWDEB_ROOT_AUTHOR_PRO ),
			'wordpress'      => __( 'WordPress', BWDEB_ROOT_AUTHOR_PRO ),
			'xing'           => __( 'Xing', BWDEB_ROOT_AUTHOR_PRO ),
			'yelp'           => __( 'Yelp', BWDEB_ROOT_AUTHOR_PRO ),
			'youtube'        => __( 'YouTube', BWDEB_ROOT_AUTHOR_PRO ),
		];
	}

    protected function register_controls() {

		$this->__info_content_controls();
		$this->__social_content_controls();
		$this->__details_content_controls();
		$this->__lightbox_content_controls();

		$this->__photo_style_controls();
		$this->__body_content_style_controls();
		$this->__social_style_controls();
		$this->__details_style_controls();
		$this->__lightbox_style_controls();
	}

	protected function __info_content_controls() {

		$this->start_controls_section(
			'_section_info',
			[
				'label' => __( 'Information', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->start_controls_tabs( '_tabs_photo' );

		$this->start_controls_tab(
			'_tab_photo_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'image',
			[
				'label'      => __( 'Photo', BWDEB_ROOT_AUTHOR_PRO ),
				'show_label' => false,
				'type'       => \Elementor\Controls_Manager::MEDIA,
				'default'    => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic'    => [
					'active' => true,
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_photo_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'image2',
			[
				'label'      => __( 'Photo 2', BWDEB_ROOT_AUTHOR_PRO ),
				'show_label' => false,
				'type'       => \Elementor\Controls_Manager::MEDIA,
				'dynamic'    => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'extra_hover_cls',
			[
				'label'        => __( 'Extra class added', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::HIDDEN,
				'default'      => 'on',
				'prefix_class' => 'bwdepix-member-hover-image-',
				'condition'    => [
					'image2[url]!' => '',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name'      => 'thumbnail',
				'default'   => 'large',
				'separator' => 'none',
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => 'Happy Member Name',
				'placeholder' => __( 'Type Member Name', BWDEB_ROOT_AUTHOR_PRO ),
				'separator'   => 'before',
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'job_title',
			[
				'label'       => __( 'Job Title', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Happy Officer', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => __( 'Type Member Job Title', BWDEB_ROOT_AUTHOR_PRO ),
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bio',
			[
				'label'       => __( 'Short Bio', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => bwdepix_get_allowed_html_desc( 'intermediate' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Write something amazing about the happy member', BWDEB_ROOT_AUTHOR_PRO ),
				'rows'        => 5,
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'title_tag',
			[
				'label'     => __( 'Title HTML Tag', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::CHOOSE,
				'options'   => [
					'h1' => [
						'title' => __( 'H1', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h1',
					],
					'h2' => [
						'title' => __( 'H2', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => __( 'H3', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => __( 'H4', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => __( 'H5', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h5',
					],
					'h6' => [
						'title' => __( 'H6', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-editor-h6',
					],
				],
				'default'   => 'h2',
				'toggle'    => false,
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'     => __( 'Alignment', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::CHOOSE,
				'options'   => [
					'left'    => [
						'title' => __( 'Left', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-left',
					],
					'center'  => [
						'title' => __( 'Center', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-center',
					],
					'right'   => [
						'title' => __( 'Right', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-text-align-justify',
					],
				],
				'toggle'    => true,
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __social_content_controls() {

		$this->start_controls_section(
			'_section_social',
			[
				'label' => __( 'Social Profiles', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'name',
			[
				'label'          => __( 'Profile Name', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SELECT2,
				'label_block'    => true,
				'select2options' => [
					'allowClear' => false,
				],
				'options'        => self::get_profile_names(),
			]
		);

		$repeater->add_control(
			'link', [
				'label'         => __( 'Profile Link', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder'   => __( 'Add your profile link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'          => \Elementor\Controls_Manager::URL,
				'label_block'   => true,
				'autocomplete'  => false,
				'show_external' => false,
				'condition'     => [
					'name!' => ['email','phone'],
				],
				'dynamic'       => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'email', [
				'label'       => __( 'Email Address', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => __( 'Add your email address', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'input_type'  => 'email',
				'condition'   => [
					'name' => 'email',
				],
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'phone', [
				'label'       => __( 'Phone Number', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => __( 'Add your phone number', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'input_type'  => 'text',
				'condition'   => [
					'name' => 'phone',
				],
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'customize',
			[
				'label'          => __( 'Want To Customize?', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SWITCHER,
				'label_on'       => __( 'Yes', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'      => __( 'No', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value'   => 'yes',
				'style_transfer' => true,
			]
		);

		$repeater->start_controls_tabs(
			'_tab_icon_colors',
			[
				'condition' => ['customize' => 'yes'],
			]
		);
		$repeater->start_controls_tab(
			'_tab_icon_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'color',
			[
				'label'          => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::COLOR,
				'selectors'      => [
					'{{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}' => 'color: {{VALUE}}',
				],
				'condition'      => ['customize' => 'yes'],
				'style_transfer' => true,
			]
		);

		$repeater->add_control(
			'bg_color',
			[
				'label'          => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::COLOR,
				'selectors'      => [
					'{{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
				],
				'condition'      => ['customize' => 'yes'],
				'style_transfer' => true,
			]
		);

		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'_tab_icon_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$repeater->add_control(
			'hover_color',
			[
				'label'          => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::COLOR,
				'selectors'      => [
					'{{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:hover, {{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:focus' => 'color: {{VALUE}}',
				],
				'condition'      => ['customize' => 'yes'],
				'style_transfer' => true,
			]
		);

		$repeater->add_control(
			'hover_bg_color',
			[
				'label'          => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::COLOR,
				'selectors'      => [
					'{{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:hover, {{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:focus' => 'background-color: {{VALUE}}',
				],
				'condition'      => ['customize' => 'yes'],
				'style_transfer' => true,
			]
		);

		$repeater->add_control(
			'hover_border_color',
			[
				'label'          => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::COLOR,
				'selectors'      => [
					'{{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:hover, {{WRAPPER}} .bwdepix-member-links > {{CURRENT_ITEM}}:focus' => 'border-color: {{VALUE}}',
				],
				'condition'      => ['customize' => 'yes'],
				'style_transfer' => true,
			]
		);

		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();

		$this->add_control(
			'profiles',
			[
				'show_label'  => false,
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '<# print(name.slice(0,1).toUpperCase() + name.slice(1)) #>',
				'default'     => [
					[
						'link' => ['url' => 'https://facebook.com/'],
						'name' => 'facebook',
					],
					[
						'link' => ['url' => 'https://twitter.com/'],
						'name' => 'twitter',
					],
					[
						'link' => ['url' => 'https://linkedin.com/'],
						'name' => 'linkedin',
					],
				],
			]
		);

		$this->add_control(
			'show_profiles',
			[
				'label'          => __( 'Show Profiles', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SWITCHER,
				'label_on'       => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'      => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value'   => 'yes',
				'default'        => 'yes',
				'separator'      => 'before',
				'style_transfer' => true,
			]
		);

		$this->end_controls_section();
	}

	protected function __details_content_controls() {

		$this->start_controls_section(
			'_section_button',
			[
				'label' => __( 'Details Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'show_details_button',
			[
				'label'          => __( 'Show Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SWITCHER,
				'label_on'       => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'      => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value'   => 'yes',
				'default'        => '',
				'style_transfer' => true,
			]
		);

		$this->add_control(
			'show_lightbox',
			[
				'label'          => __( 'Show Lightbox', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SWITCHER,
				'label_on'       => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'      => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value'   => 'yes',
				'default'        => '',
				'style_transfer' => true,
				'condition'      => [
					'show_details_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_position',
			[
				'label'          => __( 'Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::SELECT,
				'default'        => 'after',
				'style_transfer' => true,
				'options'        => [
					'before' => __( 'Before Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
					'after'  => __( 'After Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'condition'      => [
					'show_details_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_text',
			[
				'label'       => __( 'Text', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Show Details', BWDEB_ROOT_AUTHOR_PRO ),
				'placeholder' => __( 'Type button text here', BWDEB_ROOT_AUTHOR_PRO ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'condition'   => [
					'show_details_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_link',
			[
				'label'       => __( 'Link', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => 'https://example.com',
				'dynamic'     => [
					'active' => true,
				],
				'default'     => [
					'url' => '#',
				],
				'condition'   => [
					'show_details_button' => 'yes',
					'show_lightbox!'      => 'yes',
				],
			]
		);

		$this->add_control(
			'button_icon',
			[
				'label'       => __( 'Icon', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::ICONS,
				'label_block' => false,
				'show_label'  => true,
				'skin'        => 'inline',
				'condition'   => [
					'show_details_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_icon_position',
			[
				'label'          => __( 'Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type'           => \Elementor\Controls_Manager::CHOOSE,
				'label_block'    => false,
				'options'        => [
					'before' => [
						'title' => __( 'Before', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-h-align-left',
					],
					'after'  => [
						'title' => __( 'After', BWDEB_ROOT_AUTHOR_PRO ),
						'icon'  => 'eicon-h-align-right',
					],
				],
				'default'        => 'after',
				'toggle'         => false,
				'style_transfer' => true,
				'condition'      => [
					'show_details_button' => 'yes',
					'button_icon[value]!' => '',
				],
			]
		);

		$this->add_control(
			'button_icon_spacing',
			[
				'label'     => __( 'Icon Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'default'   => [
					'size' => 10,
				],
				'condition' => [
					'show_details_button' => 'yes',
					'button_icon[value]!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn--icon-before .bwdepix-btn-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdepix-btn--icon-after .bwdepix-btn-icon' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __lightbox_content_controls() {

		$this->start_controls_section(
			'_section_lightbox',
			[
				'label'     => __( 'Lightbox', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'       => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'show_details_button' => 'yes',
					'show_lightbox'       => 'yes',
				],
			]
		);

		$this->add_control(
			'saved_template_list',
			[
				'label'       => __( 'Content Source', BWDEB_ROOT_AUTHOR_PRO ),
				'description' => __( 'Select a saveed section to show in popup window.', BWDEB_ROOT_AUTHOR_PRO ),
				'type'        => \Elementor\Controls_Manager::SELECT,
				'options'     => $this->get_saved_content( ['page', 'section'] ),
				'default'     => '0',
			]
		);

		$this->add_control(
			'show_lightbox_preview',
			[
				'label'        => __( 'Show Lightbox Preview', BWDEB_ROOT_AUTHOR_PRO ),
				'description'  => __( 'This option only works on edit mode.', BWDEB_ROOT_AUTHOR_PRO ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off'    => __( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'return_value' => 'yes',
				// 'style_transfer' => true,
				'default'      => '',

			]
		);

		$this->add_control(
			'close_position',
			[
				'label'                => __( 'Close Icon Position', BWDEB_ROOT_AUTHOR_PRO ),
				'type'                 => \Elementor\Controls_Manager::SELECT,
				'options'              => [
					'top-left'  => __( 'Top Left', BWDEB_ROOT_AUTHOR_PRO ),
					'top-right' => __( 'Top Right', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default'              => 'top-right',
				'selectors_dictionary' => [
					'top-left'  => 'top:0; left:0;',
					'top-right' => 'top:0; right:0;',
				],
				'selectors'            => [
					'{{WRAPPER}} .bwdepix-member-lightbox.bwdepix-member-lightbox-show .bwdepix-member-lightbox-close' => '{{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function __photo_style_controls() {

		$this->start_controls_section(
			'_section_style_image',
			[
				'label' => __( 'Photo', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'image_width',
			[
				'label'      => __( 'Width', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range'      => [
					'%'  => [
						'min' => 20,
						'max' => 100,
					],
					'px' => [
						'min' => 100,
						'max' => 700,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-figure' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_height',
			[
				'label'      => __( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'min' => 100,
						'max' => 700,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-figure' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_spacing',
			[
				'label'      => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-figure' => 'margin-bottom: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);

		$this->add_responsive_control(
			'image_padding',
			[
				'label'      => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-figure img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'image_border',
				'selector' => '{{WRAPPER}} .bwdepix-member-figure img',
			]
		);

		$this->add_responsive_control(
			'image_border_radius',
			[
				'label'      => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-figure img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'image_box_shadow',
				'exclude'  => [
					'box_shadow_position',
				],
				'selector' => '{{WRAPPER}} .bwdepix-member-figure img',
			]
		);

		$this->add_control(
			'image_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-figure img' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->start_controls_tabs(
			'_tabs_img_effects', [
				'condition' => [
					'image2[url]' => '',
				],
			]
		);

		$this->start_controls_tab(
			'_tab_img_effects_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'img_opacity',
			[
				'label'     => __( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max'  => 1,
						'min'  => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-figure img' => 'opacity: {{SIZE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name'     => 'img_css_filters',
				'selector' => '{{WRAPPER}} .bwdepix-member-figure img',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_img_effects_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'img_hover_opacity',
			[
				'label'     => __( 'Opacity', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max'  => 1,
						'min'  => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-figure:hover img' => 'opacity: {{SIZE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name'     => 'img_hover_css_filters',
				'selector' => '{{WRAPPER}} .bwdepix-member-figure:hover img',
			]
		);

		$this->add_control(
			'img_hover_transition',
			[
				'label'     => __( 'Transition Duration', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max'  => 3,
						'step' => 0.1,
					],
				],
				'default'   => [
					'size' => .2,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-figure img' => 'transition-duration: {{SIZE}}s;',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function __body_content_style_controls() {

		$this->start_controls_section(
			'_section_style_content',
			[
				'label' => __( 'Name, Job Title & Bio', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'content_padding',
			[
				'label'      => __( 'Content Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'_heading_title',
			[
				'type'      => \Elementor\Controls_Manager::HEADING,
				'label'     => __( 'Name', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'title_spacing',
			[
				'label'      => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-name' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-name' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .bwdepix-member-name',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'title_text_shadow',
				'selector' => '{{WRAPPER}} .bwdepix-member-name',
			]
		);

		$this->add_control(
			'_heading_job_title',
			[
				'type'      => \Elementor\Controls_Manager::HEADING,
				'label'     => __( 'Job Title', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'job_title_spacing',
			[
				'label'      => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-position' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'job_title_color',
			[
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-position' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'job_title_typography',
				'selector' => '{{WRAPPER}} .bwdepix-member-position',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'job_title_text_shadow',
				'selector' => '{{WRAPPER}} .bwdepix-member-position',
			]
		);

		$this->add_control(
			'_heading_bio',
			[
				'type'      => \Elementor\Controls_Manager::HEADING,
				'label'     => __( 'Short Bio', BWDEB_ROOT_AUTHOR_PRO ),
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'bio_spacing',
			[
				'label'      => __( 'Bottom Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-bio' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bio_color',
			[
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-bio' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bio_typography',
				'selector' => '{{WRAPPER}} .bwdepix-member-bio p',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'bio_text_shadow',
				'selector' => '{{WRAPPER}} .bwdepix-member-bio',
			]
		);

		$this->end_controls_section();
	}

	protected function __social_style_controls() {

		$this->start_controls_section(
			'_section_style_social',
			[
				'label' => __( 'Social Icons', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'links_spacing',
			[
				'label'      => __( 'Right Spacing', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-links > a:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'links_padding',
			[
				'label'      => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-links > a' => 'padding: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'links_icon_size',
			[
				'label'      => __( 'Icon Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-links > a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'links_border',
				'selector' => '{{WRAPPER}} .bwdepix-member-links > a',
			]
		);

		$this->add_responsive_control(
			'links_border_radius',
			[
				'label'      => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-links > a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs( '_tab_links_colors' );
		$this->start_controls_tab(
			'_tab_links_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'links_color',
			[
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-links > a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'links_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-links > a' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->start_controls_tab(
			'_tab_links_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'links_hover_color',
			[
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-links > a:hover, {{WRAPPER}} .bwdepix-member-links > a:focus' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'links_hover_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-links > a:hover, {{WRAPPER}} .bwdepix-member-links > a:focus' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'links_hover_border_color',
			[
				'label'     => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-links > a:hover, {{WRAPPER}} .bwdepix-member-links > a:focus' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'links_border_border!' => '',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function __details_style_controls() {

		$this->start_controls_section(
			'_section_style_button',
			[
				'label' => __( 'Details Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'button_margin',
			[
				'label'      => __( 'Margin', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'button_padding',
			[
				'label'      => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} .bwdepix-btn',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'button_border',
				'selector' => '{{WRAPPER}} .bwdepix-btn',
			]
		);

		$this->add_control(
			'button_border_radius',
			[
				'label'      => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdepix-btn',
			]
		);

		$this->add_control(
			'hr',
			[
				'type'  => \Elementor\Controls_Manager::DIVIDER,
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
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn' => 'background-color: {{VALUE}};',
				],
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
				'label'     => __( 'Text Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn:hover, {{WRAPPER}} .bwdepix-btn:focus' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn:hover, {{WRAPPER}} .bwdepix-btn:focus' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_border_color',
			[
				'label'     => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'button_border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdepix-btn:hover, {{WRAPPER}} .bwdepix-btn:focus' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function __lightbox_style_controls() {

		$this->start_controls_section(
			'_section_style_lightbox',
			[
				'label'     => __( 'LightBox', BWDEB_ROOT_AUTHOR_PRO ),
				'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_details_button' => 'yes',
					'show_lightbox'       => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'lightbox_padding',
			[
				'label'      => __( 'Padding', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-lightbox.bwdepix-member-lightbox-show' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'     => 'lightbox_background',
				'selector' => '{{WRAPPER}} .bwdepix-member-lightbox.bwdepix-member-lightbox-show',
			]
		);

		$this->add_control(
			'close_button_heading',
			[
				'label'     => __( 'Close Button', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'close_button_border',
				'selector' => '{{WRAPPER}} .bwdepix-member-lightbox-close',
			]
		);

		$this->add_control(
			'close_button_border_radius',
			[
				'label'      => __( 'Border Radius', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'close_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdepix-member-lightbox-close',
			]
		);

		$this->add_responsive_control(
			'close_icon_size',
			[
				'label'      => __( 'Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range'      => [
					'px' => [
						'min' => 2,
						'max' => 200,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs( '_tabs_close_button' );
		$this->start_controls_tab(
			'_tab_close_button_normal',
			[
				'label' => __( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'close_button_color',
			[
				'label'     => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'close_button_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'_tab_close_button_hover',
			[
				'label' => __( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);

		$this->add_control(
			'close_button_hover_color',
			[
				'label'     => __( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'close_button_hover_bg_color',
			[
				'label'     => __( 'Background Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdepix-member-lightbox-close:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'close_button_hover_border_color',
			[
				'label'     => __( 'Border Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'close_button_border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} ..bwdepix-member-lightbox-close:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function get_post_template( $term = 'page' ) {
		$posts = get_posts(
			[
				'post_type'      => 'elementor_library',
				'orderby'        => 'title',
				'order'          => 'ASC',
				'posts_per_page' => '-1',
				'tax_query'      => [
					[
						'taxonomy' => 'elementor_library_type',
						'field'    => 'slug',
						'terms'    => $term,
					],
				],
			]
		);

		$templates = [];
		foreach ( $posts as $post ) {
			$templates[] = [
				'id'   => $post->ID,
				'name' => $post->post_title,
			];
		}
		return $templates;
	}
	protected function get_saved_content( $term = 'section' ) {
		$saved_contents = $this->get_post_template( $term );

		if ( count( $saved_contents ) > 0 ) {
			$options['0'] = __( 'None', BWDEB_ROOT_AUTHOR_PRO );
			foreach ( $saved_contents as $saved_content ) {
				$content_id             = $saved_content['id'];
				$options[ $content_id ] = $saved_content['name'];
			}
		} else {
			$options['no_template'] = __( 'Nothing Found', BWDEB_ROOT_AUTHOR_PRO );
		}
		return $options;
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$button_position = ! empty( $settings['button_position'] ) ? $settings['button_position'] : 'after';

		$show_button = false;
		if ( ! empty( $settings['show_details_button'] ) && $settings['show_details_button'] === 'yes' ) {
			$show_button = true;
		}

		$this->add_inline_editing_attributes( 'title', 'basic' );
		$this->add_render_attribute( 'title', 'class', 'bwdepix-member-name' );

		$this->add_inline_editing_attributes( 'job_title', 'basic' );
		$this->add_render_attribute( 'job_title', 'class', 'bwdepix-member-position' );

		$this->add_inline_editing_attributes( 'bio', 'intermediate' );
		$this->add_render_attribute( 'bio', 'class', 'bwdepix-member-bio' );
		?>

		<?php if ( $settings['image']['url'] || $settings['image']['id'] ) :
			$settings['hover_animation'] = 'disable-animation'; // hack to prevent image hover animation
			?>
			<figure class="bwdepix-member-figure">
				<?php
					echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image' );
				if ( $settings['image2']['url'] || $settings['image2']['id'] ) {
					echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image2' );
				}
				?>
			</figure>
		<?php endif; ?>

		<div class="bwdepix-member-body">
			<?php if ( $settings['title'] ) :
				printf( '<%1$s %2$s>%3$s</%1$s>',
					bwdepix_escape_tags( $settings['title_tag'], 'h2' ),
					$this->get_render_attribute_string( 'title' ),
					bwdepix_kses_basic( $settings['title'] )
				);
			endif; ?>

			<?php if ( $settings['job_title'] ) : ?>
				<div <?php $this->print_render_attribute_string( 'job_title' ); ?>><?php echo bwdepix_kses_basic( $settings['job_title'] ); ?></div>
			<?php endif; ?>

			<?php if ( $settings['bio'] ) : ?>
				<div <?php $this->print_render_attribute_string( 'bio' ); ?>>
					<p><?php echo bwdepix_kses_intermediate( $settings['bio'] ); ?></p>
				</div>
			<?php endif; ?>

			<?php
			if ( $show_button && $button_position === 'before' ) {
				$this->render_icon_button( [ 'new_icon' => 'button_icon', 'old_icon' => '' ] );
			}
			?>

			<?php if ( $settings['show_profiles'] && is_array( $settings['profiles'] ) ) : ?>
				<div class="bwdepix-member-links">
					<?php
					foreach ( $settings['profiles'] as $profile ) :
						$icon = $profile['name'];
						$url  = isset( $profile['link']['url'] ) ? $profile['link']['url'] : '';

						if ( 'website' === $profile['name'] ) {
							$icon = 'globe far';
						} elseif ( 'email' === $profile['name'] ) {
							$icon = 'envelope far';
							$url  = 'mailto:' . antispambot( $profile['email'] );
						} elseif ( 'phone' === $profile['name'] ) {
							$icon = 'phone-alt fas';
							$url  = 'tel:' . esc_html( $profile['phone'] );
						} else {
							$icon .= ' fab';
						}

						printf( '<a target="_blank" rel="noopener" href="%s" class="elementor-repeater-item-%s"><i class="fa fa-%s" aria-hidden="true"></i></a>',
							esc_url( $url ),
							esc_attr( $profile['_id'] ),
							esc_attr( $icon )
						);
					endforeach; ?>
				</div>
			<?php endif; ?>

			<?php
			if ( $show_button && $button_position === 'after' ) {
				$this->render_icon_button( [ 'new_icon' => 'button_icon', 'old_icon' => '' ] );
			}
			?>
		</div>
		<?php
		// render lightbox
		$this->render_lightbox();
	}

	protected function render_lightbox() {
		$settings = $this->get_settings_for_display();
		$template = false;
		if ( ! empty( $settings['saved_template_list'] ) && '0' != $settings['saved_template_list'] && 'no_template' != $settings['saved_template_list'] ) {
			$template = true;
		}
		if ( $settings['show_lightbox'] && 'yes' === $settings['show_lightbox'] && $template ) :
			$this->add_render_attribute( 'lightbox', 'class', 'bwdepix-member-lightbox' );
			if ( $settings['show_lightbox_preview'] == 'yes' && \Elementor\Plugin::instance()->editor->is_edit_mode() ) {
				$this->add_render_attribute( 'lightbox', 'class', 'bwdepix-member-lightbox-show' );
			}
			?>
				<div <?php $this->print_render_attribute_string( 'lightbox' ); ?>>
					<div class="bwdepix-member-lightbox-close"><i aria-hidden="true" class="eicon-editor-close"></i></div>
					<div class="bwdepix-member-lightbox-inner">
						<?php echo \Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $settings['saved_template_list'] ); ?>
					</div>
				</div>
			<?php
		endif;
	}
	

}