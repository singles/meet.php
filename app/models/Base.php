<?php

abstract class Base
{
    public static function fetch()
    {
        return static::$_data;
    }

    public static function fetchOne($id)
    {
        $data = static::fetch();
        if (array_key_exists($id, $data)) {
            return $data[$id];
        }

        return null;
    }
}
