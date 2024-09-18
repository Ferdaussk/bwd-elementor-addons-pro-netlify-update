<?php if($bwdbp_yes_value === $bwdbp_date_swtcher){ ?>
    <div class="bwdbp_blog_date">
        <?php if('show' === $bwdbp_taxo_icon){ ?>
            <i class="bwdbp_icons far fa-calendar-alt"></i><?php 
        } 
        if( $bwdbp_styles !== 'style4' && $bwdbp_styles !== 'style11' && $bwdbp_styles !== 'style13' ){echo get_the_date($bwdbp_blog_date_format); }
        if( $bwdbp_styles == 'style4' || $bwdbp_styles == 'style11' || $bwdbp_styles == 'style13' ){?>
            <span class="bwdbp_date_number"><?php echo get_the_date('j'); ?></span>
            <span class="bwdbp_date_month"><?php echo get_the_date('M'); ?></span>
        <?php } ?>
    </div>
<?php } ?>