<?php


require __DIR__ . '/constants.php';
require __DIR__ . '/app/helpers.php';
require __DIR__ . '/app/Autoloader.php';

add_action('after_setup_theme' , 'app\classes\Initializer::setup');

add_action('init' , 'app\Types\ProductType::addProductType');

add_action('add_meta_boxes' , 'app\MetaBox\ProductMetaBox::addMetaBox');
add_action('save_post' , 'app\MetaBox\ProductMetaBox::saveData');

add_filter('manage_product_posts_columns' , 'app\Types\ProductType::setColumns' , 10 , 2);

add_action('manage_product_posts_custom_column' , 'app\Types\ProductType::addColumns' , 10, 2);