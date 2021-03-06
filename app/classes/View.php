<?php

namespace app\classes;

class View {
	/**
	 * @param $file
	 * @param ...$args
	 */
	public static function render ($file, $args = null) {
		$file = str_replace('.', DIRECTORY_SEPARATOR, $file) . '.php';

		if ( file_exists(APP_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $file) ) {
			!empty($args) ? extract($args) : null;

			return include APP_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $file;
		}

	}

}