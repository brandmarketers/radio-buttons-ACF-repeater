<?php

	$post_id = get_the_ID();

	$prices = get_post_meta($post_id, 'repeater_prices', true);

	echo '<div class="prices-repeater">';
	for( $i = 0; $i < $prices; $i++ ) {
		$label = get_post_meta( $post_id, 'repeater_prices_' . $i . '_product_label', true );
		$url = get_post_meta( $post_id, 'repeater_prices_' . $i . '_product_url', true );
		$price = get_post_meta( $post_id, 'repeater_prices_' . $i . '_product_prices', true );
		echo '<div class="radio-wrapper">';
		echo '<input type="radio" class="radio-price" name="plans" id="'.str_replace(' ','_',strtolower($label)).'" data-url="'.$url.'"/>';
		echo '<label for="'.str_replace(' ','_',strtolower($label)).'">IDR '.$price.' - '.$label. '</label>';
		echo '</div>';
	}
	echo '<a class="radio-url"><button class="btn btn-primary btn-redirect">Checkout Now</button></a>';
	echo '</div>';
?>