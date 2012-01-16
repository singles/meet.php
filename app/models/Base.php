<?php

abstract class Base
{
    public static function fetch()
    {
        return static::$_data;
    }

    public static function fetchOne($id)
    {
        if (array_key_exists($id, static::$_data)) {
            return static::$_data[$id];
        }
        return null;
    }
}
