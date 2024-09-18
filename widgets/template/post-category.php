<?php if($bpaccdn_yes_value === $bpaccdn_categories_swtcher){ ?>
    <?php if('show_main_cat' === $bpaccdn_cat_show_status){ ?>
    <div class="bpaccdn-prodCat"> 
        <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories"><li><a href="'. get_permalink() .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
        } ?>
    </div> 
    <?php } elseif('show_multiple_cat' === $bpaccdn_cat_show_status){
    ?><div class="bpaccdn-prodCat"> <?php the_category(); ?></div> <?php
    } ?>
<?php } ?>