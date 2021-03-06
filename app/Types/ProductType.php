<?php

namespace app\Types;

class ProductType {


	/**
	 * @return void
	 */
	public static function addProductType () {
		$labels = [
			'name'                  => _x('محصولات', 'Post type general name', 'textdomain'),
			'singular_name'         => _x('محصول', 'Post type singular name', 'textdomain'),
			'menu_name'             => _x('محصولات', 'Admin Menu text', 'textdomain'),
			'name_admin_bar'        => _x('محصول', 'Add New on Toolbar', 'textdomain'),
			'add_new'               => __('اضافه کردن', 'textdomain'),
			'add_new_item'          => __(' افزودن محصول جدید ', 'textdomain'),
			'new_item'              => __('جدید محصول', 'textdomain'),
			'edit_item'             => __('ویرایش محصول', 'textdomain'),
			'view_item'             => __('مشاهده محصول', 'textdomain'),
			'all_items'             => __('همه محصولات', 'textdomain'),
			'search_items'          => __('جستجو محصولات', 'textdomain'),
			'parent_item_colon'     => __('والد محصولات:', 'textdomain'),
			'not_found'             => __('مجصولی پیدا نشد', 'textdomain'),
			'not_found_in_trash'    => __('زباله دان خالی میباشد', 'textdomain'),
			'featured_image'        => _x('عکس کاور محصول', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
			'set_featured_image'    => _x('افزودن عکس کاور', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'remove_featured_image' => _x('حذف عکس کاور', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'use_featured_image'    => _x('استفاده از عکس کاور', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'archives'              => _x('محصول ارشیو', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
			'insert_into_item'      => _x('افزودن به محصول', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
			'uploaded_to_this_item' => _x('ویرایش به این محصول', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
			'filter_items_list'     => _x('فیلتر لیست محصولات', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
			'items_list_navigation' => _x('محصولات لیست نویگشن ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
			'items_list'            => _x('محصولات لیست', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => ['slug' => 'product'],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => ['title', 'editor', 'author', 'thumbnail', 'category', 'excerpt', 'comments'],
			'taxonomies'          => ['category'],

		];

		register_post_type('product', $args);
	}


	/**
	 * @param $columns
	 *
	 * @return mixed
	 */
	public static function setColumns ($columns) {

		$columns['price_product'] = 'قیمت';

		return $columns;
	}

	/**
	 * @param $column
	 * @param $post_id
	 *
	 * @return void
	 */
	public static function addColumns ($column, $post_id) {

		if ( $column === 'price_product' ) {
			$price = get_post_meta($post_id, 'price_product', true);
			echo number_format($price);
		}
	}
}