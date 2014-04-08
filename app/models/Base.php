<?php

abstract class Base
{
    public static function fetch()
    {
        return static::addPastEventInformation(static::$_data);
    }

    public static function fetchOne($id)
    {
        $data = static::fetch();
        if (array_key_exists($id, $data)) {
            return $data[$id];
        }

        return null;
    }

    private static function addPastEventInformation($events)
    {
        $now = new DateTime();

        return array_map(function($event) use ($now) {
            $eventDate = new DateTime($event['date'] . " " . $event['time']);
            $event['isFutureEvent'] = $eventDate > $now;

            return $event;
        }, $events);
    }
}
