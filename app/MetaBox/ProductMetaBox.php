<?php

namespace app\MetaBox;
class ProductMetaBox {

	/**
	 * @return void
	 */
	public static function addMetaBox () {
		add_meta_box('ahz-product-meta-id', 'قیمت', 'app\MetaBox\ProductMetaBox::renderPrice', 'product');
	}


	/**
	 * @param $post
	 *
	 * @return void
	 */
	public static function renderPrice ($post) {

		$productPrice = get_post_meta($post->ID, 'price_product', true);

		return view('meta-boxes.products.price', compact('productPrice'));
	}

	/**
	 * @param $post_id
	 *
	 * @return void
	 */
	public static function saveData ($post_id) {

		if ( isset($_POST['price_product']) && (int) $_POST['price_product'] > 0 ) {
			update_post_meta($post_id, 'price_product', $_POST['price_product']);
		}
	}
}