<?php if($bptls_yes_value === $bptls_categories_swtcher){ ?>
    <?php if('show_main_cat' === $bptls_cat_show_status){ ?>
    <div class="bptls_category"> 
        <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories"><li><a class="bptls-cat" href="'. get_permalink() .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
        } ?>
    </div> 
    <?php } elseif('show_multiple_cat' === $bptls_cat_show_status){
    ?><div class="bptls_category"> <?php the_category(); ?></div> <?php
    } ?>
<?php } ?>