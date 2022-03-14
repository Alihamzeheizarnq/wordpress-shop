<?php


use app\classes\View;

if (!function_exists('dd')) {

    /**
     * @param ...$args
     */
    function dd(...$args)
    {

        foreach ($args as $arg) {
            echo '<pre>' . var_export($arg, true) . '</pre>';
        }

        die;
    }
}

if (! function_exists('view')){
    function view($file , ...$args){
        View::render($file , ...$args);
    }
}
if (! function_exists('image')){
    function image($fileName , $defaultDir = 'images'){
        \app\classes\Asset::image($fileName , $defaultDir);
    }
}