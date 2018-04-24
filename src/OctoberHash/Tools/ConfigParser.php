<?php namespace OctoberHash\Tools;


class ConfigParser
{

    private static $config;


    private static function load()
    {

        if (self::$config) {
            return TRUE;
        }

        return self::$config = require(__DIR__ . '/config.php');
    }


    public static function get($path = '')
    {

        self::load();

        return self::$config[$path];
    }
}