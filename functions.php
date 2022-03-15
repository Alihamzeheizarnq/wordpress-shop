<?php


require __DIR__ . '/constants.php';
require __DIR__ . '/app/helpers.php';
require __DIR__ . '/app/Autoloader.php';

add_action('after_setup_theme' , 'app\classes\Initializer::setup');

add_action('init' , 'app\Types\ProductType::addProductType');

add_action('add_meta_boxes' , 'app\MetaBox\ProductMetaBox::addMetaBox');