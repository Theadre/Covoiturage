<?php

/**
 * Class Autoloader
 */
class Autoloader
{

    /**
     * Save autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Include file
     *
     * @param $class string Class name
     */
    static function autoload($class)
    {
        // require '/' . $class . '.php';
        require 'models/' . $class . '.php';
        // // require 'services/' . $class . '.php';
    }

}
