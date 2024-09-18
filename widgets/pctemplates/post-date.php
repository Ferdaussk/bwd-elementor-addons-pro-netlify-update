<?php if($bwdbpc_yes_value === $bwdbpc_date_swtcher){ ?>
    <div class="bwdbpc_blog_date">
        <?php
        $allowed_styles_date = array('style4', 'style11', 'style13', 'style17', 'style30', 'style31');
        if( !in_array($bwdbpc_styles, $allowed_styles_date) ){
            if('show' === $bwdbpc_taxo_icon){ ?>
                <i class="bwdbpc_icons far fa-calendar-alt"></i><?php 
            } 
        }
        if( $bwdbpc_styles !== 'style4' && $bwdbpc_styles !== 'style11' && $bwdbpc_styles !== 'style13' && $bwdbpc_styles !== 'style30' && $bwdbpc_styles !== 'style31' ){echo get_the_date($bwdbpc_blog_date_format); }
        if( $bwdbpc_styles == 'style4' || $bwdbpc_styles == 'style11' || $bwdbpc_styles == 'style13' || $bwdbpc_styles == 'style30' || $bwdbpc_styles == 'style31' ){?>
            <span class="bwdbpc_date_number"><?php echo get_the_date('j'); ?></span>
            <span class="bwdbpc_date_month"><?php echo get_the_date('M'); ?></span>
        <?php } ?>
    </div>
<?php } ?>