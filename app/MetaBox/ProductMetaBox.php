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

        $productPrice = get_post_meta($post->ID , 'price_product');
       return view('meta-boxes.products.price' , compact('productPrice'));
	}
}