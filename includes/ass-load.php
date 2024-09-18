<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

// Update start // https://bwd-elementor-addons-pro.netlify.app/
wp_enqueue_style( 'bwdproeb-responsive-column', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/responsive-column.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
wp_enqueue_style( 'bwdproeb-bootstrap.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bootstrap.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
wp_enqueue_style( 'bwdproeb-animate.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/animate.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
wp_enqueue_script( 'bwdproeb-imagesloaded.pkgd.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/imagesloaded.pkgd.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
wp_enqueue_script( 'bwdproeb-isotope.pkgd.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/isotope.pkgd.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
if(get_option('bwdeb-plugin-meet-the-team','off')=='on'){
    wp_enqueue_style( 'bwdproeb-meet-the-team-mtt-team-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/meet-the-team/mtt-team-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-meet-the-team-slick', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/meet-the-team/slick.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-meet-the-team-slick.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/meet-the-team/slick.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-meet-the-team-min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/meet-the-team/min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-testimonials','off')=='on'){
    wp_enqueue_style( 'bwdproeb-testimonials', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/testimonials/tbt_main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-testimonials-carousel', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/testimonials/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-testimonials-theme', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/testimonials/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-testimonials-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/testimonials/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-testimonials-min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/testimonials/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-creative-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-creative-buttons', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-buttons/creative-buttons.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-plugin-accordion', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/ab-common/bwdac-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-ab-accordion', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/ab-common/ab-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-masking-effect','off')=='on'){
    wp_enqueue_style( 'bwdproeb-masking-e', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdme-masking.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-service-showcase','off')=='on'){
    wp_enqueue_style( 'bwdproeb-service-shw', plugin_dir_url( __FILE__ ) . '../assets/public/css/service.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-promo-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-promo-box', plugin_dir_url( __FILE__ ) . '../assets/public/css/promo-box.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-service-flip-box','off')=='on'||get_option('bwdeb-plugin-step-flip-box','off')=='on'||get_option('bwdeb-plugin-team-flip-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-flip-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/flip-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-creative-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-creative-list-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/creative-list-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-dual-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwddh-heading', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwddh-heading.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-icon-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-icon-box', plugin_dir_url( __FILE__ ) . '../assets/public/css/icon-box-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-dual-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-dual-button', plugin_dir_url( __FILE__ ) . '../assets/public/css/dual-buttons.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-honeycombs','off')=='on'){
    wp_enqueue_style( 'bwdproeb-honeycombs-font', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/honeycombs/font.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-honeycombs-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/honeycombs/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-honeycombs-honeycombs.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/honeycombs/honeycombs.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-honeycombs-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/honeycombs/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-advanced-slider','off')=='on'){
    wp_enqueue_style( 'bwdproeb-advanced-effective-slider-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/advanced-effective-slider/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-advanced-effective-slider-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/advanced-effective-slider/swiper-bundle.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-advanced-effective-slider-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/advanced-effective-slider/swiper-bundle.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-advanced-effective-slider-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/advanced-effective-slider/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-fancy-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-fancy-heading', plugin_dir_url( __FILE__ ) . '../assets/public/css/fancy-heading.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-animated-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-animated-heading', plugin_dir_url( __FILE__ ) . '../assets/public/css/animated-heading-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-aniheading-custom', plugin_dir_url( __FILE__ ) . '../assets/public/js/aniheading-custom.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-animated-link','off')=='on'){
    wp_enqueue_style( 'bwdproeb-animated-link', plugin_dir_url( __FILE__ ) . '../assets/public/css/animated-link.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-awesome-step','off')=='on'){
    wp_enqueue_style( 'bwdproeb-step-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/step-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-blockquote','off')=='on'){
    wp_enqueue_style( 'bwdproeb-blockquote', plugin_dir_url( __FILE__ ) . '../assets/public/css/blockquote.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-business-hours','off')=='on'){
    wp_enqueue_style( 'bwdproeb-businesshours', plugin_dir_url( __FILE__ ) . '../assets/public/css/businesshours.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-call-to-action','off')=='on'){
    wp_enqueue_style( 'bwdproeb-calltoaction', plugin_dir_url( __FILE__ ) . '../assets/public/css/calltoaction.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-click-to-contact','off')=='on'){
    wp_enqueue_style( 'bwdproeb-clicktocontact', plugin_dir_url( __FILE__ ) . '../assets/public/css/clicktocontact.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-clicktocontact', plugin_dir_url( __FILE__ ) . '../assets/public/js/clicktocontact.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-countdown','off')=='on'){
    wp_enqueue_style( 'bwdproeb-countdown', plugin_dir_url( __FILE__ ) . '../assets/public/css/countdown.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-countdown', plugin_dir_url( __FILE__ ) . '../assets/public/js/countdown.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-counter','off')=='on'){
    wp_enqueue_style( 'bwdproeb-counter', plugin_dir_url( __FILE__ ) . '../assets/public/css/counter.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-counter', plugin_dir_url( __FILE__ ) . '../assets/public/js/counter.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-coupon-code','off')=='on'){
    wp_enqueue_style( 'bwdproeb-coupon', plugin_dir_url( __FILE__ ) . '../assets/public/css/coupon.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-coupon', plugin_dir_url( __FILE__ ) . '../assets/public/js/coupon.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-filterable-gallery','off')=='on'){
    wp_enqueue_style( 'bwdproeb-filterable-gallery', plugin_dir_url( __FILE__ ) . '../assets/public/css/filterable-gallery.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-magnific-popup1', plugin_dir_url( __FILE__ ) . '../assets/public/css/magnific-popup.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-filterable-gallery', plugin_dir_url( __FILE__ ) . '../assets/public/js/filterable-gallery.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-hero-sections-jquery.magnific-popup.min1', plugin_dir_url( __FILE__ ) . '../assets/public/hero-sections/jquery.magnific-popup.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgaccordion', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgaccordion.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-image-compare','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgcompare', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgcompare.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-imgcompare', plugin_dir_url( __FILE__ ) . '../assets/public/js/imgcompare.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-image-hotspot','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imghotspot', plugin_dir_url( __FILE__ ) . '../assets/public/css/imghotspot.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-image-hover-effect','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imagehover', plugin_dir_url( __FILE__ ) . '../assets/public/css/imagehover.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-image-scroll','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgscroll', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgscroll.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-image-shape','off')=='on'){
    wp_enqueue_style( 'bwdproeb-image-shape', plugin_dir_url( __FILE__ ) . '../assets/public/css/image-shape.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-image-swap','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgswap', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgswap.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-pricing-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-price-table', plugin_dir_url( __FILE__ ) . '../assets/public/css/price-table.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-progress-bar','off')=='on'){
    wp_enqueue_style( 'bwdproeb-progressbar', plugin_dir_url( __FILE__ ) . '../assets/public/css/progressbar.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-progressbar', plugin_dir_url( __FILE__ ) . '../assets/public/js/progressbar.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/css/timeline.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/js/timeline.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-social-icon','off')=='on'){
    wp_enqueue_style( 'bwdproeb-social-icon', plugin_dir_url( __FILE__ ) . '../assets/public/css/social-icon.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-creative-tab','off')=='on'){
    wp_enqueue_style( 'bwdproeb-tab', plugin_dir_url( __FILE__ ) . '../assets/public/css/tab.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-tab', plugin_dir_url( __FILE__ ) . '../assets/public/js/tab.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-webinar-info','off')=='on'){
    wp_enqueue_style( 'bwdproeb-webinar', plugin_dir_url( __FILE__ ) . '../assets/public/css/webinar.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-webinar', plugin_dir_url( __FILE__ ) . '../assets/public/js/webinar.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-unique-headers','off')=='on'){
    wp_enqueue_style( 'bwdproeb-header', plugin_dir_url( __FILE__ ) . '../assets/public/css/header.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-search_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/search_style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-header_social_icon', plugin_dir_url( __FILE__ ) . '../assets/public/css/header_social_icon.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-header-top', plugin_dir_url( __FILE__ ) . '../assets/public/css/header-top.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-header', plugin_dir_url( __FILE__ ) . '../assets/public/js/header.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-slide-anything','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdsas-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdsas-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdsas-swiper.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdsas-swiper.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdsas-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdsas-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdsas-swiper.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdsas-swiper.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-photo-stack','off')=='on'){
    wp_enqueue_style( 'bwdproeb-photo-stack', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/photo-stack.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-popup','off')=='on'){
    wp_enqueue_style( 'bwdproeb-modal-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/modal-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-popup', plugin_dir_url( __FILE__ ) . '../assets/public/js/popup.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-image-stack-group','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imsgroup', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/imsgroup.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-ihover','off')=='on'){
    wp_enqueue_style( 'bwdproeb-ihover', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/ihover.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-video-popup','off')=='on'){
    wp_enqueue_style( 'bwdproeb-video-popup', plugin_dir_url( __FILE__ ) . '../assets/public/css/video-popup.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-video-popup', plugin_dir_url( __FILE__ ) . '../assets/public/js/video-popup.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-profile-card','off')=='on'){
    wp_enqueue_style( 'bwdproeb-profile-card', plugin_dir_url( __FILE__ ) . '../assets/public/css/profile-card.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-profile-card', plugin_dir_url( __FILE__ ) . '../assets/public/js/profile-card.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-back-to-top','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bttop', plugin_dir_url( __FILE__ ) . '../assets/public/css/bttop.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bttop', plugin_dir_url( __FILE__ ) . '../assets/public/js/bttop.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-masking-video','off')=='on'){
    wp_enqueue_style( 'bwdproeb-masking-video', plugin_dir_url( __FILE__ ) . '../assets/public/css/masking-video.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-masking-video', plugin_dir_url( __FILE__ ) . '../assets/public/js/masking-video.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-logo-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdlc-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdlc-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdlc-swiper', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdlc-swiper.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdlc-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdlc-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdlc-swiper', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdlc-swiper.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-logo-grid','off')=='on'||get_option('bwdeb-plugin-logo-filter','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdlc-main1', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdlc-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdlc-main1', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdlc-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-map-masking','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdmfm-masking', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdmfm-masking.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-author-bio','off')=='on'){
    wp_enqueue_style( 'bwdproeb-author-bio', plugin_dir_url( __FILE__ ) . '../assets/public/css/author-bio.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-author-bio', plugin_dir_url( __FILE__ ) . '../assets/public/js/author-bio.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-data-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-data-table', plugin_dir_url( __FILE__ ) . '../assets/public/css/data-table.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-contact-form-7-styler','off')=='on'){
    wp_enqueue_style( 'bwdproeb-form7', plugin_dir_url( __FILE__ ) . '../assets/public/css/form7.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-effective-pre-loader','off')=='on'){
    wp_enqueue_style( 'bwdproeb-eprel-loader', plugin_dir_url( __FILE__ ) . '../assets/public/css/eprel-loader.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-eprel-loader.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/eprel-loader.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-eprel-loader-extra-transition', plugin_dir_url( __FILE__ ) . '../assets/public/js/eprel-loader-extra-transition.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-eprel-loader-extra-transition.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/eprel-loader-extra-transition.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-eprel-loader', plugin_dir_url( __FILE__ ) . '../assets/public/js/eprel-loader.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-eprel-loader.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/eprel-loader.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-team-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdtmc-team-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdtmc-team-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-team-carousel', plugin_dir_url( __FILE__ ) . '../assets/public/js/team-carousel.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdtmc-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdtmc-owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-social-share','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwduss_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwduss_style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-breadcrumb','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdbrdcm_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdbrdcm_style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-background-switcher','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdsb_main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdsb_main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdsb_main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdsb_main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-circle-info','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdci-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdci-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdci-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdci-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-product-category-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdcp-catproduct-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdcp-catproduct/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdcp-catproduct-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdcp-catproduct/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdcp-catproduct-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdcp-catproduct/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdcp-catproduct-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdcp-catproduct/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdcp-catproduct-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdcp-catproduct/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-flip-box-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdfb-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdfb-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdfb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdfb-owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdfb-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdfb-owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdfb-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdfb-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdfb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdfb-owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-info-download-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-info-downld-btn-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/info-downld-btn-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-unfold','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwduf-unfold-content', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwduf-unfold-content.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwduf-unfold-content', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwduf-unfold-content.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-code-highlighter','off')=='on'){
    // wp_enqueue_style( 'bwdproeb-prism-toolbar1', plugin_dir_url( __FILE__ ) . '../assets/public/css/prism-toolbar.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-default', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-default.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-coy', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-coy.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-funky', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-funky.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-okaidia', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-okaidia.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-solarized-light', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-solarized-light.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-solarized-dark-atom', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/solarized-dark-atom.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-tomorrow-night', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-tomorrow-night.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-twilight', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-twilight.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-prism-toolbar', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/prism-toolbar.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-cold-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/cold-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-colddark-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/colddark-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-z-touch', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/z-touch.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-zonokai-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/zonokai-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-vs-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/vs-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-nord-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/nord-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-holy-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/holy-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-laserwave-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/laserwave-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-lucario-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/lucario-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-night-owl', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/night-owl.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-atom-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/atom-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-dracula-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/dracula-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-forest', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-forest.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-earth', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-earth.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-light', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-light.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-sea', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-sea.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-duotone-space', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/duotone-space.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-gruvbox-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/gruvbox-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-gruvbox-light', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/gruvbox-light.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-ghcolors-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/ghcolors-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-pojoaque', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/pojoaque.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-shades-of-purple', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/shades-of-purple.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-synthwave', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/synthwave.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-a11y-dark-theme', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/a11y-dark-theme.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-material-dark', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/material-dark.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-material-light', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/material-light.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-material-oceanic', plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/material-oceanic.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-codentor-prism-toolbar', plugin_dir_url( __FILE__ ) . '../assets/public/js/codentor-prism-toolbar.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-codentor-prism', plugin_dir_url( __FILE__ ) . '../assets/public/js/codentor-prism.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-single-post-slider','off')=='on'){
    wp_enqueue_style( 'bwdproeb-teps-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/teps-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-teps-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/teps-swiper-bundle.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-teps-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/teps-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-teps-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/teps-swiper-bundle.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-post-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-thepsttmln-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/thepsttmln-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-thepsttmln-custom', plugin_dir_url( __FILE__ ) . '../assets/public/js/thepsttmln-custom.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-lottie-animation','off')=='on'){
    wp_enqueue_style( 'bwdproeb-elottiea-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/elottiea-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-lottie', plugin_dir_url( __FILE__ ) . '../assets/public/js/lottie.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-lottie.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/lottie.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-lord-icon','off')=='on'){
    wp_enqueue_style( 'bwdproeb-plordiconsa-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/plordiconsa-style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-lordicons.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/lordicons.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-bar-chart','off')=='on'){
    wp_enqueue_script( 'bwdproeb-bwdpcb-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdpcb-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-bwdpcb-chart', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdpcb-chart.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    // wp_enqueue_script( 'bwdproeb-chart-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/chart-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-content-switcher','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdcs_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdcs_style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdcs_min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdcs_min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-cv-builder','off')=='on'||get_option('bwdeb-plugin-cv-about','off')=='on'||get_option('bwdeb-plugin-cv-contact','off')=='on'||get_option('bwdeb-plugin-cv-education','off')=='on'||get_option('bwdeb-plugin-cv-experience','off')=='on'||get_option('bwdeb-plugin-cv-footer','off')=='on'||get_option('bwdeb-plugin-cv-header','off')=='on'||get_option('bwdeb-plugin-cv-hobby','off')=='on'||get_option('bwdeb-plugin-cv-language','off')=='on'||get_option('bwdeb-plugin-cv-reference','off')=='on'||get_option('bwdeb-plugin-cv-skill','off')=='on'){
    wp_enqueue_style( 'bwdproeb-cv-builder', plugin_dir_url( __FILE__ ) . '../assets/public/css/cv-builder.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-cv-print', plugin_dir_url( __FILE__ ) . '../assets/public/css/cv-print.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-cv-builder', plugin_dir_url( __FILE__ ) . '../assets/public/js/cv-builder.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_style( 'bwdcv_cv_font_awesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0', 'all' );
    wp_enqueue_style( 'bwdcv_cv_bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array(), '5.7.2', 'all' );
}
if(get_option('bwdeb-plugin-post-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwd-post-grid', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwd-post-grid.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-post-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bpaccdn-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/blog-post-accordions/bpaccdn-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-bpaccdn-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/blog-post-accordions/bpaccdn-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-post-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-blog-post-image-accordion', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/blog-post-image-accordion.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-post-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-blog-post-list', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/blog-post-list.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-post-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-blog-post-tiles', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/blog-post-tiles.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-creative-post-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-creative-post-carousel-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-post-carousel/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-creative-post-carousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-post-carousel/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-creative-post-carousel-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-post-carousel/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-creative-post-carousel-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-post-carousel/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-creative-post-carousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/creative-post-carousel/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-news-ticker','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-type-news-ticker-style', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/post-type-news-ticker/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-post-type-news-ticker-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/post-type-news-ticker/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-post-type-news-ticker-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/post-type-news-ticker/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-post-type-news-ticker-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/post-type-news-ticker/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-masonary-blog-post','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-masonary', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-masonary.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-crtp_css', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/crtp_css.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woo-imgaccordion', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/woo-imgaccordion.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-featured-product','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woofpt-css', plugin_dir_url( __FILE__ ) . '../assets/public/css/woofpt_css.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-related-product','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woore-product', plugin_dir_url( __FILE__ ) . '../assets/public/css/woore-product.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-wreowl.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/wreowl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-wreowl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/wreowl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-woore-product', plugin_dir_url( __FILE__ ) . '../assets/public/js/woore-product.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-wreowl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/wreowl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-product-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woocpt_css', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/woocpt_css.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woocpa-accordion-woocpa-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/woocpa-accordion/woocpa-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-woocpa-accordion-woocpa-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/woocpa-accordion/woocpa-main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-product-category-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-tiles-cat', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-tiles-cat.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-list', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-grid-product-casousel-style', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/grid-product-casousel/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-grid-product-casousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/grid-product-casousel/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-grid-product-casousel-animate', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/grid-product-casousel/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-grid-product-casousel-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/grid-product-casousel/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-grid-product-casousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/grid-product-casousel/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-product-list-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-list-carousel-style', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list-carousel/bwdcrtplst-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-product-list-carousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list-carousel/owl.carousel.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-product-list-carousel-animate', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list-carousel/owl.theme.default.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-product-list-carousel-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list-carousel/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-product-list-carousel-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/product-list-carousel/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-product-category-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-cat-product-grid-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/cat-product-grid/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/css/product-timeline.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-product-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/js/product-timeline.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-ajax-data-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-ajax-DataTable-main', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-ajax-DataTable-datatables.min', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/datatables.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-ajax-DataTable-responsive', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/responsive.dataTables.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-ajax-DataTable-main', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-ajax-DataTable-datatables.min', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/datatables.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-ajax-DataTable-dataTables.responsive.min', plugin_dir_url( __FILE__ ) . '../assets/public/ajax-DataTable/dataTables.responsive.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-cart-flipper','off')=='on'){
    wp_enqueue_style( 'bwdproeb-card-flipper-pro-main', plugin_dir_url( __FILE__ ) . '../assets/public/card-flipper-pro/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-card-flipper-pro-main', plugin_dir_url( __FILE__ ) . '../assets/public/card-flipper-pro/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-con-swi-pls','off')=='on'){
    wp_enqueue_style( 'bwdproeb-con-swi-pls-main', plugin_dir_url( __FILE__ ) . '../assets/public/con-swi-pls/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-con-swi-pls-main', plugin_dir_url( __FILE__ ) . '../assets/public/con-swi-pls/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-img-rev-widg','off')=='on'){
    wp_enqueue_style( 'bwdproeb-img-rev-widg-image-hover-effect.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/image-hover-effect.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-img-rev-widg-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-img-rev-widg-sal', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/sal.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-img-rev-widg-jquery.inview.min', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/jquery.inview.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-img-rev-widg-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-img-rev-widg-sal', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/img-rev-widg/sal.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-img-unfold-kit','off')=='on'){
    wp_enqueue_style( 'bwdproeb-img-unfold-kit-main', plugin_dir_url( __FILE__ ) . '../assets/public/img-unfold-kit/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-img-unfold-kit-main', plugin_dir_url( __FILE__ ) . '../assets/public/img-unfold-kit/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-modern-feature-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-modern-feature-list-main', plugin_dir_url( __FILE__ ) . '../assets/public/modern-feature-list/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-offcanvasmagic','off')=='on'){
    wp_enqueue_style( 'bwdproeb-offcanvasmagic-main', plugin_dir_url( __FILE__ ) . '../assets/public/offcanvasmagic/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-offcanvasmagic-main', plugin_dir_url( __FILE__ ) . '../assets/public/offcanvasmagic/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-privacy-content-locker','off')=='on'){
    wp_enqueue_style( 'bwdproeb-prconlker-main', plugin_dir_url( __FILE__ ) . '../assets/public/prconlker/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-viewpdf','off')=='on'){
    wp_enqueue_style( 'bwdproeb-viewpdf-main', plugin_dir_url( __FILE__ ) . '../assets/public/viewpdf/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-viewpdf-main', plugin_dir_url( __FILE__ ) . '../assets/public/viewpdf/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-viewpdf-pdf', plugin_dir_url( __FILE__ ) . '../assets/public/viewpdf/pdf.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-progress-master-kit','off')=='on'){
    wp_enqueue_style( 'bwdproeb-progress-master-kit-main', plugin_dir_url( __FILE__ ) . '../assets/public/progress-master-kit/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-progress-master-kit-main', plugin_dir_url( __FILE__ ) . '../assets/public/progress-master-kit/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-restaurant-price-menu','off')=='on'){
    wp_enqueue_style( 'bwdproeb-restaurant-price-menu-main', plugin_dir_url( __FILE__ ) . '../assets/public/restaurant-price-menu/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-sales-promotion-offer','off')=='on'){
    wp_enqueue_style( 'bwdproeb-sales-promotion-offer-main', plugin_dir_url( __FILE__ ) . '../assets/public/sales-promotion-offer/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-sales-promotion-offer-main', plugin_dir_url( __FILE__ ) . '../assets/public/sales-promotion-offer/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-profile-showcas','off')=='on'){
    wp_enqueue_style( 'bwdproeb-profile-showcas-main', plugin_dir_url( __FILE__ ) . '../assets/public/profile-showcas/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-profile-showcas-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/profile-showcas/swiper-bundle.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-profile-showcas-main', plugin_dir_url( __FILE__ ) . '../assets/public/profile-showcas/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-profile-showcas-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/profile-showcas/swiper-bundle.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-plugin-tooltip-mastery','off')=='on'){
    wp_enqueue_style( 'bwdproeb-tooltip-mastery-main', plugin_dir_url( __FILE__ ) . '../assets/public/tooltip-mastery/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-woo-cat-gallery','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woo-cat-gallery-main', plugin_dir_url( __FILE__ ) . '../assets/public/woo-cat-gallery/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-header_social_icon', plugin_dir_url( __FILE__ ) . '../assets/public/css/header_social_icon.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-woop-multi-action','off')=='on'||get_option('bwdeb-plugin-woop-wish-cont', 'off' )=='on'){
    wp_enqueue_style( 'bwdproeb-woop-multi-action-style', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-woop-multi-action-owl.carousel', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/owl.carousel.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-woop-multi-action-imagesloaded.pkgd.min', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/imagesloaded.pkgd.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-woop-multi-action-jquery.isotope.min', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/jquery.isotope.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-woop-multi-action-main', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-woop-multi-action-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/woop-multi-action/owl.carousel.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-check-hero-widget1','off')=='on'||get_option('bwdeb-check-hero-widget2', 'off' )=='on'||get_option('bwdeb-check-hero-widget3', 'off' )=='on'||get_option('bwdeb-check-hero-widget4', 'off' )=='on'||get_option('bwdeb-check-hero-widget5', 'off' )=='on'||get_option('bwdeb-check-hero-widget6', 'off' )=='on'||get_option('bwdeb-check-hero-widget7', 'off' )=='on'||get_option('bwdeb-check-hero-widget8', 'off' )=='on'||get_option('bwdeb-check-hero-widget9', 'off' )=='on'||get_option('bwdeb-check-hero-widget10', 'off' )=='on'||get_option('bwdeb-check-hero-widget11', 'off' )=='on'||get_option('bwdeb-check-hero-widget12', 'off' )=='on'||get_option('bwdeb-check-hero-widget13', 'off' )=='on'){
    wp_enqueue_style( 'bwdproeb-hero-sections-main', plugin_dir_url( __FILE__ ) . '../assets/public/hero-sections/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    // wp_enqueue_style( 'bwdproeb-hero-sections-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/hero-sections/hero.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-magnific-popup', plugin_dir_url( __FILE__ ) . '../assets/public/css/magnific-popup.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-hero-sections-jquery.magnific-popup.min', plugin_dir_url( __FILE__ ) . '../assets/public/hero-sections/jquery.magnific-popup.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-employee-profile-identity','off')=='on'){
    wp_enqueue_style( 'bwdproeb-employee-profile-identity-main', plugin_dir_url( __FILE__ ) . '../assets/public/employee-profile-identity/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-employee-profile-identity-main', plugin_dir_url( __FILE__ ) . '../assets/public/employee-profile-identity/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-product-features-w','off')=='on'){
    wp_enqueue_style( 'bwdproeb-horizontal-timeline-slider-smain', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/smain.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-threesixty-rotation-view', 'off' )=='on'){
    wp_enqueue_style( 'bwdproeb-threesixty-rotation-view-main', plugin_dir_url( __FILE__ ) . '../assets/public/threesixty-rotation-view/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-threesixty-rotation-view-imagesloaded.pkgd.min', plugin_dir_url( __FILE__ ) . '../assets/public/threesixty-rotation-view/circlr.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-threesixty-rotation-view-jquery.isotope.min', plugin_dir_url( __FILE__ ) . '../assets/public/threesixty-rotation-view/circlr.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-threesixty-rotation-view-main', plugin_dir_url( __FILE__ ) . '../assets/public/threesixty-rotation-view/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-threesixty-rotation-view-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/threesixty-rotation-view/simple-magnify.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-woop-vendors','off')=='on'){
    wp_enqueue_style( 'bwdproeb-woop-vendors-main', plugin_dir_url( __FILE__ ) . '../assets/public/woop-vendors/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-post-prestige-portfolio','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-prestige-portfolio-main', plugin_dir_url( __FILE__ ) . '../assets/public/post-prestige-portfolio/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-post-prestige-portfolio-main', plugin_dir_url( __FILE__ ) . '../assets/public/post-prestige-portfolio/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-apostst','off')=='on'){
    wp_enqueue_style( 'bwdproeb-apostst-style', plugin_dir_url( __FILE__ ) . '../assets/public/apostst/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-apostst-main', plugin_dir_url( __FILE__ ) . '../assets/public/apostst/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-apostst-load-more', plugin_dir_url( __FILE__ ) . '../assets/public/apostst/load-more.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-widget-template','off')=='on'){
    wp_enqueue_style( 'bwdproeb-widget-template-style', plugin_dir_url( __FILE__ ) . '../assets/public/widget-template/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-widget-template-main', plugin_dir_url( __FILE__ ) . '../assets/public/widget-template/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-horizontal-timeline-slider','off')=='on'){
    wp_enqueue_style( 'bwdproeb-horizontal-timeline-slider-main', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-horizontal-timeline-slider-slick', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/slick.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-horizontal-timeline-slider-main', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-horizontal-timeline-slider-slick.min', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/slick.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-horizontal-timeline-slider-test', plugin_dir_url( __FILE__ ) . '../assets/public/horizontal-timeline-slider/test.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-pssx','off')=='on'){
    wp_enqueue_style( 'bwdproeb-pssx-main', plugin_dir_url( __FILE__ ) . '../assets/public/pssx/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-pssx-main', plugin_dir_url( __FILE__ ) . '../assets/public/pssx/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-blmx1','off')=='on'||get_option('bwdeb-blmx2', 'off' )=='on'||get_option('bwdeb-blmx3', 'off' )=='on'){
    wp_enqueue_style( 'bwdproeb-blm-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/blm-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-svpx','off')=='on'){
    wp_enqueue_style( 'bwdproeb-svpx--main', plugin_dir_url( __FILE__ ) . '../assets/public/svpx-/css/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-svpx--plyr.min', plugin_dir_url( __FILE__ ) . '../assets/public/svpx-/css/plyr.min.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-svpx--main', plugin_dir_url( __FILE__ ) . '../assets/public/svpx-/js/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-svpx--plyr.min', plugin_dir_url( __FILE__ ) . '../assets/public/svpx-/js/plyr.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-txsx','off')=='on'){
    wp_enqueue_style( 'bwdproeb-txsx-main', plugin_dir_url( __FILE__ ) . '../assets/public/txsx/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-txsx-main', plugin_dir_url( __FILE__ ) . '../assets/public/txsx/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-vsix','off')=='on'){
    wp_enqueue_style( 'bwdproeb-vsix-main', plugin_dir_url( __FILE__ ) . '../assets/public/vsix/css/main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_style( 'bwdproeb-vsix-slick', plugin_dir_url( __FILE__ ) . '../assets/public/vsix/css/slick.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-vsix-main', plugin_dir_url( __FILE__ ) . '../assets/public/vsix/js/main.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
    wp_enqueue_script( 'bwdproeb-vsix-slick.min', plugin_dir_url( __FILE__ ) . '../assets/public/vsix/js/slick.min.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-twpx','off')=='on'){
    wp_enqueue_style( 'bwdproeb-twpx-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/twpx-main.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-plugin-product-compare','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdwpc_css', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/bwdwpc_css.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-random-image','off')=='on'){
    wp_enqueue_style( 'bwdproeb-random-image', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/random-image.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
if(get_option('bwdeb-mega-menu','off')=='on'){
    wp_enqueue_style( 'bwdproeb-mega-menu-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/mega-menu/css/style.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
    wp_enqueue_script( 'bwdproeb-mega-menu-main', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/mega-menu/js/script.js', array('jquery'), BWDEB_THE_PRO_SOFT_VERSION, true );
}
if(get_option('bwdeb-special-day-offer','off')=='on'){
    wp_enqueue_style( 'bwdproeb-special-day-offer', plugin_dir_url( __FILE__ ) . '../assets/public/all-updates-ass/special-day-offer.css', null, BWDEB_THE_PRO_SOFT_VERSION, 'all' );
}
