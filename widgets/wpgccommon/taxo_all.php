
	<div class="wppgpc-category-tag <?php echo esc_attr($wppgpc_cont_align); ?>">
		<?php if('yes' === $settings['wppgpc_cat']){ ?>
		<div class="wppgpc-pro-cate">
			<?php echo wc_get_product_category_list(get_the_id()); ?>
		</div>
		<?php } ?>
		<?php if('yes' === $settings['wppgpc_tag']){ ?>
		<div class="wppgpc-pro-tag">
			<?php echo wc_get_product_tag_list(get_the_id()); ?>
		</div>
		<?php } ?>
	</div>
	<div class="wppgpc-totalsale-pubdate <?php echo esc_attr($wppgpc_cont_align); ?>">
		<?php if('yes' === $settings['wppgpc_sell']){ ?>
		<div class="wppgpc-total-sale">
			<?php echo esc_html__($wppgpc_sell_label).'<span>' . $product->get_total_sales().'</span>'; ?>
		</div>
		<?php } ?>
		<?php if('yes' === $settings['wppgpc_date']){ ?>
		<div class="wppgpc-pub-date">
			<?php echo date( 'j M Y', strtotime( $product->get_date_created() )); ?>
		</div>
		<?php } ?>
	</div>