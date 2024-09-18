<?php if($bwdbpl_yes_value === $bwdbpl_categories_swtcher){ ?>
    <?php if('show_main_cat' === $bwdbpl_cat_show_status){ ?>
    <div class="bwdbpl_category"> 
        <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories"><li><a href="'. get_permalink() .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
        } ?>
    </div> 
    <?php } elseif('show_multiple_cat' === $bwdbpl_cat_show_status){
    ?><div class="bwdbpl_category"> <?php the_category(); ?></div> <?php
    } ?>
<?php } ?>