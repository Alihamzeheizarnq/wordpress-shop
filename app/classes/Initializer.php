<?php

namespace app\classes;

class Initializer {

	public static function setup () {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('menus');


	}
}