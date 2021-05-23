<?php

class Config {

    protected static $settings = array();

    public function get ($key) {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set ($key, $value) {
        self::$settings[$key] = $value;
    }
}