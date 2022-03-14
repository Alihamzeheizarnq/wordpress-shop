<?php

namespace app\classes;

class Asset
{


    /**
     * @param string $fileName
     * @param string $defaultDir
     * @param string $type
     */
    public static function css(string $fileName, string $defaultDir = 'css', string $type = 'css')
    {
        self::getFile($defaultDir, $fileName, $type);
    }

    /**
     * @param string $fileName
     * @param string $defaultDir
     * @param string $type
     */
    public static function js(string $fileName, string $defaultDir = 'js', string $type = 'js')
    {
        self::getFile($defaultDir, $fileName, $type);
    }


    /**
     * @param string $fileName
     * @param string $defaultDir
     */
    public static function image(string $fileName, string $defaultDir = 'images')
    {
        echo APP_URI . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR .
            $defaultDir . DIRECTORY_SEPARATOR . $fileName;
    }

    /**
     * @param string $defaultDir
     * @param string $fileName
     * @param string $type
     */
    public static function getFile(string $defaultDir, string $fileName, string $type): void
    {
        echo APP_URI . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR .
            $defaultDir . DIRECTORY_SEPARATOR . $fileName . '.' . $type;
    }
}