<?php

class Autoloader
{


    public function __construct()
    {
        spl_autoload_register([$this, 'autoload']);
    }

    /**
     * @param $className
     */
    public function autoload($className)
    {
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

        $fullPath = APP_PATH . DIRECTORY_SEPARATOR . $fileName;

        if (file_exists($fullPath) && is_file($fullPath) && is_readable($fullPath)) {
            include $fullPath;
        }
    }
}

new Autoloader();
