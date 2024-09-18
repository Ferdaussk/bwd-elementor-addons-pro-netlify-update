<div class="bwdbpc_blog_meta">
    <!-- Post Date -->
    
    <?php include 'post-date.php';
    // Author Indicator
    if($bwdbpc_yes_value === $bwdbpc_author_swtcher){ ?>
        <div class="bwdbpc_author-img">
            <div class="bwdbpc_blog_user">
            <?php if('icon' === $bwdbpc_author_indicator){ ?>
                    <i class="bwdbpc_icons <?php echo $settings['bwdbpc_author_icon']['value']; ?>"></i><?php 
                }elseif('gravatar' === $bwdbpc_author_indicator){
                    echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                }echo get_the_author_meta( 'nickname' ); ?>
            </div>
        </div>
    <?php }
    // Post Tags
    if($bwdbpc_yes_value === $bwdbpc_tags_swtcher){ ?>
        <div class="bedbp_the_tags">
            <div class="bwdbpc_blog_tag"> <?php the_tags(); ?> </div>
        </div>
        <?php } ?>
    <?php 
    // Post Comments
    if($bwdbpc_yes_value === $bwdbpc_comments_swtcher){ ?>
        <div class="bwdbpc_blog_comment">
            <?php if('show' === $bwdbpc_taxo_icon){ ?><i class="bwdbpc_icons fas fa-comments"></i><?php } if(!have_comments()){ echo esc_html__('Comment (', 'bwd-blog-post') . get_comments_number().')'; } ?>
        </div>
    <?php } 
    // Post Categories
    if( $bwdbpc_styles !== 'style5' && $bwdbpc_styles !== 'style18' && $bwdbpc_styles !== 'style19' && $bwdbpc_styles !== 'style24' ){
    include 'post-category.php'; }?>
    
</div>