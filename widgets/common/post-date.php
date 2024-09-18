<?php if($bwdbpl_yes_value === $bwdbpl_date_swtcher){ ?>
    <div class="bwdbpl_blog_date">
        <?php if( $bwdbpl_styles !== 'style4' && $bwdbpl_styles !== 'style11' && $bwdbpl_styles !== 'style12' ){
            if('show' === $bwdbpl_taxo_icon){ ?>
                <i class="bwdbpl_icons far fa-calendar-alt"></i><?php 
            } 
        }
        if( $bwdbpl_styles !== 'style4' && $bwdbpl_styles !== 'style11' && $bwdbpl_styles !== 'style12' ){echo get_the_date($bwdbpl_blog_date_format); }
        if( $bwdbpl_styles == 'style4' || $bwdbpl_styles == 'style11' || $bwdbpl_styles == 'style12' ){?>
            <span class="bwdbpl_date_number"><?php echo get_the_date('j'); ?></span>
            <span class="bwdbpl_date_month"><?php echo get_the_date('M'); ?></span>
        <?php } ?>
    </div>
<?php } ?>