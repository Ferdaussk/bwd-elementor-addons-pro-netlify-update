<?php
/**
 * 
 * @===============//////////////////=================== Has a div with class
 * @All texonomy here-------------///////////(This file)
 * @===============//////////////////=================== The div closing
 * 
 */

if($teps_yes_value === $teps_date_swtcher){
  $teps_post_date = get_the_date($teps_blog_date_format);
  $teps_date_title = '<span class="teps-postslider-meta-icon">'.$teps_post_date.'</span></div>';
  $teps_date_icon = '<i class="teps_icons far fa-calendar-alt"></i>';
  $teps_date_show_icon = ('show' == $teps_taxo_icon)?$teps_date_icon:'';
  $teps_date_wrap_div = '<div class="teps-postslider-date teps-postslider-commn-meta">'.$teps_date_show_icon;
  echo $teps_date_wrap_div.$teps_date_title;
}
      $teps_post_tags = get_the_tags();
      $teps_main_tag = ($teps_post_tags) ? $teps_post_tags[0]->name:'';
      $teps_tag_title = '<span class="teps-postslider-meta-icon">'.$teps_main_tag.'</span></div>';
      $teps_tag_icon = '<i class="fas fa-tag"></i>';
      $teps_tag_show_icon = ('show' == $teps_taxo_icon)?$teps_tag_icon:'';
      $teps_wrap_div = '<div class="teps-postslider-tag teps-postslider-commn-meta">'.$teps_tag_show_icon;
      $teps_wrap_tag = ($teps_yes_value == $teps_tags_swtcher)?$teps_wrap_div:'';
      $teps_wrap_close_div = ($teps_yes_value == $teps_tags_swtcher)?$teps_tag_title:'';
      echo $teps_wrap_tag.$teps_wrap_close_div;
  if($teps_yes_value === $teps_comments_swtcher){
    echo '<div class="teps-postslider-comment teps-postslider-commn-meta">';
    $teps_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
    $teps_comm_title = '<span class="teps-postslider-meta-icon">'.$teps_main_comm.'</span>';
    $teps_comm_icon = '<i class="fas fa-comments"></i>';
    echo ('show' == $teps_taxo_icon)?$teps_comm_icon:'';
    echo $teps_comm_title.'</div>';
  }
if($teps_yes_value === $teps_categories_swtcher){
  echo '<div class="teps-postslider-category teps-postslider-commn-meta">';
  $teps_comm_icon = '<i class="fas fa-thumbtack"></i>';
  echo ('show' == $teps_taxo_icon)?$teps_comm_icon:'';
  if('show_main_cat' === $teps_cat_show_status){ 
    $categories = get_the_category();
    if (!empty($categories)){
      echo '<ul class="post-categories"><li><a href="'. esc_url(plugin_dir_url( '../../category/').$categories[0]->slug ) .'" class="teps-cat">'.esc_html( $categories[0]->name ).'</a></li></ul>';	
    }
  } elseif('show_multiple_cat' === $teps_cat_show_status){
    the_category();
  }
  echo '</div>';
}