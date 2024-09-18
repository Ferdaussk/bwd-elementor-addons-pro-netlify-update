<div class="bwdbpl_blog_meta">
    <!-- Post Date -->
    
    <?php if( $bwdbpl_styles !== 'style4' && $bwdbpl_styles !== 'style8' && $bwdbpl_styles !== 'style11' && $bwdbpl_styles !== 'style12' ){
        include 'post-date.php';
    }
    // Author Indicator
    if($bwdbpl_yes_value === $bwdbpl_author_swtcher){ ?>
        <div class="bwdbpl_author-img">
            <div class="bwdbpl_blog_user">
            <?php if('icon' === $bwdbpl_author_indicator){ ?>
                    <i class="bwdbpl_icons <?php echo $settings['bwdbpl_author_icon']['value']; ?>"></i><?php 
                }elseif('gravatar' === $bwdbpl_author_indicator){
                    echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                }echo get_the_author_meta( 'nickname' ); ?>
            </div>
        </div>
    <?php }
    // Post Tags
    if($bwdbpl_yes_value === $bwdbpl_tags_swtcher){ ?>
        <div class="bedbp_the_tags">
            <div class="bwdbpl_blog_tag"> <?php the_tags(); ?> </div>
        </div>
        <?php } ?>
    <?php 
    // Post Comments
    if($bwdbpl_yes_value === $bwdbpl_comments_swtcher){ ?>
        <div class="bwdbpl_blog_comment">
            <?php if('show' === $bwdbpl_taxo_icon){ ?><i class="bwdbpl_icons fas fa-comments"></i><?php } if(!have_comments()){ echo esc_html__('Comment (', 'bwd-blog-post') . get_comments_number().')'; } ?>
        </div>
    <?php } 
    // Post Categories
    if( $bwdbpl_styles !== 'style5' ){
    include 'post-category.php'; }?>
    
</div>