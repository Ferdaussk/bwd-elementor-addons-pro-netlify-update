<div class="bwdbp_blog_meta">
    <!-- Post Date -->
    
    <?php include 'post-date.php';
    // Author Indicator
    if($bwdbp_yes_value === $bwdbp_author_swtcher){ ?>
        <div class="bwdbp_author-img">
            <div class="bwdbp_blog_user">
            <?php if('icon' === $bwdbp_author_indicator){ ?>
                    <i class="bwdbp_icons <?php echo $settings['bwdbp_author_icon']['value']; ?>"></i><?php 
                }elseif('gravatar' === $bwdbp_author_indicator){
                    echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                }echo get_the_author_meta( 'nickname' ); ?>
            </div>
        </div>
    <?php }
    // Post Tags
    if($bwdbp_yes_value === $bwdbp_tags_swtcher){ ?>
        <div class="bedbp_the_tags">
            <div class="bwdbp_blog_tag"> <?php the_tags(); ?> </div>
        </div>
        <?php } ?>
    <?php 
    // Post Comments
    if($bwdbp_yes_value === $bwdbp_comments_swtcher){ ?>
        <div class="bwdbp_blog_comment">
            <?php if('show' === $bwdbp_taxo_icon){ ?><i class="bwdbp_icons fas fa-comments"></i><?php } if(!have_comments()){ echo esc_html__('Comment (', 'bwd-blog-post') . get_comments_number().')'; } ?>
        </div>
    <?php } 
    // Post Categories
    if( $bwdbp_styles !== 'style5' && $bwdbp_styles !== 'style18' && $bwdbp_styles !== 'style19' ){
    include 'post-category.php'; }?>
    
</div>