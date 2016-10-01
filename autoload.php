<?php

require "vendor/autoload.php";

/**
 * @author Andreas Bissinger
 */
class ClassAutoloader
{
    public static function load($className)
    {
        $nameParts = explode("\\", $className);
        $pathPrefix = __DIR__ . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR;
        $filePath = $pathPrefix . implode(DIRECTORY_SEPARATOR, $nameParts) . ".php";
        if (file_exists($filePath)) {
            require_once $filePath;
        }
        return false;
    }
}

spl_autoload_register(["ClassAutoloader", "load"]);
