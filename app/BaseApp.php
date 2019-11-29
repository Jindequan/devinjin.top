<?php


namespace App;


class BaseApp
{
    protected static $instances = [];

    public static function getInstance()
    {
        $class = get_called_class();var_dump($class);
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }var_dump(self::$instances);
        return self::$instances[$class];
    }
}