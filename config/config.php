<?php

namespace config;

class Config {
    public static $config = [
        'site_name' => 'http://localhost/pets/pif/admin/',
        'db_host' => 'localhost',
        'db_name' => 'fundexpert',
        'db_user' => 'root',
        'db_password' => '',
        'db_charset' => 'utf8'
    ];

    public static function getConfig() {
        return Config::$config;
    }

}
