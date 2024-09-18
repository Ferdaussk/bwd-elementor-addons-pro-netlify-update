<?php if($bpiacrdn_yes_value === $bpiacrdn_categories_swtcher){ ?>
    <?php if('show_main_cat' === $bpiacrdn_cat_show_status){ ?>
    <div class="bpiacrdn-prodCat"> 
        <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories"><li><a href="'. get_permalink() .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
        } ?>
    </div> 
    <?php } elseif('show_multiple_cat' === $bpiacrdn_cat_show_status){
    ?><div class="bpiacrdn-prodCat"> <?php the_category(); ?></div> <?php
    } ?>
<?php } ?>